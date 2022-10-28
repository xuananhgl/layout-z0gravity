<?= $this->Html->css('bar.css') ?>
<nav class="large-4 medium-4 columns" id="actions-sidebar" style="background: #F1F6FA;">
  <div class="profile">


<img src="https://static.vecteezy.com/system/resources/previews/002/318/271/original/user-profile-icon-free-vector.jpg" alt="">
<div class="username"><?=$user->username?></div>
<div class="email"><?=$user->email?></div>
</div>
  <div class="account"><p style="color:#ccc;">ACCOUNT</p>
      <p class="item"> <i class="fa-regular fa-user my_style"></i> <?= $this->Html->link(__('Overview'), ['controller' => 'Users', 'action' => 'index', $user->id]) ?></p>
      <p class="item"> <span class="material-symbols-outlined my_style">settings</span> <?= $this->Html->link(__('Setting'), ['controller' => 'Users', 'action' => 'edit', $user->id]) ?></p>

  </div>
  <div class="dashboard"><p style="color:#ccc;">DASHBOARD</p>
    <p><span class="material-symbols-outlined my_style">file_open</span> <?= $this->Html->link(__('Headers'), ['controller' => 'Headers', 'action' => 'index']) ?></p>
    <p><span class="material-symbols-outlined my_style">file_open</span> <?= $this->Html->link(__('Press'), ['controller' => 'Pres', 'action' => 'index']) ?></p>
    <p><span class="material-symbols-outlined my_style">file_open</span> <?= $this->Html->link(__('Pours'), ['controller' => 'Pours', 'action' => 'index']) ?></p>
    <p><span class="material-symbols-outlined my_style">file_open</span> <?= $this->Html->link(__('Article'), ['controller' => 'Articles', 'action' => 'index']) ?></p>
    <p><span class="material-symbols-outlined my_style">file_open</span> <?= $this->Html->link(__('Displays'), ['controller' => 'Displays', 'action' => 'index']) ?></p>

  </div>
  <div class="logout">
    <p><span class="material-symbols-outlined my_style">exit_to_app</span> <?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></p>

  </div>
</nav>
<div class="articles form large-8 medium-8 columns content">
  <div class="back"><i class="fa-solid fa-backward"></i>
    <?= $this->Html->link(__('BACK'), ['controller' => 'Articles', 'action' => 'index']) ?>
  </div>
  <?= $this->Form->create($bar) ?>
  <fieldset>
    <legend><?= __(' New bar') ?></legend>
      <?=  $this->Form->create($bar);?>
             <legend>Dynamic-content</legend>
      <?=  $this->Form->control('ENTREPRISES');?>
      <?=  $this->Form->input('CONTACT');?>
      <?=  $this->Form->input('SECTEUR');?>
      <?=  $this->Form->input('PROPOS');?>
      <?=  $this->Form->input('BLOG');?>
      <?=  $this->Form->control('link_ENTREPRISES');?>
      <?=  $this->Form->input('link_CONTACT');?>
      <?=  $this->Form->input('link_SECTEUR');?>
      <?=  $this->Form->input('link_PROPOS');?>
      <?=  $this->Form->input('link_BLOG');?>
           <legend class="English">English</legend>
      <?= $this->Form->control('_translations.en_US.ENTREPRISES'); ?>
      <?= $this->Form->control('_translations.en_US.SECTEUR'); ?>
      <?= $this->Form->control('_translations.en_US.PROPOS'); ?>
      <?= $this->Form->control('_translations.en_US.CONTACT'); ?>
      <?= $this->Form->control('_translations.en_US.BLOG'); ?>
                      <legend>Spanish</legend>
      <?= $this->Form->control('_translations.es.ENTREPRISES'); ?>
      <?= $this->Form->control('_translations.es.SECTEUR'); ?>
      <?= $this->Form->control('_translations.es.PROPOS'); ?>
      <?= $this->Form->control('_translations.es.CONTACT'); ?>
      <?= $this->Form->control('_translations.es.BLOG'); ?>


                <legend legend>Tieng-VIet</legend>
    <?= $this->Form->control('_translations.vi_VN.ENTREPRISES'); ?>
      <?= $this->Form->control('_translations.vi_VN.SECTEUR'); ?>
      <?= $this->Form->control('_translations.vi_VN.PROPOS'); ?>
      <?= $this->Form->control('_translations.vi_VN.CONTACT'); ?>
      <?= $this->Form->control('_translations.vi_VN.BLOG'); ?>
</fieldset>
  <?= $this->Form->button(__('Save')) ?>
  <?= $this->Form->end() ?>
</div>
