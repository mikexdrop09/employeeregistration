<?php
include ('./components/header.php');
include ('./components/connection/conn.php');
$no = $_GET['n'];
?>

<div class="container">

    <form action="./endpoint/update-employee.php" method="POST">

        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel"
            data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
            </ol>

            <div class="carousel-inner">
                <?php

                $stmt = $conn->prepare("SELECT UCASE(`LastName`),UCASE(`FirstName`),UCASE(`MiddleName`),UCASE(`ExtensionName`),ContactNumber,Gender,CivilStatus,DateofBirth,VaccinationStatus,UCASE(`Barangay`),UCASE(`Town`),UCASE(`Province`),UCASE(`Department`), \n
                UCASE(`Project`),(HourperDay+0),DateEmployed,Package,Bonus,BonusAmount,ThirteenMonth,ThirteenAmount,Insurance,UCASE(`BeneficiaryName`),UCASE(`Relationship`),BeneficiaryBirthday,Allowance, \n
                SSS,SSScontribEmp,SSSNo,Philhealth,PhilContribemp,Philno,PagIbig,HDMFcontribemp,HDMFno,MP2,SSSLoan,PagIbigLoan,WholdingTax,UCASE(`Position`),`employeeID` FROM tblemployee WHERE EmployeeID = :employee_id");
                $stmt->bindParam(":employee_id", $no, PDO::PARAM_STR);
                $stmt->execute();
                $result = $stmt->fetchAll();
                foreach ($result as $row) {

                    $lastName = $row[0];
                    $firstName = $row[1];
                    $middleName = $row[2];
                    $extensionName = $row[3];
                    $cpNumber = $row[4];
                    $gender = $row[5];
                    $civilStatus = $row[6];
                    $dateofBirth = $row[7];
                    $vaccinationStatus = $row[8];
                    $barangay = $row[9];
                    $town = $row[10];
                    $province = $row[11];
                    $department = $row[12];
                    $project = $row[13];
                    $rate = $row[14];
                    $dateEmployed = $row[15];
                    $packageStatus = $row[16];
                    $bonusStatus = $row[17];
                    $bonusAmount = $row[18];
                    $thirteenMonth = $row[19];
                    $thirteenMonthAmount = $row[20];
                    $insurance = $row[21];
                    $beneficiaryName = $row[22];
                    $relationship = $row[23];
                    $beneficiaryBirthday = $row[24];
                    $allowance = $row[25];
                    $sss = $row[26];
                    $sssContrib = $row[27];
                    $sssNo = $row[28];
                    $phic = $row[29];
                    $phicContrib = $row[30];
                    $phicNo = $row[31];
                    $hdmf = $row[32];
                    $hdmfContrib = $row[33];
                    $hdmfNo = $row[34];
                    $mp2 = $row[35];
                    $sssLoan = $row[36];
                    $hdmfLoan = $row[37];
                    $whTax = $row[38];
                    $position = $row[39];
                    $eiD = $row[40];
                    ?>
                    <div class="carousel-item active">
                        <div class="modal-dialog modal-md d-block">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>PERSONAL INFORMATION</h4>
                                </div>

                                <div class="modal-body">

                                    <input type="hidden" id="eID" name="eID" value="<?php echo $eiD ?>">
                                    <div class="form-group">
                                        <label for="lastName">Last Name:</label>
                                        <input type="text" class="form-control" id="lastName" name="last_name"
                                            value="<?php echo $lastName ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="firstName">First Name:</label>
                                        <input type="text" class="form-control" id="firstName" name="first_name"
                                            value="<?php echo $firstName ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="middleName">Middle Name:</label>
                                        <input type="text" class="form-control" id="middleName" name="middle_name"
                                            value="<?php echo $middleName ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="extensionName">Extension Name:</label>
                                        <input type="text" class="form-control" id="extensionName" name="extension_name"
                                            value="<?php echo $extensionName ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="contactNumber">CP Number:</label>
                                        <input type="text" class="form-control" id="contactNumber" name="contact_number"
                                            placeholder="+63 9__ ___ ____" data-slots="_" value="<?php echo $cpNumber ?>">
                                    </div>

                                    <div class="form-group">

                                        <label for="employeeGender">Gender:</label>
                                        <select class="form-control" id="employeeGender" name="employee_gender" required>
                                            <?php
                                            if ($gender == "MALE") {
                                                ?>
                                                <option value="Male" selected>Male</option>
                                                <option value="Female">Female</option>

                                            </select>
                                            <?php
                                            } else {
                                                ?>
                                            <option value="Male">Male</option>
                                            <option value="Female" selected>Female</option>

                                            <?php

                                            }
                                            ?>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="civilStatus">Civil Status:</label>
                                        <select class="form-control" id="civilStatus" name="civil_status" required>

                                            <?php if ($civilStatus == 'SINGLE') { ?>
                                                <option value="Single" selected>Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Widowed">Widowed</option>
                                            <?php } else if ($civilStatus == 'MARRIED') { ?>
                                                    <option value="Single">Single</option>
                                                    <option value="Married" selected>Married</option>
                                                    <option value="Widowed">Widowed</option>
                                            <?php } else if ($civilStatus == 'WIDOWED') { ?>
                                                        <option value="Single">Single</option>
                                                        <option value="Married">Married</option>
                                                        <option value="Widowed" selected>Widowed</option>
                                            <?php } else { ?>
                                                        <option value="Single">Single</option>
                                                        <option value="Married">Married</option>
                                                        <option value="Widowed">Widowed</option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="dateBirth">Date of Birth:</label>
                                        <input type="text" class="form-control" id="dateBirth" name="date_birth"
                                            placeholder="yyyy-mm-dd" data-slots="ymd" value="<?php echo $dateofBirth ?>"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="vaccinationStatus">Vaccination Status</label>
                                        <select class="form-control" id="vaccinationStatus" name="vaccination_status">
                                            <?php if ($vaccinationStatus == "NO VACCINATION") { ?>

                                                <option value="NO VACCINATION" selected>NO VACCINATION</option>
                                                <option value="PARTIALLY VACCINATED">PARTIALLY VACCINATED</option>
                                                <option value="FULLY VACCINATED">FULLY VACCINATED</option>

                                            <?php } else if ($vaccinationStatus == "PARTIALLY VACCINATED") { ?>

                                                    <option value="NO VACCINATION">NO VACCINATION</option>
                                                    <option value="PARTIALLY VACCINATED" selected>PARTIALLY VACCINATED</option>
                                                    <option value="FULLY VACCINATED">FULLY VACCINATED</option>

                                            <?php } else if ($vaccinationStatus == "FULLY VACCINATED") { ?>

                                                        <option value="NO VACCINATION">NO VACCINATION</option>
                                                        <option value="PARTIALLY VACCINATED">PARTIALLY VACCINATED</option>
                                                        <option value="FULLY VACCINATED" selected>FULLY VACCINATED</option>

                                            <?php } else { ?>

                                                        <option value="NO VACCINATION">NO VACCINATION</option>
                                                        <option value="PARTIALLY VACCINATED">PARTIALLY VACCINATED</option>
                                                        <option value="FULLY VACCINATED">FULLY VACCINATED</option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <br>
                    </div>
                    <div class="carousel-item">
                        <div class="modal-dialog modal-md d-block">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>PERSONAL INFORMATION</h4>
                                </div>

                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="barangay">Barangay:</label>
                                        <input type="text" class="form-control" id="barangay" name="baran_gay"
                                            value="<?php echo $barangay ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City/Municipality :</label>
                                        <input type="text" class="form-control" id="city" name="ci_ty"
                                            value="<?php echo $town ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="province">Province:</label>
                                        <input type="text" class="form-control" id="province" name="pro_vince"
                                            value="<?php echo $province ?>" required>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <br>
                    </div>

                    <div class="carousel-item">
                        <div class="modal-dialog modal-md d-block">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>OFFICE DETAILS</h4>
                                </div>

                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="department">Department:</label>
                                        <input type="text" class="form-control" id="department" name="depart_ment"
                                            value="<?php echo $department ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="projectName">Project Name:</label>
                                        <input type="text" class="form-control" id="projectName" name="project_name"
                                            value="<?php echo $project ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="employeePosition">Position:</label>
                                        <input type="text" class="form-control" id="employeePosition"
                                            name="employee_position" value="<?php echo $position ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="employeeRate">Rate:</label>
                                        <input type="text" class="form-control" id="employeeRate" name="employee_rate"
                                            value="<?php echo $rate ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="dateEmployed">Date Employed:</label>
                                        <input type="text" class="form-control" id="dateEmployed" name="date_employed"
                                            placeholder="yyyy-mm-dd" data-slots="ymd" value="<?php echo $dateEmployed ?>"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>


                    <div class="carousel-item">
                        <div class="modal-dialog modal-md d-block">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>CHRISTMAS INCENTIVES:</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="packageStatus">Package Status:</label>
                                        <select class="form-control" id="packageStatus" name="package_status">

                                            <?php if ($packageStatus == "With Package") { ?>
                                                <option value="With Package" selected>With Package</option>
                                                <option value="Without Package">Without Package</option>

                                            <?php } else if ($packageStatus == "Without Package") { ?>

                                                    <option value="With Package">With Package</option>
                                                    <option value="Without Package" selected>Without Package</option>

                                            <?php } else { ?>

                                                    <option value="With Package">With Package</option>
                                                    <option value="Without Package">Without Package</option>

                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">

                                            <div class="col-6">
                                                <label for="bonusStatus">Bonus Status:</label>
                                                <select class="form-control" id="bonusStatus" name="bonus_status">
                                                    <?php if ($bonusStatus == "With Bonus") { ?>

                                                        <option value="Without Bonus">Without Bonus</option>
                                                        <option value="With Bonus" selected>With Bonus</option>

                                                    <?php } else if ($bonusStatus == "Without Bonus") { ?>

                                                            <option value="Without Bonus" selected>Without Bonus</option>
                                                            <option value="With Bonus">With Bonus</option>

                                                    <?php } else { ?>

                                                            <option value="Without Bonus">Without Bonus</option>
                                                            <option value="With Bonus">With Bonus</option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="bonusAmount">Bonus Amount:</label>
                                                <input type="text" class="form-control" id="bonusAmount" name="bonus_amount"
                                                    value="<?php echo $bonusAmount ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="thirteenStatus">13th Month Status:</label>
                                                <select class="form-control" id="thirteenStatus" name="thirteen_status">
                                                    <?php if ($thirteenMonth == "With 13th Month Pay") { ?>

                                                        <option value="With 13th Month Pay" selected>With 13th Month Pay
                                                        </option>
                                                        <option value="Without 13th Month Pay">Without 13th Month Pay</option>

                                                    <?php } else if ($thirteenMonth == "Without 13th Month Pay") { ?>

                                                            <option value="With 13th Month Pay">With 13th Month Pay</option>
                                                            <option value="Without 13th Month Pay" selected>Without 13th Month Pay
                                                            </option>

                                                    <?php } else { ?>

                                                            <option value="With 13th Month Pay">With 13th Month Pay</option>
                                                            <option value="Without 13th Month Pay">Without 13th Month Pay</option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="thirteenAmount">13th Month Pay Amount</label>
                                                <input type="text" class="form-control" id="thirteenAmount"
                                                    name="thirteen_amount" value="<?php echo $thirteenMonthAmount ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>


                    <div class="carousel-item">
                        <div class="modal-dialog modal-md d=block">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>INSURANCE INFORMATION</h4>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="insuranceStatus">Insurance Status:</label>
                                        <select class="form-control" id="insuranceStatus" name="insurance_status">
                                            <?php if ($insurance == "With Insurance") { ?>

                                                <option value="With Insurance" selected>With Insurance</option>
                                                <option value="Without Insurance">Without Insurance</option>

                                            <?php } else if ($insurance == "Without Insurance") { ?>

                                                    <option value="With Insurance">With Insurance</option>
                                                    <option value="Without Insurance" selected>Without Insurance</option>

                                            <?php } else { ?>

                                                    <option value="With Insurance">With Insurance</option>
                                                    <option value="Without Insurance">Without Insurance</option>

                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="beneficiaryName">Beneficiary Name:</label>
                                        <input type="text" class="form-control" id="beneficiaryName" name="beneficiary_name"
                                            value="<?php echo $beneficiaryName ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="relationship">Relationship:</label>
                                        <input type="text" class="form-control" id="relationship" name="rela_tioship"
                                            value="<?php echo $relationship ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="beneficiaryBirth">Beneficiary Birthday:</label>
                                        <input type="text" class="form-control" id="beneficiaryBirth"
                                            name="beneficiary_birth" placeholder="yyyy-mm-dd" data-slots="ymd"
                                            value="<?php echo $beneficiaryBirthday ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="carousel-item">
                        <div class="modal-dialog modal-md d-block">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>ALLOWANCE & DEDUCTION</h4>
                                </div>

                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="allowance">Allowance:</label>
                                                    <input type="text" class="form-control" id="allowance" name="allo_wance"
                                                        value="<?php echo $allowance ?>">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-2"></div>
                                                    <div class="col-3 text-center">Employee</div>
                                                    <div class="col-3 text-center">Employer</div>
                                                    <div class="col-4 text-center">Number</div>
                                                </div>
                                            </div>

                                            <div class="col-12 py-2">
                                                <div class="row">
                                                    <div class="col-2 text-right">SSS:</div>
                                                    <div class="col-3">
                                                        <input class="form-control" type="text" id="sssEmployee"
                                                            name="sss_employee" value="<?php echo $sss ?>">
                                                    </div>
                                                    <div class="col-3">
                                                        <input class="form-control" type="text" id="sssEmployer"
                                                            name="sss_employer" value="<?php echo $sssContrib ?>">
                                                    </div>
                                                    <div class="col-4">
                                                        <input class="form-control" type="text" id="sssID" name="sss_id"
                                                            value="<?php echo $sssNo ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 py-2">
                                                <div class="row">
                                                    <div class="col-2 text-right">
                                                        PHIC:
                                                    </div>
                                                    <div class="col-3">
                                                        <input class="form-control" type="text" id="phicEmployee"
                                                            name="phic_employee" value="<?php echo $phic ?>">
                                                    </div>
                                                    <div class="col-3">
                                                        <input class="form-control" type="text" id="phicEmployer"
                                                            name="phic_employer" value="<?php echo $phicContrib ?>">
                                                    </div>
                                                    <div class="col-4">
                                                        <input class="form-control" type="text" id="phicID" name="phic_id"
                                                            value="<?php echo $phicNo ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 py-2">
                                                <div class="row">
                                                    <div class="col-2 text-right">
                                                        HDMF:
                                                    </div>
                                                    <div class="col-3">
                                                        <input class="form-control" type="text" id="hdmfEmployee"
                                                            name="hdmf_employee" value="<?php echo $hdmf ?>">
                                                    </div>
                                                    <div class="col-3">
                                                        <input class="form-control" type="text" id="hdmfEmployer"
                                                            name="hdmf_employer" value="<?php echo $hdmfContrib ?>">
                                                    </div>
                                                    <div class="col-4">
                                                        <input class="form-control" type="text" id="hdmfID" name="hdmf_id"
                                                            value="<?php echo $hdmfNo ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 py-3">
                                                <div class="row text-center">
                                                    <div class="col-3">
                                                        MP2
                                                    </div>
                                                    <div class="col-3">
                                                        SSS Loan
                                                    </div>
                                                    <div class="col-3">
                                                        HDMF Loan
                                                    </div>
                                                    <div class="col-3">
                                                        W/Holding Tax
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 py-1">
                                                <div class="row">
                                                    <div class="col-3 text-right h6">
                                                        <input class="form-control" type="text" id="mp2" name="mp_2"
                                                            value="<?php echo $mp2 ?>">
                                                    </div>
                                                    <div class="col-3">
                                                        <input class="form-control" type="text" id="sssLoan" name="sss_loan"
                                                            value="<?php echo $sssLoan ?>">
                                                    </div>
                                                    <div class="col-3">
                                                        <input class="form-control" type="text" id="hdmfLoan"
                                                            name="hdmf_loan" value="<?php echo $hdmfLoan ?>">
                                                    </div>
                                                    <div class="col-3">
                                                        <input class="form-control" type="text" id="wHoldingTax"
                                                            name="wholding_tax" value="<?php echo $whTax ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 py-3 px-4">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block"
                                                    name="updateemployee">Update</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <?php
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </form>

</div>
<?php
include ('./components/footer.php');
?>