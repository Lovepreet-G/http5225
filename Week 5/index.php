<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
        $con = mysqli_connect('localhost','root','','http5225');
        $query= 'SELECT * FROM students';
        $students = mysqli_query($con,$query);
        // echo"<pre>";
        // print_r($students) ;
        // echo"</pre>";

    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-3 mb-5">
                    Student Catalog
                </h1>
            </div>
        </div>

        <div class="row">
            
            <?php
            foreach($students as $temp)
            {    
                if ($temp["grade"]<50) {
                    $bgClass = 'bg-danger';
                } 
                else{
                    $bgClass = 'bg-success';
                }
                echo '
                        <div class="col-md-4 ">
                            <div class="card '.$bgClass.'" style="width: 18rem;">
                                <img src="'.$temp["imageURl"].'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">'.$temp["fname"].' '.$temp["lname"].'</h5>
                                    <p class="card-text">Marks :-'.$temp["marks"].' <br> Grade:-  '.$temp["grade"].'</p>
                                </div>
                            </div>
                        </div>';         
                
            }    
        ?>
            
        </div>
        
    </div> 
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>