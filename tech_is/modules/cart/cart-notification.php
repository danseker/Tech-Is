<div id="cart" class="col-lg-2 col-md-2 col-sm-12">
    <a class="mt-4 mr-2" href="index.php?page_layout=cart">Giỏ Hàng</a>
    <span class="mt-3" >
        <?php
        if (isset($_SESSION['cart'])) {
            echo count($_SESSION['cart']);
        } else {
            echo 0;
        }
        ?>
    </span>
</div>