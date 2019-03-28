<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Hazard Prediction Training web app</h1>
<h2>Description</h2>
<p>
  Safety was a very important topic in one of the companies where I worked.
  As a way to improve the mindset of employees, the company would organize regular meetings during which a picture of a situation would be displayed and participants would have to point out what is dangerous in it.
  The results were written down and archived on paper, which I believed could be improved. Consequently, I created this web application.
</p>
<p>
  It is based on an HTML canvas that displays an image of a random situation.
  One by one, the participants click on the dangerous points in it, which draws a colored circle at the clicks location.
  After all participants are done, the circles of every participant is displayed, giving an opportunity to discuss every one's input.
  Once discussed, the results, in the form of the point count and the canvas containing the circles of every member, can be saved on the server.
  The points of each session are stored in a new row of a MySQL table and is displayed prior to the session.
</p>
<p>
  The app is built using PHP for the back-end and JavaScript for the front end, with a special attention to providing HTML and CSS code that is compatible with internet explorer (used at the company).
</p>


<h2>Demo</h2>
A demo of the web app will be available soon.

<h2>Screenshots</h2>
<?php gallery("/images/projects/web/shoushuudan/gallery/");?>

<h2>Code</h2>
Source code available on <a href="https://github.com/maximemoreillon/hazard_prediction_training">my GitHub profile</a>.

<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
