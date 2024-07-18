<?php 
include ('../components/connection/conn.php');

if($_SERVER['REQUEST_METHOD'] ==='POST') {
    if(isset($_POST['updateemployee'])) {
        $department = strtoupper($_POST['depart_ment']);
        $lastName = strtoupper($_POST['last_name']);
        $firstName = strtoupper($_POST['first_name']);
        $middleName = strtoupper($_POST['middle_name']);
        $extensionName = strtoupper($_POST['extension_name']);
        $bonusStatus = strtoupper($_POST['bonus_status']);
        $thirteenStatus = strtoupper($_POST['thirteen_status']);
        $insuranceStatus = strtoupper($_POST['insurance_status']);
        $packageStatus = strtoupper($_POST['package_status']);
        $bonusAmount = strtoupper($_POST['bonus_amount']);
        $thirteenAmount = strtoupper($_POST['thirteen_amount']);
        $projectName = strtoupper($_POST['project_name']);
        $employeePosition = strtoupper($_POST['employee_position']);
        $dateBirth = strtoupper($_POST['date_birth']);
        $beneficiaryName = strtoupper($_POST['beneficiary_name']);
        $relationship = strtoupper($_POST['rela_tioship']);
        $beneficiaryBirth = strtoupper($_POST['beneficiary_birth']);
        $barangay = strtoupper($_POST['baran_gay']);
        $city = strtoupper($_POST['ci_ty']);
        $province = strtoupper($_POST['pro_vince']);
        $vaccinationStatus = strtoupper($_POST['vaccination_status']);
        $employeeGender = strtoupper($_POST['employee_gender']);
        $civilStatus = strtoupper($_POST['civil_status']);
        $employeeRate = strtoupper($_POST['employee_rate']);
        $hourlyRate = (($_POST['employee_rate']) / 8);
        $dateEmployed = strtoupper($_POST['date_employed']);
        $contactNumber = strtoupper($_POST['contact_number']);
        $sssEmployee = strtoupper($_POST['sss_employee']);
        $phicEmployee = strtoupper($_POST['phic_employee']);
        $hdmfEmployee = strtoupper($_POST['hdmf_employee']);
        $sssLoan = strtoupper($_POST['sss_loan']);
        $hdmfLoan = strtoupper($_POST['hdmf_loan']);
        $wholdingTax = strtoupper($_POST['wholding_tax']);
        $sssID = strtoupper($_POST['sss_id']);
        $phicID = strtoupper($_POST['phic_id']);
        $hdmfID = strtoupper($_POST['hdmf_id']);
        $MP2 = strtoupper($_POST['mp_2']);
        $allowance = strtoupper($_POST['allo_wance']);
        $sssEmployer = strtoupper($_POST['sss_employer']);
        $phicEmployer = strtoupper($_POST['phic_employer']);
        $hdmfEmployer = strtoupper($_POST['hdmf_employer']);
        $eID = strtoupper($_POST['eID']);
    }

    try {
        $stmt = $conn->prepare("UPDATE tblemployee SET Department=:department, \n 
            LastName=:lastname, \n 
            FirstName=:firstname, \n 
            MiddleName=:middlename, \n 
            ExtensionName=:extensionname, \n
            Bonus=:bonus, \n 
            ThirteenMonth=:thirteenmonth, \n
            Insurance=:insurance, \n
            Package=:package, \n
            BonusAmount=:bonusamount, \n
            ThirteenAmount=:thirteenamount, \n 
            Project=:project, \n
            Position=:position, \n
            DateofBirth=:dateofbirth, \n
            BeneficiaryName=:beneficiaryname, \n
            Relationship=:relationship, \n
            BeneficiaryBirthday=:beneficiaryname, \n
            Barangay=:barangay, \n
            Town=:town, \n
            Province=:province, \n
            VaccinationStatus=:vaccinationstatus, \n
            Gender=:gender, \n
            CivilStatus=:civilstatus, \n
            HourperDay=:hourperday, \n
            RateperHour=:rateperhour, \n
            DateEmployed=:dateemployed, \n
            ContactNumber=:contactnumber, \n
            SSS=:sss, \n
            Philhealth=:philhealth, \n
            PagIbig=:pagibig, \n
            SSSLoan=:sssloan, \n
            PagIbigLoan=:pagibigloan, \n
            WHoldingTax=:wholdingtax, \n
            MP2=:mp2, \n
            Allowance=:allowance, \n
            SSSno=:sssid, \n
            Philno=:philid, \n
            HDMFno=:hdmfid, \n
            SSScontribemp=:ssscontriemp, \n
            Philcontribemp=:philcontriemp, \n
            HDMFcontribemp=:hdmfcontriemp \n
            WHERE employeeID=:idno");

        $stmt->bindParam(":department", $department, PDO::PARAM_STR);
        $stmt->bindParam(":lastname", $lastName, PDO::PARAM_STR);
        $stmt->bindParam(":firstname", $firstName, PDO::PARAM_STR);
        $stmt->bindParam(":middlename", $middleName, PDO::PARAM_STR);
        $stmt->bindParam(":extensionname", $extensionName, PDO::PARAM_STR);
        $stmt->bindParam(":bonus", $bonusStatus, PDO::PARAM_STR);
        $stmt->bindParam(":thirteenmonth", $thirteenStatus, PDO::PARAM_STR);
        $stmt->bindParam(":insurance", $insuranceStatus, PDO::PARAM_STR);
        $stmt->bindParam(":package", $packageStatus, PDO::PARAM_STR);
        $stmt->bindParam(":bonusamount", $bonusAmount, PDO::PARAM_STR);
        $stmt->bindParam(":thirteenamount", $thirteenAmount, PDO::PARAM_STR);
        $stmt->bindParam(":project", $projectName, PDO::PARAM_STR);
        $stmt->bindParam(":position", $employeePosition, PDO::PARAM_STR);
        $stmt->bindParam(":dateofbirth", $dateBirth, PDO::PARAM_STR);
        $stmt->bindParam(":beneficiaryname", $beneficiaryName, PDO::PARAM_STR);
        $stmt->bindParam(":relationship", $relationship, PDO::PARAM_STR);
        $stmt->bindParam(":beneficiarybirthday", $beneficiaryBirth, PDO::PARAM_STR);
        $stmt->bindParam(":barangay", $barangay, PDO::PARAM_STR);
        $stmt->bindParam(":town", $city, PDO::PARAM_STR);
        $stmt->bindParam(":province", $province, PDO::PARAM_STR);
        $stmt->bindParam(":vaccinationstatus", $vaccinationStatus, PDO::PARAM_STR);
        $stmt->bindParam(":gender", $employeeGender, PDO::PARAM_STR);
        $stmt->bindParam(":civilstatus", $civilStatus, PDO::PARAM_STR);
        $stmt->bindParam(":hourperday", $employeeRate, PDO::PARAM_STR);
        $stmt->bindParam(":rateperhour", $hourlyRate, PDO::PARAM_STR);
        $stmt->bindParam(":dateemployed", $dateEmployed, PDO::PARAM_STR);
        $stmt->bindParam(":contactnumber", $contactNumber, PDO::PARAM_STR);
        $stmt->bindParam(":sss", $sssEmployee, PDO::PARAM_STR);
        $stmt->bindParam(":philhealth", $phicEmployee, PDO::PARAM_STR);
        $stmt->bindParam(":pagibig", $hdmfEmployee, PDO::PARAM_STR);
        $stmt->bindParam(":sssloan", $sssLoan, PDO::PARAM_STR);
        $stmt->bindParam(":pagibigloan", $hdmfLoan, PDO::PARAM_STR);
        $stmt->bindParam(":wholdingtax", $wholdingTax, PDO::PARAM_STR);
        $stmt->bindParam(":mp2", $MP2, PDO::PARAM_STR);
        $stmt->bindParam(":allowance", $allowance, PDO::PARAM_STR);
        $stmt->bindParam(":sssid", $sssID, PDO::PARAM_STR);
        $stmt->bindParam(":philid", $phicID, PDO::PARAM_STR);
        $stmt->bindParam(":hdmfid", $hdmfID, PDO::PARAM_STR);
        $stmt->bindParam(":ssscontriemp", $sssEmployer, PDO::PARAM_STR);
        $stmt->bindParam(":philcontriemp", $phicEmployer, PDO::PARAM_STR);
        $stmt->bindParam(":hdmfcontriemp", $hdmfEmployer, PDO::PARAM_STR);
        $stmt->bindParam(":idno", $eID, PDO::PARAM_STR);
        $stmt->execute();

        header("Location: http://localhost/dragontwelveregistration/employee-record.php");
        exit();


    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
}
?>