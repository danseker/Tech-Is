<?php

// Add user
if (isset($_POST['sbm'])) {
    if (empty($_POST['user_full'])) {
        echo "Bạn chưa nhập tên thành viên!";
    } else {
        $user_full = $_POST['user_full'];
    }
    $user_mail = $_POST['user_mail'];
    $user_phone = $_POST['user_phone'];
    $user_level = $_POST['user_level'];
    $user_re_pass = $_POST['user_re_pass'];
    $user_pass = $_POST['user_pass'];
    // if($user_re_pass == $user_pass){
        
    // } else {
    //     echo "Nhập lại, mật khẩu chưa khớp!";
    // }

    $sqlInsert = "INSERT INTO user (user_full, user_mail, user_pass, user_level, user_phone) 
    VALUES ('$user_full', '$user_mail', '$user_pass', $user_level, $user_phone)";
    if (mysqli_query($conn, $sqlInsert)) {
        header("location: index.php?page=user");
    } else {
        echo "<script>alert('Thêm danh mục không thành công');</script>";
    }
}
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="index.php"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li><a href="index.php?page=user">Quản lý thành viên</a></li>
            <li class="active">Thêm thành viên</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm thành viên</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">
                        <form role="form" method="post" action="#" name="myform">
                            <div class="form-group">
                                <label>Họ & Tên</label>
                                <input name="user_full" type="text" class="form-control" id="user_name">
                                <span id="user_name_error"></span>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="user_mail"  type="text" class="form-control" id="user_email">
                                <span id="user_email_error"></span>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input name="user_phone" type="number" class="form-control" id="user_phone">
                                <span id="user_phone_error"></span>
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input name="user_pass"  type="password" class="form-control" id="user_pass">
                                <span id="user_pass_error"></span>
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input name="user_re_pass" required type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Quyền</label>
                                <select name="user_level" class="form-control">
                                    <option value=0>Admin</option>
                                    <option value=1 selected>Member</option>
                                </select>
                            </div>
                            <button name="sbm" type="submit" class="btn btn-success" onclick="return validateForm();">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div>
<!--/.main-->

<script>
    function validateForm() {
        const EMPTY_STR = "";
        var check = true;
        var user_name = document.getElementById('user_name');
        var user_phone = document.getElementById('user_phone');
        var user_mail = document.getElementById('user_email');
        var user_pass = document.getElementById('user_pass');

        var user_name_error = document.getElementById('user_name_error');
        var user_phone_error = document.getElementById('user_phone_error');
        var user_mail_error = document.getElementById('user_email_error');
        var user_pass_error = document.getElementById('user_pass_error');

        if (user_name.value == EMPTY_STR) {
            user_name.style.border = "1px solid red";
            user_name_error.innerHTML = "Bạn phải nhập họ tên";
            user_name_error.style.color = "red";
            check = false;
        }
        if (user_phone.value == EMPTY_STR) {
            user_phone.style.border = "1px solid red";
            user_phone_error.innerHTML = "Bạn phải nhập số điện thoại";
            user_phone_error.style.color = "red";
            check = false;
        }
        if (user_email.value == EMPTY_STR) {
            user_email.style.border = "1px solid red";
            user_email_error.innerHTML = "Bạn phải nhập email";
            user_email_error.style.color = "red";
            check = false;
        }
        if (user_pass.value == EMPTY_STR) {
            user_pass.style.border = "1px solid red";
            user_pass_error.innerHTML = "Bạn phải nhập password";
            user_pass_error.style.color = "red";
            check = false;
        }
        return check;
    }
</script>