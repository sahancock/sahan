<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}"><br><br>
							
							
							<table class="table table-striped table-bordered">
						<thead><h3>Activities You Are Interested In Following: (check all that apply)</h3></thead>
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