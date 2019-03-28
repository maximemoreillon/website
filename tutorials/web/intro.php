<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Introduction to web development</h1>

<p>
  Web development is the development of software that users interact with through a web browser.
  Nowadays, most devices we use are equipped with a web browser.
  As such, a web application can be run on a large variety of platforms without needing the installation of any additional software.
  Most of the time, web applications are served to the browser of the client by a web server.
  Thus, web development does not only involve developing what the content that the client interacts with, but also the server-side software involved in the process.
</p>

<h2>Client-side</h2>
<h3>HTML</h3>
<p>
  Web browsers are basically HTML readers. As such HTML forms the base of most web applications. It is used to describe the content shown to the user.
</p>

<h3>CSS</h3>
<p>
  Although HTML conveys information about the content of a web page, it is not designed to define aesthetics. Styling the content is done using CSS, another language that web browsers can interpret. 
</p>
<h3>JavaScript</h3>
<p>
  A web page whose content is described using HTML and styled using CSS is static: Once received by the client, it does not change or perform any action.
  But what if we want the application to be a stopwatch or a calculator? It turns out that browsers can execute code embedded in the webpage within the <?php tag("script"); ?> tag.
  This code is written in Javascript.
</p>

<h2>Server-side</h2>
<p>
  The primary objective of a web serve is to send the webpage that the client requests.
  The webpage, usually an HTML document, can be created manually.
  However, since HTML is just text, it can be generated algorithmically before being sent to the client.
  Thus, the client could receive a webpage containing the result of a program executed on the server.
  This concept sets the basis for server-side web-development.
</p>

<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
