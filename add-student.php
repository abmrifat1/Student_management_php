<?php

if(isset($_POST['btn'])){
  require_once'./Student.php';
  $student=new Student();

  $message=$student->saveStudent($_POST);

}


?>

<a href="add-student.php">ADD Student</a>
<a href="view-student.php">VIEW</a>
<hr/>

<?php
if(!empty($message)){
    echo $message;
}
?>

<form action="" method="POST">
    <table>
        <tr>
        <td>Name :</td>
        <td><input type="text" name="name"/></td>
        </tr>
        <tr>
            <td>Result :</td>
            <td><input type="text" name="result"/></td>
        </tr>
        <tr>
            <td>Subject :</td>
            <td>
                <select name="subject">
                    <option>---Select Subject---</option>
                    <option value="1">CSE</option>
                    <option value="0">EEE</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Save"/></td>
        </tr>

    </table>
</form>