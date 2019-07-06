@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- Basic Modals start -->
                <section id="basic-modals">
                    <div class="row">
                        <div class="col-sm-12 mt-2">
                            <div class="content-header">Modals</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Modals</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row my-2">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Default Modal</h5>
                                                    <p>Toggle a modal via JavaScript by clicking the button above.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="modal"
                                                            data-target="#default">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel1">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Modal With Icons</h5>
                                                    <p> With some icons and success alert to give success message.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="modal"
                                                            data-target="#iconModal">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="iconModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel2"><i class="fa fa-road2"></i> Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5><i class="fa fa-arrow-right"></i> Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5><i class="fa fa-lightbulb-o"></i> Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                    <div class="alert alert-success" role="alert">
                                                                        <span class="text-bold-600">Well done!</span> You successfully read this important alert
                                                                        message.
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Disable Keyboard</h5>
                                                    <p> By Default, closes the modal when escape key is pressed. Disable keyboard interaction using
                                                        data-backdrop="false".</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="modal"
                                                            data-keyboard="false" data-target="#keyboard">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="keyboard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel3">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Disable Backdrop</h5>
                                                    <p>Disable backdrop element using data-backdrop="false", it includes a modal-backdrop element.
                                                        Alternatively, specify static for a backdrop which doesn't close the modal on
                                                        outsidedata-backdrop="false" click.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="modal"
                                                            data-backdrop="false" data-target="#backdrop">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel4">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Modal Show</h5>
                                                    <p>Manually opens a modal. Returns to the caller before the modal has actually been shown.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="modal" data-show="false"
                                                            data-target="#show">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel5">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Disable Animation</h5>
                                                    <p>For modals that simply appear rather than fade in to view, remove the .fade class from your modal
                                                        markup.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="modal"
                                                            data-target="#animation">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal text-left" id="animation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel6"><i class="fa fa-tree"></i> Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5><i class="fa fa-arrow-right"></i> Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5><i class="fa fa-lightbulb-o"></i> Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                    <div class="alert alert-success" role="alert">
                                                                        <span class="text-bold-600">Well done!</span> You successfully read this important alert
                                                                        message.
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
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
                    </div>
                </section>

                <!-- Basic Modals end -->

                <!-- Modal Themes start -->
                <section id="modal-themes">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Modal Themes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row my-2">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Primary Modal Template</h5>
                                                    <p>To use primary modal theme, add <code>.bg-primary</code> class to the <code>.modal-header</code>
                                                        container</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="modal"
                                                            data-backdrop="false" data-target="#primary">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-primary white">
                                                                    <h4 class="modal-title" id="myModalLabel8">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Success Modal Template</h5>
                                                    <p>To use success modal theme, add <code>.bg-success</code> class to the <code>.modal-header</code>
                                                        container</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-success btn-block btn-lg" data-toggle="modal"
                                                            data-target="#success">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-success white">
                                                                    <h4 class="modal-title" id="myModalLabel9"><i class="fa fa-tree"></i> Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5><i class="fa fa-arrow-right"></i> Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5><i class="fa fa-lightbulb-o"></i> Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                    <div class="alert alert-success" role="alert">
                                                                        <span class="text-bold-600">Well done!</span> You successfully read this important alert
                                                                        message.
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-success">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Danger Modal Template</h5>
                                                    <p>To use danger modal theme, add <code>.bg-danger</code> class to the <code>.modal-header</code>
                                                        container</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-danger btn-block btn-lg" data-toggle="modal" data-target="#danger">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel10"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger white">
                                                                    <h4 class="modal-title" id="myModalLabel10">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-danger">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Info Modal Template</h5>
                                                    <p>To use info modal theme, add <code>.bg-info</code> class to the <code>.modal-header</code>
                                                        container</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-info btn-block btn-lg" data-toggle="modal" data-backdrop="false"
                                                            data-target="#info">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-info white">
                                                                    <h4 class="modal-title" id="myModalLabel11">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-info">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Warning Modal Template</h5>
                                                    <p> To use warning modal theme, add <code>.bg-warning</code> class to the <code>.modal-header</code>
                                                        container</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-warning btn-block btn-lg" data-toggle="modal"
                                                            data-target="#warning">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="warning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel12"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-warning white">
                                                                    <h4 class="modal-title" id="myModalLabel12"><i class="fa fa-tree"></i> Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5><i class="fa fa-arrow-right"></i> Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5><i class="fa fa-lightbulb-o"></i> Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                    <div class="alert alert-success" role="alert">
                                                                        <span class="text-bold-600">Well done!</span> You successfully read this important alert
                                                                        message.
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-warning">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Border Modal Template</h5>
                                                    <p>To use Border color modal theme, add <code>.border-COLORNAME</code> class to the <code>.modal-content</code>
                                                        container</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-pink btn-block btn-lg border-pink pink" data-toggle="modal"
                                                            data-target="#border">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="border" tabindex="-1" role="dialog" aria-labelledby="myModalLabel15"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content border-pink">
                                                                <div class="modal-header border-bottom-pink">
                                                                    <h4 class="modal-title" id="myModalLabel15"><i class="fa fa-tree"></i> Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5><i class="fa fa-arrow-right"></i> Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5><i class="fa fa-lightbulb-o"></i> Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                    <div class="alert alert-success" role="alert">
                                                                        <span class="text-bold-600">Well done!</span> You successfully read this important alert
                                                                        message.
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
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
                    </div>
                </section>
                <!-- Modal Themes end -->

                <!-- Modal Sizes start -->
                <section id="modal-sizes">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Modal Sizes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row my-2">
                                            <div class="col-lg-3 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Small Modal Size</h5>
                                                    <p>Add class <code>.modal-sm</code> with <code>.modal-dialog</code> to use small size of modal.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#small">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="small" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog modal-sm" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel19">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Default Modal Size</h5>
                                                    <p>Default size modal markup doesn't require any additional sizing class.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#defaultSize">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="defaultSize" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel18"><i class="fa fa-tree"></i> Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5><i class="fa fa-arrow-right"></i> Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5><i class="fa fa-lightbulb-o"></i> Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                    <div class="alert alert-success" role="alert">
                                                                        <span class="text-bold-600">Well done!</span> You successfully read this important alert
                                                                        message.
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Large Modal</h5>
                                                    <p>Add class <code>.modal-lg</code> with <code>.modal-dialog</code> to use large size of modal.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#large">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel17">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Extra Large Modal</h5>
                                                    <p>Add class <code>.modal-xl</code>to use extra large size of modal.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#xlarge">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="xlarge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog modal-xl" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel16">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
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
                    </div>
                </section>
                <!-- Modal Sizes end -->

                <!-- Modal Events start -->
                <section id="modal-events">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Modal Events</h4>
                                    <p>Bootstrap’s modal class exposes a few events for hooking into modal functionality. All modal events are
                                        fired at the modal itself</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row my-2">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>OnShow Modal Event</h5>
                                                    <p>This event fires immediately when the show instance method is called. If caused by a click, the
                                                        clicked element is available as the relatedTarget property of the event.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-danger btn-block btn-lg" data-toggle="modal" id="onshowbtn"
                                                            data-target="#onshow">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="onshow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel21"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel21">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>OnShown Modal Event</h5>
                                                    <p>This event is fired when the modal has been made visible to the user (will wait for CSS
                                                        transitions to complete). If caused by a click, the clicked element is available as the
                                                        relatedTarget property of the event.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-danger btn-block btn-lg" data-toggle="modal" id="onshownbtn"
                                                            data-target="#onshown">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="onshown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel22"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel22">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>OnHide Modal Event</h5>
                                                    <p>This event is fired immediately when the hide instance method has been called.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-danger btn-block btn-lg" data-toggle="modal" id="onhidebtn"
                                                            data-target="#onhide">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="onhide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel23"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel23"><i class="fa fa-tree"></i> Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5><i class="fa fa-arrow-right"></i> Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5><i class="fa fa-lightbulb-o"></i> Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                    <div class="alert alert-success" role="alert">
                                                                        <span class="text-bold-600">Well done!</span> You successfully read this important alert
                                                                        message.
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>OnHidden Modal Event</h5>
                                                    <p>This event is fired when the modal has finished being hidden from the user (will wait for CSS
                                                        transitions to complete).</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-danger btn-block btn-lg" data-toggle="modal" id="onhiddenbtn"
                                                            data-target="#onhidden">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="onhidden" tabindex="-1" role="dialog" aria-labelledby="myModalLabel24"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel24">Basic Modal</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Check First Paragraph</h5>
                                                                    <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                                                                        Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                                                                        cheesecake cookie chocolate cake liquorice. Apple pie sugar plum powder donut soufflé.</p>
                                                                    <p>Sweet roll biscuit donut cake gingerbread. Chocolate cupcake chocolate bar ice cream.
                                                                        Danish candy cake.</p>
                                                                    <hr>
                                                                    <h5>Some More Text</h5>
                                                                    <p>Cupcake sugar plum dessert tart powder chocolate fruitcake jelly. Tootsie roll bonbon
                                                                        toffee danish. Biscuit sweet cake gummies danish. Tootsie roll cotton candy tiramisu
                                                                        lollipop candy cookie biscuit pie.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-outline-primary">Save changes</button>
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
                    </div>
                </section>
                <!-- Modal Events end -->

                <!-- Form Components start -->
                <section id="form-components">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Form Components</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row my-2">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Login Form</h5>
                                                    <p> Created Simple Login Form.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-warning btn-block btn-lg" data-toggle="modal"
                                                            data-target="#inlineForm">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <label class="modal-title text-text-bold-600" id="myModalLabel33">Inline Login Form</label>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="#">
                                                                    <div class="modal-body">
                                                                        <label>Email: </label>
                                                                        <div class="form-group">
                                                                            <input type="text" placeholder="Email Address" class="form-control">
                                                                        </div>

                                                                        <label>Password: </label>
                                                                        <div class="form-group">
                                                                            <input type="password" placeholder="Password" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                                                                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Login">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Form with Icons</h5>
                                                    <p>Login Form With Icon.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-warning btn-block btn-lg" data-toggle="modal"
                                                            data-target="#iconForm">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="iconForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel34"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3 class="modal-title" id="myModalLabel34">Modal Title</h3>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form>
                                                                    <div class="modal-body">
                                                                        <label>Email: </label>
                                                                        <div class="form-group position-relative has-icon-left">
                                                                            <input type="text" placeholder="Email Address" class="form-control">
                                                                            <div class="form-control-position">
                                                                                <i class="fa fa-envelope font-medium-5 line-height-1 text-muted icon-align"></i>
                                                                            </div>
                                                                        </div>

                                                                        <label>Password: </label>
                                                                        <div class="form-group position-relative has-icon-left">
                                                                            <input type="password" placeholder="Password" class="form-control">
                                                                            <div class="form-control-position">
                                                                                <i class="fa fa-lock font-large-1 line-height-1 text-muted icon-align"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                                                                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Login">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <h5>Bootstrap Input Style Form</h5>
                                                    <p>Bootstrap Form using Floating Label fields.</p>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-outline-warning btn-block btn-lg" data-toggle="modal"
                                                            data-target="#bootstrap">
                                                        Launch Modal
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="bootstrap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
                                                         aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h3 class="modal-title" id="myModalLabel35"> Modal Title</h3>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form>
                                                                    <div class="modal-body">
                                                                        <fieldset class="form-group floating-label-form-group">
                                                                            <label for="email">Email Address</label>
                                                                            <input type="text" class="form-control" id="email" placeholder="Email Address">
                                                                        </fieldset>
                                                                        <br>
                                                                        <fieldset class="form-group floating-label-form-group">
                                                                            <label for="title">Password</label>
                                                                            <input type="password" class="form-control" id="title" placeholder="Password">
                                                                        </fieldset>
                                                                        <br>
                                                                        <fieldset class="form-group floating-label-form-group">
                                                                            <label for="title1">Description</label>
                                                                            <textarea class="form-control" id="title1" rows="3" placeholder="Description"></textarea>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                                                                        <input type="submit" class="btn btn-outline-primary btn-lg" value="Login">
                                                                    </div>
                                                                </form>
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
                <!-- Form Components end -->

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
