<?php 
  $title = 'KUKS - aktualności';
  include('header.php');

  function artykul_zajawka($text){
    $max = 210;

    if(strpos(substr($text,$max,30),' ') > 0){
      echo substr($text,0,$max + strpos(substr($text,$max,30),' ') );
    } else {
      echo substr($text,0,$max);
    }
  }
?>
        <div class="container">
          <div class="row">
          <?php 
            $nr=0;
            foreach( array_reverse(glob('artykuly/*/index.php')) as $artykul){
              include($artykul);
              $sciezka = explode('/',$artykul);
          ?>
          <div class="col-md-6 article">
              
              <div class="article-header">
                <h2 class="article-title"><a href="artykul.php?nr=<?php echo $sciezka[1];?>"><?php echo $title;?></a></h2>
                <div class="article-info">
                    <?php echo $data;?>
                </div>
              </div>

              <div class="article-content">
                <div class="col-md-6 article-img">
                  <?php
                    
                    if( file_exists('artykuly/'.$sciezka[1].'/foto.jpg') )  {
                      echo '<img src="artykuly/'.$sciezka[1].'/foto.jpg" alt="article" width="100%" />';
                    } else {
                      ?> <img src="css/article.jpg" alt="article" width="100%" /> <?php
                    }
                  ?>
                </div>
                <div class="col-md-6">
                    <?php 
                      artykul_zajawka($text);
                    ?>
                  <p><a class="btn btn-default read-more" href="artykul.php?nr=<?php echo $sciezka[1];?>">Czytaj więcej...</a></p>
                </div>
              </div>

            </div>

          <?php
              $nr++;

              if($nr%2 == 0){
                ?>
                </div>
                <div class="row">
                <?php
              }
            }

          ?>
          </div>

<?php include('footer.php'); ?> 