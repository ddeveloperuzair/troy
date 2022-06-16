

<?php $__env->startSection('content'); ?>
<style>
    .heading {
        text-align: left;
    }

    .card {
        padding: 18px !important;
        background-color: black;

    }

    .card-header {
        background: black;
    }

    .child-heading {
        padding: 0px 0px 0px 17px !important;
        font-size: 12px;
    }


    p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #999;
    }

    a,
    a:hover,
    a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }

    #sidebar {
        /* don't forget to add all the previously mentioned styles here too */
        background: transparent;
        color: #fff;
        transition: all 0.3s;
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #6d7fcc;
    }

    #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #47748b;
    }

    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }

    #sidebar ul li a:hover {
        color: #7386D5;
        background: #fff;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: #fff;
        background: transparent;
    }

    ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        background: transparent;
    }

    .card {
        background-color: transparent;
    }

    .card-header {
        background: transparent;
    }

    .tab-authors .menu-tab {
        padding: 20px 2% 20px 24.5%;
    }

    li.tablinksasw2s {
        margin: 0 50px;
        text-align: center;
    }

    li.tablinksasw2s small {
        font-size: 12px;
    }

    .card.main-card {
        margin: 10px 0px 0px 0px;
    }
</style>

<link rel="stylesheet" href="assets/css/font-awesome.css">
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
                            <a href="notification_setting.php" target="_parent">
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
                            <a href="payment.php" target="_parent">
                                <!-- <a href="payment.php" data-toggle="collapse" aria-expanded="false"> -->
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
            <div class="col-1 right-widgets">
            </div>
            <div class="col-5 right-widgets">
                <h1 class="heading">Notification Settings</h1><br><br>
                <span class="child-heading">Select which notifications you would like to receive for 0x3e2b..3lbl</span><br><br>
                <div class="container">

                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="grid-margin">
                                    <div class="card">
                                        <div class="faq-block card-body">
                                            <div id="accordion-1" class="accordion">
                                                <div class="card main-card my-grid">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <img src="<?php echo e(URL::asset('public/main_assets/assets/images/layer_1540.png')); ?>" class="notification_setting_img">
                                                            <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Item Sold</a>
                                                            <p class="notification_setting">When someone purchased one of your items</p>
                                                        </h5>
                                                    </div>
                                                </div>

                                                <div class="card main-card my-grid">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <img src="<?php echo e(URL::asset('public/main_assets/assets/images/layer_1540.png')); ?>" class="notification_setting_img">
                                                            <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Item Sold</a>
                                                            <p class="notification_setting">When someone purchased one of your items</p>
                                                        </h5>
                                                    </div>
                                                </div>

                                                <div class="card main-card my-grid">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <img src="<?php echo e(URL::asset('public/main_assets/assets/images/layer_1540.png')); ?>" class="notification_setting_img">
                                                            <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Item Sold</a>
                                                            <p class="notification_setting">When someone purchased one of your items</p>
                                                        </h5>
                                                    </div>
                                                </div>

                                                <div class="card main-card my-grid">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <img src="<?php echo e(URL::asset('public/main_assets/assets/images/layer_1540.png')); ?>" class="notification_setting_img">
                                                            <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Item Sold</a>
                                                            <p class="notification_setting">When someone purchased one of your items</p>
                                                        </h5>
                                                    </div>
                                                </div>

                                                <div class="card main-card my-grid">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <img src="<?php echo e(URL::asset('public/main_assets/assets/images/layer_1540.png')); ?>" class="notification_setting_img">
                                                            <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Item Sold</a>
                                                            <p class="notification_setting">When someone purchased one of your items</p>
                                                        </h5>
                                                    </div>
                                                </div>

                                                <div class="card main-card my-grid">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <img src="<?php echo e(URL::asset('public/main_assets/assets/images/layer_1540.png')); ?>" class="notification_setting_img">
                                                            <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> Item Sold</a>
                                                            <p class="notification_setting">When someone purchased one of your items</p>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br><br>
                                        <h3>Minimum Bid Threshold</h3>
                                        <p class="notification_setting-child">Receive notificaions only when you receive offers with a value greater that or equal to this amount of ETH.</p>
                                        <br>
                                        <input type="text" placeholder="0.005" required=""><br>
                                        <div class="leftcontact">
                                            <div class="form-group">
                                                <!-- <p>Surname<span>*</span></p> -->
                                                <!-- <span class="icon-case"><i class="fa fa-male"></i></span> -->
                                                <input type="text" name="nom" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné." />
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <button class="tf-button-submit mg-t-15 sm" type="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- sub col -->

                    </div><!-- parent row -->
                </div>
            </div>
        </div>
    </div>
</section>
</body>

</html>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\troy_laravel\resources\views/notification_setting.blade.php ENDPATH**/ ?>