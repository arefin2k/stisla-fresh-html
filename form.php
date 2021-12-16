<?php require_once('header-top.php'); ?>
    <div class="main-wrapper container">
        <?php require_once('nav-top.php'); ?>
        <?php require_once('sidebar-top.php'); ?>

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1><i class="far fa-arrow-alt-circle-right"></i> Form</h1>
                    <div class="ml-auto">
                        <a href="table.php" class="btn btn-primary"><i class="fas fa-eye"></i> View All</a>
                    </div>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3">
                                            Default Input Text
                                        </label>
                                        <div class="col-sm-12 col-md-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3">
                                            Upload Image
                                        </label>
                                        <div class="col-sm-12 col-md-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3">
                                            Date Picker
                                        </label>
                                        <div class="col-sm-12 col-md-9">
                                            <input type="text" class="form-control datepicker">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3">
                                            Date Time Picker
                                        </label>
                                        <div class="col-sm-12 col-md-9">
                                            <input type="text" class="form-control datetimepicker">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3">
                                            Time Picker
                                        </label>
                                        <div class="col-sm-12 col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-clock"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control timepicker">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3">
                                            Toggle Switch
                                        </label>
                                        <div class="col-sm-12 col-md-9">
                                            <label class="custom-switch">
                                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description">I agree with terms and conditions</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3">
                                            Color Picker
                                        </label>
                                        <div class="col-sm-12 col-md-9">
                                            <input type="text" class="form-control colorpickerinput">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3">
                                            Currency
                                        </label>
                                        <div class="col-sm-12 col-md-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        $
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control currency">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3">
                                            Select2
                                        </label>
                                        <div class="col-sm-12 col-md-9">
                                            <select class="form-control select2">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3">
                                            Select2 Multiple
                                        </label>
                                        <div class="col-sm-12 col-md-9">
                                            <select class="form-control select2" multiple="">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                                <option>Option 6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3">
                                            jQuery Selectric
                                        </label>
                                        <div class="col-sm-12 col-md-9">
                                            <select class="form-control selectric">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                                <option>Option 6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3">
                                            jQuery Selectric Multiple
                                        </label>
                                        <div class="col-sm-12 col-md-9">
                                            <select class="form-control selectric" multiple="">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                                <option>Option 5</option>
                                                <option>Option 6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3">
                                            Size
                                        </label>
                                        <div class="col-sm-12 col-md-9">
                                            <div class="selectgroup w-100">
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                                                    <span class="selectgroup-button">S</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="value" value="100" class="selectgroup-input">
                                                    <span class="selectgroup-button">M</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="value" value="150" class="selectgroup-input">
                                                    <span class="selectgroup-button">L</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="value" value="200" class="selectgroup-input">
                                                    <span class="selectgroup-button">XL</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3">
                                            Icons input
                                        </label>
                                        <div class="col-sm-12 col-md-9">
                                            <div class="selectgroup w-100">
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="transportation" value="2" class="selectgroup-input">
                                                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-mobile"></i></span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="transportation" value="1" class="selectgroup-input" checked="">
                                                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-tablet"></i></span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="transportation" value="6" class="selectgroup-input">
                                                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-laptop"></i></span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="transportation" value="6" class="selectgroup-input">
                                                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-times"></i></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Simple Summernote</label>
                                        <div class="col-sm-12 col-md-9">
                                            <textarea class="summernote-simple"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Full Summernote</label>
                                        <div class="col-sm-12 col-md-9">
                                            <textarea class="summernote"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Code Editor</label>
                                        <div class="col-sm-12 col-md-9">
<textarea class="codeeditor">var yourTimeout = undefined;

setTimeout(function() {
  Person.die(you);
}, yourTimeout);</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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