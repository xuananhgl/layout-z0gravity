<?php
// src/Controller/HeadersController.php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\I18n\I18n;
class HomesController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Users');
        $this->loadComponent('Flash'); // Include the FlashComponent
    }
    public function index()
        {


                $this->loadModel('Headers');

                    $headers= $this->Headers->find(
                        'all', [
                            'order'=> 'rand()',
                            'limit'=>1,
                        ]
                         );

                    $this->set(compact('headers'));


                    $this->loadModel('Pres');
                    $query = $this->Pres->find(
                        'all', [
                            'order'=> 'rand()',
                            'limit'=>3,
                        ]
                    );
                    $query->enableHydration(false);
                    $pre = $query->toList();
                    $this->set(compact('pre'));


                    $this->loadModel('Pours');
                    $pours= $this->Pours->find(
                        'all', [
                            'order'=> 'rand()',
                            'limit'=>1,
                        ]
                    );
                    $this->set(compact('pours'));


                    $this->loadModel('Articles');
                    $query = $this->Articles->find(
                        'all', [
                            'order'=> 'rand()',
                            'limit'=>4,
                        ]
                    );
                    $query->enableHydration(false); // Results as arrays instead of entities
                    $article = $query->toList(); // Execute the query and return the array

                        $this->set(compact('article'));

                        $this->loadModel('Displays');
                        $displays= $this->Displays->find(
                             'all', [
                            'order'=> 'rand()',
                            'limit'=>1,
                        ]
                        );
                        $this->set(compact('displays'));
    }
    public function list()
        {
          $user = $this->Users->get(  $this->request->session()->read('Auth.User.id'));
          $this->set('user', $user);

        }
}
