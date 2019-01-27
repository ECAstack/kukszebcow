<?php 
  $title = 'KUKS - zawodnicy';
  include('header.php');
?>
      
      <div class="container">
            
          <div class="panel-group" id="galeria-zawodnicy">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#galeria-zawodnicy" href="#zawodnicy-skrzaty">Zawodnicy Skrzaty</a>
                      </h4>
                  </div>
                  <div id="zawodnicy-skrzaty" class="panel-collapse collapse">
                      <div class="panel-body">
                          <?php 
                            foreach( glob('zawodnicy/skrzaty/*.jpg') as $zawodnik){
                              ?>
                              <div class="col-md-2 col-sm-3 col-xs-6">
                                <img src="<?php echo $zawodnik;?>" alt="skrzaty" width="100%" />
                                <p style="height: 50px;text-align:center;"><b><?php echo pathinfo($zawodnik, PATHINFO_FILENAME);?></b></p>
                              </div>
                              <?php
                            }
                          ?>
                          <div class="col-xs-12">
                            <button type="button" class="btn btn-secondary btn-lg" data-toggle="collapse" href="#zawodnicy-skrzaty">Zwiń</button>
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#galeria-zawodnicy" href="#zawodnicy-zaki">Zawodnicy Żaki</a>
                      </h4>
                  </div>
                  <div id="zawodnicy-zaki" class="panel-collapse collapse">
                      <div class="panel-body">
                          <?php 
                            foreach( glob('zawodnicy/zaki/*.jpg') as $zawodnik){
                              ?>
                              <div class="col-md-2 col-sm-3 col-xs-6">
                                <img src="<?php echo $zawodnik;?>" alt="zaki" width="100%" />
                                <p style="height: 50px;text-align:center;"><b><?php echo pathinfo($zawodnik, PATHINFO_FILENAME);?></b></p>
                              </div>
                              <?php
                            }
                          ?>
                          <div class="col-xs-12">
                            <button type="button" class="btn btn-secondary btn-lg" data-toggle="collapse" href="#zawodnicy-zaki">Zwiń</button>
                          </div>
                      </div>
                  </div>
              </div>
              
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#galeria-zawodnicy" href="#zawodnicy-orlik">Zawodnicy Orlik</a>
                      </h4>
                  </div>
                  <div id="zawodnicy-orlik" class="panel-collapse collapse">
                      <div class="panel-body">
                          <?php 
                            foreach( glob('zawodnicy/orlik/*.jpg') as $zawodnik){
                              ?>
                              <div class="col-md-2 col-sm-3 col-xs-6">
                                <img src="<?php echo $zawodnik;?>" alt="orlik" width="100%" />
                                <p style="height: 50px;text-align:center;"><b><?php echo pathinfo($zawodnik, PATHINFO_FILENAME);?></b></p>
                              </div>
                              <?php
                            }
                          ?>
                          <div class="col-xs-12">
                            <button type="button" class="btn btn-secondary btn-lg" data-toggle="collapse" href="#zawodnicy-orlik">Zwiń</button>
                          </div>
                      </div>

                  </div>
              </div>

              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#galeria-zawodnicy" href="#zawodnicy-mlodzik">Zawodnicy Młodzik</a>
                      </h4>
                  </div>
                  <div id="zawodnicy-mlodzik" class="panel-collapse collapse">
                      <div class="panel-body">
                          <?php 
                            foreach( glob('zawodnicy/mlodzik/*.jpg') as $zawodnik){
                              ?>
                              <div class="col-md-2 col-sm-3 col-xs-6">
                                <img src="<?php echo $zawodnik;?>" alt="mlodzik" width="100%" />
                                <p style="height: 50px;text-align:center;"><b><?php echo pathinfo($zawodnik, PATHINFO_FILENAME);?></b></p>
                              </div>
                              <?php
                            }
                          ?>
                          <div class="col-xs-12">
                            <button type="button" class="btn btn-secondary btn-lg" data-toggle="collapse" href="#zawodnicy-mlodzik">Zwiń</button>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#galeria-zawodnicy" href="#zawodnicy-seniorzy">Zawodnicy Seniorzy</a>
                      </h4>
                  </div>
                  <div id="zawodnicy-seniorzy" class="panel-collapse collapse">
                      <div class="panel-body">
                          <?php 
                            foreach( glob('zawodnicy/seniorzy/*.jpg') as $zawodnik){
                              ?>
                              <div class="col-md-2 col-sm-3 col-xs-6">
                                <img src="<?php echo $zawodnik;?>" alt="seniorzy" width="100%" />
                                <p style="height: 50px;text-align:center;"><b><?php echo pathinfo($zawodnik, PATHINFO_FILENAME);?></b></p>
                              </div>
                              <?php
                            }
                          ?>
                          <div class="col-xs-12">
                            <button type="button" class="btn btn-secondary btn-lg" data-toggle="collapse" href="#zawodnicy-seniorzy">Zwiń</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

<?php include('footer.php'); ?> 