<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include'all/head.php' ?>
    <title>Payroll</title>

</head>

<body>
    <?php include'payroll-modals.php' ?>
    <div id="wrap">
        <?php include'all/header.php' ?>
        <section class="container-fluid">
            <section class="row">
                <?php include'h-sidenav.php' ?>
                <article class="col-md-10 col-sm-10 p20">
                    <div class="titleh">
                        <h3>Payroll</h3>
                    </div>
                    <div class="tabletop">
                        <div class="tabletopleft pull-left">
                        </div>
                        <div class="tabletopright pull-right">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-raised dropdown-toggle" type="button" id="advancedsearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Advanced Search &nbsp; <span class="caret"></span></button>
                                <ul class="dropdown-menu" aria-labelledby="advancedsearch">
                                    <li>
                                        <form class="" action="" method="post">
                                            <div class="p20">
                                                <div class="form-group label-floating">
                                                    <label for="empeid" class="control-label">Employee ID</label>
                                                    <input type="text" class="form-control" id="empeid" name="empeid" />
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group label-floating">
                                                    <label for="empname" class="control-label">Name</label>
                                                    <input type="text" class="form-control" id="empname" name="empname" />
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group">
                                                    <label for="empjobtitle">Job Title</label>
                                                    <select id="empjobtitle" class="form-control" name="empjobtitle">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group">
                                                    <label for="recvdepartment">Department</label>
                                                    <select id="recvdepartment" class="form-control" name="recvdepartment">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group">
                                                    <label for="recvbranchname">Branch Name</label>
                                                    <select id="recvbranchname" class="form-control" name="recvbranchname">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group label-floating" id="sandbox-container">
                                                    <label for="h-4-payroll-fromdate" class="control-label">From</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control " id="h-4-payroll-fromdate" name="h-4-payroll-fromdate" />
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group label-floating" id="sandbox-container">
                                                    <label for="h-4-payroll-todate" class="control-label">To</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control " id="h-4-payroll-todate" name="h-4-payroll-todate" />
                                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <button type="submit" name="button" class="btn btn-primary btn-raised btn-block">Search</button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            <span>You have searched for: <span><i>lorem ipsum</i></span></span>
                        </div>
                    </div>
                    <div class="row payrolltable">
                        <table class="table table-responsive table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>Hold</th>
                                    <th></th>
                                    <th>Employee ID</th>
                                    <th>Compensation</th>
                                    <th>ss</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox">
                                            </label>
                                          </div>
                                    </td>
                                    <td><a href="#" data-toggle="modal" data-target="#editpayroll"><i class="fa fa-edit"></i></a></td>
                                    <td>1</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                              <input type="checkbox">
                                            </label>
                                          </div>
                                    </td>
                                    <td><a href="#" data-toggle="modal" data-target="#editpayroll"><i class="fa fa-edit"></i></a></td>
                                    <td>2</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation" class="text-center">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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
