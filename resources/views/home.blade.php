@extends('layouts.app')

@section('content')

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{ asset('assets/images/messi_cr7.jpg') }});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Chào mừng</span>
            <h1 class="mb-4">Trải nghiệm cà phê tuyệt vời nhất</h1>
            <p class="mb-4 mb-md-5">Nơi cuộc hẹn tràn đầy với Cà Phê đặc sản, Món ăn bản sắc và Không gian cảm hứng
            </p>
            <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Đặt hàng</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Xem Menu</a></p>
          </div>

        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image: url({{ asset('assets/images/ptit_background.jpg') }});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Chào mừng</span>
            <h1 class="mb-4">Hương vị tuyệt hảo &amp; Không gian yên tĩnh</h1>
            <p class="mb-4 mb-md-5">Luôn biết ơn khách hàng</p>
            <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Đặt hàng</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Xem Menu</a></p>
          </div>

        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image: url({{ asset('assets/images/ptitbackground2.jpg') }});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-8 col-sm-12 text-center ftco-animate">
              <span class="subheading">Chào mừng</span>
            <h1 class="mb-4">Luôn sẵn sàng phục vụ khách hàng</h1>
            <p class="mb-4 mb-md-5">Mang đến những trải nghiệm đậm chất PTIT</p>
            <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Đặt hàng</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Xem Menu</a></p>
          </div>

        </div>
      </div>
    </div>
  </section>
    <div class = "container">
        @if( Session::has( 'date' ))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('date') }}</p>
        @endif
    </div>
    <div class = "container">
        @if( Session::has( 'booking' ))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('booking') }}</p>
        @endif
    </div>
  <section class="ftco-intro">
    <div class="container-wrap">
        <div class="wrap d-md-flex align-items-xl-end">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-4 text-white d-flex ftco-animate">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">
                            <h3>0366456789</h3>
                            <p>Email: ptitcoffee@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex text-white ftco-animate">
                        <div class="icon"><span class="icon-my_location"></span></div>
                        <div class="text">
                            <h3>Số 10 Trần Phú</h3>
                            <p>	Tầng 1, tòa A1</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-white d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text">
                            <h3>Mở tất cả các ngày</h3>
                            <p>Thứ 2 - Thứ 6: 8:00am - 9:00pm</p>
                            <p>Thứ 7- CN: 7:00am - 12:00pm</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="book p-4">
                <h3>ĐẶT BÀN</h3>
                <form action="{{ route('booking.tables') }}" method="POST" class="appointment-form">
                    @csrf
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="Họ">
                        </div>
                        @if($errors->has('first_name'))
                            <p class="alert alert-success">{{ $errors->first('first_name') }}</p>
                        @endif
                        <div class="form-group ml-md-4">
                            <input type="text" name="last_name" class="form-control" placeholder="Tên">
                        </div>
                        @if($errors->has('last_name'))
                            <p class="alert alert-success">{{ $errors->first('last_name') }}</p>
                        @endif
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="input-wrap">
                        <div class="icon"><span class="ion-md-calendar"></span></div>
                        <input type="text" name="date" class="form-control appointment_date" placeholder="Ngày">
                    </div>
                    @if($errors->has('date'))
                        <p class="alert alert-success">{{ $errors->first('date') }}</p>
                    @endif
                        </div>
                    <div class="form-group ml-md-4">
                        <div class="input-wrap">
                        <div class="icon"><span class="ion-ios-clock"></span></div>
                        <input type="text" name="time" class="form-control appointment_time" placeholder="Giờ">
                    </div>
                    @if($errors->has('time'))
                        <p class="alert alert-success">{{ $errors->first('time') }}</p>
                    @endif
                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" class="form-control appointment_time">
                    </div>
                        <div class="form-group ml-md-4">
                            <input type="text" name="phone" class="form-control" placeholder="SĐT">
                        </div>
                    @if($errors->has('phone'))
                        <p class="alert alert-success">{{ $errors->first('phone') }}</p>
                    @endif
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                  <textarea id="" name="message" cols="30" rows="2" class="form-control" placeholder="Lời nhắn"></textarea>
                </div>
                @if($errors->has('message'))
                    <p class="alert alert-success">{{ $errors->first('message') }}</p>
                @endif
                <div class="form-group ml-md-4">
                  <input type="submit" name="submit" value="Đặt" class="btn btn-white py-3 px-4">
                </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url({{ asset('assets/images/ptitbackground2.jpg') }});"></div>
    <div class="one-half ftco-animate">
        <div class="overlap">
        <div class="heading-section ftco-animate ">
            <span class="subheading">Khám phá</span>
          <h2 class="mb-4">CÂU CHUYỆN</h2>
        </div>
        <div>
                  <p>Một nhóm bạn nhiệt huyết và trẻ trung đã quyết định cùng nhau mở quán cà phê trong khuôn viên trường Đại học Bưu chính Viễn thông để phục vụ nhu cầu tự học, học nhóm cho sinh viên trong và ngoài trường. . Không chỉ có không gian lý tưởng mà chúng tôi còn cung cấp những tài liệu học tập hữu ích với giá cả phải chăng. Liệu tuổi trẻ và sự sáng tạo có thể đáp ứng được nhu cầu của bạn? Hãy cho chúng tôi biết</p>
              </div>
          </div>
    </div>
