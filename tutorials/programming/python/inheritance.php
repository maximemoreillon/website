<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Inheritance</h1>

<p>
  Let's imagine that we have a python class as follows (Python 3):
</p>

<pre><code>class MyClass:
	def __init__(self):
	# Code of the class constructor...
	print("Instance of MyClass created")
</code></pre>

<p>
  A child class of MyClass can be created as such:
</p>

<pre><code>class MyChildClass(MyClass):
	def __init(self):
	    super().__init__() # calls constructor of MyClass
	    print("Instance of MyChildClass created")
</code></pre>

<p>
  By creating an instance of MyChildClass, "Instance of MyClass created" and "Instance of MyChildClass created" should be printed in the console.
</p>



<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
