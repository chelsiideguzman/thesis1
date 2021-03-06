<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    @include('all.head')
    <title>Performance Evaluation</title>

</head>

<body>
    <div id="wrap">
    @include('all.header')
        <section class="container-fluid">
            <section class="row">
              @include('a-sidenav')
              <article class="col-md-9 col-sm-9" id="rightcon">
                  <div class="titleh clearfix">
                      <button class="btn btn-default sidebar-toggle pull-left"><i class="fa fa-bars "></i></button>
                        <h3>Employee Past Evaluations</h3>
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
                    <div class="row p20">
                        <div class="col-md-4 col-sm-12">
                            <table class="table table-responsive table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th>Rating</th>
                                        <th>Year</th>
                                        <th>Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr href="#year1" data-toggle="tab">
                                        <td>1</td>
                                        <td>2016</td>
                                        <td>lorem ipsum</td>
                                    </tr>
                                    <tr href="#year2" data-toggle="tab">
                                        <td>1</td>
                                        <td>2016</td>
                                        <td>lorem ipsum</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-1 col-sm-12 text-center">
                            <br />
                            <i class="fa fa-arrow-right"></i><br />
                            <i class="fa fa-arrow-right"></i>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in" id="year1">
                                    <table class="table table-responsive table-condensed table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Question</th>
                                                <th class="text-center">Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </td>
                                                <td class="text-center">3</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </td>
                                                <td class="text-center">4</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><strong>Average</strong></td>
                                                <td class="text-center">4.8</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="year2">
                                    <table class="table table-responsive table-condensed table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Question</th>
                                                <th class="text-center">Rating</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Lorem ipsum dolor sit amet</td>
                                                <td class="text-center">3</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Lorem ipsum dolor sit amet </td>
                                                <td class="text-center">4</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><strong>Average</strong></td>
                                                <td class="text-center">4.8</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="pull-left">
                            <button type="button" name="button" class="btn btn-primary pull-left" onclick="goBack();"><i class="fa fa-chevron-left"></i>&nbsp; Back</button>
                        </div>
                    </div>

                </article>
            </section>
        </section>

    </div>
    <!--wrap-->
    @include('all.script')
</body>

</html>
