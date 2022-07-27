<?php
if (isset($_GET['prd_id'])) {
    $prd_id = $_GET['prd_id'];
    $sql = "SELECT * FROM product WHERE prd_id=$prd_id";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);
} else {
    header("location: index.php");
}

// Add comment
if (isset($_POST['sbm'])) {
    if (empty($_POST['comm_name'])) {
        echo "Bạn chưa nhập tên!";
    } else {
        $comm_name = $_POST['comm_name'];
    }
    $comm_mail = $_POST['comm_mail'];
    $comm_details = $_POST['comm_details'];
    // add thêm date
    $sqlInsert = "INSERT INTO comment (prd_id, comm_name, comm_mail, comm_details) VALUES
    ('$prd_id', '$comm_name', '$comm_mail', '$comm_details')";
    if (mysqli_query($conn, $sqlInsert)) {
        echo "<script>alert('Thêm bình luận thành công');</script>";
    } else {
        echo "<script>alert('Thêm bình luận không thành công');</script>";
    }
}

?>

<!--	List Product	-->
<div id="product">
    <div id="product-head" class="row">
        <div id="product-img" class="col-lg-6 col-md-6 col-sm-12">
            <img src="admin/images/<?php echo $product['prd_image']; ?>">
        </div>
        <div id="product-details" class="col-lg-6 col-md-6 col-sm-12">
            <h1><?php echo $product['prd_name']; ?></h1>
            <ul>
                <li><span>Bảo Hành:</span><?php echo $product['prd_warranty']; ?></li>
                <li><span>Đi Kèm:</span> <?php echo $product['prd_accessories']; ?></li>
                <li><span>Tình Trạng:</span> <?php echo $product['prd_new']; ?></li>
                <li><span>Khuyến Mãi:</span> <?php echo $product['prd_promotion']; ?></li>
                <li id="price">Giá Bán (chưa bao gồm VAT)</li>
                <li id="price-number"><?php echo number_format($product['prd_price'],0, ",", "."); ?>đ</li>
                <li id="status">
                    <?php
                    if ($product['prd_status'] == 1) {
                        echo '<span style= "color: green;">Còn hàng</span>';
                    } else {
                        echo '<span style= "color: red;">Hết hàng</span>';
                    }
                    ?>
                </li>
            </ul>
            <div id="add-cart"><a href="modules/cart/process-cart.php?action=add&prd_id=<?php echo $product['prd_id']; ?>">Mua ngay</a></div>
        </div>
    </div>
    <div id="product-body" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>Đánh giá về <?php echo $product['prd_name']; ?></h3>
            <?php echo $product['prd_details']; ?>
        </div>
    </div>
    <?php
        date_default_timezone_set("Asia/Ho_Chi_Minh");
    ?>
    <!--	Comment	-->
    <div id="comment" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>Bình luận sản phẩm</h3>
            <form method="post">
                <div class="form-group">
                    <label>Tên:</label>
                    <input name="comm_name" required type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input name="comm_mail" required type="email" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label>Nội dung:</label>
                    <textarea name="comm_details" required rows="8" class="form-control"></textarea>
                </div>
                <button type="submit" name="sbm" class="btn btn-primary">Gửi</button>
            </form>
        </div>
    </div>
    <!--	End Comment	-->

    <!--	Comments List	-->
    <!-- Không hiện div khi không có cmt nào -->
    <?php
    if (isset($_GET['prd_id'])) {
        $prd_id = $_GET['prd_id'];
        $sqlComment = "SELECT * FROM comment WHERE prd_id=$prd_id";
        $resultComment = mysqli_query($conn, $sqlComment);
    }
    ?>
    <div id="comments-list" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <?php
            if (mysqli_num_rows($resultComment) > 0) {
                while ($productComment = mysqli_fetch_array($resultComment)) {
            ?>
                    <div class="comment-item">
                        <ul>
                            <li><b><?php echo $productComment['comm_name']; ?></b></li>
                            <li><?php echo date("d-m-Y H:i:s", strtotime($productComment['comm_date'])); ?></li>
                            <li>
                                <p><?php echo $productComment['comm_details']; ?></p>
                            </li>
                        </ul>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <!--	End Comments List	-->
</div>
<!--	End Product	-->
<div id="pagination">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="#">Trang trước</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Trang sau</a></li>
    </ul>
</div>