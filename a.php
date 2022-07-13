#!/usr/bin/php
<?php 
  foreach(file('/usr/share/dict/linux.words') as $line){
    // strpos() 関数を使って、文字列 "abc" が含まれる単語を echo "$line"; で表示しなさい。
    if( strpos($line, "abc") !== false ){ // strpos()関数で$lineにabcが含まれていればtrueを返す。
      echo "$line";
    }
  } 
?>
