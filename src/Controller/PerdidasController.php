<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * Perdidas Controller
 *
 * @property \App\Model\Table\PerdidasTable $Perdidas
 */
class PerdidasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consumibles']
        ];
        $perdidas = $this->paginate($this->Perdidas);

        $this->set(compact('perdidas'));
        $this->set('_serialize', ['perdidas']);
    }

    /**
     * View method
     *
     * @param string|null $id Perdida id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $perdida = $this->Perdidas->get($id, [
            'contain' => ['Consumibles']
        ]);

        $this->set('perdida', $perdida);
        $this->set('_serialize', ['perdida']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $perdida = $this->Perdidas->newEntity();
        if ($this->request->is('post')) {
            $consumible_id=$this->request->data['consumible_id'];
            $consumibles = TableRegistry::get('Consumibles');
            $consumible=$consumibles->find()
                   ->select(['consu'])
                   ->where(['id'=>$consumible_id])
                   ->toArray(); 
            $this->request->data['nombre']=$consumible[0]->consu;       
            $perdida = $this->Perdidas->patchEntity($perdida, $this->request->data);
            if ($this->Perdidas->save($perdida)) {
                $this->Flash->success(__('The perdida has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The perdida could not be saved. Please, try again.'));
            }
        }
        $consumibles = $this->Perdidas->Consumibles->find('list', ['limit' => 200]);
        $this->set(compact('perdida', 'consumibles'));
        $this->set('_serialize', ['perdida']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Perdida id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $perdida = $this->Perdidas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $perdida = $this->Perdidas->patchEntity($perdida, $this->request->data);
            if ($this->Perdidas->save($perdida)) {
                $this->Flash->success(__('The perdida has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The perdida could not be saved. Please, try again.'));
            }
        }
        $consumibles = $this->Perdidas->Consumibles->find('list', ['limit' => 200]);
        $this->set(compact('perdida', 'consumibles'));
        $this->set('_serialize', ['perdida']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Perdida id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $perdida = $this->Perdidas->get($id);
        if ($this->Perdidas->delete($perdida)) {
            $this->Flash->success(__('The perdida has been deleted.'));
        } else {
            $this->Flash->error(__('The perdida could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
