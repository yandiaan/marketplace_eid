<!-- Carousel -->
<!-- <div class="container"> -->
<div class="row mb-5">
    <div class="col-sm-2 mb-3">
        <div class="filter">
            <h5 class="justify-content-center">
                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.45709 15.5H6V7.93213L0.75 1.68212V0.5H15V1.67537L10 7.92537V12.9571L7.45709 15.5ZM7 14.5H7.04291L9 12.5429V7.57463L13.8597 1.5H1.90313L7 7.56787V14.5Z"
                        fill="#474747" />
                </svg> Filter
            </h5>
        </div>
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Lokasi
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                        <form class="my-2">
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2">&nbsp; Semua Lokasi</label><br>
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2">&nbsp; DKI Jakarta</label><br>
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2">&nbsp; Jawa Timur</label><br>
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2">&nbsp; Jawa tengah</label><br>
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2">&nbsp; Jawa Barat</label><br>
                        </form>
                        <a href="#" id="detail">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        Kategori Material
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <form class="my-2">
                            <label for="vehicle2">Semua Kategori</label><br>
                            <label for="vehicle2">Dinding</label><br>
                            <label for="vehicle2">Elektrikal</label><br>
                            <label for="vehicle2">Lantai</label><br>
                            <label for="vehicle2">Mekanikal</label><br>
                        </form>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseTwo">
                        Merk Material
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <form class="my-2">
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2">&nbsp; Semua Merk</label><br>
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2" style="font-size: 14px;">&nbsp; American Standard</label><br>
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2">&nbsp; Duma</label><br>
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2">&nbsp; Ethylum</label><br>
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2">&nbsp; Formax Roof</label><br>
                        </form>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTree" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        Harga
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTree" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text">RP</span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                                <label for="floatingInputGroup1">Harga Minimum</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">RP</span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                                <label for="floatingInputGroup1">Harga Maksimum</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-relative mt-4">
                <button type="button"
                    class="btn btn-primary-eid position-absolute top-0 start-50 translate-middle">Terapkan</button>
            </div>
        </div>
    </div>

    <div class="col-sm-10">
        <div class="row">
            <div class="col-sm-9">
                <form class="d-flex" role="search">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <a href="#" class="btn btn-outline-primary-eid" style="color:black;"><svg width="21" height="21"
                                viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="21" height="21" fill="url(#pattern0)" fill-opacity="0.5" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_2_7260" transform="scale(0.00195312)" />
                                    </pattern>
                                    <image id="image0_2_7260" width="512" height="512"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAGDf+RsAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAF+mlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUgNzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOSAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDIyLTA0LTIxVDEwOjMyOjEyKzA3OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMi0wNC0yMVQxNTowMToyMiswNzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMi0wNC0yMVQxNTowMToyMiswNzowMCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDplYzg2MTkyMC02NDM4LWIxNGItOWEwZi01ZGEzOWFiNDVhNjgiIHhtcE1NOkRvY3VtZW50SUQ9ImFkb2JlOmRvY2lkOnBob3Rvc2hvcDo5YzZlMmQzNy0yYTcwLWJjNGQtYWFlYy00NDllNGUzNzc4MmIiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpiY2ViYzcyYy1jZTlmLWFmNGYtOThiYS0yYjM3YTZjODc4Y2UiPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjcmVhdGVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOmJjZWJjNzJjLWNlOWYtYWY0Zi05OGJhLTJiMzdhNmM4NzhjZSIgc3RFdnQ6d2hlbj0iMjAyMi0wNC0yMVQxMDozMjoxMiswNzowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTkgKFdpbmRvd3MpIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDplYzg2MTkyMC02NDM4LWIxNGItOWEwZi01ZGEzOWFiNDVhNjgiIHN0RXZ0OndoZW49IjIwMjItMDQtMjFUMTU6MDE6MjIrMDc6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7ZkeKxAACNB0lEQVR4nO2defwcRZnwv5MDcnAkEAjhDPcR5JYzHGoQhAQBDe6+LmF31UTUJay7K0R3JeyuLrjuCt5EfF3A3dclCkKCqERF7vsSwqEkASQQCBCOHJBj3j+eKbunf90zXT1Vfc3z/Xzmk19mprpququeeqrqORqzZs3CI68CW/isoFeGeL7+aKAZ837Dc72pGeT5+kMT3m/GvArB9w1YR/zT/nrMe4XcFN83wNCg/UacE3rPvC6PKef9puR1AwwN4J3W39Ef9AkG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" />
                                </defs>
                            </svg> Produk</a>
                        <a href="#" class="btn btn-primary-eid">Suplier</a>
                    </div>
                </form>
            </div>
            <div class="col-sm-3">
                <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.3213 29C11.8951 29 11.4863 28.8303 11.1849 28.5281C10.8835 28.226 10.7142 27.8162 10.7142 27.3889C10.7142 26.9616 10.8835 26.5518 11.1849 26.2497C11.4863 25.9475 11.8951 25.7778 12.3213 25.7778C12.7475 25.7778 13.1563 25.9475 13.4577 26.2497C13.7591 26.5518 13.9284 26.9616 13.9284 27.3889C13.9284 27.8162 13.7591 28.226 13.4577 28.5281C13.1563 28.8303 12.7475 29 12.3213 29ZM23.0355 29C22.6092 29 22.2005 28.8303 21.8991 28.5281C21.5977 28.226 21.4283 27.8162 21.4283 27.3889C21.4283 26.9616 21.5977 26.5518 21.8991 26.2497C22.2005 25.9475 22.6092 25.7778 23.0355 25.7778C23.4617 25.7778 23.8705 25.9475 24.1719 26.2497C24.4733 26.5518 24.6426 26.9616 24.6426 27.3889C24.6426 27.8162 24.4733 28.226 24.1719 28.5281C23.8705 28.8303 23.4617 29 23.0355 29ZM1.07142 2.14815C0.78726 2.14815 0.51474 2.03499 0.313811 1.83356C0.112881 1.63213 0 1.35894 0 1.07407C0 0.789212 0.112881 0.516017 0.313811 0.314589C0.51474 0.113161 0.78726 0 1.07142 0H6.4285C6.6761 0.000149902 6.916 0.0862612 7.10742 0.243693C7.29884 0.401125 7.42996 0.620159 7.47849 0.863555L8.59277 6.44444H28.9283C29.0881 6.4444 29.2459 6.4802 29.3901 6.54922C29.5344 6.61824 29.6614 6.71874 29.7619 6.84335C29.8623 6.96796 29.9337 7.11352 29.9708 7.26938C30.0079 7.42523 30.0097 7.58742 29.9761 7.74407L26.7619 22.7811C26.7104 23.0214 26.5783 23.2367 26.3876 23.3911C26.1969 23.5455 25.9591 23.6297 25.714 23.6296H10.7142C10.4666 23.6295 10.2267 23.5434 10.0353 23.3859C9.84383 23.2285 9.71271 23.0095 9.66418 22.7661L5.54994 2.14815H1.07142ZM11.5927 21.4815H24.8483L27.604 8.59259H9.02133L11.5927 21.4815Z"
                        fill="#797979" />
                </svg>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-6">
                <p class="d-flex flex-row">Menampilkan 549 produk untuk "E Shower Toilet Manual American Standard"</p>
            </div>
            <div class="col-sm-6">
                <div class="dropdown d-flex flex-row-reverse">
                    <button class="btn btn-outline-primary-eid dropdown-toggle text-start" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Sort <br>
                        terbaru
                    </button>
                    <ul class="dropdown-menu">
                        <li><button class="dropdown-item" type="button">Action</button></li>
                        <li><button class="dropdown-item" type="button">Another action</button></li>
                        <li><button class="dropdown-item" type="button">Something else here</button></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-3 mr-2">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="120"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">Image cap</text>
                    </svg>
                    <div class="card-body">
                        <small class="card-text">Acasia E Shower Toilet Manual CEAS5006-0000422CO</small>
                        <small>L535 x W173mm</small><br>
                        <small><b>Rp 55.120.000</b> / unit</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mr-2">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="120"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">Image cap</text>
                    </svg>
                    <div class="card-body">
                        <small class="card-text">Acasia E Shower Toilet Manual CEAS5006-0000422CO</small>
                        <small>L535 x W173mm</small><br>
                        <small><b>Rp 55.120.000</b> / unit</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mr-2">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="120"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">Image cap</text>
                    </svg>
                    <div class="card-body">
                        <small class="card-text">Acasia E Shower Toilet Manual CEAS5006-0000422CO</small>
                        <small>L535 x W173mm</small><br>
                        <small><b>Rp 55.120.000</b> / unit</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mr-2">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="120"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">Image cap</text>
                    </svg>
                    <div class="card-body">
                        <small class="card-text">Acasia E Shower Toilet Manual CEAS5006-0000422CO</small>
                        <small>L535 x W173mm</small><br>
                        <small><b>Rp 55.120.000</b> / unit</small>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-4">
            <div class="col-md-3 mr-2">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="120"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">Image cap</text>
                    </svg>
                    <div class="card-body">
                        <small class="card-text">Acasia E Shower Toilet Manual CEAS5006-0000422CO</small>
                        <small>L535 x W173mm</small><br>
                        <small><b>Rp 55.120.000</b> / unit</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mr-2">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="120"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">Image cap</text>
                    </svg>
                    <div class="card-body">
                        <small class="card-text">Acasia E Shower Toilet Manual CEAS5006-0000422CO</small>
                        <small>L535 x W173mm</small><br>
                        <small><b>Rp 55.120.000</b> / unit</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mr-2">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="120"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">Image cap</text>
                    </svg>
                    <div class="card-body">
                        <small class="card-text">Acasia E Shower Toilet Manual CEAS5006-0000422CO</small>
                        <small>L535 x W173mm</small><br>
                        <small><b>Rp 55.120.000</b> / unit</small>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mr-2">
                <div class="card">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="120"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                            dy=".3em">Image cap</text>
                    </svg>
                    <div class="card-body">
                        <small class="card-text">Acasia E Shower Toilet Manual CEAS5006-0000422CO</small>
                        <small>L535 x W173mm</small><br>
                        <small><b>Rp 55.120.000</b> / unit</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </ul>
</nav>
<!-- </div> -->
<!-- /Carousel -->

<!-- List of kategori -->
<section></section>
<!-- /List of kategori -->

<!-- Special Discount -->
<section></section>
<!-- /Special Discount -->

<!-- New arrivals -->
<section></section>
<!-- /New arrivals -->

<!-- Most Popular -->
<section></section>
<!-- /Most Popular -->

<!-- Just for you -->
<section></section>
<!-- /Just for you -->

<!-- Join now -->
<section></section>
<!-- /Join now -->