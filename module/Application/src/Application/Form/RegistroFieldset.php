<?php

namespace Application\Form;

use Application\Entity\Registro;
use Zend\Form\Fieldset;
use Doctrine\Common\Persistence\ObjectManager;
use Zend\InputFilter\InputFilterProviderInterface;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;

class RegistroFieldset extends Fieldset implements InputFilterProviderInterface {

    public function __construct(ObjectManager $objectManager) {

        parent::__construct('registro');

        //$this->setHydrator(new ClassMethodsHydrator(false))
        // 	  ->setObject(new Registro());
        $this->setHydrator(new DoctrineHydrator($objectManager))
                ->setObject(new Registro());


        $this->setLabel('Registro');
        

        $this->add(array(
                     'name' => 'id',
                     'type' => 'Hidden',
                 ));
        
        $this->add(array(
            'name' => 'provincia',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                "required"=>     false,
                //'required' => 'required',
                'class' => 'form-control',
            ),
            'options' => array(
                "allow_empty"=>  true,
                "required"=>     false,
                'label' => 'Provincia',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label',
                ),
                'label_options' => array(
                    'disable_html_escape' => true,
                ),
                'empty_option' => 'Provincia...',
                'value_options' => array(
                    'Buenos Aires' => 'Gran Buenos Aires',
                    'ciudad autonoma de buenos aires' => 'CABA',
                    'Catamarca' => 'Catamarca',
                    'Chaco' => 'Chaco',
                    'Chubut' => 'Chubut' ,
                    'Córdoba' => 'Córdoba' ,
                    'Corrientes' => 'Corrientes',
                    'Entre Ríos' => 'Entre Ríos',
                    'Formosa' => 'Formosa',
                    'Jujuy' => 'Jujuy',
                    'La Pampa' => 'La Pampa',
                    'La Rioja' => 'La Rioja',
                    'Mendoza' => 'Mendoza',
                    'Misiones' => 'Misiones',
                    'Neuquén' => 'Neuquén',
                    'Río Negro' => 'Río Negro',
                    'Salta' => 'Salta',
                    'San Juan' => 'San Juan',
                    'San Luis' => 'San Luis',
                    'Santa Cruz' => 'Santa Cruz',
                    'Santa Fe' => 'Santa Fe',
                    'Santiago del Estero' => 'Santiago del Estero',
                    'Tierra del Fuego' => 'Tierra del Fuego',
                    'Tucumán' => 'Tucumán'
        
        
        
                ),
            )
        ));

        $array = array(
            //nreg
            array('nreg', 'Número de registro'),
            array('nombre', 'Nombre de Organización'),
            array('localidad', 'Localidad'),
            array('direccion', 'Dirección'),
            array('cpostal', 'C. Postal'),
            array('telefono', 'Teléfono Fijo'),
            array('movil', 'Teléfono Movil'),
            array('email', 'Correo Electrónico'),
            array('web', 'Página web'),
            array('blog', 'Blog'),
            array('flickr', 'Flickr'),
            array('facebook', 'Facebook'),
            array('twitter', 'Twitter'),
            array('vimeo', 'Vimeo'),
            array('youtube', 'Youtube'),
            array('rsocial', 'Redes Sociales'),
            array('referente', 'Nombre del Referente'),
            array('referentel', 'Celular del Referente'),
            array('npj', 'Nº de Inscripción'),
            array('ncuit', 'CUIT'),
            array('perfilotro', 'Detalle Otro' ),
            array('tipoOtro', 'Detalle Otro'),
            array('creado', 'Año de creación'),
                        
            array('cantIntegrantes', 'Cantidad de Integrantes'),
            array('cantMilitantes', 'Cantidad de Voluntarios Militantes'),
            array('cantProfesionales', 'Cantidad de Profesionales Rentados'),
            array('cantOcacionales', 'Cantidad de Colaboradores Ocasionales o para Proyectos Específicos'),
            
            array('actividadesOtro', 'Detalle Otros'),
            array('cantParticipantes', 'Cantidad Total de Participantes'),
            array('espacioInicio', 'Año de Inicio'),
            array('espacioTipoCompartido', 'Detalle con quiénes si es compartido'),
            
            array('espacioMtsCubiertos', 'Cubiertos en mts.2'),
            array('espacioMtsDescubiertos', 'Descubiertos en mts.2'),
            array('sectoresCubiertos', 'Cantidad de sectores cubiertos'),
            array('sectoresDescubiertos', 'Cantidad de sectores descubiertos'),
            array('sectoresOtro', 'Detalle Otros'),
            
            array('salaTeatroMts', 'Dimensiones en mts.2'),
            array('salaTeatroButacas', 'Cantidad de butacas'),
            array('salaCineMts', 'Dimensiones en mts.2'),
            array('salaCineButacas', 'Cantidad de butacas'),
            array('salaRadioMts', 'Dimensiones en mts.2'),
            array('salaRadioEquip', 'Detalle equipamiento'),
            array('salaGrabaMts', 'Dimensiones en mts.2'),
            array('salaGrabaEquip', 'Detalle equipamiento'),
            
            array('equipAVOtro', 'Detalle otros'),
            array('equipInformaticoOtro', 'Detalle otros'),
            array('equipSonidoOtro', 'Detalle otros'),
            array('equipEscenOtro', 'Detalle otros'),
            array('equipOtroOtro', 'Detalle otros'),
            
            array('produccionAVOtro', 'Detalle otros'),
            array('produccionRadioNombre', 'Nombre'),
            array('produccionRadioOtro', 'Detalle otros'),
            array('produccionMultimediaOtro', 'Detalle otros'),
            array('produccionGraficaOtro', 'Detalle otros'),
            
            array('talleresArtisticos', 'Talleres Artísticos Varios (detalle)'),
            array('talleresDidacticos', 'Talleres Didácticos (detalle)'),
            array('talleresComunicPopular', 'Talleres de Comunicación Popular (detalle)'),
            array('talleresOficio', 'Talleres de Oficio (detalle)'),
            array('talleresOtros', 'Detalle Otros Talleres'),
            
            array('espectaculosOtro', 'Detalle otros'),
            array('muestrasOtro', 'Detalle otros'),
            array('contextoOtro', 'Detalle otro'),
            array('comparteOtro', 'Detalle otros'),
            array('articulacionGOtro', 'Detalle otros'),
            array('articulacionNGOtro', 'Detalle otros'),
            array('produccionRadioItem1', 'Nombre'),
            array('produccionRadioItem2', 'Nombre'),
            array('produccionRadioItem3', 'Nombre'),
            array('produccionGrafItem1', 'Nombre'),
            array('produccionGrafItem2', 'Nombre'),
            array('produccionGrafItem3', 'Nombre'),
            
            array('espacioInfoOtro','Otro'),
            
            
            
            
            
            
           
        );

        foreach ($array as $element) {
            $this->add(array(
                'name' => $element[0],
                'options' => array(
                    'label' => $element[1],
                    'label_attributes' => array(
                        'class' => 'col-sm-2 control-label'
                    ),
                ),
                'attributes' => array(
                    'id' => $element[0],
                    'type' => 'text',
                    //'required' => 'required',
                    'class' => 'form-control'
                )
            ));
        }
        
        $this->add(array(
            'type' => 'Zend\Form\Element\Checkbox',
            'name' => 'tienePJ',
            'options' => array(
                'label' => '¿Tiene Personería Jurídica?',
                'use_hidden_element' => true,
                'checked_value' => 'si',
                'unchecked_value' => 'no'
            ),
            'attributes' => array (
                'onchange' => 'toggleTienePJ(this)',
                'class' => 'col-sm-1',
                'id' =>'tienePJ'
            )
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Checkbox',
            'name' => 'accsInternet',
            'options' => array(
                'label' => 'Acceso a Internet',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'use_hidden_element' => true,
                'checked_value' => 'si',
                'unchecked_value' => 'no'
            ),
            'attributes' => array (
                'class' => 'col-sm-1',
                'id' =>'accsInternet'
            )
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Checkbox',
            'name' => 'wifi',
            'options' => array(
                'label' => '¿Ofrece Wifi?',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'use_hidden_element' => true,
                'checked_value' => 'si',
                'unchecked_value' => 'no'
            ),
            'attributes' => array (
                'class' => 'col-sm-1',
                'id' =>'wifi'
            )
        ));

        $this->add(array(
            'name' => 'anio',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'anio',
                //'required' => 'required',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Año',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'empty_option' => 'Seleccione el año del registro',
                'value_options' => array(
                    '2010' => '2010',
                    '2011' => '2011',
                    '2012' => '2012',
                    '2013' => '2013',
                    '2014' => '2014',
                    '2015' => '2015',
                ),
            )
        ));
        $this->add(array(
            'name' => 'accsTipo',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'accsTipo',
                //'required' => 'required',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Tecnología del Prestador',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'empty_option' => 'Tecnología del Prestador...',
                'value_options' => array(
                    'cableRed' => 'Cable de red',
                    'modem' => 'Modem',
                    'satelite' => 'Satélital',
                    'linea' => 'Línea telefónica',
                    'otro' => 'Otro',
                ),
            )
        ));
        //
        $this->add(array(
            'name' => 'perfil',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'perfil',
                //'required' => 'required',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Perfil principal de la Organización',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'empty_option' => 'Seleccione un elemento...',
                'value_options' => array(
                    'centroCultural' => 'Centro Cultural',
                    'bibliotecaPopular' => 'Biblioteca Popular',
                    'clubSocialDeportivo' => 'Club Social/Deportivo',
                    'centroComunitario' => 'Centro Comunitario',
                    'grupoComunitario' => 'Grupo Comunitario',
                    'medioComunicacionComunitario' => 'Medio de Comunicación Comunitario',
                    'orgEconomíaSocial' => 'Organización de la Economía Social',
                    'sociedadFomento' => 'Sociedad de Fomento',
                    'institucionEducativa' => 'Institución Educativa',
                    'otro' => 'Otro',
                ),
            )
        ));
        
        
        $this->add(array(
            'name' => 'tipoConPJ',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'tipoConPJ',
                //'required' => 'required',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Tipo de Organización',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'empty_option' => 'Seleccione un elemento...',
                'value_options' => array(
                    'cooperativa' => 'Cooperativa',
                    'mutual' => 'Mutual',
                    'asociacionCivil' => 'Asociación Civil',
                    'fundacion' => 'Fundación',
                    'comunidadesIndigenas' => 'Comunidades Indígenas',
                    'otro' => 'Otro',
                )
            )
        ));

        $this->add(array(
            'name' => 'tipoSinPJ',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'tipoSinPJ',
                //'required' => 'required',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Tipo de Organización',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'empty_option' => 'Seleccione un elemento...',
                'value_options' => array(
                    'centroComunitario' => 'Centro Comunitario',
                    'academiaEscuelaArte' => 'Academia / Escuela de Artes',
                    'colectivoArtistas' => 'Colectivo de Artistas',
                    'colectivoComunicacion' => 'Colectivo de Comunicación',
                    'colectivoEducacionPopular' => 'Colectivo de Educación Popular',
                    'otro' => 'Otro',
                )
            )
        ));
        $this->add(array(
            'name' => 'alcance',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'alcance',
                //'required' => 'required',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Alcance Territorial',
                'label_attributes' => array(
                    'class' => 'col-sm-3 control-label'
                ),
                'empty_option' => 'Seleccione un elemento...',
                'value_options' => array(
                    'nacional' => 'Nacional',
                    'regional' => 'Regional (más de una provincia)',
                    'provincial' => 'Provincial',
                    'municipal' => 'Municipal',
                    'barrialComunal' => 'Barrial / Comunal'
                )
            )
        ));
        
        
        $this->add(array(
            'name' => 'intervencion',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'intervencion',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Áreas de Intervención Estratégica',
                'label_attributes' => array(
                    'class' => 'col-sm-4 control-label'
                ),
                // permite escribir html en el label
                'label_options' => array(
                    'disable_html_escape' => true,
                ),
                'value_options' => array(
                    'proveedorasBienesServiciosBasicos' => 'Proveedoras de Bienes y Servicios Básicos',
                    'promocionDesarrollo' => 'Promoción y Desarrollo',
                    'investigacion' => 'Investigación',
                    'difusionConcientizacion' => 'Difusión y Concientización',
                    'defensaDerechos' => 'Defensa de Derechos',
                    'desarrolloProductivo' => 'Desarrollo Productivo',
                    'fomento' => 'Fomento',
                    'transparencia' => 'Transparencia',
                    'otros' => 'Otros'
                )
            )
        ));
        
        $this->add(array(
            'name' => 'actividades',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'actividades',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Principales Actividades Impulsadas',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'value_options' => array(
                    'talleres' => 'Talleres',
                    'capacitaciones' => 'Capacitaciones',
                    'conferencias' => 'Conferencias',
                    'charlas' => 'Charlas',
                    'espectaculos' => 'Espectáculos',
                    'recitales' => 'Recitales',
                    'muestras' => 'Muestras',
                    'exposiciones' => 'Exposiciones',
                    'ferias' => 'Ferias',
                    'festivales' => 'Festivales',
                    'econoSocial' => 'Emprendimientos de la Economía Social',
                    'informativos' => 'Emprendimientos Informativos/Comunicacionales'
                )
            )
        ));
        
        $this->add(array(
            'name' => 'destinatarios',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'destinatarios',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Público Destinatario',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'value_options' => array(
                    'publicoGeneral' => 'Público en General',
                    'agentesMultiplicadores' => 'Agentes Multiplicadores',
                    'orgSociales' => 'Organizaciones Sociales para el trabajo en red',
                    'ninosAdolescentesFamilia' => 'Niños y Adolescentes; Familia',
                    'jovenes' => 'Jóvenes',
                    'mayores' => 'Adultos Mayores',
                    'artistasArtesanos' => 'Artistas y Artesanos',
                    'trabajadores' => 'Trabajadores Ocupados, Trabajadores Desocupados',
                    'colectividades' => 'Colectividades',
                    'comIndigenas' => 'Comunidades Indígenas',
                    'especiales' => 'Personas con Capacidades Especiales',
                    'pobCarcelaria' => 'Población Carcelaria',
                )
            )
        ));
        /*
        $this->add(array(
            'name' => 'espacio',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'espacio',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Público Destinatario',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'empty_option' => 'Seleccione un elemento...',
                'value_options' => array(
                    'jovenes' => 'Jóvenes',
                )
            )
        ));*/

