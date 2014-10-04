@extends('layouts.main')

@section('content')

    <section id="product-main-banner">
          <div class="container">
            <div class="row">
                <div id="left-main-banner" class="col-xs-12 col-sm-5">
                    <div class="left-main-banner-wrapper">
                    <img class="lipzo-logo" src="{{asset("images/products/lipzo-logo.png")}}" alt="Lipzo logo">
                    <div class="crystal-love-section">
                       <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active">
                                <a href="#for-man" role="tab" data-toggle="tab">crystal love for man</a>
                            </li>
                            <li><a href="#for-girl" role="tab" data-toggle="tab">crystal love for girl</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane fade in active" id="for-man">
                            <ul>
                                <li>Đầu lông bàn chải ứng dụng <strong>công nghệ Blooming Floss</strong> với lớp bên trong gồm hàng triệu sợi lông chỉ tơ nha khoa mềm mại, đánh tan mảng bám, <strong>chải sạch hơn 200%</strong> lông bàn chải thông thường giúp răng chắc khoẻ và trắng sáng hơn.</li>

                                <li><strong>Lớp lông chỉ</strong> tơ bên ngoài được thiết kế dài hơn và mảnh hơn, nhẹ nhàng <strong>chải thật sạch các kẽ răng.</strong></li>

                                <li><strong>Công nghệ Nano Bạc</strong> cho phép điện phân các phân tử bạc thành các ion (Ag+) vô cùng nhỏ, thẩm thấu sâu vào lông bàn chải giúp <strong>kháng khuẩn, khử mùi và chống ẩm mốc</strong> trong quá trình sử dụng.</li>

                                <li><strong>Cán bàn chải hình tinh thể kim cương sang trọng,</strong> được làm từ nhựa nhập khẩu cao cấp tuyệt đối không bám bẩn và không ẩm mốc. Vị trí đặt tay tạo ma sát với đường vân nam tính.</li>

                                <li>Đầu bàn chải được thiết kế <strong>phù hợp với khuôn hàm nam giới.</strong></li>
                            </ul>
                           
                          </div>
                          <div class="tab-pane fade in " id="for-girl">
                            <ul>
                                <li>Đầu lông bàn chải ứng dụng <strong>công nghệ Blooming Floss</strong> với lớp bên trong gồm hàng triệu sợi lông chỉ tơ nha khoa mềm mại, đánh tan mảng bám, <strong>chải sạch hơn 200%</strong> lông bàn chải thông thường giúp răng chắc khoẻ và trắng sáng hơn.</li>

                                <li><strong>Lớp lông chỉ</strong> tơ bên ngoài được thiết kế dài hơn và mảnh hơn, nhẹ nhàng <strong>chải thật sạch các kẽ răng.</strong></li>

                                <li><strong>Công nghệ Nano Bạc</strong> cho phép điện phân các phân tử bạc (Ag+) thành các ion vô cùng nhỏ, thẩm thấu sâu vào lông bàn chải giúp <strong>kháng khuẩn, khử mùi và chống ẩm mốc</strong> trong quá trình sử dụng.</li>

                                <li><strong>Cán bàn chải hình tinh thể kim cương sang trọng,</strong> được làm từ nhựa nhập khẩu cao cấp. Vị trí đặt tay tạo ma sát với hình trái tim nữ tính.</li>

                                <li>Đầu bàn chải được thiết kế <strong>phù hợp với khuôn hàm nữ giới.</strong></li>
                            </ul>
                          </div>
                        </div>
                        <p class="description">Để nụ cười luôn bừng tỏa diệu kỳ, mời các bạn tìm hiểu thêm những dòng sản phẩm chăm sóc nụ cười khác từ Lipzo!</p>
                    </div><!--/#crystal-love-section-->
                    </div><!--/left-main-banner-wrapper-->
                </div><!--/#left-main-banner-->
               <div class="col-sm-7">
                    <div class="picture-section">
                       <img src="{{asset("images/products/product-banner-picture2.png")}}" class="picture2">
                       <img src="{{asset("images/products/small-star.png")}}" class="small-star">
                       <img src="{{asset("images/products/big-star.png")}}" class="big-star">
                       <img src="{{asset("images/products/product-banner-picture1.png")}}" class="picture1">
                    </div><!--/#picture-section-->
                </div>
            </div>    

          </div><!-- /.container -->

    </section><!--/#product-main-banner -->


    <section id="product-main-content">
        <div class="container hidden-xs">
            <div class="product-buttons">
               
                    <div class="row text-center">
                        <div class="col-xs-6 col-sm-4 col-md-4 nlrm nlrp">
                            <a data-scroll class="btn-custom btn-custom-product pro-for-man shadow" type="button" href="#pro-for-man">pro for man</a>
                        </div>
                        <div data-options='{"speed": 500,"easing": "easeOutQuart","offset": 0,"updateURL": false}' 
                            class="col-xs-6 col-sm-4 col-md-4 nlrm nlrp">
                            <a data-scroll class="btn-custom btn-custom-product ruby shadow" type="button" href="#ruby">ruby</a>                       
                        </div>
                        <div data-options='{"speed": 500,"easing": "easeOutQuart","offset": 0,"updateURL": false}' 
                            class="col-xs-6 col-sm-4 col-md-4 nlrm nlrp">
                            <a data-scroll class="btn-custom btn-custom-product wow shadow" type="button" href="#wow">wow</a>                       
                        </div>
                        <div data-options='{"speed": 500,"easing": "easeOutQuart","offset": 0,"updateURL": false}' 
                            class="col-xs-6 col-sm-4 col-md-4 nlrm nlrp">
                            <a data-scroll class="btn-custom btn-custom-product flex shadow" type="button" href="#flex">flex</a>                        
                        </div>
                        <div data-options='{"speed": 500,"easing": "easeOutQuart","offset": 0,"updateURL": false}'
                            class="col-xs-6 col-sm-4 col-md-4 nlrm nlrp">
                            <a data-scroll class="btn-custom  btn-custom-product kids2 shadow" type="button" href="#kids2">kids2</a>                       
                        </div>
                        <div data-options='{"speed": 500,"easing": "easeOutQuart","offset": 0,"updateURL": false}' 
                            class="col-xs-6 col-sm-4 col-md-4 nlrm nlrp">
                            <a data-scroll class="btn-custom btn-custom-product crystal-kids shadow" type="button" href="#crystal-kids">crystal kids</a>                       
                        </div>
                    </div>
            
            </div>
            
            <div class="product-section">

                <div id="pro-for-man" class="product-item" data-scroll-reveal>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">

                            <div data-scroll-reveal='enter bottom,after 0.1s' class="product-headline">
                                <ul>
                                    <li class="logo-red"><img src="{{asset("images/products/lipzo-logo-red.png")}}"></li>
                                    <li class="product-name"><img src="{{asset("images/products/pro-for-man-headline.png")}}"></li>
                                </ul>
                            </div><!--/.product-headline-->

                            <div data-scroll-reveal='enter bottom,after 0.3s' class="col-xs-12 col-sm-4">
                                <ul class="left-desc">
                                    <li>Lông bàn chải ứng dụng <strong>công nghệ Blooming Floss</strong> với lớp bên trong gồm hàng triệu sợi lông chỉ tơ nha khoa mềm mại, đánh tan mọi mảng bám và <strong>chải sạch hơn 250%</strong> lông bàn chải thông thường, đồng thời trám canxi cho bề mặt răng.</li>
                                    <li><strong>Lớp lông chỉ tơ bên ngoài</strong> được thiết kế dài hơn và mảnh hơn, nhẹ nhàng <strong>chải thật sạch các kẽ răng.</strong></li>
                                    <li><strong>Công nghệ Nano Bạc</strong> cho phép điện phân các phân tử bạc thành các ion vô cùng nhỏ (Ag+), thẩm thấu vào lông bàn chải giúp <strong>kháng khuẩn, khử mùi và chống ẩm mốc.</strong></li>
                                </ul>
                            </div><!--/.col-xs-12 col-sm-4-->

                            <div data-scroll-reveal='enter bottom,after 0.5s' class="col-xs-12 col-sm-4">
                                <ul class="right-desc">
                                    <li><strong>Cán bàn chải thiết kế nam tính, sang trọng,</strong> được sản xuất từ nhựa SAN nguyên sinh, vĩnh viễn không ẩm mốc. Vị trí đặt tay có độ sâu hõm xuống tạo sự chắc chắn khi cầm.</li>
                                    <li>Đầu bàn chải được thiết kế <strong>phù hợp với cấu tạo khuôn hàm nam giới.</strong></li>
                                </ul>
                            </div><!--/.col-xs-12 col-sm-4-->

                            <div data-scroll-reveal='enter bottom,after 0.7s' class="product-icons">
                                <ul>
                                    <li>
                                        <img src="{{asset("images/products/pro-for-man-icon1.png")}}">
                                        <p>Công nghệ Blooming Floss bung toả triệu sợi tơ mềm</p>
                                    </li>
                                    <li>
                                        <img src="{{asset("images/products/pro-for-man-icon2.png")}}">
                                        <p>Lớp lông chỉ tơ dài & mảnh chải sạch các kẽ răng</p>
                                    </li>
                                </ul>
                            </div><!--/.product-icons-->

                            <div data-scroll-reveal='enter bottom,after 0.9s' class="product-picture">
                                <img src="{{asset("images/products/pro-for-man-product.jpg")}}">
                            </div><!--/.product-picture-->

                        </div><!--/.col-xs-12 col-sm-12-->
                    </div><!--/.row-->
                    
                </div><!--/.pro-for-man-->
               
                <!-- ************************************ PRODUCT ITEM ********************************************** -->
                <!-- ***************************************** RUBY ************************************************* -->
               
                <div id="ruby" class="product-item" data-scroll-reveal>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">

                            <div data-scroll-reveal='enter bottom,after 0.1s' class="product-headline">
                                <ul>
                                    <li class="logo-red"><img src="{{asset("images/products/lipzo-logo-red.png")}}"></li>
                                    <li class="product-name"><img src="{{asset("images/products/ruby-headline.png")}}"></li>
                                </ul>
                            </div><!--/.product-headline-->

                            <div data-scroll-reveal='enter bottom,after 0.3s' class="col-xs-12 col-sm-4">
                                <ul class="left-desc">
                                    <li>Lông bàn chải ứng dụng <strong>công nghệ lông chỉ tơ nha khoa siêu mềm Dental Floss Technology,</strong> chải sạch thật nhẹ nhàng bề mặt răng và cả kẽ răng nhỏ nhất, đặc biệt thích hợp <strong>chăm sóc cho răng nhạy cảm.</strong></li>
                                    <li><strong>Công nghệ Nano Bạc</strong> cho phép điện phân các phân tử bạc thành các ion (Ag+) vô cùng nhỏ, thẩm thấu sâu vào lông bàn chải giúp <strong>kháng khuẩn, khử mùi và chống ẩm mốc</strong> trong quá trình sử dụng.</li>
                                </ul>
                            </div><!--/.col-xs-12 col-sm-4-->

                            <div data-scroll-reveal='enter bottom,after 0.5s' class="col-xs-12 col-sm-4">
                                <ul class="right-desc">
                                    <li><strong>Cán bàn chải</strong> được làm từ nhựa y tế nhập khẩu <strong>chống ẩm mốc và bám bẩn</strong> trong quá trình sử dụng.
