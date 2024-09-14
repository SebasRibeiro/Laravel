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
    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr></tr>
        <td><a href="<?php echo e(route('productos.edit', $producto->id)); ?>"><?php echo e($producto->NombreArticulo); ?></a></td>
        <td><?php echo e($producto->Precio); ?></td>
        <td><?php echo e($producto->Seccion); ?></td>
        <td><?php echo e($producto->PaisOrigen); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<a href="<?php echo e(route('productos.create')); ?>">
    <button type="button">Crear Producto</button>
</a>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("pie"); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/Laravel_CRUD/resources/views/productos/index.blade.php ENDPATH**/ ?>