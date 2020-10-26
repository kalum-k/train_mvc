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
                    <li class="edit"><a href="<?php echo base_url(); ?>index.php/welcome/viewedit">ประวัติส่วนตัว</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/manage/logout" >ออกจากระบบ</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
    <div class="nav-item" style="background-color: #fff;">
    </div>
</header>
<style>
.edit {
    background-color: #e7ab3c;
    color: #fff;
}
</style>

<!-- -->
<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3>แก้ไขประัติส่วนตัว</h3>
                    </div>
                </div>
            </div>
            <form action="<?php echo base_url(); ?>index.php/manage/edit" method="post" enctype="multipart/form-data" id="form1">
                <?php
                $id =  $_SESSION["student_id"];
                $showPersonal = $conn->prepare("SELECT * FROM `personal` WHERE `student_id` = '$id' ");
	            $showPersonal->execute();
                $resultPersonal = $showPersonal->fetchAll();

                $showAlumni = $conn->prepare("SELECT * FROM `alumni` WHERE `student_id` = '$id' ");
	            $showAlumni->execute();
                $resultAlumni = $showAlumni->fetchAll();

                $showWorkinformation = $conn->prepare("SELECT * FROM `workinformation` WHERE `student_id` = '$id' ");
	            $showWorkinformation->execute();
                $resultWorkinformation = $showWorkinformation->fetchAll();
                ?>
                <br>
                <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">แก้ไขข้อมูลส่วนตัว</span></h3>
                <hr>

                <?php foreach ($resultPersonal as $rowPersonal) { ?>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <?php 
                    $imgPersonal = $rowPersonal['img'];
                    if($imgPersonal != "noImage"){
                        echo '<img style="width:125px;border:1px solid #e7ab3c; border-radius: 4px;" id="image" src="img/upload/'.$imgPersonal.'">';
                    }
                    else{ echo '<img style="width:125px;border:1px solid #e7ab3c; border-radius: 4px;" id="image"
                        src="img/user.png">';}
                    ?>
                    </div>
                    <div class="form-group col-md-9">
                        <input type="file" id="inputImage" class="form-control" onchange="readURL(this);"
                            accept="image/*" name="img"   >
                        <br>
                        <label>เลขบัตรประชาชน <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" value="<?php echo $rowPersonal['card_id']; ?>" readonly >
                        <input type="text" value="<?php echo $rowPersonal['card_id']; ?>" name="p_card" hidden>
                    </div>
                    <div class="form-group col-md-12">
                        <label>ชื่อ - นามสกุล</label>
                        <input type="text" class="form-control" value="<?php echo $rowPersonal['name']; ?>" name="fname">
                    </div>
                    <div class="form-group col-md-6">
                        <label>เพศ</label>
                        <select class="form-control" name="gender">
                            <option value='-'>-</option>
                            <?php if($rowPersonal['gender'] == "ชาย"){
                                echo "<option value='ชาย' selected>ชาย</option>";
                            }
                            else { 
                                echo "<option value='ชาย' >ชาย</option>";
                            } ?>
                            <?php if($rowPersonal['gender'] == "หญิง"){
                                echo "<option value='หญิง' selected>หญิง</option>";
                            }
                            else { 
                                echo "<option value='หญิง' >หญิง</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>วันเดือนปีเกิด </label>
                        <input type="date" class="form-control" value="<?php echo $rowPersonal['birthday']; ?>" name="birthday">
                    </div>
                    <div class="form-group col-md-12">
                        <label>ที่อยู่</label>
                        <textarea class="form-control" rows="3" name="p_address"><?php echo $rowPersonal['address']; ?></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" value="<?php echo $rowPersonal['tel']; ?>" name="p_tel">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Facebook</label>
                        <input type="text" class="form-control" value="<?php echo $rowPersonal['facebook']; ?>" name="facebook">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Email</label>
                        <input type="text" class="form-control" value="<?php echo $rowPersonal['email']; ?>" name="email">
                    </div>
                </div>
                <?php }; ?>
                <!--  -->
                <br>
                <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">ข้อมูลการศึกษา</span></h3>
                <hr>
                <?php   foreach ($resultAlumni as $rowAlumni) {    ?>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>รหัสนักศึกษา <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" value="<?php echo $rowAlumni['student_id']; ?>" readonly>
                        <input type="text" value="<?php echo $rowAlumni['student_id']; ?>" name="studentCode" id="studentCode" hidden >
                    </div>
                    <div class="form-group col-md-6">
                        <label>หมู่เรียน</label>
                        <input type="text" class="form-control"  value="<?php echo $rowAlumni['group']; ?>" name="group">
                    </div>
                    <div class="form-group col-md-6">
                        <label>สาขา</label>
                        <input type="text" class="form-control"  value="<?php echo $rowAlumni['branch']; ?>" name="branch">
                    </div>
                    <div class="form-group col-md-6">
                        <label>คณะ</label>
                        <input type="text" class="form-control"  value="<?php echo $rowAlumni['faculty']; ?>" name="faculty">
                    </div>
                    <div class="form-group col-md-6">
                        <label>ภาคการศึกษา</label>
                        <select class="form-control" name="semester">
                            <option selected>-</option>
                            <?php if($rowAlumni['semester'] == "ภาคเรียนปกติ"){
                                echo "<option value='ภาคเรียนปกติ' selected>ภาคเรียนปกติ</option>";
                            }
                            else { 
                                echo "<option value='ภาคเรียนปกติ' >ภาคเรียนปกติ</option>";
                            } ?>
                            <?php if($rowAlumni['semester'] == "ภาคเรียนพิเศษ"){
                                echo "<option value='ภาคเรียนพิเศษ' selected>ภาคเรียนพิเศษ</option>";
                            }
                            else { 
                                echo "<option value='ภาคเรียนพิเศษ' >ภาคเรียนพิเศษ</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>ระดับการศึกษา</label>
                        <select id="" class="form-control"  name="education_level">
                            <option selected>-</option>
                            <?php if($rowAlumni['education_level'] == "ปริญญาตรี"){
                                echo "<option value='ปริญญาตรี' selected>ปริญญาตรี</option>";
                            }
                            else { 
                                echo "<option value='ปริญญาตรี' >ปริญญาตรี</option>";
                            } 
                            if($rowAlumni['education_level'] == "ปริญญาโท"){
                                echo "<option value='ปริญญาโท' selected>ปริญญาโท</option>";
                            }
                            else { 
                                echo "<option value='ปริญญาโท' >ปริญญาโท</option>";
                            }
                            if($rowAlumni['education_level'] == "ปริญญาเอก"){
                                echo "<option value='ปริญญาเอก' selected>ปริญญาเอก</option>";
                            }
                            else { 
                                echo "<option value='ปริญญาเอก' >ปริญญาเอก</option>";
                            } ?>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>ปีการศึกษาที่เข้า</label>
                        <select id="" class="form-control" name="year_int">
                            <option selected>-</option>
                            <?php  
                            // ลดไป 50 ปี + - เองได้  $year_50 = $year-**50**;
                            $year = date("Y")+543;
                            $year_50 = $year-50;
                            for($year;$year_50<=$year;$year--){

                                if($rowAlumni['year_int'] == $year){
                                    echo "<option value='$year' selected>$year</option>";
                                }
                                else{ echo "<option value='$year'>$year</option>"; }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>ปีการศึกษาที่จบ</label>
                        <select id="" class="form-control" name="year_out">
                            <option selected>-</option>
                            <?php  
                            // ลดไป 50 ปี + - เองได้  $year_50 = $year-**50**;
                            $year = date("Y")+543;
                            $year_50 = $year-50;
                            for($year;$year_50<=$year;$year--){

                                if($rowAlumni['year_out'] == $year){
                                    echo "<option value='$year' selected>$year</option>";
                                }
                                else{ echo "<option value='$year'>$year</option>"; }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>ผลงานที่โดดเด่น</label>
                        <textarea class="form-control" rows="3" name="outstanding_work"><?php echo $rowAlumni['faculty']; ?></textarea>
                    </div>
                </div>
                <?php }; ?>
                <!--  -->
                <br>
                <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">ข้อมูลการทำงาน</span></h3>
                <hr>
                <?php   foreach ($resultWorkinformation as $rowWorkinformation) {   ?>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>ตำแหน่งงาน</label>
                        <input type="text" class="form-control" value="<?php echo $rowWorkinformation['position']; ?>"  name="position">
                    </div>
                    <div class="form-group col-md-6">
                        <label>ชื่อบริษัท</label>
                        <input type="text" class="form-control" value="<?php echo $rowWorkinformation['company']; ?>" name="company">
                    </div>
                    <div class="form-group col-md-6">
                        <label>เบอร์โทรศัพท์บริษัท</label>
                        <input type="text" class="form-control" value="<?php echo $rowWorkinformation['tel']; ?>"  name="c_tel">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>ที่อยู่</label>
                        <textarea class="form-control" rows="3" name="c_address"><?php echo $rowWorkinformation['address']; ?></textarea>
                    </div>
                </div>
                <?php }; ?>
                <!--  -->
                <br>

                <div>
                    <button type="submit" class="btn" style="background-color:#e7ab3c;color:#fff;">บันทึกข้อมูล</button>
                    <a href="index.php"><button type="button" class="btn btn-secondary">ยกเลิก</button> </a>
                </div>




            </form>

        </div>
    </div>
    <br>
    <br>
</div>


<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#image').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
};
</script>