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
                    <div class="titleh">
                        <h3>Custom Evaluation</h3>
                    </div>
                    <div class="row p20">
                        <h4>Default Questions</h4>
                        <div class="row">
                            <div class="col-md-11 col-sm-11">
                                <div class="form-group label-floating">
                                    <label for="a-8-customevaluation-q1" class="control-label">Question No. 1</label>
                                    <input type="text" class="form-control" id="a-8-customevaluation-q1" name="a-8-customevaluation-q1">
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <br /><br />
                                <i class="fa fa-plus employeeicon"></i>
                            </div>
                        </div>
                        <h4>Specific Questions &nbsp;<button type="button" name="button" class="btn btn-primary">Add Job Title</button></h4>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="a-8-customevaluation-jobtitle">Job Title</label>
                                    <select id="a-8-customevaluation-jobtitle" class="form-control" name="a-8-customevaluation-jobtitle">
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11 col-sm-11">
                                <div class="form-group label-floating">
                                    <label for="a-8-customevaluation-q1" class="control-label">Question No. 1</label>
                                    <input type="text" class="form-control" id="a-8-customevaluation-q1" name="a-8-customevaluation-q1">
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1">
                                <br /><br />
                                <i class="fa fa-plus employeeicon"></i>
                            </div>
                        </div>


                    </div>
                    <div class="row p20">
                        <div class="col-md-12 col-sm-12">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary btn-raised">Save</button>
                                <button type="button" class="btn btn-primary btn-raised">Cancel</button>
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
