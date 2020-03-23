<!DOCTYPE html>
<html>
    <head>
        @include('...includes.head')
		
    </head>

    <body>
        <div class="container-fluid" style="background-color: white;width:80%;>
            <header class="row">
                @include('...includes.navbar')
                <div class="myHead">
                    @yield('myHeader')
                </div>
            </header>

            <div id="main" class="row"style="margin-top:10px;height:auto;">
                <div class="col-sm-2">
                    <nav id="sidebar-nav">
                        <ul class="nav nav-pills nav-stacked"style="padding-left:40px;">
                            @yield('sidebar')

                        </ul>
                    </nav>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-6"style="text-align:justify;">
                    @yield('content')
                </div>
                 <div class="col-sm-3">

                    @yield('r-sidebar')
					

                 </div>
            </div>
         @include('...includes.footer')
        </div>
    </body>

</html>