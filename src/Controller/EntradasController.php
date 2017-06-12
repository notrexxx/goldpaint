<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * Entradas Controller
 *
 * @property \App\Model\Table\EntradasTable $Entradas
 */
class EntradasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Productos']
        ];
        $entradas = $this->paginate($this->Entradas);

        $this->set(compact('entradas'));
        $this->set('_serialize', ['entradas']);
    }

    /**
     * View method
     *
     * @param string|null $id Entrada id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entrada = $this->Entradas->get($id, [
            'contain' => ['Productos']
        ]);

        $this->set('entrada', $entrada);
        $this->set('_serialize', ['entrada']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entrada = $this->Entradas->newEntity();
        if ($this->request->is('post')) {
            $productos = TableRegistry::get('Productos');
            $producto_id=$this->request->data['producto_id'];
               $n=$this->request->data['nueva_cant'];
               $exist= $productos->find()
                ->select(['existencia'])
                ->where(['id' => $producto_id])
                ->toArray();
                $this->request->data['vieja_cant']=$exist[0]->existencia;
                $existencia= $exist[0]->existencia+intVal($n);
                $this->request->data['en_inventario']=$existencia;
                $nueva_cantidad = $productos->query();
                $nueva_cantidad->update()
                ->set(['existencia' => $existencia])
                ->where(['id' => $producto_id])
                ->execute();
            $entrada = $this->Entradas->patchEntity($entrada, $this->request->data);
            if ($this->Entradas->save($entrada)) {
                $this->Flash->success(__('The entrada has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entrada could not be saved. Please, try again.'));
            }
        }
        $productos = $this->Entradas->Productos->find('list', ['limit' => 200]);
        $this->set(compact('entrada', 'productos'));
        $this->set('_serialize', ['entrada']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Entrada id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entrada = $this->Entradas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entrada = $this->Entradas->patchEntity($entrada, $this->request->data);
            if ($this->Entradas->save($entrada)) {
                $this->Flash->success(__('The entrada has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entrada could not be saved. Please, try again.'));
            }
        }
        $productos = $this->Entradas->Productos->find('list', ['limit' => 200]);
        $this->set(compact('entrada', 'productos'));
        $this->set('_serialize', ['entrada']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Entrada id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entrada = $this->Entradas->get($id);
        if ($this->Entradas->delete($entrada)) {
            $this->Flash->success(__('The entrada has been deleted.'));
        } else {
            $this->Flash->error(__('The entrada could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
