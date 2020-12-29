{{-- <div class="container" id="sub">
    <h1>{{$data->sub[0]->title}}</h1>
    <a href="{{$data->sub[0]->url}}">Link2</a>
</div> --}}
<section class="details-card">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="{{$data->sub[1]->url}}" alt="">
                        <span><h4>{{$data->sub[0]->title}}</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>{{$data->sub[0]->title}}</h3>
                        <p>{{$data->sub[0]->description}}</p>
                            <a href="#" class="btn-card">Read</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="{{$data->sub[0]->url}}" alt="">
                        <span><h4>{{$data->sub[1]->title}}</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>{{$data->sub[1]->title}}</h3>
                        <p>{{$data->sub[1]->description}}</p>
                            <a href="#" class="btn-card">Read</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="{{$data->sub[2]->url}}" alt="">
                        <span><h4>{{$data->sub[2]->title}}</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>{{$data->sub[2]->title}}</h3>
                        <p>{{$data->sub[2]->description}}</p>
                            <a href="#" class="btn-card">Read</a>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
