<?php

namespace Application\Form;

use Application\Entity\Registro;
use Zend\Form\Fieldset;
use Doctrine\Common\Persistence\ObjectManager;
use Zend\InputFilter\InputFilterProviderInterface;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
 use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;

class RegistroProdRadioFieldset extends Fieldset implements InputFilterProviderInterface {

    public function __construct() {

        parent::__construct('prodradio');

        //$this->setHydrator(new ClassMethodsHydrator(false))
        // 	  ->setObject(new Registro());
        $this->setHydrator(new ClassMethodsHydrator(false))
                //->setObject(new Registro())
                ;


        $this->setLabel('Producción Radial');

        $this->add(array(
                'name' => 'name',
                'options' => array(
                    'label' => 'algo',
                    'label_attributes' => array(
                        'class' => 'col-sm-2 control-label'
                    ),
                ),
                'attributes' => array(
                    'id' => 'name',
                    'type' => 'text',
                    //'required' => 'required',
                    'class' => 'form-control'
                )
            ));
    }

    public function getInputFilterSpecification() {
        return array();
    }

}
