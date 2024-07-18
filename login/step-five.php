<div class="modal-dialog modal-md d-block">
    <div class="modal-content">
        <div class="modal-header">
            <h4>INSURANCE INFORMATION</h4>
        </div>

        <div class="modal-body">
            <div class="form-group">
                <label for="insuranceStatus">Insurance Status:</label>
                <select class="form-control" id="insuranceStatus" name="insurance_status">
                    <option value="With Insurance">With Insurance</option>
                    <option value="Without Insurance">Without Insurance</option>
                </select>
            </div>

            <div class="form-group">
                <label for="beneficiaryName">Beneficiary Name:</label>
                <input type="text" class="form-control" id="beneficiaryName" name="beneficiary_name">
            </div>

            <div class="form-group">
                <label for="relationship">Relationship:</label>
                <input type="text" class="form-control" id="relationship" name="rela_tioship">
            </div>

            <div class="form-group">
                <label for="beneficiaryBirth">Beneficiary Birthday:</label>
                <input type="text" class="form-control" id="beneficiaryBirth" name="beneficiary_birth"
                    placeholder="yyyy-mm-dd" data-slots="ymd" required>
            </div>
        </div>
    </div>
</div>