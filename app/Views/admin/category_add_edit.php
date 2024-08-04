<?= view('partials/header', ['title' => 'Product List']); ?>

<?= view('partials/navbar-admin'); ?>

<div class="container">
    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger mt-3">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <p><?= esc($error); ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <form action="/admin/insert_update_categories" enctype="multipart/form-data" method="post" class="my-4">
        <?= csrf_field() ?>

        <a style="cursor: pointer;"><i class="fa fa-arrow-left"></i> Kembali </a>
        <div class="row mt-3 mb-3">
            <div class="col-6">
                <?php if(!empty($detail)) { ?>
                    <input type="hidden" name="id" value="<?= $detail["id"] ?>" />
                <?php } ?>
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" value="<?php if(!empty($detail)) { echo $detail["name"]; } ?>" name="name" class="form-control">
                </div>
                <div>
                    <p>Gambar</p>
                    <img id="blah" src="https://dummyimage.com/600x400/000/fff" alt="your image" style="max-width: 100%; width: 300px;" />
                    <input accept="image/*" type='file' id="imgInp" class="mt-3" />
                </div>
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
        </script>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= view('partials/footer'); ?>