</section>

<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
              <span class="flaticon-choices"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">DỄ DÀNG ĐẶT HÀNG</h3>
            <p>Chỉ với các bước đơn giản trên website, bạn đã có thể gọi được những đồ uống thơm ngon</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
              <span class="flaticon-delivery-truck"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">GIAO HÀNG NHANH NHẤT</h3>
            <p>10 phút trong khuôn viên trường, 15 phút đến ngõ Ao Sen, Xa hơn thì tùy vào địa điểm lấy hàng</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
              <span class="flaticon-coffee-bean"></span></div>
          <div class="media-body">
            <h3 class="heading">CÀ PHÊ CHẤT LƯỢNG</h3>
            <p>Không chỉ giúp bạn tỉnh táo qua những giờ học triết mà còn giúp bạn giải toán, code hiệu quả hơn</p>
          </div>
        </div>
      </div>
    </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 pr-md-5">
                <div class="heading-section text-md-right ftco-animate">
              <span class="subheading">Khám phá</span>
            <h2 class="mb-4">MENU CỦA CHÚNG MÌNH</h2>
            <p class="mb-4">Menu đồ uống của P-coffee khá đa dạng, để đánh giá thì nói ngắn gọn 1 từ thôi: NGON. Đợt này qua quán mình có thử trà sữa shan tuyết cổ thụ, vị trà đậm, thơm bé, ngọt vừa và không hề ngấy. Nghe nói trà shan tuyết là loại trà cao cấp của Tây Bắc, chắc vì thế nên hương vị trà sữa Shan tuyết của P-Coffee mang lại cũng đặc biệt hơn những nơi khác. Topping của quán có thêm chân châu nhài và hạt năng nổ, không điêu chút nào khi khen là toping của quán cũng ngon luôn các bác ạ. Recommend mọi người nên thử dòng trà sữa mới này và mix thêm topping nha.</p>
            <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Xem toàn bộ Menu</a></p>
          </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="menu-entry">
                            <a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry mt-lg-4">
                            <a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry">
                            <a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry mt-lg-4">
                            <a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url({{ asset('assets/images/background4.jpg') }});">
        <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                      <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                      <strong class="number" data-number="2">0</strong>
                      <span>Chi nhánh</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                      <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                      <strong class="number" data-number="10">0</strong>
                      <span>Giải thưởng</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                      <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                      <strong class="number" data-number="10567">0</strong>
                      <span>Đánh giá tích cực</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                      <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                      <strong class="number" data-number="15">0</strong>
                      <span>Nhân viên</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
          <span class="subheading">Khám phá</span>
        <h2 class="mb-4">Best Sellers Của Chúng Mình</h2>
        <p>Mang đến những trải nghiệm đậm chất PTIT</p>
      </div>
    </div>
    <div class="row">

        @foreach ($products as $product)
            <div class="col-md-3">
                <div class="menu-entry">
                        <a href="#" class="img" style="background-image: url({{ asset('assets/images/'.$product->image.'') }});"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="{{ route('product.single', $product->id) }}">{{ $product->name }}</a></h3>
                            <p>{{ $product->description }}</p>
                            <p class="price"><span>{{ $product->price }}</span></p>
                            <p><a href="{{ route('product.single', $product->id) }}" class="btn btn-primary btn-outline-primary">Xem</a></p>
                        </div>
                    </div>
            </div>
        @endforeach

    </div>
    </div>
</section>

<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 ftco-animate">
                    <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                    </a>
                </div>
    </div>
    </div>
</section>



<section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/bg_1.jpg);"  data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Đánh giá</span>
          <h2 class="mb-4">Feedback</h2>
        </div>
      </div>
    </div>
    <div class="container-wrap">
      <div class="row d-flex no-gutters">
        @foreach ($reviews as $review)
        <div class="col-md align-self-sm-end ftco-animate">
            <div class="testimony">
               <blockquote>
                  <p>&ldquo;{{ $review->review }}&rdquo;</p>
                </blockquote>
                <div class="author d-flex mt-4">
                  {{-- <div class="image mr-3 align-self-center">
                    <img src="images/person_1.jpg" alt="">
                  </div> --}}
                  <div class="name align-self-center">{{ $review->name }}</div>
                </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>



{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
