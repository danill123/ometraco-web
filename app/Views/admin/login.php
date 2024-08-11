<?= view('partials/header', ['title' => 'Product List']); ?>

    <div class="container d-flex" style="flex-direction: column;justify-content: center;">
        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger mt-3">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <p><?= esc($error); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form action="/admin/post_login" enctype="multipart/form-data" method="post" class="my-4">
            <?= csrf_field() ?>

            <div class="row mb-3 justify-content-center" style="margin-top: 100px;">
                <div class="col-4 card py-3" style="border-radius: 13px;">
                    
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('success') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('failed')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('failed') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>

                    <h5>Login</h5>
                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" value="" name="username" class="form-control">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" value="" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" style="background: #6482AD; border: #6482AD">Submit</button>
                </div>
            </div>

        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>