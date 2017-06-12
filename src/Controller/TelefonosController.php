<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Telefonos Controller
 *
 * @property \App\Model\Table\TelefonosTable $Telefonos
 */
class TelefonosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes']
        ];
        $telefonos = $this->paginate($this->Telefonos);

        $this->set(compact('telefonos'));
        $this->set('_serialize', ['telefonos']);
    }

    /**
     * View method
     *
     * @param string|null $id Telefono id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $telefono = $this->Telefonos->get($id, [
            'contain' => ['Clientes']
        ]);

        $this->set('telefono', $telefono);
        $this->set('_serialize', ['telefono']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $telefono = $this->Telefonos->newEntity();
        if ($this->request->is('post')) {
            $telefono = $this->Telefonos->patchEntity($telefono, $this->request->data);
            if ($this->Telefonos->save($telefono)) {
                $this->Flash->success(__('The telefono has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The telefono could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Telefonos->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('telefono', 'clientes'));
        $this->set('_serialize', ['telefono']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Telefono id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $telefono = $this->Telefonos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $telefono = $this->Telefonos->patchEntity($telefono, $this->request->data);
            if ($this->Telefonos->save($telefono)) {
                $this->Flash->success(__('The telefono has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The telefono could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Telefonos->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('telefono', 'clientes'));
        $this->set('_serialize', ['telefono']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Telefono id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $telefono = $this->Telefonos->get($id);
        if ($this->Telefonos->delete($telefono)) {
            $this->Flash->success(__('The telefono has been deleted.'));
        } else {
            $this->Flash->error(__('The telefono could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
