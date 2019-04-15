<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1>MACHINE LEARNING</h1>
<p>
	The classical approach get a robot to accomplish a given task is to program it with a sequence of all the successive actions necessary to succeed.
	In other words, the person in charge of the programming must posess knowledge of all those actions.
	For complex tasks, this knowledge can sometimes be lacking, or too tedious to transcribe appropriately. 
</p>
<p>
    In such situation, one would want the robot to learn those actions by itself, instead of requiring explicit programming.
    This the idea behind Machine learning (ML).
</p>
<p>
	Machine learning (ML) differs from the classical approach in the sense that no knowledge of the process is required to achieve the desired output.
	Instead, ML optimizes the process so that its output gets closer and closer to the desired output.
</p>
<p>
	To perform such optimization, a measure of the error is required. 
	For example, a dart throwing robot could measure its performance by computing the distance between the center of the target and where the dart landed.
	With an a measure of the error available, the challenge sums up to adjusting the parameters involved in the task so as to minimize the error.
	For example, the robot could refine the velocity and angle of the dart throw until it hits the target perfectly
</p>
<p>
	Thus, whenever a measure of the error is available, machine learning can be used to tune the parameters involved in the process that yielded said error.
</p>
<h2> Useful references </h2>
<p>
	Machine learning can seem complicated at first sight.
	However, the right source of information can make the first steps way easier to take.
	Here are references I suggest to get started with Machine learning:
</p>
<ul>
    <li><a href="https://www.youtube.com/channel/UCWN3xxRkmTPmbKwht9FuE5A">Siraj Raval's Youtube channel</a></li>
    <li><a href="https://www.youtube.com/user/carykh">CARYKH's Youtube channel</a></li>
</ul>

<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>