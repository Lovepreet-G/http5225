<?php
    // print_r($_POST);
    if (isset($_POST['addStudent'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $marks = $_POST['marks'];

        include('connect.php');

        //grade logic
        if ($marks >= 90 && $marks <= 100) {
            $grade = 'A+';
        } elseif ($marks >= 80 && $marks < 90) {
            $grade = 'A';
        } elseif ($marks >= 70 && $marks < 80) {
            $grade = 'B+';
        } elseif ($marks >= 60 && $marks < 70) {
            $grade = 'B';
        } elseif ($marks >= 50 && $marks < 60) {
            $grade = 'C+';
        } elseif ($marks >= 40 && $marks < 50) {
            $grade = 'C';
        } elseif ($marks >= 30 && $marks < 40) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        $numberStd = "Select * from students";
        $numberofStd = mysqli_num_rows(mysqli_query($con,$numberStd));

        $imageURL = "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/".($numberofStd+1).".jpg";

        $query = "INSERT INTO students (fname , lname, marks, grade, imageURL) VALUES ('$fname', '$lname','$marks','$grade','$imageURL')";
        $student = mysqli_query($con,$query);
        

        if($student){
            // echo "Success!";
            header('Location: ../index.php');

        }
        else
        {
            echo mysqli_error($connect);
        }

    }
    else
    {
        echo "Go Away.......";
    }

    