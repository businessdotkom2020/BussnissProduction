<div class="owl-carousel owl-theme owl-dot-inner animation-slider row cols-1 gutter-no" data-owl-options="{
'nav': false,
'dots': true
}">
    @foreach (\App\Models\HomeSlider::get() as $slider)

    <div class="banner banner-fixed intro-slide intro-slide1 br-sm"
        style="background-image: url({{$slider->image_url}}); background-color: #E8EAEF;">
        <a href="{{url('/')}}"></a>
    </div>
    @endforeach

    <!-- End of Intro Slide 3 -->
</div>