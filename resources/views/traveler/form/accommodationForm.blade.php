<h3>Please chose your accommodation preference as you are eligible for (5-night)
    Eligible stay (5-nigh)
</h3>
<div class="row">
    <div class="col-md-4 mb-3">
        <label for="validationTooltip01"> Check-in date</label>
        <input type="text" name="check_in_date" class="form-control" id="check_in_date"
            placeholder="First name" value="">
        <div class="invalid-feedback"> Please write Check-in date.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationTooltip02"> Check-out date </label>
        <input type="text" name="check_out_date" class="form-control" id="check_out_date"
            placeholder="Last name" value="">
        <div class="invalid-feedback"> Please write Check-out date.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationTooltipUsername"> Rom type </label>
        <div class="input-group">
            <select type="text" name="rom_type" class="form-control" required>
                <option>Select</option>
                <option value="king_bed">king bed </option>
                <option value="twin_bed">twin bed</option>
            </select>
            <div class="invalid-feedback"> Please choose Rom type.</div>
            <div class="valid-feedback"> {{ $success_check }} </div>
        </div>
    </div>

</div>

<hr />
<h3> Extra night </h3>
<div class="row">
    <div class="col-md-4 mb-3">
        <label for="validationTooltip01"> Check-in date</label>
        <input type="text" name="extra_check_in_date" class="form-control" id="extra_check_in_date"
            placeholder="First name" value="">
        <div class="invalid-feedback"> Please write Check-in date.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationTooltip02"> Check-out date </label>
        <input type="text" name="extra_check_out_date" class="form-control" id="extra_check_out_date"
            placeholder="Check-out date" value="">
        <div class="invalid-feedback"> Please write Check-out date.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="validationTooltipUsername"> Rom type </label>
        <div class="input-group">
            <select type="text" name="extra_rom_type" class="form-control" required>
                <option>Select</option>
                <option value="king_bed">king bed </option>
                <option value="twin_bed">twin bed</option>
            </select>
            <div class="invalid-feedback"> Please choose Rom type.</div>
            <div class="valid-feedback"> {{ $success_check }} </div>
        </div>
    </div>

</div>
