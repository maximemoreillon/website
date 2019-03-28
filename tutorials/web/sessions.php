<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Sessions in PHP</h1>

<p>
  PHP sessions allow to store variables for a certain user's browsing session.
  For example, a user would prefer to stay logged in a website when browsing its webpages rather that having to login at every page change.
</p>

<p>
  This can be achieved by saving the user's username as a session variable upon login.
  This variable will be accessible to all PHP scripts throughout the browsing session.
  If this varable is not set, it can be assumed that the user is not logged in.
</p>
<p>
  If session variables are to be accessed within the current page's PHP script, the document's code must imperatively start with
</p>

<pre><code>session_start();</code></pre>


<p>
  Once done, session variables can be read and set using:
</p>

<pre><code>$_SESSION['variable_name']</code></pre>


<p>
  So, in our login example, the username can be stored as a session variable upon successful login:
</p>

<pre><code>$_SESSION['username'] = $my_username;</code></pre>

<p>
  By doing so, it can be checked wether the user is logged in by checking the following on any page:
</p>

<pre><code>isset($_SESSION['username'])</code></pre>

<p>
  If the variable is not set, the user is not logged in.
</p>

<p>
  To allow users to log off and destroy all the session variables that have been created, the following lines can be used:
</p>

<pre><code>session_unset();
session_destroy();</code></pre>


<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
