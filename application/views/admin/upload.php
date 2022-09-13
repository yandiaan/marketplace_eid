<?php if (isset($response)) echo $response; ?></b>
<form method='POST' action='<?php echo base_url('api/admin/upload_file/save'); ?>' enctype='multipart/form-data'>

    <input type='file' name='inputFile'> <br /><br />
    <button type='submit'>Simpan</button>
</form>

<div class="table-responsive mt-5">
    <table class="table table-striped table-hover table-sm table-bordered" id="tabel-produk">
        <thead class="bg-primary text-white text-center">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($fotos as $foto) : ?>
                <tr>
                    <td class="text-center">
                        <?php echo $no++; ?>
                    </td>
                    <td>
                        <a href="<?php echo 'public/upload/' . $foto['banner'] ?>" target="_blank">File</a>
                    </td>
                    </td>
                    <td class="text-center">
                        <a href="<?php echo site_url('api/admin/upload_file/edit/' . $foto['id_suplier']) ?>" class="btn btn-small text-warning"><i class="fas fa-edit"></i> Edit</a>
                        <a onclick="deleteConfirm('<?php echo site_url('api/admin/upload_file/delete/' . $foto['id_suplier']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>