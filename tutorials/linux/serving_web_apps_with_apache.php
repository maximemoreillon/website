<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1>Serving web applications with Apache</h1>
<p>
    Let's imagine we have a server with Apache2 listening on port 80.
    Since port 80 is used, other web apps, developed for example with Node.js, must use another port.
    Consequently, one would need to open a new port on one's router everytime a new app is developed.
</p>

<p>
    To solve this problem, Apache can be set to redirect requests to other destinations than itself.
    This is achieved using the proxy module.
</p>

<p>
    Here is an example configuration file that listens to HTTPS requests for myapp.mydomain.com and redirects them to port 8080 of the same machine (localhost).
    Additionally, it enforces HTTPS by redirecting HTTP requests to its HTTPS counterpart.
</p>

<pre><code>&lt;VirtualHost *:80&gt;
    # Redirection through HTTPS
    ServerName myapp.mydomain.com
    Redirect / https://myapp.mydomain.com
&lt;/VirtualHost&gt;
    
&lt;IfModule mod_ssl.c&gt;
    &lt;VirtualHost *:443&gt;
    
        ServerName myapp.mydomain.com
        
        # SSL configuration
        SSLEngine on
        SSLCertificateFile /etc/letsencrypt/live/myapp.mydomain.com/fullchain.pem
        SSLCertificateKeyFile /etc/letsencrypt/live/myapp.mydomain.com/privkey.pem
        
        # Proxy config
        SSLProxyEngine On
        ProxyRequests Off
        ProxyPreserveHost On
        ProxyVia Full
        
        &lt;Proxy *&gt;
                Require all granted
                Allow from all
                Order deny,allow
        &lt;/Proxy&gt;
        
        ProxyPass / http://localhost:8080/
        ProxyPassReverse / http://localhost:8080/
    
    &lt;/VirtualHost>
&lt;/IfModule></code></pre>


 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>