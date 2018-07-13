<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once 'vendor/autoload.php';

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;

// database configuration parameters
$conn = array(
    'driver' => 'pdo_mysql',
    'user' => 'lies',
    'password' => 'password',
    'dbname' => 'mobile_db',
);

$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
