@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- Basic Elements start -->
                <section class="basic-elements">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header">Form Inputs</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Text Inputs</h4>
                                </div>
                                <div class="card-content">
                                    <div class="px-3">
                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput">Basic Input</label>
                                                            <input type="text" class="form-control" id="basicInput">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="helpInputTop">Input text with help</label>
                                                            <small class="text-muted">eg.<i>someone@example.com</i></small>
                                                            <input type="text" class="form-control" id="helpInputTop">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="disabledInput">Disabled Input</label>
                                                            <input type="text" class="form-control" id="disabledInput" disabled>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="disabledInput">Readonly Input</label>
                                                            <input type="text" class="form-control" id="readonlyInput"
                                                                   readonly="readonly" value="You can't update me :P">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="disabledInput">Input with Placeholder</label>
                                                            <input type="email" class="form-control" id="placeholderInput"
                                                                   placeholder="Enter Email Address">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="disabledInput">Static Text</label>
                                                            <p class="form-control-static" id="staticInput">email@pixinvent.com</p>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="roundText">Rounded Input</label>
                                                            <input type="text" id="roundText" class="form-control round"
                                                                   placeholder="Rounded Input">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="squareText">Square Input</label>
                                                            <input type="text" id="squareText" class="form-control square"
                                                                   placeholder="square Input">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                                        <fieldset class="form-group">
                                                            <label for="helperText">With Helper Text</label>
                                                            <input type="text" id="helperText" class="form-control" placeholder="Name">
                                                            <p><small class="text-muted">Find helper text here for given
                                                                    textbox.</small></p>
                                                        </fieldset>
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
                <!-- Basic Inputs end -->

                <!-- Basic Textarea start -->
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Textarea</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <fieldset class="form-group">
                                                            <label for="basicTextarea">Basic Textarea</label>
                                                            <textarea class="form-control" id="basicTextarea" rows="3"></textarea>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <fieldset class="form-group">
                                                            <label for="placeTextarea">Textarea with Placeholder</label>
                                                            <textarea class="form-control" id="placeTextarea" rows="3"
                                                                      placeholder="Textarea with placeholder"></textarea>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <fieldset class="form-group">
                                                            <label for="descTextarea">Textarea with Description</label>
                                                            <textarea class="form-control" id="descTextarea" rows="3"
                                                                      placeholder="Textarea with description"></textarea>
                                                        </fieldset>
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
                <!-- Basic Textarea end -->

                <!-- Basic Select start -->
                <section class="basic-select">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Select</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <fieldset class="form-group">
                                                            <label for="basicSelect">Basic Select</label>
                                                            <select class="form-control" id="basicSelect">
                                                                <option>Select Option</option>
                                                                <option>Option 1</option>
                                                                <option>Option 2</option>
                                                                <option>Option 3</option>
                                                                <option>Option 4</option>
                                                                <option>Option 5</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <fieldset class="form-group">
                                                            <label for="customSelect">Custom select</label>
                                                            <select class="custom-select d-block w-100" id="customSelect">
                                                                <option selected>Open this select menu</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <fieldset class="form-group">
                                                            <label for="countrySelect">Multiple select</label>
                                                            <select class="form-control" id="countrySelect" multiple="multiple">
                                                                <option selected="selected">United States</option>
                                                                <option>Canada</option>
                                                                <option selected="selected">United Kingdom</option>
                                                                <option>Japan</option>
                                                                <option>Australia</option>
                                                                <option>Germany</option>
                                                                <option selected="selected">India</option>
                                                                <option>Italy</option>
                                                                <option>Sweden</option>
                                                                <option>France</option>
                                                                <option>New Zealand</option>
                                                                <option>Switzerland</option>
                                                                <option>Russia</option>
                                                                <option>England</option>
                                                                <option>Norway</option>
                                                                <option>Greece</option>
                                                                <option>Philippines</option>
                                                                <option>Ireland</option>
                                                                <option>China</option>
                                                                <option>South Korea</option>
                                                            </select>
                                                        </fieldset>
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
                <!-- Basic Select end -->

                <!-- Basic File Browser start -->
                <section class="file-browser">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">File input</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12">
                                                        <fieldset class="form-group">
                                                            <label for="basicInputFile">Simple File Input</label>
                                                            <input type="file" class="form-control-file" id="basicInputFile">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12">
                                                        <label for="file">With Browse button</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                                       aria-describedby="inputGroupFileAddon01">
                                                                <label class="custom-file-label" for="inputGroupFile01">Choose
                                                                    file</label>
                                                            </div>
                                                        </div>
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
                <!-- Basic File Browser end -->

                <!-- Control Sizing start -->
                <section class="control-sizing">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Control Sizing Options</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-content">
                                <form class="form">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="px-3">
                                                    <p>XLarge Input class <code>.form-control-xl</code></p>
                                                    <fieldset class="form-group position-relative">
                                                        <input type="text" class="form-control form-control-xl" id="xLarge"
                                                               placeholder="XLarge Input">
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="px-3">
                                                    <p>XLarge Input class <code>.form-control-xl</code> for select</p>
                                                    <fieldset class="form-group position-relative">
                                                        <select class="form-control form-control-xl" id="xLargeSelect">
                                                            <option selected>XLarge select options</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="px-3">
                                                    <p>Large Input class <code>.form-control-lg</code></p>
                                                    <fieldset class="form-group position-relative">
                                                        <input type="text" class="form-control form-control-lg" id="Large"
                                                               placeholder="Large Input">
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="px-3">
                                                    <p>Large Input class <code>.form-control-lg</code> for select</p>
                                                    <fieldset class="form-group position-relative">
                                                        <select class="form-control form-control-lg" id="LargeSelect">
                                                            <option selected>Large select options</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="px-3">
                                                    <p>Default Input</p>
                                                    <fieldset class="form-group position-relative">
                                                        <input type="text" class="form-control" id="Default"
                                                               placeholder="Default Input">
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="px-3">
                                                    <p>Default Select</p>
                                                    <fieldset class="form-group position-relative">
                                                        <select class="form-control" id="DefaultSelect">
                                                            <option selected>Default select options</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="px-3">
                                                    <p>Small Input class <code>.form-control-sm</code></p>
                                                    <fieldset class="form-group position-relative">
                                                        <input type="text" class="form-control form-control-sm" id="Small"
                                                               placeholder="Small Input">
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="px-3">
                                                    <p>Small Input class <code>.form-control-sm</code> for select</p>
                                                    <fieldset class="form-group position-relative">
                                                        <select class="form-control form-control-sm" id="SmallSelect">
                                                            <option selected>Small select options</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Control Sizing end -->

                <!-- Inputs Icons start -->
                <section class="inputs-icons">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input with Icons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="px-3">
                                        <form class="form">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <p>Icon Left class <code>.has-icon-left</code></p>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" class="form-control" name="form-control-with-icon">
                                                                <div class="form-control-position">
                                                                    <i class="ft-search info"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <p>Icon Left class <code>.has-icon-right</code></p>
                                                            <div class="position-relative has-icon-right">
                                                                <input type="text" class="form-control" name="form-control-with-icon">
                                                                <div class="form-control-position">
                                                                    <i class="ft-upload warning"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <p>Round input with Icon Left class <code>.has-icon-left</code></p>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" class="form-control round"
                                                                       name="form-control-with-icon">
                                                                <div class="form-control-position">
                                                                    <i class="ft-user danger"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <p>Round input with Icon Right class <code>.has-icon-right</code></p>
                                                            <div class="position-relative has-icon-right">
                                                                <input type="text" class="form-control round"
                                                                       name="form-control-with-icon">
                                                                <div class="form-control-position">
                                                                    <i class="ft-bell primary"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <p>Square input with Icon Left class <code>.has-icon-left</code> with
                                                                <code>.spinner</code> class</p>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" class="form-control square"
                                                                       name="form-control-with-icon">
                                                                <div class="form-control-position">
                                                                    <i class="ft-loader spinner"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-12">
                                                        <div class="form-group">
                                                            <p>Square input with Icon Right class <code>.has-icon-right</code> with
                                                                <code>.spinner</code> class</p>
                                                            <div class="position-relative has-icon-right">
                                                                <input type="text" class="form-control square"
                                                                       name="form-control-with-icon">
                                                                <div class="form-control-position">
                                                                    <i class="ft-refresh-cw spinner"></i>
                                                                </div>
                                                            </div>
                                                        </div>
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
                <!-- Inputs Icons end -->
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
