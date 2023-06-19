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
                          

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Copywrite</a></li>
                                    <li class="breadcrumb-item active"><?php echo $user_type; ?></li>
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
                            <h4 class="mb-sm-0 font-size-18">Copywrite <?php echo $user_type; ?> </h4>
                               
                            </div>
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Copywrite User</th>
                                            <th>Against Copywrite User or Group or Channel</th>
                                            <th>Copywrite File</th>
                                            <th>Copywrite File Proof by copywrite user</th>
                                            <th>Copywrite File Proof by agianst copywrite user</th>
                                            <th>Copywrite Date</th>
                                            <?php 
                                            if($user_type == "Approved"){
                                                ?>

<th>Approved Reason</th>
<th>Approved Date</th>
                                                <?php
                                            }else if($user_type == "Rejected"){
                                                ?>

<th>Rejected Reason</th>
<th>Rejected Date</th>

<?php
                                            }else{
                                                ?>

<th>Action</th>
                                                <?php
                                            }

                                            ?>

                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Copywrite Title</td>
                                            <td>Copywrite Description</td>
                                            <td>Abc123</td>
                                            <td>Username or group name or channel name</td>
                                            <td><button type="button" class="btn btn-primary waves-effect waves-light"> <i class="mdi mdi-download-box"></i>Download Copywrite File</button></td>
                                            <td> <button type="button" class="btn btn-secondary waves-effect waves-light"><i class="mdi mdi-download-box"></i> Download Proof File by copywrite user</button></td>
                                            <td> <button type="button" class="btn btn-secondary waves-effect waves-light"><i class="mdi mdi-download-box"></i> Download Proof File by aginst copywrite user</button></td>

                                            <td>12-03-2023 12:01:02</td>
                                           

                                            <?php 
                                            if($user_type == "Approved"){
                                                ?>

<td>this is copywrite</td>
<td>12-03-25 12:11:10</td>
<?php
                                            }else if($user_type == "Rejected"){
                                                ?>

<td>this is not copywrite</td>
<td>12-03-25 12:11:10</td>

<?php
                                            }else{

                                            ?>

                                            <td>


                                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-block-helper"></i> Rejected Request</button>
                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-check-bold"></i> Approved & Delete File</button>
                                            </td>
                                            <?php
                                            }
                                            ?>
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