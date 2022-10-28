<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\I18n\I18n;



/**
 * Bars Controller
 *
 * @property \App\Model\Table\BarsTable $Bars
 *
 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BarsController extends AppController
{
  public function initialize()
  {
      parent::initialize();
        $this->loadModel('Posts');
      $this->loadModel('Headers');
      $this->loadModel('Pres');
      $this->loadModel('Pouss');
      $this->loadModel('Bars');
      $this->loadModel('Users');
      $this->loadComponent('Flash'); // Include the FlashComponent
  }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
      $user = $this->Users->get(  $this->request->session()->read('Auth.User.id'));
      $this->set('user', $user);
        $bars = $this->paginate($this->Bars);
        $this->set(compact('bars'));

    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

    // }
    public function view($id = null)
    {
      $user = $this->Users->get(  $this->request->session()->read('Auth.User.id'));
      $this->set('user', $user);
            $bar = $this->Bars->get($id);
            $this->set(compact('bar'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
     public function add(){
       $user = $this->Users->get(  $this->request->session()->read('Auth.User.id'));
       $this->set('user', $user);
             $bar = $this->Bars->newEntity($this->request->getData());
             if ($this->request->is('post')) {
             $translations = [

                             // TIENG ANH
                 'en_US' => ['ENTREPRISES' => $this->request->getData('_translations.en_US.ENTREPRISES')],
                 'en_US' => ['SECTEUR' => $this->request->getData('_translations.en_US.SECTEUR')],
                 'en_US' => ['PROPOS' => $this->request->getData('_translations.en_US.PROPOS')],
                 'en_US' => ['CONTACT' => $this->request->getData('_translations.en_US.CONTACT')],
                 'en_US' => ['BLOG' => $this->request->getData('_translations.en_US.BLOG')],

                             // TAY BAN NHA
                 'es' => ['ENTREPRISES' => $this->request->getData('_translations.es.ENTREPRISES')],
                 'es' => ['SECTEUR' => $this->request->getData('_translations.es.SECTEUR')],
                 'es' => ['PROPOS' => $this->request->getData('_translations.es.PROPOS')],
                 'es' => ['CONTACT' => $this->request->getData('_translations.es.CONTACT')],
                 'es' => ['BLOG' => $this->request->getData('_translations.es.BLOG')],

                             // TIENGVIET
                 'vi_VN' => ['ENTREPRISES' => $this->request->getData('_translations.vi_VN.ENTREPRISES')],
                 'vi_VN' => ['SECTEUR' => $this->request->getData('_translations.vi_VN.SECTEUR')],
                 'vi_VN' => ['PROPOS' => $this->request->getData('_translations.vi_VN.PROPOS')],
                 'vi_VN' => ['CONTACT' => $this->request->getData('_translations.vi_VN.CONTACT')],
                 'vi_VN' => ['BLOG' => $this->request->getData('_translations.vi_VN.BLOG')]
             ];


             foreach ($translations as $lang => $data) {
                 $bar->translation($lang)->set($data, ['guard' => false]);
             }


             if ($this->Bars->save($bar)) {
                 $this->Flash->success(__('Your bar has been saved.'));
                 return $this->redirect(['action' => 'index']);
             }
             $this->Flash->error(__('Unable to add your bar.'));
             }
             $this->set('bar', $bar);
         }
    //

    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
      $user = $this->Users->get(  $this->request->session()->read('Auth.User.id'));
      $this->set('user', $user);

        $bar = $this->Bars->get($id, [ ]);
        // debug($bar->id);
        // debug('<a href=htts://localhost:123/articlwes/'.$bar->id.'/?locale=vi_VN> jihkhjjk </a>');
        // exit;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bar = $this->Bars->patchEntity($bar, $this->request->getData());

            if ($this->Bars->save($bar)) {
                $this->Flash->success(__('The bar has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bar could not be saved. Please, try again.'));
        }
        $this->set(compact('bar'));
    }



    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */




    public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $bar = $this->Bars->get($id);

    if ($this->Bars->delete($bar)) {
        $this->Flash->success(__('The {0} bar has been deleted.', $bar->$id));
        return $this->redirect(['action' => 'index']);
    }
}

}
