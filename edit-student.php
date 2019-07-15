<?php

require_once'./Student.php';
$student=new Student();
$id=$_GET['id'];

$queryResult=$student->getStudentById($id);
$std=mysqli_fetch_assoc($queryResult);

if(isset($_POST['btn'])){

    $student->updateStudent($_POST,$id);
}

?>
<a href="add-student.php">ADD</a>
<a href="view-student.php">VIEW</a>
<hr/>

<form action="" method="POST" name="editStudentForm">
    <table>
        <tr>
            <td>Name :</td>
            <td><input type="text" name="name" value="<?php echo $std['name'];?>"/></td>
        </tr>
        <tr>
            <td>Result :</td>
            <td><input type="text" name="result" value="<?php echo $std['result'];?>"/></td>
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
            <td><input type="submit" name="btn" value="Update"/></td>
        </tr>

    </table>
</form>
<script>
    document.forms['editStudentForm'].elements['subject'].value='<?php echo $std['subject'];?>';
</script>