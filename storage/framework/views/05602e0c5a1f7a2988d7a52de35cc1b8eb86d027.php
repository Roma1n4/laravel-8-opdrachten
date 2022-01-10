<?php $__env->startSection('topmenu_items'); ?>

<div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden my-4">
        <img class="w-full h-56 object-cover object-center" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
        <div class="flex items-center px-6 py-3 bg-gray-900">
            <svg class="h-6 w-6 text-white fill-current" viewBox="0 0 512 512">
                <path d="M256 48C150 48 64 136.2 64 245.1v153.3c0 36.3 28.6 65.7 64 65.7h64V288h-85.3v-42.9c0-84.7 66.8-153.3 149.3-153.3s149.3 68.5 149.3 153.3V288H320v176h64c35.4 0 64-29.3 64-65.7V245.1C448 136.2 362 48 256 48z"/>
            </svg>
            <h1 class="mx-3 text-white font-semibold text-lg">Task</h1>
        </div>
        <div class="py-4 px-6">
            <h1 class="text-2xl font-semibold text-gray-800"><?php echo e($task -> id); ?></h1>
            <p class="py-2 text-lg text-gray-700"><?php echo e($task -> task); ?></p>
            <p class="py-2 text-lg text-gray-700"><?php echo e($task -> begindate); ?> </p>
            <p class="py-2 text-lg text-gray-700"><?php echo e($task -> enddate); ?> </p>
            <p class="py-2 text-lg text-gray-700"><?php echo e($task -> user -> name); ?> </p>
            <p class="py-2 text-lg text-gray-700"><?php echo e($task -> project -> name); ?> </p>
            <p class="py-2 text-lg text-gray-700"><?php echo e($task -> activity -> name); ?> </p>
            <p class="py-2 text-lg text-gray-700"><?php echo e($task -> created_at); ?> </p>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\school\project school\school\resources\views/admin/tasks/show.blade.php ENDPATH**/ ?>