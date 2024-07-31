@extends('layouts.app')

@section('content')

<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url({{ asset('assets/images/background4.jpg') }});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">GIỎ HÀNG CỦA TÔI</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Giỏ hàng của tôi</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
        <div class="col-md-12 ftco-animate">
            <div class="cart-list">
                <table class="table-dark" style="width: 100%">
                    <thead style="background-color: #c49b63; height: 60px">
                      <tr class="text-center">
                        <th>Họ</th>
                        <th>Tên</th>
                        <th>Thành phố</th>
                        <th>Email</th>
                        <th>Giá</th>
                        <th>Trạng thái</th>
                        <th>Viết REVIEW cho chúng mình</th>
                      </tr>
                    </thead>
                    <tbody>

                      @if($orders->count() > 0)
                          @foreach($orders as $order)
                          <tr class="text-center" style="height: 140px">
                              <td class="product-remove">{{ $order->first_name }}</td>

                              <td class="image-prod">{{ $order->last_name }}</td>

                              <td class="price">{{ $order->city }}</td>

                              <td>
                                {{ $order->email }}
                              </td>

                              <td class="total">{{ $order->price }}</td>
                              <td class="total">{{ $order->status }}</td>
                              <td class="total">
                                @if($order->status == "Delivered")
                                  <a class="btn btn-primary" href="{{ route('write.reviews') }}">Viết REVIEW cho chúng mình</a>
                                @else
                                  <p>Không có sẵn</p>
                                  @endif
                                </td>
                          </tr><!-- END TR-->
                          @endforeach
                      @else

                          <p class="alert alert-success">Bạn chưa order</p>
                      @endif

                    </tbody>
                  </table>
              </div>
        </div>
    </div>
    </div>
</section>
@endsection
