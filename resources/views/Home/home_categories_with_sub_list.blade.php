<!-- End of Icon Box Wrapper -->
<div class="row category-wrapper cols-lg-3 cols-sm-2 appear-animate mb-8 fadeIn appear-animation-visible"
    style="animation-duration: 1.2s; ">

    @foreach (\App\Models\Category::where('in_sidebar',1)->get() as $category)

    <!-- End of Category Wrap -->
    <div class="category-wrap mb-4">
        <div class="category category-group-image br-sm">
            <div class="category-content">
                <h4 class="category-name"><a href="#">Jewelry &amp; Watch</a>
                </h4>
                <ul class="category-list">
                    <li><a href="#">Pendant</a></li>
                    <li><a href="#">Necklace</a></li>
                    <li><a href="#">Watch</a></li>
                    <li><a href="#">Bracelets</a></li>
                    <li><a href="#">Smart Watches</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul>
            </div>
            <a href="#">
                <figure class="category-media">
                    <img src="https://www.portotheme.com/html/wolmart/assets/images/demos/demo4/categories/1-6.jpg"
                        alt="Category" width="190" height="214">
                </figure>
            </a>
        </div>
    </div>

    @endforeach

    <!-- End of Category Wrap -->
</div>