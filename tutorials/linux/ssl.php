<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1>SSL</h1>
<p>
	When accessing a website through HTTP, the content exchanged between the user and the server is not encrypted.
	This means that the content can be read by anyone intercepting it.
	An encrypted link between the server and the client can be established using SSL.
</p>
<p>
	When using SSL, the server must posess certificates to prove it can be trusted.
	Certificates are usualy delivered by official authorities, but recently, a service called Let's Encrypt offers certificates to anyone. The obtention of certificate is automated using a software called certbot.
	The installation and usage of certbot on Ubuntu for Apache2 is explained here.
</p>
<p>
	For Ubuntu, certbot is available as package:
</p>
<code>
	sudo apt-get install software-properties-common <br/>
	sudo add-apt-repository ppa:certbot/certbot <br/>
	sudo apt-get update <br/>
	sudo apt-get install python-certbot-apache <br/>
</code>
<p>
	It is advised to run certbot with the certonly option to avoid messing up the original apache configuration:
</p>
<code>
	certbot --apache certonly
</code>
<p>
	The advantage of the certbot packages is that automatic renewal is enabled by default.
</p>
<p>
	After certbot has been run, the apache ssl module must be enabled:
</p>
<code>
	a2enmod ssl
</code>
<p>
	Also, a site configuration file must be enabled to handle requests at the URL of the certifcates.
</p>
<p>
	Finally, Apache can be restarted and the website should be available through HTTPS
</p>
<code>
	service apache2 restart
</code>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>