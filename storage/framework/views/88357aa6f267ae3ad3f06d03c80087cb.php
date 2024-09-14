<?php $__env->startSection("cabecera"); ?>

EDITAR REGISTRO

<?php $__env->stopSection(); ?>


<?php $__env->startSection("contenido"); ?>

<?php echo html()->form('POST', url('/productos/' . $producto->id))->open(); ?>

<?php echo csrf_field(); ?>

<?php echo html()->hidden('_method', 'PUT'); ?>


<table>
    <tr>
        <td>Nombre:</td>
        <td>
            <?php echo html()->text('NombreArticulo', $producto->NombreArticulo); ?>

        </td>
    </tr>
    <tr>
        <td>Seccion:</td>
        <td>
            <?php echo html()->text('Seccion', $producto->Seccion); ?>

        </td>
    </tr>
    <tr>
        <td>Precio:</td>
        <td>
            <?php echo html()->text('Precio', $producto->Precio); ?>

        </td>
    </tr>
    <tr>
        <td>Fecha:</td>
        <td>
            <?php echo html()->text('Fecha', $producto->Fecha); ?>

        </td>
    </tr>
    <tr>
        <td>Pais de Origen:</td>
        <td>
            <?php echo html()->text('PaisOrigen', $producto->PaisOrigen); ?>

        </td>
    </tr>
    <tr>
        <td>
            <?php echo html()->submit('Actualizar'); ?>

        </td>
        <td>
            <?php echo html()->reset('Valores Originales'); ?>

        </td>
    </tr>
</table>
<?php echo html()->form()->close(); ?>


<?php echo html()->form('POST', url('/productos/' . $producto->id))->open(); ?>

<?php echo csrf_field(); ?>

<?php echo html()->hidden('_method', 'DELETE'); ?>

<?php echo html()->submit('Eliminar Registro'); ?>

<?php echo html()->form()->close(); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection("pie"); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/Laravel_CRUD/resources/views/productos/edit.blade.php ENDPATH**/ ?>