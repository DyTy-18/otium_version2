<?php
// BORRAR ESTE ARCHIVO DESPUÉS DE USARLO
$target = __DIR__ . '/../storage/app/public';
$link   = __DIR__ . '/storage';

if (file_exists($link)) {
    echo 'El symlink ya existe en: ' . $link;
    exit;
}

if (symlink($target, $link)) {
    echo 'Symlink creado correctamente. BORRA ESTE ARCHIVO AHORA.';
} else {
    echo 'Error al crear symlink. Puede que symlink() también esté deshabilitada.';
}
