<?php include 'layouts/header.php'; ?>

<?php include 'layouts/headerStyle.php'; ?>

    <body class="fixed-left">

        <?php include 'layouts/loader.php'; ?>

        <section class="mt-5 mb-5">
            <div class="container-alt container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="home-wrapper m-t-40">
                            <img src="public/assets/images/logo.png" alt="logo" height="30" />
                            <h3 class="m-t-30">Coming Soon</h3>
                            <p>We are working hard to launch a new website with new features. </p>

                            <ul class="row count-down m-t-40">
                                <li class="col-lg-3 col-md-6">
                                    <input class="knob days" data-readonly=true data-min="0" data-max="365" data-width="200" data-height="200" data-thickness="0.07" data-fgcolor="#34aadc" data-bgColor="#e1e2e6" data-angleOffset="180">
                                    <span id="days-title">days</span>
                                </li>
                                <li class="col-lg-3 col-md-6">
                                    <input class="knob hour" data-readonly=true data-min="0" data-max="24" data-width="200" data-height="200" data-thickness="0.07" data-fgcolor="#4cd964" data-bgColor="#e1e2e6" data-angleOffset="180">
                                    <span id="hours-title">hours</span>
                                </li>
                                <li class="col-lg-3 col-md-6">
                                    <input class="knob minute" data-readonly=true data-min="0" data-max="60" data-width="200" data-height="200" data-thickness="0.07" data-fgcolor="#ff9500" data-bgColor="#e1e2e6" data-angleOffset="180">
                                    <span id="mins-title">minutes</span>
                                </li>
                                <li class="col-lg-3 col-md-6">
                                    <input class="knob second" data-readonly=true data-min="0" data-max="60" data-width="200" data-height="200" data-thickness="0.07" data-fgcolor="#ff3b30" data-bgColor="#e1e2e6" data-angleOffset="180">
                                    <span id="secs-title">seconds</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'layouts/footerScript.php'; ?>

        <!-- Countdown js -->
        <script src="public/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Countdown js -->
        <script src="public/plugins/jquery-ccountdown/init.js"></script>
        <script src="public/plugins/jquery-ccountdown/jquery.ccountdown.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    <script type="text/javascript">
        $(".count-down").ccountdown(2019,12,31,'23:59');
    </script>

    </body>
</html>