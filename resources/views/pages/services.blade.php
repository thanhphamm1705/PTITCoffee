@extends('layouts.app')

@section('content')

<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url({{ asset('assets/images/background3.jpg') }});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">DỊCH VỤ</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang Chủ</a></span> <span>Dịch Vụ</span></p>
          </div>

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
              <h3 class="heading">Dễ dàng đặt hàng</h3>
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
              <h3 class="heading">Giao hàng nhanh nhất</h3>
              <p>10 phút trong khuôn viên trường, 15 phút đến ngõ Ao Sen, Xa hơn thì tùy vào địa điểm lấy hàng</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="media d-block text-center block-6 services">
            <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-coffee-bean"></span></div>
            <div class="media-body">
              <h3 class="heading">Cà phê chất lượng</h3>
              <p>Không chỉ giúp bạn tỉnh táo qua những giờ học triết mà còn giúp bạn giải toán, code hiệu quả hơn</p>
            </div>
          </div>
        </div>
      </div>
      </div>
  </section>

@endsection
