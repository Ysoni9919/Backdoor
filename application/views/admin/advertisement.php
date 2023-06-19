<?php $this->load->view('layouts/session'); ?>
<?php $this->load->view('layouts/head-main'); ?>

<head>

    <title>DataTables | Minia - Admin & Dashboard Template</title>
    <?php $this->load->view('layouts/head'); ?>

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
                          
                        <a href="<?php echo base_url().'admin/advertisement/add'; ?>"><button type="button" class="btn btn-primary waves-effect waves-light"><i class="bx bxs-report"></i>Add New Advertisement</button></a>


                        
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Advertisements</a></li>
                                    <li class="breadcrumb-item active">List</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

             
                <div class="row">





                










                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="mb-sm-0 font-size-18">Advertisement List</h4>
                               
                            </div>
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Pages List</th>
                                            <th>Type(Banner/Video)</th>
                                            <th>Size</th>
                                            <th>Created Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Adertisment Title</td>
                                            <td>Page Name List</td>
                                            <td>Banner</td>
                                            <td>160*320</td>
                                            <td>12-03-2023 12:01:02</td>
                                            <td><button type="button" class="btn btn-primary waves-effect waves-light">Active</button></td>
                                            <td>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-block-helper"></i> Deactive</button>
                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-check-bold"></i> Active</button>
                                            </td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end cardaa -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
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

<script src="<?php echo base_url() ?>public/assets/js/app.js"></script>

</body>

</html>