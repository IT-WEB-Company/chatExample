@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><div class="row">
                    <div class="col-sm-12">
                        <div class="content-header">Grid</div>
                    </div>
                </div>
                <!--Grid options Starts-->
                <section id="grid-option">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bootstrap Grid options</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th> Extra small <small>(&lt;576px)</small> </th>
                                                    <th> Small <small>(≥576px)</small> </th>
                                                    <th> Medium <small>(≥768px)</small> </th>
                                                    <th> Large <small>(≥992px)</small> </th>
                                                    <th> Extra Large <small>(≥1200px)</small> </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Max container width</th>
                                                    <td>None (auto)</td>
                                                    <td>540px</td>
                                                    <td>720px</td>
                                                    <td>960px</td>
                                                    <td>1140px</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Class prefix</th>
                                                    <td><code>.col-</code></td>
                                                    <td><code>.col-sm-</code></td>
                                                    <td><code>.col-md-</code></td>
                                                    <td><code>.col-lg-</code></td>
                                                    <td><code>.col-xl-</code></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row"># of columns</th>
                                                    <td colspan="5">12</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Gutter width</th>
                                                    <td colspan="5">30px (15px on each side of a column)</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Nestable</th>
                                                    <td colspan="5">Yes</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-nowrap" scope="row">Column ordering</th>
                                                    <td colspan="5">Yes</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!--Grid options Ends-->

                <!-- Bootstrap Auto Layout Column Starts-->
                <section id="auto-layout-columns" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Auto-layout columns</h3>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <p>Utilize breakpoint-specific column classes for easy column sizing without an explicit numbered class like
                                        <code>.col-sm-6</code>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Bootstrap Auto Layout Column Ends-->

                <!--Equal-width Starts-->
                <section id="equal-width" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Equal-width</h4>
                                <p>For example, here are two grid layouts that apply to every device and viewport, from <code>xs</code>
                                    to <code>xl</code>. Add any number of unit-less classes for each breakpoint you
                                    need and every column will be the same width.</p>
                            </div>
                            <div class="card-body ">
                                <div class="card-content">
                                    <div class="bd-example-row">
                                        <div class="bd-example">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        1 of 2
                                                    </div>
                                                    <div class="col">
                                                        2 of 2
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        1 of 3
                                                    </div>
                                                    <div class="col">
                                                        2 of 3
                                                    </div>
                                                    <div class="col">
                                                        3 of 3
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <pre class="language-markup my-3">
<code class="language-markup">
    &lt;div class="container"&gt;
        &lt;div class="row"&gt;
            &lt;div class="col"&gt;
                1 of 2
            &lt;/div&gt;
            &lt;div class="col"&gt;
                2 of 2
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="row"&gt;
            &lt;div class="col"&gt;
                1 of 3
            &lt;/div&gt;
            &lt;div class="col"&gt;
                2 of 3
            &lt;/div&gt;
            &lt;div class="col"&gt;
                3 of 3
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
</code></pre>
                                    </div>
                                    <p>Equal-width columns can be broken into multiple lines, but there was a <a href="https://github.com/philipwalton/flexbugs#11-min-and-max-size-declarations-are-ignored-when-wrapping-flex-items">Safari
                                            flexbox bug</a> that prevented this from working without an explicit <code>flex-basis</code>
                                        or <code>border</code>.</p>
                                    <p>Two workarounds have been documented in a <a href="https://output.jsbin.com/micohor">reduced test case
                                            outside Bootstrap</a>, though if the browser is up to date this shouldn’t be necessary.</p>
                                    <div class="bd-example-row">
                                        <div class="bd-example">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">Column</div>
                                                    <div class="col">Column</div>
                                                    <div class="w-100"></div>
                                                    <div class="col">Column</div>
                                                    <div class="col">Column</div>
                                                </div>
                                            </div>
                                        </div>
                                        <pre class="language-markup my-3">
