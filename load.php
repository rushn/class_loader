<?php

// Loading other environment
namespace {

}

// Definition of namespace for Implementation
namespace CustomNameSpace {
      
      /**
       * Function for Autoload.
       * 
       * @return void
       * @param string $class_name    Name of an existent class. Like "PackageOne\SubPackage\ClassA"
       * 
       * */
      function __autoload($class_name)
      {
            $name_parts = explode("\\", $class_name);
            $Namespace  = $name_parts[0];
            
            unset($name_parts[0]);

            if ($Namespace === __NAMESPACE__
                && file_exists($classpath = 'modules/rls_dialer/Classes/'.implode('/', $name_parts).'.php')
            ){
                //Edit this line to fit your project structure
                include_once 'Classes/'.implode('/', $name_parts).'.php';
            }            
      }
      
      spl_autoload_register(__NAMESPACE__.'\__autoload');
}
