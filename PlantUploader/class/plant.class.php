<?php

class Plant {
	// Identificatie
	private $id;
	private $name;
	private $family;
	private $img;

	// Onderhoud
	private $humidity;
	private $water;
		private $waterWinter;
		private $waterSummer;
	private $acidityMin;	//ph-values
	private $acidityMax;

	private $sun;
	private $tempMin;
	private $tempMax;

	// Verzorging
	private $nutrition; 	//npk
	private $pruning; 		//snoeien
	private $repotting;

	// Info
	private $toxicity;
	private $extra;	

}

?>