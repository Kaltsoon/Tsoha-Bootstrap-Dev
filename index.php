<?php

  if(session_id() == '') {
    session_start();
  }

  header('Content-Type: text/html; charset=utf-8');

  require_once 'lib/bootstrap.php';
