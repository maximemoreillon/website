<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Introduction to PHP</h1>

<p>
    A basic web server can be implemented as an Apache or NGINX instance serving pages in the form of static HTML files.
    For simple cases, those HTML files are written by hand and so their content does not change unless manually edited, hence static.
</p>

<p>
  However, one might want the some of the content of a page to be generated algorithmically.
  For example, a web page could contain information about the available disk space of the server, which is information that would need to be written by the server itself.
</p>

<p>
  On the client side, the content must still be received in the form of an HTML page.
  Thus, the tool needed here is some software that can preprocess HTML code before it is sent to the client.
  PHP, recursive acronym for PHP Hypertext Preprocessor, does exactly this. It processes .php files into HTML code that is then sent to the client.
</p>

<h2>Installation</h2>
<p>
  On an Ubuntu server running APache, PHP (currently version 7) is installed as so:
</p>

<code>
    sudo apt install php libapache2-mod-php
</code>

<h2>PHP statements</h2>
<p>
  .php files can contain standard HTML code. On the other hand, Content to be preprocessed is put within the php tag <?php php_open();?> <?php php_close(); ?>.
  Moreover, php statements must separated by a semicolon ;.
</p>

<p>
    Using PHP, the disk space example mentioned previously can be achieved as so:
</p>

<pre><code><?php tag("html"); ?> 
    <?php tag("body"); ?> 
        <?php tag("p"); ?> 
            Total disk space:
        <?php tag("/p"); ?> 
        <?php php_open();?> echo disk_total_space("/");<?php php_close(); ?> 
    <?php tag("/body"); ?> 
<?php tag("/html"); ?></code></pre>


<p> 
   Resulting in:
</p> 

<samp>
    <p> 
        Total disk space:
    </p> 
    <?php echo disk_total_space("/");?> 
</samp>

<p>
  Note: the massive number is likely to be due to my web hosting provider having massive storage space.
</p>

<p>
  In this example, <i>disk_total_space("/")</i> is the php command to get the total disk space and <i>echo</i> is used to write the output as text on the document.
</p>

<h2>variables</h2>
<p>
  Since PHP is used to generate content algorithmically, a much needed features is the ability to handle variables.
  In php, variables are defined by appending a dollar sign $ before a variable name, for example $myVariable.
</p>

<p>
    Here is a quick example that performs a simple mathematical operation
</p>

<pre><code><?php php_open();?> 
    $a = 2;
    $b = 3;
    $c = $a + $b;
    echo $c
<?php php_close(); ?></code></pre>

<p>
    Which, very unsurprisingly yields:
</p>

<samp>
    <?php
        $a = 2;
        $b = 3;
        $c = $a + $b;
        echo $c;
    ?> 
</samp>

<p>
    Variables are note limited to numbers. Common other variables types would be strings and arrays. The type of a variable does not need to be defined explicitly.
</p>


<h2>Key takeaways</h2>
<p>
  PHP can be used to generate content in a web page. PHP code, embedded in the <?php php_open();?> <?php php_close(); ?> tag, is executed by the server before the resulting HTML document is sent to the client.
  PHP variables are written with a $ and PHP statements are separated by a semicolon ;.
</p>

<h2>More on the subject</h2>
<p>
  The content of this page constitutes a very rudimentary introduction to PHP for a more thourough study of the subject, <a href="https://www.w3schools.com/">W3Schools</a> offers detailed tutorials on web development.
</p>

<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
