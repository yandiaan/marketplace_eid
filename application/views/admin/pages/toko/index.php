<div class="section">


    <div class="section-header">
        <h1>Profil Toko</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Profil Toko</a></div>
        </div>
    </div>

    <h2 class="section-title">Hi, <?= $data['nama_toko']; ?></h2>



    <?php if ($this->session->flashdata('msg')) : ?>
        <?php echo '<div class="alert alert-success alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>' .  $this->session->flashdata('msg') . '
    </div>
</div>' ?>
        <!-- <?php echo '<p class="alert alert-success"> ' . $this->session->flashdata('msg') . '</p>'; ?> -->
    <?php endif; ?>

    <div class="row mt-sm-4">
        <div class="chocolat-parent mb-2">
            <div data-crop-image="200">
                <img alt="image" src="<?= base_url($data['banner']); ?>" class="img-fluid" onclick="ubahBanner()">
            </div>
            </a>
        </div>
        <div class="col-12 col-md-12 col-lg-5">
            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <img alt="image" src="<?= base_url($data['logo']); ?>" class="rounded-circle profile-widget-picture" onclick="ubahLogo()">
                </div>
                <div class="profile-widget-description">
                    <div class="profile-widget-name"><?= $data['username']; ?> <div class="text-muted d-inline font-weight-normal">
                            <div class="slash"></div> <?= $data['email'] ?>
                        </div>
                    </div>
                    <?= $data['deskripsi']; ?>
                </div>
                <div class="card-footer text-center">
                    <div class="font-weight-bold mb-2"><?= $data['lokasi']; ?></div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-12 col-lg-7">
            <div class="card">
                <form method="POST" class="needs-validation" action="<?= base_url('Suplier/Profil/update') ?>">
                    <div class="card-header">
                        <h4>Edit Profil Toko</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6 col-12">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="<?= $data['username']; ?>" required>
                                <div class="invalid-feedback">
                                    Mohon isi kolom ini
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Nama Toko</label>
                                <input type="text" class="form-control" name="nama_toko" value="<?= $data['nama_toko']; ?>" required>
                                <div class="invalid-feedback">
                                    Mohon isi kolom ini
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-7 col-12">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="<?= $data['email']; ?>" required>
                                <div class="invalid-feedback">
                                    Mohon isi kolom ini
                                </div>
                            </div>
                            <!-- <div class="form-group col-md-5 col-12">
                            <label>Password</label>
                            <input type="text" class="form-control" name="password" value="" required>
                            <div class="invalid-feedback">
                                Mohon isi kolom ini
                            </div>
                        </div> -->
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label>Lokasi</label>
                                <input type="text" class="form-control" name="lokasi" value="<?= $data['lokasi']; ?>" required>
                                <div class="invalid-feedback">
                                    Mohon isi kolom ini
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="3" name="deskripsi"><?= $data['deskripsi']; ?></textarea>
                                <div class="invalid-feedback">
                                    Mohon isi kolom ini
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-success" type="submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-sm-2">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <form method="POST" class="needs-validation" action="#">
                    <div class="card-header">
                        <h4>Edit Akun Toko</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6 col-12">
                                <label>Password Lama</label>
                                <input type="text" class="form-control" name="username" value="" required>
                                <div class="invalid-feedback">
                                    Mohon isi kolom ini
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Password Baru</label>
                                <input type="text" class="form-control" name="nama_toko" value="" required>
                                <div class="invalid-feedback">
                                    Mohon isi kolom ini
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label>Konfirmasi Password Baru</label>
                                <input type="text" class="form-control" name="nama_toko" value="" required>
                                <div class="invalid-feedback">
                                    Mohon isi kolom ini
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-success" type="submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Logo -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal-logo">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="<?= base_url('Suplier/Profil/upload_logo') ?>" enctype="multipart/form-data" method="POST">
                <div class="modal-header">
                    <b class="modal-title">Ubah Logo Profil</b>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Pilih Logo profil</label>
                        <div>
                            <input type="file" name="logo" required class="form-control">
                            <div class="hint-block mt-3">
                                Jenis file yang diijinkan: <strong>JPEG, JPG, PNG</strong> dengan ukuran file maksimal: <strong>2 MB</strong><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_berkas">
                    <button class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                    <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Banner  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal-banner">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="<?= base_url('Suplier/Profil/upload_banner') ?>" enctype="multipart/form-data" method="POST">
                <div class="modal-header">
                    <b class="modal-title">Ubah Banner Profil</b>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Pilih Banner profil</label>
                        <div>
                            <input type="file" name="banner" required class="form-control">
                            <div class="hint-block mt-3">
                                Jenis file yang diijinkan: <strong>JPEG, JPG, PNG, BMP</strong> dengan ukuran file maksimal: <strong>2 MB</strong><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_berkas">
                    <button class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                    <button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // assumes you're using jQuery
    // $(document).ready(function() {
    //     $('.confirm-div').hide();
    //     <?php if ($this->session->flashdata('msg')) { ?>
    //         $('.confirm-div').html('<?php echo $this->session->flashdata('msg'); ?>').show();
    //     <?php } ?>
    // });

    function ubahLogo() {
        $('#modal-logo').modal('show');
    }

    function ubahBanner() {
        $('#modal-banner').modal('show');
    }
</script>