<?php $__env->startSection('topmenu_items'); ?>

<a href="<?php echo e(route('projects.index')); ?>">
    <button
    class="py-2 block text-green-500 border-green-500
        dark:text-green-200 dark:border-green-200
        focus:outline-none border-b-2 font-medium capitalize
        transition duration-500 ease-in-out">
        Index
    </button> 
</a>
<a href="<?php echo e(route('projects.create')); ?>">
    <button
    class="ml-6 py-2 block border-b-2 border-transparent
        focus:outline-none font-medium capitalize text-center
        focus:text-green-500 focus:border-green-500
        dark-focus:text-green-200 dark-focus:border-green-200
        transition duration-500 ease-in-out">
        Create
    </button> 
</a>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container mx-1">
        <div class="ml-2 flex flex-col">
            <h2 class="my-4 text-4xl font-semibold text-gray-600 dark:text-gray-400">
                Project Admin
            </h2>
        </div>

        <?php if(session('status')): ?>
            <div class="bg-green-200 text-green-900 rounded-lg shadow-md p-6 pr-10 mb-8" style="...">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>

    <table>
        <tbody class="bg-white divide-y divide-gray-200">
        <tr>
            <th> Name </th>
            <th> Details </th>
            <th> Edit </th>
            <th> Delete </th>
        </tr>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <!-- <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    <?php echo e($project->id); ?>

                    </td> -->
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        <?php echo e($project->name); ?>

                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <a href="<?php echo e(route('projects.show', ['project' => $project -> id])); ?>"> Details </a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <a href="<?php echo e(route('projects.edit', ['project' => $project -> id])); ?>"> Edit </a>
                    </td>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete project')): ?>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <a href="<?php echo e(route('projects.delete', ['project' => $project -> id])); ?>"> Delete </a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ryan\Desktop\extra werk\school\laravel8-reupload\resources\views/admin/projects/index.blade.php ENDPATH**/ ?>