<ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">

    @foreach ( config('langs') as $locale => $name)

    <li class="nav-item">
        <a class="nav-link {{request('languages') == $locale ?'active':''}}" id="{{$name}}-tab" data-toggle="pill" href="#{{$name}}" role="tab" aria-controls="{{$name}}" aria-selected="{{ request('languages') == $locale  ? 'true' : 'false'}}">{{$name}}</a>
    </li>


    @endforeach
</ul>
<div class="tab-content" id="pills-tabContent">

    @foreach ( config('langs') as $locale => $name)

    <div class="tab-pane fade {{request('languages') == $locale?'show active':''}}" id="{{$name}}" role="tabpanel" aria-labelledby="{{$name}}-tab">
        <!-- Name Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('name', __('models/information.fields.name').':') !!}
            {!! Form::text($locale . '[name]', isset($information)? $information->translate($locale)->name : '' , ['class' => 'form-control', 'placeholder' => $name . ' name']) !!}
        </div>

        <!-- Description Field -->
        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('value', __('models/information.fields.value').':') !!}
            {!! Form::text($locale . '[value]', isset($information)? $information->translate($locale)->value : '' , ['class' => 'form-control', 'placeholder' => $name . ' value']) !!}
        </div>

    </div>

    @endforeach

    <!-- Status Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('status', __('models/categories.fields.status').':') !!}

        <label class="radio-inline">
            {!! Form::radio('status', "1", 'active') !!} active
        </label>

        <label class="radio-inline">
            {!! Form::radio('status', "0", null) !!} inactive
        </label>

    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('adminPanel.categories.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
    </div>

</div>
