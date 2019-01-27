<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if(isset($title)){echo $title;}?></title>
    <link rel="shortcut icon" href="logokuks.png" /> 
    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      @media (max-width: 991px) {
          .navbar-header {
              float: none;
          }
          .navbar-toggle {
              display: block;
          }
          .navbar-collapse {
              border-top: 1px solid transparent;
              box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
          }
          .navbar-collapse.collapse {
              display: none!important;
          }
          .navbar-nav {
              float: none!important;
              margin: 7.5px -15px;
          }
          .navbar-nav>li {
              float: none;
          }
          .navbar-nav>li>a {
              padding-top: 10px;
              padding-bottom: 10px;
          }
          .navbar-text {
              float: none;
              margin: 15px 0;
          }
          /* since 3.1.0 */
          .navbar-collapse.collapse.in { 
              display: block!important;
          }
          .collapsing {
              overflow: hidden!important;
          }
      }

      .carousel {
        /*max-height: 500px;*/
        overflow: hidden;
        /*background-color: #d3af7e;*/
        background-color: #dedede;

       
      }
       .item img {
          max-width: 1160px !important;
          width:100%;
          height: auto;
          margin: auto;
        }
      .article-header {
        padding-bottom: 10px;
        border-bottom: 1px solid #ccc;
      }
      .article-content {
        padding-top: 10px;
      }
      .read-more {float: right;margin-top: 10px;}

      .article-img img {
        padding: 5px;
        border: 1px solid #ccc;
      }
      .header-info {
        background: #1fa67a none repeat scroll 0 0;
        overflow: hidden;
        padding: 30px 0;
        text-align: center;
      }
      .header-info-text {
        color: #fff;
        display: block;
        font-size: 22px;
      }
      #footer-area {
        background-color: #313233;
        color: #ccc;
        font-size: 12px;
        min-height: 200px;
        margin-top: 20px;
      }
      .scroll-to-top {
        background: rgba(0, 0, 0, 0.4) none repeat scroll 0 0;
        border-radius: 4px;
        bottom: 4%;
        color: #fff;
        cursor: pointer;
        display: none;
        font-size: 16px;
        padding: 2px 10px;
        position: fixed;
        right: 20px;
        transition: background-color 0.1s linear 0s;
        z-index: 999;
      }
      .footer-nav.nav {
            float: left;
            margin-bottom: 2px;
        }
        .nav {
            list-style: outside none none;
        }
        .logokuks {
          position: absolute;
          z-index: 100;
          top: 55px;
          margin-left: 15px;

        }

        @media all and (max-width: 1920px) and (min-width: 992px){
          .logokuks img {
            width: 35%;
          }
        }

        @media all and (max-width: 992px) and (min-width: 768px){
          .logokuks img {
            width: 25%;
          }
        }

        @media all and (max-width: 768px) and (min-width: 480px){
          .logokuks img {
            width: 18%;
          }
        }

        @media all and (max-width: 480px) and (min-width: 300px){
          .logokuks img {
            width: 10%;
          }
        }


        .logotarcza {
          position: absolute;
          z-index: 100;
          top: 90px;
          left: 300px;
        }

        #myNavbar li {
          z-index: 200;
          background-color: #222;
        }
        .sponsorzy {
          margin-top: 4px;
          margin-bottom: 2px;
        }

        #galeria-zawodnicy {
          margin-top: 10px;
        }

        #galeria-zawodnicy img {
           border-radius: 15px;
        }
        #footer-area a {
          color: #ffffff;
        }
        #footer-area a:hover {
          color: #323232;
        }

        #galeria {
          margin-top: 10px;
        }

        #galeria img {
           border-radius: 15px;
        }
    </style>
  </head>
  <body>
    <div id="page">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="./">KUKS<div class="logokuks"><img src="css/logokuks.png" alt="logo" /></div></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Aktualności</a></li>
              <li><a href="oklubie.php">O klubie</a></li>
              <li><a href="zawodnicy.php">Zawodnicy</a></li>
              <li><a href="#">Tabele rozgrywek</a></li>
              <li><a href="galeria.php">Galeria</a></li>
              <li><a href="sponsorzy.php">Sponsorzy</a></li>
              <li><a href="kontakt.php">Kontakt</a></li>
            </ul>
          </div>
          
        </div>
      </nav>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="css/panorama.jpg" alt="Slide">
          </div>
        </div>
      </div>
      <div class="header-info">
        <div class="container">
          <div class="col-md-12">
            <span class="header-info-text">Najbliższy ważny mecz rozgrywamy</span>
          </div>
        </div>
      </div>
