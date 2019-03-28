<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>HTTP Requests</h1>

<h2>GET</h2>
<p>
    When browsing the web, the user's browser requests pages from the server which, in terms, hoppefully derlivers them.
    In other words, the client's browser requested to get data from the web server. This constitutes an HTTP GET rquest and here, GET is called the method of the request.
</p>
<p>
    But what if data has to be sent from the client to the server? For example, how would a user be able to login to a website without being able to send its credentials?
    One simple way to do this is to add this information to the GET request. For example, requesting the following URL will request the page index.php by specifying that a variable called "username" is set to "banana"
</p>

<code>http://mywebsite.com/index.php?username=banana</code>

<p>
    Since a web server can read the queried URL, it can react to its content. For example, it could log the current time in a database every time the word "log" appears in the query.
</p>

<h2>POST</h2>

<p>
    One shortcoming of GET requests is that the user's credentials appear in clear text in the query.
</p>
<p>
    Another approach is to use a POST request.
    POST requests allow to send data to the server without having to write it in the query. Instead, the data is sent in the body of the request
</p>
<p>
    A common way to create POST request is to use an HTML form:
</p>

<pre><code><?php tag('form action="target_URL" method="POST"'); ?> 
    <?php tag('input type="text" name="username" placeholder="Username"'); ?><?php tag("br"); ?> 
    <?php tag('input type="text" name="password" placeholder="Password"'); ?><?php tag("br"); ?> 
    <?php tag('input type="submit" value="Submit"'); ?> 
<?php tag("/form"); ?></code></pre>

<p>
    Which renders as:
</p>

<div>
    <form action="target_URL" method="POST"> 
        <input type="text" name="username" placeholder="Username"><br> 
        <input type="text" name="password" placeholder="Password"><br> 
        <input type="submit" value="Submit"> 
    </form>
</div>


<p>
    In this example, when the submit button is pressed, a POST request containing the username and password input by the user is sent to "target_URL".
</p>

<h2>Other methods</h2>

<p>
    GET and POST are the most common methods for HTTP requests. Although other methods such as PUT and DELETE exist, they are not covered in this tutorial
</p>

<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
