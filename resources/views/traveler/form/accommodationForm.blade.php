<h3>Please chose your accommodation preference as you are eligible for ({{ env('FREE_NIGHT') }}-night)
    Eligible stay ({{ env('FREE_NIGHT') }}-nigh)
</h3>
<div class="row">
    <div class="col-md-4 mb-3">
        <label for="validationTooltip01"> Check-in date</label>
        <input type="text" name="check_in_date" class="form-control" id="check_in_date" placeholder=" "
            value="{{ $accommodation->check_in_date ?? '' }}">
        <div class="invalid-feedback"> Please write Check-in date.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

    <div class="col-md-4 mb-3">
        <label for="validationTooltip02"> Check-out date </label>
        <input type="text" name="check_out_date" class="form-control" id="check_out_date" placeholder="Last name"
            value="{{ $accommodation->check_out_date ?? '' }}">
        <div class="invalid-feedback"> Please write Check-out date.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

    <div class="col-md-4 mb-3">
        <label for="validationTooltipUsername"> Rom type </label>
        <div class="input-group">
            <select type="text" name="rom_type" class="form-control" required>
                <option>Select</option>
                <option value="king_bed" @if (isset($accommodation->rom_type) && $accommodation->rom_type == 'king_bed') selected @endif>king bed </option>
                <option value="twin_bed" @if (isset($accommodation->rom_type) && $accommodation->rom_type == 'twin_bed') selected @endif>twin bed</option>
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
        <input type="text" name="check_in_date_extra" class="form-control" id="check_in_date_extra" placeholder=" "
            value="{{ $accommodation->check_in_date_extra ?? '' }}">
        <div class="invalid-feedback"> Please write Check-in date.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>

    <div class="col-md-4 mb-3">
        <label for="validationTooltip02"> Check-out date </label>
        <input type="text" name="check_out_date_extra" class="form-control" id="check_out_date_extra"
            placeholder="Check-out date" value="{{ $accommodation->check_out_date_extra ?? '' }}">
        <div class="invalid-feedback"> Please write Check-out date.</div>
        <div class="valid-feedback"> {{ $success_check }} </div>
    </div>
    
    <div class="col-md-4 mb-3">
        <label for="validationTooltipUsername"> Rom type </label>
        <div class="input-group">
            <select type="text" name="rom_type_extra" class="form-control" required>
                <option>Select</option>
                <option value="king_bed" @if (isset($accommodation->rom_type_extra) && $accommodation->rom_type_extra == 'king_bed') selected @endif>King Bed </option>
                <option value="twin_bed" @if (isset($accommodation->rom_type_extra) && $accommodation->rom_type_extra == 'twin_bed') selected @endif>Twin Bed</option>
            </select>
            <div class="invalid-feedback"> Please Choose Rom type.</div>
            <div class="valid-feedback"> {{ $success_check }} </div>
        </div>
    </div>

</div>
