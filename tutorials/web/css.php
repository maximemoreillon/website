<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>CSS</h1>

<p>
  HTML defines the content of a web page but not its aesthetics.
  Styling a document is achieved using CSS, which stands for Cascading Style Sheet and is another language that web browsers can interpret.
</p>

<h2>Inline CSS</h2>

<p>
    The simplest way to style elements of an HTML document is to add the "style" property in the HTML tag. For example: 
</p>

<pre><code><?php tag("p style='color:blue;'"); ?>This is a paragraph and it is blue<?php tag("/p"); ?></code></pre>

<p>
    yields:
</p>

<samp>
    <p style="color:blue;">This is a paragraph and it is blue</p>
</samp>

<p>
    <span style="font-weight:bold;">property:value</span> is the CSS semantics used to style elements and every statement should be terminated by a semicolon (;). As such, multiple properties can be styled:
</p>

<pre><code><?php tag("p style='color:blue;background-color:lightgreen;'"); ?>This is a paragraph and it is blue with a light green background<?php tag("/p"); ?></code></pre>

<p>
    yields:
</p>

<samp>
    <p style="color:blue;background-color:lightgreen;">This is a paragraph and it is blue with a light green background</p>
</samp>

<h2>CSS in head</h2>

<p>
    The approach presented previously can quickly become tedious for great amounts of elements to style.
    To apply a style to multiple elements at once, the styling rule can be written in the head of the document within the <?php tag("style"); ?> tag.
    For example, all links can be turned green using the following code nested in the document head:
</p>

<pre><code><?php tag("style"); ?> 
a {
    color: red;
}
<?php tag("/style"); ?></code></pre>

<p>
    In this example, the links of the document are targetted by the selector "a" and the corresponding styling rules are put in brackets. Multiple styling rules and targets can be set in similar fashion:
</p>

<pre><code><?php tag("style"); ?> 
a {
    color: red;
    font-size: 25px;
}
p {
    background-color: pink;
}
<?php tag("/style"); ?></code></pre>


<h2>External CSS</h2>

<p>
    Putting CSS in the document head helps improve readibility of HTML code but still isn't the most graceful option.
    Since CSS is a whole other language than HTML, it makes more sense to have CSS code in a .css file and reference it in the HTML.
    This is achieved by putting this line in the head of the HTML document:
</p>

<pre><code><?php tag('link rel="stylesheet" type="text/css" href="styles.css"'); ?></code></pre>

<p>
    where styles.css is the document containing the styling rules. It is important to note that styles.css has to contain only CSS, i.e. no <?php tag("style"); ?> tags.
</p>

<h2>Selectors</h2>
<h3>Classes</h3>
<p>
    Selecting elements to style using their tag can be fairly limiting: What if there were two classes of links and one class should be red while the other should be green?
    HTML tags can hold a class property. For example, here is a link of class red:
</p>

<pre><code><?php tag('a class="red"'); ?></code></pre>

<p>
    A class can be selected in CSS by adding a dot in front of it. For example, setting a red color to all elements of class "red" is done as so: 
</p>

<pre><code>.red {
    color: red;
}</code></pre>

<p>
    Note that elements with a different tag type can be part of the same class.
</p>

<h3>IDs</h3>
<p>
    Sometimes a single specific element must be styled. One option to do so would be to create a class just for it. However, one could use the "id" property of HTML tags:
</p>

<pre><code><?php tag('a id="specialElement"'); ?></code></pre>

<p>
    IDs can be targetted in CSS using a # placed in front of the ID:
</p>

<pre><code>#specialElement {
    font-weight: bold;
}</code></pre>

<h3>Relation to other elements</h3>
<p>
    Another way to target some elements in CSS is to use their relation to other known elements.
    For example, adding a selector after a selector, separated by a space implies targetting elements matching the second selector if they are nested (at any level) within the first selector.
    Here, all links that are inside a table will be turned red:
</p>

<pre><code>table a {
    color: red;
}</code></pre>

<p>There exist many ways to select elements using CSS and this tutorial only covers the most basic of them. For a more detailed list of selection methods, please check <a href="https://www.w3schools.com/cssref/css_selectors.asp">this page</a>, provided by W3Schools</p>

<h2>Key takeaways</h2>
<p>
  CSS describes the aesthetics of an HTML content. It targets HTML elements usually by tag, class, id or relation to other elements.
</p>

<h2>More on the subject</h2>
<p>
  The content of this page constitutes a very rudimentary introduction to CSS for a more thourough study of the subject, <a href="https://www.w3schools.com/">W3Schools</a> offers detailed tutorials on web development.
</p>
<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
