<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1>ODROID XU4</h1>
<p>
				Here are some tips and tricks regarding the ODROID XU4.
				The following applies for the Ubuntu 16.04 minimal image.
			</p>
<h2>Full update</h2>
<p>
				Just like any Unbuntu distribution, packages can be updated using:
			</p>
<code>
				sudo apt-get update <br/>
				sudp apt-get upgrade <br/>
				sudo apt-get dist-upgrade
			</code>
<p>
				Additionally, the kernel can be updated using:
			</p>
<code>
				sudo apt-get install linux-image-xu3
			</code>
<h2>Network interfaces management</h2>
<p>
				With the ODDROID XU4 Ubuntu minimal image, the network interfaces are managed by Network Manager by default.
				Although Network Manager is a decent option to connect the ODROID to a network, it is impaired with some limitations.
				For example, Network Manager can fail to reconnect the ODROID to a router after the latter has performed a reboot.
				If the ODROID is to be used as a server, automatic reconnection is mandatory.

				To establish a more reliable connection, the network interface can be setup in the /etc/network/interfaces file
				Interfaces described in this file will get ignored by Network Manager.

				Here's an example of interfaces file that handles the ethernet port of the ODROID XU4:
			</p>
<code>
				# interfaces(5) file used by ifup(8) and ifdown(8) <br/>
				# Include files from /etc/network/interfaces.d: <br/>
				source-directory /etc/network/interfaces.d <br/>
<br/>

					auto lo <br/>
					iface lo inet loopback <br/>
<br/>
					auto eth0 <br/>
					allow-hotplug eth0 <br/>
					iface eth0 inet dhcp <br/>
</code>
<h2>Dialog</h2>
<p>
				The Ubuntu minimal image does not come with the dialog package preinstalled, which can cause issues since some packages update require it to install successfully.
				The dialog package can be installed with:
			</p>
<code>
				sudo apt-get install dialog
			</code>
<h2>Bash completion</h2>
<p>
				The Ubuntu minimal image does not come with bash completion, which completes commands using the tab key.
				It can be installed using:
			</p>
<code>
				sudo apt-get install bash-completion
			</code>
<h2>Install scripts</h2>
<p>
				Scripts to automate the installation of Samba, Home assistant and Nextcloud are available on <a href="https://github.com/maximemoreillon/odroid_xu4_server_setup">GitHub</a>.
			</p>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>