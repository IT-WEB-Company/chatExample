@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!--Flat button starts -->
                <section id="buttons">
                    <div class="row">
                        <div class="col-sm-12 mt-2">
                            <div class="content-header">Buttons</div>
                        </div>
                    </div>
                    <div class="row">
                        <!--Flat Buttons Starts -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Flat Buttons</h4>
                                    <p>Use class <code>.btn-flat</code> for flat buttons.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <a href="javascript:void(0)" class="btn btn-flat btn-primary">Primary</a>
                                        <a href="javascript:void(0)" class="btn btn-flat btn-success">Success</a>
                                        <a href="javascript:void(0)" class="btn btn-flat btn-info">Info</a>
                                        <a href="javascript:void(0)" class="btn btn-flat btn-warning">Warning</a>
                                        <a href="javascript:void(0)" class="btn btn-flat btn-danger">Danger</a>
                                        <a href="javascript:void(0)" class="btn btn-flat btn-link">Link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Flat Buttons Ends -->

                        <!--Flat Button Group Starts -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Button groups</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h5>Button dropdowns</h5>
                                        <p>Turn a button into a dropdown toggle with some basic markup changes.</p>
                                        <div class="form-group">
                                            <div class="btn-group mr-1 mb-1">
                                                <button type="button" class="btn btn-flat btn-primary btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">Primary</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group mr-1 mb-1">
                                                <button type="button" class="btn btn-flat btn-success btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">Success</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group mr-1 mb-1">
                                                <button type="button" class="btn btn-flat btn-info btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">Info</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group mr-1 mb-1">
                                                <button type="button" class="btn btn-flat btn-warning btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">Warning</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <!-- /btn-group -->
                                            <div class="btn-group mr-1 mb-1">
                                                <button type="button" class="btn btn-flat btn-danger btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">Danger</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <!-- /btn-group -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Flat Button Group Ends -->
                    </div>
                </section>
                <!--Flat button Ends -->

                <!-- Basic Buttons start -->
                <section id="basic-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Buttons </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Buttons </h5>
                                                <p>Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                                <div class="form-group">
                                                    <!-- basic buttons -->
                                                    <button type="button" class="btn btn-raised btn-secondary btn-min-width mr-1 mb-1">Secondary</button>
                                                    <button type="button" class="btn btn-raised btn-primary btn-min-width mr-1 mb-1">Primary</button>
                                                    <button type="button" class="btn btn-raised btn-success btn-min-width mr-1 mb-1">Success</button>
                                                    <button type="button" class="btn btn-raised btn-info btn-min-width mr-1 mb-1">Info</button>
                                                    <button type="button" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1">Warning</button>
                                                    <button type="button" class="btn btn-raised btn-danger btn-min-width mr-1 mb-1">Danger</button>
                                                    <button type="button" class="btn btn-raised btn-light btn-min-width mr-1 mb-1">Light</button>
                                                    <button type="button" class="btn btn-raised btn-dark btn-min-width mr-1 mb-1">Dark</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Buttons end -->
                <!-- Square Buttons start -->
                <section id="square-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Square Buttons </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Use <code>.square</code> class for square buttons.</p>
                                                <div class="form-group">
                                                    <!-- basic buttons -->
                                                    <button type="button" class="btn btn-raised btn-secondary square btn-min-width mr-1 mb-1">Secondary</button>
                                                    <button type="button" class="btn btn-raised btn-primary square btn-min-width mr-1 mb-1">Primary</button>
                                                    <button type="button" class="btn btn-raised btn-success square btn-min-width mr-1 mb-1">Success</button>
                                                    <button type="button" class="btn btn-raised btn-info square btn-min-width mr-1 mb-1">Info</button>
                                                    <button type="button" class="btn btn-raised btn-warning square btn-min-width mr-1 mb-1">Warning</button>
                                                    <button type="button" class="btn btn-raised btn-danger square btn-min-width mr-1 mb-1">Danger</button>
                                                    <button type="button" class="btn btn-raised btn-light square btn-min-width mr-1 mb-1">Light</button>
                                                    <button type="button" class="btn btn-raised btn-dark square btn-min-width mr-1 mb-1">Dark</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Square Buttons end -->
                <!-- Round Buttons start -->
                <section id="round-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Round Buttons </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Use <code>.round</code> class for round buttons.</p>
                                                <div class="form-group">
                                                    <!-- basic buttons -->
                                                    <button type="button" class="btn btn-raised btn-secondary round btn-min-width mr-1 mb-1">Secondary</button>
                                                    <button type="button" class="btn btn-raised btn-primary round btn-min-width mr-1 mb-1">Primary</button>
                                                    <button type="button" class="btn btn-raised btn-success round btn-min-width mr-1 mb-1">Success</button>
                                                    <button type="button" class="btn btn-raised btn-info round btn-min-width mr-1 mb-1">Info</button>
                                                    <button type="button" class="btn btn-raised btn-warning round btn-min-width mr-1 mb-1">Warning</button>
                                                    <button type="button" class="btn btn-raised btn-danger round btn-min-width mr-1 mb-1">Danger</button>
                                                    <button type="button" class="btn btn-raised btn-light round btn-min-width mr-1 mb-1">Light</button>
                                                    <button type="button" class="btn btn-raised btn-dark round btn-min-width mr-1 mb-1">Dark</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Round Buttons end -->
                <!-- Single button dropdowns start -->
                <section id="single-button-dropdowns">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Single button dropdowns</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Button dropdowns</h5>
                                                <p>Turn a button into a dropdown toggle with some basic markup changes.</p>
                                                <div class="form-group">
                                                    <!-- Single Button Dropdown -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-secondary btn-min-width dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Secondary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-primary btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Primary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-success btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Success</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-info btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Info</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-warning btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Warning</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-danger btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Danger</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-light btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Light</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-dark btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Dark</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Single button dropdowns end -->
                <!-- Split Buttons start -->
                <section id="split-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Split Buttons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5>Split button dropdowns</h5>
                                                <p>Similarly, create split button dropdowns with the same markup changes, only with a separate button.</p>
                                                <div class="form-group">
                                                    <!-- Split Button Dropdown -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-secondary">Secondary</button>
                                                        <button type="button" class="btn btn-raised btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-primary">Primary</button>
                                                        <button type="button" class="btn btn-raised btn-primary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-success">Success</button>
                                                        <button type="button" class="btn btn-raised btn-success dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-info">Info</button>
                                                        <button type="button" class="btn btn-raised btn-info dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-warning">Warning</button>
                                                        <button type="button" class="btn btn-raised btn-warning dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-danger">Danger</button>
                                                        <button type="button" class="btn btn-raised btn-danger dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-light">Light</button>
                                                        <button type="button" class="btn btn-raised btn-light dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-dark">Dark</button>
                                                        <button type="button" class="btn btn-raised btn-dark dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Split Buttons end -->
                <!-- Basic Button group start -->
                <section id="basic-button-group">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Button group</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Group a series of buttons together on a single line with the button group. Wrap a series of buttons
                                                    with <code>.btn</code> in <code>.btn-group</code>.</p>
                                                <div class="form-group">
                                                    <!-- button group -->
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-secondary">Secondary</button>
                                                        <button type="button" class="btn btn-raised btn-primary">Primary</button>
                                                        <button type="button" class="btn btn-raised btn-success">Success</button>
                                                        <button type="button" class="btn btn-raised btn-info">Info</button>
                                                        <button type="button" class="btn btn-raised btn-warning">Warning</button>
                                                        <button type="button" class="btn btn-raised btn-danger">Danger</button>
                                                        <button type="button" class="btn btn-raised btn-light">Light</button>
                                                        <button type="button" class="btn btn-raised btn-dark">Dark</button>
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
                <!-- Basic Button group end -->
                <!-- Basic Button Icon start -->
                <section id="basic-button-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Buttons with Icon </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Bootstrap includes six predefined button styles, each serving its own semantic purpose.</p>
                                                <div class="form-group">
                                                    <!-- Buttons with Icon -->
                                                    <button type="button" class="btn btn-raised btn-secondary btn-min-width mr-1 mb-1"><i class="fa fa-star-o"></i>
                                                        Secondary</button>
                                                    <button type="button" class="btn btn-raised btn-primary btn-min-width mr-1 mb-1"><i class="fa fa-user-o"></i>
                                                        Primary</button>
                                                    <button type="button" class="btn btn-raised btn-success btn-min-width mr-1 mb-1"><i class="fa fa-check"></i>
                                                        Success</button>
                                                    <button type="button" class="btn btn-raised btn-info btn-min-width mr-1 mb-1"><i class="fa fa-info"></i>
                                                        Info</button>
                                                    <button type="button" class="btn btn-raised btn-warning btn-min-width mr-1 mb-1">Warning <i class="fa fa-camera"></i></button>
                                                    <button type="button" class="btn btn-raised btn-danger btn-min-width mr-1 mb-1">Danger <i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-raised btn-light btn-min-width mr-1 mb-1">Light <i class="fa fa-plug"></i></button>
                                                    <button type="button" class="btn btn-raised btn-dark btn-min-width mr-1 mb-1">Dark <i class="fa fa-heart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Button Icon end -->
                <!-- Button dropdowns with icons start -->
                <section id="button-dropdowns-with-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Button dropdowns with icons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- Button dropdowns with icons -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-secondary btn-min-width dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o"></i>
                                                            Secondary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-primary btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-star-o"></i> Primary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-success btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-check"></i> Success</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-info btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-info"></i> Info</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-warning btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-camera"></i> Warning</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-danger btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-eye"></i> Danger</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-light btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-plug"></i> Light</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-dark btn-min-width dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-heart"></i> Dark</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Button dropdowns with icons end -->
                <!-- Split button dropdowns with icon start -->
                <section id="split-button-dropdown-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Split button dropdowns with icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- Split button dropdowns with icon -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-secondary"><i class="fa fa-user-o"></i> Secondary</button>
                                                        <button type="button" class="btn btn-raised btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-primary"><i class="fa fa-star-o"></i> Primary</button>
                                                        <button type="button" class="btn btn-raised btn-primary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-success"><i class="fa fa-check"></i> Success</button>
                                                        <button type="button" class="btn btn-raised btn-success dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-info"><i class="fa fa-info"></i> Info</button>
                                                        <button type="button" class="btn btn-raised btn-info dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-warning"><i class="fa fa-camera"></i> Warning</button>
                                                        <button type="button" class="btn btn-raised btn-warning dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-danger"><i class="fa fa-eye"></i> Danger</button>
                                                        <button type="button" class="btn btn-raised btn-danger dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-light"><i class="fa fa-plug"></i> Light</button>
                                                        <button type="button" class="btn btn-raised btn-light dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-dark"><i class="fa fa-heart"></i> Dark</button>
                                                        <button type="button" class="btn btn-raised btn-dark dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Split button dropdowns with icon end -->
                <!-- Button group with icon start -->
                <section id="button-group-with-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Button group with icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Button group with icons and text.</p>
                                                <div class="form-group">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <!-- Button group with icons -->
                                                        <button type="button" class="btn btn-raised btn-secondary"><i class="fa fa-star-o"></i> Secondary</button>
                                                        <button type="button" class="btn btn-raised btn-primary"><i class="fa fa-user-o"></i> Primary</button>
                                                        <button type="button" class="btn btn-raised btn-success"><i class="fa fa-check"></i> Success</button>
                                                        <button type="button" class="btn btn-raised btn-info"><i class="fa fa-info"></i> Info</button>
                                                        <button type="button" class="btn btn-raised btn-warning"><i class="fa fa-camera"></i> Warning</button>
                                                        <button type="button" class="btn btn-raised btn-danger"><i class="fa fa-eye"></i> Danger</button>
                                                        <button type="button" class="btn btn-raised btn-light"><i class="fa fa-plug"></i> Light</button>
                                                        <button type="button" class="btn btn-raised btn-dark"><i class="fa fa-heart"></i> Dark</button>
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
                <!-- Button group with icon end -->
                <!-- Icon Buttons start -->
                <section id="icons-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Icon Buttons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <p>Simple Icon Button</p>
                                                <div class="form-group">
                                                    <!-- Simple Icon Button -->
                                                    <button type="button" class="btn btn-raised btn-icon btn-secondary mr-1"><i class="fa fa-star-o"></i></button>
                                                    <button type="button" class="btn btn-raised btn-icon btn-primary mr-1"><i class="fa fa-user-o"></i></button>
                                                    <button type="button" class="btn btn-raised btn-icon btn-success mr-1"><i class="fa fa-check"></i></button>
                                                    <button type="button" class="btn btn-raised btn-icon btn-info mr-1"><i class="fa fa-info"></i></button>
                                                    <button type="button" class="btn btn-raised btn-icon btn-warning mr-1"><i class="fa fa-camera"></i></button>
                                                    <button type="button" class="btn btn-raised btn-icon btn-danger mr-1"><i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-raised btn-icon btn-light mr-1"><i class="fa fa-plug"></i></button>
                                                    <button type="button" class="btn btn-raised btn-icon btn-dark mr-1"><i class="fa fa-heart"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p>Use <code>.btn-icon.btn-pure</code> classes for only icon buttons</p>
                                                <div class="form-group">
                                                    <!-- Icon Button -->
                                                    <button type="button" class="btn btn-raised btn-icon btn-pure secondary mr-1"><i class="fa fa-desktop"></i></button>
                                                    <button type="button" class="btn btn-raised btn-icon btn-pure primary mr-1"><i class="fa fa-star-o"></i></button>
                                                    <button type="button" class="btn btn-raised btn-icon btn-pure success mr-1"><i class="fa fa-check-circle"></i></button>
                                                    <button type="button" class="btn btn-raised btn-icon btn-pure info mr-1"><i class="fa fa-moon-o"></i></button>
                                                    <button type="button" class="btn btn-raised btn-icon btn-pure warning mr-1"><i class="fa fa-heart-o"></i></button>
                                                    <button type="button" class="btn btn-raised btn-icon btn-pure danger mr-1"><i class="fa fa-archive"></i></button>
                                                    <button type="button" class="btn btn-raised btn-icon btn-pure light mr-1"><i class="fa fa-plug"></i></button>
                                                    <button type="button" class="btn btn-raised btn-icon btn-pure dark mr-1"><i class="fa fa-heart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Icon Buttons end -->
                <!-- Icon Buttons dropdowns start -->
                <section id="icons-buttons-dropdowns">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Icon Button dropdowns</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- Icon Button dropdowns -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-icon btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-icon btn-primary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-star-o"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-icon btn-success dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-check"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-info btn-icon dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-info"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-icon btn-warning dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-camera"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-danger btn-icon dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-eye"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-light btn-icon dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-plug"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-dark btn-icon dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-heart"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Icon Buttons dropdowns end -->
                <!-- Split Icon Buttons dropdowns start -->
                <section id="split-icons-buttons-dropdowns">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Split icon button dropdowns</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- Split icon button dropdowns -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-secondary"><i class="fa fa-user-o"></i></button>
                                                        <button type="button" class="btn btn-raised btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-primary"><i class="fa fa-star-o"></i></button>
                                                        <button type="button" class="btn btn-raised btn-primary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-success"><i class="fa fa-check"></i></button>
                                                        <button type="button" class="btn btn-raised btn-success dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-info"><i class="fa fa-info"></i></button>
                                                        <button type="button" class="btn btn-raised btn-info dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-warning"><i class="fa fa-camera"></i></button>
                                                        <button type="button" class="btn btn-raised btn-warning dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-danger"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-raised btn-danger dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-light"><i class="fa fa-plug"></i></button>
                                                        <button type="button" class="btn btn-raised btn-light dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-dark"><i class="fa fa-heart"></i></button>
                                                        <button type="button" class="btn btn-raised btn-dark dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Split Icon Buttons dropdowns end -->
                <!-- Icon Buttons group start -->
                <section id="icons-buttons-group">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Icon Button group</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <p>Icon Button group without text.</p>
                                                <div class="form-group">
                                                    <!-- Icon Button group -->
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-icon btn-secondary"><i class="fa fa-star-o"></i></button>
                                                        <button type="button" class="btn btn-raised btn-icon btn-primary"><i class="fa fa-user-o"></i></button>
                                                        <button type="button" class="btn btn-raised btn-icon btn-success"><i class="fa fa-check"></i></button>
                                                        <button type="button" class="btn btn-raised btn-icon btn-info"><i class="fa fa-info"></i></button>
                                                        <button type="button" class="btn btn-raised btn-icon btn-warning"><i class="fa fa-camera"></i></button>
                                                        <button type="button" class="btn btn-raised btn-icon btn-danger"><i class="fa fa-eye"></i></button>
                                                        <button type="button" class="btn btn-raised btn-icon btn-light"><i class="fa fa-plug"></i></button>
                                                        <button type="button" class="btn btn-raised btn-icon btn-dark"><i class="fa fa-heart"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p>Combine sets of button groups into <strong>Button toolbar</strong> for more complex components.</p>
                                                <div class="form-group">
                                                    <!-- Icon Button toolbar group -->
                                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                        <div class="btn-group" role="group" aria-label="First Group">
                                                            <button type="button" class="btn btn-raised btn-icon btn-light"><i class="fa fa-umbrella"></i></button>
                                                            <button type="button" class="btn btn-raised btn-icon btn-secondary"><i class="fa fa-moon-o"></i></button>
                                                            <button type="button" class="btn btn-raised btn-icon btn-primary"><i class="fa fa-cloud-download"></i></button>
                                                        </div>
                                                        <div class="btn-group mx-2" role="group" aria-label="Second Group">
                                                            <button type="button" class="btn btn-raised btn-icon btn-success"><i class="fa fa-thermometer"></i></button>
                                                            <button type="button" class="btn btn-raised btn-icon btn-info"><i class="fa fa-location-arrow"></i></button>
                                                            <button type="button" class="btn btn-raised btn-icon btn-warning"><i class="fa fa-gavel"></i></button>
                                                        </div>
                                                        <div class="btn-group" role="group" aria-label="Third Group">
                                                            <button type="button" class="btn btn-raised btn-icon btn-danger"><i class="fa fa-tint"></i></button>
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
                <!-- Icon Buttons group end -->
                <!-- Sizes start -->
                <section id="sizes-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Sizes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <p>Add <code>.btn-lg</code> or <code>.btn-sm</code> for Fancy larger or smaller buttons size.</p>
                                                <!-- simple sizes -->
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-primary btn-lg">Large button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-secondary btn-lg">Large button</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-primary">Secondary button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-secondary">Secondary button</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-primary btn-sm">Small button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-secondary btn-sm">Small button</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p>Buttons with Icons in different sizes</p>
                                                <!-- sizes with icons -->
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-success btn-lg"><i class="fa fa-star-o"></i> Large
                                                        button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-danger btn-lg"><i class="fa fa-heart"></i> Large
                                                        button</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-success"><i class="fa fa-check-circle"></i> Secondary
                                                        button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-danger"><i class="fa fa-archive"></i> Secondary button</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-success btn-sm"><i class="fa fa-desktop"></i> Small
                                                        button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-danger btn-sm"><i class="fa fa-moon-o"></i> Small
                                                        button</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Sizes end -->
                <!-- Button Dropdowns Sizes start -->
                <section id="button-dropdown-sizes">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Button Dropdowns Sizes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <p>Button dropdowns work with buttons of all sizes.</p>
                                                <div class="form-group">
                                                    <!-- Button Dropdowns Sizes -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-primary dropdown-toggle btn-lg" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Primary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-secondary dropdown-toggle btn-lg" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Secondary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-primary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Primary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Secondary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-primary dropdown-toggle btn-sm" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Primary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Secondary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p>Buttons with Icons in different sizes</p>
                                                <div class="form-group">
                                                    <!-- Button Dropdowns Sizes with Icons -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-success dropdown-toggle btn-lg" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-toggle-on"></i> Success</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-danger dropdown-toggle btn-lg" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-smile-o"></i> Danger</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-success dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-toggle-on"></i> Success</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-danger dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-smile-o"></i> Danger</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-success dropdown-toggle btn-sm" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-toggle-on"></i> Success</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-danger dropdown-toggle btn-sm" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-smile-o"></i> Danger</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Button Dropdowns Sizes end -->
                <!-- Button Group Sizes start -->
                <section id="button-group-sizes">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Button Group Sizes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code>
                                                    to each <code>.btn-group</code>.</p>
                                                <div class="form-group">
                                                    <!-- Button Group Sizes -->
                                                    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-primary">Primary</button>
                                                        <button type="button" class="btn btn-raised btn-light">Secondary</button>
                                                        <button type="button" class="btn btn-raised btn-info">Info</button>
                                                        <button type="button" class="btn btn-raised btn-warning">Warning</button>
                                                        <button type="button" class="btn btn-raised btn-secondary">Secondary</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-primary">Primary</button>
                                                        <button type="button" class="btn btn-raised btn-light">Secondary</button>
                                                        <button type="button" class="btn btn-raised btn-info">Info</button>
                                                        <button type="button" class="btn btn-raised btn-warning">Warning</button>
                                                        <button type="button" class="btn btn-raised btn-secondary">Secondary</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-primary">Primary</button>
                                                        <button type="button" class="btn btn-raised btn-light">Secondary</button>
                                                        <button type="button" class="btn btn-raised btn-info">Info</button>
                                                        <button type="button" class="btn btn-raised btn-warning">Warning</button>
                                                        <button type="button" class="btn btn-raised btn-secondary">Secondary</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p>Button Group with Icons in different sizes</p>
                                                <div class="form-group">
                                                    <!-- Button Group with Icons in different sizes -->
                                                    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-success"><i class="fa fa-search"></i> Success</button>
                                                        <button type="button" class="btn btn-raised btn-danger"><i class="fa fa-smile-o"></i> Danger</button>
                                                        <button type="button" class="btn btn-raised btn-primary"><i class="fa fa-user-o"></i> Primary</button>
                                                        <button type="button" class="btn btn-raised btn-info"><i class="fa fa-info"></i> Info</button>
                                                        <button type="button" class="btn btn-raised btn-warning"><i class="fa fa-link"></i> Warning</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-success"><i class="fa fa-search"></i> Success</button>
                                                        <button type="button" class="btn btn-raised btn-danger"><i class="fa fa-smile-o"></i> Danger</button>
                                                        <button type="button" class="btn btn-raised btn-primary"><i class="fa fa-user-o"></i> Primary</button>
                                                        <button type="button" class="btn btn-raised btn-info"><i class="fa fa-info"></i> Info</button>
                                                        <button type="button" class="btn btn-raised btn-warning"><i class="fa fa-link"></i> Warning</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-success"><i class="fa fa-search"></i> Success</button>
                                                        <button type="button" class="btn btn-raised btn-danger"><i class="fa fa-smile-o"></i> Danger</button>
                                                        <button type="button" class="btn btn-raised btn-primary"><i class="fa fa-user-o"></i> Primary</button>
                                                        <button type="button" class="btn btn-raised btn-info"><i class="fa fa-info"></i> Info</button>
                                                        <button type="button" class="btn btn-raised btn-warning"><i class="fa fa-link"></i> Warning</button>
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
                <!-- Button Group Sizes end -->
                <!-- Block level buttons start -->
                <section id="block-level-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Block level buttons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <!-- Block level buttons -->
                                        <p>Create block level buttons—those that span the full width of a parent—by adding <code>.btn-block</code>.</p>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <button type="button" class="btn mb-1 btn-primary btn-lg btn-block">Block level button</button>
                                                    <button type="button" class="btn mb-1 btn-secondary btn-lg btn-block">Block level button</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <!-- Block level buttons with icon -->
                                                <div class="form-group">
                                                    <button type="button" class="btn mb-1 btn-success btn-icon btn-lg btn-block"><i class="fa fa-check-circle"></i>
                                                        Block level button</button>
                                                    <button type="button" class="btn mb-1 btn-danger btn-icon btn-lg btn-block">Block level button</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Block level buttons end -->
                <!-- Button tags start -->
                <section id="button-tags">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Button tags</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <!-- anchor, button tag, input button, input submit Tags -->
                                        <p>The .btn classes are designed to be used with the <code>&lt;button&gt;</code> element. However, you can
                                            also use these classes on <code>&lt;a&gt;</code> or <code>&lt;input&gt;</code> elements.</p>
                                        <div class="form-group">
                                            <a class="btn btn-raised btn-primary btn-min-width mr-1 mb-1" href="#" role="button">Link</a>
                                            <button class="btn btn-raised btn-primary btn-min-width mr-1 mb-1" type="submit">Button</button>
                                            <input class="btn btn-raised btn-primary btn-min-width mr-1 mb-1" type="button" value="Input">
                                            <input class="btn btn-raised btn-primary btn-min-width mr-1 mb-1" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Button tags end -->
                <!--Raised Gradient Button Starts -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="card-header">
                                    <h4 class="card-title">Gradient Raised buttons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <a href="javascript:void(0)" class="btn btn-raised gradient-purple-bliss white">Button</a>
                                            <span class="ml-2">.gradient-purple-bliss</span>
                                        </div>
                                        <div class="mb-3">
                                            <a href="javascript:void(0)" class="btn btn-raised gradient-mint white">Button</a>
                                            <span class="ml-2">.gradient-mint</span>
                                        </div>
                                        <div class="mb-3">
                                            <a href="javascript:void(0)" class="btn btn-raised gradient-pomegranate white">Button</a>
                                            <span class="ml-2">.gradient-pomegranate</span>
                                        </div>
                                        <div class="mb-3">
                                            <a href="javascript:void(0)" class="btn btn-raised gradient-crystal-clear white">Button</a>
                                            <span class="ml-2">.gradient-crystal-clear</span>
                                        </div>
                                        <div class="mb-3">
                                            <a href="javascript:void(0)" class="btn btn-raised gradient-ibiza-sunset white">Button</a>
                                            <span class="ml-2">.gradient-ibiza-sunset</span>
                                        </div>
                                        <div class="mb-3">
                                            <a href="javascript:void(0)" class="btn btn-raised gradient-nepal white">Button</a>
                                            <span class="ml-2">.gradient-nepal</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="card-header">
                                    <h4 class="card-title">Gradient Raised Button With Shadow</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <a href="javascript:void(0)" class="btn btn-raised gradient-purple-bliss white shadow-z-1-hover">Buttons
                                                with Shadow</a>
                                            <span class="ml-2">.shadow-z-1-hover</span>
                                        </div>
                                        <div class="mb-3">
                                            <a href="javascript:void(0)" class="btn btn-raised gradient-mint white shadow-z-4">Buttons with Shadow</a>
                                            <span class="ml-2">.shadow-z-4</span>
                                        </div>
                                        <div class="mb-3">
                                            <a href="javascript:void(0)" class="btn btn-raised gradient-pomegranate white big-shadow">Buttons with
                                                Shadow</a>
                                            <span class="ml-2">.big-shadow</span>
                                        </div>
                                        <div class="mb-3">
                                            <a href="javascript:void(0)" class="btn btn-raised gradient-crystal-clear white shadow-big-navbar">Buttons
                                                with Shadow</a>
                                            <span class="ml-2">.shadow-big-navbar</span>
                                        </div>
                                        <div class="mb-3">
                                            <a href="javascript:void(0)" class="btn btn-raised gradient-ibiza-sunset white sidebar-shadow">Buttons
                                                with Shadow</a>
                                            <span class="ml-2">.sidebar-shadow</span>
                                        </div>
                                        <div class="mb-3">
                                            <a href="javascript:void(0)" class="btn btn-raised gradient-nepal white card-shadow">Buttons with Shadow</a>
                                            <span class="ml-2">.card-shadow</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Raised Gradient Button Ends -->
                <!-- Outline Buttons start -->
                <section id="outline-button">
                    <div class="row">
                        <div class="col-md-12 mb-1 mt-2">
                            <h3 class="text-uppercase">Outline Buttons </h3>
                            <p>Replace the default modifier classes with the <code>.btn-outline </code>ones to remove all background images
                                and colors on any button.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Outline buttons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Use a class <code>.btn-outline-*</code> to quickly create a outline button.</p>
                                                <div class="form-group">
                                                    <!-- Outline buttons -->
                                                    <button type="button" class="btn btn-raised btn-outline-secondary btn-min-width mr-1 mb-1">Secondary</button>
                                                    <button type="button" class="btn btn-raised btn-outline-primary btn-min-width mr-1 mb-1">Primary</button>
                                                    <button type="button" class="btn btn-raised btn-outline-success btn-min-width mr-1 mb-1">Success</button>
                                                    <button type="button" class="btn btn-raised btn-outline-info btn-min-width mr-1 mb-1">Info</button>
                                                    <button type="button" class="btn btn-raised btn-outline-warning btn-min-width mr-1 mb-1">Warning</button>
                                                    <button type="button" class="btn btn-raised btn-outline-danger btn-min-width mr-1 mb-1">Danger</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Outline Buttons end -->
                <!-- Square Buttons start -->
                <section id="square-outline-button">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Square buttons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Use a class <code>.square</code> with outline button class to create square outline button.</p>
                                                <div class="form-group">
                                                    <!-- Square buttons -->
                                                    <button type="button" class="btn btn-raised btn-outline-secondary square btn-min-width mr-1 mb-1">Secondary</button>
                                                    <button type="button" class="btn btn-raised btn-outline-primary square btn-min-width mr-1 mb-1">Primary</button>
                                                    <button type="button" class="btn btn-raised btn-outline-success square btn-min-width mr-1 mb-1">Success</button>
                                                    <button type="button" class="btn btn-raised btn-outline-info square btn-min-width mr-1 mb-1">Info</button>
                                                    <button type="button" class="btn btn-raised btn-outline-warning square btn-min-width mr-1 mb-1">Warning</button>
                                                    <button type="button" class="btn btn-raised btn-outline-danger square btn-min-width mr-1 mb-1">Danger</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Square Buttons end -->
                <!-- Round Buttons start -->
                <section id="round-outline-button">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Round buttons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Use a class <code>.round</code> with outline button class to create round outline button.</p>
                                                <div class="form-group">
                                                    <!-- Round buttons -->
                                                    <button type="button" class="btn btn-raised btn-outline-secondary round btn-min-width mr-1 mb-1">Secondary</button>
                                                    <button type="button" class="btn btn-raised btn-outline-primary round btn-min-width mr-1 mb-1">Primary</button>
                                                    <button type="button" class="btn btn-raised btn-outline-success round btn-min-width mr-1 mb-1">Success</button>
                                                    <button type="button" class="btn btn-raised btn-outline-info round btn-min-width mr-1 mb-1">Info</button>
                                                    <button type="button" class="btn btn-raised btn-outline-warning round btn-min-width mr-1 mb-1">Warning</button>
                                                    <button type="button" class="btn btn-raised btn-outline-danger round btn-min-width mr-1 mb-1">Danger</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Round Buttons end -->
                <!-- Single outline button dropdowns start -->
                <section id="single-outline-button-dropdowns">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Single outline button dropdowns</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- Single outline button dropdowns -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-secondary btn-min-width dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-primary btn-min-width dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-success btn-min-width dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-info btn-min-width dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-warning btn-min-width dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-danger btn-min-width dropdown-toggle"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Single outline button dropdowns end -->
                <!-- Split Outline button dropdowns with background start -->
                <section id="split-outline-button-dropdown">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Split Outline button dropdowns with dropdown background</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- Split Outline button dropdowns with dropdown background -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-secondary">Secondary</button>
                                                        <button type="button" class="btn btn-raised btn-secondary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-primary">Primary</button>
                                                        <button type="button" class="btn btn-raised btn-primary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-success">Success</button>
                                                        <button type="button" class="btn btn-raised btn-success dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-info">Info</button>
                                                        <button type="button" class="btn btn-raised btn-info dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-warning">Warning</button>
                                                        <button type="button" class="btn btn-raised btn-warning dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-danger">Danger</button>
                                                        <button type="button" class="btn btn-raised btn-danger dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Split Outline button dropdowns with dropdown background end -->

                <!-- Split Outline button dropdowns start -->
                <section id="split-outline-button-dropdowns">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Split Outline button dropdowns</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- Split Outline button dropdowns -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-secondary">Secondary</button>
                                                        <button type="button" class="btn btn-raised btn-outline-secondary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-primary">Primary</button>
                                                        <button type="button" class="btn btn-raised btn-outline-primary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-success">Success</button>
                                                        <button type="button" class="btn btn-raised btn-outline-success dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-info">Info</button>
                                                        <button type="button" class="btn btn-raised btn-outline-info dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-warning">Warning</button>
                                                        <button type="button" class="btn btn-raised btn-outline-warning dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-danger">Danger</button>
                                                        <button type="button" class="btn btn-raised btn-outline-danger dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Split Outline button dropdowns end -->
                <!-- Outline Button group start -->
                <section id="outline-button-group">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Outline Button group</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Outline button group</p>
                                                <div class="form-group">
                                                    <!-- Outline Button group -->
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-outline-secondary">Secondary</button>
                                                        <button type="button" class="btn btn-raised btn-outline-primary">Primary</button>
                                                        <button type="button" class="btn btn-raised btn-outline-success">Success</button>
                                                        <button type="button" class="btn btn-raised btn-outline-info">Info</button>
                                                        <button type="button" class="btn btn-raised btn-outline-warning">Warning</button>
                                                        <button type="button" class="btn btn-raised btn-outline-danger">Danger</button>
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
                <!-- Outline Button group end -->
                <!-- Outline Button with Icons start -->
                <section id="outline-button-with-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Outline buttons with Icons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Outline Buttons with icon.</p>
                                                <div class="form-group">
                                                    <!-- Outline buttons with Icons -->
                                                    <button type="button" class="mr-1 mb-1 btn btn-raised btn-outline-secondary btn-min-width"><i class="fa fa-star-o"></i>
                                                        Secondary</button>
                                                    <button type="button" class="mr-1 mb-1 btn btn-raised btn-outline-primary btn-min-width"><i class="fa fa-user-o"></i>
                                                        Primary</button>
                                                    <button type="button" class="mr-1 mb-1 btn btn-raised btn-outline-success btn-min-width"><i class="fa fa-search"></i>
                                                        Success</button>
                                                    <button type="button" class="mr-1 mb-1 btn btn-raised btn-outline-info btn-min-width"><i class="fa fa-camera"></i>
                                                        Info</button>
                                                    <button type="button" class="mr-1 mb-1 btn btn-raised btn-outline-warning btn-min-width"><i class="fa fa-camera"></i>
                                                        Warning</button>
                                                    <button type="button" class="mr-1 mb-1 btn btn-raised btn-outline-danger btn-min-width"><i class="fa fa-smile-o"></i>
                                                        Danger</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Outline Button with Icons end -->
                <!-- Split Outline Button dropdown with Icons start -->
                <section id="split-outline-button-dropdown-with-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Split Outline button dropdowns with icon &amp; dropdown outline</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <!-- Split Outline button dropdowns with icon & dropdown outline -->
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-raised btn-outline-secondary"><i class="fa fa-user-o"></i>
                                                            Secondary</button>
                                                        <button type="button" class="btn btn-raised btn-outline-secondary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-raised btn-outline-primary"><i class="fa fa-star-o"></i>
                                                            Primary</button>
                                                        <button type="button" class="btn btn-raised btn-outline-primary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-raised btn-outline-success"><i class="fa fa-search"></i>
                                                            Success</button>
                                                        <button type="button" class="btn btn-raised btn-outline-success dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-raised btn-outline-info"><i class="fa fa-camera"></i> Info</button>
                                                        <button type="button" class="btn btn-raised btn-outline-info dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-raised btn-outline-warning"><i class="fa fa-camera"></i>
                                                            Warning</button>
                                                        <button type="button" class="btn btn-raised btn-outline-warning dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-raised btn-outline-danger"><i class="fa fa-smile-o"></i>
                                                            Danger</button>
                                                        <button type="button" class="btn btn-raised btn-outline-danger dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Split Outline Button dropdown with Icons end -->
                <!-- Outline Button group with Icons start -->
                <section id="outline-button-group-with-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Outline Button group with icon</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Outline button group with icons and text.</p>
                                                <div class="form-group">
                                                    <!-- Outline button group with icons and text. -->
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-outline-secondary"><i class="fa fa-star-o"></i>
                                                            Secondary</button>
                                                        <button type="button" class="btn btn-raised btn-outline-primary"><i class="fa fa-user-o"></i>
                                                            Primary</button>
                                                        <button type="button" class="btn btn-raised btn-outline-success"><i class="fa fa-search"></i>
                                                            Success</button>
                                                        <button type="button" class="btn btn-raised btn-outline-info"><i class="fa fa-camera"></i> Info</button>
                                                        <button type="button" class="btn btn-raised btn-outline-warning"><i class="fa fa-camera"></i>
                                                            Warning</button>
                                                        <button type="button" class="btn btn-raised btn-outline-danger"><i class="fa fa-smile-o"></i>
                                                            Danger</button>
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
                <!-- Outline Button group with Icons end -->
                <!-- Outline Icon Buttons start -->
                <section id="outline-icons-buttons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Outline Icon Buttons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Outline Icon Buttons.</p>
                                                <div class="form-group">
                                                    <!-- Outline Icon Buttons -->
                                                    <button type="button" class="btn btn-raised btn-outline-secondary mr-1"><i class="fa fa-star-o"></i></button>
                                                    <button type="button" class="btn btn-raised btn-outline-primary mr-1"><i class="fa fa-user-o"></i></button>
                                                    <button type="button" class="btn btn-raised btn-outline-success mr-1"><i class="fa fa-search"></i></button>
                                                    <button type="button" class="btn btn-raised btn-outline-info mr-1"><i class="fa fa-camera"></i></button>
                                                    <button type="button" class="btn btn-raised btn-outline-warning mr-1"><i class="fa fa-camera"></i></button>
                                                    <button type="button" class="btn btn-raised btn-outline-danger mr-1"><i class="fa fa-smile-o"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Outline Icon Buttons end -->
                <!-- Outline Icon Button group start -->
                <section id="outline-icons-button-group">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Outline Icon Button group</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <p>Icon Button group without text.</p>
                                                <div class="form-group">
                                                    <!-- Outline Icon Button group -->
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-icon btn-outline-secondary"><i class="fa fa-star-o"></i></button>
                                                        <button type="button" class="btn btn-raised btn-icon btn-outline-primary"><i class="fa fa-user-o"></i></button>
                                                        <button type="button" class="btn btn-raised btn-icon btn-outline-success"><i class="fa fa-search"></i></button>
                                                        <button type="button" class="btn btn-raised btn-icon btn-outline-warning"><i class="fa fa-camera"></i></button>
                                                        <button type="button" class="btn btn-raised btn-icon btn-outline-info"><i class="fa fa-camera"></i></button>
                                                        <button type="button" class="btn btn-raised btn-icon btn-outline-danger"><i class="fa fa-smile-o"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p>Combine sets of button groups into <strong>Button toolbar</strong> for more complex components.</p>
                                                <div class="form-group">
                                                    <!-- Outline Icon Button toolbar group -->
                                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                        <div class="btn-group" role="group" aria-label="First Group">
                                                            <button type="button" class="btn btn-raised btn-icon btn-outline-danger"><i class="fa fa-umbrella"></i></button>
                                                            <button type="button" class="btn btn-raised btn-icon btn-outline-secondary"><i class="fa fa-moon-o"></i></button>
                                                            <button type="button" class="btn btn-raised btn-icon btn-outline-primary"><i class="fa fa-cloud-download"></i></button>
                                                        </div>
                                                        <div class="btn-group mx-2" role="group" aria-label="Second Group">
                                                            <button type="button" class="btn btn-raised btn-icon btn-outline-success"><i class="fa fa-thermometer"></i></button>
                                                            <button type="button" class="btn btn-raised btn-icon btn-outline-warning"><i class="fa fa-gavel"></i></button>
                                                            <button type="button" class="btn btn-raised btn-icon btn-outline-info"><i class="fa fa-tint"></i></button>
                                                        </div>
                                                        <div class="btn-group" role="group" aria-label="Third Group">
                                                            <button type="button" class="btn btn-raised btn-icon btn-outline-danger"><i class="fa fa-cloud"></i></button>
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
                <!-- Outline Icon Button group end -->
                <!-- Sizes start -->
                <section id="sizes">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Sizes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <!-- Outline Sizes -->
                                                <p>Add <code>.btn-lg</code> or <code>.btn-sm</code> for Fancy larger or smaller buttons size.</p>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-primary btn-lg">Large button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-secondary btn-lg">Large button</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-primary">Default button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-secondary">Default button</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-primary btn-sm">Small button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-secondary btn-sm">Small button</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p>Buttons with Icons in different sizes</p>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-success btn-lg"><i class="fa fa-star-o"></i>
                                                        Large button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-danger btn-lg"><i class="fa fa-heart"></i>
                                                        Large button</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-success"><i class="fa fa-check-circle"></i>
                                                        Default button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-danger"><i class="fa fa-archive"></i> Default
                                                        button</button>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-success btn-sm"><i class="fa fa-desktop"></i>
                                                        Small button</button>
                                                    <button type="button" class="btn mr-1 mb-1 btn-outline-danger btn-sm"><i class="fa fa-moon-o"></i>
                                                        Small button</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Sizes end -->
                <!-- Outline botton Dropdowns Sizes start -->
                <section id="outline-button-dropdowns-sizes">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Outline Button Dropdowns Sizes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <p>Button dropdowns work with buttons of all sizes.</p>
                                                <div class="form-group">
                                                    <!-- Outline Button Dropdowns Sizes -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-primary dropdown-toggle btn-lg" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Primary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-secondary dropdown-toggle btn-lg"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-primary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Primary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-secondary dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Secondary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-primary dropdown-toggle btn-sm" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">Primary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-secondary dropdown-toggle btn-sm"
                                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Secondary</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <p>Icon Buttons in different sizes</p>
                                                <div class="form-group">
                                                    <!-- Icon Buttons in different sizes -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-info dropdown-toggle btn-lg" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-info"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-warning dropdown-toggle btn-lg" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-warning"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-info dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-info"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-warning dropdown-toggle" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-warning"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-info dropdown-toggle btn-sm" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-info"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                    <div class="btn-group mr-1 mb-1">
                                                        <button type="button" class="btn btn-raised btn-outline-warning dropdown-toggle btn-sm" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-warning"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Outline botton Dropdowns Sizes end -->

                <!-- Button Group Sizes start -->
                <section id="button-group-sizes-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Button Group Sizes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code>
                                                    to each <code>.btn-group</code>.</p>
                                                <div class="form-group">
                                                    <!-- Button Group Sizes -->
                                                    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-outline-primary">Primary</button>
                                                        <button type="button" class="btn btn-raised btn-outline-danger">Danger</button>
                                                        <button type="button" class="btn btn-raised btn-outline-info">Info</button>
                                                        <button type="button" class="btn btn-raised btn-outline-warning">Warning</button>
                                                        <button type="button" class="btn btn-raised btn-outline-secondary">Secondary</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-outline-primary">Primary</button>
                                                        <button type="button" class="btn btn-raised btn-outline-danger">Danger</button>
                                                        <button type="button" class="btn btn-raised btn-outline-info">Info</button>
                                                        <button type="button" class="btn btn-raised btn-outline-warning">Warning</button>
                                                        <button type="button" class="btn btn-raised btn-outline-secondary">Secondary</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-outline-primary">Primary</button>
                                                        <button type="button" class="btn btn-raised btn-outline-danger">Danger</button>
                                                        <button type="button" class="btn btn-raised btn-outline-info">Info</button>
                                                        <button type="button" class="btn btn-raised btn-outline-warning">Warning</button>
                                                        <button type="button" class="btn btn-raised btn-outline-secondary">Secondary</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p>Button Group with Icons in different sizes</p>
                                                <div class="form-group">
                                                    <!-- Button Group Sizes with icon -->
                                                    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-outline-success"><i class="fa fa-search"></i>
                                                            Success</button>
                                                        <button type="button" class="btn btn-raised btn-outline-danger"><i class="fa fa-smile-o"></i>
                                                            Danger</button>
                                                        <button type="button" class="btn btn-raised btn-outline-primary"><i class="fa fa-user-o"></i>
                                                            Primary</button>
                                                        <button type="button" class="btn btn-raised btn-outline-warning"><i class="fa fa-link"></i> Warning</button>
                                                        <button type="button" class="btn btn-raised btn-outline-info"><i class="fa fa-info"></i> Info</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-outline-success"><i class="fa fa-search"></i>
                                                            Success</button>
                                                        <button type="button" class="btn btn-raised btn-outline-danger"><i class="fa fa-smile-o"></i>
                                                            Danger</button>
                                                        <button type="button" class="btn btn-raised btn-outline-primary"><i class="fa fa-user-o"></i>
                                                            Primary</button>
                                                        <button type="button" class="btn btn-raised btn-outline-warning"><i class="fa fa-link"></i> Warning</button>
                                                        <button type="button" class="btn btn-raised btn-outline-info"><i class="fa fa-info"></i> Info</button>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                        <button type="button" class="btn btn-raised btn-outline-success"><i class="fa fa-search"></i>
                                                            Success</button>
                                                        <button type="button" class="btn btn-raised btn-outline-danger"><i class="fa fa-smile-o"></i>
                                                            Danger</button>
                                                        <button type="button" class="btn btn-raised btn-outline-primary"><i class="fa fa-user-o"></i>
                                                            Primary</button>
                                                        <button type="button" class="btn btn-raised btn-outline-warning"><i class="fa fa-link"></i> Warning</button>
                                                        <button type="button" class="btn btn-raised btn-outline-info"><i class="fa fa-info"></i> Info</button>
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
                <!-- Button Group Sizes end -->

                <!-- Block level Button start -->
                <section id="block-level-button">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Block level buttons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Create block level buttons—those that span the full width of a parent—by adding <code>.btn-block</code>.</p>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <!-- block level buttons -->
                                                    <button type="button" class="btn btn-raised btn-outline-primary btn-lg mr-1 mb-1 btn-block">Block
                                                        level button</button>
                                                    <button type="button" class="btn btn-raised btn-outline-secondary btn-lg mr-1 mb-1 btn-block">Block
                                                        level button</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <!-- block level buttons with icon -->
                                                    <button type="button" class="btn btn-raised btn-outline-success btn-icon btn-lg mr-1 mb-1 btn-block">Block
                                                        level button</button>
                                                    <button type="button" class="btn btn-raised btn-outline-danger btn-icon btn-lg mr-1 mb-1 btn-block">Block
                                                        level button</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Block level Button end -->

                <!-- Nesting Button group start -->
                <section id="nesting-button-group">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Nesting Button group</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <p>Place a <code>.btn-group</code> within another <code>.btn-group</code> for dropdown menu buttons.</p>
                                                <div class="form-group">
                                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                        <button type="button" class="btn btn-raised btn-success">1</button>
                                                        <button type="button" class="btn btn-raised btn-danger">2</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupDrop3" type="button" class="btn btn-raised btn-secondary dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                                                                <a class="dropdown-item bg-warning" href="#">Dropdown link</a>
                                                                <a class="dropdown-item bg-warning" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <p>Nesting Button group with outline</p>
                                                <div class="form-group">
                                                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                                        <button type="button" class="btn btn-raised btn-outline-success">1</button>
                                                        <button type="button" class="btn btn-raised btn-outline-danger">2</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupDrop2" type="button" class="btn btn-raised btn-outline-info dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
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
                <!-- Nesting Button group end -->

                <!-- Vertical variation start -->
                <section id="vertical-variation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Vertical variation</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-3 col-lg-6 col-sm-12">
                                                <p>Make a set of buttons appear vertically.</p>
                                                <div class="form-group">
                                                    <!-- Vertical variation -->
                                                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                        <button type="button" class="btn btn-raised btn-secondary">Button</button>
                                                        <button type="button" class="btn btn-raised btn-secondary">Button</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-raised btn-secondary dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-raised btn-secondary">Button</button>
                                                        <button type="button" class="btn btn-raised btn-secondary">Button</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop2" type="button" class="btn btn-raised btn-secondary dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop3" type="button" class="btn btn-raised btn-secondary dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop4" type="button" class="btn btn-raised btn-secondary dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-sm-12">
                                                <p>Vertical variation with different colors</p>
                                                <div class="form-group">
                                                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                        <button type="button" class="btn btn-raised btn-primary">Primary</button>
                                                        <button type="button" class="btn btn-raised btn-secondary">Secondary</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop5" type="button" class="btn btn-raised btn-light dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Secondary
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-raised btn-success">Success</button>
                                                        <button type="button" class="btn btn-raised btn-danger">Danger</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop6" type="button" class="btn btn-raised btn-info dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop7" type="button" class="btn btn-raised btn-warning dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop8" type="button" class="btn btn-raised btn-primary dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-sm-12">
                                                <p>Vertical variation with Outlines</p>
                                                <div class="form-group">
                                                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                        <button type="button" class="btn btn-raised btn-outline-primary">Button</button>
                                                        <button type="button" class="btn btn-raised btn-outline-secondary">Button</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop9" type="button" class="btn btn-raised btn-outline-warning dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-raised btn-outline-success">Button</button>
                                                        <button type="button" class="btn btn-raised btn-outline-danger">Button</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop10" type="button" class="btn btn-raised btn-outline-info dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop11" type="button" class="btn btn-raised btn-outline-warning dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop12" type="button" class="btn btn-raised btn-outline-primary dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-6 col-sm-12">
                                                <p>Vertical variation with Outlines</p>
                                                <div class="form-group">
                                                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                                        <button type="button" class="btn btn-raised btn-outline-amber">Button</button>
                                                        <button type="button" class="btn btn-raised btn-outline-cyan">Button</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop13" type="button" class="btn btn-raised btn-outline-warning dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop5">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-raised btn-outline-red">Button</button>
                                                        <button type="button" class="btn btn-raised btn-outline-blue-grey">Button</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop14" type="button" class="btn btn-raised btn-outline-purple dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop5">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop15" type="button" class="btn btn-raised btn-outline-pink dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupVerticalDrop16" type="button" class="btn btn-raised btn-outline-amber dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Dropdown
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop6">
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                                <a class="dropdown-item" href="#">Dropdown link</a>
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
                <!-- Vertical variation end -->

                <!--Social Media button starts -->
                <section id="social-buttons">
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <div class="content-header">Social Media Buttons</div>
                        </div>
                    </div>
                    <div class="row">
                        <!--Basic Social Buttons Starts-->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Social Buttons</h4>
                                    <p>Use <code>.btn-social</code> class with <code>.btn-SOCIAL_NAME</code> class like <code>.btn-facebook</code>
                                        for social buttons with icons.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-adn"><span class="fa fa-adn"></span> App.net</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-bitbucket"><span class="fa fa-bitbucket"></span>
                                            Bitbucket</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-dropbox"><span class="fa fa-dropbox"></span> Dropbox</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-facebook"><span class="fa fa-facebook"></span>
                                            Facebook</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-flickr"><span class="fa fa-flickr"></span> Flickr</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-foursquare"><span class="fa fa-foursquare"></span>
                                            Foursquare</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-github"><span class="fa fa-github"></span> GitHub</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-google"><span class="fa fa-google"></span> Google</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-instagram"><span class="fa fa-instagram"></span>
                                            Instagram</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-linkedin"><span class="fa fa-linkedin"></span>
                                            LinkedIn</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-microsoft"><span class="fa fa-windows"></span>
                                            Microsoft</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-odnoklassniki"><span class="fa fa-odnoklassniki"></span>
                                            Odnoklassniki</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-openid"><span class="fa fa-openid"></span> OpenID</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-pinterest"><span class="fa fa-pinterest"></span>
                                            Pinterest</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-reddit"><span class="fa fa-reddit"></span> Reddit</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-soundcloud"><span class="fa fa-soundcloud"></span>
                                            SoundCloud</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-tumblr"><span class="fa fa-tumblr"></span> Tumblr</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-twitter"><span class="fa fa-twitter"></span> Twitter</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-vimeo"><span class="fa fa-vimeo-square"></span> Vimeo</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-vk"><span class="fa fa-vk"></span> VK</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-yahoo"><span class="fa fa-yahoo"></span> Yahoo!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Basic Social Buttons Ends-->

                        <!--Round Social Buttons Starts-->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Round Social Buttons</h4>
                                    <p>Use <code>.btn-social</code> class with <code>.btn-SOCIAL_NAME</code> class like <code>.btn-facebook</code>
                                        for social buttons with icons.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-adn"><span class="fa fa-adn"></span> App.net</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-bitbucket"><span class="fa fa-bitbucket"></span>
                                            Bitbucket</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-dropbox"><span class="fa fa-dropbox"></span>
                                            Dropbox</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-facebook"><span class="fa fa-facebook"></span>
                                            Facebook</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-flickr"><span class="fa fa-flickr"></span>
                                            Flickr</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-foursquare"><span class="fa fa-foursquare"></span>
                                            Foursquare</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-github"><span class="fa fa-github"></span>
                                            GitHub</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-google"><span class="fa fa-google"></span>
                                            Google</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-instagram"><span class="fa fa-instagram"></span>
                                            Instagram</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-linkedin"><span class="fa fa-linkedin"></span>
                                            LinkedIn</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-microsoft"><span class="fa fa-windows"></span>
                                            Microsoft</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-odnoklassniki"><span class="fa fa-odnoklassniki"></span>
                                            Odnoklassniki</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-openid"><span class="fa fa-openid"></span>
                                            OpenID</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-pinterest"><span class="fa fa-pinterest"></span>
                                            Pinterest</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-reddit"><span class="fa fa-reddit"></span>
                                            Reddit</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-soundcloud"><span class="fa fa-soundcloud"></span>
                                            SoundCloud</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-tumblr"><span class="fa fa-tumblr"></span>
                                            Tumblr</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-twitter"><span class="fa fa-twitter"></span>
                                            Twitter</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-vimeo"><span class="fa fa-vimeo-square"></span>
                                            Vimeo</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-vk"><span class="fa fa-vk"></span> VK</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-yahoo"><span class="fa fa-yahoo"></span>
                                            Yahoo!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Round Social Buttons Ends-->

                        <!--Social Outline Buttons Starts-->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Social Outline Buttons</h4>
                                    <p>Use <code>.btn-outline-SOCIAL_NAME</code> class like <code>.btn-outline-facebook</code> for social outline
                                        buttons.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-adn"><span class="fa fa-adn"></span> App.net</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-bitbucket"><span class="fa fa-bitbucket"></span>
                                            Bitbucket</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-dropbox"><span class="fa fa-dropbox"></span>
                                            Dropbox</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-facebook"><span class="fa fa-facebook"></span>
                                            Facebook</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-flickr"><span class="fa fa-flickr"></span>
                                            Flickr</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-foursquare"><span class="fa fa-foursquare"></span>
                                            Foursquare</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-github"><span class="fa fa-github"></span>
                                            GitHub</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-google"><span class="fa fa-google"></span>
                                            Google</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-instagram"><span class="fa fa-instagram"></span>
                                            Instagram</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-linkedin"><span class="fa fa-linkedin"></span>
                                            LinkedIn</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-microsoft"><span class="fa fa-windows"></span>
                                            Microsoft</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-odnoklassniki"><span class="fa fa-odnoklassniki"></span>
                                            Odnoklassniki</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-openid"><span class="fa fa-openid"></span>
                                            OpenID</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-pinterest"><span class="fa fa-pinterest"></span>
                                            Pinterest</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-reddit"><span class="fa fa-reddit"></span>
                                            Reddit</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-soundcloud"><span class="fa fa-soundcloud"></span>
                                            SoundCloud</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-tumblr"><span class="fa fa-tumblr"></span>
                                            Tumblr</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-twitter"><span class="fa fa-twitter"></span>
                                            Twitter</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-vimeo"><span class="fa fa-vimeo-square"></span>
                                            Vimeo</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-vk"><span class="fa fa-vk"></span> VK</a>
                                        <a class="btn btn-social btn-min-width mr-2 mb-2 btn-outline-yahoo"><span class="fa fa-yahoo"></span>
                                            Yahoo!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Social Outline Buttons Ends-->

                        <!--Social Round Outline Buttons Starts-->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Social Round Outline Buttons</h4>
                                    <p>Use <code>.btn-outline-SOCIAL_NAME</code> class like <code>.btn-outline-facebook</code> for social outline
                                        buttons.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-adn"><span class="fa fa-adn"></span>
                                            App.net</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-bitbucket"><span class="fa fa-bitbucket"></span>
                                            Bitbucket</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-dropbox"><span class="fa fa-dropbox"></span>
                                            Dropbox</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-facebook"><span class="fa fa-facebook"></span>
                                            Facebook</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-flickr"><span class="fa fa-flickr"></span>
                                            Flickr</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-foursquare"><span class="fa fa-foursquare"></span>
                                            Foursquare</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-github"><span class="fa fa-github"></span>
                                            GitHub</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-google"><span class="fa fa-google"></span>
                                            Google</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-instagram"><span class="fa fa-instagram"></span>
                                            Instagram</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-linkedin"><span class="fa fa-linkedin"></span>
                                            LinkedIn</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-microsoft"><span class="fa fa-windows"></span>
                                            Microsoft</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-odnoklassniki"><span class="fa fa-odnoklassniki"></span>
                                            Odnoklassniki</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-openid"><span class="fa fa-openid"></span>
                                            OpenID</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-pinterest"><span class="fa fa-pinterest"></span>
                                            Pinterest</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-reddit"><span class="fa fa-reddit"></span>
                                            Reddit</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-soundcloud"><span class="fa fa-soundcloud"></span>
                                            SoundCloud</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-tumblr"><span class="fa fa-tumblr"></span>
                                            Tumblr</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-twitter"><span class="fa fa-twitter"></span>
                                            Twitter</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-vimeo"><span class="fa fa-vimeo-square"></span>
                                            Vimeo</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-vk"><span class="fa fa-vk"></span>
                                            VK</a>
                                        <a class="btn btn-social btn-round btn-min-width mr-2 mb-2 btn-outline-yahoo"><span class="fa fa-yahoo"></span>
                                            Yahoo!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Social Round Outline Buttons Ends-->

                        <!--Flat Social Buttons Starts-->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Flat Social Buttons</h4>
                                    <p>Use <code>.btn-SOCIAL_NAME-flat</code> class like <code>.btn-facebook-flat</code> class for flat social
                                        buttons.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <a class="btn btn-social btn-min-width btn-adn-flat mr-2 mb-2 btn-adn"><span class="fa fa-adn"></span>
                                            App.net</a>
                                        <a class="btn btn-social btn-min-width btn-bitbucket-flat mr-2 mb-2 btn-bitbucket"><span class="fa fa-bitbucket"></span>
                                            Bitbucket</a>
                                        <a class="btn btn-social btn-min-width btn-dropbox-flat mr-2 mb-2 btn-dropbox"><span class="fa fa-dropbox"></span>
                                            Dropbox</a>
                                        <a class="btn btn-social btn-min-width btn-facebook-flat mr-2 mb-2 btn-facebook"><span class="fa fa-facebook"></span>
                                            Facebook</a>
                                        <a class="btn btn-social btn-min-width btn-flickr-flat mr-2 mb-2 btn-flickr"><span class="fa fa-flickr"></span>
                                            Flickr</a>
                                        <a class="btn btn-social btn-min-width btn-foursquare-flat mr-2 mb-2 btn-foursquare"><span class="fa fa-foursquare"></span>
                                            Foursquare</a>
                                        <a class="btn btn-social btn-min-width btn-github-flat mr-2 mb-2 btn-github"><span class="fa fa-github"></span>
                                            GitHub</a>
                                        <a class="btn btn-social btn-min-width btn-google-flat mr-2 mb-2 btn-google"><span class="fa fa-google"></span>
                                            Google</a>
                                        <a class="btn btn-social btn-min-width btn-instagram-flat mr-2 mb-2 btn-instagram"><span class="fa fa-instagram"></span>
                                            Instagram</a>
                                        <a class="btn btn-social btn-min-width btn-linkedin-flat mr-2 mb-2 btn-linkedin"><span class="fa fa-linkedin"></span>
                                            LinkedIn</a>
                                        <a class="btn btn-social btn-min-width btn-microsoft-flat mr-2 mb-2 btn-microsoft"><span class="fa fa-windows"></span>
                                            Microsoft</a>
                                        <a class="btn btn-social btn-min-width btn-odnoklassniki-flat mr-2 mb-2 btn-odnoklassniki"><span class="fa fa-odnoklassniki"></span>
                                            Odnoklassniki</a>
                                        <a class="btn btn-social btn-min-width btn-openid-flat mr-2 mb-2 btn-openid"><span class="fa fa-openid"></span>
                                            OpenID</a>
                                        <a class="btn btn-social btn-min-width btn-pinterest-flat mr-2 mb-2 btn-pinterest"><span class="fa fa-pinterest"></span>
                                            Pinterest</a>
                                        <a class="btn btn-social btn-min-width btn-reddit-flat mr-2 mb-2 btn-reddit"><span class="fa fa-reddit"></span>
                                            Reddit</a>
                                        <a class="btn btn-social btn-min-width btn-soundcloud-flat mr-2 mb-2 btn-soundcloud"><span class="fa fa-soundcloud"></span>
                                            SoundCloud</a>
                                        <a class="btn btn-social btn-min-width btn-tumblr-flat mr-2 mb-2 btn-tumblr"><span class="fa fa-tumblr"></span>
                                            Tumblr</a>
                                        <a class="btn btn-social btn-min-width btn-twitter-flat mr-2 mb-2 btn-twitter"><span class="fa fa-twitter"></span>
                                            Twitter</a>
                                        <a class="btn btn-social btn-min-width btn-vimeo-flat mr-2 mb-2 btn-vimeo"><span class="fa fa-vimeo-square"></span>
                                            Vimeo</a>
                                        <a class="btn btn-social btn-min-width btn-vk-flat mr-2 mb-2 btn-vk"><span class="fa fa-vk"></span> VK</a>
                                        <a class="btn btn-social btn-min-width btn-yahoo-flat mr-2 mb-2 btn-yahoo"><span class="fa fa-yahoo"></span>
                                            Yahoo!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Flat Social Buttons Ends-->

                        <!--Social Icon Buttons Starts-->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Social Icon Buttons</h4>
                                    <p>Use <code>.btn-social-icon</code> class for social icon buttons.</p>
                                    <p>Use <code>.btn-round</code> class for round buttons.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="social-icon-square">
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-adn"><span class="fa fa-adn"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-bitbucket"><span class="fa fa-bitbucket"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-dropbox"><span class="fa fa-dropbox"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-facebook"><span class="fa fa-facebook"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-flickr"><span class="fa fa-flickr"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-foursquare"><span class="fa fa-foursquare"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-github"><span class="fa fa-github"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-google"><span class="fa fa-google"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-instagram"><span class="fa fa-instagram"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-linkedin"><span class="fa fa-linkedin"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-microsoft"><span class="fa fa-windows"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-odnoklassniki"><span class="fa fa-odnoklassniki"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-openid"><span class="fa fa-openid"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-pinterest"><span class="fa fa-pinterest"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-reddit"><span class="fa fa-reddit"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-soundcloud"><span class="fa fa-soundcloud"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-tumblr"><span class="fa fa-tumblr"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-twitter"><span class="fa fa-twitter"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-vimeo"><span class="fa fa-vimeo-square"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-vk"><span class="fa fa-vk"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-yahoo"><span class="fa fa-yahoo"></span></a>
                                        </div>
                                        <div class="social-icon-round">
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-adn"><span class="fa fa-adn"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-bitbucket"><span class="fa fa-bitbucket"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-dropbox"><span class="fa fa-dropbox"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-facebook"><span class="fa fa-facebook"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-flickr"><span class="fa fa-flickr"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-foursquare"><span class="fa fa-foursquare"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-github"><span class="fa fa-github"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-google"><span class="fa fa-google"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-instagram"><span class="fa fa-instagram"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-linkedin"><span class="fa fa-linkedin"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-microsoft"><span class="fa fa-windows"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-odnoklassniki"><span class="fa fa-odnoklassniki"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-openid"><span class="fa fa-openid"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-pinterest"><span class="fa fa-pinterest"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-reddit"><span class="fa fa-reddit"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-soundcloud"><span class="fa fa-soundcloud"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-tumblr"><span class="fa fa-tumblr"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-twitter"><span class="fa fa-twitter"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-vimeo"><span class="fa fa-vimeo-square"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-vk"><span class="fa fa-vk"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-yahoo"><span class="fa fa-yahoo"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Social Icon Buttons Ends-->

                        <!--Social Icon and Round Outline Buttons Starts-->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Social Icon and Round Outline Buttons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="social-icon-square">
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-adn"><span class="fa fa-adn"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-bitbucket"><span class="fa fa-bitbucket"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-dropbox"><span class="fa fa-dropbox"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-flickr"><span class="fa fa-flickr"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-foursquare"><span class="fa fa-foursquare"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-github"><span class="fa fa-github"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-google"><span class="fa fa-google"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-instagram"><span class="fa fa-instagram"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-linkedin"><span class="fa fa-linkedin"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-microsoft"><span class="fa fa-windows"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-odnoklassniki"><span class="fa fa-odnoklassniki"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-openid"><span class="fa fa-openid"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-pinterest"><span class="fa fa-pinterest"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-reddit"><span class="fa fa-reddit"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-soundcloud"><span class="fa fa-soundcloud"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-tumblr"><span class="fa fa-tumblr"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-vimeo"><span class="fa fa-vimeo-square"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-vk"><span class="fa fa-vk"></span></a>
                                            <a class="btn btn-social-icon mr-2 mb-2 btn-outline-yahoo"><span class="fa fa-yahoo"></span></a>
                                        </div>
                                        <div class="social-icon-round">
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-adn"><span class="fa fa-adn"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-bitbucket"><span class="fa fa-bitbucket"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-dropbox"><span class="fa fa-dropbox"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-flickr"><span class="fa fa-flickr"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-foursquare"><span class="fa fa-foursquare"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-github"><span class="fa fa-github"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-google"><span class="fa fa-google"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-instagram"><span class="fa fa-instagram"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-linkedin"><span class="fa fa-linkedin"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-microsoft"><span class="fa fa-windows"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-odnoklassniki"><span class="fa fa-odnoklassniki"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-openid"><span class="fa fa-openid"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-pinterest"><span class="fa fa-pinterest"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-reddit"><span class="fa fa-reddit"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-soundcloud"><span class="fa fa-soundcloud"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-tumblr"><span class="fa fa-tumblr"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-vimeo"><span class="fa fa-vimeo-square"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-vk"><span class="fa fa-vk"></span></a>
                                            <a class="btn btn-social-icon btn-round mr-2 mb-2 btn-outline-yahoo"><span class="fa fa-yahoo"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Social Icon and Round Outline Buttons Ends-->

                        <!--Social Block Buttons Starts-->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Social Block Buttons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="social-buttons-block">
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <a class="btn btn-block btn-social mb-2 btn-adn">
                                                        <span class="fa fa-adn"></span> Sign in with App.net
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-bitbucket">
                                                        <span class="fa fa-bitbucket"></span> Sign in with Bitbucket
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-dropbox">
                                                        <span class="fa fa-dropbox"></span> Sign in with Dropbox
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-facebook">
                                                        <span class="fa fa-facebook"></span> Sign in with Facebook
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-flickr">
                                                        <span class="fa fa-flickr"></span> Sign in with Flickr
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-foursquare">
                                                        <span class="fa fa-foursquare"></span> Sign in with Foursquare
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-github">
                                                        <span class="fa fa-github"></span> Sign in with GitHub
                                                    </a>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <a class="btn btn-block btn-social mb-2 btn-google">
                                                        <span class="fa fa-google"></span> Sign in with Google
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-instagram">
                                                        <span class="fa fa-instagram"></span> Sign in with Instagram
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-linkedin">
                                                        <span class="fa fa-linkedin"></span> Sign in with LinkedIn
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-microsoft">
                                                        <span class="fa fa-windows"></span> Sign in with Microsoft
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-odnoklassniki">
                                                        <span class="fa fa-odnoklassniki"></span> Sign in with Odnoklassniki
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-openid">
                                                        <span class="fa fa-openid"></span> Sign in with OpenID
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-pinterest">
                                                        <span class="fa fa-pinterest"></span> Sign in with Pinterest
                                                    </a>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <a class="btn btn-block btn-social mb-2 btn-reddit">
                                                        <span class="fa fa-reddit"></span> Sign in with Reddit
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-soundcloud">
                                                        <span class="fa fa-soundcloud"></span> Sign in with SoundCloud
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-tumblr">
                                                        <span class="fa fa-tumblr"></span> Sign in with Tumblr
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-twitter">
                                                        <span class="fa fa-twitter"></span> Sign in with Twitter
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-vimeo">
                                                        <span class="fa fa-vimeo-square"></span> Sign in with Vimeo
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-vk">
                                                        <span class="fa fa-vk"></span> Sign in with VK
                                                    </a>
                                                    <a class="btn btn-block btn-social mb-2 btn-yahoo">
                                                        <span class="fa fa-yahoo"></span> Sign in with Yahoo!
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Social Block Buttons Ends-->
                    </div>
                </section>
                <!--Social Media button Ends -->

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
