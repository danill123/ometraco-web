<?= view('partials/header', ['title' => 'Product List']); ?>

<?= view('partials/navbar-admin'); ?>
<?= view('partials/sidebar-admin'); ?>

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

    <?php if(!empty($detail)) { ?>
        <h4>Ubah Data Banner</h4>
    <?php } else { ?>
        <h4>Tambahkan Data Banner</h4>
    <?php } ?>

    <form action="/admin/banner_add_edit_post" enctype="multipart/form-data" method="post" class="my-4">
        <?= csrf_field() ?>

        <a style="cursor: pointer;" onclick="history.back()"><i class="fa fa-arrow-left"></i> Kembali </a>
        <div class="row mt-3 mb-3">
            <div class="col-6">
                <?php if(!empty($detail)) { ?>
                    <input type="hidden" name="id" value="<?= $detail["id"] ?>" />
                <?php } ?>
                <div class="mb-3">
                    <label>Judul</label>
                    <input type="text" value="<?php if(!empty($detail)) { echo $detail["title"]; } ?>" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Deskripsi</label>
                    <input type="text" value="<?php if(!empty($detail)) { echo $detail["description"]; } ?>" name="description" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Munculkan</label>
                    <select class="form-control" name="is_show">
                        <option value="yes">Ya</option>
                        <option value="no">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div>
                    <p>Gambar</p>
                    <img id="blah" src="<?php if(!empty($detail)) { echo base_url("image/" . $detail["image"]); } else { echo "https://dummyimage.com/600x400&text=image"; } ?>" alt="your image" style="max-width: 100%; width: 300px;" />
                    <input accept="image/*" name="image" type='file' id="imgInp" class="mt-3" />
                </div>
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

            $(document).ready(function() {
                $('#summernote').summernote({
                    placeholder: 'Masukkan Deskripsi',
                    tabsize: 2,
                    height: 100
                });
            });
        </script>
        <button type="submit" class="btn btn-primary" style="background: #6482AD; border: #6482AD">Submit</button>
    </form>
</div>

<?= view('partials/end-sidebar-admin'); ?>
<?= view('partials/footer'); ?>