<?php
  $variables = [
      'APP_KEY' => '',
      'DB_HOST' => '',
      'DB_USERNAME' => '',
      'DB_PASSWORD' => '',
      'DB_NAME' => '',
      'DB_PORT' => '',
  ];
  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>