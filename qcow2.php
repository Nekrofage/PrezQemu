				<section>
					<h2>Format 'qcow2'</h2>
					<p>
<ul>
	    <li>COW : Mode "Copy-On-Write"</li>
        <li>Aucune modification n’est appliquée à l’image disque</li> 
        <li>Toutes les modifications sont consignées dans un fichier séparé préservant l’image originale</li> 
        <li>Plusieurs fichiers COW peuvent pointer vers la même image</li>
        <li>QEMU/KVM permet d’intégrer les modifications d’un fichier COW à l’image d’origine.</li>
<ul>
					</p>
					
				</section>