</li>
                                    <li><strong>Cổ bàn chải được thiết kế với độ đàn hồi</strong> thích hợp, uốn cong nhẹ nhàng giúp hấp thụ lực thừa khi chải, tránh làm tổn thương nướu (lợi).</li>
                                </ul>
                            </div><!--/.col-xs-12 col-sm-4-->

                            <div data-scroll-reveal='enter bottom,after 0.7s' class="product-icons">
                                <ul>
                                    <li>
                                        <img src="{{asset("images/products/ruby-icon.png")}}" class="img-responsive">
                                        <p>Công nghệ Blooming Floss bung toả triệu sợi tơ mềm</p>
                                    </li>
                                </ul>
                            </div><!--/.product-icons-->

                            <div data-scroll-reveal='enter bottom,after 0.9s' class="product-picture">
                                <img src="{{asset("images/products/ruby-product.jpg")}}" class="img-responsive">
                            </div><!--/.product-picture-->

                        </div><!--/.col-xs-12 col-sm-12-->
                    </div><!--/.row-->
                    
                </div><!--/.ruby-->
              
                <!-- ************************************ PRODUCT ITEM ********************************************** -->
                <!-- ***************************************** WOW ************************************************* -->
            
                <div id="wow" class="product-item" data-scroll-reveal>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">

                            <div data-scroll-reveal='enter bottom,after 0.1s' class="product-headline">
                                <ul>
                                    <li class="logo-red"><img src="{{asset("images/products/lipzo-logo-red.png")}}"></li>
                                    <li class="product-name"><img src="{{asset("images/products/wow-headline.png")}}"></li>
                                </ul>
                            </div><!--/.product-headline-->

                            <div data-scroll-reveal='enter bottom,after 0.3s' class="col-xs-12 col-sm-4">
                                <ul class="left-desc">
                                    <li><strong>Lông bàn chải</strong> được làm từ <strong>chỉ tơ nha khoa hai lớp,</strong> chải sạch bề mặt răng và các kẽ răng hiệu quả gấp đôi bàn chải thông thường.</li>
                                    <li>Lớp lông chỉ tơ ngắn hơn nhẹ nhàng chải sạch bề mặt răng và đánh tan các mảng bám; lớp lông chỉ tơ dài hơn nhẹ nhàng len lỏi làm sạch các kẽ răng nhỏ nhất.</li>
                                    <li><strong>Cổ và thân bàn chải với thiết kế đàn hồi,</strong> có thể uốn cong linh hoạt, hấp thụ lực thừa khi chải, tránh làm tổn thương nướu (lợi).</li>
                                    <li>Đầu bàn chải với <strong>phần chà lưỡi êm ái</strong> giúp làm sạch toàn bộ khoan miệng cho cảm giác thật sảng khoái sau khi đánh răng.</li>
                                </ul>
                            </div><!--/.col-xs-12 col-sm-4-->

                            <div data-scroll-reveal='enter bottom,after 0.5s' class="product-icons">
                                <ul>
                                    <li>
                                        <img src="{{asset("images/products/wow-icon1.png")}}" class="img-responsive">
                                        <p>Lông bàn chải làm từ chỉ tơ nha khoa hai lớp chải sạch gấp đôi</p>
                                    </li>
                                    <li>
                                        <img src="{{asset("images/products/wow-icon2.png")}}" class="img-responsive">
                                    </li>
                                    <li>
                                        <img src="{{asset("images/products/wow-icon3.png")}}" class="img-responsive">
                                        <p>Phần chà lưỡi êm ái làm sạch toàn bộ khoang miệng</p>
                                    </li>
                                </ul>
                            </div><!--/.product-icons-->

                            <div data-scroll-reveal='enter bottom,after 0.7s' class="product-picture">
                                <img src="{{asset("images/products/wow-product.jpg")}}" class="img-responsive">
                            </div><!--/.product-picture-->

                        </div><!--/.col-xs-12 col-sm-12-->
                    </div><!--/.row-->
                    
                </div><!--/.wow-->
              
                <!-- ************************************ PRODUCT ITEM ********************************************** -->
                <!-- ***************************************** FLEX ************************************************* -->
               
                <div id="flex" class="product-item" data-scroll-reveal>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">

                            <div data-scroll-reveal='enter bottom,after 0.1s' class="product-headline">
                                <ul>
                                    <li class="logo-red"><img src="{{asset("images/products/lipzo-logo-red.png")}}"></li>
                                    <li class="product-name"><img src="{{asset("images/products/flex-headline.png")}}"></li>
                                </ul>
                            </div><!--/.product-headline-->

                            <div data-scroll-reveal='enter bottom,after 0.3s' class="col-xs-12 col-sm-4">
                                <ul class="left-desc">
                                    <li>Lông bàn chải được làm từ <strong>chỉ tơ nha khoa siêu bền</strong> chải sạch gấp 2 lần lông thông thường.</li>
                                    <li><strong>Đầu lông được mài cực tròn có độ đàn hồi cao, lâu bị toè,</strong> giúp chải sạch tận răng trong cùng và đánh tan các mảng bám mà lông bàn chải ni-lông thông thường không làm được.</li>
                                    <li><strong>Cổ bàn chải được thiết kế đàn hồi,</strong> uốn cong nhẹ nhàng giúp hấp thụ lực thừa khi chải, không làm tổn thương nướu (lợi).</li>
                                    <li><strong>Đầu bàn chải với phần chà lưỡi</strong> giúp làm sạch toàn bộ khoang miệng cho cảm giác thật sảng khoái sau khi đánh răng.</li>
                                </ul>
                            </div><!--/.col-xs-12 col-sm-4-->

                            <div data-scroll-reveal='enter bottom,after 0.5s' class="product-icons">
                                <ul>
                                    <li>
                                        <img src="{{asset("images/products/ruby-icon.png")}}" class="img-responsive">
                                        <p>Lông chỉ tơ nha khoa siêu bền</p>
                                    </li>
                                    <li>
                                        <img src="{{asset("images/products/flex-icon1.png")}}" class="img-responsive">
                                    </li>
                                    <li>
                                        <img src="{{asset("images/products/flex-icon2.png")}}" class="img-responsive">
                                        <p>Phần chà lưỡi làm sạch toàn bộ khoang miệng</p>
                                    </li>
                                </ul>
                            </div><!--/.product-icons-->

                            <div data-scroll-reveal='enter bottom,after 0.7s' class="product-picture">
                                <img src="{{asset("images/products/wow-product.jpg")}}">
                            </div><!--/.product-picture-->

                        </div><!--/.col-xs-12 col-sm-12-->
                    </div><!--/.row-->
                    
                </div><!--/.flex-->
               
                <!-- ************************************ PRODUCT ITEM ********************************************** -->
                <!-- ***************************************** KIDS2 ************************************************* -->
              
                <div id="kids2" class="product-item" data-scroll-reveal>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">

                            <div data-scroll-reveal='enter bottom,after 0.1s' class="product-headline">
                                <ul>
                                    <li class="logo-red"><img src="{{asset("images/products/lipzo-logo-red.png")}}"></li>
                                    <li class="product-name"><img src="{{asset("images/products/kids2-headline.png")}}"></li>
                                </ul>
                            </div><!--/.product-headline-->

                            <div data-scroll-reveal='enter bottom,after 0.3s' class="col-xs-12 col-sm-5">
                                <ul class="left-desc">
                                    <li><strong>Đầu lông bàn chải ứng dụng công nghệ lông chỉ tơ nha khoa siêu mềm Dental Floss Technology với độ mềm mại và độ dài thích hợp cho bé trên 5 tuổi</strong> (độ tuổi có cả răng sữa và răng vĩnh viễn), chải sạch thật nhẹ nhàng bề mặt răng và các kẽ răng nhỏ nhất.</li>
                                    <li><strong>Đầu lông siêu mềm,</strong> được thiết kế đặc biệt phù hợp với trẻ em trên 5 tuổi.</li>
                                </ul>
                            </div><!--/.col-xs-12 col-sm-4-->

                            <div data-scroll-reveal='enter bottom,after 0.5s' class="product-icons">
                                <ul>
                                    <li>
                                        <img src="{{asset("images/products/ruby-icon.png")}}" class="img-responsive">
                                        <p>Công nghệ Dental Floss cho lông bàn chải siêu mềm thích hợp nhất cho bé yêu</p>
                                    </li>
                                </ul>
                            </div><!--/.product-icons-->

                            <div data-scroll-reveal='enter bottom,after 0.7s' class="product-picture">
                                <img src="{{asset("images/products/kids2-product.jpg")}}" class="img-responsive">
                            </div><!--/.product-picture-->

                        </div><!--/.col-xs-12 col-sm-12-->
                    </div><!--/.row-->
                    
                </div><!--/.kids2-->
          

                <!-- ************************************ PRODUCT ITEM ********************************************** -->
                <!-- ***************************************** CRYSTAL-KIDS ************************************************* -->

                <div id="crystal-kids" class="product-item" data-scroll-reveal>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">

                            <div data-scroll-reveal='enter bottom,after 0.1s' class="product-headline">
                                <ul>
                                    <li class="logo-red"><img src="{{asset("images/products/lipzo-logo-red.png")}}"></li>
                                    <li class="product-name"><img src="{{asset("images/products/crystal-kids-headline.png")}}"></li>
                                </ul>
                            </div><!--/.product-headline-->

                            <div data-scroll-reveal='enter bottom,after 0.3s' class="col-xs-12 col-sm-4">
                                <ul class="left-desc">
                                    <li>Đầu lông bàn chải ứng dụng <strong>công nghệ lông chỉ tơ nha khoa siêu mềm Dental Floss Technology</strong> với độ mềm mại và độ dài <strong>thích hợp cho răng sữa của bé yêu,</strong> chải sạch thật nhẹ nhàng cả mảng bám sữa và thực phẩm thừa trên bề mặt răng và các kẽ răng nhỏ nhất.</li>
                                    <li><strong>Đầu lông siêu mềm,</strong> được thiết kế đặc biệt <strong>phù hợp với trẻ 2 đến 5 tuổi.</strong></li>
                                    <li><strong>Công nghệ Nano Bạc</strong> cho phép điện phân các phân tử bạc thành các ion vô cùng nhỏ, thẩm thấu sâu vào lông bàn chải giúp <strong>kháng khuẩn, khử mùi và chống ẩm mốc</strong> trong quá trình sử dụng, <strong>an toàn hơn cho sức khoẻ của bé yêu.</strong></li>                        
                                </ul>
                            </div><!--/.col-xs-12 col-sm-4-->

                            <div data-scroll-reveal='enter bottom,after 0.5s' class="col-xs-12 col-sm-4">
                                <ul class="right-desc">
                                    <li><strong>Cán bàn chải trong suốt hình tinh thể tim cương</strong> độc đáo, bắt mắt và chống trơn trượt, đặc biệt được làm từ nhựa y tế nhập khẩu chống ẩm mốc và bám bẩn trong quá trình sử dụng.
