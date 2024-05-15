<?php if($action=='add' || $action=='edit'): ?>
    <div class="text-end mb-2">
        <a href="<?php echo $permalink.'?pg=guru' ; ?>" class="btn btn-primary btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/> </svg>
            Daftar Guru
        </a>
    </div>
    <?php
    echo $action=='edit'&&$id?do_shortcode( '[cmb-form id="userguru_meta" post_id='.$id.']' ):do_shortcode( '[cmb-form id="userguru_meta"]' );
    ?>
<?php else: ?>
    <div class="table-responsive">
        <table id="myTable" class="table table-hover table_vdel">
            <thead class="table-light">
                <tr>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <script>
        jQuery(function($){
            jQuery(document).ready(function($) {
                $('#myTable').DataTable({
                    ajax: {
                        url: vdel.ajaxUrl,
                        type: 'POST',
                        data: {
                            action: 'vdelallguru'
                        },
                        dataType: 'json',
                        dataSrc: ''
                    },
                    columns: [
                        { data: 'nidn' },
                        { data: 'nama' },
                        { data: 'prodi' },
                        { 
                            data: 'id',
                            render: function(data, type, row) {
                                return '<a href="<?php echo $permalink; ?>?pg=guru&act=edit&id=' + data + '" class="btn btn-link btn-sm" data-id="' + data + '">Edit</a><span class="btn btn-link btn-sm link-danger" data-id="' + data + '">Hapus</span>';
                            }
                        }
                    ],
                    columnDefs: [
                        { type: 'string', targets: 0 }
                    ],
                    layout: {
                        topStart: {
                            buttons: [
                                {
                                    text: '+ Tambah Guru',
                                    className: 'btn btn-sm btn-primary',
                                    action: function (e, dt, node, config) {
                                        window.open("<?php echo $permalink.'?pg=guru&act=add' ; ?>","_self")
                                    }
                                }
                            ]
                        }
                    }
                });
            });
        });
    </script>

<?php endif; ?>