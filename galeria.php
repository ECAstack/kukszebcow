<?php 
  $title = 'KUKS - galeria';
  include('header.php');
?>
      
      <link rel="stylesheet" type="text/css" href="css/shadowbox.css" />
      <script type="text/javascript" src="js/shadowbox.js"></script>
      <script type="text/javascript">
        Shadowbox.init({
            handleOversize: "drag",
            modal: false,
            overlayOpacity: 0.9
        });
      </script>
      <style>
        #galeria img {
          margin-bottom: 20px;
        }
      </style>
      <div class="container">
            
          <div class="panel-group" id="galeria">
              
            <?php

              if(file_exists('galeria/galeria.conf')){

                $file = fopen('galeria/galeria.conf', 'r');
                if ($file) {
                    while (($line = fgets($file)) !== false) {
                        $gal = explode(',',$line);

                        if(isset($gal[0]) && isset($gal[1])){
                          ?>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#galeria" href="#galeria-<?php echo $gal[0];?>"><?php echo $gal[1];?></a>
                                </h4>
                            </div>
                            <div id="galeria-<?php echo $gal[0];?>" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php 
                                      foreach( glob('galeria/'.$gal[0].'/*.jpg') as $image){
                                        ?>
                                        <div class="col-md-3 col-sm-4 col-xs-6">
                                          <a href="<?php echo $image;?>" rel="shadowbox[gal-<?php echo $gal[0];?>]"><img src="<?php echo $image;?>" alt="galeria" width="100%" /></a>
                                        </div>
                                        <?php
                                      }
                                    ?>
                                    <div class="col-xs-12">
                                      <button type="button" class="btn btn-secondary btn-lg" data-toggle="collapse" href="#galeria-<?php echo $gal[0];?>">Zwiń</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                          <?php
                        }
                    }

                    fclose($file);
                } else {
                    echo 'Błąd ładowania - brak galerii.';
                } 



              }


            ?>              

              

          </div>
          <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133179443-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133179443-1');
</script>

<?php include('footer.php'); ?> 