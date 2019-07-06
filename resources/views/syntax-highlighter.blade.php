@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><div class="row">
                    <div class="col-sm-12">
                        <div class="content-header">Syntax Highlighter</div>
                    </div>
                </div>
                <!-- Basic Usage -->
                <section id="basic-usage" class="row">
                    <div class=" col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Usage</h4><a class="heading-elements-toggle"></a>

                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p>First You will need to include the prism.css and prism.js files, In <code>appearance-syntax-highlighter.jade</code>file
                                        has included.</p>
                                    <p>Prism does its best to encourage good authoring practices. Therefore, it only works with <code>&lt;code&gt;
                                        </code>elements, since marking up code without a <code>&lt;code&gt;
                                        </code>element is semantically invalid. <a target="_blank" href="http://www.w3.org/TR/html5/text-level-semantics.html#the-code-element">According to the HTML5 spec</a>,
                                        the recommended way to define a code language is a <code>language-xxxx</code>class, which is what
                                        Prism uses. To make things easier however, Prism assumes that this language definition is inherited.
                                        Therefore, if multiple <code>&lt;code&gt;
                                        </code>elements have the same language, you can add the <code>language-xxxx</code>class on one of their common ancestors.
                                        This way, you can also define a document-wide default language, by adding a <code>language-xxxx</code>class
                                        on the <code>&lt;body&gt;
                                        </code>or <code>&lt;html&gt;
                                        </code>element. </p>
                                    <p>If you want to opt-out of highlighting for a <code>&lt;code&gt;
                                        </code>element that is a descendant of an element with a declared code language, you can add the class <code>language-none</code>to
                                        it (or any non-existing language, really).</p>
                                    <p>The <a target="_blank" href="https://www.w3.org/TR/html5/grouping-content.html#the-pre-element">recommended way to mark up a code block</a>(both
                                        for semantics and for Prism) is a <code>&lt;pre&gt;
                                        </code>element with a <code>&lt;code&gt;
                                        </code>element inside, like so:</p>
                                    <p>Code:</p>
                                    <pre class="language-markup"><code class="language-markup">&lt;pre&gt;
    &lt;code class="language-css"&gt;
        p &#123;
            color: red
        &#125;

    &lt;/code&gt;
&lt;/pre&gt;
</code></pre>
                                    <p>Output</p>
                                    <pre class="language-css"><code class="language-css">p &#123;
    color: red
&#125;

