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

<body>
  <div class="background-default" id="main">
        <div class="container-fluid mx-auto mw-1024 p-0">

                    <nav class="navbar navbar-expand-lg navbar-light background-default bg-md-light mx-auto">
                      <div class="container-fluid">
                        <a class="navbar-brand col-4" href="#"><img src="https://www.z0gravity.com/storage-z0G/2019/05/z0_Gravity_Logo_Couleur.png"style="width: 200px;" class="image_logo"></a>
                        <button class="navbar-toggler"  data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse mx-auto" id="navbarNavAltMarkup">
                          <div class="navbar-nav font-600 ">
                            <a class="nav-link text-black-blue me-3 rounded-bar ps-3" href="#"><?= __('ENTREPRISES')?></a>
                            <a class="nav-link text-black-blue me-3 rounded-bar ps-3" href="#"><?= __('SECTEUR PUBLIC')?></a>
                            <a class="nav-link text-black-blue me-3 rounded-bar ps-3" href="#"><?= __('À PROPOS')?></a>
                            <a class="nav-link text-black-blue me3 rounded-bar ps-3" href="#"><?= __('CONTACT')?></a>
                            <a class="nav-link text-black-blue me-3 rounded-bar ps-3" href="#"><?= __('BLOG')?></a>
                          </div>
                        </div>
                      </div>
                    </nav>
        </div>
                    <!-- about-header -->
                  <div class="container mt-5 w-100 mx-auto p-0 mb-80">
                        <div class="row d-flex mw-1024 mx-auto position-relative p-0">
                          <div class="col p-0 mt-315 mt-md-0 p-3 p-md-0">
                                <div class="heading fs-40 fs-md-70 lh-76 fw-500 line-article mw-635"><?= $header['title']?></div>
                                <div class="fw-500 fs-20 line-article mw-405 mt-4" id="description"><?= $header['about']?></div>
                                <div class="rounded-5 mt-5 fw-500 w-230 h-39 bg-yellow rounded-22 text-center lh-39"><?= $header['conten_button']?></div>
                                
                                  
                               
                                  <div class="video_button d-flex mt-2 fs-14 w-300 mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                  <i class="fa-solid fa-circle-play bg-transparent fs-40"></i>
                                  <p class="bg-transparent pt-2 fw-500">Voir la vidéo</p>
                                  </div>

                                  <!-- Modal -->
                                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
                                      <div class="modal-content align-items-center">
                                        <div class="modal-header">
          
                                          <div class="btn-close" data-bs-dismiss="modal" aria-label="Close"></div>
                                        </div>
                                        <div class="modal-body">
                                       
                                        <iframe width="1280" height="720" src="https://www.youtube.com/embed/VYFjvMfVv2o" title="Tailwind CSS Tutorial #8 - Responsive Classes" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                     
                                        
                                        
                                        </div>
                                      
                                      </div>
                                    </div>
                                  </div>
                                  
                              
                                <div class="col position-absolute end-md-0 top-0 z-index-0 mt-5">              
                               <img src="<?=$display->image_header?>" alt="" class="image_header min-w-733 sm-350 h-412 ">
                               </div>
                          </div>
                       </div>
                  </div>

    <!-- slider -->
    <div class="mb-80" id="slider">
        <div class="container-fluid justify-content-center">
              <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class=" container-fluid carousel-inner p-0">
                          <div class="container-fluid carousel-item active ">
                              <div class="row d-flex justify-content-xxl-between justify-content-center">
                                  <div class="col-md-1 d-none d-xxl-block bg-white rounded-end-right"></div>
                                  <div class=" border rounded-22 bg-white p-4 mw-1024 h-422 ">

                                      <div class="row d-flex position-relative">
                                          <div class="col-12 text-uppercase font-400 justify-content-between d-flex text-gray fw-bold"><?=$pre[0]['title_pres'] ?>
                                          <div class="text-end bg-white d-flex ">
                                              <div class="prev me-4"  data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                    <i class="fa-solid fa-circle-chevron-left text-gray"></i>
                                              </div>
                                              <div class="next "  data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                    <i class="fa-solid fa-circle-chevron-right text-gray"></i>
                                              </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class=""><?= $this->Html->image($pre[0]['logo'])?></div>
                                      <div class="h-35 fs-24 fst-italic"><?= __($pre[0]['about_pres'])?></div>
                                      <div class="text-black-blue fw-bold fs-18"><?= $pre[0]['author']?> </div>
                                      <div class="row text-gray">
                                          <div class="col-12 col-md-9 text-start fs-18"><?= $pre[0]['dress']?></div>
                                          <div class="col-9 col-md-3 text-end fs-18"><i class="fa-solid fa-up-right-from-square fs-18"></i> <?=__('Lire l’article')  ?> </div>

                                      </div>
                                    </div>
                                          <div class="col-md-1  d-none  d-xxl-block bg-white rounded-start-left"></div>
                            </div>
                          </div>
                          <div class="container-fluid carousel-item p-o">
                                <div class="row d-flex justify-content-xxl-between justify-content-center">
                                  <div class="col-md-1  d-none d-xxl-block  bg-white rounded-end-right"></div>
                                  <div class="border rounded-22 bg-white p-4 mw-1024 h-422">
                                      <div class="row d-flex position-relative">
                                        <div class="col-12 text-gray text-uppercase justify-content-between d-flex"><?=$pre[1]['title_pres']?>
                                            <div class=" text-end bg-white d-flex">
                                                <div class="prev me-4"  data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                    <i class="fa-solid fa-circle-chevron-left text-gray"></i>
                                                </div>
                                                <div class="next "  data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                    <i class="fa-solid fa-circle-chevron-right text-gray"></i>
                                                </div>
                                              </div>
                                            </div>
                                      </div>
                                             <div class=""><?= $this->Html->image($pre[1]['logo'])?></div>
                                               <div class="h-35 fs-24 fst-italic"><?= __($pre[1]['about_pres'])?></div>
                                              <div class="text-black-blue fw-bold fs-18"><?= $pre[1]['author']?></div>
                                              <div class="row text-gray">
                                                  <div class="col-12 col-md-9 text-start fs-18"><?= $pre[1]['dress']?></div>
                                                  <div class="col-9 col-md-3 text-end fs-18"><i class="fa-solid fa-up-right-from-square fs-18"></i> <?=__('Lire l’article')?></div>
                                              </div>
                                                </div>
                                                <div class="col-md-1  d-none  d-xxl-block bg-white rounded-start-left"></div>
                                          </div>
                                        </div>
                                        <div class="container-fulid carousel-item p-0">
                                            <div class="row d-flex justify-content-xxl-between justify-content-center">
                                                <div class="col-md-1  d-none d-xxl-block bg-white rounded-end-right"></div>
                                                <div class="border rounded-22 bg-white p-4 mw-1024 h-422">

                                          <div class="row d-flex position-relative">
                                            <div class="col-12 text-gray text-uppercase d-flex justify-content-between"><?=$pre[2]['title_pres'] ?>
                                            <div class=" text-end bg-white d-flex">
                                              <div class="prev me-4"  data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                <i class="fa-solid fa-circle-chevron-left text-gray"></i>
                                              </div>
                                              <div class="next "  data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                <i class="fa-solid fa-circle-chevron-right text-gray"></i>
                                              </div>
                                              </div>
                                          </div>
                                      </div>
                                                    <div class=""><?= $this->Html->image($pre[2]['logo'])?></div>
                                                    <div class="h-35 fs-24 fst-italic"><?= __($pre[2]['about_pres'])?></div>
                                                    <div class="text-black-blue fw-bold fs-18"><?= $pre[2]['author']?></div>
                                                    <div class="row text-gray ">
                                                      <div class="col-12 col-md-9 text-start fs-18"><?= $pre[2]['dress']?></div>
                                                      <div class="col-9 col-md-3 text-end fs-18"><i class="fa-solid fa-up-right-from-square fs-18"></i> <?=__('Lire l’article')?></div>

                                                    </div>
                                                </div>
                                                <div class="col-md-1  d-none  d-xxl-block bg-white rounded-start-left"></div>
                                           </div>
                                      </div>
                  </div>
                </div>
        </div>
      </div>
    <!-- pours -->
    <div class="container-fluid mt-100 bg-black-bule">
      <div class="row body_pours mx-auto mw-1024">
      <div class="row justify-content-between align-items-center flex-column flex-md-row gap-5 padding-top-100">
          <div class="col col-md-1 fs-1 text-center headding_pours">POUR FAIRE COURT.</div>
          <div class="col-10 fs-4 text-white text-center text-md-start description_pours ps-md-7">Z0 Gravity est un logiciel de gestion multi-projets : quelle que soit leur complexité, vous gérez facilement
            les plannings, les budgets et les ressources humaines de vos projets par un usage transversal et collaboratif.</div>

      </div>
      <div class="row mx-auto position-relative p-0 magrin-bottom-400 mb-md-5 ps-4 mt-150 bg-orange h-687 rounded-22">
          <div class="col-md-5 ">
            <h1 class="text-white sub_title_pours fw-500 fs-40 mt-100 text-center text-md-start">Notre engagement:</h1>
            <p class="w-md-75 mt-3 dark_blue font_20 text-center text-md-start fw-500 ">C'est aider tout type body'oranisation á resaliser ses projest avec un seul mot body'order :
            </p>
            <h3 class="mt-3 dark_blue font_bold font_40 text-center text-md-start">sim-pli-ci-té!</h3>
          </div>
          <div class="position-absolute bottom-0 imgage-over">
            <img src="./img/mo.png" class="w-50">
          </div>
          <div class="col-md-5 p-0 position-absolute end-0">
            <img src="./img/m1.jpg" class="rounded-md-end-right h-687 top-650 top-md-0 w-100 position-absolute">
          </div>
      </div>
      <div class="row d-flex flex-column bg-black-bule mt-650 mt-md-0">
        <h1 class="text-center text_color_blue ">Découvrez l’univers z0 Gravity</h1>
        <p class="text-white text-center font_20 w-75 mx-auto mb-4">Plannings, budgets, calendriers… En un clin d'œil, vous avez une vision globale et stratégique de l'avancée de vos projets en temps réel !</p>
        <div class="w-230 h-39 bg-yellow mx-auto rounded-5 text-center mb-100"><a class="text-decoration-none text-black lh-39"> <i class="fa-solid fa-play me-3"></i>Présentation vidéo</a></div>
      </div>
      </div>
  
           <div class="container bg-black-bule justify-content-center
    align-items-center d-flex "><img src="./img/app.jpg" class="w-100"></div>

