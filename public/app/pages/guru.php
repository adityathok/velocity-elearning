<?php if($action=='add' || $action=='edit'): ?>
    <div class="text-end mb-2">
        <a href="<?php echo $permalink.'?pg=guru' ; ?>" class="btn btn-primary btn-sm">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/> </svg>
            Daftar Guru
        </a>
    </div>
    <?php
    echo do_shortcode( '[cmb-form id="userguru_meta"]' );
    ?>
<?php else: ?>
    <div class="text-end mb-2">
        <a href="<?php echo $permalink.'?pg=guru&act=add' ; ?>" class="btn btn-primary btn-sm">
            + Tambah Guru
        </a>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table_vdel">
            <thead class="table-light">
                <tr>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

<?php endif; ?>