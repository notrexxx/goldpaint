<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vales Controller
 *
 * @property \App\Model\Table\ValesTable $Vales
 */
class ValesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $vales = $this->paginate($this->Vales);

        $this->set(compact('vales'));
        $this->set('_serialize', ['vales']);
    }

    /**
     * View method
     *
     * @param string|null $id Vale id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vale = $this->Vales->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('vale', $vale);
        $this->set('_serialize', ['vale']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vale = $this->Vales->newEntity();
        if ($this->request->is('post')) {
            $tecnico=$this->request->data['user_id'];
            

            $t=intval($tecnico);
            $nombre= $this->Vales->Users->find()->where(['id' => $t])->toArray();
            $nombret=$nombre[0]->nombre;

            $this->request->data['nombre']=$nombret;
            $vale = $this->Vales->patchEntity($vale, $this->request->data);
            if ($this->Vales->save($vale)) {
                $this->Flash->success(__('The vale has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vale could not be saved. Please, try again.'));
            }
        }
        $users = $this->Vales->Users->find('list', ['limit' => 200])->where(['role' => 'tecnico']);
        $this->set(compact('vale', 'users'));
        $this->set('_serialize', ['vale']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vale id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vale = $this->Vales->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vale = $this->Vales->patchEntity($vale, $this->request->data);
            if ($this->Vales->save($vale)) {
                $this->Flash->success(__('The vale has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vale could not be saved. Please, try again.'));
            }
        }
        $users = $this->Vales->Users->find('list', ['limit' => 200]);
        $this->set(compact('vale', 'users'));
        $this->set('_serialize', ['vale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vale id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vale = $this->Vales->get($id);
        if ($this->Vales->delete($vale)) {
            $this->Flash->success(__('The vale has been deleted.'));
        } else {
            $this->Flash->error(__('The vale could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
