<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include'all/head.php' ?>
    <title>Access Privileges</title>

</head>

<body>
    <?php include'accessprivileges-modals.php' ?>
    <?php include'attendance-modals.php' ?>
    <div id="wrap">
        <?php include'all/header.php' ?>
        <section class="container-fluid">
            <section class="row">
                <?php include'a-sidenav.php' ?>
                <article class="col-md-10 col-sm-10 p20">
                    <div class="row">
                        <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                            <li class="active"><a href="#recruitment" data-toggle="tab">Recruitment</a></li>
                            <li><a href="#employee" data-toggle="tab">Employee Management</a></li>
                            <li><a href="#attendance" data-toggle="tab">Attendance Management</a></li>
                            <li><a href="#payroll" data-toggle="tab">Payroll</a></li>
                            <li><a href="#forms" data-toggle="tab">Forms</a></li>
                            <li><a href="#approvals" data-toggle="tab">Approvals</a></li>
                            <li><a href="#aboutus" data-toggle="tab">About Us</a></li>
                            <li><a href="#performance" data-toggle="tab">Performance Evaluation</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="recruitment">
                                <div class="titleh">
                                    <h3>Recruitment</h3>
                                </div>
                                <div class="row p20">
                                    <button type="button" name="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#newrolerecruitment">New Role</button>
                                </div>
                                <div class="row p20">
                                    <table class="table table-hover table-condensed table-responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Role</th>
                                                <th>Vacancies</th>
                                                <th>Candidates</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Applicant</td>
                                                <td>Read</td>
                                                <td>N/A</td>
                                                <td><a data-toggle="modal" data-target="#editrolerecruitment"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Employee</td>
                                                <td>Read</td>
                                                <td>Read</td>
                                                <td><a data-toggle="modal" data-target="#editrolerecruitment"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Human Resources</td>
                                                <td>Create <br /> Read <br /> Update <br /> Delete </td>
                                                <td>Create <br /> Read <br /> Update <br /> Delete </td>
                                                <td><a data-toggle="modal" data-target="#editrolerecruitment"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Admin</td>
                                                <td>Create <br /> Read <br /> Update <br /> Delete </td>
                                                <td>Create <br /> Read <br /> Update <br /> Delete </td>
                                                <td><a data-toggle="modal" data-target="#editrolerecruitment"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
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
                            </div>
                            <div class="tab-pane fade" id="employee">
                                <div class="titleh">
                                    <h3>Employee Management</h3>
                                </div>
                                <div class="row p20">
                                    <button type="button" name="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#newroleemployee">New Role</button>
                                </div>
                                <div class="row p20">
                                    <table class="table table-hover table-condensed table-responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Role</th>
                                                <th>Employee Self-Service</th>
                                                <th>Employee List</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Employee</td>
                                                <td>Read</td>
                                                <td>N/A</td>
                                                <td><a data-toggle="modal" data-target="#editroleemployee"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Human Resources</td>
                                                <td>Read <br /> Update </td>
                                                <td>Create <br /> Read <br /> Update <br /> Delete </td>
                                                <td><a data-toggle="modal" data-target="#editroleemployee"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Admin</td>
                                                <td>Read <br /> Update </td>
                                                <td>Create <br /> Read <br /> Update <br /> Delete </td>
                                                <td><a data-toggle="modal" data-target="#editroleemployee"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
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
                            </div>
                            <div class="tab-pane fade" id="attendance">
                                <div class="titleh">
                                    <h3>Attendance Management</h3>
                                </div>
                                <div class="row p20">
                                    <button type="button" name="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#newroleattendance">New Role</button>
                                </div>
                                <div class="row p20">
                                    <table class="table table-hover table-condensed table-responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Role</th>
                                                <th>Time Sheet</th>
                                                <th>Working Hours</th>
                                                <th>Work Schedule</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Employee</td>
                                                <td>Read</td>
                                                <td>Create <br /> Read <br /> Update</td>
                                                <td>Read</td>
                                                <td><a data-toggle="modal" data-target="#editroleattendance"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Officer-in-charge</td>
                                                <td>Read</td>
                                                <td>Create <br /> Read <br /> Update</td>
                                                <td>Create <br /> Read <br /> Update</td>
                                                <td><a data-toggle="modal" data-target="#editroleattendance"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Manager</td>
                                                <td>Read</td>
                                                <td>Create <br /> Read <br /> Update</td>
                                                <td>Read <br /> Update</td>
                                                <td><a data-toggle="modal" data-target="#editroleattendance"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Human Resources</td>
                                                <td>Read</td>
                                                <td>Create <br /> Read <br /> Update</td>
                                                <td>Read </td>
                                                <td><a data-toggle="modal" data-target="#editroleattendance"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Admin</td>
                                                <td>Read</td>
                                                <td>N/A</td>
                                                <td>Read</td>
                                                <td><a data-toggle="modal" data-target="#editroleattendance"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
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
                            </div>
                            <div class="tab-pane fade" id="payroll">
                                <div class="titleh">
                                    <h3>Payroll</h3>
                                </div>
                                <div class="row p20">
                                    <button type="button" name="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#newrolepayroll">New Role</button>
                                </div>
                                <div class="row p20">
                                    <table class="table table-hover table-condensed table-responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Role</th>
                                                <th>Compensation</th>
                                                <th>Hold</th>
                                                <th>Export to Excel</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Employee</td>
                                                <td>Read</td>
                                                <td>N/A</td>
                                                <td>N/A</td>
                                                <td><a data-toggle="modal" data-target="#editrolepayroll"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Human Resources</td>
                                                <td>Read <br /> Update</td>
                                                <td>Read <br /> Update</td>
                                                <td>N/A</td>
                                                <td><a data-toggle="modal" data-target="#editrolepayroll"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Admin</td>
                                                <td>Read <br /> Update</td>
                                                <td>Read <br /> Update</td>
                                                <td>Read <br /> Update</td>
                                                <td><a data-toggle="modal" data-target="#editrolepayroll"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
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
                            </div>
                            <div class="tab-pane fade" id="forms">
                                <div class="titleh">
                                    <h3>Forms</h3>
                                </div>
                                <div class="row p20">
                                    <button type="button" name="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#newroleforms">New Role</button>
                                </div>
                                <div class="row p20">
                                    <table class="table table-hover table-condensed table-responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Role</th>
                                                <th>Certificate of Employment</th>
                                                <th>Leave Application Form</th>
                                                <th>Other Waives</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Employee</td>
                                                <td>Create <br /> Read <br /> Update <br /> Delete</td>
                                                <td>Create <br /> Read <br /> Update <br /> Delete</td>
                                                <td>Create <br /> Read <br /> Update <br /> Delete</td>
                                                <td><a data-toggle="modal" data-target="#editroleforms"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
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
                            </div>
                            <div class="tab-pane fade" id="approvals">
                                <div class="titleh">
                                    <h3>Approvals</h3>
                                </div>
                                <div class="row p20">
                                    <button type="button" name="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#newroleapprovals">New Role</button>
                                </div>
                                <div class="row p20">
                                    <table class="table table-hover table-condensed table-responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Role</th>
                                                <th>Certificate of Employment</th>
                                                <th>Leave Application Form</th>
                                                <th>Other Waives</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Officer-in-charge</td>
                                                <td>N/A</td>
                                                <td>Read <br /> Update</td>
                                                <td>Read <br /> Update</td>
                                                <td><a data-toggle="modal" data-target="#editroleapprovals"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Manager</td>
                                                <td>N/A</td>
                                                <td>Read <br /> Update</td>
                                                <td>Read <br /> Update</td>
                                                <td><a data-toggle="modal" data-target="#editroleapprovals"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Human Resources</td>
                                                <td>Read</td>
                                                <td>Read</td>
                                                <td>Read</td>
                                                <td><a data-toggle="modal" data-target="#editroleapprovals"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Admin</td>
                                                <td>Read</td>
                                                <td>Read</td>
                                                <td>Read</td>
                                                <td><a data-toggle="modal" data-target="#editroleapprovals"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
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
                            </div>
                            <div class="tab-pane fade" id="aboutus">
                                <div class="titleh">
                                    <h3>About Us</h3>
                                </div>
                                <div class="row p20">
                                    <button type="button" name="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#newroleaboutus">New Role</button>
                                </div>
                                <div class="row p20">
                                    <table class="table table-hover table-condensed table-responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Role</th>
                                                <th>Mission &amp; Vision</th>
                                                <th>Restaurant, Department &amp; Job Title</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>User</td>
                                                <td>Read</td>
                                                <td>N/A</td>
                                                <td><a data-toggle="modal" data-target="#editroleaboutus"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Employee</td>
                                                <td>Read</td>
                                                <td>N/A</td>
                                                <td><a data-toggle="modal" data-target="#editroleaboutus"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Human Resources</td>
                                                <td>Read</td>
                                                <td>N/A</td>
                                                <td><a data-toggle="modal" data-target="#editroleaboutus"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Admin</td>
                                                <td>Read <br /> Update <br /> Delete</td>
                                                <td>Create <br /> Read <br /> Update <br /> Delete</td>
                                                <td><a data-toggle="modal" data-target="#editroleaboutus"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
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
                            </div>
                            <div class="tab-pane fade" id="performance">
                                <div class="titleh">
                                    <h3>Performance Evaluation</h3>
                                </div>
                                <div class="row p20">
                                    <button type="button" name="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#newroleperformance">New Role</button>
                                </div>
                                <div class="row p20">
                                    <table class="table table-hover table-condensed table-responsive">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Role</th>
                                                <th>Evaluation</th>
                                                <th>Custom Evaluation</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Admin</td>
                                                <td>Create <br />Read <br /> Update <br /> Delete</td>
                                                <td>Create <br /> Read <br /> Update <br /> Delete</td>
                                                <td><a data-toggle="modal" data-target="#editroleperformance"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#deletemodal"><i class="fa fa-remove"></i></a></td>
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
