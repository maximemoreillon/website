<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1> THIS WEBSITE </h1>
<p>
    This website has been built from scratch as a way to learn about web design and development.
</p>

<h2>Layout</h2>
<p>
    The pages of the website are built with the following elements:
</p>

<pre><code><?php tag("div class='wrapper' id='banana'");?> 
  <?php tag("header"); tag("/header"); ?> 
  <?php tag("main"); tag("/main"); ?> 
<?php tag("/div")?></code></pre>  

<p>
    The wrapper is centered within the page's body using flexbox. For its inner layout, CSS-Grid was used.
</p>

<h2>Responsivity</h2>
<p>
    To accomodate for different display sizes, the website has been designed with responsiveness in mind.
    This is accomplished using media queries which mainly change the grid-template-area attribute of the wrapper.
</p>

<h2>PHP includes</h2>
<p>
    To ensure consistency among all pages, their HTML code, apart for the content of the main section, is generated using PHP includes. Thus, the PHP code of a simple page would look like this:
</p>

<pre><code>&lt;?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?&gt;
<?php tag("h1");?>PAGE TITLE<?php tag("/h1");?> 
<?php tag("p");?>Some text<?php tag("/p");?> 
&lt;?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?&gt;</code></pre>  

<p>
    This allows the layout of every page to be changed by editing a single file
</p>

<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>