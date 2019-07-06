@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!--List Group starts-->
                <section id="list">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header">List</div>
                            <p class="content-sub-header">List groups are a flexible and powerful component for displaying not only simple
                                lists of elements, but complex ones with custom content.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <!--Basic List Group Starts-->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic example</h4>
                                    <p>The most basic list group is simply an unordered list with list items, and the proper classes. </p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item">Cras justo odio</li>
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                                            <li class="list-group-item">Porta ac consectetur ac</li>
                                            <li class="list-group-item">Vestibulum at eros</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Basic List Group Ends-->

                        <!--List Group with badges Starts-->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Badges</h4>
                                    <p>Add the badges component to any list group item and it will automatically be positioned on the right.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <span class="badge badge-primary mr-2">7</span> Cras justo odio
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-danger mr-2">2</span> Dapibus ac facilisis in
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-success mr-2">1</span> Morbi leo risus
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-warning mr-2">4</span> Porta ac consectetur ac
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-info mr-2">8</span> Vestibulum at eros
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--List Group with badges Ends-->

                        <!--List Group with Linked items Starts-->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Linked items</h4>
                                    <p>Linkify list group items by using anchor tags instead of list items. No need for individual parents around
                                        each element.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <a href="#" class="list-group-item active">Cras justo odio</a>
                                            <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                                            <a href="#" class="list-group-item">Morbi leo risus</a>
                                            <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                                            <a href="#" class="list-group-item">Vestibulum at eros</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--List Group with Linked items Ends-->

                        <!--List Group with Button items Starts-->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Button items</h4>
                                    <p>List group items may be buttons instead of list items. No need for individual parents around each element.
                                        <b>Don't use the standard <code>.btn</code> classes here.</b></p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="list-group">
                                            <button type="button" class="list-group-item">Cras justo odio</button>
                                            <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
                                            <button type="button" class="list-group-item">Morbi leo risus</button>
                                            <button type="button" class="list-group-item">Porta ac consectetur ac</button>
                                            <button type="button" class="list-group-item">Vestibulum at eros</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--List Group with Button items Ends-->

                        <!--List Group with Disabled list items Starts-->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disabled items</h4>
                                    <p>Add <code>.disabled</code> to a <code>.list-group-item</code> to gray it out to appear disabled.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item disabled">Cras justo odio</li>
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                                            <li class="list-group-item">Porta ac consectetur ac</li>
                                            <li class="list-group-item">Vestibulum at eros</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--List Group with Disabled list items Ends-->

                        <!--Contextual classes Starts-->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Contextual classes</h4>
                                    <p>Use contextual classes to style list items, default or linked. Also includes <code>.active</code> state.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-primary">Porta ac consectetur ac</li>
                                            <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
                                            <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
                                            <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
                                            <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Contextual classes Ends-->
                    </div>
                    <div class="row match-height">
                        <!--Custom content Starts-->
                        <div class="col-sm-12 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Custom content</h4>
                                    <p>Add nearly any HTML within, even for linked list groups like the one below.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-action flex-column align-items-start active">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-3">List group item heading</h5>
                                                    <small>3 days ago</small>
                                                </div>
                                                <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                                                    blandit.</p>
                                                <small>Donec id elit non mi porta.</small>
                                            </li>
                                            <li class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-3">List group item heading</h5>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                                                    blandit.</p>
                                                <small class="text-muted">Donec id elit non mi porta.</small>
                                            </li>
                                            <li class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-3">List group item heading</h5>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                                                    blandit.</p>
                                                <small class="text-muted">Donec id elit non mi porta.</small>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Custom content Ends-->

                        <!--Contextual Action Starts-->
                        <div class="col-sm-12 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Contextual Action</h4>
                                    <p>Contextual classes also work with <code>.list-group-item-action</code>.Also supported is the <code>.active</code>
                                        state; apply it to indicate an active selection on a contextual list group item.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-action">Dapibus ac facilisis in</li>
                                            <li class="list-group-item list-group-item-action list-group-item-primary">This is a primary list group
                                                item</li>
                                            <li class="list-group-item list-group-item-action list-group-item-secondary">This is a secondary list
                                                group item</li>
                                            <li class="list-group-item list-group-item-action list-group-item-success">This is a success list group
                                                item</li>
                                            <li class="list-group-item list-group-item-action list-group-item-danger">This is a danger list group
                                                item</li>
                                            <li class="list-group-item list-group-item-action list-group-item-warning">This is a warning list group
                                                item</li>
                                            <li class="list-group-item list-group-item-action list-group-item-info">This is a info list group item</li>
                                            <li class="list-group-item list-group-item-action list-group-item-light">This is a light list group item</li>
                                            <li class="list-group-item list-group-item-action list-group-item-dark">This is a dark list group item</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Contextual Action Starts-->
                    </div>
                </section>
                <!--List Group starts-->

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
