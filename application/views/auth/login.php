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
</style>
<div class="col-4 mx-auto">
    <div class="card shadow p-3">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h4 class="fw-bold">Sign In</h4>
                </div>
                <div class="col-6 text-end mt-1">
                    <a href="" class="text-decoration-none" style="font-size: 14px;">Daftar</a>
                </div>
            </div>
            <form action="" class="mt-4">
                <div class="mb-3">
                    <input type="email" class="form-control formAuth" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="mb-5">
                    <input type="email" class="form-control formAuth" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
                </div>
                <div class="mb-3 d-grid gap-2">
                    <button type="submit" class="btn btn-sm btn-primary-eid btn-login fw-semibold">LOG IN</button>
                    <a href="" class="text-decoration-none"><small>Lupa password</small></a>
                </div>
            </form>
            <p class="text-center"><small>atau masuk dengan</small></p>
            <div class="mb-3 d-grid gap-2">
                <button type="submit" class="btn btn-sm border btn-login fw-semibold"> <img src="<?= base_url('') ?>/assets/icon/Google.svg" alt="" width="20" class="m-1"> Google</button>
            </div>


        </div>
    </div>
</div>