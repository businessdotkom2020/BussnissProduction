<div class="owl-carousel owl-theme row cols-md-4 cols-sm-3 cols-1 icon-box-wrapper appear-animate br-sm mt-6 mb-10 appear-animate"
    data-owl-options="{
            'nav': false,
            'dots': false,
            'loop': true,
            'autoplay': true,
            'autoplayTimeout': 4000,
            'responsive': {
                '0': {
                    'items': 1
                },
                '576': {
                    'items': 2
                },
                '768': {
                    'items': 3
                },
                '992': {
                    'items': 3
                },
                '1200': {
                    'items': 4
                }
            }
        }">

    @foreach (\App\Models\Feature::get() as $featuer_slider)

    <div class="icon-box icon-box-side text-dark icon-box-chat">
        <span class="icon-box-icon icon-chat">
            <i class="w-icon-chat"></i>
        </span>
        <div class="icon-box-content">
            <h4 class="icon-box-title">{{$featuer_slider->title}}</h4>
            <p class="text-default">{{$featuer_slider->body}}</p>
        </div>
    </div>
    @endforeach


</div>