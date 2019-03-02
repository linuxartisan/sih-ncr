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
                        'placeholder' => '',
                        'autocomplete' => 'off'
                    ]) 
            !!}
        </div>

        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="type">Product Type
            <span class="required">*</span>
        </label>
        <div class="col-md-4 col-sm-4 col-xs-12">
            {!! Form::select('type', $product_type, null,
                    [
                        'class' => 'form-control select2',
                        'id' => 'type',
                        'placeholder' => 'Select'
                    ]) 
            !!}
            
        </div>

    </div>

    <div class="row form-group">

        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="image_path">Image
            
        </label>
        <div class="col-md-4 col-sm-4 col-xs-12">
            {!! Form::text('image_path', null,
                    [
                        'class' => ['form-control'],
                        'id' => 'image_path',
                        'placeholder' => '',
                        'autocomplete' => 'off'
                    ]) 
            !!}
            
        </div>

        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="company_id">Company
            <span class="required">*</span>
        </label>
        <div class="col-md-4 col-sm-4 col-xs-12">
            {!! Form::select('company_id',$company_list, null,
                    [
                        'class' => 'form-control select2',
                        'id' => 'company_id',
                        'placeholder' => 'Select'
                    ]) 
            !!}
           
        </div>
    </div>

</div>

<div class="ln_solid"></div>
