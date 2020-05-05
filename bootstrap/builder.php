<?php

require __DIR__."/../config.php";

/**
 * @param string $class
 * @return void
 */
function classAutoload($class)
{
  if (file_exists($f = BASEPATH."/src/classes/".str_replace("\\", "/", $class).".php")) {
    require $f;
  }
}

spl_autoload_register("classAutoload");
