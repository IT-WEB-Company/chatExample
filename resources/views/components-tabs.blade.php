@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- Basic tabs start -->
                <section id="basic-tabs-components">
                    <div class="row">
                        <div class="col-sm-12 mt-2">
                            <div class="content-header">Tabs</div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Tabs</h4>
                                    <p>Takes the basic nav from above and adds the <code>.nav-tabs</code> class to generate a tabbed interface.
                                    </p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1"
                                                   aria-expanded="true">Tab 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Tab
                                                    2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="false">Tab
                                                    3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled">Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot
                                                    cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake
                                                    jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="tab3" aria-labelledby="base-tab3">
                                                <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton
                                                    candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder
                                                    sweet
                                                    sesame snaps.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tabs with dropdown</h4>
                                    <p>You can activate a tab navigation by simply specifying <code>data-toggle="tab"</code> on an element.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" aria-expanded="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile"
                                                   aria-expanded="false">Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdown1-tab" href="#dropdown1" data-toggle="tab" aria-controls="dropdown1"
                                                       aria-expanded="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdown2-tab" href="#dropdown2" data-toggle="tab" aria-controls="dropdown2"
                                                       aria-expanded="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" aria-controls="about" aria-expanded="false">About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane" id="home" aria-labelledby="home-tab" aria-expanded="true">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes
                                                    marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing
                                                    croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active show" id="profile" role="tabpanel" aria-labelledby="profile-tab"
                                                 aria-expanded="false">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish
                                                    candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll
                                                    liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown1" role="tabpanel" aria-labelledby="dropdown1-tab" aria-expanded="false">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops
                                                    muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll
                                                    cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown2" role="tabpanel" aria-labelledby="dropdown2-tab" aria-expanded="false">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit
                                                    tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear
                                                    claw.</p>
                                            </div>
                                            <div class="tab-pane" id="about" role="tabpanel" aria-labelledby="about-tab" aria-expanded="false">
                                                <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice
                                                    cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder
                                                    tootsie roll cake.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic tabs Ends -->

                <!-- Tabs with Icons start -->
                <section id="tabs-with-icons">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Tabs with Icons</h4>
                            <p>Icon on left,right &amp; both side of the tab. Only icons tabs also available.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Tabs</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="baseIcon-tab1" data-toggle="tab" aria-controls="tabIcon1" href="#tabIcon1"
                                                   aria-expanded="true"><i class="fa fa-play"></i> Tab 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="baseIcon-tab2" data-toggle="tab" aria-controls="tabIcon2" href="#tabIcon2"
                                                   aria-expanded="false"><i class="fa fa-flag"></i> Tab 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="baseIcon-tab3" data-toggle="tab" aria-controls="tabIcon3" href="#tabIcon3"
                                                   aria-expanded="false"><i class="fa fa-cog"></i> Tab 3</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link disabled"><i class="fa fa-unlink"></i> Disabled</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane active" id="tabIcon1" aria-expanded="true" aria-labelledby="baseIcon-tab1">
                                                <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot
                                                    cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                            </div>
                                            <div class="tab-pane" id="tabIcon2" aria-labelledby="baseIcon-tab2">
                                                <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake
                                                    jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="tabIcon3" aria-labelledby="baseIcon-tab3">
                                                <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton
                                                    candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder
                                                    sweet
                                                    sesame snaps.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tabs with dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link" id="homeIcon-tab" data-toggle="tab" href="#homeIcon" aria-controls="homeIcon"
                                                   aria-expanded="true"><i class="fa fa-align-justify"></i> Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profileIcon-tab" data-toggle="tab" href="#profileIcon" aria-controls="profileIcon"
                                                   aria-expanded="false"><i class="fa fa-header"></i> Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    <i class="fa fa-bars"></i> Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdownIcon1-tab" href="#dropdownIcon1" data-toggle="tab" aria-controls="dropdownIcon1"
                                                       aria-expanded="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdownIcon2-tab" href="#dropdownIcon2" data-toggle="tab" aria-controls="dropdownIcon2"
                                                       aria-expanded="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="aboutIcon-tab" data-toggle="tab" href="#about" aria-controls="about"
                                                   aria-expanded="false"><i class="fa fa-send-o"></i> About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane" id="homeIcon" aria-labelledby="homeIcon-tab" aria-expanded="true">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes
                                                    marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing
                                                    croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active show" id="profileIcon" role="tabpanel" aria-labelledby="profileIcon-tab"
                                                 aria-expanded="false">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish
                                                    candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll
                                                    liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownIcon1" role="tabpanel" aria-labelledby="dropdownIcon1-tab"
                                                 aria-expanded="false">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops
                                                    muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll
                                                    cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdownIcon2" role="tabpanel" aria-labelledby="dropdownIcon2-tab"
                                                 aria-expanded="false">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit
                                                    tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear
                                                    claw.</p>
                                            </div>
                                            <div class="tab-pane" id="aboutIcon" role="tabpanel" aria-labelledby="aboutIcon-tab" aria-expanded="false">
                                                <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice
                                                    cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder
                                                    tootsie roll cake.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Tabs with Icons Ends -->

                <!-- Justified Tabs start -->
                <section id="justified-tabs">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Justified Tabs</h4>
                            <p>Use <code>.nav-justified</code> class to set tabs justified.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Justified Tab</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs nav-justified">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="active-tab" data-toggle="tab" href="#active" aria-controls="active"
                                                   aria-expanded="true">Active</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="link-tab" data-toggle="tab" href="#link" aria-controls="link" aria-expanded="false">Link</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="click-tab" data-toggle="tab" href="#click" aria-controls="click" aria-expanded="false">Click</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="linkOpt-tab" data-toggle="tab" href="#linkOpt" aria-controls="linkOpt">Another
                                                    Link</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane active show" id="active" aria-labelledby="active-tab" aria-expanded="true">
                                                <p>Macaroon candy canes tootsie roll wafer lemon drops liquorice jelly-o tootsie roll cake. Marzipan
                                                    liquorice soufflé cotton candy jelly cake jelly-o sugar plum marshmallow. Dessert cotton candy
                                                    macaroon chocolate sugar plum cake donut.</p>
                                            </div>
                                            <div class="tab-pane" id="link" role="tabpanel" aria-labelledby="link-tab" aria-expanded="false">
                                                <p>Chocolate bar gummies sesame snaps. Liquorice cake sesame snaps cotton candy cake sweet brownie.
                                                    Cotton candy candy canes brownie. Biscuit pudding sesame snaps pudding pudding sesame snaps biscuit
                                                    tiramisu.</p>
                                            </div>
                                            <div class="tab-pane" id="click" role="tabpanel" aria-labelledby="click-tab" aria-expanded="false">
                                                <p>Fruitcake marshmallow donut wafer pastry chocolate topping cake. Powder powder gummi bears jelly
                                                    beans. Gingerbread cake chocolate lollipop. Jelly oat cake pastry marshmallow sesame snaps.</p>
                                            </div>
                                            <div class="tab-pane" id="linkOpt" role="tabpanel" aria-labelledby="linkOpt-tab" aria-expanded="false">
                                                <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan
                                                    donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream
                                                    marzipan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Justified Tabs with dropdown</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs  nav-justified">
                                            <li class="nav-item">
                                                <a class="nav-link" id="home-tab3" data-toggle="tab" href="#home3" aria-controls="home3" aria-expanded="true">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="profile-tab3" data-toggle="tab" href="#profile3" aria-controls="profile3"
                                                   aria-expanded="false">Profile</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                                   aria-expanded="false">
                                                    Dropdown
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" id="dropdown31-tab" href="#dropdown31" data-toggle="tab" aria-controls="dropdown31"
                                                       aria-expanded="true">@fat</a>
                                                    <a class="dropdown-item" id="dropdown32-tab" href="#dropdown32" data-toggle="tab" aria-controls="dropdown32"
                                                       aria-expanded="true">@mdo</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="about-tab3" data-toggle="tab" href="#about3" aria-controls="about3"
                                                   aria-expanded="false">About</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content px-1 pt-1">
                                            <div role="tabpanel" class="tab-pane" id="home3" aria-labelledby="home-tab3" aria-expanded="true">
                                                <p>Candy canes donut chupa chups candy canes lemon drops oat cake wafer. Cotton candy candy canes
                                                    marzipan carrot cake. Sesame snaps lemon drops candy marzipan donut brownie tootsie roll. Icing
                                                    croissant bonbon biscuit gummi bears.</p>
                                            </div>
                                            <div class="tab-pane active show" id="profile3" role="tabpanel" aria-labelledby="profile-tab3"
                                                 aria-expanded="false">
                                                <p>Pudding candy canes sugar plum cookie chocolate cake powder croissant. Carrot cake tiramisu danish
                                                    candy cake muffin croissant tart dessert. Tiramisu caramels candy canes chocolate cake sweet roll
                                                    liquorice icing cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown31" role="tabpanel" aria-labelledby="dropdown31-tab" aria-expanded="false">
                                                <p>Cake croissant lemon drops gummi bears carrot cake biscuit cupcake croissant. Macaroon lemon drops
                                                    muffin jelly sugar plum chocolate cupcake danish icing. Soufflé tootsie roll lemon drops sweet roll
                                                    cake icing cookie halvah cupcake.</p>
                                            </div>
                                            <div class="tab-pane" id="dropdown32" role="tabpanel" aria-labelledby="dropdown32-tab" aria-expanded="false">
                                                <p>Chocolate croissant cupcake croissant jelly donut. Cheesecake toffee apple pie chocolate bar biscuit
                                                    tart croissant. Lemon drops danish cookie. Oat cake macaroon icing tart lollipop cookie sweet bear
                                                    claw.</p>
                                            </div>
                                            <div class="tab-pane" id="about3" role="tabpanel" aria-labelledby="about-tab3" aria-expanded="false">
                                                <p>Carrot cake dragée chocolate. Lemon drops ice cream wafer gummies dragée. Chocolate bar liquorice
                                                    cheesecake cookie chupa chups marshmallow oat cake biscuit. Dessert toffee fruitcake ice cream powder
                                                    tootsie roll cake.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Justified With Top Border end -->

                <!-- Vertical Tabs start -->
                <section id="vertical-tabs">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <h4 class="text-uppercase">Vertical Tabs</h4>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Vertical Left Tabs</h4>
                                    <p>Wrap tabs and tab content with <code>.nav-vertical</code> class. To add left navigation use
                                        <code>.nav-left</code> class to <code>.nav.nav-tabs</code>.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="nav-vertical">
                                            <ul class="nav nav-tabs nav-left flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="baseVerticalLeft-tab1" data-toggle="tab" aria-controls="tabVerticalLeft1"
                                                       href="#tabVerticalLeft1" aria-expanded="true">Tab 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalLeft-tab2" data-toggle="tab" aria-controls="tabVerticalLeft2"
                                                       href="#tabVerticalLeft2" aria-expanded="false">Tab 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalLeft-tab3" data-toggle="tab" aria-controls="tabVerticalLeft3"
                                                       href="#tabVerticalLeft3" aria-expanded="false">Tab 3 </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content px-1">
                                                <div role="tabpanel" class="tab-pane active" id="tabVerticalLeft1" aria-expanded="true" aria-labelledby="baseVerticalLeft-tab1">
                                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot
                                                        cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalLeft2" aria-labelledby="baseVerticalLeft-tab2">
                                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake
                                                        jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.
                                                    </p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalLeft3" aria-labelledby="baseVerticalLeft-tab3">
                                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton
                                                        candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder
                                                        sweet sesame snaps.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Vertical Right Tabs</h4>
                                    <p>Wrap tabs and tab content with <code>.nav-vertical</code> class. To add right navigation use
                                        <code>.nav-right</code> class to <code>.nav.nav-tabs</code>.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="nav-vertical">
                                            <ul class="nav nav-tabs nav-right flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="baseVerticalRight-tab1" data-toggle="tab" aria-controls="tabVerticalRight1"
                                                       href="#tabVerticalRight1" aria-expanded="true">Tab 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalRight-tab2" data-toggle="tab" aria-controls="tabVerticalRight2"
                                                       href="#tabVerticalRight2" aria-expanded="false">Tab 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalRight-tab3" data-toggle="tab" aria-controls="tabVerticalRight3"
                                                       href="#tabVerticalRight3" aria-expanded="false">Tab 3 </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content px-1">
                                                <div role="tabpanel" class="tab-pane active" id="tabVerticalRight1" aria-expanded="true"
                                                     aria-labelledby="baseVerticalRight-tab1">
                                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot
                                                        cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalRight2" aria-labelledby="baseVerticalRight-tab2">
                                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake
                                                        jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.
                                                    </p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalRight3" aria-labelledby="baseVerticalRight-tab3">
                                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton
                                                        candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder
                                                        sweet sesame snaps.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tabs with Icon</h4>
                                    <p>You can also add icons to the tab name.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="nav-vertical">
                                            <ul class="nav nav-tabs nav-left">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="baseVerticalLeft2-tab1" data-toggle="tab" aria-controls="tabVerticalLeft21"
                                                       href="#tabVerticalLeft21" aria-expanded="true"><i class="fa fa-align-justify"></i> Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalLeft2-tab2" data-toggle="tab" aria-controls="tabVerticalLeft22"
                                                       href="#tabVerticalLeft22" aria-expanded="false"><i class="fa fa-header"></i> Profile</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalLeft2-tab3" data-toggle="tab" aria-controls="tabVerticalLeft23"
                                                       href="#tabVerticalLeft23" aria-expanded="false"><i class="fa fa-send-o"></i> About</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content px-1">
                                                <div role="tabpanel" class="tab-pane active" id="tabVerticalLeft21" aria-expanded="true"
                                                     aria-labelledby="baseVerticalLeft2-tab1">
                                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot
                                                        cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalLeft22" aria-labelledby="baseVerticalLeft2-tab2">
                                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake
                                                        jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.
                                                    </p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalLeft23" aria-labelledby="baseVerticalLeft2-tab3">
                                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton
                                                        candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder
                                                        sweet sesame snaps.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tabs with Icon</h4>
                                    <p>You can also add icons to the tab name.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="nav-vertical">
                                            <ul class="nav nav-tabs nav-right">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="baseVerticalRight2-tab1" data-toggle="tab" aria-controls="tabVerticalRight21"
                                                       href="#tabVerticalRight21" aria-expanded="true"><i class="fa fa-align-justify float-right mt-1"></i>
                                                        Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalRight2-tab2" data-toggle="tab" aria-controls="tabVerticalRight22"
                                                       href="#tabVerticalRight22" aria-expanded="false"><i class="fa fa-header float-right mt-1"></i>
                                                        Profile</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="baseVerticalRight2-tab3" data-toggle="tab" aria-controls="tabVerticalRight23"
                                                       href="#tabVerticalRight23" aria-expanded="false"><i class="fa fa-send-o float-right mt-1"></i>
                                                        About</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content px-1">
                                                <div role="tabpanel" class="tab-pane active" id="tabVerticalRight21" aria-expanded="true"
                                                     aria-labelledby="baseVerticalRight2-tab1">
                                                    <p>Oat cake marzipan cake lollipop caramels wafer pie jelly beans. Icing halvah chocolate cake carrot
                                                        cake. Jelly beans carrot cake marshmallow gingerbread chocolate cake. Gummies cupcake croissant.</p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalRight22" aria-labelledby="baseVerticalRight2-tab2">
                                                    <p>Sugar plum tootsie roll biscuit caramels. Liquorice brownie pastry cotton candy oat cake fruitcake
                                                        jelly chupa chups. Pudding caramels pastry powder cake soufflé wafer caramels. Jelly-o pie cupcake.
                                                    </p>
                                                </div>
                                                <div class="tab-pane" id="tabVerticalRight23" aria-labelledby="baseVerticalRight2-tab3">
                                                    <p>Biscuit ice cream halvah candy canes bear claw ice cream cake chocolate bar donut. Toffee cotton
                                                        candy liquorice. Oat cake lemon drops gingerbread dessert caramels. Sweet dessert jujubes powder
                                                        sweet sesame snaps.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Vertical Tabs end -->

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
