<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    @include('all.head')
    <link rel="stylesheet" href="css/wizardtabs.css">
    <title>Fredley Food &amp; Beverages, Inc</title>
</head>

<body>
    @include('aboutus-modals')
    @include('recruitment-modals')
    <div id="wrap">
        <section class="container-fluid">
            <section class="row featuresimagefull">
                @include('all.header-index2')
                <article class="col-md-12 col-sm-12 p15020">
                    <div class="card">
                        <div class="card-block">
                            <div class="wizard">
                                <div class="wizard-inner">
                                    <div class="connecting-line"></div>
                                    <ul class="nav nav-tabs" role="tablist">

                                        <li role="presentation" class="active">
                                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                                <span class="round-tab"><i class="fa fa-user-plus"></i></span>
                                            </a>
                                        </li>

                                        <li role="presentation" class="disabled">
                                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                                <span class="round-tab"><i class="fa fa-file-text-o"></i></span>
                                            </a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                                <span class="round-tab"><i class="fa fa-check"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <form role="form">
                                    <div class="tab-content p20">
                                        <div class="tab-pane active fade in" role="tabpanel" id="step1">
                                            <h3>Sign Up <br /> <small>Need to sign up before applying</small></h3>
                                            <form class="" action="" method="post">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group label-floating">
                                                            <label for="u-1-recruitment-fn" class="control-label">First Name</label>
                                                            <input type="text" class="form-control" id="u-1-recruitment-fn" name="u-1-recruitment-fn" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2">
                                                        <div class="form-group label-floating">
                                                            <label for="u-1-recruitment-mi" class="control-label">MI</label>
                                                            <input type="text" class="form-control" id="u-1-recruitment-mi" name="u-1-recruitment-mi" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group label-floating">
                                                            <label for="u-1-recruitment-ln" class="control-label">Last Name</label>
                                                            <input type="text" class="form-control " id="u-1-recruitment-ln" name="u-1-recruitment-ln" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group label-floating">
                                                            <label for="u-1-recruitment-contactno" class="control-label">Contact Number</label>
                                                            <input type="text" class="form-control" id="u-1-recruitment-contactno" name="u-1-recruitment-contactno" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group label-floating">
                                                            <label for="u-1-recruitment-emailaddress" class="control-label">Email Address</label>
                                                            <input type="email" class="form-control" id="u-1-recruitment-emailaddress" name="u-1-recruitment-emailaddress" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group label-floating">
                                                            <label for="u-1-recruitment-password" class="control-label">Password</label>
                                                            <input type="password" class="form-control" id="u-1-recruitment-password" name="u-1-recruitment-password" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group label-floating">
                                                            <label for="u-1-recruitment-cpassword" class="control-label">Confirm Password</label>
                                                            <input type="password" class="form-control" id="u-1-recruitment-cpassword" name="u-1-recruitment-cpassword" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-inline pull-right">
                                                    <li><button type="button" class="btn btn-primary next-step">Proceed and continue</button></li>
                                                </ul>
                                            </form>

                                        </div>
                                        <div class="tab-pane fade " role="tabpanel" id="step2">
                                            <h3>Job Application</h3>
                                            <form class="" action="" method="post">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group label-floating">
                                                            <label for="u-1-recruitment-address" class="control-label">Address</label>
                                                            <input type="text" class="form-control" id="u-1-recruitment-address" name="u-1-recruitment-address" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="u-1-recruitment-1stbranch">1st Branch Option</label>
                                                            <select id="u-1-recruitment-1stbranch" class="form-control  " name="u-1-recruitment-1stbranch">
                                                            <option>A</option>
                                                            <option>B</option>
                                                            <option>C</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label for="u-1-recruitment-2ndbranch">2nd Branch Option</label>
                                                            <select id="u-1-recruitment-2ndbranch" class="form-control  " name="u-1-recruitment-2ndbranch">
                                                            <option>A</option>
                                                            <option>B</option>
                                                            <option>C</option>
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
                                                        <ul class="list-inline pull-right">
                                                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="tab-pane fade" role="tabpanel" id="complete">
                                            <h3>Complete</h3>
                                            <p>You have successfully applied for a job.</p>
                                            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <ul class="list-inline pull-right">
                                                        <li><a href="/user-recruitment" name="button" class="btn btn-primary"><i class="fa fa-chevron-left"></i>&nbsp; Back</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </article>
            </section>
        </section>

    </div>
    <!--wrap-->
    @include('all.footer')
    @include('all.script')
    <script src="js/wizardtabs.js" charset="utf-8"></script>
</body>

</html>
