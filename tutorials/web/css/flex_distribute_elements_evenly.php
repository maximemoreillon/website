<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Distribute elements evenly using flex</h1>

<p>
  Hare are multiple <?php tag("div"); ?> in a container:
</p>

<pre><code><?php tag('div class="container"'); ?> 
    <?php tag("div"); ?>1<?php tag("/div"); ?> 
    <?php tag("div"); ?>2<?php tag("/div"); ?> 
    <?php tag("div"); ?>3<?php tag("/div"); ?> 
    <?php tag("div"); ?>LOOOOOOOOONG<?php tag("/div"); ?> 
    <?php tag("div"); ?>5<?php tag("/div"); ?> 
<?php tag("/div"); ?></code></pre>

<p>
  By default, browsers will display this as such:
</p>

<samp>
    <div class="container"> 
        <div style="outline: 1px solid #ce0000;">1</div> 
        <div style="outline: 1px solid #ce0000;">2</div> 
        <div style="outline: 1px solid #ce0000;">3</div> 
        <div style="outline: 1px solid #ce0000;">LOOOOOOOOONG</div> 
        <div style="outline: 1px solid #ce0000;">5</div> 
    </div>
</samp>

<p>Note: outlines have been added to see the bounding boxes of elements</p>

<p>
  Let's assume we want to display those elements in a row, taking up all the available width of the container and making sure each element is the same size as the other.
  A typical scenario would be for a navigation bar.
</p>

<p>
  One option would be to display those elements as <i>inline-block</i> and set their width to 100% / number_of_elements.
  However, with this approach, the width would need to calculated aain each time an element is added.
</p>

<p>
  CSS flexbox proposes a simpler alternative: the <i>flex-grow</i> property.
</p>

<p>
  First, the container of the elements must be set so as to display them in flexbox fashion:
</p>

<pre><code>.container{
    display:flex;
}</code></pre>

<p>
  Which renders as (Note: grid is not supported by IE):
</p>

<samp>
    <div class="container" style="display: flex;"> 
        <div style="outline: 1px solid #ce0000;">1</div> 
        <div style="outline: 1px solid #ce0000;">2</div> 
        <div style="outline: 1px solid #ce0000;">3</div> 
        <div style="outline: 1px solid #ce0000;">LOOOOOOOOONG</div> 
        <div style="outline: 1px solid #ce0000;">5</div> 
    </div>
</samp>

<p>
  Then, applying the property <i>flex-grow: 1</i> to the elements themselves tells the browser to grow all elements equally so as to occupy all the available space:
</p>

<pre><code>.container{
    display:flex;
}
.container > div {
    flex-grow: 1;
}</code></pre>

<p>Yielding:</p>

<samp>
    <div class="container" style="display: flex;"> 
        <div style="outline: 1px solid #ce0000; flex-grow: 1;">1</div> 
        <div style="outline: 1px solid #ce0000; flex-grow: 1;">2</div> 
        <div style="outline: 1px solid #ce0000; flex-grow: 1;">3</div> 
        <div style="outline: 1px solid #ce0000; flex-grow: 1;">LOOOOOOOOONG</div> 
        <div style="outline: 1px solid #ce0000; flex-grow: 1;">5</div> 
    </div>
</samp>

<p>
  Here, it can be seen that all elements have been widened by the same amount. However, they dot not currently have the same width.
  This is because the <?php tag("div"); ?> containing the text <i>LOOOOOOOOONG</i> was wider to begin width.
  In order to make all elements the same width, regardless of their initial size, <i>flex-basis</i> is used:
</p>

<pre><code>.container{
    display:flex;
}
.container > div {
    flex-grow: 1;
    flex-basis: 0;
}</code></pre>

<p>
    As a result:
</p>

<samp>
    <div class="container" style="display: flex;"> 
        <div style="outline: 1px solid #ce0000; flex-grow: 1; flex-basis:0;">1</div> 
        <div style="outline: 1px solid #ce0000; flex-grow: 1; flex-basis:0;">2</div> 
        <div style="outline: 1px solid #ce0000; flex-grow: 1; flex-basis:0;">3</div> 
        <div style="outline: 1px solid #ce0000; flex-grow: 1; flex-basis:0;">LOOOOOOOOONG</div> 
        <div style="outline: 1px solid #ce0000; flex-grow: 1; flex-basis:0;">5</div> 
    </div>
</samp>

<p>
  What <i>flex-basis</i> does it tell the browser the initial width from which the element has to grow.
  Setting it to zero basically means that the minimum width from which to grow is 0.
  The key point is not necessarily to put <i>flex-basis</i> to zero, but to an identical value for all elements.
</p>

<p>
  Finally, some elements can be made so as to grow larger than others by setting a higher <i>flex-grow</i> value for those specific elements:
</p>

<p>
    For a more detailed guide about CSS flexbox, please check <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">The Complete Guide to Flexbox on CSS Tricks</a>.
</p>



<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
