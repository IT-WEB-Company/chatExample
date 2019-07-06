@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><div class="email-application">
                    <div class="content-overlay"></div>
                    <div class="email-app-sidebar float-left d-none d-xl-block">
                        <div class="email-app-sidebar-content">
                            <div class="email-app-menu">
                                <div class="form-group form-group-compose text-center mb-0">
                                    <button type="button" class="btn btn-raised btn-danger btn-block my-2">
                                        <i class="ft-mail"></i> Compose</button>
                                </div>
                                <h6 class="text-muted text-bold-500 mt-2 mb-1">Messages</h6>
                                <div class="list-group list-group-messages">
                                    <a class="list-group-item active border-0">
                                        <i class="ft-inbox mr-1"></i> Inbox
                                        <span class="badge badge-dark badge-pill float-right">8</span>
                                    </a>
                                    <a class="list-group-item list-group-item-action border-0">
                                        <i class="fa fa-paper-plane-o mr-1"></i> Sent</a>
                                    <a class="list-group-item list-group-item-action border-0">
                                        <i class="ft-file mr-1"></i> Draft</a>
                                    <a class="list-group-item list-group-item-action border-0">
                                        <i class="ft-star mr-1"></i> Starred
                                        <span class="badge badge-danger badge-pill float-right">3</span>
                                    </a>
                                    <a class="list-group-item list-group-item-action border-0">
                                        <i class="ft-trash-2 mr-1"></i> Trash</a>
                                </div>
                                <h6 class="text-muted text-bold-500 mt-2 mb-1">Labels</h6>
                                <div class="list-group list-group-messages border-0">
                                    <a class="list-group-item list-group-item-action border-0">
                                        <i class="ft-circle mr-1 warning"></i> Work
                                        <span class="badge badge-warning badge-pill float-right">5</span>
                                    </a>
                                    <a class="list-group-item list-group-item-action border-0">
                                        <i class="ft-circle mr-1 danger"></i> Family</a>
                                    <a class="list-group-item list-group-item-action border-0">
                                        <i class="ft-circle mr-1 primary"></i> Friends</a>
                                    <a class="list-group-item list-group-item-action border-0">
                                        <i class="ft-circle mr-1 success"></i> Private
                                        <span class="badge badge-success badge-pill float-right">3</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="email-app-content row">
                        <div class="email-search-box w-100 bg-white p-2">
                            <div class="media">
                                <span class="email-app-sidebar-toggle ft-align-justify font-large-1 mr-2 d-xl-none"></span>
                                <div class="media-body">
                                    <input type="text" class="form-control round" placeholder="search for emails">
                                </div>
                            </div>
                        </div>
                        <div class="email-app-content-area w-100">
                            <div class="email-app-list-mails p-0">
                                <div class="email-app-list">
                                    <div id="users-list">
                                        <div class="list-group">
                                            <div class="users-list-padding">
                                                <a class="list-group-item list-group-item-action border-0">
                                    <span class="media">
                                        <span class="avatar avatar-md mr-2">
                                            <span
                                                class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-info">T</span>
                                        </span>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading text-bold-400">Tonny Deep
                                                <span class="float-right">
                                                    <span class="font-small-2 primary">4:14 AM</span>
                                                </span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate text-bold-500">PixInvent, I
                                                fount you...</p>
                                            <p class="list-group-item-text">I would be good.
                                                <span class="float-right primary">
                                                    <span class="badge badge-danger mr-1">Family</span>
                                                    <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </span>
                                                </a>
                                                <a class="list-group-item list-group-item-action border-0">
                                    <span class="media">
                                        <span class="avatar avatar-md mr-2">
                                            <span
                                                class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-danger">L</span>
                                        </span>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading text-bold-400">Louis Welch
                                                <span class="float-right">
                                                    <i class="fa-paperclip fa"></i>
                                                    <span class="font-small-2 primary">2:15 AM</span>
                                                </span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate text-bold-500">Thanks, Let's do
                                                it.</p>
                                            <p class="list-group-item-text">Can we connect today...
                                                <span class="float-right primary">
                                                    <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </span>
                                                </a>
                                                <a class="list-group-item list-group-item-action border-0">
                                    <span class="media">
                                        <span class="avatar avatar-md mr-2">
                                            <span
                                                class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-warning">E</span>
                                        </span>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading text-bold-400">Envato Market
                                                <span class="float-right">
                                                    <span class="font-small-2 primary">11:18 PM</span>
                                                </span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate text-bold-500">You have new
                                                comment...</p>
                                            <p class="list-group-item-text">Hi Pixinvent...
                                                <span class="float-right primary">
                                                    <span class="badge badge-warning mr-1">Work</span>
                                                    <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </span>
                                                </a>
                                                <a
                                                    class="list-group-item list-group-item-action bg-blue-grey bg-lighten-5 border-right-primary border-right-2">
                                    <span class="media">
                                        <span class="avatar avatar-md mr-2">
                                            <img class="media-object rounded-circle"
                                                 src="app-assets/img/portrait/small/avatar-s-7.png"
                                                 alt="Generic placeholder image">
                                        </span>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading">Wayne Burton
                                                <span class="font-small-2 float-right">Today</span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate">Project ABC Status...</p>
                                            <p class="list-group-item-text">Andy, Lte's...
                                                <span class="float-right primary">
                                                    <span class="badge badge-success mr-1">Private</span>
                                                    <i class="font-medium-1 ft-star warning"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </span>
                                                </a>
                                                <a class="list-group-item list-group-item-action border-0">
                                    <span class="media">
                                        <span class="avatar avatar-md mr-2">
                                            <img class="media-object rounded-circle"
                                                 src="app-assets/img/portrait/small/avatar-s-5.png"
                                                 alt="Generic placeholder image">
                                        </span>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading">Sarah Montgomery
                                                <span class="font-small-2 float-right">Yesterday</span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate">Your New UI.</p>
                                            <p class="list-group-item-text text-truncate">Everything looks good.</p>
                                        </div>
                                    </span>
                                                </a>
                                                <a class="list-group-item list-group-item-action border-0">
                                    <span class="media">
                                        <span class="avatar avatar-md mr-2">
                                            <span
                                                class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-success">H</span>
                                        </span>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading">Heather Howell
                                                <span class="float-right">
                                                    <i class="fa-paperclip fa"></i>
                                                    <span class="font-small-2">15 July</span>
                                                </span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate">Thanks, Let's do it.</p>
                                            <p class="list-group-item-text">Can we connect today...
                                                <span class="float-right primary">
                                                    <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </span>
                                                </a>
                                                <a class="list-group-item list-group-item-action border-0">
                                    <span class="media">
                                        <span class="avatar avatar-md mr-2">
                                            <img class="media-object rounded-circle"
                                                 src="app-assets/img/portrait/small/avatar-s-8.png"
                                                 alt="Generic placeholder image">
                                            <i></i>
                                        </span>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading">Kelly Reyes
                                                <span class="font-small-2 float-right">12 July</span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate">I paid it, Thanks.</p>
                                            <p class="list-group-item-text">Check once...
                                                <span class="float-right primary">
                                                    <span class="badge badge-warning mr-1">Work</span>
                                                    <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </span>
                                                </a>
                                                <a class="list-group-item list-group-item-action border-0">
                                    <span class="media">
                                        <span class="avatar avatar-md mr-2">
                                            <span
                                                class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-warning">V</span>
                                        </span>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading">Vincent Nelson
                                                <span class="font-small-2 float-right">11 July</span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate">
                                                <i class="ft-check primary font-small-2"></i> Where are you John?</p>
                                            <p class="list-group-item-text">Party tonight ?
                                                <span class="float-right primary">
                                                    <span class="badge badge-primary mr-1">Friends</span>
                                                    <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </span>
                                                </a>
                                                <a class="list-group-item list-group-item-action border-0">
                                    <span class="media">
                                        <span class="avatar avatar-md mr-2">
                                            <span
                                                class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-info">E</span>
                                        </span>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading">Elizabeth Elliott
                                                <span class="font-small-2 float-right">8 July</span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate">Okay, I will call you.</p>
                                            <p class="list-group-item-text">Here they are work.
                                                <span class="float-right primary">
                                                    <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </span>
                                                </a>
                                                <a class="list-group-item list-group-item-action border-0">
                                    <span class="media">
                                        <span class="avatar avatar-md mr-2">
                                            <img class="media-object rounded-circle"
                                                 src="app-assets/img/portrait/small/avatar-s-6.png"
                                                 alt="Generic placeholder image">
                                        </span>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading">Sarah Montgomery
                                                <span class="font-small-2 float-right">Yesterday</span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate">Your New UI.</p>
                                            <p class="list-group-item-text text-truncate">Everything looks good.</p>
                                        </div>
                                    </span>
                                                </a>
                                                <a class="list-group-item list-group-item-action border-0">
                                    <span class="media">
                                        <span class="avatar avatar-md mr-2">
                                            <span
                                                class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-success">H</span>
                                        </span>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading">Heather Howell
                                                <span class="float-right">
                                                    <i class="fa-paperclip fa"></i>
                                                    <span class="font-small-2">15 July</span>
                                                </span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate">Thanks, Let's do it.</p>
                                            <p class="list-group-item-text">Can we connect today...
                                                <span class="float-right primary">
                                                    <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </span>
                                                </a>
                                                <a class="list-group-item list-group-item-action border-0">
                                    <span class="media">
                                        <span class="avatar avatar-md mr-2">
                                            <img class="media-object rounded-circle"
                                                 src="app-assets/img/portrait/small/avatar-s-10.png"
                                                 alt="Generic placeholder image">
                                            <i></i>
                                        </span>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading">Kelly Reyes
                                                <span class="font-small-2 float-right">12 July</span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate">I paid it, Thanks.</p>
                                            <p class="list-group-item-text">Check once...
                                                <span class="float-right primary">
                                                    <span class="badge badge-warning mr-1">Work</span>
                                                    <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </span>
                                                </a>
                                                <a class="list-group-item list-group-item-action border-0">
                                    <span class="media">
                                        <span class="avatar avatar-md mr-2">
                                            <span
                                                class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-warning">V</span>
                                        </span>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading">Vincent Nelson
                                                <span class="font-small-2 float-right">11 July</span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate">
                                                <i class="ft-check primary font-small-2"></i> Where are you John?</p>
                                            <p class="list-group-item-text">Party tonight ?
                                                <span class="float-right primary">
                                                    <span class="badge badge-primary mr-1">Friends</span>
                                                    <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </span>
                                                </a>
                                                <a class="list-group-item list-group-item-action border-0">
                                    <span class="media">
                                        <span class="avatar avatar-md mr-2">
                                            <span
                                                class="media-object rounded-circle text-circle d-flex mr-2 justify-content-center align-items-center bg-info">E</span>
                                        </span>
                                        <div class="media-body">
                                            <h6 class="list-group-item-heading">Elizabeth Elliott
                                                <span class="font-small-2 float-right">8 July</span>
                                            </h6>
                                            <p class="list-group-item-text text-truncate">Okay, I will call you.</p>
                                            <p class="list-group-item-text">Here they are work.
                                                <span class="float-right primary">
                                                    <i class="font-medium-1 ft-star blue-grey lighten-3"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="email-app-mail-content">
                                <div class="email-app-mail-content-detail">
                                    <div class="email-app-options card-body">
                                        <div class="row d-md-none">
                                            <button class="btn btn-raised btn-primary ml-2 back-to-inbox">
                                                <i class="fa fa-angle-left"></i> Back to inbox</button>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-12">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip"
                                                            data-placement="top" data-original-title="Replay">
                                                        <i class="fa fa-reply"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip"
                                                            data-placement="top" data-original-title="Replay All">
                                                        <i class="fa fa-reply-all"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip"
                                                            data-placement="top" data-original-title="Report SPAM">
                                                        <i class="ft-alert-octagon"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip"
                                                            data-placement="top" data-original-title="Delete">
                                                        <i class="ft-trash-2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12 text-right">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip"
                                                            data-placement="top" data-original-title="Previous">
                                                        <i class="fa fa-angle-left"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip"
                                                            data-placement="top" data-original-title="Next">
                                                        <i class="fa fa-angle-right"></i>
                                                    </button>
                                                </div>
                                                <div class="btn-group ml-1">
                                                    <div placement="bottom-right" class="d-inline-block">
                                                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">More</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Mark as unread</a>
                                                            <a class="dropdown-item" href="#">Mark as unimportant</a>
                                                            <a class="dropdown-item" href="#">Add star</a>
                                                            <a class="dropdown-item" href="#">Add to task</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Filter mail</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="email-app-title card-body">
                                        <h3 class="list-group-item-heading">Project ABC Status Report</h3>
                                        <p class="list-group-item-text">
                            <span class="primary">
                                <span class="badge badge-primary">Previous</span>
                                <i class="float-right font-medium-3 ft-star warning"></i>
                            </span>
                                        </p>
                                    </div>


                                    <div class="media-list">
                                        <div id="headingCollapse1" class="card-header p-0">
                                            <a data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1"
                                               class="collapsed email-app-sender list-group-item list-group-item-action border-0 bg-blue-grey bg-lighten-5">

                                <span class="media">
                                    <span class="avatar avatar-md mr-2">
                                        <img class="media-object rounded-circle width-50"
                                             src="app-assets/img/portrait/small/avatar-s-1.png"
                                             alt="Generic placeholder image">
                                    </span>
                                    <div class="media-body">
                                        <h6 class="list-group-item-heading">John Doe</h6>
                                        <p class="list-group-item-text">Can you please provide me ABC Status Report.
                                            <span class="float-right text muted">12 July</span>
                                        </p>
                                    </div>
                                </span>

                                            </a>
                                        </div>

                                        <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1"
                                             class="card-collapse collapse" aria-expanded="true">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <p>Hi Wayne,</p>
                                                    <p>Can you please provide me ABC Status Report.</p>
                                                    <p>Gmail Material Design Concept. Please check the full project on Behance. Hope
                                                        that will be
                                                        fine for you.</p>
                                                    <p>Thanks for your consideration !</p>
                                                    <p>Regards,
                                                        <br />John</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="headingCollapse2" class="card-header p-0">
                                            <a data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2"
                                               class="email-app-sender list-group-item list-group-item-action border-0">

                                                <div class="media">
                                    <span class="avatar avatar-md mr-2">
                                        <img class="media-object rounded-circle width-50"
                                             src="app-assets/img/portrait/small/avatar-s-7.png"
                                             alt="Generic placeholder image">
                                    </span>
                                                    <div class="media-body">
                                                        <h6 class="list-group-item-heading">Wayne Burton</h6>
                                                        <p class="list-group-item-text">to me
                                                            <span>Today</span>
                                                            <span class="float-right">
                                                <i class="fa fa-reply mr-1"></i>
                                                <i class="fa fa-arrow-right mr-1"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>
                                                        </p>
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                        <div id="collapse2" role="tabpanel" aria-labelledby="headingCollapse2" class="card-collapse"
                                             aria-expanded="false">
                                            <div class="card-content">
                                                <div class="email-app-text card-body">
                                                    <div class="email-app-message">
                                                        <p>Hi John,</p>
                                                        <p>Thanks for your feedback ! Here's a new layout for a new Apex Admin theme.
                                                        </p>
                                                        <p>We will start the new application development soon once this will be
                                                            completed, I will provide
                                                            you more details after this Saturday. Hope that will be fine for you.</p>
                                                        <p>Hope your like it, or feel free to comment, feedback or rebound !</p>
                                                        <p>Cheers~</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="email-app-text-action card-content">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
<!-- END Notification Sidebar-->
@endsection
