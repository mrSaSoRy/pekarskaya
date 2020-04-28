<!-- Categories Id Field -->
<div class="form-group">
    {!! Form::label('categories_id', 'Categories Id:') !!}
    <p>{{ $page->categories_id }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $page->title }}</p>
</div>

<!-- Small Text Field -->
<div class="form-group">
    {!! Form::label('small_text', 'Small Text:') !!}
    <p>{{ $page->small_text }}</p>
</div>

<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Text:') !!}
    <p>{{ $page->text }}</p>
</div>

