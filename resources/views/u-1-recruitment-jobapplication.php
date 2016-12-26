<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include'all/head.php' ?>
    <title>Fredley Food &amp; Beverages, Inc</title>
    <style>
        .wizard {
            margin: 0px auto;
            background: #fff;
        }

        .wizard .nav-tabs {
            margin: 0px auto;
            position: relative;
            border-bottom-color: #e0e0e0;
        }

        .wizard>div.wizard-inner {
            position: relative;
        }

        .connecting-line {
            height: 2px;
            background: #e0e0e0;
            position: absolute;
            width: 50%;
            margin-left: 10%;
            left: 0;
            right: 0;
            top: 50%;
            z-index: 1;
        }

        .wizard .nav-tabs>li.active>a,
        .wizard .nav-tabs>li.active>a:hover,
        .wizard .nav-tabs>li.active>a:focus {
            color: #555555;
            cursor: default;
            border: 0;
            border-bottom-color: transparent;
        }

        span.round-tab {
            width: 70px;
            height: 70px;
            line-height: 70px;
            display: inline-block;
            border-radius: 100px;
            background: #fff;
            border: 2px solid #e0e0e0;
            z-index: 2;
            position: absolute;
            left: 0;
            text-align: center;
            font-size: 25px;
        }

        span.round-tab i {
            color: #555555;
        }

        .wizard li.active span.round-tab {
            background: #fff;
            border: 2px solid #49A078;
        }

        .wizard li.active span.round-tab i {
            color: #9CC5A1;
        }

        span.round-tab:hover {
            color: #333;
            border: 2px solid #333;
        }

        .wizard .nav-tabs>li {
            width: 25%;
        }

        .wizard li:after {
            content: " ";
            position: absolute;
            left: 46%;
            opacity: 0;
            margin: 0 auto;
            bottom: 0px;
            border: 5px solid transparent;
            border-bottom-color: #5bc0de;
            transition: 0.1s ease-in-out;
        }

        .wizard li.active:after {
            content: " ";
            position: absolute;
            left: 46%;
            opacity: 1;
            margin: 0 auto;
            bottom: 0px;
            border: 10px solid transparent;
            border-bottom-color: #9CC5A1;
        }

        .wizard .nav-tabs>li a {
            width: 70px;
            height: 70px;
            margin: 20px auto;
            border-radius: 100%;
            padding: 0;
        }

        .wizard .nav-tabs>li a:hover {
            background: transparent;
        }

        .wizard .tab-pane {
            position: relative;
            padding-top: 50px;
        }

        .wizard h3 {
            margin-top: 0;
        }

        @media( max-width: 585px) {
            .wizard {
                width: 90%;
                height: auto !important;
            }
            span.round-tab {
                font-size: 16px;
                width: 50px;
                height: 50px;
                line-height: 50px;
            }
            .wizard .nav-tabs>li a {
                width: 50px;
                height: 50px;
                line-height: 50px;
            }
            .wizard li.active:after {
                content: " ";
                position: absolute;
                left: 35%;
            }
        }
    </style>
</head>

<body>
    <?php include'aboutus-modals.php' ?>
    <?php include'recruitment-modals.php' ?>
    <div id="wrap">

      <?php include'all/header-index.php' ?>

        <section class="container-fluid">
            <section class="row featuresimagefull">
                <article class="col-md-12 col-sm-12 p15020">
                    <div class="card">
                        <div class="card-block">
                            <div class="wizard">
                                <div class="wizard-inner">
                                    <div class="connecting-line"></div>
                                    <ul class="nav nav-tabs" role="tablist">

                                        <li role="presentation" class="active">
                                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                                <span class="round-tab"><i class="glyphicon glyphicon-folder-open"></i></span>
                                            </a>
                                        </li>

                                        <li role="presentation" class="disabled">
                                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                                <span class="round-tab"><i class="glyphicon glyphicon-pencil"></i></span>
                                            </a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                                <span class="round-tab"><i class="glyphicon glyphicon-ok"></i></span>
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
                                            <a href="u-1-recruitment.php" name="button" class=" btn btn-primary"><i class="fa fa-chevron-left"></i>&nbsp; Back</a>
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
    <?php include'all/footer.php' ?>
    <?php include'all/script.php' ?>
    <script>
        $(document).ready(function() {
            //Initialize tooltips
            $('.nav-tabs > li a[title]').tooltip();

            //Wizard
            $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {

                var $target = $(e.target);

                if ($target.parent().hasClass('disabled')) {
                    return false;
                }
            });

            $(".next-step").click(function(e) {

                var $active = $('.wizard .nav-tabs li.active');
                $active.next().removeClass('disabled');
                nextTab($active);

            });
            $(".prev-step").click(function(e) {

                var $active = $('.wizard .nav-tabs li.active');
                prevTab($active);

            });
        });

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }

        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }
    </script>
</body>

</html>
