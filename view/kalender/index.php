<?php
	$currentMonth = null; 
?>

<div class="container">
		        <?php foreach($birthdays as $birthday){ ?>

		        <?php	 	
			        if  ($currentMonth != $months[$birthday["month"]-1]){
			        	$currentMonth = $months[$birthday["month"]-1];
			        	echo '<h1>';echo $months[$birthday["month"]-1]; echo '</h1>';
			        	}
			        ?>

			        	<h2><?php echo $birthday["day"]; ?></h2>
						<a href="<?= URL ?>kalender/edit>" <?php echo $birthday["id"]; ?>"><?php echo $birthday["person"] ?></a>
		  				<a href="<?= URL ?>kalender/delete" <?php echo $birthday["id"]; ?>"> x </a>
		  			<p>(<?php echo $birthday["year"]; ?>)</p>
			      

				<?php } ?>

				<p><a href="<?= URL ?>kalender/create">+ toevoegen</a></p>
</div>