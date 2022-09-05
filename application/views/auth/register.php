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
            <small>Sudah punya akun Estimator.id?<a href="<?= base_url('/login') ?>" class="text-decoration-none fw-semibold" style="font-size: 14px; color: #66AA23;"> Masuk</a></small>
            <form action="" class="mt-4">
                <div class="mb-3">
                    <input type="text" class="form-control formAuth" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control formAuth" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control formAuth" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control formAuth" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
                </div>
                <div class="mb-5">
                    <input type="password" class="form-control formAuth" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ulangi Password">
                </div>
                <div class="mb-3 d-grid gap-2">
                    <button type="submit" class="btn btn-sm btn-primary-eid btn-login fw-semibold">DAFTAR</button>
                </div>
            </form>
            <p class="text-center"><small>atau daftar dengan</small></p>
            <div class="mb-3 d-grid gap-2">
                <button type="submit" class="btn btn-sm border btn-google fw-semibold"> <img src="<?= base_url('') ?>/assets/icon/Google.svg" alt="" width="20" class="m-1"> Google</button>
            </div>
            <p class="text-center mt-4"><small>Dengan mendaftar, saya menyetujui <br>
                    <a href="" class="text-decoration-none" style="color: #66AA23;">Syarat dan Ketentuan</a> serta <a href="" class="text-decoration-none" style="color: #66AA23;">Kebijakan Privasi</a></small></p>
        </div>
    </div>
</div>