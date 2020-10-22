<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ระบบสมาชิกศิษย์เก่า</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css">

    <link href="http://localhost/alumni/source/dataTables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<header class="header-section">
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <!--  -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div style="text-align: center;">
                        <h2>ระบบสมาชิกศิษย์เก่า</h2>
                        <h3>Nakhon Pathom Rajabhat University</h3>
                        <img src="<?php echo base_url(); ?>img/npru.png">
                    </div>
                </div>
                <div class="col-lg-2 text-right col-md-2">
                    <!-- XXXX -->
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="index"><a href="<?php echo base_url(); ?>index.php/welcome/index">หน้าแรก</a></li>


                    <li class="login"><a href="<?php echo base_url(); ?>index.php/welcome/login" >เข้าสู่ระบบ</a></li>
                    <li class="register"><a href="<?php echo base_url(); ?>index.php/welcome/reg_alumni">ลงทะเบียน</a></li>


                    <!---<li class="edit"><a href="edit.php">ประวัติส่วนตัว</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#logout">ออกจากระบบ</a></li>--->


                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
    <div class="nav-item" style="background-color: #fff;">
    </div>
</header>
<style>
    .index {
        background-color: #e7ab3c;
        color: #fff;
    }
</style>