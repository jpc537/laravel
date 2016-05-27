

<div class="form-group">
	
							<label class="col-md-4 control-label">nombre</label>
							<div class="col-md-6">
								{!!Form::text('nombre',null,['class'=>'form-control'])!!}
							</div>
						</div>
					</br>
				</br>
					</br>	
						
						
						<div class="form-group">
							<label class="col-md-4 control-label">Tipo de pista</label>
							<div class="col-md-6">
								{!!Form::select('tipo',[''=>'seleccione tipo','padel'=>'padel','futbol'=>'futbol'],['class'=>'form-control'])!!}

								</div>
							</div>
							
						</br>
						</br>
						<div class="form-group">
							<label class="col-md-4 control-label">aforo</label>
							<div class="col-md-6">
								{!!Form::select('aforo',[''=>'seleccione ','50'=>'50','100'=>'100'],['class'=>'form-control'])!!}

								
							</div>
						</div>