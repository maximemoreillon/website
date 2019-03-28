<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Websockets</h1>

<p>
	With JavaScript, the content of web pages is no longer limited to being static.
	The user can interact with the content that has been delivered to his web browser without reloading or changing web pages.
	However, once a webpage has been delivered to the user, the connection to the server that delivered it is closed.
	Thus, although the the user can interact with the content, interaction with the server is not possible without re-opening the connection, for example by using a new HTTP request.
</p>

<p>
	In this sense, information sent to the user is only updated when the client makes a new request.
	The server cannot push new data to the client on its own.
</p>

<p>
	A way around this is to use websockets.
</p>


<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
