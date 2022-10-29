
<?php foreach ($displays as $display): ?>
<?php foreach ($bars as $bar): ?>
<?php foreach ($pours as $pour): ?>

<?php foreach ($posts as $post): ?>
<?php
$cakeDescription = 'zogravity';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->css('edit.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="/img/">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>


            


  <div id="main">

                        <div id ="header">
                          <i class="fa-solid fa-pen" id="js_open_menu"></i>
                            <div class="header_menu">
                                <div class="zg_logo"><?= $this->Html->image('logo1.png') ?>
                                    </div>
                                   <div class="bar_mobile">



                                     <div class="list_menu js-bar">


                                         <div class="l"><a href="<?=$bar['link_ENTREPRISES']?>"><?=$bar['ENTREPRISES']?></a></div>
                                         <div class="l"><a href="<?=$bar['link_SECTEUR']?>"><?=$bar['SECTEUR']?></a></div>
                                         <div class="l"><a href="<?=$bar['link_PROPOS']?>"><?=$bar['PROPOS']?></a></div>
                                         <div class="l"><a href="<?=$bar['link_CONTACT']?>"><?=$bar['CONTACT']?></a></div>
                                         <div class="l"><a href="<?=$bar['link_BLOG']?>"><?=$bar['BLOG']?></a></div>
                                         <!-- <div class="l"><a href="http://localhost:8765/users/login"><?= __('LOGIN') ?></a> -->


                                         </div>





                                            <script>
                                            const imageOpen = document.getElementById('image2');
                                            const settingImage = document.querySelector('.image');
                                            const imageClose = document.getElementById('image3');

                                            function showImage(){
                                              settingImage.classList.add('open')
                                            }
                                            function hideImage(){
                                              settingImage.classList.remove('open')
                                            }
                                            imageOpen.addEventListener('click', showImage)
                                            imageClose.addEventListener('click', hideImage)





                                            </script>

                                        </div>
                            </div>
                            <?= $this->Html->script('slider.js') ?>

                        </div>



<style>
  #title, #about, #video, #vi-title, #vi-about, #en-title, #en-about, #conten-button{
    color:<?= $display['color_header'] ?>;

}
</style>
                <!-- ====================================================================================================================== -->
                    <div id="lider" style="background-color:<?= $display['backgroun_header'] ?>">


                                                <div class="video js-video">
                                                    <button class="bnt_video js-close-video">  <i class="fa-solid fa-xmark " style="cursor: pointer;"></i> </i></button>
                                                            <div class="set_video">
                                               <iframe src="https://www.youtube.com/embed/JP9IIlOKafs"
                                                 title="Nhạc Lofi 2022 - Những Bản Lofi Việt Nhẹ Nhàng Cực Chill - Nhạc Lofi Chill Buồn Hay Nhất 2022" frameborder="0"
                                                 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>


                                    </div>
                                <div class="top">
                                  <i class="fa-solid fa-pen" id="js_open_header"></i>


                                     <div class="header_container" >


                                            <?= $this->Html->image($display->image_header) ?>
                                            <?= $this->Form->control('id_headers');?>

                                                                            <div class="container_title">
                                                                                    <h1 class="font_blue" style="color: <?= $display['color_header'] ?>;">  <?= $header['title']?></h1>


                                                                            <div class="container_about">
                                                                                <p style="color: <?= $display['color_header'] ?>;"><?= $header['about']?></p>
                                                                            </div>
                                                                            <div class="container_button" style="background:<?= $display['color_button'] ?>">
                                                                                <a href="" style="color: <?= $display['color_header'] ?>;"><?= $header['conten_button']?></a>
                                                                            </div>
                                                                            <div class="container_item">
                                                                                 <button class="js-open-video"><i class="fa-solid fa-circle-play"></i><div class="item_vd">
                                                                                        <p style="color: <?= $display['color_header'] ?>;"><?= __('voir la vidéo') ?></p>
                                                                                </button>
                                                                            </div>
                                                                        </div>

                                                                </div>

                                </div>
                                     <?= $this->Html->script('open_video.js') ?>


            <div class="list_slider">

                        <div class="list_item">

                                            <!-- <div class="slide_box1"></div> -->
                          <div class="slider_content">
                            <i class="fa-solid fa-pen" id="js_open_edit_pres"></i>
                            <div class="slider_titel"><p><?=$pres[0]['title_pres'] ?></p>
                                <div class="next_pre">
                                  <div class="slider_next next " id ="next1"> <i class="fa-solid fa-angle-left"></i></div>
                                  <div class="slider_pre prev" id="prev1"><i class="fa-solid fa-angle-right"></i></div>
                                </div>
                            </div>
                                <div class="slider_h1"><?= $this->Html->image($pres[0]['logo'])?></div>
                                <div class="slider_about"><?= __($pres[0]['about_pres'])?></div>
                                <div class="slider_note">
                                    <div class="note"><a href="" style="color:#000";><?= $pres[0]['author']?></a><br><a><?= $pres[0]['dress']?></a></div>
                                    <div class="cycle"><a href="<?= $pres[0]['link']?>" style="color:#000";><?=__('Lire l’article')  ?>   <i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
                                </div>
                                          <!-- <div class="slide_box2"></div> -->
                         </div>
                    </div>
                    <div class="slider1">
                                        <!-- <div class="slide_box1"></div> -->
                      <div class="slider_content">
                            <i class="fa-solid fa-pen" id="js_open_edit_pres1"></i>
                        <div class="slider_titel"><p><?=$pres[1]['title_pres']?></p>
                            <div class="next_pre">
                              <div class="slider_next next " id ="next2"> <i class="fa-solid fa-angle-left"></i></div>
                              <div class="slider_pre prev" id="prev2"><i class="fa-solid fa-angle-right"></i></div>
                            </div>
                        </div>
                            <div class="slider_h1"><?= $this->Html->image($pres[1]['logo'])?></h1></div>
                            <div class="slider_about"><?= __($pres[1]['about_pres'])?></div>
                            <div class="slider_note">
                                <div class="note"><a href="" style="color:#000";><?= $pres[1]['author']?></a><br><a><?= $pres[1]['dress']?></a></div>
                                                <div class="cycle"><a href="<?= $pres[1]['link']?>" style="color:#000";><?=__('Lire l’article')?><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
                             </div>

                                                <!-- <div class="slide_box2"></div> -->
                     </div>
                </div>
                <div class="slider2">
                                    <!-- <div class="slide_box1"></div> -->
                  <div class="slider_content">
                        <i class="fa-solid fa-pen" id="js_open_edit_pres2"></i>
                    <div class="slider_titel"><p><?=$pres[2]['title_pres'] ?></p>
                        <div class="next_pre">
                          <div class="slider_next next " id ="next3"> <i class="fa-solid fa-angle-left"></i></div>
                          <div class="slider_pre prev" id="prev3"><i class="fa-solid fa-angle-right"></i></div>
                        </div>
                    </div>
                        <div class="slider_h1"><?= $this->Html->image($pres[2]['logo'])?></h1></div>
                        <div class="slider_about"><?= __($pres[2]['about_pres'])?></div>
                        <div class="slider_note">
                            <div class="note"><a href="" style="color:#000";><?= $pres[2]['author']?></a><br><a><?= $pres[2]['dress']?></a></div>
                                            <div class="cycle"><a href="<?= $pres[2]['link']?>" style="color:#000";><?=__('Lire l’article')?><i class="fa-solid fa-arrow-up-right-from-square"></i></a></div>
                         </div>
                                            <!-- <div class="slide_box2"></div> -->
                 </div>
            </div>

                    <!-- ============== -->

                </div>
                <script type="text/javascript">
                const iconNext = document.getElementById('next1');
                const slider = document.querySelector('.slider1');
                const icon5 = document.getElementById('prev2');
                const slider2 = document.querySelector('.list_item');
                const iconNext2 = document.getElementById('next2');
                const icon6 = document.getElementById('prev1');
                const iconNext3 = document.getElementById('next3');
                const icon7 = document.getElementById('prev3');
                const slider3 = document.querySelector('.slider2');


                function next1(){
                    slider.classList.add('open')
                    slider2.classList.add('close')
                    slider3.classList.remove('open')


                }
                function pre1(){
                    slider.classList.remove('open')
                    slider2.classList.remove('close')
                    slider3.classList.remove('open')

                }
                function pre2(){
                    slider.classList.remove('open')
                    slider2.classList.add('close')
                    slider3.classList.add('open')
                }
                function pre3(){
                    slider.classList.add('open')
                    slider2.classList.add('close')
                    slider3.classList.remove('open')
                }
                iconNext.addEventListener('click', next1)
                iconNext2.addEventListener('click', pre2)
                iconNext3.addEventListener('click', pre1)
                icon6.addEventListener('click', pre2)
                icon5.addEventListener('click', pre1)
                icon7.addEventListener('click', pre3)

                </script>

                </div>

                     <!-- ========================================================================================================================================    -->

                        <div id="content">
                            <div class="content_pfc">
                                <div class="content_pfc_titel"><?= $pour['logo'] ?></div>
                                <div class="content_pfc_text">
                                <h4 style="color:#fff";> <?= $pour['title'] ?>  </h4></div>
                            </div>
                            <div class="content_layout">
                                <div class="content_layot_text">
                                    <div class="fr"><h1 style="color:#fff"><?= $pour['Notre_engagement'] ?></h1></div>
                                    <div class="p"><p><?= $pour['about_notre'] ?></p></div>
                                    <div class="last"><h1><?= $pour['note'] ?></h1></div>
                                </div>
                                <div class="content_layout_inset"><?= $this->Html->image('mo.png') ?></div>
                                <div class="content_layot_img"><?= $this->Html->image($display['image_pour']) ?></div>
                            </div>
                            <div class="content_about">
                                <div class="content_about_title"><?=__('Découvrez l’univers z0 Gravity')  ?></div>
                                <div class="content_about_text"><?=__('Plannings, budgets, calendriers…En un clin dœil, vous avez une vision globale et stratégique de lavancée de vos projets en temps réel !') ?>
                                </div>
                                <div class="conteant_about_button"><i class="fa-solid fa-play"></i> <a href="<?= $pour['link'] ?>"><?=__('Présentation')?> vidéo </a></div>
                            </div>
                            <div class="content_app">
                            <?= $this->Html->image('app.jpg') ?>
                            </div>

                        </div>
                        <div id="news">
                            <div class="news1">
                                <div class="news_vous_title"><?= __('Vous êtes…') ?></div>
                                <div class="news_vous">

                                    <div class="news_vous_go">
                                        <div class="vous_go_item"><i class="fa-solid fa-file-signature" style="color:#049BF7 ;"></i></div>
                                        <div class="vous_go_about"><h2><?= __('Une entreprise') ?></h2><p> <?= __('Jouez collectif fédérez vos équipes autour dun objectif commun.') ?></p></div>
                                        <div class="vous_go_button"><a href="" style="color: #fff; text-decoration: none;"><?= __('3,2,1… Go !') ?></a></div>
                                    </div>
                                    <div class="news_vous_comment">
                                        <div class="vous_comment_item"><i class="fa-solid fa-hospital" style="color:#FF7D66 ;"></i></div>
                                        <div class="vous_comment_about"><h2><?= __('Une collectivité') ?></h2><p><?= __('Rassemblez les acteurs de <br>votre projet via un logiciel commun !') ?></p></div>
                                        <div class="vous_comment_button"><a href="" style="color: #fff; text-decoration: none;"><?= __('Découvrez comment') ?></a></div>
                                    </div>
                                    <div class="news_vous_commemcons">
                                        <div class="vous_commemcons_item"><i class="fa-solid fa-map-location-dot" style="color:#FFD051 ;"></i></div>
                                        <div class="vous_commemcons_about"><h2><?= __('Un promeneur') ?></h2><p><?= __('égaré Bienvenue !<br> Installez-vous et laissez-vous guider.') ?></p></div>
                                        <div class="vous_commemcons_button"><a href="" style="color: #fff; text-decoration: none;"><?= __('Commençons par ici') ?></a></div>
                                    </div>
                                </div>
                            </div>





                            <div class="news_nos">
                                <div class="nos_title"><h1><?= __('Nos articles') ?></h1>  <i class="fa-solid fa-pen" id="js_open_article"></i></div>
                                <div class="new">



                                </div>
                                <div class="nos_content">
                                    <div class="conten_nos1">
                                        <div class="conten_nos1_img"><?= $this->Html->image($article[$post->article1-1]['img']) ?></div>
                                        <div class="conten_nos1_caption"><?= $article[$post->article1 - 1]['title'] ?></div>

                                        <div class="conten_nos1_time">
                                            <div class="conten_nos1_note"><?= $article[$post->article1 - 1]['about']?></div>15 min
                                        </div>
                                        <div class="conten_nos1_about"><?= $article[$post->article1 - 1]['body'] ?></div>
                                        <div class="conten1 nos_btn"><a href="<?= $article[$post->article1 - 1]['link'] ?>"><?= __('Lire l’article') ?></a></div>
                                    </div>
                                    <div class="conten_nos2">
                                        <div class="conten_nos2_img"><?= $this->Html->image( $article[$post->article2 - 1]['img'] ) ?></div>
                                        <div class="conten_nos2_char">
                                            <div class="conten_nos2_caption"><?= $article[$post->article2 - 1]['title'] ?></div>

                                            <div class="conten_nos2_time">
                                                <div class="conten_nos2_note"><?= $article[$post->article2 - 1]['about'] ?></div>10 min
                                            </div>
                                            <div class="conten_nos2_about"><?= $article[$post->article2 - 1]['body'] ?></div>
                                            <div class="conten2 nos_btn"><a href="<?= $article[$post->article2 - 1]['link'] ?>"><?= __('Lire l’article') ?></a></div>
                                        </div>
                                    </div>
                                    <div class="conten_nos4">

                                        <div class="conten_nos4_caption"><?= $article[$post->article3 - 1]['title'] ?></div>

                                        <div class="conten_nos4_time">
                                            <div class="conten_nos4_note"><?= $article[$post->article3 - 1]['about'] ?></div>8 min

                                        </div>
                                        <div class="conten_nos4_about"><?= $article[$post->article3 - 1]['body'] ?></div>
                                        <div class="conten4 nos_btn"><a href="<?= $article[$post->article3 - 1]['link'] ?>"><?= __('Lire l’article') ?></a></div>
                                    </div>

                                    <div class="conten_nos3">

                                        <div class="conten_nos3_caption"><?= $article[$post->article4 - 1]['title'] ?></div>

                                        <div class="conten_nos3_time">
                                            <div class="conten_nos3_note"><?= $article[$post->article4 - 1]['about'] ?></div>12 min
                                        </div>
                                        <div class="conten_nos3_about"><?= $article[$post->article4 - 1]['body'] ?></div>
                                        <div class="conten3 nos_btn"><a href="<?= $article[$post->article4 - 1]['link'] ?>"><?= __('Lire l’article') ?></a></div>
                                    </div>
                                </div>
                                <div class="button_content1 button"><a href=""><?= __('Voir tous les articles') ?></a></div>
                                <div class="conten_titlel_last">
                                    <h1><?= __('Assez parlé de nous.') ?></h1>
                                      <p><?= __('Parlez-nous de vous !') ?></p>
                                </div>
                                <div class="button_content2 button"><a ><?= __('On discute !') ?></a></div>
                            </div>
                        </div>
                    <div id="footer">
                        <div class="bottom"
                            <div class="footer_menu">
                                <div class="footer_logo">
                                    <div class="logo_img"><img src="https://www.z0gravity.com/storage-z0G/2019/05/z0_Gravity_Logo_BlancBleu-1.svg" alt=""></div>
                                    <div class="logo_slogan"><?= __('Ensemble, on va plus loin.') ?></div>
                                </div>
                                <div class="footer_list">
                                    <ul>
                                        <li><?= __('Entreprises') ?></li>
                                        <li><?= __('Collectivités') ?></li>
                                        <li><?= __('À PROPOS') ?></li>
                                        <li><?= __('CONTACT') ?></li>
                                        <li><?= __('BLOG') ?></li>
                                    </ul>
                                </div>
                                <div class="footr_infor">
                                    <div class="infor_img">
                                        <div class="information"><?= __('SUIVEZ-NOUS') ?></div>
                                        <div class="img_info">
                                          <i class="fa-brands fa-facebook-f"></i>
                                          <i class="fa-brands fa-twitter"></i>
                                          <i class="fa-brands fa-vimeo-v"></i>
                                        </div>
                                    </div>
                                    <div class="js-open-model" > <i class="fa-solid fa-earth-asia"> </i><?= __('changer de région') ?></div>
                                </div>
                            </div>
                            <div class="footer_last">
                                    <a><?= __('© 2019 Globalsi SAS') ?></a>
                                     <a><?= __('Plan du site') ?></a>
                                    <a><?= __('Contactez-nous') ?></a>
                                    <a><?= __('Mentions légale') ?></a>
                            </div>
                        </div>
                    </div>

                        <div class="model js-model">
                            <div class="set_changer">
                                <div class="chenger_tille">
                                    <h2><?= __('Change Language') ?></h2>
                                    <i class="fa-solid fa-xmark js-close-model" style="cursor: pointer;"></i>
                                </div>
                                <div class="chenger_about">
                                    <?= __('Si vous sélectionnez une autre région, la langue et le contenu de z0gravity.com changeront.') ?>
                                </div>
                                <div class="langue">
                                    <ul>
                                    <div class="ul">
                                        <li> <a href="http://localhost:8765/interfaces/home/?locale=es">Français </a> </li>
                                      <li><a href="http://localhost:8765/interfaces/home/?locale=en_US">English </a> </li>
                                         <li><a href="http://localhost:8765/interfaces/home/?locale=vi_VN">tiengviet</a> </li>
                                    </div>
                                    <div class="ul">
                                        <li> Deutsch</li>
                                        <li>Nederlands</li>
                                        <li>Polski </li>
                                    </div>
                                    <div class="ul">
                                        <li>Русский</li>
                                        <li>Bokmål</li>
                                        <li>Ελληνικά </li>
                                    </div>
                                    <div class="ul">
                                        <li>Português </li>
                                        <li>日本語</li>
                                        <li>繁體中文</li>
                                    </div>
                                    </ul>
                                </div>
                            </div>
                          </div>


                        <div>


        <?= $this->Html->script('changer.js') ?>
        <div id="main">
            <?= $this->Form->create($header);?>

                              <div id ="header">
                                <div class="over_menu">

                                  <div class="border_menu">
                                        <i class="fa-solid fa-circle-xmark" id="js_close_menu"></i>


                                  <div class="header_menu">
                                      <div class="zg_logo"><?= $this->Html->image('logo1.png') ?>
                                          </div>
                                         <div class="bar_mobile">




                                                          <div class="list_menu js-bar">
                                                              <img src="/img/logo/z0_Gravity_Logo_Couleur.png" alt="" class="none">
                                                              <div class="l">
                                                                  <div class="dropdown"><?= $this->Form->control('ENTREPRISES', ['value' => $bar->ENTREPRISES])?>
                                                                      <div class="dropdown-content">link_ENTREPRISES
                                                                          <input type="text" placeholder="<?=$bar->ENTREPRISES?>" name="link_ENTREPRISES" value="<?=$bar->link_ENTREPRISES?>">
                                                                      </div>
                                                                  </div>
                                                            </div>
                                                            <div class="l">
                                                                <div class="dropdown"><?= $this->Form->control('SECTEUR', ['value' => $bar->SECTEUR])?>
                                                                    <div class="dropdown-content">link_SECTEUR
                                                                      <input type="text" placeholder="<?=$bar->SECTEUR?>" name="link_SECTEUR" value="<?=$bar->link_SECTEUR?>">
                                                                    </div>
                                                                </div>
                                                          </div>
                                                          <div class="l">
                                                              <div class="dropdown"><?= $this->Form->control('PROPOS', ['value' => $bar->PROPOS])?>
                                                                  <div class="dropdown-content">link_PROPOS
                                                                    <input type="text" placeholder="<?=$bar->PROPOS?>" name="link_PROPOS" value="<?=$bar->link_PROPOS?>">
                                                                  </div>
                                                              </div>
                                                        </div>
                                                        <div class="l">
                                                            <div class="dropdown"><?= $this->Form->control('CONTACT', ['value' => $bar->CONTACT])?>
                                                                <div class="dropdown-content">link_CONTACT
                                                                  <input type="text" placeholder="<?=$bar->CONTACT?>" name="link_CONTACT" value="<?=$bar->link_CONTACT?>">
                                                                </div>
                                                            </div>
                                                      </div>
                                                      <div class="l">
                                                          <div class="dropdown"><?= $this->Form->control('BLOG', ['value' => $bar->BLOG])?>
                                                              <div class="dropdown-content">link_BLOG
                                                                <input type="text" placeholder="<?=$bar->BLOG?>" name="link_BLOG" value="<?=$bar->link_BLOG?>">
                                                              </div>
                                                          </div>
                                                    </div>
                                                  </div>
                                              </div>
                                  </div>
                                  <?= $this->Html->script('slider.js') ?>

                              </div>
                              <script>
                                const  openMenu = document.getElementById('js_open_menu')
                                const closeMenu = document.getElementById('js_close_menu')
                                const overMenu = document.querySelector('.over_menu')

                                function showMenu(){
                                  overMenu.classList.add('open')
                                }
                                function hideMenu(){
                                  overMenu.classList.remove('open')
                                }
                                openMenu.addEventListener('click', showMenu)
                                closeMenu .addEventListener('click', hideMenu)

                              </script>
                              <button type="submit" name="" id="save_menu"> save</button>
                            </div>
                          </div>



                      <!-- ====================================================================================================================== -->






                            <div class="over_headers">
                              <div class="border_headers" style="background-color:<?= $display['backgroun_header'] ?>;">


                                                      <div class="video js-video">
                                                          <button class="bnt_video js-close-video">  <i class="fa-solid fa-xmark " style="cursor: pointer;"></i> </i></button>
                                                                  <div class="set_video">
                                                     <iframe src="https://www.youtube.com/embed/JP9IIlOKafs"
                                                       title="Nhạc Lofi 2022 - Những Bản Lofi Việt Nhẹ Nhàng Cực Chill - Nhạc Lofi Chill Buồn Hay Nhất 2022" frameborder="0"
                                                       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                          </div>


                                          </div>
                                      <div class="top">
                                        <i class="fa-solid fa-circle-xmark" id="js_close_header"></i>
                                        <div class="Language_header">
                                        <div class=""id="js_open_es"><img src="https://dichthuatphuongdong.com/tienich/uploads/flags/shiny/48x48/us.png" alt="tieng-Anh"></div>
                                        <div class=""id="js_open_vi"><img src="https://dichthuatphuongdong.com/tienich/uploads/flags/shiny/48x48/vn.png" alt="TIENG-VIET"></div>
                                        <div class="" id="js_open_fr"><img src="https://dichthuatphuongdong.com/tienich/uploads/flags/shiny/48x48/fr.png" alt="Tieng-Phap"></div>
                                        </div>
                                         <div class="header_container" >


                                                  <?= $this->Html->image($display->image_header) ?>
                                                  <div class="" style="display: none;">
                                                      <?= $this->Form->control('id_headers', ['value'=> $header['id_headers']]);?>


                                                  </div>

                                                      <div class="container_title">
                                                              <h1 class="font_blue" style="color: <?= $display['color_header'] ?>;">
                                                                <?= $this->Form->control('title', ['rows'=>'3', 'value'=> $header['title']]);?>
                                                                <?= $this->Form->control('vi_title',['rows'=>'3', 'value'=>$header->translation('vi_VN')->title]);?>
                                                                <?= $this->Form->control('en_title',['rows'=>'3', 'value'=>$header->translation('en_US')->title]);?>
                                                              </h1>
                                                      <div class="container_about" style="color: <?= $display['color_header'] ?>;">
                                                          <?= $this->Form->control('about', ['rows'=>'3', 'value'=> $header['about']]);?>
                                                          <?= $this->Form->control('vi_about',['rows'=>'3','value'=>$header->translation('vi_VN')->about]);?>
                                                          <?= $this->Form->control('en_about',['rows'=>'3','value'=>$header->translation('en_US')->about]);?>

                                                      </div>
                                                      <div class="container_button" style="color: <?= $display['color_header'] ?>; background:<?= $display['color_button'] ?>;">
                                                           <?= $this->Form->control('conten_button', ['value'=> $header['conten_button']]);?>
                                                           <?= $this->Form->control('vi_button',['rows'=>'3','value'=>$header->translation('vi_VN')->conten_button]);?>
                                                           <?= $this->Form->control('en_button',['rows'=>'3','value'=>$header->translation('en_US')->conten_button]);?>
                                                      </div>
                                                      <div class="container_item" style="color: <?= $display['color_header'] ?>;">
                                                           <button class="js-open-video"><i class="fa-solid fa-circle-play"></i>
                                                                  <?= $this->Form->control('video', ['value'=> $header['video']]);?>
                                                          </button>
                                                      </div>
                                                  </div>
                                                <?= $this->Html->script('translater_header.js') ?>


                                          </div>

                                          <button type="submit" name="" id="save_header">save</button>
                                          <div id="icon3"><span class="material-symbols-outlined my_style">settings</span>customize</div>

                                            <div class="down app">
                                            <div class="customize">
                                              Customize theme
                                              <i class="fa-regular fa-circle-xmark" id="icon4"></i>
                                             </div>
                                             <div class="container_color">
                                             <div class="color">
                                               <i class="fa-solid fa-paint-roller"></i>   color
                                             </div>
                                              <div class="color_item">backgroun

                                            <input type="color" id="head" name="backgroun_header" value="<?= $display['backgroun_header'] ?>">

                                              </div>
                                              <div class="color_item">text

                                            <input type="color" id="head" name="color_header" value="<?= $display['color_header'] ?>">
                                              </div>
                                              <div class="color_item">button
                                            <input type="color" id="head" name="color_button" value="<?= $display['color_button'] ?>">
                                              </div>
                                             </div>
                                             <div class="container_image">
                                               <div class="customize_image"> <i class="fa-solid fa-image"></i> Image </div>



                                              <div class="image_item">image-headers
                                                  <textarea  name="image_header"><?= $display['image_header'] ?></textarea>
                                              </div>
                                              <div class="image_item">image pour
                                                  <textarea  name="image_pour"><?= $display['image_pour'] ?></textarea>
                                              </div>

                                                     </div>
                                              <script>
                                                       const  openHeader = document.getElementById('js_open_header')
                                                       const closeHeader = document.getElementById('js_close_header')
                                                       const overHeader = document.querySelector('.over_headers')

                                                       function showHeader(){
                                                         overHeader.classList.add('open')
                                                       }
                                                       function hideHeader(){
                                                         overHeader.classList.remove('open')
                                                       }
                                                       openHeader.addEventListener('click', showHeader)
                                                       closeHeader .addEventListener('click', hideHeader)

                                              </script>
                                              <script >
                                              const iconOpen1 = document.getElementById('icon3');
                                              const settingApp1 = document.querySelector('.app');
                                              const iconClose1 = document.getElementById('icon4');

                                              function showApp1(){
                                                  settingApp1.classList.add('open')
                                              }
                                              function hideApp1(){
                                                  settingApp1.classList.remove('open')
                                              }

                                              iconOpen1.addEventListener('click', showApp1)
                                              iconClose1.addEventListener('click', hideApp1)
                                              </script>



                                        </div>
                                      </div>
                                           <?= $this->Html->script('open_video.js') ?>
      </div>
  </div>
                  <div class="list_slider">

                    <div class="over_slider">

                      <div class="boder_slider">
                        <div class="exit_pres">
                          <i class="fa-solid fa-circle-xmark" id="js_close_press"></i>
                          <div class="Language_pres">
                          <div class="en"id="pres-es"><img src="https://dichthuatphuongdong.com/tienich/uploads/flags/shiny/48x48/us.png" alt="tieng-Anh"></div>
                          <div class="vi"id="pres-vi"><img src="https://dichthuatphuongdong.com/tienich/uploads/flags/shiny/48x48/vn.png" alt="TIENG-VIET"></div>
                          <div class="fr" id="pres-fr"><img src="https://dichthuatphuongdong.com/tienich/uploads/flags/shiny/48x48/fr.png" alt="Tieng-Phap"></div>
                            </div>

                        </div>



                              <div class="list_item">
                                                  <!-- <div class="slide_box1"></div> -->
                                <div class="slider_content">
                                      <div class="slider_titel"><?= $this->Form->control('title_pres', ['value' =>$pres[0]['title_pres']]);?>
                                      <!-- <?= $this->Form->control('vi_title_pres',['value'=>$header->translation('vi_VN')->title_pres]);?>
                                      <?= $this->Form->control('en_title_pres',['value'=>$header->translation('en_US')->title_pres]);?> -->
                                      <div class="next_pre">
                                                <div class="slider_next next" id="next1"> <i class="fa-solid fa-angle-left" ></i></div>
                                                <div class="slider_pre prev" id="prev1"><i class="fa-solid fa-angle-right" ></i></div>
                                     </div>
                                      </div>
                                      <div class="logo1">
                                          <div class="dropdown"><?= $this->Html->image($pres[0]['logo'])?>
                                              <div class="dropdown-content"><?= $this->Form->control('logo', ['value' =>$pres[0]['logo']]);?>
                                              </div>
                                          </div>
                                    </div>

                                      <div class="slider_about"> <?= $this->Form->input('about_pres', ['value' =>$pres[0]['about_pres'], 'rows'=>'3']);?>
                                        <?= $this->Form->control('vi_about_pres',['rows'=>'3', 'value'=>$pre->translation('vi_VN')->about_pres]);?>
                                        <?= $this->Form->control('en_about_pres',['rows'=>'3', 'value'=>$pre->translation('en_US')->about_pres]);?>
                                      </div>
                                      <div class="slider_note">
                                          <div class="note">
                                            <?= $this->Form->control('author', ['value' =>$pres[0]['author']]);?>
                                            <?= $this->Form->control('dress', ['value' =>$pres[0]['dress']]);?>
                                            <?= $this->Form->control('vi_author',['value'=>$pre->translation('vi_VN')->author]);?>
                                            <?= $this->Form->control('vi_dress',['value'=>$pre->translation('vi_VN')->dress]);?>
                                            <?= $this->Form->control('en_author',['value'=>$pre->translation('en_US')->author]);?>
                                            <?= $this->Form->control('en_dress',['value'=>$pre->translation('en_US')->dress]);?>
                                          </div>
                                          <div class="cycle">
                                              <div class="sliderdrop"><a href="<?= $pres[0]['link']?>" style="color:#000";><?=__('Lire l’article')  ?>   <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                                  <div class="sliderdrop-content"><?= $this->Form->control('link', ['value' =>$pres[0]['link']]);?>
                                                  </div>
                                              </div>
                                        </div>

                                      </div>
                                      <script>
                                      const  preVi = document.getElementById('pres-vi')
                                      const preEn = document.getElementById('pres-es')
                                      const  preFr = document.getElementById('pres-fr')
                                      const aboutPresVi = document.getElementById('vi-about-pres')
                                      const aboutPresEn = document.getElementById('en-about-pres')
                                      const  aboutPresFr = document.getElementById('about-pres')
                                      const authorPresVi = document.getElementById('vi-author')
                                      const authorPresEn = document.getElementById('en-author')
                                      const  authorPresFr = document.getElementById('author')
                                      const dressPresVi = document.getElementById('vi-dress')
                                      const dressPresEn = document.getElementById('en-dress')
                                      const  dressPresFr = document.getElementById('dress')
                                      function showPreVi(){
                                        aboutPresVi.classList.add('open')
                                        aboutPresFr.classList.add('close')
                                        aboutPresEn.classList.remove('open')
                                        authorPresVi.classList.add('open')
                                        dressPresVi.classList.add('open')
                                        authorPresFr.classList.add('close')
                                        dressPresFr.classList.add('close')
                                        authorPresEn.classList.remove('open')
                                        dressPresEn.classList.remove('open')
                                      }
                                      function showPreEn(){
                                        aboutPresEn.classList.add('open')
                                        aboutPresFr.classList.add('close')
                                        aboutPresVi.classList.remove('open')
                                        authorPresFr.classList.add('close')
                                        dressPresFr.classList.add('close')
                                        authorPresVi.classList.remove('open')
                                        dressPresVi.classList.remove('open')
                                        authorPresEn.classList.add('open')
                                        dressPresEn.classList.add('open')
                                      }
                                      function showPreFr(){
                                        aboutPresEn.classList.remove('open')
                                        aboutPresFr.classList.remove('close')
                                        aboutPresVi.classList.remove('open')
                                        authorPresVi.classList.remove('open')
                                        dressPresVi.classList.remove('open')
                                        authorPresEn.classList.remove('open')
                                        dressPresEn.classList.remove('open')
                                        authorPresFr.classList.remove('close')
                                        dressPresFr.classList.remove('close')
                                      }
                                    preVi.addEventListener('click', showPreVi)
                                    preEn.addEventListener('click', showPreEn)
                                    preFr.addEventListener('click', showPreFr)
                                      </script>
                                                          <!-- <div class="slide_box2"></div> -->
                               </div>
                          </div>
                          <div class="slider1">
                                              <!-- <div class="slide_box1"></div> -->
                            <div class="slider_content">
                                  <div class="slider_titel"><?= $this->Form->control('title_pres1', ['value' =>$pres[1]['title_pres']]);?>
                                  <div class="next_pre">
                                            <div class="slider_next next " id ="next2"> <i class="fa-solid fa-angle-left"></i></div>
                                            <div class="slider_pre prev" id="prev2"><i class="fa-solid fa-angle-right"></i></div>
                                 </div>
                                  </div>
                                  <div class="logo1">
                                      <div class="dropdown"><?= $this->Html->image($pres[1]['logo'])?>
                                          <div class="dropdown-content"><?= $this->Form->control('logo1', ['value' =>$pres[1]['logo']]);?>
                                          </div>
                                      </div>
                                </div>
                                  <div class="slider_about"> <?= $this->Form->input('about_pres1', ['value' =>$pres[1]['about_pres'], 'rows'=>'3']);?></div>
                                  <div class="slider_note">
                                      <div class="note"><?= $this->Form->control('author1', ['value' =>$pres[1]['author']]);?><?= $this->Form->control('dress1', ['value' =>$pres[1]['dress']]);?></div>
                                      <div class="cycle">
                                          <div class="sliderdrop"><a href="<?= $pres[1]['link']?>" style="color:#000";><?=__('Lire l’article')  ?>   <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                              <div class="sliderdrop-content"><?= $this->Form->control('link1', ['value' =>$pres[1]['link']]);?>
                                              </div>
                                          </div>
                                    </div>
                                  </div>

                                                      <!-- <div class="slide_box2"></div> -->
                           </div>
                      </div>
                      <div class="slider2">
                                          <!-- <div class="slide_box1"></div> -->
                        <div class="slider_content">
                              <div class="slider_titel"><?= $this->Form->control('title_pres2', ['value' =>$pres[2]['title_pres']]);?>
                              <div class="next_pre">
                                        <div class="slider_next next " id ="next3"> <i class="fa-solid fa-angle-left"></i></div>
                                        <div class="slider_pre prev" id="prev3"><i class="fa-solid fa-angle-right"></i></div>
                             </div>
                              </div>
                              <div class="logo1">
                                  <div class="dropdown"><?= $this->Html->image($pres[2]['logo'])?>
                                      <div class="dropdown-content"><?= $this->Form->control('logo2', ['value' =>$pres[2]['logo']]);?>
                                      </div>
                                  </div>
                            </div>
                              <div class="slider_about"> <?= $this->Form->input('about_pres2', ['value' =>$pres[2]['about_pres'], 'rows'=>'3']);?></div>
                              <div class="slider_note">
                                  <div class="note"><?= $this->Form->control('author2', ['value' =>$pres[2]['author']]);?><?= $this->Form->control('dress2', ['value' =>$pres[2]['dress']]);?></div>
                                  <div class="cycle">
                                      <div class="sliderdrop"><a href="<?= $pres[2]['link']?>" style="color:#000";><?=__('Lire l’article')  ?>   <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                          <div class="sliderdrop-content"><?= $this->Form->control('link2', ['value' =>$pres[2]['link']]);?>
                                          </div>
                                      </div>
                                </div>
                              </div>
                                                  <!-- <div class="slide_box2"></div> -->
                       </div>
                     </div>

                   </div>
                   <button type="submit" name="" id="save_pres">save</button>
                   <script>
                     const  openPre = document.getElementById('js_open_edit_pres')
                     const  openPre1 = document.getElementById('js_open_edit_pres1')
                     const  openPre2 = document.getElementById('js_open_edit_pres2')
                     const closePre = document.getElementById('js_close_press')
                     const overSlider = document.querySelector('.over_slider')

                     function showSlider(){
                       overSlider.classList.add('open')
                     }
                     function hideSlider(){
                       overSlider.classList.remove('open')
                     }
                     openPre.addEventListener('click', showSlider)
                     openPre1.addEventListener('click', showSlider)
                     openPre2.addEventListener('click', showSlider)
                     closePre .addEventListener('click', hideSlider)

                   </script>
                  </div>
                          <!-- ============== -->
                      </div>
                      <script type="text/javascript">
                      const iconNext = document.getElementById('next1');
                      const slider = document.querySelector('.slider1');
                      const icon5 = document.getElementById('prev2');
                      const slider2 = document.querySelector('.list_item');
                      const iconNext2 = document.getElementById('next2');
                      const icon6 = document.getElementById('prev1');
                      const iconNext3 = document.getElementById('next3');
                      const icon7 = document.getElementById('prev3');
                      const slider3 = document.querySelector('.slider2');
                      function next1(){
                          slider.classList.add('open')
                          slider2.classList.add('close')
                          slider3.classList.remove('open')


                      }
                      function pre1(){
                          slider.classList.remove('open')
                          slider2.classList.remove('close')
                          slider3.classList.remove('open')

                      }
                      function pre2(){
                          slider.classList.remove('open')
                          slider2.classList.add('close')
                          slider3.classList.add('open')
                      }
                      function pre3(){
                          slider.classList.add('open')
                          slider2.classList.add('close')
                          slider3.classList.remove('open')
                      }
                      iconNext.addEventListener('click', next1)
                      iconNext2.addEventListener('click', pre2)
                      iconNext3.addEventListener('click', pre1)
                      icon6.addEventListener('click', pre2)
                      icon5.addEventListener('click', pre1)
                      icon7.addEventListener('click', pre3)
                      </script>

                                  <div class="news_nos">

                                      <div class="new">
                                      </div>
                                      <div class="over_Article">

                                        <div class="boder_Article">
                                      <div class="nos_content">
                                          <div class="conten_nos1">
                                              <?=  $this->Form->control('article1', ['value'=>$post->article1, 'title'=>'nhap so thu tu de dieu kien vi tri bai viet']);?>
                                              <div class="conten_nos1_img"><?= $this->Html->image($article[0]['img']) ?></div>
                                              <div class="conten_nos1_caption">
                                                <?= $this->Form->control('title1', ['value' => $article[0]['title'], 'rows'=>'1']);?>
                                                <?= $this->Form->control('vi_title1',['rows'=>'1', 'value'=>$article1->translation('vi_VN')->title]);?>
                                                <?= $this->Form->control('en_title1',['rows'=>'1', 'value'=>$article1->translation('en_US')->title]);?>

                                              </div>
                                              <div class="conten_nos1_time">
                                                  <div class="conten_nos1_note">
                                                      <?= $this->Form->control('about1', ['value' => $article[0]['about']]);?>
                                                      <?= $this->Form->control('vi_about1',['value'=>$article1->translation('vi_VN')->about]);?>
                                                      <?= $this->Form->control('en_about1',['value'=>$article1->translation('en_US')->about]);?>
                                                    </div>15 min
                                              </div>
                                              <div class="conten_nos1_about"><?= $this->Form->control('body1', ['value' => $article[0]['body'], 'rows'=>'1']);?>
                                                <?= $this->Form->control('vi_body1',['rows'=>'1', 'value'=>$article1->translation('vi_VN')->body]);?>
                                                <?= $this->Form->control('en_body1',['rows'=>'1', 'value'=>$article1->translation('en_US')->body]);?>
                                              </div>
                                              <div class="conten1 nos_btn"><a href="<?= $article[1]['link'] ?>"><?= __('Lire l’article') ?></a></div>
                                              <div  style="display:none"><?= $this->Form->control('link1', ['value' => $article[0]['link']]);?></div>
                                          </div>
                                          <div class="conten_nos2">
                                              <?=  $this->Form->control('article2', ['value'=>$post->article2]);?>
                                              <div class="conten_nos2_img"><?= $this->Html->image( $article[1]['img'] ) ?></div>
                                              <div class="conten_nos2_char">
                                                  <div class="conten_nos2_caption"><?= $this->Form->control('title2', ['value' => $article[1]['title'], 'rows'=>'1']);?>
                                                    <?= $this->Form->control('vi_title2',['rows'=>'1', 'value'=>$article2->translation('vi_VN')->title]);?>
                                                    <?= $this->Form->control('en_title2',['rows'=>'1', 'value'=>$article2->translation('en_US')->title]);?>
                                                  </div>


                                                  <div class="conten_nos2_time">
                                                      <div class="conten_nos2_note">
                                                      <?= $this->Form->control('about2', ['value' => $article[1]['about']]);?>
                                                      <?= $this->Form->control('vi_about2',['value'=>$article2->translation('vi_VN')->about]);?>
                                                      <?= $this->Form->control('en_about2',['value'=>$article2->translation('en_US')->about]);?>
                                                    </div>10 min
                                                  </div>
                                                  <div class="conten_nos2_about">  <?= $this->Form->control('body2', ['value' => $article[1]['body'], 'rows'=>'3']);?>
                                                    <?= $this->Form->control('vi_body2',['rows'=>'1', 'value'=>$article2->translation('vi_VN')->body]);?>
                                                    <?= $this->Form->control('en_body2',['rows'=>'1', 'value'=>$article2->translation('en_US')->body]);?>
                                                  </div>
                                                  <div class="conten2 nos_btn"><a href="<?= $article[1]['link'] ?>"><?= __('Lire l’article') ?></a></div>
                                                <div style="display:none">  <?= $this->Form->control('link2', ['value' => $article[1]['link']]);?></div>
                                              </div>
                                          </div>
                                          <div class="conten_nos4">
                                            <?=  $this->Form->control('article3', ['value'=>$post->article3]);?>
                                              <div class="conten_nos4_img"></div>
                                              <div class="conten_nos4_caption"><?= $this->Form->control('title3', ['value' => $article[2]['title'], 'rows'=>'1']);?>
                                                <?= $this->Form->control('vi_title3',['value'=>$article3->translation('vi_VN')->title]);?>
                                                <?= $this->Form->control('en_title3',['value'=>$article3->translation('en_US')->title]);?>

                                              </div>


                                              <div class="conten_nos4_time">
                                                  <div class="conten_nos4_note">
                                              <?= $this->Form->control('about3', ['value' => $article[2]['about']]);?>
                                              <?= $this->Form->control('vi_about3',['value'=>$article3->translation('vi_VN')->about]);?>
                                              <?= $this->Form->control('en_about3',['value'=>$article3->translation('en_US')->about]);?>

                                            </div>8 min

                                              </div>
                                              <div class="conten_nos4_about">
                                                <?= $this->Form->control('body3', ['value' => $article[2]['body'], 'rows'=>'2']);?>
                                                <?= $this->Form->control('vi_body3',['rows'=>'1', 'value'=>$article3->translation('vi_VN')->body]);?>
                                                <?= $this->Form->control('en_body3',['rows'=>'1', 'value'=>$article3->translation('en_US')->body]);?>
                                              </div>
                                              <div class="conten4 nos_btn"><a href="<?= $article[1]['link'] ?>"><?= __('Lire l’article') ?></a></div>
                                              <div style="display:none"><?= $this->Form->control('link3', ['value' => $article[2]['link']]);?></div>
                                          </div>

                                          <div class="conten_nos3">
                                              <?=  $this->Form->control('article4', ['value'=>$post->article4]);?>
                                              <div class="conten_nos3_img"></div>
                                              <div class="conten_nos3_caption">
                                                <?= $this->Form->control('title4', ['value' => $article[3]['title'], 'rows'=>'1']);?>
                                                <?= $this->Form->control('vi_title4',['value'=>$article4->translation('vi_VN')->title]);?>
                                                <?= $this->Form->control('en_title4',['value'=>$article4->translation('en_US')->title]);?>
                                              </div>




                                              <div class="conten_nos3_time">
                                                  <div class="conten_nos3_note">
                                                    <?= $this->Form->control('about4', ['value' => $article[3]['about']]);?>
                                                    <?= $this->Form->control('vi_about4',['value'=>$article4->translation('vi_VN')->about]);?>
                                                    <?= $this->Form->control('en_about4',['value'=>$article4->translation('en_US')->about]);?>

                                                  </div>12 min
                                              </div>
                                              <div class="conten_nos3_about">
                                                <?= $this->Form->control('body4', ['value' => $article[3]['body'], 'rows'=>'2']);?>
                                                <?= $this->Form->control('vi_body4',['rows'=>'1', 'value'=>$article4->translation('vi_VN')->body]);?>
                                                <?= $this->Form->control('en_body4',['rows'=>'1', 'value'=>$article4->translation('en_US')->body]);?>

                                              </div>
                                              <div class="conten3 nos_btn"><a href="<?= $article[1]['link'] ?>"><?= __('Lire l’article') ?></a></div>
                                            <div style="display:none"><?= $this->Form->control('link4', ['value' => $article[3]['link']]);?></div>
                                          </div>


                                      </div>

                                        <i class="fa-solid fa-circle-xmark" id="js_close_article"></i>
                                        <div class="Language_article">
                                            <div class="en"id="article-es"><img src="https://dichthuatphuongdong.com/tienich/uploads/flags/shiny/48x48/us.png" alt="tieng-Anh"></div>
                                            <div class="vn"id="article-vi"><img src="https://dichthuatphuongdong.com/tienich/uploads/flags/shiny/48x48/vn.png" alt="TIENG-VIET"></div>
                                            <div class="fr" id="article-fr"><img src="https://dichthuatphuongdong.com/tienich/uploads/flags/shiny/48x48/fr.png" alt="Tieng-Phap"></div>
                                        </div>

                                      <button type="submit" name="button" id="save_articles">save</i></button>

                                      <script>
                                      const articleVi = document.getElementById('article-vi')
                                      const articleEn = document.getElementById('article-es')
                                      const articleFr = document.getElementById('article-fr')
                                      const aboutArticleVi = document.getElementById('vi-about1')
                                      const aboutArticleEn = document.getElementById('en-about1')
                                      const aboutArticleFr = document.getElementById('about1')

                                      const titleArticleVi = document.getElementById('vi-title1')
                                      const titleArticleEn = document.getElementById('en-title1')
                                      const titleArticleFr = document.getElementById('title1')

                                      const bodyArticleVi = document.getElementById('vi-body1')
                                      const bodyArticleEn = document.getElementById('en-body1')
                                      const bodyArticleFr = document.getElementById('body1')
                                      // bai bao so 2
                                      const aboutArticleVi2 = document.getElementById('vi-about2')
                                      const aboutArticleEn2 = document.getElementById('en-about2')
                                      const aboutArticleFr2 = document.getElementById('about2')

                                      const titleArticleVi2 = document.getElementById('vi-title2')
                                      const titleArticleEn2 = document.getElementById('en-title2')
                                      const titleArticleFr2 = document.getElementById('title2')

                                      const bodyArticleVi2 = document.getElementById('vi-body2')
                                      const bodyArticleEn2 = document.getElementById('en-body2')
                                      const bodyArticleFr2 = document.getElementById('body2')
                                      // bai bao so 3
                                      const aboutArticleVi3 = document.getElementById('vi-about3')
                                      const aboutArticleEn3 = document.getElementById('en-about3')
                                      const aboutArticleFr3 = document.getElementById('about3')

                                      const titleArticleVi3 = document.getElementById('vi-title3')
                                      const titleArticleEn3 = document.getElementById('en-title3')
                                      const titleArticleFr3 = document.getElementById('title3')

                                      const bodyArticleVi3 = document.getElementById('vi-body3')
                                      const bodyArticleEn3 = document.getElementById('en-body3')
                                      const bodyArticleFr3 = document.getElementById('body3')
                                      // bai bao so 4
                                      const aboutArticleVi4 = document.getElementById('vi-about4')
                                      const aboutArticleEn4 = document.getElementById('en-about4')
                                      const aboutArticleFr4 = document.getElementById('about4')

                                      const titleArticleVi4 = document.getElementById('vi-title4')
                                      const titleArticleEn4 = document.getElementById('en-title4')
                                      const titleArticleFr4 = document.getElementById('title4')

                                      const bodyArticleVi4 = document.getElementById('vi-body4')
                                      const bodyArticleEn4 = document.getElementById('en-body4')
                                      const bodyArticleFr4 = document.getElementById('body4')


                                      function showArticleVi(){
                                        aboutArticleVi.classList.add('open')
                                        titleArticleVi.classList.add('open')
                                        bodyArticleVi.classList.add('open')
                                        aboutArticleEn.classList.remove('open')
                                        bodyArticleEn.classList.remove('open')
                                        titleArticleEn.classList.remove('open')
                                        bodyArticleFr.classList.add('close')
                                        titleArticleFr.classList.add('close')
                                        aboutArticleFr.classList.add('close')
                                        // bai bao so 2
                                        aboutArticleVi2.classList.add('open')
                                        titleArticleVi2.classList.add('open')
                                        bodyArticleVi2.classList.add('open')
                                        aboutArticleEn2.classList.remove('open')
                                        bodyArticleEn2.classList.remove('open')
                                        titleArticleEn2.classList.remove('open')
                                        bodyArticleFr2.classList.add('close')
                                        titleArticleFr2.classList.add('close')
                                        aboutArticleFr2.classList.add('close')
                                        // bai bao so 3
                                        aboutArticleVi3.classList.add('open')
                                        titleArticleVi3.classList.add('open')
                                        bodyArticleVi3.classList.add('open')
                                        aboutArticleEn3.classList.remove('open')
                                        bodyArticleEn3.classList.remove('open')
                                        titleArticleEn3.classList.remove('open')
                                        bodyArticleFr3.classList.add('close')
                                        titleArticleFr3.classList.add('close')
                                        aboutArticleFr3.classList.add('close')
                                        // bai bao so 4
                                        aboutArticleVi4.classList.add('open')
                                        titleArticleVi4.classList.add('open')
                                        bodyArticleVi4.classList.add('open')
                                        aboutArticleEn4.classList.remove('open')
                                        bodyArticleEn4.classList.remove('open')
                                        titleArticleEn4.classList.remove('open')
                                        bodyArticleFr4.classList.add('close')
                                        titleArticleFr4.classList.add('close')
                                        aboutArticleFr4.classList.add('close')
                                      }
                                      function showArticleEn(){
                                        titleArticleEn.classList.add('open')
                                        aboutArticleEn.classList.add('open')
                                        bodyArticleEn.classList.add('open')
                                        titleArticleFr.classList.add('close')
                                        aboutArticleFr.classList.add('close')
                                        bodyArticleFr.classList.add('close')
                                        aboutArticleVi.classList.remove('open')
                                        bodyArticleVi.classList.remove('open')
                                        titleArticleVi.classList.remove('open')
                                        // bai so2
                                        titleArticleEn2.classList.add('open')
                                        aboutArticleEn2.classList.add('open')
                                        bodyArticleEn2.classList.add('open')
                                        titleArticleFr2.classList.add('close')
                                        aboutArticleFr2.classList.add('close')
                                        bodyArticleFr2.classList.add('close')
                                        aboutArticleVi2.classList.remove('open')
                                        bodyArticleVi2.classList.remove('open')
                                        titleArticleVi2.classList.remove('open')
                                        // bai bao so 3
                                        titleArticleEn3.classList.add('open')
                                        aboutArticleEn3.classList.add('open')
                                        bodyArticleEn3.classList.add('open')
                                        titleArticleFr3.classList.add('close')
                                        aboutArticleFr3.classList.add('close')
                                        bodyArticleFr3.classList.add('close')
                                        aboutArticleVi3.classList.remove('open')
                                        bodyArticleVi3.classList.remove('open')
                                        titleArticleVi3.classList.remove('open')
                                        // bai bao so 4
                                        titleArticleEn4.classList.add('open')
                                        aboutArticleEn4.classList.add('open')
                                        bodyArticleEn4.classList.add('open')
                                        titleArticleFr4.classList.add('close')
                                        aboutArticleFr4.classList.add('close')
                                        bodyArticleFr4.classList.add('close')
                                        aboutArticleVi4.classList.remove('open')
                                        bodyArticleVi4.classList.remove('open')
                                        titleArticleVi4.classList.remove('open')



                                      }
                                      function showArticleFr(){
                                        bodyArticleEn.classList.remove('open')
                                        aboutArticleEn.classList.remove('open')
                                        titleArticleEn.classList.remove('open')
                                        bodyArticleVi.classList.remove('open')
                                        titleArticleVi.classList.remove('open')
                                        aboutArticleVi.classList.remove('open')
                                        aboutArticleFr.classList.remove('close')
                                        bodyArticleFr.classList.remove('close')
                                        titleArticleFr.classList.remove('close')
                                        // bai so 2
                                        bodyArticleEn2.classList.remove('open')
                                        aboutArticleEn2.classList.remove('open')
                                        titleArticleEn2.classList.remove('open')
                                        bodyArticleVi2.classList.remove('open')
                                        titleArticleVi2.classList.remove('open')
                                        aboutArticleVi2.classList.remove('open')
                                        aboutArticleFr2.classList.remove('close')
                                        bodyArticleFr2.classList.remove('close')
                                        titleArticleFr2.classList.remove('close')
                                        // bai bao so 3
                                        bodyArticleEn3.classList.remove('open')
                                        aboutArticleEn3.classList.remove('open')
                                        titleArticleEn3.classList.remove('open')
                                        bodyArticleVi3.classList.remove('open')
                                        titleArticleVi3.classList.remove('open')
                                        aboutArticleVi3.classList.remove('open')
                                        aboutArticleFr3.classList.remove('close')
                                        bodyArticleFr3.classList.remove('close')
                                        titleArticleFr3.classList.remove('close')
                                        // bai bao so4
                                        bodyArticleEn4.classList.remove('open')
                                        aboutArticleEn4.classList.remove('open')
                                        titleArticleEn4.classList.remove('open')
                                        bodyArticleVi4.classList.remove('open')
                                        titleArticleVi4.classList.remove('open')
                                        aboutArticleVi4.classList.remove('open')
                                        aboutArticleFr4.classList.remove('close')
                                        bodyArticleFr4.classList.remove('close')
                                        titleArticleFr4.classList.remove('close')

                                      }

                                    articleVi.addEventListener('click', showArticleVi)
                                    articleEn.addEventListener('click', showArticleEn)
                                    articleFr.addEventListener('click', showArticleFr)

                                    console.log(articleVi);
                                    console.log(articleEn);
                                    console.log(articleFr);

                                    console.log(aboutArticleVi3);
                                    console.log(aboutArticleEn3);
                                    console.log(aboutArticleFr3);

                                    console.log(bodyArticleVi3);
                                    console.log(bodyArticleEn3);
                                    console.log(bodyArticleFr3);

                                    console.log(titleArticleVi3);
                                    console.log(titleArticleEn3);
                                    console.log(titleArticleFr3);


                                      </script>


                                    </div>
                                    <script>
                                      const  openArticle = document.getElementById('js_open_article')
                                      const closeArticle = document.getElementById('js_close_article')
                                      const overArticle = document.querySelector('.over_Article')
                                      function showArticle(){
                                        overArticle.classList.add('open')
                                      }
                                      function hideArticle(){
                                        overArticle.classList.remove('open')
                                      }
                                      openArticle.addEventListener('click', showArticle)
                                      closeArticle .addEventListener('click', hideArticle)

                                    </script>


                              </div>
                              </div>



                                <?= $this->Form->end();?>
              <?= $this->Html->script('changer.js') ?>
</body>
</html>

<?php endforeach; ?>
<?php endforeach; ?>
<?php endforeach; ?>
<?php endforeach; ?>
