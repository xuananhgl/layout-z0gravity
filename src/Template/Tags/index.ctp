<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tag[]|\Cake\Collection\CollectionInterface $tags
 */
$cakeDescription = 'hearder- z0gravity';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('zogravity.css') ?>
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="/img/">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <?php
//connect to mysql
								$conn = mysqli_connect("localhost", "root", "", "datatablephp") or die("Connect fail!");
								mysqli_query($conn,"SET NAMES 'utf8'");

								//fetch data from mysql
								$sql = "SELECT * FROM `itemlist` ORDER BY RAND() LIMIT 1";
								$query = mysqli_query($conn,$sql);
								while ($row = mysqli_fetch_assoc($query)) 
								{
							?>
								
									
									
								
								
							
						
        

<div id="lider" style="background-color: <?php echo $row['my_background']?>;">
    <div class="list_slider">
    
    <div class="list_item">
        <div class="header_container">
            
                <?= $this->Html->image($row['my_img'], ['fullBase' => true])?>
                <div class="item_mute"><?php echo $row['my_icon'] ?></div>

            
                <div class="container_title">
                        <h1 class="font_blue" style="color: <?php echo $row['my_color']?>;">Fédérateur.<br>
                        Personnalisé.<br>
                        Souple & adapté.</h1>
                
                
                <div class="container_about">
                    <p style="color: <?php echo $row['my_color']?>;">Avec zO Gravity, descouvrela simplicité et la performance d'une gestion de projet collaborative.</p>
                </div>
                <div class="container_button">
                     <a href="" style="color: <?php echo $row['my_color']?>;">Descouvrez zO Gravity</a>
                </div>
                <div class="container_item">
                    <i class="fa-solid fa-circle-play" style="color: <?php echo $row['my_color']?>;"></i><div class="item_vd" style="color: <?php echo $row['my_color']?>;"><p>voir la vidéo</p></div>
                </div>
            </div>
</div>
<?php 
								} //end while
							?> 