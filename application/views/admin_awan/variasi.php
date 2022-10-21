<div class="table-responsive">
    <table class="table table-striped table-hover table-sm table-bordered" id="tabel-produk">
        <thead class="bg-primary text-white text-center">
            <tr>
                <th>No</th>
                <th>ID Produk</th>
                <th>Model</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($variasi as $data) : ?>
                <tr>
                    <td class="text-center">
                        <?php echo $no++; ?>
                    </td>
                    <td>
                        <?php echo $data['id_produk'] ?>
                    </td>
                    <td>
                        <?php echo $data['model_variasi'] ?>
                    </td>
                    <td>
                        <?php echo $data['harga'] ?>
                    </td>
                    <td class="text-center">
                        <a onclick="return confirm('Are you want to delete ')" href="<?php echo base_url('API/Admin/D_produk/delete_variasi/' . $data['id_variasi']) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>