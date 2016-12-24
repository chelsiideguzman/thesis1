<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include'all/head.php' ?>
    <title>Employee Management</title>

</head>

<body>
    <?php include'employee-modals.php' ?>
    <div id="wrap">
        <?php include'all/header.php' ?>
        <section class="container-fluid">
            <section class="row">
                <?php include'h-sidenav.php' ?>
                <article class="col-md-10 col-sm-10 p20">
                    <div class="titleh">
                        <h3>Employee List</h3>
                    </div>
                    <div class="tabletop clearfix">
                        <div class="tabletopleft pull-left">
                            <br />
                            <button type="button" name="button" class="btn btn-primary btn-raised " data-toggle="modal" data-target="#newemployee">New Employee</button>
                        </div>
                        <div class="tabletopright pull-right">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-raised dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Advanced Search &nbsp; <span class="caret"></span></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li>
                                        <form class="" action="index.html" method="post">
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
                                                    <label for="empdepartment">Department</label>
                                                    <select id="empdepartment" class="form-control" name="empdepartment">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group">
                                                    <label for="empbranchname">Branch Name</label>
                                                    <select id="empbranchname" class="form-control" name="empbranchname">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group">
                                                    <label for="empedits">All/Pending Edits</label>
                                                    <select id="empedits" class="form-control" name="empedits">
                                                        <option>Active</option>
                                                        <option>Inactive</option>
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
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="list-group">
                                    <div class="list-group-item">
                                        <div class="row-picture">
                                            <img class="circle" src="" alt="Image">
                                        </div>
                                        <div class="row-content">
                                            <h4 class="list-group-item-heading pull-left"><span class="text-warning">2016000001</span></h4>
                                            <p class="pull-right p10">
                                                <a href="" data-toggle="modal" data-target="#verifyemployee"><i class="fa fa-external-link employeeicon"></i></a> &nbsp;
                                                <a href="" data-toggle="modal" data-target="#editemployee"><i class="fa fa-edit employeeicon"></i></a> &nbsp;
                                                <a href=""><i class="fa fa-remove employeeicon"></i></a>
                                            </p><br /><br />
                                            <p class="list-group-item-text" style="">Chua, Olivia <br /> Department - Job title</p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
                                    <div class="list-group-item">
                                        <div class="row-picture">
                                            <img class="circle" src="" alt="Image">
                                        </div>
                                        <div class="row-content">
                                            <h4 class="list-group-item-heading pull-left"><span class="">2016000001</span></h4>
                                            <p class="pull-right p10">
                                                <a href="" data-toggle="modal" data-target="#viewemployee"><i class="fa fa-external-link employeeicon"></i></a> &nbsp;
                                                <a href="" data-toggle="modal" data-target="#editemployee"><i class="fa fa-edit employeeicon"></i></a> &nbsp;
                                                <a href=""><i class="fa fa-remove employeeicon"></i></a>
                                            </p><br /><br />
                                            <p class="list-group-item-text" style="">Chua, Olivia <br /> Department - Job title</p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="list-group" style="clear: both;">
                                    <div class="list-group-item">
                                        <div class="row-picture">
                                            <img class="circle" src="" alt="Image">
                                        </div>
                                        <div class="row-content">
                                            <h4 class="list-group-item-heading pull-left"><span class="text-warning">2016000001</span></h4>
                                            <p class="pull-right p10">
                                                <a href="" data-toggle="modal" data-target="#verifyemployee"><i class="fa fa-external-link employeeicon"></i></a> &nbsp;
                                                <a href="" data-toggle="modal" data-target="#editemployee"><i class="fa fa-edit employeeicon"></i></a> &nbsp;
                                                <a href=""><i class="fa fa-remove employeeicon"></i></a>
                                            </p><br /><br />
                                            <p class="list-group-item-text" style="">Chua, Olivia <br /> Department - Job title</p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
                                    <div class="list-group-item">
                                        <div class="row-picture">
                                            <img class="circle" src="" alt="Image">
                                        </div>
                                        <div class="row-content">
                                            <h4 class="list-group-item-heading pull-left"><span class="">2016000001</span></h4>
                                            <p class="pull-right p10">
                                                <a href="" data-toggle="modal" data-target="#viewemployee"><i class="fa fa-external-link employeeicon"></i></a> &nbsp;
                                                <a href="" data-toggle="modal" data-target="#editemployee"><i class="fa fa-edit employeeicon"></i></a> &nbsp;
                                                <a href=""><i class="fa fa-remove employeeicon"></i></a>
                                            </p><br /><br />
                                            <p class="list-group-item-text" style="">Chua, Olivia <br /> Department - Job title</p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="list-group" style="clear: both;">
                                    <div class="list-group-item">
                                        <div class="row-picture">
                                            <img class="circle" src="" alt="Image">
                                        </div>
                                        <div class="row-content">
                                            <h4 class="list-group-item-heading pull-left"><span class="text-warning">2016000001</span></h4>
                                            <p class="pull-right p10">
                                                <a href="" data-toggle="modal" data-target="#verifyemployee"><i class="fa fa-external-link employeeicon"></i></a> &nbsp;
                                                <a href="" data-toggle="modal" data-target="#editemployee"><i class="fa fa-edit employeeicon"></i></a> &nbsp;
                                                <a href=""><i class="fa fa-remove employeeicon"></i></a>
                                            </p><br /><br />
                                            <p class="list-group-item-text" style="">Chua, Olivia <br /> Department - Job title</p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
                                    <div class="list-group-item">
                                        <div class="row-picture">
                                            <img class="circle" src="" alt="Image">
                                        </div>
                                        <div class="row-content">
                                            <h4 class="list-group-item-heading pull-left"><span class="">2016000001</span></h4>
                                            <p class="pull-right p10">
                                                <a href="" data-toggle="modal" data-target="#viewemployee"><i class="fa fa-external-link employeeicon"></i></a> &nbsp;
                                                <a href="" data-toggle="modal" data-target="#editemployee"><i class="fa fa-edit employeeicon"></i></a> &nbsp;
                                                <a href=""><i class="fa fa-remove employeeicon"></i></a>
                                            </p><br /><br />
                                            <p class="list-group-item-text" style="">Chua, Olivia <br /> Department - Job title</p>
                                        </div>
                                    </div>
                                    <div class="list-group-separator"></div>
                                </div>
                            </div>
                        </div>
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
