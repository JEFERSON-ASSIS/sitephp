<?php

 $url = isset($_GET['url'])?$_GET['url'] : '/';

$pages = [
    '/' => 'index.php',
    '/conexao' => 'conexao.php',
    '/login' => 'Login.php',
    '/cadastro' => 'cadastro.php',
    '/cadastrausuario' =>'cadastraUsuario.php',
    '/codastroexterno' => 'cadastroExterno.php',
    '/experiencia' => 'experiencia.php',
    '/logout' => 'logout.php',
    '/insere' => 'insere.php',
    '/insertusuario' => 'insertUsuario.php',
    '/menor' => 'menor.php',
    '/pcd' => 'pcd.php',
    '/primeiro' => 'primeiro.php',
    '/vaga' =>'vaga.php',
    '/index' =>'index.html',
     
];
$include = null;

if ($url == null) {
    $include =  $pages['/'];
    
} else {
  
    foreach ($pages as $pagina => $arquivo) {
        if ($url == $pagina) {
            $include = $arquivo;
        }
    }
}
if($include){
    include $include ;
    
}else{
    include "error.php";
}