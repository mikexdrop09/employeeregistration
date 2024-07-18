<?php
include ('./components/connection/conn.php');
$failedPassword = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['removeemployee'])) {


        $password = $_POST['admin_password'];
        $empID = $_POST['empID'];

        try {
            $stmt = $conn->prepare("SELECT * from tbluser WHERE AccType='Admin' and `Password` = :pass_word");
            $stmt->bindParam("pass_word", $password, PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetchAll();

            if ($result) {

                $stmt = $conn->prepare("DELETE FROM tblemployee WHERE EmployeeID=:emp_id");
                $stmt->bindParam("emp_id", $empID, PDO::PARAM_STR);
                $stmt->execute();
                header("Location: http://localhost/dragontwelveregistration/employee-record.php");
                exit();

            } else {
                $failedPassword = '1';

            }
        } catch (PDOException $e) {
            echo "" . $e->getMessage();
        }
    }
}
?>

<?php
include ('./components/header.php');
?>
<form action="" method="POST">
    <div class="modal-dialog modal-md d-block">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Do you want to remove this record? <?php echo "<br>" ?>
                    Please input admin password</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" id="empID" name="empID" value="<?php echo $_GET['n']; ?>">
                    <label for="adminPassword">Password:</label>
                    <input type="password" class="form-control" name="admin_password" id="adminPassword" required>
                </div>
                <div class="form-group">

                    <p id="incorrect-password"></p>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="removeemployee">Proceed</button>
            </div>
        </div>
    </div>
</form>

<?php
include ('./components/footer.php');
?>

<?php

try {
    if ($failedPassword == '1') {
        echo
            "<script>
document.getElementById('incorrect-password').innerHTML = 'Incorrect Password!!!';

document.getElementById('incorrect-password').style.fontSize='80%';
document.getElementById('incorrect-password').style.color ='#ff8080';
</script>
";
    } else {
        echo
            "<script>
    document.getElementById('incorrect-password').innerHTML = '';
    </script>
    ";
    }
} catch (Exception $e) {

}

?>