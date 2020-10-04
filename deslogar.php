<?php
session_start();
unset($_SESSION['UsuarioID']) ;
session_destroy(); 
header("Location: ./index.html"); exit;