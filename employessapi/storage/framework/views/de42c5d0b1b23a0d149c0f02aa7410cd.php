<div>
<h1>Employee List</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>First Lastname</th>
            <th>Second Lastname</th>
            <th>First Name</th>
            <th>Other Names</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($employee->rowid); ?></td>
                <td><?php echo e($employee->firstLastName); ?></td>
                <td><?php echo e($employee->secondLastName); ?></td>
                <td><?php echo e($employee->firstName); ?></td>
                <td><?php echo e($employee->otherNames); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</div>
<?php /**PATH H:\laragon\www\employessapi\resources\views/employees.blade.php ENDPATH**/ ?>