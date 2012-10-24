<?php

function dlvs_translate($key) {

	// English 
	$english_list = array();

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
		"Get it in" => "Hent den i",								// frontpage streamer
		"Capital" => "Hovedstad",									// country
		"Population" => "Indbyggere",								// country
		"to learn more about the recommended vaccinations." => "for at lære mere om landet og anbefalede vaccinationer.", // region
		"Choose country" => "Vælg land",							// country selector dropdown
		"or click on the map" => "eller klik på kortet",			// recommendation map
		"Opening hours" => "Åbningstider",							// clinic
		"Clinics location" => "Se klinikken på kort",				// clinic
		"Phone" => "Telefon",										// clinic
		"Show full-screen map" => "Vis stort kort",					// clinic
		"Type to search" => "Skriv for at søge",					// faq
		"Updated Malaria Map" => "Opdateret Malaria kort",			// Country
		"Latest Disease Surveillance" => "Sidste sygdomsovervågning"
	);

	// get english translation
	if(current_language() == "en"){
		$translated = $english_list[$key];

	// get Danish translation
	}else{
		$translated = $danish_list[$key];
	}

	if(!$translated){
		$translated = $key;
	}

	return $translated;
}