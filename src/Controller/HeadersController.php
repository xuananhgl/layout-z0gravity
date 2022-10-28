<?php
// src/Controller/HeadersController.php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\I18n\I18n;
class HeadersController extends AppController
{

  public function initialize()
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

    public function add()
        {
          $user = $this->Users->get(  $this->request->session()->read('Auth.User.id'));
          $this->set('user', $user);
                $header = $this->Headers->newEntity($this->request->getData());
                if ($this->request->is('post'))
                { $header = $this->Headers->patchEntity($header, $this->request->getData());
                    $translations = [
                        'en_US' => ['about' => $this->request->getData('_translations.en_US.about')],
                        'es' => ['about' => $this->request->getData('_translations.es.about')],
                        'vi_VN' => ['about' => $this->request->getData('_translations.vi_VN.about')],

                        'en_US' => ['title' => $this->request->getData('_translations.en_US.title')],
                        'es' => ['title' => $this->request->getData('_translations.es.title')],
                        'vi_VN' => ['title' => $this->request->getData('_translations.vi_VN.title')]
                    ];


                    foreach ($translations as $lang => $data) {
                        $header->translation($lang)->set($data, ['guard' => false]);
                    }


                if ($this->Headers->save($header)) {
                    $this->Flash->success(__('Your article has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Unable to add your article.'));
                }
                //  $header = $this->Headers->find('translations')->first();
                $this->set('header', $header);




        }

    public function index()
        {
          $user = $this->Users->get(  $this->request->session()->read('Auth.User.id'));
          $this->set('user', $user);
                    $this->loadComponent('Paginator');
                    $headers = $this->Paginator->paginate($this->Headers->find());
                    $this->set(compact('headers'));
        }
    public function view($id= null)
        {
          $user = $this->Users->get(  $this->request->session()->read('Auth.User.id'));
          $this->set('user', $user);
                    $header = $this->Headers->get($id);

                        $this->set('header', $header);
        }
    public function edit($id = null)
        {
          $user = $this->Users->get(  $this->request->session()->read('Auth.User.id'));
          $this->set('user', $user);
            $header = $this->Headers->get($id);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $header = $this->Headers->patchEntity($header, $this->request->getData());

                if ($this->Headers->save($header)){
                    $this->Flash->success(__('The headers has been saved.'));
                    return $this->redirect(['action' => 'index']);
               }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
         }
         $this->set(compact('header'));

    }


    public function delete($id)
                {
                        $this->request->allowMethod(['post', 'delete']);
                             $header = $this->Headers->get($id);
                        if ($this->Headers->delete($header)) {
                            $this->Flash->success(__('The post with id: {0} has been deleted.', h($id)));
                            return $this->redirect(['action' => 'index']);
                        }
                }

}
