<?php
namespace Sip\Entity\Repositories;

use Doctrine\ORM\EntityRepository;

class SolicitantesRepository extends EntityRepository
{
    
   public function getSolicitantes(
            $order_by = 'id',
            $order = 'ASC',
            $queryrs = NULL, 
            $querynombre = NULL, 
            $querydoc = NULL
           )
    {
        $query = $this->_em->createQueryBuilder();
        $query->select('s')
        ->from('Sip\Entity\Solicitantes', 's')
            ->where('1 = 1')
            ->orderBy('s.'.$order_by, $order);
          
        if (null !== $queryrs) {
            $query->andwhere('s.razonsocial LIKE :queryrs')
            ->setParameter('queryrs', '%'.$queryrs.'%');
        };
        
        if (null !== $querynombre) {
            $query->andwhere('s.nombre LIKE :querynombre')
            ->setParameter('querynombre', '%'.$querynombre.'%');
        };
        
        if (null !== $querydoc) {
            $query->andwhere('s.numerodocumento LIKE :querydoc')
            ->setParameter('querydoc', '%'.$querydoc.'%');
        };
        
        return $query->getQuery()->getResult();
    }  

   public function getReunionesProximas()
    {
       $datetime = new \DateTime();
       $hoy = $datetime->format('Y/m/d');
    	$query = $this->_em->createQueryBuilder();
    	$query->select('r')
    	->from('Eventius\Entity\Reunion', 'r')
    	->where('r.fecha > :hoy')
        ->orderBy('r.fecha')
        ->setParameter('hoy', $hoy )
        ;
    	return $query->getQuery()->getResult();
    }
    /* 
     public function getEventoCodigo($code)
    {
    	$query = $this->_em->createQueryBuilder();
    	$query->select('e')
            ->from('Eventius\Entity\Evento', 'e')
            ->where('e.code = :code')
            ->setParameter('code', $code);
    
    	return $query->getQuery()->getSingleResult();
    
    }*/

}
