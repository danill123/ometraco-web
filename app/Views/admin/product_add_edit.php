<?= view('partials/header', ['title' => 'Product List']); ?>

<?= view('partials/navbar-admin'); ?>
<?= view('partials/sidebar-admin'); ?>

    <div class="container">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger mt-3">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <p><?= esc($error); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    
        <?php if(!empty($detail)) { ?>
            <h4>Ubah Data Produk</h4>
        <?php } else { ?>
            <h4>Tambahkan Data Produk</h4>
        <?php } ?>

        <form action="/admin/insert_update_product" enctype="multipart/form-data" method="post" class="my-4">
            <?= csrf_field() ?>
    
            <a style="cursor: pointer;" onclick="history.back()"><i class="fa fa-arrow-left"></i> Kembali </a>
            <div class="row mt-3">
                <div class="col-6">
                    <?php if(!empty($detail)) { ?>
                        <input type="hidden" name="id" value="<?= $detail["id"] ?>" />
                    <?php } ?>
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" value="<?php if(!empty($detail)) { echo $detail["name"]; } ?>" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <textarea id="summernote" name="description"><?php if(!empty($detail)) { echo $detail["description"]; } ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input type="text" id="priceInput" name="price" value="<?php if(!empty($detail)) { echo preg_replace('/\.00$/', '', number_format($detail["price"], 2) ); } ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stok</label>
                        <input type="text" name="stok" value="<?php if(!empty($detail)) { echo $detail["stok"]; } ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lokasi</label>
                        <input type="text" name="location" class="form-control" value="<?php if(!empty($detail)) { echo $detail["location"]; } ?>">
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <br>
    
                        <style>
                        .select2-container--default {
                            width: 100% !important;
                        }
                        </style>
                        <select class="js-example-basic-multiple" name="categories[]">
                            <?php foreach ($categories as $key => $item) { ?>
                                <option value="<?= $item["id"] ?>" <?= in_array($item["id"], $category_select) ? "selected" : "" ?>><?= $item["name"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
    
                </div>
    
                <div class="col-6">
                    <p>Gambar</p>
                    <img id="blah" src="<?php if(!empty($detail)) { echo base_url("image/" . $detail["image"]); } else { echo "https://dummyimage.com/600x400&text=image"; } ?>" alt="your image" style="max-width: 100%; width: 300px;" />
                    <input accept="image/*" name="image" type='file' id="imgInp" class="mt-3" />
                </div>
            </div>
    
            <script>
                document.getElementById("priceInput").addEventListener("input", function(event){
                    event.target.value = parseInt(event.target?.value.replace(/[^0-9.]/g, '')).toLocaleString()
                });
    
                
                const imgInp = document.getElementById("imgInp"); 
                imgInp.onchange = evt => {
                    const [file] = imgInp.files
                    if (file) {
                        jQuery("#blah").attr("src", URL.createObjectURL(file))
                    }
                }
    
                $(document).ready(function() {
                    $('#summernote').summernote({
                        placeholder: 'Masukkan Deskripsi',
                        tabsize: 2,
                        height: 100
                    });
                });
    
                jQuery(document).ready(function() {
                    $('.js-example-basic-multiple').select2();
                });
            </script>
            <button type="submit" class="btn btn-primary" style="background: #6482AD; border: #6482AD">Submit</button>
        </form>
    
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    </div>

<?= view('partials/end-sidebar-admin'); ?>
<?= view('partials/footer'); ?>