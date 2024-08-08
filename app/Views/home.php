<?php echo view('partials/header', ['title' => 'Home']); ?>

<?php echo view('partials/navbar-search'); ?>

<div class="container mb-5">

    <?php if(count($banners) > 0) { ?>
        <div id="carouselExampleIndicators" class="carousel slide mt-5 mb-5 " data-ride="carousel">
            <ol class="carousel-indicators">
                <?php if(count($banners) > 1) { ?>
                    <?php foreach ($banners as $key => $item) { ?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?= $key ?>" class="<?= $key == 0 ? "active" : "" ?>"></li>
                    <?php } ?>
                <?php } ?>
                <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
            </ol>
            <div class="carousel-inner">
                <?php foreach ($banners as $key => $item) { ?>
                    <div class="carousel-item <?= $key == 0 ? "active" : "" ?>">
                        <img style="border-radius: 10px; object-fit: cover;" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 " width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide" src="<?= base_url("image/" . $item->image) ?>">
                        <!-- <svg style="border-radius: 10px;" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 " width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">First slide</text></svg> -->
                    </div>
                <?php } ?>
                <!-- <div class="carousel-item">
                    <svg style="border-radius: 10px;" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 " width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>
                </div>
                <div class="carousel-item">
                    <svg style="border-radius: 10px;" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 " width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Third slide</text></svg>
                </div> -->
            </div>
            <?php if(count($banners) > 1) { ?>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            <?php } ?>
        </div>
    <?php } ?>

    <div class="card container py-2">
        <h4>Kategori</h4>
        <div class="owl-carousel owl-theme owl-carousel-category mt-2 mb-2">
            <?php foreach ($categories as $key => $item) { ?>
                <a href="<?= base_url('category?id=' . esc($item->id)) ?>" class="d-flex item justify-content-center shadow-sm px-1" style="border-radius: 5px; flex-direction: column; background: linear-gradient(0deg, rgba(37, 0, 150, 0.3), rgba(37, 0, 150, 0.3)), url('<?= base_url("image/" . $item->image) ?>'); height: 120px; background-size: cover; text-decoration: none; object-position: center center;">
                    <h6 class="text-white text-center"><?= esc($item->name) ?></h6>
                </a>
            <?php } ?>
        </div>

        <!-- <div class="row justify-content-center">
            <div class="col-md-2 p-1">
                <div class="d-flex justify-content-center" style="border-radius: 5px; flex-direction: column; background-image: url('<?= base_url("image/aluminum.jpg.webp") ?>'); height: 120px; object-fit: contain;">
                    <h5 class="text-white text-center">Minel & Kubara</h5>
                </div>
            </div>

            <div class="col-md-2 p-1">
                <div class="d-flex justify-content-center" style="border-radius: 5px; flex-direction: column; background-image: url('<?= base_url("image/aluminum.jpg.webp") ?>'); height: 120px; object-fit: contain;">
                    <h5 class="text-white text-center">Minel & Kubara</h5>
                </div>
            </div>

            <div class="col-md-2 p-1">
                <div class="d-flex justify-content-center" style="border-radius: 5px; flex-direction: column; background-image: url('<?= base_url("image/aluminum.jpg.webp") ?>'); height: 120px; object-fit: contain;">
                    <h5 class="text-white text-center">Minel & Kubara</h5>
                </div>
            </div>

            <div class="col-md-2 p-1">
                <div class="d-flex justify-content-center" style="border-radius: 5px; flex-direction: column; background-image: url('<?= base_url("image/aluminum.jpg.webp") ?>'); height: 120px; object-fit: contain;">
                    <h5 class="text-white text-center">Minel & Kubara</h5>
                </div>
            </div>

            <div class="col-md-2 p-1">
                <div class="d-flex justify-content-center" style="border-radius: 5px; flex-direction: column; background-image: url('<?= base_url("image/aluminum.jpg.webp") ?>'); height: 120px; object-fit: contain;">
                    <h5 class="text-white text-center">Minel & Kubara</h5>
                </div>
            </div>

            <div class="col-md-2 p-1">
                <div class="d-flex justify-content-center" style="border-radius: 5px; flex-direction: column; background-image: url('<?= base_url("image/aluminum.jpg.webp") ?>'); height: 120px; object-fit: contain;">
                    <h5 class="text-white text-center">Minel & Kubara</h5>
                </div>
            </div>

            <div class="col-md-2 p-1">
                <div class="d-flex justify-content-center" style="border-radius: 5px; flex-direction: column; background-image: url('<?= base_url("image/aluminum.jpg.webp") ?>'); height: 120px; object-fit: contain;">
                    <h5 class="text-white text-center">Minel & Kubara</h5>
                </div>
            </div>

            <div class="col-md-2 p-1">
                <div class="d-flex justify-content-center" style="border-radius: 5px; flex-direction: column; background-image: url('<?= base_url("image/aluminum.jpg.webp") ?>'); height: 120px; object-fit: contain;">
                    <h5 class="text-white text-center">Minel & Kubara</h5>
                </div>
            </div>
    
        </div> -->
        <!-- <div class="col-md-2 px-1  d-flex justify-content-center" style="flex-direction: column; background-image: url('<?= base_url("image/aluminum.jpg.webp") ?>'); height: 120px; object-fit: cover;">
            <h5 class="text-white text-center">Minel & Kubara</h5>
        </div> -->

    </div>

    <!-- <hr class="">

    <div>
        <h4 class="">Hello</h4>
        <div class="owl-carousel owl-theme products-carousel">
            <div style="padding: 1.7px;">
                <div class="item mb-1 mt-1 shadow-sm">
                    <img class="product-image" src="<?= base_url("image/besi-1.jpeg") ?>" alt="">
                    <div class="p-1">
                        <p class="product-name">Besi Beton Polos SNI Ukuran 8mm x 12 Meter DPP Steel</p>
                        <h6>Rp. 500.000</h6>
                        <p class="location-name">Kota Medan</p>
                    </div>
                </div>
            </div>
            <div style="padding: 1.7px;">
                <div class="item mb-1 mt-1 shadow-sm">
                    <img class="product-image" src="<?= base_url("image/besi-1.jpeg") ?>" alt="">
                    <div class="p-1">
                        <p class="product-name">Besi Beton Polos SNI Ukuran 8mm x 12 Meter DPP Steel</p>
                        <h6>Rp. 500.000</h6>
                        <p class="location-name">Kota Medan</p>
                    </div>
                </div>
            </div>
            
            <div style="padding: 1.7px;">
                <div class="item mb-1 mt-1 shadow-sm">
                    <img class="product-image" src="<?= base_url("image/besi-1.jpeg") ?>" alt="">
                    <div class="p-1">
                        <p class="product-name">Besi Beton Polos SNI Ukuran 8mm x 12 Meter DPP Steel</p>
                        <h6>Rp. 500.000</h6>
                        <p class="location-name">Kota Medan</p>
                    </div>
                </div>
            </div>

            <div style="padding: 1.7px;">
                <div class="item mb-1 mt-1 shadow-sm">
                    <img class="product-image" src="<?= base_url("image/besi-1.jpeg") ?>" alt="">
                    <div class="p-1">
                        <p class="product-name">Besi Beton Polos SNI Ukuran 8mm x 12 Meter DPP Steel</p>
                        <h6>Rp. 500.000</h6>
                        <p class="location-name">Kota Medan</p>
                    </div>
                </div>
            </div>

            <div style="padding: 1.7px;">
                <div class="item mb-1 mt-1 shadow-sm">
                    <img class="product-image" src="<?= base_url("image/besi-1.jpeg") ?>" alt="">
                    <div class="p-1">
                        <p class="product-name">Besi Beton Polos SNI Ukuran 8mm x 12 Meter DPP Steel</p>
                        <h6>Rp. 500.000</h6>
                        <p class="location-name">Kota Medan</p>
                    </div>
                </div>
            </div>

            <div style="padding: 1.7px;">
                <div class="item mb-1 mt-1 shadow-sm">
                    <img class="product-image" src="<?= base_url("image/besi-1.jpeg") ?>" alt="">
                    <div class="p-1">
                        <p class="product-name">Besi Beton Polos SNI Ukuran 8mm x 12 Meter DPP Steel</p>
                        <h6>Rp. 500.000</h6>
                        <p class="location-name">Kota Medan</p>
                    </div>
                </div>
            </div>

            <div style="padding: 1.7px;">
                <div class="item mb-1 mt-1 shadow-sm">
                    <img class="product-image" src="<?= base_url("image/besi-1.jpeg") ?>" alt="">
                    <div class="p-1">
                        <p class="product-name">Besi Beton Polos SNI Ukuran 8mm x 12 Meter DPP Steel</p>
                        <h6>Rp. 500.000</h6>
                        <p class="location-name">Kota Medan</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <?php foreach ($carousel_list as $key => $item) { ?>
        <hr class="">

        <div>
            <h4 class=""><?= esc($item->name) ?></h4>
            <div class="owl-carousel owl-theme products-carousel products-carousel-slider">

                <?php foreach ($item->products as $subkey => $subitem) { ?>
                    <div style="padding: 1.7px; cursor: pointer;" class="div-href" link-href="<?= base_url("product?id=" . esc($subitem["id"])) ?>">
                        <div class="item mb-1 mt-1 shadow-sm">
                            <img class="product-image" src="<?= base_url("image/" . $subitem["image"]) ?>" alt="">
                            <div class="p-1 px-2">
                                <p class="product-name product-name<?= $item->id ?>"><?= esc($subitem["name"]) ?></p>
                                <h6>Rp. <?= str_replace(',', '.', preg_replace('/\.00$/', '', number_format(esc($subitem["price"]), 2) )) ?> </h6> 
                                <p class="location-name"><?= esc($subitem["location"]) ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('.div-href').click(function(){
                    window.location.href = $(this).attr("link-href");
                })

                let maxHeight = 0;
                $('.product-name<?= $item->id ?>').each(function() {
                    let height = $(this).outerHeight();
                    if (height > maxHeight) {
                        maxHeight = height;
                    }
                });

                $('.product-name<?= $item->id ?>').css('height', maxHeight + 'px');
            });
        </script>
    <?php } ?>

    <style>
        .product-list .product-item {
            padding-right: 7px;
            padding-left: 7px;
        }
    </style>
    <?php if(count($products) > 0) { ?>
        <hr class="mt-4">
    <?php } ?>
    <div class="row products-carousel product-list px-2"> 
        <?php if(count($products) > 0) { ?>
            <?php foreach ($products as $key => $item) { ?>
                <a href="<?= base_url("product?id=" . esc($item["id"])) ?>" class="product-item col-6 col-md-2 mt-2">
                    <div class="mb-1 mt-1 shadow-sm" style="border-radius: 10px;">
                        <img class="product-image" style="max-width: 100%; width: 100%;" src="<?= base_url("image/" . $item["image"]) ?>" alt="">
                        <div class="p-1 px-2">
                            <p class="product-name list-product-name"><?= esc($item["name"]) ?></p>
                            <h6>Rp. <?= str_replace(',', '.', preg_replace('/\.00$/', '', number_format(esc($item["price"]), 2) )) ?> </h6> 
                            <p class="location-name"><?= esc($item["location"]) ?></p>
                        </div>
                    </div>
                </a>
            <?php } ?>
        <?php } else { ?>
            <div class="col-12">
                <h4 class="text-center mt-5">Tidak ada data</h4>
            </div>
        <?php } ?>

        <script>
            $(document).ready(function() {
                let maxHeight = 0;
                $('.list-product-name').each(function() {
                    let height = $(this).outerHeight();
                    if (height > maxHeight) {
                        maxHeight = height;
                    }
                });

                $('.list-product-name').css('height', maxHeight + 'px');
            });
        </script>
    </div>

</div>

<script>
    jQuery('.owl-carousel-category').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:6
            }
        }
    })

    jQuery('.products-carousel-slider').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:6
            }
        }
    })
</script>

<?php echo view('partials/footer'); ?>