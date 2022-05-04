<div>
    <header>
        <div class="logo">
            <a href="<?= ROOT_URL ?>index.php"><img src="<?= ROOT_URL ?>_share/images/anh-website/logo.png" alt=""></a>
        </div>
        <form action="<?= ROOT_URL ?>index.php" method="get">
            <div class="search">
                <input type="text" name="keyword" placeholder="Tìm kiếm...">
                <a href=""><img src="<?= ROOT_URL ?>_share/images/anh-website/icon-search.png" alt=""></a>
            </div>
        </form>
        <div class="buy">
            <a href=""><img src="<?= ROOT_URL ?>_share/images/anh-website/icon-buy.png" alt=""></a>
            <a href="">Giỏ hàng</a>
        </div>
        <?php if (isset($_SESSION['auth']) && !empty($_SESSION['auth'])) : ?>
            <div class="login">
                <a href=""><img src="<?= ROOT_URL ?>_share/images/anh-website/icon-login.png" alt=""></a>
                <a href=""><?= $_SESSION['auth']['name_user'] ?></a>
                <div>
                    <a href="<?= ROOT_URL . "tai-khoan/doi-mk.php" ?>">Đổi mk</a>&#160;&#47;
                    <a href="<?= ROOT_URL . "tai-khoan/logout.php" ?>">Đăng xuất</a>
                </div>
            </div>
        <?php endif ?>
        <?php if (!isset($_SESSION['auth']) && empty($_SESSION['auth'])) : ?>
            <div class="login">
                <a href=""><img src="<?= ROOT_URL ?>_share/images/anh-website/icon-login.png" alt=""></a>
                <a href="<?= ROOT_URL ?>tai-khoan/login.php">Đăng nhập</a>&#160;&#47;
                <a href="<?= ROOT_URL ?>tai-khoan/dangki.php">Đăng kí</a>
            </div>
        <?php endif ?>
    </header>
    <nav>
        <div class="home">
            <a href=""><img src="<?= ROOT_URL ?>_share/images/anh-website/icon-home.png" alt=""></a>
        </div>
        <ul>
            <li><a href="<?= ROOT_URL ?>index.php">Trang chủ</a></li>
            <li><a href="<?= ROOT_URL ?>site/gioi-thieu.php">Giới Thiệu</a></li>
            <li><a href="<?= ROOT_URL ?>site/san-pham.php">Sản Phẩm</a></li>
            <li><a href="<?= ROOT_URL ?>site/tin-tuc.php">Tin Tức</a></li>
            <li><a href="<?= ROOT_URL ?>site/lien-he.php">Liên Hệ</a></li>

        </ul>
        <div class="phone">
            <img src="<?= ROOT_URL ?>_share/images/anh-website/icon-phone.png" alt="">
            <span>Hotline: 0866892060</span>
        </div>
    </nav>
</div>