<code class="language-markup">
&lt;div class="container"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col"&gt;Column&lt;/div&gt;
        &lt;div class="col"&gt;Column&lt;/div&gt;
        &lt;div class="w-100"&gt;&lt;/div&gt;
        &lt;div class="col"&gt;Column&lt;/div&gt;
        &lt;div class="col"&gt;Column&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Equal-width Ends-->

                <!--Setting one column width Starts-->
                <section id="setting-one-column-width" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Setting one column width</h4>
                                <p>Auto-layout for flexbox grid columns also means you can set the width of one column and have the sibling
                                    columns automatically resize around it. You may use predefined grid classes (as shown below), grid mixins,
                                    or inline widths. Note that the other columns will resize no matter the width of the center column.</p>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="bd-example-row">
                                        <div class="bd-example">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        1 of 3
                                                    </div>
                                                    <div class="col-6">
                                                        2 of 3 (wider)
                                                    </div>
                                                    <div class="col">
                                                        3 of 3
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        1 of 3
                                                    </div>
                                                    <div class="col-5">
                                                        2 of 3 (wider)
                                                    </div>
                                                    <div class="col">
                                                        3 of 3
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <pre class="language-markup my-3">
    <code class="language-markup">
        &lt;div class="container"&gt;
            &lt;div class="row"&gt;
                &lt;div class="col"&gt;
                    1 of 3
                &lt;/div&gt;
                &lt;div class="col-6"&gt;
                    2 of 3 (wider)
                &lt;/div&gt;
                &lt;div class="col"&gt;
                    3 of 3
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="row"&gt;
                &lt;div class="col"&gt;
                    1 of 3
                &lt;/div&gt;
                &lt;div class="col-5"&gt;
                    2 of 3 (wider)
                &lt;/div&gt;
                &lt;div class="col"&gt;
                3 of 3
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Setting one column width Ends-->

                <!--Variable width content Starts-->
                <section id="variable-width-content" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Variable width content</h4>
                                <p>Use <code>col-{breakpoint}-auto</code> classes to size columns based on the natural width of their
                                    content.</p>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="bd-example-row">
                                        <div class="bd-example">
                                            <div class="container">
                                                <div class="row justify-content-md-center">
                                                    <div class="col col-lg-2">
                                                        1 of 3
                                                    </div>
                                                    <div class="col-md-auto">
                                                        Variable width content
                                                    </div>
                                                    <div class="col col-lg-2">
                                                        3 of 3
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        1 of 3
                                                    </div>
                                                    <div class="col-md-auto">
                                                        Variable width content
                                                    </div>
                                                    <div class="col col-lg-2">
                                                        3 of 3
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <pre class="language-markup my-3">
<code class="language-markup">
    &lt;div class="container"&gt;
        &lt;div class="row justify-content-md-center"&gt;
            &lt;div class="col col-lg-2"&gt;
                1 of 3
            &lt;/div&gt;
            &lt;div class="col-md-auto"&gt;
                Variable width content
            &lt;/div&gt;
            &lt;div class="col col-lg-2"&gt;
                3 of 3
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="row"&gt;
            &lt;div class="col"&gt;
                1 of 3
            &lt;/div&gt;
            &lt;div class="col-md-auto"&gt;
                Variable width content
            &lt;/div&gt;
            &lt;div class="col col-lg-2"&gt;
                3 of 3
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Variable width content Ends-->

                <!--Equal-width multi-row Starts-->
                <section id="equal-width-multi-row" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Equal-width multi-row</h4>
                                <p>Create equal-width columns that span multiple rows by inserting a <code>.w-100</code>
                                    where you want the columns to break to a new line. Make the breaks responsive by mixing the <code>.w-100</code>
                                    with some <a href="https://getbootstrap.com/docs/4.3/utilities/display/">responsive display utilities</a>.</p>
                            </div>
                            <div class="card-body">
                                <div class="card-content">

                                    <div class="bd-example-row">
                                        <div class="bd-example">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">col</div>
                                                    <div class="col">col</div>
                                                    <div class="w-100"></div>
                                                    <div class="col">col</div>
                                                    <div class="col">col</div>
                                                </div>
                                            </div>
                                        </div>
                                        <pre class="language-markup my-3">
    <code class="language-markup">
    &lt;div class="row"&gt;
        &lt;div class="col"&gt;col&lt;/div&gt;
        &lt;div class="col"&gt;col&lt;/div&gt;
        &lt;div class="w-100"&gt;&lt;/div&gt;
        &lt;div class="col"&gt;col&lt;/div&gt;
        &lt;div class="col"&gt;col&lt;/div&gt;
    &lt;/div&gt;
    </code>
						</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Equal-width multi-row Ends-->

                <!--Responsive classes Starts-->
                <section id="responsive-classes" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Responsive classes</h3>
                                <p>Bootstrap’s grid includes five tiers of predefined classes for building complex responsive layouts.
                                    Customize the size of your columns on extra small, small, medium, large, or extra large devices however you
                                    see fit.</p>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Responsive classes Ends-->

                <!--All breakpoints Starts-->
                <section id="all-breakpoints" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All breakpoints</h4>
                                <p>For grids that are the same from the smallest of devices to the largest, use the <code>.col</code>
                                    and <code class="highlighter-rouge">.col-*</code> classes. Specify a numbered class when you need a
                                    particularly sized column; otherwise, feel free to stick to <code class="highlighter-rouge">.col</code>.</p>
                            </div>
                            <div class="card-body">
                                <div class="card-content">

                                    <div class="bd-example-row">
                                        <div class="bd-example">
                                            <div class="bd-example">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col">col</div>
                                                        <div class="col">col</div>
                                                        <div class="col">col</div>
                                                        <div class="col">col</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8">col-8</div>
                                                        <div class="col-4">col-4</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <pre class="language-markup my-3">
    <code class="language-markup">
        &lt;div class="row"&gt;
            &lt;div class="col"&gt;col&lt;/div&gt;
            &lt;div class="col"&gt;col&lt;/div&gt;
            &lt;div class="col"&gt;col&lt;/div&gt;
            &lt;div class="col"&gt;col&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="row"&gt;
            &lt;div class="col-8"&gt;col-8&lt;/div&gt;
            &lt;div class="col-4"&gt;col-4&lt;/div&gt;
        &lt;/div&gt;
    </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--All breakpoints Ends-->

                <!--Stacked to horizontal Starts-->
                <section id="stacked-to-horizontal" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Stacked to horizontal</h4>
                                <p>Don’t want your columns to simply stack in some grid tiers? Use a combination of different classes for
                                    each tier as needed. See the example below for a better idea of how it all works.</p>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="bd-example-row">
                                        <div class="bd-example">
                                            <div class="container">
                                                <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                                                <div class="row">
                                                    <div class="col-12 col-md-8">.col-12 .col-md-8</div>
                                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                                </div>

                                                <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                                                <div class="row">
                                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                                </div>

                                                <!-- Columns are always 50% wide, on mobile and desktop -->
                                                <div class="row">
                                                    <div class="col-6">.col-6</div>
                                                    <div class="col-6">.col-6</div>
                                                </div>
                                            </div>
                                        </div>

                                        <pre class="language-markup my-3">
