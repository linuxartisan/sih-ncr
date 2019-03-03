<div class="card-body card-block">
    <div class="row form-group">

        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="problem">Title
            <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            
            {!! Form::text('title', null,
                    [
                        'class' => ['form-control'],
                        'id' => 'title',
                        'placeholder' => '',
                        'autocomplete' => 'off'
                    ]) 
            !!}
        </div>
    </div>
    <div class="row form-group">

        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="problem">Problem
            <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            
            {!! Form::textarea('problem', null,
                    [
                        'class' => ['form-control'],
                        'id' => 'problem',
                        'placeholder' => '',
                        'autocomplete' => 'off'
                    ]) 
            !!}
        </div>
    </div>

    <div class="row form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="solution">Solution
            <span class="required">*</span>
        </label>
        <div class="col-md-10 col-sm-10 col-xs-12">
            
            {!! Form::textarea('solution', null,
                    [
                        'class' => ['form-control'],
                        'id' => 'solution',
                        'placeholder' => '',
                        'autocomplete' => 'off'
                    ]) 
            !!}

        </div>
    </div>

    
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
        </div>
</div>

<div class="ln_solid"></div>
