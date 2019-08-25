<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;
/**
 * Youtubes Controller
 *
 * @property \App\Model\Table\YoutubesTable $Youtubes
 *
 * @method \App\Model\Entity\Youtube[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class YoutubesController extends AppController
{

    public $paginate = [
      'limit' => 10,
      'order' => [
      'id' => 'desc' // AGEの昇順でソート
      ]
    ];

    public function beforeFilter(Event $event){
      parent::beforeFilter($event);
      $this->Auth->allow(['index','view']);
    }

    public function isAuthorized($user = null){
      $action = $this->request->parames['action'];

        if(in_array($action,['index','view','add','logout'])){
        return true;
      }

      if($user['role'] === 'admin'){
        return true;
      }

      if($user['role'] === 'user'){
        return true;
      }
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('my_layout');

        $youtubes = $this->Youtubes->find('all');
        $this->set(compact('youtubes'));

        $this->set('youtubes', $this->paginate());
    }

    /**
     * View method
     *
     * @param string|null $id Youtube id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $youtube = $this->Youtubes->get($id, [
            'contain' => []
        ]);
        $this->set('youtube', $youtube);

        $youtubes = $this->Youtubes->find('all');
          foreach($youtubes as $youtube){
            $max = $youtube->id;
          }
        $this->set(compact('max'));

        $random = range(1,$max);
        shuffle($random);
         $rand_a = $random[0];
         $rand_b = $random[1];
         $rand_c = $random[2];
         $rand_d = $random[3];
         $rand_e = $random[4];
         $this->set(compact('rand_a','rand_b','rand_c','rand_d','rand_e'));

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $newdata = $this->Youtubes->newEntity();
        if ($this->request->is('post')) {

          $youtubes = $this->Youtubes->find('all');
            foreach($youtubes as $youtube){
              $max = $youtube->id;
            }

          $name = $this->request->data['UploadData']['img_name']['name'];
          $ext = substr($name,-4);
          if($ext==='.jpg' || $ext==='.png'){
            $uploaddir = './webroot/img/';
            $uploadfile = $uploaddir.basename(($max + 1).$ext);
            move_uploaded_file($this->request->data['UploadData']['img_name']['tmp_name'], $uploadfile);
          }

          $youtube = $this->Youtubes->patchEntity($newdata, $this->request->getData());
          $newdata->name = mb_substr($youtube['name'],0,-12);
          $newdata->url =  substr($youtube['url'],32);

            if ($this->Youtubes->save($newdata)) {
                $this->Flash->success(__('The youtube has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The youtube could not be saved. Please, try again.'));
        }
        $this->set(compact('youtube'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Youtube id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $youtube = $this->Youtubes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $youtube = $this->Youtubes->patchEntity($youtube, $this->request->getData());
            if ($this->Youtubes->save($youtube)) {
                $this->Flash->success(__('The youtube has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The youtube could not be saved. Please, try again.'));
        }
        $this->set(compact('youtube'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Youtube id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $youtube = $this->Youtubes->get($id);
        if ($this->Youtubes->delete($youtube)) {
            $this->Flash->success(__('The youtube has been deleted.'));
        } else {
            $this->Flash->error(__('The youtube could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
