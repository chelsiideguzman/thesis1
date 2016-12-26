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
                  <div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>Well done!</strong> You successfully updated the evaluation questions.
                  </div>

                    <div class="titleh">
                        <h3>Custom Evaluation</h3>
                    </div>
                    <div class="row p20">
                        <h4>Default Questions</h4>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group label-floating">

                                    <input type="hidden" name="count" value="1" />
                                    <div class="control-group" id="fields">
                                        <label class="control-label" for="field1"></label>
                                        <div class="controls" id="profs">
                                            <form class="input-append">
                                                <div id="field">
                                                    <input autocomplete="off" class="input form-control" id="field1" name="prof1" type="text" data-items="8" />
                                                    <button id="b1" class="btn add-more" type="button"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
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
                        <div class="row" id="textboxContainer">
                            <div class="col-md-12 col-sm-12">
                                <div id="" class="form-group label-floating">
                                    <label for="a-8-customevaluation-q1" class="control-label">Question No. 1</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="a-8-customevaluation-q1" name="a-8-customevaluation-q1">
                                        <div class="input-group-addon"><i class="fa fa-plus"></i></div>
                                    </div>
                                </div>
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
    <script type="text/javascript">
        $(document).ready(function() {
            var next = 1;
            $(".add-more").click(function(e) {
                e.preventDefault();
                var addto = "#field" + next;
                var addRemove = "#field" + (next);
                next = next + 1;
                var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
                var newInput = $(newIn);
                var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" ><i class="fa fa-minus"></i></button></div><div id="field">';
                var removeButton = $(removeBtn);
                $(addto).after(newInput);
                $(addRemove).after(removeButton);
                $("#field" + next).attr('data-source', $(addto).attr('data-source'));
                $("#count").val(next);

                $('.remove-me').click(function(e) {
                    e.preventDefault();
                    var fieldNum = this.id.charAt(this.id.length - 1);
                    var fieldID = "#field" + fieldNum;
                    $(this).remove();
                    $(fieldID).remove();
                });
            });



        });
    </script>
</body>

</html>
