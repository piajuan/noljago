<?php 
    include("../header.php")
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
                            <h2 class="mt-0 mb-4">Avatars</h2>
                            <h3 id="simple-avatar">Simple avatar</h3>
                            <div class="example">
                                <div class="avatar-list">
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/male/21.jpg)"></span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/male/25.jpg)"></span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/female/5.jpg)"></span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/female/17.jpg)"></span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/male/40.jpg)"></span>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/21.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/25.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/5.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/17.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/40.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre>
                            </div>
                            <h3 id="avatar-size">Avatar size</h3>
                            <div class="example">
                                <div class="avatar-list">
                                    <span class="avatar avatar-sm" style="background-image: url(../docs/demo/faces/male/9.jpg)"></span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/female/8.jpg)"></span>
                                    <span class="avatar avatar-md" style="background-image: url(../docs/demo/faces/male/4.jpg)"></span>
                                    <span class="avatar avatar-lg" style="background-image: url(../docs/demo/faces/male/35.jpg)"></span>
                                    <span class="avatar avatar-xl" style="background-image: url(../docs/demo/faces/female/29.jpg)"></span>
                                    <span class="avatar avatar-xxl" style="background-image: url(../docs/demo/faces/male/2.jpg)"></span>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-sm"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/9.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/8.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-md"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/4.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-lg"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/35.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-xl"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/29.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-xxl"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/2.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre>
                            </div>
                            <h3 id="avatar-status">Avatar status</h3>
                            <div class="example">
                                <div class="avatar-list">
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/male/2.jpg)"></span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/female/25.jpg)">
                            <span class="avatar-status"></span>
                                    </span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/male/9.jpg)">
                            <span class="avatar-status bg-red"></span>
                                    </span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/female/25.jpg)">
                            <span class="avatar-status bg-green"></span>
                                    </span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/female/16.jpg)">
                            <span class="avatar-status bg-yellow"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/2.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/25.jpg)"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/9.jpg)"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-red"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/25.jpg)"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-green"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/16.jpg)"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar-status bg-yellow"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span></code></pre>
                            </div>
                            <h3 id="avatar-placeholder">Avatar placeholder</h3>
                            <div class="example">
                                <div class="avatar-list">
                                    <span class="avatar">RB</span>
                                    <span class="avatar">KH</span>
                                    <span class="avatar">BK</span>
                                    <span class="avatar avatar-placeholder"></span>
                                    <span class="avatar"><i class="fe fe-more-horizontal"></i></span>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span><span class="nt">&gt;</span>RB<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span><span class="nt">&gt;</span>KH<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span><span class="nt">&gt;</span>BK<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-placeholder"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"fe fe-more-horizontal"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span></code></pre>
                            </div>
                            <div class="example">
                                <div class="avatar-list">
                                    <span class="avatar avatar-blue">NG</span>
                                    <span class="avatar avatar-azure">AM</span>
                                    <span class="avatar avatar-indigo">RB</span>
                                    <span class="avatar avatar-purple">PR</span>
                                    <span class="avatar avatar-pink">WH</span>
                                    <span class="avatar avatar-red">MR</span>
                                    <span class="avatar avatar-orange">DB</span>
                                    <span class="avatar avatar-yellow">PP</span>
                                    <span class="avatar avatar-lime">JR</span>
                                    <span class="avatar avatar-green">RB</span>
                                    <span class="avatar avatar-teal">KH</span>
                                    <span class="avatar avatar-cyan">BK</span>
                                    <span class="avatar avatar-gray">CA</span>
                                    <span class="avatar avatar-gray-dark">CW</span>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-blue"</span><span class="nt">&gt;</span>NG<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-azure"</span><span class="nt">&gt;</span>AM<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-indigo"</span><span class="nt">&gt;</span>RB<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-purple"</span><span class="nt">&gt;</span>PR<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-pink"</span><span class="nt">&gt;</span>WH<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-red"</span><span class="nt">&gt;</span>MR<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-orange"</span><span class="nt">&gt;</span>DB<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-yellow"</span><span class="nt">&gt;</span>PP<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-lime"</span><span class="nt">&gt;</span>JR<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-green"</span><span class="nt">&gt;</span>RB<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-teal"</span><span class="nt">&gt;</span>KH<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-cyan"</span><span class="nt">&gt;</span>BK<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-gray"</span><span class="nt">&gt;</span>CA<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar avatar-gray-dark"</span><span class="nt">&gt;</span>CW<span class="nt">&lt;/span&gt;</span></code></pre>
                            </div>
                            <h3 id="avatars-list">Avatars list</h3>
                            <div class="example">
                                <div class="avatar-list">
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/male/21.jpg)"></span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/male/25.jpg)"></span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/female/5.jpg)"></span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/female/17.jpg)"></span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/male/40.jpg)"></span>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"avatar-list"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/21.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/25.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/5.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/17.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/40.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre>
                            </div>
                            <div class="example">
                                <div class="avatar-list avatar-list-stacked">
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/female/12.jpg)"></span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/female/21.jpg)"></span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/female/29.jpg)"></span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/female/2.jpg)"></span>
                                    <span class="avatar" style="background-image: url(../docs/demo/faces/male/34.jpg)"></span>
                                    <span class="avatar">+8</span>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"avatar-list avatar-list-stacked"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/12.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/21.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/29.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/female/2.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span> <span class="na">style=</span><span class="s">"background-image: url(./demo/faces/male/34.jpg)"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"avatar"</span><span class="nt">&gt;</span>+8<span class="nt">&lt;/span&gt;</span>
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
    include("../footer.php")
?>