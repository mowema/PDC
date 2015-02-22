<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Session\Container;
use Application\Form\AccessForm;
use Zend\Crypt\Password\Apache;
class IndexController extends AbstractActionController {

    protected $container;
    protected $view;
    protected $em;

    const ROUTE_CHANGEPASSWD = 'zfcuser/changepassword';
    const ROUTE_LOGIN = 'zfcuser/login';
    const ROUTE_REGISTER = 'zfcuser/register';
    const ROUTE_CHANGEEMAIL = 'zfcuser/changeemail';
    const CONTROLLER_NAME = 'zfcuser';

    public function onDispatch(\Zend\Mvc\MvcEvent $e) {

        
        return parent::onDispatch($e);
    }

    public function getRenderer() {
        $this->renderer = $this->getServiceLocator()->get('Zend\View\Renderer\PhpRenderer');

        return $this->renderer;
    }

    public function setEntityManager(EntityManager $em) {
        $this->em = $em;
    }

    public function getEntityManager() {
        if (null === $this->em) {
            $this->em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        }
        return $this->em;
    }

    public function __construct() {

        $this->grupoContainer = new Container('grupo');
        $this->view = new ViewModel();
        //echo $this->grupoContainer->grupo;
    }
    
    public function indexAction() {
        parent::indexAction();
        
        $apache = new Apache();
        $apache->setFormat('digest');
        $apache->setUserName('pablo@gmail.com');
        $apache->setAuthName('key');
        //printf("Digest output: %s\n", $apache->create('password'));
        
        $request = $this->getRequest();
        $entityManager = $this->getEntityManager();
        
        
        $formAcceso = new AccessForm('acceso',$entityManager);
        $formAcceso->get('acceso')->remove('nombre');
        $formAcceso->getInputFilter()->get('acceso')->remove('nombre');
        $formAcceso->get('idForm')->setValue('1');
        //$formAcceso->getInputFilter()->get('acceso')->get('email')->getValidatorChain()->setValidators(null);
        $formAcceso->getInputFilter()->get('acceso')->remove('email');
        
        $formRegistro = new AccessForm('registro',$entityManager);
        $formRegistro->get('submit')->setAttribute('value', 'Iniciar proceso de registro');
        $formRegistro->get('registro')->remove('codigo');
        $formRegistro->getInputFilter()->get('registro')->remove('codigo');
        $formRegistro->get('idForm')->setValue('2');
        
        $formCodigo = new AccessForm('codigo',$entityManager,'si');
        $formCodigo->get('submit')->setAttribute('value', 'Solicitar código de registro');
        $formCodigo->get('codigo')->remove('nombre');
        $formCodigo->getInputFilter()->get('codigo')->remove('nombre');
        $formCodigo->get('codigo')->remove('codigo');
        $formCodigo->getInputFilter()->get('codigo')->remove('codigo');
        $formCodigo->get('idForm')->setValue('3');
        
        
        $formBuscar = new AccessForm('buscar',$entityManager);
        $formBuscar->get('submit')->setAttribute('value', 'Buscar');
        $formBuscar->get('buscar')->remove('email');
        $formBuscar->getInputFilter()->get('buscar')->remove('email');
        $formBuscar->get('buscar')->remove('codigo');
        $formBuscar->getInputFilter()->get('buscar')->remove('codigo');
        $formBuscar->get('idForm')->setValue('4');
        
        $post = $request->getPost()->toArray();
        
        if ($request->isPost() && $post['idForm'] == 1) {
            $formAcceso->setData($post);
            if ($formAcceso->isValid()) {
                $validatedData = $formAcceso->getData();
                // busco si hay un registro con ese mail y ese código
                echo 'estoy validado primer solapa';
            }
        }
        
        /* iniciar registro */
        if ($request->isPost() && $post['idForm'] == 2) {
             $formRegistro->setData($post);
            if ($formRegistro->isValid()) {
                $validatedData = $formRegistro->getData();
                
                $pdc = $entityManager->getRepository('Application\Entity\Registro')->getRegistroPorMail($validatedData['registro']['email']);
                if (count($pdc)==0){
                   //libre para comenzar              
//introduzco el registro con el nombre, el email y el código digest
                //le mando un correo al mail con el código
                    $this->flashMessenger()
                            ->addMessage('success_Le hemos enviado un código a su correo electrónico. No, mentira');
                }else{
                    $this->flashMessenger()
                            ->addMessage('warning_No es posible crear un Registro para ese mail');
                }
                
            }
        }
        if ($request->isPost() && $post['idForm'] == 3) {
            $formCodigo->setData($post);
            if ($formCodigo->isValid()) {
                $validatedData = $formCodigo->getData();
                
                $pdc = $entityManager->getRepository('Application\Entity\Registro')->getRegistroPorMail($validatedData['codigo']['email']);
                if (count($pdc)==0){$this->flashMessenger()
                            ->addMessage('success_Le hemos enviado su código a su correo electrónico. No, mentira');
                }
                //me fijo si el mail existe, le informo?
                //le mando el código por mail
                
            }
        }
        if ($request->isPost() && $post['idForm'] == 4) {
            $formBuscar->setData($post);
            if ($formBuscar->isValid()) {
                $validatedData = $formBuscar->getData();
                $busqueda = $entityManager->getRepository('Application\Entity\Registro')->getRegistrosWhere($validatedData['buscar']['nombre']);
                if (count($busqueda)>1){
                $this->view->setVariable('busqueda', $busqueda);}
                else {
                $this->view->setVariable('busqueda', 'Sin resultados');                    
                }
                if (count($busqueda)==50){
                    $this->flashMessenger()->addMessage('warning_Hay varios registros más en su búsqueda y exceden este listado<br> Ingrese un nombre mas completo');
                }               // fijarse si son muchos registros!!!!!
            }
        }
        
               
        
        $this->view->setVariable('formAcceso', $formAcceso);
        $this->view->setVariable('formRegistro', $formRegistro);
        $this->view->setVariable('formCodigo', $formCodigo);
        $this->view->setVariable('formBuscar', $formBuscar);

        return $this->view; 
        
        // formulario de ingreso al registro
        
        // Búsqueda por nombre con resultado
        
        
        // link de acceso al registro
        
        
        
        
    }

