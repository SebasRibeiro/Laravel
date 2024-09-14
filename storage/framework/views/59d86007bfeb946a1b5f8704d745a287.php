<?php $__env->startSection("cabecera"); ?>

LEER REGISTROS

<?php $__env->stopSection(); ?>


<?php $__env->startSection("contenido"); ?>
<table border="2">
    <tr>
        <td>Nombre de Articulo</td>
        <td>Precio</td>
        <td>Seccion</td>
        <td>Pais de Origen</td>
    </tr>
    <tr></tr>
        <td><?php echo e($producto->NombreArticulo); ?></td>
        <td><?php echo e($producto->Precio); ?></td>
        <td><?php echo e($producto->Seccion); ?></td>
        <td><?php echo e($producto->PaisOrigen); ?></td>
    </tr>
    
</table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("pie"); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/Laravel_CRUD/resources/views/productos/show.blade.php ENDPATH**/ ?>