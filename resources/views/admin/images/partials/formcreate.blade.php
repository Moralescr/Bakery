{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('category', 'Categorías') }}
	<select class="form-control" name="category" id="category">
        <option value="">-- Seleccione una opción --</option>
        <option value="Queques"> Queques & Pies</option>
        <option value="Cupcakes"> Cupcakes & otros</option>
    </select>
</div> 
<div class="form-group">
    {{ Form::label('image', 'Imagen') }}
    {{ Form::file('image') }}
</div>
<br><br>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
