<?php require_once('header.php'); ?>
    <div class="main-wrapper">
        <?php require_once('nav.php'); ?>
        <?php require_once('sidebar.php'); ?>

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Table</h1>
                    <div class="ml-auto">
                        <a href="form.php" class="btn btn-primary">Add New</a>
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