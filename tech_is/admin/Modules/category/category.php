<?php
$sql_category = "SELECT * FROM category";
$resultAll = mysqli_query($conn, $sql_category);

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
$sql_pagination = "SELECT * FROM category LIMIT $start,$rowPerPage";
$resultPagination = mysqli_query($conn, $sql_pagination);
?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="index.php"><svg class="glyph stroked home">
						<use xlink:href="#stroked-home"></use>
					</svg></a></li>
			<li class="active">Quản lý danh mục</li>
		</ol>
	</div>

	<!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Quản lý danh mục</h1>
		</div>
	</div>
	<!--/.row-->

	<div id="toolbar" class="btn-group">
		<a href="index.php?page=add_category" class="btn btn-success">
			<!-- button adding category -->
			<i class="glyphicon glyphicon-plus"></i> Thêm danh mục
		</a>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table data-toolbar="#toolbar" data-toggle="table">
						<thead>
							<tr>
								<th data-field="id" data-sortable="true">ID</th>
								<th>Tên danh mục</th>
								<th>Tùy chọn</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if (mysqli_num_rows($resultPagination) > 0) {
								while ($row = mysqli_fetch_assoc($resultPagination)) {
							?>
									<tr>
										<td style=""><?php echo $row['cat_id']; ?></td>
										<td style=""><?php echo $row['cat_name']; ?></td>
										<td class="form-group">
											<!-- Button edit -->
											<a href="index.php?page=edit_category&cat_id=<?php echo $row['cat_id']; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
											<!-- Button delete -->
											<a onclick="return confirmDel();" href="Modules/category/del_category.php?cat_id=<?php echo $row['cat_id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
										</td>

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
								<li class="page-item"><a class="page-link" href="index.php?page=category&current_page=<?php echo $current_page - 1; ?>">&laquo;</a></li>
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
										<li class="page-item active"><a class="page-link" href="index.php?page=category&current_page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
									<?php } else { ?>
										<li class="page-item"><a class="page-link" href="index.php?page=category&current_page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
							<?php
									}
								}
							}
							?>

							<!-- nút chuyển sang trang sau -->
							<?php
							if ($current_page < $totalPage) { ?>
								<li class="page-item"><a class="page-link" href="index.php?page=category&current_page=<?php echo $current_page + 1; ?>">&raquo;</a></li>
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
        return confirm("Bạn chắc chắn muốn xóa danh mục này chứ");
    }
</script>