<code class="language-markup">
&lt;!-- Stack the columns on mobile by making one full-width and the other half-width --&gt;
&lt;div class="row"&gt;
    &lt;div class="col-12 col-md-8"&gt;.col-12 .col-md-8&lt;/div&gt;
    &lt;div class="col-6 col-md-4"&gt;.col-6 .col-md-4&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --&gt;
&lt;div class="row"&gt;
    &lt;div class="col-6 col-md-4"&gt;.col-6 .col-md-4&lt;/div&gt;
    &lt;div class="col-6 col-md-4"&gt;.col-6 .col-md-4&lt;/div&gt;
    &lt;div class="col-6 col-md-4"&gt;.col-6 .col-md-4&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Columns are always 50% wide, on mobile and desktop --&gt;
&lt;div class="row"&gt;
    &lt;div class="col-6"&gt;.col-6&lt;/div&gt;
    &lt;div class="col-6"&gt;.col-6&lt;/div&gt;
&lt;/div&gt;
</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Stacked to horizontal Ends-->

                <!--Vertical alignment-->
                <section id="vertical-alignment" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Vertical alignment</h4>
                            </div>
                            <div class="card-body ">
                                <div class="card-content">

                                    <div class="bd-example-row bd-example-row-flex-cols">
                                        <div class="bd-example">
                                            <div class="container">
                                                <div class="row align-items-start">
                                                    <div class="col">
                                                        One of three columns
                                                    </div>
                                                    <div class="col">
                                                        One of three columns
                                                    </div>
                                                    <div class="col">
                                                        One of three columns
                                                    </div>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        One of three columns
                                                    </div>
                                                    <div class="col">
                                                        One of three columns
                                                    </div>
                                                    <div class="col">
                                                        One of three columns
                                                    </div>
                                                </div>
                                                <div class="row align-items-end">
                                                    <div class="col">
                                                        One of three columns
                                                    </div>
                                                    <div class="col">
                                                        One of three columns
                                                    </div>
                                                    <div class="col">
                                                        One of three columns
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <pre class="language-markup my-3">
<code class="language-markup">
&lt;div class="container"&gt;
    &lt;div class="row align-items-start"&gt;
        &lt;div class="col"&gt;
            One of three columns
        &lt;/div&gt;
        &lt;div class="col"&gt;
            One of three columns
        &lt;/div&gt;
        &lt;div class="col"&gt;
            One of three columns
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row align-items-center"&gt;
        &lt;div class="col"&gt;
            One of three columns
        &lt;/div&gt;
        &lt;div class="col"&gt;
            One of three columns
        &lt;/div&gt;
        &lt;div class="col"&gt;
            One of three columns
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row align-items-end"&gt;
        &lt;div class="col"&gt;
            One of three columns
        &lt;/div&gt;
        &lt;div class="col"&gt;
            One of three columns
        &lt;/div&gt;
        &lt;div class="col"&gt;
            One of three columns
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code>
						</pre>
                                    </div>

                                    <div class="bd-example-row bd-example-row-flex-cols">
                                        <div class="bd-example">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col align-self-start">
                                                        One of three columns
                                                    </div>
                                                    <div class="col align-self-center">
                                                        One of three columns
                                                    </div>
                                                    <div class="col align-self-end">
                                                        One of three columns
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <pre class="language-markup my-3"><code class="language-markup">
    &lt;div class="container"&gt;
        &lt;div class="row"&gt;
            &lt;div class="col align-self-start"&gt;
                One of three columns
            &lt;/div&gt;
            &lt;div class="col align-self-center"&gt;
                One of three columns
            &lt;/div&gt;
            &lt;div class="col align-self-end"&gt;
                One of three columns
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
			</code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Vertical alignment-->

                <!--Horizontal alignment-->
                <section id="horizontal-alignment" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Horizontal alignment</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="bd-example-row">
                                        <div class="bd-example">
                                            <div class="container">
                                                <div class="row justify-content-start">
                                                    <div class="col-4">
                                                        One of two columns
                                                    </div>
                                                    <div class="col-4">
                                                        One of two columns
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-4">
                                                        One of two columns
                                                    </div>
                                                    <div class="col-4">
                                                        One of two columns
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end">
                                                    <div class="col-4">
                                                        One of two columns
                                                    </div>
                                                    <div class="col-4">
                                                        One of two columns
                                                    </div>
                                                </div>
                                                <div class="row justify-content-around">
                                                    <div class="col-4">
                                                        One of two columns
                                                    </div>
                                                    <div class="col-4">
                                                        One of two columns
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <div class="col-4">
                                                        One of two columns
                                                    </div>
                                                    <div class="col-4">
                                                        One of two columns
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <pre class="language-markup my-3">
    <code class="language-markup">
        &lt;div class="container"&gt;
            &lt;div class="row justify-content-start"&gt;
            &lt;div class="col-4"&gt;
                One of two columns
            &lt;/div&gt;
            &lt;div class="col-4"&gt;
                One of two columns
            &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="row justify-content-center"&gt;
            &lt;div class="col-4"&gt;
                One of two columns
            &lt;/div&gt;
            &lt;div class="col-4"&gt;
                One of two columns
            &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="row justify-content-end"&gt;
            &lt;div class="col-4"&gt;
                One of two columns
            &lt;/div&gt;
            &lt;div class="col-4"&gt;
                One of two columns
            &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="row justify-content-around"&gt;
            &lt;div class="col-4"&gt;
                One of two columns
            &lt;/div&gt;
            &lt;div class="col-4"&gt;
                One of two columns
            &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="row justify-content-between"&gt;
            &lt;div class="col-4"&gt;
                One of two columns
            &lt;/div&gt;
            &lt;div class="col-4"&gt;
                One of two columns
            &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Horizontal alignment-->

                <!--No gutters-->
                <section id="no-gutters" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">No gutters</h4>
                                <p>The gutters between columns in our predefined grid classes can be removed with <code class="highlighter-rouge">.no-gutters</code>.
                                    This removes the negative <code class="highlighter-rouge">margin</code>s from <code class="highlighter-rouge">.row</code>
                                    and the horizontal <code class="highlighter-rouge">padding</code> from all immediate children columns.</p>
                                <p>Here’s the source code for creating these styles. Note that column overrides are scoped to only the first
                                    children columns and are targeted via <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Attribute_selectors">attribute
                                        selector</a>. While this generates a more specific selector, column padding can still be further
                                    customized with <a href="https://getbootstrap.com/docs/4.3/utilities/spacing/">spacing utilities</a>.</p>
                                <p><strong>Need an edge-to-edge design?</strong> Drop the parent <code class="highlighter-rouge">.container</code>
                                    or <code class="highlighter-rouge">.container-fluid</code>.</p>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="bd-example-row">
            <pre class="language-css my-3">
