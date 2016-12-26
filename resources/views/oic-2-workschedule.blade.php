<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    @include('all.head')
    <title>Attendance Management</title>

</head>

<body>
    <div id="wrap">
        @include('all.header')
        <section class="container-fluid">
            <section class="row">
                @include('h-sidenav')
                <article class="col-md-10 col-sm-10 p20">
                    <div class="titleh">
                        <h3>Work Schedule</h3>
                        <h4>Sandaya Yakiniku (October 28, 2016 - October 28, 2016)</h4>
                    </div>
                    <div class="row p20">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="nav-item"><a class="nav-link active" href="#monday" data-toggle="tab">Monday</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tuesday" data-toggle="tab">Tuesday</a></li>
                            <li class="nav-item"><a class="nav-link" href="#wednesday" data-toggle="tab">Wednesday</a></li>
                            <li class="nav-item"><a class="nav-link" href="#thursday" data-toggle="tab">Thursday</a></li>
                            <li class="nav-item"><a class="nav-link" href="#friday" data-toggle="tab">Friday</a></li>
                            <li class="nav-item"><a class="nav-link" href="#saturday" data-toggle="tab">Saturday</a></li>
                            <li class="nav-item"><a class="nav-link" href="#sunday" data-toggle="tab">Sunday</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade active in p2030" id="monday">
                                <h3>Monday - <span>October 28, 2016</span></h3>
                                <a href="#monday-openingshift" name="button" class="btn btn-default " data-toggle="tab">Opening Shift</a>
                                <a href="#monday-midshift" name="button" class="btn btn-default" data-toggle="tab">Mid Shift</a>
                                <a href="#monday-closingshift" name="button" class="btn btn-default" data-toggle="tab">Closing Shift</a>

                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in p20" id="monday-openingshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-monday-openingshift">Opening Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-monday-openingshift" class="form-control" name="oic-2-workschedule-monday-openingshift" multiple="multiple" style="width:100%">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade p20" id="monday-midshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-monday-midshift">Mid Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-monday-midshift" class="form-control" name="oic-2-workschedule-monday-midshift" multiple="multiple" style="width:100%">
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade p20" id="monday-closingshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-monday-closingshift">Closing Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-monday-closingshift" class="form-control" name="oic-2-workschedule-monday-closingshift" multiple="multiple" style="width:100%">
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade p2030" id="tuesday">
                                <h3>Tuesday - <span>October 28, 2016</span></h3>
                                <a href="#tuesday-openingshift" name="button" class="btn btn-default " data-toggle="tab">Opening Shift</a>
                                <a href="#tuesday-midshift" name="button" class="btn btn-default" data-toggle="tab">Mid Shift</a>
                                <a href="#tuesday-closingshift" name="button" class="btn btn-default" data-toggle="tab">Closing Shift</a>

                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in p20" id="tuesday-openingshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-tuesday-openingshift">Opening Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-tuesday-openingshift" class="form-control" name="oic-2-workschedule-tuesday-openingshift" multiple="multiple" style="width:100%">
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade p20" id="tuesday-midshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-tuesday-midshift">Mid Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-tuesday-midshift" class="form-control" name="oic-2-workschedule-tuesday-midshift" multiple="multiple" style="width:100%">
                                                                                        <option>Male</option>
                                                                                        <option>Female</option>
                                                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade p20" id="tuesday-closingshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-tuesday-closingshift">Closing Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-tuesday-closingshift" class="form-control" name="oic-2-workschedule-tuesday-closingshift" multiple="multiple" style="width:100%">
                                                                                        <option>Male</option>
                                                                                        <option>Female</option>
                                                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade p2030" id="wednesday">
                                <h3>Wednesday - <span>October 28, 2016</span></h3>
                                <a href="#wednesday-openingshift" name="button" class="btn btn-default " data-toggle="tab">Opening Shift</a>
                                <a href="#wednesday-midshift" name="button" class="btn btn-default" data-toggle="tab">Mid Shift</a>
                                <a href="#wednesday-closingshift" name="button" class="btn btn-default" data-toggle="tab">Closing Shift</a>

                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in p20" id="wednesday-openingshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-wednesday-openingshift">Opening Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-wednesday-openingshift" class="form-control" name="oic-2-workschedule-wednesday-openingshift" multiple="multiple" style="width:100%">
                                                                                            <option>Male</option>
                                                                                            <option>Female</option>
                                                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade p20" id="wednesday-midshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-wednesday-midshift">Mid Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-wednesday-midshift" class="form-control" name="oic-2-workschedule-wednesday-midshift" multiple="multiple" style="width:100%">
                                                                                                                        <option>Male</option>
                                                                                                                        <option>Female</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade p20" id="wednesday-closingshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-wednesday-closingshift">Closing Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-wednesday-closingshift" class="form-control" name="oic-2-workschedule-wednesday-closingshift" multiple="multiple" style="width:100%">
                                                                                                                        <option>Male</option>
                                                                                                                        <option>Female</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade p2030" id="thursday">
                                <h3>Thursday - <span>October 28, 2016</span></h3>
                                <a href="#thursday-openingshift" name="button" class="btn btn-default " data-toggle="tab">Opening Shift</a>
                                <a href="#thursday-midshift" name="button" class="btn btn-default" data-toggle="tab">Mid Shift</a>
                                <a href="#thursday-closingshift" name="button" class="btn btn-default" data-toggle="tab">Closing Shift</a>

                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in p20" id="thursday-openingshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-thursday-openingshift">Opening Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-thursday-openingshift" class="form-control" name="oic-2-workschedule-thursday-openingshift" multiple="multiple" style="width:100%">
                                                                                            <option>Male</option>
                                                                                            <option>Female</option>
                                                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade p20" id="thursday-midshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-thursday-midshift">Mid Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-thursday-midshift" class="form-control" name="oic-2-workschedule-thursday-midshift" multiple="multiple" style="width:100%">
                                                                                                                        <option>Male</option>
                                                                                                                        <option>Female</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade p20" id="thursday-closingshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-thursday-closingshift">Closing Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-thursday-closingshift" class="form-control" name="oic-2-workschedule-thursday-closingshift" multiple="multiple" style="width:100%">
                                                                                                                        <option>Male</option>
                                                                                                                        <option>Female</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade p2030" id="friday">
                                <h3>Friday - <span>October 28, 2016</span></h3>
                                <a href="#friday-openingshift" name="button" class="btn btn-default " data-toggle="tab">Opening Shift</a>
                                <a href="#friday-midshift" name="button" class="btn btn-default" data-toggle="tab">Mid Shift</a>
                                <a href="#friday-closingshift" name="button" class="btn btn-default" data-toggle="tab">Closing Shift</a>

                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in p20" id="friday-openingshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-friday-openingshift">Opening Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-friday-openingshift" class="form-control" name="oic-2-workschedule-friday-openingshift" multiple="multiple" style="width:100%">
                                                                                            <option>Male</option>
                                                                                            <option>Female</option>
                                                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade p20" id="friday-midshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-friday-midshift">Mid Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-friday-midshift" class="form-control" name="oic-2-workschedule-friday-midshift" multiple="multiple" style="width:100%">
                                                                                                                        <option>Male</option>
                                                                                                                        <option>Female</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade p20" id="friday-closingshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-friday-closingshift">Closing Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-friday-closingshift" class="form-control" name="oic-2-workschedule-friday-closingshift" multiple="multiple" style="width:100%">
                                                                                                                        <option>Male</option>
                                                                                                                        <option>Female</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade p2030" id="saturday">
                                <h3>Saturday - <span>October 28, 2016</span></h3>
                                <a href="#saturday-openingshift" name="button" class="btn btn-default " data-toggle="tab">Opening Shift</a>
                                <a href="#saturday-midshift" name="button" class="btn btn-default" data-toggle="tab">Mid Shift</a>
                                <a href="#saturday-closingshift" name="button" class="btn btn-default" data-toggle="tab">Closing Shift</a>

                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in p20" id="saturday-openingshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-saturday-openingshift">Opening Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-saturday-openingshift" class="form-control" name="oic-2-workschedule-saturday-openingshift" multiple="multiple" style="width:100%">
                                                                                            <option>Male</option>
                                                                                            <option>Female</option>
                                                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade p20" id="saturday-midshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-saturday-midshift">Mid Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-saturday-midshift" class="form-control" name="oic-2-workschedule-saturday-midshift" multiple="multiple" style="width:100%">
                                                                                                                        <option>Male</option>
                                                                                                                        <option>Female</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade p20" id="saturday-closingshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-saturday-closingshift">Closing Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-saturday-closingshift" class="form-control" name="oic-2-workschedule-saturday-closingshift" multiple="multiple" style="width:100%">
                                                                                                                        <option>Male</option>
                                                                                                                        <option>Female</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade p2030" id="sunday">
                                <h3>Sunday - <span>October 28, 2016</span></h3>
                                <a href="#sunday-openingshift" name="button" class="btn btn-default " data-toggle="tab">Opening Shift</a>
                                <a href="#sunday-midshift" name="button" class="btn btn-default" data-toggle="tab">Mid Shift</a>
                                <a href="#sunday-closingshift" name="button" class="btn btn-default" data-toggle="tab">Closing Shift</a>

                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in p20" id="sunday-openingshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-sunday-openingshift">Opening Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-sunday-openingshift" class="form-control" name="oic-2-workschedule-sunday-openingshift" multiple="multiple" style="width:100%">
                                                                                            <option>Male</option>
                                                                                            <option>Female</option>
                                                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade p20" id="sunday-midshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-sunday-midshift">Mid Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-sunday-midshift" class="form-control" name="oic-2-workschedule-sunday-midshift" multiple="multiple" style="width:100%">
                                                                                                                        <option>Male</option>
                                                                                                                        <option>Female</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade p20" id="sunday-closingshift">
                                        <form class="" action="" method="post">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="oic-2-workschedule-sunday-closingshift">Closing Shift <span>7:00am - 8:00am</span></label>
                                                        <select id="oic-2-workschedule-sunday-closingshift" class="form-control" name="oic-2-workschedule-sunday-closingshift" multiple="multiple" style="width:100%">
                                                                                                                        <option>Male</option>
                                                                                                                        <option>Female</option>
                                                                                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="pull-right">
                                                        <button type="button" class="btn btn-primary btn-raised">Save</button>
                                                        <button type="button" class="btn btn-primary btn-raised">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

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
