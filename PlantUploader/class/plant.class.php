<?php

class Plant {
	// Identificatie
	public $id;
	public $name;
	public $family;
	public $img;

	// Onderhoud
	public $humidity;
	public $water;
		public $waterWinter;
		public $waterSummer;
	public $acidityMin;	//ph-values
	public $acidityMax;

	public $sun;
	public $tempMin;
	public $tempMax;

	// Verzorging
	public $nutritionWhat; 	//npk
	public $nutritionWhen;
	public $nutritionFreq;

	public $pruningWhat; 		//snoeien
	public $pruningWhen;

	public $repotWhen;
	public $repotFreq;

	// Info
	public $toxicity;
	public $extra;	

}

?>