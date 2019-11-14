<?php
  $variables = [
      'APP_KEY' => '937a4a8c13e317dfd28effdd479cad2f',
      'DB_HOST' => 'localhost',
      'DB_USERNAME' => 'admin',
      'DB_PASSWORD' => 'Z6fn{,TJ,mKp+&hy{yt8xUV.wc,93=N\E]=f5Q-xQtP!g&\ynxau@Z637hsUcU(,yS>Bq!',
      'DB_NAME' => 'hrhc',
      'DB_PORT' => '3306',
  ];
  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
?>
