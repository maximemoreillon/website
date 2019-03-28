<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1>Check if a command is successful</h1>
<p>
    				By default, a bash script continues executing even if a command fails.
    				It is possible to configure bash scripts to stop automatically using "set -e" but sometimes, it would be useful to echo an error message before quitting.
    			</p>
<p>
    				For this purpose, the &amp;&amp; and || can be used: Code placed after &amp;&amp; gets executed only if the previous command succeded while || does the opposite.
    				Thus, here's a compact way to display an error message if a command fails in a bash script:

    			</p>
<code>COMMAND &amp;&gt;/dev/null &amp;&amp; echo -e "\e[32mOK\e[39m" || { echo -e "\e[31mERROR\e[39m"; exit 1; }</code>
<p>

    				This will:
    				</p><ul>
<li>Suppress whatever output comes from COMMAND using &amp;&gt;/dev/null</li>
<li>Echo a green "OK" if the command succeeds using &amp;&amp; echo -e "\e[32mOK\e[39m"</li>
<li>Echo a red "ERROR" and stop further execution of the script if the command fails using || { echo -e "\e[31mERROR\e[39m"; exit 1; }</li>
</ul>
<p>
    				Multiple commands can be checked in similar fashion:
    			</p>
<code>
    				COMMAND1 || { echo -e "\e[31mERROR\e[39m"; exit 1; } <br/>
    				COMMAND2 || { echo -e "\e[31mERROR\e[39m"; exit 1; } <br/>
    				COMMAND3 || { echo -e "\e[31mERROR\e[39m"; exit 1; } <br/>
    				echo -e "\e[32mOK\e[39m"
    			</code>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>