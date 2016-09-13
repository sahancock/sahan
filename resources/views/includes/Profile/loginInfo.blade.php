<table class="table table-striped table-bordered">
						<thead><h3>Member Information:</h3></thead>
                            <tbody>
                              
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