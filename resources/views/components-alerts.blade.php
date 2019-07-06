@extends('layouts.header')

@section('content')
    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- Basic Alerts start -->
                <section id="basic-alerts">
                    <div class="row">
                        <div class="col-sm-12 mt-2">
                            <div class="content-header">Alerts</div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Basic Alerts</h4>
                                    <p>Alerts are available for any length of text, as well as an optional dismiss button. Add <code>.alert.alert-COLOR</code>
                                        classes for alert with all theme colors.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h6>Primary Alert</h6>
                                        <div class="alert alert-primary mb-2" role="alert">
                                            <strong>Good Morning!</strong> Start your day with some alerts.
                                        </div>
                                        <h6>Secondary Alert</h6>
                                        <div class="alert alert-secondary mb-2" role="alert">
                                            <strong>Hello!</strong> This is secondary alert - check it out.
                                        </div>
                                        <h6>Success Alert</h6>
                                        <div class="alert alert-success mb-2" role="alert">
                                            <strong>Well done!</strong> You successfully read this important alert message.
                                        </div>
                                        <h6>Danger Alert</h6>
                                        <div class="alert alert-danger mb-2" role="alert">
                                            <strong>Oh snap!</strong> Change a few things up and submit again.
                                        </div>
                                        <h6>Warning Alert</h6>
                                        <div class="alert alert-warning mb-2" role="alert">
                                            <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                        </div>
                                        <h6>Info Alert</h6>
                                        <div class="alert alert-info mb-2" role="alert">
                                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                        </div>
                                        <h6>Light Alert</h6>
                                        <div class="alert alert-light mb-2" role="alert">
                                            <strong>Hello!</strong> This is light alert - check it out.
                                        </div>
                                        <h6>Dark Alert</h6>
                                        <div class="alert alert-dark mb-2" role="alert">
                                            <strong>Hello!</strong> This is dark alert - check it out.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Dismissible Alerts</h4>
                                    <p>Add a dismiss button and the <code>.alert-dismissible</code> class, which adds extra padding to the
                                        right of the alert and positions the <code>.close</code> button.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h6>Primary Alert</h6>
                                        <div class="alert alert-primary alert-dismissible mb-2" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Good Morning!</strong> Start <a href="#" class="alert-link">your day</a> with some alerts.
                                        </div>
                                        <h6>Secondary Alert</h6>
                                        <div class="alert alert-secondary alert-dismissible mb-2" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Hello!</strong> This is <a href="#" class="alert-link">secondary alert</a> - check it out.
                                        </div>
                                        <h6>Success Alert</h6>
                                        <div class="alert alert-success alert-dismissible mb-2" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Well done!</strong> You successfully read this <a href="#" class="alert-link">important</a> alert
                                            message.
                                        </div>
                                        <h6>Danger Alert</h6>
                                        <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Oh snap!</strong> Change a <a href="#" class="alert-link">few things up</a> and submit again.
                                        </div>
                                        <h6>Warning Alert</h6>
                                        <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Warning!</strong> Better check yourself, you're not <a href="#" class="alert-link">looking too
                                                good</a>.
                                        </div>
                                        <h6>Info Alert</h6>
                                        <div class="alert alert-info alert-dismissible mb-2" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Heads up!</strong> This alert needs <a href="#" class="alert-link">your attention</a>, but it's
                                            not super important.
                                        </div>
                                        <h6>Light Alert</h6>
                                        <div class="alert alert-light alert-dismissible mb-2" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Hello!</strong> This is <a href="#" class="alert-link">light alert</a> - check it out.
                                        </div>
                                        <h6>Dark Alert</h6>
                                        <div class="alert alert-dark alert-dismissible mb-2" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong>Hello!</strong> This is <a href="#" class="alert-link">dark alert</a> - check it out.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Alerts end -->


                <!-- Alerts with No Border start -->
                <section id="alert-border-0" class="mb-2">
                    <div class="row match-height">
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Alerts with Links</h4>
                                    <p> Add <code>.alert-link</code> class to add links to alerts.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h6>Primary Alert</h6>
                                        <div class="alert alert-primary mb-2" role="alert">
                                            <strong>Good Morning!</strong> Start <a href="#" class="alert-link">your day</a> with some alerts.
                                        </div>
                                        <h6>Secondary Alert</h6>
                                        <div class="alert alert-secondary mb-2" role="alert">
                                            <strong>Hello!</strong> This is <a href="#" class="alert-link">secondary alert</a> - check it out.
                                        </div>
                                        <h6>Success Alert</h6>
                                        <div class="alert alert-success mb-2" role="alert">
                                            <strong>Well done!</strong> You successfully read this <a href="#" class="alert-link">important</a> alert
                                            message.
                                        </div>
                                        <h6>Danger Alert</h6>
                                        <div class="alert alert-danger mb-2" role="alert">
                                            <strong>Oh snap!</strong> Change a <a href="#" class="alert-link">few things up</a> and submit again.
                                        </div>
                                        <h6>Warning Alert</h6>
                                        <div class="alert alert-warning mb-2" role="alert">
                                            <strong>Warning!</strong> Better check yourself, you're not <a href="#" class="alert-link">looking too
                                                good</a>.
                                        </div>
                                        <h6>Info Alert</h6>
                                        <div class="alert alert-info mb-2" role="alert">
                                            <strong>Heads up!</strong> This alert needs <a href="#" class="alert-link">your attention</a>, but it's
                                            not super important.
                                        </div>
                                        <h6>Light Alert</h6>
                                        <div class="alert alert-light mb-2" role="alert">
                                            <strong>Hello!</strong> This is <a href="#" class="alert-link">light alert</a> - check it out.
                                        </div>
                                        <h6>Dark Alert</h6>
                                        <div class="alert alert-dark mb-2" role="alert">
                                            <strong>Hello!</strong> This is <a href="#" class="alert-link">dark alert</a> - check it out.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Alerts with No Border</h4>
                                    <p> Add <code>.border-0</code> class along with <code>.alert</code> class for alerts with no borders.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <h6>Primary Alert</h6>
                                        <div class="alert alert-primary border-0 mb-2" role="alert">
                                            <strong>Good Morning!</strong> Start your day with some alerts.
                                        </div>
                                        <h6>Secondary Alert</h6>
                                        <div class="alert alert-secondary border-0 mb-2" role="alert">
                                            <strong>Hello!</strong> This is secondary alert - check it out.
                                        </div>
                                        <h6>Success Alert</h6>
                                        <div class="alert alert-success border-0 mb-2" role="alert">
                                            <strong>Well done!</strong> You successfully read this important alert message.
                                        </div>
                                        <h6>Danger Alert</h6>
                                        <div class="alert alert-danger border-0 mb-2" role="alert">
                                            <strong>Oh snap!</strong> Change a few things up and submit again.
                                        </div>
                                        <h6>Warning Alert</h6>
                                        <div class="alert alert-warning border-0 mb-2" role="alert">
                                            <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                        </div>
                                        <h6>Info Alert</h6>
                                        <div class="alert alert-info border-0 mb-2" role="alert">
                                            <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                                        </div>
                                        <h6>Light Alert</h6>
                                        <div class="alert alert-light border-0 mb-2" role="alert">
                                            <strong>Hello!</strong> This is light alert - check it out.
                                        </div>
                                        <h6>Dark Alert</h6>
                                        <div class="alert alert-dark border-0 mb-2" role="alert">
                                            <strong>Hello!</strong> This is dark alert - check it out.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Alerts with No Border end -->


                <!-- Alerts with icons start -->
                <section id="alerts-with-icons" class="mb-2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Alerts with icons</h4>
                                    <p>To add left/right icons to the alert, use class <code>.alert-icon-left</code> or <code>alert-icon-right</code>
                                        as required.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12">
                                                <h6>Primary Alert</h6>
                                                <div class="alert alert-icon-left alert-primary alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Good Morning!</strong> Start <a href="#" class="alert-link">your day</a> with some alerts.
                                                </div>
                                                <h6>Success Alert</h6>
                                                <div class="alert alert-icon-left alert-success alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Well done!</strong> You successfully read this <a href="#" class="alert-link">important</a>
                                                    alert message.
                                                </div>
                                                <h6>Danger Alert</h6>
                                                <div class="alert alert-icon-left alert-danger alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Oh snap!</strong> Change a <a href="#" class="alert-link">few things up</a> and submit again.
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12">
                                                <h6>Warning Alert</h6>
                                                <div class="alert alert-icon-right alert-warning alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Warning!</strong> Better check yourself, you're not <a href="#" class="alert-link">looking
                                                        too good</a>.
                                                </div>
                                                <h6>Info Alert</h6>
                                                <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Heads up!</strong> This alert needs <a href="#" class="alert-link">your attention</a>, but
                                                    it's not super important.
                                                </div>
                                                <h6>Custom Alert</h6>
                                                <div class="alert alert-icon-right alert-blue-grey alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Great!</strong> You are using some <a href="#" class="alert-link">gorgeous</a> custom colors.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Alerts with icons end -->


                <!-- Solid Alerts start -->
                <section id="solid-alerts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Solid Alerts</h4>
                                    <p>To use solid alert, add background color class to the <code>.alert</code> container class. Alerts also
                                        support custom color classes from theme color system. To use a custom color, add <code>.bg-*</code> to
                                        the <code>.alert</code> class.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12">
                                                <h6>Primary Alert</h6>
                                                <div class="alert bg-primary alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Good Morning!</strong> Start <a href="#" class="alert-link">your day</a> with some alerts.
                                                </div>
                                                <h6>Success Alert</h6>
                                                <div class="alert bg-success alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Well done!</strong> You successfully read this <a href="#" class="alert-link">important</a>
                                                    alert message.
                                                </div>
                                                <h6>Danger Alert</h6>
                                                <div class="alert bg-danger alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Oh snap!</strong> Change a <a href="#" class="alert-link">few things up</a> and submit again.
                                                </div>

                                            </div>
                                            <div class="col-xl-6 col-lg-12">
                                                <h6>Warning Alert</h6>
                                                <div class="alert bg-warning alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Warning!</strong> Better check yourself, you're not <a href="#" class="alert-link">looking
                                                        too good</a>.
                                                </div>
                                                <h6>Info Alert</h6>
                                                <div class="alert bg-info alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Heads up!</strong> This alert needs <a href="#" class="alert-link">your attention</a>, but
                                                    it's not super important.
                                                </div>
                                                <h6>Custom Alert</h6>
                                                <div class="alert bg-blue alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Great!</strong> You are using some <a href="#" class="alert-link">gorgeous</a> custom colors.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Solid Alerts end -->


                <!-- Solid Alerts with icons start -->
                <section id="solid-alerts-with-icons">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Solid Alerts with icons</h4>
                                    <p>To use solid alert with icons, add class <code>.alert-icon-left</code> or <code>alert-icon-right</code>
                                        to <code>.alert</code> container class.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12">
                                                <h6>Primary Alert</h6>
                                                <div class="alert bg-primary alert-icon-left alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Good Morning!</strong> Start <a href="#" class="alert-link">your day</a> with some alerts.
                                                </div>
                                                <h6>Success Alert</h6>
                                                <div class="alert bg-success alert-icon-left alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Well done!</strong> You successfully read this <a href="#" class="alert-link">important</a>
                                                    alert message.
                                                </div>
                                                <h6>Danger Alert</h6>
                                                <div class="alert bg-danger alert-icon-left alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Oh snap!</strong> Change a <a href="#" class="alert-link">few things up</a> and submit again.
                                                </div>

                                            </div>
                                            <div class="col-xl-6 col-lg-12">
                                                <h6>Warning Alert</h6>
                                                <div class="alert bg-warning alert-icon-right alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Warning!</strong> Better check yourself, you're not <a href="#" class="alert-link">looking
                                                        too good</a>.
                                                </div>
                                                <h6>Info Alert</h6>
                                                <div class="alert bg-info alert-icon-right alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Heads up!</strong> This alert needs <a href="#" class="alert-link">your attention</a>, but
                                                    it's not super important.
                                                </div>
                                                <h6>Custom Alert</h6>
                                                <div class="alert bg-blue alert-icon-right alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Great!</strong> You are using some <a href="#" class="alert-link">gorgeous</a> custom colors.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Solid Alerts with icons end -->


                <!-- Alerts with Additional Content start -->
                <section id="additional-content-alerts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Alerts with Additional Content</h4>
                                    <p>Alerts can also contain additional HTML elements like headings and paragraphs.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12">
                                                <h6>Primary Alert</h6>
                                                <div class="alert alert-primary alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="alert-heading mb-2">Good Morning!</h4>
                                                    <p>Aww yeah, you successfully read this <a href="#" class="alert-link">important alert</a> message.
                                                        This example text is going to run a bit longer so that you can see how spacing within an alert
                                                        works with this kind of content.</p>
                                                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                                </div>
                                                <h6>No Border Success Alert</h6>
                                                <div class="alert alert-success border-0 alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="alert-heading mb-2">Well done!</h4>
                                                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a
                                                        bit longer so that you can see how <a href="#" class="alert-link">spacing within</a> an alert works
                                                        with this kind of content.</p>
                                                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                                </div>
                                                <h6>Solid Danger Alert</h6>
                                                <div class="alert alert-danger alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="alert-heading mb-2">Oh snap!</h4>
                                                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a
                                                        bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things <a href="#"
                                                                                                                                            class="alert-link">nice and tidy</a>.</p>
                                                </div>

                                            </div>
                                            <div class="col-xl-6 col-lg-12">
                                                <h6>Warning Alert</h6>
                                                <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="alert-heading mb-2">Warning!</h4>
                                                    <p>Aww yeah, you successfully read this important alert message. This example text is <a href="#"
                                                                                                                                             class="alert-link">going to run</a> a bit longer so that you can see how spacing within an alert
                                                        works with this kind of content.</p>
                                                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                                </div>
                                                <h6>No Border Info Alert</h6>
                                                <div class="alert alert-info border-0 alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="alert-heading mb-2">Heads up!</h4>
                                                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a
                                                        bit longer so that you can see how spacing within <a href="#" class="alert-link">an alert</a> works
                                                        with this kind of content.</p>
                                                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                                </div>
                                                <h6>Solid Custom Alert</h6>
                                                <div class="alert alert-amber alert-dismissible mb-2" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <h4 class="alert-heading mb-2">Great!</h4>
                                                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a
                                                        bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                                    <p class="mb-0">Whenever you need to, be sure to use margin <a href="#" class="alert-link">utilities</a>
                                                        to keep things nice and tidy.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Alerts with Additional Content end -->

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
