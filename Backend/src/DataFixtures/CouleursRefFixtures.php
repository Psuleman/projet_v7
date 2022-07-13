<?php

namespace App\DataFixtures;

use App\Entity\CouleurRef;



use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CouleursRefFixtures extends Fixture
{
	public function load(ObjectManager $manager): void
	{

		$couleursRef =[["couleur_ref"=>"Argenté", "couleur_ref_en"=>""], 
		["couleur_ref"=>"Beige", "couleur_ref_en"=>"Beige"], 
		["couleur_ref"=>"Blanc", "couleur_ref_en"=>"White"], 
		["couleur_ref"=>"Bleu", "couleur_ref_en"=>"Blue"], 
		["couleur_ref"=>"Bleu Marine", "couleur_ref_en"=>"Navy blue"], 
		["couleur_ref"=>"Bordeaux", "couleur_ref_en"=>"Burgundy"], 
		["couleur_ref"=>"Bronze", "couleur_ref_en"=>"Bronze"], 
		["couleur_ref"=>"Camel", "couleur_ref_en"=>"Camel"], 
		["couleur_ref"=>"Doré", "couleur_ref_en"=>"Golden"], 
		["couleur_ref"=>"Gris", "couleur_ref_en"=>"Grey"], 
		["couleur_ref"=>"Imprimé", "couleur_ref_en"=>"Printed"], 
		["couleur_ref"=>"Jaune", "couleur_ref_en"=>"Yellow"], 
		["couleur_ref"=>"Kaki", "couleur_ref_en"=>"Khaki"], 
		["couleur_ref"=>"Marron", "couleur_ref_en"=>"Brown"], 
		["couleur_ref"=>"Multicolore", "couleur_ref_en"=>"Multicolor"], 
		["couleur_ref"=>"Neutre", "couleur_ref_en"=>"Neutral"], 
		["couleur_ref"=>"Noir", "couleur_ref_en"=>"Black"], 
		["couleur_ref"=>"Orange", "couleur_ref_en"=>"Orange"], 
		["couleur_ref"=>"Rose", "couleur_ref_en"=>"Pink"], 
		["couleur_ref"=>"Rouge", "couleur_ref_en"=>"Red"], 
		["couleur_ref"=>"Transparent", "couleur_ref_en"=>"Transparent"], 
		["couleur_ref"=>"Vert", "couleur_ref_en"=>"Green"], 

		];

		sort($couleursRef);

		foreach ($couleursRef as $key => $value) {
			// code...
			$value["couleur_ref"] = trim($value["couleur_ref"]);
			$value["couleur_ref_en"] = trim($value["couleur_ref_en"]);
			$couleursRef = new CouleurRef($value);
			$find = $manager->getRepository(CouleurRef::class)->findOneBy([
				"couleur_ref" => $couleursRef->getCouleurRef(),
			]);


            if(!$find){
                $manager->persist($couleursRef);
                $manager->flush();                
            }
		}
	}
}




