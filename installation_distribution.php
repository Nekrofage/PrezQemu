				<section>
					<h2>Installation de la distribution</h2>
					<p>
<pre><code class="hljs" data-trim contenteditable>
[~/QEMU] ➔ qemu-system-i386 -enable-kvm -k fr -m 1024 -sdl \
-soundhw hda,ac97 -vga std -hda vhda.img -cdrom tahr-6.0.2_noPAE.iso 
\-boot d -net nic,model=rtl8139 -net user -smp 2 -localtime
</code></pre>
	                </p>
				</section>

