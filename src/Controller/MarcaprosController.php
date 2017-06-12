<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * Marcapros Controller
 *
 * @property \App\Model\Table\MarcaprosTable $Marcapros
 */
class MarcaprosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tipopros']
        ];
        $marcapros = $this->paginate($this->Marcapros);

        $this->set(compact('marcapros'));
        $this->set('_serialize', ['marcapros']);
    }

      public function consultanombre()
    {   $tipopros = TableRegistry::get('Tipopros');
        $marcapro = $this->paginate($this->Marcapros);
        $nombre=$tipopros->find('list', ['limit' => 200,'keyField' => 'id',
        'valueField' =>'tipo'])->toArray();
        
        $this->set(compact('marcapro','nombre'));
        $this->set('_serialize', ['marcapro']);
    }

     public function indexnombre()
    {   $t=$this->request->data["nombre"];
        $this->paginate = [
            'contain' => ['Tipopros']
        ];
        $marcapros = $this->paginate($this->Marcapros->find()->where(['tipopro_id'=>$t]));

        $this->set(compact('marcapros'));
        $this->set('_serialize', ['marcapros']);
    }
    /**
     * View method
     *
     * @param string|null $id Marcapro id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $marcapro = $this->Marcapros->get($id, [
            'contain' => ['Tipopros']
        ]);

        $this->set('marcapro', $marcapro);
        $this->set('_serialize', ['marcapro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $marcapro = $this->Marcapros->newEntity();
        if ($this->request->is('post')) {
           $marcapro = $this->Marcapros->patchEntity($marcapro, $this->request->data);
            $n=$this->request->data['numerador'];
            $subc=array();
           //$tipopro_id=$this->request->data['tipopro_id'];
            for ($i=1; $i <=$n ; $i++) {
               
                array_push( $subc, $this->request->data['marc'.$i.""]);
            }
           
            for ($i=0; $i <$n ; $i++) { 
                   $ma=['marc'=>$subc[$i],'tipopro_id'=>(int)$this->request->data['tipopro_id']];
                   $marcapro= $this->Marcapros->newEntity($ma, ['validate' => true]);
                   $this->Marcapros->save($marcapro);
               }
            if ($this->Marcapros->save($marcapro)) {
                $this->Flash->success(__('The marcapro has been saved.'));
                return $this->redirect(['action' => 'consultanombre']);
            } else {
                $this->Flash->error(__('The marcapro could not be saved. Please, try again.'));
            }
        }
         //$tipopros = $this->Marcapros->Tipopros->find('list', ['limit' => 200,'keyField' => 'id',
        //'valueField' =>'tipo'])->toArray();
        $tipopros = $this->Marcapros->Tipopros->find('list', ['limit' => 200]);
        $this->set(compact('marcapro', 'tipopros'));
        $this->set('_serialize', ['marcapro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Marcapro id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $marcapro = $this->Marcapros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $marcapro = $this->Marcapros->patchEntity($marcapro, $this->request->data);
            if ($this->Marcapros->save($marcapro)) {
                $this->Flash->success(__('The marcapro has been saved.'));
                return $this->redirect(['action' => 'consultanombre']);
            } else {
                $this->Flash->error(__('The marcapro could not be saved. Please, try again.'));
            }
        }
        $tipopros = $this->Marcapros->Tipopros->find('list', ['limit' => 200]);
        $this->set(compact('marcapro', 'tipopros'));
        $this->set('_serialize', ['marcapro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Marcapro id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $marcapro = $this->Marcapros->get($id);
        if ($this->Marcapros->delete($marcapro)) {
            $this->Flash->success(__('The marcapro has been deleted.'));
        } else {
            $this->Flash->error(__('The marcapro could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'consultanombre']);
    }
}
