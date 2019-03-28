<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1>LAMP</h1>
<p>
    				This tutorial explains how to setup a Linux, Apache, MariaDB, PHP (LAMP), server.
    			</p>
<h2>Apache 2</h2>
<p>
    				Opening an web browser and entering a computer's IP in the URL bar is likely not to result in anything.
    				This is because the computer isn't equipped with any software designed to handle requests from the web browser.
    				A web server must be running of the computer so as to serve webpages in response to requests from a web browser.
    				The two most popular web servers currently are Apache 2 and NGINX. This tutorial explains how to install the former.
    				Apache can be installed using apt-get:
    			</p>
<code> sudo apt-get install apache2</code>
<p>
    				Once installed, apache will serve .html pages stored in /var/www/html
    			</p>
<h2>PHP</h2>
<p>
    				Pages served by apache are commonly .html files. The HTML code fully describes the content of the page.
    				Thus, the content will not change unless the HTML code does. Here, content is said to be static.
    				However, sometimes, content needs to be dynamic.
    				For example, a discussion forum keeps evolving as users post messages. For this purpose, PHP is used.
    				It can be installed with apt-get:
    			</p>
<code> sudo apt-get install php libapache2-mod-php </code>
<h2>MariaDB</h2>
<p>
    				Very often, websites need to store and organize information. This is done using a database.
    				Databases are managed by Database engines. The most popular one is probably MySQL and its fork, MariaDB.
    				For this tutorial, MariaDB will be used.
    				It can be installed using apt-get:
    			</p>
<code> sudo apt-get install mariadb-server php-mysql</code>
<h3>MariaDB secure installation</h3>
<p>
    				Once setup, MariaDB must be setup so as to increase security:
    			</p>
<code> sudo mysql_secure_installation</code>
<p>
    				The same actions can also be performed through command line:
    			</p>
<code>
    				sudo mysql -uroot -p$mariadb_root_password -e "UPDATE mysql.user SET Password = PASSWORD('$mariadb_root_password') WHERE User = 'root'" <br/>
    				sudo mysql -uroot -p$mariadb_root_password -e "DELETE FROM mysql.user WHERE User=''" <br/>
    				sudo mysql -uroot -p$mariadb_root_password -e "DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost', '127.0.0.1', '::1')" <br/>
    				sudo mysql -uroot -p$mariadb_root_password -e "DROP DATABASE IF EXISTS test" <br/>
    				sudo mysql -uroot -p$mariadb_root_password -e "FLUSH PRIVILEGES"
    			</code>
<p>
    				Thus, a LAMP server can serve dynamic web pages with content coming from Databases.
    			</p>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>