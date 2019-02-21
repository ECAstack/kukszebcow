<?php 
  $title = 'KUKS - kontakt';
  include('header.php');
  if(file_exists('kontakt/index.php')){

    $img_src = file_exists('kontakt/foto.jpg') ? 'kontakt/foto.jpg' : 'css/article.jpg';

    include('kontakt/index.php');
  
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
                  <p>
                  <strong>Napisz do nas:</strong>
                  <a href="mailto:spkukszebcow@gmail.com?Subject=Temat%20maila" target="_top">E-mail</a>
                  </p>
                </div>
                <div class="col-md-8" style="text-align: center;">
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
          <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133179443-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133179443-1');
</script>

          <style>
            .article-content p {
                text-indent: 20px;
            }
          </style>
 <?php
  } else {
    echo 'Wystąpił błąd - brak źródła o klubie';
  }
  ?>

<?php include('footer.php'); ?> 
