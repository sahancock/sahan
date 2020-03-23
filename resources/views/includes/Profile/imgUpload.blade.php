<h3>Upload/Change Your Avatar:</h3>
						<div class="form-group">
						<label class="col-md-4 control-label"></label>
							<div class="col-md-6">
								{!! Form::open(array('url'=>'auth/upload','method'=>'POST', 'files'=>true)) !!}
								<div class="control-group">
									<div class="controls">
										{!! Form::file('image') !!}
										<p class="errors">{!!$errors->first('image')!!}</p>
										@if(Session::has('error'))
										<p class="errors">{!! Session::get('error') !!}</p>
										@endif
									</div>
								</div>
								<div id="success"> </div>
      {!! Form::submit('Upload', array('class'=>'send-btn')) !!}
      {!! Form::close() !!}
      </div>
				