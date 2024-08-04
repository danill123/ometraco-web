<?= view('partials/header', ['title' => 'Product List']); ?>

<?= view('partials/navbar-admin'); ?>

<div class="container">
    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger mb-1">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <p><?= esc($error); ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="/admin/insert_update_product" method="post">
        <?= csrf_field() ?>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= view('partials/footer'); ?>