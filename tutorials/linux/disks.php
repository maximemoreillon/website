<?php include $_SERVER["DOCUMENT_ROOT"].'/includes/pre_main.php'; ?> 

<h1> DISKS </h1>
<p>
				Hard disk drives (HDDs) and Solid state drives (SSDs) are currently the most widespread high capacity storage devices.
				When such a drive is connected to a computer running Linux, it can be found in the device directory <i>/dev/</i> under the name <i>sdX</i>, where <i>X</i> is a letter changing for each drive.
			</p>
<h2>Partitions</h2>
<p>
				The memory of a HDD can be split into multiple partitions. This can be useful to install several operating systems on a single HDD.
				In Linux, partitions are listed by adding a number after the drive name. Thus, the 3rd partition of the drive <i>sdb</i> can be found at <i>/dev/sdb3</i>.
				Drives and partitions can be listed using the fdisk tool with root privileges, using the option <i>l</i>:
			</p>
<pre><code>sudo fdisk -l</code></pre>
<p>
<i>fdisk</i> can also be used to edit partitions. However, newer tools like <i>parted</i> might be more appropriate for this purpose.
				<i>parted</i> offers an interactive interface to create and delete partitions on a drive. <i>parted</i> can be started using the parted command.
				It is recommended to specify which drive to work for example for the drive sdc:
			</p>
<pre><code>sudo parted /dev/sdc</code></pre>
<p>
				A new partition can be created using the <i>mkpart</i> command.
				<i>parted</i> will ask for the required parameters such as partition name, start and end. Note that the name of the partition does not constitute its label.
				I usually use <i>primary</i> as name when creating a single partition spanning the whole drive.
				Additionally, for reasons I haven't studied, a partition cannot be made to begin at the very first memory sector of the drive and its start point cannot be made aribrary.
				On the Seagate Barracuda HDD I own, setting the start and end points at 2048s and 100% happened to work.
			</p>
<p>
				The way partitions are structured is described in the drive's label. A new label can be created with <i>parted</i> using <i>mklabel</i>.
				Note that doing so basically tells the drive to forget all about the previous content.
				Different label types exist but GPT seems on its way to become the new standard.
			</p>
<h2>File systems</h2>
<p>
				If a partition of an HDD is to be used to store files, a file system needs to be installed on the former.
				A popular Linux file system is ext4. which can be installed on a partition (here <i>/dev/sda1</i> for example) using the <i>mkfs</i> (make file system) command:
			</p>
<pre><code>mkfs.ext4 /dev/sda1 -L MY_LABEL</code></pre>
<p>
				Here, the <i>L</i> option allows the user to choose a label for the file system.
				Setting a label can be useful to automated the mounting of drives using fstab.
				Creating a file system on a partition will mark all the available memory of the partition as free.
				Thus, the data which was previously stored there is considered as erased by the drive and will be written over when files are stored.
			</p>
<p>
				Once a filesystem is installed on the partition of a HDD, files can be transfered to it.
				Usually, files are being transferred to a HDD from a computer, running an OS with its own file system.
				Thus, the root of the HDD's file system needs to be made accessible from the computer's.
				This process is called mounting. Mounting a drive basically puts its filesystem's root into a directory of the computer's filesystem.
				The command used to mount drive is, simply enough, <i>mount</i>.
				For example, the filesystem contained within the 3rd partition of the drive <i>sda</i> can be mounted in the directory <i>/mnt/mydir</i> using:
			</p>
<pre><code>mount /dev/sda3 /mnt/mydir</code></pre>
<p>
				By default, the mounting process has to be done manually when a drive is connected to the computer. However, this can be automated using <i>fstab</i>.
				<i>fstab</i> lists known drives and their mounting location so it can be consulted by the system on boot or when a drive is connected.
				Thus, setting automatic mounting for a drive is as simple as adding an entry to <i>fstab</i>.
				Here's an example fstab entry that mounts the ext4 formatted drive identified by the label <i>MY_HDD</i> at <i>/mnt/mydrive</i>.
				I haven't studied the role of the other options.
			</p>
<pre><code>LABEL=MY_HDD  /mnt/mydrive  ext4  defaults,nofail,noatime 0 0</code></pre>
<h2>Check read and write speed</h2>
<p>
				Finally, when dealing with storage devices such as hard drives, it can be useful to know wether they're delivering their full potential in terms of writing speed.
				This can be done by writing a massive file to the drive and measure how long the process takes.
				The command <i>dd</i> can take care of this to provide accurate results. Here is an usage example:
			</p>
<pre><code>dd if=/dev/zero of=/mnt/hdd/output bs=8k count=100k</code></pre>
<p>
				This will create a file full of zeros called output on the root of a hard drive mounted at /mnt/hdd.
				Here, /mnt/hdd is to be replaced to wherever the hard drive is mounted.
			</p>
<p>
				The file created can then be used to test the reading speed of the drive. This can be done using the following command:
			</p>
<pre><code>dd if=/mnt/hdd/output of=/dev/null bs=8k</code></pre>
<p>
				What this command does it actually measure how long it takes to send the content of the test file to /dev/null
			</p>

 <?php include $_SERVER["DOCUMENT_ROOT"].'/includes/post_main.php'; ?>