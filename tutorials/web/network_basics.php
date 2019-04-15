<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?>

<h1>Network basics</h1>

<p>
  When data needs to be exchanged between several computers, those need to be connected to each other, i.e. forming a network.
</p>

<h2>IP addresses and netmask</h2>
<p>
  Just like a home needs an address to get mail delivered by the post office, devices of a network need a network address so that data packets can be delivered to them.
  This address has various forms but for the sake of simplicity, this tutorial will focus on the Internet Protocol (IP) address, more specifically IP v4.
</p>

<p>
    When checking one's IP address using <i>ipconfig</i> (Windows), or <i>ifconfig</i> (Linux), one often stumbles upon a series of numbers in the form 192.168.X.Y .
    Checking the IP address of another device will likely yield an address such as 192.168.X.Z.
    What is important to notice is that the first part of the IP address, i.e. 192.168.X, is the same for all devices of the network.
    Note that the result might differ for networks that are more complex than a home network, such as a company network.
</p>

<p>
    This is similar to how one's home address is almost identical to that of their neighbor's, except for the house number. Here, Y represents the device and 192.168.X the network.
</p>
<p>
    Very often, the word <i>netmask</i> appears along IP addresses in configuration menus. Most commonly, this value is set to 255.255.255.0 .
    The purpose of an IP address is fairly easy to grasp but what kind of purpose does this netmask have, and why does it look like an IP address?
</p>
<p>
    First, one must understand why IP addresses are written in the shape A.B.C.D . Here, A,B,C,D are 8bit numbers, i.e. ranging from 0 to 255.
    This is why IP addresses never have components higher than 255. As such, the IP 192.168.1.2 translates to:
</p>

<code>
    11000000.10101000.00000001.00000010
</code>

<p>
    Following our explanation above, we know that the first three 8bit numbers of the IP, i.e. 11000000.10101000.00000001 (192.168.1 in binary) correrspond to the network.
    On the other hand, the last number of the IP 00000010 (2 in binary) is the device number.
</p>

<p>
    How about the netmask 255.255.255.0? Its binary representation is:
</p>

<code>
    11111111.11111111.11111111.00000000
</code>

<p>
    The netmask has a ones at every position corresponding to the network and zeroes for every bit corresponding to the device number.
    In other words, the netmask specifies which part of the IP corresponds to the network and which part is specific to the device.
</p>

<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>
