<?php
//lấy các thông tin của category cần sửa
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $sqlUser = "SELECT * FROM user WHERE `user_id` = $user_id";
    $resultUser = mysqli_query($conn, $sqlUser);
    $userEdit = mysqli_fetch_assoc($resultUser);

    if (isset($_POST['sbm'])) {
        if (empty($_POST['user_full'])) {
            echo "Bạn chưa nhập tên thành viên";
        } else {
            $user_full = $_POST['user_full'];
        }
        $user_mail = $_POST['user_mail'];
        $user_phone = $_POST['user_phone'];
        $user_level = $_POST['user_level'];

        if ($_POST['user_re_pass'] == $_POST['user_pass']) {
            $user_pass = $_POST['user_pass'];
        } else {
            echo "Nhập lại, mật khẩu chưa khớp!";
        }

        $sqlUpdate = "UPDATE user SET 
        user_full = '$user_full',
        user_mail = '$user_mail',
        user_pass = '$user_pass',
        user_level = '$user_level',  
        user_phone = $user_phone
        WHERE `user_id` = $user_id";

        if (mysqli_query($conn, $sqlUpdate)) {
            header("location: index.php?page=user");
        } else {
            echo  "<script>alert('cập nhập danh mục không thành công'); </script>";
        }
    }
} else {
    header(' location: index.php?page=category');
}
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="index.php"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li><a href="index.php?page=user">Quản lý thành viên</a></li>
            <li class="active"><?php echo $userEdit['user_full']; ?></li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $userEdit['user_full']; ?></h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-8">
                        <form role="form" method="post">
                            <div class="form-group">
                                <label>Họ & Tên</label>
                                <input type="text" name="user_full" required class="form-control" value="<?php echo $userEdit['user_full']; ?>" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="user_mail" required value="<?php echo $userEdit['user_mail']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone-number</label>
                                <input type="text" name="user_phone" required value="<?php echo $userEdit['user_phone']; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" name="user_pass" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input type="password" name="user_re_pass" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Quyền</label>
                                <select name="user_level" class="form-control">
                                    <option <?php if($userEdit['user_level']==0) echo 'selected'; ?> selected value=0>Admin</option>
                                    <option <?php if($userEdit['user_level']==1) echo 'selected'; ?> selected value=1 selected>Member</option>
                                </select>
                            </div>
                            <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->

</div>
<!--/.main-->