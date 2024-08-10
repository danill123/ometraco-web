<?php echo view('partials/header', ['title' => $category_name]); ?>

<?php echo view('partials/navbar-search'); ?>

<div class="container my-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
            <li class="breadcrumb-item active"><a><?= $category_name ?></a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
        </ol>
    </nav>
    
    <style>
        .products-carousel .product-item {
            padding-right: 7px;
            padding-left: 7px;
        }
    </style>
    <div class="row products-carousel px-2">
        <?php if(count($datum) > 0) { ?>
            <?php foreach ($datum as $key => $item) { ?>
                <a class="product-item col-6 col-md-2 mt-2">
                    <div class="mb-1 mt-1 shadow-sm" style="border-radius: 10px;">
                        <img class="product-image div-href"  link-href="<?= base_url("product?id=" . esc($item->id)) ?>" style="max-width: 100%; width: 100%; cursor: pointer;" src="<?= base_url("image/" . $item->image) ?>" alt="">
                        <div class="p-1 px-2">
                            <div style="cursor: pointer;" class="div-href" link-href="<?= base_url("product?id=" . esc($item->id)) ?>">
                                <p class="product-name"><?= esc($item->name) ?></p>
                                <h6>Rp. <?= str_replace(',', '.', preg_replace('/\.00$/', '', number_format(esc($item->price), 2) )) ?> </h6> 
                                <p class="location-name"><?= esc($item->location) ?></p>
                            </div>
                            <div class="text-center py-1 px-3 mb-1 hubungi-button">Hubungi Kami</div>
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

<?php echo view('partials/footer'); ?>