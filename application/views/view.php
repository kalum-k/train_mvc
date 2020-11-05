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


<body>
    <br>
    <br>
    <div class="container">
        <div class="contact-widget">
            <div class="cw-item">
                <div class="ci-text">
                    <h3>รายละเอียด</h3>
                </div>
            </div>
        </div>
          <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>ขบวน</th>
                        <th>สถานี</th>
                        <th>เวลาออก</th>
                        <th>ถึง</th>
                        <th>ออก</th>
                          <th>สถานี</th>
                        <th>ถึงเวลา</th>
                          <th>หมายเหตุ</th>
                        <!-- xxxxx -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($view->result_array() as $rs) { ?>
                        <tr>
                            <td><?php echo $rs['t_id']; ?></td>
                            <td><?php echo $rs['station_head']; ?></td>
                            <td><?php echo $rs['time_out']; ?></td>
                            <td><?php echo $rs['in']; ?></td>
                            <td><?php echo $rs['out']; ?></td>
                             <td><?php echo $rs['station_des']; ?></td>
                            <td><?php echo $rs['time_in']; ?></td>
                            <td><?php echo $rs['notation']; ?></td>
                            <!-- <td> อยากแสดงอะไรเพิ่มเองเลยนะ</td> -->

                        </tr>
                     

                    <?php }; ?>
                </tbody>   
            </table><a class="btn btn-warning"  href="<?php echo base_url(); ?>index.php/Welcome/index">ใส่ข้อมูล</a>
    </div>

</body>
<script>
