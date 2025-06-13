<?php
	define("TITLE", "Home");

    include('includes/arr_prov_nl.php');
    include('includes/arr_prov_be.php');
    include('includes/array_tips.php');
  	include('includes/header.php');
?>

	<div class="container">
		<!-- Jumbotron Header -->
		<header class="jumbotron my-4 text-center">
  		<h1>Sex55.net - Vind hier jouw gratis sexdate!</h1>
  		<hr>
      <h2>Zoek hier vrouwen bij jou in buurt!</h2>
      <div class="button-area">
        <a class="dropdown-toggle btn btn-primary" href="#" id="provDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nederland</a>
        <div class="dropdown-menu" aria-labelledby="provDropdown">
          <?php
            foreach ($navItems as $item) {
                echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
            }
          ?>
        </div>
      </div>
      <div class="button-area">
        <a class="dropdown-toggle btn btn-primary" href="#" id="provDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">België</a>
        <div class="dropdown-menu" aria-labelledby="provDropdown">
          <?php
            foreach ($navItems2 as $item2) {
                echo "<a class=\"dropdown-item\" href=\"$item2[slug]\">$item2[title]</a>";
            }
          ?>
        </div>
      </div>
  		<p><a href="index.php">Sex55.net</a> is de contactadvertentie website om <b>snel en gratis</b> in contact te komen met jonge <b>vrouwen bij jou in de buurt</b>. Hier kun je jezelf <b>anoniem en gratis inschrijven</b> met een zelfgekozen profielnaam. Ook blijft je e-mailadres altijd geheim voor andere leden. Voor wie echt helemaal anoniem wil blijven, bestaat de mogelijkheid om geen foto op het profiel te tonen.</p>
      <p>Of je nou bewust op zoek bent naar een eenmalige sexdate of geregeld wil afspreken met dames voor een meerdere sexdates? Op <a href="index.php">Sex55.net</a> vind je <b>meer dan 10.000 single vrouwen die openstaan voor een sexdate</b>. Duizenden singles zijn op dit moment op zoek naar een sexdate, een sexpartner of meerdere sexdates. Van zoeken naar een sexdate binnen enkele dagen, gelijk sex bij jou in de buurt tot meerdere sexdates in een week. Bij <a href="index.php">Sex55.net</a> heb jij het snelst een sexdate in de BeNeLux! Kies in welk land jij wil zoeken naar een sexdate.</p>
		</header>

    <div id="top-banner"></div>

    <h2 class="jumbotron text-center" id="nederland">Nederland</h2>
		<div class="row text-center" id="keuze">
			<?php 
				foreach ($nl as $provnl => $item) {
			?>
			<div class="col-lg-3 col-md-6 mb-4">
	      <div class="card h-100 text-left">
	        <a href="sexdates-<?php echo $provnl; ?>"><img class="card-img-top" src="img/front/<?php echo $item['img']; ?>.jpg" alt="Sexdate <?php echo $item['name']; ?>"></a>
	        <div class="card-body">
	          <a href="sexdates-<?php echo $provnl; ?>"><h4 class="card-title"><?php echo $item['name']; ?></h4></a>
	          <hr>
	          <p class="card-text"><?php echo $item['info']; ?></p>
	        </div>
	        <a href="sexdates-<?php echo $provnl; ?>" class="card-footer btn btn-primary">Sexdate <?php echo $item['name']; ?></a>
	      </div>
	    </div>
			<?php
				}
			?>
		</div>

    <h2 class="jumbotron text-center" id="belgie">België</h2>
    <div class="row text-center" id="keuze">
      <?php 
        foreach ($be as $provbe => $item) {
      ?>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100 text-left">
          <a href="sexdate-<?php echo $provbe; ?>"><img class="card-img-top" src="img/front/<?php echo $item['img']; ?>.jpg" alt="Sexdate <?php echo $item['name']; ?>"></a>
          <div class="card-body">
            <a href="sexdate-<?php echo $provbe; ?>"><h4 class="card-title"><?php echo $item['name']; ?></h4></a>
            <hr>
            <p class="card-text"><?php echo $item['info']; ?></p>
          </div>
          <a href="sexdate-<?php echo $provbe; ?>" class="card-footer btn btn-primary">Sexdate <?php echo $item['name']; ?></a>
        </div>
      </div>
      <?php
        }
      ?>
    </div>
    <div id="footer-banner"></div>
    <div class="jumbotron text-center">
        <h6>Nederland</h6>
        <a href="https://buurtmilfs.nl" target="_blank" class="m-0" title="BuurtMilfs.nl - Vind Milfs in Jouw Buurt voor Contact!">BuurtMilfs</a> - 
        <a href="https://bd4xxx.nl" target="_blank" class="m-0" title="BD4XXX.nl - Ervaar Spanning en Sensualiteit in Nederland!">BD4XXX</a> - 
        <a href="https://sletplaats.nl" target="_blank" class="m-0" title="Sletplaats.nl - Contacten en Volwassen Plezier in Nederland!">Sletplaats</a> - 
        <a href="https://stout-contact.nl" target="_blank" class="m-0" title="Stout-Contact.nl - Stout en Spannend Contact in Nederland!">Stout Contact</a> - 
        <a href="https://oudevrouwenchat.nl" target="_blank" class="m-0" title="OudeVrouwenChat.nl - Chat met Rijpe Dames in Nederland">Oude Vrouwen Chat</a> - 
        <a href="https://rijpeomachat.nl" target="_blank" class="m-0" title="RijpeOmaChat.nl - Chat met Ervaren Dames in Nederland">Rijpe Oma Chat</a> - 
        <a href="https://rijpemilfchat.nl" target="_blank" class="m-0" title="RijpeMilfChat.nl - Chat met Ervaren Milfs in Nederland">Rijpe Milf Chat</a> - 
        <a href="https://rijpemilfmarkt.nl" target="_blank" class="m-0" title="RijpeMilfMarkt.nl - Markt voor Ervaren Milfs in Nederland">Rijpe Milf Markt</a> - 
        <a href="https://milfmarkt.nl" target="_blank" class="m-0" title="MilfMarkt.nl - Markt voor Contact met Milfs in Nederland">Milf Markt</a> - 
        <a href="https://hetebuurvrouwen.nl" target="_blank" class="m-0" title="HeteBuurVrouwen.nl - Contact met Buurvrouwen in Nederland">Hete Buurvrouwen</a> - 
        <a href="https://slettenchat.nl" target="_blank" class="m-0" title="SlettenChat.nl - Chat met Geile Sletten in Nederland">Sletten Chat</a> - 
        <a href="https://kinkycontacten.nl" target="_blank" class="m-0" title="KinkyContacten.nl - Ontdek Kinky contacten in Nederland">Kinky Contacten</a>
        <hr>
        <h6>België</h6>
        <a href="https://buurtmilfs.be" target="_blank" class="m-0" title="BuurtMilfs.be - Vind Milfs in Jouw Buurt voor Contact!">BuurtMilfs</a> - 
        <a href="https://bd4xxx.be" target="_blank" class="m-0" title="BD4XXX.be - Ervaar Spanning en Sensualiteit in België!">BD4XXX</a> - 
        <a href="https://sletplaats.be" target="_blank" class="m-0" title="Sletplaats.be - Contacten en Volwassen Plezier in België!">Sletplaats</a> - 
        <a href="https://stout-contact.be" target="_blank" class="m-0" title="Stout-Contact.be - Stoute en Spannende Connecties in België!">Stout Contact</a> - 
        <a href="https://oudevrouwenchat.be" target="_blank" class="m-0" title="OudeVrouwenChat.be - Chat met Rijpe Dames in België">Oude Vrouwen Chat</a> - 
        <a href="https://rijpeomachat.be" target="_blank" class="m-0" title="RijpeOmaChat.be - Chat met Ervaren Dames in België">Rijpe Oma Chat</a> - 
        <a href="https://rijpemilfchat.be" target="_blank" class="m-0" title="RijpeMilfChat.be - Chat met Ervaren Milfs in België">Rijpe Milf Chat</a> - 
        <a href="https://rijpemilfmarkt.be" target="_blank" class="m-0" title="RijpeMilfMarkt.be - Markt voor Contact met Milfs in België">Rijpe Milf Markt</a> - 
        <a href="https://milfmarkt.be" target="_blank" class="m-0" title="MilfMarkt.be - Contactmarkt voor Geile Milfs in België">Milf Markt</a> - 
        <a href="https://hetebuurvrouwen.be" target="_blank" class="m-0" title="HeteBuurVrouwen.be - Chat met Hete Buurvrouwen in België">Hete Buurvrouwen</a> - 
        <a href="https://slettenchat.be" target="_blank" class="m-0" title="SlettenChat.be - Chatten met Geile Sletten in België">Sletten Chat</a> - 
        <a href="https://kinkycontacten.be" target="_blank" class="m-0" title="KinkyContacten.be - Ontdek Kinky Contacten in België">Kinky Contacten</a>
        <hr>
        <h6>United Kingdom</h6>
        <a href="https://mymilfmatch.com" target="_blank" class="m-0" title="MyMilfMatch.com - Discover Your Ideal Connection with MILF!">MyMilfMatch</a> - 
        <a href="https://mymatureflirt.com" target="_blank" class="m-0" title="MyMatureFlirt.com - Connect with Mature Singles Flirt Today!">MyMatureFlirt</a> - 
        <a href="https://secretsexchat.com" target="_blank" class="m-0" title="SecretsexChat.com - Private Chats in a Discreet Setting!">SecretsexChat</a> - 
        <a href="https://milfsexchat.co.uk" target="_blank" class="m-0" title="MilfSexChat.co.uk - Engage in Milf Chats in the UK!">MilfSexChat</a> - 
        <a href="https://maturesexchat.co.uk" target="_blank" class="m-0" title="MatureSexChat.co.uk - Explore Mature Chat in the UK!">MatureSexChat</a> - 
        <a href="https://maturetemptations.co.uk" target="_blank" class="m-0" title="MatureTemptations.co.uk - Tempting Encounters in the UK!">MatureTemptations</a> - 
        <a href="https://milftemptations.co.uk" target="_blank" class="m-0" title="MilfTemptations.co.uk - Satisfying Temptations in the UK!">MilfTemptations</a> - 
        <a href="https://secrethookups.co.uk" target="_blank" class="m-0" title="SecretHookupsUK.co.uk - Find Discreet Connections in the UK">SecretHookupsUK</a> - 
        <a href="https://discreethookups.co.uk" target="_blank" class="m-0" title="DiscreetHookupsUK.co.uk - Private Connections in the UK">DiscreetHookupsUK</a> - 
        <a href="https://myhookups.co.uk" target="_blank" class="m-0" title="MyHookupsUK.co.uk - Connecting for Hookups in the UK!">MyHookupsUK</a> - 
        <a href="https://discreetsexfinder.co.uk" target="_blank" class="m-0" title="DiscreetSexFinder.co.uk - Find Private Encounters in the UK">DiscreetSexFinder</a> - 
        <a href="https://secretsexfinder.co.uk" target="_blank" class="m-0" title="SecretSexFinder.co.uk - Find Discreet Connections in the UK">SecretSexFinder</a>
        <hr>
        <h6>Deutschland</h6>
        <a href="https://ficklokal.com" target="_blank" class="m-0" title="Ficklokal.com - Finde einen guten Fick in deiner Gegend">Ficklokal</a> - 
        <a href="https://hitzigemilfs.com" target="_blank" class="m-0" title="HitzigeMilfs.com - Finde heiße MILFs in Deiner Nähe heute!">HitzigeMilfs</a> - 
        <a href="https://lustigemilfs.com" target="_blank" class="m-0" title="LustigeMilfs.com - Spaß mit MILFs in Deiner Nähe heute!">LustigeMilfs</a> - 
        <a href="https://reifefrauenchat.com" target="_blank" class="m-0" title="ReifeFrauenChat.com - Chat mit reifen Frauen in Deiner Nähe!">ReifeFrauenChat</a> - 
        <a href="https://reifefrauenfinder.com" target="_blank" class="m-0" title="ReifeFrauenFinder.com - Finde reife Frauen in Deiner Nähe!">ReifeFrauenFinder</a> - 
        <a href="https://reifemilfkontakte.com" target="_blank" class="m-0" title="ReifeMilfKontakte.com - Reife MILFs in Deiner Nähe finden!">ReifeMilfKontakte</a> - 
        <a href="https://reifemilfchat.com" target="_blank" class="m-0" title="ReifeMilfChat.com - Chatte mit reifen MILFs in Deiner Nähe!">ReifeMilfChat</a> - 
        <a href="https://sexchatfinden.com" target="_blank" class="m-0" title="SexChatFinden.com - Finde Sex-Chats in Deiner Nähe heute!">SexChatFinden</a> - 
        <a href="https://ficksingles.com" target="_blank" class="m-0" title="FickSingles.com - Heiße Singles für Spaß in Deiner Nähe!">FickSingles</a> - 
        <a href="https://lustfinden.com" target="_blank" class="m-0" title="LustFinden.com - Finde Lust & Spaß in Deiner Nähe heute!">LustFinden</a> - 
        <a href="https://geheimesexchat.com" target="_blank" class="m-0" title="GeheimerSexChat.com - Diskreter Sex-Chat in Deiner Nähe!">GeheimerSexChat</a> - 
        <a href="https://geheimelustchat.com" target="_blank" class="m-0" title="GeheimeLustChat.com - Diskreter Lust-Chat in Deiner Nähe!">GeheimeLustChat</a>
    </div>
</div><!-- container -->
<?php
  	include('includes/footer.php');
?>