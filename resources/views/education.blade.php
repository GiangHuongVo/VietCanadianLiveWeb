@extends('layout')
@section('title', 'Giáo dục')
@section('content')
<div class="container flex-grow-1" aria-current="page">
    <div class="row pageContent">
        <!--Tabs-->        
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-tab active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Québec</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-tab" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Ontario</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-tab" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Các tỉnh bang khác</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="immigration_education_area">
                        <h2>Giáo dục ở Québec...</h2>
                        <div class="single_post_content">
                         <p>Cập nhật sau...</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="immigration_education_area">
                        <h2>Giáo dục ở Ontario...</h2>
                        <div class="single_post_content">
                         <p>Cập nhật sau...</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="immigration_education_area">
                        <h2>Giáo dục ở các tỉnh bang khác...</h2>
                        <div class="single_post_content">
                         <p>Cập nhật sau...</p>
                        </div>
                    </div>
                </div>
              </div>        
    </div>
</div>
@endsection