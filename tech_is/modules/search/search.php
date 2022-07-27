<?php
$rowPerPage = 3;
$keyword = "";
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
$arr_keyword = explode(" ", $keyword); // ram 8gb => ['ram', '8gb']
$str_keyword = '%' . implode("%", $arr_keyword) . '%'; // %ram%8gb%

$sqlSearch = "SELECT * FROM product WHERE prd_name LIKE '$str_keyword'";
$query = mysqli_query($conn, $sqlSearch);

$totalRecords = mysqli_num_rows($query); // số bản ghi lấy được
$totalPage =  ceil($totalRecords / $rowPerPage); // tổng số trang
// lấy trang hiện tại từ đường dẫn
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

// bắt lỗi
if ($page < 1) {
    $page = 1;
}
if ($page > $totalPage) {
    $page = $totalPage;
}
$start = ($page - 1) * $rowPerPage;
$sql_pagination = "SELECT * FROM product WHERE prd_name LIKE '$str_keyword' LIMIT $start,$rowPerPage";
$resultPagination = mysqli_query($conn, $sql_pagination);
?>


<!--	List Product	-->
<div class="products">
    <div id="search-result">Kết quả tìm kiếm với: <span style="font-weight: bold;"><?php echo $keyword; ?></span></div>
    <div class="product-list row">
        <?php
        if (mysqli_num_rows($resultPagination)) {
            while ($prd = mysqli_fetch_assoc($resultPagination)) {
        ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                    <div class="product-item card text-center">
                        <a href="index.php?page_layout=product&prd_id=<?php echo $prd['prd_id']; ?>"><img src="admin/images/<?php echo $prd['prd_image']; ?>"></a>
                        <h4>
                            <a href="index.php?page_layout=product&prd_id=<?php echo $prd['prd_id']; ?>"><?php echo $prd['prd_name']; ?></a>
                        </h4>
                        <p>Giá Bán: <span><?php echo number_format($prd['prd_price'], 0, ',', '.'); ?>đ</span></p>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "không có sản phẩm nào được tìm thấy";
        }
        ?>
    </div>
</div>
<!--	End List Product	-->

<div id="pagination">
    <ul class="pagination">
        <!-- Nút chuyển về trang tước -->
        <?php
        if ($page > 1) { ?>
            <li class="page-item"><a class="page-link" href="index.php?page_layout=search&keyword=<?php echo $keyword; ?>&page=<?php echo $page - 1; ?>">Trang trước</a></li>
        <?php } else {
        ?>
            <li class="page-item disabled"><a class="page-link" href="">&laquo;</a></li>
        <?php } ?>
        <!-- End  -->
        <!-- Phân trang ở giữa -->
        <?php
        for ($i = 1; $i <= $totalPage; $i++) {
            if ($i > $page - 3 && $i < $page + 3) {
                if ($i == $page) {
        ?>
                    <li class="page-item active"><a class="page-link" href="index.php?page_layout=search&keyword=<?php echo $keyword; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php } else { ?>
                    <li class="page-item"><a class="page-link" href="index.php?page_layout=search&keyword=<?php echo $keyword; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php
                }
            }
        }
        ?>
        <!-- Nút chuyển sang trang sau -->
        <?php
        if ($page < $totalPage) { ?>
            <li class="page-item"><a class="page-link" href="index.php?page_layout=search&keyword=<?php echo $keyword; ?>&page=<?php echo $page + 1; ?>">Trang sau</a></li>
        <?php } else {
        ?>
            <li class="page-item disabled"><a class="page-link" href="">&raquo;</a></li>
        <?php } ?>
        <!-- End -->
    </ul>
</div>