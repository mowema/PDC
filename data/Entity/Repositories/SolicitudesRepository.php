<?php
namespace Sip\Entity\Repositories;

use Doctrine\ORM\EntityRepository;

class SolicitudesRepository extends EntityRepository
{
    
    
   public function fetchAllWCasos(
           $order_by = 'fecha',
           $order = 'ASC',
           $habilitados
           )
    {
       
       
        $query = $this->_em->createQueryBuilder();
        $query->select('s,c')
        ->from('Sip\Entity\Solicitudes', 's')
        ->leftJoin('s.casos','c');

        if (is_array($habilitados)){
            $primerelemento = array_shift($habilitados);
            $query->where('s.organismo = '. $primerelemento);
            foreach ($habilitados as $habilitado){
                $query->orwhere('s.organismo = '. $habilitado);
            }
        }

        $query->andWhere('s.estado >= :estado')
            ->setParameter('estado', 0);//por lo menos en borrador
        $query->andWhere('c.solicitud IS NULL');
        $query->orderBy('s.'.$order_by, $order);

        return $query->getQuery()->getResult();
    }  
    
   public function fetchAll(
           $order_by = 'fecha',
           $order = 'ASC',
           $habilitados
           )
    {
       
       
        $query = $this->_em->createQueryBuilder();
        $query->select('s,c')
        ->from('Sip\Entity\Solicitudes', 's')
        ->leftJoin('s.casos','c');

        if (is_array($habilitados)){
            $primerelemento = array_shift($habilitados);
            $query->where('s.organismo = '. $primerelemento);
            foreach ($habilitados as $habilitado){
                $query->orwhere('s.organismo = '. $habilitado);
            }
        }

        $query->andWhere('s.estado >= :estado')
            ->setParameter('estado', 0);//por lo menos en borrador
        //$query->andWhere('c.solicitud IS NULL');//
        $query->orderBy('s.'.$order_by, $order);

        return $query->getQuery()->getResult();
    }
    
    public function fetchTodo()
    {
        $query = $this->_em->createQueryBuilder();
        $query->select('s,c')
        ->from('Sip\Entity\Solicitudes', 's')
        ->leftJoin('s.casos','c');

        return $query->getQuery()->getResult();
    }
    
    public function contarSinSolicitantes($habilitados){
        $query = $this->_em->createQueryBuilder();
        $query->select('s')
        ->from('Sip\Entity\Solicitudes', 's');
        if (is_array($habilitados)){
            $primerelemento = array_shift($habilitados);
            $query->where('s.organismo = '. $primerelemento);
            foreach ($habilitados as $habilitado){
                $query->orwhere('s.organismo = '. $habilitado);
            }
        }
        
        $query->andWhere('s.solicitante IS NULL');
        return $query->getQuery()->getResult();


    }
    
   public function fetchAllWOutCasos(
           $habilitados
           )
    {
       
       
        $query = $this->_em->createQueryBuilder();
        $query->select('s,c')
        ->from('Sip\Entity\Solicitudes', 's')
        ->leftJoin('s.casos','c');

        if (is_array($habilitados)){
            $primerelemento = array_shift($habilitados);
            $query->where('s.organismo = '. $primerelemento);
            foreach ($habilitados as $habilitado){
                $query->orwhere('s.organismo = '. $habilitado);
            }
        }

        $query->andWhere('s.estado >= :estado')
            ->setParameter('estado', 0);//por lo menos en borrador
        $query->andWhere('c.solicitud IS NULL');//

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
