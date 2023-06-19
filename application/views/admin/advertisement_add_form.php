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
                           

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Advertisement</a></li>
                                    <li class="breadcrumb-item active">Add New Advertisement</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-8 offset-xl-2 ">
                        <div class="card">
                        <!-- <h4 class="mb-sm-0 font-size-18">Add New Advertisement </h4> -->
                            <div class="card-header">
                                <h4 class="card-title">Add New Advertisement</h4>
                                <!-- <p class="card-title-desc">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p> -->
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Enter Advertisement Title</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Advertisementname" value="Abc1234" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-md-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Advertisement Type</label>
                                                    <select required="" class="form-control form-select" >
                                                        <option value="">Select Type</option>
                                                        <option value="wr">Banner Video</option>
                                                        <option value="ph">Video</option>

                                                    </select>
                                                </div>
                                            </div>
                                        <div class="col-xl-12 col-md-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Advertisement Size</label>
                                                    <select required="" class="form-control form-select" >
                                                        <option value="">Select Size</option>
                                                        <option value="wr">160*300</option>
                                                        <option value="ph">160*600</option>

                                                    </select>
                                                </div>
                                            </div>
                                       
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom001">Enter Advertisement Code</label>
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
                                        
                                     
                                    <button class="btn btn-primary" type="submit">Add New Advertisement</button>
                                </form>
                            </div>
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->

                   
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