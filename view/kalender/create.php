<div class="container">
	<h1>Create Birthday</h1>
	
	<form action="<?= URL ?>birthday/createSave" method="post">
	
		<input type="text" name="persoon" placeholder="Adje">
		<input type="text" name="dag" placeholder="2">
		<input type="text" name="maand" placeholder="2">
		<input type="text" name="jaar" placeholder="1998">

		<input type="submit" value="Verzenden">
	
	</form>

</div>