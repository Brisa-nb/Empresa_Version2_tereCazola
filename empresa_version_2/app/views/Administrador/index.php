<?php
// ¡Esta ruta ahora es CORRECTA gracias a tu estructura!
require_once(__DIR__ . '/admin_header.php'); 
?>

<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Dashboard de Administración Limpio</h4>
    
    <div class="row">
        <div class="col-12">
            <div class="card p-5 text-center">
                <h2 class="text-primary">Estructura MVC Finalizada.</h2>
                <p class="lead">Este es tu dashboard limpio, cargado correctamente.</p>
            </div>
        </div>
    </div>
</div>

<?php
// Incluye el pie de página (scripts y cierre de etiquetas)
require_once(__DIR__ . '/footer.php'); 
?>