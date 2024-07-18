<div class="modal-dialog modal-md d-block">
    <div class="modal-content">
        <div class="modal-header">
            <h4>PERSONAL INFORMATION</h4>
        </div>

        <div class="modal-body">

            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" class="form-control" id="lastName" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" class="form-control" id="firstName" name="first_name" required>
            </div>

            <div class="form-group">
                <label for="middleName">Middle Name:</label>
                <input type="text" class="form-control" id="middleName" name="middle_name">
            </div>

            <div class="form-group">
                <label for="extensionName">Extension Name:</label>
                <input type="text" class="form-control" id="extensionName" name="extension_name">
            </div>

            <div class="form-group">
                <label for="contactNumber">CP Number:</label>
                <input type="text" class="form-control" id="contactNumber" name="contact_number"
                    placeholder="+63 9__ ___ ____" data-slots="_">
            </div>

            <div class="form-group">
                <label for="employeeGender">Gender:</label>
                <select class="form-control" id="employeeGender" name="employee_gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="civilStatus">Civil Status:</label>
                <select class="form-control" id="civilStatus" name="civil_status" required>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widowed">Widowed</option>
                </select>
            </div>

            <div class="form-group">
                <label for="dateBirth">Date of Birth:</label>
                <input type="text" class="form-control" id="dateBirth" name="date_birth" placeholder="yyyy-mm-dd"
                    data-slots="ymd" required>
            </div>

            <div class="form-group">
                <label for="vaccinationStatus">Vaccination Status</label>
                <select class="form-control" id="vaccinationStatus" name="vaccination_status">
                    <option value="NO VACCINATION">NO VACCINATION</option>
                    <option value="PARTIALLY VACCINATED">PARTIALLY VACCINATED</option>
                    <option value="FULLY VACCINATED">FULLY VACCINATED</option>
                </select>
            </div>
        </div>
    </div>

</div>