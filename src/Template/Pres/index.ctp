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
<div class="users index large-8 medium-8 columns content">
  <div class="back"><i class="fa-solid fa-backward"></i>
    <?= $this->Html->link(__('BACK'), ['controller' => 'Homes', 'action' => 'list']) ?>
  </div>
    <h3><?= __('Presse') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title_pres') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('about_pres') ?></th>
                <th scope="col"><?= $this->Paginator->sort('author') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dress') ?></th>

                <th scope="col"><?= $this->Paginator->sort('link') ?></th>


                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pres as $pre): ?>
            <tr>
                <td><?= $this->Number->format($pre->id) ?></td>
                <td><?= h($pre->title_pres) ?></td>
                <td><?= h($pre->logo) ?></td>
                <td><?= h($pre->about_pres) ?></td>
                <td><?= h($pre->author) ?></td>
                <td><?= h($pre->dress) ?></td>

                <td><?= h($pre->link) ?></td>


                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pre->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pre->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pre->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
      </div>
