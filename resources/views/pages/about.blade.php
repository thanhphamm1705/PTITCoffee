@extends('layouts.app')

@section('content')
<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url({{ asset('assets/images/background3.jpg') }});">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">VỀ CHÚNG TÔI</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Về chúng tôi</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-about d-md-flex">
      <div class="one-half img" style="background-image: url({{ asset('assets/images/ptitbackground2.jpg') }});"></div>
      <div class="one-half ftco-animate">
          <div class="overlap">
          <div class="heading-section ftco-animate ">
              <span class="subheading">Khám Pha</span>
            <h2 class="mb-4">Câu chuyện chúng tôi</h2>
          </div>
          <div>
                    <p>Một nhóm bạn nhiệt huyết và trẻ trung đã quyết định cùng nhau mở quán cà phê trong khuôn viên trường Đại học Bưu chính Viễn thông để phục vụ nhu cầu tự học, học nhóm cho sinh viên trong và ngoài trường. . Không chỉ có không gian lý tưởng mà chúng tôi còn cung cấp những tài liệu học tập hữu ích với giá cả phải chăng. Liệu tuổi trẻ và sự sáng tạo có thể đáp ứng được nhu cầu của bạn? Hãy cho chúng tôi biết!</p>
                </div>
            </div>
      </div>
  </section>

  <section class="ftco-section img" id="ftco-testimony" style="background-image: url({{ asset('assets/images/ptit_background.jpg') }});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
              <span class="subheading">Đánh Giá</span>
            <h2 class="mb-4">Feedback</h2>
            </div>
        </div>
      </div>
      <div class="container-wrap">
        <div class="row d-flex no-gutters">
          <div class="col-lg align-self-sm-end">
            <div class="testimony">
               <blockquote>
                  <p>&ldquo;Đồ uống ở đây ngon lại còn hạt dẻ chứ. Chưa biết đi healing chữa lành ở đâu thì về P-Coffee nhaaaa ❤️
                    &rdquo;</p>
                </blockquote>
                <div class="author d-flex mt-4">
                  <div class="image mr-3 align-self-center">
                    <img src="images/person_1.jpg" alt="">
                  </div>
                  <div class="name align-self-center">Nguyễn Anh Đức <span class="position">Sinh viên</span></div>
                </div>
            </div>
          </div>
          <div class="col-lg align-self-sm-end">
            <div class="testimony overlay">
               <blockquote>
                  <p>&ldquo;Không gian rộng, thoáng với tone màu vàng be, thiết kế không quá cầu kỳ nhưng mang lại cảm giác thoải mái, gần gũi. Quán rất thoáng mát dễ chịu. Dù học tập, làm việc hay tụ tập bạn bè đều okela.&rdquo;</p>
                </blockquote>
                <div class="author d-flex mt-4">
                  <div class="image mr-3 align-self-center">
                    <img src="images/person_2.jpg" alt="">
                  </div>
                  <div class="name align-self-center">Nguyễn Bá Dương <span class="position">Sinh viên</span></div>
                </div>
            </div>
          </div>
          <div class="col-lg align-self-sm-end">
            <div class="testimony">
               <blockquote>
                  <p>&ldquo;Mình thật sự rất ấn tượng với P-Coffe vì đây là quán café siêu đầu tư décor theo từng mùa mà mình biết, mỗi lần ghé quán là một concept khác nhau, vibe lần này mang vẻ ngoài khá ấm cúng của sắc vàng, không gian trong nhà thì nhẹ nhàng siu thơ. &rdquo;</p>
                </blockquote>
                <div class="author d-flex mt-4">
                  <div class="image mr-3 align-self-center">
                    <img src="images/person_3.jpg" alt="">
                  </div>
                  <div class="name align-self-center">Lê Vũ Hoàng <span class="position">Sinh viên</span></div>
                </div>
            </div>
          </div>
          <div class="col-lg align-self-sm-end">
            <div class="testimony overlay">
               <blockquote>
                  <p>&ldquo; Quán có cả Whey cho mình tập gym những ngày mình không kịp pha, rất chất lượng và thơm ngon. Mình sẽ ghé thăm quán thường xuyên
                    &rdquo;</p>
                </blockquote>
                <div class="author d-flex mt-4">
                  <div class="image mr-3 align-self-center">
                    <img src="images/person_2.jpg" alt="">
                  </div>
                  <div class="name align-self-center">Trần Vũ Tuấn Minh <span class="position">Sinh viên</span></div>
                </div>
            </div>
          </div>
          <div class="col-lg align-self-sm-end">
            <div class="testimony">
              <blockquote>
                <p>&ldquo;✅ Không gian xanh thư giãn<br>
                    ✅ Nhạc hay, quán thơm<br>
                    ✅ Đồ ăn ngon mà giá hợp lý bất ngờ<br>
                    ✅ Góc ban công cực chill
                     &rdquo;</p>
              </blockquote>
              <div class="author d-flex mt-4">
                <div class="image mr-3 align-self-center">
                  <img src="images/person_3.jpg" alt="">
                </div>
                <div class="name align-self-center">Sơn Tùng MTP <span class="position">Ca sĩ</span></div>
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
                <span class="subheading">Khám Phá</span>
              <h2 class="mb-4">MENU CỦA CHÚNG MÌNH</h2>
              <p class="mb-4">Menu đồ uống của P-coffee khá đa dạng, để đánh giá thì nói ngắn gọn 1 từ thôi: NGON. Đợt này qua quán mình có thử trà sữa shan tuyết cổ thụ, vị trà đậm, thơm bé, ngọt vừa và không hề ngấy. Nghe nói trà shan tuyết là loại trà cao cấp của Tây Bắc, chắc vì thế nên hương vị trà sữa Shan tuyết của P-Coffee mang lại cũng đặc biệt hơn những nơi khác. Topping của quán có thêm chân châu nhài và hạt năng nổ, không điêu chút nào khi khen là toping của quán cũng ngon luôn các bác ạ. Recommend mọi người nên thử dòng trà sữa mới này và mix thêm topping nha.</p>
              <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Xem toàn bộ menu</a></p>
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
                        <strong class="number" data-number="2">2</strong>
                        <span>Chi nhánh</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                        <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                        <strong class="number" data-number="10">10</strong>
                        <span>Giải thưởng</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                        <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                        <strong class="number" data-number="10567">10,567</strong>
                        <span>Đánh giá tích cực</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                        <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                        <strong class="number" data-number="15">15</strong>
                        <span>Nhân viên</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
  </section>
@endsection
