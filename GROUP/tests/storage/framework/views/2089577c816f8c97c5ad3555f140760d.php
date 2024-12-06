<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" href="/bag.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/signin.css">

    <title>Sign In</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .wrapper {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #loginForm {
            background: #fff;
            padding: 1rem 2rem;
            border-radius: .5rem;
            box-shadow: .0625rem .0625rem .25rem rgba(0, 0, 0, .5);
        }

        .error{
            color: #ff0000;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <form id="loginForm" method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <h2 class="text-center mb-4">Login</h2>

            <!-- Display the error message if it exists -->
            <?php $__errorArgs = ['error'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger">
                    <?php echo e($message); ?>

                </div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <div class="mb-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username"
                    placeholder="Enter your username">
                <?php $__errorArgs = ['username'];
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
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Enter your password">
                <?php $__errorArgs = ['password'];
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
            <button type="submit" class="btn btn-primary w-100">Log In</button>

        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </div>
</body>
<?php /**PATH C:\Users\Administrator\group-cv-dashboard\resources\views/login.blade.php ENDPATH**/ ?>