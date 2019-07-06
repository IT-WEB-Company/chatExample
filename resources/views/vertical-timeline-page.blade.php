@extends('layouts.header')

@section('content')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!--Vertical Timeline Starts-->
                <section id="timeline" class="timeline-center timeline-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header">Vertical Timeline</div>
                            <p class="content-sub-header">This vertical timeline contain post with photos, videos, charts and map to make timeline more effective.</p>
                        </div>
                    </div>
                    <h3 class="page-title text-center">Timeline</h3>
                    <ul class="timeline">
                        <li class="timeline-line"></li>
                        <li class="timeline-group">
                            <a class="btn btn-raised btn-primary">
                                <i class="fa fa-calendar-o"></i> Today</a>
                        </li>
                    </ul>
                    <ul class="timeline">
                        <li class="timeline-line"></li>
                        <li class="timeline-item">
                            <div class="timeline-badge">
        <span class="bg-red bg-lighten-1" data-toggle="tooltip" data-placement="right" title="Portfolio project work">
          <i class="fa fa-plane"></i>
        </span>
                            </div>
                            <div class="timeline-card card border-grey border-lighten-2">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">
                                        <a>Portfolio project work</a>
                                    </h4>
                                    <div class="card-subtitle text-muted mt-0">
                                        <span class="font-small-3">5 hours ago</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <img class="img-fluid" src="app-assets/img/photos/01.jpg" alt="Timeline Image 1">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor vitae libero hendrerit auctor lacinia a ligula.
                                                Curabitur elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
                                            <div class="list-inline mb-1">
                <span class="pr-1">
                  <a class="primary">
                    <span class="fa fa-thumbs-o-up"></span> Like</a>
                </span>
                                                <span class="pr-1">
                  <a class="primary">
                    <span class="fa fa-commenting-o"></span> Comment</a>
                </span>
                                                <span>
                  <a class="primary">
                    <span class="fa fa-share-alt"></span> Share</a>
                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer px-0 py-0">
                                        <div class="card-body ">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a>
                    <span class="avatar avatar-online">
                      <img src="app-assets/img/portrait/small/avatar-s-1.png" class="rounded-circle" alt="avatar" width="50">
                    </span>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text-bold-600 mb-0">
                                                        <a>Jason Ansley</a>
                                                    </p>
                                                    <p class="m-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                    <div class="list-inline mb-1">
                    <span class="pr-1">
                      <a class="primary">
                        <span class="fa fa-thumbs-o-up"></span> Like</a>
                    </span>
                                                        <span class="pr-1">
                      <a class="primary">
                        <span class="fa fa-commenting-o"></span> Replay</a>
                    </span>
                                                    </div>
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a>
                        <span class="avatar avatar-online">
                          <img src="app-assets/img/portrait/small/avatar-s-18.png" class="rounded-circle" alt="avatar" width="50">
                        </span>
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text-bold-600 mb-0">
                                                                <a>Janice Johnston</a>
                                                            </p>
                                                            <p>Gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                                                            <div class="list-inline mb-1">
                        <span class="pr-1">
                          <a class="primary">
                            <span class="fa fa-thumbs-o-up"></span> Like</a>
                        </span>
                                                                <span class="pr-1">
                          <a class="primary">
                            <span class="fa fa-commenting-o"></span> Replay</a>
                        </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                                    <input type="text" class="form-control" placeholder="Write comments...">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-dashcube"></i>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item mt-5">
                            <div class="timeline-badge">
        <span class="avatar avatar-online" data-toggle="tooltip" data-placement="left" title="Eu pid nunc urna integer">
          <img src="app-assets/img/portrait/small/avatar-s-14.png" class="rounded-circle" alt="avatar" width="40">
        </span>
                            </div>
                            <div class="timeline-card card border-grey border-lighten-2">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">
                                        <a>Sofia Orav</a>
                                    </h4>
                                    <div class="card-subtitle text-muted mt-0">
                                        <span class="font-small-3">8 hours ago</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <iframe src="https://player.vimeo.com/video/118589137?title=0&byline=0"></iframe>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor vitae libero hendrerit auctor lacinia a ligula.
                                                Curabitur elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
                                            <p class="card-text">Eu pid nunc urna integer, sed, cras tortor scelerisque penatibus facilisis a pulvinar, rhoncus sagittis ut
                                                nunc elit! Sociis in et? Rhoncus, vel dignissim in scelerisque. Dolor lacus pulvinar adipiscing adipiscing
                                                montes! Elementum risus adipiscing non, cras scelerisque risus penatibus? Massa vut, habitasse, tincidunt!</p>
                                            <div class="list-inline mb-1">
                <span class="pr-1">
                  <a class="primary">
                    <span class="fa fa-thumbs-o-up"></span> Like</a>
                </span>
                                                <span class="pr-1">
                  <a class="primary">
                    <span class="fa fa-commenting-o"></span> Comment</a>
                </span>
                                                <span>
                  <a class="primary">
                    <span class="fa fa-share-alt"></span> Share</a>
                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer px-0 py-0">
                                        <div class="card-body ">
                                            <form>
                                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                                    <input type="text" class="form-control" placeholder="Write comments...">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-dashcube"></i>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- 2016 -->
                    <ul class="timeline">
                        <li class="timeline-line"></li>
                        <li class="timeline-group">
                            <a class="btn btn-raised btn-primary">
                                <i class="fa fa-calendar-o"></i> 2016</a>
                        </li>
                    </ul>
                    <ul class="timeline">

                        <li class="timeline-line"></li>
                        <!-- /.timeline-line -->

                        <li class="timeline-item">
                            <div class="timeline-badge">
        <span class="avatar avatar-online" data-toggle="tooltip" data-placement="right" title="Eu pid nunc urna integer">
          <img src="app-assets/img/portrait/small/avatar-s-5.png" class="rounded-circle" alt="avatar" width="40">
        </span>
                            </div>
                            <div class="timeline-card card card-inverse">
                                <img class="card-img img-fluid" src="app-assets/img/photos/02.jpg" alt="Card image">
                                <div class="card-img-overlay bg-overlay">
                                    <h4 class="card-title">Good Morning</h4>
                                    <p class="card-text">
                                        <small>26 Aug, 2016 at 2.00 A.M</small>
                                    </p>
                                </div>
                            </div>
                        </li>

                        <li class="timeline-item mt-5">
                            <div class="timeline-badge">
        <span class="bg-teal bg-lighten-1" data-toggle="tooltip" data-placement="left" title="Nullam facilisis fermentum">
          <i class="fa fa-check-square-o"></i>
        </span>
                            </div>
                            <div class="timeline-card card border-grey border-lighten-2">
                                <div class="card-header">
                                    <h4 class="mb-0 card-title">
                                        <a>Sofia Orav</a>
                                    </h4>
                                    <div class="card-subtitle text-muted mt-0">
                                        <span class="font-small-3">18 June, 2016 at 4.50 P.M</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor vitae libero hendrerit auctor lacinia a ligula.
                                                Curabitur elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
                                            <ul class="list-group icheck-task">
                                                <li class="list-group-item">
                                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                        <input type="checkbox" class="custom-control-input" checked id="1st-item">
                                                        <label class="custom-control-label" for="1st-item">Cras justo odio</label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                        <input type="checkbox" class="custom-control-input" checked id="2nd-item">
                                                        <label class="custom-control-label" for="2nd-item">checked Dapibus ac facilisis in</label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                        <input type="checkbox" class="custom-control-input" checked id="3rd-item">
                                                        <label class="custom-control-label" for="3rd-item">Morbi leo risus</label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                        <input type="checkbox" class="custom-control-input" checked id="4th-item">
                                                        <label class="custom-control-label" for="4th-item">disabled Porta ac consectetur ac</label>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                        <input type="checkbox" class="custom-control-input" checked id="5th-item">
                                                        <label class="custom-control-label" for="5th-item">Vestibulum at eros</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-footer px-0 py-0">
                                        <div class="card-body ">
                                            <form>
                                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                                    <input type="text" class="form-control" placeholder="Write comments...">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-dashcube"></i>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <!-- 2015 -->
                    <ul class="timeline">
                        <li class="timeline-line"></li>
                        <li class="timeline-group">
                            <a class="btn btn-raised btn-primary">
                                <i class="fa fa-calendar-o"></i> 2015</a>
                        </li>
                    </ul>
                    <ul class="timeline">
                        <li class="timeline-line"></li>
                        <!-- /.timeline-line -->
                        <li class="timeline-item block">
                            <div class="timeline-badge">
                                <a title="" data-context="inverse" data-container="body" class="border-silc" data-original-title="block highlight"></a>
                            </div>
                            <div class="timeline-card card border-grey border-lighten-2">
                                <div class="card-header">
                                    <div class="text-center">
                                        <p class="mt-1">
                                            <i class="fa fa-file-image-o font-medium-4"></i>
                                        </p>
                                        <h4>Media Gallery</h4>
                                        <p class="timeline-date">July 1, 2015</p>
                                        <p>Eu pid nunc urna integer, sed, cras tortor scelerisque penatibus facilisis a pulvinar, rhoncus sagittis ut nunc
                                            elit! Sociis in et?</p>
                                    </div>
                                </div>
                                <!-- Image grid -->
                                <div class="card-content">
                                    <div class="card-body my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                                        <div class="row">
                                            <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <a itemprop="contentUrl" data-size="480x360">
                                                    <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/1.jpg" itemprop="thumbnail" alt="Image description"
                                                    />
                                                </a>
                                            </figure>
                                            <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <a itemprop="contentUrl" data-size="480x360">
                                                    <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/2.jpg" itemprop="thumbnail" alt="Image description"
                                                    />
                                                </a>
                                            </figure>
                                            <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <a itemprop="contentUrl" data-size="480x360">
                                                    <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/3.jpg" itemprop="thumbnail" alt="Image description"
                                                    />
                                                </a>
                                            </figure>
                                            <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <a itemprop="contentUrl" data-size="480x360">
                                                    <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/4.jpg" itemprop="thumbnail" alt="Image description"
                                                    />
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="row">
                                            <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <a itemprop="contentUrl" data-size="480x360">
                                                    <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/5.jpg" itemprop="thumbnail" alt="Image description"
                                                    />
                                                </a>
                                            </figure>
                                            <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <a itemprop="contentUrl" data-size="480x360">
                                                    <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/6.jpg" itemprop="thumbnail" alt="Image description"
                                                    />
                                                </a>
                                            </figure>
                                            <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <a itemprop="contentUrl" data-size="480x360">
                                                    <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/7.jpg" itemprop="thumbnail" alt="Image description"
                                                    />
                                                </a>
                                            </figure>
                                            <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <a itemprop="contentUrl" data-size="480x360">
                                                    <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/8.jpg" itemprop="thumbnail" alt="Image description"
                                                    />
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="row">
                                            <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <a itemprop="contentUrl" data-size="480x360">
                                                    <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/9.jpg" itemprop="thumbnail" alt="Image description"
                                                    />
                                                </a>
                                            </figure>
                                            <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <a itemprop="contentUrl" data-size="480x360">
                                                    <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/10.jpg" itemprop="thumbnail" alt="Image description"
                                                    />
                                                </a>
                                            </figure>
                                            <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <a itemprop="contentUrl" data-size="480x360">
                                                    <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/11.jpg" itemprop="thumbnail" alt="Image description"
                                                    />
                                                </a>
                                            </figure>
                                            <figure class="col-md-3 col-sm-6 col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                                <a itemprop="contentUrl" data-size="480x360">
                                                    <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/12.jpg" itemprop="thumbnail" alt="Image description"
                                                    />
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!--/ Image grid -->
                                </div>
                                <!--/ PhotoSwipe -->
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-badge">
        <span class="bg-warning bg-darken-1" data-toggle="tooltip" data-placement="right" title="Application API Support">
          <i class="fa fa-life-ring"></i>
        </span>
                            </div>
                            <div class="timeline-card card border-grey border-lighten-2">
                                <div class="card-header">
                                    <div class="media">
                                        <div class="media-left">
                                            <a>
                <span class="avatar avatar-md avatar-busy">
                  <img src="app-assets/img/portrait/small/avatar-s-18.png" class="rounded-circle" alt="avatar" width="50">
                </span>
                                                <i></i>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="card-title mb-0">
                                                <a>Application API Support</a>
                                            </h4>
                                            <div class="card-subtitle text-muted mt-0">
                                                <span class="font-small-3">15 Oct, 2015 at 8.00 A.M</span>
                                                <span class="tag tag-pill tag-default tag-warning float-right">High</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <img class="img-fluid" src="app-assets/img/photos/03.jpg" alt="Timeline Image 1">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p class="card-text">Nullam facilisis fermentum aliquam. Suspendisse ornare dolor vitae libero hendrerit auctor lacinia a ligula.
                                                Curabitur elit tellus, porta ut orci sed, fermentum bibendum nisi.</p>
                                            <div class="list-inline mb-1">
                <span class="pr-1">
                  <a class="primary">
                    <span class="fa fa-commenting-o"></span> Comment</a>
                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer px-0 py-0">
                                        <div class="card-body">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a>
                    <span class="avatar avatar-online">
                      <img src="app-assets/img/portrait/small/avatar-s-4.png" class="rounded-circle" alt="avatar" width="50">
                    </span>
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text-bold-600 mb-0">
                                                        <a>Crystal Lawson</a>
                                                    </p>
                                                    <p class="m-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.</p>
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a>
                        <span class="avatar avatar-online">
                          <img src="app-assets/img/portrait/small/avatar-s-6.png" class="rounded-circle" alt="avatar" width="50">
                        </span>
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <p class="text-bold-600 mb-0">
                                                                <a>Rafila Găitan</a>
                                                            </p>
                                                            <p>Gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <form>
                                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                                    <input type="text" class="form-control" placeholder="Write comments...">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-dashcube"></i>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item mt-5">
                            <div class="timeline-badge">
        <span class="bg-amber bg-darken-1" data-toggle="tooltip" data-placement="left" title="Quote of the day">
          <i class="fa fa-smile-o"></i>
        </span>
                            </div>
                            <div class="timeline-card card border-grey border-lighten-2">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">
                                        <a>Quote of the day</a>
                                    </h4>
                                    <div class="card-subtitle text-muted mt-0">
                                        <span class="font-small-3">03 March, 2015 at 5 P.M</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <img class="img-fluid" src="app-assets/img/photos/04.jpg" alt="Timeline Image 1">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <p class="card-text">Eu pid nunc urna integer, sed, cras tortor scelerisque penatibus facilisis a pulvinar, rhoncus sagittis ut
                                                nunc elit! Sociis in et?</p>
                                            <div>Someone famous in
                                                <cite title="Source Title"> - Source Title</cite>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="timeline">
                        <li class="timeline-line"></li>
                        <li class="timeline-group">
                            <a class="btn btn-raised btn-primary">
                                <i class="fa fa-calendar-o"></i> Founded in 2013</a>
                        </li>
                    </ul>
                </section>
                <!--Vertical Timeline Ends-->
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
