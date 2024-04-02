
  <nav class="navbar navbar-expand-md fixed-top headerContent">
    <div class="container-fluid headerContent">   
      @include('components.logo')
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="myDIV">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Trang chủ</a>
          </li>          
            <li class="nav-item">
              <a class="nav-link" href="/immigration">Định cư</a>
            </li>         
            <li class="nav-item">
              <a class="nav-link" href="/education">Giáo dục</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/heath">Y tế</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="/transport">Đi lại</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="/sport">Thể thao</a>
            </li> 
        </ul>
      </div>
    </div>
  </nav>


  