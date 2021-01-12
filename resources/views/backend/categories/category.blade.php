<ul>
        @foreach($childs as $child)
                <hr>
                <li @if(count($child->children) > 0) style="cursor: pointer" @endif>
                        {{$child->getTranslatedAttribute('name',app()->getLocale())}}
                        <span class="badge badge-pill badge-primary float-right mx-3">{{ __('dashboard.products') }} {{ $child->products->count() }}</span>
                        <span class="badge badge-pill badge-soft-primary float-right mx-3">{{ __('dashboard.requests') }} {{ $child->requests->count() }}</span>
                        <span class="badge badge-pill badge-dark float-right mx-3">{{ __('dashboard.services') }} {{ $child->services->count() }}</span>
                        @if(count($child->children))
                                @include('backend.categories.category',['childs' => $child->children])
                        @endif
                </li>
        @endforeach
</ul>