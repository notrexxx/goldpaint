<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * Productos Controller
 *
 * @property \App\Model\Table\ProductosTable $Productos
 */
class ProductosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
    } 

    public function index()
    {   
          
       $this->paginate = [
            'contain' => ['Materials']
        ];
        $productos = $this->paginate($this->Productos);
   


  $producto = $this->Productos->find('list', ['limit' => 200,'keyField' => 'id',
        'valueField' =>'full'])->toArray();
       
       
        $this->set(compact('productos', 'producto'));
        $this->set('_serialize', ['productos', 'producto']);
       


    }

    /**
     * View method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $producto = $this->Productos->get($id, [
            'contain' => ['Ventas','Empresas','Marcas','Materials']
        ]);
        $fotost = TableRegistry::get('Fotos');
        $material_id=$this->Productos->find()->select(['material_id'])->where(['id'=>$id])
        ->toArray();
        $material=$material_id[0]->material_id;
        $fotos=$fotost->find()->where(['material_id'=>$material])->toArray();
        $this->set(compact('producto','fotos'));
        $this->set('_serialize', ['producto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {  if($this->Auth->user('role')=='admin')
        {
             $producto = $this->Productos->newEntity();

        if ($this->request->is('post')) {
            $materials = TableRegistry::get('Materials');
            $material=$this->request->data['material_id'];
            $full=$materials->find()
                     ->select(['full'])
                     ->where(['id'=>$material])
                     ->toArray();
            $this->request->data['full']=$full[0]->full;      
            $producto = $this->Productos->patchEntity($producto, $this->request->data);
            if ($this->Productos->save($producto)) {
                $this->Flash->success(__('The producto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The producto could not be saved. Please, try again.'));
            }
        }
        $materials = $this->Productos->Materials->find('list', ['limit' => 200]);
        $empresas = $this->Productos->Empresas->find('list', ['limit' => 200]);
        $marcas = $this->Productos->Marcas->find('list', ['limit' => 200]);
        $this->set(compact('producto','materials','marcas','empresas'));
        $this->set('_serialize', ['producto']);
        }else{
                 $this->Flash->success(__('Usted no puede ingresar'));
                return $this->redirect(['action' => 'index']);
            }
       
    }

    public function entrada(){
        $producto = $this->Productos->find('list', ['limit' => 200,'keyField' => 'id',
        'valueField' =>'full'])->toArray();
        $this->set(compact('producto'));
        $this->set('_serialize', ['producto']);
         if ($this->request->is('ajax')) {
               $productos = $this->Productos->newEntity();
               $pro=json_decode($this->request->data['id']);
               $n=json_decode($this->request->data['nueva']);
               $exist= $productos->find()
                ->select(['existencia'])
                ->where(['id' => $producto_id])
                ->toArray();
                $existencia= $exist[0]->existencia-intVal($n);
                $nueva_cantidad = $productos->query();
                $nueva_cantidad->update()
                ->set(['existencia' => $existencia])
                ->where(['id' => $producto_id])
                ->execute();
            }
    }


    /**
     * Edit method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {    if($this->Auth->user('role')=='admin'){
        $producto = $this->Productos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $producto = $this->Productos->patchEntity($producto, $this->request->data);
            if ($this->Productos->save($producto)) {
                $this->Flash->success(__('The producto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The producto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('producto'));
        $this->set('_serialize', ['producto']);
    }else{
                 $this->Flash->error(__('Usted no puede ingresar'));
                return $this->redirect(['action' => 'index']);
            }
        
    }

    /**
     * Delete method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    { if($this->Auth->user('role')=='admin'){
        $this->request->allowMethod(['post', 'delete']);
        $producto = $this->Productos->get($id);
        if ($this->Productos->delete($producto)) {
            $this->Flash->success(__('The producto has been deleted.'));
        } else {
            $this->Flash->error(__('The producto could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    } else{
                 $this->Flash->error(__('Usted no puede ingresar'));
                return $this->redirect(['action' => 'index']);
            }

    
}
    
    
}
