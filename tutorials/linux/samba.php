<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1>Samba</h1>
<p>
    				Samba is a software used to share directories over a network.
    				Directories shared using samba appear as network folders on the file manager of computers that are on the same network.
    			</p>
<h2> Samba installation </h2>
<p>
    				samba can be installed easily using apt:
    			</p>
<code> sudo apt-get install samba </code>
<h2> Samba configuration </h2>
<p>
    				Samba is configured using the /etc/samba/smb.conf file
    			</p>
<p>
    				Here is an example configuration file that shares the directory /mnt/hdd/samba_shares, belonging to user myusername
    			</p>
<code>
    			[MY SHARED DIRECTORY] <br/>
    				valid users = myusername <br/>
    				writable = yes <br/>
    				path = /mnt/hdd/samba_shares <br/>
    				comment = My shared directory <br/>
</code>
<p>
    				Because permissions don't work the same way between Linux and Windows, the line valid <i>users = myusername</i> ensures the files can only be accessed by <i>username</i>.
    				This option requires myusername to be a registered user of samba. This can be done with the following shell command:
    			</p>
<code> sudo smbpasswd -a myusername </code>
<p>
    				Here the password must match that of the unix account myusername. Once done, samba will prompt for username and passowrd anyone trying to access the shared folder from a remote location.
    			</p>
<p>
    				Multiple directories using the same properties (same valid users for example) can be shared as so:
    			</p>
<code>
    			[GLOBAL] <br/>
    				valid users = myusername <br/>
    				writable = yes <br/>
<br/>
    			[MY SHARED DIRECTORY 1] <br/>
    				path = /mnt/hdd/samba_shares_1 <br/>
    				comment = My first shared directory <br/>
<br/>
    			[MY SHARED DIRECTORY 2] <br/>
    				path = /mnt/hdd/samba_shares_2 <br/>
    				comment = My second shared directory <br/>
</code>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>