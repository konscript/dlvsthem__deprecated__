<?php

function dlvs_translate($key) {

	// English 
	$english_list = array(
		"Bestil vaccination" => "Book vaccination",
		"Price" => "Price",
	);

	// Danish translations
	$danish_list = array(
		"Bestil vaccination" => "Bestil Vaccination",
		"Price" => "Pris",
		"Quantity" => "Antal",
		"Protection" => "Beskyttelse",
		'Vaccination content' => 'Vaccine indhold',
		'Who should be vaccinated?' => 'Hvem bør vaccineres?',
		'Vaccine dose' => 'Vaccine dosis',
		'Who should not be vaccinated?' => 'Hvem bør ikke vaccineres?',
		"Pregnancy and breastfeeding" => "Graviditet og amning",
		"Duration of immunity" => "Beskyttelsestid",
		"Side effects" => "Bivirkninger"

	);

	if(current_language() == "en"){
		$translated = $english_list[$key];
	}else{
		$translated = $danish_list[$key];
	}

	if(!$translated){
		$translated = $key;
	}

	return $translated;
}