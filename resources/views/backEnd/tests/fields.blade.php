<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6 col-md-6 col-lg-6">
    {!! Form::label('title', trans('tests.title')) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    {!! $errors->has('title')? '<p class="help-block"> '.$errors->first('trans(tests.title')).' </p>':'' !!}
</div>
{{-- AddToLang 'title' => 'Title', --}}


<!-- Post Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_date', 'Post Date:') !!}
    {!! Form::date('post_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

{{-- AddToLang 'body' => 'Body', --}}

<!-- Body Field -->
<div class="form-group col-sm-12 col-md-12 col-lg-12">
    {!! Form::label('body', trans('tests.body')) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control ckeditor', 'rows' => '5']) !!}
</div>
{{-- AddToLang 'body' => 'Body', --}}


<!-- Email Field -->
<div class="form-group col-md-3">
    {!! Form::label('email', trans('tests.email')) !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
{{-- AddToLang 'email' => 'Email', --}}
{!! Form::email('email', null, ['class' => 'form-control', 'value' => old('email')]) !!}


<!-- Author Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('author_gender', 'Author Gender:') !!}
    <label class="radio-inline">
        {!! Form::radio('author_gender', "1", null) !!} Male
    </label>

    <label class="radio-inline">
        {!! Form::radio('author_gender', "0", null) !!} Female
    </label>

</div>

<!-- Post Type Field -->
<div class="form-group col-sm-12">
    {!! Form::label('post_type', 'Post Type:') !!}
    <label class="radio-inline">
        {!! Form::radio('post_type', "Public", null) !!} Public
    </label>

    <label class="radio-inline">
        {!! Form::radio('post_type', "Private", null) !!} Private
    </label>

</div>

<!-- Post Visits Field -->
<div class="form-group col-sm-6">
    {!! Form::label('post_visits', 'Post Visits:') !!}
    {!! Form::number('post_visits', null, ['class' => 'form-control']) !!}
</div>

<!-- Post Visits Field -->
<div class="form-group col-sm-6 {{ $errors->has('post_visits')? 'has-error' : '' }}">
    {!! Form::label('post_visits',  trans('tests.post_visits'), ['class' => 'control-label']) !!}
    {!! Form::number('post_visits', null, ['class' => 'form-control', 'value' => old('post_visits')]) !!}
    {!! $errors->has('post_visits')? '<p class="help-block"> '.$errors->first('post_visits').' </p>':'' !!}
</div>

{{-- AddToLang 'post_visits' => 'Post Visits', --}}


<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', 'Category:') !!}
    {!! Form::select('category', ['Technology' => 'Technology', 'LifeStyle' => 'LifeStyle', 'Education' => 'Education', 'Games' => 'Games'], null, ['class' => 'form-control']) !!}
</div>

------------------------------------------------------

<!-- Category Field -->
<div class="form-group col-sm-6 {{ $errors->has('category')? 'has-error' : '' }}">
    {!! Form::label('category', 'Category:', ['class' => 'control-label']) !!}
     {!! Form::label('category', trans('tests.category'), ['class' => 'control-label']) !!}
    {!! Form::select('category', ['Technology' => 'Technology', 'LifeStyle' => 'LifeStyle', 'Education' => 'Education', 'Games' => 'Games'], null, ['class' => 'form-control']) !!}
    {!! $errors->has('category')? '<p class="help-block"> '.$errors->first('category').' </p>':'' !!}
    {!! $errors->has('category')? '<p class="help-block"> '.$errors->first(trans('tests.category')).' </p>':'' !!}
</div>

<!-- Category Field -->
<div class="form-group col-md-3 col-sm-3">
    {!! Form::label('category', trans('tests.category')) !!}
    {!! Form::select('category', ['Technology' => 'Technology', 'LifeStyle' => 'LifeStyle', 'Education' => 'Education', 'Games' => 'Games'], (isset($tests) ? $tests->category : null), ['id' => 'category', 'class' => 'form-control']) !!}
</div>
{{-- AddToLang 'category' => 'Category', --}}


<!-- Category Short Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_short', 'Category Short:') !!}
    {!! Form::select('category_short', ['tech' => 'Technology', 'ls' => 'LifeStyle', 'edu' => 'Education', 'game' => 'Games'], null, ['class' => 'form-control']) !!}
</div>

------------------------------------------------------

<!-- Category Short Field -->
<div class="form-group col-sm-6 {{ $errors->has('category_short')? 'has-error' : '' }}">
    {!! Form::label('category_short', 'Category Short:', ['class' => 'control-label']) !!}
     {!! Form::label('category_short', trans('tests.category_short'), ['class' => 'control-label']) !!}
    {!! Form::select('category_short', ['tech' => 'Technology', 'ls' => 'LifeStyle', 'edu' => 'Education', 'game' => 'Games'], null, ['class' => 'form-control']) !!}
    {!! $errors->has('category_short')? '<p class="help-block"> '.$errors->first('category_short').' </p>':'' !!}
    {!! $errors->has('category_short')? '<p class="help-block"> '.$errors->first(trans('tests.category_short')).' </p>':'' !!}
</div>

<!-- Category Short Field -->
<div class="form-group col-md-3 col-sm-3">
    {!! Form::label('category_short', trans('tests.category_short')) !!}
    {!! Form::select('category_short', ['tech' => 'Technology', 'ls' => 'LifeStyle', 'edu' => 'Education', 'game' => 'Games'], (isset($tests) ? $tests->category_short : null), ['id' => 'category_short', 'class' => 'form-control']) !!}
</div>
{{-- AddToLang 'category_short' => 'Category Short', --}}


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.tests.index') !!}" class="btn btn-default">Cancel</a>
</div>
