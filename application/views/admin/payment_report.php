<?php $this->load->view('layouts/session'); ?>
<?php $this->load->view('layouts/head-main'); ?>

<head>

    <title>Advanced Plugins | Minia - Admin & Dashboard Template</title>
    <?php $this->load->view('layouts/head'); ?>

    <!-- choices css -->
    <link href="<?php echo base_url() ?>public/assets/libs/choices.js/public/<?php echo base_url() ?>public/assets/styles/choices.min.css" rel="stylesheet" type="text/css" />

    <!-- color picker css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/libs/@simonwep/pickr/themes/classic.min.css" /> <!-- 'classic' theme -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/libs/@simonwep/pickr/themes/monolith.min.css" /> <!-- 'monolith' theme -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/libs/@simonwep/pickr/themes/nano.min.css" /> <!-- 'nano' theme -->

    <!-- datepicker css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/libs/flatpickr/flatpickr.min.css">
    
  
    <!-- DataTables -->
    <link href="<?php echo base_url() ?>public/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url() ?>public/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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
                            <h4 class="mb-sm-0 font-size-18">Advanced Plugins</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Advanced Plugins</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

          

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Payment Report</h4>
                         
                            </div>
                            <!-- end card header -->

                            <div class="card-body">
                                <div>
                                    <h5 class="font-size-14 mb-3">Filteration</h5>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Select Filter</label>
                                                <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" placeholder="This is a search placeholder">
                                                    <option value="">Transaction Type</option>
                                                    <option value="Choice 1">Free</option>
                                                    <option value="Choice 2">Pay</option>

                                                </select>
                                            </div>
                                        </div>

                                        

                                    
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="mb-3">
                                                <label for="choices-single-no-sorting" class="form-label font-size-13 text-muted">Select User</label>
                                                <select class="form-control" name="choices-single-no-sorting" id="choices-single-no-sorting">
                                                    <option value="Madrid">Madrid</option>
                                                    <option value="Toronto">Toronto</option>
                                                    <option value="Vancouver">Vancouver</option>
                                                    <option value="London">London</option>
                                                    <option value="Manchester">Manchester</option>
                                                    
                                                    
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="mb-3">
                                                <div>
                                                    <label class="form-label">Between Payment</label>
                                                    <input type="text" class="form-control" placeholder="Select Range Date" id="datepicker-range">
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- Single select input Example -->
                                
                                
                                
                                
                                <div class="card">
                         
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>File Name</th>
                                            <th>File Owner UserName</th>
                                            <th>Username</th>
                                            <th>Transaction Type(Pay,Free)</th>
                                            <th>Transaction Money(0,Free)</th>
                                            <th>Transaction Date</th>
                                          
                                            
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Name</td>
                                            <td>File Name</td>
                                            <td>File OwnerName</td>
                                            <td>Username</td>
                                            <td>Pay</td>
                                            <td>120</td>
                                            <td>2023-05-12</td>
                                            
                                           
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            </div>
                            
                            <!-- end card body -->
                        </div>

                     
                        <!-- end card -->
                    </div>
                   
                   
                </div>
                <!-- end row -->

                <div class="row" style="display:none;">
                    <div class="col-lg-12">
                        <div class="card">
                          
                            <div class="card-body">

                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <h5 class="font-size-14">Classic Demo</h5>
                                                <div class="classic-colorpicker"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <h5 class="font-size-14">Monolith Demo</h5>
                                                <div class="monolith-colorpicker"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-4">
                                                <h5 class="font-size-14">Nano Demo</h5>
                                                <div class="nano-colorpicker"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>

                    
                    <!-- end col -->
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

<!-- choices js -->
<script src="<?php echo base_url() ?>public/assets/libs/choices.js/public/<?php echo base_url() ?>public/assets/scripts/choices.min.js"></script>

<!-- color picker js -->
<script src="<?php echo base_url() ?>public/assets/libs/@simonwep/pickr/pickr.min.js"></script>
<script src="<?php echo base_url() ?>public/assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>

<!-- datepicker js -->
<script src="<?php echo base_url() ?>public/assets/libs/flatpickr/flatpickr.min.js"></script>

<!-- init js -->
<script src="<?php echo base_url() ?>public/assets/js/pages/form-advanced.init.js"></script>

<script src="<?php echo base_url() ?>public/assets/js/app.js"></script>
<!-- Required datatable js -->
<script src="<?php echo base_url() ?>public/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>public/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?php echo base_url() ?>public/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>public/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>public/assets/libs/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>public/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>public/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>public/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>public/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>public/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="<?php echo base_url() ?>public/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>public/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="<?php echo base_url() ?>public/assets/js/pages/datatables.init.js"></script>

</body>

</html>