@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!--Horizontal Timeline Starts-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="content-header">Horizontal Timeline</div>
                        <p class="content-sub-header">This horizontal timeline contain date based post timeline.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <section class="cd-horizontal-timeline">
                                <div class="timeline">
                                    <div class="events-wrapper">
                                        <div class="events">
                                            <ol>
                                                <li><a data-date="16/01/2014" class="selected">16 Jan</a></li>
                                                <li><a data-date="28/02/2014">28 Feb</a></li>
                                                <li><a data-date="20/04/2014">20 Mar</a></li>
                                                <li><a data-date="20/05/2014">20 May</a></li>
                                                <li><a data-date="09/07/2014">09 Jul</a></li>
                                                <li><a data-date="30/08/2014" class="mr-5">30 Aug</a></li>
                                                <li><a data-date="15/09/2014" class="ml-5">15 Sep</a></li>
                                                <li><a data-date="01/11/2014">01 Nov</a></li>
                                                <li><a data-date="10/12/2014">10 Dec</a></li>
                                                <li><a data-date="19/01/2015">29 Jan</a></li>
                                                <li><a data-date="03/03/2015">3 Mar</a></li>
                                            </ol>

                                            <span class="filling-line" aria-hidden="true"></span>
                                        </div>
                                        <!-- .events -->
                                    </div>
                                    <!-- .events-wrapper -->

                                    <ul class="cd-timeline-navigation">
                                        <li><a href="#0" class="prev inactive">Prev</a></li>
                                        <li><a href="#0" class="next">Next</a></li>
                                    </ul>
                                    <!-- .cd-timeline-navigation -->
                                </div>
                                <!-- .timeline -->

                                <div class="events-content">
                                    <ol>
                                        <li class="selected" data-date="16/01/2014">
                                            <h2 class="text-bold-500">Horizontal Timeline</h2>
                                            <h4 class="text-bold-500 mb-2">January 16th, 2014</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
                                                ipsa, quia velit nulla
                                                adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam
                                                molestias maxime
                                                non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                                temporibus dolores porro
                                                doloribus.
                                            </p>
                                        </li>

                                        <li data-date="28/02/2014">
                                            <h2 class="text-bold-500">Event title here</h2>
                                            <h4 class="text-bold-500 mb-2">February 28th, 2014</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
                                                ipsa, quia velit nulla
                                                adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam
                                                molestias maxime
                                                non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                                temporibus dolores porro
                                                doloribus.
                                            </p>
                                        </li>

                                        <li data-date="20/04/2014">
                                            <h2 class="text-bold-500">Event title here</h2>
                                            <h4 class="text-bold-500 mb-2">March 20th, 2014</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
                                                ipsa, quia velit nulla
                                                adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam
                                                molestias maxime
                                                non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                                temporibus dolores porro
                                                doloribus.
                                            </p>
                                        </li>

                                        <li data-date="20/05/2014">
                                            <h2 class="text-bold-500">Event title here</h2>
                                            <h4 class="text-bold-500 mb-2">May 20th, 2014</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
                                                ipsa, quia velit nulla
                                                adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam
                                                molestias maxime
                                                non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                                temporibus dolores porro
                                                doloribus.
                                            </p>
                                        </li>

                                        <li data-date="09/07/2014">
                                            <h2 class="text-bold-500">Event title here</h2>
                                            <h4 class="text-bold-500 mb-2">July 9th, 2014</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
                                                ipsa, quia velit nulla
                                                adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam
                                                molestias maxime
                                                non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                                temporibus dolores porro
                                                doloribus.
                                            </p>
                                        </li>

                                        <li data-date="30/08/2014">
                                            <h2 class="text-bold-500">Event title here</h2>
                                            <h4 class="text-bold-500 mb-2">August 30th, 2014</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
                                                ipsa, quia velit nulla
                                                adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam
                                                molestias maxime
                                                non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                                temporibus dolores porro
                                                doloribus.
                                            </p>
                                        </li>

                                        <li data-date="15/09/2014">
                                            <h2 class="text-bold-500">Event title here</h2>
                                            <h4 class="text-bold-500 mb-2">September 15th, 2014</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
                                                ipsa, quia velit nulla
                                                adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam
                                                molestias maxime
                                                non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                                temporibus dolores porro
                                                doloribus.
                                            </p>
                                        </li>

                                        <li data-date="01/11/2014">
                                            <h2 class="text-bold-500">Event title here</h2>
                                            <h4 class="text-bold-500 mb-2">November 1st, 2014</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
                                                ipsa, quia velit nulla
                                                adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam
                                                molestias maxime
                                                non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                                temporibus dolores porro
                                                doloribus.
                                            </p>
                                        </li>

                                        <li data-date="10/12/2014">
                                            <h2 class="text-bold-500">Event title here</h2>
                                            <h4 class="text-bold-500 mb-2">December 10th, 2014</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
                                                ipsa, quia velit nulla
                                                adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam
                                                molestias maxime
                                                non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                                temporibus dolores porro
                                                doloribus.
                                            </p>
                                        </li>

                                        <li data-date="19/01/2015">
                                            <h2 class="text-bold-500">Event title here</h2>
                                            <h4 class="text-bold-500 mb-2">January 19th, 2015</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
                                                ipsa, quia velit nulla
                                                adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam
                                                molestias maxime
                                                non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                                temporibus dolores porro
                                                doloribus.
                                            </p>
                                        </li>

                                        <li data-date="03/03/2015">
                                            <h2 class="text-bold-500">Event title here</h2>
                                            <h4 class="text-bold-500 mb-2">March 3rd, 2015</h4>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae
                                                ipsa, quia velit nulla
                                                adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam
                                                molestias maxime
                                                non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae,
                                                temporibus dolores porro
                                                doloribus.
                                            </p>
                                        </li>
                                    </ol>
                                </div>
                                <!-- .events-content -->
                            </section>
                        </div>
                    </div>
                </div>
                <!--Horizontal Timeline Starts-->

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
