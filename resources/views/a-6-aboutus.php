<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include'all/head.php' ?>
    <title>About Us Module</title>

</head>

<body>
    <?php include'aboutus-modals.php' ?>
    <?php include'attendance-modals.php' ?>
    <div id="wrap">
        <?php include'all/header.php' ?>
        <section class="container-fluid">
            <section class="row">
                <?php include'a-sidenav.php' ?>
                <article class="col-md-10 col-sm-10 p20">
                    <div class="row p20">
                      <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Well done!</strong> You successfully updated the Mission &amp; Vision.
                      </div>
                      <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Well done!</strong> You successfully created a new restaurant.
                      </div>
                      <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Well done!</strong> You successfully updated the restaurant information.
                      </div>
                      <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Well done!</strong> You successfully created a new department.
                      </div>
                      <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Well done!</strong> You successfully updated the department information.
                      </div>
                      <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Well done!</strong> You successfully created a new job title.
                      </div>
                      <div class="alert alert-success alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <strong>Well done!</strong> You successfully updated the job title information.
                      </div>


                      <div class="card">
                        <div class="card-block p2030">
                            <div class="pull-right">
                                <a data-toggle="modal" data-target="#editmissionvision"><i class="fa fa-edit"></i></a>
                            </div>
                          <h4 class="card-title">Mission</h4>
                          <p class="card-text text-justify">To provide customers top quality food, service and atmosphere by bringing to the Philippines premium foreign restaurants that live up to the quality expected of a global brand while catering to the local taste. Given the highly motivated and well-trained staff, we value customer relationship management to be profitable without compromising quality.<br />Our company’s reputation and continuous success in the food and beverage industry are grounded in our commitment to service, business integrity and nation building. </p>
                          <h4 class="card-title">Vision</h4>
                          <p class="card-text text-justify">To be the industry benchmark by providing quality-driven customer experience and a top-of-mind choice for consumers seeking authentic and innovative dining experience.</p>
                        </div>
                      </div>
                    </div>
                    <br />
                    <div class="row p20">
                      <div class="card">
                        <div class="card-block">
                            <ul class="nav nav-tabs">
                              <li class="nav-item"><a class="nav-link active" href="#restaurant" data-toggle="tab">Restaurant</a></li>
                              <li class="nav-item"><a class="nav-link" href="#department" data-toggle="tab">Department</a></li>
                              <li class="nav-item"><a class="nav-link" href="#jobbtitle" data-toggle="tab">Job Title</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                              <div class="tab-pane fade active in p2030" id="restaurant">
                                  <div class="row">
                                      <div class="col-md-12 col-sm-12">
                                          <div class="form-group label-floating">
                                              <label for="a-1-aboutus-restaurantsubheading" class="control-label">Restaurant Sub-Heading</label>
                                              <input type="text" class="form-control" id="a-1-aboutus-restaurantsubheading" name="a-1-aboutus-restaurantsubheading">
                                              <span class="help-block">This is displayed in the HRIS Website</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row p20">
                                      <br />
                                    <button type="button" name="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#newrestaurant">New Restaurant</button>
                                  </div>
                                  <div class="row p20">
                                      <table class="table table-hover table-condensed table-responsive">
                                          <thead>
                                              <tr>
                                                  <th>Branch Code</th>
                                                  <th>Name</th>
                                                  <th>Location</th>
                                                  <th>Image</th>
                                                  <th></th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td>lorem ipsum</td>
                                                  <td>lorem ipsum</td>
                                                  <td>lorem ipsum</td>
                                                  <td>lorem ipsum</td>
                                                  <td><a data-toggle="modal" data-target="#editrestaurant"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#discardrestaurantmodal"><i class="fa fa-remove"></i></a></td>
                                              </tr>
                                          </tbody>
                                      </table>
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
                              <div class="tab-pane fade p2030" id="department">
                                  <div class="row p20">
                                    <button type="button" name="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#newdepartment">New Department</button>
                                  </div>
                                  <div class="row p20">
                                      <table class="table table-hover table-condensed table-responsive">
                                          <thead>
                                              <tr>
                                                  <th>Name</th>
                                                  <th></th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td>lorem ipsum</td>
                                                  <td><a data-toggle="modal" data-target="#editdepartment"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#discarddepartmentmodal"><i class="fa fa-remove"></i></a></td>
                                              </tr>
                                          </tbody>
                                      </table>
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
                              <div class="tab-pane fade p2030" id="jobbtitle">
                                  <div class="row p20">
                                    <button type="button" name="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#newjobtitle">New Job Title</button>
                                  </div>
                                  <div class="row p20">
                                      <table class="table table-hover table-condensed table-responsive">
                                          <thead>
                                              <tr>
                                                  <th>Name</th>
                                                  <th></th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td>lorem ipsum</td>
                                                  <td><a data-toggle="modal" data-target="#editjobtitle"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#discardjobtitlemodal"><i class="fa fa-remove"></i></a></td>
                                              </tr>
                                          </tbody>
                                      </table>
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

                </article>
            </section>
        </section>

    </div>
    <!--wrap-->
    <?php include'all/script.php' ?>
</body>

</html>
