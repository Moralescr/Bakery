{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('category', 'Categorías') }}
	<select class="form-control" name="category" id="category">
        <option value="Queques">-- Seleccione una opción --</option>
        <option value="Queques">Queques</option>
        <option value="Pies">Pies</option>
        <option value="Carlotas">Carlotas</option>
        <option value="Otros">Otros</option>
    </select>
</div> 
<div class="form-group">
    {{ Form::label('image', 'Imagen') }}
    {{ Form::file('image') }}
</div>
@if($image != null)
    <img id="image" src="{{$image->file}}" width="150px" height="100px" alt="">
@endif
<br><br>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
