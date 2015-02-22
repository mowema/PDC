<?php
namespace Sip\Entity\Repositories;

use Doctrine\ORM\EntityRepository;

class FeriadosRepository extends EntityRepository
{
    public function getFeriados(){
        $query = $this->_em->createQueryBuilder();
    	$query->select('f')
            ->from('Sip\Entity\Feriados', 'f');
        	
    	$results = $query->getQuery()->getResult();
        return $results;
    }
    
}
