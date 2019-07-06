@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- Minimal statistics section start -->
                <section id="minimal-statistics">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Minimal Statistics Cards</div>
                            <p class="content-sub-header">Statistics on minimal cards.</p>
                        </div>
                    </div>

                    <div class="row" matchHeight="card">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="px-3 py-3">
                                        <div class="media">
                                            <div class="media-body text-left">
                                                <h3 class="mb-1 danger">278</h3>
                                                <span>New Projects</span>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="icon-rocket danger font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="px-3 py-3">
                                        <div class="media">
                                            <div class="media-body text-left">
                                                <h3 class="mb-1 success">156</h3>
                                                <span>New Clients</span>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="icon-user success font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="px-3 py-3">
                                        <div class="media">
                                            <div class="media-body text-left">
                                                <h3 class="mb-1 warning">64.89 %</h3>
                                                <span>Conversion Rate</span>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="icon-pie-chart warning font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="px-3 py-3">
                                        <div class="media">
                                            <div class="media-body text-left">
                                                <h3 class="mb-1 primary">423</h3>
                                                <span>Support Tickets</span>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="icon-support primary font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" matchHeight="card">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="px-3 py-3">
                                        <div class="media">
                                            <div class="media-body text-left">
                                                <h3 class="mb-1 primary">278</h3>
                                                <span>New Posts</span>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="icon-book-open primary font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        <div class="mt-2 mb-0">
                                            <ngb-progressbar type="primary" [value]="80" class="progress-bar-sm"></ngb-progressbar>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="px-3 py-3">
                                        <div class="media">
                                            <div class="media-body text-left">
                                                <h3 class="mb-1 warning">156</h3>
                                                <span>New Comments</span>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="icon-bubbles warning font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        <div class="mt-2 mb-0">
                                            <ngb-progressbar type="warning" [value]="35" class="progress-bar-sm"></ngb-progressbar>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="px-3 py-3">
                                        <div class="media">
                                            <div class="media-body text-left">
                                                <h3 class="mb-1 success">64.89 %</h3>
                                                <span>Bounce Rate</span>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="icon-cup success font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        <div class="mt-2 mb-0">
                                            <ngb-progressbar type="success" [value]="60" class="progress-bar-sm"></ngb-progressbar>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="px-3 py-3">
                                        <div class="media">
                                            <div class="media-body text-left">
                                                <h3 class="mb-1 danger">423</h3>
                                                <span>Total Visits</span>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="icon-direction danger font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                        <div class="mt-2 mb-0">
                                            <ngb-progressbar type="danger" [value]="40" class="progress-bar-sm"></ngb-progressbar>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Minimal statistics section end -->

                <!-- Minimal statistics with bg color section start -->
                <section id="minimal-statistics-bg">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Minimal Statistics With Background Color</div>
                            <p class="content-sub-header">Statistics on minimal cards with background color.</p>
                        </div>
                    </div>

                    <div class="row" matchHeight="card">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-warning">
                                <div class="card-content">
                                    <div class="px-3 py-3">
                                        <div class="media">
                                            <div class="media-body white text-left">
                                                <h3>278</h3>
                                                <span>New Projects</span>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="icon-rocket white font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-success">
                                <div class="card-content">
                                    <div class="px-3 py-3">
                                        <div class="media">
                                            <div class="media-body white text-left">
                                                <h3>156</h3>
                                                <span>New Clients</span>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="icon-user white font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-danger">
                                <div class="card-content">
                                    <div class="px-3 py-3">
                                        <div class="media">
                                            <div class="media-body white text-left">
                                                <h3>64.89 %</h3>
                                                <span>Conversion Rate</span>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="icon-pie-chart white font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-primary">
                                <div class="card-content">
                                    <div class="px-3 py-3">
                                        <div class="media">
                                            <div class="media-body white text-left">
                                                <h3>423</h3>
                                                <span>Support Tickets</span>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <i class="icon-support white font-large-2 float-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" matchHeight="card">
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-primary">
                                <div class="card-content">
                                    <div class="px-3 py-3">
                                        <div class="media">
                                            <div class="media-left align-self-center">
                                                <i class="icon-pencil white font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body white text-right">
                                                <h3>278</h3>
                                                <span>New Posts</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-danger">
                                <div class="card-content">
                                    <div class="px-3 py-3">
                                        <div class="media">
                                            <div class="media-left align-self-center">
                                                <i class="icon-speech white font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body white text-right">
                                                <h3>156</h3>
                                                <span>New Comments</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-success">
                                <div class="card-content">
                                    <div class="px-3 py-3">
                                        <div class="media">
                                            <div class="media-left align-self-center">
                                                <i class="icon-graph white font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body white text-right">
                                                <h3>64.89 %</h3>
                                                <span>Bounce Rate</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12">
                            <div class="card bg-warning">
                                <div class="card-content">
                                    <div class="px-3 py-3">
                                        <div class="media">
                                            <div class="media-left align-self-center">
                                                <i class="icon-pointer white font-large-2 float-left"></i>
                                            </div>
                                            <div class="media-body white text-right">
                                                <h3>423</h3>
                                                <span>Total Visits</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Minimal statistics with bg color section end -->

                <!-- Basic example section start -->
                <section id="basic-examples">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Basic Examples</div>
                            <p class="content-sub-header">Cards require a small amount of markup and classes to provide you with as much
                                control as possible. These classes and
                                markup are flexible though and can typically be remixed and extended with ease. For example, if your card has
                                no flush
                                content like images, feel free to put the <code>.card-body</code> class on the <code>.card</code> element to
                                consolidate
                                your markup.</p>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="app-assets/img/photos/06.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Icing powder caramels macaroon. Toffee sugar plum brownie pastry gummies jelly.</p>
                                        <a class="btn btn-raised btn-warning">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <img class="card-img img-fluid mb-3" src="app-assets/img/photos/08.jpg" alt="Card image cap">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Sweet halvah dragée jelly-o halvah carrot cake oat cake. Donut jujubes jelly chocolate
                                            cake marzipan chocolate chocolate
                                            bar.
                                        </p>
                                        <a class="btn btn-raised btn-success">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Card title</h4>
                                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                                </div>
                                <div class="card-content">
                                    <img class="img-fluid" src="app-assets/img/photos/10.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a class="card-link danger">Card link</a>
                                        <a class="card-link danger">Another link</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-header">
                                        <h4 class="card-title">Card title</h4>
                                        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <img class="img-fluid" src="app-assets/img/photos/09.jpg" alt="Card image cap">
                                            <p class="card-text mt-1">Topping dessert marshmallow gummi bears chupa chups marzipan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a class="card-link info darken-2">Card link</a>
                                    <a class="card-link info darken-2">Another link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic example section end -->

                <!-- Content types section start -->
                <section id="content-types">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Content Types</div>
                            <p class="content-sub-header">Cards support a wide variety of content, including images, text, list groups,
                                links, and more. Mix and match multiple
                                content types to create the card you need.</p>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="app-assets/img/photos/14.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Basic</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.</p>
                                        <a class="btn btn-raised btn-danger">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header pb-2">
                                    <h4 class="card-title">List Group</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                        content.</p>
                                </div>
                                <div class="card-content">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <span class="badge bg-primary float-right">7</span> Cras justo odio
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge bg-info float-right">2</span> Dapibus ac facilisis in
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge bg-warning float-right">1</span> Morbi leo risus
                                        </li>
                                        <li class="list-group-item">
                                            <span class="badge bg-success float-right">4</span> Porta ac consectetur ac
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer border-top-0">
                                    <a class="card-link success">Card link</a>
                                    <a class="card-link success">Another link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Carousel</h4>
                                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                                </div>
                                <div class="card-content">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img src="app-assets/img/photos/17.jpg" class="d-block w-100" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="app-assets/img/photos/13.jpg" class="d-block w-100" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="app-assets/img/photos/12.jpg" class="d-block w-100" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="fa fa-angle-left icon-prev" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="fa fa-angle-right icon-next" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- Content types section end -->

                <!-- Card sizing section start -->
                <section id="sizing">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Sizing</div>
                            <p class="content-sub-header">Constrain the width of cards via custom CSS, our predefined grid classes, or with
                                custom styles using our grid mixins.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Project Info</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <div class="card-text">
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>

                                        <form class="form">
                                            <div class="form-body">
                                                <h4 class="form-section mt-3"><i class="ft-user"></i> Personal Info</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1" class="sr-only">First Name</label>
                                                            <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="fname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2" class="sr-only">Last Name</label>
                                                            <input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput3" class="sr-only">E-mail</label>
                                                            <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput4" class="sr-only">Contact Number</label>
                                                            <input type="number" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
                                                        </div>
                                                    </div>
                                                </div>

                                                <h4 class="form-section mt-3"><i class="ft-check-circle"></i> Requirements</h4>

                                                <div class="form-group">
                                                    <label for="companyName" class="sr-only">Company</label>
                                                    <input type="text" id="companyName" class="form-control" placeholder="Company Name" name="company">
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput5" class="sr-only">Interested in</label>
                                                            <select id="projectinput5" name="interested" class="form-control">
                                                                <option value="none" selected="" disabled="">Interested in</option>
                                                                <option value="design">design</option>
                                                                <option value="development">development</option>
                                                                <option value="illustration">illustration</option>
                                                                <option value="branding">branding</option>
                                                                <option value="video">video</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput6" class="sr-only">Budget</label>
                                                            <select id="projectinput6" name="budget" class="form-control">
                                                                <option value="0" selected="" disabled="">Budget</option>
                                                                <option value="less than 5000$">less than 5000$</option>
                                                                <option value="5000$ - 10000$">5000$ - 10000$</option>
                                                                <option value="10000$ - 20000$">10000$ - 20000$</option>
                                                                <option value="more than 20000$">more than 20000$</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="projectinput8" class="sr-only">About Project</label>
                                                    <textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-raised btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="button" class="btn btn-raised btn-primary">
                                                    <i class="ft-check"></i> Save
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">User Profile</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <div class="card-text">
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>

                                        <form class="form">
                                            <div class="form-body">
                                                <h4 class="form-section mt-3"><i class="ft-eye"></i> About User</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="userinput1" class="sr-only">Fist Name</label>
                                                            <input type="text" id="userinput1" class="form-control" placeholder="Name" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="userinput2" class="sr-only">Last Name</label>
                                                            <input type="text" id="userinput2" class="form-control" placeholder="Company" name="company">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="userinput3" class="sr-only">Username</label>
                                                            <input type="text" id="userinput3" class="form-control" placeholder="Username" name="username">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="userinput4" class="sr-only">Nick Name</label>
                                                            <input type="text" id="userinput4" class="form-control" placeholder="Nick Name" name="nickname">
                                                        </div>
                                                    </div>
                                                </div>

                                                <h4 class="form-section mt-3"><i class="ft-mail"></i> Contact Info &amp; Bio</h4>

                                                <div class="form-group">
                                                    <label for="userinput5" class="sr-only">Email</label>
                                                    <input class="form-control" type="email" placeholder="email" id="userinput5">
                                                </div>

                                                <div class="form-group">
                                                    <label for="userinput6" class="sr-only">Website</label>
                                                    <input class="form-control" type="url" placeholder="http://" id="userinput6">
                                                </div>

                                                <div class="form-group">
                                                    <label for="userinput8" class="sr-only">Bio</label>
                                                    <textarea id="userinput8" rows="5" class="form-control" name="bio" placeholder="Bio"></textarea>
                                                </div>

                                            </div>

                                            <div class="form-actions right">
                                                <button type="button" class="btn btn-raised btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </button>
                                                <button type="button" class="btn btn-raised btn-primary">
                                                    <i class="ft-check"></i> Save
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Card sizing section end -->

                <!-- Text alignment section start -->
                <section id="text-alignment">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Text alignment</div>
                            <p class="content-sub-header">You can quickly change the text alignment of any card—in its entirety or specific
                                parts—with our text align classes.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title info">Text Align Left</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">Gummi bears I love oat cake gingerbread donut cotton candy pie biscuit tart. Chocolate
                                            cake chocolate cake I love marzipan
                                            cookie macaroon. Tart I love I love carrot cake carrot cake chupa chups caramels. Carrot cake pastry
                                            cotton candy.</p>
                                        <p class="card-text">Dessert I love brownie biscuit topping I love chocolate cake gingerbread jelly beans.
                                            Chocolate cake cake cheesecake.
                                            Chocolate cake pastry macaroon.</p>
                                        <a class="btn btn-raised btn-info">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card text-center">
                                <div class="card-header">
                                    <h4 class="card-title success">Text Align Center</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">Gummi bears I love oat cake gingerbread donut cotton candy pie biscuit tart. Chocolate
                                            cake chocolate cake I love marzipan
                                            cookie macaroon. Tart I love I love carrot cake carrot cake chupa chups caramels. Carrot cake pastry
                                            cotton candy.</p>
                                        <p class="card-text">Dessert I love brownie biscuit topping I love chocolate cake gingerbread jelly beans.
                                            Chocolate cake cake cheesecake.
                                            Chocolate cake pastry macaroon.</p>
                                        <a class="btn btn-raised btn-success">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card text-right">
                                <div class="card-header">
                                    <h4 class="card-title danger">Text Align Right</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">Gummi bears I love oat cake gingerbread donut cotton candy pie biscuit tart. Chocolate
                                            cake chocolate cake I love marzipan
                                            cookie macaroon. Tart I love I love carrot cake carrot cake chupa chups caramels. Carrot cake pastry
                                            cotton candy.</p>
                                        <p class="card-text">Dessert I love brownie biscuit topping I love chocolate cake gingerbread jelly beans.
                                            Chocolate cake cake cheesecake.
                                            Chocolate cake pastry macaroon.</p>
                                        <a class="btn btn-raised btn-danger">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Text alignment section end -->

                <!-- Header footer section start -->
                <section id="header-footer">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Header and footer</div>
                            <p class="content-sub-header">Add an optional header and/or footer within a card.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Card</h4>
                                    <h6>Basic Card With Header & Footer</h6>
                                </div>
                                <div class="card-content">
                                    <img class="img-fluid" src="app-assets/img/photos/02.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.</p>
                                        <a href="javascript:void(0);" class="card-link">Card link</a>
                                        <a href="javascript:void(0);" class="card-link">Another link</a>
                                    </div>
                                </div>
                                <div class="card-footer text-muted">
                                    <span class="float-left">3 hours ago</span>
                                    <span class="float-right">
            <a href="javascript:void(0);" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
          </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Floating Action Button Card</h4>
                                    <h6>Floating Action Button Card With Header & Footer</h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-img">
                                        <img class="img-fluid" src="app-assets/img/photos/09.jpg" alt="Card image cap">
                                        <a class="btn btn-floating halfway-fab btn-large bg-danger"><i class="ft-plus"></i></a>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                                        <a class="card-link danger">Card link</a>
                                        <a class="card-link danger">Another link</a>
                                    </div>
                                </div>
                                <div class="card-footer text-muted">
                                    <span class="float-left">1 day ago</span>
                                    <span class="tags float-right">
            <span class="badge bg-success white">Technology</span>
            <span class="badge bg-warning white">Gaming</span>
          </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Carousel</h4>
                                    <h6>Carousel Card With Header & Footer</h6>
                                </div>
                                <div class="card-content">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img src="app-assets/img/photos/02.jpg" class="d-block w-100" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="app-assets/img/photos/03.jpg" class="d-block w-100" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="app-assets/img/photos/01.jpg" class="d-block w-100" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="fa fa-angle-left icon-prev" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="fa fa-angle-right icon-next" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                                            content.</p>
                                        <a href="javascript:void(0);" class="card-link">Card link</a>
                                        <a href="javascript:void(0);" class="card-link">Another link</a>
                                    </div>
                                </div>
                                <div class="card-footer text-muted">
                                    <span class="float-left">2 days ago</span>
                                    <span class="tags float-right">
            <span class="badge bg-primary white">Branding</span>
            <span class="badge bg-danger white">Design</span>
          </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Header footer section end -->

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
