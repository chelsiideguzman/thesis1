<!--Payroll-->
<!--Edit Payroll Modal-->
<div class="modal fade bs-example-modal-lg" id="editpayroll" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Employee Compensation</h3>
            </div>
            <div class="modal-body">
                <div class="row p20">
                    <p>
                        <div class="row">
                            <span class="col-sm-3 labeltext">Employee ID</span>
                            <span class="col-sm-9"><i>Lorem Ipsum</i></span>
                        </div>
                        <div class="row">
                            <span class="col-sm-3 labeltext">Name</span>
                            <span class="col-sm-9"><i>Lorem Ipsum</i></span>
                        </div>
                    </p>
                </div>
                <div class="row">
                    <div class="pull-right">
                        <button type="button" name="button" class="btn btn-primary btn-raised" data-toggle="collapse" data-target="#formula">Show/Hide Formula</button>
                    </div>
                    <div class="collapse" id="formula" style="clear: both;">
                        <div class="well well-sm">
                            ( ( ( (Daily Basic Wage +Cost of Living Allowance)+Gross Monthly Incentive / Commission Per Day (B) ) * No. of Working Days ) - Total Deductions + Total Additions + Others ) Daily Basic Wage = (Gross Basic Monthly Salary/26)-10 Gross Monthly Incentive
                            / Commission Per Day (B) = Gross Monthly Incentive / Commission (B) / 26 Total Deductions = SSS + Pag-ibig Fund + PHIC + Tardiness + Absences Total Additions = Regular Holiday Pay + Special Holiday Pay + 13th Month Pay + Discretionary
                            Award + Overtime Pay + Paid Leave
                        </div>
                    </div>
                </div>
                <div class="row p20">
                    <p>
                        computation of numbers
                    </p>
                </div>
                <form class="" action="" method="post">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <table style="width: 100%;">
                                <tr>
                                    <td rowspan="2" style="width: 10%;" class="text-center">
                                        <i class="fa fa-plus-circle"></i>
                                    </td>
                                    <td style="width: 40%;">
                                        <div class="form-group label-floating">
                                            <label for="h-4-payroll-amount" class="control-label">Amount</label>
                                            <input type="text" class="form-control" id="h-4-payroll-amount" name="h-4-payroll-amount" />
                                        </div>
                                        <div class="form-group label-floating">
                                            <label for="h-4-payroll-reason" class="control-label">Reason</label>
                                            <input type="text" class="form-control" id="h-4-payroll-reason" name="h-4-payroll-reason" />
                                        </div>
                                    </td>
                                    <td rowspan="2" style="width: 10%;" class="text-center">
                                        <i class="fa fa-minus-circle"></i>
                                    </td>
                                    <td style="width: 40%;">
                                        <div class="form-group label-floating">
                                            <label for="h-4-payroll-amount" class="control-label">Amount</label>
                                            <input type="text" class="form-control" id="h-4-payroll-amount" name="h-4-payroll-amount" />
                                        </div>
                                        <div class="form-group label-floating">
                                            <label for="h-4-payroll-reason" class="control-label">Reason</label>
                                            <input type="text" class="form-control" id="h-4-payroll-reason" name="h-4-payroll-reason" />
                                        </div>
                                    </td>
                                </tr>
                            </table>
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
