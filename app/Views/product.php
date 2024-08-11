<?php echo view('partials/header', ['title' => $name]); ?>

<?php echo view('partials/navbar-search'); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hepta+Slab:wght@1..900&family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">

<div class="container my-3">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
            <?php if(!empty($category_name)) { ?>
                <li class="breadcrumb-item"><a href="<?= base_url('category?id=' . esc($category_id)) ?>"><?= esc($category_name) ?></a></li>
            <?php } ?>
            <li class="breadcrumb-item active" aria-current="page"><?= esc($name) ?></li>
        </ol>
    </nav>

    <style>
    .product-title {
        font-family: "Noto Sans Thai", sans-serif;
        font-size: 25px;
    }

    .box-product-detail {
        background: linear-gradient(296deg, rgba(0, 0, 0, 0.50) 0%, rgba(134, 134, 134, 0.50) 100%); border-radius: 5px; max-width: 100%; width: auto;
        font-weight: 450; color: white;
        font-size: 14px;
    }
    </style>

    <div class="row">
        <div class="col-12 col-md-4 mt-3">
            <img style="max-width: 100%; width: 100%; border-radius: 10px; height: 350px; object-fit: cover; object-position: center center; box-shadow: 0px 2px 6px 2px rgba(0, 0, 0, 0.15);" src="<?= base_url("image/" . $image) ?>" alt="">
            <div class="d-flex justify-content-center">
                <div class="box-product-detail py-2 px-3 div-href hubungi-button mt-3" style="cursor: pointer;" link-href="<?= base_url("contact?product_id=" . $id) ?>">Hubungi Kami</div>
            </div>
        </div>
        <style>
        .item-title {
            font-size: 16px;
        }
        </style>
        <div class="col-12 col-md-8 mt-3">
            <h3 class="product-title"><?= esc($name) ?></h3>
            <h5 class="mt-3 item-title">Harga</h5>
            <!-- <div style="width: 156px; height: 34px; background: linear-gradient(296deg, rgba(0, 0, 0, 0.50) 0%, rgba(134, 134, 134, 0.50) 100%); border-radius: 5px"></div> -->

            <div class="d-flex">
                <div class="box-product-detail py-2 px-3">Rp. <?= str_replace(',', '.', preg_replace('/\.00$/', '', number_format(esc($price), 2) )) ?> / unit</div>
            </div>

            <h5 class="mt-3 item-title">Lokasi</h5>
            <div class="d-flex">
                <div class="box-product-detail py-2 px-3"><?= esc($location) ?></div>
            </div>

            <h5 class="mt-3 item-title">Stok</h5>
            <div class="d-flex">
                <div class="box-product-detail py-2 px-3"><?= esc($stok) ?></div>
            </div>

            <h5 class="mt-3 item-title">Kategori</h5>
            <div class="d-flex">
                <div class="box-product-detail py-2 px-3"><?= esc($category_name) ?></div>
            </div>
            <style>
            .description > * {
                margin: 0;
                text-align: justify;
            }
            </style>
            <h5 class="mt-4 item-title">Description</h5>
            <div class="description">
                <?= $description ?>
            </div>
        </div>
        <div class="col-12 col-md-12">
            <h5 class="mt-4 item-title">Produk Terkait</h5>
            <style>
                .products-carousel .product-item {
                    padding-right: 7px;
                    padding-left: 7px;
                }
            </style>
            <div class="row products-carousel px-2">
                <?php if(count($related_products) > 0) { ?>
                    <?php foreach ($related_products as $key => $item) { ?>
                        <!-- href="<?= base_url("product?id=" . esc($item->id)) ?>" -->
                        <a class="product-item col-6 col-md-2 mt-2">
                            <div class="mb-1 mt-1" style="border-radius: 10px; box-shadow: 0px 1px 3px 1px rgba(0, 0, 0, 0.15);">
                                <img class="product-image" style="max-width: 100%; width: 100%;" src="<?= base_url("image/" . $item->image) ?>" alt="">
                                <div class="p-1 px-2">
                                    <p class="product-name"><?= esc($item->name) ?></p>
                                    <h6>Rp. <?= str_replace(',', '.', preg_replace('/\.00$/', '', number_format(esc($item->price), 2) )) ?> </h6> 
                                    <p class="location-name"><?= esc($item->location) ?></p>
                                    <div class="text-center py-1 px-3 mb-1 div-href hubungi-button" link-href="<?= base_url("contact?product_id=" . $item->id) ?>">Hubungi Kami</div>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                <?php } ?>

                <script>
                    $(document).ready(function() {
                        $('.div-href').click(function(){
                            window.location.href = $(this).attr("link-href");
                        })

                        let maxHeight = 0;
                        $('.product-name').each(function() {
                            let height = $(this).outerHeight();
                            if (height > maxHeight) {
                                maxHeight = height;
                            }
                        });

                        $('.product-name').css('height', maxHeight + 'px');
                    });
                </script>
            </div>
        </div>
    </div>
</div>

<?php echo view('partials/footer'); ?>