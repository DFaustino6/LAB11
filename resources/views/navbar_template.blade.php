<link rel="stylesheet" href="{{asset('resources/assets/css/megamenu.css')}}">
<nav class="navbar  navbar-dark bg-dark navbar-expand fixed-top">
    <img class="align-self-center mr-2" src="{{asset('resources/assets/images/logo.jpg')}}" alt="Generic placeholder image" style="width: 2%;height: 2%">
    <a class="navbar-brand" href="{{action('Store@index')}}"><h3>Óculos Online</h3></a>
  	<button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
     </button>
    <div id="navbarContent" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <!-- Megamenu-->
          <li class="nav-item dropdown"><a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle font-weight-bold text-uppercase">Categorias</a>
            <div aria-labelledby="megamneu" class="dropdown-menu">
              <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <h6 class="font-weight-bold text-uppercase">Óculos de Sol</h6>
                    <ul class="list-unstyled">
                      <li class="nav-item"><a href="" class="nav-link text-small" style="color: black">Homem</a></li>
                      <li class="nav-item"><a href="" class="nav-link text-small" style="color: black">Mulher</a></li>
                      <li class="nav-item"><a href="" class="nav-link text-small" style="color: black">Criança</a></li>
                      <li class="dropdown-submenu"><a href="" class="nav-link text-small" style="color: black">Marcas</a>
                      		<li><a href="" class="nav-link text-small" style="color: black">Criança</a></li>
    				          </li>
                    </ul>
                  </div>  
                </div>  
                </div>
              </div>
         	 </li>
        	</ul>
    </div>
    <div class="mr-5">
      <form class="form-inline align-self-center">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="submit" >Search</button>
      </form>
    </div>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{$href4}}"><h5 style="color: white">{{$MENU4}}<i class="fas fa-dolly"></i></h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{$href3}}"><h5 style="color: white">{{$MENU3}}<i class="fal fa-shopping-cart"></i></h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{$href1}}"><h5 style="color: white">{{$MENU1}}</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{$href2}}"><h5 style="color: white">{{$MENU2}}</h5></a>
      </li>
    </ul>
  </div>
</nav>