<?php
#Arquivos de diretorios raízes
$pastaInterna = "www/PreEtecMVC/";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
if(substr($_SERVER['DOCUMENT_ROOT'], -1) == '/'){ define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}"); }else{ define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}");}

#Diretorios Especificos
define('DIRIMG',DIRPAGE."public/img/");
define('DIRCSS',DIRPAGE."public/css/");
define('DIRADMIN',DIRPAGE."public/admin/");
define('DIRAUDIO',DIRPAGE."public/audio/");
define('DIRDESIGN',DIRPAGE."public/design/");
define('DIRFONTES',DIRPAGE."public/fontes/");
define('DIRVIDEO',DIRPAGE."public/video/");
define('DIRJS', DIRPAGE."public/js/");
define('DIRJQUERY', DIRPAGE."public/jquery/");

#Acesso ao Banco de Dados
define('HOST', "localhost");
define('DB', "preetec");
define('USER', "root");
define('PASS', "");