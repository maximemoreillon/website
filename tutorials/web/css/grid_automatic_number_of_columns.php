<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Automatic number of columns with CSS grid</h1>

<p>
  Let's imagine that we have multiple <?php tag("div"); ?> in a container that should have a width of at least 200px but no maximum width:
</p>

<pre><code><?php tag('div class="container"'); ?> 
    <?php tag("div"); ?>CONTENT<?php tag("/div"); ?> 
    <?php tag("div"); ?>CONTENT<?php tag("/div"); ?> 
    <?php tag("div"); ?>CONTENT<?php tag("/div"); ?> 
    <?php tag("div"); ?>CONTENT<?php tag("/div"); ?> 
    <?php tag("div"); ?>CONTENT<?php tag("/div"); ?> 
<?php tag("/div"); ?></code></pre>

<p>
  By default, browsers will display this as such:
</p>

<samp>
    <div class="container"> 
    <div>CONTENT</div> 
    <div>CONTENT</div> 
    <div>CONTENT</div> 
    <div>CONTENT</div> 
    <div>CONTENT</div> 
    </div>
</samp>


<p>
  We can use CSS to lay these <?php tag("div"); ?> out in a grid pattern:
</p>

<pre><code>.container{
    display:grid;
    grid-template-columns: repeat(2, 1fr);
}</code></pre>

<p>
  Which renders as (Note: grid is not supported by IE):
</p>

<samp>
    <div class="container" style="display:grid; grid-template-columns: repeat(2, 1fr);"> 
        <div>CONTENT</div> 
        <div>CONTENT</div> 
        <div>CONTENT</div> 
        <div>CONTENT</div> 
        <div>CONTENT</div> 
    </div>
</samp>

<p>
  Here, the elements are laid out in two columns with as many rows as necessary to accommodate all of them.
  Using <i>1fr</i>, the columns share the maximum available space evenly.
  However, for very wide viewports, one could fit more than just two elements on one row while narrow viewports could barely fit just one without violating the minimum width of 200px;
</p>
<p>
  What we need is a method to automatically create the correct number of columns so as to fit the maximum number of elements in one row while keeping those wider than 200px but also share the maximum available space evenly.
  This can be done by using a combination of <i>auto-fit</i> and <i>minmax</i>:


<pre><code>.container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px,1fr));
}</code></pre>

<p>
  This yields:
</p>

<samp>
    <div class="container" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(200px,1fr));"> 
        <div>CONTENT</div> 
        <div>CONTENT</div> 
        <div>CONTENT</div> 
        <div>CONTENT</div> 
        <div>CONTENT</div> 
    </div>
</samp>


<p>
  The <i>auto-fit</i> component of this directive tells the browser to repeat the creation of columns so as to fit the available space.
  On the other hand, <i>minmax(200px,1fr)</i> dictates the desired size of the columns: The columns should be at least 200px but otherwise grow so as to share space evenly.
  As such the columns grow until a spot larger than 200px can be created, in which case a new column is added.
</p>

<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
