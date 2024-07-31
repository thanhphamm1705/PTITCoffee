@extends('layouts.app')

@section('content')

<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url({{ asset('assets/images/background3.jpg') }});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">LIÊN HỆ</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Liên hệ</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container mt-5">
      <div class="row block-9">
                  <div class="col-md-4 text-white contact-info ftco-animate">
                      <div class="row">
                          <div class="col-md-12 mb-4">
                <h2 class="h4">Thông tin liên hệ</h2>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Địa chỉ:</span> Số 10 Trần Phú, Tầng 1, tòa A1</p>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>SĐT:</span> <a href="tel://1234567920">0366456789</a></p>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Email:</span> <a href="mailto:info@yoursite.com">ptitcoffee@gmail.com</a></p>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Website:</span> <a href="#">PTITCoffee.com</a></p>
              </div>
                      </div>
                  </div>
                  <div class="col-md-1"></div>
        <div class="col-md-6 ftco-animate">
          <form action="#" class="contact-form">
              <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tên bạn">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email bạn">
                  </div>
                  </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Chủ đề">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Tin nhắn"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Gửi tin nhắn" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
