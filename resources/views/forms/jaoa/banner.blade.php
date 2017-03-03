

<div class="form-group">
    {!! Form::label('imageUrl', 'Image URL') !!}
    {!! Form::text('imageUrl', null, ['class' => 'form-control', 'v-model' => 'imageUrl']) !!}
</div>

<div class="form-group">
    {!! Form::label('alt', 'Alt text') !!}
    {!! Form::text('alt', null, ['class' => 'form-control', 'v-model' => 'alt']) !!}
</div>

@include('forms.copy-buttons') 
