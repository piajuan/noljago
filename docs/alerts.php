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
                            <h2 class="mt-0 mb-4">Alerts</h2>
                            <p>Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p>
                            <div class="alert alert-primary mt-5 mb-6">
                                <div><strong>Work in progress!</strong> More detailed documentation is coming soon.</div>
                            </div>
                            <h3 id="default-alerts">Default alerts</h3>
                            <p>Add color contextual class.</p>
                            <div class="example">
                                <div class="alert alert-primary" role="alert">
                                    This is a primary alert—check it out!
                                </div>
                                <div class="alert alert-secondary" role="alert">
                                    This is a secondary alert—check it out!
                                </div>
                                <div class="alert alert-success" role="alert">
                                    This is a success alert—check it out!
                                </div>
                                <div class="alert alert-info" role="alert">
                                    This is a info alert—check it out!
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    This is a warning alert—check it out!
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    This is a danger alert—check it out!
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-primary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  This is a primary alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-secondary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  This is a secondary alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  This is a success alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  This is a info alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  This is a warning alert—check it out!
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  This is a danger alert—check it out!
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="alert-with-icon">Alert with icon</h3>
                            <p>Add <code class="highlighter-rouge">.alert-icon</code> class.</p>
                            <div class="example">
                                <div class="alert alert-icon alert-primary" role="alert">
                                    <i class="fe fe-bell mr-2" aria-hidden="true"></i> You have done 5 actions.
                                </div>
                                <div class="alert alert-icon alert-success" role="alert">
                                    <i class="fe fe-check mr-2" aria-hidden="true"></i> The page has been added.
                                </div>
                                <div class="alert alert-icon alert-danger" role="alert">
                                    <i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i> The daily report has failed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-icon alert-primary"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-bell mr-2"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/i&gt;</span> You have done 5 actions. 
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-icon alert-success"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-check mr-2"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/i&gt;</span> The page has been added. 
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-icon alert-danger"</span> <span class="na">role=</span><span class="s">"alert"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-alert-triangle mr-2"</span> <span class="na">aria-hidden=</span><span class="s">"true"</span><span class="nt">&gt;&lt;/i&gt;</span> The daily report has failed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="alert-dismissible">Alert dismissible</h3>
                            <p>Add a dismiss button and the <code class="highlighter-rouge">.alert-dismissible</code> class, which adds extra padding to the right of the alert and positions the <code class="highlighter-rouge">.close</code> button. On the dismiss button, add the <code class="highlighter-rouge">data-dismiss="alert"</code> attribute, which triggers the JavaScript functionality. Be sure to use the <code class="highlighter-rouge">&lt;button&gt;</code> element with it for proper behavior across all devices.</p>
                            <div class="example">
                                <div class="alert alert-warning alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert"></button> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning alert-dismissible"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"close"</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span><span class="nt">&gt;&lt;/button&gt;</span>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="alert-with-avatar">Alert with avatar</h3>
                            <div class="example">
                                <div class="alert alert-avatar alert-primary alert-dismissible">
                                    <span class="avatar" style="background-image: url(../demo/faces/male/4.jpg)"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </div>
                                <div class="alert alert-avatar alert-success alert-dismissible">
                                    <span class="avatar" style="background-image: url(../demo/faces/male/35.jpg)"></span> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-avatar alert-primary alert-dismissible"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/4.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-avatar alert-success alert-dismissible"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/35.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <h3 id="alert-with-buttons">Alert with buttons</h3>
                            <div class="example">
                                <div class="alert alert-success alert-dismissible">
                                    <button data-dismiss="alert" class="close"></button>
                                    <h4>Some Message</h4>
                                    <p>
                                        Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim voluptate.
                                    </p>
                                    <div class="btn-list">
                                        <button class="btn btn-success" type="button">Okay</button>
                                        <button class="btn btn-secondary" type="button">No, thanks</button>
                                    </div>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success alert-dismissible"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;button</span> <span class="na">data-dismiss=</span><span class="s">"alert"</span> <span class="na">class=</span><span class="s">"close"</span><span class="nt">&gt;&lt;/button&gt;</span>
  <span class="nt">&lt;h4&gt;</span>Some Message<span class="nt">&lt;/h4&gt;</span>
  <span class="nt">&lt;p&gt;</span>
    Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim
    voluptate.
  <span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"btn-list"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-success"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>Okay<span class="nt">&lt;/button&gt;</span>
    <span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-secondary"</span> <span class="na">type=</span><span class="s">"button"</span><span class="nt">&gt;</span>No, thanks<span class="nt">&lt;/button&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
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