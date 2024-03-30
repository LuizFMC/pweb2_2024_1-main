<?php $__env->startSection('conteudo'); ?>
<?php $__env->startSection('titulo', 'Formulário de treino'); ?>
<?php
    if (!empty($dado->id)) {
        $route = route('treino.update', $dado->id);
    } else {
        $route = route('treino.store');
    }
?>

<h3>Formulário de treino</h3>
<form action="<?php echo e($route); ?>" method="post">

    <?php echo csrf_field(); ?>

    <?php if(!empty($dado->id)): ?>
        <?php echo method_field('put'); ?>
    <?php endif; ?>

    <input type="hidden" name="id"
        value="<?php if(!empty($dado->id)): ?> <?php echo e($dado->id); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    <label for="">Nome</label><br>
    <input type="text" name="nome" class="form-control"
        value="<?php if(!empty($dado->nome)): ?> <?php echo e($dado->nome); ?><?php elseif(!empty(old('nome'))): ?><?php echo e(old('nome')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    <label for="">Tipo</label><br>
    <input type="text" name="tipo" class="form-control"
        value="<?php if(!empty($dado->tipo)): ?> <?php echo e($dado->tipo); ?><?php elseif(!empty(old('tipo'))): ?><?php echo e(old('tipo')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    <label for="">Series</label><br>
    <input type="text" name="series" class="form-control"
        value="<?php if(!empty($dado->series)): ?> <?php echo e($dado->series); ?><?php elseif(!empty(old('series'))): ?><?php echo e(old('series')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

        <label for="">Repetições</label><br>
    <input type="text" name="reps" class="form-control"
        value="<?php if(!empty($dado->reps)): ?> <?php echo e($dado->reps); ?><?php elseif(!empty(old('reps'))): ?><?php echo e(old('reps')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="<?php echo e(url('treino')); ?>" class="btn btn-primary">Voltar</a>
    
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\pweb2_2024_1-main\resources\views/treino/form.blade.php ENDPATH**/ ?>