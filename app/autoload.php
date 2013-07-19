<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var $loader ClassLoader
 */
$loader = require __DIR__.'/../vendor/autoload.php';


$loader->add('Knp\Bundle', __DIR__.'/../vendor/bundles');
$loader->add('Knp\Menu', __DIR__.'/../vendor/KnpMenu/src');
$loader->add('WhiteOctober\PagerfantaBundle', __DIR__.'/../vendor/bundles');
$loader->add('Pagerfanta', __DIR__.'/../vendor/pagerfanta/src');
$loader->add('Admingenerator', array(__DIR__.'/../src', __DIR__.'/../vendor/bundles'));
//$loader->add('Assetic', __DIR__.'/../vendor/assetic/src');


        

//$loader->registerNamespaces(array(
////    'Knp\Menu' => __DIR__.'/vendor/KnpMenu/src',
//    'Knp\Bundle' => __DIR__.'/../vendor/bundles',
//    'Knp\Menu'   => __DIR__.'/../vendor/KnpMenu/src',
//    'WhiteOctober\PagerfantaBundle' => __DIR__.'/../vendor/bundles',
//    'Pagerfanta'                    => __DIR__.'/../vendor/pagerfanta/src',
//    'Admingenerator'    => array(__DIR__.'/../src', __DIR__.'/../vendor/bundles')
//    
//));

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
