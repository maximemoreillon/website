<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1>Proxytunnel</h1>
<p>
    In most modern companies, employees do not have a direct access to the world wide web from their computers.
    A direct request from an employee's browser to a resource is most likely going to be blocked by the network infrastructure of the company.
    Instead, requests are directed to a proxy server within the company network, which is granted access to external resources.
    It is the proxy server that performs the actual requests to the desired resource.
    The proxy server can analyze the response content and refuse to serve it to the employee if it were to violate company policies.
    Consequently, companies can ensure that employees don't access content they are not allowed to.
</p>

<p>
    For the sake of risk minimzation, proxies usually allow the least possible services to go through.
    Most of the time, only traffic on port 80 (HTTP) and 443 (HTTPS) will be allowd to go through a corporate proxy.
    Consequently, accessing a remote computer through SSH is impossible.
</p>

<p>
    To solve this problem, SSH traffic must be encapsulated within HTTP (or HTTPS) traffic and this can be achieved using <a href="https://github.com/proxytunnel/proxytunnel">Proxytunnel</a>.
    As the name suggest, Proxytunnel creates a tunnel that can pass through Proxies and allow SSH traffic to run through it. This requires creating a tunnel "exit" somewhere past the corporate proxy.
    Such an exit can be achieved using Apache
</p>

<h2>Apache configuration</h2>

<p>An exit for the tunnel can be created using Apache, more specifically the proxy and proxy_connect modules. Those can be installed with:</p>

<pre><code>sudo a2enmod proxy
sudo a2enmod proxy_connect</code></pre>

<p>
    A simple implemntation can be achieved by adding the following in the Apache configuration file of the desired virtual host:
</p>

<pre><code>ProxyRequests On
ProxyBadHeader Ignore
ProxyVia on
AllowConnect 22
&lt;Proxy *&gt;
    Order deny,allow
    Allow from all
&lt;/Proxy&gt;</code></pre>

<h2>Client configuration</h2>

<p>Once the exit of the tunnel is configured, the entry point (from within the corporate network) can be created.</p>

<p>Proxytunnel is an executable that can be run as such for testing purposes. On Ubuntu, it can be installed simply by using apt:</p>

<pre><code>sudo apt install proxytunnel</code></pre>

<p>For windows, compiled binaries need to be downloaded. Recent builds can be found in <a href="https://github.com/proxytunnel/proxytunnel/issues/15"> this issues thread</a></p>


<pre><code>PATH_TO_PROXYTUNNEL/proxytunnel -v -X -p COMPANY_PROXY_ADDRESS:COMPANY_PROXY_PORT -r TUNNEL_EXIT_ADDRESS:TUNNEL_EXIT_PORT -d SSH_DESTINATION_ADDRESS:SSH_DESTINATION_PORT</code></pre>

<p>
    Here's a breakdown of the command:
</p>

<ul>
    <li>-v : verbose output</li>
    <li>-X : use SSL (omitted if connecting through HTTP)</li>
    <li>-p : First proxy, i.e. corporate proxy</li>
    <li>-r : Second proxy, i.e. tunnel exit, i.e where Apache is configured</li>
    <li>-d: Destination of the SSH connection, can be anywhere that accepts SSH connections</li>
</ul>

<p>
    TUNNEL_EXIT_PORT is set to whatever apache is listening to, most likely 80 or 443. If set to 443, i.e. using SSL, then the -X flag must be used.
    If the tunnel exit and the SHS destination are the same, SSH_DESTINATION_ADDRESS can be set to localhost. SSH_DESTINATION_PORT is usually going to be the drfault SSH port, i.e. 22.
</p>

<p>
    Running this command creates a tunnel that accepts SSH traffic. If successful, one's SSH client can be configured to use such tunnel.
</p>


<h3>Ubuntu</h3>
<pre><code>ssh -p SSH_DESTINATION_PORT -o ProxyCommand="proxytunnel -v -X -p COMPANY_PROXY_ADDRESS:COMPANY_PROXY_PORT -r TUNNEL_EXIT_ADDRESS:TUNNEL_EXIT_PORT -d %h:%p" USERNAME@SSH_DESTINATION_ADDRESS</code></pre>

<p>Here's a breakdown of the command</p>
<ul>
    <li>-p : Port of the SSH destination</li>
    <li>-o : Tells SSH to use a special command, in this case ProxyCommand</li>
    <li>%h:%p : Grabs the host and port from the SSH command</li>
    <li>-X: Same as previously: use SSL (omitted if using HTTP)</li>
</ul>

<h3>Putty</h3>
<p>Putty can also be configured to use proxytunnel. This is done from the Connection > Proxy menu, by selecting "Local" as proxy type and using the following as "Telnet command, or local proxy command:</p>