</li>
                                    <li><strong>Đầu bàn chải thon nhỏ</strong> phù hợp với hàm răng trẻ em từ 2 đến 5 tuổi.</li>
                                </ul>
                            </div><!--/.col-xs-12 col-sm-4-->

                            <div data-scroll-reveal='enter bottom,after 0.7s' class="product-icons">
                                <ul>
                                    <li>
                                        <img src="{{asset("images/products/ruby-icon.png")}}" class="img-responsive">
                                        <p>Công nghệ Dental Floss cho lông bàn chải siêu mềm thích hợp nhất cho bé yêu</p>
                                    </li>
                                </ul>
                            </div><!--/.product-icons-->

                            <div data-scroll-reveal='enter bottom,after 0.9s' class="product-picture">
                                <img src="{{asset("images/products/crystal-kids-product.jpg")}}" class="img-responsive">
                            </div><!--/.product-picture-->

                        </div><!--/.col-xs-12 col-sm-12-->
                    </div><!--/.row-->
                    
                </div><!--/.crystal-kids-->


            </div><!--/.product-section-->
                         
        </div><!--/.container-->
    </section><!--/#product-main-content-->

    <!--******************************************************************************************************
    **********************************************************************************************************
    **********************************************************************************************************
    **************************************************** ON MOBILE *******************************************
    **********************************************************************************************************
    **********************************************************************************************************
    **********************************************************************************************************-->

    <section id="product-main-content">
        <div class="container visible-xs hidden-sm hidden-md hidden-lg">
            <div class="product-buttons text-center">
               <div class="tabs">
                                   
                        <a data-scroll class="active btn-custom btn-custom-product pro-for-man shadow" type="button" href="#product-swiper">pro for man</a>
                       
                        <a data-scroll class="btn-custom btn-custom-product ruby shadow" type="button" href="#product-swiper">ruby</a>                       
                  
                        <a data-scroll class="btn-custom btn-custom-product wow shadow" type="button" href="#product-swiper">wow</a>                       
                       
                        <a data-scroll class="btn-custom btn-custom-product flex shadow" type="button" href="#product-swiper">flex</a>

                        <a data-scroll class="btn-custom  btn-custom-product kids2 shadow" type="button" href="#product-swiper">kids2</a>                       
                       
                        <a data-scroll class="btn-custom btn-custom-product crystal-kids shadow" type="button" href="#product-swiper">crystal kids</a>

                </div>
            </div>
            
            <div id="product-swiper" class="product-section">
               <div class="swiper-container">
               <div class="swiper-wrapper">

                <div class="swiper-slide">
                <div class="content-slide">

                <div id="pro-for-man" class="m-product-item">
                    <div class="row text-center">
      
                                <div class="product-headline text-left">
                                    <ul>
                                        <li class="logo-red"><img src="{{asset("images/products/lipzo-logo-red.png")}}"></li>
                                        <li class="product-name"><img src="{{asset("images/products/pro-for-man-headline.png")}}"></li>
                                    </ul>
                                </div><!--/.product-headline-->  
                                            
                                <div class="product-icons">
                                    <ul>
                                        <li>
                                            <img src="{{asset("images/products/pro-for-man-icon1.png")}}" class="img-responsive">
                                            <p>Công nghệ Blooming Floss bung toả triệu sợi tơ mềm</p>
                                        </li>
                                        <li>
                                            <img src="{{asset("images/products/pro-for-man-icon2.png")}}" class="img-responsive">
                                            <p>Lớp lông chỉ tơ dài & mảnh chải sạch các kẽ răng</p>
                                        </li>
                                    </ul>
                                </div><!--/.product-icons-->
                         

                          
                                <div class="product-picture">
                                    <img src="{{asset("images/products/pro-for-man-product.jpg")}}" class="img-responsive">
                                </div><!--/.product-picture-->
                                           
                                <ul class="desc">
                                    <li>Lông bàn chải ứng dụng <strong>công nghệ Blooming Floss</strong> với lớp bên trong gồm hàng triệu sợi lông chỉ tơ nha khoa mềm mại, đánh tan mọi mảng bám và <strong>chải sạch hơn 250%</strong> lông bàn chải thông thường, đồng thời trám canxi cho bề mặt răng.</li>
                                    <li><strong>Lớp lông chỉ tơ bên ngoài</strong> được thiết kế dài hơn và mảnh hơn, nhẹ nhàng <strong>chải thật sạch các kẽ răng.</strong></li>
                                    <li><strong>Công nghệ Nano Bạc</strong> cho phép điện phân các phân tử bạc thành các ion vô cùng nhỏ (Ag+), thẩm thấu vào lông bàn chải giúp <strong>kháng khuẩn, khử mùi và chống ẩm mốc.</strong></li>
                                     <li><strong>Cán bàn chải thiết kế nam tính, sang trọng,</strong> được sản xuất từ nhựa SAN nguyên sinh, vĩnh viễn không ẩm mốc. Vị trí đặt tay có độ sâu hõm xuống tạo sự chắc chắn khi cầm. </li>
                                    <li>Đầu bàn chải được thiết kế <strong>phù hợp với cấu tạo khuôn hàm nam giới.</strong></li>
                                </ul>
                      
                    </div><!--/.row-->
                    
                </div><!--/.pro-for-man-->
                </div><!--/.content-slide-->
                </div><!--/.swiper-slide-->
                <!-- ************************************ PRODUCT ITEM ********************************************** -->
                <!-- ***************************************** RUBY ************************************************* -->
                <div class="swiper-slide">
                <div class="content-slide">
                <div id="ruby" class="m-product-item">
                    <div class="row text-center">

                            <div  class="product-headline text-left">
                                <ul>
                                    <li class="logo-red"><img src="{{asset("images/products/lipzo-logo-red.png")}}"></li>
                                    <li class="product-name"><img src="{{asset("images/products/ruby-headline.png")}}"></li>
                                </ul>
                            </div><!--/.product-headline-->

                            <div class="product-icons">
                                <ul>
                                    <li>
                                        <img src="{{asset("images/products/ruby-icon.png")}}" class="img-responsive">
                                        <p>Công nghệ Blooming Floss bung toả triệu sợi tơ mềm</p>
                                    </li>
                                </ul>
                            </div><!--/.product-icons-->

                            <div  class="product-picture">
                                <img src="{{asset("images/products/ruby-product.jpg")}}" class="img-responsive">
                            </div><!--/.product-picture-->

                            <div>
                                <ul class="desc">
                                    <li>Lông bàn chải ứng dụng <strong>công nghệ lông chỉ tơ nha khoa siêu mềm Dental Floss Technology,</strong> chải sạch thật nhẹ nhàng bề mặt răng và cả kẽ răng nhỏ nhất, đặc biệt thích hợp <strong>chăm sóc cho răng nhạy cảm.</strong></li>
                                    <li><strong>Công nghệ Nano Bạc</strong> cho phép điện phân các phân tử bạc thành các ion (Ag+) vô cùng nhỏ, thẩm thấu sâu vào lông bàn chải giúp <strong>kháng khuẩn, khử mùi và chống ẩm mốc</strong> trong quá trình sử dụng.</li>
                                     <li><strong>Cán bàn chải</strong> được làm từ nhựa y tế nhập khẩu <strong>chống ẩm mốc và bám bẩn</strong> trong quá trình sử dụng. 
