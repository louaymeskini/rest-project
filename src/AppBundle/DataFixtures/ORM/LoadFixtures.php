<?php
namespace AppBundle\DataFixtures\ORM;
use AppBundle\Entity\Livre;
use AppBundle\Entity\Auteur;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
class LoadFixtures implements FixtureInterface

{
	public function load(ObjectManager $manager)

	{
		for ($i = 0; $i < 20; $i++) {
			$Livre = new Livre();
			$Livre->setTitre('Louay'.$i); //$Livre->setTitre('Octopus'.rand(1, 100));
			$Livre->setDescriptif('Meskini'.$i);
			$Livre->setISBN('testFixture'.$i);
			$Livre->setDateedition(new \DateTime());
        	//$Livre->setSpeciesCount(rand(100, 99999));
			$manager->persist($Livre);
			//auteuuuuuuuuur
			$Auteur = new Auteur();
			$Auteur->setNom('auteur'.$i); //$Auteur->setTitre('Octopus'.rand(1, 100));
			$Auteur->setEmail('louay.meskini@gmail.com'.$i);
        	//$Auteur->setSpeciesCount(rand(100, 99999));
			$manager->persist($Auteur);
		}
		$manager->flush();
	}

	/*public function loadAuteur(ObjectManager $manager)

	{
		for ($i = 0; $i < 20; $i++) {
			$Auteur = new Auteur();
			$Auteur->setNom('auteur'.$i); //$Auteur->setTitre('Octopus'.rand(1, 100));
			$Auteur->setEmail('louay.meskini@gmail.com'.$i);
        	//$Auteur->setSpeciesCount(rand(100, 99999));
			$manager->persist($Auteur);
		}
		$manager->flush();
	}*/
}