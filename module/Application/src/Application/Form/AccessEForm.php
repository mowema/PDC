<?php

namespace Application\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;
use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;
use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use Doctrine\Common\Persistence\ObjectManager;

class AccessEForm extends Form implements ObjectManagerAwareInterface {

    protected $objectManager;

    public function __construct($name, $objectManager,$params=null) {
        
        parent::__construct($name);
        $this->setAttribute('class', 'form-horizontal');
        $this->setAttribute('method', 'POST');
        
        
        $this->setHydrator(new ClassMethodsHydrator(false))
                ->setInputFilter(new InputFilter());
if ($params==null){
$fieldset = new AccessFieldset($name,$objectManager);} else {
$fieldset = new AccessEFieldset($name,$objectManager);}
        $fieldset->setUseAsBaseFieldset(true);
        $this->add($fieldset);
        
        $this->add(array(
             'name' => 'idForm',
             'type' => 'Hidden',
         ));
/*
        $this->add(array(
            'type' => 'DoctrineModule\Form\Element\ObjectMultiCheckbox',
            'name' => 'roleid',
            'options' => array(
                'label' => 'Seleccione rol',
                'object_manager' => $this->getObjectManager(),
                'target_class' => 'Application\Entity\Role',
                'property' => 'roleId',
                'empty_option' => '--- Seleccione rol ---'
            ),
        ));

        

        if ($id) {

            $usuario = $this->getObjectManager()->getRepository('Application\Entity\User')->find($id);

            if ($usuario) {
                // PARA OBTENER EL VALUE DE CHECKBOX ROLES
                foreach ($usuario->getRoles() as $roles):

                    $rolesId[] = $roles->getId();

                endforeach;

                if (isset($rolesId)) {

                    $this->get('roleid')->setValue($rolesId);
                }
            }
        }*/
        
        $this->add(array(
            'type' => 'Zend\Form\Element\Csrf',
            'name' => 'csrf'
        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Acceder',
                'class' => 'btn btn-default'
            )
        ));
    }

    public function setObjectManager(ObjectManager $objectManager) {
        $this->objectManager = $objectManager;

        return $this;
    }

    public function getObjectManager() {
        return $this->objectManager;
    }

}
