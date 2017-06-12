<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;

/**
 * Fotos Controller
 *
 * @property \App\Model\Table\FotosTable $Fotos
 */
class FotosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Materials']
        ];
        $fotos = $this->paginate($this->Fotos);

        $this->set(compact('fotos'));
        $this->set('_serialize', ['fotos']);
    }

    public function consultanombre()
    {   $materials = TableRegistry::get('Materials');
        $fotos = $this->paginate($this->Fotos);
        $nombre=$materials->find('list', ['limit' => 200,'keyField' => 'id',
        'valueField' =>'full'])->toArray();
        
        $this->set(compact('fotos','nombre'));
        $this->set('_serialize', ['fotos']);
    }

    public function indexnombre()
    {   $t=$this->request->data["nombre"];
        $this->paginate = [
            'contain' => ['Materials']
        ];
        $fotos = $this->paginate($this->Fotos->find()->where(['material_id'=>$t]));

        $this->set(compact('fotos'));
        $this->set('_serialize', ['fotos']);
    }

    /**
     * View method
     *
     * @param string|null $id Foto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $foto = $this->Fotos->get($id, [
            'contain' => ['Materials']
        ]);

        $this->set('foto', $foto);
        $this->set('_serialize', ['foto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $foto = $this->Fotos->newEntity();
        if ($this->request->is('post')) {
            $foto = $this->Fotos->patchEntity($foto, $this->request->data);
            if ($this->Fotos->save($foto)) {
                $this->Flash->success(__('The foto has been saved.'));
                return $this->redirect(['action' => 'consultanombre']);
            } else {
                $this->Flash->error(__('The foto could not be saved. Please, try again.'));
            }
        }
        $materials = $this->Fotos->Materials->find('list', ['limit' => 200]);
        $this->set(compact('foto', 'materials'));
        $this->set('_serialize', ['foto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Foto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $foto = $this->Fotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $foto = $this->Fotos->patchEntity($foto, $this->request->data);
            if ($this->Fotos->save($foto)) {
                $this->Flash->success(__('The foto has been saved.'));
                return $this->redirect(['action' => 'consultanombre']);
            } else {
                $this->Flash->error(__('The foto could not be saved. Please, try again.'));
            }
        }
        $materials = $this->Fotos->Materials->find('list', ['limit' => 200]);
        $this->set(compact('foto', 'materials'));
        $this->set('_serialize', ['foto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Foto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $foto = $this->Fotos->get($id);
        if ($this->Fotos->delete($foto)) {
            $this->Flash->success(__('The foto has been deleted.'));
        } else {
            $this->Flash->error(__('The foto could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'consultanombre']);
    }
}
