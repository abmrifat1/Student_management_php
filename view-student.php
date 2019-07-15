<?php
require_once'./Student.php';
$student=new Student();

$queryResult=$student->getStudent();
if(isset($_GET['p'])){
    $id=$_GET['id'];
    $student->deleteStudentById($id);
}


?>



<a href="add-student.php">ADD</a>
<a href="view-student.php">VIEW</a>
<hr/>
<table border="1">
    <tr>


        <th>ID</th>
        <th>Name</th>
        <th>Result</th>
        <th>Subject</th>
        <th>Action</th>
    </tr>
    <?php while($studentInfo=mysqli_fetch_assoc($queryResult)) { ?>
    <tr>
        <td><?php echo $studentInfo['id'];?></td>
        <td><?php echo $studentInfo['name'];?></td>

        <td><?php echo $studentInfo['result'];?></td>
        <td><?php echo $studentInfo['subject']==1 ?'CSE':'EEE'; ?></td>
        <td>
            <a href="edit-student.php?id=<?php echo $studentInfo['id'];?>">Edit</a> ||
            <a href="?p=r & id=<?php echo $studentInfo['id'];?>" onclick="return confirm('Are You Sure To Delete It!!')">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>