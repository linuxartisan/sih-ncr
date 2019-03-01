<div class="card-body card-block">
    <div class="row form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="identifier">Identifier
        </label>
        <div class="col-md-4 col-sm-4 col-xs-12">
            {!! Form::text('identifier', null,
                    [
                        'class' => ['form-control'],
                        'id' => 'identifier',
                        'placeholder' => 'T001',
                        'autocomplete' => 'off'
                    ])
                !!}
        </div>

        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="name">Name
            <span class="required">*</span>
        </label>
        <div class="col-md-4 col-sm-4 col-xs-12">
            {!! Form::text('name', null,
                    [
                        'class' => ['form-control'],
                        'id' => 'name',
                        'placeholder' => 'John Doe',
                        'autocomplete' => 'off'
                    ])
                !!}
        </div>
    </div>

    <div class="row form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="email">Email
             <span class="required">*</span>
        </label>
        <div class="col-md-4 col-sm-4 col-xs-12">
            {!! Form::text('email', null,
                    [
                        'class' => ['form-control'],
                        'id' => 'email',
                        'placeholder' => 'user@example.com',
                        'autocomplete' => 'off'
                    ])
                !!}
        </div>

        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="mobile">Mobile
        </label>
        <div class="col-md-4 col-sm-4 col-xs-12">
            {!! Form::text('mobile', null,
                    [
                        'class' => ['form-control'],
                        'id' => 'mobile',
                        'placeholder' => 'XXXXXXXXXX',
                        'autocomplete' => 'off'
                    ])
                !!}
        </div>
    </div>
</div>

<div class="ln_solid"></div>

<div class="card-body card-block">

    <div class="row form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="role_id">Role(s)
            <span class="required">*</span>
        </label>
        <div class="col-md-4 col-sm-4 col-xs-12">
          {!! Form::select('role_id[]', $role_list, null,
                [
                    'class' => 'form-control select2',
                    'id' => 'role_id',
                    'multiple' => 'multiple'
                ])
            !!}
        </div>
    </div>

</div>

<div class="ln_solid"></div>
