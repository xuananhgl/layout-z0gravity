<?php
// src/Controller/HeadersController.php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\I18n\I18n;
class InterfacesController extends AppController
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
    public function home(){

                        $user = $this->Users->get(  $this->request->session()->read('Auth.User.id'));
                        $this->set('user', $user);
                        $posts= $this->Posts->find('all');
                        $this->set(compact('posts'));
                            foreach ($posts as $post)

                        $query = $this->Headers->find(
                                'all', [

                                    'limit'=>4,
                                ]
                            );
                        $query->enableHydration(false);
                        $header = $query->toList();
                        $this->set(compact('header'));

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
                          $query->enableHydration(false);
                          $article = $query->toList();
                              $this->set(compact('article'));

                              $this->loadModel('Bars');
                              $bars= $this->Bars->find('all');
                              $this->set(compact('bars'));
                              foreach ($bars as $bar)

                              $this->loadModel('Displays');
                              $displays= $this->Displays->find(
                                   'all', [
                                  'order'=> 'rand()',
                                  'limit'=>1,
                              ]
                              );
                              $this->set(compact('displays'));
                              foreach ($displays as $display)

                                // ============================================
                                  $pre = $this->Pres->get($pres[0]['id'], [
                                      'finder' => 'translations',
                                                                  ]);
                                  $pre1 = $this->Pres->get($pres[1]['id'], [
                                      'finder' => 'translations',
                                                                  ]);
                                  $pre2 = $this->Pres->get($pres[2]['id'], [
                                      'finder' => 'translations',
                                                                  ]);
                                  $display = $this->Displays->get($display['id']);

                                  // GET ID ARTCLE
                                  $article1 = $this->Articles->get($article[0]['id_article'], [
                                      'finder' => 'translations',
                                                                  ]);
                                  $article2 = $this->Articles->get($article[1]['id_article'], [
                                      'finder' => 'translations',
                                                                  ]);
                                  $article3 = $this->Articles->get($article[2]['id_article'], [
                                      'finder' => 'translations',
                                                                  ]);
                                  $article4 = $this->Articles->get($article[3]['id_article'], [
                                      'finder' => 'translations',
                                                                  ]);
                                  $header = $this->Headers->get($header[0]['id_headers'], [
                                      'finder' => 'translations',
                                                                  ]);


                                  $post = $this->Posts->get($post['id_posts']);


                                // debug($pre);
                                // debug($pre1);
                                // debug($pre2 );
                                // debug($article1);
                                // debug($article2);
                                // debug($article3);
                                // debug($article4);
                                // debug($header);
                                // debug($bar);

                                // exit;
                                  $bar = $this->Bars->get($bar['id'], [
                                      'finder' => 'translations',
                                                                  ]);





                                      // DATA PRESS
                               if ($this->request->is(['post', 'put'])) {

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
                                     // debug($data1);
                                     // exit;
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
                                 $data6 = [
                                       'backgroun_header' => $this->request->getData('backgroun_header'),
                                       'color_header' => $this->request->getData('color_header'),
                                       'color_prou' => $this->request->getData('color_prou'),
                                       'image_pour' => $this->request->getData('image_pour'),
                                       'image_header' => $this->request->getData('image_header'),
                                       'color_button' => $this->request->getData('color_button'),

                                         ];
                                         $header->translation('vi_VN')->author = $this->request->getData('vi_title');
                                         $header->translation('vi_VN')->dress = $this->request->getData('vi_about');
                                         $header->translation('vi_VN')->about_headers = $this->request->getData('vi_button');

                                         $header->translation('es')->author = $this->request->getData('vi_author1');
                                         $header->translation('es')->dress = $this->request->getData('vi_dress1');
                                         $header->translation('es')->about_pres = $this->request->getData('vi_about_pres1');

                                         $header->translation('en_US')->author = $this->request->getData('vi_author2');
                                         $header->translation('en_US')->dress = $this->request->getData('vi_dress2');
                                         $header->translation('en_US')->about_pres = $this->request->getData('vi_about_pres2');



                                       $pre->translation('vi_VN')->author = $this->request->getData('vi_author');
                                       $pre->translation('vi_VN')->dress = $this->request->getData('vi_dress');
                                       $pre->translation('vi_VN')->about_pres = $this->request->getData('vi_about_pres');

                                       $pre1->translation('vi_VN')->author = $this->request->getData('vi_author1');
                                       $pre1->translation('vi_VN')->dress = $this->request->getData('vi_dress1');
                                       $pre1->translation('vi_VN')->about_pres = $this->request->getData('vi_about_pres1');

                                       $pre2->translation('vi_VN')->author = $this->request->getData('vi_author2');
                                       $pre2->translation('vi_VN')->dress = $this->request->getData('vi_dress2');
                                       $pre2->translation('vi_VN')->about_pres = $this->request->getData('vi_about_pres2');


                                     $this->Pres->patchEntity($pre, $this->request->getData());
                                     $this->Pres->patchEntity($pre1, $data);
                                     $this->Pres->patchEntity($pre2, $data1);
                                     $this->Headers->patchEntity($header, $this->request->getData());
                                     $this->Articles->patchEntity($article1, $data2);
                                     $this->Articles->patchEntity($article2, $data3);
                                     $this->Articles->patchEntity($article3, $data4);
                                     $this->Articles->patchEntity($article4, $data5);
                                     $this->Displays->patchEntity($display, $data6);
                                     $this->Bars->patchEntity($bar, $this->request->getData());
                                     $this->Posts->patchEntity($post, $this->request->getData());
                                     // debug($pre);
                                     // debug($pre1);
                                     // debug($pre2);
                                     // exit;
                                   if ($this->Pres->save($pre) && $this->Pres->save($pre1) && $this->Pres->save($pre2) && $this->Headers->save($header)
                                       && $this->Articles->save($article1) && $this->Articles->save($article2) && $this->Articles->save($article3)
                                       && $this->Articles->save($article4) && $this->Displays->save($display) && $this->Bars->save($bar) && $this->Posts->save($post)) {
                                       $this->Flash->success(__('Your header has been updated.'));
                                       return $this->redirect(['action' => 'home']);
                                   }
                                   $this->Flash->error(__('Unable to update your header.'));
                               }
                               debug($header->translation('vi_VN')->title);

                                      $this->set('header', $header);
                                      $this->set('pre', $pre);
                                      $this->set('pre1', $pre1);
                                      $this->set('pre2', $pre2);
                                      $this->set('article1', $article1);
                                      $this->set('article2', $article2);
                                      $this->set('article3', $article3);
                                      $this->set('article4', $article4);
                                      $this->set('display', $display);
                                      $this->set('bar', $bar);
                                      $this->set('post', $post);

    }
       public function index()
            {
                                    $posts = $this->Posts->find('all');
                                    $this->set(['posts' => $posts]);
                                    $query = $this->Articles->find('all');
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
              $user = $this->Users->get(  $this->request->session()->read('Auth.User.id'));
              $this->set('user', $user);
              $posts = $this->Posts->find('all');
              $this->set(['posts' => $posts]);
              $article = $this->Articles->newEntity($this->request->getData());
              if ($this->request->is('post')) {
              $translations = [

                              // TIENG ANH
                  'en_US' => ['about' => $this->request->getData('_translations.en_US.about')],
                  'en_US' => ['body' => $this->request->getData('_translations.en_US.body')],
                  'en_US' => ['title' => $this->request->getData('_translations.en_US.title')],

                              // TAY BAN NHA
                  'es' => ['about' => $this->request->getData('_translations.es.about')],
                  'es' => ['body' => $this->request->getData('_translations.es.body')],
                  'es' => ['title' => $this->request->getData('_translations.es.title')],

                              // TIENGVIET
                  'vi_VN' => ['about' => $this->request->getData('_translations.vi_VN.about')],
                  'vi_VN' => ['body' => $this->request->getData('_translations.vi_VN.body')],
                  'vi_VN' => ['title' => $this->request->getData('_translations.vi_VN.title')]
              ];


              foreach ($translations as $lang => $data) {
                  $article->translation($lang)->set($data, ['guard' => false]);
              }


              if ($this->Articles->save($article)) {
                  $this->Flash->success(__('Your article has been saved.'));
                  return $this->redirect(['controller' => 'Articles', 'action' => 'index']);
              }
              $this->Flash->error(__('Unable to add your article.'));
              }
              $this->set('article', $article);
          }



    public function edit($id = null)
    {
      $user = $this->Users->get(  $this->request->session()->read('Auth.User.id'));
      $this->set('user', $user);
      $posts= $this->Posts->find(
          'all', [
              'order'=> 'rand()',
              'limit'=>1,
          ]
      );
      $this->set(compact('posts'));
      $post = $this->Posts->get(1);
      if ($this->request->is(['post', 'put'])) {
        $this->Posts->patchEntity($post, $this->request->getData());
        if ($this->Posts->save($post)) {
        $this->Flash->success(__('ban co the chinh sua truoc khi luu.'));
        return $this->redirect(['action' => 'add']);
        }
        $this->Flash->error(__('Unable to update your post.'));
        }
      $this->set('post', $post);
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
