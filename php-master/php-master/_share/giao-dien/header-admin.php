<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= ROOT_URL . 'admin/index.php' ?>">Trang chủ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= ROOT_URL ?>admin/loai-hang/index.php">Danh mục<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= ROOT_URL ?>admin/san-pham/index.php">Sản Phẩm<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= ROOT_URL . 'index.php' ?>">Trang chủ khách hàng <span class="sr-only">(current)</span></a>
      </li>
      <?php if (isset($_SESSION['auth']) && !empty($_SESSION['auth'])) : ?>
        <li>
          <a href="javascript:;" class="nav-link">
            Hello, <?= $_SESSION['auth']['ho_ten'] ?>
          </a>
        </li>
        <li>
          <a class="nav-link" href="<?= ROOT_URL . "tai-khoan/doi-mk.php" ?>">Đổi mk</a>
        </li>
        <li>
          <a class="nav-link" href="<?= ROOT_URL . "tai-khoan/logout.php" ?>">Đăng xuất</a>
        </li>
      <?php endif ?>
      <?php if (!isset($_SESSION['auth']) && empty($_SESSION['auth'])) : ?>
        <li class="nav-item active">
          <a class="nav-link" href="<?= ROOT_URL . 'tai-khoan/dang-ki.php' ?>">Đăng kí <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?= ROOT_URL . 'tai-khoan/login.php' ?>">Đăng nhập <span class="sr-only">(current)</span></a>
        </li>
        <?php endif ?>
    </ul>
  </div>
</nav>