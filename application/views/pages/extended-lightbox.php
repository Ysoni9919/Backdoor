<?php $this->load->view('layouts/session'); ?>
<?php $this->load->view('layouts/head-main'); ?>

<head>

    <title>Lightbox | Minia - Admin & Dashboard Template</title>
    <?php $this->load->view('layouts/head'); ?>

    <!-- glightbox css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/libs/glightbox/css/glightbox.min.css">

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
                            <h4 class="mb-sm-0 font-size-18">Lightbox</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Extended</a></li>
                                    <li class="breadcrumb-item active">Lightbox</li>
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
                                <h5 class="card-title">Single Image Lightbox</h5>
                                <p class="card-title-desc">Glightbox Single Image Lightbox Example</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mt-4">
                                            <a href="<?php echo base_url() ?>public/assets/images/small/img-1.jpg" class="image-popup">
                                                <img src="<?php echo base_url() ?>public/assets/images/small/img-1.jpg" class="img-fluid" alt="work-thumbnail">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mt-4">
                                            <a href="<?php echo base_url() ?>public/assets/images/small/img-2.jpg" class="image-popup">
                                                <img src="<?php echo base_url() ?>public/assets/images/small/img-2.jpg" class="img-fluid" alt="work-thumbnail">
                                            </a>
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


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Images with Description</h5>
                                <p class="card-title-desc">Glightbox Images with Description Example</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mt-4">
                                            <a href="<?php echo base_url() ?>public/assets/images/small/img-4.jpg" class="image-popup-desc" data-title="Project 01" data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit">
                                                <img src="<?php echo base_url() ?>public/assets/images/small/img-4.jpg" class="img-fluid" alt="work-thumbnail">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mt-4">
                                            <a href="<?php echo base_url() ?>public/assets/images/small/img-5.jpg" class="image-popup-desc" data-title="Project 02" data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit">
                                                <img src="<?php echo base_url() ?>public/assets/images/small/img-5.jpg" class="img-fluid" alt="work-thumbnail">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mt-4">
                                            <a href="<?php echo base_url() ?>public/assets/images/small/img-1.jpg" class="image-popup-desc" data-title="Project 03" data-description="Lorem ipsum dolor sit amet, consectetuer adipiscing elit">
                                                <img src="<?php echo base_url() ?>public/assets/images/small/img-1.jpg" class="img-fluid" alt="work-thumbnail">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Popup with Video or Map</h5>
                                <p class="card-title-desc">Glightbox Popup with Video or Map Example</p>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-start gap-3 flex">
                                    <a href="https://www.youtube.com/watch?v=0O2aH4XLbto" class="btn btn-light image-popup-video-map" data-title="YouTube Video" data-description="YouTube Video Popup">
                                        Open YouTube Video
                                    </a>

                                    <a href="https://vimeo.com/45830194" class="btn btn-light image-popup-video-map" data-title="Vimeo Video" data-description="Vimeo Video Popup">
                                        Open Vimeo Video
                                    </a>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
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

<!-- glightbox js -->
<script src="<?php echo base_url() ?>public/assets/libs/glightbox/js/glightbox.min.js"></script>

<!-- lightbox init -->
<script src="<?php echo base_url() ?>public/assets/js/pages/lightbox.init.js"></script>

<script src="<?php echo base_url() ?>public/assets/js/app.js"></script>
</body>

</html>