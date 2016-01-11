				<section>
					<h2>Lancement</h2>
					<p>
<pre><code class="hljs" data-trim contenteditable>
[~/QEMU] ➔ qemu-system-i386 -enable-kvm -k fr -m 1024 -sdl  \
-soundhw hda,ac97 -vga std -hda vhda/vhda.img -boot c -smp 2 -localtime \
-net nic,macaddr=$MACADDRESS -net tap,ifname=tap0,script=no \
-no-quit
</code></pre>
	                </p>
				</section>