/*
 * TEXT AREAS 1?
 */
        $this->add(array(
            'name' => 'descActividades',
            'options' => array(
                'label' => 'Describa las 3 mas importantes',
                'label_attributes' => array(
                    'class' => 'col-sm-3 control-label'
                ),
            ),
            'attributes' => array(
                'id' => 'descActividades',
                'type' => 'textarea',
                //'required' => 'required',
                'class' => 'form-control',
                'onKeyDown'=>'limitText(this.form.descActividades,this.form.cddescActividades,220);',
                'onKeyUp'=>'limitText(this.form.descActividades,this.form.cddescActividades,220);'
            )
        ));
        
        $this->add(array(
            'name' => 'espacioInfo',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'espacioInfo',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Espacio Físico para el Desarrollo de Actividades',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'empty_option' => 'Seleccione un elemento...',
                'value_options' => array(
                    'propietario' => 'Propietario',
                    'alquilado' => 'Alquilado',
                    'enComodato' => 'en Comodato',
                    'otro' => 'Otro'
                )
            )
        ));
        
        $this->add(array(
            'name' => 'espacioTipoUso',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'espacioTipoUso',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Tipo de Uso',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'empty_option' => 'Seleccione un elemento...',
                'value_options' => array(
                    'exclusivo' => 'En este espacio funciona solamente esta organización',
                    'compartido' => 'Funcionan otras instituciones',
                )
            )
        ));
        
        
        
        $this->add(array(
            'name' => 'sectores',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'sectores',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Sectores existentes en el espacio',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'value_options' => array(
                    'salaReunion' => 'Sala de Reuniones',
                    'salaLectura' => 'Sala de Lectura',
                    'salaExpo' => 'Sala de Exposiciones',
                    'salaActividades' => 'Sala Taller o de Actividades',
                    'salaTeatro' => 'Sala de Teatro',
                    'salaCine' => 'Sala de Cine',
                    'sum' => 'S.U.M.',
                    'cancha' => 'Cancha deportiva',
                    'patio' => 'Patio al aire Libre',
                    'espVerde' => 'Espacio Verde',
                    'estRadio' => 'Estudio de Radio',
                    'estGrabacion' => 'Estudio de Grabación y/o TV',
                    'bar' => 'Espacio de Bar',
                )
            )
        ));
        
        $this->add(array(
            'name' => 'equipAV',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'equipAV',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Audiovisual',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'value_options' => array(
                    'camVideoD' => 'Cámara de Video Digital',
                    'camFotoD' => 'Cámara Fotográfica Digital',
                    'pantalla' => 'Pantalla',
                    'proyector' => 'Proyector',
                    'dvd' => 'Reproductor de DVD',
                )
            )
        ));
        $this->add(array(
            'name' => 'equipInformatico',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'equipInformatico',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Informático',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'value_options' => array(
                    'portatil' => 'Computadora Portátil',
                    'pc' => 'Computadora de Escritorio',
                    'scanner' => 'Scanner',
                    'impresora' => 'Impresora',
                )
            )
        ));
        $this->add(array(
            'name' => 'equipSonido',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'equipSonido',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'de Sonido',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'value_options' => array(
                    'consola' => 'Consola',
                    'amplificador' => 'Amplificador',
                    'compactera' => 'Compactera',
                    'parlantes' => 'Parlantes',
                    'microfonos' => 'Micrófonos',
                )
            )
        ));
        $this->add(array(
            'name' => 'equipEscen',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'equipEscen',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Escenográfico',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'value_options' => array(
                    'luces' => 'Luces',
                    'escenario' => 'Escenario',
                    'matCircense' => 'Material Circense',
                )
            )
        ));
        $this->add(array(
            'name' => 'equipOtro',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'equipOtro',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Miscelaneos',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'value_options' => array(
                    'gacebos' => 'Gacebos',
                    'fotocopiadora' => 'Fotocopiadora',
                    'imprenta' => 'Imprenta',
                )
            )
        ));
        
        
        $this->add(array(
            'name' => 'internet',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'internet',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Acceso a Internet',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'empty_option' => 'Seleccione un elemento...',
                'value_options' => array(
                    'sin' => 'Sin Acceso a Internet',
                    'cableRed' => 'por Cable de Red',
                    'modem' => 'por Modem',
                    'satelital' => 'por Satélite',
                    'telefono' => 'por Línea Telefónica',
                )
            )
        ));
        $this->add(array(
            'name' => 'produccionAV',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'produccionAV',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Producciones Audiovisuales',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                'value_options' => array(
                    'cortos' => 'Armado de Cortos',
                    'documentales' => 'Documentales',
                    'ficciones' => 'Ficciones',
                    'registro' => 'Registro de Actividades',
                )
            )
        ));
        $this->add(array(
            'name' => 'produccionRadio',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'produccionRadio',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Producciones Radiales',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                //'empty_option' => 'Seleccione un elemento...',
                'value_options' => array(
                    'programa' => 'Programa',
                    'informativo' => 'Informativo',
                    'radioTeatro' => 'Radio Teatro',
                )
            )
        ));
        $this->add(array(
            'name' => 'produccionMultimedia',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'produccionMultimedia',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Producciones Multimediales',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                //'empty_option' => 'Seleccione un elemento...',
                'value_options' => array(
                    'canalWeb' => 'Canal web',
                    'newsletter' => 'Newsletter',
                    'blogspot' => 'Blogspot',
                    'canalYoutube' => 'Canal Youtube',
                )
            )
        ));
        $this->add(array(
            'name' => 'produccionGrafica',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'produccionGrafica',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Contenidos Gráficos',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                //'empty_option' => 'Seleccione un elemento...',
                'value_options' => array(
                    'revistas' => 'Revistas',
                    'periodicos' => 'Periódicos',
                    'libros' => 'Libros',
                )
            )
        ));
        $this->add(array(
            'name' => 'espectaculos',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'espectaculos',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Espectáculos',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                //'empty_option' => 'Seleccione un elemento...',
                'value_options' => array(
                    'teatroComunit' => 'Teatro Comunitario',
                    'murga' => 'Murga, Comparsa y Corso',
                    'circo' => 'Circo',
                    'cine' => 'Ciclos de Cine',
                    'recitales' => 'Recitales',
                    'festivales' => 'Festivales',
                    'orquesta' => 'Orquesta Infanto-Juvenil',
                )
            )
        ));
        $this->add(array(
            'name' => 'muestras',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'muestras',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Muestras, Ferias, Otros',
                'label_attributes' => array(
                    'class' => 'col-sm-2 control-label'
                ),
                //'empty_option' => 'Seleccione un elemento...',
                'value_options' => array(
                    'feriaEconSocial' => 'Feria de Economía Social',
                    'expo' => 'Exposiciones',
                    'intervenciones' => 'Intervenciones',
                    'museo' => 'Museos',
                    'itinerante' => 'Muestras Itinerantes',
                    'peña' => 'Peña',
                    'huertaOrganica' => 'Huerta Orgánica',
                )
            )
        ));
        
        
        
        
        
        $this->add(array(
            'name' => 'contexto',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'contexto',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Contexto donde se inscribe su organización',
                'label_attributes' => array(
                    'class' => 'col-sm-4 control-label'
                ),
                'empty_option' => 'Seleccione un elemento...',
                'value_options' => array(
                    'barrioObrero' => 'Barrio obrero',
                    'barrioCentrico' => 'Barrio céntrico',
                    'villaAsentamiento' => 'Villa / Asentamiento',
                    'zonaRural' => 'Zona rural',
                    'otro' => 'Otro',
                )
            )
        ))
        ;$this->add(array(
            'name' => 'comparte',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'muestras',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Instituciones culturales existentes en el contexto de inscripción',
                'label_attributes' => array(
                    'class' => 'col-sm-4 control-label'
                ),
                'value_options' => array(
                    'cines' => 'Cines',
                    'teatros' => 'Teatros',
                    'cic' => 'C.I.C.',
                    'museos' => 'Museos',
                    'escuelasDeArte' => 'Escuelas de arte',
                    'mediosDeComunicación' => 'Medios de comunicación',
                    'universidades' => 'Universidades',
                    'centrosCulturales' => 'Centros culturales',
                    'orgSociales' => 'Organizaciones Sociales',
                    'otro' => 'Otros',
                )
            )
        ));
        $this->add(array(
            'name' => 'articulacionG',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'articulacionG',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Articulación Gubernamental',
                'label_attributes' => array(
                    'class' => 'col-sm-3 control-label'
                ),
                'value_options' => array(
                    'organismosMunicipales' => 'Organismos Municipales',
                    'organismosProvinciales' => 'Organismos Provinciales',
                    'organismosNacionales' => 'Organismos Nacionales',
                    'universidades' => 'Universidades',
                    'cic' => 'C.I.C.',
                    'centroAccesoJusticia' => 'Centros de acceso a la justicia',
                    'centroGestionParticipacionComunal' => 'Centros de gestión y participación comunal',
                    'otro' => 'Otros',
                )
            )
        ));
        $this->add(array(
            'name' => 'articulacionNG',
            'type' => 'Zend\Form\Element\Select',
            'attributes' => array(
                'id' => 'articulacionNG',
                'multiple' => 'multiple',
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Articulación No-Gubernamental',
                'label_attributes' => array(
                    'class' => 'col-sm-3 control-label'
                ),
                'value_options' => array(
                    'movSocialesPoliticos' => 'Movimientos sociales y políticos',
                    'redes' => 'Redes',
                    'federacionesConfederaciones' => 'Federaciones / Confederaciones',
                    'sindicatos' => 'Sindicatos',
                    'centrosReligiosos' => 'Centros religiosos',
                    'mesasGestionBarrial' => 'Mesas de gestión barrial',
                    'otro' => 'Otros',
                )
            )
        ));
        
