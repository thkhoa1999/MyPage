{{-- <div class="fluid-container" id="myBanner">
 <img src="{{$data->banner[0]->url}}" alt="">
 <img src="{{$data->banner[1]->url}}" alt="">
  <img src="{{$data->banner[2]->url}}" alt="">
   <div class="title">
    <h4>{{$data->banner[0]->title}}</h4>
    <p>{{$data->banner[0]->description}}</p>
  </div>
</div> --}}
<div class="fluid-container" id="myBanner">

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{$data->banner[0]->url}}" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="{{$data->banner[1]->url}}" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="{{$data->banner[2]->url}}" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

</div>