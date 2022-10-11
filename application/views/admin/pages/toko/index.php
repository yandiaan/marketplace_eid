<div class="section-header">
    <h1>Profil Toko</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Profil Toko</a></div>
        <!-- <div class="breadcrumb-item">List Produk</div> -->
    </div>
</div>

<div class="card-body">
    <div class="mb-2 text-muted">Click the picture below to see the magic!</div>
    <div class="chocolat-parent">
        <a href="https://okamotret.com/wp-content/uploads/2020/04/Blank-YouTube-Banner-Template-PSD.jpg" class="chocolat-image" title="Just an example">
            <div data-crop-image="285">
                <img alt="image" src="https://okamotret.com/wp-content/uploads/2020/04/Blank-YouTube-Banner-Template-PSD.jpg" class="img-fluid">
            </div>
        </a>
    </div>
</div>


<h2 class="section-title">Hi, <?= $data['nama_toko']; ?></h2>
<p class="section-lead">
    Change information about yourself on this page.
</p>
<div class="row mt-sm-4">
    <div class="col-12 col-md-12 col-lg-5">
        <div class="card profile-widget">
            <div class="profile-widget-header">
                <img alt="image" src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png" class="rounded-circle profile-widget-picture">
                <div class="profile-widget-items">
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Posts</div>
                        <div class="profile-widget-item-value">187</div>
                    </div>
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Followers</div>
                        <div class="profile-widget-item-value">6,8K</div>
                    </div>
                    <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Following</div>
                        <div class="profile-widget-item-value">2,1K</div>
                    </div>
                </div>
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
            <form method="post" class="needs-validation" novalidate="">
                <div class="card-header">
                    <h4>Edit Profile</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6 col-12">
                            <label>First Name</label>
                            <input type="text" class="form-control" value="Ujang" required="">
                            <div class="invalid-feedback">
                                Please fill in the first name
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-12">
                            <label>Last Name</label>
                            <input type="text" class="form-control" value="Maman" required="">
                            <div class="invalid-feedback">
                                Please fill in the last name
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-7 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" value="ujang@maman.com" required="">
                            <div class="invalid-feedback">
                                Please fill in the email
                            </div>
                        </div>
                        <div class="form-group col-md-5 col-12">
                            <label>Phone</label>
                            <input type="tel" class="form-control" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Bio</label>
                            <textarea class="form-control summernote-simple">Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mb-0 col-12">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                                <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                                <div class="text-muted form-text">
                                    You will get new information about products, offers and promotions
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>