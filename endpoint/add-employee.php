<?php
include ("../components/connection/conn.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['addemployee'])) {
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

        try {
            $stmt = $conn->prepare("INSERT INTO tblemployee (Department, \n 
            LastName, \n 
            FirstName, \n 
            MiddleName, \n 
            ExtensionName, \n
            Bonus, \n 
            ThirteenMonth, \n
            Insurance,Package, \n
            BonusAmount, \n
            ThirteenAmount, \n 
            Project,Position, \n
            DateofBirth, \n
            BeneficiaryName, \n
            Relationship, \n
            BeneficiaryBirthday, \n
            Barangay, \n
            Town, \n
            Province, \n
            VaccinationStatus, \n
            Gender, \n
            CivilStatus, \n
            HourperDay, \n
            RateperHour, \n
            DateEmployed, \n
            ContactNumber, \n
            SSS, \n
            Philhealth, \n
            PagIbig, \n
            SSSLoan, \n
            PagIbigLoan, \n
            WHoldingTax, \n
            MP2, \n
            Allowance, \n
            SSSno, \n
            Philno, \n
            HDMFno, \n
            SSScontribemp, \n
            Philcontribemp, \n
            HDMFcontribemp) \n
            VALUES \n
            (:department,\n
            :lastname,\n
            :firstname, \n
            :middlename, \n
            :extensionname, \n
            :bonus, \n
            :thirteenmonth, \n
            :insurance, \n
            :package, \n
            :bonusamount, \n
            :thirteenamount, \n
            :project, \n
            :position, \n
            :dateofbirth, \n
            :beneficiaryname, \n
            :relationship, \n
            :beneficiarybirthday, \n
            :barangay, \n
            :town, \n
            :province, \n
            :vaccinationstatus, \n
            :gender, \n
            :civilstatus, \n
            :hourperday, \n
            :rateperhour, \n
            :dateemployed, \n
            :contactnumber, \n
            :sss, \n
            :philhealth, \n
            :pagibig, \n
            :sssloan, \n
            :pagibigloan, \n
            :wholdingtax, \n
            :mp2, \n
            :allowance, \n
            :sssid, \n
            :philid, \n
            :hdmfid, \n
            :ssscontriemp, \n
            :philcontriemp, \n
            :hdmfcontriemp)");
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

            $stmt->execute();

            header("Location: http://localhost/dragontwelveregistration/employee-record.php");
            exit();


        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }
}
?>