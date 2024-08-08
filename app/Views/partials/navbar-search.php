<!-- <div class="container"></div> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" style="position: sticky;">
  <div class="container">

    <a class="navbar-brand" href="<?= base_url() ?>">
      <!-- Navbar -->
      <img src="<?= base_url('image/ometraco.jpg'); ?>" alt="" style="max-width: 100%; width: 30%;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <!-- <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
      <form action="<?= base_url("search") ?>" method="GET" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" value="<?php if(!empty($search)) { echo $search; } ?>" name="q" type="search" placeholder="Cari Produk" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
      </form>
    </div>
  </div>
</nav>
