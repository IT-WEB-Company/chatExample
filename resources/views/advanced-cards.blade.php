@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- Fabs (Floating Action Buttons) in cards start -->
                <section id="fabs-examples">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Fabs (Floating Action Buttons) in cards</div>
                            <p class="content-sub-header">Cards require a small amount of markup and classes to provide you with as much
                                control as possible. These classes
                                and markup are flexible though and can typically be remixed and extended with ease. For example, if your
                                card has no flush content like images, feel free to put the <code>.card-content</code> class on the
                                <code>.card</code>
                                element to consolidate your markup.</p>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-img">
                                        <img class="card-img-top img-fluid" src="app-assets/img/photos/14.jpg" alt="Card image cap">
                                        <h4 class="card-title">Card title</h4>
                                        <a class="btn btn-floating halfway-fab bg-warning"><i class="ft-plus"></i></a>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Icing powder caramels macaroon. Toffee sugar plum brownie pastry gummies jelly.</p>
                                        <a class="btn btn-raised btn-warning">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Card title</h4>
                                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-img">
                                        <img class="img-fluid" src="app-assets/img/photos/15.jpg" alt="Card image cap">
                                        <a class="btn btn-floating halfway-fab btn-large bg-danger"><i class="ft-plus"></i></a>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Bear claw sesame snaps gummies chocolate.</p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a class="card-link danger">Card link</a>
                                    <a class="card-link danger">Another link</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-img">
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
                                        <a class="btn btn-floating halfway-fab btn-large bg-warning"><i class="ft-plus"></i></a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Sweet halvah dragée jelly-o halvah carrot cake oat cake. Donut jujubes jelly chocolate
                                            cake.</p>
                                        <a class="btn btn-raised btn-warning">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Fabs section end -->

                <!-- Horizontal cards start -->
                <section id="horizontal-examples">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Horizontal cards</div>
                            <p class="content-sub-header">Cards with horizontal image.</p>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card horizontal">
                                <div class="card-content d-flex justify-content-between">
                                    <div class="card-img">
                                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img src="app-assets/img/photos/01.jpg" class="d-block w-100" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="app-assets/img/photos/02.jpg" class="d-block w-100" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="app-assets/img/photos/03.jpg" class="d-block w-100" alt="Third slide">
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
                                    </div>
                                    <div class="card-body">
                                        <div class="card-stacked align-self-center">
                                            <div class="px-3">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Sweet halvah dragée jelly-o halvah carrot cake oat cake.</p>
                                                <a class="btn btn-raised btn-success">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card horizontal">
                                <div class="card-content d-flex justify-content-between">
                                    <div class="card-body">
                                        <div class="card-stacked align-self-center">
                                            <div class="px-3">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Toffee sugar plum brownie pastry gummies jelly.</p>
                                                <a class="btn btn-raised btn-danger">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-img">
                                        <img class="card-img-top img-fluid" src="app-assets/img/photos/06.jpg" alt="Card image cap">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Horizontal cards end -->


                <!-- Overlap Image Cards start -->
                <section id="overlap-image-examples">
                    <div class="row">
                        <div class="col-12 mt-3 mb-3">
                            <div class="content-header">Overlap Image Cards</div>
                            <p class="content-sub-header">Overlap Image Cards</p>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-inverse bg-primary text-center">
                                <div class="card-content">
                                    <div class="card-img overlap">
                                        <img src="app-assets/img/elements/11.png" alt="element 06" width="190" class="mb-1">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">New Arrival</h4>
                                        <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-inverse bg-danger text-center">
                                <div class="card-content">
                                    <div class="card-img overlap">
                                        <img src="app-assets/img/elements/14.png" alt="element 03" width="170">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Brand Minute</h4>
                                        <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card card-inverse bg-warning text-center">
                                <div class="card-content">
                                    <div class="card-img overlap">
                                        <img src="app-assets/img/elements/07.png" alt="element 07" width="225">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Brand Minute</h4>
                                        <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Overlap Image Cards end -->

                <!-- Weather cards start -->
                <section id="weather-examples">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Weather cards</div>
                            <p class="content-sub-header">Weekly weather cards.</p>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-img">
                                        <img class="card-img-top img-fluid height-300" src="app-assets/img/photos/weather-1.jpg" alt="Card image cap">
                                        <h4 class="card-title">Sunny</h4>
                                        <a class="btn btn-floating halfway-fab bg-primary"><i class="ft-plus"></i></a>
                                    </div>
                                    <div class="card-body mt-2">
                                        <div class="row">
                                            <div class="col-2 text-center">
                                                <span class="d-block">Mon</span>
                                                <i class="wi wi-day-sunny d-block primary font-large-1 my-3"></i>
                                                <span class="d-block">13&deg;</span>
                                            </div>
                                            <div class="col-2 text-center">
                                                <span class="d-block">Tue</span>
                                                <i class="wi wi-day-cloudy d-block primary font-large-1 my-3"></i>
                                                <span class="d-block">12&deg;</span>
                                            </div>
                                            <div class="col-2 text-center">
                                                <span class="d-block">Wed</span>
                                                <i class="wi wi-day-cloudy-gusts d-block primary font-large-1 my-3"></i>
                                                <span class="d-block">10&deg;</span>
                                            </div>
                                            <div class="col-2 text-center">
                                                <span class="d-block">Thu</span>
                                                <i class="wi wi-day-cloudy-windy d-block primary font-large-1 my-3"></i>
                                                <span class="d-block">12&deg;</span>
                                            </div>
                                            <div class="col-2 text-center">
                                                <span class="d-block">Fri</span>
                                                <i class="wi wi-day-fog d-block primary font-large-1 my-3"></i>
                                                <span class="d-block">9&deg;</span>
                                            </div>
                                            <div class="col-2 text-center">
                                                <span class="d-block">Sat</span>
                                                <i class="wi wi-day-lightning d-block primary font-large-1 my-3"></i>
                                                <span class="d-block">6&deg;</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-img">
                                        <img class="card-img-top img-fluid height-300" src="app-assets/img/photos/weather-2.png" alt="Card image cap">
                                        <h4 class="card-title">Snowy</h4>
                                        <a class="btn btn-floating halfway-fab bg-danger"><i class="ft-plus"></i></a>
                                    </div>
                                    <div class="card-body mt-2">
                                        <div class="row">
                                            <div class="col-2 text-center">
                                                <span class="d-block">Mon</span>
                                                <i class="wi wi-day-cloudy d-block danger font-large-1 my-3"></i>
                                                <span class="d-block">13&deg;</span>
                                            </div>
                                            <div class="col-2 text-center">
                                                <span class="d-block">Tue</span>
                                                <i class="wi wi-day-hail d-block danger font-large-1 my-3"></i>
                                                <span class="d-block">12&deg;</span>
                                            </div>
                                            <div class="col-2 text-center">
                                                <span class="d-block">Wed</span>
                                                <i class="wi wi-day-showers d-block danger font-large-1 my-3"></i>
                                                <span class="d-block">10&deg;</span>
                                            </div>
                                            <div class="col-2 text-center">
                                                <span class="d-block">Thu</span>
                                                <i class="wi wi-day-sprinkle d-block danger font-large-1 my-3"></i>
                                                <span class="d-block">12&deg;</span>
                                            </div>
                                            <div class="col-2 text-center">
                                                <span class="d-block">Fri</span>
                                                <i class="wi wi-day-storm-showers d-block danger font-large-1 my-3"></i>
                                                <span class="d-block">9&deg;</span>
                                            </div>
                                            <div class="col-2 text-center">
                                                <span class="d-block">Sat</span>
                                                <i class="wi wi-day-sunny d-block danger font-large-1 my-3"></i>
                                                <span class="d-block">6&deg;</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Weather cards end -->


                <!-- Background variants section start -->
                <section id="bg-variants">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Background variants</div>
                            <p class="content-sub-header">Cards include their own variant classes for quickly changing the
                                <code>background-color</code>
                                and <code>border-color</code> of a card. Darker colors require the use of <code>.card-inverse</code>.<br> Cards
                                include a class for quickly
                                toggling the text color. By default, cards use dark text and assume a light background. Add
                                <code>.card-inverse</code>
                                for white text and specify the <code>background-color</code> and <code>border-color</code> to go with it.
                                <br>You can also use <code>.card-inverse</code> with the contextual backgrounds variants.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-md-6 col-sm-12">
                            <div class="card card-inverse bg-primary text-center">
                                <div class="card-content">
                                    <div class="card-body pt-3">
                                        <div class="row d-flex">
                                            <div class="col align-self-center">
                                                <img src="app-assets/img/elements/01.png" alt="element 01" width="190">
                                            </div>
                                            <div class="col align-self-center">
                                                <h4 class="card-title mt-3">Brand Minute</h4>
                                                <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                                <button class="btn btn-raised btn-primary btn-darken-3">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card card-inverse bg-success text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <img src="app-assets/img/elements/06.png" alt="element 02" width="225" class="mb-1">
                                        <h3 class="card-title">Ceramic Bottle</h3>
                                        <p class="card-text">456 items</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card card-inverse bg-danger text-center">
                                <div class="card-content">
                                    <div class="card-body pt-3">
                                        <div class="row d-flex">
                                            <div class="col align-self-center">
                                                <h4 class="card-title mt-3">Brand Minute</h4>
                                                <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                                <button class="btn btn-raised btn-danger btn-darken-3">Buy Now</button>
                                            </div>
                                            <div class="col align-self-center">
                                                <img src="app-assets/img/elements/14.png" alt="element 03" width="170" class="float-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card card-inverse bg-info text-center">
                                <div class="card-content">
                                    <div class="card-body pt-3">
                                        <div class="row d-flex">
                                            <div class="col align-self-center">
                                                <img src="app-assets/img/elements/07.png" alt="element 04" width="210" class="float-left mt-3">
                                            </div>
                                            <div class="col align-self-center">
                                                <h4 class="card-title mt-3">New Arrival</h4>
                                                <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                                <button class="btn btn-raised btn-info btn-darken-3">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card card-inverse bg-warning text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <img src="app-assets/img/elements/04.png" alt="element 05" width="250" class="mb-1">
                                        <h4 class="card-title">Storage Device</h4>
                                        <p class="card-text">945 items</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="card card-inverse bg-primary text-center">
                                <div class="card-content">
                                    <div class="card-body pt-3">
                                        <div class="row d-flex">
                                            <div class="col align-self-center">
                                                <h4 class="card-title mt-3">New Arrival</h4>
                                                <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                                <button class="btn btn-raised btn-primary btn-darken-3 white">Buy Now</button>
                                            </div>
                                            <div class="col align-self-center">
                                                <img src="app-assets/img/elements/11.png" alt="element 06" width="190" class="float-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Background variants section end -->

                <!-- Outline variants section start -->
                <section id="outline-variants">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Outline variants</div>
                            <p class="content-sub-header">In need of a colored card, but not the hefty background colors they bring? Replace
                                the default modifier classes
                                with the <code>.card-outline-*</code> ones to style just the <code>border-color</code> of a card.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-md-6 col-sm-12">
                            <div class="card card-outline-primary box-shadow-0 text-center">
                                <div class="card-content">
                                    <div class="card-body pt-3">
                                        <div class="row d-flex">
                                            <div class="col align-self-center">
                                                <img src="app-assets/img/elements/01.png" alt="element 01" width="190">
                                            </div>
                                            <div class="col align-self-center">
                                                <h4 class="card-title mt-3">Brand Minute</h4>
                                                <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                                <button class="btn btn-raised btn-primary">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card card-outline-success box-shadow-0 text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <img src="app-assets/img/elements/06.png" alt="element 02" width="225" class="mb-1">
                                        <h3 class="card-title">Ceramic Bottle</h3>
                                        <p class="card-text">456 items</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card card-outline-danger box-shadow-0 text-center">
                                <div class="card-content">
                                    <div class="card-body pt-3">
                                        <div class="row d-flex">
                                            <div class="col align-self-center">
                                                <h4 class="card-title mt-3">Brand Minute</h4>
                                                <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                                <button class="btn btn-raised btn-danger btn-darken-3">Buy Now</button>
                                            </div>
                                            <div class="col align-self-center">
                                                <img src="app-assets/img/elements/01.png" alt="element 03" width="190" class="float-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card card-outline-info box-shadow-0 text-center">
                                <div class="card-content">
                                    <div class="card-body pt-3">
                                        <div class="row d-flex">
                                            <div class="col align-self-center">
                                                <img src="app-assets/img/elements/07.png" alt="element 04" width="210" class="float-left mt-3">
                                            </div>
                                            <div class="col align-self-center">
                                                <h4 class="card-title mt-3">New Arrival</h4>
                                                <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                                <button class="btn btn-raised btn-info btn-darken-3">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card card-outline-warning box-shadow-0 text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <img src="app-assets/img/elements/04.png" alt="element 05" width="250" class="mb-1">
                                        <h4 class="card-title">Storage Device</h4>
                                        <p class="card-text">945 items</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card card-outline-primary box-shadow-0 text-center">
                                <div class="card-content">
                                    <div class="card-body pt-3">
                                        <div class="row d-flex">
                                            <div class="col align-self-center">
                                                <h4 class="card-title mt-3">New Arrival</h4>
                                                <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                                <button class="btn btn-raised btn-primary btn-darken-3 white">Buy Now</button>
                                            </div>
                                            <div class="col align-self-center">
                                                <img src="app-assets/img/elements/11.png" alt="element 06" width="190" class="float-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Outline variants section end -->

                <!-- Groups section start -->
                <section id="groups">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Groups</div>
                            <p class="content-sub-header">Use card groups to render cards as a single, attached element with equal width and
                                height columns. By default,
                                card groups use <code>display: table;</code> and <code>table-layout: fixed;</code> to achieve their uniform
                                sizing. However, enabling flexbox mode can switch that to use <code>display: flex;</code> and provide the
                                same effect.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card-group">
                                <div class="card">
                                    <div class="card-content">
                                        <img class="card-img-top img-fluid" src="app-assets/img/photos/04.jpg" alt="Card image cap" />
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <img class="card-img-top img-fluid" src="app-assets/img/photos/01.jpg" alt="Card image cap" />
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <img class="card-img-top img-fluid" src="app-assets/img/photos/06.jpg" alt="Card image cap" />
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <img class="card-img-top img-fluid" src="app-assets/img/photos/02.jpg" alt="Card image cap" />
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Groups section end -->

                <!-- Decks section start -->
                <section id="decks">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Decks</div>
                            <p class="content-sub-header">Need a set of equal width and height cards that aren’t attached to one another? Use
                                card decks. By default, card
                                decks require two wrapping elements: <code>.card-deck-wrapper</code> and a <code>.card-deck</code>. We use
                                table styles for the sizing and the gutters on <code>.card-deck</code>. The <code>.card-deck-wrapper</code> is
                                used to negative margin out the <code>border-spacing</code> on the <code>.card-deck</code>.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card-deck-wrapper">
                                <div class="card-deck">
                                    <div class="card">
                                        <div class="card-content">
                                            <img class="card-img-top img-fluid" src="app-assets/img/photos/05.jpg" alt="Card image cap" />
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <img class="card-img-top img-fluid" src="app-assets/img/photos/09.jpg" alt="Card image cap" />
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <img class="card-img-top img-fluid" src="app-assets/img/photos/02.jpg" alt="Card image cap" />
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <img class="card-img-top img-fluid" src="app-assets/img/photos/03.jpg" alt="Card image cap" />
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Decks section end -->


                <!-- Columns section start -->
                <section id="columns">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Columns</div>
                            <p class="content-sub-header">Cards can be organized into Masonry-like columns with just CSS by wrapping them in
                                <code>.card-columns</code>.
                                Only applies to small devices and above.<br>
                                <strong>Heads up!</strong> This is <strong>not available in IE9</strong> and below as they have no support
                                for the column-* CSS properties.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-1">
                            <div class="card-columns">
                                <div class="card">
                                    <div class="card-content">
                                        <img class="card-img-top img-fluid" src="app-assets/img/photos/06.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                                card's content.</p>
                                            <a class="btn btn-outline-warning">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-inverse bg-primary text-center">
                                    <div class="card-content">
                                        <div class="card-body pt-3">
                                            <img src="app-assets/img/elements/01.png" alt="element 01" width="190" class="float-left img-fluid">
                                            <h4 class="card-title mt-5">Brand Minute</h4>
                                            <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                            <button class="btn btn-raised btn-primary btn-darken-3">Buy Now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-inverse bg-warning text-center border-0 box-shadow-0">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <img src="app-assets/img/elements/04.png" alt="element 05" width="250" class="mb-1 img-fluid">
                                            <h4 class="card-title">Storage Device</h4>
                                            <p class="card-text">945 items</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-inverse bg-success text-center border-0 box-shadow-0">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <img src="app-assets/img/elements/06.png" alt="element 02" width="225" class="mb-1 img-fluid">
                                            <h3 class="card-title">Ceramic Bottle</h3>
                                            <p class="card-text">456 items</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 box-shadow-0">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <h4 class="card-title">Bottom Image Cap</h4>
                                            <p class="card-text">Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut pastry
                                                gummies tiramisu
                                                chocolate bar muffin. Dessert bonbon caramels brownie chocolate bar chocolate tart dragée.</p>
                                            <p class="card-text">Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin.</p>
                                            <p class="card-text mt-1"><small class="text-muted">Last updated 3 mins ago</small></p>
                                        </div>
                                        <img class="card-img-bottom img-fluid" src="app-assets/img/photos/11.jpg" alt="Card image cap">
                                    </div>
                                </div>
                                <div class="card card-inverse border-0 box-shadow-0">
                                    <div class="card-content">
                                        <img class="card-img img-fluid" src="app-assets/img/photos/05.jpg" alt="Card image">
                                        <div class="card-img-overlay overlay-info">
                                            <h4 class="card-title">Inverse Text</h4>
                                            <p class="card-text">Sugar plum tiramisu sweet. Cake jelly marshmallow cotton candy chupa chups carrot
                                                cake topping
                                                chupa chups.</p>
                                            <p class="card-text"><small class="text-muted white">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-inverse border-0 box-shadow-0">
                                    <div class="card-content">
                                        <img class="card-img img-fluid" src="app-assets/img/photos/09.jpg" alt="Card image">
                                        <div class="card-img-overlay overlay-warning">
                                            <h4 class="card-title">Inverse Text</h4>
                                            <p class="card-text">Sugar plum tiramisu sweet. Cake jelly marshmallow cotton candy chupa chups carrot
                                                cake topping
                                                chupa chups.</p>
                                            <p class="card-text"><small class="text-muted white">Last updated 3 mins ago</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-outline-info text-center box-shadow-0">
                                    <div class="card-content">
                                        <img src="app-assets/img/elements/07.png" alt="element 04" width="210" class="float-left mt-3 img-fluid">
                                        <div class="card-body pt-3">
                                            <h4 class="card-title mt-3">New Arrival</h4>
                                            <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                                            <button class="btn btn-raised btn-info btn-darken-3">Buy Now</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0 box-shadow-0">
                                    <div class="card-content">
                                        <img class="card-img img-fluid" src="app-assets/img/photos/02.jpg" alt="Card image cap" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Columns section end -->

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
