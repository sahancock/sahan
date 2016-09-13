@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading" style='background-color:#ddffdd;'>
					<img src="/images/splashdog.jpg" alt={!!Auth::user()->screenname !!} width="70" height="70" style="float:right; margin-top:0px;">
					<h3>{!! Auth::user()->screenname !!}'s Profile </h3>
					<p3>Let's get outside today!</p3>
				</div>

				<div class="panel-body">
					
                    @include('...includes/profile.loginInfo') 
					
					<h3>Change Your Password:</h3>
						<label class="col-md-4 control-label"></label>
							<div class="col-md-6">
								<form method="get" action="/reset">
									<button type="submit">Change Password </button>
								</form>
							</div><br>
					
					
					@include('...includes/profile.imgUpload')
				</div>
					@include('...includes/profile.activities')	
					@include('...includes/profile.privacy')
					
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