<?php $__env->startSection('conteudo'); ?>
<?php $__env->startSection('titulo', 'Formulário de produto'); ?>
<?php
    if (!empty($dado->id)) {
        $route = route('produto.update', $dado->id);
    } else {
        $route = route('produto.store');
    }
?>

<h3>Formulário de produto</h3>
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

    <label for="">Valor</label><br>
    <input type="text" name="valor" class="form-control"
        value="<?php if(!empty($dado->valor)): ?> <?php echo e($dado->valor); ?><?php elseif(!empty(old('valor'))): ?><?php echo e(old('valor')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    <label for="">Quantidade</label><br>
    <input type="text" name="qtd" class="form-control"
        value="<?php if(!empty($dado->qtd)): ?> <?php echo e($dado->qtd); ?><?php elseif(!empty(old('qtd'))): ?><?php echo e(old('qtd')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

        <label for="">Quantidade estoque </label><br>
    <input type="text" name="qtdestoque" class="form-control"
        value="<?php if(!empty($dado->qtdestoque)): ?> <?php echo e($dado->qtdestoque); ?><?php elseif(!empty(old('qtdestoque'))): ?><?php echo e(old('qtdestoque')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>


  

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="<?php echo e(url('produto')); ?>" class="btn btn-primary">Voltar</a>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\pweb2_2024_1-main\resources\views/produto/form.blade.php ENDPATH**/ ?>