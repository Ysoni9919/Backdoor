<?php $this->load->view('layouts/session'); ?>
<?php $this->load->view('layouts/head-main'); ?>

<head>

    <title>Alerts | Minia - Admin & Dashboard Template</title>
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
                            <h4 class="mb-sm-0 font-size-18">Alerts</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
                                    <li class="breadcrumb-item active">Alerts</li>
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
                                <h4 class="card-title">Default Alerts</h4>
                                <p class="card-title-desc">Alerts are available for any length of
                                    text, as well as an optional dismiss button. For proper styling, use one
                                    of the four <strong>required</strong> contextual classes (e.g., <code>.alert-success</code>). For inline
                                    dismissal, use the alerts jQuery plugin.
                                </p>
                            </div><!-- end card header-->

                            <div class="card-body">
                                <div class="alert alert-primary" role="alert">
                                    A simple primary alert—check it out!
                                </div>
                                <div class="alert alert-secondary" role="alert">
                                    A simple secondary alert—check it out!
                                </div>
                                <div class="alert alert-success" role="alert">
                                    A simple success alert—check it out!
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    A simple danger alert—check it out!
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    A simple warning alert—check it out!
                                </div>
                                <div class="alert alert-info" role="alert">
                                    A simple info alert—check it out!
                                </div>
                                <div class="alert alert-light" role="alert">
                                    A simple light alert—check it out!
                                </div>
                                <div class="alert alert-dark mb-0" role="alert">
                                    A simple dark alert—check it out!
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Link Color</h4>
                                <p class="card-title-desc">Use the <code>.alert-link</code> utility class to
                                    quickly provide matching colored links within any alert.
                                </p>
                            </div><!-- end card header-->

                            <div class="card-body">
                                <div class="alert alert-primary" role="alert">
                                    A simple primary alert with <a href="javascript: void(0);" class="alert-link">an example link</a>. Give it a
                                    click if you like.
                                </div>
                                <div class="alert alert-secondary" role="alert">
                                    A simple secondary alert with <a href="javascript: void(0);" class="alert-link">an example link</a>. Give it a
                                    click if you like.
                                </div>
                                <div class="alert alert-success" role="alert">
                                    A simple success alert with <a href="javascript: void(0);" class="alert-link">an example link</a>. Give it a
                                    click if you like.
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    A simple danger alert with <a href="javascript: void(0);" class="alert-link">an example link</a>. Give it a
                                    click if you like.
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    A simple warning alert with <a href="javascript: void(0);" class="alert-link">an example link</a>. Give it a
                                    click if you like.
                                </div>
                                <div class="alert alert-info" role="alert">
                                    A simple info alert with <a href="javascript: void(0);" class="alert-link">an example link</a>. Give it a click
                                    if you like.
                                </div>
                                <div class="alert alert-light" role="alert">
                                    A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                </div>
                                <div class="alert alert-dark mb-0" role="alert">
                                    A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Dismissing</h4>
                                <p class="card-title-desc">Add a dismiss button and the <code>.alert-dismissible</code> class, which adds extra padding
                                    to the right of the alert and positions the <code>.btn-close</code> button.
                                </p>
                            </div><!-- end card header-->

                            <div class="card-body">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    A simple success alert—check it out!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    A simple danger alert—check it out!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    A simple warning alert—check it out!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
                                    A simple info alert—check it out!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><span>*****</span>With Icon</h4>
                                <p class="card-title-desc"><span>*****</span>Add a dismiss button and the <code>.alert-dismissible</code> class, which adds extra padding
                                    to the right of the alert and positions the <code>.btn-close</code> button.
                                </p>
                            </div><!-- end card header-->

                            <div class="card-body">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all me-2"></i>
                                    A simple success alert—check it out!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-block-helper me-2"></i>
                                    A simple danger alert—check it out!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-alert-outline me-2"></i>
                                    A simple warning alert—check it out!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
                                    <i class="mdi mdi-alert-circle-outline me-2"></i>
                                    A simple info alert—check it out!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Outline Alerts</h4>
                                <p class="card-title-desc">Add <code>.alert-outline</code> class with for Outline alerts.</p>
                            </div><!-- end card header-->

                            <div class="card-body">
                                <div class="alert alert-success alert-dismissible alert-outline fade show" role="alert">
                                    <strong>Success</strong> - Outline success alert example
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="alert alert-danger alert-dismissible alert-outline fade show" role="alert">
                                    <strong>Danger</strong> - Outline danger alert example
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="alert alert-warning alert-dismissible alert-outline fade show" role="alert">
                                    <strong>Warning</strong> - Outline warning alert example
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="alert alert-info alert-dismissible alert-outline fade show mb-0" role="alert">
                                    <strong>Info</strong> - Outline info alert example
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Left Border Alerts</h4>
                                <p class="card-title-desc">Add <code>.alert-outline</code> class with for Outline alerts.</p>
                            </div><!-- end card header-->

                            <div class="card-body">
                                <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all me-3 align-middle"></i><strong>Success</strong> - Left border alert
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="alert alert-danger alert-border-left alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-block-helper me-3 align-middle"></i><strong>Danger</strong> - Left border alert
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="alert alert-warning alert-border-left alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-alert-outline align-middle me-3"></i><strong>Warning</strong> - Left border alert
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="alert alert-info alert-border-left alert-dismissible fade show mb-0" role="alert">
                                    <i class="mdi mdi-alert-circle-outline align-middle me-3"></i><strong>Info</strong> - Left border alert
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Top Border Alert</h4>
                                <p class="card-title-desc">Left Border Alert example</p>
                            </div><!-- end card header-->

                            <div class="card-body">
                                <div class="alert alert-success alert-top-border alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all me-3 align-middle text-success"></i><strong>Success</strong> - Top border alert
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>


                                <div class="alert alert-danger alert-top-border alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-block-helper me-3 align-middle text-danger"></i><strong>Danger</strong> - Top border alert
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                <div class="alert alert-warning alert-top-border alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-alert-outline align-middle text-warning me-3"></i><strong>Warning</strong> - Top border alert
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                <div class="alert alert-info alert-top-border alert-dismissible fade show mb-0" role="alert">
                                    <i class="mdi mdi-alert-circle-outline text-info align-middle me-3"></i><strong>Info</strong> - Top border alert
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Label Icon Arrow Alert</h4>
                                <p class="card-title-desc">Alert label arrow example</p>
                            </div><!-- end card header-->

                            <div class="card-body">
                                <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                    <i class="mdi mdi-check-all label-icon"></i><strong>Success</strong> - Label icon arrow alert
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                    <i class="mdi mdi-block-helper label-icon"></i><strong>Danger</strong> - Label icon arrow alert
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                <div class="alert alert-warning alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                                    <i class="mdi mdi-alert-outline label-icon"></i><strong>Warning</strong> - Label icon arrow alert
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                                <div class="alert alert-info alert-dismissible alert-label-icon label-arrow fade show mb-0" role="alert">
                                    <i class="mdi mdi-alert-circle-outline label-icon"></i><strong>Info</strong> - Label icon arrow alert
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->


                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Alert Examples</h4>
                                <p class="card-title-desc"><span>*****</span>Add a dismiss button and the <code>.alert-dismissible</code> class, which adds extra padding
                                    to the right of the alert and positions the <code>.btn-close</code> button.
                                </p>
                            </div><!-- end card header-->

                            <div class="card-body">
                                <div class="row g-4">
                                    <div class="col-sm-3">
                                        <div class="alert alert-success alert-dismissible fade show px-4 mb-0 text-center" role="alert">
                                            <i class="mdi mdi-check-all d-block display-4 mt-2 mb-3 text-success"></i>
                                            <h5 class="text-success">Success</h5>
                                            <p>A simple success alert</p>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-sm-3">
                                        <div class="alert alert-danger alert-dismissible fade show px-4 mb-0 text-center" role="alert">
                                            <i class="mdi mdi-block-helper d-block display-4 mt-2 mb-3 text-danger"></i>
                                            <h5 class="text-danger">Error</h5>
                                            <p>A simple danger alert</p>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-sm-3">
                                        <div class="alert alert-warning alert-dismissible fade show px-4 mb-0 text-center" role="alert">
                                            <i class="mdi mdi-alert-outline d-block display-4 mt-2 mb-3 text-warning"></i>
                                            <h5 class="text-warning">Warning</h5>
                                            <p>A simple warning alert</p>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-sm-3">
                                        <div class="alert alert-info alert-dismissible fade show px-4 mb-0 text-center" role="alert">
                                            <i class="mdi mdi-alert-circle-outline d-block display-4 mt-2 mb-3 text-info"></i>
                                            <h5 class="text-info">Info</h5>
                                            <p>A simple info alert</p>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->

            </div>
            <!-- container-fluid -->
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