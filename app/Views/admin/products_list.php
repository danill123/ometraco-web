<?= view('partials/header', ['title' => 'Product List']); ?>
<!-- app\Views\partials\navbar-admin.php -->
<?= view('partials/navbar-admin'); ?>
<style>
#dataTable_wrapper .dt-buttons {
    margin-top: 20px;
}
</style>
<div class="container">
    <div class="card my-5 shadow-sm">
        <div class="table-responsive">
                <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Image</th>
                            <th>Nama</th>
                            <th>Harga Barang</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr>
                            <td>No.</td>
                            <td>Image</td>
                            <td>Nama Barang</td>
                            <td>Harga Barang Satuan</td>
                            <td>Kuantity Barang</td>
                            <td>Total Harga Barang</td>
                            <td>Link Pembelian Barang</td>
                            <td>Link Video Produk</td>
                            <td>Aksi</td>
                        </tr> -->
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
<?= view('partials/footer'); ?>