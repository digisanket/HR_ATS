<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" src="https://cdn.jsdelivr.net/gh/cotton123236/zoomist@latest/dist/zoomist.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Finger Print | Viewer</title>
</head>
<nav class="navbar navbar-inverse" style="background-color: black;">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" style="color: white;">Student Name : <?php echo $studentinfo->student_name; ?></a>
        </div>
    </div>
</nav>

<body>

    <div class="container" style="width: 50%; height:50%">
        <div id="myCarousel" class="carousel slide" data-ride="">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php if(!empty($studentinfo->student_finger1)){ ?> 
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <?php } ?>
                <?php if(!empty($studentinfo->student_finger2)){ ?> 
                    <li data-target="#myCarouse2" data-slide-to="2" ></li>
                <?php } ?>
                <?php if(!empty($studentinfo->student_finger3)){ ?> 
                    <li data-target="#myCarouse3" data-slide-to="3" ></li>
                <?php } ?>
                <?php if(!empty($studentinfo->student_finger4)){ ?> 
                    <li data-target="#myCarouse4" data-slide-to="4" ></li>
                <?php } ?>
                <?php if(!empty($studentinfo->student_finger5)){ ?> 
                    <li data-target="#myCarouse4" data-slide-to="5" ></li>
                <?php } ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php if(!empty($studentinfo->student_finger1)){ ?> 
                    <div class="item active">
                        <img src="<?php echo $studentinfo->student_finger1; ?>" class="img-responsive center-block" style="width: 40%;height:40%;">
                    </div>
                <?php } ?>
                <?php if(!empty($studentinfo->student_finger2)){ ?> 
                    <div class="item">
                        <img src="<?php echo $studentinfo->student_finger2; ?>"  class="img-responsive center-block" style="width: 40%;height:40%;">
                    </div>
                <?php } ?>
                <?php if(!empty($studentinfo->student_finger3)){ ?> 
                    <div class="item">
                        <img src="<?php echo $studentinfo->student_finger3; ?>"  class="img-responsive center-block" style="width: 40%;height:40%;">
                    </div>
                <?php } ?>
                <?php if(!empty($studentinfo->student_finger4)){ ?> 
                    <div class="item">
                        <img src="<?php echo $studentinfo->student_finger4; ?>"  class="img-responsive center-block" style="width: 40%;height:40%;">
                    </div>
                <?php } ?>
                <?php if(!empty($studentinfo->student_finger5)){ ?> 
                    <div class="item">
                        <img src="<?php echo $studentinfo->student_finger5; ?>"  class="img-responsive center-block" style="width: 40%;height:40%;">
                    </div>
                <?php } ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cotton123236/zoomist@latest/dist/zoomist.min.js"></script>
</body>


</html>