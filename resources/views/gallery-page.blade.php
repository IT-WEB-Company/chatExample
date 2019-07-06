@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!--Gallery Hover Effect Starts-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="content-header">Hover Effects</div>
                        <p class="content-sub-header">Image gallery grid with 30 subtle hover effect. Try to hover below demo images to show each hover effect.</p>
                    </div>
                </div>
                <section id="hover-effects" class="card">
                    <div class="card-content">
                        <div class="card-body my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                            <div class="grid-hover">
                                <h5 class="text-bold-400 text-uppercase">Lily</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-lily">
                                            <img src="app-assets/img/gallery/12.jpg" alt="img12" />
                                            <figcaption>
                                                <div>
                                                    <h2>Nice
                                                        <span>Lily</span>
                                                    </h2>
                                                    <p>Lily likes to play with crayons and pencils</p>
                                                </div>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-lily">
                                            <img src="app-assets/img/gallery/1.jpg" alt="img1" />
                                            <figcaption>
                                                <div>
                                                    <h2>Nice
                                                        <span>Lily</span>
                                                    </h2>
                                                    <p>Lily likes to play with crayons and pencils</p>
                                                </div>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-hover">
                                <h5 class="text-bold-400 text-uppercase">Sadie</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-sadie">
                                            <img src="app-assets/img/gallery/2.jpg" alt="img02" />
                                            <figcaption>
                                                <h2>Holy
                                                    <span>Sadie</span>
                                                </h2>
                                                <p>Sadie never took her eyes off me.
                                                    <br>She had a dark soul.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-sadie">
                                            <img src="app-assets/img/gallery/14.jpg" alt="img14" />
                                            <figcaption>
                                                <h2>Holy
                                                    <span>Sadie</span>
                                                </h2>
                                                <p>Sadie never took her eyes off me.
                                                    <br>She had a dark soul.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-hover">
                                <h5 class="text-bold-400 text-uppercase">Honey</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-honey">
                                            <img src="app-assets/img/gallery/4.jpg" alt="img04" />
                                            <figcaption>
                                                <h2>Dreamy
                                                    <span>Honey</span> <i>Now</i></h2>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-honey">
                                            <img src="app-assets/img/gallery/5.jpg" alt="img05" />
                                            <figcaption>
                                                <h2>Dreamy
                                                    <span>Honey</span> <i>Now</i></h2>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-hover">
                                <h5 class="text-bold-400 text-uppercase">Layla</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-layla">
                                            <img src="app-assets/img/gallery/6.jpg" alt="img06" />
                                            <figcaption>
                                                <h2>Crazy
                                                    <span>Layla</span>
                                                </h2>
                                                <p>When Layla appears, she brings an eternal summer along.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-layla">
                                            <img src="app-assets/img/gallery/3.jpg" alt="img03" />
                                            <figcaption>
                                                <h2>Crazy
                                                    <span>Layla</span>
                                                </h2>
                                                <p>When Layla appears, she brings an eternal summer along.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-hover">
                                <h5 class="text-bold-400 text-uppercase">Zoe</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-zoe">
                                            <img src="app-assets/img/gallery/25.jpg" alt="img25" />
                                            <figcaption>
                                                <h2>Creative
                                                    <span>Zoe</span>
                                                </h2>
                                                <p class="icon-links">
                                                    <a class="mr-1"><i class="ft-heart"></i></a>
                                                    <a class="mr-1"><i class="ft-eye"></i></a>
                                                    <a class="mr-1"><i class="ft-edit"></i></a>
                                                </p>
                                                <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-zoe">
                                            <img src="app-assets/img/gallery/26.jpg" alt="img26" />
                                            <figcaption>
                                                <h2>Creative
                                                    <span>Zoe</span>
                                                </h2>
                                                <p class="icon-links">
                                                    <a class="mr-1"><i class="ft-heart"></i></a>
                                                    <a class="mr-1"><i class="ft-eye"></i></a>
                                                    <a class="mr-1"><i class="ft-edit"></i></a>
                                                </p>
                                                <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-hover">
                                <h5 class="text-bold-400 text-uppercase">Oscar</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-oscar">
                                            <img src="app-assets/img/gallery/9.jpg" alt="img09" />
                                            <figcaption>
                                                <h2>Warm
                                                    <span>Oscar</span>
                                                </h2>
                                                <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-oscar">
                                            <img src="app-assets/img/gallery/10.jpg" alt="img10" />
                                            <figcaption>
                                                <h2>Warm
                                                    <span>Oscar</span>
                                                </h2>
                                                <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-hover">
                                <h5 class="text-bold-400 text-uppercase">Marley</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-marley">
                                            <img src="app-assets/img/gallery/11.jpg" alt="img11" />
                                            <figcaption>
                                                <h2>Sweet
                                                    <span>Marley</span>
                                                </h2>
                                                <p>Marley tried to convince her but she was not interested.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-marley">
                                            <img src="app-assets/img/gallery/12.jpg" alt="img12" />
                                            <figcaption>
                                                <h2>Sweet
                                                    <span>Marley</span>
                                                </h2>
                                                <p>Marley tried to convince her but she was not interested.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-hover">
                                <h5 class="text-bold-400 text-uppercase">Ruby</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-ruby">
                                            <img src="app-assets/img/gallery/13.jpg" alt="img13" />
                                            <figcaption>
                                                <h2>Glowing
                                                    <span>Ruby</span>
                                                </h2>
                                                <p>Ruby did not need any help. Everybody knew that.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-ruby">
                                            <img src="app-assets/img/gallery/14.jpg" alt="img14" />
                                            <figcaption>
                                                <h2>Glowing
                                                    <span>Ruby</span>
                                                </h2>
                                                <p>Ruby did not need any help. Everybody knew that.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-hover">
                                <h5 class="text-bold-400 text-uppercase">Roxy</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-roxy">
                                            <img src="app-assets/img/gallery/15.jpg" alt="img15" />
                                            <figcaption>
                                                <h2>Charming
                                                    <span>Roxy</span>
                                                </h2>
                                                <p>Roxy was my best friend. She'd cross any border for me.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-roxy">
                                            <img src="app-assets/img/gallery/1.jpg" alt="img01" />
                                            <figcaption>
                                                <h2>Charming
                                                    <span>Roxy</span>
                                                </h2>
                                                <p>Roxy was my best friend. She'd cross any border for me.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-hover">
                                <h5 class="text-bold-400 text-uppercase">Bubba</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-bubba">
                                            <img src="app-assets/img/gallery/2.jpg" alt="img02" />
                                            <figcaption>
                                                <h2>Fresh
                                                    <span>Bubba</span>
                                                </h2>
                                                <p>Bubba likes to appear out of thin air.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-bubba">
                                            <img src="app-assets/img/gallery/16.jpg" alt="img16" />
                                            <figcaption>
                                                <h2>Fresh
                                                    <span>Bubba</span>
                                                </h2>
                                                <p>Bubba likes to appear out of thin air.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-hover">
                                <h5 class="text-bold-400 text-uppercase">Romeo</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-romeo">
                                            <img src="app-assets/img/gallery/17.jpg" alt="img17" />
                                            <figcaption>
                                                <h2>Wild
                                                    <span>Romeo</span>
                                                </h2>
                                                <p>Romeo never knows what he wants. He seemed to be very cross about something.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-romeo">
                                            <img src="app-assets/img/gallery/18.jpg" alt="img18" />
                                            <figcaption>
                                                <h2>Wild
                                                    <span>Romeo</span>
                                                </h2>
                                                <p>Romeo never knows what he wants. He seemed to be very cross about something.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-hover">
                                <h5 class="text-bold-400 text-uppercase">Dexter</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-dexter">
                                            <img src="app-assets/img/gallery/19.jpg" alt="img19" />
                                            <figcaption>
                                                <h2>Strange
                                                    <span>Dexter</span>
                                                </h2>
                                                <p>Dexter had his own strange way. You could watch him training ants.
                                                </p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-dexter">
                                            <img src="app-assets/img/gallery/12.jpg" alt="img12" />
                                            <figcaption>
                                                <h2>Strange
                                                    <span>Dexter</span>
                                                </h2>
                                                <p>Dexter had his own strange way. You could watch him training ants.
                                                </p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-hover">
                                <h5 class="text-bold-400 text-uppercase">Sarah</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-sarah">
                                            <img src="app-assets/img/gallery/13.jpg" alt="img13" />
                                            <figcaption>
                                                <h2>Free
                                                    <span>Sarah</span>
                                                </h2>
                                                <p>Sarah likes to watch clouds. She's quite depressed.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-sarah">
                                            <img src="app-assets/img/gallery/20.jpg" alt="img20" />
                                            <figcaption>
                                                <h2>Free
                                                    <span>Sarah</span>
                                                </h2>
                                                <p>Sarah likes to watch clouds. She's quite depressed.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-hover">
                                <h5 class="text-bold-400 text-uppercase">Chico</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-chico">
                                            <img src="app-assets/img/gallery/15.jpg" alt="img15" />
                                            <figcaption>
                                                <h2>Silly
                                                    <span>Chico</span>
                                                </h2>
                                                <p>Chico's main fear was missing the morning bus.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-chico">
                                            <img src="app-assets/img/gallery/4.jpg" alt="img04" />
                                            <figcaption>
                                                <h2>Silly
                                                    <span>Chico</span>
                                                </h2>
                                                <p>Chico's main fear was missing the morning bus.</p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-hover">
                                <h5 class="text-bold-400 text-uppercase">Milo</h5>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-milo">
                                            <img src="app-assets/img/gallery/11.jpg" alt="img11" />
                                            <figcaption>
                                                <h2>Faithful
                                                    <span>Milo</span>
                                                </h2>
                                                <p>Milo went to the woods. He took a fun ride and never came back.
                                                </p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <figure class="effect-milo">
                                            <img src="app-assets/img/gallery/3.jpg" alt="img03" />
                                            <figcaption>
                                                <h2>Faithful
                                                    <span>Milo</span>
                                                </h2>
                                                <p>Milo went to the woods. He took a fun ride and never came back.
                                                </p>
                                                <a>View more</a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Gallery Hover Effect Starts-->

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
