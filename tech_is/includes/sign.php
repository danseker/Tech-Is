<?php
include_once '../admin/config/connectDB.php';

// validate sign-in 
if (isset($_POST['sign-in-btn'])) {
    //kiểm email đã được nhập hay chưa
    if (!empty($_POST['user_mail'])) {
        $user_mail = $_POST['user_mail'];
    } else {
        $error['user_mail'] = "Bạn chưa nhập email";
    }
    //Kiểm tra password đã được nhập hay chưa
    if (!empty($_POST['user_pass'])) {
        $user_pass = $_POST['user_pass'];
    } else {
        $error['user_pass'] = "Bạn chưa nhập mật khẩu";
    }
    //Khi không có lỗi xảy ra
    if (!isset($error['user_mail']) &&  !isset($error['user_pass'])) {
        //trường hợp thỏa mãn tài khoản đăng nhập
        $sql = "SELECT * FROM user WHERE user_mail = '$user_mail' && user_pass= '$user_pass'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            $user_login = mysqli_fetch_assoc($result);
            $_SESSION['user_login'] = $user_login;
            header("location: ../index.php");
        } else {
            $error['invalid'] = '<div class="alert alert-danger">Tài khoản không hợp lệ!</div>';
        }
    }
}


// validate sign-up
$sqlUser = "SELECT * FROM user";
$result = mysqli_query($conn, $sqlUser);
if (isset($_POST['sign-up-btn'])) {
    // kiểm tra tên tài khoản được nhập hay chưa
    if (!empty($_POST['user_full'])) {
        $user_full = $_POST['user_full'];
    } else {
        $error['user_full'] = "Bạn chưa nhập tên tài khoản";
    }
    //kiểm email đã được nhập hay chưa
    if (!empty($_POST['user_mail'])) {
        $user_mail = $_POST['user_mail'];
    } else {
        $error['user_mail'] = "Bạn chưa nhập email";
    }
    //Kiểm tra password đã được nhập hay chưa
    if (!empty($_POST['user_pass'])) {
        $user_pass = $_POST['user_pass'];
        // kiểm tra nhập lại pass
        if ($user_pass != $_POST['user_re_pass']) {
            echo '<script> alert("Mật khẩu nhập lại không khớp!"); </script>';
        }
    } else {
        $error['user_pass'] = "Bạn chưa nhập mật khẩu";
    }
    // kiểm tra mail đã tồn tại hay chưa
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['user_mail'] == $user_mail) {
            echo "<script> alert('Email đã tồn tại, hãy đăng nhập'); </script>";
        }
    }
    //Khi không có lỗi xảy ra
    if (!isset($error['user_email']) &&  !isset($error['user_pass'])) {
        //trường hợp thỏa mãn tài khoản đăng nhập
        $new_acc = "INSERT INTO user(user_full, user_mail, user_pass, user_level) VALUES ('$user_full', '$user_mail', '$user_pass',3)";
        $sign_up_result = mysqli_query($conn, $new_acc);
        if ($sign_up_result) {
            echo "<script> alert('Đăng kí thành công, hãy đăng nhập'); </script>";
        } else {
            echo "<script> alert('Đăng kí thất bại'); </script>";
            header("Location: index.php");
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tech Is</title>
    <link href="../css/login.css" rel="stylesheet">
    <script src="../js/main.js"></script>
    <link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>

</head>

<body>
    <!-- sign-in -->
    <div class="container">
        <div class="account">
            <form action="" method="POST" class="sign-in">
                <table>
                    <caption>
                        <h2>Đăng nhập</h2><br>
                    </caption>
                    <tr>
                        <td> Email:</td>
                        <td><input type="email" name="user_mail" required placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu:</td>
                        <td><input type="text" name="user_pass" required placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="checkbox" name="remember"> Nhớ mật khẩu</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="sign-in-btn">Đăng nhập</button>
                        </td>
                    </tr>
                </table>
            </form>
            <!-- ./sign-in -->
            <!-- sign-up -->

            <form action="" method="POST" class="sign-up">
                <table>
                    <caption>
                        <h2>Đăng kí</h2><br>
                    </caption>
                    <tr>
                        <td> Tên tài khoản:</td>
                        <td><input type="text" name="user_full" placeholder="Username" required></td>
                    </tr>
                    <tr>
                        <td> Email:</td>
                        <td><input type="email" name="user_mail" placeholder="Email" required></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu:</td>
                        <td><input type="password" name="user_pass" placeholder="Password" required></td>
                    </tr>
                    <tr>
                        <td>Nhập lại mật khẩu:</td>
                        <td><input type="password" name="user_re_pass" placeholder="Password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="checkbox" id="accept-checkbox" required>Tôi đồng ý với các điều khoản
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="sign-up-btn" onclick="validateSignUp()">Đăng kí</button>
                        </td>
                    </tr>
                </table>
            </form>
            <!-- ./sign-up -->
            <!-- Thông báo hiển thị mặc định -->
            <div class="curtain">
                <div class="sign-message">
                    <h2>Chào mừng bạn trở lại!</h2><br>
                    <p>
                        Để tiếp tục mua hàng một cách nhanh chóng cũng như sớm nhận được những thông báo về các chương trình khuyến
                        mại mới nhất của Tech Is, hãy đăng nhập bằng thông tin tài khoản của bạn.
                    </p>
                    <br>
                    <br>
                    <p class="sign-question">Chưa có tài khoản?</p>
                    <button class="sign-btn" onclick="slideSignUp()">Đăng kí ngay</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>