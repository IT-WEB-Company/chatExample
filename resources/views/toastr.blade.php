@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!--Toastr Starts-->
                <section id="toastr">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Toastr</div>
                            <p class="content-sub-header">By default, the toastr will show up at top right corner of the page view, and
                                will automatically dismiss in 3
                                seconds. You can configure the toasts using ToastOptions class.</p>
                        </div>
                    </div>

                    <!-- Types section start -->
                    <section id="types">
                        <div class="row">
                            <div class="col-12 mt-3 mb-1">
                                <div class="content-header">Types</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row mt-1">
                                        <div class="col-md-6 col-sm-12">
                                            <button type="button" class="btn btn-lg btn-block btn-outline-success mb-2"
                                                    id="type-success">Success</button>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <button type="button" class="btn btn-lg btn-block btn-outline-info mb-2"
                                                    id="type-info">Info</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <button type="button" class="btn btn-lg btn-block btn-outline-warning mb-2"
                                                    id="type-warning">Warning</button>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <button type="button" class="btn btn-lg btn-block btn-outline-danger mb-2"
                                                    id="type-error">Error</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- // Types section end -->

                    <!-- Position section start -->
                    <section id="position">
                        <div class="row">
                            <div class="col-12 mt-3 mb-1">
                                <div class="content-header">Position</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row mt-1">
                                        <div class="col-md-6 col-sm-12">
                                            <h5>Top Positions</h5>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="position-top-left">Top Left</button>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="position-top-center">Top Center</button>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="position-top-right">Top Right</button>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="position-top-full">Top Full Width</button>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <h5>Bottom Positions</h5>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="position-bottom-left">Bottom Left</button>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="position-bottom-center">Bottom Center</button>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="position-bottom-right">Bottom Right</button>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="position-bottom-full">Bottom Full Width</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- // Position section end -->

                    <!-- Options section start -->
                    <section id="options">
                        <div class="row">
                            <div class="col-12 mt-3 mb-1">
                                <div class="content-header">Options</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row mt-1">
                                        <div class="col-md-3 col-sm-12">
                                            <h5>Text Notifications</h5>
                                            <p>This notification just includes text.</p>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="text-notification">Show Toast</button>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <h5>Close Button</h5>
                                            <p>Close this notification clicking on close button.</p>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="close-button">Show Toast</button>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <h5>Progress Bar</h5>
                                            <p>Visually indicate how long before a toast expires.</p>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="progress-bar">Show Toast</button>
                                        </div>
                                        <div class="col-md-3 col-sm-12">
                                            <h5>Clear Toast</h5>
                                            <p>Add button to force clearing a toast, ignoring focus.</p>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="clear-toast-btn">Show Toast</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- // Options section end -->

                    <!-- Clear toasts section start -->
                    <section id="clear-toasts">
                        <div class="row">
                            <div class="col-12 mt-3 mb-1">
                                <div class="content-header">Clear Toasts</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row mt-1">
                                        <div class="col-md-6 col-sm-12">
                                            <h5>Remove</h5>
                                            <p>Immediately remove current toasts without using animation.</p>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="show-remove-toast">Show Toast</button>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="remove-toast">Remove Toast</button>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <h5>Clear</h5>
                                            <p>Remove current toasts using animation.</p>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="show-clear-toast">Show Toast</button>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="clear-toast">Clear Toast</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- // Clear toasts section end -->

                    <!-- Duration & Timeout section start -->
                    <section id="duration-timeout">
                        <div class="row">
                            <div class="col-12 mt-3 mb-1">
                                <div class="content-header">Duration & Timeout</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row mt-1">
                                        <div class="col-md-6 col-sm-12">
                                            <h5>Show .5s</h5>
                                            <p>You can define via
                                                <code>showDuration</code> what amount of time will it take to show a message.</p>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="fast-duration">Show Toast</button>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <h5>Hide 3s</h5>
                                            <p>You can define via
                                                <code>hideDuration</code> what amount of time will it take to hide a message.</p>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="slow-duration">Show Toast</button>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <h5>Timeout 5s</h5>
                                            <p>You can define via
                                                <code>timeout</code> for what amount of time in milliseconds a message is visible.</p>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="timeout">Show Toast</button>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <h5>Sticky</h5>
                                            <p>You can also create a sticky message by setting the
                                                <code>timeout</code> to
                                                <code>0</code>.</p>
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2" id="sticky">Show
                                                Toast</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- // Duration & Timeout section end -->

                    <!-- Animation section start -->
                    <section id="animation">
                        <div class="row">
                            <div class="col-12 mt-3 mb-1">
                                <div class="content-header">Show / Hide Animation</div>
                                <p>Use the jQuery
                                    <code>show/hide</code> method of your choice. These default to
                                    <code>fadeIn/fadeOut</code>. The methods
                                    <code>fadeIn/fadeOut</code>,
                                    <code>slideDown/slideUp</code>, and
                                    <code>show/hide</code> are built into jQuery.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row mt-1">
                                        <div class="col-md-6 col-sm-12">
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="slide-toast">slideDown - slideUp</button>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2"
                                                    id="fade-toast">fadeIn - fadeOut</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- // Animation section end -->

                </section>
                <!--Toastr Ends-->
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
