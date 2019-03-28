<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1>MQTT</h1>
<p>
	The Internet of Things (IoT) connecting devices and appliances to a network. This allows a toaster to be controlled from a smartphone, for instance.
	Various kinds of protocols exist to enable communication between connected things. This tutorial focuses on MQTT.
</p>
<p>
	MQTT uses a subscribe/publish system: messages are not addressed to a particuliar device but published with a given topic.
	All devices subscribed to this topic then receive the message.
</p>
<h2> Broker </h2>
<p>
	MQTT needs a centralized server, called a broker, to manage all the messages.
	A popular MQTT broker is <a href="https://mosquitto.org/">Mosquitto</a>, which can be installed on any linux machine.
	On Ubuntu, this can be done using
</p>
<code>sudo apt-get install mosquitto mosquitto-clients</code>

<h2> Client library </h2>
<p>
	Now that a broker has been setup to handle messages, the network can be populated with IoT devices.
	The devices must be able to communicate using MQTT.
	For ESP8266 wifi modules programmed with the Arduino IDE, this can be achieved using the <a href="https://github.com/marvinroger/async-mqtt-client">Async MQTT Client library by Marvinroger</a>.
</p>
<p>
	Although the library is well documented and its examples easy to understand, I had troubles dealing with inbound MQTT messages.
	Thus, here are additional explanations.
</p>
<p>
	With the Async MQTT Client library, MQTT messages are received in the form of a char array that is not null terminated.
	Alongside the payload itself, its length is also made available in the callback function.
	Thus, the payload can be compared to another char array using the function strncmp() (and not strcmp()):
</p>
<code>if(strncmp(payload,my_char_array,n) == 0)</code>
<p>
	What strncmp() does is compare two char arrays up to the nth character and returns zero in case of a match.
	Thus, the payload can be compared to a char array even if the latter is null terminated.
	This is also helpful given that the payload sometimes includes additional characters from the TPC buffer from which it is extracted.
</p>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>