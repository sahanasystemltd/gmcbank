<?php include("inc/header.php"); ?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active"> Annual General Meeting</li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-12">
                                <h1 class="page-title">AGM 2023-24</h1>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="product-tabs">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 nopadding">
                                    <div class="tab-content">
<!--                                        <img src="images/ads.jpg" alt="" height="150">-->
                                        <div class="loader"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Droid+Sans);
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('http://www.downgraf.com/wp-content/uploads/2014/09/01-progress.gif?e44397') 50% 50% no-repeat rgb(249,249,249);
        }
    </style>
    <script>
        $(window).load(function(){
            $('.loader').fadeOut(3000);
        });
    </script>
<?php include("inc/footer.php"); ?>