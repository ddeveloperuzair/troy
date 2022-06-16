

<?php $__env->startSection('content'); ?>

<body class="body header-fixed is_dark">

    <!-- preloade -->
    <div class="preload preload-container">
        <div class="preload-logo"></div>
    </div>
    <!-- /preload -->

    <div id="wrapper">
        <div id="page" class="clearfix">


            <section class="tf-login tf-section">
                <div class="themesflat-container">
                    <div class="row" style="margin-top:50px;">
                        <div class="col-12">
                            <h2 class="tf-title-heading ct style-1">
                                Login To NFTs
                            </h2>

                            <div class="flat-form box-login-social">
                                <div class="box-title-login">
                                    <h5>Login with social</h5>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#" class="sc-button style-2 fl-button pri-3">
                                            <i class="icon-fl-google-2"></i>
                                            <span>Google</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="sc-button style-2 fl-button pri-3">
                                            <i class="icon-fl-facebook"></i>
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="flat-form box-login-email">
                                <div class="box-title-login">
                                    <h5>Or login with email</h5>
                                </div>

                                <div class="form-inner">
                                    <form method="POST" action="<?php echo e(route('login.custom')); ?>" id="contactform" novalidate="novalidate">
                                        <?php echo csrf_field(); ?>
                                        <input id="name" name="email" tabindex="1" value="" aria-required="true" required="" type="text" placeholder="Email">
                                        <?php if($errors->has('email')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                        <?php endif; ?>
                                        <input id="password" name="password" tabindex="2" value="" aria-required="true" type="password" placeholder="Password" required="">
                                        <?php if($errors->has('password')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                        <?php endif; ?>
                                        <div class="row-form style-1">
                                            <label>Remember me
                                                <input type="checkbox" name="remember">
                                                <span class="btn-checkbox"></span>
                                            </label>
                                             
                                            <a href=" <?php echo e(route('register-user')); ?>" class="forgot-pass">Signup</a>
                                            <a href="#" class="forgot-pass">Forgot Password ?</a>
                                        </div>

                                        <button class="submit">Login</button>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
        <a id="scroll-top"></a>


</body>

</html>
<!-- <main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('login.custom')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                    autofocus>
                                <?php if($errors->has('email')): ?>
                                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                <?php if($errors->has('password')): ?>
                                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Signin</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\troy_laravel\resources\views/auth/login.blade.php ENDPATH**/ ?>