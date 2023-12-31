<?php $this->load->view('layouts/session'); ?>
<?php $this->load->view('layouts/head-main'); ?>

<head>

    <title>Google | Minia - Admin & Dashboard Template</title>
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
                            <h4 class="mb-sm-0 font-size-18">Google</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
                                    <li class="breadcrumb-item active">Google</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Markers</h4>
                                <p class="card-title-desc">Example of google maps.</p>
                            </div>
                            <div class="card-body">
                                <div id="gmaps-markers" class="gmaps"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Overlays</h4>
                                <p class="card-title-desc">Example of google maps.</p>
                            </div>
                            <div class="card-body">
                                <div id="gmaps-overlay" class="gmaps"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Street View Panoramas</h4>
                                <p class="card-title-desc">Example of google maps.</p>
                            </div>
                            <div class="card-body">
                                <div id="panorama" class="gmaps-panaroma"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Map Types</h4>
                                <p class="card-title-desc">Example of google maps.</p>
                            </div>
                            <div class="card-body">
                                <div id="gmaps-types" class="gmaps"></div>
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

<!-- google maps api -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

<!-- Gmaps file -->
<script src="<?php echo base_url() ?>public/assets/libs/gmaps/gmaps.min.js"></script>

<!-- demo codes -->
<script src="<?php echo base_url() ?>public/assets/js/pages/gmaps.init.js"></script>

<script src="<?php echo base_url() ?>public/assets/js/app.js"></script>

</body>

</html>