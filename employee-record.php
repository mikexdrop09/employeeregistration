<?php
include ('./components/header.php');
?>

<div class="main">
    <div class="expense-container">
        <div class="title">
            <h4>EMPLOYEE LIST</h4>
            <a class="btn btn-success" href="./employee-registration.php">Add Employee</a>
        </div>


        <div class="table-container table-responsive">
            <table class="table table-lg display nowrap stripe row-border order-column employeeTable" cellspacing="0"
                width="100%">
                <thead class="thead-color">
                    <tr>
                        <th scope="col">Action</th>
                        <th scope="col">No</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Rate</th>
                        <th scope="col">Full Present Address</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Position</th>
                        <th scope="col">Vaccination Status</th>
                        <th scope="col">Bonus</th>
                        <th scope="col">Bonus Amount</th>
                        <th scope="col">13th Month</th>
                        <th scope="col">13th Month Amount</th>
                        <th scope="col">Package</th>
                        <th scope="col">Insurance</th>
                        <th scope="col">Beneficiary Name</th>
                        <th scope="col">Relationship</th>
                        <th scope="col">Beneficiary Birthday</th>
                        <th scope="col">Date Employed</th>
                        <th scope="col">Civil Status</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">SSS No.</th>
                        <th scope="col">PhilHealth No.</th>
                        <th scope="col">HDMF No.</th>
                        <th scope="col">SSS Empyr. Contri</th>
                        <th scope="col">HDMF Empyr. Contri</th>
                        <th scope="col">SSS</th>
                        <th scope="col">PHIC</th>
                        <th scope="col">HDMF</th>
                        <th scope="col">SSS Loan</th>
                        <th scope="col">HDMF Loan</th>
                        <th scope="col">MP2</th>
                        <th scope="col">W/Holding Tax</th>
                        <th scope="col">Allowance</th>
                    </tr>
                </thead>


                <tbody>
                    <?php
                    include ('./components/connection/conn.php');

                    $stmt = $conn->prepare("SELECT EmployeeID+0,(CASE WHEN Middlename = '' OR Middlename = 'N/A' or Middlename = 'NA' Then \n
            (CASE When ExtensionName = '' or ExtensionName = 'N/A' or ExtensionName = 'NA' THEN \n
            CONCAT(`LastName`,', ',`FirstName`)  ELSE CONCAT(`LastName`,', ',`FirstName`,' ',`ExtensionName`)END) \n
            ELSE (CASE When ExtensionName = '' or ExtensionName = 'N/A' or ExtensionName = 'NA' THEN \n
            CONCAT(`LastName`,', ',`FirstName`,' ',SUBSTRING(`MiddleName`,1,1),'.') \n
            ELSE CONCAT(`LastName`,', ',`FirstName`,' ',`ExtensionName`,' ',SUBSTRING(`MiddleName`,1,1),'.')END) END) as `Name`, \n
            (CASE WHEN HourperDay+0 = 0  then 0 else Hourperday+0 END),(CASE WHEN Barangay = '' then CONCAT(`Town`,', ',`Province`) else CONCAT(Barangay,', ',Town,', ',Province) END) as `Address`, \n
            DateofBirth,Project,Department,Gender,Position,VaccinationStatus,Bonus,BonusAmount,ThirteenMonth,ThirteenAmount,Package, \n
            Insurance,BeneficiaryName,Relationship,BeneficiaryBirthday,DateEmployed,CivilStatus,ContactNumber, \n
            SSSno,Philno,HDMFno,SSScontribemp,Philcontribemp,HDMFcontribemp,SSS,PhilHealth,PagIbig,SSSLoan,PagIbigLoan,MP2,WholdingTax,Allowance \n
            FROM tblemployee ORDER BY LastName Desc, FirstName Asc");
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    foreach ($result as $rows) {
                        $no = $rows[0];
                        $fullName = $rows[1];
                        $employeeRate = $rows[2];
                        $address = $rows[3];
                        $dateofBirth = $rows[4];
                        $projectName = $rows[5];
                        $department = $rows[6];
                        $gender = $rows[7];
                        $position = $rows[8];
                        $vaccinationStatus = $rows[9];
                        $bonus = $rows[10];
                        $bonusAmount = $rows[11];
                        $thirteenMonth = $rows[12];
                        $thirteenMonthAmount = $rows[13];
                        $package = $rows[14];
                        $insurance = $rows[15];
                        $beneficiaryName = $rows[16];
                        $relationship = $rows[17];
                        $beneficiaryBirthday = $rows[18];
                        $dateEmployed = $rows[19];
                        $civilStatus = $rows[20];
                        $contactNumber = $rows[21];
                        $sssNo = $rows[22];
                        $phicNo = $rows[23];
                        $hdmfNo = $rows[24];
                        $sssEContri = $rows[25];
                        $hdmfEContri = $rows[26];
                        $sss = $rows[27];
                        $phic = $rows[28];
                        $hdmf = $rows[29];
                        $sssLoan = $rows[30];
                        $hdmfLoan = $rows[31];
                        $mp2 = $rows[32];
                        $wHoldingTax = $rows[33];
                        $allowance = $rows[34];

                        ?>

                        <tr>
                            <td>
                                <a class="btn btn-danger btn-sm"
                                    href="./employee-remove-auth.php?n=<?php echo $no?>">&#10006;</a>
                                <a class="btn btn-secondary btn-sm"
                                    href="./employee-update.php?n=<?php echo $no ?>">&#128393;</a>
                            </td>
                            <td id="employeeID-<?php echo $no ?>"><?php echo $no ?></td>
                            <td id="fullName-<?php echo $no ?>"><?php echo $fullName ?></td>
                            <td id="employeeRate-<?php echo $no ?>"><?php echo $employeeRate ?></td>
                            <td id="address-<?php echo $no ?>"><?php echo $address ?></td>
                            <td id="dateofBirth-<?php echo $no ?>"><?php echo $dateofBirth ?></td>
                            <td id="projectName-<?php echo $no ?>"><?php echo $projectName ?></td>
                            <td id="department-<?php echo $no ?>"><?php echo $department ?></td>
                            <td id="gender-<?php echo $no ?>"><?php echo $gender ?></td>
                            <td id="position-<?php echo $no ?>"><?php echo $position ?></td>
                            <td id="vaccinationStatus-<?php echo $no ?>"><?php echo $vaccinationStatus ?>
                            </td>
                            <td id="bonus-<?php echo $no ?>"><?php echo $bonus ?></td>
                            <td id="bonusAmount-<?php echo $no ?>"><?php echo $bonusAmount ?></td>
                            <td id="thirteenMonth-<?php echo $no ?>"><?php echo $thirteenMonth ?></td>
                            <td id="thirteenMonthAmount-<?php echo $no ?>">
                                <?php echo $thirteenMonthAmount ?>
                            </td>
                            <td id="package-<?php echo $no ?>"><?php echo $package ?></td>
                            <td id="insurance-<?php echo $no ?>"><?php echo $insurance ?></td>
                            <td id="beneficiaryName-<?php echo $no ?>"><?php echo $beneficiaryName ?></td>
                            <td id="relationship-<?php echo $no ?>"><?php echo $relationship ?></td>
                            <td id="beneficiaryBirthday-<?php echo $no ?>">
                                <?php echo $beneficiaryBirthday ?>
                            </td>
                            <td id="dateEmployed-<?php echo $no ?>"><?php echo $dateEmployed ?></td>
                            <td id="civilStatus-<?php echo $no ?>"><?php echo $civilStatus ?></td>
                            <td id="contactNumber-<?php echo $no ?>"><?php echo $contactNumber ?></td>
                            <td id="sssNo-<?php echo $no ?>"><?php echo $sssNo ?></td>
                            <td id="phicNo-<?php echo $no ?>"><?php echo $phicNo ?></td>
                            <td id="hdmfNo-<?php echo $no ?>"><?php echo $hdmfNo ?></td>
                            <td id="sssEContri-<?php echo $no ?>"><?php echo $sssEContri ?></td>
                            <td id="hdmfEContri-<?php echo $no ?>"><?php echo $hdmfEContri ?></td>
                            <td id="sss-<?php echo $no ?>"><?php echo $sss ?></td>
                            <td id="phic-<?php echo $no ?>"><?php echo $phic ?></td>
                            <td id="hdmf-<?php echo $no ?>"><?php echo $hdmf ?></td>
                            <td id="sssLoan-<?php echo $no ?>"><?php echo $sssLoan ?></td>
                            <td id="hdmfLoan-<?php echo $no ?>"><?php echo $hdmfLoan ?></td>
                            <td id="mp2-<?php echo $no ?>"><?php echo $mp2 ?></td>
                            <td id="wHoldingTax-<?php echo $no ?>"><?php echo $wHoldingTax ?></td>
                            <td id="allowance-<?php echo $no ?>"><?php echo $allowance ?></td>
                        </tr>

                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php
include ('./components/footer.php');
?>