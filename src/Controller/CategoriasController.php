<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * Categorias Controller
 *
 * @property \App\Model\Table\CategoriasTable $Categorias
 */
class CategoriasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $categorias = $this->paginate($this->Categorias);

        $this->set(compact('categorias'));
        $this->set('_serialize', ['categorias']);
    }


     public function consultanombre()
    {
        $categorias = $this->paginate($this->Categorias);
        $nombre=$this->Categorias->find('list', ['limit' => 200,'keyField' => 'nombre',
        'valueField' =>'nombre'])->toArray();
        
        $this->set(compact('categorias','nombre'));
        $this->set('_serialize', ['categorias']);
    }

     public function indexnombre()
    {   $t=$this->request->data["nombre"];
        
        $categorias = $this->paginate($this->Categorias->find()->where(['nombre'=>$t]));

        $this->set(compact('categorias'));
        $this->set('_serialize', ['categorias']);
    }

    /**
     * View method
     *
     * @param string|null $id Categoria id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoria = $this->Categorias->get($id, [
            'contain' => ['Subcategorias']
        ]);

        $this->set('categoria', $categoria);
        $this->set('_serialize', ['categoria']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoria = $this->Categorias->newEntity();
        if ($this->request->is('post')) {
            $subcategorias = TableRegistry::get('Subcategorias');
            $categoria = $this->Categorias->patchEntity($categoria, $this->request->data);
            $n=$this->request->data['numerador'];
            $this->request->data['cantidad']=$this->request->data['numerador'];
            $subc=array();
            for ($i=1; $i <=$n ; $i++) {
               
                array_push( $subc, $this->request->data['subc'.$i.""]);
            }
            if ($this->Categorias->save($categoria)) {
               $categoria_id=$categoria->id;
               for ($i=0; $i <$n ; $i++) { 
                   $sub=['nombre'=>$subc[$i],'categoria_id'=>$categoria_id];
                   $subcategoria= $subcategorias->newEntity($sub, ['validate' => true]);
                   $subcategorias->save($subcategoria);
               }
               
                $this->Flash->success(__('The categoria has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The categoria could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('categoria'));
        $this->set('_serialize', ['categoria']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categoria id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoria = $this->Categorias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoria = $this->Categorias->patchEntity($categoria, $this->request->data);
            if ($this->Categorias->save($categoria)) {
                $this->Flash->success(__('The categoria has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The categoria could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('categoria'));
        $this->set('_serialize', ['categoria']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categoria id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoria = $this->Categorias->get($id);
        if ($this->Categorias->delete($categoria)) {
            $this->Flash->success(__('The categoria has been deleted.'));
        } else {
            $this->Flash->error(__('The categoria could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
