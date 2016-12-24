<!--Forms and Approvals-->
<!--New Certificate of Employment Modal-->
<div class="modal fade bs-example-modal-lg" id="newcoe" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Certificate of Employment</h3>
            </div>
            <div class="modal-body">
                <form class="" action="" method="post">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="fn" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="fn" name="coefirstname" />
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-2">
                            <div class="form-group label-floating">
                                <label for="mi" class="control-label">MI</label>
                                <input type="text" class="form-control" id="mi" name="coemiddleinitial" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="ln" class="control-label">Last Name</label>
                                <input type="text" class="form-control " id="ln" name="coelastname" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="jobtitle" class="control-label">Job Title</label>
                                <input type="text" class="form-control" id="jobtitle" name="coejobtitle" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="branchname">Branch Name</label>
                                <select id="branchname" class="form-control" name="coebranchname">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="e-4-coe-dateneeded1" class="control-label">Date Needed</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="e-4-coe-dateneeded1" name="coedateneeded" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="addressee" class="control-label">Addressee</label>
                                <input type="text" class="form-control" id="addressee" name="coeaddressee" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="address" class="control-label">Address of Recipient</label>
                                <input type="text" class="form-control" id="address" name="coeaddress" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="purpose" class="control-label">Purpose</label>
                                <textarea id="purpose" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="salary" class="control-label">Annual Gross Salary</label>
                                <input type="text" class="form-control" id="salary" name="coesalary" />
                            </div>
                        </div>
                        <div class="col=md-8 col-sm-4">
                            <div class="radio">
                                <label><input type="radio" name="sample1" value="option1" checked="">Include</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="sample1" value="option1">Don't Include</label>
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
<!--Edit Certificate of Employment Modal-->
<div class="modal fade bs-example-modal-lg" id="editcoe" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Certificate of Employment</h3>
            </div>
            <div class="modal-body">
                <form class="" action="" method="post">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="fn" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="fn" name="coefirstname" />
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-2">
                            <div class="form-group label-floating">
                                <label for="mi" class="control-label">MI</label>
                                <input type="text" class="form-control" id="mi" name="coemiddleinitial" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="ln" class="control-label">Last Name</label>
                                <input type="text" class="form-control " id="ln" name="coelastname" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="jobtitle" class="control-label">Job Title</label>
                                <input type="text" class="form-control" id="jobtitle" name="coejobtitle" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="branchname">Branch Name</label>
                                <select id="branchname" class="form-control" name="coebranchname">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="e-4-coe-dateneeded2" class="control-label">Date Needed</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="e-4-coe-dateneeded2" name="coedateneeded" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="addressee" class="control-label">Addressee</label>
                                <input type="text" class="form-control" id="addressee" name="coeaddressee" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="address" class="control-label">Address of Recipient</label>
                                <input type="text" class="form-control" id="address" name="coeaddress" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="purpose" class="control-label">Purpose</label>
                                <textarea id="purpose" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="salary" class="control-label">Annual Gross Salary</label>
                                <input type="text" class="form-control" id="salary" name="coesalary" />
                            </div>
                        </div>
                        <div class="col=md-8 col-sm-4">
                            <div class="radio">
                                <label><input type="radio" name="sample1" value="option1" checked="">Include</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="sample1" value="option1">Don't Include</label>
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
<!--Leave Application Form Modal-->
<div class="modal fade bs-example-modal-lg" id="newlaf" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Leave Application Form</h3>
            </div>
            <div class="modal-body">
                <form class="" action="" method="post">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="fn" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="fn" name="laffirstname" />
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-2">
                            <div class="form-group label-floating">
                                <label for="mi" class="control-label">MI</label>
                                <input type="text" class="form-control" id="mi" name="lafmiddleinitial" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="ln" class="control-label">Last Name</label>
                                <input type="text" class="form-control " id="ln" name="laflastname" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="jobtitle" class="control-label">Job Title</label>
                                <input type="text" class="form-control" id="jobtitle" name="lafjobtitle" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="branchname">Branch Name</label>
                                <select id="branchname" class="form-control" name="lafbranchname">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="e-4-laf-fromdate1" class="control-label">From Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="e-4-laf-fromdate1" name="laffromdate" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="e-4-laf-todate1" class="control-label">To Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="e-4-laf-todate1" name="laftodate" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="days" class="control-label">Number of Days</label>
                                <input type="number" class="form-control" id="days" name="lafdays" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select id="type" class="form-control" name="laftype">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                        <div class="col=md-8 col-sm-4">
                            <div class="radio">
                                <label><input type="radio" name="sample1" value="option1" checked="">Paid Leave</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="sample1" value="option1">Unpaid Leave</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="reason" class="control-label">Reason</label>
                                <textarea id="reason" class="form-control"></textarea>
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
<!--Edit Leave Application Form Modal-->
<div class="modal fade bs-example-modal-lg" id="editlaf" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Leave Application Form</h3>
            </div>
            <div class="modal-body">
                <form class="" action="" method="post">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="fn" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="fn" name="laffirstname" />
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-2">
                            <div class="form-group label-floating">
                                <label for="mi" class="control-label">MI</label>
                                <input type="text" class="form-control" id="mi" name="lafmiddleinitial" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="ln" class="control-label">Last Name</label>
                                <input type="text" class="form-control " id="ln" name="laflastname" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="jobtitle" class="control-label">Job Title</label>
                                <input type="text" class="form-control" id="jobtitle" name="lafjobtitle" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="branchname">Branch Name</label>
                                <select id="branchname" class="form-control" name="lafbranchname">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="e-4-laf-fromdate2" class="control-label">From Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="e-4-laf-fromdate2" name="laffromdate" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="e-4-laf-todate2" class="control-label">To Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="e-4-laf-todate2" name="laftodate" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="days" class="control-label">Number of Days</label>
                                <input type="number" class="form-control" id="days" name="lafdays" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select id="type" class="form-control" name="laftype">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                        <div class="col=md-8 col-sm-4">
                            <div class="radio">
                                <label><input type="radio" name="sample1" value="option1" checked="">Paid Leave</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="sample1" value="option1">Unpaid Leave</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="reason" class="control-label">Reason</label>
                                <textarea id="reason" class="form-control"></textarea>
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
<!--Other Waives Modal-->
<div class="modal fade bs-example-modal-lg" id="newow" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Other Waives</h3>
            </div>
            <div class="modal-body">
                <form class="" action="" method="post">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="fn" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="fn" name="owfirstname" />
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-2">
                            <div class="form-group label-floating">
                                <label for="mi" class="control-label">MI</label>
                                <input type="text" class="form-control" id="mi" name="owmiddleinitial" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="ln" class="control-label">Last Name</label>
                                <input type="text" class="form-control " id="ln" name="owlastname" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="jobtitle" class="control-label">Job Title</label>
                                <input type="text" class="form-control" id="jobtitle" name="owjobtitle" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="branchname">Branch Name</label>
                                <select id="branchname" class="form-control" name="owbranchname">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="e-4-ow-fromdate1" class="control-label">From Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="e-4-ow-fromdate1" name="owfromdate" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="e-4-ow-todate1" class="control-label">To Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="e-4-ow-todate1" name="owtodate" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="days" class="control-label">Number of Days</label>
                                <input type="number" class="form-control" id="days" name="owdays" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="waiverfor" class="control-label">Waiver For</label>
                                <input type="text" class="form-control" id="waiverfor" name="owwaiverfor" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="reason" class="control-label">Reason</label>
                                <textarea id="reason" class="form-control"></textarea>
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
<!--Edit Other Waives Modal-->
<div class="modal fade bs-example-modal-lg" id="editow" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Other Waives</h3>
            </div>
            <div class="modal-body">
                <form class="" action="" method="post">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="fn" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="fn" name="owfirstname" />
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-2">
                            <div class="form-group label-floating">
                                <label for="mi" class="control-label">MI</label>
                                <input type="text" class="form-control" id="mi" name="owmiddleinitial" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="ln" class="control-label">Last Name</label>
                                <input type="text" class="form-control " id="ln" name="owlastname" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="jobtitle" class="control-label">Job Title</label>
                                <input type="text" class="form-control" id="jobtitle" name="owjobtitle" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="branchname">Branch Name</label>
                                <select id="branchname" class="form-control" name="owbranchname">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="e-4-ow-fromdate2" class="control-label">From Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="e-4-ow-fromdate2" name="owfromdate" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="e-4-ow-todate2" class="control-label">To Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="e-4-ow-todate2" name="owtodate" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="days" class="control-label">Number of Days</label>
                                <input type="number" class="form-control" id="days" name="owdays" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="waiverfor" class="control-label">Waiver For</label>
                                <input type="text" class="form-control" id="waiverfor" name="owwaiverfor" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="reason" class="control-label">Reason</label>
                                <textarea id="reason" class="form-control"></textarea>
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

