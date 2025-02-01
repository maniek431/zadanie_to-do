<!DOCTYPE html>
<html>
<head>
    <title>Wyświetl Zadania</title>
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
                table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
            </style>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <?php echo e(__('Wyświetl zadania')); ?>

            </h2>
         <?php $__env->endSlot(); ?>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                       <center> <form method="GET" action="<?php echo e(route('wyswietl.index')); ?>">
                            <button type="submit" name="sort" value="status">Sortuj według statusu</button>
                            <button type="submit" name="sort" value="priorytet">Sortuj według priorytetu</button>
                            <button type="submit" name="sort" value="termin">Sortuj według terminu wykonania</button>
                        </form></center>
                        <br>
                        <p>
                        <center><table>
                            <thead>
                                <tr>
                            <th>Nazwa Zadania</th>
                                    <th>Opis</th>
                                    <th>Priorytet</th>
                                    <th>Status</th>
                                    <th>Termin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $wyswietl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($task->nazwa_zadania); ?></td>
                                        <td><?php echo e($task->opis); ?></td>
                                        <td><?php echo e($task->priorytet); ?></td>
                                        <td><?php echo e($task->status); ?></td>
                                        <td><?php echo e($task->termin); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table></center></p>
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
</html><?php /**PATH C:\Users\manie\Desktop\rekrutacja laravel\zadanie\resources\views/wyswietl.blade.php ENDPATH**/ ?>