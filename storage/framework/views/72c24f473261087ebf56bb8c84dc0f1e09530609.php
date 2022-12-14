<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('title'); ?>- Laravel App</title>
    
    <!-- Tailwind CSS Link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

    <!--Recaptcha-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 
  </head>
  <body class="bg-gray-100 text-gray-800">
      <nav class="flex py-5 bg-indigo-500 text-white">
          <div class="w-1/2 px-12 mr-auto">
              <p class="text-2xl font-bold">Paleteria DJN</p>
          </div>
          <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
          <?php if(auth()->check()): ?>
              <li class="mx-6">
                  <p class="text-xl">Welcome <b><?php echo e(auth()->user()->name); ?></b></p>
                  
             </li>
              <li>
                  <a href="<?php echo e(route('login.destroy')); ?>" class="font-bold 
                  py-3 px-4 rounded-md bg-red-500 hover:bg-red-600">Log Out</a>
              </li>
          <?php else: ?>

            <li class="mx-6">
                <a href="<?php echo e(route('login.index')); ?>" class="font-semibold 
                 hover:bg-indigo-700 py-3 px-4 rounded-md">Log In</a>
            </li>
            <li>
                <a href="<?php echo e(route('register.index')); ?>" class="font-semibold 
                border-2 border-white py-2 px-4 rounded-md hover:bg-white 
                hover:text-indigo-700">Register</a>
            </li>

          <?php endif; ?>

          </ul>

      </nav>




   <?php echo $__env->yieldContent('content'); ?>

  </body>
</html><?php /**PATH C:\xampp\htdocs\balu\Seguridad\resources\views/layouts/app.blade.php ENDPATH**/ ?>