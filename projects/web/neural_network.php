<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>JS neural network</h1>
<p>
  This simple web app written in JavaScript trains a neural network on data provided as .csv file.
  The neural network is a fully connected network implemented from scratch as a class and allows the user to define the exact structure of its hidden layers.
  Moreover, it allows for the visualization of the network using an HTML5 canvas.
  The parsing of the .csv files is done with some simple PHP.
</p>

<h2>Demo</h2>
A demo of the web app is available <a href="http://maximemoreillon.com/apps/neural_network/">here</a>.

<h2>Screenshots</h2>
<?php gallery("/images/projects/web/neural_network/gallery/");?>

<h2>Code</h2>
Source code available on my <a href="https://github.com/maximemoreillon/js_neural_network">Github profile</a>

<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
