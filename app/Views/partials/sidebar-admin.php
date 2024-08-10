<div class="row flex-nowrap">

        <style>
        .sidebar .nav-item {
            font-weight: 500;
            width: 100%;
        }

        .nav-item .nav-link span {
            color: #7FA1C3;
        }

        #menu .active-menu {
            background: #6482AD;
        }

        #menu .active-menu .nav-link span {
            color: white;
        }
        </style>
        <div class="col-auto col-md-3 col-xl-2 " style="background-color: #F2F2F2; padding: 0px;">
            <div class="d-flex flex-column sidebar align-items-center align-items-sm-start text-white min-vh-100">
                <!-- <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a> -->
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu" style="width: 100%;">
                    <li class="nav-item <?= (strpos(current_url(true), "admin") && !strpos(current_url(true), "admin/")) || strpos(current_url(true),"admin/home") ? "active-menu" : "" ?>">
                        <a href="<?= base_url('admin') ?>" class="nav-link align-middle px-3 ">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline ml-3">Beranda</span>
                        </a>
                    </li>
                    <li class="nav-item <?= strpos(current_url(true),"admin/banner") ? "active-menu" : "" ?>">
                        <a href="<?= base_url('admin/banner') ?>" class="nav-link align-middle px-3">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline ml-3">Banner</span>
                        </a>
                    </li>
                    <li class="nav-item <?= strpos(current_url(true),"admin/products") ? "active-menu" : "" ?>">
                        <a href="<?= base_url('admin/products') ?>" class="nav-link align-middle px-3 ">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline ml-3">Produk</span>
                        </a>
                    </li>
                    
                    <li class="nav-item <?= strpos(current_url(true),"admin/categories") ? "active-menu" : "" ?>">
                        <a href="<?= base_url('admin/categories') ?>" class="nav-link align-middle px-3 ">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline ml-3">Kategori</span>
                        </a>
                    </li>
                    <li class="nav-item <?= strpos(current_url(true),"admin/contacts") ? "active-menu" : "" ?>">
                        <a href="<?= base_url('admin/contacts') ?>" class="nav-link align-middle px-3 ">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline ml-3">Pesan</span>
                        </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>

        <div class="col-auto col-md-9 col-xl-10 py-3">