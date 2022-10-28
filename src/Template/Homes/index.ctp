<?php foreach ($displays as $display): ?>
<?php foreach ($headers as $header): ?>
 <!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
<?= $this->Html->css('zogravity.css') ?>
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>

<body class="background-default">
  <div id="main">
                    <nav class="navbar navbar-expand-lg navbar-light background-default bg-md-light">
                      <div class="container-fluid">
                        <a class="navbar-brand col-5" href="#"><img src="https://www.z0gravity.com/storage-z0G/2019/05/z0_Gravity_Logo_Couleur.png"style="width: 200px;" class="image_logo"></a>
                        <button class="navbar-toggler"  data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                          <div class="navbar-nav font-600">
                            <a class="nav-link text-black" href="#"><?= __('ENTREPRISES')?></a>
                            <a class="nav-link text-black" href="#"><?= __('SECTEUR PUBLIC')?></a>
                            <a class="nav-link text-black" href="#"><?= __('À PROPOS')?></a>
                            <a class="nav-link text-black" href="#"><?= __('CONTACT')?></a>
                            <a class="nav-link text-black" href="#"><?= __('BLOG')?></a>
                          </div>
                        </div>
                      </div>
                    </nav>
                    <!-- about-header -->
                    <div class="container-fluid position-relative mt-5">
                        <div class="row d-flex flex-column">
                                <div class="heading fw-normal line-article " style="width: 630px;"><?= $header['title']?></div>
                                <div class="font-600 line-article" id="description"><?= $header['about']?></div>
                                <div class="rounded-5" id="conten_button"><?= $header['conten_button']?></div>
                                <div class="video_button d-flex mt-2" style="width: 300px;">
                                  <i class="fa-solid fa-circle-play bg-transparent"></i>
                                  <p class="bg-transparent">Voir la vidéo</p>
                                </div>
                                <div class="fw-normal">
                                      <img src="<?=$display->image_header?>" alt="" class="image_header position-absolute">
                                </div>
                        </div>
                  </div>
  </div>
    <!-- slider -->
    <div id="slider">
        <div class="container-fluid">
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class=" container-fluid carousel-inner">
                          <div class="container-fluid carousel-item active">
                              <div class="row d-flex justify-content-xxl-between justify-content-center">
                                  <div class="col-md-1 rounded-end d-none d-xxl-block "></div>
                                  <div class=" border rounded-4 bg-white p-4" id="slider-item1">

                                      <div class="row d-flex position-relative">
                                          <div class="col-12 text-secondary text-uppercase font-400 justify-content-between d-flex"><?=$pre[0]['title_pres'] ?>
                                          <div class="text-end bg-white d-flex ">
                                              <div class="prev me-4"  data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                    <i class="fa-solid fa-circle-chevron-left text-secondary"></i>
                                              </div>
                                              <div class="next "  data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                    <i class="fa-solid fa-circle-chevron-right text-secondary"></i>
                                              </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class=""><?= $this->Html->image($pre[0]['logo'])?></div>
                                      <div class="h-25 font-600"><?= __($pre[0]['about_pres'])?></div>
                                      <div class=""><?= $pre[0]['author']?> </div>
                                      <div class="row text-secondary">
                                          <div class="col-10"><?= $pre[0]['dress']?></div>
                                          <div class="col-2"><i class="fa-solid fa-up-right-from-square"></i> <?=__('Lire l’article')  ?> </div>

                                      </div>
                                    </div>
                                          <div class="col-md-1  d-none rounded-start d-xxl-block "></div>
                            </div>
                          </div>
                          <div class="container-fluid carousel-item">
                                <div class="row d-flex justify-content-xxl-between justify-content-center">
                                  <div class="col-md-1  rounded-end d-none d-xxl-block "></div>
                                  <div class="border rounded-4 bg-white p-4" id="slider-item2">
                                      <div class="row d-flex position-relative">
                                        <div class="col-12 text-secondary text-uppercase justify-content-between d-flex"><?=$pre[1]['title_pres']?>
                                            <div class=" text-end bg-white d-flex">
                                                <div class="prev me-4"  data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                    <i class="fa-solid fa-circle-chevron-left text-secondary"></i>
                                                </div>
                                                <div class="next "  data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                    <i class="fa-solid fa-circle-chevron-right text-secondary"></i>
                                                </div>
                                              </div>
                                            </div>
                                      </div>
                                             <div class=""><?= $this->Html->image($pre[1]['logo'])?></div>
                                               <div class="h-25"><?= __($pre[1]['about_pres'])?></div>
                                              <div class=""><?= $pre[1]['author']?></div>
                                              <div class="row text-secondary">
                                                  <div class="col-9"><?= $pre[1]['dress']?></div>
                                                  <div class="col-3"><i class="fa-solid fa-up-right-from-square"></i> <?=__('Lire l’article')?></div>
                                              </div>
                                                </div>
                                                <div class="col-md-1  d-none rounded-start d-xxl-block "></div>
                                          </div>
                                        </div>
                                        <div class="container-fulid carousel-item">
                                            <div class="row d-flex justify-content-xxl-between justify-content-center">
                                                <div class="col-md-1  rounded-end d-none d-xxl-block "></div>
                                                <div class="border rounded-4 bg-white p-4" id="slider-item3">

                                          <div class="row d-flex position-relative">
                                            <div class="col-12 text-secondary text-uppercase d-flex justify-content-between"><?=$pre[2]['title_pres'] ?>
                                            <div class=" text-end bg-white d-flex">
                                              <div class="prev me-4"  data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                <i class="fa-solid fa-circle-chevron-left text-secondary"></i>
                                              </div>
                                              <div class="next "  data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                <i class="fa-solid fa-circle-chevron-right text-secondary"></i>
                                              </div>
                                              </div>
                                          </div>
                                      </div>
                                                    <div class=""><?= $this->Html->image($pre[2]['logo'])?></div>
                                                    <div class="h-25"><?= __($pre[2]['about_pres'])?></div>
                                                    <div class=""><?= $pre[2]['author']?></div>
                                                    <div class="row text-secondary ">
                                                      <div class="col-10 col align-self-end"><?= $pre[2]['dress']?></div>
                                                      <div class="col-2 col align-self-end"><i class="fa-solid fa-up-right-from-square"></i> <?=__('Lire l’article')?></div>

                                                    </div>
                                                </div>
                                                <div class="col-md-1  d-none rounded-start d-xxl-block "></div>
                                           </div>
                                      </div>
                  </div>
                </div>
        </div>
      </div>
    <!-- pours -->
    <div class="container-fluid margin_top_100 p-0" id="pours">
      <div class="row body_pours mx-auto">
      <div class="row justify-content-between align-items-center flex-column flex-md-row gap-5 padding-top-100">
          <div class="col-10 col-md-1 fs-1 text-center headding_pours">POUR FAIRE COURT.</div>
          <div class="col-10 fs-4 text-white text-start description_pours">Z0 Gravity est un logiciel de gestion multi-projets : quelle que soit leur complexité, vous gérez facilement
            les plannings, les budgets et les ressources humaines de vos projets par un usage transversal et collaboratif.</div>

      </div>
      <div class="row mx-auto position-relative p-0 magrin-bottom-400 mb-md-5" id="about_pours">
          <div class="col-md-5 ">
            <h1 class="text-white sub_title_pours font_bold font_40 margin_top_100 text-center text-md-start">Notre engagement:</h1>
            <p class="w-md-75 mt-3 dark_blue font_20 text-center text-md-start">C'est aider tout type body'oranisation á resaliser ses projest avec un seul mot body'order :
            </p>
            <h3 class="mt-3 dark_blue font_bold font_40 text-center text-md-start">sim-pli-ci-té!</h3>
          </div>
          <div class="position-absolute bottom-0 imgage-over">
            <img src="./img/mo.png" class="w-50">
          </div>
          <div class="col-md-5 p-0 position-absolute end-0">
            <img src="./img/m1.jpg" class="image_pours w-100 position-absolute">
          </div>
      </div>
      <div class="row d-flex flex-column">
        <h1 class="text-center text_color_blue ">Découvrez l’univers z0 Gravity</h1>
        <p class="text-white text-center font_20 w-75 mx-auto">Plannings, budgets, calendriers… En un clin d'œil, vous avez une vision globale et stratégique de l'avancée de vos projets en temps réel !</p>
        <div class="button-2 w-25 mx-auto rounded-5 buton_custom1 margin-bottom-100"><a class="text-decoration-none text-black " style="line-height: 39px;"> <i class="fa-solid fa-play"></i>Présentation vidéo</a></div>
        <img src="./img/app.jpg" alt="">

      </div>

      </div>
  </div>


    <div class="container-fluid bg-white">
      <div class="row justify-content-center padding-top-100">
        <div class="col-3 "><h1 style="text-align:center;">Vous êtes…</h1></div>
      </div>
      <div class="row justify-content-center mt-5 gap-4 flex-lg-row flex-column align-items-center mx-auto"id="vours">
        <div class="col-3 border rounded-4 justify-content-between align-items-center d-flex flex-column bg-white mx-0"id="vour_item1">
          <img class="image_vours" src="https://www.z0gravity.com/storage-z0G/2019/06/ZG_icon_home_entreprise@3x.png" alt="">
          <h3 class="heading_vours" style="color:#049BF7 ;">Une entreprise</h3>
          <p class="descripton_vours">Jouez collectif : fédérez vos équipes autour d'un objectif commun.</p>
          <div class="border mx-auto bg-button1"><a class="text-decoration-none text-white" href="#">3,2,1… Go !</a></div>
        </div>
        <div class="col-3 border rounded-4 justify-content-between align-items-center d-flex flex-column bg-white mx-0"id="vour_item2">
         <img class="image_vours" src="https://www.z0gravity.com/storage-z0G/2019/06/ZG_icon_home_collectivites@3x.png" alt="">
          <h3 class="heading_vours" style="color: #FF7D66;">Une collectivité</h3>
          <p class="descripton_vours">Rassemblez les acteurs de votre projet via un logiciel commun !</p>
          <div class="border mx-auto bg-button1" style="background-color: #FF7D66;"><a class="text-decoration-none text-white" href="#">Découvrez comment</a></div>
        </div>
        <div class="col-3 border rounded-4 justify-content-between align-items-center d-flex flex-column bg-white mx-0"id="vour_item3">
         <img class="image_vours" src="https://www.z0gravity.com/storage-z0G/2019/06/ZG_icon_home_promeneur@3x.png" alt="">
          <h3 class="heading_vours" style="color: #FFD051;">Un promeneur égaré</h3>
          <p class="descripton_vours">Bienvenue ! Installez-vous et laissez-vous guider.</p>
          <div class="border mx-auto bg-button1" style="background-color: #FFD051;"><a class="text-decoration-none text-white" href="#">Commençons par ici</a></div>
        </div>
      </div>
    </div>


    <div class="container-fluid padding-top-100 bg-white">
      <div class="row justify-content-between width_article mx-auto d-none d-lg-flex">
        <div class="col-4 border mr-4 rounded-4 me-4 article_small padding-19 position-relative bg-white">
            <img src="<?= $article[0]['img'] ?>" class="image_article1">
            <h3><?= $article[0]['title'] ?></h3>
            <div class="row">
              <div class="col-4 color-2 margin_left"><?= $article[0]['about']?></div>
              <div class="col">15 min</div>
            </div>
            <p class="line-article"><?= $article[0]['body'] ?></p>
            <div class="button_article sky position-absolute"><a
              href="<?= $article[1]['link'] ?>"></a>Lire l’article</div>
        </div>
        <div class="col border rounded-4 article_big padding-19 position-relative bg-white">
            <div class="row">
              <div class="col-5">
                <img src="<?= $article[1]['img'] ?>" class="image_article2">
              </div>
                <div class="col article-2-text ">
                      <h3><?= $article[1]['title'] ?></h3>
                      <div class="row">
                        <div class="col-6 color-1 margin_left"><?= $article[1]['about'] ?></div>
                        <div class="col">10 min</div>
                      </div>
                      <p class="line-article"><?= $article[1]['body'] ?></p>
                      <div class="button_article sky position-absolute"><?= __('Lire l’article') ?></div>
                </div>
            </div>
        </div>
      </div>
      <div class="row justify-content-between width_article mx-auto d-none d-lg-flex">
        <div class="col border mt-4 rounded-4 article_big me-4 padding-19 position-relative bg-white">
              <h3><?= $article[2]['title'] ?></h3>
              <div class="row"><div class="col-2 color-3 margin_left"><?= $article[2]['about'] ?></div>
                               <div class="col">8 min</div>
              </div>
              <p class="line-article"><?= $article[2]['body'] ?></p>
              <div class="button_article sky position-absolute"><a href="<?= $article[1]['link'] ?>"></a><?= __('Lire l’article') ?></div>
        </div>
        <div class="col-5 border mt-4 rounded-4 article_small padding-19 position-relative bg-white">
              <h3><?= $article[3]['title'] ?></h3>
              <div class="row"><div class="col-3 color-4 margin_left"><?= $article[3]['about'] ?></div>
                               <div class="col">12 min</div></div>
              <p class="line-article"><?= $article[3]['body'] ?></p>
              <div class="button_article sky position-absolute"><a href="<?= $article[1]['link'] ?>"></a><?= __('Lire l’article') ?></div>
        </div>

      </div>
            <div class="row justify-content-center mt-5 margin-bottom-100">
                <div  class="bg-button1 text-center border rounded-5 text-white margin-top-210" style="width: 230px;"><?= __('Voir tous les articles') ?></div>
                <h1 class="text-center fw-bold "><?= __('Assez parlé de nous.') ?></h1>
                <h1 class="text-center fw-normal"><?= __('Parlez-nous de vous !') ?></h1>
                <div class="button-2 orange text-white mt-5" style="width:230px;"><?= __('On discute !') ?></div>
            </div>
            <div class="container-fluid bg-dark">
      <div class="container-xxl">
      <div class="row justify-content-center padding-top-65 flex-column flex-md-row  ">
        <div class="col-md-3 col  text-center">
          <img src="https://www.z0gravity.com/storage-z0G/2019/05/z0_Gravity_Logo_BlancBleu-1.svg" class="width-logo-bottom">
          <p class="text_color_blue"><?= __('Ensemble, on va plus loin.') ?></p>
        </div>
        <div class="col-md-2 col text-center fs-5 mb-5">
          <div><a class="text-decoration-none text-white" href="#"><?= __('Entreprises') ?></a></div>
          <div><a class="text-decoration-none text-white" href="#"><?= __('Collectivités') ?></a></div>
          <div><a class="text-decoration-none text-white" href="#"><?= __('À PROPOS') ?></a></div>
          <div><a class="text-decoration-none text-white" href="#"><?= __('CONTACT') ?></a></div>
          <div><a class="text-decoration-none text-white" href="#"><?= __('BLOG') ?></a></div>
        </div>
        <div class="col-md-3 col text-md-start text-center">
          <p class="text_color_blue m-0 fs-6"><?= __('SUIVEZ-NOUS') ?></p>
          <div class="text-white fs-4 mb-5">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter ms-2 me-2"></i>
            <i class="fa-brands fa-vimeo"></i>
          </div>
          <!-- Button trigger modal -->
            <div  class="button-3 text-white mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
             <i class="fa-solid fa-globe text-white"></i>  <?= __('changer de région') ?></div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered  modal-dialog-scrollable modal-lg">
                <div class="modal-content mx-md-3 rounded-4">
                  <div class="modal-header border-0">
                    <div  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></div>
                  </div>
                  <h1 class="ps-5 text-start"><?= __('Changer de région')?></h1>
                  <p class="ps-5 text-start"><?= __('Si vous sélectionnez une autre région, la langue et le contenu de z0gravity.com changeront.')?></p>
                  <div class="row mt-md-5 justify-content-between p-5 ps-5 text-start">
                      <div class="col-12 col-md-2 font-600">
                        <a class="text-black text-decoration-none mt-3 " href="http://localhost:8765/homes/?locale=vi_VN">Tiếng Việt</a><br>
                        <a class="text-black text-decoration-none mt-3 " href="http://localhost:8765/homes/?locale=en_US">English</a><br>
                        <a class="text-black text-decoration-none mt-3 " href="http://localhost:8765/homes/?locale=es">Español</a><br>
                      </div>
                      <div class="col-12 col-md-2 font-600 text-start">
                        <a class="text-black text-decoration-none mt-3 " href="">Français</a><br>
                        <a class="text-black text-decoration-none mt-3 " href="">Nederlands</a><br>
                        <a class="text-black text-decoration-none mt-3 " href="">Polski</a><br>
                      </div>
                      <div class="col-12 col-md-2 font-600 text-start">
                        <a class="text-black text-decoration-none mt-3 " href="">Português</a><br>
                        <a class="text-black text-decoration-none mt-3 " href="">Русский</a><br>
                        <a class="text-black text-decoration-none mt-3 " href="">Bokmål</a><br>
                      </div>
                      <div class="col-12 col-md-2 font-600 text-start">
                        <a class="text-black text-decoration-none mt-3 " href="">Ελληνικά</a><br>
                        <a class="text-black text-decoration-none mt-3 " href="">日本語繁</a><br>
                        <a class="text-black text-decoration-none mt-3 " href="">體中文</a><br>
                      </div>
                  </div>

                </div>
              </div>
            </div>

        </div>
      </div>
      <div class="row text-start justify-content-center padding-top-65 gap-2">
        <div class="col-md-7 mx-md-0 col mx-auto mb-3">
        <a class="text-decoration-none" class="text-decoration-none text-white" href="#">© 2019 Globalsi SAS</a>
        <a class="text-decoration-none ms-2" href="#">Plan du site</a>
        <a class="text-decoration-none ms-2" href="#">Contactez-nous</a>
        <a class="text-decoration-none ms-2" href="#"> Mentions légales</a>
      </div>
    </div>
    </div>
  </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </script>
</body>

</html>
<?php endforeach; ?>
<?php endforeach; ?>
