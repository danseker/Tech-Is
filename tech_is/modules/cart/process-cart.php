<?php 
// cart = session + array 2 chieu
// Thêm, sửa, xóa sản phẩm ở giỏ hàng
    session_start();
    $action = $_GET['action'];
    
    switch ($action) {
        case 'add':
            if(isset($_GET['prd_id'])){
                $prd_id = $_GET['prd_id'];
            }
            if(isset($_SESSION['cart'][$prd_id])){
                $_SESSION['cart'][$prd_id]++;
            }else{
                $_SESSION['cart'][$prd_id] =  1;
            }
            header("location: ../../index.php?page_layout=cart");
            break;
        
       
        case 'del':
            if(isset($_SESSION['cart'][$_GET['prd_id']])){
                unset($_SESSION['cart'][$_GET['prd_id']]);
            }

            if(empty($_SESSION['cart'])){
                unset($_SESSION['cart']);
            }
            header("location: ../../index.php?page_layout=cart");
            break;
        case 'submit':
            if(isset($_POST['update_cart'])){
                // cập nhật giỏ hàng
                foreach ($_POST['quantity'] as $prd_id => $qty) {
                    $_SESSION['cart'][$prd_id] = $qty; //$qty là giá trị ở ô input
                    if($qty == 0) {
                        // user chuyển số lượng = 0 thì tự xóa sản phẩm
                        unset($_SESSION['cart'][$prd_id]); 
                    }
                }
                header("location: ../../index.php?page_layout=cart");
            }
            if(isset($_POST['insert_cart'])){
                include_once "../../admin/config/connectDB.php";
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                // thêm vào bảng orders
                $user_name = $_POST['user_name'];
                $user_phone = $_POST['user_phone'];
                $user_email = $_POST['user_email'];
                $amount = $_POST['total_price'];
                $status = 0;
                $created = date('Y-m-d H:i:s');

                $sqlOrder = "INSERT INTO orders(user_name, user_email, user_phone,status, amount,  created)
                VALUES ('$user_name', '$user_email', '$user_phone', '$status', '$amount', '$created')";
                // echo $sqlOrder;
                mysqli_query($conn, $sqlOrder);
                $order_id = mysqli_insert_id($conn);
                // thêm vào bảng orderdetails
                $sqlDetail = "INSERT INTO orderdetail(order_id, prd_id, qty, price) VALUES";
                foreach ($_SESSION['cart'] as $prd_id => $qty) {
                    $price = $_POST['prd_price'][$prd_id];
                    $sqlDetail .= "($order_id, $prd_id, $qty, $price),";
                }
                $sqlDetail = rtrim($sqlDetail,",");
                mysqli_query($conn, $sqlDetail);
                unset($_SESSION['cart']); // cart đã mua r thì sẽ biến mất
                header("location: ../../index.php?page_layout=success");
            }
            break;
    }
    
?>