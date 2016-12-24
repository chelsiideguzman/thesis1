<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include'all/head.php' ?>
    <title>Fredley Food &amp; Beverages, Inc</title>
</head>

<body>
    <?php include'aboutus-modals.php' ?>
    <div id="wrap">

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
                        <li><a href="#"><i class="fa fa-home"></i>&nbsp; HOME</a></li>
                        <li><a href="#"><i class="fa fa-sliders"></i>&nbsp; JOB HUNT</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#login"><i class="fa fa-user"></i>&nbsp; LOGIN</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <section class="container-fluid">
            <section class="row featuresimage">
                <article class="col-md-12 col-sm-12 p15020">
                    <div class="card">
                        <div class="card-block">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#servicecrew" class="nav-link active" data-toggle="tab">Service Crew</a></li>
                                <li class="nav-item"><a href="#morejobs" class="nav-link" data-toggle="tab">More Jobs</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in p2030" id="servicecrew">
                                    <div class="row">
                                        <div class="col-md-7 col-sm-12">
                                            <div class="servicecrewimg"></div>
                                        </div>
                                        <div class="col-md-5 col-sm-12">
                                            <img src="img/servicecrew.png" alt="" class="bigimg">
                                            <h1 class="text-center">Join Us Now<br /> <small>Upload your Resume</small></h1>
                                            <form class="" action="" method="post">

                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group label-floating">
                                                            <label for="u-1-recruitment-fn" class="control-label">First name</label>
                                                            <input type="text" id="u-1-recruitment-fn" class="form-control" name="u-1-recruitment-fn"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-22">
                                                        <div class="form-group label-floating">
                                                            <label for="u-1-recruitment-mi" class="control-label">MI</label>
                                                            <input type="text" id="u-1-recruitment-mi" class="form-control" name="u-1-recruitment-mi"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6">
                                                        <div class="form-group label-floating">
                                                            <label for="u-1-recruitment-ln" class="control-label">Last name</label>
                                                            <input type="text" id="u-1-recruitment-ln" class="form-control" name="u-1-recruitment-ln"></textarea>
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
                                                        <button type="submit" name="button" class="btn btn-primary btn-raised btn-block">Submit</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>

                                    </div>

                                </div>
                                <div class="tab-pane fade active in p2030" id="morejobs">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <h4>Search By</h4>
                                            <form class="" action="" method="post">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group label-floating">
                                                        <label for="u-1-recruitment-keywords" class="control-label">Keywords</label>
                                                        <input type="text" id="u-1-recruitment-keywords" class="form-control" name="u-1-recruitment-keywords"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="u-1-recruitment-branchname">Branch Name</label>
                                                        <select id="u-1-recruitment-branchname" class="form-control  " name="u-1-recruitment-branchname">
            <option>A</option>
            <option>B</option>
            <option>C</option>
        </select>
                                                    </div>
                                                </div>
                                                <h4>Filter By</h4>
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group label-floating" id="sandbox-container">
                                                        <label for="u-1-recruitment-dateposted" class="control-label">Date Posted</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control  " id="u-1-recruitment-dateposted" name="u-1-recruitment-dateposted" />
                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <button type="submit" class="btn btn-primary btn-raised btn-block">Search</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-8 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="list-group">
                                                        <div class="list-group-item">
                                                            <div class="row-picture">
                                                                <img class="circle" src="" alt="Image">
                                                            </div>
                                                            <div class="row-content">
                                                                <h4 class="list-group-item-heading pull-left"><span class="text-warning">2016000001</span></h4>
                                                                <p class="pull-right p10">
                                                                    <a href="" data-toggle="modal" data-target="#verifyemployee"><i class="fa fa-external-link employeeicon"></i></a> &nbsp;
                                                                    <a href="" data-toggle="modal" data-target="#editemployee"><i class="fa fa-edit employeeicon"></i></a> &nbsp;
                                                                    <a href=""><i class="fa fa-remove employeeicon"></i></a>
                                                                </p><br /><br />
                                                                <p class="list-group-item-text" style="">Chua, Olivia <br /> Department - Job title</p>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-separator"></div>
                                                        <div class="list-group-item">
                                                            <div class="row-picture">
                                                                <img class="circle" src="" alt="Image">
                                                            </div>
                                                            <div class="row-content">
                                                                <h4 class="list-group-item-heading pull-left"><span class="">2016000001</span></h4>
                                                                <p class="pull-right p10">
                                                                    <a href="" data-toggle="modal" data-target="#viewemployee"><i class="fa fa-external-link employeeicon"></i></a> &nbsp;
                                                                    <a href="" data-toggle="modal" data-target="#editemployee"><i class="fa fa-edit employeeicon"></i></a> &nbsp;
                                                                    <a href=""><i class="fa fa-remove employeeicon"></i></a>
                                                                </p><br /><br />
                                                                <p class="list-group-item-text" style="">Chua, Olivia <br /> Department - Job title</p>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-separator"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="list-group" style="clear: both;">
                                                        <div class="list-group-item">
                                                            <div class="row-picture">
                                                                <img class="circle" src="" alt="Image">
                                                            </div>
                                                            <div class="row-content">
                                                                <h4 class="list-group-item-heading pull-left"><span class="text-warning">2016000001</span></h4>
                                                                <p class="pull-right p10">
                                                                    <a href="" data-toggle="modal" data-target="#verifyemployee"><i class="fa fa-external-link employeeicon"></i></a> &nbsp;
                                                                    <a href="" data-toggle="modal" data-target="#editemployee"><i class="fa fa-edit employeeicon"></i></a> &nbsp;
                                                                    <a href=""><i class="fa fa-remove employeeicon"></i></a>
                                                                </p><br /><br />
                                                                <p class="list-group-item-text" style="">Chua, Olivia <br /> Department - Job title</p>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-separator"></div>
                                                        <div class="list-group-item">
                                                            <div class="row-picture">
                                                                <img class="circle" src="" alt="Image">
                                                            </div>
                                                            <div class="row-content">
                                                                <h4 class="list-group-item-heading pull-left"><span class="">2016000001</span></h4>
                                                                <p class="pull-right p10">
                                                                    <a href="" data-toggle="modal" data-target="#viewemployee"><i class="fa fa-external-link employeeicon"></i></a> &nbsp;
                                                                    <a href="" data-toggle="modal" data-target="#editemployee"><i class="fa fa-edit employeeicon"></i></a> &nbsp;
                                                                    <a href=""><i class="fa fa-remove employeeicon"></i></a>
                                                                </p><br /><br />
                                                                <p class="list-group-item-text" style="">Chua, Olivia <br /> Department - Job title</p>
                                                            </div>
                                                        </div>
                                                        <div class="list-group-separator"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
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
</body>

</html>
