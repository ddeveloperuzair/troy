

<?php $__env->startSection('content'); ?>
<style>
    input[type="text"] {
        color: #fff !important;
    }

    input.inputfile.form-control.dd {
        cursor: pointer;
        width: 270px;
        height: 48px;
        overflow: hidden;
        padding: 52px 0 0 0;
        background: black;
        border: 2px solid;
        border-color: #fff;
        border-radius: 30px;
    }

    input.inputfile.form-control.dd:before {
        border-color: #fff;
        background-color: transparent;
        color: #fff;

    }

    label.ddd {
        text-align: center;
        top: 10px !important;
        margin: 6% 0% -10% 33%;
        position: sticky;
        font-size: 13px;
    }

    .row button.tf-button-submit.mg-t-15.btn_my {
        margin-left: 30%;
    }

    img.avatar {
        width: 260px;
    }

    .select_social_media {
        display: none;
    }

 
</style>
<section class="tf-section authors">
    <div class="themesflat-container">
        <div class="p-5 row">
            <div class="col-6">
            </div>
            <div class="col-6"></div>
        </div>
        <div class="row">
            <div class="col-3 left-widgets">
                <h2>SETTINGS</h2>
                <nav id="sidebar">
                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="profile.php" target="_parent">
                                <img src="<?php echo e(URL::asset('public/main_assets/assets/icon/profile.png')); ?>">
                                <span class="sidebar_title"> PROFILE</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('notification_setting')); ?>" target="_parent">
                                <img src="<?php echo e(URL::asset('public/main_assets/assets/icon/notificaion.png')); ?>">
                                <span class="sidebar_title"> NOTIFICATIONS</span>
                            </a>
                        </li>
                        <li>
                            <a href="offers.php" target="_parent">
                                <img src="<?php echo e(URL::asset('public/main_assets/assets/icon/offers.png')); ?>">
                                <span class="sidebar_title"> OFFERS</span>
                            </a>
                        </li>
                        <li>
                            <a href="payment.php" data-toggle="collapse" aria-expanded="false">
                                <img src="<?php echo e(URL::asset('public/main_assets/assets/icon/payment.png')); ?>">
                                <span class="sidebar_title"> PAYMENT</span>
                            </a>
                        </li>
                        <li>
                            <a href="account_support.php" target="_parent">
                                <!-- <a href="account_support.php"  target="_parent" data-toggle="collapse" aria-expanded="false"> -->
                                <img src="<?php echo e(URL::asset('public/main_assets/assets/icon/account.png')); ?>">
                                <span class="sidebar_title"> ACCOUNT SUPPORT</span>
                            </a>
                        </li>
                        <li>
                            <a href="earning.php" target="_parent">
                                <!-- <a href="earning.php"  target="_parent" data-toggle="collapse" aria-expanded="false"> -->
                                <img src="<?php echo e(URL::asset('public/main_assets/assets/icon/earning.png')); ?>">
                                <span class="sidebar_title"> EARNINGS</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-6 left-widgets">
                <h1 class="heading">Profile Settings</h1><br><br><br><br><br>
                <div class="form-upload-profile">
                    <h4 class="title-create-item">Profile Banner</h4>
                    <div class="option-profile clearfix">
                        <form action="<?php echo e(route('custom-info')); ?>" method="POST" id="contactform" novalidate="novalidate" class="form-profile" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="xyz">
                                <label class="uploadFile">
                                    <input type="file" class="inputfile form-control" name="image">
                                </label>
                            </div>
                            <div class="image">
                                <label class="uploadFile img">
                                    <?php if(!empty(Auth::user()->user_banner)): ?>
                                    <?php $dd = Auth::user()->user_banner ?>
                                    <img src="<?php echo e(asset('public/user_banner/').'/'.$dd); ?>" alt="">
                                    <?php else: ?>
                                    <img src="<?php echo e(URL::asset('public/main_assets/assets/images/backgroup-secsion/option1_bg_profile.jpg')); ?>" alt="">
                                    <?php endif; ?>
                                </label>
                            </div>
                    </div>


                    <div class="form-infor-profile">
                        <div class="info-account">
                            <h4 class="title-create-item">Account info</h4>
                            <fieldset>
                                <!-- <h4 class="title-infor-account">Display name</h4> -->
                                <input type="text" name="id" value="<?php echo e(Auth::user()->id); ?>" required="" hidden>

                                <!-- <input type="text" name="fb"  required="" hidden> -->
                                <input type="text" name="user_name" placeholder="Usaername" value="<?php echo e(Auth::user()->user_name); ?>" required="">
                            </fieldset>

                            <fieldset>
                                <textarea tabindex="4" name="bio" rows="5" required="" value="<?php echo e(Auth::user()->bio); ?>" placeholder="Bio"></textarea>
                            </fieldset>
                            <fieldset>
                                <input type="text" placeholder="Email Address" value="<?php echo e(Auth::user()->email); ?>" required="">
                            </fieldset>
                            <h4 class="title-create-item select_social_media">Select Social media</h4>
                            <div id="buy" class="dropdown" style="z-index: auto;">
                                <a href="#" class="btn-selector nolink mycl">Single Items</a>
                                <ul style="display: none;" class="">
                                    <li class="linkedin"><span>linkedin</span></li>
                                    <li class="facebook"><span>FaceBook</span></li>
                                </ul>
                            </div>
                            <p class="title-create-item-child">Help collectors verify your account by connecting</p>
                            <!-- <img class="twitter_logo" src="<?php echo e(URL::asset('public/main_assets/assets/images/images.png')); ?>"> -->
                            <!-- <button class="tf-button-submit mg-t-15 connet" type="submit">Connet</button> -->
                            <br>

                            <h4 class="title-create-item">Social media</h4>
                            <fieldset>
                                <div class="social_media"> 

                                    <!-- <input type="text" class="linkedin" name="linkedin" placeholder="Your linkedin Link"   required="">
                                    <input type="text" class="facebook" name="facebook" placeholder="Your Facebook Link"   required=""> -->

                                </div>
                            </fieldset>
                            <h4 class="title-create-item">Wallet Address</h4>

                            <fieldset>
                                <input type="text" placeholder="xb5bxb1xbb4bxb6bxb4xb1bx3bx2x0bxc6sx5scxs4szxcscc1xaccc2asx3x" required="">
                            </fieldset>
                        </div>
                    </div>

                </div>
            </div>
            <div class="right-widgets mycl">
                <div class="author-profile flex">
                    <div class="feature-profile">
                        <?php if(!empty(Auth::user()->user_img)): ?>
                        <?php $user_img = Auth::user()->user_img ?>
                        <img src="<?php echo e(asset('public/user_img/').'/'.$user_img); ?>" alt="Image" class="avatar">
                        <?php else: ?>
                        <img src="<?php echo e(URL::asset('public/main_assets/assets/images/avatar/Group231.png')); ?>" alt="Image" class="avatar">

                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <!-- <button class="tf-button-submit mg-t-15 long_btn" type="submit">Upload New Image</button> -->
                    <label for="imageUpload" class="ddd">Select file </label>
                    <input type="file" class="inputfile form-control dd" name="userimg" required="">
                </div>
                <div class="row">
                    <button class="tf-button-submit mg-t-15 long_btn" type="submit">Delete</button>
                </div>
            </div>
            <button class="tf-button-submit mg-t-15 btn_my" type="submit">Save</button>

            </form>
        </div>
    </div>
</section>

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(".linkedin").click(function() {
        $('.linkedin').css('display', 'block');
        $('.select_social_media').css('display', 'block');
    });
    $(".facebook").click(function() {
        $('.facebook').css('display', 'block');
        $('.select_social_media').css('display', 'block');
    });
</script>


</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\troy_laravel\resources\views/profile.blade.php ENDPATH**/ ?>