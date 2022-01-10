<?php $__env->startSection('content'); ?>
<form id="form" class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4"
    action="<?php echo e(route('projects.destroy', ['project' => $project -> id])); ?>" method="POST">
    <?php echo method_field('DELETE'); ?>
    <?php echo csrf_field(); ?>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tigh focus:outline-none focus:shadow-outline" name="name" id="name" value="<?php echo e($project -> name); ?>" type="text" disabled>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
            Description
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tigh focus:outline-none focus:shadow-outline" name="description" id="description" value="<?php echo e($project -> description); ?>" type="text" disabled>
    </div>

    <div class="flex items-center justify-between">
        <button id="submit" class="bg-green-500 hover:bg-green-700 text:white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Delete
        </button>
    </div>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ryan\Desktop\extra werk\school\laravel8-reupload\resources\views/admin/projects/delete.blade.php ENDPATH**/ ?>