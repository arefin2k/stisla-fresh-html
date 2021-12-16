<?php require_once('header-top.php'); ?>
    <div class="main-wrapper container">
        <?php require_once('nav-top.php'); ?>
        <?php require_once('sidebar-top.php'); ?>

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1><i class="far fa-arrow-alt-circle-right"></i> Table</h1>
                    <div class="ml-auto">
                        <a href="form.php" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
                    </div>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="example1">
                                            <thead>
                                                <tr>
                                                    <th>Serial</th>
                                                    <th>Photo</th>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><img src="assets/uploads/1.jpg" alt="" class="w_200"></td>
                                                    <td>Item Name 1</td>
                                                    <td>
                                                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                                                        <a href="" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><img src="assets/uploads/1.jpg" alt="" class="w_200"></td>
                                                    <td>Item Name 2</td>
                                                    <td>
                                                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                                                        <a href="" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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