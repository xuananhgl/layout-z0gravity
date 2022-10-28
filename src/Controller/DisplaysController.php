<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\I18n\I18n;
class DisplaysController extends AppController
        {     public function initialize()
            {
                parent::initialize();
                  $this->loadModel('Posts');
                $this->loadModel('Headers');
                $this->loadModel('Pres');
                $this->loadModel('Pouss');
                $this->loadModel('Articles');
                $this->loadModel('Users');
                $this->loadComponent('Flash'); // Include the FlashComponent
            } 
           public function add(){
          $user = $this->Users->get(  $this->request->session()->read('Auth.User.id'));
          $this->set('user', $user);
            $display = $this->Displays->newEntity($this->request->getData());
            if ($this->request->is('post')) {

            $display->user_id = $this->Auth->user('id');

            if ($this->Displays->save($display)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
            }
            $this->set('display', $display);
        }
        public function index()
        {
          $user = $this->Users->get(  $this->request->session()->read('Auth.User.id'));
          $this->set('user', $user);
            $displays =$this->Displays->find();
            $this->set(compact('displays'));
        }
    public function delete($id)
    {
    $this->request->allowMethod(['post', 'delete']);

    $display = $this->Displays->get($id);
    if ($this->Displays->delete($display)) {
        $this->Flash->success(__('The post with id: {0} has been deleted.', h($id)));
        return $this->redirect(['action' => 'index']);
                    }
    }
      public function view($id= null)
        {
          $user = $this->Users->get(  $this->request->session()->read('Auth.User.id'));
          $this->set('user', $user);
        $display = $this->Displays->get($id);

        $this->set('display', $display);
        }

        public function edit($id = null)
    {
      $user = $this->Users->get(  $this->request->session()->read('Auth.User.id'));
      $this->set('user', $user);
        $display = $this->Displays->get($id, [ ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $display = $this->Displays->patchEntity($display, $this->request->getData());
            // $this->Auth->setUser($user);
            if ($this->Displays->save($display)) {
                $this->Flash->success(__('The display has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The display could not be saved. Please, try again.'));
        }
        $this->set(compact('display'));
    }

    }
