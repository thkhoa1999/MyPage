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
<div class="loadpost_result"></div>
<a href="#" class="click_loadpost">Tải 5 bài mới nhất</a>
<script type="text/javascript">
    (function($){
        $(document).ready(function(){
            $('.click_loadpost').click(function(){
                $.ajax({
                    type : "post", //Phương thức truyền post hoặc get
                    dataType : "json", //Dạng dữ liệu trả về xml, json, script, or html
                    url : '<?php echo admin_url('admin-ajax.php');?>', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                    data : {
                        action: "loadpost", //Tên action
                    },
                    context: this,
                    beforeSend: function(){
                        //Làm gì đó trước khi gửi dữ liệu vào xử lý
                    },
                    success: function(response) {
                        //Làm gì đó khi dữ liệu đã được xử lý
                        if(response.success) {
                            $('.loadpost_result').html(response.data);
                        }
                        else {
                            alert('Đã có lỗi xảy ra');
                        }
                    },
                    error: function( jqXHR, textStatus, errorThrown ){
                        //Làm gì đó khi có lỗi xảy ra
                        console.log( 'The following error occured: ' + textStatus, errorThrown );
                    }
                })
                return false;
            })
        })
    })(jQuery)
</script>
<!-- details card section starts from here -->