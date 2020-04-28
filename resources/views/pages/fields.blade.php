<!-- Categories Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categories_id', 'Categories Id:') !!}
    {!! Form::select('categories_id', $categoryItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Small Text Field -->
<div class="form-group col-sm-6">
    {!! Form::label('small_text', 'Small Text:') !!}
    {!! Form::text('small_text', null, ['class' => 'form-control']) !!}
</div>

<!-- Text Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('text', 'Text:') !!}
    {!! Form::textarea('text', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pages.index') }}" class="btn btn-default">Cancel</a>
</div>
