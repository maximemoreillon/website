<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1>Nextcloud</h1>
<p>
    				Basically, Nextcloud is a self-hosted DropBox. Here's a simple guide on how to install it on an Ubuntu machine. For a more detailed explanation, check the <a href="https://docs.nextcloud.com/server/9/admin_manual/installation/source_installation.html"> official Nextcloud installation guide.</a>
</p>
<h2>Packages</h2>
<p>
    				The following command install the packages required to run Nextcloud:
    			</p>
<code>
    				sudo apt-get install php-mysql php-curl php-json php-mcrypt php-intl php-imagick php-gd php-zip php-xml php-mbstring
    			</code>
<h2>Database configuration</h2>
<p>
    				Nextcloud uses a database engine to keep track of files activity.
    				There are multiple options for database engines but here I use MariaDB.
    				A user and database must be created for Nextlcoud to use.
    				This can be done with as so:
    			</p>
<code>
    				CREATE USER 'username'@'localhost' IDENTIFIED BY 'password'; <br/>
    				CREATE DATABASE IF NOT EXISTS nextcloud; <br/>
    				GRANT ALL PRIVILEGES ON nextcloud.* TO 'username'@'localhost' IDENTIFIED BY 'password'; <br/>
</code>
<p>
    				Here, username and password must be replaced with whatever you choose. With this example, the database is named nextcloud.
    			</p>
<h2>Apache configuration</h2>
<h3> Apache modules </h3>
<p>
    				The following Apaches must be enabled using the a2enmod command:
    			</p>
<code>
    				rewrite <br/>
    				headers <br/>
    				env <br/>
    				dir <br/>
    				mime <br/>
</code>
<h3> Apache site </h3>
<p>
    				An Apache site must be enabled to handle requests for Nextcloud. An example Apache config file is available on the <a href="https://docs.nextcloud.com/server/9/admin_manual/installation/source_installation.html#apache-web-server-configuration">Nextcloud manual installation guide</a>.
    			</p>
<h2>Nextcloud install</h2>
<p>
    				Once the above is done, Nextcloud can be downloaded, extracted and placed in the apache site directory (/var/www/). It is important not to forget to give ownership to the nextcloud folder to the www-data user.
    			</p>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>