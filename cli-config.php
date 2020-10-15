<?php
// cli-config.php
require_once "accebase.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
