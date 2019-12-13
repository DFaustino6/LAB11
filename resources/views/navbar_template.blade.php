<nav class="navbar navbar-inverse" style="background-color: #006699; border-color: #006699">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color: white" href="{{action('Blog@index')}}">Daw Forum</a>
    </div>
    <ul class="nav navbar-nav navbar-left">
        <li class="dropdown table-bordered" ><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white; background-color: #006699">Menu&nbsp;<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">{{$MENU1}}</a></li>
            <li><a href="#">{{$MENU2}}}</a></li>
            <li><a href="#">{{$MENU3}}</a></li>
          </ul> 
        </li>
        <li>
          <form class="navbar-form nav-letf" action="/action_page.php">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
            <div class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                  </button>
              </div>
          </div>
        </form>
        </li>
        </ul>
    <ul class="nav navbar-nav navbar-right">
      @if(isset($loginId))
        <li><a href="{{$href6}}" style="color: white">{{$MENU6}}</a></li>
      @endif
      <li><a href="{{$href4}}" style="color: white">{{$MENU4}}</a></li>
      <li><a href="{{$href5}}" style="color: white">{{$MENU5}}</a></li>
    </ul>
  </div>
</nav>