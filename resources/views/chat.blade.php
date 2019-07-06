@extends('layouts.header')

@section('content')





    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><div class="chat-application">
                    <div class="content-overlay"></div>
                    <div class="chat-sidebar float-left d-none d-sm-none d-md-block d-lg-block">
                        <div class="chat-sidebar-content">
                            <div class="chat-fixed-search p-2">
                                <form>
                                    <div class="position-relative has-icon-left">
                                        <input class="form-control" id="timesheetinput1" name="employeename" type="text">
                                        <div class="form-control-position">
                                            <i class="ft-user"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="users-list" class="list-group position-relative">
                                <div class="users-list-padding">
                                    <a class="list-group-item bg-blue-grey bg-lighten-5 border-right-primary border-right-2">
            <span class="media">
              <span class="avatar avatar-md avatar-online">
                <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-3.png"
                     alt="Generic placeholder image">
                <i></i>
              </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Elizabeth Elliott
                  <span class="font-small-3 float-right primary">4:14 AM</span>
                </h6>
                <p class="list-group-item-text text-muted">
                  <i class="ft-check primary font-small-2"></i> Okay
                  <span class="float-right primary">
                    <i class="font-medium-1 icon-pin blue-grey lighten-3"></i>
                  </span>
                </p>
              </div>
            </span>
                                    </a>
                                    <a class="list-group-item border-0">
            <span class="media">
              <span class="avatar avatar-md avatar-busy">
                <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-7.png"
                     alt="Generic placeholder image">
                <i></i>
              </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Kristopher Candy
                  <span class="font-small-3 float-right primary">9:04 PM</span>
                </h6>
                <p class="list-group-item-text text-muted">
                  <i class="ft-check primary font-small-2"></i> Thank you
                  <span class="float-right
                        primary">
                    <span class="badge badge-pill badge-primary">12</span>
                  </span>
                </p>
              </div>
            </span>
                                    </a>
                                    <a class="list-group-item border-0">
            <span class="media">
              <span class="avatar avatar-md avatar-away">
                <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-8.png"
                     alt="Generic placeholder image">
                <i></i>
              </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Sarah Woods
                  <span class="font-small-3 float-right primary">2:14 AM</span>
                </h6>
                <p class="list-group-item-text text-muted">
                  <i class="ft-check font-small-2"></i> Hello krish!
                  <span class="float-right primary">
                    <i class="font-medium-1 icon-volume-off blue-grey lighten-3 mr-1"></i>
                    <span class="badge badge-pill badge-primary">3</span>
                  </span>
                </p>
              </div>
            </span>
                                    </a>
                                    <a class="list-group-item border-0">
            <span class="media">
              <span class="avatar avatar-md avatar-away">
                <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-5.png"
                     alt="Generic placeholder image">
                <i></i>
              </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Bruce Reid
                  <span class="font-small-3 float-right primary">Yesterday</span>
                </h6>
                <p class="list-group-item-text text-muted">
                  <i class="ft-check font-small-2"></i> Will connect you</p>
              </div>
            </span>
                                    </a>
                                    <a class="list-group-item border-0">
            <span class="media">
              <span class="avatar avatar-md avatar-online">
                <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-9.png"
                     alt="Generic placeholder image">
                <i></i>
              </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Heather Howell
                  <span class="font-small-3 float-right primary">Friday</span>
                </h6>
                <p class="list-group-item-text text-muted">
                  <i class="ft-check font-small-2"></i> Thank you
                  <span class="float-right primary">
                    <span class="badge badge-pill badge-primary">4</span>
                  </span>
                </p>
              </div>
            </span>
                                    </a>
                                    <a class="list-group-item border-0">
            <span class="media">
              <span class="avatar avatar-md avatar-busy">
                <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-4.png"
                     alt="Generic placeholder image">
                <i></i>
              </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Kelly Reyes
                  <span class="font-small-3 float-right primary">Thrusday</span>
                </h6>
                <p class="list-group-item-text text-muted">
                  <i class="ft-check font-small-2"></i> I love you </p>
              </div>
            </span>
                                    </a>
                                    <a class="list-group-item border-0">
            <span class="media">
              <span class="avatar avatar-md avatar-online">
                <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="app-assets/img/portrait/small/avatar-s-14.png"
                     alt="Generic placeholder image">
                <i></i>
              </span>
              <div class="media-body">
                <h6 class="list-group-item-heading">Vincent Nelson</h6>
                <p class="list-group-item-text text-muted">
                  <i class="ft-check primary font-small-2"></i> Who you are?</p>
              </div>
            </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-name p-2 bg-white">
                        <div class="media">
                            <span class="chat-app-sidebar-toggle ft-align-justify font-large-1 mr-2 d-none d-block d-sm-block d-md-none"></span>
                            <div class="media-body">
                                <img src="app-assets/img/portrait/small/avatar-s-3.png" width="37" class="rounded-circle mr-1" alt="avatar" />
                                <span>Elizabeth Elliott</span>
                                <i class="ft-more-vertical float-right mt-1 dropdown-toggle" id="chatOptions" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false"></i>
                                <div class="dropdown-menu" aria-labelledby="chatOptions">
                                    <a href="#" class="dropdown-item">View Profile</a>
                                    <a href="#" class="dropdown-item">Mute Notification</a>
                                    <a href="#" class="dropdown-item">Clear Chat</a>
                                    <a href="#" class="dropdown-item">Add Shortcut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="chat-app-window">
                        <div class="badge badge-dark mb-1">Chat History</div>
                        <div class="chats">
                            <div class="chats">
                                <div class="chat">
                                    <div class="chat-avatar">
                                        <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                            <img src="app-assets/img/portrait/small/avatar-s-1.png" class="width-50 rounded-circle" alt="avatar" />
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>How can we help? We're here for you!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat chat-left">
                                    <div class="chat-avatar">
                                        <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                                            <img src="app-assets/img/portrait/small/avatar-s-7.png" class="width-50 rounded-circle" alt="avatar" />
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>Hey John, I am looking for the best admin template.</p>
                                            <p>Could you please help me to find it out?</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>It should be Bootstrap 4 compatible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat">
                                    <div class="chat-avatar">
                                        <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                            <img src="app-assets/img/portrait/small/avatar-s-1.png" class="width-50 rounded-circle" alt="avatar" />
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>Absolutely!</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>Apex admin is the responsive bootstrap 4 admin template.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="time">1 hours ago</p>
                                <div class="chat chat-left">
                                    <div class="chat-avatar">
                                        <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                                            <img src="app-assets/img/portrait/small/avatar-s-7.png" class="width-50 rounded-circle" alt="avatar" />
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>Looks clean and fresh UI.</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>It's perfect for my next project.</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>How can I purchase it?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat">
                                    <div class="chat-avatar">
                                        <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                            <img src="app-assets/img/portrait/small/avatar-s-1.png" class="width-50 rounded-circle" alt="avatar" />
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>Thanks, from ThemeForest.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat chat-left">
                                    <div class="chat-avatar">
                                        <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                                            <img src="app-assets/img/portrait/small/avatar-s-7.png" class="width-50 rounded-circle" alt="avatar" />
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>I will purchase it for sure.</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>Thanks.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat">
                                    <div class="chat-avatar">
                                        <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                            <img src="app-assets/img/portrait/small/avatar-s-1.png" class="width-50 rounded-circle" alt="avatar" />
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>Great, Feel free to get in touch on</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>https://pixinvent.ticksy.com/</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="chat-app-form bg-blue-grey bg-lighten-5">
                        <form class="chat-app-input row mt-2">
                            <fieldset class="form-group position-relative has-icon-left col-lg-10 col-8 m-0 px-3">
                                <div class="form-control-position">
                                    <i class="icon-emoticon-smile"></i>
                                </div>
                                <input type="text" class="form-control" id="iconLeft4" placeholder="Type your message">
                                <div class="form-control-position control-position-right">
                                    <i class="ft-image mr-1"></i>
                                </div>
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left col-lg-2 col-4 m-0">
                                <button type="button" class="btn btn-raised btn-primary px-4">
                                    <i class="fa fa-paper-plane-o d-block d-xl-inline-block d-lg-none p-0"></i>
                                    <span class="d-none d-lg-inline-block">Send</span>
                                </button>
                            </fieldset>
                        </form>
                    </section>
                </div>

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



@endsection
