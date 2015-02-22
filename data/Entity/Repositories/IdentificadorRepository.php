<?php
namespace Sip\Entity\Repositories;

use Doctrine\ORM\EntityRepository;

class IdentificadorRepository extends EntityRepository
{
    public function getCasosInSolicitud($id){
        $query = $this->_em->createQueryBuilder();
    	$query->select('c')
            ->from('Sip\Entity\Casos', 'c')
            ->where('c.solicitud = :id')
            ->setParameter('id', $id);
        	
    	$results = $query->getQuery()->getResult();
        return $results;
    }
    
    public function getLastCount($anio,$sigla){
                
    $query = $this->_em->createQueryBuilder()
            ->select('MAX(i.numero)') 
            ->from('Sip\Entity\Identificador', 'i')
            ->where('i.anio = :anio')
            ->andwhere('i.sigla = :sigla')
            ->setParameter('anio', $anio)
            ->setParameter('sigla', $sigla)
            ->getQuery();

    return $query->getSingleScalarResult();

            
    }

}
