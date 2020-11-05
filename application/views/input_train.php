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
<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3 >Train schedule</h3>
                    </div>
                </div>
            </div>
            <form action="<?php echo base_url();?>index.php/manage/input_train" method="post" enctype="multipart/form-data" id="form1">
                <br>
                <hr>
                <div class="form-row">
                  
                    <div class="form-group col-md-9">
                        <label>ขบวน <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="t_id" id="card_id">
                    </div>
                    
                    <div class="form-group col-md-5"> 
                  
                        <label>สถานี</label>
                        <input type="text" class="form-control" name="station_head" value="">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="inputPassword4">เวลาออก</label>
                        <input type="time" class="form-control" name="time_out">
                    </div>
                   
                    <div class="form-group col-md-5">  
                         <label for="inputPassword4">ถึงเวลา</label>
                        <input type="time" class="form-control" name="in">
                    </div>
                     <div class="form-group col-md-5">
                        <label for="inputPassword4">ออกเวลา</label>
                        <input type="time" class="form-control" name="out">
                    </div>
                    
                    <div class="form-group col-md-5"> 
                    
                     <label>สถานี</label>
                        <input type="text" class="form-control" name="station_des" value="">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="inputPassword4">ถึงเวลา</label>
                        <input type="time" class="form-control" name="time_in">
                    </div>
                     <div class="form-group col-md-10">
                        <label>หมายเหตุ</label>
                        <input type="text" class="form-control" name="notation" value="">
                    </div>
                     
                <br>
                
                <div>
                    <button type="submit" class="btn" style="background-color:#e7ab3c;color:#fff;">ส่งข้อมูล</button>
                </form>
                <a class="btn btn-warning"  href="<?php echo base_url(); ?>index.php/Welcome/view">ดูข้อมูลตารางรถไฟ</a>
            </div>
        </div> 
    </div>
    
    <br>
    <br>
</div>




