<?php

function dnd($data) {
  var_dump($data);
  die();
}

function sanitize($dirty) {
  return htmlentities($dirty, ENT_QUOTES, 'UTF-8');
}
