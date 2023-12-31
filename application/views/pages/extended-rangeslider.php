<?php $this->load->view('layouts/session'); ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Range Slider | Minia - Admin & Dashboard Template</title>
    <?php $this->load->view('layouts/head'); ?>

    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>public/assets/libs/nouislider/nouislider.min.css">

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
                            <h4 class="mb-sm-0 font-size-18">Range Slider</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Extended</a></li>
                                    <li class="breadcrumb-item active">Range Slider</li>
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
                                <h5 class="card-title">noUiSlider</h5>
                                <p class="card-title-desc">noUiSlider is lightweight Javascript range slider</p>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="mb-5">
                                        <div class="row align-items-center">
                                            <div class="col-lg-3">
                                                <h5 class="font-size-14">Basic Example</h5>
                                            </div>
                                            <div class="col-lg-9">
                                                <div id="slider"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <h5 class="font-size-14">Colorpicker</h5>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="sliders" id="red"></div>
                                                <div class="sliders" id="green"></div>
                                                <div class="sliders" id="blue"></div>

                                                <div id="result"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <h5 class="font-size-14">Using HTML5 input elements</h5>
                                            </div>
                                            <div class="col-lg-9">
                                                <div id="html5"></div>
                                                <div class="d-flex flex-wrap">
                                                    <select id="input-select" class="form-select"></select>
                                                    <input type="number" class="form-control" min="-20" max="40" step="1" id="input-number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <h5 class="font-size-14">Non linear slider</h5>
                                            </div>
                                            <div class="col-lg-9">
                                                <div id="nonlinear"></div>
                                                <span class="example-val" id="lower-value"></span>
                                                <span class="example-val" id="upper-value"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <h5 class="font-size-14">Locking sliders together</h5>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="slider" id="slider1"></div>
                                                <span class="example-val mt-2" id="slider1-span"></span>

                                                <div class="slider" id="slider2"></div>
                                                <span class="example-val mt-2" id="slider2-span"></span>

                                                <button id="lockbutton" class="btn btn-primary" style="float: right; margin: 20px 0 0;">Lock</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <h5 class="font-size-14">Only showing tooltips when sliding handle</h5>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="slider" id="slider-hide"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <h5 class="font-size-14">Colored Connect Elements</h5>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="slider" id="slider-color"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <h5 class="font-size-14">Creating a toggle</h5>
                                            </div>
                                            <div class="col-lg-9">
                                                <div id="slider-toggle"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <h5 class="font-size-14">Soft limits</h5>
                                            </div>
                                            <div class="col-lg-9">
                                                <div id="soft"></div>
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

<!-- nouisliderribute js -->
<script src="<?php echo base_url() ?>public/assets/libs/nouislider/nouislider.min.js"></script>
<script src="<?php echo base_url() ?>public/assets/libs/wnumb/wNumb.min.js"></script>

<!-- range slider init -->
<script src="<?php echo base_url() ?>public/assets/js/pages/rangeslider.init.js"></script>

<script src="<?php echo base_url() ?>public/assets/js/app.js"></script>

</body>

</html>