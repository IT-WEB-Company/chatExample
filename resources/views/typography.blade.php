@extends('layouts.header')

@section('content')

    <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
            <div class="content-wrapper"><div class="row">
                    <div class="col-sm-12">
                        <div class="content-header">Typography</div>
                    </div>
                </div>
                <!-- Headings -->
                <section id="html-headings-default">
                    <div class="row match-height">
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">HTML headings <small class="text-muted">Default</small></h4>
                                    <p>All HTML headings, <code class="highlighter-rouge">&lt;h1&gt;</code> through <code class="highlighter-rouge">&lt;h6&gt;</code>,are
                                        available.</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <h1>H1. Heading</h1>
                                                    </td>
                                                    <td class="type-info text-right">Semibold 2rem</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h2>H2. Heading</h2>
                                                    </td>
                                                    <td class="type-info text-right">Semibold 74rem</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h3>H3. Heading</h3>
                                                    </td>
                                                    <td class="type-info text-right">Semibold 1.51rem</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4>H4. Heading</h4>
                                                    </td>
                                                    <td class="type-info text-right">Semibold 1.32rem</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>H5. Heading</h5>
                                                    </td>
                                                    <td class="type-info text-right">Semibold 1.14rem</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>H6. Heading</h6>
                                                    </td>
                                                    <td class="type-info text-right">Semibold 1rem</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Heading class</h4>
                                    <p><code class="highlighter-rouge">.h1</code> through <code class="highlighter-rouge">.h6</code> classes are
                                        also available, for when you want to match the font styling of a heading but cannot use the associated HTML
                                        element.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <p class="h1">H1. Heading</p>
                                                    </td>
                                                    <td class="type-info text-right">Semibold 2rem</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="h2">H2. Heading</p>
                                                    </td>
                                                    <td class="type-info text-right">Semibold 74rem</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="h3">H3. Heading</p>
                                                    </td>
                                                    <td class="type-info text-right">Semibold 1.51rem</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="h4">H4. Heading</p>
                                                    </td>
                                                    <td class="type-info text-right">Semibold 1.32rem</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="h5">H5. Heading</p>
                                                    </td>
                                                    <td class="type-info text-right">Semibold 1.14rem</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="h6">H6. Heading</p>
                                                    </td>
                                                    <td class="type-info text-right">Semibold 1rem</td>
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
                <!--/ Headings -->

                <!-- Customizing headings -->
                <section id="customizing-headings-default">
                    <div class="row match-height">
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Customizing headings <small class="text-muted">Default</small></h4>
                                    <p>Use the included utility classes to recreate the small secondary heading text.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <h1>Display heading <small class="text-muted">Secondary text</small></h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h2>Display heading <small class="text-muted">Secondary text</small></h2>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h3>Display heading <small class="text-muted">Secondary text</small></h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4>Display heading <small class="text-muted">Secondary text</small></h4>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5>Display heading <small class="text-muted">Secondary text</small></h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>Display heading <small class="text-muted">Secondary text</small></h6>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Heading colors</h4>
                                    <p>Traditional heading elements are designed to work best in the meat of your page content. When you need a
                                        heading to stand out, consider using a <strong>display heading</strong>—a larger, slightly more opinionated
                                        heading style.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <h1 class="primary">Display heading</h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h2 class="success">Display heading</h2>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h3 class="info">Display heading</h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="warning">Display heading</h4>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h5 class="danger">Display heading</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="">Display heading</h6>
                                                    </td>
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
                <!--/ Headings -->

                <!-- Blockquotes basic-->
                <section id="blockquotes">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header">Blockquotes</div>
                            <p class="content-sub-header">For quoting blocks of content from another source within your document. Wrap <code
                                    class="highlighter-rouge">&lt;blockquote class="blockquote"&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr>
                                as the quote.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Blockquotes <small class="text-muted">Default</small></h4>
                                    <p>Left aligned basic blockquotes</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <blockquote class="blockquote">
                                                <p class="mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Blockquotes <small class="text-muted">Right</small></h4>
                                    <p>Add <code class="highlighter-rouge">.blockquote.text-right</code> for a blockquote with right-aligned
                                        content.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <blockquote class="blockquote text-right border-right-3">
                                                <p class="mb-0">Design is not just what it looks like and feels like. Design is how it works.</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Blockquotes basic -->

                <!-- Naming a source -->
                <section id="naming-a-source-default">
                    <div class="row match-height">
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Naming a source <small class="text-muted">Default</small></h4>
                                    <p>Add a <code class="highlighter-rouge">&lt;footer class="blockquote-footer"&gt;</code> for identifying the
                                        source. Wrap the name of the source work in <code class="highlighter-rouge">&lt;cite&gt;</code>.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <blockquote class="blockquote">
                                                <p>Being the richest man in the cemetery doesn't matter to me. Going to bed at night saying we've
                                                    done something wonderful, that's what matters to me.</p>
                                                <div class="blockquote-footer pl-0 pt-1">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Naming a source <small class="text-muted">Right</small></h4>
                                    <p>Add a <code class="highlighter-rouge">&lt;footer class="blockquote-footer"&gt;</code> for identifying the
                                        source with <code class="highlighter-rouge">.blockquote.text-right</code> for a blockquote with
                                        right-aligned
                                        content.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <blockquote class="blockquote text-right">
                                                <p>Being the richest man in the cemetery doesn't matter to me. Going to bed at night saying we've
                                                    done something wonderful, that's what matters to me.</p>
                                                <div class="blockquote-footer pt-1">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Naming a source -->

                <!-- Blockquotes styling -->
                <section id="blockquotes-styling-default">
                    <div class="row match-height">
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Blockquotes styling <small class="text-muted">Default</small></h4>
                                    <p>Add a <code class="highlighter-rouge">.border-left-&#123;color&#125; .border-right-3</code> helper
                                        classes, where color can be any color from Robuts Admin <a href="color-palettes" target="_blank">color
                                            palette</a>.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <blockquote class="blockquote border-left-primary border-left-3 pl-2">
                                                <p>Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on
                                                    with improving your other innovations.</p>
                                                <div class="blockquote-footer pt-1 pl-0">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </div>
                                            </blockquote>
                                            <blockquote class="blockquote border-left-danger border-left-3 pl-2 mt-1">
                                                <p>Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on
                                                    with improving your other innovations.</p>
                                                <div class="blockquote-footer pt-1 pl-0">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Blockquotes styling <small class="text-muted">Right</small></h4>
                                    <p>Add a <code class="highlighter-rouge">.border-right-&#123;color&#125; .border-right-3</code> helper
                                        classes with <code>.blockquote.text-right</code>, where color can be any color from Robuts Admin <a href="color-palettes"
                                                                                                                                            target="_blank">color palette</a>.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <blockquote class="blockquote text-right border-right-info border-right-3 pr-2">
                                                <p>Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on
                                                    with improving your other innovations.</p>
                                                <div class="blockquote-footer pt-1">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </div>
                                            </blockquote>
                                            <blockquote class="blockquote text-right border-right-success border-right-3 pr-2 mt-1">
                                                <p>Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on
                                                    with improving your other innovations.</p>
                                                <div class="blockquote-footer pt-1">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Blockquotes styling -->

                <!-- Blockquotes with avatar -->
                <section id="blockquotes-with-avatar">
                    <div class="row match-height">
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Blockquotes with avatar <small class="text-muted">Default</small></h4>
                                    <p>Blockquotes with avatar. it use Media Object. You can customize image type, border alignment & style.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <blockquote class="blockquote border-left-primary border-left-3 pl-2">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img class="media-object img-xl" src="app-assets/img/portrait/small/avatar-s-5.png" alt="Generic placeholder image">
                                                    </div>
                                                    <div class="media-body">
                                                        Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                    </div>
                                                </div>
                                                <div class="blockquote-footer border-0-top pl-0 pt-1">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </div>
                                            </blockquote>
                                            <blockquote class="blockquote border-right-primary border-right-3 pr-2 border-0-left">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img class="media-object img-xl" src="app-assets/img/portrait/small/avatar-s-4.png" alt="Generic placeholder image">
                                                    </div>
                                                    <div class="media-body">
                                                        Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                    </div>
                                                </div>
                                                <div class="blockquote-footer border-0-top pl-0 pt-1">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </div>
                                            </blockquote>
                                            <p class="mt-2">Blockquotes with avatar rounded image example</p>
                                            <blockquote class="blockquote border-left-danger border-left-3 pl-2 mt-1">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img class="media-object img-xl rounded-circle" src="app-assets/img/portrait/small/avatar-s-3.png"
                                                             alt="Generic placeholder image">
                                                    </div>
                                                    <div class="media-body">
                                                        Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                    </div>
                                                </div>
                                                <div class="blockquote-footer border-0-top pl-0 pt-1">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </div>
                                            </blockquote>
                                            <blockquote class="blockquote border-right-danger border-right-3 pr-2 border-0-left mt-1">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <img class="media-object img-xl rounded-circle" src="app-assets/img/portrait/small/avatar-s-1.png"
                                                             alt="Generic placeholder image">
                                                    </div>
                                                    <div class="media-body">
                                                        Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                    </div>
                                                </div>
                                                <div class="blockquote-footer border-0-top pl-0 pt-1">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Blockquotes with avatar <small class="text-muted">Right</small></h4>
                                    <p>Right aligned blockquotes with avatar, it also use Media Object. You can customize image type, border
                                        alignment & style.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <blockquote class="blockquote text-right border-right-info border-right-3 pr-2">
                                                <div class="media">
                                                    <div class="media-body">
                                                        Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                    </div>
                                                    <div class="media-right pl-2">
                                                        <img class="media-object img-xl" src="app-assets/img/portrait/small/avatar-s-6.png" alt="Generic placeholder image">
                                                    </div>
                                                </div>
                                                <div class="blockquote-footer border-0-top pt-1">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </div>
                                            </blockquote>
                                            <blockquote class="blockquote text-right border-left-info border-left-3 pl-2 border-0-right">
                                                <div class="media">
                                                    <div class="media-body pl-1">
                                                        Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                    </div>
                                                    <div class="media-right pl-2">
                                                        <img class="media-object img-xl" src="app-assets/img/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                                                    </div>
                                                </div>
                                                <div class="blockquote-footer border-0-top pt-1">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </div>
                                            </blockquote>
                                            <p class="mt-2">Right aligned blockquotes with avatar rounded image example</p>
                                            <blockquote class="blockquote text-right border-right-success border-right-3 pr-2 mt-1">
                                                <div class="media">
                                                    <div class="media-body">
                                                        Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                    </div>
                                                    <div class="media-right pl-2">
                                                        <img class="media-object img-xl rounded-circle" src="app-assets/img/portrait/small/avatar-s-8.png"
                                                             alt="Generic placeholder image">
                                                    </div>
                                                </div>
                                                <div class="blockquote-footer border-0-top pt-1">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </div>
                                            </blockquote>
                                            <blockquote class="blockquote-reverse border-left-success border-left-3 pl-2 border-0-right mt-1">
                                                <div class="media">
                                                    <div class="media-body pl-1">
                                                        Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                    </div>
                                                    <div class="media-right pl-2">
                                                        <img class="media-object img-xl rounded-circle" src="app-assets/img/portrait/small/avatar-s-9.png"
                                                             alt="Generic placeholder image">
                                                    </div>
                                                </div>
                                                <div class="blockquote-footer border-0-top pt-1">Steve Jobs
                                                    <cite title="Source Title">Entrepreneur</cite>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Blockquotes styling -->

                <!-- Lists -->
                <section id="lists">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header">Lists</div>
                            <p class="content-sub-header">For quoting blocks of content from another source within your document. Wrap <code
                                    class="highlighter-rouge">&lt;blockquote class="blockquote"&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr>
                                as the quote.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <!-- Lists Unstyled -->
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists Unstyled</h4>
                                    <p>Use class <code>.list-unstyled</code> for Lists Unstyled. It remove the default <code class="highlighter-rouge">list-style</code>
                                        and left margin on list items (immediate children only). <strong>This only applies to immediate children
                                            list items</strong>, meaning you will need to add the class for any nested lists as well.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <ul class="list-unstyled">
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Lists Unstyled -->
                        <!-- Lists Unordered -->
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists Unordered <small class="text-muted">Default</small></h4>
                                    <p>List of items in which the order does not explicitly matter.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Lists Unordered -->
                        <!-- Lists Ordered -->
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists Ordered <small class="text-muted">Default</small></h4>
                                    <p>List of items in which the order does explicitly matter.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <ol>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ol>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ol>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Lists Ordered -->
                    </div>
                    <div class="row match-height">
                        <!-- Lists Unordered Circle -->
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists Unordered <small class="text-muted">Circle</small></h4>
                                    <p>Use <code>.list-style-circle</code> class in unordered list to add circle bullet points.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <ul class="list-style-circle">
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul class="list-style-circle">
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Lists Unordered Circle -->
                        <!-- Lists Unordered Square -->
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists Unordered <small class="text-muted">Square</small></h4>
                                    <p>Use <code>.list-style-square</code> class in unordered list to add square bullet points.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <ul class="list-style-square">
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul class="list-style-square">
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Lists Unordered Square -->
                        <!-- Lists Ordered Mixed -->
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists Ordered <small class="text-muted">Mixed</small></h4>
                                    <p>Combine <code>.list-style-square</code> & <code>.list-style-circle</code> classes in unordered list to add
                                        square and circle bullet points.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <ul class="list-style-circle">
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul class="list-style-square">
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Lists Ordered Mixed -->
                    </div>
                    <div class="row match-height">
                        <!-- Lists Ordered Type-->
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists Ordered <small class="text-muted">Type</small></h4>
                                    <p>Use <code>&lt;ol type="1|a|A|i|I"&gt;</code>, The type attribute specifies the kind of marker to use in
                                        the list.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <ol type="I">
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ol type="I">
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ol>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Lists Ordered Type-->
                        <!-- Lists Ordered Mixed -->
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists Ordered <small class="text-muted">Mixed</small></h4>
                                    <p>You can also mix up ordered list type, below example shows I & i type combination.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <ol type="I">
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ol type="i">
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ol>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Lists Ordered Mixed -->
                        <!-- Lists icons -->
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Lists icons</h4>
                                    <p>list of terms with icons, use <code>.list-style-icons</code> class. You can use any icon from Apex Admin
                                        icon types.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <ul class="list-style-icons">
                                                <li><i class="fa fa-folder-open-o"></i> Facilisis in pretium nisl aliquet</li>
                                                <li><i class="fa fa-folder-open-open-o"></i> Nulla volutpat aliquam velit
                                                    <ul class="list-style-icons">
                                                        <li><i class="fa fa-folder-open-o"></i> Phasellus iaculis neque</li>
                                                        <li><i class="fa fa-folder-open-o"></i> Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li><i class="fa fa-folder-open-o"></i> Faucibus porta lacus fringilla vel</li>
                                                <li><i class="fa fa-folder-open-o"></i> Aenean sit amet erat nunc</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Lists icons -->
                    </div>
                    <div class="row match-height">
                        <!-- Inline Lists-->
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Inline Lists <small class="text-muted">Default</small></h4>
                                    <p>Remove a list’s bullets and apply some light <code class="highlighter-rouge">margin</code> with a
                                        combination of two classes, <code class="highlighter-rouge">.list-inline</code> and <code class="highlighter-rouge">.list-inline-item</code>.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">Chocolate</li>
                                                <li class="list-inline-item">Cake</li>
                                                <li class="list-inline-item">Ice-Cream</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Inline Lists-->

                        <!-- Inline Lists-->
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Inline Lists <small class="text-muted">Ordered</small></h4>
                                    <p>Use inline numbers, alphabet etc... for ordered Inline List.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">1. Chocolate</li>
                                                <li class="list-inline-item">2. Cake</li>
                                                <li class="list-inline-item">3. Ice-Cream</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Inline Lists-->

                        <!-- Inline Lists-->
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Inline Lists <small class="text-muted">With icons</small></h4>
                                    <p>You can also use Apex Admin icons in Inline Lists.</p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa fa-eur"></i> Euro</li>
                                                <li class="list-inline-item"><i class="fa fa-gbp"></i> Pound</li>
                                                <li class="list-inline-item"><i class="fa fa-usd"></i> Dollar</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Inline Lists-->
                    </div>
                </section>
                <!--/ Lists -->

                <!-- Description list alignment -->
                <section id="description-list-alignment">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content-header">Description list alignment</div>
                            <p class="content-sub-header">Align terms and descriptions horizontally by using our grid system’s predefined
                                classes (or semantic mixins).
                                For longer terms, you can optionally add a <code class="highlighter-rouge">.text-truncate</code> class
                                to truncate the text with an ellipsis.</p>
                        </div>
                    </div>
                    <div class="row match-height">
                        <!-- Description lists horizontal -->
                        <div class="col-md-12 col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Description lists <small class="text-muted">Horizontal</small></h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <dl class="row">
                                                <dt class="col-sm-3">Description lists</dt>
                                                <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">Euismod</dt>
                                                <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dd class="col-sm-9 ml-sm-auto">Donec id elit non mi porta gravida at eget metus.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">Malesuada porta</dt>
                                                <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                                <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                                    fermentum massa
                                                    justo sit amet risus.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3">Nesting</dt>
                                                <dd class="col-sm-9">
                                                    <dl class="row">
                                                        <dt class="col-sm-4">Nested definition list</dt>
                                                        <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                                    </dl>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Description lists horizontal-->

                        <!-- Description lists vertical-->
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Description lists <small class="text-muted">Vertical</small></h4>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <dl>
                                                <dt>Description lists</dt>
                                                <dd>A description list is perfect for defining terms.</dd>
                                                <dt>Euismod</dt>
                                                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio.
                                                </dd>
                                                <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                                <dt>Malesuada porta</dt>
                                                <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Description lists vertical-->
                    </div>
                    <div class="row">
                        <!-- Description lists horizontal -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Description lists <small class="text-muted">Horizontal</small></h4>
                                    <p>Description lists with right aligned text in <code>&lt;dt&gt;</code> tag using <code>.text-right</code></p>
                                </div>
                                <div class="card-body">
                                    <div class="card-content">
                                        <div class="card-text">
                                            <dl class="row">
                                                <dt class="col-sm-3 text-right">Description lists</dt>
                                                <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3 text-right">Euismod</dt>
                                                <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dd class="col-sm-9 ml-sm-auto">Donec id elit non mi porta gravida at eget metus.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3 text-right">Malesuada porta</dt>
                                                <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3 text-right text-truncate">Truncated term is truncated</dt>
                                                <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                                    fermentum massa
                                                    justo sit amet risus.</dd>
                                            </dl>
                                            <dl class="row">
                                                <dt class="col-sm-3 text-right">Nesting</dt>
                                                <dd class="col-sm-9">
                                                    <dl class="row">
                                                        <dt class="col-sm-4">Nested definition list</dt>
                                                        <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                                    </dl>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Description lists horizontal-->
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
