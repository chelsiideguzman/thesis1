<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    @include('all.head')
    <title>Forms</title>

</head>

<body>
    @include('formsapprovals-modals')
    <div id="wrap">
        @include('all.header')
        <section class="container-fluid">
            <section class="row">
                @include('e-sidenav')
                <article class="col-md-9 col-sm-9" id="rightcon">
                    <div class="titleh clearfix">
                        <button class="btn btn-default sidebar-toggle pull-left"><i class="fa fa-bars "></i></button>
                        <h3>Leave Application Form</h3>
                    </div>
                    <div class="tabletop">
                        <div class="tabletopleft pull-left">
                            <button type="button" name="button" class="btn btn-primary btn-raised " data-toggle="modal" data-target="#newlaf">New Form</button>
                        </div>
                    </div>
                    <div class="row p20">
                        <table class="table table-responsive table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>LAF ID</th>
                                    <th>Type</th>
                                    <th>Reason</th>
                                    <th>Paid Leave</th>
                                    <th>Date Filed</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="warning">
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Pending</td>
                                    <td><a data-toggle="modal" data-target="#editlaf"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="#discardformmodal"><i class="fa fa-remove"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Endorsed</td>
                                    <td><a data-toggle="modal" data-target="#editlaf"><i class="fa fa-edit"></i></a> &nbsp; </td>
                                </tr>
                                <tr>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Approved</td>
                                    <td><a data-toggle="modal" data-target="#editlaf"><i class="fa fa-edit"></i></a> &nbsp; </td>
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

                </article>
            </section>
        </section>

    </div>
    <!--wrap-->
    @include('all.script')
</body>

</html>
