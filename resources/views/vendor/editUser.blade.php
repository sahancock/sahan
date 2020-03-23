@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading" style='background-color:#ddffdd;'><h2>Welcome to {!! Auth::user()->screenname !!}'s Dashboard!</h2>
				</div>

				<div class="panel-body">
					
                        <table class="table table-striped table-bordered">
						<thead><h3>Login Information:</h3></thead>
                            <tbody>
                              <tr>
                                <td>User ID:</td>
                                <td>{!! Auth::user()->id !!}</td>
                              </tr>
                              <tr>
                                <td>Name:</td>
                                <td>{!! Auth::user()->name !!}</td>
                              </tr>
							  <tr>
							  <td>Screen Name:</td>
                                <td>{!! Auth::user()->screenname !!}</td>
                              </tr>
                              <tr>
                                <td>Email:</td>
                                <td>{!! Auth::user()->email !!}</td>
                              </tr>

                             <tr>
                                <td>Member Since:</td>
                                <td>{!! Auth::user()->created_at->format('M d Y') !!}</td>
                              </tr>
                              <tr>
                                <!--<button type="button" href ="/users/">Edit Profile</button> </td>
                                <td> <button type="button" href ="">Change Password</button> </td>
                                <td> <button type="button" href ="">Client Look-up</button> </td> -->

                            </tbody>

                        </table>
                    @if ($errors->any())
                        <ul>
                            {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                        </ul>
                    @endif
					
					<h3>Change Your Password:</h3>
						<label class="col-md-4 control-label"></label>
							<div class="col-md-6">
								<form action="/reset">
								<input type="submit" value="Reset Password">
								</form></a>
							</div>
					<h3>Upload/Change Your Avatar:</h3>
						<div class="form-group">
						<label class="col-md-4 control-label">Upload</label>
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
							</div><br>
							
							<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}"><br><br>
							
							
							<table class="table table-striped table-bordered">
						<thead><h3>Activities You are Interested in Following: (check all that apply)</h3></thead>
                            <tbody>
                              <tr>
                                <td><div class="form-group">
							<label class="col-md-4 control-label">Kayaking</label>
							<div class="col-md-6">
								<input type="checkbox" class="checkbox" name="kayak" value="">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Camping</label>
							<div class="col-md-6">
								<input type="checkbox" class="checkbox" name="camp" value="">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Hiking</label>
							<div class="col-md-6">
								<input type="checkbox" class="checkbox" name="hike" value="">
							</div>
						</div></td>
                                <td><div class="form-group">
							<label class="col-md-4 control-label">Geocaching</label>
							<div class="col-md-6">
								<input type="checkbox" class="checkbox" name="geocache" value="" >
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Discgolf</label>
							<div class="col-md-6">
								<input type="checkbox" class="checkbox" name="discgolf" value="">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Fishing</label>
							<div class="col-md-6">
								<input type="checkbox" class="checkbox" name="fish" value="">
							</div>
						</div></td>
                              </tr>
                              
                             

                            </tbody>

                        </table>
							
							
							
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
							
							
							<table class="table table-striped table-bordered">
						<thead><h3>Privacy: (check for private)</h3></thead>
                            <tbody>
                              <tr>
                                <td><div class="form-group">
							<label class="col-md-4 control-label">Profile</label>
							<div class="col-md-6">
								<input type="checkbox" class="checkbox" name="kayak" value="">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">Forum Posts</label>
							<div class="col-md-6">
								<input type="checkbox" class="checkbox" name="camp" value="">
							</div>
						</div></td>
						
						<td><div class="form-group">
							<label class="col-md-4 control-label">Activities</label>
							<div class="col-md-6">
								<input type="checkbox" class="checkbox" name="hike" value="">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Photo Galleries</label>
							<div class="col-md-6">
								<input type="checkbox" class="checkbox" name="hike" value="">
							</div>
						</div></td>
						
						
						
							
 </tr>
                              
                             

                            </tbody>

                        </table>						
						
						
						
						
						<br><br>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Update Profile
								</button>
								<button type="cancel" class="btn btn-default">
									Cancel
								</button></div>
							</div>
						</div>
						
						
						
						
						
						
				</div>
			</div>
		</div>
	</div>
</div>
@endsection