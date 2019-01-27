<?php 
  $title = 'KUKS - aktualności';
  include('header.php');
  if(isset($_GET['nr']) && $_GET['nr'] > 0 && file_exists('artykuly/'.$_GET['nr'].'/index.php')){

    $img_src = file_exists('artykuly/'.$_GET['nr'].'/foto.jpg') ? 'artykuly/'.$_GET['nr'].'/foto.jpg' : 'css/article.jpg';

    include('artykuly/'.$_GET['nr'].'/index.php');
  
?>
        <div class="container">
          <div class="row">
            <div class="col-md-12 article">
              
              <div class="article-header">
                <h1 class="article-title"><a href="#"><?php echo $title;?></a></h1>
                <div class="article-info">
                    <?php echo $data;?>
                </div>
              </div>

              <div class="article-content">
                <div class="col-md-4 article-img">
                  <img src="<?php echo $img_src;?>" alt="article" width="100%" />
                </div>
                <div class="col-md-8" style="text-align: justify;">
                    <?php
                      foreach (explode("\n", $text) as $line){
                        if (trim($line)){
                          echo "<p>$line</p>";
                        }
                      }

                     ?>
                </div>
              </div>

            </div>
          </div>
          <div class="row">
          <?php 
            if(isset($galeria) && $galeria == 'T'){
              ?>
                
                <script type="text/javascript" src="js/shadowbox.js"></script>
                <script type="text/javascript">
                  Shadowbox.init({
                     
                      modal: false,
                      overlayOpacity: 0.9,
                      oversized: false
                  });
                </script>
                <link rel="stylesheet" type="text/css" href="css/shadowbox.css" />
                <style>
                  #galeria img {
                    margin-bottom: 20px;
                  }
                  .galeria-img {
                    width: 100%;
                    border-radius: 15px;
                    margin-top: 15px;
                  }
                </style>
              <?php
              foreach( glob('artykuly/'.$_GET['nr'].'/galeria/*.jpg') as $image){
              ?>
                <div class="col-md-3 col-sm-4 col-xs-6">
                  <a href="<?php echo $image;?>" rel="shadowbox[gal-artykul]"><img src="<?php echo $image;?>" alt="galeria" class="galeria-img" /></a>
                </div>
              <?php
              }
            }
          ?>
          </div>
          <style>
            .article-content p {
                text-indent: 20px;
            }
          </style>
 <?php
  } else {
    echo 'Wystąpił błąd - brak artykułu';
  }
  ?>

<?php include('footer.php'); ?> 
