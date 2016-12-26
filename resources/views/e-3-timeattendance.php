<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include'all/head.php' ?>
    <title>Time Attendance</title>

</head>

<body>
    <div id="wrap">
        <?php include'all/header.php' ?>
        <section class="container-fluid">
            <section class="row">
                <article class="col-md-12 col-sm-12 p15020">
                    <button type="button" name="button" class=" btn btn-primary btn-raised" onclick="goBack();"><i class="fa fa-chevron-left"></i>&nbsp; Back</button>
                    <div class="row">

                        <div class="card">
                            <div class="card-block">
                                <div class="col-md-7 col-sm-12">
                                    <form class="" action="" method="post">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group label-floating">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                        <label for="e-3-timeattendance-empid" class="control-label">Enter Employee ID</label>
                                                        <input type="text" class="form-control" id="e-3-timeattendance-empid" name="e-3-timeattendance-empid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <table class="table table-hover table-condensed table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Employee ID</th>
                                                <th>Date Time</th>
                                                <th>Time In/Out</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2016000001</td>
                                                <td>10/13/2016 09:00am</td>
                                                <td>IN</td>
                                            </tr>
                                            <tr>
                                                <td>2016000001</td>
                                                <td>10/13/2016 09:00am</td>
                                                <td>IN</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-5 col-sm-12 p2030 text-center">
                                    <span id="date_time"></span>
                                    <script type="text/javascript">
                                        window.onload = date_time('date_time');
                                    </script>
                                    <div class="confirmation bg-success">
                                        <span class="confirmationtext">Time In Successful!</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </article>
            </section>
        </section>

    </div>
    <!--wrap-->
    <?php include'all/script.php' ?>
</body>

</html>
