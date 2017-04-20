<?php
require(ROOT . "model/KalenderModel.php");
function index()
{
 	$months = array("januari" , "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");
	render("kalender/index", array(
		'birthdays' => getAllBirthdays(),
		'months' => $months));
}
function create()
{
	render("kalender/create");
}
function createSave()
{
	if (!createBirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "kalender/index");
}
function edit($id)
{
	render("kalender/edit", array(
		'birthday' => getBirthday($id)
	));
}
function editSave()
{
	if (!editBirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "kalender/index");
} 
function delete($id)
{
	if (!deleteBirthday($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "kalender/index");
}