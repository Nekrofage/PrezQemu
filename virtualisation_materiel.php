				<section>
					<h2></h2>
					<p>Vérification de la capacité de virtualisation par le processeur
<pre><code class="hljs" data-trim contenteditable>
[~] ➔ egrep --color "(vmx|svm)" /proc/cpuinfo
[~] ➔ dmesg | grep kvm
</code></pre>
svm = processeur AMD<br/>
vmx = processeur Intel
	                </p>
				</section>

