<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include'all/head.php' ?>
    <title>Recruitment</title>

</head>

<body>
    <?php include'recruitment-modals.php' ?>
    <div id="wrap">
        <?php include'all/header.php' ?>
        <section class="container-fluid">
            <section class="row">
                <?php include'h-sidenav.php' ?>
                <article class="col-md-10 col-sm-10 p20">
                    <div class="titleh">
                        <h3>Job Candidates</h3>
                    </div>
                    <div class="tabletop">
                        <div class="tabletopleft pull-left">
                            <br />
                            <button type="button" name="button" class="btn btn-primary btn-raised " data-toggle="modal" data-target="#newcandidate">New Candidate</button>
                        </div>
                        <div class="tabletopright pull-right">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-raised dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Advanced Search &nbsp; <span class="caret"></span></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li>
                                        <form class="" action="index.html" method="post">
                                            <div class="p20">
                                                <div class="form-group">
                                                    <label for="recvjobtitle">Job Title</label>
                                                    <select id="recvjobtitle" class="form-control" name="recvjobtitle">
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
                                                <div class="form-group">
                                                    <label for="recvstatus">Status</label>
                                                    <select id="recvstatus" class="form-control" name="recvstatus">
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
                        <table class="table table-responsive table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Job Title</th>
                                    <th>Department</th>
                                    <th>1st Branch</th>
                                    <th>2nd Branch</th>
                                    <th>Timestamp</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="warning">
                                    <td>1</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>New</td>
                                    <td><a href="" data-toggle="modal" data-target="#viewcandidate"><i class="fa fa-external-link"></i></a> &nbsp; <a href="" data-toggle="modal" data-target="#editcandidate"><i class="fa fa-edit"></i></a> &nbsp; <a href=""><i class="fa fa-remove"></i></a></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Pending</td>
                                    <td><a href="" data-toggle="modal" data-target="#viewcandidate"><i class="fa fa-external-link"></i></a> &nbsp; <a href="" data-toggle="modal" data-target="#editcandidate"><i class="fa fa-edit"></i></a> &nbsp; <a href=""><i class="fa fa-remove"></i></a></td>
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
