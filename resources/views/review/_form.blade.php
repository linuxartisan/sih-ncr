<div class="card-body card-block">
    <div class="row form-group">

        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="component_id">Component
            <span class="required">*</span>
        </label>
        <div class="col-md-4 col-sm-4 col-xs-12">
            {!! Form::select('component_id', $component_list, null,
                [
                        'class' => 'form-control select2',
                        'id' => 'component_id',
                        'placeholder' => 'Select'
                    ]) 
            !!}
        </div>

        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="rating">Rating
            <span class="required">*</span>
        </label>
        <div class="col-md-4 col-sm-4 col-xs-12">
            {!! Form::select('rating', $review_type, null,
                    [
                        'class' => 'form-control select2',
                        'id' => 'rating',
                        'placeholder' => 'Select'
                    ]) 
            !!}
        </div>
    </div>
</div>


<div class="ln_solid"></div>
