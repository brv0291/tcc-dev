<?php

if($_SERVER['HTTP_HOST'] == 'localhost:63342')
{
    define('VIRTUAL_ABS', $_SERVER['HTTP_HOST']."/tcc-dev");
    define('FISICO_ABS', $_SERVER['DOCUMENT_ROOT']."tcc-dev");
    define('INTERFACE_LOJA', $_SERVER['DOCUMENT_ROOT']."tcc-dev/loja/interface");
    define('INTERFACE_ADMIN', $_SERVER['DOCUMENT_ROOT']."tcc-dev/admin/interface");
    define('DOMINIO_LOJA', $_SERVER['DOCUMENT_ROOT']."tcc-dev/loja/dominio");
}

if($_SERVER['HTTP_HOST'] == 'localhost')
{
    define('VIRTUAL_ABS', $_SERVER['HTTP_HOST']."/tcc-dev");
    define('FISICO_ABS', $_SERVER['DOCUMENT_ROOT']."tcc-dev");
    define('INTERFACE_LOJA', $_SERVER['DOCUMENT_ROOT']."tcc-dev/loja/interface");
    define('INTERFACE_ADMIN', $_SERVER['DOCUMENT_ROOT']."tcc-dev/admin/interface");
    define('DOMINIO_LOJA', $_SERVER['DOCUMENT_ROOT']."tcc-dev/loja/dominio");
}
