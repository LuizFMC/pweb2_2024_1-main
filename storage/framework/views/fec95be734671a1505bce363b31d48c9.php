<?php $__env->startSection('conteudo'); ?>
<?php $__env->startSection('titulo', 'Formulário de dieta'); ?>
<?php
    if (!empty($dado->id)) {
        $route = route('dieta.update', $dado->id);
    } else {
        $route = route('dieta.store');
    }
?>

<h3>Formulário de dieta</h3>
<form action="<?php echo e($route); ?>" method="post">

    <?php echo csrf_field(); ?>

    <?php if(!empty($dado->id)): ?>
        <?php echo method_field('put'); ?>
    <?php endif; ?>

    <input type="hidden" name="id"
        value="<?php if(!empty($dado->id)): ?> <?php echo e($dado->id); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    <label for="">Café</label><br>
    <input type="text" name="cafe" class="form-control"
        value="<?php if(!empty($dado->cafe)): ?> <?php echo e($dado->cafe); ?><?php elseif(!empty(old('cafe'))): ?><?php echo e(old('cafe')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    <label for="">Lanche</label><br>
    <input type="text" name="lanche1" class="form-control"
        value="<?php if(!empty($dado->lanche1)): ?> <?php echo e($dado->lanche1); ?><?php elseif(!empty(old('lanche1'))): ?><?php echo e(old('lanche1')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    <label for="">Almoço</label><br>
    <input type="text" name="almoço" class="form-control"
        value="<?php if(!empty($dado->almoço)): ?> <?php echo e($dado->almoço); ?><?php elseif(!empty(old('almoço'))): ?><?php echo e(old('almoço')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>
        
    <label for="">Lanche 2</label><br>
    <input type="text" name="lanche2" class="form-control"
        value="<?php if(!empty($dado->lanche2)): ?> <?php echo e($dado->lanche2); ?><?php elseif(!empty(old('lanche2'))): ?><?php echo e(old('lanche2')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

        <label for="">Jantar</label><br>
    <input type="text" name="janta" class="form-control"
        value="<?php if(!empty($dado->janta)): ?> <?php echo e($dado->janta); ?><?php elseif(!empty(old('janta'))): ?><?php echo e(old('janta')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

        <label for="">Ceia</label><br>
    <input type="text" name="ceia" class="form-control"
        value="<?php if(!empty($dado->ceia)): ?> <?php echo e($dado->ceia); ?><?php elseif(!empty(old('ceia'))): ?><?php echo e(old('ceia')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="<?php echo e(url('dieta')); ?>" class="btn btn-primary">Voltar</a>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pweb2_2024_1-main\resources\views/dieta/form.blade.php ENDPATH**/ ?>