<pre><code>PATH_TO_PROXYTUNNEL/proxytunnel -v -X -p COMPANY_PROXY_ADDRESS:COMPANY_PROXY_PORT -r TUNNEL_EXIT_ADDRESS:TUNNEL_EXIT_PORT -d %host:%port</code></pre>

<p>
    Here, %host and %port are filled automatically by putty with the host and port set in the Session window. However, if the tunnel exit and the destination are the same computer, then replacing %host:%port can be simpler.
For debugging purposes, it is advised to select "yes" for the option "Print proxy diagnostics in the terminal window"
</p>


<h2>SSH tunelling</h2>

<p>An amazing feature of SSH is the ability to forward ports and serve as a SOCKS5 proxy. This means that HTTP traffic can flow through SSH. This is similar to establishing a VPN connection.</p>


<h3>Ubuntu</h3>

<pre><code>ssh -D SOCKS5_PROXY_PORT -N -g -p SSH_DESTINATION_PORT -o ProtocolKeepAlives=5 -o ProxyCommand="proxytunnel -v -X -p COMPANY_PROXY_ADDRESS:COMPANY_PROXY_PORT -r TUNNEL_EXIT_ADDRESS:TUNNEL_EXIT_PORT -d %h:%p" USERNAME@SSH_DESTINATION_ADDRESS</code></pre>

<p>Here, SOCKS5_PROXY_PORT is a port than can be selected feely (if not used by another service or requiring root) and will be used to enter the tunnel by whatever application needs to, mainly web browsers.
Here's a breakdown of the rest ofcommand:</p>

<ul>
    <li>-N: don't open a terminal, just establish the connection</li>
    <li>-g: Allow hosts other than localhost to use the tunnel (needed if the tunnel user is on a different computer)</li>
    <li>-o ProtocolKeepAlives=5: Keep the connection alive</li>
</ul>

<h3>Putty</h3>
<p>An SSH tunnel can be established with putty by going in Connection > SSH > Tunnels, selecting Dynamic as destination and adding a source port of one's choice, ideally something high like 9000 so that it is less likely to be used by another application</p>

<h3>Browser configuration</h3>
<p>Once the SSH tunnel is established, browsers can be configured to use it by setting up their proxy configuration so as to use a SOCKS5 proxy with the host set to whatever machine is running proxytunnel and the port to the one chosen previously.</p>

<h2>SSH tunnel through Proxytunnel as a service</h2>
<p>
    With the method presented above, one can open a tunnel to a server outside the corporate network and use this tunnel to browse the web freely without interference from the corporate proxy.
    However, the tunnel must be opened via an SSH connection each time it is intended to be used. To keep the tunnel open, it can be useful to run it as a service. This can be done using Ubuntu's systemd by creating a service file.
    Here's an example service file:
</p>

<pre><code>[Unit]
Description=PROXYTUNNEL
After=network.target

[Service]
User=LOCAL_USERNAME
Restart=always
RestartSec=10
ExecStart=/usr/bin/sshpass -p "PASSWORD" /usr/bin/ssh -D SOCKS5_PROXY_PORT -N -g -p SSH_DESTINATION_PORT -o ProtocolKeepAlives=5 -o ProxyCommand="proxytunnel -v -X -p COMPANY_PROXY_ADDRESS:COMPANY_PROXY_PORT -r TUNNEL_EXIT_ADDRESS:TUNNEL_EXIT_PORT -d localhost:22" REMOTE_USERNAME@SSH_DESTINATION_HOST

[Install]
WantedBy=multi-user.target</code></pre>

<p>Note that sshpass is used to input the password necessary to establish the SSH connection. it can be installed using apt:</p>

<pre><code>sudo apt install sshpass</code></pre>

<p>Here's a breakdown of the command:</p>

<ul>
    <li>-N: don't open a terminal, just establish the connection</li>
    <li>-g: Allow hosts other than localhost to use the tunnel</li>
    <li>-o ProtocolKeepAlives=5: Keep the connection alive</li>
</ul>

<p>Also note that here, %h and %p seem not to work.</p>

<p>
    Another important thing to note is that SSH_DESTINATION_HOST must be in the known hosts list of LOCAL_USERNAME.
To do so, just establish a simple ssh connection to REMOTE_USERNAME once and accept adding REMOTE_USERNAME to the known hosts list.
</p>


<h2>Important notes</h2>

<p>Apache cannot identify the domain requested by proxytunnel. As such, requests from proxytunnel are handled via the default apache configuration.
Conseqiently, the Proxy directives presented here must be placed in the configuration file that is used by Apache by default. This can be checked using:</p>

<pre><code>sudo apachectl -S</code></pre>

<p>Some versions of Proxytunnel do not work well with SSL. I recommend using version 1.9.7</p>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>