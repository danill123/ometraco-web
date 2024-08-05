<div class="row flex-nowrap">

        <style>
        .sidebar .nav-item {
            font-weight: 500;
        }
        </style>
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 " style="background-color: #F2F2F2;">
            <div class="d-flex flex-column sidebar align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <!-- <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a> -->
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="<?= base_url('admin') ?>" class="nav-link align-middle px-0 <?= current_url(true) == base_url('admin') ? "text-dark" : "" ?>">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/products') ?>" class="nav-link align-middle px-0 <?= strpos(current_url(true),"admin/products") ? "text-dark" : "" ?>">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Produk</span>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="<?= base_url('admin/categories') ?>" class="nav-link align-middle px-0 <?= strpos(current_url(true),"admin/categories") ? "text-dark" : "" ?>">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Kategori</span>
                        </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>

        <div class="col py-3">