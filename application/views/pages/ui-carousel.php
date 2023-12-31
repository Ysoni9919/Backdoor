<?php $this->load->view('layouts/session'); ?>
<?php $this->load->view('layouts/head-main'); ?>

<head>

    <title>Carousel | Minia - Admin & Dashboard Template</title>
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
                            <h4 class="mb-sm-0 font-size-18">Carousel</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
                                    <li class="breadcrumb-item active">Carousel</li>
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
                                <h4 class="card-title">Slides only</h4>
                                <p class="card-title-desc">Here’s a carousel with slides only.
                                    Note the presence of the <code>.d-block</code>
                                    and <code>.img-fluid</code> on carousel images
                                    to prevent browser default image alignment.</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid mx-auto" src="<?php echo base_url() ?>public/assets/images/small/img-1.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid mx-auto" src="<?php echo base_url() ?>public/assets/images/small/img-2.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid mx-auto" src="<?php echo base_url() ?>public/assets/images/small/img-3.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                </div><!-- end carousel -->
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">With Controls</h4>
                                <p class="card-title-desc">Adding in the previous and next controls.</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid mx-auto" src="<?php echo base_url() ?>public/assets/images/small/img-4.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid mx-auto" src="<?php echo base_url() ?>public/assets/images/small/img-5.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid mx-auto" src="<?php echo base_url() ?>public/assets/images/small/img-6.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div><!-- end carousel -->
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">With indicators</h4>
                                <p class="card-title-desc">You can also add the indicators to the
                                    carousel, alongside the controls, too.</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid mx-auto" src="<?php echo base_url() ?>public/assets/images/small/img-3.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid mx-auto" src="<?php echo base_url() ?>public/assets/images/small/img-2.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid mx-auto" src="<?php echo base_url() ?>public/assets/images/small/img-1.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div><!-- end carousel -->
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div> <!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">With captions</h4>
                                <p class="card-title-desc">Add captions to your slides easily with the <code>.carousel-caption</code> element within
                                    any <code>.carousel-item</code>.</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img src="<?php echo base_url() ?>public/assets/images/small/img-7.jpg" alt="..." class="d-block img-fluid mx-auto">
                                            <div class="carousel-caption d-none d-md-block text-white-50">
                                                <h5 class="text-white">First slide label</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo base_url() ?>public/assets/images/small/img-5.jpg" alt="..." class="d-block img-fluid mx-auto">
                                            <div class="carousel-caption d-none d-md-block text-white-50">
                                                <h5 class="text-white">Second slide label</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo base_url() ?>public/assets/images/small/img-4.jpg" alt="..." class="d-block img-fluid mx-auto">
                                            <div class="carousel-caption d-none d-md-block text-white-50">
                                                <h5 class="text-white">Third slide label</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div><!-- end carousel -->
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Crossfade</h4>
                                <p class="card-title-desc">Add <code>.carousel-fade</code> to your carousel to animate slides with a fade transition instead of a slide.</p>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active"></li>
                                        <li data-bs-target="#carouselExampleFade" data-bs-slide-to="1"></li>
                                        <li data-bs-target="#carouselExampleFade" data-bs-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid mx-auto" src="<?php echo base_url() ?>public/assets/images/small/img-1.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid mx-auto" src="<?php echo base_url() ?>public/assets/images/small/img-2.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid mx-auto" src="<?php echo base_url() ?>public/assets/images/small/img-3.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div><!-- end carousel -->
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div> <!-- end col -->
                </div><!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->

<?php include 'layouts/vendor-scripts.php'; ?>

<script src="<?php echo base_url() ?>public/assets/js/app.js"></script>

</body>

</html>