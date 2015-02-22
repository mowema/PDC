<?php
namespace Application\Entity\Repositories;


use Doctrine\ORM\EntityRepository;

class RegistroRepository extends EntityRepository
{
    
    public function getRegistrosActivos($state=1)
    {
    	$query = $this->_em->createQueryBuilder();
    	$query->select('r')
    	->from('Application\Entity\Registro', 'r')
                ->orderBy('r.id','DESC')
                ->where('r.estado = :state')
                ->setParameter('state', $state)
        ;
    
    	return $query->getQuery()->getResult();
    
    }
    
    public function getRegistros(
           $order_by = 'nreg',
           $order = 'DESC',
           $state = 0)
    {
    	$query = $this->_em->createQueryBuilder();
    	$query->select('r')
    	->from('Application\Entity\Registro', 'r')
                ->orderBy('r.id','DESC')
                ->where('r.estado >= :state')
                ->orderBy('r.'.$order_by, $order)
                ->setParameter('state', $state)
        ;
    
    	return $query->getQuery()->getResult();
    
    }
    
    public function getRegistrosWhere($nombre)
    {
    	$query = $this->_em->createQueryBuilder();
    	$query->select('r')
    	->from('Application\Entity\Registro', 'r')
                ->orderBy('r.id','DESC')
                ->where('r.nombre LIKE :nombre')->setParameter('nombre', '%'.$nombre.'%')
                ->setMaxResults(50)
        ;
    
    	return $query->getQuery()->getResult();
    
    }
    public function getRegistroPorMail($email)
    {
    	$query = $this->_em->createQueryBuilder();
    	$query->select('r')
            ->from('Application\Entity\Registro', 'r')
            ->where('r.email = :email')->setParameter('email', $email);
    	return $query->getQuery()->getFirstResult();
    
    }
    
    
   public function getRegistrosFiltrados($nreg=null,$nombre=null,$email=null)
    {
    	$query = $this->_em->createQueryBuilder();
    	$query->select('r')
            ->from('Application\Entity\Registro', 'r');
               // ->orderBy('r.id','DESC')
        $query->where('1=1');
        if($nreg){$query->andWhere('r.nreg=:nreg')->setParameter('nreg', $nreg);}
        if($nombre){$query->andWhere('r.nombre LIKE :nombre')->setParameter('nombre', '%'.$nombre.'%');}
        if($email){$query->andWhere('r.email LIKE :email')->setParameter('email', '%'.$email.'%');}
              //  ->orderBy('r.'.$order_by, $order)
                
        
    	return $query->getQuery()->getResult();
    
    }
  
}
