<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include'all/head.php' ?>
    <title>Performance Evaluation</title>

</head>

<body>
    <div id="wrap">
        <?php include'all/header.php' ?>
        <section class="container-fluid">
            <section class="row">
                <?php include'a-sidenav.php' ?>
                <article class="col-md-10 col-sm-10 p20">
                    <button type="button" name="button" class=" btn btn-primary btn-raised" onclick="goBack();"><i class="fa fa-chevron-left"></i>&nbsp; Back</button>
                    <div class="titleh">
                        <h3>Employee Evaluation</h3>
                    </div>
                    <div class="tabletop">
                        <div class="text-left">
                            <p>
                                <span class="col-sm-2 labeltext">Name</span>
                                <span class="col-sm-3"><i class="">Lorem Ipsum</i></span>
                                <span class="col-sm-2"><i class=""></i></span>
                                <span class="col-sm-2 labeltext">Date</span>
                                <span class="col-sm-3"><i class="">Lorem Ipsum</i></span>

                                <span class="col-sm-2 labeltext">Department</span>
                                <span class="col-sm-3">Lorem Ipsum</i></span>
                                <span class="col-sm-2"><i class=""></i></span>
                                <span class="col-sm-2 labeltext">Branch Name</span>
                                <span class="col-sm-3">Lorem Ipsum</i></span>
                            </p>
                        </div>
                    </div>
                    <form class="" action="" method="post">
                        <div class="row p20">
                            <table class="table table-responsive table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Question</th>
                                        <th class="text-center">0 <br /> Not Applicable</th>
                                        <th class="text-center">1 <br /> Very Unsatisfactory</th>
                                        <th class="text-center">2 <br /> Unsatisfactory</th>
                                        <th class="text-center">3 <br /> Satisfactory</th>
                                        <th class="text-center">4 <br /> Very Satisfactory</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </td>
                                        <td class="text-center">
                                            <div class="radio">
                                                <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option0">
                                              </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="radio">
                                                <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                              </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="radio">
                                                <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option2">
                                              </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="radio">
                                                <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option3">
                                              </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="radio">
                                                <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option4">
                                              </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </td>
                                        <td class="text-center">
                                            <div class="radio">
                                                <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option0">
                                              </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="radio">
                                                <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                              </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="radio">
                                                <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option2">
                                              </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="radio">
                                                <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option3">
                                              </label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="radio">
                                                <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option4">
                                              </label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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

                </article>
            </section>
        </section>

    </div>
    <!--wrap-->
    <?php include'all/script.php' ?>
</body>

</html>
