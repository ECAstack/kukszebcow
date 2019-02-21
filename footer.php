         <?php if($title !== 'KUKS - sponsorzy'){ ?>
         <div class="row footer-line"></div>
         <div class="row sponsorzy">
            <div class="col-md-2 col-sm-4 col-xs-4">
              <a href="http://www.feniks-ostrow.pl" target="_blank"><img src="css/s_feniks.png" alt="sponsor" width="100%" /></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4">
              <a href="http://www.umostrow.pl" target="_blank"><img src="css/s_ostrow.png" alt="sponsor"  width="100%" /></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4">
              <a href="http://www.melikan.pl" target="_blank"><img src="css/s_melikan.png" alt="sponsor"  width="100%" /></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4">
              <a href="http://www.meblewozniak.com.pl" target="_blank"><img src="css/s_wozniak.png" alt="sponsor"  width="100%" /></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4">
              <a href="http://opal-bud.pl" target="_blank"><img src="css/s_opalbud.png" alt="sponsor" width="100%" /></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4">
              <a href="#" target="_blank"><img src="css/s_glinkowski.png" alt="sponsor" width="100%" /></a>
            </div>
          </div>
          <div class="row sponsorzy">
            <div class="col-md-4 col-sm-0 col-xs-0">
              
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4">
              <a href="http://www.mzk-ostrow.com.pl" target="_blank"><img src="css/s_mzk.png" alt="sponsor" width="100%" /></a>
            </div>


          </div>
          <?php } ?>
        </div>
        <div id="footer-area">
          <footer>
            <div class="container">
              <nav class="navbar">
                <div class="navbar-footer col-md-12">
                  <ul class="nav navbar-nav clearfix">
                    <li><a href="index.php">Aktualności</a></li>
                    <li><a href="oklubie.php">O klubie</a></li>
                    <li><a href="zawodnicy.php">Zawodnicy</a></li>
                    <li><a href="#">Tabele rozgrywek</a></li>
                    <li><a href="galeria.php">Galeria</a></li>
                    <li><a href="sponsorzy.php">Sponsorzy</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                  </ul>     
                </div>
              </nav>
                  <p class='text-center' > Admin <span class="glyphicon glyphicon-user"></span> <a class='nounderline' target="_blank" href="http://www.krzysztof-szczepaniak.pl">Krzysztof Szczepaniak</a></p>
            </div>
            <div class="scroll-to-top" style="display: block;">
              <span class="glyphicon glyphicon-menu-up"></span>
            </div>
          </footer>
        </div>
      </div>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script>
      $(window).scroll(function() {

          if ($(this).scrollTop()>0)
           {
              $('.logokuks').fadeOut();
              $('.scroll-to-top').fadeIn();
           }
          else
           {
            $('.logokuks').fadeIn();
            $('.scroll-to-top').fadeOut();
           }
       });
      $('.panel-collapse').on('shown.bs.collapse', function (e) {
          var $panel = $(this).closest('.panel');
          $('html,body').animate({
              scrollTop: $panel.offset().top - 55
          }, 200); 
      }); 
    </script>
  </body>
</html>
