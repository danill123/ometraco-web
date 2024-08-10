<!-- <div class="container"></div> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="position: sticky;">
  <div class="container">

    <a class="navbar-brand" href="<?= base_url() ?>" style="width: 60px;">
      <!-- Navbar -->
      <img src="<?= base_url('image/ometraco.jpg'); ?>" alt="" style="max-width: 100%; width: 100%;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url("/") ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url("contact") ?>">Kontak</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Kategori
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
                $db = \Config\Database::connect();
                $category = $db->query('SELECT id, name FROM `categories` WHERE show_menu = "yes"');
                foreach ($category->getResult() as $key => $item) {
                    echo '<a class="dropdown-item" href="'. base_url('category?id=' . esc($item->id)) .'">'.$item->name.'</a>';
                }
            ?>
          </div>
        </li>
      </ul>
      <form action="<?= base_url("search") ?>" method="GET" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" value="<?php if(!empty($search)) { echo $search; } ?>" name="q" type="search" placeholder="Cari Produk" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" style="background: #6482AD; border: #6482AD; color: white;" type="submit">Cari</button>
      </form>
    </div>
  </div>
</nav>
