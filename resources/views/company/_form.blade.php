<div class="card-body card-block">
    <div class="row form-group">

        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="name">Name
            <span class="required">*</span>
        </label>
        <div class="col-md-8 col-sm-8 col-xs-12">
            {!! Form::text('name', null,
                    [
                        'class' => ['form-control'],
                        'id' => 'name',
                        'placeholder' => 'Nokia',
                        'autocomplete' => 'off'
                    ])
                !!}
        </div>
    </div>

</div>

<div class="ln_solid"></div>
