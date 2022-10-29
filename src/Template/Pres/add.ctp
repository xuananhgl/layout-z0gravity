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
    <?= $this->Html->link(__('BACK'), ['controller' => 'Pours', 'action' => 'index']) ?>
  </div>
  <?= $this->Form->create($pre) ?>
  <fieldset>
    <legend><?= __('Add New Fresse') ?></legend>

     <?= $this->Form->create($pre);?>
     <?= $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);?>
     <legend>Display</legend>
     <?= $this->Form->control('title_pres');?>
     <?= $this->Form->control('logo');?>
     <legend>Dynamic-content</legend>
      <?= $this->Form->control('link', ['rows' => '1']);?>
     <?= $this->Form->control('author', ['rows' => '1']);?>
     <?= $this->Form->control('dress', ['rows' => '1']);?>
     <?= $this->Form->control('about_pres', ['rows' => '1']);?>

    <legend class="English">English</legend>
    <?= $this->Form->control('_translations.en_US.about_pres', ['rows' => '1']); ?>
    <?= $this->Form->control('_translations.en_US.author', ['rows' => '1']); ?>
    <?= $this->Form->control('_translations.en_US.dress', ['rows' => '1']); ?>

    <legend>Spanish</legend>
    <?= $this->Form->control('_translations.es.about_pres', ['rows' => '1']); ?>
    <?= $this->Form->control('_translations.es.author', ['rows' => '1']); ?>
    <?= $this->Form->control('_translations.es.dress', ['rows' => '1']); ?>

    <legend>Tieng-VIet</legend>
    <?= $this->Form->control('_translations.vi_VN.about_pres', ['rows' => '1']); ?>
    <?= $this->Form->control('_translations.vi_VN.author', ['rows' => '1']); ?>
    <?= $this->Form->control('_translations.vi_VN.dress', ['rows' => '1']); ?>


</fieldset>

  <?= $this->Form->button(__('Submit')) ?>
  <?= $this->Form->end() ?>
</div>
