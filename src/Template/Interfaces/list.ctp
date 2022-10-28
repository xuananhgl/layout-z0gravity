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
          $this->loadModel('Posts');
        $this->loadModel('Headers');
        $this->loadModel('Pres');
        $this->loadModel('Pouss');
        $this->loadModel('Articles');

        $this->loadComponent('Flash'); // Include the FlashComponent
    }
    public function home(){

                      $this->loadModel('Headers');

                          $headers= $this->Headers->find(
                              'all', [
                                  'order'=> 'rand()',
                                  'limit'=>1,
                              ]
                               );
                                $this->set(compact('headers'));

                          foreach ($headers as $header)
                            // var_dump();

                                                  // exit;
                                // ==================================================================


                          $this->loadModel('Pres');
                          $query = $this->Pres->find(
                              'all', ['limit'=>3]);
                          $query->enableHydration(false);
                          $pres = $query->toList();
                          // debug($pre[0]['id']);
                          $this->set(compact('pres'));

                          // =============================================================================
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

                                  'limit'=>4,
                              ]
                          );
                          $query->enableHydration(false); // Results as arrays instead of entities
                          $article = $query->toList(); // Execute the query and return the array

                              $this->set(compact('article'));

                              $this->loadModel('Interfaces');
                              $interfaces= $this->Interfaces->find(
                                   'all', [
                                  'order'=> 'rand()',
                                  'limit'=>1,
                              ]
                              );
                              $this->set(compact('interfaces'));
                                // ============================================
                                  $pre = $this->Pres->get($pres[0]['id']);
                                  $pre1 = $this->Pres->get($pres[1]['id']);
                                  $pre2 = $this->Pres->get($pres[2]['id']);
                                  // GET ID ARTCLE
                                  $article1 = $this->Articles->get($article[0]['id_article']);
                                  $article2 = $this->Articles->get($article[1]['id_article']);
                                  $article3 = $this->Articles->get($article[2]['id_article']);
                                  $article4 = $this->Articles->get($article[3]['id_article']);
                                  $header = $this->Headers->get($header['id_headers']);
                                      // DATA PRESS
                                  $data = [
                                       'title_pres' => $this->request->getData('title_pres1'),
                                       'author' => $this->request->getData('author1'),
                                       'dress' => $this->request->getData('dress1'),
                                       'logo' => $this->request->getData('logo1'),
                                       'link' => $this->request->getData('link1'),
                                       'about_pres' => $this->request->getData('about_pres1'),
                                    ];
                                  $data1 = [
                                      'title_pres' => $this->request->getData('title_pres2'),
                                      'author' => $this->request->getData('author2'),
                                      'dress' => $this->request->getData('dress2'),
                                      'logo' => $this->request->getData('logo2'),
                                      'link' => $this->request->getData('link2'),
                                      'about_pres' => $this->request->getData('about_pres2'),
                                      ];
                                        //  DATA ARTICLE
                                  $data2 = [
                                       'title' => $this->request->getData('title1'),
                                       'link' => $this->request->getData('link1'),
                                       'body' => $this->request->getData('body1'),
                                       'about' => $this->request->getData('about1'),
                                        ];
                                  $data3 = [
                                        'title' => $this->request->getData('title2'),
                                        'link' => $this->request->getData('link2'),
                                        'body' => $this->request->getData('body2'),
                                        'about' => $this->request->getData('about2'),
                                        ];
                                  $data4 = [
                                        'title' => $this->request->getData('title3'),
                                        'link' => $this->request->getData('link3'),
                                        'body' => $this->request->getData('body3'),
                                        'about' => $this->request->getData('about3'),
                                            ];
                                  $data5 = [
                                        'title' => $this->request->getData('title4'),
                                        'link' => $this->request->getData('link4'),
                                        'body' => $this->request->getData('body4'),
                                        'about' => $this->request->getData('about4'),
                                          ];

                                      // debug($data2);
                                      // debug($data3);
                                      // debug($data4);
                                      // debug($data5);
                                      // exit;


                               if ($this->request->is(['patch', 'post', 'put'])) {

                                     $this->Pres->patchEntity($pre, $this->request->getData());
                                     $this->Pres->patchEntity($pre1, $data);
                                     $this->Pres->patchEntity($pre2, $data1);
                                     $this->Headers->patchEntity($header, $this->request->getData());
                                     $this->Articles->patchEntity($article1, $data2);
                                     $this->Articles->patchEntity($article2, $data3);
                                     $this->Articles->patchEntity($article3, $data4);
                                     $this->Articles->patchEntity($article4, $data5);
                                     // debug($pre);
                                     // debug($pre1);
                                     // debug($pre2);
                                     // exit;
                                   if ($this->Pres->save($pre) && $this->Pres->save($pre1) && $this->Pres->save($pre2) && $this->Headers->save($header)
                                       && $this->Articles->save($article1) && $this->Articles->save($article2) && $this->Articles->save($article3)
                                       && $this->Articles->save($article4)) {
                                       $this->Flash->success(__('Your header has been updated.'));
                                       return $this->redirect(['action' => 'home']);
                                   }
                                   $this->Flash->error(__('Unable to update your header.'));
                               }

                                      $this->set('header', $header);
                                      $this->set('pre', $pre);
                                      $this->set('pre1', $pre1);
                                      $this->set('pre2', $pre2);
                                      $this->set('article1', $article1);
                                      $this->set('article2', $article2);
                                      $this->set('article3', $article3);
                                      $this->set('article4', $article4);

    }
       public function index()
            {
                                    $posts = $this->Posts->find('all');
                                    $this->set(['posts' => $posts]);
                                    $query = $this->Articles->find(
                                        'all', [

                                            'limit'=>4
                                        ]
                                    );
                                    $query->enableHydration(false);
                                    $article = $query->toList();

                                        $this->set(compact('article'));

                                      $pres = $this->Pres->find( 'all', [
                                                          'order'=> 'rand()',
                                                          'limit'=>3,
                                                      ]);
                                      $this->set([
                                          'pres' => $pres,
                                          '_serialize' => ['pres']
                                      ]);

                                  }

                                  public function view($id)
                                  {
                                      $pre = $this->Pres->get($id);
                                      $this->set([
                                          'pre' => $pre,
                                          '_serialize' => ['pre']
                                    ]);
          }

    public function add()
    {
        $this->request->allowMethod(['post', 'put']);
        $pre = $this->Pres->newEntity($this->request->getData());
        if ($this->Pres->save($pre)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'pre' => $pre,
            '_serialize' => ['message', 'pre']
        ]);
    }

    public function edit($id)

    {

        $this->request->allowMethod(['patch', 'post', 'put']);
        $pre = $this->Pres->get($id);
        $pre = $this->Pres->patchEntity($pre, $this->request->getData());
        if ($this->Pres->save($pre)) {
            $message = 'Saved';

        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message', 'pres']
        ]);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['delete']);
        $pre = $this->Pres->get($id);
        $message = 'Deleted';
        if (!$this->Pres->delete($pre)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }





}
