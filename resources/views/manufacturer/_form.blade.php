
<div class="ln_solid"></div>

<div class="card-body card-block">

    <div class="row form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="role_id">Products
            <span class="required">*</span>
        </label>
        <div class="col-md-4 col-sm-4 col-xs-12">
          {!! Form::select('product_id[]', $product_list, null,
                [
                    'class' => 'form-control select2',
                    'id' => 'product_id',
                    'multiple' => 'multiple'
                ])
            !!}
        </div>
    </div>

</div>

<div class="ln_solid"></div>
