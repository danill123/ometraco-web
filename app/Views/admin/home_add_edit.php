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
    
        <form action="/admin/add_edit_home_content_post" enctype="multipart/form-data" method="post" class="my-4">
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
                        <label class="form-label">description</label>
                        <textarea class="form-control" name="description" rows="3"><?php if(!empty($detail)) { echo $detail["description"]; } ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Munculkan</label>
                        <select name="show_front" class="form-control form-control-lg">
                            <option value="yes" <?php if(!empty($detail)) { echo ( $detail["show_front"] == "yes" ? "selected" : "" ) ; } ?>>Ya</option>
                            <option value="no" <?php if(!empty($detail)) { echo ( $detail["show_front"] == "no" ? "selected" : "" ); } ?>>Tidak</option>
                        </select>
                    </div>

    
                    <div class="mb-3">
                        <label class="form-label">Items</label>
                        <br>
    
                        <style>
                        .select2-container--default {
                            width: 100% !important;
                        }
                        </style>
                        <?php 
                        $category_select = [];
                        if($detail) {
                            $category_select = explode(",", $detail["item"]);
                        }

                        ?>
                        <select class="js-example-basic-multiple" name="items[]" multiple="multiple">
                            <?php foreach ($products as $key => $item) { ?>
                                <option value="<?= $item["id"] ?>" <?= in_array($item["id"], $category_select) ? "selected" : "" ?>><?= $item["name"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
    
                </div>
    
                <div class="col-6">
                    <p>Gambar</p>
                    <img id="blah" src="https://dummyimage.com/600x400/000/fff" alt="your image" style="max-width: 100%; width: 300px;" />
                    <input accept="image/*" type='file' id="imgInp" class="mt-3" />
                </div>
            </div>
    
            <script>
                const imgInp = document.getElementById("imgInp"); 
                imgInp.onchange = evt => {
                    const [file] = imgInp.files
                    if (file) {
                        jQuery("#blah").attr("src", URL.createObjectURL(file))
                    }
                }
    
                jQuery(document).ready(function() {
                    $('.js-example-basic-multiple').select2();
                });
            </script>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

<?= view('partials/end-sidebar-admin'); ?>
<?= view('partials/footer'); ?>