				<section>
					<h2>Configuration réseau</h2>
					<p>
<pre><code class="hljs" data-trim contenteditable>
$ sudo tunctl -u util01 -t tap0 

$ sudo ifconfig eth0 0.0.0.0 promisc up
$ sudo ifconfig tap0 0.0.0.0 promisc up

$ sudo brctl addbr br0
$ sudo brctl stp br0 off

$ sudo brctl addif br0 eth0
$ sudo brctl addif br0 tap0

$ sudo ifconfig br0 192.168.1.10 netmask 255.255.255.0
$ sudo route add default gw 192.168.1.1

$ sudo brctl show
</code></pre>
	                </p>
				</section>

