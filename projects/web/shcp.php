<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Smart home control panel</h1>
<p>
  I've been using Home Assistant to control my home automation IoT devices.
  Although it fullfills all my needs, I wanted to make my own system so as to get a fully customized smart home control panel and learn how to build such an application in the process.
</p>
<p>
  A simple way to build such an app would be to open the port corresponding to MQTT on my router and make an UI in JavaScript with an MQTT client-side library to communicate with the devices directly.
  However, for security reasons, I prefer to open only web-related ports to the public. Moreover, my MQTT traffic is currently uncencrypted so it would not be wise to use it on public network.
  Ideally, I would like to keep all MQTT communication internally with the MQTT port closed on my router, communicating via encrypted TCP traffic.
</p>
<p>
  NodeJS, which I wanted to learn about, seemed to be a viable candidate for the job so I built the app using it.
</p>
<p>
  In the back-end, the app handles MQTT messages using the MQTT.js module.
  The front end consists of a webpage with the layout of my apartment and icons at the respective location of the IoT devices.
  Clicking on the icon toggles the state of the device.
  The front and back ends communicate through websockets which allows data to be pushed from the server without a page refresh.
</p>
<p>
  The information regarding the devices (MQTT topics, position on the layout etc.) is stored in a MySQL, which allows new devices to be added or current devices to be edited directly through the web interface.
</p>
<p>
  For security purpose, the app also features an authentication method in the form of a simple username - password combination.
</p>

<h2>Screenshots</h2>
<?php gallery("/images/projects/web/shcp/gallery/");?>


<h2>Software</h2>
<h3>Dependencies</h3>
<ul>
    <li>MQTT.js</li>
    <li>Express</li>
    <li>MySQL</li>
</ul>

<h3>Source code</h3>
Available on <a href="https://github.com/maximemoreillon/shcp">my GitHub profile</a>

<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
