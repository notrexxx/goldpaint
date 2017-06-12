<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * Materials Controller
 *
 * @property \App\Model\Table\MaterialsTable $Materials
 */
class MaterialsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $materials = $this->paginate($this->Materials);

        $this->set(compact('materials'));
        $this->set('_serialize', ['materials']);
    }
       public function consultanombre()
    {   $marcapros = TableRegistry::get('Marcapros');
        $materials = $this->paginate($this->Materials);
        $nombre=$marcapros->find('list', ['limit' => 200,'keyField' => 'id',
        'valueField' =>'marc'])->toArray();
        
        $this->set(compact('materials','nombre'));
        $this->set('_serialize', ['materials']);
    }

     public function indexnombre()
    {   $t=$this->request->data["nombre"];
        $this->paginate = [
            'contain' => ['Marcapros']
        ];
        $materials = $this->paginate($this->Materials->find()->where(['marcapro_id'=>$t]));

        $this->set(compact('materials'));
        $this->set('_serialize', ['materials']);
    }
    /**
     * View method
     *
     * @param string|null $id Material id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $material = $this->Materials->get($id, [
            'contain' => ['Fotos']
        ]);
        $fotos = TableRegistry::get('Fotos');
        $fotografia=$fotos->find()->where(['material_id'=>$id])->toArray();
        $this->set(compact('material', 'fotografia'));
        $this->set('_serialize', ['material']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
       $material = $this->Materials->newEntity();
        if ($this->request->is('post')) {
            $codigo=$this->request->data['codigo'];
            $modelo=$this->request->data['modelo'];
            $co=strval($codigo);
            $st=" del producto ";
            $full=$modelo.$st.$co;
            $this->request->data['full']=$full;
            $material = $this->Materials->patchEntity($material, $this->request->data);
            $fotos = TableRegistry::get('Fotos');
            $n=$this->request->data['numerador'];
            $subc=array();
           
            for ($i=1; $i <=$n ; $i++) {
               
                array_push( $subc, $this->request->data['photo'.$i.""]);
            }
            if ($this->Materials->save($material)) {
                for ($i=0; $i <$n ; $i++) { 
                    
                        $f=['photo'=>$subc[$i],'material_id'=>$material->id];
                        $foto= $fotos->newEntity($f, ['validate' => true]);
                        $fotos->save($foto);
                   
               }
              
                $this->Flash->success(__('The material has been saved.'));
                return $this->redirect(['action' => 'consultanombre']);
            } else {
                $this->Flash->error(__('The material could not be saved. Please, try again.'));
            }
        }
        $marcas = $this->Materials->Marcapros->find('list', ['limit' => 200])->toArray();
        $this->set(compact('material','marcas'));
        $this->set('_serialize', ['material']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Material id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $material = $this->Materials->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $codigo=$this->request->data['codigo'];
            $modelo=$this->request->data['modelo'];
            $co=strval($codigo);
            $st=" del producto ";
            $full=$modelo.$st.$co;
            $this->request->data['full']=$full;
            $material = $this->Materials->patchEntity($material, $this->request->data);
            if ($this->Materials->save($material)) {
                $this->Flash->success(__('The material has been saved.'));
                return $this->redirect(['action' => 'consultanombre']);
            } else {
                $this->Flash->error(__('The material could not be saved. Please, try again.'));
            }
        }
        $marcas = $this->Materials->Marcapros->find('list', ['limit' => 200])->toArray();
        $this->set(compact('material','marcas'));
        $this->set('_serialize', ['material']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Material id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $material = $this->Materials->get($id);
        if ($this->Materials->delete($material)) {
            $this->Flash->success(__('The material has been deleted.'));
        } else {
            $this->Flash->error(__('The material could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'consultanombre']);
    }
}
