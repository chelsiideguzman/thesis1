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
                                <ul class="dropdown-menu col-md-12 col-sm-12" aria-labelledby="advancedsearch">
                                    <li>
                                        <form class="" action="" method="post">
                                            <div class="p20">
                                                <div class="form-group label-floating">
                                                    <label for="h-4-payroll-search-empid" class="control-label">Employee ID</label>
                                                    <input type="text" class="form-control" id="h-4-payroll-search-empid" name="h-4-payroll-search-empid" />
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group label-floating">
                                                    <label for="h-4-payroll-search-name" class="control-label">Name</label>
                                                    <input type="text" class="form-control" id="h-4-payroll-search-name" name="h-4-payroll-search-name" />
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group">
                                                    <label for="h-4-payroll-search-jobtitle">Job Title</label>
                                                    <select id="h-4-payroll-search-jobtitle" class="form-control" name="h-4-payroll-search-jobtitle">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group">
                                                    <label for="h-4-payroll-search-department">Department</label>
                                                    <select id="rh-4-payroll-search-department" class="form-control" name="h-4-payroll-search-department">
                                                        <option>A</option>
                                                        <option>B</option>
                                                        <option>C</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="p20">
                                                <div class="form-group">
                                                    <label for="h-4-payroll-search-branchname">Branch Name</label>
                                                    <select id="h-4-payroll-search-branchname" class="form-control" name="h-4-payroll-search-branchname">
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
                    <div class="row overflowxtable">
                        <table class="table table-responsive table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>Hold</th>
                                    <th> No. </th>
                                    <th> Employee </th>
                                    <th> Gender </th>
                                    <th> Functional Title </th>
                                    <th> Civil Status </th>
                                    <th> No. of Dependents </th>
                                    <th> Gross Basic Monthly Salary (A) </th>
                                    <th> Gross Monthly Incentive / Commission (B) </th>
                                    <th> Gross Monthly Incentive / Commissin Per Day (B) </th>
                                    <th> A + B </th>
                                    <th> Daily Basic Wage (C) </th>
                                    <th> Cost of Living Allowance </th>
                                    <th> C + D </th>
                                    <th> No. of Working Days </th>
                                    <th> No. of Regular Holidays (Reported to Work) </th>
                                    <th> No. of Regular Holidays (Did not reported to work) </th>
                                    <th> No. of Special Holidays (Reported to work) </th>
                                    <th> Overtime (in Days) </th>
                                    <th> No. of Tardiness (in Hours) </th>
                                    <th> No. of Absences (in Days) </th>
                                    <th> Vacation Leave Applied (in Days) </th>
                                    <th> SSS </th>
                                    <th> Pag-ibig Fund </th>
                                    <th> PHIC </th>
                                    <th> Tardiness </th>
                                    <th> Absences </th>
                                    <th> Total Deductions </th>
                                    <th> Regular Holiday Pay </th>
                                    <th> Total Additions </th>
                                    <th> Others </th>
                                    <th> SSS </th>
                                    <th> Withholding Tax </th>
                                    <th> Pag-ibig Fund </th>
                                    <th> PHIC </th>
                                    <th> Tardiness </th>
                                    <th> Absences </th>
                                    <th> Total Deductions </th>
                                    <th> Regular Holiday Pay </th>
                                    <th> Special Holiday Pay </th>
                                    <th> 13th Month Pay </th>
                                    <th> Discretionary Award </th>
                                    <th> Overtime Pay </th>
                                    <th> Paid Leave </th>
                                    <th> Total Additions </th>
                                    <th> Others </th>
                                    <th> SSS </th>
                                    <th> Pag-ibig Fund </th>
                                    <th> PHIC </th>
                                    <th> Total Employer's Share </th>
                                    <th> 20th (1st to 15th) </th>
                                    <th> Employee </th>
                                    <th> No. </th>
                                    <th>&nbsp;</th>
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
                                    <td>Hold</td>
                                    <td></td>
                                    <td> No. </td>
                                    <td> Employee </td>
                                    <td> Gender </td>
                                    <td> Functional Title </td>
                                    <td> Civil Status </td>
                                    <td> No. of Dependents </td>
                                    <td> Gross Basic Montdly Salary (A) </td>
                                    <td> Gross Montdly Incentive / Commission (B) </td>
                                    <td> Gross Montdly Incentive / Commissin Per Day (B) </td>
                                    <td> A + B </td>
                                    <td> Daily Basic Wage (C) </td>
                                    <td> Cost of Living Allowance </td>
                                    <td> C + D </td>
                                    <td> No. of Working Days </td>
                                    <td> No. of Regular Holidays (Reported to Work) </td>
                                    <td> No. of Regular Holidays (Did not reported to work) </td>
                                    <td> No. of Special Holidays (Reported to work) </td>
                                    <td> Overtime (in Days) </td>
                                    <td> No. of Tardiness (in Hours) </td>
                                    <td> No. of Absences (in Days) </td>
                                    <td> Vacation Leave Applied (in Days) </td>
                                    <td> SSS </td>
                                    <td> Pag-ibig Fund </td>
                                    <td> PHIC </td>
                                    <td> Tardiness </td>
                                    <td> Absences </td>
                                    <td> Total Deductions </td>
                                    <td> Regular Holiday Pay </td>
                                    <td> Total Additions </td>
                                    <td> Otders </td>
                                    <td> SSS </td>
                                    <td> Witdholding Tax </td>
                                    <td> Pag-ibig Fund </td>
                                    <td> PHIC </td>
                                    <td> Tardiness </td>
                                    <td> Absences </td>
                                    <td> Total Deductions </td>
                                    <td> Regular Holiday Pay </td>
                                    <td> Special Holiday Pay </td>
                                    <td> 13td Month Pay </td>
                                    <td> Discretionary Award </td>
                                    <td> Overtime Pay </td>
                                    <td> Paid Leave </td>
                                    <td> Total Additions </td>
                                    <td> Others </td>
                                    <td> SSS </td>
                                    <td> Pag-ibig Fund </td>
                                    <td> PHIC </td>
                                    <td> Total Employer's Share </td>
                                    <td> 20th (1st to 15th) </td>
                                    <td><a href="#" data-toggle="modal" data-target="#editpayroll"><i class="fa fa-edit"></i></a></td>
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
