<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Nameboards</h1>
<h2>Description</h2>
<p>
  I used to work for a company where each team had a whiteboard, called nameboard, where each member would write down whether they are currently on campus, what time they will arrive and where they can be found.
  Although useful in case you need to talk to someone in particular and don't know where the person is, this system had a major flaw:
  One would need to walk back to the nameboard for every information update.
</p>
<p>
  I decided to solve this issue by creating a web app that generates nameboards for each team, visible from fron any member's computer.
  The front end is quite straightforward: a table emulating the real thing with columns for the members' name, arrival time and location.
  On the back-end this information is stored in a MySQL database.
  I could have simply connecte the MySQL database to the front end usign some PHP and display the latest version of a nameboard upon request.
  However, this would have meant that the information displayed would not be up to date unless the page is refreshed.
  Thus, I decided to use websockets to allow the front end to be updated in real-time.
  I built the app's back-end using Flask and its socket io module.
</p>


<p>
  The app also featured an API so as to update whether one is on campus or not, useful to setup a script that updates this information whenever one's PC is turned on or off.
</p>

<h2>Demo</h2>
A demo of the web app is available <a href="https://moreillon.duckdns.org/apps/nameboards/">here</a>.

<h2>Screenshots</h2>
<?php gallery("/images/projects/web/nameboards/gallery/");?>

<h2>Code</h2>
Source code available on my <a href="https://github.com/maximemoreillon/nameboards">GitHub profile</a>

<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
