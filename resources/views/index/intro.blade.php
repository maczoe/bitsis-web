<!-- slider Area Start-->
<div class="slider-area  slider-height" data-background="{{asset('public/assets/img/hero/h1_hero.jpg')}}">
    <div class="slider-active">
        @foreach($slides as $slide)
        <!-- Single Slider -->
        <div class="single-slider">
            <div class="slider-cap-wrapper">
                  <div class="hero__img">
                    <img src="{{ $slide->image }}" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
                  </div>
                  <div class="hero__caption">
                      <h1 data-animation="fadeInLeft" data-delay=".4s">{!! $slide->title !!}</h1>
                      <p data-animation="fadeInLeft" data-delay=".6s">{!! $slide->description !!}</p>
                      <!-- Hero Btn -->
                    |      <a href="{{ $slide->link}}" class="hero-btn"  data-animation="fadeInLeft" data-delay=".9s" >
                          Conocer más
                          <!-- Arrow SVG icon -->
                          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                          viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                         <path d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068
                                 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557
                                 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104
                                 c0.006-0.006,0.011-0.013,0.018-0.019C513.968,262.339,513.943,249.635,506.134,241.843z"/> </svg>
                     </a>
                  </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- slider Area End-->