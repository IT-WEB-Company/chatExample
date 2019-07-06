@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- Pick-A-Date Picker start -->
                <section id="pick-a-date">
                    <div class="row">
                        <div class="col-sm-12 mt-2">
                            <div class="content-header">Date Time Picker</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pick-A-Date Picker</h4>
                            <p>Pickadate.js is a mobile-friendly, responsive, and lightweight jQuery date &amp; time input picker.</p>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Basic Pick-a-date</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                    </div>
                                                    <input type='text' class="form-control pickadate" placeholder="Basic Pick-a-date" />
                                                </div>
                                                <small class="text-muted">Use <code>.pickadate</code> class for basic Pick-A-Date Picker. </small>
                                            </div>
                                            <div class="form-group">
                                                <label>Pick-a-date with short string</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                    </div>
                                                    <input type='text' class="form-control pickadate-short-string" placeholder="String Short of Month &amp; Week" />
                                                </div>
                                                <small class="text-muted">Use <code>.pickadate-short-string</code> class for short Month &amp; Week
                                                    String. </small>
                                            </div>
                                            <div class="form-group">
                                                <label>Select Year</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                    </div>
                                                    <input type='text' class="form-control pickadate-select-year" placeholder="Select Year" />
                                                </div>
                                                <small class="text-muted">Use <code>.pickadate-select-year</code> class to allow user to select year.
                                                </small>
                                            </div>
                                            <div class="form-group">
                                                <label>Change First Weekday</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                    </div>
                                                    <input type='text' class="form-control pickadate-firstday" placeholder="First Weekday to Monday" />
                                                </div>
                                                <small class="text-muted">Use <code>.pickadate-firstday</code> class to change first weekday to Monday.
                                                </small>
                                            </div>
                                            <div class="form-group">
                                                <label>Change/Hide Buttons</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                    </div>
                                                    <input type='text' class="form-control pickadate-buttons" placeholder="Hide/Change Buttons" />
                                                </div>
                                                <small class="text-muted">Use <code>.pickadate-buttons</code> class to change/hide buttons. </small>
                                            </div>
                                            <div class="form-group">
                                                <label>Date Limits</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                    </div>
                                                    <input type='text' class="form-control pickadate-limits" placeholder="Date Limits" />
                                                </div>
                                                <small class="text-muted">Use <code>.pickadate-limits</code> class to give selection from range of some
                                                    dates. </small>
                                            </div>
                                            <div class="form-group">
                                                <label>Change Formats</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                    </div>
                                                    <input type='text' class="form-control pickadate-format" placeholder="Change Formats" />
                                                </div>
                                                <small class="text-muted">Use <code>.pickadate-format</code> class to change date display formats.
                                                </small>
                                            </div>
                                            <div class="form-group">
                                                <label>Change Arrows</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                    </div>
                                                    <input type='text' class="form-control pickadate-arrow" placeholder="Change Formats" />
                                                </div>
                                                <small class="text-muted">Use <code>.pickadate-arrow</code> class to change date display formats.
                                                </small>
                                            </div>
                                            <div class="form-group">
                                                <label>Picker Translation</label>
                                                <div class="input-group">
                                                    <input type='text' class="form-control pickadate-translations" placeholder="In Another Language" />
                                                    <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                    </div>
                                                </div>
                                                <small class="text-muted">Use <code>.pickadate-translations</code> class for language translation.</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Disable days of the week</label>
                                                <div class="input-group">
                                                    <input type='text' class="form-control pickadate-disable-weekday" placeholder="Disable days of the week" />
                                                    <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                    </div>
                                                </div>
                                                <small class="text-muted">Disable certain days of the week, such as all Saturdays (7th day of week) and
                                                    Sundays (1st day of week), by passing an integer between 1 and 7</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Disable arbitrary dates</label>
                                                <div class="input-group">
                                                    <input type='text' class="form-control pickadate-disable-dates" placeholder="Disable Dates" />
                                                    <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                    </div>
                                                </div>
                                                <small class="text-muted">Pass an array of arbitrary dates (each formatted as [ yyyy, mm, dd ]) to
                                                    disable them..</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Month &amp; Year Selectors</label>
                                                <div class="input-group">
                                                    <input type='text' class="form-control pickadate-selectors" placeholder="Month &amp; Year Selector" />
                                                    <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                    </div>
                                                </div>
                                                <small class="text-muted">Use <code>.pickadate-selectors</code> class to set month &amp; year
                                                    selectable.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Month &amp; Year Dropdown</label>
                                                <div class="input-group">
                                                    <input type='text' class="form-control pickadate-dropdown" placeholder="Month &amp; Year Dropdown" />
                                                    <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                    </div>
                                                </div>
                                                <small class="text-muted">Use <code>.pickadate-dropdown</code> class to set <code>select</code> to
                                                    month and year selection</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Picker Events</label>
                                                <div class="input-group">
                                                    <input type='text' class="form-control pickadate-events" placeholder="Open console to check events" />
                                                    <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                    </div>
                                                </div>
                                                <small class="text-muted">Use <code>.pickadate-events</code> class to check events as the user
                                                    interacts with the picker.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Minimum and maximum date range</label>
                                                <div class="input-group">
                                                    <input type='text' class="form-control pickadate-minmax" placeholder="In Another Language" />
                                                    <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="fa fa-calendar-o"></span>
                    </span>
                                                    </div>
                                                </div>
                                                <small class="text-muted">Use <code>.pickadate-minmax</code> class for language translation.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Disable picker for native calendar</label>
                                                <div class="row">
                                                    <div class="col-lg-12 mb-1">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                        <span class="input-group-text">
                          <span class="fa fa-calendar-o"></span>
                        </span>
                                                            </div>
                                                            <input id="picker_from" class="form-control datepicker" type="date">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                        <span class="input-group-text">
                          <span class="fa fa-calendar-o"></span>
                        </span>
                                                            </div>
                                                            <input id="picker_to" class="form-control datepicker" type="date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <small class="text-muted">Use <code>.pickadate-nativ</code> class to change date display formats.
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pick-A-Date Picker end -->

                <!-- Pick-A-Time Picker start -->
                <section id="pick-a-time">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pick-A-Time Picker</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Basic Pick-a-time</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="ft-clock"></span>
                    </span>
                                                    </div>
                                                    <input type='text' class="form-control pickatime" placeholder="Basic Pick-a-time" />
                                                </div>
                                                <small class="text-muted">Use <code>.pickatime</code> class for basic Pick-A-Date Picker. </small>
                                            </div>
                                            <div class="form-group">
                                                <label>Clear Button</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="ft-clock"></span>
                    </span>
                                                    </div>
                                                    <input type='text' class="form-control pickatime-button" placeholder="Clear Button" />
                                                </div>
                                                <small class="text-muted">Use <code>.pickatime-button</code> class to hide clear button. </small>
                                            </div>
                                            <div class="form-group">
                                                <label>Change Formats</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="ft-clock"></span>
                    </span>
                                                    </div>
                                                    <input type='text' class="form-control pickatime-format" placeholder="Change Formats" />
                                                </div>
                                                <small class="text-muted">Use <code>.pickatime-format</code> class to change time display formats.
                                                </small>
                                            </div>
                                            <div class="form-group">
                                                <label>Format Time Display</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="ft-clock"></span>
                    </span>
                                                    </div>
                                                    <input type='text' class="form-control pickatime-formatTime" placeholder="Format Label" />
                                                </div>
                                                <small class="text-muted">Use <code>.pickatime-formatTime</code> class to display time format.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Format with Label</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="ft-clock"></span>
                    </span>
                                                    </div>
                                                    <input type='text' class="form-control pickatime-formatlabel" placeholder="Format Label" />
                                                </div>
                                                <small class="text-muted">Use <code>.pickatime-formatlabel</code> class to display time label format.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Minimum and maximum time range</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="ft-clock"></span>
                    </span>
                                                    </div>
                                                    <input type='text' class="form-control pickatime-minmax" placeholder="Start &amp; End Time" />
                                                </div>
                                                <small class="text-muted">Use <code>.pickatime-minmax</code> class for Start Time &amp; End Time.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>From Current Time Limit</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                    <span class="input-group-text">
                      <span class="ft-clock"></span>
                    </span>
                                                    </div>
                                                    <input type='text' class="form-control pickatime-limits" placeholder="Select Time" />
                                                </div>
                                                <small class="text-muted">Show previous 5 time limits and also shows current time Limit.</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label>Intervals</label>
                                                <div class="input-group">
                                                    <input type='text' class="form-control pickatime-intervals" placeholder="Date Intervals" />
                                                    <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="ft-clock"></span>
                    </span>
                                                    </div>
                                                </div>
                                                <small class="text-muted">Use <code>.pickatime-intervals</code> class to display time in Intervals.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Disable set of Time</label>
                                                <div class="input-group">
                                                    <input type='text' class="form-control pickatime-disable" placeholder="Disable set of Time" />
                                                    <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="ft-clock"></span>
                    </span>
                                                    </div>
                                                </div>
                                                <small class="text-muted">Disable a specific or arbitrary set of times selectable on the picker.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Disable set of time using Integers</label>
                                                <div class="input-group">
                                                    <input type='text' class="form-control pickatime-disable-integer" placeholder="Disable set of Time" />
                                                    <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="ft-clock"></span>
                    </span>
                                                    </div>
                                                </div>
                                                <small class="text-muted">Using integers as hours (0 to 23)</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Disable set of time using Object</label>
                                                <div class="input-group">
                                                    <input type='text' class="form-control pickatime-disable-object" placeholder="Disable set of Time" />
                                                    <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="ft-clock"></span>
                    </span>
                                                    </div>
                                                </div>
                                                <small class="text-muted">Using objects as a range of times</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Disable All with exceptions</label>
                                                <div class="input-group">
                                                    <input type='text' class="form-control pickatime-disable-all" placeholder="Disable All with exceptions" />
                                                    <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="ft-clock"></span>
                    </span>
                                                    </div>
                                                </div>
                                                <small class="text-muted">Enable only a specific or arbitrary set of times by setting true as the first
                                                    item in the collection</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Close on a user action</label>
                                                <div class="input-group">
                                                    <input type='text' class="form-control pickatime-close-action" placeholder="Close on Action" />
                                                    <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="ft-clock"></span>
                    </span>
                                                    </div>
                                                </div>
                                                <small class="text-muted">When a time is selected or the "clear" button is pressed, the picker closes.</small>
                                            </div>
                                            <div class="form-group">
                                                <label>Picker Events</label>
                                                <div class="input-group">
                                                    <input type='text' class="form-control pickatime-events" placeholder="Open console to check events" />
                                                    <div class="input-group-append">
                    <span class="input-group-text">
                      <span class="ft-clock"></span>
                    </span>
                                                    </div>
                                                </div>
                                                <small class="text-muted">The onSet event is the only callback that is passed a context argument that
                                                    provides details as to which properties are being "set".</small>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Pick-A-Time Picker end -->

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
