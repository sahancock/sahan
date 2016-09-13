<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
							
							
							<table class="table table-striped table-bordered">
						<thead><h3>Privacy: (check for privacy)</h3></thead>
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