    public function listadoAction() {
        $this->getRenderer()->headScript()->appendFile('/js/confirm-deletion.js', 'text/javascript');
        $this->getRenderer()->headLink()->appendStylesheet('/fancybox/jquery.fancybox.css');

        $entityManager = $this->getEntityManager();

        $matches = $this->getEvent()->getRouteMatch();
        $page = $matches->getParam('page', 1);

        $registros = $entityManager->getRepository('Application\Entity\Registro')->getRegistrosActivos();
        
        $paginator = new \Zend\Paginator\Paginator(new \Zend\Paginator\Adapter\ArrayAdapter($registros));

        $paginator->setCurrentPageNumber($page);
        $paginator->setItemCountPerPage(10);

        $this->view->setVariable('lang', $matches->getParam('lang', 'es'));
        $this->view->setVariable('registros', $paginator);

        return $this->view;
    }

    public function registroAction() {
        
        $entityManager = $this->getEntityManager(); 
        //$registro = new \Application\Entity\Registro;
        $id = (int) $this->getEvent()->getRouteMatch()->getParam('id');
        
        $request = $this->getRequest();
        $registroform = new \Application\Form\RegistroForm($entityManager);
        $registro = new \Application\Entity\Registro();
        
        
        if ($id) {
            $registro = $this->getEntityManager()->find('Application\Entity\Registro', $id);
            
            if ($registro === NULL) {
                return $this->redirect()->toRoute('r', array(
                            'controller' => 'index',
                            'action' => 'listado',
                ));
            } else {
                
                //print_r(json_decode($registro->getIntervencion()));
        
                $registroform->get('registro')->get('id')->setValue($id);
                //tengo que popular los select multiple y no lo logro
                //print_r (json_decode($registro->getIntervencion()));
                //$var = json_decode($registro->getIntervencion());
                //$registroform->get('registro')->get('intervencion')->setValue(array('otros'));
                //$registroform->get('registro')->get('intervencion')->setValueOptions(array('1','2'));
                $registroform->setValue($registro);
            }
            
        }
        
        $data = $request->getPost();
        if ($request->isPost()) {
            $registroform->setData($data);
            if ($registroform->isValid()) {
                $validated = $registroform->getData();
                $validatedArray = $validated->getArrayCopy();
                //tipoSinPJ   produccionGrafItem1
                //unset($validated['tipoSinPJ']);
                $multisel=array(
                    'intervencion',
                    'actividades',
                    'destinatarios',
                    'sectores',
                    'equipAV',
                    'equipInformatico',
                    'equipSonido',
                    'equipEscen',
                    'equipOtro',
                    'produccionAV',
                    'produccionRadio',
                    'produccionMultimedia',
                    'produccionGrafica',
                    'espectaculos',
                    'muestras',
                    'muestras',
                    'comparte',
                    'articulacionG',
                    'articulacionG'
                    
                );
                
                foreach ($multisel as $sel){
                    if ($registroform->get('registro')->get($sel)->getValue() == null)
                    {$validatedArray[$sel]='';}
                    
                }
                
                
            
                $registro->populate($validatedArray);
                
                    $entityManager->persist($registro);

                    $entityManager->flush();
                    
                    //$debug = $validatedArray;
                $registroform->bind($validated);
                $this->flashMessenger()->addMessage('success_El registro '.$registro->getId().' se actualizó con éxito'.
                        ' <a href="'.$this->url()->fromRoute('r', array(
                            'action' => 'registro',
                            'id' => $registro->getId(),
                )).'"> ¿Quiere volver a editarlo?</a>');
                //$this->view->setVariable('debug', $debug);
                //$this->view->setVariable('intervencion', $validatedArray['intervencion']);

                return $this->redirect()->toRoute('r', array(
                            'controller' => 'index',
                            'action' => 'listado',
                ));
                
            } else {
                $this->flashMessenger()->addMessage('warning_El registro no validó con éxito');
                //$messages = $registroform->getMessages();
                // \Zend\Debug\Debug::dump($messages);
            }

        }  else {
       $registroform->bind($registro);
       //$registroform->get('registro')->get('intervencion')->setValue($var);
        }

        //$registroform->bind($registro);
        $this->view->setVariable('form', $registroform);
        return $this->view;
    }
    
    public function apapeleraAction() {
        
        $id = (int) $this->params('id', null);

        if (null === $id) {
          return $this->redirect()->toRoute('r',array('action'=>'listado'));
        }

            $reg = $this->getEntityManager()->find('Application\Entity\Registro', $id);

            $reg->setEstado(-1);

            $this->getEntityManager()->persist($reg);

            $this->getEntityManager()->flush();

            $this->flashMessenger()->addMessage('success_El registro se envió a papelera!');

            return $this->redirect()->toRoute('r',array('action'=>'listado'));
            
    }

}
