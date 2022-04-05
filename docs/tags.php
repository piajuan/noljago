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
                    include('../docs/sidenav.php');
                ?>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="text-wrap p-lg-6">
                            <h2 class="mt-0 mb-4">Tags</h2>
                            <p>Small tag labels to insert anywhere</p>
                            <h3 id="default-tag">Default tag</h3>
                            <div class="example">
                                <div class="tags">
                                    <span class="tag">First tag</span>
                                    <span class="tag">Second tag</span>
                                    <span class="tag">Third tag</span>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>First tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Second tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Third tag<span class="nt">&lt;/span&gt;</span></code></pre>
                            </div>
                            <h3 id="link-tag">Link tag</h3>
                            <div class="example">
                                <div class="tags">
                                    <a href="#" class="tag">First tag</a>
                                    <a href="#" class="tag">Second tag</a>
                                    <a href="#" class="tag">Third tag</a>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>First tag<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Second tag<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Third tag<span class="nt">&lt;/a&gt;</span></code></pre>
                            </div>
                            <h3 id="rounded-tag">Rounded tag</h3>
                            <div class="example">
                                <div class="tags">
                                    <span class="tag tag-rounded">First tag</span>
                                    <span class="tag tag-rounded">Second tag</span>
                                    <span class="tag tag-rounded">Third tag</span>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-rounded"</span><span class="nt">&gt;</span>First tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-rounded"</span><span class="nt">&gt;</span>Second tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-rounded"</span><span class="nt">&gt;</span>Third tag<span class="nt">&lt;/span&gt;</span></code></pre>
                            </div>
                            <h3 id="color-tag">Color tag</h3>
                            <div class="example">
                                <div class="tags">
                                    <span class="tag tag-blue">Blue tag</span>
                                    <span class="tag tag-azure">Azure tag</span>
                                    <span class="tag tag-indigo">Indigo tag</span>
                                    <span class="tag tag-purple">Purple tag</span>
                                    <span class="tag tag-pink">Pink tag</span>
                                    <span class="tag tag-red">Red tag</span>
                                    <span class="tag tag-orange">Orange tag</span>
                                    <span class="tag tag-yellow">Yellow tag</span>
                                    <span class="tag tag-lime">Lime tag</span>
                                    <span class="tag tag-green">Green tag</span>
                                    <span class="tag tag-teal">Teal tag</span>
                                    <span class="tag tag-cyan">Cyan tag</span>
                                    <span class="tag tag-gray">Gray tag</span>
                                    <span class="tag tag-gray-dark">Dark gray tag</span>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-blue"</span><span class="nt">&gt;</span>Blue tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-azure"</span><span class="nt">&gt;</span>Azure tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-indigo"</span><span class="nt">&gt;</span>Indigo tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-purple"</span><span class="nt">&gt;</span>Purple tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-pink"</span><span class="nt">&gt;</span>Pink tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-red"</span><span class="nt">&gt;</span>Red tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-orange"</span><span class="nt">&gt;</span>Orange tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-yellow"</span><span class="nt">&gt;</span>Yellow tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-lime"</span><span class="nt">&gt;</span>Lime tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-green"</span><span class="nt">&gt;</span>Green tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-teal"</span><span class="nt">&gt;</span>Teal tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-cyan"</span><span class="nt">&gt;</span>Cyan tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-gray"</span><span class="nt">&gt;</span>Gray tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-gray-dark"</span><span class="nt">&gt;</span>Dark gray tag<span class="nt">&lt;/span&gt;</span></code></pre>
                            </div>
                            <h3 id="avatar-tag">Avatar tag</h3>
                            <div class="example">
                                <div class="tags">
                                    <span class="tag">
                            <span class="tag-avatar avatar" style="background-image: url(../docs/demo/faces/female/16.jpg)"></span> Victoria
                                    </span>
                                    <span class="tag">
                            <span class="tag-avatar avatar" style="background-image: url(../docs/demo/faces/male/41.jpg)"></span> Nathan
                                    </span>
                                    <span class="tag">
                            <span class="tag-avatar avatar" style="background-image: url(../docs/demo/faces/female/1.jpg)"></span> Alice
                                    </span>
                                    <span class="tag">
                            <span class="tag-avatar avatar" style="background-image: url(../docs/demo/faces/female/18.jpg)"></span> Rose
                                    </span>
                                    <span class="tag">
                            <span class="tag-avatar avatar" style="background-image: url(../docs/demo/faces/male/16.jpg)"></span> Peter
                                    </span>
                                    <span class="tag">
                            <span class="tag-avatar avatar" style="background-image: url(../docs/demo/faces/male/26.jpg)"></span> Wayne
                                    </span>
                                    <span class="tag">
                            <span class="tag-avatar avatar" style="background-image: url(../docs/demo/faces/female/7.jpg)"></span> Michelle
                                    </span>
                                    <span class="tag">
                            <span class="tag-avatar avatar" style="background-image: url(../docs/demo/faces/female/17.jpg)"></span> Debra
                                    </span>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag-avatar avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/16.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  Victoria
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag-avatar avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/41.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  Nathan
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag-avatar avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/1.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  Alice
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag-avatar avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/18.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  Rose
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag-avatar avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/16.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  Peter
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag-avatar avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/26.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  Wayne
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag-avatar avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/7.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  Michelle
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag-avatar avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/17.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  Debra
<span class="nt">&lt;/span&gt;</span></code></pre>
                            </div>
                            <h3 id="list-of-tags">List of tags</h3>
                            <p>You can create a list of tags with the <code class="highlighter-rouge">.tags</code> container.</p>
                            <div class="example">
                                <div class="tags">
                                    <span class="tag">First tag</span>
                                    <span class="tag">Second tag</span>
                                    <span class="tag">Third tag</span>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tags"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>First tag<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Second tag<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Third tag<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <p>If the list is very long, it will automatically wrap on multiple lines, while keeping all tags evenly spaced.</p>
                            <div class="example">
                                <div class="tags">
                                    <span class="tag">One</span>
                                    <span class="tag">Two</span>
                                    <span class="tag">Three</span>
                                    <span class="tag">Four</span>
                                    <span class="tag">Five</span>
                                    <span class="tag">Six</span>
                                    <span class="tag">Seven</span>
                                    <span class="tag">Eight</span>
                                    <span class="tag">Nine</span>
                                    <span class="tag">Ten</span>
                                    <span class="tag">Eleven</span>
                                    <span class="tag">Twelve</span>
                                    <span class="tag">Thirteen</span>
                                    <span class="tag">Fourteen</span>
                                    <span class="tag">Fifteen</span>
                                    <span class="tag">Sixteen</span>
                                    <span class="tag">Seventeen</span>
                                    <span class="tag">Eighteen</span>
                                    <span class="tag">Nineteen</span>
                                    <span class="tag">Twenty</span>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tags"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>One<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Two<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Three<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Four<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Five<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Six<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Seven<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Eight<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Nine<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Ten<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Eleven<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Twelve<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Thirteen<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Fourteen<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Fifteen<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Sixteen<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Seventeen<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Eighteen<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Nineteen<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>Twenty<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="tag-remove">Tag remove</h3>
                            <div class="example">
                                <div class="tags">
                                    <span class="tag">
                            One 
                            <a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
                          </span>
                                    <span class="tag">
                            Two 
                            <a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
                          </span>
                                    <span class="tag">
                            Three 
                            <a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
                          </span>
                                    <span class="tag">
                            Four 
                            <a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
                          </span>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tags"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
    One 
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"tag-addon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-x"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
    Two 
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"tag-addon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-x"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
    Three 
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"tag-addon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-x"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
    Four 
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"tag-addon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-x"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
  <span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="tag-addons">Tag addons</h3>
                            <div class="example">
                                <div class="tags">
                                    <div class="tag">
                                        npm
                                        <a href="#" class="tag-addon"><i class="fe fe-x"></i></a>
                                    </div>
                                    <div class="tag tag-danger">
                                        npm
                                        <span class="tag-addon"><i class="fe fe-activity"></i></span>
                                    </div>
                                    <div class="tag">
                                        bundle
                                        <span class="tag-addon tag-success">passing</span>
                                    </div>
                                    <span class="tag tag-dark">
                            CSS gzip size
                            <span class="tag-addon tag-warning">20.9 kB</span>
                                    </span>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
  npm
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"tag-addon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-x"</span><span class="nt">&gt;&lt;/i&gt;&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tag tag-danger"</span><span class="nt">&gt;</span>
  npm
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag-addon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-activity"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tag"</span><span class="nt">&gt;</span>
  bundle
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag-addon tag-success"</span><span class="nt">&gt;</span>passing<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag tag-dark"</span><span class="nt">&gt;</span>
  CSS gzip size
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"tag-addon tag-warning"</span><span class="nt">&gt;</span>20.9 kB<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span></code></pre>
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