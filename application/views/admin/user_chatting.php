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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                                    <li class="breadcrumb-item active">Chatting</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->





                <div class="row">

                    <div class="col-xl-12">
                        <div class="card">

                            <div class="card-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-pills nav-justified" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#home-1" role="tab" aria-selected="true">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                            <span class="d-none d-sm-block">Friends</span>
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                            <span class="d-none d-sm-block">Group</span>
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#messages-1" role="tab" aria-selected="false">
                                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                            <span class="d-none d-sm-block">Channel</span>
                                        </a>
                                    </li>

                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content p-3 text-muted">
                                    <div class="tab-pane active" id="home-1" role="tabpanel">

                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="mb-sm-0 font-size-18">Friends List</h4>

                                            </div>
                                            <div class="card-body">
                                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Friend UserName</th>
                                                            <th>Who Send Request</th>
                                                            <th>Request Accepted Datetime</th>
                                                            <th>Friend Phone no</th>
                                                            <th>Friend Email Id</th>
                                                            <th>Friend Dob</th>
                                                            <th>Friend Chatting</th>
                                                            <th>Friend Present Coin Balance</th>
                                                            <th>Friend Present Money Balance</th>
                                                            <th>Friend Withdraw Report</th>
                                                            <th>Friend Created Date</th>
                                                            <th>Friend Last Updated Date</th>
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>


                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Ak2020</td>
                                                            <td>Abc123</td>
                                                            <td>12-03-1800</td>
                                                            <td>1234567890</td>
                                                            <td>abc@gmail.com</td>
                                                            <td>12-03-1800</td>
                                                            <td><a href="<?php echo base_url().'admin/user/chatting_detail'; ?>"> <button type="button" class="btn btn-primary waves-effect waves-light"> <i class="bx bx-chat"></i>Open Chatting</button></a></td>

                                                            <td><button type="button" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-alpha-c-circle"></i> 12</button></td>
                                                            <td><button type="button" class="btn btn-primary waves-effect waves-light"><i class="bx bx-money"></i> 12</button></td>
                                                            <td><button type="button" class="btn btn-secondary waves-effect waves-light"><i class="bx bxs-report"></i> Withdraw Report</button></td>
                                                            <td>12-03-2023 12:01:02</td>
                                                            <td>12-03-2023 13:01:02</td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-block-helper"></i> Blocked</button>
                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>

                                                <!-- end cardaa -->
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                    <div class="tab-pane" id="profile-1" role="tabpanel">
                                        <div class="card" style="    overflow-x: scroll;">
                                            <div class="card-header">
                                                <h4 class="mb-sm-0 font-size-18">Group List</h4>

                                            </div>
                                            <div class="card-body">
                                                <table id="datatable" class="table table-bordered dt-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Group Name</th>
                                                            <th>Total Member Group</th>
                                                            <th>Who Joined this User</th>
                                                            <th>Group Admin Username</th>
                                                            <th>Group Joining Date</th>
                                                            
                                                            <th>Open Chatting</th>
                                                            <th>Group Message Access</th>
                                                            <th>Group Created Date</th>
                                                            
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>


                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Group Name</td>
                                                            <td>120</td>
                                                            <td>who joined username</td>
                                                            <td>Group Admin User id</td>
                                                            <td>12-03-2023</td>
                                                            <td> <a href="<?php echo base_url().'admin/user/chatting_detail'; ?>"><button type="button" class="btn btn-primary waves-effect waves-light"> <i class="bx bx-chat"></i>Open Chatting</button></a></td>
                                                            <td>Only Admin Can message</td>
                                                            
                                                          
                                                            <td>12-03-2023 12:01:02</td>
                                                            
                                                            <td>
                                                                <button type="button" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-block-helper"></i> Remove user in this Group</button>
                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>

                                                <!-- end cardaa -->
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                    <div class="tab-pane" id="messages-1" role="tabpanel">
                                    <div class="card" style="    overflow-x: scroll;">
                                            <div class="card-header">
                                                <h4 class="mb-sm-0 font-size-18">Channel List</h4>

                                            </div>
                                            <div class="card-body">
                                                <table id="datatable" class="table table-bordered dt-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Channel Name</th>
                                                            <th>Total Member Channel</th>
                                                            <th>Who Joined this User</th>
                                                            <th>Channel Admin Username</th>
                                                            <th>Channel Joining Date</th>
                                                            
                                                            <th>Open Chatting</th>
                                                            <th>Channel Message Access</th>
                                                            <th>Channel Created Date</th>
                                                            
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>


                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Channel Name</td>
                                                            <td>120</td>
                                                            <td>who joined username</td>
                                                            <td>Channel Admin User id</td>
                                                            <td>12-03-2023</td>
                                                            <td> <a href="<?php echo base_url().'admin/user/chatting_detail'; ?>"><button type="button" class="btn btn-primary waves-effect waves-light"> <i class="bx bx-chat"></i>Open Chatting</button></a></td>
                                                            <td>Only Admin Can message</td>
                                                            
                                                          
                                                            <td>12-03-2023 12:01:02</td>
                                                            
                                                            <td>
                                                                <button type="button" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-block-helper"></i> Remove user in this Channel</button>
                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>

                                                <!-- end cardaa -->
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>

                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div>




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
<script>
    $(document).ready(function() {
        $('#exampled').DataTable();
    });
</script>
</body>

</html>