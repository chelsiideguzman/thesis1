<script type="text/javascript">
    $.validator.setDefaults({
        submitHandler: function() {
            alert("submitted");
        }
    });
    $().ready(function() {
        $("#form-password").validate({
            rules: {
                oldpassword: {
                    required: true,
                    minlength: 8
                },
                newpassword1: {
                    required: true,
                    minlength: 8
                },
                newpassword2: {
                    required: true,
                    minlength: 8,
                    equalTo: "#newpassword1"
                },
            },
            messages: {
                oldpassword: {
                    required: "Please provide your old password",
                    minlength: "Your password must be at least 8 characters long"
                },
                newpassword1: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 8 characters long"
                },
                newpassword2: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 8 characters long",
                    equalTo: "Please enter the same password as above"
                },
            },
            errorElement: "em",
            errorPlacement: function(error, element) {
                // Add the `help-block` class to the error element
                error.addClass("help-block");

                // Add `has-feedback` class to the parent div.form-group
                // in order to add icons to inputs
                element.parents(".inputc").addClass("has-feedback");

                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                } else {
                    error.insertAfter(element);
                }

                // Add the span element, if doesn't exists, and apply the icon classes to it.
                if (!element.next("span")[0]) {
                    $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>").insertAfter(element);
                }
            },
            success: function(label, element) {
                // Add the span element, if doesn't exists, and apply the icon classes to it.
                if (!$(element).next("span")[0]) {
                    $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>").insertAfter($(element));
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).parents(".inputc").addClass("has-error").removeClass("has-success");
                $(element).next("span").addClass("glyphicon-remove").removeClass("glyphicon-ok");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents(".inputc").addClass("has-success").removeClass("has-error");
                $(element).next("span").addClass("glyphicon-ok").removeClass("glyphicon-remove");
            }
        });
    });
</script>

<script type="text/javascript">
    $.validator.setDefaults({
        submitHandler: function() {
            alert("submitted");
        }
    });
    $().ready(function() {
        $("#form-emailaddress").validate({
            rules: {
                oldemailaddress: {
                    required: true,
                },
                newemailaddress1: {
                    required: true,
                },
                newemailaddress2: {
                    required: true,
                    equalTo: "#newemailaddress1"
                },
            },
            messages: {
                oldemailaddress: {
                    required: "Please provide your old email address",
                    email: true
                },
                newemailaddress1: {
                    required: "Please provide an email address",
                    email: true
                },
                newemailaddress2: {
                    required: "Please provide an email address",
                    email: true
                    equalTo: "Please enter the same email address as above"
                },
            },
            errorElement: "em",
            errorPlacement: function(error, element) {
                // Add the `help-block` class to the error element
                error.addClass("help-block");

                // Add `has-feedback` class to the parent div.form-group
                // in order to add icons to inputs
                element.parents(".inputc").addClass("has-feedback");

                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                } else {
                    error.insertAfter(element);
                }

                // Add the span element, if doesn't exists, and apply the icon classes to it.
                if (!element.next("span")[0]) {
                    $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>").insertAfter(element);
                }
            },
            success: function(label, element) {
                // Add the span element, if doesn't exists, and apply the icon classes to it.
                if (!$(element).next("span")[0]) {
                    $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>").insertAfter($(element));
                }
            },
            highlight: function(element, errorClass, validClass) {
                $(element).parents(".inputc").addClass("has-error").removeClass("has-success");
                $(element).next("span").addClass("glyphicon-remove").removeClass("glyphicon-ok");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents(".inputc").addClass("has-success").removeClass("has-error");
                $(element).next("span").addClass("glyphicon-ok").removeClass("glyphicon-remove");
            }
        });
    });
</script>

<!--Sign out Modal-->
<div class="modal fade bs-example-modal-sm" id="signout" tabindex="-1" role="dialog" aria-labelledby="">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header"></div>
            <div class="modal-body">
                <div class="row p20">
                    <h4 class="text-muted">
                        Sign out?
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

<!--Password Modal-->
<div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="password">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Change Password</h3>
            </div>
            <div class="modal-body">

                <form id="form-password" method="post" action="">

                    <div class="form-group label-floating">
                        <label for="oldpassword" class="control-label">Old Password</label>
                        <div class="inputc">
                            <input type="password" class="form-control" id="oldpassword" name="oldpassword" />
                        </div>
                    </div>

                    <div class="form-group label-floating">
                        <label for="newpassword1" class="control-label">New Password</label>
                        <div class="inputc">
                            <input type="password" class="form-control" id="newpassword1" name="newpassword1" />
                        </div>
                    </div>

                    <div class="form-group label-floating">
                        <label for="newpassword2" class="control-label">Confirm password</label>
                        <div class="inputc">
                            <input type="password" class="form-control" id="newpassword2" name="newpassword2" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="right">
                            <button type="submit" class="btn btn-primary btn-raised">Save</button>
                            <button type="button" class="btn btn-primary btn-raised">Cancel</button>
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
<!--Email Address Modal-->
<div class="modal fade" id="emailaddress" tabindex="-1" role="dialog" aria-labelledby="emailaddress">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center" id="myModalLabel">Change Email Address</h3>
            </div>
            <div class="modal-body">

                <form id="form-emailaddress" method="post" action="">

                    <div class="form-group label-floating">
                        <label for="oldemailaddress" class="control-label">Old Email Address</label>
                        <div class="inputc">
                            <input type="email" class="form-control" id="oldemailaddress" name="oldemailaddress" />
                        </div>
                    </div>

                    <div class="form-group label-floating">
                        <label for="newemailaddress1" class="control-label">New Email Address</label>
                        <div class="inputc">
                            <input type="email" class="form-control" id="newemailaddress1" name="newemailaddres1" />
                        </div>
                    </div>

                    <div class="form-group label-floating">
                        <label for="newemailaddress2" class="control-label">Confirm Email Address</label>
                        <div class="inputc">
                            <input type="email" class="form-control" id="newemailaddress2" name="newemailaddress2" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="right">
                            <button type="submit" class="btn btn-primary btn-raised">Save</button>
                            <button type="button" class="btn btn-primary btn-raised">Cancel</button>
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

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="img\logo.png" alt="" class="img-responsive"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="e-3-timeattendance.php"><i class="fa fa-clock-o"></i>&nbsp; TIME IN/OUT</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MY ACCOUNT <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#password">Password</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#emailaddress">Email Address</a></li>
                        <li><a href="#">Register Fingerprint</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#" data-toggle="modal" data-target="#signout">Sign Out &nbsp; <i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
