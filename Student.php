<?php

class Student
{
    public function saveStudent($data){

        $name=$data['name'];
        $result=$data['result'];
        $subject=$data['subject'];
        $link =mysqli_connect('localhost','root','','student');
        $sql="INSERT INTO  student_tb(name,result,subject) VALUES('$name','$result','$subject')";


           if(mysqli_query($link,$sql)){
               $message="Student Info save successfully";
               return $message;
           }
           else{
               die('Query Problem'. mysqli_error($link));
           }


    }
    public function getStudent(){
        $link =mysqli_connect('localhost','root','','student');
        $sql="SELECT * FROM student_tb";

        if(mysqli_query($link,$sql)){
            $queryResult=mysqli_query($link,$sql);

            return $queryResult;
        }
        else{
            die('Query Problem'. mysqli_error($link));
        }
    }

    public function getStudentById($id){
        $link =mysqli_connect('localhost','root','','student');
        $sql="SELECT * FROM student_tb WHERE id='$id' ";

        if(mysqli_query($link,$sql)){

           $queryResult= mysqli_query($link,$sql);
           return $queryResult;
        } else{
            die('Query Problem'. mysqli_error($link));
        }


    }

    public function updateStudent($data,$id){
        $name=$data['name'];
        $result=$data['result'];
        $subject=$data['subject'];

        $link =mysqli_connect('localhost','root','','student');
        $sql="UPDATE student_tb SET name='$name',result='$result',subject='$subject' WHERE id='$id'";

        if(mysqli_query($link,$sql)){

           header('Location:view-student.php');
        } else{
            die('Query Problem'. mysqli_error($link));
        }

    }

    public function deleteStudentById($id){
        $link =mysqli_connect('localhost','root','','student');
        $sql="DELETE FROM student_tb WHERE id='$id'";

        if(mysqli_query($link,$sql)){

            header('Location:view-student.php');
        } else{
            die('Query Problem'. mysqli_error($link));
        }

    }



}