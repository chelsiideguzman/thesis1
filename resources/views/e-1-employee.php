<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include'all/head.php' ?>
    <title>Employee Management</title>

</head>

<body>
    <div id="wrap">
        <?php include'all/header.php' ?>
        <section class="container-fluid">
            <section class="row">
                <?php include'e-sidenav.php' ?>
                <article class="col-md-10 col-sm-10 p20">
                  <div class="titleh">
                      <h3>Employee Self-Service</h3>
                  </div>
                    <form class="row" method="post" action="">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="form-group label-floating">
                                    <label for="fn" class="control-label">First Name</label>
                                    <input type="text" class="form-control  " id="fn" name="essfirstname" />
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <div class="form-group label-floating">
                                    <label for="mi" class="control-label">MI</label>
                                    <input type="text" class="form-control  " id="mi" name="essmiddleinitial" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-7">
                                <div class="form-group label-floating">
                                    <label for="ln" class="control-label">Last Name</label>
                                    <input type="text" class="form-control  " id="ln" name="esslastname" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-3">
                                <div class="form-group label-floating" id="sandbox-container">
                                    <label for="bday" class="control-label">Birthday</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control  " id="bday" name="essbday" />
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-group label-floating">
                                    <label for="contactno" class="control-label">Contact Number</label>
                                    <input type="text" class="form-control  " id="contactno" name="esscontactno" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="email" class="control-label">Email Address</label>
                                    <input type="email" class="form-control  " id="email" name="essemail" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="address1city" class="control-label">Address Line 1 (City)</label>
                                    <input type="text" class="form-control  " id="address1city" name="essaddress1city" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="address2city" class="control-label">Address Line 2 (City)</label>
                                    <input type="text" class="form-control  " id="address2city" name="essaddress2city" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="address3city" class="control-label">Address Line 3 (City)</label>
                                    <input type="text" class="form-control  " id="address3city" name="essaddress3city" />
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="zipcodecity" class="control-label">Zipcode</label>
                                    <input type="text" class="form-control  " id="zipcodecity" name="esszipcodecity" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="address1prov" class="control-label">Address Line 1 (Provincial)</label>
                                    <input type="text" class="form-control  " id="address1prov" name="essaddress1prov" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="address2prov" class="control-label">Address Line 2 (Provincial)</label>
                                    <input type="text" class="form-control  " id="address2prov" name="essaddress2prov" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="address3prov" class="control-label">Address Line 3 (Provincial)</label>
                                    <input type="text" class="form-control  " id="address3prov" name="essaddress3prov" />
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="zipcodeprov" class="control-label">Zipcode</label>
                                    <input type="text" class="form-control  " id="zipcodeprov" name="esszipcodeprov" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-sm-3">
                                <div class="form-group">
                                    <label for="e-1-gender">Gender</label>
                                    <select id="e-1-gender" class="form-control  " name="essgender">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="e-1-department">Department</label>
                                    <select id="e-1-department" class="form-control  " name="essdepartment">
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-5">
                                <div class="form-group">
                                    <label for="e-1-branchname">Branch Name</label>
                                    <select id="e-1-branchname" class="form-control  " name="essbranchname">
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
                                    <label for="pagibig" class="control-label">Pag-ibig Fund</label>
                                    <input type="text" class="form-control  " id="pagibig" name="esspagibig" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-3">
                                <div class="form-group label-floating">
                                    <label for="sss" class="control-label">SSS</label>
                                    <input type="text" class="form-control  " id="sss" name="esssss" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-group label-floating">
                                    <label for="tin" class="control-label">TIN</label>
                                    <input type="text" class="form-control  " id="tin" name="esstin" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-group label-floating">
                                    <label for="umid" class="control-label">UMID</label>
                                    <input type="text" class="form-control  " id="umid" name="essumid" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                                <div class="form-group label-floating">
                                    <label for="phic" class="control-label">PHIC</label>
                                    <input type="text" class="form-control  " id="phic" name="essphic" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <hr />
                            <h4>Dependent</h4>
                            <div class="col-md-2 col-sm-4">
                                <div class="form-group label-floating">
                                    <label for="dfn" class="control-label">Firstname</label>
                                    <input type="text" class="form-control  " id="dfn" name="essdfirstname" />
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <div class="form-group label-floating">
                                    <label for="dmi" class="control-label">MI</label>
                                    <input type="text" class="form-control  " id="dmi" name="essdmiddleinitial" />
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-7">
                                <div class="form-group label-floating">
                                    <label for="dln" class="control-label">Last Name</label>
                                    <input type="text" class="form-control  " id="dln" name="essdlastname" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="dcontactno" class="control-label">Contact Number</label>
                                    <input type="text" class="form-control  " id="dcontactno" name="essdcontactno" />
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group label-floating">
                                    <label for="demailaddress" class="control-label">Email Address</label>
                                    <input type="text" class="form-control  " id="demailaddress" name="essdemailaddress" />
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
    <?php include'all/script.php' ?>
</body>

</html>
