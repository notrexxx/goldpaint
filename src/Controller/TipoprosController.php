<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * Tipopros Controller
 *
 * @property \App\Model\Table\TipoprosTable $Tipopros
 */
class TipoprosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Subcategorias']
        ];
        $tipopros = $this->paginate($this->Tipopros);

        $this->set(compact('tipopros'));
        $this->set('_serialize', ['tipopros']);
    }

     public function consultanombre()
    {   $subcategorias = TableRegistry::get('Subcategorias');
        $tipopros = $this->paginate($this->Tipopros);
        $nombre=$subcategorias->find('list', ['limit' => 200,'keyField' => 'id',
        'valueField' =>'nombre'])->toArray();
        
        $this->set(compact('tipopros','nombre'));
        $this->set('_serialize', ['tipopros']);
    }

     public function indexnombre()
    {   $t=$this->request->data["nombre"];
        $this->paginate = [
            'contain' => ['Subcategorias']
        ];
        $tipopros = $this->paginate($this->Tipopros->find()->where(['subcategoria_id'=>$t]));

        $this->set(compact('tipopros'));
        $this->set('_serialize', ['tipopros']);
    }
    /**
     * View method
     *
     * @param string|null $id Tipopro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipopro = $this->Tipopros->get($id, [
            'contain' => ['Subcategorias', 'Marcapros']
        ]);

        $this->set('tipopro', $tipopro);
        $this->set('_serialize', ['tipopro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipopro = $this->Tipopros->newEntity();
        if ($this->request->is('post')) {

            $tipopro = $this->Tipopros->patchEntity($tipopro, $this->request->data);
            $n=$this->request->data['numerador'];
            $this->request->data['cantidad']=$this->request->data['numerador'];
            $subc=array();
            for ($i=1; $i <=$n ; $i++) {
               
                array_push( $subc, $this->request->data['tipo'.$i.""]);
            }
            $subcategoria_id=$this->request->data['subcategoria_id'];
               for ($i=0; $i <$n ; $i++) { 
                   $sub=['tipo'=>$subc[$i],'subcategoria_id'=>$subcategoria_id];
                   $tipopro= $this->Tipopros->newEntity($sub, ['validate' => true]);
                  $this->Tipopros->save($tipopro);
               }
            if ($this->Tipopros->save($tipopro)) {
                $this->Flash->success(__('The tipopro has been saved.'));
                return $this->redirect(['action' => 'consultanombre']);
            } else {
                $this->Flash->error(__('The tipopro could not be saved. Please, try again.'));
            }
        }
        $subcategorias = $this->Tipopros->Subcategorias->find('list', ['limit' => 200,'keyField' => 'id',
        'valueField' =>'nombre'])->toArray();
        $this->set(compact('tipopro', 'subcategorias'));
        $this->set('_serialize', ['tipopro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipopro id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipopro = $this->Tipopros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipopro = $this->Tipopros->patchEntity($tipopro, $this->request->data);
            if ($this->Tipopros->save($tipopro)) {
                $this->Flash->success(__('The tipopro has been saved.'));
                return $this->redirect(['action' => 'consultanombre']);
            } else {
                $this->Flash->error(__('The tipopro could not be saved. Please, try again.'));
            }
        }
        $subcategorias = $this->Tipopros->Subcategorias->find('list', ['limit' => 200]);
        $this->set(compact('tipopro', 'subcategorias'));
        $this->set('_serialize', ['tipopro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipopro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipopro = $this->Tipopros->get($id);
        if ($this->Tipopros->delete($tipopro)) {
            $this->Flash->success(__('The tipopro has been deleted.'));
        } else {
            $this->Flash->error(__('The tipopro could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'consultanombre']);
    }
}
