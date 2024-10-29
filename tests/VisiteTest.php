<?php
namespace App\Tests;

use App\Entity\Environnement;
use App\Entity\Visite;
use DateTime;
use PHPUnit\Framework\TestCase;

/**
 * Description of VisiteTest
 *
 * @author cohen
 */
class VisiteTest extends TestCase {
    
    public function testGetDatecreationString(){
         $visite = new Visite();
         $visite->setDatecreation(new DateTime("2024-04-24"));
        $this->assertEquals("22/04/24", $visite->getDatecreationString());
    
    }
    
      public function testAddEnvironnement(){
        $environnement = new Environnement();
        $environnement->setNom("plage");
        $visite = new Visite();
        $visite->addEnvironnement($environnement);
        $nbEnvironnementAvant = $visite->getEnvironnements()->count();
        $visite->addEnvironnement($environnement);
        $nbEnvironnementApres = $visite->getEnvironnements()->count();
        $this->assertEquals($nbEnvironnementAvant, $nbEnvironnementApres, "ajout même environnement devrait échouer");
    }
}
