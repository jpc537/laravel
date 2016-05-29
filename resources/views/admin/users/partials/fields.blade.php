<div class="form-group">
							<label class="col-md-4 control-label"><b>Nombre</b></label>
							<div class="col-md-6">
								{!!Form::text('name',null,['class'=>'form-control'])!!}
							</div>
						</div>
					</br></br>
						
						</br>
						<div class="form-group">
							<label class="col-md-4 control-label"><b>E-Mail</b></label>
							<div class="col-md-6">
								{!!Form::text('email',null,['class'=>'form-control'])!!}
							</div>
						</div>
						</br>
						</br>
						<div class="form-group">
							<label class="col-md-4 control-label"><b>Password</b></label>
							<div class="col-md-6">
								{!!Form::password('password',['class'=>'form-control'])!!}
							</div>
						</div>
						</br>
						</br>
						<div class="form-group">
							<label class="col-md-4 control-label"><b>Confirmar Password</b></label>
							<div class="col-md-6">
								{!!Form::password('password_confirmation',['class'=>'form-control'])!!}
								
							</div>
						</div>
						</br>
						</br>
						<div class="form-group">
							<label class="col-md-4 control-label"><b>Tipo de usuario</b></label>
							<div class="col-md-6">
								{!!Form::select('rol',[''=>'Selecciona Tipo Usuario','usuario'=>'usuario','administrador'=>'administrador'],['class'=>'form-control'])!!}

								</div>
							</div>
							
						</br>
						</br>
						<div class="form-group">
							<label class="col-md-4 control-label"><b>Activo</b></label>
							<div class="col-md-6">
								{!!Form::select('activo',[''=>'Selecciona ','si'=>'si','no'=>'no'],['class'=>'form-control'])!!}

								
							</div>
						</div>