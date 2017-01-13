<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> @include('all.head')
    <title>Employee Management</title>

</head>

<body>
    <div id="wrap">
        @include('all.header')
        <section class="container-fluid">
            <section class="row">
                @include('e-sidenav')
                <article class="col-md-9 col-sm-9" id="rightcon">
                    <div class="titleh clearfix">
                        <button class="btn btn-default sidebar-toggle pull-left"><i class="fa fa-bars "></i></button>
                        <h3>Employee Self-Service</h3>
                    </div>
                    <form class="" method="post" action="">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-fn" class="control-label">First Name</label>
                                    <input type="text" class="form-control  " id="e-1-employee-fn" name="e-1-employee-fn" />
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-mi" class="control-label">MI</label>
                                    <input type="text" class="form-control  " id="e-1-employee-mi" name="e-1-employee-mi" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-7">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-ln" class="control-label">Last Name</label>
                                    <input type="text" class="form-control  " id="e-1-employee-ln" name="e-1-employee-ln" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-3">
                                <div class="form-group label-floating" id="sandbox-container">
                                    <label for="e-1-employee-bday" class="control-label">Birthday</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control  " id="e-1-employee-bday" name="e-1-employee-bday" />
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-contactno" class="control-label">Contact Number</label>
                                    <input type="text" class="form-control" id="e-1-employee-contactno" name="e-1-employee-contactno" />
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-email" class="control-label">Email Address</label>
                                    <input type="email" class="form-control" id="e-1-employee-email" name="e-1-employee-email" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-civilstatus" class="control-label">Civil Status</label>
                                    <select id="e-1-employee-civilstatus" class="form-control" name="e-1-employee-civilstatus">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>

                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-sex" class="control-label">Sex</label>
                                    <select id="e-1-employee-sex" class="form-control" name="e-1-employee-sex">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-address1city" class="control-label">Address Line 1 (City)</label>
                                    <input type="text" class="form-control  " id="e-1-employee-address1city" name="e-1-employee-address1city" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-address2city" class="control-label">Address Line 2 (City)</label>
                                    <input type="text" class="form-control  " id="e-1-employee-address2city" name="e-1-employee-address2city" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-address3city" class="control-label">Address Line 3 (City)</label>
                                    <input type="text" class="form-control  " id="e-1-employee-address3city" name="e-1-employee-address3city" />
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-zipcodecity" class="control-label">Zipcode</label>
                                    <input type="text" class="form-control  " id="e-1-employee-zipcodecity" name="e-1-employee-zipcodecity" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-address1prov" class="control-label">Address Line 1 (Provincial)</label>
                                    <input type="text" class="form-control  " id="e-1-employee-address1prov" name="e-1-employee-address1prov" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-address2prov" class="control-label">Address Line 2 (Provincial)</label>
                                    <input type="text" class="form-control  " id="e-1-employee-address2prov" name="e-1-employee-address2prov" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-address3prov" class="control-label">Address Line 3 (Provincial)</label>
                                    <input type="text" class="form-control  " id="e-1-employee-address3prov" name="e-1-employee-address3prov" />
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-zipcodeprov" class="control-label">Zipcode</label>
                                    <input type="text" class="form-control  " id="e-1-employee-zipcodeprov" name="e-1-employee-zipcodeprov" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-department" class="control-label">Department</label>
                                    <select id="e-1-employee-department" class="form-control" name="e-1-employee-department">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-branchname" class="control-label">Branch Name</label>
                                    <select id="e-1-employee-branchname" class="form-control  " name="e-1-employee-branchname">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-3">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-pagibig" class="control-label">Pag-ibig Fund</label>
                                    <input type="text" class="form-control  " id="e-1-employee-pagibig" name="e-1-employee-pagibig" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-sss" class="control-label">SSS</label>
                                    <input type="text" class="form-control  " id="e-1-employee-sss" name="e-1-employee-sss" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-tin" class="control-label">TIN</label>
                                    <input type="text" class="form-control  " id="e-1-employee-tin" name="ee-1-employee-tin" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-umid" class="control-label">UMID</label>
                                    <input type="text" class="form-control  " id="e-1-employee-umid" name="e-1-employee-umid" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-phic" class="control-label">PHIC</label>
                                    <input type="text" class="form-control  " id="e-1-employee-phic" name="e-1-employee-phic" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <hr />
                            <h4>Dependent</h4>
                            <div class="col-md-3 col-sm-4">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-dfn" class="control-label">Firstname</label>
                                    <input type="text" class="form-control  " id="e-1-employee-dfn" name="e-1-employee-dfn" />
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-dmi" class="control-label">MI</label>
                                    <input type="text" class="form-control  " id="e-1-employee-dmi" name="e-1-employee-dmi" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-7">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-dln" class="control-label">Last Name</label>
                                    <input type="text" class="form-control  " id="e-1-employee-dln" name="e-1-employee-dln" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-dcontactno" class="control-label">Contact Number</label>
                                    <input type="text" class="form-control  " id="e-1-employee-dcontactno" name="e-1-employee-dcontactno" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="e-1-employee-demail" class="control-label">Email Address</label>
                                    <input type="text" class="form-control  " id="e-1-employee-demail" name="e-1-employee-demail" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary btn-raised">Save</button>
                                    <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                </div>
                            </div>
                        </div>

                    </form>

                </article>
            </section>
        </section>
    </div>
    <!--wrap-->
    @include('all.script')
</body>

</html>
