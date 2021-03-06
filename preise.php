<?php require('includes/config.php'); ?>
<!doctype html>
<html style="height:100%;">
<head>
  <meta chartset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
  <link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <link href="stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
  <style>
    body{
      background-image:url('images/ndcbackground_2.jpg');
    }
  </style>
</head>
<body style="height:85%;">
<div class="content-wrapper" style="margin-bottom:-50px;">

<div class="nav-styles">
  <nav class="navbar navbar-default">
    <div class="container-fluid navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img class="logo img img-responsive" alt="Logo" src="images/logo.png"></a>
      </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav pull-right menuTop">
          <li><a href="index.html">HOME <span class="sr-only">(current)</span></a></li>
          <li><a href="fahrschule.html">FAHRSCHULE</a></li>
          <li><a href="anmeldung.html">ANMELDUNG</a></li>
          <li><a href="preise.php">PREISE</a></li>
          <li><a href="kontakt.html">KONTAKT</a></li>
          <li>      <!-- Define your search form -->
      <form class="navbar-form navbar-left" role="search">
        <!-- Define a button to toggle the search area -->
       <!-- <button id='search-button' class='btn btn-default '><span class='glyphicon glyphicon-search'></span></button>
         Create your entire search form
        <div id='search-form' class="form-group">
          <div class="input-group">
            <span id='search-icon' class="input-group-addon"><span class='glyphicon glyphicon-search'></span></span>
            <input type="text" class="form-control" placeholder="Search"></li>-->

      </form>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>


<div class="table-wrapper">


  <div class="container" aria-label"price-table">
    <div class="row" aria-label="heading" style="padding-top:5%;">
      <div class="col-xs-12" style="text-align:left;">
        <span>Hier findet Sie eine &#220;bersicht unserer derzeitigen Preise:</span>
      </div>
    </div>
    <div class="row" aria-label="pricing-table">
      <div class="col-xs-12">
        <table style="width:100%">
          <tr>
            <th class="name">W&#196;HLE DEIN PLAN</th>
            <th class="basic">BASIC</th>
            <th class="club">CLUB</th>
            <th class="pro">PRO</th>
          <tr>
            <td class="name">Anmeldung</td>
            <td class="basic">219,00&euro;</td> 
            <td class="club">199,00&euro;</td>
            <td class="pro">189,00&euro;</td>
          </tr>
          <tr>
            <td class="name">&#220;bungsfahrt</td>
            <td class="basic">1x 36,00&euro;</td> 
            <td class="club">10x 360,00&euro;</td>
            <td class="pro">12x 432,00&euro;</td>
          </tr>
          <tr>
            <td class="name">Sonderfahrt</td>
            <td class="basic">1x 46,00&euro;</td> 
            <td class="club">12x 552,00&euro;</td>
            <td class="pro">12x 5522,00&euro;</td>
          </tr>
          <tr>
            <td class="name">Lehrbuch</td>
            <td class="basic">46,00&euro;</td> 
            <td class="club">41,00&euro;</td>
            <td class="pro">36,00&euro;</td>
          </tr>
          <tr>
            <td class="name">Online Code</td>
            <td class="basic">36,00&euro;</td> 
            <td class="club">31,00&euro;</td>
            <td class="pro">26,00&euro;</td>
          </tr>
          <tr>
            <td class="name">Theoretische Pr&#252;fung</td>
            <td class="basic">119,00&euro;</td> 
            <td class="club">109,00&euro;</td>
            <td class="pro">99,00&euro;</td>
          </tr>
          <tr>
            <td class="name">zzgl. T&#252;v Geb&#252;hr</td>
            <td class="basic">20,83&euro;</td> 
            <td class="club">20,83&euro;</td>
            <td class="pro">20,83&euro;</td>
          </tr>
          <tr>
            <td class="name">Praktische Pr&#252;fung</td>
            <td class="basic">119,00&euro;</td>
            <td class="club">109,00&euro;</td>
            <td class="pro">99,00&euro;</td>
          </tr>
          <tr>
            <td class="name">zzgl. T&#252;v Geb&#252;hr</td>
            <td class="basic">84,97&euro;</td> 
            <td class="club">84,97&euro;</td>
            <td class="pro">84,97&euro;</td>
          </tr>
          <tr>
            <td class="name">Praktische Pr&#252;fung</td>
            <td class="basic">119,00&euro;</td>
            <td class="club">X</td>
            <td class="pro">X</td>
          </tr>
        </table>
      </div>
    <div class="row" aria-label="taxes">
      <div class="col-xs-12" style="text-align:left;">
        <span>* Alle Preise sind Inklusiv MwSt</span>
      </div>
    </div>
  </div><!--Preise table-->
</div><!--table-wrapper--></div>


<div class="container" aria-label="spezial-paket">
  <div class="row" style="margin-top:5%;">
    <div class="col-xs-6">
      <div class="paket-box">
        <h3>SPEZIAL PAKET 1</h3>
      </div>
    </div>
    <div class="col-xs-6">
      <div class="paket-box">
        <h3>SPEZIAL PAKET 2</h3>
      </div>
    </div>
  </div>
</div><!--container-->

<div class="container kurse" aria-label="blog">
  <div class="row">
    <div class="col-xs-12" style="text-align:left;">
      <h1 style="font-size:2em;">KURSE & UNTERRICHT</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12" style="text-align:left;">
      <span>Hier finden Sie die aktuellen Unterrichtszeiten.</span>
    </div>
  </div>
<div id="wrapper">

    <?php
      try {

        $stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
        while($row = $stmt->fetch()){
          
          echo '<div>';
            echo '<div><a href="viewpost.php?id='.$row['postID'].'">'.$row['postImg'].'</a></div>';
            echo '<h1><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
            echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
            echo '<p>'.$row['postDesc'].'</p>';       
            echo '<p><a href="viewpost.php?id='.$row['postID'].'">Read More</a></p>';       
          echo '</div>';

        }

      } catch(PDOException $e) {
          echo $e->getMessage();
      }
    ?>

  </div>
</div><!--container-->

<div class="push"></div>
</div>






<footer class="cf">
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-sm-4 pull-left">
          <span class="copyright">Copyright 2015 All Rights Reserved to New Drivers Club</span><br>
        </div>
        <div class="hidden-xs col-sm-4"></div>
        <div class="col-xs-6 col-sm-4 center pull-right" style="position:relative; bottom: 3px;">
          <img style="position:relative; top:7px;" src="images/f.png">
          <span>Impressum</span>
          <span>AGBS</span>
        </div>

      </div>
    </div>
  </footer>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="script-main.js"></script>
</body>
</html>

