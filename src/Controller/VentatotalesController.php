<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;


/**
 * Ventatotales Controller
 *
 * @property \App\Model\Table\VentatotalesTable $Ventatotales
 */
class VentatotalesController extends AppController
{
     public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
    }   
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {   
        $hoy = getdate();
        $month=$hoy['mon'];
        $day=$hoy['mday'];
        $year=$hoy['year'];
        $this->paginate = [
            'contain' => ['Clientes','Items'=>['Productos']]
        ];
        $ventatotales = $this->paginate($this->Ventatotales->find()->where(['espera'=>0,'MONTH(Ventatotales.created)'=>$month,'DAY(Ventatotales.created)'=>$day,'YEAR(Ventatotales.created)'=>$year]));
        $cantidad=count($ventatotales);

        $this->set(compact('ventatotales','cantidad'));
        $this->set('_serialize', ['ventatotales']);

        $perdidas = TableRegistry::get('Perdidas'); 
        $perdida=$perdidas->find();
        $perdida->select(['nombre','gasto'])->where(['MONTH(Perdidas.created)'=>$month,'DAY(Perdidas.created)'=>$day,'YEAR(Perdidas.created)'=>$year]);
        $gastototal=$perdidas->find();
        $gastototal->select([
        'gastototal' => $gastototal->func()->sum('gasto')])
        ->where(['MONTH(Perdidas.created)'=>$month,'DAY(Perdidas.created)'=>$day,'YEAR(Perdidas.created)'=>$year])
        ->toArray();

        $vales = TableRegistry::get('Vales'); 
        $vale=$vales->find();
        $vale->select(['nombre','valor'])->where(['MONTH(Vales.created)'=>$month,'DAY(Vales.created)'=>$day,'YEAR(Vales.created)'=>$year]);
        $valetotal=$vales->find();
        $valetotal->select([
        'valetotal' => $valetotal->func()->sum('valor')])
        ->where(['MONTH(Vales.created)'=>$month,'DAY(Vales.created)'=>$day,'YEAR(Vales.created)'=>$year])
        ->toArray();


        $efectivo=$this->Ventatotales->find();
        $efectivo->select([
        'efectivo' => $efectivo->func()->sum('total')])
        ->where(['espera'=>0,'MONTH(Ventatotales.created)'=>$month,'DAY(Ventatotales.created)'=>$day,'YEAR(Ventatotales.created)'=>$year,'tipopago'=>'efectivo'])
        ->toArray();
        $debito=$this->Ventatotales->find();
        $debito->select([
        'debito' => $debito->func()->sum('total')])
        ->where(['espera'=>0,'MONTH(Ventatotales.created)'=>$month,'DAY(Ventatotales.created)'=>$day,'YEAR(Ventatotales.created)'=>$year,'tipopago'=>'debito'])
        ->toArray();
        $credito=$this->Ventatotales->find();
        $credito->select([
        'credito' => $credito->func()->sum('total')])
        ->where(['espera'=>0,'MONTH(Ventatotales.created)'=>$month,'DAY(Ventatotales.created)'=>$day,'YEAR(Ventatotales.created)'=>$year,'tipopago'=>'credito'])
        ->toArray();
        $totalT=$this->Ventatotales->find();
        $totalT->select([
        'totalT' => $totalT->func()->sum('total')])
        ->where(['espera'=>0,'MONTH(Ventatotales.created)'=>$month,'DAY(Ventatotales.created)'=>$day,'YEAR(Ventatotales.created)'=>$year])
        ->toArray();
        $cajas=TableRegistry::get('Cajas');
        $caja=$cajas->find();
        $anterior=$cajas->find();
        $anterior->select(['max' => $caja->func()->max('id')])->toArray();
        $max=$anterior->select(['max' => $caja->func()->max('id')]);
        $caja->select(['numero'])->where(['id'=>$max])->toArray();
        $this->set(compact('totalT','efectivo','debito','credito','perdida','gastototal','caja','vale','valetotal'));
        $this->set('_serialize', ['totalT','efectivo','debito','credito','perdida','gastototal','caja','vale','valetotal']);
    }

     public function indexenespera()
    {
        $this->paginate = [
            'contain' => ['Clientes']
        ];
        $ventatotales = $this->paginate($this->Ventatotales->find()->where(['espera'=>1]));

        $this->set(compact('ventatotales'));
        $this->set('_serialize', ['ventatotales']);
    }
    /**
     * View method
     *
     * @param string|null $id Ventatotale id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ventatotale = $this->Ventatotales->get($id, [
            'contain' => ['Clientes','Items'=>['Productos']]
        ]);

        $this->set('ventatotale', $ventatotale);
        $this->set('_serialize', ['ventatotale']);
    }

    public function viewenespera($id = null)
    {
        $vent=$this->Ventatotales->get($id);
        if(empty($vent)){
          throw new NotFoundException();
          return $this->redirect(['controller'=>'ventas','action' => 'index']);
        }
        $ventatotale = $this->Ventatotales->get($id, [
            'contain' => ['Clientes','Items']
        ]);
        
          $this->set('ventatotale', $ventatotale);
          $this->set('_serialize', ['ventatotale']);

       
          if ($this->request->is('ajax')) {
            if($this->request->data["enviado"]==2)
            {
              $ventasTable = TableRegistry::get('Ventas');
               $itemsTable = TableRegistry::get('Items');
               $item=$itemsTable->find()->where(['ventatotale_id'=>$id])->toArray();
               for ($i=0; $i <count($item) ; $i++) { 
                   $producto_id=$item[$i]->producto_id;
                   $precio_u=$item[$i]->precio_u;
                   $cantidad=$item[$i]->cantidad;
                   $subtotal=$item[$i]->subtotal;
                   $descuento=$item[$i]->descuento;
                    $valor=$item[$i]->valor;
                    $rest=$item[$i]->rest;

                   $ventas = $ventasTable->newEntity();
                   $ventas->producto_id=$producto_id;
                   $ventas->precio_u=$precio_u;
                   $ventas->cantidad=$cantidad;
                   $ventas->subtotal=$subtotal;
                   $ventas->descuento=$descuento;
                   $ventas->valor=$valor;
                   $ventas->rest=$rest;
                  
                   
                   $ventasTable->save($ventas);

               }
             
              $ventat = $this->Ventatotales->get($id);
              $this->Ventatotales->delete($ventat);
              $viejo=$itemsTable->find()->where(['ventatotale_id'=>$id]);
              $itemsTable->delete($viejo);
            }
               
        }
        
    }

   

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
       
       $ventatotale = $this->Ventatotales->newEntity();
       $this->loadModel('Ventas');
       $ventaitem = $this->Ventas->find()->all();

       if(count($ventaitem)>0)
       {
        $total=$this->Ventas->find();
        $total->select([
        'total' => $total->func()->sum('subtotal')])
        ->toArray();
        $this->set(compact('ventaitem','total'));
        $this->set('_serialize', ['ventaitem','total']);

       }else{
            return $this->redirect(['controller'=>'productos','action' => 'index']);
       }

        if ($this->request->is('ajax')) {
          
            $valort=$this->request->data['valort'];
            $total2=$this->request->data['total2'];
            if($valort>0){
              $restt=$total2-$valort;
              $this->request->data['restt']=$restt;
              $this->request->data['total']=$total2-$restt;
            }else{
              $restt=0;
              $this->request->data['restt']=$restt;
              $this->request->data['total']=$total2;
            }
            
            $ventatotale = $this->Ventatotales->patchEntity($ventatotale, $this->request->data);
          
            
            if ($this->Ventatotales->save($ventatotale)) {
                $ventatotale_id=$ventatotale->id;
                $vi=$ventaitem->toArray();
                $itemsTable = TableRegistry::get('Items');
                $productos = TableRegistry::get('Productos');
                for ($i=0; $i <count($vi) ; $i++) { 
                   $producto_id=$vi[$i]->producto_id;
                   $precio_u=$vi[$i]->precio_u;
                   $cantidad=$vi[$i]->cantidad;
                   $subtotal=$vi[$i]->subtotal;
                   $descuento=$vi[$i]->descuento;
                   $valor=$vi[$i]->valor;
                   $rest=$vi[$i]->rest;
                   $item = $itemsTable->newEntity();
                   $item->ventatotale_id=$ventatotale_id;
                   $item->producto_id=$producto_id;
                   $item->precio_u=$precio_u;
                   $item->cantidad=$cantidad;
                   $item->subtotal=$subtotal;
                   $item->descuento=$descuento;
                   $item->valor=$valor;
                   $item->rest=$rest;
                   
                   $itemsTable->save($item);
                $instal=$productos->find()
                ->select(['instalacion'])
                ->where(['id' => $vi[$i]->producto_id])
                ->toArray();
               
                if($instal[0]->instalacion==0){
                    $exist= $productos->find()
                    ->select(['existencia'])
                    ->where(['id' => $producto_id])
                    ->toArray();
                    $existencia= $exist[0]->existencia-$cantidad;
                    $nueva_cantidad = $productos->query();
                    $nueva_cantidad->update()
                    ->set(['existencia' => $existencia])
                    ->where(['id' => $producto_id])
                    ->execute();
                }
                   $venta = $this->Ventas->get($vi[$i]->id);
                   $this->Ventas->delete($venta);
              
               
                }
                $this->Flash->set(__('La venta ha sido guardada con exito'),array('params'=>array('class'=>'alert alert-success')));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ventatotale could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Ventatotales->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('ventatotale', 'clientes'));
        $this->set('_serialize', ['ventatotale']);
    }

    public function enespera()
    {

         $ventatotale = $this->Ventatotales->newEntity();
       $this->loadModel('Ventas');
       $ventaitem = $this->Ventas->find()->all();

       if(count($ventaitem)>0)
       {
        $total=$this->Ventas->find();
        $total->select([
        'total' => $total->func()->sum('subtotal')])
        ->toArray();
        $this->set(compact('ventaitem','total'));
        $this->set('_serialize', ['ventaitem','total']);

       }else{
            return $this->redirect(['controller'=>'productos','action' => 'index']);
       }

        if ($this->request->is('ajax')) {
            $ventatotale = $this->Ventatotales->patchEntity($ventatotale, $this->request->data);
            if ($this->Ventatotales->save($ventatotale)) {
                $ventatotale_id=$ventatotale->id;
                $vi=$ventaitem->toArray();
                $itemsTable = TableRegistry::get('Items');
                $productos = TableRegistry::get('Productos');
                for ($i=0; $i <count($vi) ; $i++) 
                { 
                   $producto_id=$vi[$i]->producto_id;
                   $precio_u=$vi[$i]->precio_u;
                   $cantidad=$vi[$i]->cantidad;
                   $subtotal=$vi[$i]->subtotal;
                   $descuento=$vi[$i]->descuento;
                   $valor=$vi[$i]->valor;
                   $rest=$vi[$i]->rest;
                  
                   $item = $itemsTable->newEntity();
                   $item->ventatotale_id=$ventatotale_id;
                   $item->producto_id=$producto_id;
                   $item->precio_u=$precio_u;
                   $item->cantidad=$cantidad;
                   $item->subtotal=$subtotal;
                   $item->descuento=$descuento;
                   $item->valor=$valor;
                   $item->rest=$rest;
                   $item->espera=1;
                   $itemsTable->save($item);
                   $venta = $this->Ventas->get($vi[$i]->id);
                   $this->Ventas->delete($venta);
                }
                $this->Flash->success(__('The ventatotale has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ventatotale could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Ventatotales->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('ventatotale', 'clientes'));
        $this->set('_serialize', ['ventatotale']);

    }

    /**
     * Edit method
     *
     * @param string|null $id Ventatotale id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ventatotale = $this->Ventatotales->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ventatotale = $this->Ventatotales->patchEntity($ventatotale, $this->request->data);
            if ($this->Ventatotales->save($ventatotale)) {
                $this->Flash->success(__('The ventatotale has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ventatotale could not be saved. Please, try again.'));
            }
        }
        $clientes = $this->Ventatotales->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('ventatotale', 'clientes'));
        $this->set('_serialize', ['ventatotale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ventatotale id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ventatotale = $this->Ventatotales->get($id);
        if ($this->Ventatotales->delete($ventatotale)) {
            $this->Flash->success(__('The ventatotale has been deleted.'));
        } else {
            $this->Flash->error(__('The ventatotale could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
