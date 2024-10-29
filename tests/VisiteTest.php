<?php
namespace App\Tests;

use App\Entity\Visite;
use PHPUnit\Framework\TestCase;

/**
 * Description of VisiteTest
 *
 * @author cohen
 */
class VisiteTest extends TestCase {
    
    public function testGetDatecreationString(){
         $visite = new Visite();
        $visite->setDatecreation(new \DateTime("2024-04-22"));
        $this->assertEquals("22/04/24", $visite->getDatecreationString());
    
    }
}
