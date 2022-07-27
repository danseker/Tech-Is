<?php
$sql_user = "SELECT * FROM user";
$resultAll = mysqli_query($conn, $sql_user);

// Phân trang
$rowPerPage = 5;

// số bản ghi lấy được
$totalRecords = mysqli_num_rows($resultAll);
$totalPage =  ceil($totalRecords / $rowPerPage); // tổng số trang

// lấy trang hiện tại từ đường dẫn
if (isset($_GET['current_page'])) {
    $current_page = $_GET['current_page'];
} else {
    $current_page = 1;
}

// bắt lỗi
if ($current_page < 1) {
    $current_page = 1;
}
if ($current_page > $totalPage) {
    $current_page = $totalPage;
}
$start = ($current_page - 1) * $rowPerPage;
$sql_pagination = "SELECT * FROM user LIMIT $start,$rowPerPage";
$resultPagination = mysqli_query($conn, $sql_pagination);
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="index.php"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách thành viên</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách thành viên</h1>
        </div>
    </div>
    <!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="index.php?page=add_user" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm thành viên
        </a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" data-toggle="table">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="name" data-sortable="true">Họ & Tên</th>
                                <th data-field="price" data-sortable="true">Email</th>
                                <th>Số điện thoại</th>
                                <th>Quyền</th>
                                <th>Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($resultPagination) > 0) {
                                while ($row = mysqli_fetch_assoc($resultPagination)) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['user_id']; ?></td>
                                        <td><?php echo $row['user_full']; ?></td>
                                        <td><?php echo $row['user_mail']; ?></td>
                                        <td><?php echo $row['user_phone']; ?></td>
                                        <?php
                                        if ($row['user_level'] == 0) { ?>
                                            <td><span class="label label-danger">Admin</span></td>
                                            <td class="form-group">
                                            <!-- Button edit -->
                                            <a href="index.php?page=edit_user&user_id=<?php echo $row['user_id']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                        </td>
                                        <?php } else { ?>
                                            <td><span class="label label-warning">Member</span></td>
                                            <td class="form-group">
                                            <!-- Button edit -->
                                            <a href="index.php?page=edit_user&user_id=<?php echo $row['user_id']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                            <!-- Button delete -->
                                            <a onclick="return confirmDel();" href="Modules/user/del_user.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                        </td>
                                        <?php } ?>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <!-- nút chuyển về trang tước -->
                            <?php
                            if ($current_page > 1) { ?>
                                <li class="page-item"><a class="page-link" href="index.php?page=user&current_page=<?php echo $current_page - 1; ?>">&laquo;</a></li>
                            <?php } else {
                            ?>
                                <li class="page-item disabled"><a class="page-link" href="">&laquo;</a></li>
                            <?php } ?>
                            <!-- kết thúc  -->
                            <!-- phân trang ở giữa -->
                            <?php
                            for ($i = 1; $i <= $totalPage; $i++) {
                                if ($i > $current_page - 3 && $i < $current_page + 3) {
                                    if ($i == $current_page) {
                            ?>
                                        <li class="page-item active"><a class="page-link" href="index.php?page=user&current_page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                    <?php } else { ?>
                                        <li class="page-item"><a class="page-link" href="index.php?page=user&current_page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            <?php
                                    }
                                }
                            }
                            ?>

                            <!-- nút chuyển sang trang sau -->
                            <?php
                            if ($current_page < $totalPage) { ?>
                                <li class="page-item"><a class="page-link" href="index.php?page=user&current_page=<?php echo $current_page + 1; ?>">&raquo;</a></li>
                            <?php } else {
                            ?>
                                <li class="page-item disabled"><a class="page-link" href="">&raquo;</a></li>
                            <?php } ?>
                            <!-- kết thúc -->

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>

<!-- Delete category -->
<script>
    function confirmDel() {
        return confirm("Bạn chắc chắn muốn xóa người dùng này chứ");
    }
</script>