<code class="language-css">
    .no-gutters {
        margin-right: 0;
        margin-left: 0;

        > .col,
        > [class*="col-"] {
        padding-right: 0;
        padding-left: 0;
        }
    }
</code>
</pre>
                                    </div>
                                    <p>In practice, here’s how it looks. Note you can continue to use this with all other predefined grid classes
                                        (including column widths, responsive tiers, reorders, and more).</p>
                                    <div class="bd-example-row">
                                        <div class="bd-example">
                                            <div class="row no-gutters">
                                                <div class="col-12 col-sm-6 col-md-8">.col-12 .col-sm-6 .col-md-8</div>
                                                <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                            </div>
                                        </div>
                                        <pre class="language-markup my-3">
<code class="language-markup">
    &lt;div class="row no-gutters"&gt;
        &lt;div class="col-12 col-sm-6 col-md-8"&gt;.col-12 .col-sm-6 .col-md-8&lt;/div&gt;
        &lt;div class="col-6 col-md-4"&gt;.col-6 .col-md-4&lt;/div&gt;
    &lt;/div&gt;
</code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--No gutters-->

                <!--Column wrapping-->
                <section id="column-wrapping" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Column wrapping</h4>
                                <p>If more than 12 columns are placed within a single row, each group of extra columns will, as one unit,
                                    wrap onto a new line.</p>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="bd-example-row">
                                        <div class="bd-example">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-9">.col-9</div>
                                                    <div class="col-4">.col-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new
                                                        line as one contiguous unit.</div>
                                                    <div class="col-6">.col-6<br>Subsequent columns continue along the new line.</div>
                                                </div>
                                            </div>
                                        </div>

                                        <pre class="language-markup my-3">
