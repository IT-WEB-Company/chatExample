@extends('layouts.header')

@section('content')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- Tagging JS start -->
                <section class="tagging-js-tags" id="tagging-js">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Tagging JS</h4>
                        </div>
                    </div>

                    <div class="row match-height">
                        <!-- Tagging JS Simple Options -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Simple Options</h4>

                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <!-- Allow Case Sensitive -->
                                        <fieldset>
                                            <label>Allow Case Sensitive</label>
                                            <div class="form-group">
                                                <div class="case-sensitive form-control" data-tags-input-name="case-sensitive">Australia, India, USA</div>
                                                <p class="text-muted">By default
                                                    <code>case-sensitive</code> is
                                                    <code>false</code>. Set it to
                                                    <code>true</code> to allow case sensitive.</p>
                                            </div>
                                        </fieldset>

                                        <!-- Disable Close Char -->
                                        <fieldset>
                                            <label>Disable Close Char</label>
                                            <div class="form-group">
                                                <div class="close-char form-control" data-tags-input-name="close-char">Sydney, Beijing</div>
                                                <p class="text-muted">By default close char is
                                                    <code>"&times;"</code>. Pass empty string
                                                    <code>close-char:""</code> To remove close char.</p>
                                            </div>
                                        </fieldset>

                                        <!-- Delete tag on delete -->
                                        <fieldset>
                                            <label>Delete tag on delete</label>
                                            <div class="form-group">
                                                <div class="edit-on-delete form-control" data-tags-input-name="edit-on-delete">Cairo, Amsterdam, Washington</div>
                                                <p class="text-muted">By default you can edit the tag you just deleted from the tag box. set it
                                                    <code>edit-on-delete:false</code> to avoid that.</p>
                                            </div>
                                        </fieldset>

                                        <!-- Allow Duplicate Tag -->
                                        <fieldset>
                                            <label>Allow Duplicate Tag</label>
                                            <div class="form-group">
                                                <div class="no-duplicate form-control" data-tags-input-name="no-duplicate">India, Brazil</div>
                                                <p class="text-muted">By Default duplicate tags are not allowed, set
                                                    <code>no-duplicate:false</code> to allow duplicates.</p>
                                            </div>
                                        </fieldset>

                                        <!-- No Enter -->
                                        <fieldset>
                                            <label>No Enter</label>
                                            <div class="form-group">
                                                <div class="no-enter form-control" data-tags-input-name="no-enter">Amsterdam, Beijing</div>
                                                <p class="text-muted">Enter key add a new tag by default, set it
                                                    <code>no-enter:true</code> to avoid that.</p>
                                            </div>
                                        </fieldset>

                                        <!-- No Comma -->
                                        <fieldset>
                                            <label>No Comma</label>
                                            <div class="form-group">
                                                <div class="no-comma form-control" data-tags-input-name="no-comma">Sydney, Washington</div>
                                                <p class="text-muted">Comma
                                                    <code>","</code> key add a new tag by default, set it
                                                    <code>no-comma:true</code> to avoid that.</p>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tagging JS Advance Options -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Advance Options</h4>

                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <!-- Forbidden Chars -->
                                        <fieldset>
                                            <label>Forbidden Chars</label>
                                            <div class="form-group">
                                                <div class="forbidden-chars form-control" data-tags-input-name="forbidden-chars">Australia, India, USA</div>
                                                <p class="text-muted">You can pass an array like
                                                    <code>["," , ".", "_", "?"]</code> of forbidden chars.</p>
                                            </div>
                                        </fieldset>

                                        <!-- Forbidden Words -->
                                        <fieldset>
                                            <label>Forbidden Words</label>
                                            <div class="form-group">
                                                <div class="forbidden-words form-control" data-tags-input-name="forbidden-words">Sydney, Beijing</div>
                                                <p class="text-muted">Following words as forbidden,
                                                    <code>"bastard","bitch","biatch","bloody"</code>.</p>
                                            </div>
                                        </fieldset>

                                        <!-- Pre Tags Separator -->
                                        <fieldset>
                                            <label>Pre Tags Separator</label>
                                            <div class="form-group">
                                                <div class="pre-tags-separator form-control" data-tags-input-name="pre-tags-separator">Cairo / Amsterdam / Washington</div>
                                                <p class="text-muted">Define your pre tag separator. In this example
                                                    <code>/</code> is used as pre tag separator.</p>
                                            </div>
                                        </fieldset>

                                        <!-- Tag On Blur -->
                                        <fieldset>
                                            <label>Tag On Blur</label>
                                            <div class="form-group">
                                                <div class="badge-on-blur form-control" data-tags-input-name="badge-on-blur">India, Brazil</div>
                                                <p class="text-muted">If
                                                    <code>false</code>, clicking away from the $type_zone won't add a new tag.</p>
                                            </div>
                                        </fieldset>

                                        <!-- Tag Char -->
                                        <fieldset>
                                            <label>Tag Char</label>
                                            <div class="form-group">
                                                <div class="badge-char form-control" data-tags-input-name="badge-char">Amsterdam, Beijing</div>
                                                <p class="text-muted">Define your tag char. In this example we have used
                                                    <code>*</code> as tag char.</p>
                                            </div>
                                        </fieldset>

                                        <!-- Type Zone Class -->
                                        <fieldset>
                                            <label>Type Zone Class</label>
                                            <div class="form-group">
                                                <div class="type-zone-class form-control" data-tags-input-name="type-zone-class">Sydney, Washington</div>
                                                <p class="text-muted">Define your Class of the type-zone.</p>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Tagging JS end -->


                <!-- Tagging-methods start -->
                <section class="tagging-methods">
                    <div class="row match-height">
                        <!-- Tagging JS Simple Methods -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Simple Methods</h4>

                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <!-- Add -->
                                        <fieldset>
                                            <label>Add</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="add-box form-control" data-tags-input-name="add-box">Australia, India, USA</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info add-tagging" type="button">Add Sydney</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Remove -->
                                        <fieldset>
                                            <label>Remove</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="remove-box form-control " data-tags-input-name="remove-box">Sydney, Beijing, Cairo</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info remove-tagging" type="button">Remove Cairo</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Remove All -->
                                        <fieldset>
                                            <label>Remove All</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="remove-all-box form-control " data-tags-input-name="remove-all-box">Washington, Sydney, Beijing</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info remove-all-tagging" type="button">Remove All</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Refresh -->
                                        <fieldset>
                                            <label>Refresh</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="refresh-box form-control " data-tags-input-name="refresh-box">Washington, Sydney, Beijing</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info refresh-tagging" type="button">Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Reset -->
                                        <fieldset>
                                            <label>Reset</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="reset-box form-control " data-tags-input-name="reset-box">Washington, Sydney, Beijing</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info reset-tagging" type="button">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Destroy -->
                                        <fieldset>
                                            <label>Destroy</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="destroy-box form-control " data-tags-input-name="destroy-box">Washington, Sydney, Beijing</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info destroy-tagging" type="button">Destroy</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tagging JS Advance Methods -->
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Advance Methods</h4>

                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <!-- Add Special Keys -->
                                        <fieldset>
                                            <label>Add Special Keys</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="special-keys-box form-control " data-tags-input-name="special-keys-box">Washington, Sydney, Beijing</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info add-special-keys" type="button">Add Keys</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Focus Input -->
                                        <fieldset>
                                            <label>Focus Input</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="focus-input-box form-control " data-tags-input-name="focus-input-box">Washington, Sydney, Beijing</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info focus-input" type="button">Focus</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Get Special Keys -->
                                        <fieldset>
                                            <label>Get Special Keys</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="get-special-keys-box form-control " data-tags-input-name="get-special-keys-box">Washington, Sydney, Beijing</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info get-special-keys" type="button">Get Keys</button>
                                                    </div>
                                                </div>
                                                <p class="text-muted">Check your console to see the special key objects.</p>
                                                <div class="form-group">
                                                    <span>Returns object</span>
                                                    <div class="prism-show-language">
                                                        <div class="prism-show-language-label">JavaScript</div>
                                                    </div>
                                                    <pre class=" language-javascript">
                                        <code class="language-javascript">
                                            Object {comma: 188, enter: 13, spacebar: 32, del: 46, backspace: 8}
                                        </code>
                                    </pre>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Val Input -->
                                        <fieldset>
                                            <label>Val Input</label>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-xl-8 col-lg-6 col-sm-12">
                                                        <div class="val-input-box form-control " data-tags-input-name="val-input-box">Washington, Sydney, Beijing</div>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-info val-input" type="button">Val Input</button>
                                                    </div>
                                                </div>
                                                <p class="text-muted">Check your console to see the returned value.</p>
                                                <div class="form-group">
                                                    <span>Returned Value</span>
                                                    <div class="prism-show-language">
                                                        <div class="prism-show-language-label">JavaScript</div>
                                                    </div>
                                                    <pre class=" language-javascript">
                                        <code class="language-javascript">
                                            cairo
                                        </code>
                                    </pre>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Tagging-methods end -->
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
