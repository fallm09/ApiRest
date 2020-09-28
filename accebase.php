<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/entities/"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer yaml or XML."/src/entities/"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(DIR."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(DIR."/config/yaml"), $isDevMode);

// database configuration parameters
$conn = array(
    "dbname" => "gestion_donnes",
    "user" => "root",
    "password" => "",
    "host" => "127.0.0.1",
    "driver" => "pdo_mysql",
);
// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
