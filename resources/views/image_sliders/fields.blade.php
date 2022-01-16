

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {{ Form::label('is_active','Choose Activation Status') }}
    <br>
    <label>{{ Form::radio('is_active', '1', null, ['class' => '', 'required']) }}
        Active</label><br>
    <label>{{ Form::radio('is_active', '0', null, ['class' => '', 'required']) }}
        Inactive</label>
</div>