<!--HR View-->
<!--View COE Modal-->
<div class="modal fade" id="viewcoe" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Certificate of Employment</h3>
            </div>
            <div class="modal-body">
                <form class="" action="index.html" method="post">
                    <div class="row p20">
                        <p>
                            <span class="col-sm-4 labeltext">Date Filed</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span><br />
                            <span class="col-sm-4 labeltext">Name</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Branch</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Job Title</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Addressee</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Address of Recipient</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Date Needed</span></span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Purpose</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Annual Gross Salary</span>
                            <span class="col-sm-8"><i>Included/ Not Included</i></span>
                        </p>
                    </div>
                </form>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal-->
<!--View LAF Modal - HR View-->
<div class="modal fade" id="viewlafhr" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Leave Application Form</h3>
            </div>
            <div class="modal-body">
                <form class="" action="index.html" method="post">
                    <div class="row p20">
                        <p>
                            <span class="col-sm-4 labeltext">Date Filed</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span><br />
                            <span class="col-sm-4 labeltext">Name</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Branch</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Job Title</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">From Date</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">To Date</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Number of Days</span></span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Type</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Paid Leave</span>
                            <span class="col-sm-8"><i>Yes/No</i></span>
                            <span class="col-sm-4 labeltext">Reason</span>
                            <span class="col-sm-8 text-justify"><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim v</i></span>
                        </p>
                    </div>
                </form>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal-->
