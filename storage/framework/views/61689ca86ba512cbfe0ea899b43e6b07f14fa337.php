<?php $__env->startSection('topmenu_items'); ?>

<a href="<?php echo e(route('projects.index')); ?>">
    <button class="py-2 block border-b-2 border-transparent focus:outline-none font-medium capitalize text-center focus:text-green-500 focus:border-green-500 dark-focus:text-green-200 dark-focus:border-green-200 transition duration-500 ease-in-out">
    Index
    </button>
</a>

<a href="<?php echo e(route('projects.create')); ?>">
    <button class="py-2 block border-b-2 border-transparent focus:outline-none font-medium capitalize text-center focus:text-green-500 focus:border-green-500 dark-focus:text-green-200 dark-focus:border-green-200 transition duration-500 ease-in-out">
    Create
    </button>
</a>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mx-1">
        <div class="ml-2 flex flex-col">
            <h2 class="my-4 text-4xl font-semibold text-gray-600 dark:text-gray-400">
                Error 
            </h2>
            <div class="bg-red-200 text-red-900 rounded-lg shadow-md p-6 pr-10 mb-8" style="...">
                <?php echo e($exception->getMessage()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\school\project school\school\resources\views/errors/403.blade.php ENDPATH**/ ?>