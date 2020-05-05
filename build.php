<?php

require __DIR__."/bootstrap/builder.php";

$buildScripts = [
  BASEPATH."/src/build_scripts/telegram.php"
];

foreach ($buildScripts as $file) {
  echo sh(
    escapeshellarg(PHP_BINARY)." ".
    escapeshellarg($file)
  );
}
