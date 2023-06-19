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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Cron jobs</a></li>
                                    <li class="breadcrumb-item active">Add New Cron jobs</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-8 offset-xl-2 ">
                        <div class="card">
                        <!-- <h4 class="mb-sm-0 font-size-18">Add New Cron jobs </h4> -->
                            <div class="card-header">
                                <h4 class="card-title">Add New Cron jobs</h4>
                                <!-- <p class="card-title-desc">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p> -->
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Enter Cron Name</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Cron jobsname" value="Add User Cron" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom001">Enter Cron jobs Description</label>
                                                <div class="col-lg-12">
                        
                                <div id="ckeditor-classic"></div>
                           
                    </div>
                    </div>
                    <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Url</label>
                                                <input type="url" class="form-control" id="validationCustom01" placeholder="Enter Url LIke (https://google.com)" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationCustom01">Cron run timing</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Cron Timing like (daily,weekly,monthly)"  required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
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
                                        
                                     
                                    <button class="btn btn-primary" type="submit">Add New Cron jobs</button>
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