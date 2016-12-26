<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include'all/head.php' ?>
    <title>Fredley Food &amp; Beverages, Inc</title>
</head>

<body>
    <?php include'aboutus-modals.php' ?>
    <?php include'recruitment-modals.php' ?>
    <div id="wrap">

      <?php include'all/header-index.php' ?>

        <section class="container-fluid">
            <section class="row featuresimagefull">
                <article class="col-md-12 col-sm-12 p15020">

                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Well done!</strong> You successfully applied for a job.
                    </div>

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
                                            <div class="center-block">
                                                <img src="img/servicecrew.png" alt="" class="bigimg center">
                                            </div>
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
                                <div class="tab-pane fade p2030" id="morejobs">
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
                                                            <h4 class="list-group-item-heading text-uppercase"><a href="" data-toggle="modal" data-target="#jobtitlemodal"><span>JOB TITLE</span></a></h4>
                                                            <h4 class="list-group-item-text">Branch</h4>
                                                            <p class="list-group-item-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                                            <p class="list-group-item-text text-muted"><small>Date Posted: <span>10/10/2016</span></small></p>
                                                        </div>
                                                        <div class="list-group-separator"></div>
                                                        <div class="list-group-item">
                                                            <h4 class="list-group-item-heading text-uppercase"><span>JOB TITLE</span></h4>
                                                            <h4 class="list-group-item-text">Branch</h4>
                                                            <p class="list-group-item-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                                            <p class="list-group-item-text text-muted"><small>Date Posted: <span>10/10/2016</span></small></p>
                                                        </div>
                                                        <div class="list-group-separator"></div>
                                                        <div class="list-group-item">
                                                            <h4 class="list-group-item-heading text-uppercase"><span>JOB TITLE</span></h4>
                                                            <h4 class="list-group-item-text">Branch</h4>
                                                            <p class="list-group-item-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                                            <p class="list-group-item-text text-muted"><small>Date Posted: <span>10/10/2016</span></small></p>
                                                        </div>
                                                        <div class="list-group-separator"></div>
                                                        <div class="list-group-item">
                                                            <h4 class="list-group-item-heading text-uppercase"><span>JOB TITLE</span></h4>
                                                            <h4 class="list-group-item-text">Branch</h4>
                                                            <p class="list-group-item-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                                            <p class="list-group-item-text text-muted"><small>Date Posted: <span>10/10/2016</span></small></p>
                                                        </div>
                                                        <div class="list-group-separator"></div>
                                                        <div class="list-group-item">
                                                            <h4 class="list-group-item-heading text-uppercase"><span>JOB TITLE</span></h4>
                                                            <h4 class="list-group-item-text">Branch</h4>
                                                            <p class="list-group-item-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                                            <p class="list-group-item-text text-muted"><small>Date Posted: <span>10/10/2016</span></small></p>
                                                        </div>
                                                        <div class="list-group-separator"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="list-group" style="clear: both;">
                                                        <div class="list-group-item">
                                                            <h4 class="list-group-item-heading text-uppercase"><span>JOB TITLE</span></h4>
                                                            <h4 class="list-group-item-text">Branch</h4>
                                                            <p class="list-group-item-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                                            <p class="list-group-item-text text-muted"><small>Date Posted: <span>10/10/2016</span></small></p>
                                                        </div>
                                                        <div class="list-group-separator"></div>
                                                        <div class="list-group-item">
                                                            <h4 class="list-group-item-heading text-uppercase"><span>JOB TITLE</span></h4>
                                                            <h4 class="list-group-item-text">Branch</h4>
                                                            <p class="list-group-item-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                                            <p class="list-group-item-text text-muted"><small>Date Posted: <span>10/10/2016</span></small></p>
                                                        </div>
                                                        <div class="list-group-separator"></div>
                                                        <div class="list-group-item">
                                                            <h4 class="list-group-item-heading text-uppercase"><span>JOB TITLE</span></h4>
                                                            <h4 class="list-group-item-text">Branch</h4>
                                                            <p class="list-group-item-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                                            <p class="list-group-item-text text-muted"><small>Date Posted: <span>10/10/2016</span></small></p>
                                                        </div>
                                                        <div class="list-group-separator"></div>
                                                        <div class="list-group-item">
                                                            <h4 class="list-group-item-heading text-uppercase"><span>JOB TITLE</span></h4>
                                                            <h4 class="list-group-item-text">Branch</h4>
                                                            <p class="list-group-item-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                                            <p class="list-group-item-text text-muted"><small>Date Posted: <span>10/10/2016</span></small></p>
                                                        </div>
                                                        <div class="list-group-separator"></div>
                                                        <div class="list-group-item">
                                                            <h4 class="list-group-item-heading text-uppercase"><span>JOB TITLE</span></h4>
                                                            <h4 class="list-group-item-text">Branch</h4>
                                                            <p class="list-group-item-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                                                            <p class="list-group-item-text text-muted"><small>Date Posted: <span>10/10/2016</span></small></p>
                                                        </div>
                                                        <div class="list-group-separator"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <nav aria-label="Page navigation" class="text-center">
                                                            <ul class="pagination">
                                                                <li>
                                                                    <a href="#" aria-label="Previous">
                                                                        <span aria-hidden="true">&laquo;</span>
                                                                    </a>
                                                                </li>
                                                                <li class="active"><a href="#">1</a></li>
                                                                <li><a href="#">2</a></li>
                                                                <li><a href="#">3</a></li>
                                                                <li><a href="#">4</a></li>
                                                                <li><a href="#">5</a></li>
                                                                <li>
                                                                    <a href="#" aria-label="Next">
                                                                        <span aria-hidden="true">&raquo;</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
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