<code class="language-markup">
    &lt;div class="row"&gt;
        &lt;div class="col-9"&gt;.col-9&lt;/div&gt;
        &lt;div class="col-4"&gt;.col-4&lt;br&gt;Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.&lt;/div&gt;
        &lt;div class="col-6"&gt;.col-6&lt;br&gt;Subsequent columns continue along the new line.&lt;/div&gt;
    &lt;/div&gt;
</code>
</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Column wrapping-->

                <!--Column breaks-->
                <section id="column-breaks" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Column breaks</h4>
                                <p>Breaking columns to a new line in flexbox requires a small hack: add an element with <code class="highlighter-rouge">width:
                                        100%</code> wherever you want to wrap your columns to a new line. Normally this is accomplished with
                                    multiple <code class="highlighter-rouge">.row</code>s, but not ever implementation method can account for
                                    this.</p>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="bd-example-row">
                                        <div class="bd-example">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
                                                    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>

                                                    <!-- Force next columns to break to new line -->
                                                    <div class="w-100"></div>

                                                    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
                                                    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
                                                </div>
                                            </div>
                                        </div>

                                        <pre class="language-markup my-3">
<code class="language-markup">
    &lt;div class="row"&gt;
        &lt;div class="col-6 col-sm-3"&gt;.col-6 .col-sm-3&lt;/div&gt;
        &lt;div class="col-6 col-sm-3"&gt;.col-6 .col-sm-3&lt;/div&gt;

        &lt;!-- Force next columns to break to new line --&gt;
        &lt;div class="w-100"&gt;&lt;/div&gt;

        &lt;div class="col-6 col-sm-3"&gt;.col-6 .col-sm-3&lt;/div&gt;
        &lt;div class="col-6 col-sm-3"&gt;.col-6 .col-sm-3&lt;/div&gt;
    &lt;/div&gt;
</code>
						</pre>
                                    </div>
                                    <p>You may also apply this break at specific breakpoints with our <a href="https://getbootstrap.com/docs/4.3/utilities/display/">responsive
                                            display utilities</a>.</p>
                                    <div class="bd-example-row">

                                        <div class="bd-example">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
                                                    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>

                                                    <!-- Force next columns to break to new line at md breakpoint and up -->
                                                    <div class="w-100 d-none d-md-block"></div>

                                                    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
                                                    <div class="col-6 col-sm-4">.col-6 .col-sm-4</div>
                                                </div>
                                            </div>
                                        </div>
                                        <pre class="language-markup my-3">
