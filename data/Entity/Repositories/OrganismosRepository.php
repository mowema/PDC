<?php
namespace Sip\Entity\Repositories;

use Doctrine\ORM\EntityRepository;

class OrganismosRepository extends EntityRepository
{
    public function getButSelf($id = NULL, $habilitados = NULL){
        
        $query = $this->_em->createQueryBuilder();
    	$query->select('o')
            ->from('Sip\Entity\Organismos', 'o');
        
        if (is_array($habilitados)){
            $primerelemento = array_shift($habilitados);
            $query->where('o.id = '. $primerelemento);
            foreach ($habilitados as $habilitado){
                $query->orwhere('o.id = '. $habilitado);
            }
        }
        
        if ($id) $query->andwhere('o.id <> :id')->setParameter('id', $id);
        
        $results = $query->getQuery()->getResult();
        return $results;
    }
    public function getButNodo(){
        
        $query = $this->_em->createQueryBuilder();
    	$query->select('o')
            ->from('Sip\Entity\Organismos', 'o')
            ->where('o.parent IS NOT NULL ');
        
        $results = $query->getQuery()->getResult();
        return $results;
    }
    
        public function getButNodoAndBranch(){
        
        $query = $this->_em->createQueryBuilder();
    	$query->select('o')
            ->from('Sip\Entity\Organismos', 'o')
            ->where('o.parent IS NOT NULL ');
        
        $results = $query->getQuery()->getResult();
        return $results;
    }
    
    public function getAllInArray(){
        $query = $this->_em->createQueryBuilder();
    	$query->select('o, p')
            ->from('Sip\Entity\Organismos', 'o')
        	->leftJoin('o.parent','p');
    	$results = $query->getQuery()->getArrayResult();
        
        
        return $results;
        
    }
    
    public function getAllInArray2(){
        $query = $this->_em->createQuery("SELECT o FROM Sip\Entity\Organismos o");
        $results = $query->getArrayResult();
        
        foreach ($results as $result){
               if ($result['parent']==NULL){$organismo['parent_id']=0;}else{
                   $organismo['parent_id'] = $organismo['parent']['id'];}
                 unset($organismo['parent'])  ;
               $array[] = $organismo;
        }
        return $array;
    }
    
  
}