</div>
    <div class="container-fluid bg-white">
      <div class="row justify-content-center padding-top-100">
        <div class="col-3 text-center "><h1 style="fw-bolder">Vous êtes…</h1></div>
      </div>
      <div class="row justify-content-center mt-5 gap-4 flex-lg-row flex-column align-items-center mx-auto"id="vours">
        <div class="col-3 border rounded-4 justify-content-between align-items-center d-flex flex-column bg-white mx-0"id="vour_item1">
          <img class="image_vours" src="https://www.z0gravity.com/storage-z0G/2019/06/ZG_icon_home_entreprise@3x.png" alt="">
          <h3 class="fw-bolder fs-20 text-sky ">Une entreprise</h3>
          <p class="fw-normal letter-spacing-1">Jouez collectif : fédérez vos équipes autour d'un objectif commun.</p>
          <div class=" mx-auto text-sky w-230 h-39 lh-39 rounded-22 bg-sky"><a class="text-decoration-none text-white" href="#">3,2,1… Go !</a></div>
        </div>
        <div class="col-3 border rounded-4 justify-content-between align-items-center d-flex flex-column bg-white mx-0"id="vour_item2">
         <img class="image_vours" src="https://www.z0gravity.com/storage-z0G/2019/06/ZG_icon_home_collectivites@3x.png" alt="">
          <h3 class="fw-bolder fs-20 text-orange">Une collectivité</h3>
          <p class="fw-normal letter-spacing-1">Rassemblez les acteurs de votre projet via un logiciel commun !</p>
          <div class="mx-auto bg-orange w-230 h-39 lh-39 rounded-22" style="background-color: #FF7D66;"><a class="text-decoration-none text-white" href="#">Découvrez comment</a></div>
        </div>
        <div class="col-3 border rounded-4 justify-content-between align-items-center d-flex flex-column bg-white mx-0"id="vour_item3">
         <img class="image_vours" src="https://www.z0gravity.com/storage-z0G/2019/06/ZG_icon_home_promeneur@3x.png" alt="">
          <h3 class="fw-bolder fs-20 text-yellow">Un promeneur égaré</h3>
          <p class="fw-normal letter-spacing-1">Bienvenue <br>! Installez-vous et laissez-vous guider.</p>
          <div class="mx-auto bg-yellow w-230 h-39 lh-39 rounded-22" style="background-color: #FFD051;"><a class="text-decoration-none text-white" href="#">Commençons par ici</a></div>
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
                <div class=" rounded-5 orange text-white mt-5 w-230 h-39 lh-39 text-center"><?= __('On discute !') ?></div>
            </div>
    <div class="bg-dark">
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
      <div class="row text-center text-md-start justify-content-center padding-top-65 gap-2">
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
  </div>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
            </script>
</body>
</html>
<?php endforeach; ?>
<?php endforeach; ?>
