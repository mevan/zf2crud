<?php
'home' => array(
    'type' => 'Zend\Mvc\Router\Http\Literal',
    'options' => array(
        'route'    => '/',
        'defaults' => array(
            'controller' => 'Album\Controller\Album', // <-- change here
            'action'     => 'index',
        ),
    ),
),