<?php require_once('header-top.php'); ?>
    <div class="main-wrapper container">
        <?php require_once('nav-top.php'); ?>
        <?php require_once('sidebar-top.php'); ?>

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1><i class="far fa-arrow-alt-circle-right"></i> User Profile</h1>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active show" id="information-tab" data-toggle="tab" href="#information" role="tab" aria-controls="information" aria-selected="true">Update Information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="photo-tab" data-toggle="tab" href="#photo" role="tab" aria-controls="photo" aria-selected="false">Update Photo</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">Update Password</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="myTabContent">

                                        <div class="tab-pane fade active show" id="information" role="tabpanel" aria-labelledby="information-tab">
                                            <div class="card-body">
                                                <form action="" method="POST">
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="text" class="form-control" name="name" value="Jim Brown">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="text" class="form-control" name="email" value="admin@gmail.com">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="text" class="form-control" name="phone" value="123-345-7833">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Role</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="text" class="form-control" name="" value="Admin" disabled="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <button class="btn btn-primary">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="photo" role="tabpanel" aria-labelledby="photo-tab">
                                            <div class="card-body">
                                                <form action="" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Existing Photo</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <img src="assets/uploads/user.jpg" alt="" class="w_200">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Photo</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="file" class="form-control" name="photo">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <button class="btn btn-primary">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                                            <div class="card-body">
                                                <form action="" method="POST">
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="password" class="form-control" name="password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Retype Password</label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <input type="password" class="form-control" name="password_confirmation">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                                        <div class="col-sm-12 col-md-7">
                                                            <button class="btn btn-primary">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php require_once('footer.php'); ?>