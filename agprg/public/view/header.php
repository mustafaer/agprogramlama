<!DOCTYPE html>
<!--
        ####                            #####
        ####                            #####
        ####                            #####
         ####                           #####           Mustafa ER Tarafından Kodlanmıştır.
          ####                          #####
            ####                        #####                   https://mustafaer.pro
             ####                       #####                             
               ####                     #####                   mail@mustafaer.pro 
                  ####                  #####            
                     ####               #####    
                        ####            #####       
                           ##################################################################################
                                                                            #####          #####            ####
                                                                            #####          #####               ####
                                                                            #####          #####                  ####
                                                                            #####          #####                     ####
                                                                            #####          #####                       ####
                                                                            #####          #####                        ####
                                                                            #####          #####                          ####
                                                                                           #####                           ####
                                                                                           #####                            ####
                                                                                           #####                            ####
                                                                                           #####                            ####
-->
<?php ob_start(); ?>
<?php
if (isset($_SESSION['loger'])) {
    if ($_SESSION['loger'] != "admin" || $_SESSION['loger'] != "advisor" || $_SESSION['loger'] != "student") {
        include './private/controler/dbset.php';
        header("Location:$url/giris.php");
    }
}
@session_start();
include './private/controler/dbset.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="public/view/js/mainjs.js" type="text/javascript"></script>
        <!--<script src="public/view/js/screenresize.js" type="text/javascript"></script>-->
        <link href="public/view/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/view/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="public/view/js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="public/view/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="public/view/css/style.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>BİDES</title>
    </head>
    <body>
        <div id="full_page">
            <!--Small page menu begin-->
            <div class="hidden-lg hidden-md hidden-sm">
                <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                    <div class="container-fluid" style="background-color: #367fa9;">
                        <div class="container" style="margin-top: 0px;">
                            <div class="navbar-header" style="color: #fff;">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" style="color: #fff; cursor: default;" href="#"><b>BİDES</b></a>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <!-- Menu Begin-->
                                    <?php
                                    if (isset($_SESSION['username'])) {
                                        $username = $_SESSION['username'];
                                        if ($_SESSION["loger"] == "student") {
                                            include './private/view/menu/mobile/studentmenu.php';
                                        } else if ($_SESSION["loger"] == "admin") {
                                            include './private/view/menu/mobile/adminmenu.php';
                                        } else if ($_SESSION["loger"] == "advisor") {
                                            include './private/view/menu/mobile/advisormenu.php';
                                        }
                                    }
                                    ?>
                                    <!-- Menu End-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Small page menu end style="min-width: 210px; max-width: 210px;"-->

            <!--Big page menu begin-->
            <div id="left_side2" class="col-lg-2 col-md-2 col-sm-3 hidden-xs" ></div>
            <div id="left_side" class="col-lg-2 col-md-2 col-sm-3 hidden-xs">
                <div id="left_side_head">
                    <center><a style="color: #fff; width: 90%;" class="navbar-brand" href="anasayfa"><b>BİDES</b></a></center> 
                </div>
                <div id="left_side_content">
                    <div style="padding-top: 8px; padding-left: 12px;">
                        <div  class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="padding-left: 0px; padding-top: 10px; padding-bottom: 15px;">
                            <p  class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color: whitesmoke; font-style: normal; margin-bottom: 0px; font-weight: 600;line-height: 1; padding-left: 0px">&nbsp;<?php echo $_SESSION['namesurname']; ?></p>
                            <p  class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="color: whitesmoke; font-style: normal; font-size: 11px; padding-top: 10px;font-weight: 400;line-height: 1; padding-left: 0px;    ">&nbsp;<i class="fa fa-circle text-success" aria-hidden="true"></i>&nbsp;Online</p>
                        </div>
                    </div><br>
                    <div class="list-group left_side">
                        <ul  style="background-color: #222d32;">
                            <!-- Menu Begin-->
                            <?php
                            if (isset($_SESSION['username'])) {

                                $username = $_SESSION['username'];
                                if ($_SESSION["loger"] == "student") {
                                    include './private/view/menu/pc/studentmenu.php';
                                } else if ($_SESSION["loger"] == "admin") {
                                    include './private/view/menu/pc/adminmenu.php';
                                } else if ($_SESSION["loger"] == "advisor") {
                                    include './private/view/menu/pc/advisormenu.php';
                                }
                            }
                            ?>
                            <!-- Menu End-->
                        </ul>
                    </div>
                </div>
            </div>
            <!--big page menu end-->

            <!--Right side begin-->
            <div id="right_side" class="col-lg-10 col-md-10 col-sm-9">
                <div id="right_side_header" class="col-lg-12 col-md-12 col-sm-12 hidden-xs"></div>
                <div id="right_side_content" class="col-lg-12 col-md-12 col-sm-12">