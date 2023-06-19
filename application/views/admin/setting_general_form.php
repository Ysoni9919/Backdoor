<?php $this->load->view('layouts/session'); ?>
<?php $this->load->view('layouts/head-main'); ?>

<head>

    <title>Validation | Minia - Admin & Dashboard Template</title>
    <?php $this->load->view('layouts/head'); ?>
    <?php $this->load->view('layouts/head-style'); ?>

</head>

<?php $this->load->view('layouts/body'); ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php $this->load->view('layouts/menu'); ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                           

                          

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">




                <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Setting</h4>
                                <p class="card-title-desc">Access All type of Setting</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">General</a>
                                            <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Ads</a>
                                            <a class="nav-link mb-2" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Notification</a>
                                            <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-md-9">
                                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <form class="needs-validation" novalidate>
                                    <div class="row">
                                    <div class="col-md-12">
                                        <p>Present Logo</p>
                                        <img class="rounded me-2" alt="200x200" width="200" src="<?php echo base_url(); ?>public/assets/images/logo-sm.svg" data-holder-rendered="true">
                                    </div>
                                    <br>
                                    <br>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Change Logo</label>
                                                <input type="file" class="form-control" id="validationCustom01" placeholder="Enter Settingname" value="Abc1234" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Website Name</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Website Name"  value="bakdor" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Setting Type</label>
                                                    <select required="" class="form-control form-select" >
                                                        <option value="">Select Type</option>
                                                        <option value="wr">Banner Video</option>
                                                        <option value="ph">Video</option>

                                                    </select>
                                                </div>
                                            </div>
                                        <div class="col-xl-12 col-md-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Setting Size</label>
                                                    <select required="" class="form-control form-select" >
                                                        <option value="">Select Size</option>
                                                        <option value="wr">160*300</option>
                                                        <option value="ph">160*600</option>

                                                    </select>
                                                </div>
                                            </div>
                                       
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom001">Enter Setting Code</label>
                                                <div class="col-lg-12">
                        
                                <div id="ckeditor-classic"></div>
                           
                    </div>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-xl-12 col-md-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Status</label>
                                                    <select required="" class="form-control form-select" >
                                                        <option value="">Select Status</option>
                                                        <option value="wr">Active</option>
                                                        <option value="ph">Deactive</option>

                                                    </select>
                                                </div>
                                            </div>
                                        
                                     
                                    <button class="btn btn-primary" type="submit">Add New Setting</button>
                                </div>
                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <p>
                                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                                    sartorial PBR leggings next level wes anderson artisan four loko
                                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                                    commodo enim craft beer mlkshk.
                                                </p>
                                                <p class="mb-0"> Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna 8-bit</p>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                <p>
                                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                    Leggings gentrify squid 8-bit cred.
                                                </p>
                                                <p class="mb-0">DIY synth PBR banksy irony.
                                                    Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                                                    mi whatever gluten-free.</p>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <p>
                                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                    art party before they sold out master cleanse gluten-free squid
                                                    scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                    art party locavore wolf cliche high life echo park Austin. Cred
                                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                    farm-to-table.
                                                </p>
                                                <p class="mb-0">Fanny pack portland seitan DIY,
                                                    art party locavore wolf cliche high life echo park Austin. Cred
                                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                    farm-to-table.
                                                </p>
                                            </div>
                                        </div>
                                    </div><!--  end col -->
                                </div><!-- end row -->
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>












                   
                </div>
                <!-- end row -->

             
                <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


             <?php $this->load->view('layouts/footer'); ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
        <!-- Right Sidebar -->
            <?php $this->load->view('layouts/right-sidebar'); ?>
        <!-- /Right-bar -->

        <!-- JAVASCRIPT -->

        <?php $this->load->view('layouts/vendor-scripts'); ?>

<!-- pristine js -->
<script src="<?php echo base_url() ?>public/assets/libs/pristinejs/pristine.min.js"></script>
<!-- form validation -->
<script src="<?php echo base_url() ?>public/assets/js/pages/form-validation.init.js"></script>

<!-- ckeditor -->
<script src="<?php echo base_url() ?>public/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

<!-- init js -->
<script src="<?php echo base_url() ?>public/assets/js/pages/form-editor.init.js"></script>
<script src="<?php echo base_url() ?>public/assets/js/app.js"></script>

</body>

</html>