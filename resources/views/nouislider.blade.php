@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><!-- Slider values section start -->
                <section id="slider-values">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Slider Values</div>
                        </div>
                    </div>

                    <div class="row match-height">

                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body mt-2">

                                        <h5>Handles</h5>
                                        <div class="form-group">
                                            <div id="slider-handles" class="my-1"></div>
                                            <p>The number of handles can be set using the <code>start</code> option.</p>
                                        </div>

                                        <h5>Stepping in non-linear sliders</h5>
                                        <div class="form-group">
                                            <div id="slider-non-linear-step" class="my-1"></div>
                                            <p>For every subrange in a non-linear slider, stepping can be set.</p>
                                        </div>

                                        <h5>Stepping and snapping to values</h5>
                                        <div class="form-group">
                                            <div id="slider-step" class="my-1"></div>
                                            <p>The amount the slider changes on movement can be set using the <code>step</code> option.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body mt-2">

                                        <h5>Non-linear sliders</h5>
                                        <div class="form-group">
                                            <div id="slider-non-linear" class="my-1"></div>
                                            <p>noUiSlider offers some powerful mechanisms that allow a slider to behave in a non-linear fashion.</p>
                                        </div>

                                        <h5>Range</h5>
                                        <div class="form-group">
                                            <div id="slider-range" class="my-1"></div>
                                            <p>All values on the slider are part of a range. The range has a minimum and maximum value.</p>
                                        </div>

                                        <h5>Snapping between steps</h5>
                                        <div class="form-group">
                                            <div id="slider-snap" class="my-1"></div>
                                            <p>When a non-linear slider has been configured, the <code>snap</code> option can be set to <code>true</code>
                                                to force the slider to jump between the specified values.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Slider values section end -->

                <!-- Slider behavior section start -->
                <section id="slider-behavior">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Slider behavior</div>
                            <p class="content-subheader">noUiSlider offers several ways to handle user interaction. The range can be set to
                                drag, and handles can move to taps. All these effects are optional, and can be enable by adding their keyword
                                to the behavior option. This option accepts a <code>"-"</code> separated list of <code>"drag"</code>, <code>"tap"</code>,
                                <code>"fixed"</code>, <code>"snap"</code> or <code>"none"</code>.</p>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Simple Examples -->
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="card">

                                <div class="card-content">
                                    <div class="card-body mt-2">

                                        <h5>Tap</h5>
                                        <div class="form-group">
                                            <div id="tap" class="my-1"></div>
                                            <p>A handle snaps to a clicked location. A smooth transition is used. This option is <code>default</code>.</p>
                                        </div>

                                        <h5>Drag</h5>
                                        <div class="form-group">
                                            <div id="drag" class="my-1"></div>
                                            <p>Makes the range draggable. Requires two handles. The <code>connect</code> option must be set to <code>true</code>.</p>
                                        </div>

                                        <h5>Fixed dragging</h5>
                                        <div class="form-group">
                                            <div id="drag-fixed" class="my-1"></div>
                                            <p>Keeps the distance between handles fixed when the <code>'drag'</code> flag is set.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="card">

                                <div class="card-content">
                                    <div class="card-body mt-2">

                                        <h5>Snap</h5>
                                        <div class="form-group">
                                            <div id="snap" class="my-1"></div>
                                            <p>A handle snaps to a clicked location. It can immediately be moved, without a <code>mouseup</code> +
                                                <code>mousedown</code>.</p>
                                        </div>

                                        <h5>Hover</h5>
                                        <div class="form-group">
                                            <div id="hover" class="my-1"></div>
                                            <p id="hover-val"></p>
                                            <p>With this option set, the slider fires <code>hover</code> events when a mouse or pen user hovers over
                                                the slider.</p>
                                        </div>

                                        <h5>Combined options</h5>
                                        <div class="form-group">
                                            <div id="combined" class="my-1"></div>
                                            <p>Most <code>'behavior'</code> flags can be combined.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Slider values section end -->

                <!-- Slider Scales / Pips section start -->
                <section id="slider-scales-pips">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Slider Scales / Pips</div>
                            <p>This feature allows you to generate points along the slider. Five options can be set: <code>mode</code> to
                                determine where to place pips, <code>values</code> as additional options for <code>mode</code>, <code>stepped</code>
                                to round pip values to the slider stepping, <code>density</code> to pre-scale the number of pips, and <code>filter</code>
                                to manually modify pip size.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Range</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body mb-3">

                                        <p>The <code>range</code> mode uses the slider range to determine where the pips should be. A pip is
                                            generated for every percentage specified.</p>

                                        <h5>Left to right</h5>
                                        <div class="form-group overflow-hidden">
                                            <div id="pips-range" class="mt-1 mb-3"></div>
                                        </div>

                                        <h5>Right to left</h5>
                                        <div class="form-group overflow-hidden">
                                            <div id="pips-range-rtl" class="mt-1 mb-3"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Positions</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body mb-3">

                                        <p>In <code>positions</code> mode, pips are generated at percentage-based positions on the slider.
                                            Optionally, the <code>stepped</code> option can be set to <code>true</code> to match the pips to the
                                            slider steps.</p>

                                        <h5>Positions</h5>
                                        <div class="form-group overflow-hidden">
                                            <div id="pips-positions" class="mt-1 mb-3"></div>
                                        </div>

                                        <h5>Stepped Positions</h5>
                                        <div class="form-group overflow-hidden">
                                            <div id="pips-positions-stepped" class="mt-1 mb-3"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Count</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body mb-3">

                                        <h5>Count</h5>
                                        <div class="form-group overflow-hidden">
                                            <div id="pips-count" class="mt-1 mb-3"></div>
                                        </div>

                                        <h5>Stepped Count</h5>
                                        <div class="form-group overflow-hidden">
                                            <div id="pips-count-stepped" class="mt-1 mb-3"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Values</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body mb-3">

                                        <h5>Values</h5>
                                        <div class="form-group overflow-hidden">
                                            <div id="pips-values" class="mt-1 mb-3"></div>
                                        </div>

                                        <h5>Stepped Values</h5>
                                        <div class="form-group overflow-hidden">
                                            <div id="pips-values-stepped" class="mt-1 mb-3"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Steps</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body mb-3">

                                        <p>Like <code>range</code>, the <code>steps</code> mode uses the slider range. In <code>steps</code> mode,
                                            a pip is generated for every step. The <code>filter</code> option can be used to filter the generated
                                            pips. The <code>filter</code> function must return <code>0</code> (no value), <code>1</code> (large
                                            value) or <code>2</code> (small value).</p>

                                        <h5>Filtered Steps</h5>
                                        <div class="form-group">
                                            <div id="pips-steps-filter" class="my-3 mx-3"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Slider Scales / Pips section end -->

                <!-- Slider Colors - Handles section start -->
                <section id="slider-colors-handles">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Slider Colors - Handles</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body mt-2">
                                        <fieldset>
                                            <label>Default / Primary Color Slider</label>
                                            <div class="form-group overflow-hidden">
                                                <div id="default-color-slider" class="my-1"></div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label>Success Color Slider</label>
                                            <div class="form-group overflow-hidden">
                                                <div id="success-color-slider" class="circle-filled slider-success my-1"></div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label>Info Color Slider</label>
                                            <div class="form-group overflow-hidden">
                                                <div id="info-color-slider" class="square slider-info my-1"></div>
                                            </div>
                                        </fieldset>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body mt-2">
                                        <fieldset>
                                            <label>Warning Color Slider</label>
                                            <div class="form-group overflow-hidden">
                                                <div id="warning-color-slider" class="slider-warning my-1"></div>
                                            </div>
                                        </fieldset>


                                        <fieldset>
                                            <label>Danger Color Slider</label>
                                            <div class="form-group overflow-hidden">
                                                <div id="danger-color-slider" class="circle-filled slider-danger my-1"></div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label>Custom Color Slider</label>
                                            <div class="form-group overflow-hidden">
                                                <div id="custom-color-slider" class="square slider-purple my-1"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Slider Colors - Handles section end -->

                <!-- Slider sizing section start -->
                <section id="slider-sizing">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Slider Sizing</div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Default Handle Sizing -->
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Default Handle</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <label>Extra Large Size</label>
                                            <div class="form-group">
                                                <div class="slider-xl my-1" id="extra-large-slider"></div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label>Large Size</label>
                                            <div class="form-group">
                                                <div class="slider-lg slider-success my-1" id="large-slider"></div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label>Default</label>
                                            <div class="form-group">
                                                <div class="slider-info my-1" id="default-slider"></div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label>Small Size</label>
                                            <div class="form-group">
                                                <div class="slider-sm slider-warning my-1" id="small-slider"></div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label>Extra Small</label>
                                            <div class="form-group">
                                                <div class="slider-xs slider-danger my-1" id="extra-small-slider"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Circle filled handle sizing -->
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Circle Filled Handle</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <label>Extra Large Size</label>
                                            <div class="form-group">
                                                <div class="circle-filled slider-xl my-1" id="circle-extra-large-slider"></div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label>Large Size</label>
                                            <div class="form-group">
                                                <div class="circle-filled slider-lg slider-success my-1" id="circle-large-slider"></div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label>Default</label>
                                            <div class="form-group">
                                                <div class="circle-filled slider-info my-1" id="circle-default-slider"></div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label>Small Size</label>
                                            <div class="form-group">
                                                <div class="circle-filled slider-sm slider-warning my-1" id="circle-small-slider"></div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label>Extra Small</label>
                                            <div class="form-group">
                                                <div class="circle-filled slider-xs slider-danger my-1" id="circle-extra-small-slider"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Square handle sizing -->
                        <div class="col-lg-4 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Square Handle</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <label>Extra Large Size</label>
                                            <div class="form-group">
                                                <div class="square slider-xl my-1" id="square-extra-large-slider"></div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label>Large Size</label>
                                            <div class="form-group">
                                                <div class="square slider-lg slider-success my-1" id="square-large-slider"></div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label>Default</label>
                                            <div class="form-group">
                                                <div class="square slider-info my-1" id="square-default-slider"></div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label>Small Size</label>
                                            <div class="form-group">
                                                <div class="square slider-sm slider-warning my-1" id="square-small-slider"></div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <label>Extra Small</label>
                                            <div class="form-group">
                                                <div class="square slider-xs slider-danger my-1" id="square-extra-small-slider"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Slider sizing section end -->


                <!-- Vertical Sliders section start -->
                <section id="vsliders">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Vertical Sliders</div>
                            <p>The orientation setting can be used to set the slider to <code>"vertical"</code></p>

                            <p><strong>Set dimensions!</strong> Vertical sliders don't assume a default <code>height</code>, so you'll need
                                to set one. You can use any unit you want, including <code>%</code> or <code>px</code>.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Default Vertical Slider</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="form-group text-center">
                                                <div id="slider-vertical-1"></div>
                                                <div id="slider-vertical-2" class="ml-2 slider-info"></div>
                                                <div id="slider-vertical-3" class="ml-2 slider-success"></div>
                                                <div id="slider-vertical-4" class="ml-2 slider-warning"></div>
                                                <div id="slider-vertical-5" class="ml-2 slider-danger"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Connect to lower</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="form-group text-center">
                                                <div id="connect-lower-1"></div>
                                                <div id="connect-lower-2" class="ml-2 slider-info"></div>
                                                <div id="connect-lower-3" class="ml-2 slider-success"></div>
                                                <div id="connect-lower-4" class="ml-2 slider-warning"></div>
                                                <div id="connect-lower-5" class="ml-2 slider-danger"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Connect to upper</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="form-group text-center">
                                                <div id="connect-upper-1"></div>
                                                <div id="connect-upper-2" class="ml-2 slider-info"></div>
                                                <div id="connect-upper-3" class="ml-2 slider-success"></div>
                                                <div id="connect-upper-4" class="ml-2 slider-warning"></div>
                                                <div id="connect-upper-5" class="ml-2 slider-danger"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tooltips</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="form-group text-center">
                                                <div id="slider-tooltips-1" class="mr-3"></div>
                                                <div id="slider-tooltips-2" class="ml-4 mr-4 slider-info"></div>
                                                <div id="slider-tooltips-3" class="ml-3 slider-warning"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Direction Top To Bottom</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="form-group text-center">
                                                <div id="slider-direction-top-bottom-1" class="mr-3"></div>
                                                <div id="slider-direction-top-bottom-2" class="ml-4 mr-4 slider-warning"></div>
                                                <div id="slider-direction-top-bottom-3" class="ml-3 slider-danger"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Direction Bottom To Top</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="form-group text-center">
                                                <div id="slider-direction-bottom-top-1" class="mr-3"></div>
                                                <div id="slider-direction-bottom-top-2" class="ml-4 mr-4 slider-info"></div>
                                                <div id="slider-direction-bottom-top-3" class="ml-4 slider-success"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Margin</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="form-group text-center">
                                                <div id="vertical-margin-1"></div>
                                                <div id="vertical-margin-2" class="ml-2 slider-info"></div>
                                                <div id="vertical-margin-3" class="ml-2 slider-success"></div>
                                                <div id="vertical-margin-4" class="ml-2 slider-warning"></div>
                                                <div id="vertical-margin-5" class="ml-2 slider-danger"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Limit</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="form-group text-center">
                                                <div id="vertical-limit-1"></div>
                                                <div id="vertical-limit-2" class="ml-2 slider-info"></div>
                                                <div id="vertical-limit-3" class="ml-2 slider-success"></div>
                                                <div id="vertical-limit-4" class="ml-2 slider-warning"></div>
                                                <div id="vertical-limit-5" class="ml-2 slider-danger"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Steps</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="form-group text-center">
                                                <div id="vertical-steps-1"></div>
                                                <div id="vertical-steps-2" class="ml-2 slider-info"></div>
                                                <div id="vertical-steps-3" class="ml-2 slider-success"></div>
                                                <div id="vertical-steps-4" class="ml-2 slider-warning"></div>
                                                <div id="vertical-steps-5" class="ml-2 slider-danger"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Vertical Sliders section end -->


                <!-- Vertical Slider Colors - Handles section start -->
                <section id="vslider-colors-handles">
                    <div class="row">
                        <div class="col-12 mt-3 mb-1">
                            <div class="content-header">Vertical Slider Colors - Handles</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Default Handle</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="form-group text-center">
                                                <div id="vert-extra-large-slider"></div>
                                                <div id="vert-large-slider" class="ml-2 slider-info"></div>
                                                <div id="vert-default-slider" class="ml-2 slider-success"></div>
                                                <div id="vert-small-slider" class="ml-2 slider-warning"></div>
                                                <div id="vert-extra-small-slider" class="ml-2 slider-danger"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Circle Filled Handle</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="form-group text-center">
                                                <div id="vert-circle-extra-large-slider" class="circle-filled"></div>
                                                <div id="vert-circle-large-slider" class="circle-filled ml-2 slider-info"></div>
                                                <div id="vert-circle-default-slider" class="circle-filled ml-2 slider-success"></div>
                                                <div id="vert-circle-small-slider" class="circle-filled ml-2 slider-warning"></div>
                                                <div id="vert-circle-extra-small-slider" class="circle-filled ml-2 slider-danger"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Square Handle</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <fieldset>
                                            <div class="form-group text-center">
                                                <div id="vert-square-extra-large-slider" class="square"></div>
                                                <div id="vert-square-large-slider" class="square ml-2 slider-info"></div>
                                                <div id="vert-square-default-slider" class="square ml-2 slider-success"></div>
                                                <div id="vert-square-small-slider" class="square ml-2 slider-warning"></div>
                                                <div id="vert-square-extra-small-slider" class="square ml-2 slider-danger"></div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Vertical Slider Colors - Handles section end -->
                </section>
                <!-- // Slider values section end -->

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
