@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- Basic Dropdowns start -->
                <section id="basic-dropdowns">
                    <div class="row">
                        <div class="col-sm-12 mt-2">
                            <div class="content-header">Dropdowns</div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Dropdown with divider</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">With Disabled Menu</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item disabled" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">With active state</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item active" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Dropdowns end -->



                <!-- Dropdown with Headers start -->
                <section id="dropdown-with-headers">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Dropdown with Headers</h4>
                            <p>Add a header to label sections of actions in any dropdown menu.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Header</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <h6 class="dropdown-header">1st Dropdown header</h6>
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <h6 class="dropdown-header">2nd Dropdown header</h6>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                            <button class="dropdown-item" type="button">Another Link</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Header with divider</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <h6 class="dropdown-header">1st Dropdown header</h6>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <h6 class="dropdown-header">2nd Dropdown header</h6>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">With Highlighted Menu</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <h6 class="dropdown-header highlight">1st Dropdown header</h6>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <h6 class="dropdown-header highlight">2nd Dropdown header</h6>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">With Header Icons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <h6 class="dropdown-header"><i class="fa fa-lightbulb-o mr-1 font-medium-1"></i> <i class="fa fa-list float-right font-medium-1"></i>
                                                1st Dropdown header</h6>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <h6 class="dropdown-header highlight"><i class="fa fa-link mr-1 font-medium-1"></i> <i class="fa fa-eye float-right font-medium-1"></i>
                                                2nd Dropdown header</h6>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dropdown with Headers end -->



                <!-- Dropdown with Submenu start -->
                <section id="dropdown-with-submenu">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Dropdown with Submenu</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Submenu Items</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                            <div class="dropdown-divider"></div>
                                            <div class="dropdown-submenu">
                                                <button class="dropdown-item" type="button">More Options</button>
                                                <div class="dropdown-menu" role="menu">
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Dropup Submenu</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu dropup" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                            <div class="dropdown-divider"></div>
                                            <div class="dropdown-submenu">
                                                <button class="dropdown-item" type="button">More Options</button>
                                                <div class="dropdown-menu" role="menu">
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Left Submenu</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
                                            <div class="dropdown-divider"></div>
                                            <div class="dropdown-submenu">
                                                <button class="dropdown-item" type="button">More Options</button>
                                                <div class="dropdown-menu open-left" role="menu">
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dropdown with Submenu end -->



                <!-- Dropdown Buttons with Arrow start -->
                <section id="dropdown-buttons-with-arrow">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Dropdown Buttons with Arrow</h4>
                                    <p>Use <code>.arrow</code> class to <code>.dropdown-menu</code> to add arrow. <code>.arrow-right</code>
                                        &amp; <code>.arrow-left</code> classes to <code>.dropdown-menu</code> in submenu will give you arrow on
                                        right &amp; left accrodingly.</p>
                                    </bodyv>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3 col-6">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu arrow">
                                                            <button class="dropdown-item" type="button">Action</button>
                                                            <button class="dropdown-item" type="button">Another action</button>
                                                            <button class="dropdown-item" type="button">Something else here</button>
                                                            <div class="dropdown-divider"></div>
                                                            <div class="dropdown-submenu">
                                                                <button class="dropdown-item" type="button">More Options</button>
                                                                <div class="dropdown-menu arrow-left" role="menu">
                                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-danger btn-block dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu open-left arrow">
                                                            <button class="dropdown-item" type="button">Action</button>
                                                            <button class="dropdown-item" type="button">Another action</button>
                                                            <button class="dropdown-item" type="button">Something else here</button>
                                                            <div class="dropdown-divider"></div>
                                                            <div class="dropdown-submenu">
                                                                <button class="dropdown-item" type="button">More Options</button>
                                                                <div class="dropdown-menu open-left arrow-right" role="menu">
                                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <div class="btn-group dropup mr-1 mb-1">
                                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu arrow">
                                                            <button class="dropdown-item" type="button">Action</button>
                                                            <button class="dropdown-item" type="button">Another action</button>
                                                            <button class="dropdown-item" type="button">Something else here</button>
                                                            <div class="dropdown-divider"></div>
                                                            <div class="dropdown-submenu">
                                                                <button class="dropdown-item" type="button">More Options</button>
                                                                <div class="dropdown-menu arrow-left" role="menu">
                                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-6">
                                                    <div class="btn-group dropup mr-1 mb-1">
                                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu open-left arrow">
                                                            <button class="dropdown-item" type="button">Action</button>
                                                            <button class="dropdown-item" type="button">Another action</button>
                                                            <button class="dropdown-item" type="button">Something else here</button>
                                                            <div class="dropdown-divider"></div>
                                                            <div class="dropdown-submenu">
                                                                <button class="dropdown-item" type="button">More Options</button>
                                                                <div class="dropdown-menu open-left arrow-right" role="menu">
                                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                                    <button class="dropdown-item" type="button">Submenu Item</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <!-- Dropdown Buttons with Arrow end -->



                <!-- Dropdown Active states start -->
                <section id="dropdown-active-states">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Dropdown Active states</h4>
                                    <p>Dropdown Buttons with <code>.active</code> class and theme color buttons.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12 height-250">
                                                <div class="btn-group mr-1 mb-1">
                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu show">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item active" type="button">Something else here</button>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="dropdown-submenu">
                                                            <button class="dropdown-item" type="button">More Options</button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 height-250">
                                                <div class="btn-group mr-1 mb-1">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu show">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item active" type="button">Something else here</button>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="dropdown-submenu">
                                                            <button class="dropdown-item" type="button">More Options</button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 height-250">
                                                <div class="btn-group mr-1 mb-1">
                                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu show">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item active" type="button">Something else here</button>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="dropdown-submenu">
                                                            <button class="dropdown-item" type="button">More Options</button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 height-250">
                                                <div class="btn-group mr-1 mb-1">
                                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu show">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item active" type="button">Something else here</button>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="dropdown-submenu">
                                                            <button class="dropdown-item" type="button">More Options</button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 height-250">
                                                <div class="btn-group mr-1 mb-1">
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu show">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item active" type="button">Something else here</button>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="dropdown-submenu">
                                                            <button class="dropdown-item" type="button">More Options</button>
                                                            <div class="dropdown-menu" role="menu">
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 height-250">
                                                <div class="btn-group mr-1 mb-1">
                                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu show">
                                                        <button class="dropdown-item" type="button">Action</button>
                                                        <button class="dropdown-item" type="button">Another action</button>
                                                        <button class="dropdown-item active" type="button">Something else here</button>
                                                        <div class="dropdown-divider"></div>
                                                        <div class="dropdown-submenu">
                                                            <button class="dropdown-item" type="button">More Options</button>
                                                            <div class="dropdown-menu open-left" role="menu">
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                                <button class="dropdown-item" type="button">Submenu Item</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dropdown Active states end -->



                <!-- Dropdown Sizes start -->
                <section id="dropdown-sizes">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Dropdowns Sizes</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Extra Large Size</h4>
                                    <p>Use <code>.dropdown-menu-xl</code> class to set extra large size dropdown.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu dropdown-menu-xl" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <h6 class="dropdown-header">1st Dropdown header</h6>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <h6 class="dropdown-header">2nd Dropdown header</h6>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Large Size</h4>
                                    <p>Use <code>.dropdown-menu-lg</code> class to set large size dropdown.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="dropdown-menu dropdown-menu-lg" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <h6 class="dropdown-header">1st Dropdown header</h6>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <h6 class="dropdown-header">2nd Dropdown header</h6>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Small Size</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use <code>.dropdown-menu-sm</code> class to set small size dropdown.</p>
                                        <div class="dropdown-menu dropdown-menu-sm" style="display: block; position: static; width: 100%; margin-top: 0; float: none;">
                                            <h6 class="dropdown-header">1st Dropdown header</h6>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <h6 class="dropdown-header">2nd Dropdown header</h6>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dropdown Sizes end -->

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
