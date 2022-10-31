<?php
    echo $this->Form->create($article);
    echo $this->Form->control('title');
    echo $this->Form->control('link');
    echo $this->Form->control('body');
    echo $this->Form->control('about');

  
    echo $this->Form->end();
?>


   <a href="http://localhost:8765/interfaces/view/?locale=es">Français </a>
