<div class="card-body card-block">
    <div class="row form-group">

        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="name">Name
            <span class="required">*</span>
        </label>
        <div class="col-md-4 col-sm-4 col-xs-12">
            {!! Form::text('name', null,
                    [
                        'class' => ['form-control'],
                        'id' => 'name',
                        'placeholder' => 'Nokia',
                        'autocomplete' => 'off'
                    ]) 
            !!}
                
               
        </div>
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="image_path">Image
            <span class="required">*</span>
        </label>
        <div class="col-md-4 col-sm-4 col-xs-12">
            {!! Form::file('image', null,
                    [
                        'class' => ['form-control'],
                        'id' => 'image'
                    ]) 
            !!}
                
               
        </div>
    </div>

</div>

<div class="ln_solid"></div>