<!--View LAF Modal - OIC View-->
<div class="modal fade" id="viewlafoic" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Leave Application Form</h3>
            </div>
            <div class="modal-body">
                <form class="" action="index.html" method="post">
                    <div class="row p20">
                        <p>
                            <span class="col-sm-4 labeltext">Date Filed</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span><br />
                            <span class="col-sm-4 labeltext">Name</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Branch</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Job Title</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">From Date</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">To Date</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Number of Days</span></span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Type</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Paid Leave</span>
                            <span class="col-sm-8"><i>Yes/No</i></span>
                            <span class="col-sm-4 labeltext">Reason</span>
                            <span class="col-sm-8 text-justify"><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim v</i></span>
                        </p>
                    </div>
                    <div class="row p20">
                        <div class="col-md-12 col-sm-12">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-success btn-raised">Forward to Manager</button>
                                <button type="button" class="btn btn-danger btn-raised">Reject</button>
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
<!--View LAF Modal - HR View-->
<div class="modal fade" id="viewlafmanager" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Leave Application Form</h3>
            </div>
            <div class="modal-body">
                <form class="" action="index.html" method="post">
                    <div class="row p20">
                        <p>
                            <span class="col-sm-4 labeltext">Date Filed</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span><br />
                            <span class="col-sm-4 labeltext">Name</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Branch</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Job Title</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">From Date</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">To Date</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Number of Days</span></span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Type</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Paid Leave</span>
                            <span class="col-sm-8"><i>Yes/No</i></span>
                            <span class="col-sm-4 labeltext">Reason</span>
                            <span class="col-sm-8 text-justify"><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim v</i></span>
                        </p>
                    </div>
                    <div class="row p20">
                        <div class="col-md-12 col-sm-12">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-success btn-raised">Approve</button>
                                <button type="button" class="btn btn-danger btn-raised">Reject</button>
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
<!--View OW Modal - HR View-->
<div class="modal fade" id="viewowhr" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Other Waives</h3>
            </div>
            <div class="modal-body">
                <form class="" action="index.html" method="post">
                    <div class="row p20">
                        <p>
                            <span class="col-sm-4 labeltext">Date Filed</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span><br />
                            <span class="col-sm-4 labeltext">Name</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Branch</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Job Title</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">From Date</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">To Date</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Number of Days</span></span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Waiver for</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Reason</span>
                            <span class="col-sm-8 text-justify"><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim v</i></span>
                        </p>
                    </div>
                </form>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal-->
<!--View OW Modal - OIC View-->
<div class="modal fade" id="viewowoic" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Other Waives</h3>
            </div>
            <div class="modal-body">
                <form class="" action="index.html" method="post">
                    <div class="row p20">
                        <p>
                            <span class="col-sm-4 labeltext">Date Filed</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span><br />
                            <span class="col-sm-4 labeltext">Name</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Branch</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Job Title</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">From Date</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">To Date</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Number of Days</span></span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Waiver for</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Reason</span>
                            <span class="col-sm-8 text-justify"><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim v</i></span>
                        </p>
                    </div>
                    <div class="row p20">
                        <div class="col-md-12 col-sm-12">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-success btn-raised">Forward to Manager</button>
                                <button type="button" class="btn btn-danger btn-raised">Reject</button>
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
<!--View OW Modal - OIC View-->
<div class="modal fade" id="viewowmanager" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Other Waives</h3>
            </div>
            <div class="modal-body">
                <form class="" action="index.html" method="post">
                    <div class="row p20">
                        <p>
                            <span class="col-sm-4 labeltext">Date Filed</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span><br />
                            <span class="col-sm-4 labeltext">Name</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Branch</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Job Title</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">From Date</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">To Date</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Number of Days</span></span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Waiver for</span>
                            <span class="col-sm-8"><i>Lorem Ipsum</i></span>
                            <span class="col-sm-4 labeltext">Reason</span>
                            <span class="col-sm-8 text-justify"><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim v</i></span>
                        </p>
                    </div>
                    <div class="row p20">
                        <div class="col-md-12 col-sm-12">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-success btn-raised">Approve</button>
                                <button type="button" class="btn btn-danger btn-raised">Reject</button>
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
