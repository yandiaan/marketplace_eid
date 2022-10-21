<section class="section">
    <div class="section-header">
        <h1>Wilayah Toko</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Wilayah Toko</a></div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-lg btn-success mb-4" data-toggle="modal" data-target="#exampleModal">Tambah Wilayah</button>
                <div class="table-responsive">
                    <table class="table table-striped dataTable" id="tabel-wilayah">
                        <thead>
                            <tr style="text-align: center;">
                                <th style="text-align: center;">No</th>
                                <th style="text-align: center;">Kota</th>
                                <th style="text-align: center;">Provinsi</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($wilayahs as $wilayah) : ?>
                                <tr>
                                    <td style="text-align:center;"><?php echo $no++ ?></td>
                                    <td style="text-align:center;"><?php echo $wilayah->provinsi ?></td>
                                    <td style="text-align:center;"><?php echo $wilayah->kota ?></td>
                                    <td style="text-align:center;">
                                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                            <button class="btn btn-warning edit_wilayah" data-kota="<?= $wilayah->kota; ?>" data-provinsi="<?= $wilayah->provinsi ?>" data-id="<?= $wilayah->id_wilayah_distribusi ?>">Edit</button>
                                            <form action="<?php echo base_url('suplier/dashboard/delete-wilayah-toko/' . $wilayah->id_wilayah_distribusi) ?>" method="post" id="delProduk-<?= $wilayah->id_wilayah_distribusi ?>">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger" data-confirm="Hapus Data?|Apakah Anda yakin ingin menghapus Wilayah Toko ini?<br>semua data yang bersangkutan dengan wilayah ini akan terhapus." data-confirm-yes="submitDel(<?= $wilayah->id_wilayah_distribusi ?>)">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Tambah  -->
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Wilayah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('Suplier/Profil/add_wilayah') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Provinsi</label>
                        <select class="form-control" id="inputProvinsi" name="provinsi">
                            <?php foreach ($provinsi->result() as $row) { ?>
                                <option value="<?= $row->prov_name; ?>"><?php echo $row->prov_name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kota</label>
                        <select class="form-control" id="inputProvinsi" name="kota">
                            <?php foreach ($kota->result() as $row) { ?>
                                <option value="<?= $row->city_name; ?>"><?php echo $row->city_name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modaledit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <<<<<<< HEAD <h5 class="modal-title">Edit Wilayah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    =======
                    <h4 class="modal-title" id="myModalLabel">Edit Wikayah</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    >>>>>>> 7186a69bdfbb3b80994c252488920af4f3156757
            </div>
            <form action="<?= base_url('Suplier/Profil/update_wilayah_toko') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Provinsi</label>
                        <input type="hidden" name="id_wilayah_toko" class="wilayah_id">
                        <<<<<<< HEAD <select class="form-control wilayah_provinsi" id="inputProvinsi" name="provinsi">
                            <?php foreach ($provinsi->result() as $row) { ?>
                                <option value="<?= $row->prov_name; ?>"><?php echo $row->prov_name; ?></option>
                            <?php } ?>
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Kota</label>
                        <select class="form-control wilayah_kota" id="inputKota" name="kota">
                            <?php foreach ($kota->result() as $row) { ?>
                                <option value="<?= $row->city_name; ?>"><?php echo $row->city_name; ?></option>
                            <?php } ?>
                        </select>
                        =======
                        <div class="form-group">
                            <label>Provinsi</label>
                            <select class="form-control" id="wilayah_provinsi" name="provinsi">
                                <?php foreach ($provinsi->result() as $row) { ?>
                                    <option value="<?= $row->prov_name ?>"> <?= $row->prov_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kota</label>
                            <select class="form-control" id="wilayah_kota" name="kota">
                                <?php foreach ($kota->result() as $row) { ?>
                                    <option value="<?= $row->city_name ?>"> <?= $row->city_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        >>>>>>> 7186a69bdfbb3b80994c252488920af4f3156757
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var table = $('#tabel-wilayah').DataTable({
            "pagging": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
            "lengthChange": true,
            "buttons": ['excel', 'pdf']
        });

        table.buttons().container().appendTo('#example_wrapper .col-md-6"eq(0)');
    })

    function submitDel(id) {
        $('#delProduk-' + id).submit()
    }

    $('.edit_wilayah').click(function(e) {
        var id = $(this).data('id');
        var kota = $(this).data('kota');
        var provinsi = $(this).data('provinsi');

        $('#modaledit').modal('show');

        $('#modaledit').modal('show');
        $(".wilayah_id").val(id);
        $(".wilayah_kota").val(kota);
        $(".wilayah_provinsi").val(provinsi);

        $("#wilayah_kota").val(kota);
        $("#wilayah_provinsi").val(provinsi);
    });
</script>