<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include'all/head.php' ?>
    <title>Forms and Approvals</title>

</head>

<body>
    <?php include'formsapprovals-modals.php' ?>
    <div id="wrap">
        <?php include'all/header.php' ?>
        <section class="container-fluid">
            <section class="row">
                <?php include'h-sidenav.php' ?>
                <article class="col-md-10 col-sm-10 p20">
                    <div class="titleh">
                        <h3>Leave Application Form</h3>
                    </div>
                    <div class="tabletop">
                        <div class="tabletopleft pull-left">
                        </div>
                        <div class="tabletopright pull-right">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-raised dropdown-toggle" type="button" id="advancedsearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Advanced Search &nbsp; <span class="caret"></span></button>
                                <ul class="dropdown-menu col-md-12 col-sm-12" aria-labelledby="advancedsearch">
                                    <li>
                                        <form class="" action="" method="post">
                                            <div class="p20">
                                                <div class="form-group label-floating">
                                                    <label for="h-5-laf-search-empid" class="control-label">Employee ID</label>
                                                    <input type="text" class="form-control" id="empid" name="h-5-laf-search-empid" />
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group label-floating">
                                                    <label for="h-5-laf-search-name" class="control-label">Name</label>
                                                    <input type="text" class="form-control" id="h-5-laf-search-name" name="h-5-laf-search-name" />
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group">
                                                    <label for="h-5-laf-search-jobtitle">Job Title</label>
                                                    <select id="h-5-laf-search-jobtitle" class="form-control" name="h-5-laf-search-jobtitle">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group">
                                                    <label for="h-5-laf-search-department">Department</label>
                                                    <select id="h-5-laf-search-department" class="form-control" name="h-5-laf-search-department">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group">
                                                    <label for="h-5-laf-search-branchname">Branch Name</label>
                                                    <select id="h-5-laf-search-branchname" class="form-control" name="h-5-laf-search-branchname">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
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
                    <div class="row p20">
                        <table class="table table-responsive table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>From Date</th>
                                    <th>To Date</th>
                                    <th>No. of Days</th>
                                    <th>Paid Leave</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>HR ROLE</td>
                                    <td>Yes</td>
                                    <td><a data-toggle="modal" data-target="#viewlafhr"><i class="fa fa-external-link"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>OIC ROLE</td>
                                    <td>No</td>
                                    <td><a data-toggle="modal" data-target="#viewlafoic"><i class="fa fa-external-link"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>MANAGER ROLE</td>
                                    <td>No</td>
                                    <td><a data-toggle="modal" data-target="#viewlafmanager"><i class="fa fa-external-link"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
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
