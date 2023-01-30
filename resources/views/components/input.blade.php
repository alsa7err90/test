@if ($type == "text") 
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{!! $nameView ?? 'Name'!!}:</strong>

            <input 
            value="{!! $value ?? "" !!}" 
            placeholder="{!! $placeholder ?? "Name" !!}" 
            class="form-control" 
            name="{!! $nameInDb ?? 'name' !!}" 
            type="text"
            >
        </div>
    </div>
@elseif ($type == "button")
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary"> {!! $nameView ?? 'Save'!!}</button>
    </div>

@elseif ($type == "textarea")
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>{!! $nameView ?? 'Name'!!} :</strong>
       
        <textarea name="{!! $nameInDb ?? 'file' !!}"  class="form-control"  rows="3" placeholder="{!! $placeholder ?? "text" !!}"  ></textarea>
    </div>
</div>


@elseif ($type == "file")
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{!! $nameView ?? 'Name'!!} :</strong>
            <input type="file" name="{!! $nameInDb ?? 'file' !!}" accept="image/*" class="form-control" >
        </div>
    </div>

@elseif ($type == "select")
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{ $nameView ?? 'name'}} :</strong>
           <?php if( $nameInDb == "roles") { ?>
            <select  name="roles[]"  
                 id="select-state" class="form-control select"  multiple> 
                    <option value="">Select ...</option>
                    {!! $placeholder !!}
                </select>
           <?php } else{
            ?>

                <select  name="{{ $nameInDb ?? 'name'}}" 
                 id="select-state" class="form-control"
                  <?php
                   if( $nameInDb == "roles") echo "multiple"; ?>> 
                    <option value="">Select ...</option>
                    {!! $placeholder !!}
                </select>
                <?php } ?>
            </div>
    </div>
@endif