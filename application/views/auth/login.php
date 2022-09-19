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
            <div class="row">
                <div class="col-6">
                    <h4 class="fw-bold">Sign In</h4>
                </div>
                <div class="col-6 text-end mt-1">
                    <a href="<?= base_url('/register') ?>" class="text-decoration-none fw-semibold"
                        style="font-size: 14px;  color: #66AA23;">Daftar</a>
                </div>
            </div>
            <form action="" class="mt-4">
                <div class="mb-3">
                    <input type="email" class="form-control formAuth" name="email" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="mb-5">
                    <input type="password" class="form-control formAuth" placeholder="Password">
                </div>
                <div class="mb-3 d-grid gap-2">
                    <button type="submit" class="btn btn-sm btn-primary-eid btn-login fw-semibold">LOG IN</button>
                    <a href="" class="text-decoration-none" style="color: #66AA23;"><small>Lupa password</small></a>
                </div>
            </form>
            <p class="text-center"><small>atau masuk dengan</small></p>
            <div class="mb-3 d-grid gap-2">
                <button type="submit" class="btn btn-sm border btn-google fw-semibold"> <img
                        src="<?= base_url('') ?>/assets/icon/Google.svg" alt="" width="20" class="m-1"> Google</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= base_url('assets/src/js/jquery.min.js');?>"></script>
<script>
$("form").on("submit", function(e) {

    e.preventDefault();
    alert(<?= $this->input->post("email"); ?>)
    // var dataString = $(this).serialize();


    // $.ajax({
    //     type: "POST",
    //     url: "http://localhost/marketplace_eid/api/login",
    //     data: dataString,
    //     success: function() {
    //         $("#contact_form").html("<div id='message'></div>");
    //         $("#message")
    //             .html("<h2>Contact Form Submitted!</h2>")
    //             .append("<p>We will be in touch soon.</p>")
    //             .hide()
    //             .fadeIn(1500, function() {
    //                 $("#message").append(
    //                     "<img id='checkmark' src='images/check.png' />"
    //                 );
    //             });
    //     }
    // });

});
</script>