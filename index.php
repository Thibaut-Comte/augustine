<?php include_once('inc/bdd_conf.php');
      include_once('inc/fonctions.php');
?>
<?php include_once('inc/header.php'); ?> 
<body>

<!--Fleche go top-->
<a style="display: scroll; position: fixed; bottom: 20px; right: 20px;" href="#" title="Retour haut de page"><img src="img/fleche_haut.png" class="fleche_top"/></a>

<?php include_once('inc/menu.php'); ?>
<div class="container">

	<div class="background">
	<!-- <p><img src="img/banniere.jpg"  alt=""></p>-->

	<div id="my_carousel" class="carousel slide" data-ride="carousel">
		<!-- Bulles -->
		<ol class="carousel-indicators">
			<li data-target="#my_carousel" data-slide-to="0" class="active"></li>
			<li data-target="#my_carousel" data-slide-to="1"></li>
			<li data-target="#my_carousel" data-slide-to="2"></li>

		</ol>
		<!-- Slides -->
		<div class="carousel-inner">
			<!-- Page 1 -->
			<div class="item active">
				<div class="carousel-page">
				<img src="img/2011.png" class="img-responsive" 
					style="margin:0px auto;" />
				</div>
				<div class="carousel-caption"></div>
			</div>
			<!-- Page 2 -->
			<div class="item">
				<div class="carousel-page">
				<img src="img/2012.png" class="img-responsive img-rounded"
					style="margin:0px auto;" /></div>
				<div class="carousel-caption"></div>
			</div>
			<!-- Page 3 -->
			<div class="item">
				<div class="carousel-page">
				<img src="img/2013.jpg" class="img-responsive img-rounded"
					style="margin:0px auto;max-height:100%;" />
				</div>
				<div class="carousel-caption"></div>
				</div>
			</div>

			<!-- Contrôles -->
			<a class="left carousel-control" href="#my_carousel" data-slide="prev">
				<span class="icon-prev fa fa-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#my_carousel" data-slide="next">
				<span class="icon-next fa fa-chevron-right"></span>
			</a>
		</div>
	<!-- Présentation de Augustine -->

	<div>
		<div class="container">   
   
			<div class="row">

				<div class="page-header">
				    <h2>Augustine</h2>
				</div>
					<p>
					    Ce projet est née par l'association de deux lyc&eacutees. Le <a
					        href="http://www.vinci-melun.org">lyc&eacutee L&eacuteonard de Vinci</a><!--space-->
					    de Melun (BTS CPI et BAC Pro technicien d'usinage), qui se concentre sur la conception de la coque.
					    <!--space-->
					    Et le <a href="http://www.diderot.org">lycée Diderot</a> de Paris (BTS IRIS) qui se
					    concentre sur la partie &eacutel&eacutectronique de la voiture.
					</p>
					<br/>

					<p>
					    Mais d'où vient le nom de ce projet "Augustine"?
					    <br/>
					    <br/>
					    Augustin... Augustine. Ce nom vient tout simplement de <a href="http://fr.wikipedia.org/wiki/Augustin_Mouchot" target="_blank">Augustin Mouchot</a>
						, l'homme qui a invent&eacute le capteur solaire.
					</p>
			</div>
  
		</div>


		<div class="container">
			<div class="row">
				<div class="page-header">
					<h2>Challenge EducEco</h2>
				</div>

				    <p>
				        Le but de ce challenge est de consommer le moins d'&eacutenergie possible pour parcourir 17,14Km avec
				        une vitesse moyenne <!--space-->
				        minimum de 25Km/h.
				        <br/>
				        une demie-journ&eacutee est r&eacuteserv&eacutee &agrave la d&eacutecouverte de la piste et aux essais
				        libres. Les <!--space-->
				        contraintes du circuit urbain ne sont pas celles d'une piste de circuits automobile ainsi, les
				        v&eacutehicules seront appel&eacutes <!--space-->
				        par groupes homog&egravene class&eacutes selon:
				    </p>
				    <ul>
				        <li>Le groupe	 des v&eacutehicules &eacuteco-citadins (tous vecteurs d'&eacutenergie);</li>
				        <li>Le groupe des v&eacutehicules prototypes thermiques (tous carburants);</li>
				        <li>Le groupe des v&eacutehicules prototype &eacutelectriques.</li>
				    </ul>
				    <p> Pour un acc&egraves au site <a href="http://www.educeco.net/" target="_blank">Cliquez ici</a></p>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="page-header">
				    <h2>Association Tournesol</h2>
				</div>
					<p>
					</p>
		    </div>
		</div>
		</div>
</div>

<?php include_once('inc/footer.php');?>