<code class="language-markup">
&lt;div class="row"&gt;
    &lt;div class="col-6 col-sm-4"&gt;.col-6 .col-sm-4&lt;/div&gt;
    &lt;div class="col-6 col-sm-4"&gt;.col-6 .col-sm-4&lt;/div&gt;

    &lt;!-- Force next columns to break to new line at md breakpoint and up --&gt;
    &lt;div class="w-100 d-none d-md-block"&gt;&lt;/div&gt;

    &lt;div class="col-6 col-sm-4"&gt;.col-6 .col-sm-4&lt;/div&gt;
    &lt;div class="col-6 col-sm-4"&gt;.col-6 .col-sm-4&lt;/div&gt;
&lt;/div&gt;
</code>
						</pre>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Column breaks-->


                <!--Reordering-->
                <section id="reordering" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Reordering</h3>
                                <h5 class="card-text mt-2">Order Classes</h5>
                                <p>Use <code>.order-</code> classes for controlling the <strong>visual order</strong> of your content. These
                                    classes are responsive, so you can set the <code>order</code> by breakpoint (e.g., <code>.order-1.order-md-2</code>).
                                    Includes support for <code>1</code> through <code>12</code> across all five grid tiers.</p>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="bd-example-row">
                                        <div class="bd-example">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        First, but unordered
                                                    </div>
                                                    <div class="col order-12">
                                                        Second, but last
                                                    </div>
                                                    <div class="col order-1">
                                                        Third, but first
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <pre class="language-markup my-3">
<code class="language-markup">
    &lt;div class="container"&gt;
        &lt;div class="row"&gt;
            &lt;div class="col"&gt;
                First, but unordered
            &lt;/div&gt;
            &lt;div class="col order-12"&gt;
                Second, but last
            &lt;/div&gt;
            &lt;div class="col order-1"&gt;
            Third, but first
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
</code>
                </pre>
                                    </div>

                                    <p>There’s also a responsive <code>.order-first</code> class that quickly changes the order of one element by
                                        applying <code>order: -1</code>. This class can also be intermixed with the numbered <code>.order-*</code>
                                        classes as needed.</p>
                                    <div class="bd-example-row">

                                        <div class="bd-example">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        First, but unordered
                                                    </div>
                                                    <div class="col">
                                                        Second, but unordered
                                                    </div>
                                                    <div class="col order-first">
                                                        Third, but first
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <pre class="language-markup my-3">
<code class="language-markup">
    &lt;div class="container"&gt;
        &lt;div class="row"&gt;
            &lt;div class="col"&gt;
                First, but unordered
            &lt;/div&gt;
            &lt;div class="col"&gt;
                Second, but unordered
            &lt;/div&gt;
            &lt;div class="col order-first"&gt;
                Third, but first
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
</code>
                </pre>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Reordering-->


                <!--Offsetting columns-->
                <section id="offsetting-columns" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Offsetting columns</h3>
                                <h5 class="mt-2">Offset classes</h5>
                                <p class="card-text">You can offset grid columns in two ways: our responsive <code>.offset-</code> grid
                                    classes and our <a href="https://getbootstrap.com/docs/4.3/utilities/spacing/">margin utilities</a>. Grid
                                    classes are sized to match
                                    columns while margins are more useful for quick layouts where the width of the offset is variable.</p>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <p>Move columns to the right using <code>.offset-md-*</code> classes. These classes
                                        increase the left margin of a column by <code>*</code> columns. For example,
                                        <code>.offset-md-4</code> moves <code>.col-md-4</code>
                                        over four columns.</p>

                                    <div class="bd-example-row">
                                        <div class="bd-example">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-4">.col-md-4</div>
                                                    <div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
                                                    <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
                                                </div>
                                            </div>
                                        </div>

                                        <pre class="language-markup my-3">
<code class="language-markup">
    &lt;div class="row"&gt;
        &lt;div class="col-md-4"&gt;.col-md-4&lt;/div&gt;
        &lt;div class="col-md-4 offset-md-4"&gt;.col-md-4 .offset-md-4&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-md-3 offset-md-3"&gt;.col-md-3 .offset-md-3&lt;/div&gt;
        &lt;div class="col-md-3 offset-md-3"&gt;.col-md-3 .offset-md-3&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-md-6 offset-md-3"&gt;.col-md-6 .offset-md-3&lt;/div&gt;
    &lt;/div&gt;
