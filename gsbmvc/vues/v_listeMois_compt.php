 <div id="contenu">
      <h2>validation des fiches de frais</h2>
      <h3>Visiteur et mois à sélectionner : </h3>
            <form action="index.php?uc=etatFrais&action=voirEtatFrais" method="post">
      <div class="corpsForm">
      <form action="index.php?uc=etatFrais&action=voirEtatFrais" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="lstMois" accesskey="n">Mois : </label>
        <select id="lstMois" name="lstMois">
            <?php
			foreach ($lesMois as $unMois)
			{
			    $mois = $unMois['mois'];
				$numAnnee =  $unMois['numAnnee'];
				$numMois =  $unMois['numMois'];
				if($mois == $moisASelectionner){
				?>
				<option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}