<!-- End of Icon Box Wrapper -->
<div class="row category-wrapper cols-lg-3 cols-sm-2 appear-animate mb-8 fadeIn appear-animation-visible"
    style="animation-duration: 1.2s; ">

    @foreach (\App\Models\Category::where('is_featured',1)->get() as $category)

    <!-- End of Category Wrap -->
    <div class="category-wrap mb-4">
        <div class="category category-group-image br-sm">
            <div class="category-content">
                <h4 class="category-name"><a href="{{url('category/'.$category->id)}}">
                        {{$category->getTranslatedAttribute('name',current_locale())}}
                    </a>
                </h4>
                <ul class="category-list">

                    @foreach ($category->children as $sub_cat)
                    <li><a
                            href="{{url('category/'.$sub_cat->id)}}">{{$sub_cat->getTranslatedAttribute('name',current_locale())}}</a>
                    </li>
                    @endforeach

                </ul>
            </div>
            <a href="{{url('category/'.$category->id)}}">
                <figure class="category-media">
                    <img src="{{url('storage/'.$category->image)}}" alt="Category" width="190" height="214">
                </figure>
            </a>
        </div>
    </div>

    @endforeach

    <!-- End of Category Wrap -->
</div>