</code></pre>
                                    <p>If you use that pattern, the <code>&lt;pre&gt;
                                        </code>will automatically get the <code>language-xxxx</code>class (if it doesn't already have it) and will be styled as a
                                        code block.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Basic Usage -->
                <!-- Examples -->
                <section id="examples" class="row">
                    <div class=" col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Examples</h4> <a class="heading-elements-toggle"></a>

                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <h5 class="card-title">HTML Markup</h5>
                                    <p>Use the following code to use HTML syntax highlighter.</p>
                                    <p class="text-bold-800">Usage:</p>
                                    <pre class="language-markup"> <code class="language-markup">&lt;pre&gt;
    &lt;code class="language-markup"&gt;
    HTML CODE ... &lt;/code&gt;
&lt;/pre&gt;
</code> </pre>
                                    <p class="text-bold-800">Example:</p>
                                    <pre class="language-markup"> <code class="language-markup">&lt;div class="card"&gt;
    &lt;img class="card-img-top" src="..." alt="Card image cap"&gt;
    &lt;div class="card-body"&gt;
        &lt;h4 class="card-title"&gt;
        Card title&lt;/h4&gt;
        &lt;p class="card-text"&gt;
        Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;/div&gt;
    &lt;ul class="list-group list-group-flush"&gt;
        &lt;li class="list-group-item"&gt;
        Cras justo odio&lt;/li&gt;
        &lt;li class="list-group-item"&gt;
        Dapibus ac facilisis in&lt;/li&gt;
        &lt;li class="list-group-item"&gt;
        Vestibulum at eros&lt;/li&gt;
    &lt;/ul&gt;
    &lt;div class="card-body"&gt;
        &lt;a class="card-link"&gt;
        Card link&lt;/a&gt;
        &lt;a class="card-link"&gt;
        Another link&lt;/a&gt;
    &lt;/div&gt;
&lt;/div&gt;
</code> </pre> </div>
                                <div class="card-body">
                                    <h5 class="card-title">CSS Markup</h5>
                                    <p>Use the following code to use HTML syntax highlighter.</p>
                                    <p class="text-bold-800">Usage:</p>
                                    <pre class="language-markup"> <code class="language-markup">&lt;pre&gt;
    &lt;code class="language-css"&gt;
    CSS CODE ... &lt;/code&gt;
&lt;/pre&gt;
</code> </pre>
                                    <p class="text-bold-800">Example:</p>
                                    <pre class="language-css" ><code class="language-css"> a:active &#123;
    outline: 0;
&#125;

a:hover &#123;
    outline: 0;
&#125;

abbr[title] &#123;
    border-bottom: 1px dotted;
&#125;

b, strong &#123;
    font-weight: bold;
&#125;

dfn &#123;
    font-style: italic;
&#125;

h1 &#123;
    font-size: 2em;
    margin: 0.67em 0;
&#125;

</code> </pre> </div>
                                <div class="card-body">
                                    <h5 class="card-title">JS Markup</h5>
                                    <p>Use the following code to use HTML syntax highlighter.</p>
                                    <p class="text-bold-800">Usage:</p>
                                    <pre class="language-markup"> <code class="language-markup">&lt;pre&gt;
    &lt;code class="language-js"&gt;
    HTML CODE ... &lt;/code&gt;
&lt;/pre&gt;
</code> </pre>
                                    <p class="text-bold-800">Example:</p>
                                    <pre class="language-js"> <code class="language-js">init: function() &#123;
    var scroll_theme=($('.main-menu').hasClass('menu-dark')) ? 'light': 'dark';
    this.obj=$(".main-menu-content").perfectScrollbar( &#123;
        suppressScrollX: true, theme: scroll_theme
    &#125;
    );
&#125;

, update: function() &#123;
    if (this.obj) &#123;
        $(".main-menu-content").perfectScrollbar('update');
    &#125;
&#125;

, enable: function() &#123;
    this.init();
&#125;

, </code> </pre> </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Examples -->
                <!-- Line Numbers -->
                <section id="line-numbers" class="row">
                    <div class=" col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Line Numbers</h4> <a class="heading-elements-toggle"></a>

                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p>Line number at the beginning of code lines.</p>
                                    <p>Obviously, this is supposed to work only for code blocks (<code>&lt;pre&gt;
                                            &lt;code&gt;
                                        </code>) and not for inline code. Add class line-numbers to your desired <code>&lt;pre&gt;
                                        </code> and line-numbers plugin will take care.</p>
                                    <p>Optional: You can specify the data-start (Number) attribute on the <code>&lt;pre&gt;
                                        </code> element. It will shift the line counter.</p>
                                    <p class="text-bold-800">Usage:</p>
                                    <pre class="language-markup"> <code class="language-markup">&lt;pre class="line-numbers"&gt;
    &lt;code class="language-css"&gt;
    p &#123;
        color: red
    &#125;

    &lt;/code&gt;
&lt;/pre&gt;
</code> </pre>
                                    <p class="text-bold-800">Example:</p>
                                    <pre class="line-numbers" class="language-js"><code class="language-js">(function() &#123;
    if (typeof self==='undefined' || !self.Prism || !self.document) &#123;
        return;
    &#125;
&#125;

());
</code> </pre> </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Line Numbers -->
                <!-- Line highlight -->
                <section id="line-highlight" class="row">
                    <div class=" col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Line highlight</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p>Highlights specific lines and/or line ranges.</p>
                                    <p>You specify the lines to be highlighted through the <em>data-line</em> attribute on the <code>&lt;pre&gt;
                                        </code> element, in the following simple format:</p>
                                    <ul>
                                        <li>A single number refers to the line with that number</li>
                                        <li>Ranges are denoted by two numbers, separated with a hyphen (-)</li>
                                        <li>Multiple line numbers or ranges are separated by commas.</li>
                                        <li>Whitespace is allowed anywhere and will be stripped off.</li>
                                    </ul>
                                    <p class="text-bold-800">Usage:</p>
                                    <pre class="language-markup"><code class="language-markup">&lt;pre data-line="2, 4, 8-10"&gt;
    &lt;code class="language-css"&gt;
    p &#123;
        color: red
    &#125;

    &lt;/code&gt;
&lt;/pre&gt;
</code> </pre>
                                    <p class="text-bold-800">Example:</p>
                                    <pre data-line="2, 4, 7-9" class="language-css"><code class="language-css">pre.line-numbers &#123;
    position: relative;
    padding-left: 3.8em;
    counter-reset: linenumber;
&#125;

pre.line-numbers > code &#123;
    position: relative;
&#125;

.line-numbers .line-numbers-rows &#123;
    position: absolute;
    pointer-events: none;
    top: 0;
    font-size: 100%;
    left: -3.8em;
    width: 3em;
    /* works for line-numbers below 1000 lines */
    letter-spacing: -1px;
    border-right: 1px solid #999;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
&#125;

</code> </pre> </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Line highlight -->
                <!-- Autolinker -->
                <section id="autolinker" class="row">
                    <div class=" col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Autolinker</h4> <a class="heading-elements-toggle"></a>

                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p>Converts URLs and emails in code to clickable links. <a>Parses Markdown</a> links in comments.</p>
                                    <p>URLs and emails will be linked automatically, you don’t need to do anything. To link some text inside
                                        a comment to a certain URL, you may use the Markdown syntax:</p>
                                    <p class="text-bold-800">Usage:</p>
                                    <pre class="language-markup"><code class="language-markup">&lt;pre&gt;
    &lt;code class="language-css"&gt;
    @font-face &#123;
        src: url(http://lea.verou.me/logo.otf);
    &#125;

    &lt;/code&gt;
&lt;/pre&gt;
</code> </pre>
                                    <p class="text-bold-800">Example:</p>
                                    <pre class="language-js"><code class="language-js">@font-face &#123;
    src: url(http://lea.verou.me/logo.otf);
    font-family: 'LeaVerou';
&#125;
</code> </pre> </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Autolinker -->
                <!-- Show Invisibles -->
                <section id="show-invisibles" class="row">
                    <div class=" col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Show Invisibles</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p>Show hidden characters such as tabs and line breaks.</p>
                                    <p class="text-bold-800">Example:</p>
                                    <pre class="language-js"><code class="language-js">(function() &#123;
    if ( typeof self !=='undefined' && !self.Prism || typeof global !=='undefined' && !global.Prism) &#123;
        return;
    &#125;
    Prism.hooks.add('before-highlight', function(env) &#123;
        var tokens=env.grammar;
        tokens.tab=/\t/g;
        tokens.crlf=/\r\n/g;
        tokens.lf=/\n/g;
        tokens.cr=/\r/g;
        tokens.space=/ /g;
    &#125;
    );
&#125;

)();
</code> </pre> </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Show Invisibles -->
                <!-- File Highlight -->
                <section id="file-highlight" class="row">
                    <div class=" col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">File Highlight</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p>Fetch external files and highlight them with Prism. Used on the Prism website itself.</p>
                                    <p>Use the <em>data-src</em> attribute on empty <code>&lt;pre&gt;
                                        </code> elements, like so:</p>
                                    <p class="text-bold-800">Usage:</p>
                                    <pre class="language-markup"> <code class="language-markup">&lt;pre data-src="myfile.js"&gt;
&lt;/pre&gt;
</code> </pre>
                                    <p>You don’t need to specify the language, it’s automatically determined by the file extension. If, however,
                                        the language cannot be determined from the file extension or the file extension is incorrect, you
                                        may specify a language as well (with the usual class name way).</p>
                                    <p>Please note that the files are fetched with XMLHttpRequest. This means that if the file is on a different
                                        origin, fetching it will fail, unless CORS is enabled on that website.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ File Highlight -->
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
