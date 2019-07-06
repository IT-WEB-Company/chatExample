@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><div class="row">
                    <div class="col-sm-12">
                        <div class="content-header">Form Validation</div>
                    </div>
                </div>
                <!-- Input Validation start -->
                <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Inputs Validation</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>novalidate</code> attribute to form tag.</p>
                                        <form class="form-horizontal" novalidate>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Basic Text Input <span class="required">*</span></h5>
                                                        <div class="controls mb-1">
                                                            <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required">
                                                        </div>
                                                        <p>Add <code>required</code> attribute to field for required validation.</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Email Field <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Repeat Email Field <span class="required">*</span></h5>
                                                        <div class="controls mb-1">
                                                            <input type="email" name="email2" data-validation-match-match="email" class="form-control mb-1"
                                                                   required>
                                                            <p>Add <code>data-validation-match-match</code> attribute with the field name as value to match
                                                                with it.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Password Input Field <span class="required">*</span></h5>
                                                        <div class="controls mb-1">
                                                            <input type="password" name="password" class="form-control" required
                                                                   data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Repeat Password Input Field <span class="required">*</span></h5>
                                                        <div class="controls mb-1">
                                                            <input type="password" name="password2" data-validation-match-match="password" class="form-control"
                                                                   required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Input with Right Icon <span class="required">*</span></h5>
                                                        <div class="controls mb-1 position-relative has-icon-right">
                                                            <input type="text" class="form-control" placeholder="Addon To Right"
                                                                   data-validation-required-message="This field is required">
                                                            <div class="form-control-position">
                                                                <i class="fa fa-code-fork"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Input addon with Right Icon <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Addon To Right"
                                                                       data-validation-required-message="This field is required">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="basic-addon5"><i class="fa fa-suitcase"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Maximum Character Length <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="maxChar" class="form-control mb-1" required
                                                                   data-validation-required-message="This field is required" maxlength="10">
                                                        </div>
                                                        <p>Add <code>maxlength</code> attribute for maximum number of characters to accept. Also use <code>data-validation-maxlength-message</code>
                                                            attribute for maxlength failure message</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Minimum Character Length <span class="required">*</span></h5>
                                                        <div class="controls mb-1">
                                                            <input type="text" name="minChar" class="form-control mb-1" required
                                                                   data-validation-required-message="This field is required" minlength="6">
                                                            <p>Add <code>minlength</code> attribute for minimum number of characters to accept. Also use
                                                                <code>data-validation-minlength-message</code> attribute for minlength failure message</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Only Numbers <span class="required">*</span></h5>
                                                        <div class="controls mb-1">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">$</span>
                                                                </div>
                                                                <input type="number" name="onlyNum" class="form-control" required
                                                                       data-validation-required-message="This field is required">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>File Input Field <span class="required">*</span></h5>
                                                        <div class="controls mb-1">
                                                            <input type="file" name="file" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Custom Required Message <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="textRange" class="form-control mb-1" required
                                                                   data-validation-required-message="This is custom message" placeholder="Custom Message">
                                                            <p>Add <code>data-validation-required-message</code> attribute for Custom required failure
                                                                message</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <h5>Maximum Number <span class="required">*</span></h5>
                                                        <small><i>Must be lower than 25</i></small>
                                                        <div class="controls mb-1">
                                                            <input type="text" name="maxNum" class="form-control" required data-validation-required-message="This field is required"
                                                                   max="25">
                                                        </div>
                                                        <p>Add <code>max</code> attribute for maximum number to accept. Also use <code>data-validation-max-message</code>
                                                            attribute for max failure message</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Minimum Number <span class="required">*</span></h5>
                                                        <small><i>Must be higher than 10</i></small>
                                                        <div class="controls mb-1">
                                                            <input type="text" name="minNum" class="form-control" required data-validation-required-message="This field is required"
                                                                   min="10">
                                                        </div>
                                                        <p>Add <code>min</code> attribute for minimum number to accept. Also use <code>data-validation-min-message</code>
                                                            attribute for min failure message</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Text Input Range <span class="required">*</span></h5>
                                                        <div class="controls mb-1">
                                                            <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"
                                                                   minlength="10" maxlength="20" placeholder="Enter number between 10 &amp; 20">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Input with Button <span class="required">*</span></h5>
                                                        <div class="controls mb-1">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Button on right" required>
                                                                <div class="input-group-append">
                          <span class="input-group-btn" id="button-addon2">
                            <button class="btn btn-warning" type="button">
                              <i class="fa fa-pencil"></i>
                            </button>
                          </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>No Characters, Only Numbers <span class="required">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="noChar" class="form-control" required
                                                                   data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="No Characters Allowed, Only Numbers">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Pattern <span class="required">*</span> <small><i>Must start with 'a' and end with 'z'</i></small></h5>
                                                        <div class="controls">
                                                            <input type="text" name="pattern" pattern="a.*z" data-validation-pattern-message="Must start with 'a' and end with 'z'"
                                                                   class="form-control mb-1" required>
                                                            <p>Add <code>pattern</code> attribute to set input pattern. Also use <code>data-validation-pattern-message</code>
                                                                attribute for pattern failure message</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Enter URL <span class="required">*</span></h5>
                                                        <div class="controls mb-1">
                                                            <input type="text" class="form-control mb-1" placeholder="Add URL" data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*"
                                                                   data-validation-regex-message="Only Valid URL's">
                                                            <p>Add <code>data-validation-regex-regex</code> attribute for regular expression. Also use <code>data-validation-regex-message</code>
                                                                attribute for regex failure message</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Enter Email Address <span class="required">*</span></h5>
                                                        <div class="controls mb-1">
                                                            <input type="text" class="form-control" placeholder="Email Address" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})"
                                                                   data-validation-regex-message="Enter Valid Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Enter Date <span class="required">*</span></h5>
                                                        <div class="controls mb-1">
                                                            <input type="text" class="form-control" placeholder="MM/DD/YYYY" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})"
                                                                   data-validation-regex-message="Enter Valid Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Basic Select <span class="required">*</span></h5>
                                                        <div class="controls mb-1">
                                                            <select name="select" id="select" required class="form-control">
                                                                <option value="">Select Your City</option>
                                                                <option value="1">Amsterdam</option>
                                                                <option value="2">Antwerp</option>
                                                                <option value="3">Athens</option>
                                                                <option value="4">Barcelona</option>
                                                                <option value="5">Berlin</option>
                                                                <option value="6">Birmingham</option>
                                                                <option value="7">Bradford</option>
                                                                <option value="8">Bremen</option>
                                                                <option value="9">Brussels</option>
                                                                <option value="10">Bucharest</option>
                                                                <option value="11">Budapest</option>
                                                                <option value="12">Cologne</option>
                                                                <option value="13">Copenhagen</option>
                                                                <option value="14">Dortmund</option>
                                                                <option value="15">Dresden</option>
                                                                <option value="16">Dublin</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>Basic Textarea <span class="required">*</span></h5>
                                                        <div class="controls mb-1">
                                                            <textarea name="textarea" id="textarea" class="form-control" required placeholder="Basic Textarea"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-success">Submit <i class="fa fa-thumbs-o-up position-right"></i></button>
                                                        <button type="reset" class="btn btn-danger">Reset <i class="fa fa-refresh position-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Validation end -->

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