/*
 * TEXT AREAS 2->
 */
        
        
        $this->add(array(
            'name' => 'descOrg',
            'options' => array(
                'label' => 'Breve descripción de la organización',
                'label_attributes' => array(
                    'class' => 'col-sm-3 control-label'
                ),
            ),
            'attributes' => array(
                'id' => 'descOrg',
                'type' => 'textarea',
                //'required' => 'required',
                'class' => 'form-control',
                'onKeyDown'=>'limitText(this.form.descOrg,this.form.cddescOrg,640);',
                'onKeyUp'=>'limitText(this.form.descOrg,this.form.cddescOrg,640);'
            )
        ));
        
        $this->add(array(
            'name' => 'descComparte',
            'options' => array(
                'label' => 'Nombre y breves características de las Instituciones culturales identificadas',
                'label_attributes' => array(
                    'class' => 'col-sm-5 control-label'
                ),
            ),
            'attributes' => array(
                'id' => 'descComparte',
                'type' => 'textarea',
                //'required' => 'required',
                'class' => 'form-control',
                'onKeyDown'=>'limitText(this.form.descComparte,this.form.cddescComparte,220);',
                'onKeyUp'=>'limitText(this.form.descComparte,this.form.cddescComparte,220);'
            )
        ));
        
        
        $this->add(array(
            'name' => 'descArticulacionG',
            'options' => array(
                'label' => 'Articulación por eje temático',
                'label_attributes' => array(
                    'class' => 'col-sm-4 control-label'
                ),
            ),
            'attributes' => array(
                'id' => 'descArticulacionG',
                'type' => 'textarea',
                //'required' => 'required',
                'class' => 'form-control',
                'onKeyDown'=>'limitText(this.form.descArticulacionG,this.form.cddescArticulacionG,220);',
                'onKeyUp'=>'limitText(this.form.descArticulacionG,this.form.cddescArticulacionG,220);'
            )
        ));
        $this->add(array(
            'name' => 'descArticulacionNG',
            'options' => array(
                'label' => 'Nombre y breves características de las Instituciones con las que articulan el trabajo',
                'label_attributes' => array(
                    'class' => 'col-sm-5 control-label'
                ),
            ),
            'attributes' => array(
                'id' => 'descArticulacionNG',
                'type' => 'textarea',
                //'required' => 'required',
                'class' => 'form-control',
                'onKeyDown'=>'limitText(this.form.descArticulacionNG,this.form.cddescArticulacionNG,220);',
                'onKeyUp'=>'limitText(this.form.descArticulacionNG,this.form.cddescArticulacionNG,220);'
            )
        ));
        
        $items = array(
            'produccionRadioItemFrec1',
            'produccionRadioItemFrec2',
            'produccionRadioItemFrec3',
            'produccionGrafItemFrec1',
            'produccionGrafItemFrec2',
            'produccionGrafItemFrec3',
            );
        
        foreach ($items as $item){
            $this->add(array(
                'name' => $item,
                'type' => 'Zend\Form\Element\Select',
                'attributes' => array(
                    'id' => $item,
                    'class' => 'form-control'
                ),
                'options' => array(
                    'label' => 'Frecuencia',
                    'label_attributes' => array(
                        'class' => 'col-sm-2 control-label'
                    ),
                    'empty_option' => 'Seleccione',
                    'value_options' => array(
                        'diaria' => 'Diaria',
                        'semanal' => 'Semanal',
                        'mensual' => 'Mensual',
                        'bimestral' => 'Bimestral',
                        'trimestral' => 'Trimestral',
                        'otro' => 'Otro',
                    )
                )
            ));
        }
        
        $ejes = array(
            array('ejeTematico1','Principal'),
            array('ejeTematico2','Segundo'),
            array('ejeTematico3','Tercero'),
            );
        $ejesopciones = array(
            'cultura' => 'Cultura',
            'arte' => 'Arte',
            'educacion' => 'Educación',
            'salud' => 'Salud',
            'derechosHumanos' => 'Derechos humanos',
            'trabajo' => 'Trabajo',
            'medioAmbiente' => 'Medio ambiente',
            'comunicacion' => 'Comunicación',
            'ciudadania' => 'Ciudadanía',
            'politica' => 'Política',
            'desarrolloSocial' => 'Desarrollo Social',
            'cienciaTecnologia' => 'Ciencia y tecnología',
            'mediosAudiovisuales' => 'Medios audiovisuales',
            'identidadDiversidad' => 'Identidad / Diversidad',
            'genero' => 'Género',
            );
        
        foreach ($ejes as $eje){
            $this->add(array(
                'name' => $eje[0],
                'type' => 'Zend\Form\Element\Select',
                'attributes' => array(
                    'id' => $eje[0],
                    'class' => 'form-control'
                ),
                'options' => array(
                    'label' => $eje[1],
                    'label_attributes' => array(
                        'class' => 'col-sm-2 control-label'
                    ),
                    'empty_option' => 'Seleccione un elemento...',
                    'value_options' => $ejesopciones
                )
            ));
        }
        
        
    }

    public function getInputFilterSpecification() {
        return array(
            'provincia' => array('required' => false),
            'anio' => array('required' => false),
'accsTipo' => array('required' => false),
'perfil' => array('required' => false),
'tipoConPJ' => array('required' => false),
'tipoSinPJ' => array('required' => false),
'alcance' => array('required' => false),
'intervencion' => array('required' => false),
'actividades' => array('required' => false),
'destinatarios' => array('required' => false),
'espacio' => array('required' => false),
'espacioInfo' => array('required' => false),
'espacioTipoUso' => array('required' => false),
'sectores' => array('required' => false),
'equipAV' => array('required' => false),
'equipInformatico' => array('required' => false),
'equipSonido' => array('required' => false),
'equipEscen' => array('required' => false),
'equipOtro' => array('required' => false),
'internet' => array('required' => false),
'produccionAV' => array('required' => false),
'produccionRadio' => array('required' => false),
'produccionMultimedia' => array('required' => false),
'produccionGrafica' => array('required' => false),
'espectaculos' => array('required' => false),
'muestras' => array('required' => false),
'contexto' => array('required' => false),
'comparte' => array('required' => false),
'articulacionG' => array('required' => false),
'articulacionNG' => array('required' => false),
'produccionRadioItemFrec1' => array('required' => false),
'produccionRadioItemFrec2' => array('required' => false),
'produccionRadioItemFrec3' => array('required' => false),
'produccionGrafItemFrec1' => array('required' => false),
'produccionGrafItemFrec2' => array('required' => false),
'produccionGrafItemFrec3' => array('required' => false),
'ejeTematico1' => array('required' => false),
'ejeTematico2' => array('required' => false),
'ejeTematico3' => array('required' => false),
                
            'nombre' => array(
                'required' => true,
                'filters' => array(
                    array('name' => 'Zend\Filter\StripTags'),
                    array('name' => 'Zend\Filter\StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name' => 'Zend\Validator\StringLength',
                        'options' => array(
                            'min' => 3,
                            'max' => 50,
                        ),
                    ),
                ),
            ),
            'email' => array(
                'required' => true,
                'filters' => array(
                    array('name' => 'Zend\Filter\StripTags'),
                    array('name' => 'Zend\Filter\StringTrim'),
                ),
                'validators' => array(array(
                        'name' => 'EmailAddress',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min' => 5,
                            'max' => 255,
                            'messages' => array(
                                \Zend\Validator\EmailAddress::INVALID_FORMAT => 'Email invalido'
                            )
                        )
                    )
                )
            )
        );
    }

}
