<?php $this->load->view('layouts/session'); ?>
<?php $this->load->view('layouts/head-main'); ?>

<head>

    <title>SweetAlert 2 | Minia - Admin & Dashboard Template</title>
    <?php $this->load->view('layouts/head'); ?>

    <!-- Sweet Alert-->
    <link href="<?php echo base_url() ?>public/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

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
                            <h4 class="mb-sm-0 font-size-18">SweetAlert 2</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Extended</a></li>
                                    <li class="breadcrumb-item active">SweetAlert 2</li>
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
                                <h4 class="card-title">Examples</h4>
                                <p class="card-title-desc">A beautiful, responsive, customizable
                                    and accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero
                                    dependencies.</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-nowrap align-middle justify-content-center mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 50%;">
                                                    Sweet Alert Type
                                                </th>
                                                <th scope="col" class="text-center">
                                                    Sweet Alert Examples
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row">
                                                    A Basic Message
                                                </th>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="sa-basic">Click me</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    A Title with a Text Under
                                                </th>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="sa-title">Click me</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    A success message!
                                                </th>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="sa-success">Click me</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    A warning message, with a function attached to the "Confirm"-button...
                                                </th>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="sa-warning">Click me</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    By passing a parameter, you can execute something else for "Cancel".
                                                </th>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="sa-params">Click me</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    A message with custom Image Header
                                                </th>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="sa-image">Click me</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    A message with auto close timer
                                                </th>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="sa-close">Click me</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    Custom HTML description and buttons
                                                </th>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="custom-html-alert">Click me</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    A custom positioned dialog
                                                </th>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="sa-position">Click me</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    A message with custom width, padding and background
                                                </th>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="custom-padding-width-alert">Click me</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">
                                                    Ajax request example
                                                </th>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" id="ajax-alert">Click me</button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <!-- end table -->
                                </div>
                                <!-- end table responsive -->

                            </div>
                        </div>
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

<!-- Sweet Alerts js -->
<script src="<?php echo base_url() ?>public/assets/libs/sweetalert2/sweetalert2.min.js"></script>

<!-- Sweet alert init js-->
<script src="<?php echo base_url() ?>public/assets/js/pages/sweetalert.init.js"></script>

<script src="<?php echo base_url() ?>public/assets/js/app.js"></script>

</body>

</html>