</li>
                                    <li><strong>Cổ bàn chải được thiết kế với độ đàn hồi</strong> thích hợp, uốn cong nhẹ nhàng giúp hấp thụ lực thừa khi chải, tránh làm tổn thương nướu (lợi).</li>
                                </ul>
                            </div>

                      
                    </div><!--/.row-->
                    
                </div><!--/.ruby-->
                </div>
                </div>
                <!-- ************************************ PRODUCT ITEM ********************************************** -->
                <!-- ***************************************** WOW ************************************************* -->
                <div class="swiper-slide">
                <div class="content-slide">
                <div id="wow" class="m-product-item">
                    <div class="row text-center">

                            <div class="product-headline text-left">
                                <ul>
                                    <li class="logo-red"><img src="{{asset("images/products/lipzo-logo-red.png")}}"></li>
                                    <li class="product-name"><img src="{{asset("images/products/wow-headline.png")}}"></li>
                                </ul>
                            </div><!--/.product-headline-->

                            <div  class="product-icons">
                                <ul>
                                    <li>
                                        <img src="{{asset("images/products/wow-icon1.png")}}" class="img-responsive">
                                        <p>Lông bàn chải làm từ chỉ tơ nha khoa hai lớp chải sạch gấp đôi</p>
                                    </li>
                                    <li>
                                        <img src="{{asset("images/products/wow-icon2.png")}}" class="img-responsive">
                                    </li>
                                    <li>
                                        <img src="{{asset("images/products/wow-icon3.png")}}" class="img-responsive">
                                        <p>Phần chà lưỡi êm ái làm sạch toàn bộ khoang miệng</p>
                                    </li>
                                </ul>
                            </div><!--/.product-icons-->

                            <div class="product-picture">
                                <img src="{{asset("images/products/wow-product.jpg")}}" class="img-responsive">
                            </div><!--/.product-picture-->

                            <div>
                                <ul class="desc">
                                    <li><strong>Lông bàn chải</strong> được làm từ <strong>chỉ tơ nha khoa hai lớp,</strong> chải sạch bề mặt răng và các kẽ răng hiệu quả gấp đôi bàn chải thông thường.</li>
                                    <li>Lớp lông chỉ tơ ngắn hơn nhẹ nhàng chải sạch bề mặt răng và đánh tan các mảng bám; lớp lông chỉ tơ dài hơn nhẹ nhàng len lỏi làm sạch các kẽ răng nhỏ nhất. </li>
                                    <li><strong>Cổ và thân bàn chải với thiết kế đàn hồi,</strong> có thể uốn cong linh hoạt, hấp thụ lực thừa khi chải, tránh làm tổn thương nướu (lợi).</li>
                                    <li>Đầu bàn chải với <strong>phần chà lưỡi êm ái</strong> giúp làm sạch toàn bộ khoan miệng cho cảm giác thật sảng khoái sau khi đánh răng.</li>
                                </ul>
                            </div>


                    </div><!--/.row-->
                    
                </div><!--/.wow-->
                </div>
                </div>
                <!-- ************************************ PRODUCT ITEM ********************************************** -->
                <!-- ***************************************** FLEX ************************************************* -->
                <div class="swiper-slide">
                <div class="content-slide">
                <div id="flex" class="m-product-item" >
                    <div class="row text-center">

                            <div  class="product-headline text-left">
                                <ul>
                                    <li class="logo-red"><img src="{{asset("images/products/lipzo-logo-red.png")}}"></li>
                                    <li class="product-name"><img src="{{asset("images/products/flex-headline.png")}}"></li>
                                </ul>
                            </div><!--/.product-headline-->

                            <div class="product-icons">
                                <ul>
                                    <li>
                                        <img src="{{asset("images/products/ruby-icon.png")}}" class="img-responsive">
                                        <p>Lông chỉ tơ nha khoa siêu bền</p>
                                    </li>
                                    <li>
                                        <img src="{{asset("images/products/flex-icon1.png")}}" class="img-responsive">
                                    </li>
                                    <li>
                                        <img src="{{asset("images/products/flex-icon2.png")}}" class="img-responsive">
                                        <p>Phần chà lưỡi làm sạch toàn bộ khoang miệng</p>
                                    </li>
                                </ul>
                            </div><!--/.product-icons-->

                            <div class="product-picture">
                                <img src="{{asset("images/products/wow-product.jpg")}}" class="img-responsive">
                            </div><!--/.product-picture-->

                            <div>
                                <ul class="desc">
                                    <li>Lông bàn chải được làm từ <strong>chỉ tơ nha khoa siêu bền</strong> chải sạch gấp 2 lần lông thông thường.</li>
                                    <li><strong>Đầu lông được mài cực tròn có độ đàn hồi cao, lâu bị toè,</strong> giúp chải sạch tận răng trong cùng và đánh tan các mảng bám mà lông bàn chải ni-lông thông thường không làm được.</li>
                                    <li><strong>Cổ bàn chải được thiết kế đàn hồi,</strong> uốn cong nhẹ nhàng giúp hấp thụ lực thừa khi chải, không làm tổn thương nướu (lợi). </li>
                                    <li><strong>Đầu bàn chải với phần chà lưỡi</strong> giúp làm sạch toàn bộ khoang miệng cho cảm giác thật sảng khoái sau khi đánh răng.</li>
                                </ul>
                            </div>

                    </div><!--/.row-->
                    
                </div><!--/.flex-->
                </div>
                </div>
                <!-- ************************************ PRODUCT ITEM ********************************************** -->
                <!-- ***************************************** KIDS2 ************************************************* -->
                <div class="swiper-slide">
                <div class="content-slide">
                <div id="kids2" class="m-product-item">
                    <div class="row text-center">

                            <div class="product-headline text-left">
                                <ul>
                                    <li class="logo-red"><img src="{{asset("images/products/lipzo-logo-red.png")}}"></li>
                                    <li class="product-name"><img src="{{asset("images/products/kids2-headline.png")}}"></li>
                                </ul>
                            </div><!--/.product-headline-->                          

                            <div class="product-icons">
                                <ul>
                                    <li>
                                        <img src="{{asset("images/products/ruby-icon.png")}}" class="img-responsive">
                                        <p>Công nghệ Dental Floss cho lông bàn chải siêu mềm thích hợp nhất cho bé yêu</p>
                                    </li>
                                </ul>
                            </div><!--/.product-icons-->

                            <div class="product-picture">
                                <img src="{{asset("images/products/kids2-product.jpg")}}" class="img-responsive">
                            </div><!--/.product-picture-->

                            <div>
                                <ul class="desc">
                                    <li><strong>Đầu lông bàn chải ứng dụng công nghệ lông chỉ tơ nha khoa siêu mềm Dental Floss Technology với độ mềm mại và độ dài thích hợp cho bé trên 5 tuổi</strong> (độ tuổi có cả răng sữa và răng vĩnh viễn), chải sạch thật nhẹ nhàng bề mặt răng và các kẽ răng nhỏ nhất. </li>
                                    <li><strong>Đầu lông siêu mềm,</strong> được thiết kế đặc biệt phù hợp với trẻ em trên 5 tuổi.</li>
                                </ul>
                            </div>

                    </div><!--/.row-->
                    
                </div><!--/.kids2-->
                </div>
                </div>

                <!-- ************************************ PRODUCT ITEM ********************************************** -->
                <!-- ***************************************** CRYSTAL-KIDS ************************************************* -->
                <div class="swiper-slide">
                <div class="content-slide">
                <div id="crystal-kids" class="m-product-item" >
                    <div class="row text-center">
                      
                            <div class="product-headline text-left">
                                <ul>
                                    <li class="logo-red"><img src="{{asset("images/products/lipzo-logo-red.png")}}"></li>
                                    <li class="product-name"><img src="{{asset("images/products/crystal-kids-headline.png")}}"></li>
                                </ul>
                            </div><!--/.product-headline-->                           

                            <div class="product-icons">
                                <ul>
                                    <li>
                                        <img src="{{asset("images/products/ruby-icon.png")}}" class="img-responsive">
                                        <p>Công nghệ Dental Floss cho lông bàn chải siêu mềm thích hợp nhất cho bé yêu</p>
                                    </li>
                                </ul>
                            </div><!--/.product-icons-->

                            <div class="product-picture">
                                <img src="{{asset("images/products/crystal-kids-product.jpg")}}" class="img-responsive">
                            </div><!--/.product-picture-->

                             <div>
                                <ul class="desc">
                                    <li>Đầu lông bàn chải ứng dụng <strong>công nghệ lông chỉ tơ nha khoa siêu mềm Dental Floss Technology</strong> với độ mềm mại và độ dài <strong>thích hợp cho răng sữa của bé yêu,</strong> chải sạch thật nhẹ nhàng cả mảng bám sữa và thực phẩm thừa trên bề mặt răng và các kẽ răng nhỏ nhất. </li>
                                    <li><strong>Đầu lông siêu mềm,</strong> được thiết kế đặc biệt <strong>phù hợp với trẻ 2 đến 5 tuổi.</strong></li>
                                    <li><strong>Công nghệ Nano Bạc</strong> cho phép điện phân các phân tử bạc thành các ion vô cùng nhỏ, thẩm thấu sâu vào lông bàn chải giúp <strong>kháng khuẩn, khử mùi và chống ẩm mốc</strong> trong quá trình sử dụng, <strong>an toàn hơn cho sức khoẻ của bé yêu.</strong></li> 
                                     <li><strong>Cán bàn chải trong suốt hình tinh thể tim cương</strong> độc đáo, bắt mắt và chống trơn trượt, đặc biệt được làm từ nhựa y tế nhập khẩu chống ẩm mốc và bám bẩn trong quá trình sử dụng. 
</li>
                                    <li><strong>Đầu bàn chải thon nhỏ</strong> phù hợp với hàm răng trẻ em từ 2 đến 5 tuổi.</li>                       
                                </ul>
                            </div>

                    </div><!--/.row-->
                    
                </div><!--/.crystal-kids-->
                </div>
                </div>


                </div><!--/.swipe-wrapper-->
                </div><!--/.swipe-container-->
            </div><!--/.product-section-->
                         
        </div><!--/.container-->
    </section><!--/#product-main-content-->
@stop