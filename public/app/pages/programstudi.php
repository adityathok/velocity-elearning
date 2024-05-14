<?php
if ( isset( $_POST['vdel_prodi_field'] ) && wp_verify_nonce( $_POST['vdel_prodi_field'], 'vdel_prodi_action' ) ) {
    update_option( 'vdel_prodi', $_POST['prodi'] );
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Berhasil!</strong> Data disimpan. <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
}
$vdel_prodi = get_option( 'vdel_prodi' );
$vdel_prodi = $vdel_prodi?$vdel_prodi:['prodi 1','prodi 2','prodi 3'];
?>

<form action="" method="POST" class="table-responsive">
    <table class="table table-hover table_vdel">
        <thead class="table-light">
            <tr>
                <th>Nama Prodi</th><th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach( $vdel_prodi as $i => $vl): ?>
                <tr> 
                    <td>
                        <input type="text" value="<?php echo $vl ; ?>" name="prodi[]" class="form-control form-control-sm border-0 bg-transparent">
                    </td>
                    <td class="text-end">
                        <span class="btn btn-sm btn-link link-danger btn-hapus" title="Hapus">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"> <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/> <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/> </svg>
                        </span>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php wp_nonce_field( 'vdel_prodi_action', 'vdel_prodi_field' ); ?>
    <div class="text-end mt-2">
        <span class="btn btn-outline-secondary btn-sm btn-addrow">
            Tambah
        </span>
        <button type="submit" class="btn btn-primary btn-sm">
            Simpan
        </button>
    </div>
</form>

<script>
    jQuery(function($){
        $( ".table_vdel tbody" ).sortable();
        $(document).on('click','.btn-hapus',function(){
            if($('.table_vdel tbody tr').length > 1){
                $(this).closest('tr').remove();
            }
        });
        $(document).on('click','.btn-addrow',function(){
            var row = $('.table_vdel tbody tr:first-child').clone();
            row.find('input').val('');
            $('.table_vdel tbody').append(row);
        });
    });
</script>