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
                                <label for="nvdepartment">Department</label>
                                <select id="nvdepartment" class="form-control" name="vacancydepartment">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="nvbranchname">Branch Name</label>
                                <select id="nvbranchname" class="form-control" name="vacancybranchname">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="nvstatus">Status</label>
                                <select id="nvstatus" class="form-control" name="vacancystatus">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="jobtitle" class="control-label">Job Title</label>
                                <input type="text" class="form-control" id="jobtitle" name="vacancyjobtitle" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="keywords" class="control-label">Key Words</label>
                                <input type="text" class="form-control" id="keywords" name="vacancykeywords" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="title" class="control-label">Title of Job Vancancy</label>
                                <input type="text" class="form-control" id="title" name="vacancytitle" />
                                <p class="help-block">As seen in the job hunt page</code>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="h-1-vacancy-fromdate1" class="control-label">Application Period From Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="h-1-vacancy-fromdate1" name="applicationfrom" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="h-1-vacancy-todate1" class="control-label">Application Period To Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="h-1-vacancy-todate1" name="applicationto" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="shortdesc" class="control-label">Short Description</label>
                                <textarea id="shortdesc" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="longdesc" class="control-label">Long Description</label>
                                <textarea id="longdesc" class="form-control"></textarea>
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
                                <label for="evdepartment">Department</label>
                                <select id="evdepartment" class="form-control" name="vacancydepartment">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="evbranchname">Branch Name</label>
                                <select id="evbranchname" class="form-control" name="vacancybranchname">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="evstatus">Status</label>
                                <select id="evstatus" class="form-control" name="vacancystatus">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="vjobtitle" class="control-label">Job Title</label>
                                <input type="text" class="form-control" id="vjobtitle" name="vacancyjobtitle" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="keywords" class="control-label">Key Words</label>
                                <input type="text" class="form-control" id="keywords" name="vacancykeywords" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="title" class="control-label">Title of Job Vancancy</label>
                                <input type="text" class="form-control" id="title" name="vacancytitle" />
                                <p class="help-block">As seen in the job hunt page</code>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="h-1-vacancy-fromdate2" class="control-label">Application Period From Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="h-1-vacancy-fromdate2" name="applicationfrom" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="h-1-vacancy-todate2" class="control-label">Application Period To Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="h-1-vacancy-todate2" name="applicationto" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="shortdesc" class="control-label">Short Description</label>
                                <textarea id="shortdesc" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="longdesc" class="control-label">Long Description</label>
                                <textarea id="longdesc" class="form-control"></textarea>
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
                                <label for="fn" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="fn" name="candidatefirstname" />
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="form-group label-floating">
                                <label for="mi" class="control-label">MI</label>
                                <input type="text" class="form-control" id="mi" name="candidatemiddleinitial" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="ln" class="control-label">Last Name</label>
                                <input type="text" class="form-control " id="ln" name="candidatelastname" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="ccontactno" class="control-label">Contact Number</label>
                                <input type="text" class="form-control" id="ccontactno" name="candidatecontactno" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="cemailaddress" class="control-label">Email Addres</label>
                                <input type="email" class="form-control" id="cemailaddress" name="candidateemailaddress" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="ncgender">Gender</label>
                                <select id="ncgender" class="form-control" name="candidategender">
                                        <option>Male</option>
                                        <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="nccity">City</label>
                                <select id="nccity" class="form-control" name="candidatecity">
                                    <option>A</option>
                                    <option>B</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="nc1stbranch">1st Branch Option</label>
                                <select id="nc1stbranch" class="form-control" name="candidate1stbranch">
                                        <option>A</option>
                                        <option>B</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="nc2ndbranch">2nd Branch Option</label>
                                <select id="nc2ndbranch" class="form-control" name="candidate2ndbranch">
                                        <option>A</option>
                                        <option>B</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <input type="file" id="resume" multiple="">
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
                                <label for="fn" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="fn" name="candidatefirstname" />
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                            <div class="form-group label-floating">
                                <label for="mi" class="control-label">MI</label>
                                <input type="text" class="form-control" id="mi" name="candidatemiddleinitial" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="ln" class="control-label">Last Name</label>
                                <input type="text" class="form-control " id="ln" name="candidatelastname" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="ccontactno" class="control-label">Contact Number</label>
                                <input type="text" class="form-control" id="ccontactno" name="candidatecontactno" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="cemailaddress" class="control-label">Email Addres</label>
                                <input type="email" class="form-control" id="cemailaddress" name="candidateemailaddress" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="ecgender">Gender</label>
                                <select id="ecgender" class="form-control" name="candidategender">
                                        <option>Male</option>
                                        <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="eccity">City</label>
                                <select id="eccity" class="form-control" name="candidatecity">
                                    <option>A</option>
                                    <option>B</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="ec1stbranch">1st Branch Option</label>
                                <select id="ec1stbranch" class="form-control" name="candidate1stbranch">
                                        <option>A</option>
                                        <option>B</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="ec2ndbranch">2nd Branch Option</label>
                                <select id="ec2ndbranch" class="form-control" name="candidate2ndbranch">
                                        <option>A</option>
                                        <option>B</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <input type="file" id="resume" multiple="">
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
                <div class="modal-footer">

                </div>
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
                <form class="" action="index.html" method="post">
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
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal-->
