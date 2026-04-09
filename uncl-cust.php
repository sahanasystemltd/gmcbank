<?php include('inc/header.php'); ?>
<?php
$filename = 'uncl_cust.json';
$data = file_get_contents($filename); //data read from json file
//print_r()
$users = json_decode($data, true);


?>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#"> Interest Rates</a></li>
                            <li class="active">Unclaimed Customers</li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8 col-md-9 col-sm-12 col-12">
                                <h1 class="page-title">Unclaimed Customers</h1>
                            </div>
<!--                            <div class="col-xl-6 col-lg-4 col-md-3 col-sm-12 col-12">-->
<!--                                <div class="row">-->
<!--                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">-->
<!--                                        <div class="btn-action"><a href="contact-us.php" class="btn btn-default">Contact Us</a></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="wrapper-content bg-white pinside40">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 table-responsive">
                            <table class="table table-bordered"  id="table_id">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Customer Name</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i =1; foreach ($users as $key => $val) { ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $val; ?></td>
                                    </tr>
                                <?php $i++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    </div>

    <script>
        new DataTable('#table_id');
        $(function () {
            $("#table_id_filter input").removeClass("form-control");
            $("#table_id_length select").removeClass("form-control");
        })
    </script>
<?php include('inc/footer.php'); ?>