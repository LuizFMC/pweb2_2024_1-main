<?php $__env->startSection('conteudo'); ?>
<?php $__env->startSection('titulo', 'Listagem de dietas'); ?>

<h3>Listagem de dietas</h3>

<form action="<?php echo e(route('dieta.search')); ?>" method="post">

    <div class="row">
        <?php echo csrf_field(); ?>
        <div class="col-4">
            <label for="">Nome</label><br>
            <input type="text" name="nome" class="form-control"><br>
        </div>
        <div class="col-4" style="margin-top: 22px;">
            <button type="submit" class="btn btn-primary"> <i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            <a href="<?php echo e(url('dieta/create')); ?>" class="btn btn-success"><i class="fa-solid fa-plus"></i> Novo</a>
        </div>
    </div>
</form>

<hr>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Café da manhã</th>
            <th>Lanche</th>
            <th>Almoço</th>
            <th>Lanche da tarde</th>
            <th>Janta</th>
            <th>Ceia</th>
            <th>Ação</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $dados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->id); ?></td>
                <td><?php echo e($item->cafe); ?></td>
                <td><?php echo e($item->lanche1); ?></td>
                <td><?php echo e($item->almoco); ?></td>
                <td><?php echo e($item->lanche2); ?></td>
                <td><?php echo e($item->janta); ?></td>
                <td><?php echo e($item->ceia); ?></td>
                <td><?php echo e($item->categoria->nome ?? ''); ?></td>
                    <form action="<?php echo e(route('dieta.destroy', $item)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-outline-danger" title="Deletar"
                            onclick="return confirm('Deseja realmente deletar esse registro?')">
                            <i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pweb2_2024_1-main\resources\views/dieta/list.blade.php ENDPATH**/ ?>