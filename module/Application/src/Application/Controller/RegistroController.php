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

class RegistroController extends AbstractActionController {

    protected $container;
    protected $view;
    protected $em;

    const ROUTE_CHANGEPASSWD = 'zfcuser/changepassword';
    const ROUTE_LOGIN = 'zfcuser/login';
    const ROUTE_REGISTER = 'zfcuser/register';
    const ROUTE_CHANGEEMAIL = 'zfcuser/changeemail';
    const CONTROLLER_NAME = 'zfcuser';

    public function onDispatch(\Zend\Mvc\MvcEvent $e) {

        if (!$this->zfcUserAuthentication()->hasIdentity()) {
            return $this->redirect()->toRoute(static::ROUTE_LOGIN);
        }

        //$ruta = $this->zfcUserAuthentication()->getIdentity()->getRuta();
        //if ($ruta) return $this->redirect()->toRoute($ruta);

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

        $this->searchContainer = new Container('search');
        $this->view = new ViewModel();
        //echo $this->grupoContainer->grupo;
    }
    
    public function indexAction() {
        

    }

    public function listadoAction() {
        $nreg = null;$nombre = null;$email = null;
        $request = $this->getRequest();
        
        $this->getRenderer()->headScript()->appendFile('/js/confirm-deletion.js', 'text/javascript');
        $this->getRenderer()->headLink()->appendStylesheet('/fancybox/jquery.fancybox.css');

        $entityManager = $this->getEntityManager();
        if ($request->isPost()) {
            if ($request->getPost()->filtro_registro) {
                $nreg = $request->getPost()->filtro_registro;
            } 
            if ($request->getPost()->filtro_nombre) {
                $nombre = $request->getPost()->filtro_nombre;
            }
            if ($request->getPost()->filtro_email) {
                $email = $request->getPost()->filtro_email;
            }
            
            $registros = $entityManager->getRepository('Application\Entity\Registro')->getRegistrosFiltrados($nreg,$nombre,$email);
            
        } else {$registros = $entityManager->getRepository('Application\Entity\Registro')->getRegistros();}
        
        $matches = $this->getEvent()->getRouteMatch();
        $page = $matches->getParam('page', 1);

        $nregistros = count($registros);
        $paginator = new \Zend\Paginator\Paginator(new \Zend\Paginator\Adapter\ArrayAdapter($registros));

        $paginator->setCurrentPageNumber($page);
        $paginator->setItemCountPerPage(26);

        $this->view->setVariable('lang', $matches->getParam('lang', 'es'));
        $this->view->setVariable('registros', $paginator);
        $this->view->setVariable('nregistros', $nregistros);

        return $this->view;
        
        
        // ACA el formulario de búsqueda
        $searchForm = new \Sip\Form\SearchForm($entityManager);
        //$this->searchContainer->fecha_fin = NULL;
        //$this->searchContainer->search_sintesis = NULL;
        $fecha_inicio = NULL;
        $fecha_fin = NULL;
        $search_tipo_fecha = NULL;
        $search_rubro = NULL;
        $search_sintesis = NULL;
        $search_expediente = NULL;
        
        if ($request->isPost()) {
            if ($request->getPost()->search_tipo_fecha){
                $search_tipo_fecha = $request->getPost()->search_tipo_fecha;
                $this->searchContainer->search_tipo_fecha = $search_tipo_fecha;
            } else $this->searchContainer->search_tipo_fecha = NULL;
            
            if ($request->getPost()->search_rubro){
                $search_rubro = $request->getPost()->search_rubro;
                $this->searchContainer->search_rubro = $search_rubro;
            } else $this->searchContainer->search_rubro = NULL;
            
            if ($request->getPost()->search_sintesis){
                $search_sintesis = $request->getPost()->search_sintesis;
                $this->searchContainer->search_sintesis = $search_sintesis;
            } else $this->searchContainer->search_sintesis = NULL;
            
            if ($request->getPost()->search_expediente){
                $search_expediente = $request->getPost()->search_expediente;
                $this->searchContainer->search_expediente = $search_expediente;
            } else $this->searchContainer->search_expediente = NULL;
            
            if ($request->getPost()->search_fecha_inicio){
                $fecha_inicio = $request->getPost()->search_fecha_inicio;
                $this->searchContainer->fecha_inicio = $fecha_inicio;
            } else $this->searchContainer->fecha_inicio = NULL;
            
            if ($request->getPost()->search_fecha_fin){
                $fecha_fin = $request->getPost()->search_fecha_fin;
                $this->searchContainer->fecha_fin = $fecha_fin;
            } else $this->searchContainer->fecha_fin = NULL;
        } 
        
        if ($this->searchContainer->search_tipo_fecha){
            $search_tipo_fecha = $this->searchContainer->search_tipo_fecha;
            $searchForm->get('search')->get('search_tipo_fecha')->setAttribute('value', $search_tipo_fecha);
        }
        if ($this->searchContainer->search_rubro){
            $search_rubro = $this->searchContainer->search_rubro;
            $searchForm->get('search')->get('search_rubro')->setAttribute('value', $search_rubro);
        }
        if ($this->searchContainer->search_sintesis){
            $search_sintesis = $this->searchContainer->search_sintesis;
            $searchForm->get('search')->get('search_sintesis')->setAttribute('value', $search_sintesis);
        }
        if ($this->searchContainer->search_expediente){
            $search_expediente = $this->searchContainer->search_expediente;
            $searchForm->get('search')->get('search_expediente')->setAttribute('value', $search_expediente);
        }
        
        if ($this->searchContainer->fecha_inicio){
            $fecha_inicio = $this->searchContainer->fecha_inicio;
            $searchForm->get('search')->get('search_fecha_inicio')->setAttribute('value', $fecha_inicio);
        }
        if ($this->searchContainer->fecha_fin){
            $fecha_fin = $this->searchContainer->fecha_fin;
            $searchForm->get('search')->get('search_fecha_fin')->setAttribute('value', $fecha_fin);
        }
        
        //$matches = $this->getEvent()->getRouteMatch();
        $order_by = $matches->getParam('order_by', 'id');
        $order = $matches->getParam('order', 'DESC');
        $page = $matches->getParam('page');
        
        $countcasos = $entityManager->getRepository('Sip\Entity\Casos')->getCountCasos();
        $casos = $entityManager->getRepository('Sip\Entity\Casos')->getCasos(
                $habilitados,
                $order_by,
                $order,
                $fecha_inicio,
                $fecha_fin,
                $search_sintesis,
                $search_expediente,
                $search_tipo_fecha,
                $search_rubro);
         
        
        
        
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
