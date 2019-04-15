<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1> systemd </h1>
<p>
    Let's imagine the file server.js which, when executed by Node.js, serves web pages to connecting clients. A trivial way to execute server.js using Node.js would be to run the following bash command in a terminal:
</p>

<code>
    node server.js
</code>

<p>
    Here, node.js will execute server.js as long as the user does not interrupt the process with <kbd>Ctrl-C</kbd> or ends the bash session.
</p>

<p>
    However, this last point can cause problems. What if we want to continue serving web pages even after exiting the bash session?
    Basically, what we want is server.js to be executed in the background.
    A method to do so is to  execute of server.js as a service.
</p>

<h2>Service files</h2>
<p>
    To execute a program as a service, a .service file needs to be created in /etc/systemd/system/. Here is a simple .service file for our corresponding example:
</p>

<pre><code>[Unit]
Description=My service
After=network.target

[Service]
User=yourusername
ExecStart=/usr/bin/node /home/yourusername/server.js

[Install]
WantedBy=multi-user.target</code></pre>

<p>
    It is important to notice the line beginning with <i>ExecStart</i>, whcih specifies the command to be run as a service.
</p>

<h2>systemctl</h2>
<p>
    Services are handled with a program called systemd (hence the path of the service files) and uses the command systemctl to start or stop services. For example:
</p>

<code>
    sudo systemctl start myservice.service
</code>

<p>
    Once started, a service will run until the computer is shut down. However, services can be made so as to start automatically at boot using the command systemctl enable:
</p>

<code>
    sudo systemctl enable myservice.service
</code>

<p>
    Finally, to check if a service is running, the command systemctl status can be used:
</p>

<code>
    sudo systemctl status myservice.service
</code>

<h2>Automatic restart of services upon failure</h2>
<p>
    Services are commonly meant to be left running without supervision. However, services can crash and would require being restarted manually.
    However, services can be configured to as to automatically by adding the lines <i>Restart=always</i> and <i>RestartSec=3</i> in the service file as such:
</p>

<pre><code>[Unit]
Description=My service
After=network.target

[Service]
User=yourusername
Restart=always
RestartSec=3
ExecStart=/usr/bin/node /home/yourusername/server.js

[Install]
WantedBy=multi-user.target</code></pre>

<p>
    Here, RestartSec is used to delay the restart a little so as to not crash repeatedly too often.
</p>

<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>