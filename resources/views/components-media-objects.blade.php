@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- Media Object start -->
                <section id="bordered-media-object d-flex mr-3">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header">Media object</div>
                            <p class="content-sub-header">Abstract object styles for building various types of components that feature a left- or right-aligned image alongside
                                textual content.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <!--Left Aligned Media Starts-->
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Left media</h4>
                                    <p>Default media element to left of the content.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media">
                                            <a>
                                                <img alt="96x96" class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-12.png" style="width: 80px; height: 80px;">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                                                    vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus. </p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a>
                                                <img alt="96x96" class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-11.png" style="width: 80px; height: 80px;">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                                                    vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus. </p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a>
                                                <img alt="96x96" class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-3.png" style="width: 80px; height: 80px;">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                                                    vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Left Aligned Media Ends-->

                        <!--Right Aligned Media Starts-->
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Right media</h4>
                                    <p>switch image to right of the content.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                                                    vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus. </p>
                                            </div>
                                            <a>
                                                <img alt="96x96" class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-18.png" style="width: 80px; height: 80px;">
                                            </a>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                                                    vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus. </p>
                                            </div>
                                            <a>
                                                <img alt="96x96" class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-7.png" style="width: 80px; height: 80px;">
                                            </a>
                                        </div>
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading</h4>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                                                    vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                                    congue felis in faucibus. </p>
                                            </div>
                                            <a>
                                                <img alt="96x96" class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-14.png" style="width: 80px; height: 80px;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Right Aligned Media Ends-->
                    </div>
                    <div class="row match-height">
                        <!--Left Media With Right Text Starts-->
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Left Media With Right Text</h4>
                                    <p>Use <code>.text-right</code> class to the content.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media-list">
                                            <div class="media pb-3">
                                                <a>
                                                    <img class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-13.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Oat cake </h4>
                                                    <p>Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake. Tiramisu cookie toffee donut.
                                                        Chocolate pie croissant gummi bears muffin dessert.</p>
                                                </div>
                                            </div>
                                            <div class="media pb-3">
                                                <a>
                                                    <img class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-6.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Jelly chocolate cake</h4>
                                                    <p>Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake jelly beans marzipan sesame snaps.Jelly
                                                        beans cake chocolate cake gummi bears lollipop.</p>
                                                </div>
                                            </div>
                                            <div class="media pb-3">
                                                <a>
                                                    <img class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-18.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                                <div class="media-body text-right">
                                                    <h4 class="media-heading">Pudding marshmallow</h4>
                                                    <p>Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream sugar plum biscuit. Lemon drops
                                                        brownie biscuit jelly-o biscuit gummies.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Left Media With Right Text Ends-->

                        <!--Right Media With Right Text Starts-->
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Right media With Right Text</h4>
                                    <p>Use <code>.text-right</code>to the content for right align text.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media-list">
                                            <div class="media pb-3">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Chupa chups candy</h4>
                                                    <p>Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake. Tiramisu cookie toffee donut.
                                                        Chocolate pie croissant gummi bears muffin dessert.</p>
                                                </div>
                                                <a>
                                                    <img class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-3.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                            </div>
                                            <div class="media pb-3">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Chocolate pudding</h4>
                                                    <p>Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake jelly beans marzipan sesame snaps.Jelly
                                                        beans cake chocolate cake gummi bears lollipop.</p>
                                                </div>
                                                <a>
                                                    <img class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-9.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                            </div>
                                            <div class="media pb-3">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Cotton candy jelly</h4>
                                                    <p>Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream sugar plum biscuit. Lemon drops
                                                        brownie biscuit jelly-o biscuit gummies.</p>
                                                </div>
                                                <a>
                                                    <img class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-8.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Right Media With Right Text Ends-->
                    </div>
                </section>
                <!-- Media Object end -->

                <!-- Bordered Media Object start -->
                <section id="bordered-media-object d-flex mr-3">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header">Bordered Media Object</div>
                            <p class="content-sub-header">Wrap media list using <code>.media-bordered</code> class for bordered Media Object.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <!--Left Aligned Media Bordered Starts-->
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Left Aligned Media Bordered</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media-list media-bordered">
                                            <div class="media">
                                                <a>
                                                    <img class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-18.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Cookie candy</h4>
                                                    <p>Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon gummi bears apple pie. Brownie
                                                        lemon drops chocolate cake donut croissant candy.</p>
                                                </div>
                                            </div>
                                            <div class="media pt-4">
                                                <a>
                                                    <img class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-9.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Tootsie roll dessert </h4>
                                                    <p>Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o bear claw bear claw halvah. Biscuit
                                                        icing pastry tootsie roll gingerbread croissant chupa chups. </p>
                                                </div>
                                            </div>
                                            <div class="media pt-4">
                                                <a>
                                                    <img class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-3.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Lemon drops ice cream</h4>
                                                    <p>Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy cheesecake tootsie roll. Candy
                                                        sweet cake. Tiramisu cookie toffee donut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Left Aligned Media Bordered Ends-->

                        <!--Right Aligned Media Bordered Starts-->
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bordered Media</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media-list media-bordered">
                                            <div class="media">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Chupa chups candy</h4>
                                                    <p>Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake. Tiramisu cookie toffee donut.
                                                        Chocolate pie croissant gummi bears muffin chocolate.</p>
                                                </div>
                                                <a>
                                                    <img class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-11.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                            </div>
                                            <div class="media pt-4">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Chocolate pudding</h4>
                                                    <p>Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake jelly beans marzipan sesame snaps.Jelly
                                                        beans cake chocolate cake gummi bears lollipop.</p>
                                                </div>
                                                <a>
                                                    <img class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-14.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                            </div>
                                            <div class="media pt-4">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Cotton candy jelly</h4>
                                                    <p>Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream sugar plum biscuit. Lemon drops
                                                        brownie biscuit jelly-o biscuit gummies.</p>
                                                </div>
                                                <a>
                                                    <img class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-12.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Right Aligned Media Bordered Ends-->
                    </div>
                </section>
                <!-- Bordered Media Object end -->


                <!-- Round Media Object start -->
                <section id="round-media-object">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header">Round Media Object</div>
                            <p class="content-sub-header">Add <code>.round-media</code> class to image for round media object.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <!--Left Round Media Starts-->
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Left Round Media Objects</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media-list">
                                            <div class="media pb-3">
                                                <a>
                                                    <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-14.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Cookie candy</h4>
                                                    <p>Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon gummi bears apple pie. Brownie
                                                        lemon drops chocolate cake donut croissant candy.</p>
                                                </div>
                                            </div>
                                            <div class="media pb-3">
                                                <a>
                                                    <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-7.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Tootsie roll dessert </h4>
                                                    <p>Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o bear claw bear claw halvah. Biscuit
                                                        icing pastry tootsie roll gingerbread croissant chupa chups. </p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a>
                                                    <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-24.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Lemon drops ice cream</h4>
                                                    <p>Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy cheesecake tootsie roll. Candy
                                                        sweet cake. Tiramisu cookie toffee donut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Left Round Media Ends-->

                        <!--Right Round Media Starts-->
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Right Round Media</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media-list">
                                            <div class="media pb-3">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Oat cake </h4>
                                                    <p>Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake. Tiramisu cookie toffee donut.
                                                        Chocolate pie croissant gummi bears muffin chocolate.</p>
                                                </div>
                                                <a>
                                                    <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-13.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                            </div>
                                            <div class="media pb-3">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Jelly chocolate cake</h4>
                                                    <p>Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake jelly beans marzipan sesame snaps.Jelly
                                                        beans cake chocolate cake gummi bears lollipop.</p>
                                                </div>
                                                <a>
                                                    <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-6.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Pudding marshmallow</h4>
                                                    <p>Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream sugar plum biscuit. Lemon drops
                                                        brownie biscuit jelly-o biscuit gummies.</p>
                                                </div>
                                                <a>
                                                    <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-18.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Right Round Media Ends-->
                    </div>
                </section>
                <!-- Round Media Object end -->


                <!-- Bordered Round Media Object start -->
                <section id="bordered-round-media-object d-flex mr-3">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header">Bordered Round Media Object</div>
                            <p class="content-sub-header">Wrap media list using <code>.media-bordered</code> class for bordered Media Object.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <!--Bordered Right Round Media Starts-->
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bordered Round Media Objects</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media-list media-bordered">
                                            <div class="media">
                                                <a>
                                                    <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-24.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Cookie candy</h4>
                                                    <p>Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon gummi bears apple pie. Brownie
                                                        lemon drops chocolate cake donut croissant candy.</p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a>
                                                    <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-9.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Tootsie roll dessert </h4>
                                                    <p>Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o bear claw bear claw halvah. Biscuit
                                                        icing pastry tootsie roll gingerbread croissant chupa chups. </p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a>
                                                    <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-18.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Lemon drops ice cream</h4>
                                                    <p>Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy cheesecake tootsie roll. Candy
                                                        sweet cake. Tiramisu cookie toffee donut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Bordered Right Round Media Starts-->

                        <!--Bordered Round Media With Right Align Starts-->
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bordered Round Media With Right Align</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media-list media-bordered">
                                            <div class="media">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Oat cake </h4>
                                                    <p>Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake. Tiramisu cookie toffee donut.
                                                        Chocolate pie croissant gummi bears muffin chocolate.</p>
                                                </div>
                                                <a>
                                                    <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-7.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Jelly chocolate cake</h4>
                                                    <p>Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake jelly beans marzipan sesame snaps.Jelly
                                                        beans cake chocolate cake gummi bears lollipop.</p>
                                                </div>
                                                <a>
                                                    <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-8.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Pudding marshmallow</h4>
                                                    <p>Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream sugar plum biscuit. Lemon drops
                                                        brownie biscuit jelly-o biscuit gummies.</p>
                                                </div>
                                                <a>
                                                    <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-6.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Bordered Round Media With Right Align Ends-->
                    </div>
                </section>
                <!-- Bordered Round Media Object end -->

                <!-- Media List start -->
                <section id="media-list">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header">Nested Media list</div>
                            <p class="content-sub-header">With a bit of extra markup, you can use media inside list (useful for comment threads or articles lists).</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <!--Media Aligned Left Starts-->
                        <div class="col-lg-12 col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Media Aligned Left</h4>
                                    <p>With a bit of extra markup, you can use media inside list (useful for comment threads or articles lists).</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="media-list media-bordered pl-0">
                                            <li class="media">
                                                <a>
                                                    <img alt="96x96" class="media-object d-flex mr-3" data-src="holder.js/96x96" src="app-assets/img/portrait/small/avatar-s-8.png" data-holder-rendered="true" style="width: 80px; height: 80px;">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Media heading</h4>
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                                                        vestibulum in vulputate at, tempus viverra turpis.Candy biscuit sweet roll pudding topping candy canes jujubes
                                                        lemon drops jelly-o.</p>
                                                    <div class="media">
                                                        <a>
                                                            <img alt="96x96" class="media-object d-flex mr-3" data-src="holder.js/96x96" src="app-assets/img/portrait/small/avatar-s-7.png" data-holder-rendered="true" style="width: 80px; height: 80px;">
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">Nested media heading</h4>
                                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus
                                                                odio, vestibulum in vulputate at, tempus viverra turpis.Candy biscuit sweet roll pudding topping candy canes
                                                                jujubes lemon drops jelly-o. </p>
                                                            <div class="media">
                                                                <a>
                                                                    <img alt="96x96" class="media-object d-flex mr-3" data-src="holder.js/96x96" src="app-assets/img/portrait/small/avatar-s-12.png" data-holder-rendered="true" style="width: 80px; height: 80px;">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h4 class="media-heading">Nested media heading</h4>
                                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus
                                                                        odio, vestibulum in vulputate at, tempus viverra turpis.Candy biscuit sweet roll pudding topping candy canes
                                                                        jujubes lemon drops jelly-o.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <a>
                                                            <img alt="96x96" class="media-object d-flex mr-3" data-src="holder.js/96x96" src="app-assets/img/portrait/small/avatar-s-6.png" data-holder-rendered="true" style="width: 80px; height: 80px;">
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading">Nested media heading</h4>
                                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus
                                                                odio, vestibulum in vulputate at, tempus viverra turpis.Candy biscuit sweet roll pudding topping candy canes
                                                                jujubes lemon drops jelly-o. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a>
                                                    <img alt="96x96" class="media-object d-flex mr-3" data-src="holder.js/96x96" src="app-assets/img/portrait/small/avatar-s-24.png" data-holder-rendered="true" style="width: 80px; height: 80px;">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Nested media heading</h4>
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                                                        vestibulum in vulputate at, tempus viverra turpis.Candy biscuit sweet roll pudding topping candy canes jujubes
                                                        lemon drops jelly-o.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Media Aligned Left Ends-->

                        <!--Media Aligned Right Starts-->
                        <div class="col-lg-12 col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Media Aligned Right</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <ul class="media-list media-bordered pl-0">
                                            <li class="media">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Media heading</h4>
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                                                        vestibulum in vulputate at, tempus viverra turpis.Candy biscuit sweet roll pudding topping candy canes jujubes
                                                        lemon drops jelly-o.</p>
                                                    <div class="media">
                                                        <div class="media-body text-right mr-3">
                                                            <h4 class="media-heading">Nested media heading</h4>
                                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus
                                                                odio, vestibulum in vulputate at, tempus viverra turpis.Candy biscuit sweet roll pudding topping candy canes
                                                                jujubes lemon drops jelly-o.</p>
                                                            <div class="media">
                                                                <div class="media-body text-right mr-3">
                                                                    <h4 class="media-heading">Nested media heading</h4>
                                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus
                                                                        odio, vestibulum in vulputate at, tempus viverra turpis.Candy biscuit sweet roll pudding topping candy canes
                                                                        jujubes lemon drops jelly-o.</p>
                                                                </div>
                                                                <a>
                                                                    <img alt="96x96" class="media-object d-flex mr-3" data-src="holder.js/96x96" src="app-assets/img/portrait/small/avatar-s-9.png" data-holder-rendered="true" style="width: 80px; height: 80px;">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <a>
                                                            <img alt="96x96" class="media-object d-flex mr-3" data-src="holder.js/96x96" src="app-assets/img/portrait/small/avatar-s-11.png" data-holder-rendered="true" style="width: 80px; height: 80px;">
                                                        </a>
                                                    </div>
                                                    <div class="media">
                                                        <div class="media-body text-right mr-3">
                                                            <h4 class="media-heading">Nested media heading</h4>
                                                            <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus
                                                                odio, vestibulum in vulputate at, tempus viverra turpis.Candy biscuit sweet roll pudding topping candy canes
                                                                jujubes lemon drops jelly-o.</p>
                                                        </div>
                                                        <a>
                                                            <img alt="96x96" class="media-object d-flex mr-3" data-src="holder.js/96x96" src="app-assets/img/portrait/small/avatar-s-13.png" data-holder-rendered="true" style="width: 80px; height: 80px;">
                                                        </a>
                                                    </div>
                                                </div>
                                                <a>
                                                    <img alt="96x96" class="media-object d-flex mr-3" data-src="holder.js/96x96" src="app-assets/img/portrait/small/avatar-s-18.png" data-holder-rendered="true" style="width: 80px; height: 80px;">
                                                </a>
                                            </li>
                                            <li class="media">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Nested media heading</h4>
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                                                        vestibulum in vulputate at, tempus viverra turpis.Candy biscuit sweet roll pudding topping candy canes jujubes
                                                        lemon drops jelly-o.</p>
                                                </div>
                                                <a>
                                                    <img alt="96x96" class="media-object d-flex mr-3" data-src="holder.js/96x96" src="app-assets/img/portrait/small/avatar-s-12.png" data-holder-rendered="true" style="width: 80px; height: 80px;">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Media Aligned Right Ends-->
                    </div>
                </section>
                <!-- Media List end -->

                <!-- Media Alignment start -->
                <section id="media-alignment">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header">Media Alignment</div>
                            <p class="content-sub-header">The images or other media can be aligned top, middle, or bottom. The default is top aligned.<br> Now, for vertical align,
                                Top alignment use <code>.align-self-start</code> class. For Middle alignment, use <code>.align-self-center</code> and
                                For Bottom alignment, use <code>.align-self-end</code> with left or right aligned class.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <!--Left Media vertical Aligned Starts-->
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Media Aligned Left</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media-list media-bordered">
                                            <div class="media">
                                                <a class="align-self-start">
                                                    <img class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-4.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Top Aligned Media</h4>
                                                    <p>Chocolate bar apple pie lollipop pastry candy canes. Candy soufflé brownie toffee tootsie roll. Brownie lemon drops
                                                        chocolate cake donut croissant cotton candy ice cream. Cookie caramels brownie carrot cake macaroon brownie pastry.
                                                        Donut powder croissant tootsie roll cake cupcake. Cake tart icing jelly-o ice cream tootsie roll bear claw toffee
                                                        brownie. Sugar plum danish muffin gummi bears.</p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="align-self-center">
                                                    <img class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-12.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Middle Aligned Media</h4>
                                                    <p>Dragée topping chocolate dragée icing gingerbread. Ice cream jujubes pie sweet roll sweet roll marshmallow powder.
                                                        Cotton candy dessert apple pie chocolate cake dessert lemon drops topping gingerbread biscuit. Topping halvah wafer
                                                        croissant jelly tootsie roll. Candy jujubes gummi bears sweet roll dessert. Apple pie jelly gummies tiramisu macaroon
                                                        tiramisu oat cake. Apple pie tiramisu cake chocolate cake topping danish sweet apple pie sugar plum.</p>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="align-self-end">
                                                    <img class="media-object d-flex mr-3" src="app-assets/img/portrait/small/avatar-s-19.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Bottom Aligned Media</h4>
                                                    <p>Sweet sesame snaps dragée chocolate tiramisu cotton candy sweet roll bonbon dessert. Chocolate cake tiramisu dragée.
                                                        Carrot cake pudding marshmallow fruitcake carrot cake. Brownie cupcake bonbon sweet lemon drops. Lollipop danish
                                                        jelly beans cotton candy marshmallow brownie. Brownie pastry tiramisu candy oat cake tiramisu halvah cookie tart.
                                                        Cotton candy danish gingerbread powder liquorice.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Left Media vertical Aligned Ends-->

                        <!--Right Media vertical Aligned Starts-->
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Right Aligned Media</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="media-list media-bordered">
                                            <div class="media">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Top Aligned Media</h4>
                                                    <p>Gummi bears marshmallow sweet roll. Chocolate bar halvah candy tart tart chocolate tart muffin. Cheesecake chocolate
                                                        bar gummi bears. Cookie topping chocolate biscuit jujubes. Cheesecake muffin danish candy chocolate sweet roll
                                                        candy jelly powder. Chocolate marzipan dragée. Biscuit oat cake jelly beans brownie donut ice cream biscuit. Soufflé
                                                        soufflé dessert cotton candy chupa chups lemon drops. </p>
                                                </div>
                                                <a class="align-self-start">
                                                    <img class="media-object d-flex mr-3 rounded-circle" src="app-assets/img/portrait/small/avatar-s-11.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Middle Aligned Media</h4>
                                                    <p>Powder jelly topping pastry chocolate icing bonbon powder. Lollipop brownie sugar plum sugar plum carrot cake donut.
                                                        Pastry sugar plum apple pie sesame snaps. Tart brownie gummi bears pie cheesecake cake. Tootsie roll lemon drops
                                                        oat cake muffin danish halvah cookie chocolate croissant. Apple pie oat cake liquorice sesame snaps. Jelly-o jelly-o
                                                        dragée topping. Sugar plum danish muffin gummi bears.</p>
                                                </div>
                                                <a class="align-self-center">
                                                    <img class="media-object d-flex mr-3 rounded-circle" src="app-assets/img/portrait/small/avatar-s-9.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                            </div>
                                            <div class="media">
                                                <div class="media-body text-right mr-3">
                                                    <h4 class="media-heading">Bottom Aligned Media</h4>
                                                    <p>Ice cream lemon drops marshmallow sweet carrot cake marshmallow candy macaroon cupcake. Tart carrot cake fruitcake.
                                                        Marzipan liquorice gummies oat cake. Danish jelly beans dessert sweet roll chupa chups candy canes gummies jujubes
                                                        soufflé. Cheesecake sweet roll candy muffin halvah dessert candy soufflé. Donut cupcake caramels pastry.Candy carrot
                                                        cake liquorice chocolate bar gummi bears brownie donut. </p>
                                                </div>
                                                <a class="align-self-end">
                                                    <img class="media-object d-flex mr-3 rounded-circle" src="app-assets/img/portrait/small/avatar-s-24.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Right Media vertical Aligned Ends-->
                    </div>
                </section>
                <!-- Media Alignment ends -->
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
