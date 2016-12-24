<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include'all/head.php' ?>
    <title>Performance Evaluation</title>

</head>

<body>
    <div id="wrap">
        <?php include'all/header.php' ?>
        <section class="container-fluid">
            <section class="row">
                <?php include'a-sidenav.php' ?>
                <article class="col-md-10 col-sm-10 p20">
                    <div class="titleh">
                        <h3>Employee Evaluation</h3>
                    </div>
                    <div class="tabletop">
                        <div class="text-left">
                            <p>
                                <span class="col-sm-2 labeltext">Name</span>
                                <span class="col-sm-3"><i class="">Lorem Ipsum</i></span>
                                <span class="col-sm-2"><i class=""></i></span>
                                <span class="col-sm-2 labeltext">Date</span>
                                <span class="col-sm-3"><i class="">Lorem Ipsum</i></span>

                                <span class="col-sm-2 labeltext">Department</span>
                                <span class="col-sm-3">Lorem Ipsum</i></span>
                                <span class="col-sm-2"><i class=""></i></span>
                                <span class="col-sm-2 labeltext">Branch Name</span>
                                <span class="col-sm-3">Lorem Ipsum</i></span>
                            </p>
                        </div>
                    </div>
                    <div class="row p20">
                        <div class="col-md-4 col-sm-12">
                            <table class="table table-responsive table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th>Rating</th>
                                        <th>Year</th>
                                        <th>Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr href="#year1" data-toggle="tab">
                                        <td>1</td>
                                        <td>2016</td>
                                        <td>lorem ipsum</td>
                                    </tr>
                                    <tr href="#year2" data-toggle="tab">
                                        <td>1</td>
                                        <td>2016</td>
                                        <td>lorem ipsum</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-1 col-sm-12 text-center">
                            <br />
                            <i class="fa fa-arrow-right employeeicon"></i><br />
                            <i class="fa fa-arrow-right employeeicon"></i>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in" id="year1">
                                    <table class="table table-responsive table-condensed table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Question</th>
                                                <th class="text-center">Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </td>
                                                <td class="text-center">3</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </td>
                                                <td class="text-center">4</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><strong>Average</strong></td>
                                                <td class="text-center">4.8</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="year2">
                                    <table class="table table-responsive table-condensed table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Question</th>
                                                <th class="text-center">Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td class="text-center">3</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Lorem ipsum dolor sit amet </td>
                                                <td class="text-center">4</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><strong>Average</strong></td>
                                                <td class="text-center">4.8</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
