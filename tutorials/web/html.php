<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>HTML</h1>

<p>
  HTML stands for HyperText Markup Language. It is used to describe the content of a webpage to web browsers.
  Originally, web browsers were designed to display text documents and so HTML was used to define the various parts making up those documents.
</p>

<h2>Tags</h2>

<p>
  HTML uses tags to define the attributes of content such as:
</p>

<pre><code><?php tag("p"); ?>This is a paragraph<?php tag("/p"); ?></code></pre>

<p>
  In this example, the text "This is a paragraph" is defined as a paragraph because it is surrounded by <?php tag("p"); ?> and <?php tag("/p"); ?> tags. Note the "/" for the tag after the content, which implies that it is a closing tag.
</p>

<h2>Links</h2>

<p>
  The web takes its name from how web pages are interconnected together: A user can navigate from one page to another using hypertext links. To define a portion of test as a link, the <?php tag("a"); ?> is used:
</p>

<pre><code><?php tag("a href='maximemoreillon.com'"); ?>This is a link to maximemoreillon.com<?php tag("/a"); ?></code></pre>

<p>
  Note that the target of the link is defined within the dag using the "href" attribute.
</p>

<h2>Nesting tags</h2>

<p>
  Tagged content can be placed inside tagged content. For example, a link can be put inside a paragraph:
</p>

<pre><code><?php tag("p"); ?> 
    This is a paragraph and it contains <?php tag("a href='maximemoreillon.com'"); ?>link to maximemoreillon.com<?php tag("/a"); ?> 
<?php tag("/p"); ?></code></pre>

<p>
  Note that HTML is insensitive to line breaks.
</p>


<h2>HTML document structure</h2>

<p>
  In fact, the content is displayed on the body of the document and as such, must be nested in the <?php tag("body"); ?> tag.
  Moreover, the body is part of an HTML document and, consquently, is nested within the <?php tag("html"); ?> tag:
</p>

<pre><code><?php tag("html"); ?> 
    <?php tag("body"); ?> 
        <?php tag("p"); ?> 
            This is a paragraph and it contains <?php tag("a href='maximemoreillon.com'"); ?>link to maximemoreillon.com<?php tag("/a"); ?> 
        <?php tag("/p"); ?> 
    <?php tag("/body"); ?> 
<?php tag("/html"); ?></code></pre>

<p>
  At this point, it may seem trivial that content should appear on the body of the page and as such, the <?php tag("body"); ?> tag should not need to exist.
  However, the page can carry information that does not necessarily appear in its body.
  Namely, the text is shown in the browser tab, i.e. title (tag: <?php tag("title"); ?>)of the document, does not appear on the page.
  This sort of information is written in the head of the document, which is nested in the <?php tag("html"); ?> tag just like the body.
  This yields the following document structure, which constitutes somewhat of a bare minimum for a web page:
</p>

<pre><code><?php tag("html"); ?> 
    <?php tag("head"); ?> 
        <?php tag("title"); ?> 
            Document title 
        <?php tag("/title"); ?> 
    <?php tag("/head"); ?> 
    <?php tag("body"); ?> 
        <?php tag("p"); ?> 
            This is a paragraph and it contains <?php tag("a href='maximemoreillon.com'"); ?>link to maximemoreillon.com<?php tag("/a"); ?> 
        <?php tag("/p"); ?> 
    <?php tag("/body"); ?> 
<?php tag("/html"); ?></code></pre>

<h2>Key takeaways</h2>
<p>
  HTML describes the content of a webpage using tags.
</p>

<h2>More on the subject</h2>
<p>
  The content of this page constitutes a very rudimentary introduction to HTML for a more thourough study of the subject, <a href="https://www.w3schools.com/">W3Schools</a> offers detailed tutorials on web development.
</p>
<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
