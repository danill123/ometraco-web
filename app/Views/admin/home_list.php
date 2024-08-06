<?= view('partials/header', ['title' => 'Home List']); ?>
<!-- app\Views\partials\navbar-admin.php -->
<?= view('partials/navbar-admin'); ?>
<?= view('partials/sidebar-admin'); ?>
<style>
#dataTable_wrapper .dt-buttons {
    margin-top: 20px;
}
</style>
<div class="container">

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success my-3" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('failed')): ?>
        <div class="alert alert-danger my-3" role="alert">
            <?= session()->getFlashdata('failed') ?>
        </div>
    <?php endif; ?>

    <div class="card my-5 shadow-sm">
        <div class="table-responsive">
                <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Munculkan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($datum as $key => $item) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= esc($item["name"]) ?></td>
                                <td>
                                    <?= $item["show_front"] == "yes" ? "Ya" : "Tidak" ?>
                                </td>
                                <td>
                                    <a style="cursor: pointer;" href="<?= base_url("admin/home/view_add_edit_home_content?id=" . $item["id"]) ?>"><i class="fa fa-pencil-alt"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
    jQuery(document).ready(function() {
        var table = jQuery('#dataTable').DataTable({
            buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
            dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'B><'col-md-4'f>>" +
                "<'row'<'col-md-12'tr>>" +
                "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
            lengthMenu: [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, "All"]
            ],
            columnDefs: [{
                targets: -1,
                orderable: false,
                searchable: false
            }],
            exportOptions: {
                columns: 'th:not(:last-child)'
            }
        });

        table.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');
    });
    </script>
</div>
<?= view('partials/end-sidebar-admin'); ?>
<?= view('partials/footer'); ?>