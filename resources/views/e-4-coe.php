<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <?php include'all/head.php' ?>
    <title>Forms</title>

</head>

<body>
    <?php include'formsapprovals-modals.php' ?>
    <div id="wrap">
        <?php include'all/header.php' ?>
        <section class="container-fluid">
            <section class="row">
                <?php include'e-sidenav.php' ?>
                <article class="col-md-10 col-sm-10 p20">
                    <div class="titleh">
                        <h3>Certificate of Employment</h3>
                    </div>
                    <div class="tabletop">
                        <div class="tabletopleft pull-left">
                            <button type="button" name="button" class="btn btn-primary btn-raised " data-toggle="modal" data-target="#newcoe">New Form</button>
                        </div>
                    </div>
                    <div class="row p20">
                        <table class="table table-responsive table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>COE ID</th>
                                    <th>Addressee</th>
                                    <th>Purpose</th>
                                    <th>Date Needed</th>
                                    <th>Date Filed</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td><a data-toggle="modal" data-target="#editcoe"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="deletemodal"><i class="fa fa-remove"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td><a data-toggle="modal" data-target="#editcoe"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="deletemodal"><i class="fa fa-remove"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td>Lorem ipsum</td>
                                    <td><a data-toggle="modal" data-target="#editcoe"><i class="fa fa-edit"></i></a> &nbsp; <a data-toggle="modal" data-target="deletemodal"><i class="fa fa-remove"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
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
