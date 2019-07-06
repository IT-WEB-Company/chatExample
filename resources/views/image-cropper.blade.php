@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- Image cropper section start -->
                <section id="image-cropper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Cropper Demo</h4>
                                    <p class="font-small-3">This example covers image prviews with different preview sizes, Also shows X & Y
                                        co-ordinates and width - height of the cropper. With Rotate buttons you can rotate the image clockwise
                                        and anti-clockwise. You can also scale the image with horizontal flip and vertical flip buttons. You can
                                        get all data, image data, container data, canvas data and cropbox data clicking on respective buttons.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row mb-1">
                                            <div class="col-md-9">
                                                <div class="img-container overflow-hidden">
                                                    <img class="main-demo-image img-fluid" src="app-assets/img/crop-pic.jpg" alt="Picture">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="docs-preview clearfix">
                                                        <div class="img-preview preview-lg img-fluid"></div>
                                                        <div class="img-preview preview-md img-fluid"></div>
                                                        <div class="img-preview preview-sm img-fluid"></div>
                                                        <div class="img-preview preview-xs img-fluid"></div>
                                                    </div>
                                                </div>

                                                <!-- <h3 class="page-header">Data:</h3> -->
                                                <div class="docs-data">
                                                    <fieldset class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">X</span>
                                                            </div>
                                                            <input type="text" class="form-control main-demo-dataX" placeholder="x">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">px</span>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Y</span>
                                                            </div>
                                                            <input type="text" class="form-control main-demo-dataY" placeholder="y">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">px</span>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Width</span>
                                                            </div>
                                                            <input type="text" class="form-control main-demo-dataWidth" placeholder="width">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">px</span>
                                                            </div>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Height</span>
                                                            </div>
                                                            <input type="text" class="form-control main-demo-dataHeight" placeholder="height">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">px</span>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-2 col-sm-12">
                                                <fieldset class="form-group text-center">
                                                    <button class="btn btn-outline-blue rotate-m45-deg" type="button">Rotate -45&deg;</button>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-2 col-sm-12">
                                                <fieldset class="form-group text-center">
                                                    <button class="btn btn-outline-pink rotate-45-deg" type="button">Rotate 45&deg;</button>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-2 col-sm-12">
                                                <fieldset class="form-group text-center">
                                                    <button class="btn btn-outline-teal rotate-180-deg" type="button">Rotate 180&deg;</button>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-2 col-sm-12">
                                                <fieldset class="form-group text-center">
                                                    <button class="btn btn-outline-blue flip-horizontal" type="button" data-option="1">Flip Horizontal</button>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-2 col-sm-12">
                                                <fieldset class="form-group text-center">
                                                    <button class="btn btn-outline-pink flip-vertical" type="button" data-option="1">Flip Vertical</button>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-2 col-sm-12">
                                                <fieldset class="form-group text-center">
                                                    <button class="btn btn-outline-teal zoom-in" type="button">Zoom In</button>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <div class="col-md-4">
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control get-data">
                                                        <span class="input-group-append">
                      <button class="btn btn-outline-blue get-data-btn" type="button">Get Data</button>
                    </span>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-4">
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control get-image-data">
                                                        <span class="input-group-append">
                      <button class="btn btn-outline-pink get-image-data-btn" type="button">Get Image Data</button>
                    </span>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-4">
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control get-container-data">
                                                        <span class="input-group-append">
                      <button class="btn btn-outline-teal get-container-data-btn" type="button">Get Container Data</button>
                    </span>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control get-canvas-data">
                                                        <span class="input-group-append">
                      <button class="btn btn-outline-blue get-canvas-data-btn" type="button">Get Canvas Data</button>
                    </span>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control get-cropbox-data">
                                                        <span class="input-group-append">
                      <button class="btn btn-outline-teal get-cropbox-data-btn" type="button">Get Crop Box Data</button>
                    </span>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Basic Cropper -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Cropper</h4>
                                    <p class="font-small-3">This is the most basic example with cropper shown with overlay on the image.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <img class="basic-cropper" src="app-assets/img/gallery/1.jpg" alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- No Overlay -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">No Overlay</h4>
                                    <p class="font-small-3">This is the most basic example with cropper shown on the image but without overlay.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <img class="no-overlay" src="app-assets/img/gallery/5.jpg" alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- 16:9 Aspect Ratio -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">16:9 Aspect Ratio</h4>
                                    <p class="font-small-3">This example demonstrate the cropper ratio fixed to <code>16:9</code>. This must be
                                        set using the <code>aspectRatio</code> option.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <img class="aspect-ratio-16-9" src="app-assets/img/gallery/15.jpg" alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 4:3 Aspect Ratio -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">4:3 Aspect Ratio</h4>
                                    <p class="font-small-3">This example demonstrate the cropper ratio fixed to <code>4:3</code>. This must be
                                        set using the <code>aspectRatio</code> option.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <img class="aspect-ratio-4-3" src="app-assets/img/gallery/14.jpg" alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Fixed Crop Box -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Fixed Crop Box</h4>
                                    <p class="font-small-3">This example demonstrate the fixed cropper that you can not move but you can
                                        increase - decrease the size of the cropper by dragging.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <img class="fixed-crop-box" src="app-assets/img/gallery/3.jpg" alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Full Crop Box -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Fixed Size Crop Box</h4>
                                    <p class="font-small-3">This example demonstrate the fixed size of the cropper. You can move the crop box
                                        but can not increase or decrease the size of the cropper.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <img class="fixed-size-crop-box" src="app-assets/img/gallery/33.jpg" alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Disable Guides -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disable Guides</h4>
                                    <p class="font-small-3">This example demonstrate the guides being turned off.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <img class="disable-guides" src="app-assets/img/gallery/7.jpg" alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Disable Center Indicator -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disable Center Indicator</h4>
                                    <p class="font-small-3">This example demonstrate how to disable the center indicator while still showing
                                        the guides.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <img class="disable-center-indicator" src="app-assets/img/gallery/28.jpg" alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Disable Auto Crop -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disable Auto Crop</h4>
                                    <p class="font-small-3">This example demonstrate how to disable the autocrop feature. You need to set <code>autoCrop</code>
                                        option to <code>false</code> in order to disable.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <img class="disable-auto-crop" src="app-assets/img/gallery/15.jpg" alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Disable New Crop Box Creation -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disable New Crop Box Creation</h4>
                                    <p class="font-small-3">This example demonstrate how to restrict a user from creating a new cropbox and
                                        just allowing to work with pre-defined cropbox.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <img class="disable-new-crop-box" src="app-assets/img/gallery/17.jpg" alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Movable Image -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Movable Image</h4>
                                    <p class="font-small-3">This example demonstrate how to enable the image movement while keeping the cropbox
                                        fixed.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <img class="movable-image" src="app-assets/img/gallery/21.jpg" alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Zoomable Image -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Zoomable Image</h4>
                                    <p class="font-small-3">This example demonstrate how to enable zoom functionality on mousewheel scroll.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <img class="zoomable-image" src="app-assets/img/gallery/27.jpg" alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Minimum Crop Area -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Minimum Crop Area</h4>
                                    <p class="font-small-3">In this example we have set minimum crop area size to <code>100 X 100</code>. User
                                        can not make smaller cropbox than limit applied.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <img class="min-crop-area" src="app-assets/img/gallery/29.jpg" alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Disable background -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disable background</h4>
                                    <p class="font-small-3">This example demonstrate how to disable the default background. Set <code>background</code>
                                        option to <code>false</code> in order to disable default background.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <img class="disable-background" src="app-assets/img/gallery/28.jpg" alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Rotate Image -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Rotate Image</h4>
                                    <p class="font-small-3">This example demonstrate how to rotate the default image. Required to use <code>built</code>
                                        function to rotate image after setting all the options. </p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <img class="rotate-image" src="app-assets/img/gallery/33.jpg" alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Scale Image -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Scale Image</h4>
                                    <p class="font-small-3">This example demonstrate how to scale the default image. Required to use <code>built</code>
                                        function to scale image after setting all the options.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body overflow-hidden">
                                        <img class="scale-image" src="app-assets/img/gallery/32.jpg" alt="Picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Image cropper section end -->

            </div>
        </div>
        <!-- END : End Main Content-->

        <!-- BEGIN : Footer-->
        <footer class="footer footer-static footer-light">
            <p class="clearfix text-muted text-sm-center px-2"><span>Copyright  &copy; 2019 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved. </span></p>
        </footer>
        <!-- End : Footer-->

    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- START Notification Sidebar-->
<aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block"><a class="notification-sidebar-close"><i class="ft-x font-medium-3"></i></a>
    <div class="side-nav notification-sidebar-content">
        <div class="row">
            <div class="col-12 mt-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#activity-tab" aria-expanded="true" class="nav-link active">Activity</a></li>
                    <li class="nav-item"><a id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#chat-tab" aria-expanded="false" class="nav-link">Chat</a></li>
                    <li class="nav-item"><a id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#settings-tab" aria-expanded="false" class="nav-link">Settings</a></li>
                </ul>
                <div class="tab-content px-1 pt-1">
                    <div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1" class="tab-pane active">
                        <div id="activity" class="col-12 timeline-left">
                            <h6 class="mt-1 mb-3 text-bold-400">RECENT ACTIVITY</h6>
                            <div id="timeline" class="timeline-left timeline-wrapper">
                                <ul class="timeline">
                                    <li class="timeline-line"></li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-purple bg-lighten-1"><i class="ft-shopping-cart"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-purple-text medium-small">just now</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-info bg-lighten-1"><i class="fa fa-plane"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="cyan-text medium-small">Yesterday</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-success bg-lighten-1"><i class="ft-mic"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="green-text medium-small">5 Days Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-warning bg-lighten-1"><i class="ft-map-pin"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="amber-text medium-small">1 Week Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-red bg-lighten-1"><i class="ft-inbox"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-cyan bg-lighten-1"><i class="ft-mic"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="brown-text medium-small">1 Month Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-amber bg-lighten-1"><i class="ft-map-pin"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge"><span data-toggle="tooltip" data-placement="right" title="Portfolio project work" class="bg-grey bg-lighten-1"><i class="ft-inbox"></i></span></div>
                                        <div class="col s9 recent-activity-list-text"><a href="#" class="grey-text medium-small">1 Year Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="chat-tab" aria-labelledby="base-tab2" class="tab-pane">
                        <div id="chatapp" class="col-12">
                            <h6 class="mt-1 mb-3 text-bold-400">RECENT CHAT</h6>
                            <div class="collection border-none">
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-12.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Elizabeth Elliott</h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.00 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Thank you</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-6.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Mary Adams</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Hello Boo</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-11.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Caleb Richards</h4><span class="medium-small float-right blue-grey-text text-lighten-3">9.00 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Keny !</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-18.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">June Lane</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.14 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Ohh God</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-1.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Edward Fletcher</h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.15 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Love you</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-2.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Crystal Bates</h4><span class="medium-small float-right blue-grey-text text-lighten-3">8.00 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Can we</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-3.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Nathan Watts</h4><span class="medium-small float-right blue-grey-text text-lighten-3">9.53 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Great!</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-15.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Willard Wood</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.20 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Do it</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-19.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Ronnie Ellis</h4><span class="medium-small float-right blue-grey-text text-lighten-3">5.30 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Got that</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-14.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Gwendolyn Wood</h4><span class="medium-small float-right blue-grey-text text-lighten-3">4.34 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Like you</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-13.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Daniel Russell</h4><span class="medium-small float-right blue-grey-text text-lighten-3">12.00 AM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Thank you</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-22.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Sarah Graves</h4><span class="medium-small float-right blue-grey-text text-lighten-3">11.14 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Okay you</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-9.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Andrew Hoffman</h4><span class="medium-small float-right blue-grey-text text-lighten-3">7.30 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Can do</p>
                                    </div>
                                </div>
                                <div class="media mb-1"><a><img alt="96x96" src="app-assets/img/portrait/small/avatar-s-20.png" class="media-object d-flex mr-3 bg-primary height-50 rounded-circle"></a>
                                    <div class="media-body">
                                        <div class="clearfix">
                                            <h4 class="font-medium-1 primary mt-1 mb-0 mr-auto float-left">Camila Lynch</h4><span class="medium-small float-right blue-grey-text text-lighten-3">2.00 PM</span>
                                        </div>
                                        <p class="text-muted font-small-3">Leave it</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="settings-tab" aria-labelledby="base-tab3" class="tab-pane">
                        <div id="settings" class="col-12">
                            <h6 class="mt-1 mb-3 text-bold-400">GENERAL SETTINGS</h6>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Notifications</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="notifications1" checked="checked" type="checkbox" class="custom-control-input">
                                                    <label for="notifications1" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Use checkboxes when looking for yes or no answers.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="recent-activity1" checked="checked" type="checkbox" class="custom-control-input">
                                                    <label for="recent-activity1" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Notifications</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="notifications2" type="checkbox" class="custom-control-input">
                                                    <label for="notifications2" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Use checkboxes when looking for yes or no answers.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="recent-activity2" type="checkbox" class="custom-control-input">
                                                    <label for="recent-activity2" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show your emails</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="show-emails" type="checkbox" class="custom-control-input">
                                                    <label for="show-emails" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Use checkboxes when looking for yes or no answers.</p>
                                </li>
                                <li>
                                    <div class="togglebutton">
                                        <div class="switch"><span class="text-bold-500">Show Task statistics</span>
                                            <div class="float-right">
                                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                    <input id="show-stats" type="checkbox" class="custom-control-input">
                                                    <label for="show-stats" class="custom-control-label"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- END Notification Sidebar-->
@endsection
