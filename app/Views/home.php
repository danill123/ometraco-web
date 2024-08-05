<?php echo view('partials/header', ['title' => 'Home']); ?>

<?php echo view('partials/navbar-search'); ?>

<div class="container mb-5">

    <div id="carouselExampleIndicators" class="carousel slide mt-5 mb-5 " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg style="border-radius: 10px;" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 " width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">First slide</text></svg>
            </div>
            <div class="carousel-item">
                <svg style="border-radius: 10px;" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 " width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>
            </div>
            <div class="carousel-item">
                <svg style="border-radius: 10px;" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 " width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Third slide</text></svg>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="card container py-2">
        <h4>Kategori</h4>
        <div class="owl-carousel owl-theme owl-carousel-category mt-2">
            <?php foreach ($categories as $key => $item) { ?>
                <a href="<?= base_url('category?id=' . $item->id) ?>" class="d-flex item justify-content-center shadow-sm" style="border-radius: 5px; flex-direction: column; background-image: url('<?= base_url("image/aluminum.jpg.webp") ?>'); height: 120px; object-fit: contain; text-decoration: none;">
                    <h5 class="text-white text-center"><?= $item->name ?></h5>
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

    <hr class="">

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
            <!-- <div class="item"><h4>2</h4></div>
            <div class="item"><h4>3</h4></div>
            <div class="item"><h4>4</h4></div>
            <div class="item"><h4>5</h4></div>
            <div class="item"><h4>6</h4></div>
            <div class="item"><h4>7</h4></div>
            <div class="item"><h4>8</h4></div>
            <div class="item"><h4>9</h4></div>
            <div class="item"><h4>10</h4></div>
            <div class="item"><h4>11</h4></div>
            <div class="item"><h4>12</h4></div> -->
        </div>
    </div>

    <?php foreach ($carousel_list as $key => $item) { ?>
        <hr class="">

        <div>
            <h4 class=""><?= esc($item->name) ?></h4>
            <div class="owl-carousel owl-theme products-carousel">

                <?php foreach ($item->products as $subkey => $subitem) { ?>
                    <div style="padding: 1.7px;">
                        <div class="item mb-1 mt-1 shadow-sm">
                            <img class="product-image" src="<?= base_url("image/besi-1.jpeg") ?>" alt="">
                            <div class="p-1 px-2">
                                <p class="product-name"><?= esc($subitem["name"]) ?></p>
                                <h6>Rp. <?= str_replace(',', '.', preg_replace('/\.00$/', '', number_format(esc($subitem["price"]), 2) )) ?> </h6> 
                                <p class="location-name"><?= esc($subitem["location"]) ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    <?php } ?>

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

    jQuery('.products-carousel').owlCarousel({
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