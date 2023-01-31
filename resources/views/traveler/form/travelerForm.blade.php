<h3>personal information : </h3>
<br />
<div class="row">
    <div class="col-md-4 mb-3">
        <label for="validationTooltip01">First name</label>
        <input type="text" name="first_name" pattern="[a-z]{1,20}" class="form-control" id="validationTooltip01"
            placeholder="First name" value="{{ $passport->first_name ?? '' }}" required>
        <div class="invalid-feedback"> Please write your First name.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

    <div class="col-md-4 mb-3">
        <label for="validationTooltip02">Last name</label>
        <input type="text" name="last_name" class="form-control" id="validationTooltip02" placeholder="Last name"
            value="{{ $passport->last_name ?? '' }}" required>
        <div class="invalid-feedback"> Please write your Last name.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

    <div class="col-md-4 mb-3">
        <label for="validationTooltipUsername"> Date of birth </label>
        <div class="input-group">
            <input type="text" id="date_of_birth" name="date_of_birth" value="{{ $passport->date_of_birth ?? '' }}"
                class="form-control datepicker_old" id="validationTooltipUsername" placeholder="Username"
                aria-describedby="validationTooltipUsernamePrepend" required>
            <div class="invalid-feedback"> Please choose Date of birth .</div>
            <div class="valid-feedback"> {{ $success_check }} </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-4 mb-3">
        <label for="validationTooltip03"> Gender </label>
        <select type="text" name="gender" class="form-control" id="validationTooltipUsername" required>
            <option value="">select</option>
            <option value="male" @if (isset($passport->gender) && $passport->gender == 'male') selected @endif>Male</option>
            <option value="female" @if (isset($passport->gender) && $passport->gender == 'female') selected @endif>Female</option>
        </select>
        <div class="invalid-feedback"> Please choose your Gender.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

    <div class="col-md-3 mb-3">
        <label for="country_selector"> Place of birth </label>
        <input type="text" id="country_selector" value="{{ $passport->country_selector ?? '' }}" class="form-control"
            name="place_of_birth" class="form-control" required>
        <div class="invalid-feedback"> Please select yor Place of birt .</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

    <div class="col-md-3 mb-3">
        <label for="country_of_residency"> Country of Residency </label>
        <input type="text" id="country_of_residency" value="{{ $passport->country_of_residency ?? '' }}"
            name="country_of_residency" class="form-control" required>
        <div class="invalid-feedback"> Please select your Country of Residency .</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

</div>
<div class="row">
    <div class="col-md-3 mb-3">
        <label for="validationTooltip03"> Profession (optional)</label>
        <input type="text" name="profession" value="{{ $passport->profession ?? '' }}" class="form-control"
            placeholder="Profession">
        <div class="invalid-feedback"> Please write Profession.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

    <div class="col-md-3 mb-3">
        <label for="validationTooltip04"> Organization (optional)</label>
        <input type="text" name="organization" value="{{ $passport->organization ?? '' }}" class="form-control"
            id="validationTooltip04" placeholder="Organization">
        <div class="invalid-feedback"> Please write Organization..</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

</div>
<hr />
<h3>Passport information : </h3>
<br />
<div class="row">
    <div class="col-md-6 mb-3">
        <label for="validationTooltip03">Passport No</label>
        <input type="text" name="passport_no" minlength="6" class="form-control" id="validationTooltip03"
            placeholder="123456" value="{{ $passport->passport_no ?? '' }}" required>

        <div class="invalid-feedback"> Please write Passport No min length : 6 .</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

    <div class="col-md-3 mb-3">
        <label for="validationTooltip04"> Issue date </label>
        <input type="text" id="issue_date" name="issue_date" class="form-control datepicker_old"
            id="validationTooltip04" placeholder="State" value="{{ $passport->issue_date ?? '' }}" required>
        <div class="invalid-feedback"> Please write Issue date for Passport.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

    <div class="col-md-3 mb-3">
        <label for="validationTooltip03">Expiry date</label>
        <input type="text" id="expiry_date" name="expiry_date" value="{{ $passport->expiry_date ?? '' }}"
            class="form-control datepicker_new" id="validationTooltip03" placeholder="" required>

        <div class="invalid-feedback">Please write Expiry date for Passport.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

</div>

<div class="row">
    <div class="col-md-3 mb-3">
        <label for="place_of_issue"> Place of issue </label>
        <input type="text" id="place_of_issue" value="{{ $passport->place_of_issue ?? '' }}"
            name="place_of_issue" class="form-control" placeholder="State" required>
        <div class="invalid-feedback"> Please write Place of issue.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
</div>

<hr />
<h3>Another information : </h3>
<div class="row">

    <div class="col-md-4 mb-3">
        <label for="validationTooltip04"> Arrival date </label>
        <input type="text" id="arrival_date" value="{{ $passport->arrival_date ?? '' }}" name="arrival_date"
            class="form-control datepicker_new" placeholder="" required>
        <div class="invalid-feedback"> Please choose Arrival date.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

    <div class="col-md-4 mb-3">
        <label for="validationTooltip04"> Visa duration </label>
        <input type="number" min="01" max="90" name="visa_duration" class="form-control"
            id="validationTooltip04" value="{{ $passport->visa_duration ?? '' }}" placeholder="" required>
        <div class="invalid-feedback"> Please write Organization between 1 to 90 .</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

    <div class="col-md-4 mb-3">
        <label for="validationTooltip03"> Visa status </label>
        <select type="text" name="visa_status" class="form-control" required>
            <option>Select Visa status</option>
            <option value="multiple" @if (isset($passport->visa_status) && $passport->visa_status == 'multiple') selected @endif>Multiple </option>
            <option value="single" @if (isset($passport->visa_status) && $passport->visa_status == 'single') selected @endif>Single</option>
        </select>
        <div class="invalid-feedback"> Please choose Visa status .</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

</div>
Please upload require documents for VISA requirements

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="validationTooltip03"> passport picture </label>
        <input type="file" name="passport_picture" class="form-control" id="validationTooltip03"
            placeholder="City" required>
        <div class="invalid-feedback"> Please choose Date of birth .</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

    <div class="col-md-6 mb-3">
        <label for="validationTooltip03">personal picture </label>
        <input type="file" name="personal_picture" class="form-control" id="validationTooltip03"
            placeholder="City" required>
        <div class="invalid-feedback"> Please choose Date of birth .</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

</div>
