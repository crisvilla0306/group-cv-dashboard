<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="icon" href="/bag.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/dashboard.css')); ?>">
    <title>Dashboard</title>
    <style>
        .admin img{
            border-radius: 50%;
        }

        .admin span{
            font-size: 14px;
        }
    </style>

</head>

<body>
    <main>
        <div style="row-gap: 5px;display: flex; flex-direction: column; align-items: flex-end;">
            <!-- ADMIN VIEW -->
            <div
                style="cursor: default; display: flex; background: rgb(0, 255, 38); font-size: 1.2rem; color: black; padding: 8px 14px; border-radius: 7px; flex-direction: row; flex-wrap: nowrap; justify-content: center; align-items: center; column-gap: 5px;" class="admin">
                <img src="<?php echo e(asset('storage/images/default.jpg')); ?>" width="25px" height="25px"
                    alt="admin"><span>Admin</span>
            </div>
            <!-- ADMIN TABLE -->
            <table class="resume_table">
                <thead>
                    <tr class="resume_header">
                        <th class="userid_header">ID</th>
                        <th class="picture_header">Picture</th>
                        <th class="firstname_header">Name</th>
                        <th class="status_header">Status</th>
                        <th class="action_header">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="resume_row">
                            <td class="userid_td"><?php echo e($admin->id); ?></td>
                            <td class="picture_td">
                                <?php if($admin->picture): ?>
                                <img src="<?php echo e(asset('storage/'. $admin->picture)); ?>"
                                    alt="user image" width="50px" height="50px">
                                <?php else: ?>
                                <img src="<?php echo e(asset('storage/images/default.jpg')); ?>"
                                alt="user image" width="50px" height="50px">
                                <?php endif; ?>
                            </td>
                            <td class="username_td"><?php echo e(ucwords($admin->name) ?? 'N/A'); ?></td>
                            
                            <td class="status_td">
                                <form action="<?php echo e(route('resume.update', $admin->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>

                                    <?php echo method_field('PUT'); ?>
                                    <select id="status_select" name="application_status" onchange="this.form.submit()">
                                        <option value="N/A" <?php echo e($admin->applicationStatus == 'N/A' ? 'selected' : ''); ?>>N/A</option>
                                        <option value="Received" <?php echo e($admin->applicationStatus == 'Received' ? 'selected' : ''); ?>>
                                            Received</option>
                                        <option value="Reviewed" <?php echo e($admin->applicationStatus == 'Reviewed' ? 'selected' : ''); ?>>
                                            Reviewed</option>
                                        <option value="Referred" <?php echo e($admin->applicationStatus == 'Referred' ? 'selected' : ''); ?>>
                                            Referred</option>
                                        <option value="Selected" <?php echo e($admin->applicationStatus == 'Selected' ? 'selected' : ''); ?>>
                                            Selected</option>
                                        <option value="Hired" <?php echo e($admin->applicationStatus == 'Hired' ? 'selected' : ''); ?>>Hired
                                        </option>
                                    </select>
                                </form>
                            </td>
                            <td class="action_td">
                                <a href="<?php echo e(route('resume.show', $admin->id)); ?>"><button class="view-button">
                                        View</button></a>
                                <a href="<?php echo e(route('resume.edit', $admin->id)); ?>"><button class="view-button">
                                        Edit</button></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>

            <!-- ADMIN LOGOUT -->
            <form action="<?php echo e(route('logout')); ?>" method="post">
                <?php echo csrf_field(); ?>

                <button class="logout"><span>Logout</span></button>
            </form>

        </div>
    </main>
</body>

</html>
<?php /**PATH C:\Users\Administrator\group-cv-dashboard\resources\views/dashboard.blade.php ENDPATH**/ ?>