<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1>ARTIFICIAL NEURAL NETWORK</h1>
<p>
				An artificial neural network (ANN) is a computing system inspired by the brain of living organisms that processes inputs through layers of artificial neurons and yield an output accordingly.
			</p>
<p>
				An application example can be estimating the price of a house given properties such as its surface area, number of floors, number of rooms etc.
			</p>
<p>
				The output of an artificial neuron of layer n generally ranges between 0 and 1.
				It takes as input the output of the layer n-1.
				The first layer of the network takes the input of the network as input.
				Those inputs are weighted and then summed together before being processed through a neuron activation function.
				The sigmoid function is often chosen as an activation function because it can be derived easily and its output is bound between zero and one.
				This activated weighted sum consitutes the output of the neurons of layer n and the process can be repeated for further layers.
				The output of the neurons of the network's last layer constitute the output of the network.
			</p>
<p>
				When all the weights of the network are set properly, the former can process inputs into outputs accordign to its task.
			</p>
<p>
				Setting the weights is performed through training using training data. Training data consists of training inputs and outputs, the latter being the output that the network would yield if all the weights were correct.
				In the case of the house example from above, the training inputs would be specifications for various houses and the trainign outputs would be the known price of the corresponding houses.
			</p>
<p>
				The training input is fed to the network and the latter's output is compared to the training output.
				The difference between the network output and the training output can be used to measure the network's performances.
				With such information, the network can be optimized similarly to all machine learning problems.
			</p>
<p>
				Different methods exist to perform such optimization.
				The most widespread one is backpropagation and gradient descent, for which explanations will come in the future.
			</p>
<h2>Example code</h2>
<p>
				An implementation of a neural network is provided <a href="http://maximemoreillon.com/apps/neural_network/">here</a>.
				The source code is available on <a href="https://github.com/maximemoreillon/js_neural_network">GitHub</a>.
			</p><p>
				Alternatively, an Processing implementation can be found <a href="https://github.com/maximemoreillon/processing_neural_network">here</a>.
			</p>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>