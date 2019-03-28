<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1>EVOLUTION STRATEGIES</h1>
<p>
				One of the fundamental concepts behind machine learning is error minimization: if both a machine's current and target performances can be quantified, the difference between the two, i.e. the error, can be minimized by tuning the machine's parameters.
				Thus, machine learning can be summed up as an optimization problem.
			</p>
<p>
				Evolution algorithms are among the many methods that exist to solve optimization problems.
				It follows the principles of the theory of evolution: unfit individuals are less likely to pass on their genes to future generations and so on.
			</p>
<p>
				Thus, evolutionary algorithms work by iterating over generations of parameter sets and getting rid of the most unfit ones each time.
				Here, fitness is measured by taking the opposite of the error aforementioned.
				To increase the chances of finding the best parameter set, the first generation must be as diverse as possible.
			</p>
<p>
				However, this approach would only amount to selecting the best parameter set from the first generation, which implies just taking the best sample out of a random batch. To solve this, another evolution-inspired technique is employed, mutation: The fit parameter sets are duplicated and slightly mutated at each generation.
				This can be done easily be adding a relatively small random value to each parameter of the set.
				By doing so, genetic algorithms focus their search in the vincinity of the best candidates until a satisfactory soltion is yielded.
			</p>
<h2>Example code</h2>
<p>
				An axample of evolution strategies implemented in Processing is available on <a href="https://github.com/maximemoreillon/processing_evolution">GitHub</a>.
			</p>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>