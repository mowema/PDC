<?php

namespace Application\Form;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;
use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;
use Doctrine\Common\Persistence\ObjectManager;

class AccessFieldset extends Fieldset implements InputFilterProviderInterface {

    protected $objectManager;
    protected $em;

    public function __construct($name, $objectManager) {

        $this->setObjectManager($objectManager);
        parent::__construct($name);

        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'nombre',
            'options' => array(
                'label' => 'Nombre de la Organización',
                'label_attributes' => array(
                    'class' => 'col-sm-5 control-label',
                ),
            ),
            'attributes' => array(
                'type' => 'text',
            )
        ));


        $this->add(array(
            'name' => 'email',
            'type' => 'Zend\Form\Element\Email',
            'attributes' => array(
                'maxlength' => '128',
                'size' => '32',
                'type' => 'email',
                'required' => 'required',
                'col' => '4'
            ),
            'options' => array(
                'label' => 'Email',
                'appendText' => '@',
            ),
        ));

        $this->add(array(
            'name' => 'codigo',
            'options' => array(
                'label' => 'Código'
            ),
            'attributes' => array(
                'type' => 'text',
                'maxlength' => '32',
                'size' => '32',
                'required' => 'required'
            )
        ));
    }

    /**
     * Define InputFilterSpecifications
     *
     * @access public
     * @return array
     */
    public function getInputFilterSpecification() {
        return array(
            array(
                'name' => 'nombre',
                'required' => true,
                'filters' => array(
                    array('name' => 'Zend\Filter\StripTags'),
                    array('name' => 'Zend\Filter\StringTrim'),
                ),
            ),
            array(
                'name' => 'codigo',
                'required' => true,
                'filters' => array(
                    array('name' => 'Zend\Filter\StripTags'),
                    array('name' => 'Zend\Filter\StringTrim'),
                    //new \Zend\I18n\Filter\Alnum(true),
                ),
            ),
            'email' => array(
                'required' => true,
                'filters' => array(
                    array('name' => 'Zend\Filter\StripTags'),
                    array('name' => 'Zend\Filter\StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name' => 'DoctrineModule\Validator\NoObjectExists',
                        'options' => array(
                            'object_repository' => $this->objectManager->getRepository('Application\Entity\Registro'),
                            'object_manager' => $this->objectManager,
                            'fields' => 'email',
                            'messages' => array(\DoctrineModule\Validator\NoObjectExists::ERROR_OBJECT_FOUND => "Ya hay otro registro asociado a este email. Solicite el código en la tercer solapa.")
                        )
                    )
                )
            )
        );
    }

    
    public function setObjectManager(ObjectManager $objectManager) {
        $this->objectManager = $objectManager;

        return $this;
    }

    public function getObjectManager() {
        return $this->objectManager;
    }

}
