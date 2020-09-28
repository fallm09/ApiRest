<?php 
class Autoloader
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__,"autoload"));
    }
   static function autoload($class)
   {
    
     // echo $class;
    //  if(file_exists("src/model/".$class.".php"))
    //  {
    //    require_once "src/model/".$class.".php"; //pour Comptedb.php  
    //  }
   
    // else if(file_exists("src/controller/".$class.".php"))
    // {
    //     require_once "src/controller/".$class.".php";
    // }
    
    //namespace
    
    $class = str_replace("config","",__DIR__.$class);

    if(file_exists(str_replace("\\","/",$class.".php")))
    {
        //var_dump(str_replace("\\","/",$class.".php"));
        //die;
        require_once str_replace("\\","/",$class.".php");
    }else{
        echo $class.' non charger';
    }

   }
  
}
Autoloader::register();










?>