<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes
 */
class ClientesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
   
    

    public function index()
    {
        $clientes = $this->paginate($this->Clientes);
        $this->paginate = [
            'contain' => ['Telefonos']
        ];
        $this->set(compact('clientes'));
        $this->set('_serialize', ['clientes']);
    }

    /**
     * View method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => ['Ventatotales','Telefonos']
        ]);
       
        $this->set('cliente', $cliente);
        $this->set('_serialize', ['cliente']);
        if ($this->request->is('ajax')) {
            $cliente_id=$id;
             $unions = TableRegistry::get('Unions');
            $telefonos = TableRegistry::get('Telefonos');
            $validador=json_decode($this->request->data['validador']);
            if($validador==1)
            {
                $numero=json_decode($this->request->data['numero']);
                $otronumero=json_decode($this->request->data['numeroo']);
                
                $nuevo=$telefonos->query();
                $nuevo->update()
                ->set(['numero' => $numero,'otronumero'=>$otronumero])
                ->where(['cliente_id' => $cliente_id])
                ->execute();
                if($nuevo->update())
                {
                    $this->Flash->success(__('Nuevo telefono agregado al cliente'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('El nuevo numero de telefono no pudo ser agregado'));
                }
                
                if($telefonos->save($telefono))
                {
                    $this->Flash->success(__('Nuevo telefono agregado al cliente'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('El nuevo numero de telefono no pudo ser agregado'));
                }
                }
                }
            }
    

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {   if($this->Auth->user('role')=='admin'){
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('post')) {
            $nombre=$this->request->data['nombre'];
            $cedula=$this->request->data['cedula'];
            $ci=strval($cedula);
            $st=" dueño/a de la CI: ";
            $full=$nombre.$st.$ci;
            $this->request->data['full']=$full;
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
            $numero=$this->request->data['numero'];
            $otronumero=$this->request->data['otronumero'];
           
            $telefonos = TableRegistry::get('Telefonos');
            if ($this->Clientes->save($cliente)) {
               $cliente_id=$cliente->id;
               $tlf=['numero'=>$numero,'otronumero'=>$otronumero,'cliente_id'=>$cliente_id];
               $telefono= $telefonos->newEntity($tlf, ['validate' => false]);
               $telefonos->save($telefono);
             
                $this->Flash->success(__('The cliente has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cliente could not be saved. Please, try again.'));
            }
        }
        
        $this->set(compact('cliente'));
        $this->set('_serialize', ['cliente']);
        }else{
                 $this->Flash->error(__('Usted no puede ingresar'));
                return $this->redirect(['action' => 'index']);
            }
    }

    public function add2()
    {
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('ajax')) {
            $nombre=$this->request->data['nombre'];
            $cedula=$this->request->data['cedula'];
            $ci=strval($cedula);
            $st=" dueño/a de la CI: ";
            $full=$nombre.$st.$ci;
            $this->request->data['full']=$full;
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
            $numero=$this->request->data['numero'];
            $otronumero=$this->request->data['otronumero'];
           
           
            $telefonos = TableRegistry::get('Telefonos');
            if ($this->Clientes->save($cliente)) {
               $cliente_id=$cliente->id;
               $tlf=['numero'=>$numero,'otronumero'=>$otronumero,'cliente_id'=>$cliente_id];
               $telefono= $telefonos->newEntity($tlf, ['validate' => false]);
               $telefonos->save($telefono);
               
              
                $this->Flash->success(__('The cliente has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cliente could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cliente'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('The cliente has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cliente could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cliente'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cliente = $this->Clientes->get($id);
        if ($this->Clientes->delete($cliente)) {
            $this->Flash->success(__('The cliente has been deleted.'));
        } else {
            $this->Flash->error(__('The cliente could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
