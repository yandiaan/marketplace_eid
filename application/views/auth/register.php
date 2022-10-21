<style>
.card {
    border: none;
}

.formAuth {
    font-size: 13px;
    border-radius: 2px;
}

.formAuth:focus {
    border-radius: 2px;
}

.btn-login {
    border-radius: 2px;
}

.btn-google:hover {
    background-color: #e3dfde;
}
</style>
<div class="col-4 mx-auto">
    <div class="card shadow p-3">
        <div class="card-body">
            <h4 class="fw-bold">Daftar</h4>
            <small>Sudah punya akun Estimator.id?<a href="<?= base_url('/login') ?>"
                    class="text-decoration-none fw-semibold" style="font-size: 14px; color: #66AA23;"> Masuk</a></small>

            <form action="" method="POST" class="mt-4" id="registerForm">
                <div class="mb-3">
                    <input type="text" class="form-control formAuth" id="fullNameInput" name="nama_lengkap"
                        placeholder="Nama Lengkap">
                    <div id="error_nama_lengkap"></div>
                    <?php echo form_error('nama_lengkap', '<small class="text-danger" style="font-size:12px;">', '</small>'); ?>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control formAuth" id="usernameInput" name="username"
                        placeholder="Username">
                    <div id="error_username"></div>
                    <?php echo form_error('username', '<small class="text-danger" style="font-size:12px;">', '</small>'); ?>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control formAuth" id="emailInput" name="email" placeholder="Email">
                    <div id="error_email"></div>
                    <?php echo form_error('email', '<small class="text-danger" style="font-size:12px;">', '</small>'); ?>
                </div>
                <div class="mb-3">
                    <input type="password" autocomplete="off" class="form-control formAuth" id="passwordInput"
                        name="password1" placeholder="Password">
                    <div id="error_password1"></div>
                    <?php echo form_error('password1', '<small class="text-danger" style="font-size:12px;">', '</small>'); ?>
                </div>
                <div class="mb-5">
                    <input type="password" autocomplete="off" class="form-control formAuth" id="confirmPasswordInput"
                        name="password2" placeholder="Ulangi Password">
                    <div id="error_password2"></div>
                    <?php echo form_error('password2', '<small class="text-danger" style="font-size:12px;">', '</small>'); ?>
                </div>
                <div class="mb-3 d-grid gap-2">
                    <button type="submit" class="btn btn-sm btn-primary-eid btn-login fw-semibold">DAFTAR</button>
                </div>
            </form>
            <p class="text-center"><small>atau daftar dengan</small></p>
            <div class="mb-3 d-grid gap-2">
                <button type="submit" class="btn btn-sm border btn-google fw-semibold"> <img
                        src="<?= base_url('') ?>/assets/icon/Google.svg" alt="" width="20" class="m-1"> Google</button>
            </div>
            <p class="text-center mt-4"><small>Dengan mendaftar, saya menyetujui <br>
                    <a href="" class="text-decoration-none" style="color: #66AA23;">Syarat dan Ketentuan</a> serta <a
                        href="" class="text-decoration-none" style="color: #66AA23;">Kebijakan Privasi</a></small></p>
        </div>
    </div>
</div>

<script src="<?= base_url("assets/src/js/auth/register.js"); ?>"></script>