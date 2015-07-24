@if ($errors->any())
	<script type="text/javascript">
		document.location.href = "#form";
	</script>
@endif
{!! Form::open(array('url' => 'postcontacto', 'class' => 'form')) !!}
	<a name="form"></a> 
	<div class="col-xs-12">
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group @if ($errors->has('nombre')) has-error @endif">
				    {!! Form::label('nombre','NOMBRE') !!}
				    {!! Form::text('nombre', null, array('class'=>'form-control', 'placeholder'=>'')) !!}
				     @if ($errors->has('nombre')) <p class="help-block">{{ $errors->first('nombre') }}</p> @endif
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group @if ($errors->has('apellido')) has-error @endif">
					{!! Form::label('apellido','APELLIDO') !!}
				    {!! Form::text('apellido', null, array('class'=>'form-control', 'placeholder'=>'')) !!}
				     @if ($errors->has('apellido')) <p class="help-block">{{ $errors->first('apellido') }}</p> @endif
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group @if ($errors->has('telefono')) has-error @endif">
				    {!! Form::label('telefono','TELÉFONO') !!}
				    {!! Form::input('number','telefono', null, array('class'=>'form-control', 'placeholder'=>'')) !!}
				     @if ($errors->has('telefono')) <p class="help-block">{{ $errors->first('telefono') }}</p> @endif
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group @if ($errors->has('email')) has-error @endif">
					{!! Form::label('email','EMAIL') !!}
				    {!! Form::input('text','email', null, array('class'=>'form-control', 'placeholder'=>'')) !!}
				     @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="form-group @if ($errors->has('carta')) has-error @endif">
					{!! Form::label('comentarios','COMENTARIOS') !!}
				    {!! Form::textarea('comentarios', null, array('class'=>'form-control', 'placeholder'=>'')) !!}
				     @if ($errors->has('comentarios')) <p class="help-block">{{ $errors->first('carta') }}</p> @endif
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 text-right">
				<div class="form-group">
			    	{!! Form::submit('ENVIAR', array('class'=>'btn btn-success')) !!}
				</div>
			</div>
		</div>
	</div>
{!! Form::close() !!}

