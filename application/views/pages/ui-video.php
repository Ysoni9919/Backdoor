<?php $this->load->view('layouts/session'); ?>
<?php $this->load->view('layouts/head-main'); ?>

    <head>

        <title>Video | Minia - Admin & Dashboard Template</title>
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
                                    <h4 class="mb-sm-0 font-size-18">Video</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
                                            <li class="breadcrumb-item active">Video</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Ratio video 16:9</h4>
                                        <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <!-- 16:9 aspect ratio -->
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://www.youtube.com/embed/1y_kfWUCFDQ" title="YouTube video" allowfullscreen></iframe>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Ratio video 21:9</h4>
                                        <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <!-- 21:9 aspect ratio -->
                                        <div class="ratio ratio-21x9">
                                            <iframe src="https://www.youtube.com/embed/1y_kfWUCFDQ" title="YouTube video" allowfullscreen></iframe>
                                        </div>

                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                        </div> <!-- end row -->

                        <div class="row">

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Ratio video 4:3</h4>
                                        <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <!-- 4:3 aspect ratio -->
                                        <div class="ratio ratio-4x3">
                                            <iframe src="https://www.youtube.com/embed/1y_kfWUCFDQ" title="YouTube video" allowfullscreen></iframe>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Ratio video 1:1</h4>
                                        <p class="card-title-desc">Aspect ratios can be customized with modifier classes.</p>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <!-- 1:1 aspect ratio -->
                                        <div class="ratio ratio-1x1">
                                            <iframe src="https://www.youtube.com/embed/1y_kfWUCFDQ" title="YouTube video" allowfullscreen></iframe>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
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

        <script src="<?php echo base_url() ?>public/assets/js/app.js"></script>

    </body>
</html>
