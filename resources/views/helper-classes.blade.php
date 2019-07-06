@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><div class="row">
                    <div class="col-sm-12">
                        <div class="content-header">Helper Classes</div>
                    </div>
                </div>
                <!-- Spacing -->
                <section id="spacing" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Spacing</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Assign <code class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to
                                    an element or a subset of its sides with shorthand classes. Includes support for individual properties,
                                    all properties, and vertical and horizontal properties. All classes are multiples on the global default
                                    value, <code class="highlighter-rouge">1rem</code>.</p>


                                <p>The classes are named using the format: <code class="highlighter-rouge"><span class="p">&#123;</span><span
                                            class="err">property</span><span class="p">&#125;</span><span class="err">-</span><span class="p">&#123;</span><span
                                            class="err">sides</span><span class="p">&#125;</span><span class="err">-</span><span class="p">&#123;</span><span
                                            class="err">size</span><span class="p">&#125;</span></code></p>
                                <ul>
                                    <li><code class="highlighter-rouge">m</code> - for classes that set <code class="highlighter-rouge">margin</code></li>
                                    <li><code class="highlighter-rouge">p</code> - for classes that set <code class="highlighter-rouge">padding</code></li>
                                </ul>

                                <p>This table contain class to add element's top, bottom, left, right & all side margin.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.mt-&#123;size&#125;</code></td>
                                        <td>To set margin top use <code>.mt-&#123;size&#125;</code> class, where <code>&#123;size&#125;</code> is
                                            value between 0-3.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.mb-&#123;size&#125;</code></td>
                                        <td>To set margin bottom use <code>.mb-&#123;size&#125;</code> class, where <code>&#123;size&#125;</code>
                                            is value between 0-3.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.ml-&#123;size&#125;</code></td>
                                        <td>To set margin left use <code>.ml-&#123;size&#125;</code> class, where <code>&#123;size&#125;</code>
                                            is value between 0-3.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.mr-&#123;size&#125;</code></td>
                                        <td>To set margin right use <code>.mr-&#123;size&#125;</code> class, where <code>&#123;size&#125;</code>
                                            is value between 0-3.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.mx-&#123;size&#125;</code></td>
                                        <td>To set both margin left & right use <code>.mx-&#123;size&#125;</code> class, where <code>&#123;size&#125;</code>
                                            is value between 0-3.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.my-&#123;size&#125;</code></td>
                                        <td>To set both margin top & bottom use <code>.my-&#123;size&#125;</code> class, where <code>&#123;size&#125;</code>
                                            is value between 0-3.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.m-&#123;size&#125;</code></td>
                                        <td>To set margin 4 sides of the element use <code>.m-&#123;size&#125;</code> class, where <code>&#123;size&#125;</code>
                                            is value between 0-3.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-text">
                                <p>This table contain class to add element's top, bottom, left, right & all side padding.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.pt-&#123;size&#125;</code></td>
                                        <td>To set padding top use <code>.pt-&#123;size&#125;</code> class, where <code>&#123;size&#125;</code>
                                            is value between 0-3.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.pb-&#123;size&#125;</code></td>
                                        <td>To set padding bottom use <code>.pb-&#123;size&#125;</code> class, where <code>&#123;size&#125;</code>
                                            is value between 0-3.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.pl-&#123;size&#125;</code></td>
                                        <td>To set padding left use <code>.pl-&#123;size&#125;</code> class, where <code>&#123;size&#125;</code>
                                            is value between 0-3.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.pr-&#123;size&#125;</code></td>
                                        <td>To set padding right use <code>.pr-&#123;size&#125;</code> class, where <code>&#123;size&#125;</code>
                                            is value between 0-3.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.px-&#123;size&#125;</code></td>
                                        <td>To set both padding left & right use <code>.px-&#123;size&#125;</code> class, where <code>&#123;size&#125;</code>
                                            is value between 0-3.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.py-&#123;size&#125;</code></td>
                                        <td>To set both padding top & bottom use <code>.py-&#123;size&#125;</code> class, where <code>&#123;size&#125;</code>
                                            is value between 0-3.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.p-&#123;size&#125;</code></td>
                                        <td>To set padding 4 sides of the element use <code>.pa-&#123;size&#125;</code> class, where <code>&#123;size&#125;</code>
                                            is value between 0-3.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-text">
                                <p>Where <em>size</em> is one of:</p>
                                <ul>
                                    <li><code class="highlighter-rouge">0</code> - for classes that eliminate the <code class="highlighter-rouge">margin</code>
                                        or <code class="highlighter-rouge">padding</code> by setting it to <code class="highlighter-rouge">0</code></li>
                                    <li><code class="highlighter-rouge">1</code> - (by default) for classes that set the <code class="highlighter-rouge">margin</code>
                                        or <code class="highlighter-rouge">padding</code> to <code class="highlighter-rouge">$spacer-x</code> or
                                        <code class="highlighter-rouge">$spacer-y</code></li>
                                    <li><code class="highlighter-rouge">2</code> - (by default) for classes that set the <code class="highlighter-rouge">margin</code>
                                        or <code class="highlighter-rouge">padding</code> to <code class="highlighter-rouge">$spacer-x * 1.5</code>
                                        or <code class="highlighter-rouge">$spacer-y * 1.5</code></li>
                                    <li><code class="highlighter-rouge">3</code> - (by default) for classes that set the <code class="highlighter-rouge">margin</code>
                                        or <code class="highlighter-rouge">padding</code> to <code class="highlighter-rouge">$spacer-x * 3</code>
                                        or <code class="highlighter-rouge">$spacer-y * 3</code></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Spacing -->

                <!-- Content helpers -->
                <section id="content-helpers" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Content helpers</h4>
                    </div>
                    <div class="card-content">
                        <!--Display-->
                        <div class="card-body">
                            <div class="card-text">
                                <h5 class="text-bold-600 my-1">Display</h5>
                                <p>Content helpers classes provides display, position, z-index, edges, vertical alignment, cursor, overflow
                                    & list options.</p>
                                <p>Add one of these classes to change the elemets' display properties.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.d-inline</code></td>
                                        <td>Forces the element to behave like an inline element.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.d-inline-block</code></td>
                                        <td>Forces the element to behave like an inline-block element.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.d-block</code></td>
                                        <td>Forces the element to behave like an block element.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.d-none</code></td>
                                        <td>Forces the element to hide on all viewports.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/Display-->

                            <!--position-->
                            <div class="card-text">
                                <h5 class="text-bold-600 my-1">Position</h5>
                                <p>Add one of these classes to set the elemets' position properties.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.position-fixed</code></td>
                                        <td>Changes element's position to fixed.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.position-relative</code></td>
                                        <td>Changes element's position to relative.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.position-absolute</code></td>
                                        <td>Changes element's position to absolute.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.position-static</code></td>
                                        <td>Changes element's position to static.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.position-sticky</code></td>
                                        <td>Changes element's position to sticky.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/position-->

                            <!--vertical alignment-->
                            <div class="card-text">
                                <h5 class="text-bold-600 my-1">Vertical alignment</h5>
                                <p>Add one of these classes to change the elemets' vertical alignment properties.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.align-top</code></td>
                                        <td>Changes element's vertical alignment to top.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.align-middle</code></td>
                                        <td>Changes element's vertical alignment to middle.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.align-bottom</code></td>
                                        <td>Changes element's vertical alignment to bottom.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.align-baseline</code></td>
                                        <td>Changes element's vertical alignment to baseline.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.align-text-top</code></td>
                                        <td>Top of the element is aligned with the top of the parent element's font.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.align-text-bottom</code></td>
                                        <td>The bottom of the element is aligned with the bottom of the parent element's font.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/vertical alignment-->

                            <!--Edges-->
                            <div class="card-text">
                                <h5 class="text-bold-600 my-1">Edges</h5>
                                <p>Add one of these to removes the slected edge of the elements, works with absolute, fixed and relative
                                    positioned
                                    elements.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.no-edge-top</code></td>
                                        <td>Removes the top edge of the element.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.no-edge-bottom</code></td>
                                        <td>Removes the bottom edge of the element.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.no-edge-left</code></td>
                                        <td>Removes the left edge of the element.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.no-edge-right</code></td>
                                        <td>Removes the right edge of the element.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/Edges-->

                            <!--Overflow-->
                            <div class="card-text">
                                <h5 class="text-bold-600 my-1">Overflow</h5>
                                <p>Add one of these to class to change overflow of element.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.overflow-visible</code></td>
                                        <td>Default. The overflow is not clipped. It renders outside the element's box.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.overflow-hidden</code></td>
                                        <td>The overflow is clipped, and the rest of the content will be invisible.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.overflow-auto</code></td>
                                        <td>If overflow is clipped, a scrollbar should be added to see the rest of the content.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.overflow-scroll</code></td>
                                        <td>The overflow is clipped, but a scrollbar is added to see the rest of the content.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!--List-->
                            <div class="card-text my-1">
                                <h5 class="text-bold-600 my-1">List</h5>
                                <p>Add one of these to class to change list style.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.list-unstyled</code></td>
                                        <td>No marker is shown in the list item.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.bullets-inside</code></td>
                                        <td>Indents the marker and the text. The bullets appear inside the content flow</td>
                                    </tr>
                                    <tr>
                                        <td><code>.list-style-circle</code></td>
                                        <td>Set the list item marker to circle.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.list-style-square</code></td>
                                        <td>Set the list item marker to square.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--List-->
                        </div>
                    </div>
                </section>
                <!--/ Content helpers-->

                <!-- Borders -->
                <section id="borders" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Borders</h4>
                    </div>
                    <div class="card-content">
                        <!--Add borders-->
                        <div class="card-body">
                            <div class="card-text my-1">
                                <h5 class="text-bold-600">Add border</h5>
                                <p>Add one of these to class to add border on the required side.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.border</code></td>
                                        <td>Add solid border of 1px on each side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-top</code></td>
                                        <td>Add solid border top of 1px.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-bottom</code></td>
                                        <td>Add solid border bottom of 1px.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-left</code></td>
                                        <td>Add solid border left of 1px.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-right</code></td>
                                        <td>Add solid border right of 1px.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/Add borders-->

                            <!--Remove borders-->
                            <div class="card-text my-1">
                                <h5 class="text-bold-600">Remove border</h5>
                                <p>Add one of these to class to remove border on the required side.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>border-0</code></td>
                                        <td>Remove border from all side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>border-top-0</code></td>
                                        <td>Remove border from the top side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>border-bottom-0</code></td>
                                        <td>Remove border from the bottom side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>border-left-0</code></td>
                                        <td>Remove border from the left side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>border-right-0</code></td>
                                        <td>Remove border from the right side.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/Remove borders-->


                            <!--Border widths-->
                            <div class="card-text my-1">
                                <h5 class="text-bold-600">Border widths</h5>
                                <p>Add one of these to class to change border width on the required side.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.border-2</code></td>
                                        <td>Chande border width to 2px on each side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-top-2</code></td>
                                        <td>Chande border width to 2px on top side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-bottom-2</code></td>
                                        <td>Chande border width to 2px on bottom side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-left-2</code></td>
                                        <td>Chande border width to 2px on left side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-right-2</code></td>
                                        <td>Chande border width to 2px on right side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-3</code></td>
                                        <td>Chande border width to 3px on each side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-top-3</code></td>
                                        <td>Chande border width to 3px on top side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-bottom-3</code></td>
                                        <td>Chande border width to 3px on bottom side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-left-3</code></td>
                                        <td>Chande border width to 3px on left side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-right-3</code></td>
                                        <td>Chande border width to 3px on right side.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/Border width-->

                            <!--Remove border radius-->
                            <div class="card-text my-1">
                                <h5 class="text-bold-600">Remove border radius</h5>
                                <p>Add one of these to class to remove border radius on the required side.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.border-0-top-radius</code></td>
                                        <td>Remove border radius from top side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-0-bottom-radius</code></td>
                                        <td>Remove border radius from bottom side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-0-top-left-radius</code></td>
                                        <td>Remove border radius from top left side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-0-top-right-radius</code></td>
                                        <td>Remove border radius from top right side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-0-bottom-left-radius</code></td>
                                        <td>Remove border radius from bottom left side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-0-bottom-right-radius</code></td>
                                        <td>Remove border radius from bottom right side.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/Remove borders-->
                        </div>
                    </div>
                </section>
                <!--/ Borders-->

                <!-- Size -->
                <section id="size" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Size</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!--Width & Height-->
                            <div class="card-text my-1">
                                <h5 class="text-bold-600">Width & Height</h5>
                                <p>Add one of these to class to set width of the content.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.fit</code></td>
                                        <td>Set content maximum width 100%.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.half-width</code></td>
                                        <td>Set content width 50%.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.full-width</code></td>
                                        <td>Set content width 100%.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.full-height</code></td>
                                        <td>Set content height 100%.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/Width & Height-->


                            <!--Fixed Width-->
                            <div class="card-text my-1">
                                <h5 class="text-bold-600">Fixed Width</h5>
                                <p>Add one of these to class to set fixed width of the content.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.width-&#123;size&#125;</code></td>
                                        <td>Set content fixed width in pixel of selected size where size can be 50, 100, 150, 200, 250, 300,
                                            350, 400, 450, 500, 550, 600, 650, 700, 750 and 800. i.e <code>.width-50</code></td>
                                    </tr>
                                    <tr>
                                        <td><code>.width-&#123;size&#125;-per</code></td>
                                        <td>Set content fixed width in percentage of selected size where size can be 5%, 10%, 15%, 20%, 25%,
                                            30%, 35%, 40%, 45%, 50%, 55%, 60%, 65%, 70%, 75% and 80%. i.e <code>.width-5-per</code></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/Fixed Width-->

                            <!--Fixed Height-->
                            <div class="card-text my-1">
                                <h5 class="text-bold-600">Fixed Height</h5>
                                <p>Add one of these to class to set fixed height of the content.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.height-&#123;size&#125;</code></td>
                                        <td>Set content fixed height in pixel of selected size where size can be 50, 100, 150, 200, 250, 300,
                                            350, 400, 450, 500, 550, 600, 650, 700, 750 and 800. i.e <code>.height-50</code></td>
                                    </tr>
                                    <tr>
                                        <td><code>.height-&#123;size&#125;-per</code></td>
                                        <td>Set content fixed height in percentage of selected size where size can be 5%, 10%, 15%, 20%, 25%,
                                            30%, 35%, 40%, 45%, 50%, 55%, 60%, 65%, 70%, 75% and 80%. i.e <code>.height-5-per</code></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--/Fixed Height-->
                        </div>
                    </div>
                </section>
                <!-- Size -->

                <!--Image-->
                <section id="image" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Image</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Add one of these to class to change image size and other property.</p>
                            </div>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><code>.bg-cover</code></td>
                                        <td>Scale the background image to be as large as possible so that the background area is completely
                                            covered
                                            by the background image.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.bg-repeat</code></td>
                                        <td> Do not repeat the background image.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.bg-no-repeat</code></td>
                                        <td>Repeat the background image.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/Image-->

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
