<!--Discard Form Modal-->
<div class="modal fade bs-example-modal-sm" id="discardformmodal" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header"></div>
            <div class="modal-body">
                <div class="row p20">
                    <h4 class="text-muted">
                        Discard form?
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


<!--Forms and Approvals-->
<!--New Certificate of Employment Modal-->
<div class="modal fade bs-example-modal-lg" id="newcoe" tabindex="-1" role="dialog" aria-labelledby=" ">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Certificate of Employment</h3>
            </div>
            <div class="modal-body">
                <form class="" action="" method="post">
                    <div class="row">
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="e-4-coe-fn1" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="e-4-coe-fn1" name="e-4-coe-fn1" />
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-2">
                            <div class="form-group label-floating">
                                <label for="e-4-coe-mi1" class="control-label">MI</label>
                                <input type="text" class="form-control" id="e-4-coe-mi1" name="e-4-coe-mi1" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="e-4-coe-ln1" class="control-label">Last Name</label>
                                <input type="text" class="form-control " id="e-4-coe-ln1" name="e-4-coe-ln1" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="e-4-coe-jobtitle1" class="control-label">Job Title</label>
                                <input type="text" class="form-control" id="e-4-coe-jobtitle1" name="e-4-coe-jobtitle1" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="e-4-coe-branchname1">Branch Name</label>
                                <select id="e-4-coe-branchname1" class="form-control" name="e-4-coe-branchname1">
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
                                    <input type="text" class="form-control" id="e-4-coe-dateneeded1" name="e-4-coe-dateneeded1" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="e-4-coe-addressee1" class="control-label">Addressee</label>
                                <input type="text" class="form-control" id="e-4-coe-addressee1" name="e-4-coe-addressee1" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="e-4-coe-address1" class="control-label">Address of Recipient</label>
                                <input type="text" class="form-control" id="e-4-coe-address1" name="e-4-coe-address1" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="e-4-coe-purpose1" class="control-label">Purpose</label>
                                <textarea id="e-4-coe-purpose1" class="form-control" name="e-4-coe-purpose1"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="e-4-coe-salary1" class="control-label">Annual Gross Salary</label>
                                <input type="text" class="form-control" id="e-4-coe-salary1" name="e-4-coe-salary1" />
                            </div>
                        </div>
                        <div class="col=md-8 col-sm-6">
                            <div class="radio">
                                <label><input type="radio" name="e-4-coe-include1" value="option1" checked="">Include</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="e-4-coe-dontinclude1" value="option1">Don't Include</label>
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
                                <label for="e-4-coe-fn2" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="e-4-coe-fn2" name="e-4-coe-fn2" />
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-2">
                            <div class="form-group label-floating">
                                <label for="e-4-coe-mi2" class="control-label">MI</label>
                                <input type="text" class="form-control" id="e-4-coe-mi2" name="e-4-coe-mi2" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="e-4-coe-ln2" class="control-label">Last Name</label>
                                <input type="text" class="form-control " id="e-4-coe-ln2" name="e-4-coe-ln2" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="e-4-coe-jobtitle2" class="control-label">Job Title</label>
                                <input type="text" class="form-control" id="e-4-coe-jobtitle2" name="e-4-coe-jobtitle2" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="e-4-coe-branchname2">Branch Name</label>
                                <select id="e-4-coe-branchname2" class="form-control" name="e-4-coe-branchname2">
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
                                    <input type="text" class="form-control" id="e-4-coe-dateneeded2" name="e-4-coe-dateneeded2" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="e-4-coe-addressee2" class="control-label">Addressee</label>
                                <input type="text" class="form-control" id="e-4-coe-addressee2" name="e-4-coe-addressee2" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="e-4-coe-address2" class="control-label">Address of Recipient</label>
                                <input type="text" class="form-control" id="e-4-coe-address2" name="e-4-coe-address2" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="e-4-coe-purpose2" class="control-label">Purpose</label>
                                <textarea id="e-4-coe-purpose2" class="form-control" name="e-4-coe-purpose2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="e-4-coe-salary2" class="control-label">Annual Gross Salary</label>
                                <input type="text" class="form-control" id="e-4-coe-salary2" name="e-4-coe-salary2" />
                            </div>
                        </div>
                        <div class="col=md-8 col-sm-6">
                            <div class="radio">
                                <label><input type="radio" name="e-4-coe-include2" value="option1" checked="">Include</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="e-4-coe-dontinclude2" value="option1">Don't Include</label>
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
                                <label for="e-4-laf-fn1" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="e-4-laf-fn1" name="e-4-laf-fn1" />
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-2">
                            <div class="form-group label-floating">
                                <label for="e-4-laf-mi1" class="control-label">MI</label>
                                <input type="text" class="form-control" id="e-4-laf-mi1" name="e-4-laf-mi1" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="e-4-laf-ln1" class="control-label">Last Name</label>
                                <input type="text" class="form-control " id="e-4-laf-ln1" name="e-4-laf-ln1" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="e-4-laf-jobtitle1" class="control-label">Job Title</label>
                                <input type="text" class="form-control" id="e-4-laf-jobtitle1" name="e-4-laf-jobtitle1" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="e-4-laf-branchname1">Branch Name</label>
                                <select id="e-4-laf-branchname1" class="form-control" name="e-4-laf-branchname1">
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
                                    <input type="text" class="form-control" id="e-4-laf-fromdate1" name="e-4-laf-fromdate1" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="e-4-laf-todate1" class="control-label">To Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="e-4-laf-todate1" name="e-4-laf-todate1" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="e-4-laf-days1" class="control-label">Number of Days</label>
                                <input type="number" class="form-control" id="e-4-laf-days1" name="e-4-laf-days1" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="e-4-laf-type1">Type</label>
                                <select id="e-4-laf-type1" class="form-control" name="e-4-laf-type1">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="radio">
                                <label><input type="radio" name="e-4-laf-paidleave1" value="option1" checked="">Paid Leave</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="e-4-laf-unpaidleave1" value="option1">Unpaid Leave</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="e-4-laf-reason1" class="control-label">Reason</label>
                                <textarea id="e-4-laf-reason1" class="form-control" name="e-4-laf-reason1"></textarea>
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
                                <label for="e-4-laf-fn2" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="e-4-laf-fn2" name="e-4-laf-fn2" />
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-2">
                            <div class="form-group label-floating">
                                <label for="e-4-laf-mi2" class="control-label">MI</label>
                                <input type="text" class="form-control" id="e-4-laf-mi2" name="e-4-laf-mi2" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="e-4-laf-ln2" class="control-label">Last Name</label>
                                <input type="text" class="form-control " id="e-4-laf-ln2" name="e-4-laf-ln2" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="e-4-laf-jobtitle2" class="control-label">Job Title</label>
                                <input type="text" class="form-control" id="e-4-laf-jobtitle2" name="e-4-laf-jobtitle2" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="e-4-laf-branchname2">Branch Name</label>
                                <select id="e-4-laf-branchname2" class="form-control" name="e-4-laf-branchname2">
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
                                    <input type="text" class="form-control" id="e-4-laf-fromdate2" name="e-4-laf-fromdate2" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="e-4-laf-todate2" class="control-label">To Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="e-4-laf-todate2" name="e-4-laf-todate2" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="e-4-laf-days2" class="control-label">Number of Days</label>
                                <input type="number" class="form-control" id="e-4-laf-days2" name="e-4-laf-days2" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="e-4-laf-type2">Type</label>
                                <select id="e-4-laf-type2" class="form-control" name="e-4-laf-type2">
                                <option>A</option>
                                <option>B</option>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="radio">
                                <label><input type="radio" name="e-4-laf-paidleave2" value="option1" checked="">Paid Leave</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="e-4-laf-unpaidleave2" value="option1">Unpaid Leave</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="e-4-laf-reason2" class="control-label">Reason</label>
                                <textarea id="e-4-laf-reason2" class="form-control" name="e-4-laf-reason2"></textarea>
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
                                <label for="e-4-ow-fn1" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="e-4-ow-fn1" name="e-4-ow-fn1" />
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-2">
                            <div class="form-group label-floating">
                                <label for="e-4-ow-mi1" class="control-label">MI</label>
                                <input type="text" class="form-control" id="e-4-ow-mi1" name="e-4-ow-mi1" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="e-4-ow-ln1" class="control-label">Last Name</label>
                                <input type="text" class="form-control " id="e-4-ow-ln1" name="e-4-ow-ln1" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="e-4-ow-jobtitle1" class="control-label">Job Title</label>
                                <input type="text" class="form-control" id="e-4-ow-jobtitle1" name="e-4-ow-jobtitle1" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="e-4-ow-branchname1">Branch Name</label>
                                <select id="e-4-ow-branchname1" class="form-control" name="e-4-ow-branchname1">
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
                                    <input type="text" class="form-control" id="e-4-ow-fromdate1" name="e-4-ow-fromdate1" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="e-4-ow-todate1" class="control-label">To Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="e-4-ow-todate1" name="e-4-ow-todate1" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="e-4-ow-days1" class="control-label">Number of Days</label>
                                <input type="number" class="form-control" id="e-4-ow-days1" name="e-4-ow-days1" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="e-4-ow-waiverfor1" class="control-label">Waiver For</label>
                                <input type="text" class="form-control" id="e-4-ow-waiverfor1" name="e-4-ow-waiverfor1" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="e-4-ow-reason1" class="control-label">Reason</label>
                                <textarea id="e-4-ow-reason1" class="form-control" name="e-4-ow-reason1"></textarea>
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
                                <label for="e-4-ow-fn2" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="e-4-ow-fn2" name="e-4-ow-fn2" />
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-2">
                            <div class="form-group label-floating">
                                <label for="e-4-ow-mi2" class="control-label">MI</label>
                                <input type="text" class="form-control" id="e-4-ow-mi2" name="e-4-ow-mi2" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group label-floating">
                                <label for="e-4-ow-ln2" class="control-label">Last Name</label>
                                <input type="text" class="form-control " id="e-4-ow-ln2" name="e-4-ow-ln2" />
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="e-4-ow-jobtitle2" class="control-label">Job Title</label>
                                <input type="text" class="form-control" id="e-4-ow-jobtitle2" name="e-4-ow-jobtitle2" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="e-4-ow-branchname2">Branch Name</label>
                                <select id="e-4-ow-branchname2" class="form-control" name="e-4-ow-branchname2">
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
                                    <input type="text" class="form-control" id="e-4-ow-fromdate2" name="e-4-ow-fromdate2" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating" id="sandbox-container">
                                <label for="e-4-ow-todate2" class="control-label">To Date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="e-4-ow-todate2" name="e-4-ow-todate2" />
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group label-floating">
                                <label for="e-4-ow-days2" class="control-label">Number of Days</label>
                                <input type="number" class="form-control" id="e-4-ow-days2" name="e-4-ow-days2" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="e-4-ow-waiverfor2" class="control-label">Waiver For</label>
                                <input type="text" class="form-control" id="e-4-ow-waiverfor2" name="e-4-ow-waiverfor2" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group label-floating">
                                <label for="e-4-ow-reason2" class="control-label">Reason</label>
                                <textarea id="e-4-ow-reason2" class="form-control" name="e-4-ow-reason2"></textarea>
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
            </div>
            <div class="modal-footer">

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
            </div>
            <div class="modal-footer">

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
            </div>
            <div class="modal-footer">

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
            </div>
            <div class="modal-footer">

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
            </div>
            <div class="modal-footer">

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
            </div>
            <div class="modal-footer">

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
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!--Modal-->
