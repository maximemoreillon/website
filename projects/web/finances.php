<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Finances management web app</h1>
<p>
  My bank offers a web interface to check balance history of my account.
  However, the history is limited to about a year back from the current date.
  This is probably done in an effort to save storage space on the bank's servers.
  However, owning my own server, I figured I could free myself from such limitations so I made my own web app to monitor my bank account balance history using PHP and JS.
</p>
<p>
  The app is fairly simple: It parses .csv files that my bank provides which contain the balance history over a given of time.
  The parsed data is then fed into a MySQL database. For vizualisation purpose, the data is then displayed in the form of a graph implemented as an HTML canvas, drawn onto by JS.
  Additionally, the app lets the user download a .csv backup of the complete data, formatted in the same way as the original .csv files provided by the bank.
</p>
<p>
  For security purpose, the app also features an authentication method in the form of a simple username - password combination.
</p>

<h2>Screenshots</h2>
<?php gallery("/images/projects/web/finances/gallery/");?>

<h2>Source code</h2>
Available on GitHub soon...

<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
