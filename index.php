<?php include "phpartials/header.php"; ?>
	<main>
		<section class="hero">
			<a href="#overview">
				<figure>
					<img src="images/overview.svg" alt="">
					<figcaption>"Popular Opinionated" SASS/CSS framework - use variables to customize to your style</figcaption>
				</figure>
			</a>
			<a href="#semantics">
				<figure>
					<img src="images/semantics.svg" alt="">
					<figcaption>99% Classless, 100% Semantic - human-readable HTML!</figcaption>
				</figure>
			</a>
			<a href="#typography">
				<figure>
					<img src="images/typography.svg" alt="">
					<figcaption>Musical typography: compose the flow of your website</figcaption>
				</figure>
			</a>			
		</section>
		<section class="hero" style="height: 128px">
			<a href="custom_build.html"><button>Custom Build</button></a>
			<a href="http://www.github.com/herrshuster/Semantic-CSS-Framework">GitHub</a>
		</section>
		<article id="overview">
			<h1 class="uber"><small><em>the</em></small> Semantic CSS Framework</h1>
			<h2>A popular opinionated CSS framework for rapid style development</h2>
			<p>The majority of websites all use a number of common elements arranged into a finite number of patterns, as you can clearly see on sites like <a href="http://www.patterntap.com">Pattern Tap</a>. These common elements correspond either to a single HTML tag or a pattern of tags, such as <code>header>nav>ul</code>, <code>fieldset>form[text],form[password]</code>, or others. The Semantic CSS Framework seeks to be a foundation for creating unique semantic stylesheets. By modifying a set of variables, the Semantic CSS Framework generates CSS that styles the default elements and related patterns. Once the base CSS file is generated, the developer can modify it further to support additional features.</p>
			<p>The Semantic CSS Framework is responsive with many mobile-first constructs to make it run quickly. It has no official grid system, though there are certainly plenty to choose from. For strong responsive grids in SASS, I recommend Singularity.gs.</p>
			<p>The Semantic CSS Framework takes the opinions of hundreds of developers and works their best practices into code. I will continue to update the code with references to its inspiration, but some of my major influences (links to come when I launch) have been Chris Coiyer of CSS Tricks, Harry Roberts of CSS Wizardry, and Mike Lane for his excellent Twitter feed.</p>
		</article>
		<article id="semantics">
			<h1>Semantic Foundation</h1>
			<h2>99% Classless, 100% Semantic</h2>
			<p>The basic markup for a number of common patterns can be found <a href="example.html">here</a>.</p>
			<p>In order to move towards a more open web, existing standards should be adhered to in order that new standards can be explored. While the creativity of many designers with the <code>div</code> element is admirable, having endless sets of nested divs with "grid-" classes applied does nothing to move towards a web of interoperability and the free exchange of information.</p>
			<p>The Semantic CSS Framework does the heavy lifting for you, allowing you to write entire webpages as easily as you would a complicated document. With emmet, it's easier than Markdown!</p>
		</article>
		<article id="typography">
			<h1>Musical Typography</h1>
			<h2>Conducting the New Canon</h2>
			<p>If you haven't read "Composing the New Canon," I suggest you read it now.</p>
			<p>The idea that typographical ratios can be calculated from musical ratios is an old one. The Semantic CSS Framework makes those ratios easily accessible. You can either compile a stylesheet with a specific ratio or use the classy.css file to apply classes like "e augmin7" to elements to style the contained ratios. Examples will be below:</p>
		</article>		
	</main>
</body>
		<script src="javascripts/scripts.js"></script>

</html>