</code>
                </pre>
                                    </div>

                                    <p>In addition to column clearing at responsive breakpoints, you may need to reset offsets. See this in
                                        action in <a href="https://getbootstrap.com/docs/4.3/layout/grid/">the grid example</a>.</p>
                                    <div class="bd-example-row">
                                        <div class="bd-example">
                                            <div class="bd-example">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-5 col-md-6">.col-sm-5 .col-md-6</div>
                                                        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">.col-sm-5 .offset-sm-2 .col-md-6
                                                            .offset-md-0</div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-5 col-lg-6">.col.col-sm-6.col-md-5.col-lg-6</div>
                                                        <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">.col-sm-6 .col-md-5 .offset-md-2
                                                            .col-lg-6 .offset-lg-0</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <pre class="language-markup my-3">
<code class="language-markup">
    &lt;div class="row"&gt;
        &lt;div class="col-sm-5 col-md-6"&gt;.col-sm-5 .col-md-6&lt;/div&gt;
        &lt;div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0"&gt;.col-sm-5 .offset-sm-2 .col-md-6 .offset-md-0&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="row"&gt;
        &lt;div class="col-sm-6 col-md-5 col-lg-6"&gt;.col.col-sm-6.col-md-5.col-lg-6&lt;/div&gt;
        &lt;div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0"&gt;.col-sm-6 .col-md-5 .offset-md-2 .col-lg-6 .offset-lg-0&lt;/div&gt;
    &lt;/div&gt;
</code>
                </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Offsetting columns-->

                <!--Margin utilities-->
                <section id="margin-utilities" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Margin utilities</h4>
                                <p>With the move to flexbox in v4, you can use margin utilities like <code class="highlighter-rouge">.mr-auto</code>
                                    to force sibling columns away from one another.</p>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="bd-example-row">
                                        <div class="bd-example">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-4">.col-md-4</div>
                                                    <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 ml-md-auto">.col-md-3 .ml-md-auto</div>
                                                    <div class="col-md-3 ml-md-auto">.col-md-3 .ml-md-auto</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-auto mr-auto">.col-auto .mr-auto</div>
                                                    <div class="col-auto">.col-auto</div>
                                                </div>
                                            </div>
                                        </div>

                                        <pre class="language-markup my-3">
<code class="language-markup">
    &lt;div class="row"&gt;
        &lt;div class="col-md-4"&gt;.col-md-4&lt;/div&gt;
        &lt;div class="col-md-4 ml-auto"&gt;.col-md-4 .ml-auto&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-md-3 ml-md-auto"&gt;.col-md-3 .ml-md-auto&lt;/div&gt;
        &lt;div class="col-md-3 ml-md-auto"&gt;.col-md-3 .ml-md-auto&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-auto mr-auto"&gt;.col-auto .mr-auto&lt;/div&gt;
        &lt;div class="col-auto"&gt;.col-auto&lt;/div&gt;
    &lt;/div&gt;
</code>
						</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Margin utilities-->

                <!--Nesting-->
                <section id="nesting" class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Nesting</h4>
                                <p>To nest your content with the default grid, add a new <code class="highlighter-rouge">.row</code> and set
                                    of <code class="highlighter-rouge">.col-sm-*</code> columns within an existing <code class="highlighter-rouge">.col-sm-*</code>
                                    column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you
                                    use all 12 available columns).</p>
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="bd-example-row">
                                        <div class="bd-example">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-9">
                                                        Level 1: .col-sm-9
                                                        <div class="row">
                                                            <div class="col-8 col-sm-6">
                                                                Level 2: .col-8 .col-sm-6
                                                            </div>
                                                            <div class="col-4 col-sm-6">
                                                                Level 2: .col-4 .col-sm-6
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <pre class="language-markup my-3">
<code class="language-markup">
    &lt;div class="row"&gt;
        &lt;div class="col-sm-9"&gt;
        Level 1: .col-sm-9
        &lt;div class="row"&gt;
            &lt;div class="col-8 col-sm-6"&gt;
            Level 2: .col-8 .col-sm-6
            &lt;/div&gt;
            &lt;div class="col-4 col-sm-6"&gt;
            Level 2: .col-4 .col-sm-6
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
</code>
						</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

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
