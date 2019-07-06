@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- Static Popovers start -->
                <section id="static-popovers">
                    <div class="row">
                        <div class="col-sm-12 mt-2">
                            <div class="content-header">Popover</div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Static demo</h4>
                                <p>Four options are available: top, right, bottom, and left aligned.</p>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-6 col-6 text-center">
                                            <h5 class="text-center">Basic Top Popover</h5>
                                            <div class="popover bs-popover-top show" style="display: block; position: relative; margin: 1rem auto; padding: 0; z-index: 100;">
                                                <div class="arrow" style="left: 50%;"></div>
                                                <div class="popover-header" style="max-width: none;">Popover on Top</div>
                                                <div class="popover-body">
                                                    <p>Ice cream tootsie roll tiramisu tootsie roll toffee dragée sugar plum cake. Liquorice jelly
                                                        jujubes.</p>
                                                </div>
                                            </div>
                                            <p class="text-center mt-1">Add <code>.popover-top</code> class for top popover along with <code>.popover</code>
                                                class.</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-6 text-center">
                                            <h5 class="text-center">Basic Right Popover</h5>
                                            <div class="popover bs-popover-right show" style="display: block; position: relative; margin: 1rem auto; padding: 0; z-index: 100;">
                                                <div class="arrow" style="top: 50%;"></div>
                                                <div class="popover-header" style="max-width: none;">Popover on Right</div>
                                                <div class="popover-body">
                                                    <p>Ice cream tootsie roll tiramisu tootsie roll toffee dragée sugar plum cake. Liquorice jelly
                                                        jujubes.</p>
                                                </div>
                                            </div>
                                            <p class="text-center mt-1">Add <code>.popover-right</code> class for right popover along with <code>.popover</code>
                                                class.</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-6 text-center">
                                            <h5 class="text-center">Basic Bottom Popover</h5>
                                            <div class="popover bs-popover-bottom show" style="display: block; position: relative; margin: 1rem auto; padding: 0; z-index: 100;">
                                                <div class="arrow" style="left: 48%;"></div>
                                                <div class="popover-header" style="max-width: none;">Popover on Bottom</div>
                                                <div class="popover-body">
                                                    <p>Ice cream tootsie roll tiramisu tootsie roll toffee dragée sugar plum cake. Liquorice jelly
                                                        jujubes.</p>
                                                </div>
                                            </div>
                                            <p class="text-center mt-1">Add <code>.popover-bottom</code> class for bottom popover along with <code>.popover</code>
                                                class.</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-6 text-center">
                                            <h5 class="text-center">Basic Left Popover</h5>
                                            <div class="popover bs-popover-left show" style="display: block; position: relative; margin: 1rem auto; padding: 0; z-index: 100;">
                                                <div class="arrow" style="top: 50%;"></div>
                                                <div class="popover-header" style="max-width: none;">Popover on Left</div>
                                                <div class="popover-body">
                                                    <p>Ice cream tootsie roll tiramisu tootsie roll toffee dragée sugar plum cake. Liquorice jelly
                                                        jujubes.</p>
                                                </div>
                                            </div>
                                            <p class="mt-1 text-center">Add <code>.popover-left</code> class for left popover along with <code>.popover</code>
                                                class.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Static Popovers end -->

                <!-- Popover Positions start -->
                <section id="popover-positions">
                    <div class="row ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Popover Positions</h4>
                                <p>Four options are available: top, right, bottom, and left aligned.</p>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Basic Top Popover</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-secondary" data-toggle="popover" data-placement="top"
                                                        data-container="body" data-original-title="Popover on top" data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.">
                                                    Popover on top
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">Add <code>data-toggle="popover"</code> &amp; <code>data-placement="top"</code>
                                                to add top popover.</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Basic Right Popover</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-secondary" data-toggle="popover" data-placement="right"
                                                        data-container="body" data-original-title="Popover on right" data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.">
                                                    Popover on right
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">Add <code>data-toggle="popover"</code> &amp; <code>data-placement="right"</code>
                                                to add right popover.</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Basic Bottom Popover</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-secondary" data-toggle="popover" data-placement="bottom"
                                                        data-container="body" data-original-title="Popover on bottom" data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.">
                                                    Popover on bottom
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">Add <code>data-toggle="popover"</code> &amp; <code>data-placement="bottom"</code>
                                                to add bottom popover.</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Basic Left Popover</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-secondary" data-toggle="popover" data-placement="left"
                                                        data-container="body" data-original-title="Popover on left" data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie.">
                                                    Popover on left
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">Add <code>data-toggle="popover"</code> &amp; <code>data-placement="left"</code>
                                                to add left popover.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Popover Positions end -->

                <!-- Popover Triggers start -->
                <section id="popover-triggers">
                    <div class="row ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Popover Triggers</h4>
                                <p>Popover is triggered using - click | hover | focus | manual options. You may pass multiple triggers;
                                    separate them with a space. "manual" cannot be combined with any other trigger.</p>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Hover</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-info" data-toggle="popover" data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                                                        data-trigger="hover" data-original-title="Hover Triggered">
                                                    On Hover Trigger
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">Use <code>data-trigger="hover"</code> for hover trigger.</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Click</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-info" data-toggle="popover" data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                                                        data-original-title="Click Triggered" data-trigger="click" data-placement="bottom">
                                                    On Click Trigger
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">Use <code>data-trigger="click"</code> for click trigger. This is a default
                                                trigger.</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Focus</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-info" data-toggle="popover" data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                                                        data-original-title="Focus Triggered" data-trigger="focus">
                                                    On Focus Trigger
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">Use <code>data-trigger="focus"</code> for focus trigger.</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Manual</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-info manual" data-toggle="popover" data-placement="left"
                                                        data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                                                        data-original-title="Manual Triggered" data-trigger="manual">
                                                    On Manual Trigger
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">Use <code>data-trigger="manual"</code> for manual trigger. You can do
                                                show/hide using js</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Popover Triggers end -->

                <!-- Popover Options start -->
                <section id="popover-options">
                    <div class="row ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Popover Options</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Disabled Animaition</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-warning" data-toggle="popover" data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                                                        data-original-title="Without Fade Animation" data-animation="false" data-placement="top">
                                                    No animation
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">Use <code>data-animation="false"</code> to remove fade animation. Default is
                                                true.</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Delay Show/Hide</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-warning delay" data-toggle="popover" data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
                                                        data-original-title="Click Triggered" data-delay="500" data-placement="left">
                                                    Delay Popover
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">Delay showing and hiding the popover (<code>ms</code>) - does not apply to
                                                manual trigger type.</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Supports HTML</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-warning" data-toggle="popover" data-content="Tart macaroon marzipan I love soufflé <h6>apple pie</h6> wafer. <b>Chocolate</b> bar jelly caramels jujubes chocolate cake gummies."
                                                        data-original-title="<b>This</b> is <i>HTML</i> <u>popover</u>" data-html="true" data-placement="bottom">
                                                    HTML Popover
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">Use <code>data-html="true"</code> for HTML supported trigger.</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Popover Template</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-warning template" data-toggle="popover" data-content="<div class='popover' role='popover'><div class='arrow'></div><div class='popover-header'></div><div class='popover-body'></div></div>"
                                                        data-original-title="Default Template Structure" data-trigger="click" data-placement="left">
                                                    Popover Template
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">Base HTML to use when creating the popover. The popover's title will be
                                                injected into the <code>.popover-inner</code>. <code>.arrow</code> will become the popover's arrow.The
                                                outermost wrapper element should have the <code>.popover</code> class.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Popover Options end -->

                <!-- Popover Methods start -->
                <section id="popover-methods">
                    <div class="row ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Popover Methods</h4>
                                <p>This is considered a “manual” triggering of the popover.Popovers whose both title and content are
                                    zero-length are never displayed.</p>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Show</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-danger" id="show-method" data-popup="popover" data-placement="top"
                                                        data-original-title="Show Method Popover" data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake."
                                                        data-trigger="manual">
                                                    Show Method <i class="fa fa-play-circle ml-1"></i>
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">Reveals an element’s popover. Returns to the caller before the popover has
                                                actually been shown.(i.e. before the <code>shown.bs.popover</code> event occurs)</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Hide</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-danger" id="hide-method" data-popup="popover" data-placement="left"
                                                        data-original-title="Hide Method Popover" data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake."
                                                        data-trigger="manual">
                                                    Hide Method <i class="fa fa-play-circle ml-1"></i>
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">Hides an element’s popover. Returns to the caller before the popover has
                                                actually been hidden (i.e. before the <code>hidden.bs.popover</code> event occurs).</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Toggle</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-danger" id="toggle-method" data-popup="popover"
                                                        data-original-title="Toggle Method Popover" data-placement="top" data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake."
                                                        data-trigger="manual">
                                                    Toggle Method <i class="fa fa-play-circle ml-1"></i>
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">Toggles an element’s popover. Returns to the caller before the popover has
                                                actually been shown or hidden (i.e. before the <code>shown.bs.popover</code> or <code>hidden.bs.popover</code>
                                                event occurs).</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Dispose</h5>
                                            <div class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger" data-toggle="popover" data-original-title="Dispose Method Popover"
                                                            data-placement="left" data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake."
                                                            data-trigger="click" id="dispose-method">
                                                        Dispose
                                                    </button>
                                                    <button type="button" class="btn btn-danger" id="dispose">
                                                        <i class="fa fa-play-circle"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="text-center mt-1">Hides and destroys an element’s popover. Popovers that use delegation cannot
                                                be individually destroyed on descendant trigger elements.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Popover Methods end -->

                <!-- Popover Events start -->
                <section id="popover-events">
                    <div class="row ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Popover Events</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Show Event</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-success" id="show-popover">
                                                    Show Event Popover
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">This event fires immediately when the <code>show</code> instance method is
                                                called.</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Shown Event</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-success" id="shown-popover">
                                                    Shown Event Popover
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">This event is fired when the popover has been made visible to the user (will
                                                wait for CSS transitions to complete).</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Hide Event</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-success" id="hide-popover">
                                                    Hide Event Popover
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">This event is fired immediately when the <code>hide</code> instance method
                                                has been called.</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 text-center">
                                            <h5 class="text-center">Hidden Event</h5>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-success" id="hidden-popover">
                                                    Hidden Event Popover
                                                </button>
                                            </div>
                                            <p class="text-center mt-1">This event is fired when the popover has finished being hidden from the user
                                                (will wait for CSS transitions to complete).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Popover Events end -->

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
