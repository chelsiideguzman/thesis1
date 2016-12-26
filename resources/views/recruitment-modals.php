<!--Discard Vacancy Modal-->
<div class="modal fade bs-example-modal-sm" id="discardvacancymodal" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header"></div>
            <div class="modal-body">
                <div class="row p20">
                    <h4 class="text-muted">
                        Discard job vacancy?
                    </h4>
                </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary">Cancel</button>
                                <button type="button" class="btn btn-primary">Discard</button>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!--Modal-->

<!--Discard Candidate Modal-->
<div class="modal fade bs-example-modal-sm" id="discardcandidatemodal" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header"></div>
            <div class="modal-body">
                <div class="row p20">
                    <h4 class="text-muted">
                        Discard job candidate?
                    </h4>
                </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary">Cancel</button>
                                <button type="button" class="btn btn-primary">Discard</button>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<!--Modal-->

<!--Recruitment-->
<!--New Vacancy Modal-->
<div class="modal fade bs-example-modal-lg" id="newvacancy" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Create Vacancy</h3>
            </div>
            <div class="modal-body">
                <form class="" action="" method="post">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="h-1-vacancies-department1">Department</label>
                                <select id="h-1-vacancies-department1" class="form-control" name="h-1-vacancies-department1">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="h-1-vacancies-branchname1">Branch Name</label>
                                <select id="h-1-vacancies-branchname1" class="form-control" name="h-1-vacancies-branchname1">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="h-1-vacancies-status1">Status</label>
                                <select id="h-1-vacancies-status1" class="form-control" name="h-1-vacancies-status1">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="h-1-vacancies-jobtitle1" class="control-label">Job Title</label>
                                <input type="text" class="form-control" id="h-1-vacancies-jobtitle1" name="vh-1-vacancies-jobtitle1" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="h-1-vacancies-keywords1" class="control-label">Key Words</label>
                                <input type="text" class="form-control" id="h-1-vacancies-keywords1" name="h-1-vacancies-keywords1" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="h-1-vacancies-title1" class="control-label">Title of Job Vancancy</label>
                                <input type="text" class="form-control" id="h-1-vacancies-title1" name="h-1-vacancies-title1" />
                                <p class="help-block">As seen in the job hunt page</code>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="h-1-vacancies-fromdate1" class="control-label">Application Period From Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="h-1-vacancies-fromdate1" name="h-1-vacancies-fromdate1" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="h-1-vacancies-todate1" class="control-label">Application Period To Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="h-1-vacancies-todate1" name="h-1-vacancies-todate1" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="h-1-vacancies-shortdesc1" class="control-label">Short Description</label>
                                <textarea id="h-1-vacancies-shortdesc1" class="form-control" name="h-1-vacancies-shortdesc1"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="h-1-vacancies-longdesc1" class="control-label">Long Description</label>
                                <textarea id="h-1-vacancies-longdesc1" class="form-control" name="h-1-vacancies-longdesc1"></textarea>
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
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
</div>
<!--Modal-->

<!--Edit Vacancy Modal-->
<div class="modal fade bs-example-modal-lg" id="editvacancy" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Edit Vacancy</h3>
            </div>
            <div class="modal-body">
                <form class="" action="" method="post">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="h-1-vacancies-department2">Department</label>
                                <select id="h-1-vacancies-department2" class="form-control" name="h-1-vacancies-department2">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="h-1-vacancies-branchname2">Branch Name</label>
                                <select id="h-1-vacancies-branchname2" class="form-control" name="h-1-vacancies-branchname2">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="h-1-vacancies-status2">Status</label>
                                <select id="h-1-vacancies-status2" class="form-control" name="h-1-vacancies-status2">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="h-1-vacancies-jobtitle2" class="control-label">Job Title</label>
                                <input type="text" class="form-control" id="h-1-vacancies-jobtitle2" name="h-1-vacancies-jobtitle2" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="h-1-vacancies-keywords2" class="control-label">Key Words</label>
                                <input type="text" class="form-control" id="h-1-vacancies-keywords2" name="h-1-vacancies-keywords2" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="h-1-vacancies-title2" class="control-label">Title of Job Vancancy</label>
                                <input type="text" class="form-control" id="h-1-vacancies-title2" name="h-1-vacancies-title2" />
                                <p class="help-block">As seen in the job hunt page</code>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="h-1-vacancies-fromdate2" class="control-label">Application Period From Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="h-1-vacancies-fromdate2" name="h-1-vacancies-fromdate2" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="h-1-vacancies-todate2" class="control-label">Application Period To Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="h-1-vacancies-todate2" name="h-1-vacancies-todate2" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="h-1-vacancies-shortdesc2" class="control-label">Short Description</label>
                                <textarea id="h-1-vacancies-shortdesc2" class="form-control" name="h-1-vacancies-shortdesc2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="h-1-vacancies-longdesc2" class="control-label">Long Description</label>
                                <textarea id="h-1-vacancies-longdesc2" class="form-control" name="h-1-vacancies-longdesc2"></textarea>
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
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
</div>
<!--Modal-->

