<?php $__env->startSection("cabecera"); ?>

INSERTAR REGISTROS

<?php $__env->stopSection(); ?>


<?php $__env->startSection("contenido"); ?>


<?php echo e(html()->form('POST', '/productos')->open()); ?>


<table>
    <tr>
        <td>Nombre: </td>
        <td>
            <?php echo e(html()->text('NombreArticulo')); ?>

            <?php echo e(csrf_field()); ?>

        </td>
    </tr>
    <tr>
        <td>Seccion: </td>
        <td>
            <?php echo e(html()->text('Seccion')); ?>

        </td>
    </tr>
    <tr>
        <td>Precio: </td>
        <td>
            <?php echo e(html()->text('Precio')); ?>

        </td>
    </tr>
    <tr>
        <td>Fecha: </td>
        <td>
            <?php echo e(html()->text('Fecha')); ?>

        </td>
    </tr>
    <tr>
        <td>Pais de Origen: </td>
        <td>
            <?php echo e(html()->text('PaisOrigen')); ?>

        </td>
    </tr>
    <tr>
        <td>
            <?php echo html()->submit('Enviar'); ?>

            <!--<input type="submit" name="enviar" value="Enviar">-->
        </td>
        <td>
            <?php echo html()->reset('Borrar campos'); ?>

            <!--<input type="reset" name="borrar" value="Borrar">-->
        </td>
    </tr>
</table>

<?php echo e(html()->form()->close()); ?>

    
<?php $__env->stopSection(); ?>

<?php $__env->startSection("pie"); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/Laravel_CRUD/resources/views/productos/create.blade.php ENDPATH**/ ?>