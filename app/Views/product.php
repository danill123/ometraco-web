<?php echo view('partials/header', ['title' => 'Home']); ?>

<?php echo view('partials/navbar-search'); ?>

<div class="container my-3">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
            <?php if(!empty($category_name)) { ?>
                <li class="breadcrumb-item"><a href="<?= base_url('category?id=' . esc($category_id)) ?>"><?= $category_name ?></a></li>
            <?php } ?>
            <li class="breadcrumb-item active" aria-current="page"><?= $name ?></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-4">
            <img style="max-width: 100%; width: 100%; border-radius: 10px;" class="shadow" src="<?= base_url("image/besi-1.jpeg") ?>" alt="">
        </div>
        <div class="col-8">
            <h3><?= esc($name) ?></h3>
            <h4 class="my-3">Rp. <?= str_replace(',', '.', preg_replace('/\.00$/', '', number_format(esc($price), 2) )) ?> / unit</h4>
            <h4>Dikirim Dari <?= esc($location) ?></h4>
            <style>
            .description > * {
                margin: 0;
                text-align: justify;
            }
            </style>
            <div class="card p-3 mt-3 description">
                <?= $description ?>
            </div>
        </div>
    </div>
</div>

<?php echo view('partials/footer'); ?>