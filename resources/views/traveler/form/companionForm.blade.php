<h3>Companion Information</h3>
<div class="row">
    <div class="col-md-4 mb-3">
        <label for="validationTooltip01">First name</label>
        <input type="text" name="comp_first_name" class="form-control comp_input" id="comp_validationTooltip01"
            placeholder="First name" value="Mark" >
        <div class="invalid-feedback"> Please write your First name.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationTooltip02">Last name</label>
        <input type="text" name="comp_last_name" class="form-control comp_input" id="comp_validationTooltip02"
            placeholder="Last name" value="Otto" >
        <div class="invalid-feedback"> Please write your Last name.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationTooltipUsername"> Date of birth </label>
        <div class="input-group">
            <input type="text" id="comp_date_of_birth" name="comp_date_of_birth" class="form-control comp_input datepicker"
                id="validationTooltipUsername" placeholder=" "
                aria-describedby="validationTooltipUsernamePrepend" >
            <div class="invalid-feedback"> Please choose Date of birth .</div>
            <div class="valid-feedback"> {{ $success_check }} </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-4 mb-3">
        <label for="validationTooltip03"> Gender </label>
        <select type="text" name="comp_date_of_birth" class="form-control comp_input"
            id="validationTooltipUsername" >
            <option value="">select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <div class="invalid-feedback"> Please choose your Gender.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
    <div class="col-md-3 mb-3">
        <label for="country_selector"> Place of birth </label>
        <input type="text" id="comp_country_selector" class="form-control comp_input" name="comp_place_of_birth"
            class="form-control comp_input" >
        <div class="invalid-feedback"> Please select yor Place of birt .</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
    <div class="col-md-3 mb-3">
        <label for="country_of_residency"> Country of Residency </label>
        <input type="text" id="comp_country_of_residency" name="comp_country_of_residency"
            class="form-control comp_input" >

        <div class="invalid-feedback"> Please select your Country of Residency .</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3 mb-3">
        <label for="validationTooltip03"> Profession (optional)</label>
        <input type="text" name="comp_profession" class="form-control" placeholder="Profession">
        <div class="invalid-feedback"> Please write Profession.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
    <div class="col-md-3 mb-3">
        <label for="validationTooltip04"> Organization (optional)</label>
        <input type="text" name="comp_organization" class="form-control" id="validationTooltip04"
            placeholder="Organization">
        <div class="invalid-feedback"> Please write Organization..</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

</div>
<hr />
<h3>  Passport information for Companion: </h3>
<br />
<div class="row">
    <div class="col-md-6 mb-3">
        <label for="validationTooltip03">Passport No</label>
        <input type="text" name="comp_passport_no" minlength="6" class="form-control comp_input"
            id="validationTooltip03" placeholder="123456" >

        <div class="invalid-feedback"> Please write Passport No min length : 6 .</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
    <div class="col-md-3 mb-3">
        <label for="validationTooltip04"> Issue date </label>
        <input type="text" id="comp_issue_date" name="comp_issue_date" class="form-control comp_input datepicker_old"
            id="validationTooltip04" placeholder="State" >
        <div class="invalid-feedback"> Please write Issue date for Passport.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
    <div class="col-md-3 mb-3">
        <label for="validationTooltip03">Expiry date</label>
        <input type="text" id="comp_expiry_date" name="comp_expiry_date" class="form-control comp_input datepicker_old"
            id="validationTooltip03" placeholder="" >

        <div class="invalid-feedback">Please write Expiry date for Passport.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
</div>

<div class="row">

    <div class="col-md-3 mb-3">
        <label for="place_of_issue"> Place of issue </label>
        <input type="text" id="comp_place_of_issue" name="comp_place_of_issue" class="form-control comp_input"
            placeholder="State" >
        <div class="invalid-feedback"> Please write Place of issue.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>


</div>

<hr />
<h3>Another information for Companion  : </h3>
<div class="row">

    <div class="col-md-4 mb-3">
        <label for="validationTooltip04"> Arrival date </label>
        <input type="text" id="comp_arrival_date" name="comp_arrival_date" class="form-control comp_input datepicker_new"
            placeholder=" " >
        <div class="invalid-feedback"> Please choose Arrival date.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>


    <div class="col-md-4 mb-3">
        <label for="validationTooltip04"> Visa duration </label>
        <input type="number" min="01" max="90" name="comp_visa_duration"
            class="form-control comp_input" id="validationTooltip04" placeholder=" " >
        <div class="invalid-feedback"> Please write Organization between 1 to 90 .</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationTooltip03"> Visa status </label>
        <select type="text" name="comp_visa_status" class="form-control comp_input" >
            <option>Select Visa status</option>
            <option value="multiple">Multiple </option>
            <option value="single">Single</option>
        </select>
        <div class="invalid-feedback"> Please choose Visa status .</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
</div>



Please upload require documents for VISA requirement

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="validationTooltip03"> passport picture </label>
        <input type="file" name="comp_passport_picture" class="form-control comp_input"
            id="validationTooltip03" placeholder=" " >
        <div class="invalid-feedback"> Please choosepassport picture.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

    <div class="col-md-6 mb-3">
        <label for="validationTooltip03">personal picture </label>
        <input type="file" name="comp_personal_picture" class="form-control comp_input"
            id="validationTooltip03" placeholder=" " >
        <div class="invalid-feedback"> Please personal picture .</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
</div>