<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $page->category_id }}</p>
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

<!-- Img Field -->
<div class="form-group">
    {!! Form::label('img', 'Img:') !!}
    <p>{{ $page->img }}</p>
</div>

<!-- Img Small Field -->
<div class="form-group">
    {!! Form::label('img_small', 'Img Small:') !!}
    <p>{{ $page->img_small }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $page->slug }}</p>
</div>

