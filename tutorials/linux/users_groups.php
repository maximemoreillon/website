<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1>USERS AND GROUPS</h1>
<h2> Adding user </h2>
<p>
    				In linux, or at least Ubuntu, a user can be added using:
    			</p>
<code>
    				adduser *username*
    			</code>
<p>
    				adduser is a user-friendly command that uses useradd as back-end.
    				Thus, adduser should be prefered to useradd.
    			</p>
<h2> Adding user to a group </h2>
<p>
    				A user can be added to a group using:
    			</p>
<code>
    				adduser *username* *groupname*
    			</code>
<p>
    				This can be used to allow users to use sudo:
    			</p>
<code>
    				adduser *username* sudo
    			</code>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>