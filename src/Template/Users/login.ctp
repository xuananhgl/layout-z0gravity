<style >
body{
  background:#f6f9fc;
}
  .sign_up{
    width: 700px;
    height: 500px;
    margin: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    background: #FFF;
    margin-top: 200px;
  }
  #email, #password{
    width: 100%;
    height: 50px;
    border-radius: 5px;
  }
  button{
    font-size: 20px;
    height: 50px;
    border-radius: 5px;
    width: 100%;
    margin-left: 10px;
    background: #008060;

  }
  .login{
    width: 600px;
  }
</style>



 <div class="sign_up">

   <h3>Sign up</h3>
   <p>Already have an account? <?= $this->Html->link(__('Log in here'), ['controller' => 'Users', 'action' => 'add']) ?></p>
   <div class="login">


   <?= $this->Form->create() ?>
   <?= $this->Form->control('email') ?>
   <?= $this->Form->control('password') ?>
   <?= $this->Form->button('Sign up with Email') ?>
   <?= $this->Form->end() ?>
   </div>


   </div>
