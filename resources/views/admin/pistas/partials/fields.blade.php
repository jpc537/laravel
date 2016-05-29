<div class="form-group">
	
							<label class="col-md-4 control-label"><b>Nombre</b></label>
							<div class="col-md-6">
								{!!Form::text('nombre',null,['class'=>'form-control'])!!}
							</div>
						</div>
					</br>
				</br>
					</br>	
						
						
						<div class="form-group">
							<label class="col-md-4 control-label"><b>Tipo de pista</b></label>
							<div class="col-md-6">
								{!!Form::select('tipo',[''=>'Seleccione Tipo de Pista','Padel'=>'Padel','Futbol 7'=>'Futbol 7',
								'Futbol 11'=>'Futbol 11', 'Futbol Sala'=>'Futbol Sala','Futbol Indoor'=>'Futbol Indoor', 'Tenis'=>'Tenis'],
								['class'=>'form-control'])!!}

								</div>
							</div>
							
						</br>
						</br>