<!--New Candidate Modal-->
<div class="modal fade bs-example-modal-lg" id="newcandidate" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">New Candidate</h3>
            </div>
            <div class="modal-body">
                <form class="" action="" method="post">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="h-1-candidates-fn1" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="h-1-candidates-fn1" name="h-1-candidates-fn1" />
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="form-group label-floating">
                                <label for="h-1-candidates-mi1" class="control-label">MI</label>
                                <input type="text" class="form-control" id="h-1-candidates-mi1" name="h-1-candidates-mi1" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="h-1-candidates-ln1" class="control-label">Last Name</label>
                                <input type="text" class="form-control " id="h-1-candidates-ln1" name="h-1-candidates-ln1" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="h-1-candidates-contactno1" class="control-label">Contact Number</label>
                                <input type="text" class="form-control" id="h-1-candidates-contactno1" name="h-1-candidates-contactno1" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="h-1-candidates-email1" class="control-label">Email Addres</label>
                                <input type="email" class="form-control" id="h-1-candidates-email1" name="h-1-candidates-email1" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="h-1-candidates-gender1">Gender</label>
                                <select id="h-1-candidates-gender1" class="form-control" name="h-1-candidates-gender1">
                                        <option>Male</option>
                                        <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="h-1-candidates-city1">City</label>
                                <select id="h-1-candidates-city1" class="form-control" name="h-1-candidates-city1">
                                    <option>A</option>
                                    <option>B</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="h-1-candidates-1stbranch1">1st Branch Option</label>
                                <select id="h-1-candidates-1stbranch1" class="form-control" name="h-1-candidates-1stbranch1">
                                        <option>A</option>
                                        <option>B</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="h-1-candidates-2ndbranch1">2nd Branch Option</label>
                                <select id="h-1-candidates-2ndbranch1" class="form-control" name="h-1-candidates-2ndbranch1">
                                        <option>A</option>
                                        <option>B</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <input type="file" id="h-1-candidates-resume1" multiple="" name="h-1-candidates-resume1">
                                <div class="input-group">
                                    <input type="text" readonly="" class="form-control" placeholder="Attach Resume">
                                    <span class="input-group-btn input-group-sm">
                                  <button type="button" class="btn btn-fab btn-fab-mini">
                                    <i class="fa fa-paperclip"></i>
                                  </button>
                                </span>
                                </div>
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
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
</div>
<!--Modal-->

<!--Edit Candidate Modal-->
<div class="modal fade bs-example-modal-lg" id="editcandidate" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Edit Candidate</h3>
            </div>
            <div class="modal-body">
                <form class="" action="index.html" method="post">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="h-1-candidates-fn2" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="h-1-candidates-fn2" name="h-1-candidates-fn2" />
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="form-group label-floating">
                                <label for="h-1-candidates-mi2" class="control-label">MI</label>
                                <input type="text" class="form-control" id="h-1-candidates-mi2" name="h-1-candidates-mi2" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="h-1-candidates-ln2" class="control-label">Last Name</label>
                                <input type="text" class="form-control " id="h-1-candidates-ln2" name="h-1-candidates-ln2" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="h-1-candidates-contactno2" class="control-label">Contact Number</label>
                                <input type="text" class="form-control" id="h-1-candidates-contactno2" name="h-1-candidates-contactno2" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="h-1-candidates-email2" class="control-label">Email Addres</label>
                                <input type="email" class="form-control" id="h-1-candidates-email2" name="h-1-candidates-email2" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="h-1-candidates-gender2">Gender</label>
                                <select id="h-1-candidates-gender2" class="form-control" name="h-1-candidates-gender2">
                                        <option>Male</option>
                                        <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="h-1-candidates-city2">City</label>
                                <select id="h-1-candidates-city2" class="form-control" name="h-1-candidates-city2">
                                    <option>A</option>
                                    <option>B</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="h-1-candidates-1stbranch2">1st Branch Option</label>
                                <select id="h-1-candidates-1stbranch2" class="form-control" name="h-1-candidates-1stbranch2">
                                        <option>A</option>
                                        <option>B</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="h-1-candidates-2ndbranch2">2nd Branch Option</label>
                                <select id="h-1-candidates-2ndbranch2" class="form-control" name="h-1-candidates-2ndbranch2">
                                        <option>A</option>
                                        <option>B</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <input type="file" id="h-1-candidates-resume2" multiple="" name="h-1-candidates-resume2">
                                <div class="input-group">
                                    <input type="text" readonly="" class="form-control" placeholder="Attach Resume">
                                    <span class="input-group-btn input-group-sm">
                                  <button type="button" class="btn btn-fab btn-fab-mini">
                                    <i class="fa fa-paperclip"></i>
                                  </button>
                                </span>
                                </div>
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
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!--Modal-->
<!--View Candidate Modal-->
<div class="modal fade" id="viewcandidate" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Applicant Information</h3>
            </div>
            <div class="modal-body">
                <form class="" action="" method="post">
                    <div class="row p20">
                        <p>
                            <span class="col-sm-4 labeltext">Applied For</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span><br />
                            <span class="col-sm-4 labeltext">Name</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Contact Number</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Email Address</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Gender</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">City</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">1st Branch Option</span></span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">2nd Branch Option</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="pull-right">
                                <button type="button" name="button" class="btn btn-primary btn-raised">Download File <i class="fa fa-download"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!--Modal-->

<!--Job Title Modal-->
<div class="modal fade bs-example-modal-lg" id="jobtitlemodal" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Job Title</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <h4>Branch</h4>
                        <small>Date Posted: <span>10/10/2016</span></small>
                        <h4>Job Description</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a href="u-1-recruitment-jobapplication.php" class="btn btn-primary btn-raised btn-block">Apply Now!</a>

                    </div>
                    <div class="col-md-8 col-sm-12">
                        <h4>Key Responsibilities</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <h4>Skills &amp; Expertise</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!--Modal-->
