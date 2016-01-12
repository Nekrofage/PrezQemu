<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Présentation de Qemu</title>

		<meta name="description" content="A framework for easily creating beautiful presentations using HTML">
		<meta name="author" content="Hakim El Hattab">

		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/black.css" id="theme">

		<!-- Code syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">
			
			    <?php include("couverture.php"); ?>

			    <?php //include("sommaire.php"); ?>
                
                <section>
                    <?php include("introduction.php"); ?>
		    
			        <?php include("presentation.php"); ?>
		
			        <?php include("terminologie.php"); ?>
			            			    
			        <?php include("avantage.php"); ?>			    			    
			    
			        <?php include("inconvenient.php"); ?>			    			    

                    <?php include("fonctionnement.php"); ?>			    
			    </section>			    
                
                <section>

                			<section>
					         <h2>Virtualisation matériel</h2>
					            <p>
                        
	                            </p>
				            </section>



                   <?php include("virtualisation_materiel.php"); ?>
                
                    <?php include("activation_virtualisation_materiel.php"); ?>

                </section>
                
                <section>
                			<section>
					         <h2>Installation de Qemu</h2>
					            <p>
                        
	                            </p>
				            </section>

                    <?php include("installation_qemu.php"); ?>
                </section>
                
                  <section>
                  
                			<section>
					         <h2>Installation de la distribution</h2>
					            <p>
                        
	                            </p>
				            </section>                  
                  
                <?php include("telechargement_distribution.php"); ?>
                
                 <?php include("creation_image_disque.php"); ?>
                 
                 <?php include("installation_distribution.php"); ?>
                 
                 <?php include("lancement.php"); ?>
                 
                  <?php include("capture_ecran.php"); ?>
                  </section>
                  
                  <?php include("ze_end.php"); ?>

                  <?php include("lien.php"); ?>
             
                  <section>
                  
                			<section>
					         <h2>Bibliographie</h2>
					            <p>
                        
	                            </p>
				            </section>                     
                  <?php include("biblio_mag.php"); ?>
                  <?php include("biblio_livre.php"); ?>
                   </section>
                   
                                    
                    <section>
                   			<section>
					         <h2>Réseau</h2>
					            <p>
                        
	                            </p>
				            </section>        
                  <?php include("reseau_paquetage.php"); ?>

                  <?php include("reseau.php"); ?>
                   </section>


                    <section>
                   			<section>
					         <h2>Instantané/Snapshot</h2>
					            <p>
                        
	                            </p>
				            </section>        
                  <?php include("snapshot.php"); ?>
                  <?php include("snapshot1.php"); ?>
                  <?php include("snapshot2.php"); ?>
                 <?php include("snapshot3.php"); ?>
                   </section>


                 <?php include("qcow2.php"); ?>



			</div>

		</div>

		<script src="lib/js/head.min.js"></script>
		<script src="js/reveal.js"></script>

		<script>

			// Full list of configuration options available at:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,

				transition: 'slide', // none/fade/slide/convex/concave/zoom

				// Optional reveal.js plugins
				dependencies: [
					{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: 'plugin/zoom-js/zoom.js', async: true },
					{ src: 'plugin/notes/notes.js', async: true }
				]
			});

		</script>

	</body>
</html>
