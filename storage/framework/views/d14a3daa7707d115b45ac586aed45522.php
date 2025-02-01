<html>
<head>
    <title>Zaktualizuj Zadanie</title>
</head>
<body>
    <?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('header', null, []); ?> 
            <style>
                button {
                    color: white;
                    font-size: 15px;
                    border-width: 10px;
                    border-color: black;
                    border-radius: 6px;
                    background-color: rgb(0, 0, 0);
                    margin-top: 10px;
                }
            </style>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('Zaktualizuj zadanie')); ?>

            </h2>
         <?php $__env->endSlot(); ?>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form action="<?php echo e(route('zaktualizuj.update')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>
                            <input type="hidden" name="id" value="<?php echo e($task->id); ?>">
                            <label for="nazwa_zadania">Nazwa Zadania:</label>
                            <input type="text" id="nazwa_zadania" name="nazwa_zadania" value="<?php echo e($task->nazwa_zadania); ?>" required><br>

                            <label for="opis">Opis:</label>
                            <input type="text" id="opis" name="opis" value="<?php echo e($task->opis); ?>"><br>

                            <label for="priorytet">Priorytet:</label>
                            <select id="priorytet" name="priorytet" required>
                                <option value="low" <?php echo e($task->priorytet == 'low' ? 'selected' : ''); ?>>Low</option>
                                <option value="medium" <?php echo e($task->priorytet == 'medium' ? 'selected' : ''); ?>>Medium</option>
                                <option value="high" <?php echo e($task->priorytet == 'high' ? 'selected' : ''); ?>>High</option>
                            </select><br>

                            <label for="status">Status:</label>
                            <select id="status" name="status" required>
                                <option value="todo" <?php echo e($task->status == 'todo' ? 'selected' : ''); ?>>To Do</option>
                                <option value="in_progress" <?php echo e($task->status == 'in_progress' ? 'selected' : ''); ?>>In Progress</option>
                                <option value="done" <?php echo e($task->status == 'done' ? 'selected' : ''); ?>>Done</option>
                            </select><br>

                            <label for="termin_wykonania">Termin Wykonania:</label>
                            <input type="date" id="termin_wykonania" name="termin_wykonania" value="<?php echo e($task->termin_wykonania); ?>"><br>

                            <button type="submit">Zaktualizuj Zadanie</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
</body>
</html><?php /**PATH C:\Users\manie\Desktop\rekrutacja laravel\zadanie\resources\views/zaktualizuj.blade.php ENDPATH**/ ?>