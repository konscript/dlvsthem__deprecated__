<?php

function dlvs_translate($key) {

	// English 
	$english_list = array(
	);

	// Danish translations
	$danish_list = array(
		"Book vaccination" => "Bestil Vaccination",					// booking button
		"Price" => "Pris",											// vaccination
		"Quantity" => "Antal",										// vaccination
		"Protection" => "Beskyttelse",								// vaccination
		'Vaccination content' => 'Vaccine indhold',					// vaccination
		'Who should be vaccinated?' => 'Hvem bør vaccineres?',		// vaccination
		'Vaccine dose' => 'Vaccine dosis',							// vaccination
		'Who should not be vaccinated?' => 'Hvem bør ikke vaccineres?',// vaccination
		"Pregnancy and breastfeeding" => "Graviditet og amning",	// vaccination
		"Duration of immunity" => "Beskyttelsestid",				// vaccination
		"Side effects" => "Bivirkninger",							// vaccination
		"New mobile app" => "Ny mobil app", 						// frontpage streamer
		"free of charge" => "helt gratis",							// frontpage streamer
		"bring your doctor with you." => "tag lægen med på rejsen.", // frontpage streamer
		"Get it in" => "Hent den i"									// frontpage streamer
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