<nav class="navbar navbar-default">
            <div class="container-fluid"style="margin-top:5px;">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="images/nefo-logo.png"style="padding-top:0px;"></a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li><a href="/">Home</a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Activities <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/kayak">Kayaking</a></li>
                                <li><a href="/camping">Camping</a></li>
                                <li><a href="/hiking">Hiking</a></li>
                                <li><a href="/geocaching">Geocaching</a></li>
                                <li><a href="/discgolf">Disc Golf</a></li>
                                <li><a href="/fishing">Fishing</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/parksandcamps">State Parks & Campgrounds</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/fishing">Day Trips</a></li>
                             </ul>
                     </li>

                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Photo Galleries <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/kayak">Kayaking</a></li>
                            <li><a href="/camping">Camping</a></li>
                            <li><a href="/hiking">Hiking</a></li>
                            <li><a href="/geocaching">Geocaching</a></li>
                            <li><a href="/discgolf">Disc Golf</a></li>
                            <li><a href="/fishing">Fishing</a></li>
                            <li role="separator" class="divider"></li>
                                <li><a href="#">Suwanee River</a></li>
                            <li role="separator" class="divider"></li>
                                <li><a href="#">Lake Fontana, NC</a></li>
                         </ul>
                  </li>
				   <li><a href="#">Forums</a></li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right">

                     <form class="navbar-form navbar-left" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
					 
                     
                     
							@if (Auth::guest())
							<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login/Register <span class="caret"></span></a>
                        <ul class="dropdown-menu">
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
								<li><a href="/home">Dashboard</a></li>
								<li><a href="/profile">Edit/View Profile</a></li>
							</ul>
						</li>
					@endif
						
					


                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>