				<section>
					<h2>Répertoire de travail</h2>
					<p>
<pre><code class="hljs" data-trim contenteditable>
[~] ➔ mkdir -p QEMU
[~] ➔ cd QEMU/
[~/QEMU] ➔ 
</code></pre>
	                </p>
				</section>


				<section>
					<h2>Téléchargement de l'archive du code source Qemu</h2>
					<p>
<pre><code class="hljs" data-trim contenteditable>
[~/QEMU] ➔ wget http://wiki.qemu-project.org/download/qemu-2.5.0.tar.bz2
[~/QEMU] ➔ tar xvfj qemu-2.5.0.tar.bz2 
</code></pre>
	                </p>
				</section>


				<section>
					<h2>Compilation de Qemu</h2>
					<p>
<pre><code class="hljs" data-trim contenteditable>
[~/QEMU] ➔ cd qemu-2.5.0/
[~/QEMU/qemu-2.5.0] ➔ ./configure  --target-list="i386-softmmu" && make && sudo make install && sudo /sbin/ldconfig
[~/QEMU/qemu-2.5.0] ➔ qemu-system-i386 --version
QEMU emulator version 2.5.0, Copyright (c) 2003-2008 Fabrice Bellard
[~/QEMU/qemu-2.5.0] ➔ cd ..
</code></pre>
	                </p>
				</section>

