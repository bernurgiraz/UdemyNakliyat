<?php 

include_once("assets/fonksiyon.php"); $yonetim = new yonetim();
$yonetim->kontrolet("cot");

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  

   
    <title>Udemy Nakliyat-Yönetim Paneli</title>
    
    

    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    
    <!---bu olmuyo????-->
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">




    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">    
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">   
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- page container area start -->
    <div class="page-container">
        <?php @$sayfa = $_GET["sayfa"] ?? ""; ?>

        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">

                    <a href="control.php"><img src="assets/images/logo2/logo3.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                                                      
                            <li class="<?php if($sayfa=="siteayar" || empty($sayfa)) echo 'active'; ?>">
                            <a href="control.php?sayfa=siteayar"><i class="ti-pencil"></i> <span>Site Ayarları</span></a>
                            </li>

                           
<li class="<?php if($sayfa == 'introayar') echo 'active'; ?>">
  <a href="control.php?sayfa=introayar"><i class="ti-image"></i> <span>İntro Ayarları</span></a>
</li>

<li class="<?php if($sayfa == 'aracfilo') echo 'active'; ?>">
  <a href="control.php?sayfa=aracfilo"><i class="ti-car"></i> <span>Araç Filosu</span></a>
</li>

<li class="<?php if($sayfa == 'hakkimiz') echo 'active'; ?>">
  <a href="control.php?sayfa=hakkimiz"><i class="ti-flag"></i> <span>Hakkımızda Ayarlar</span></a>
</li>

<li class="<?php if($sayfa == 'hizmetler') echo 'active'; ?>">
  <a href="control.php?sayfa=hizmetler"><i class="ti-medall"></i> <span>Hizmetler Ayarlar</span></a>
</li>

<li class="<?php if($sayfa == 'ref') echo 'active'; ?>">
  <a href="control.php?sayfa=ref"><i class="ti-eye"></i> <span>Referans Ayarları</span></a>
</li>

<li class="<?php if($sayfa == 'yorumlar') echo 'active'; ?>">
  <a href="control.php?sayfa=yorumlar"><i class="ti-comment-alt"></i> <span>Müşteri Yorumları</span></a>
</li>
                            
             
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center" style="max-height: 30px;">  
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                      
                    </div>
                   <!-- profile info & task notification -->
<div class="col-sm-6 clearfix">
  <div class="user-profile pull-right" style="max-height: 47px;">
    <h4 class="user-name dropdown-toggle" data-toggle="dropdown" style="display: flex; align-items: center; gap: 6px; margin: 5;">
      <span style="
        display:inline-block;
        width:28px;
        height:28px;
        background:white;
        color:#00b5e2;
        font-weight:bold;
        border-radius:50%;
        text-align:center;
        line-height:28px;
        font-size: 14px;
      ">
        <?php echo strtoupper(substr($yonetim->kuladial($baglanti), 0, 1)); ?>
      </span>
      <?php echo $yonetim->kuladial($baglanti); ?> <i class="fa fa-angle-down"></i>
    </h4>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="control.php?sayfa=cikis">Çıkış</a>
    </div>
  </div>
</div>

            <!-- header area end -->
            <!-- page title area start -->

            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- sales report area start -->
               <div class="row">
                    <div class="col-lg-12 mt-2 bg-white text-center" style="min-height:500px;">
       
                        
                        <?php

                           @$sayfa = $_GET["sayfa"];
                        switch ($sayfa):
                        case "siteayar":
                          $yonetim->siteayar($baglanti); 
                            break;
                         case "cikis":
                          $yonetim->cikis($baglanti);
                        break;
                         //----------------------------
                         case "introayar":
                          $yonetim->introayar($baglanti);
                        break;
                         case "introresimguncelle":
                          $yonetim->introresimguncelleme($baglanti);
                        break;
                         case "introresimsil":
                          $yonetim->introsil($baglanti);
                        break;
                        case "introresimekle":
                          $yonetim->introresimekleme($baglanti);
                        break;
                         //----------------------------
                         case "aracfilo":
                          $yonetim->aracfilo($baglanti);
                        break;
                         case "aracfiloguncelle":
                          $yonetim->aracfiloguncelleme($baglanti);
                        break;
                         case "aracfilosil":
                          $yonetim->aracfilosil($baglanti);
                        break;
                        case "aracfiloekle":
                          $yonetim->aracfiloekleme($baglanti);
                        break;
                         //----------------------------
                           case "hakkimiz":
                          $yonetim->hakkimizda($baglanti);
                        break;

                        //----------------------------
                          case "hizmetler":
                        $yonetim->hizmetlerhepsi($baglanti);
                       break;
                       case "hizmetguncelle":
                       $yonetim->hizmetguncelleme($baglanti);
                        break;
                           case "hizmetsil":
                          $yonetim->hizmetsil($baglanti);
                        break;
                       case "hizmetekle":
                       $yonetim->hizmetekleme($baglanti);
                         break;

                           


                         endswitch;

                            ?>



                       





                </div>
            </div>
            </div>
        </div>
        <!-- main content area end -->
    </div>
    <!-- page container area end -->
    
   
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>  

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
