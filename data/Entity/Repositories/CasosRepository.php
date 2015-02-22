<?php
namespace Sip\Entity\Repositories;

use Doctrine\ORM\EntityRepository;

class CasosRepository extends EntityRepository
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
    
    public function getCasos(
           $habilitados,
           $order_by = 'id',
           $order = 'ASC',
           $fecha_inicio = NULL,
           $fecha_fin = NULL,
           $search_sintesis = NULL,
           $search_expediente = NULL,
           $search_tipo_fecha = NULL,
           $search_rubro = NULL,
           $search_campo_nulo = NULL
           )
    {
        $f_inicio = new \DateTime($fecha_inicio);//$fecha_inicio
        $f_fin = new \DateTime($fecha_fin);//$fecha_fin

        //print_r($habilitados);
        $query = $this->_em->createQueryBuilder();
    	$query->select('c')
            ->from('Sip\Entity\Casos', 'c')
            ->leftjoin('c.solicitud', 's')
            ->leftjoin('s.solicitante', 'u')
            ->leftjoin('s.organismo', 'o');
            //->setParameter('id', $id)
            
        if (is_array($habilitados)){
            $primerelemento = array_shift($habilitados);
            $query->where('s.organismo = '. $primerelemento);
            foreach ($habilitados as $habilitado){
                $query->orwhere('s.organismo = '. $habilitado);
            }
        }
        $query->andwhere ('c.state >= :state')->setParameter('state', 0);
        
        if ($search_tipo_fecha && ($fecha_inicio || $fecha_fin)) {
            //echo $search_tipo_fecha;
            if ($search_tipo_fecha == 'fecharespuesta') {
                $query->andwhere('c.'.$search_tipo_fecha.' > :inicio');
                $query->andwhere('c.'.$search_tipo_fecha.' < :fin')
                ->setParameter('inicio', $f_inicio->format('Y-m-d'))
                ->setParameter('fin', $f_fin->format('Y-m-d')); 
            } else {
               $query->andwhere('s.'.$search_tipo_fecha.' > :inicio')
                       ->setParameter('inicio', $f_inicio->format('Y-m-d'));
               $query->andwhere('s.'.$search_tipo_fecha.' < :fin')
                            ->setParameter('fin', $f_fin->format('Y-m-d')); 
            }
        }
        
        if ($search_sintesis){
            $query->andwhere('c.pregunta LIKE :searchp')
            ->setParameter('searchp', '%'.$search_sintesis.'%');
        }
        
        if ($search_expediente){
            $query->andwhere('s.expediente LIKE :searche')
            ->setParameter('searche', '%'.$search_expediente.'%');
        }
                
        if ($search_rubro){
            $query->andwhere('c.rubro = :searchr')
            ->setParameter('searchr', $search_rubro);
        }
        
        if ($search_campo_nulo){
            switch ($search_campo_nulo){
                case 'fechaenorganismo':
                $query->andwhere('s.fechaenorganismo IS NULL');
                break;
                case 'fecharespuesta':
                $query->andwhere('c.fecharespuesta IS NULL');
                break;
            }
        }       
        //$query->andwhere('s.fechaenorganismo > 2014-06-27');
        
        if ($order_by == 'fechaenorganismo'){
            $query->orderBy('s.'.$order_by, $order);
        } else if ($order_by == 'fechaenenlace'){
            $query->orderBy('s.'.$order_by, $order);
        } else if ($order_by == 'expediente'){
            $query->orderBy('s.'.$order_by, $order);
        } else if ($order_by == 'sector'){
            $query->orderBy('o.nombre', $order);
        } else if ($order_by == 'adjntcs'){
            $query->orderBy('c.file', $order);
        } else if ($order_by == 'adjnts'){
            $query->orderBy('s.file', $order);
        } else {
            $query->orderBy('c.'.$order_by, $order);
        }
        
        //$query->groupBy('s.id');
        
    	$results = $query->getQuery()->getResult();
        return $results;
    }
    
    
    public function getCountCasos(){
                
    $query = $this->_em->createQueryBuilder()
            ->select('COUNT(c)') 
            ->from('Sip\Entity\Casos', 'c')
            ->getQuery();

    return $query->getSingleScalarResult();

            
    }

    
    public function getCasosPublicados($habilitados){
                
    $query = $this->_em->createQueryBuilder()
            ->select('c') 
            ->from('Sip\Entity\Casos', 'c')
            ->leftjoin('c.solicitud', 's');
            
            if (is_array($habilitados)){
                    $primerelemento = array_shift($habilitados);
                    $query->where('s.organismo = '. $primerelemento);
                    foreach ($habilitados as $habilitado){
                        $query->orwhere('s.organismo = '. $habilitado);
                    }
                }
                
            $query->andwhere('s.estado = 1');
            $query->andwhere('c.state = 1');
    return $query->getQuery()->getResult();

    }
    
        
    public function getTodos(){
                
    $query = $this->_em->createQueryBuilder()
            ->select('c') 
            ->from('Sip\Entity\Casos', 'c')
            ->leftjoin('c.solicitud', 's')
            ->where('c.fecharespuesta IS NOT NULL')
            ->andWhere('s.fechaenorganismo IS NOT NULL');
    return $query->getQuery()->getResult();

    }

}
