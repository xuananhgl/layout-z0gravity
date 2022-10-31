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
<div class="users view large-8 medium-8 columns content" style="background: #F1F6FA;">
  <div class="back"><i class="fa-solid fa-backward"></i>
    <?= $this->Html->link(__('BACK'), ['controller' => 'interfaces', 'action' => 'home']) ?>
  </div>
  <div class="" style="display:none;">
<?php foreach ($posts as $post): ?>
 <?= h($post->article1)?>
    <?php endforeach; ?>
      </div>

        <?= $this->Form->create($post)?>
          <?= $this->Form->input('article2')?>;
          <div id="list" class="add_list"></div>
        <?= $this->Form->button(__('Next'))?>;
        <?= $this->Form->end()?>;
<style>
  button{
    position: fixed;
    top: 0px;
    right: 10px;
  }
    .add_list{
      width: 800px;
      height: 400px;
      border: 1px solid #000;
      border-radius: 5px;
      background: #fff;
      overflow: scroll;
      margin: auto;
      padding: 20px;

    }
    .list_article1{
      width: 90%;
      height: 30px;
      border: 1px solid #000;
      border-radius: 5px;
      line-height: 30px;
      margin-bottom: 10px;
      background: #fff;
      font-weight: bold;
    }
    .list_article2{
      width: 90%;
      height: 39px;
      border: 1px solid #000;
      border-radius: 5px;
      line-height: 30px;
      margin-bottom: 10px;
        background: #fff;
       font-weight: bold;
    }
    .list_article3{
      width: 90%;
      height: 100px;
      border: 1px solid #000;
      border-radius: 5px;
      line-height: 30px;
      margin-bottom: 10px;
      background: #fff;
      font-weight: bold;
      overflow: hidden;
    }
    .list_article4{
      width: 90%;
      height: 50px;
      border: 1px solid #000;
      border-radius: 5px;
      line-height: 30px;
      background: #fff;
      font-weight: bold;

    }

</style>


  </div>
    <script type="text/javascript">

    var articleAPi ='<?= h($post->article2)?>';
    console.log(articleAPi);

    function start(){
            getPosts(listPosts);
    }
    start();

    function getPosts(callback){
          fetch(articleAPi)
          .then(function(response){
              return response.json();

          })
          .then(callback);
    }
    function listPosts(courses){
      console.log(courses);
    document.getElementById("list").innerHTML = courses.map(function(course){
        return`

        <div>
        <div style =" width: 750px;
                      height: 350px;
                      border: 1px solid #000;
                      background: #CCC;
                      padding: 30px;
                      margin: auto;
                      overflow: hidden;
                      border-radius: 4px;">
        <input type="radio" id="develop" name="article1" value=${course.id}>
        <div class="list_article1"><p>category: ${course.category}</p></div>
        <div class="list_article2"><p>title: ${course.title}</p></div>
        <div class="list_article3"><p>description: ${course.description}</p></div>
        <div class="list_article4"><p>link: ${course.image}</p></div>
        </div>
        `

      });
  }
    </script>
</div>
