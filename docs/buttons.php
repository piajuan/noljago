<?php
	include("../header.php");
?>

<section class="section">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Documentation
            </h1>
        </div>
        <div class="row">
            <div class="col-lg-3 order-lg-1 mb-4">
                <?php
	           include("../docs/sidenav.php");
            ?>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="text-wrap p-lg-6">
                            <h2 class="mt-0 mb-4">Buttons</h2>
                            <p>Use Bootstrap’s custom button styles for actions in forms, dialogs, and more. Includes support for a handful of contextual variations, sizes, states, and more.</p>
                            <h3 id="button-tag">Button tag</h3>
                            <p>The <code class="highlighter-rouge">.btn</code> classes are designed to be used with the <code class="highlighter-rouge">&lt;button&gt;</code> element. However, you can also use these classes on <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;input&gt;</code> elements (though some browsers may apply a slightly different rendering).</p>
                            <div class="example">
                                <div class="btn-list">
                                    <a href="#" class="btn btn--primary" role="button">Link</a>
                                    <button class="btn btn--primary">Button</button>
                                    <input type="button" class="btn btn--primary" value="Input" />
                                    <input type="submit" class="btn btn--primary" value="Submit" />
                                    <input type="reset" class="btn btn--primary" value="Reset" />
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn--primary"</span> <span class="na">role=</span><span class="s">"button"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn--primary"</span><span class="nt">&gt;</span>Button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn--primary"</span> <span class="na">value=</span><span class="s">"Input"</span> <span class="nt">/&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"btn btn--primary"</span> <span class="na">value=</span><span class="s">"Submit"</span> <span class="nt">/&gt;</span>
<span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"reset"</span> <span class="na">class=</span><span class="s">"btn btn--primary"</span> <span class="na">value=</span><span class="s">"Reset"</span> <span class="nt">/&gt;</span></code></pre>
                            </div>
                            <h3 id="button-variations">Button variations</h3>
                            <p>Use any of the available button classes to quickly create a styled button . We provide a variety of colors for you to express different emotions.</p>
                            <div class="example">
                                <div class="btn-list">
                                    <a href="#" class="btn btn--primary">Primary</a>
                                    <a href="#" class="btn btn--secondary">Secondary</a>
                                    <a href="#" class="btn btn--success">Success</a>
                                    <a href="#" class="btn btn--info">Info</a>
                                    <a href="#" class="btn btn--warning">Warning</a>
                                    <a href="#" class="btn btn--danger">Danger</a>
                                    <a href="#" class="btn btn--link">Link</a>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn--primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-link"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span></code></pre>
                            </div>
                            <h3 id="button-variations">Button with Shadows</h3>
                            <p>Use any of the available button classes to quickly create a styled button . We provide a variety of colors for you to express different emotions.</p>
                            <div class="example">
                                <div class="btn-list">
                                    <a href="#" class="btn btn--primary btn--primary--shadow">Primary</a>
                                    <a href="#" class="btn btn-secondary btn-secondary--shadow">Secondary</a>
                                    <a href="#" class="btn btn-success btn-success--shadow">Success</a>
                                    <a href="#" class="btn btn-info btn-info--shadow">Info</a>
                                    <a href="#" class="btn btn-warning btn-warning--shadow">Warning</a>
                                    <a href="#" class="btn btn-danger btn-danger--shadow">Danger</a>
                                    <a href="#" class="btn btn-link">Link</a>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn--primary btn--primary--shadow"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-secondary--shadow"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-success btn-success--shadow"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-info btn-info--shadow"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-warning btn-warning--shadow"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-danger btn-danger--shadow"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-link"</span><span class="nt">&gt;</span>Link<span class="nt">&lt;/a&gt;</span></code></pre>
                            </div>
                            <h3 id="disabled-buttons">Disabled buttons</h3>
                            <p>Make buttons look inactive by adding the disabled boolean attribute to any <code class="highlighter-rouge">.btn</code> element. <code class="highlighter-rouge">&lt;a&gt;</code>s don’t support the disabled attribute, so you must add the <code class="highlighter-rouge">.disabled</code> class to make it visually appear disabled.</p>
                            <div class="example">
                                <div class="btn-list">
                                    <a href="#" class="btn btn--primary disabled">Primary</a>
                                    <a href="#" class="btn btn-secondary disabled">Secondary</a>
                                    <a href="#" class="btn btn-success disabled">Success</a>
                                    <a href="#" class="btn btn-info disabled">Info</a>
                                    <a href="#" class="btn btn-warning disabled">Warning</a>
                                    <a href="#" class="btn btn-danger disabled">Danger</a>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn--primary disabled"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary disabled"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-success disabled"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-info disabled"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-warning disabled"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-danger disabled"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/a&gt;</span></code></pre>
                            </div>
                            <h3 id="color-variations">Color variations</h3>
                            <p>The classic button, in different colors.</p>
                            <div class="example">
                                <div class="btn-list">
                                    <a href="#" class="btn btn-blue">Blue</a>
                                    <a href="#" class="btn btn-azure">Azure</a>
                                    <a href="#" class="btn btn-indigo">Indigo</a>
                                    <a href="#" class="btn btn-purple">Purple</a>
                                    <a href="#" class="btn btn-pink">Pink</a>
                                    <a href="#" class="btn btn-red">Red</a>
                                    <a href="#" class="btn btn-orange">Orange</a>
                                    <a href="#" class="btn btn-yellow">Yellow</a>
                                    <a href="#" class="btn btn-lime">Lime</a>
                                    <a href="#" class="btn btn-green">Green</a>
                                    <a href="#" class="btn btn-teal">Teal</a>
                                    <a href="#" class="btn btn-cyan">Cyan</a>
                                    <a href="#" class="btn btn-gray">Gray</a>
                                    <a href="#" class="btn btn-gray-dark">Dark gray</a>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-blue"</span><span class="nt">&gt;</span>Blue<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-azure"</span><span class="nt">&gt;</span>Azure<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-indigo"</span><span class="nt">&gt;</span>Indigo<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-purple"</span><span class="nt">&gt;</span>Purple<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-pink"</span><span class="nt">&gt;</span>Pink<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-red"</span><span class="nt">&gt;</span>Red<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-orange"</span><span class="nt">&gt;</span>Orange<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-yellow"</span><span class="nt">&gt;</span>Yellow<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-lime"</span><span class="nt">&gt;</span>Lime<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-green"</span><span class="nt">&gt;</span>Green<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-teal"</span><span class="nt">&gt;</span>Teal<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-cyan"</span><span class="nt">&gt;</span>Cyan<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-gray"</span><span class="nt">&gt;</span>Gray<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-gray-dark"</span><span class="nt">&gt;</span>Dark gray<span class="nt">&lt;/a&gt;</span></code></pre>
                            </div>
                            <h3 id="square-buttons">Square buttons</h3>
                            <p>Add <code class="highlighter-rouge">.btn-square</code> to button to remove border-radius.</p>
                            <div class="example">
                                <div class="btn-list">
                                    <a href="#" class="btn btn-square btn--primary">Primary</a>
                                    <a href="#" class="btn btn-square btn-secondary">Secondary</a>
                                    <a href="#" class="btn btn-square btn-success">Success</a>
                                    <a href="#" class="btn btn-square btn-info">Info</a>
                                    <a href="#" class="btn btn-square btn-warning">Warning</a>
                                    <a href="#" class="btn btn-square btn-danger">Danger</a>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-square btn--primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-square btn-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-square btn-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-square btn-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-square btn-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-square btn-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/a&gt;</span></code></pre>
                            </div>
                            <h3 id="pill-buttons">Pill buttons</h3>
                            <p>Add <code class="highlighter-rouge">.btn-pill</code> class to any button to make them more rounded.</p>
                            <div class="example">
                                <div class="btn-list">
                                    <a href="#" class="btn btn-pill btn--primary">Primary</a>
                                    <a href="#" class="btn btn-pill btn-secondary">Secondary</a>
                                    <a href="#" class="btn btn-pill btn-success">Success</a>
                                    <a href="#" class="btn btn-pill btn-info">Info</a>
                                    <a href="#" class="btn btn-pill btn-warning">Warning</a>
                                    <a href="#" class="btn btn-pill btn-danger">Danger</a>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-pill btn--primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-pill btn-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-pill btn-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-pill btn-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-pill btn-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-pill btn-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/a&gt;</span></code></pre>
                            </div>
                            <h3 id="outline-buttons">Outline buttons</h3>
                            <p>In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code class="highlighter-rouge">.btn-outline-*</code> ones to remove all background images and colors on any button.</p>
                            <div class="example">
                                <div class="btn-list">
                                    <a href="#" class="btn btn-outline-primary">Primary</a>
                                    <a href="#" class="btn btn-outline-secondary">Secondary</a>
                                    <a href="#" class="btn btn-outline-success">Success</a>
                                    <a href="#" class="btn btn-outline-info">Info</a>
                                    <a href="#" class="btn btn-outline-warning">Warning</a>
                                    <a href="#" class="btn btn-outline-danger">Danger</a>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-outline-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-outline-secondary"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-outline-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-outline-info"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-outline-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-outline-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/a&gt;</span></code></pre>
                            </div>
                            <h3 id="button-size">Button size</h3>
                            <p>Add <code class="highlighter-rouge">.btn-lg</code> or <code class="highlighter-rouge">.btn-sm</code> for additional sizes.</p>
                            <div class="example">
                                <div class="btn-list">
                                    <button type="button" class="btn btn--primary btn-lg">Large button</button>
                                    <button type="button" class="btn btn-secondary btn-lg">Large button</button>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn--primary btn-lg"</span><span class="nt">&gt;</span>Large button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-lg"</span><span class="nt">&gt;</span>Large button<span class="nt">&lt;/button&gt;</span></code></pre>
                            </div>
                            <div class="example">
                                <div class="btn-list">
                                    <button type="button" class="btn btn--primary btn-sm">Small button</button>
                                    <button type="button" class="btn btn-secondary btn-sm">Small button</button>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn--primary btn-sm"</span><span class="nt">&gt;</span>Small button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-sm"</span><span class="nt">&gt;</span>Small button<span class="nt">&lt;/button&gt;</span></code></pre>
                            </div>
                            <p>Create block level buttons—those that span the full width of a parent—by adding <code class="highlighter-rouge">.btn-block</code>.</p>
                            <div class="example">
                                <button type="button" class="btn btn--primary btn-block">Block level button</button>
                                <button type="button" class="btn btn-secondary btn-block">Block level button</button>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn--primary btn-block"</span><span class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-block"</span><span class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span></code></pre>
                            </div>
                            <h3 id="button-with-icon">Button with icon</h3>
                            <p>Basic buttons are traditional buttons with borders and background with an extra commponent like an icon. You can place it either on the left or the right which ever you want with different color opitons.</p>
                            <div class="example">
                                <div class="btn-list">
                                    <button type="button" class="btn btn-dark"><i class="fe fe-upload mr-2"></i>Upload</button>
                                    <button type="button" class="btn btn-warning"><i class="fe fe-heart mr-2"></i>I like</button>
                                    <button type="button" class="btn btn-success"><i class="fe fe-check mr-2"></i>I agree</button>
                                    <button type="button" class="btn btn-outline-primary"><i class="fe fe-plus mr-2"></i>More</button>
                                    <button type="button" class="btn btn-danger"><i class="fe fe-link mr-2"></i>Link</button>
                                    <button type="button" class="btn btn-info"><i class="fe fe-message-circle mr-2"></i>Comment</button>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-dark"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-upload mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>Upload<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-heart mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>I like<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-check mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>I agree<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-outline-primary"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-plus mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>More<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-link mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>Link<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-info"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-message-circle mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>Comment<span class="nt">&lt;/button&gt;</span></code></pre>
                            </div>
                            <h3 id="social-buttons">Social buttons</h3>
                            <div class="example">
                                <div class="btn-list">
                                    <button type="button" class="btn btn-facebook"><i class="fa fa-facebook mr-2"></i>Facebook</button>
                                    <button type="button" class="btn btn-twitter"><i class="fa fa-twitter mr-2"></i>Twitter</button>
                                    <button type="button" class="btn btn-google"><i class="fa fa-google mr-2"></i>Google</button>
                                    <button type="button" class="btn btn-youtube"><i class="fa fa-youtube mr-2"></i>Youtube</button>
                                    <button type="button" class="btn btn-vimeo"><i class="fa fa-vimeo mr-2"></i>Vimeo</button>
                                    <button type="button" class="btn btn-dribbble"><i class="fa fa-dribbble mr-2"></i>Dribble</button>
                                    <button type="button" class="btn btn-github"><i class="fa fa-github mr-2"></i>Github</button>
                                    <button type="button" class="btn btn-instagram"><i class="fa fa-instagram mr-2"></i>Instagram</button>
                                    <button type="button" class="btn btn-pinterest"><i class="fa fa-pinterest mr-2"></i>Pinterest</button>
                                    <button type="button" class="btn btn-vk"><i class="fa fa-vk mr-2"></i>VKontakte</button>
                                    <button type="button" class="btn btn-rss"><i class="fa fa-rss mr-2"></i>RSS</button>
                                    <button type="button" class="btn btn-flickr"><i class="fa fa-flickr mr-2"></i>Flickr</button>
                                    <button type="button" class="btn btn-bitbucket"><i class="fa fa-bitbucket mr-2"></i>Bitbucket</button>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-facebook"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-facebook mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>Facebook<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-twitter"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-twitter mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>Twitter<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-google"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-google mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>Google<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-youtube"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-youtube mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>Youtube<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-vimeo"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-vimeo mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>Vimeo<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-dribbble"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-dribbble mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>Dribble<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-github"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-github mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>Github<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-instagram"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-instagram mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>Instagram<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-pinterest"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-pinterest mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>Pinterest<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-vk"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-vk mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>VKontakte<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-rss"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-rss mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>RSS<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-flickr"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-flickr mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>Flickr<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-bitbucket"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-bitbucket mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>Bitbucket<span class="nt">&lt;/button&gt;</span></code></pre>
                            </div>
                            <p>You can use only icons.</p>
                            <div class="example">
                                <div class="btn-list">
                                    <button type="button" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></button>
                                    <button type="button" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></button>
                                    <button type="button" class="btn btn-icon btn-google"><i class="fa fa-google"></i></button>
                                    <button type="button" class="btn btn-icon btn-youtube"><i class="fa fa-youtube"></i></button>
                                    <button type="button" class="btn btn-icon btn-vimeo"><i class="fa fa-vimeo"></i></button>
                                    <button type="button" class="btn btn-icon btn-dribbble"><i class="fa fa-dribbble"></i></button>
                                    <button type="button" class="btn btn-icon btn-github"><i class="fa fa-github"></i></button>
                                    <button type="button" class="btn btn-icon btn-instagram"><i class="fa fa-instagram"></i></button>
                                    <button type="button" class="btn btn-icon btn-pinterest"><i class="fa fa-pinterest"></i></button>
                                    <button type="button" class="btn btn-icon btn-vk"><i class="fa fa-vk"></i></button>
                                    <button type="button" class="btn btn-icon btn-rss"><i class="fa fa-rss"></i></button>
                                    <button type="button" class="btn btn-icon btn-flickr"><i class="fa fa-flickr"></i></button>
                                    <button type="button" class="btn btn-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></button>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-facebook"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-facebook"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-twitter"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-twitter"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-google"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-google"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-youtube"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-youtube"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-vimeo"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-vimeo"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-dribbble"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-dribbble"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-github"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-github"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-instagram"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-instagram"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-pinterest"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-pinterest"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-vk"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-vk"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-rss"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-rss"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-flickr"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-flickr"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn-bitbucket"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fa fa-bitbucket"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span></code></pre>
                            </div>
                            <h3 id="icon-buttons">Icon buttons</h3>
                            <p>Icon only button. Add <code class="highlighter-rouge">.btn-icon</code> class to remove unnecessary padding from button.</p>
                            <div class="example">
                                <div class="btn-list">
                                    <button type="button" class="btn btn-icon btn--primary"><i class="fe fe-activity"></i></button>
                                    <button type="button" class="btn btn-icon btn--primary btn-github"><i class="fe fe-github"></i></button>
                                    <button type="button" class="btn btn-icon btn--primary btn-success"><i class="fe fe-bell"></i></button>
                                    <button type="button" class="btn btn-icon btn--primary btn-warning"><i class="fe fe-star"></i></button>
                                    <button type="button" class="btn btn-icon btn--primary btn-danger"><i class="fe fe-trash"></i></button>
                                    <button type="button" class="btn btn-icon btn--primary btn-purple"><i class="fe fe-bar-chart"></i></button>
                                    <button type="button" class="btn btn-icon btn--primary btn-secondary"><i class="fe fe-git-merge"></i></button>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn--primary"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-activity"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn--primary btn-github"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-github"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn--primary btn-success"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-bell"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn--primary btn-warning"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-star"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn--primary btn-danger"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-trash"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn--primary btn-purple"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-bar-chart"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-icon btn--primary btn-secondary"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-git-merge"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span></code></pre>
                            </div>
                            <h3 id="button-dropdown">Button dropdown</h3>
                            <p>Wrap the dropdown’s toggle (your button or link) and the dropdown menu within <code class="highlighter-rouge">.dropdown</code>, or another element that declares <code class="highlighter-rouge">position: relative;</code>. Dropdowns can be triggered from <code class="highlighter-rouge">&lt;a&gt;</code> or <code class="highlighter-rouge">&lt;button&gt;</code> elements to better fit your potential needs.</p>
                            <div class="example">
                                <div class="btn-list">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                              <i class="fe fe-calendar"></i>
                            </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                              <i class="fe fe-calendar mr-2"></i>Show calendar
                            </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                              Show calendar
                            </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
     <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-calendar"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
     <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-calendar mr-2"</span><span class="nt">&gt;&lt;/i&gt;</span>Show calendar
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">data-toggle=</span><span class="s">"dropdown"</span><span class="nt">&gt;</span>
     Show calendar
  <span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dropdown-menu"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"dropdown-item"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Dropdown link<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="loading-button">Loading button</h3>
                            <p>Add <code class="highlighter-rouge">.btn-loading</code> to use a loading state on a button. The width of the button depends on the length of the text inside.</p>
                            <p>Since the loading spinner is implemented using the <code class="highlighter-rouge">:after</code> pseudo-element, it is not supported by the <code class="highlighter-rouge">&lt;input type="submit"&gt;</code> element.</p>
                            <div class="example">
                                <div class="btn-list">
                                    <button type="button" class="btn btn--primary btn-loading">Button text</button>
                                    <button type="button" class="btn btn-success btn-loading btn-icon"><i class="fe fe-check"></i></button>
                                    <button type="button" class="btn btn-warning btn-loading btn-sm">Button text</button>
                                    <button type="button" class="btn btn-danger btn-loading btn-lg">Button text</button>
                                    <button type="button" class="btn btn-secondary btn-loading btn-block">Button text</button>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn--primary btn-loading"</span><span class="nt">&gt;</span>Button text<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-success btn-loading btn-icon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-check"</span><span class="nt">&gt;&lt;/i&gt;&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-warning btn-loading btn-sm"</span><span class="nt">&gt;</span>Button text<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-danger btn-loading btn-lg"</span><span class="nt">&gt;</span>Button text<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-secondary btn-loading btn-block"</span><span class="nt">&gt;</span>Button text<span class="nt">&lt;/button&gt;</span></code></pre>
                            </div>
                            <h3 id="list-of-buttons">List of buttons</h3>
                            <p>You can now create a list of buttons with the <code class="highlighter-rouge">.btn-list</code> container.</p>
                            <div class="example">
                                <div class="btn-list">
                                    <a href="#" class="btn btn-success">Save changes</a>
                                    <a href="#" class="btn btn-secondary">Save and continue</a>
                                    <a href="#" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-list"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-success"</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Save and continue<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-danger"</span><span class="nt">&gt;</span>Cancel<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <p>If the list is very long, it will automatically wrap on multiple lines, while keeping all buttons evenly spaced.</p>
                            <div class="example">
                                <div class="btn-list">
                                    <a href="#" class="btn btn-secondary">One</a>
                                    <a href="#" class="btn btn-secondary">Two</a>
                                    <a href="#" class="btn btn-secondary">Three</a>
                                    <a href="#" class="btn btn-secondary">Four</a>
                                    <a href="#" class="btn btn-secondary">Five</a>
                                    <a href="#" class="btn btn-secondary">Six</a>
                                    <a href="#" class="btn btn-secondary">Seven</a>
                                    <a href="#" class="btn btn-secondary">Eight</a>
                                    <a href="#" class="btn btn-secondary">Nine</a>
                                    <a href="#" class="btn btn-secondary">Ten</a>
                                    <a href="#" class="btn btn-secondary">Eleven</a>
                                    <a href="#" class="btn btn-secondary">Twelve</a>
                                    <a href="#" class="btn btn-secondary">Thirteen</a>
                                    <a href="#" class="btn btn-secondary">Fourteen</a>
                                    <a href="#" class="btn btn-secondary">Fifteen</a>
                                    <a href="#" class="btn btn-secondary">Sixteen</a>
                                    <a href="#" class="btn btn-secondary">Seventeen</a>
                                    <a href="#" class="btn btn-secondary">Eighteen</a>
                                    <a href="#" class="btn btn-secondary">Nineteen</a>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-list"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>One<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Two<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Three<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Four<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Five<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Six<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Seven<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Eight<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Nine<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Ten<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Eleven<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Twelve<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Thirteen<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Fourteen<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Fifteen<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Sixteen<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Seventeen<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Eighteen<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Nineteen<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <p>Use the <code class="highlighter-rouge">.text-center</code> or the <code class="highlighter-rouge">.text-right</code> modifiers to alter the alignment.</p>
                            <div class="example">
                                <div class="btn-list text-center">
                                    <a href="#" class="btn btn--primary">Save changes</a>
                                    <a href="#" class="btn btn-secondary">Save and continue</a>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-list text-center"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn--primary"</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Save and continue<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <div class="example">
                                <div class="btn-list text-right">
                                    <a href="#" class="btn btn--primary">Save changes</a>
                                    <a href="#" class="btn btn-secondary">Save and continue</a>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-list text-right"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn--primary"</span><span class="nt">&gt;</span>Save changes<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span><span class="nt">&gt;</span>Save and continue<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
	include("../footer.php");
?>