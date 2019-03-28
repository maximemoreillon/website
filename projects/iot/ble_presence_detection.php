<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>BLE presence detection</h1>

<h2>Project description</h2>
<p>
    I wanted my home automation system to detect when I arrive home so as to unlock my door automatically or let me know if I leave the apartment without turning the A/C off.
    I figured my smartphone could be used to achieve this since many options were available.
    For example, I could use an app like OwnTracks which would send an MQTT message once I enter a certain perimeter around my apartment.
    However, constantly monitoring one's GPS location is wasteful in terms of battery life.
    Another option would be to ping my phone's IP address to check if it is connected to the WiFi, but smartphones can sometimes take a while to connect.
    So, I decided to use BLE advertising, which does not use too much battery and yet can remain constantly active.
</p>
<p>
    To detect my phone's BLE advertisings, I used an ESP32 for its built-in BLE capabilities.
    The ESP32's code is fairly simple: it listens for BLE advertising and gets their UUIDs.
    If the UUID matches that of my phone, it sends an MQTT message to the home automation system to tell it I'm home.
    The main challenge here was that the ESP32 cannot scan for BLE advertising and be connected to the WiFi at the same time so I had to make it connect and disconnect accordingly.
</p>
<p>
    To send BLE advertising, I made a simple android application.
    To make sure that the advertising would continue even when the phone is in sleep mode, I made the advertising as a service.
    I have almost no experience with mobile development so the application is probably riddled with bugs.
</p>


<h2> Software </h2>
<h3> ESP32 code </h3>
Available on <a href="https://github.com/maximemoreillon/BLE_presence_detection">my GitHub</a>.

<h3> Android app code </h3>
Available on <a href="https://github.com/maximemoreillon/BLE_key">my GitHub</a>.


<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
