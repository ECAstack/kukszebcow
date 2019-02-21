<?php 
  $title = 'KUKS - o klubie';
  include('header.php');
  if(file_exists('oklubie/index.php')){

    $img_src = file_exists('oklubie/foto.jpg') ? 'oklubie/foto.jpg' : 'css/article.jpg';

    include('oklubie/index.php');
  
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
                  <p id="statut"><a href="pliki/KUKS-statut.pdf" download><img src="pliki/pdf.png" width="64" alt="pobierz-pdf" />Pobierz statut klubu</a></p>
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
            #statut img {
              border: 0px !important;
            }
          </style>
 <?php
  } else {
    echo 'Wystąpił błąd - brak źródła o klubie';
  }
  ?>

<?php include('footer.php'); ?> 