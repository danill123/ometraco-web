<?php echo view('partials/header', ['title' => 'Home']); ?>

<?php echo view('partials/navbar-search'); ?>

<div class="container my-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
            <li class="breadcrumb-item active"><a><?= $category_name ?></a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Data</li> -->
        </ol>
    </nav>
    
    <div class="row products-carousel">
        <?php if(count($datum) > 0) { ?>
            <?php foreach ($datum as $key => $item) { ?>
                <a href="<?= base_url("product?id=" . esc($item->id)) ?>" class="col-sm-6 col-md-2 mt-2">
                    <div class="mb-1 mt-1 shadow-sm" style="border-radius: 10px;">
                        <img class="product-image" style="max-width: 100%; width: 100%;" src="<?= base_url("image/" . $item->image) ?>" alt="">
                        <div class="p-1 px-2">
                            <p class="product-name"><?= esc($item->name) ?></p>
                            <h6>Rp. <?= str_replace(',', '.', preg_replace('/\.00$/', '', number_format(esc($item->price), 2) )) ?> </h6> 
                            <p class="location-name"><?= esc($item->location) ?></p>
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