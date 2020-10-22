<?php include("head.php") ?>
<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3>เข้าสู่ระบบ</h3>
                    </div>
                    <form action="<?php echo base_url();?>index.php/manage/login" method="post" enctype="multipart/form-data" id="form1">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>รหัสนักศึกษา</label>
                                <input type="email" class="form-control" id="login_studentid" name="login_studentid">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="login_password" name="login_password">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn" name="login" style="background-color:#e7ab3c;color:#fff;">เข้าสู่ระบบ</button>
                            <button type="reset" class="btn btn-secondary">ยกเลิก</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

