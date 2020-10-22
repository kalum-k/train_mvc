<?php include("head.php") ?>
<!--  -->
<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3>ประชาสัมพันธ์</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
    <br>
</div>
<!--  -->

<!-- -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="img/upload/banner1920x600-01.jpg">
        </div>
        <div class="single-hero-items set-bg" data-setbg="img/upload/banner1920x600-02.jpg">
        </div>
        <div class="single-hero-items set-bg" data-setbg="img/upload/banner1920x600-03.jpg">
        </div>
    </div>
</section>
<!-- -->

<!--  -->
<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-1">
            <?php //echo $_SESSION["name"] ; 
            ?>
        </div>
        <div class="col-lg-10">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3>ข้อมูลศิษย์เก่า</h3>
                    </div>
                </div>
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>รหัสนักศึกษา</th>
                        <th>ชื่อ</th>
                        <th>หมู่เรียน</th>
                        <th>ปีการศึกษาแรกเข้า</th>
                        <th>จังหวัด</th>
                        <!-- xxxxx -->
                        <th>แสดง</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datapersonal->result_array() as $row) { ?>
                        <tr>
                            <td><?php echo $row['student_id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['group']; ?></td>
                            <td><?php echo $row['year_int']; ?></td>
                            <td><?php echo $row['province']; ?></td>
                            <!-- <td> อยากแสดงอะไรเพิ่มเองเลยนะ</td> -->

                            <td>
                                <form action="<?php echo base_url('index.php/manage/info_list'); ?>" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['student_id']; ?>">
                                    <button class="btn btn-info" name="submit">ดูรายละเอียด</button>
                                </form>
                            </td>

                        </tr>


                    <?php }; ?>
                </tbody>
            </table>
            <br>
            <br>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
</div>
<!--  -->


