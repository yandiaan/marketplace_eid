<nav class="navbar navbar-expand-lg sticky-top bg-white px-5 py-3 shadow-sm">
    <div class="container">
        <img src="https://estimator.id/assets/img/logo.png" alt="brand-logo">

        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button> -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form class="container-fluid mx-3 mb-2 mb-lg-0" role="search">
                <div id="dropdown-search" class="dropdown-center">
                    <div class="input-group" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <input style="font-size: 14px" class="form-control" type="search" placeholder="Cari sekarang disini" aria-label="Search">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                    <ul class="dropdown-menu w-100">
                        <li><h6 class="dropdown-header">Dropdown header</h6></li>
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Action two</a></li>
                        <li><a class="dropdown-item" href="#">Action three</a></li>

                        <li><hr class="dropdown-divider"></li>

                        <li><h6 class="dropdown-header">Dropdown header</h6></li>
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Action two</a></li>
                        <li><a class="dropdown-item" href="#">Action three</a></li>
                    </ul>
                </div>
            </form>

            <button class="btn btn-cart me-4">
                <svg width="26" height="25" viewBox="0 0 34 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.3213 28.5964C11.8951 28.5964 11.4863 28.4339 11.1849 28.1445C10.8835 27.8551 10.7142 27.4625 10.7142 27.0533C10.7142 26.644 10.8835 26.2515 11.1849 25.9621C11.4863 25.6727 11.8951 25.5101 12.3213 25.5101C12.7475 25.5101 13.1563 25.6727 13.4577 25.9621C13.7591 26.2515 13.9284 26.644 13.9284 27.0533C13.9284 27.4625 13.7591 27.8551 13.4577 28.1445C13.1563 28.4339 12.7475 28.5964 12.3213 28.5964ZM23.0355 28.5964C22.6092 28.5964 22.2005 28.4339 21.8991 28.1445C21.5977 27.8551 21.4283 27.4625 21.4283 27.0533C21.4283 26.644 21.5977 26.2515 21.8991 25.9621C22.2005 25.6727 22.6092 25.5101 23.0355 25.5101C23.4617 25.5101 23.8705 25.6727 24.1719 25.9621C24.4733 26.2515 24.6426 26.644 24.6426 27.0533C24.6426 27.4625 24.4733 27.8551 24.1719 28.1445C23.8705 28.4339 23.4617 28.5964 23.0355 28.5964ZM1.07142 2.8769C0.78726 2.8769 0.51474 2.76851 0.313811 2.57558C0.112881 2.38264 0 2.12097 0 1.84812C0 1.57527 0.112881 1.31359 0.313811 1.12066C0.51474 0.927725 0.78726 0.819336 1.07142 0.819336H6.4285C6.6761 0.81948 6.916 0.90196 7.10742 1.05275C7.29884 1.20355 7.42996 1.41334 7.47849 1.64648L8.59277 6.99203H28.9283C29.0881 6.99198 29.2459 7.02627 29.3901 7.09238C29.5344 7.1585 29.6614 7.25475 29.7619 7.37411C29.8623 7.49346 29.9337 7.63289 29.9708 7.78217C30.0079 7.93145 30.0097 8.08681 29.9761 8.23685L26.7619 22.6398C26.7104 22.8699 26.5783 23.0762 26.3876 23.2241C26.1969 23.372 25.9591 23.4526 25.714 23.4525H10.7142C10.4666 23.4524 10.2267 23.3699 10.0353 23.2191C9.84383 23.0683 9.71271 22.8585 9.66418 22.6254L5.54994 2.8769H1.07142ZM11.5927 21.395H24.8483L27.604 9.04959H9.02133L11.5927 21.395Z" fill="#797979"/>
                </svg>
            </button>

            <div class="vr me-2"></div>

            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary-eid btn-grow mx-2 px-3 py-1">Masuk</a>
            <a href="<?= base_url('register') ?>" class="btn btn-outline-primary-eid btn-grow px-3 py-1">Daftar</a>

        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function () {

    var search = document.getElementById('dropdown-search');
    var overlay = document.getElementById('overlay');

    search.addEventListener('focusin', function(e){
        overlay.style.display = "block";
    });

    search.addEventListener('focusout', function(e){
        overlay.style.display = "none";
    });

}, false);
</script>