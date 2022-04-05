<?php
	include("../header.php");
?>
<section class="section">
    <div class="container">
        <div class="page__header">
            <h1 class="page__title">
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
                            <h2 class="mt-0 mb-4">Typography</h2>
                            <p>Documentation and examples for common text utilities to control alignment, wrapping, weight, and more.</p>
                            <h3 id="text-alignment">Text alignment</h3>
                            <p>Easily realign text to components with text alignment classes.</p>
                            <div class="example">
                                <p class="text-left">Left aligned text on all viewport sizes.</p>
                                <p class="text-center">Center aligned text on all viewport sizes.</p>
                                <p class="text-right">Right aligned text on all viewport sizes.</p>
                                <p class="text-justify">Both aligned text on all viewport sizes. Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus.</p>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-left"</span><span class="nt">&gt;</span>Left aligned text on all viewport sizes.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>Center aligned text on all viewport sizes.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-right"</span><span class="nt">&gt;</span>Right aligned text on all viewport sizes.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-justify"</span><span class="nt">&gt;</span>Both aligned text on all viewport sizes. Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus.<span class="nt">&lt;/p&gt;</span></code></pre>
                            </div>
                            <h3 id="text-transform">Text transform</h3>
                            <p>Transform text in components with text capitalization classes.</p>
                            <div class="example">
                                <p class="text-lowercase">Lowercased text.</p>
                                <p class="text-uppercase">Uppercased text.</p>
                                <p class="text-capitalize">Capitalized text.</p>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-lowercase"</span><span class="nt">&gt;</span>Lowercased text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-uppercase"</span><span class="nt">&gt;</span>Uppercased text.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"text-capitalize"</span><span class="nt">&gt;</span>Capitalized text.<span class="nt">&lt;/p&gt;</span></code></pre>
                            </div>
                            <h3 id="letter-spacing">Letter spacing</h3>
                            <p>Utilities for controlling the tracking (letter spacing) of an element.</p>
                            <div class="example">
                                <p class="tracking-tight">Lorem ipsum dolor sit amet. Tight letter spacing.</p>
                                <p class="tracking-normal">Lorem ipsum dolor sit amet. Normal letter spacing.</p>
                                <p class="tracking-wide">Lorem ipsum dolor sit amet. Wide letter spacing.</p>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"tracking-tight"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet. Tight letter spacing.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"tracking-normal"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet. Normal letter spacing.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"tracking-wide"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet. Wide letter spacing.<span class="nt">&lt;/p&gt;</span></code></pre>
                            </div>
                            <h3 id="line-height">Line Height</h3>
                            <p>Utilities for controlling the leading (line height) of an element.</p>
                            <div class="example">
                                <p class="leading-none">Lorem ipsum dolor sit amet.<br /> Dolor sit amet.</p>
                                <p class="leading-tight">Lorem ipsum dolor sit amet.<br /> Dolor sit amet.</p>
                                <p class="leading-normal">Lorem ipsum dolor sit amet.<br /> Dolor sit amet.</p>
                                <p class="leading-loose">Lorem ipsum dolor sit amet.<br /> Dolor sit amet.</p>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"leading-none"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet.<span class="nt">&lt;br&gt;</span>Dolor sit amet.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"leading-tight"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet.<span class="nt">&lt;br&gt;</span>Dolor sit amet.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"leading-normal"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet.<span class="nt">&lt;br&gt;</span>Dolor sit amet.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"leading-loose"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet.<span class="nt">&lt;br&gt;</span>Dolor sit amet.<span class="nt">&lt;/p&gt;</span></code></pre>
                            </div>
                            <h3 id="basic-elements">Basic elements</h3>
                            <p>When you can’t use the CSS classes you want, or when you just want to directly use HTML tags, use <code class="highlighter-rouge">.text-wrap</code> as container. It can handle almost any HTML tag.</p>
                            <div class="example">
                                <div class="text-wrap">
                                    <h1>Hello World</h1>
                                    <p>Lorem ipsum<sup><a>[1]</a></sup> dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque. Sub<sub>script</sub> works as well!</p>
                                    <h2>Second level</h2>
                                    <p>Curabitur accumsan turpis pharetra <strong>augue tincidunt</strong> blandit. Quisque condimentum maximus mi, sit amet commodo arcu rutrum id. Proin pretium urna vel cursus venenatis. Suspendisse potenti. Etiam mattis sem rhoncus lacus dapibus facilisis. Donec at dignissim dui. Ut et neque nisl.</p>
                                    <ul>
                                        <li>In fermentum leo eu lectus mollis, quis dictum mi aliquet.</li>
                                        <li>Morbi eu nulla lobortis, lobortis est in, fringilla felis.</li>
                                        <li>Aliquam nec felis in sapien venenatis viverra fermentum nec lectus.</li>
                                        <li>Ut non enim metus.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="highlight">
                                <pre><code class="language-html" data-lang="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"text-wrap"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1&gt;</span>Hello World<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;p&gt;</span>Lorem ipsum<span class="nt">&lt;sup&gt;&lt;a&gt;</span>[1]<span class="nt">&lt;/a&gt;&lt;/sup&gt;</span> dolor sit amet, consectetur adipiscing elit. Nulla accumsan, metus ultrices eleifend gravida, nulla nunc varius lectus, nec rutrum justo nibh eu lectus. Ut vulputate semper dui. Fusce erat odio, sollicitudin vel erat vel, interdum mattis neque. Sub<span class="nt">&lt;sub&gt;</span>script<span class="nt">&lt;/sub&gt;</span> works as well!<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;h2&gt;</span>Second level<span class="nt">&lt;/h2&gt;</span>
  <span class="nt">&lt;p&gt;</span>Curabitur accumsan turpis pharetra <span class="nt">&lt;strong&gt;</span>augue tincidunt<span class="nt">&lt;/strong&gt;</span> blandit. Quisque condimentum maximus mi, sit amet commodo arcu rutrum id. Proin pretium urna vel cursus venenatis. Suspendisse potenti. Etiam mattis sem rhoncus lacus dapibus facilisis. Donec at dignissim dui. Ut et neque nisl.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;ul&gt;</span>
    <span class="nt">&lt;li&gt;</span>In fermentum leo eu lectus mollis, quis dictum mi aliquet.<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>Morbi eu nulla lobortis, lobortis est in, fringilla felis.<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>Aliquam nec felis in sapien venenatis viverra fermentum nec lectus.<span class="nt">&lt;/li&gt;</span>
    <span class="nt">&lt;li&gt;</span>Ut non enim metus.<span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;/ul&gt;</span>
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