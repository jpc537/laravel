<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								{!!Form::text('name',null,['class'=>'form-control'])!!}
							</div>
						</div>
					</br></br>
						
						</br>
						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail </label>
							<div class="col-md-6">
								{!!Form::text('email',null,['class'=>'form-control'])!!}
							</div>
						</div>
						</br>
						</br>
						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								{!!Form::password('password',['class'=>'form-control'])!!}
							</div>
						</div>
						</br>
						</br>
						<div class="form-group">
							<label class="col-md-4 control-label">Confirmar Password</label>
							<div class="col-md-6">
								{!!Form::password('password_confirmation',['class'=>'form-control'])!!}
								
							</div>
						</div>
						</br>
						</br>
						<div class="form-group">
							<label class="col-md-4 control-label">Tipo de usuario</label>
							<div class="col-md-6">
								{!!Form::select('rol',[''=>'seleccione tipo','usuario'=>'usuario','administrador'=>'administrador'],['class'=>'form-control'])!!}

								</div>
							</div>
							
						</br>
						</br>
						<div class="form-group">
							<label class="col-md-4 control-label">Activo</label>
							<div class="col-md-6">
								{!!Form::select('activo',[''=>'seleccione ','si'=>'si','no'=>'no'],['class'=>'form-control'])!!}

								
							</div>
						</div>