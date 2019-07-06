@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- Collapse start -->
                <section id="collapsible">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="content-header">Collapse</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-xl-6">
                            <div class="mb-2 mt-2">
                                <h5 class="mb-0 text-uppercase">Basic Collapse</h5>
                                <p>It will work as collapsible toggle by default.</p>
                            </div>
                            <div class="card">
                                <div id="headingCollapse1" class="card-header pb-3">
                                    <a data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1" class="card-title lead">Collapsible
                                        Group Item #1</a>
                                </div>
                                <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse show">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels chocolate cake
                                            liquorice cake wafer jelly beans croissant apple pie. Oat cake brownie pudding jelly beans. Wafer
                                            liquorice chocolate bar chocolate bar liquorice. Tootsie roll gingerbread gingerbread chocolate bar tart
                                            chupa chups sugar plum toffee. Carrot cake macaroon sweet danish. Cupcake soufflé toffee marzipan candy
                                            canes pie jelly-o. Cotton candy bonbon powder topping carrot cake cookie caramels lemon drops liquorice.
                                            Dessert cookie ice cream toffee apple pie.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse2" class="card-header pb-3">
                                    <a data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2" class="card-title lead collapsed">Collapsible
                                        Group Item #2</a>
                                </div>
                                <div id="collapse2" role="tabpanel" aria-labelledby="headingCollapse2" class="collapse" aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly
                                            marshmallow cake. Pastry oat cake chupa chups. Caramels marshmallow carrot cake topping donut sesame
                                            snaps toffee tootsie roll. Lollipop sweet jelly beans oat cake biscuit pastry chocolate cake. Cupcake
                                            chocolate biscuit lemon drops cotton candy marshmallow oat cake donut. Croissant chocolate cake oat cake
                                            brownie topping carrot cake jelly beans. Dessert gingerbread marshmallow pudding donut lemon drops cake.
                                            Cake topping gummi bears cake.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse3" class="card-header pb-3">
                                    <a data-toggle="collapse" href="#collapse3" aria-expanded="false" aria-controls="collapse3" class="card-title lead collapsed">Collapsible
                                        Group Item #3</a>
                                </div>
                                <div id="collapse3" role="tabpanel" aria-labelledby="headingCollapse3" class="collapse" aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes donut
                                            chocolate bar chocolate cake cupcake chocolate topping. Dessert jelly beans toffee muffin tiramisu sesame
                                            snaps brownie. Cake halvah pastry soufflé oat cake candy candy canes. Lemon drops gummies gingerbread
                                            toffee. Tart jelly candy pastry. Pastry cake jelly beans carrot cake marzipan lollipop muffin. Soufflé
                                            jujubes cupcake. Powder danish candy carrot cake pastry. Tart marshmallow caramels cake macaroon gummies
                                            lollipop.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse4" class="card-header pb-3">
                                    <a data-toggle="collapse" href="#collapse4" aria-expanded="false" aria-controls="collapse4" class="card-title lead collapsed">Collapsible
                                        Group Item #4</a>
                                </div>
                                <div id="collapse4" role="tabpanel" aria-labelledby="headingCollapse4" class="collapse" aria-expanded="false"
                                     style="height: 0px;">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll. Dragée candy canes
                                            carrot cake chupa chups danish cake sugar plum candy. Cake powder biscuit bear claw. Sesame snaps cotton
                                            candy cheesecake topping ice cream cookie tiramisu. Liquorice bonbon cookie pie halvah. Cookie toffee ice
                                            cream cotton candy lollipop fruitcake. Tart cheesecake tiramisu danish marzipan pie pastry chocolate
                                            cake. Pastry bonbon lollipop oat cake pastry halvah dessert jelly. Toffee caramels croissant apple pie
                                            chupa chups toffee muffin chupa chups apple pie.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="mb-2 mt-2">
                                <h5 class="mb-0 text-uppercase">Basic Collapse</h5>
                                <p>Use <code>.text-right</code> to header for right aligned text.</p>
                            </div>
                            <div class="card">
                                <div id="headingCollapse01" class="card-header pb-3 text-right">
                                    <a data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01" class="card-title lead">Collapsible
                                        Group Item #1</a>
                                </div>
                                <div id="collapse01" role="tabpanel" aria-labelledby="headingCollapse01" class="collapse show">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels chocolate cake
                                            liquorice cake wafer jelly beans croissant apple pie. Oat cake brownie pudding jelly beans. Wafer
                                            liquorice chocolate bar chocolate bar liquorice. Tootsie roll gingerbread gingerbread chocolate bar tart
                                            chupa chups sugar plum toffee. Carrot cake macaroon sweet danish. Cupcake soufflé toffee marzipan candy
                                            canes pie jelly-o. Cotton candy bonbon powder topping carrot cake cookie caramels lemon drops liquorice.
                                            Dessert cookie ice cream toffee apple pie.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse02" class="card-header pb-3 text-right">
                                    <a data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02" class="card-title lead collapsed">Collapsible
                                        Group Item #2</a>
                                </div>
                                <div id="collapse02" role="tabpanel" aria-labelledby="headingCollapse02" class="collapse" aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly
                                            marshmallow cake. Pastry oat cake chupa chups. Caramels marshmallow carrot cake topping donut sesame
                                            snaps toffee tootsie roll. Lollipop sweet jelly beans oat cake biscuit pastry chocolate cake. Cupcake
                                            chocolate biscuit lemon drops cotton candy marshmallow oat cake donut. Croissant chocolate cake oat cake
                                            brownie topping carrot cake jelly beans. Dessert gingerbread marshmallow pudding donut lemon drops cake.
                                            Cake topping gummi bears cake.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse03" class="card-header pb-3 text-right">
                                    <a data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03" class="card-title lead collapsed">Collapsible
                                        Group Item #3</a>
                                </div>
                                <div id="collapse03" role="tabpanel" aria-labelledby="headingCollapse03" class="collapse" aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes donut
                                            chocolate bar chocolate cake cupcake chocolate topping. Dessert jelly beans toffee muffin tiramisu sesame
                                            snaps brownie. Cake halvah pastry soufflé oat cake candy candy canes. Lemon drops gummies gingerbread
                                            toffee. Tart jelly candy pastry. Pastry cake jelly beans carrot cake marzipan lollipop muffin. Soufflé
                                            jujubes cupcake. Powder danish candy carrot cake pastry. Tart marshmallow caramels cake macaroon gummies
                                            lollipop.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse04" class="card-header pb-3 text-right">
                                    <a data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04" class="card-title lead collapsed">Collapsible
                                        Group Item #4</a>
                                </div>
                                <div id="collapse04" role="tabpanel" aria-labelledby="headingCollapse04" class="collapse" aria-expanded="false"
                                     style="height: 0px;">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll. Dragée candy canes
                                            carrot cake chupa chups danish cake sugar plum candy. Cake powder biscuit bear claw. Sesame snaps cotton
                                            candy cheesecake topping ice cream cookie tiramisu. Liquorice bonbon cookie pie halvah. Cookie toffee ice
                                            cream cotton candy lollipop fruitcake. Tart cheesecake tiramisu danish marzipan pie pastry chocolate
                                            cake. Pastry bonbon lollipop oat cake pastry halvah dessert jelly. Toffee caramels croissant apple pie
                                            chupa chups toffee muffin chupa chups apple pie.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-xl-6">
                            <div class="mb-2 mt-2">
                                <h5 class="mb-0 text-uppercase">Collapse with Icon</h5>
                                <p>Use class <code>.collapse-icon</code> to set icon collapse.</p>
                            </div>
                            <div class="card collapse-icon accordion-icon-rotate">
                                <div id="headingCollapse11" class="card-header pb-3">
                                    <a data-toggle="collapse" href="#collapse11" aria-expanded="true" aria-controls="collapse11" class="card-title lead">Collapsible
                                        Group Item #1</a>
                                </div>
                                <div id="collapse11" role="tabpanel" aria-labelledby="headingCollapse11" class="collapse show">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels chocolate cake
                                            liquorice cake wafer jelly beans croissant apple pie. Oat cake brownie pudding jelly beans. Wafer
                                            liquorice chocolate bar chocolate bar liquorice. Tootsie roll gingerbread gingerbread chocolate bar tart
                                            chupa chups sugar plum toffee. Carrot cake macaroon sweet danish. Cupcake soufflé toffee marzipan candy
                                            canes pie jelly-o. Cotton candy bonbon powder topping carrot cake cookie caramels lemon drops liquorice.
                                            Dessert cookie ice cream toffee apple pie.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse12" class="card-header pb-3">
                                    <a data-toggle="collapse" href="#collapse12" aria-expanded="false" aria-controls="collapse12" class="card-title lead collapsed">Collapsible
                                        Group Item #2</a>
                                </div>
                                <div id="collapse12" role="tabpanel" aria-labelledby="headingCollapse12" class="collapse" aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly
                                            marshmallow cake. Pastry oat cake chupa chups. Caramels marshmallow carrot cake topping donut sesame
                                            snaps toffee tootsie roll. Lollipop sweet jelly beans oat cake biscuit pastry chocolate cake. Cupcake
                                            chocolate biscuit lemon drops cotton candy marshmallow oat cake donut. Croissant chocolate cake oat cake
                                            brownie topping carrot cake jelly beans. Dessert gingerbread marshmallow pudding donut lemon drops cake.
                                            Cake topping gummi bears cake.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse13" class="card-header pb-3">
                                    <a data-toggle="collapse" href="#collapse13" aria-expanded="false" aria-controls="collapse13" class="card-title lead collapsed">Collapsible
                                        Group Item #3</a>
                                </div>
                                <div id="collapse13" role="tabpanel" aria-labelledby="headingCollapse13" class="collapse" aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes donut
                                            chocolate bar chocolate cake cupcake chocolate topping. Dessert jelly beans toffee muffin tiramisu sesame
                                            snaps brownie. Cake halvah pastry soufflé oat cake candy candy canes. Lemon drops gummies gingerbread
                                            toffee. Tart jelly candy pastry. Pastry cake jelly beans carrot cake marzipan lollipop muffin. Soufflé
                                            jujubes cupcake. Powder danish candy carrot cake pastry. Tart marshmallow caramels cake macaroon gummies
                                            lollipop.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse14" class="card-header pb-3">
                                    <a data-toggle="collapse" href="#collapse14" aria-expanded="false" aria-controls="collapse14" class="card-title lead collapsed">Collapsible
                                        Group Item #4</a>
                                </div>
                                <div id="collapse14" role="tabpanel" aria-labelledby="headingCollapse14" class="collapse" aria-expanded="false"
                                     style="height: 0px;">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll. Dragée candy canes
                                            carrot cake chupa chups danish cake sugar plum candy. Cake powder biscuit bear claw. Sesame snaps cotton
                                            candy cheesecake topping ice cream cookie tiramisu. Liquorice bonbon cookie pie halvah. Cookie toffee ice
                                            cream cotton candy lollipop fruitcake. Tart cheesecake tiramisu danish marzipan pie pastry chocolate
                                            cake. Pastry bonbon lollipop oat cake pastry halvah dessert jelly. Toffee caramels croissant apple pie
                                            chupa chups toffee muffin chupa chups apple pie.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="mb-2 mt-2">
                                <h5 class="mb-0 text-uppercase">Collapse with left Icon</h5>
                                <p>Use class <code>.collapse-icon.left</code> to set left icon collapse.</p>
                            </div>
                            <div class="card collapse-icon accordion-icon-rotate left">
                                <div id="headingCollapse21" class="card-header pb-3">
                                    <a data-toggle="collapse" href="#collapse21" aria-expanded="true" aria-controls="collapse21" class="card-title lead">Collapsible
                                        Group Item #1</a>
                                </div>
                                <div id="collapse21" role="tabpanel" aria-labelledby="headingCollapse21" class="collapse show">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels chocolate cake
                                            liquorice cake wafer jelly beans croissant apple pie. Oat cake brownie pudding jelly beans. Wafer
                                            liquorice chocolate bar chocolate bar liquorice. Tootsie roll gingerbread gingerbread chocolate bar tart
                                            chupa chups sugar plum toffee. Carrot cake macaroon sweet danish. Cupcake soufflé toffee marzipan candy
                                            canes pie jelly-o. Cotton candy bonbon powder topping carrot cake cookie caramels lemon drops liquorice.
                                            Dessert cookie ice cream toffee apple pie.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse22" class="card-header pb-3">
                                    <a data-toggle="collapse" href="#collapse22" aria-expanded="false" aria-controls="collapse22" class="card-title lead collapsed">Collapsible
                                        Group Item #2</a>
                                </div>
                                <div id="collapse22" role="tabpanel" aria-labelledby="headingCollapse22" class="collapse" aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly
                                            marshmallow cake. Pastry oat cake chupa chups. Caramels marshmallow carrot cake topping donut sesame
                                            snaps toffee tootsie roll. Lollipop sweet jelly beans oat cake biscuit pastry chocolate cake. Cupcake
                                            chocolate biscuit lemon drops cotton candy marshmallow oat cake donut. Croissant chocolate cake oat cake
                                            brownie topping carrot cake jelly beans. Dessert gingerbread marshmallow pudding donut lemon drops cake.
                                            Cake topping gummi bears cake.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse23" class="card-header pb-3">
                                    <a data-toggle="collapse" href="#collapse23" aria-expanded="false" aria-controls="collapse23" class="card-title lead collapsed">Collapsible
                                        Group Item #3</a>
                                </div>
                                <div id="collapse23" role="tabpanel" aria-labelledby="headingCollapse23" class="collapse" aria-expanded="false">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes donut
                                            chocolate bar chocolate cake cupcake chocolate topping. Dessert jelly beans toffee muffin tiramisu sesame
                                            snaps brownie. Cake halvah pastry soufflé oat cake candy candy canes. Lemon drops gummies gingerbread
                                            toffee. Tart jelly candy pastry. Pastry cake jelly beans carrot cake marzipan lollipop muffin. Soufflé
                                            jujubes cupcake. Powder danish candy carrot cake pastry. Tart marshmallow caramels cake macaroon gummies
                                            lollipop.
                                        </div>
                                    </div>
                                </div>
                                <div id="headingCollapse24" class="card-header pb-3">
                                    <a data-toggle="collapse" href="#collapse24" aria-expanded="false" aria-controls="collapse24" class="card-title lead collapsed">Collapsible
                                        Group Item #4</a>
                                </div>
                                <div id="collapse24" role="tabpanel" aria-labelledby="headingCollapse24" class="collapse" aria-expanded="false"
                                     style="height: 0px;">
                                    <div class="card-content">
                                        <div class="card-body">
                                            Sesame snaps chocolate lollipop sesame snaps apple pie chocolate cake sweet roll. Dragée candy canes
                                            carrot cake chupa chups danish cake sugar plum candy. Cake powder biscuit bear claw. Sesame snaps cotton
                                            candy cheesecake topping ice cream cookie tiramisu. Liquorice bonbon cookie pie halvah. Cookie toffee ice
                                            cream cotton candy lollipop fruitcake. Tart cheesecake tiramisu danish marzipan pie pastry chocolate
                                            cake. Pastry bonbon lollipop oat cake pastry halvah dessert jelly. Toffee caramels croissant apple pie
                                            chupa chups toffee muffin chupa chups apple pie.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Collapse end -->

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
