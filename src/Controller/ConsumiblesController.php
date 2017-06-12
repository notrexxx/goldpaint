<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Consumibles Controller
 *
 * @property \App\Model\Table\ConsumiblesTable $Consumibles
 */
class ConsumiblesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $consumibles = $this->paginate($this->Consumibles);

        $this->set(compact('consumibles'));
        $this->set('_serialize', ['consumibles']);
    }

    /**
     * View method
     *
     * @param string|null $id Consumible id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consumible = $this->Consumibles->get($id, [
            'contain' => ['Perdida']
        ]);

        $this->set('consumible', $consumible);
        $this->set('_serialize', ['consumible']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consumible = $this->Consumibles->newEntity();
        if ($this->request->is('post')) {
            $consumible = $this->Consumibles->patchEntity($consumible, $this->request->data);
            if ($this->Consumibles->save($consumible)) {
                $this->Flash->success(__('The consumible has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The consumible could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('consumible'));
        $this->set('_serialize', ['consumible']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Consumible id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consumible = $this->Consumibles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consumible = $this->Consumibles->patchEntity($consumible, $this->request->data);
            if ($this->Consumibles->save($consumible)) {
                $this->Flash->success(__('The consumible has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The consumible could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('consumible'));
        $this->set('_serialize', ['consumible']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Consumible id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consumible = $this->Consumibles->get($id);
        if ($this->Consumibles->delete($consumible)) {
            $this->Flash->success(__('The consumible has been deleted.'));
        } else {
            $this->Flash->error(__('The consumible could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
