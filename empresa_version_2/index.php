<?php
// Define la ruta base del proyecto
define('ROOT_PATH', __DIR__ . '/'); 

// La vista que queremos cargar es el DASHBOARD LIMPIO.
// Su ruta correcta es: app/views/administrador/index.php
$admin_view_path = ROOT_PATH . 'app/views/Administrador/index.php';

// Incluir el archivo de vista del Dashboard.
if (file_exists($admin_view_path)) {
    // Esto ejecuta el código del Dashboard, que a su vez llama al header y footer.
    require_once($admin_view_path);
} else {
    // Esto solo se mostraría si moviste la carpeta 'administrador' de lugar.
    echo "Error: No se encontró la vista del administrador para iniciar. Verifique la ruta: " . $admin_view_path;
}
?>