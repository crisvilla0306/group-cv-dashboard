<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .picture {
            width: 10rem;
            height: 10rem;
        }

        .back-btn {
            text-decoration: none;
            padding: .5rem;
            background: #009b29;
            color: white;
            border-radius: .25rem;
        }

        label {
            font-weight: 500;
        }

        .error {
            color: #ff0000;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="<?php echo e(route('dashboard')); ?>" class="back-btn">Back</a>

        <h1 class="mt-2">Edit CV</h1>
        <form action="<?php echo e(route('resume.update', $cv->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <?php if(session('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>

            <div class="mb-3">
                <img src="<?php echo e(asset('storage/' . $cv->picture)); ?>" alt="Image" class="img-thumbnail picture">
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo e(ucwords($cv->name)); ?>" class="form-control">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo e($cv->email); ?>" class="form-control">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group mb-3">
                <label for="contact">Contact</label>
                <div class="input-group">
                    <span class="input-group-text" id="addon-wrapping">+63</span>
                    <input type="number" name="contact" value="<?php echo e($cv->contact); ?>" class="form-control">
                    <?php $__errorArgs = ['contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="error"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="address">Address</label>
                <input type="text" name="address" value="<?php echo e($cv->address); ?>" class="form-control">
                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group mb-3">
                <label for="civilStatus">Civil Status</label>
                <input type="text" name="civilStatus" value="<?php echo e($cv->status); ?>" class="form-control">
                <?php $__errorArgs = ['civilStatus'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group mb-3">
                <label for="summary">Objective</label>
                <textarea name="summary" class="form-control" rows="4"><?php echo e($cv->summary); ?></textarea>
                <?php $__errorArgs = ['summary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group mb-3">
                <label for="">Education</label>
                <input name="course" class="form-control mb-3" value="<?php echo e($cv->course); ?>" placeholder="Enter course">
                <?php $__errorArgs = ['course'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input name="schoolName" class="form-control mb-3" value="<?php echo e($cv->schoolName); ?>"
                    placeholder="Enter college">
                <?php $__errorArgs = ['schoolName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input name="schoolYear" class="form-control mb-3" value="<?php echo e($cv->schoolYear); ?>"
                    placeholder="Enter year">
                <?php $__errorArgs = ['schoolYear'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group mb-3">
                <label for="skills">Skills</label>
                <input name="skills1" class="form-control mb-3" value="<?php echo e($cv->skills1); ?>" placeholder="Add skill">
                <?php $__errorArgs = ['skills1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input name="skills2" class="form-control mb-3" value="<?php echo e($cv->skills2); ?>" placeholder="Add skill">
                <?php $__errorArgs = ['skills2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input name="skills3" class="form-control mb-3" value="<?php echo e($cv->skills3); ?>" placeholder="Add skill">
                <?php $__errorArgs = ['skills3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input name="skills4" class="form-control mb-3" value="<?php echo e($cv->skills4); ?>"
                    placeholder="Add skill">
                <?php $__errorArgs = ['skills4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group mb-3">
                <label for="application_link">Application Link</label>
                <input type="text" name="applicationLink" value="<?php echo e($cv->applicationLink); ?>"
                    class="form-control">
                <?php $__errorArgs = ['applicationLink'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group mb-3">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                    <option value="N/A" <?php echo e($cv->applicationStatus == 'N/A' ? 'selected' : ''); ?>>N/A</option>
                    <option value="Received" <?php echo e($cv->applicationStatus == 'Received' ? 'selected' : ''); ?>>
                        Received</option>
                    <option value="Reviewed" <?php echo e($cv->applicationStatus == 'Reviewed' ? 'selected' : ''); ?>>
                        Reviewed</option>
                    <option value="Referred" <?php echo e($cv->applicationStatus == 'Referred' ? 'selected' : ''); ?>>
                        Referred</option>
                    <option value="Selected" <?php echo e($cv->applicationStatus == 'Selected' ? 'selected' : ''); ?>>
                        Selected</option>
                    <option value="Hired" <?php echo e($cv->applicationStatus == 'Hired' ? 'selected' : ''); ?>>Hired
                    </option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="certifications">Certifications</label>
                <input name="certifications1" class="form-control mb-3" value="<?php echo e($cv->certifications1); ?>"
                    placeholder="+Add certification">
                <?php $__errorArgs = ['certifications1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <input name="certifications2" class="form-control mb-3" value="<?php echo e($cv->certifications2); ?>"
                    placeholder="+Add certification">
                <?php $__errorArgs = ['certifications2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <button type="submit" class="btn btn-success mb-3">Save Changes</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\Users\Administrator\group-cv-dashboard\resources\views/edit.blade.php ENDPATH**/ ?>