@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- input groups start -->
                <section class="input-groups" id="input-groups">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header">Form Input Groups</div>
                        </div>
                    </div>
                    <div class="row" matchHeight="card">
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Default Input group</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add span with <code>.input-group-text</code> class <b>before</b> <code>&lt;input&gt;</code></p>
                                        <fieldset>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">@</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon1">
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input group with Right Addon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add span with <code>.input-group-text</code> class <b>after</b> <code>&lt;input&gt;</code></p>
                                        <fieldset>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Addon To Right" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input group Addon on both side</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add span with <code>.input-group-text</code> class to <b>before &amp; after</b> <code>&lt;input&gt;</code></p>
                                        <fieldset>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Addon On Both Side" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input group addon with Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="ft-mail"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon3">
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input group addon with Right Icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Addon To Right" aria-describedby="basic-addon4">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon4"><i class="ft-user"></i></span>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input group addon with icon both side</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ft-phone"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Addon On Both Side" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="ft-search"></i></span>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input group addon with Spinner</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon5"><i class="ft-rotate-cw spinner"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon5">
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input group addon with Right Spinner</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Addon To Right" aria-describedby="basic-addon6">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon6"><i class="ft-refresh-ccw spinner"></i></span>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input group addon with Spinner both side</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ft-rotate-cw spinner"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Addon On Both Side" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="spinner ft-refresh-cw"></i></span>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- input groups end -->


                <!-- Input Groups With Checkbox start -->
                <section class="checkbox-input-group" id="input-group-checkbox">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Input group with Checkbox</div>
                        </div>
                    </div>
                    <div class="row" matchHeight="card">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input group with checkbox</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add span with <code>.input-group-text</code> class <b>before</b> <code>&lt;input&gt;</code> text and Add
                                            checkbox inside.</p>
                                        <fieldset>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                  <span class="input-group-text" id="checkbox-addon1">
                    <input type="checkbox" aria-label="Checkbox for following text input">
                  </span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Text input with Left checkbox " aria-describedby="checkbox-addon1" />
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input group with radio</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add span with <code>.input-group-text</code> class <b>before</b> <code>&lt;input&gt;</code> text and Add
                                            radio inside.</p>
                                        <fieldset>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                  <span class="input-group-text" id="radio-addon1">
                    <input type="radio" aria-label="Radio button for following text input">
                  </span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Text input with Left radio " aria-describedby="radio-addon1" />
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Groups With Checkbox end -->


                <!--	   Input Group Sizing	 -->
                <section class="sizing-input-group" id="input-group-sizing">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Input Groups Sizing</div>
                        </div>
                    </div>
                    <div class="row" matchHeight="card">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Extra Large Input group</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>.input-group-xl</code> class to <code>.input-group</code> for Xlarge addon.</p>
                                        <fieldset>
                                            <div class="input-group input-group-xl">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Extra Large Addon" aria-label="Amount">
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Large Input group</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>.input-group-lg</code> class to <code>.input-group</code> for Large addon.</p>
                                        <fieldset>
                                            <div class="input-group input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="sizing-addon1">@</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Large Addon" aria-describedby="sizing-addon1">
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Default Input group</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Default Input Group addon.</p>
                                        <fieldset>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Default Addon" aria-describedby="sizing-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="sizing-addon2">.00</span>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Small Input group</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>.input-group-sm</code> class to <code>.input-group</code> for small addon.</p>
                                        <fieldset>
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="sizing-addon3">@example.com</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Small Addon" aria-describedby="sizing-addon3">
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Group Sizing end-->


                <!-- Input Group Buttons start -->
                <section class="buttons-input-group" id="input-group-buttons">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Input Groups Buttons</div>
                        </div>
                    </div>
                    <div class="row" matchHeight="card">
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input group Button On Left</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add button inside of <code>.input-group-prepend</code> and class <b>before</b> <code>&lt;input&gt;</code></p>
                                        <fieldset>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-raised btn-primary" type="button">Click Me!</button>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Button on left" aria-describedby="button-addon1">
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input group Button On Right</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add button inside of <code>.input-group-append</code> class and <b>after</b> <code>&lt;input&gt;</code></p>
                                        <fieldset>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Button on right" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-raised btn-primary" type="button">Go</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input group Button On Both Side</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add button inside of <code>.input-group-prepend or .input-group-append</code> class and <b>before &amp;
                                                after</b> <code>&lt;input&gt;</code></p>
                                        <fieldset>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-raised btn-primary" type="button">Love it!</button>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Button on both side" aria-label="Amount">
                                                <div class="input-group-append">
                                                    <button class="btn btn-raised btn-primary" type="button">Hate it!</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input group Icon Button On Left</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add button inside of <code>.input-group-prepend</code> class and <b>before</b> <code>&lt;input&gt;</code></p>
                                        <fieldset>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-raised btn-primary" type="button"><i class="ft-mic"></i></button>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Button on left" aria-describedby="button-addon3">
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input group Button On Right</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add button inside of <code>.input-group-append</code> class and <b>after</b> <code>&lt;input&gt;</code></p>
                                        <fieldset>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Button on right" aria-describedby="button-addon4">
                                                <div class="input-group-append">
                                                    <button class="btn btn-raised btn-primary" type="button"><i class="fa fa-skyatlas"></i></button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Input group Button On Both Side</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add button inside of <code>.input-group-prepend or .input-group-append</code> class and <b>before &amp;
                                                after</b> <code>&lt;input&gt;</code></p>
                                        <fieldset>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-raised btn-primary" type="button"><i class="ft-search"></i></button>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Button on both side" aria-label="Amount">
                                                <div class="input-group-append">
                                                    <button class="btn btn-raised btn-primary" type="button">Go!</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Group Buttons end -->



                <!-- Buttons with Dropdown start -->
                <section class="buttons-with-dropdown" id="input-group-dropdown">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Buttons with Dropdown</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Input group Dropdown On Left</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="input-group">
                                                <div class="input-group-prepend dropup">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div role="separator" class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Dropdown on left">
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Input group Dropdown On Right</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Dropdown on right">
                                                <div class="input-group-append dropup">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div role="separator" class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Input group Dropdown On Both Side</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="input-group">
                                                <div class="input-group-prepend dropup">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div role="separator" class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Dropdown on both side" aria-label="Amount">
                                                <div class="input-group-append dropup">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div role="separator" class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Buttons with Dropdown end -->

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
