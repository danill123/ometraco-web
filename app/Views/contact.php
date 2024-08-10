<?php echo view('partials/header', ['title' => 'Kontak']); ?>

<?php echo view('partials/navbar-search'); ?>

<div style="position: relative;">
    <img src="<?= base_url("image-static/banner-contact.png") ?>" style="width: 100%; max-width: 100%;">
    <div style="position: absolute; width: 100%; height: 100%; top: 0; flex-direction: column;" class="d-flex justify-content-center">
        <div class="text-center" style="color: white; font-size: 40px; font-weight: 400; word-wrap: break-word;">KONTAK KAMI</div>
    </div>
</div>

<div class="container">
    <div class="row" style="margin-top: -150px;">

        <div class="col-12 mt-4 col-md-6 " style="border-radius: 18px;">
            <?php if (session()->getFlashdata('errors')): ?>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= esc($error); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <form method="post" action="/post_contact" class="card p-4" style="border-radius: 18px">
                <?= csrf_field() ?>

                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('success') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                
                <div class="form-group">
                    <label for="exampleFormControlInput1" style="font-weight: 600;">Nama</label>
                    <input style="box-shadow: 0px 1px 3px 1px rgba(0, 0, 0, 0.15); " placeholder="Masukkan Nama" type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1" style="font-weight: 600;">Email</label>
                    <input style="box-shadow: 0px 1px 3px 1px rgba(0, 0, 0, 0.15); " placeholder="Masukkan Email" type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1" style="font-weight: 600;">Pesan</label>
                    <textarea style="box-shadow: 0px 1px 3px 1px rgba(0, 0, 0, 0.15); " placeholder="Masukkan Pesan" class="form-control" name="message" rows="3"><?= $message ?></textarea>
                </div>
                <button class="py-3" style="background: linear-gradient(162deg, rgba(0, 0, 0, 0.50) 0%, rgba(134, 134, 134, 0.50) 100%); box-shadow: 0px 1px 3px 1px rgba(0, 0, 0, 0.15); border-radius: 6px; border: unset; color: white; font-weight: 400;">Kirim Pesan</button>
                <!-- <div style="width: 439px; height: 53px; background: linear-gradient(162deg, rgba(0, 0, 0, 0.50) 0%, rgba(134, 134, 134, 0.50) 100%); box-shadow: 0px 1px 3px 1px rgba(0, 0, 0, 0.15); border-radius: 6px"></div> -->

            </form>
        </div>
        <div class="col-12 mt-4 col-md-6">
            <div class="card px-4 py-3" style="border-radius: 18px">
                <h4 class="mb-3">Lokasi</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15867.305330875935!2d106.72785483234956!3d-6.154008718205666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7ea41b06cdd%3A0xdfb262180bec6ab0!2sPT.%20Ometraco%20Arya%20Samanta!5e0!3m2!1sen!2sus!4v1723261493783!5m2!1sen!2sus" style="max-width: 100%; border: unset;" width="600" height="332" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-12 mt-4 col-md-4">
            <div class="card px-4 py-3" style="background: linear-gradient(296deg, rgba(0, 0, 0, 0.50) 0%, rgba(134, 134, 134, 0.50) 100%); border-radius: 14px; border: unset;">
                <h6 class="text-white">Telepon</h6>
                <h6 class="mt-4 text-white">+6278463726123</h6>
            </div>
        </div>
        <div class="col-12 mt-4 col-md-4">
            <div class="card px-4 py-3" style="background: linear-gradient(296deg, rgba(0, 0, 0, 0.50) 0%, rgba(134, 134, 134, 0.50) 100%); border-radius: 14px; border: unset;">
                <h6 class="text-white">Bidang Perusahaan</h6>
                <h6 class="mt-4 text-white">Export-Import</h6>
            </div>
        </div>
        <div class="col-12 mt-4 col-md-4">
            <div class="card px-4 py-3" style="background: linear-gradient(296deg, rgba(0, 0, 0, 0.50) 0%, rgba(134, 134, 134, 0.50) 100%); border-radius: 14px; border: unset;">
                <h6 class="text-white">Email</h6>
                <h6 class="mt-4 text-white">ometraco@mail.com</h6>
            </div>
        </div>
    </div>
</div>
<!-- public\image-static\banner-contact.png -->
<div class="container mb-5">

</div>

<?php echo view('partials/footer'); ?>