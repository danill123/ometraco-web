<?php echo view('partials/header', ['title' => 'Home']); ?>

<?php echo view('partials/navbar-search'); ?>

<div class="container">

    <div id="carouselExampleIndicators" class="carousel slide mt-5 mb-5" data-ride="carousel">
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

    <hr>

    <div>
        <h4>Hello</h4>
        <div class="owl-carousel owl-theme products-carousel">
            <div class="item mb-1 mt-1 shadow-sm ml-1 mr-1">
                <img class="product-image" src="<?= base_url("image/besi-1.jpeg") ?>" alt="">
                <div class="p-1">
                    <p class="product-name">Besi Beton Polos SNI Ukuran 8mm x 12 Meter DPP Steel</p>
                    <h6>Rp. 500.000</h6>
                    <p class="location-name">Kota Medan</p>
                </div>
            </div>
            <div class="item mb-1 mt-1 shadow-sm ml-1 mr-1">
                <img class="product-image" src="<?= base_url("image/besi-1.jpeg") ?>" alt="">
                <div class="p-1">
                    <p class="product-name">Besi Beton Polos SNI Ukuran 8mm x 12 Meter DPP Steel</p>
                    <h6>Rp. 500.000</h6>
                    <p class="location-name">Kota Medan</p>
                </div>
            </div>
            <div class="item mb-1 mt-1 shadow-sm ml-1 mr-1">
                <img class="product-image" src="<?= base_url("image/besi-1.jpeg") ?>" alt="">
                <div class="p-1">
                    <p class="product-name">Besi Beton Polos SNI Ukuran 8mm x 12 Meter DPP Steel</p>
                    <h6>Rp. 500.000</h6>
                    <p class="location-name">Kota Medan</p>
                </div>
            </div>
            <div class="item mb-1 mt-1 shadow-sm ml-1 mr-1">
                <img class="product-image" src="<?= base_url("image/besi-1.jpeg") ?>" alt="">
                <div class="p-1">
                    <p class="product-name">Besi Beton Polos SNI Ukuran 8mm x 12 Meter DPP Steel</p>
                    <h6>Rp. 500.000</h6>
                    <p class="location-name">Kota Medan</p>
                </div>
            </div>
            <div class="item mb-1 mt-1 shadow-sm ml-1 mr-1">
                <img class="product-image" src="<?= base_url("image/besi-1.jpeg") ?>" alt="">
                <div class="p-1">
                    <p class="product-name">Besi Beton Polos SNI Ukuran 8mm x 12 Meter DPP Steel</p>
                    <h6>Rp. 500.000</h6>
                    <p class="location-name">Kota Medan</p>
                </div>
            </div>
            <div class="item mb-1 mt-1 shadow-sm ml-1 mr-1">
                <img class="product-image" src="<?= base_url("image/besi-1.jpeg") ?>" alt="">
                <div class="p-1">
                    <p class="product-name">Besi Beton Polos SNI Ukuran 8mm x 12 Meter DPP Steel</p>
                    <h6>Rp. 500.000</h6>
                    <p class="location-name">Kota Medan</p>
                </div>
            </div>
            <div class="item mb-1 mt-1 shadow-sm ml-1 mr-1">
                <img class="product-image" src="<?= base_url("image/besi-1.jpeg") ?>" alt="">
                <div class="p-1">
                    <p class="product-name">Besi Beton Polos SNI Ukuran 8mm x 12 Meter DPP Steel</p>
                    <h6>Rp. 500.000</h6>
                    <p class="location-name">Kota Medan</p>
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

    <hr>

    <div>

        <div class="owl-carousel owl-theme products-carousel">
            <div class="item"><h4>1</h4></div>
            <div class="item"><h4>2</h4></div>
            <div class="item"><h4>3</h4></div>
            <div class="item"><h4>4</h4></div>
            <div class="item"><h4>5</h4></div>
            <div class="item"><h4>6</h4></div>
            <div class="item"><h4>7</h4></div>
            <div class="item"><h4>8</h4></div>
            <div class="item"><h4>9</h4></div>
            <div class="item"><h4>10</h4></div>
            <div class="item"><h4>11</h4></div>
            <div class="item"><h4>12</h4></div>
        </div>
        
    </div>

</div>

<!-- style="
    position: absolute;
    left: 0;
    top: 50%;
" -->
<!-- style="
    position: absolute;
    right: 0;
    top: 50%;
" -->

<script>
    // jQuery(document).ready(function(){
    //     alert("bacot")
    // })

    jQuery('.owl-carousel').owlCarousel({
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