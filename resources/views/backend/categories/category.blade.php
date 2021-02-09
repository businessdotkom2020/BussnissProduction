<ul>
        @foreach($childs as $child)
                <hr>
                <li @if(count($child->children) > 0) style="cursor: pointer" @endif>
                        {{$child->getTranslatedAttribute('name',app()->getLocale())}}
                        <a href="{{ route('category_info',$category->id) }}" class="badge badge-pill badge-soft-warning float-right mx-3">{{ __('dashboard.products') }} {{ $child->products->count() }}</a>
                        <a href="{{ route('category_info',$category->id) }}" class="badge badge-pill badge-soft-primary float-right mx-3">{{ __('dashboard.requests') }} {{ $child->requests->count() }}</a>
                        <a href="{{ route('category_info',$category->id) }}" class="badge badge-pill badge-soft-danger float-right mx-3">{{ __('dashboard.services') }} {{ $child->services->count() }}</a>
                    <a href="{{ route('category_info',$category->id) }}" class="badge badge-pill badge-soft-success float-right mx-3">{{ __('dashboard.sellers') }}
                        <?php
                        $cats = \App\Models\CategoryUser::where('category_id' , $child->id)->get();
                        $user_ids = [];
                        foreach ($cats as $cat){
                            array_push( $user_ids , $cat->user_id);
                        }
                        $users = \App\Models\User::whereIn('id',$user_ids)->get();
                        ?>
                        {{ $users->count() }}
                                        </a>
                        @if(count($child->children))
                                @include('backend.categories.category',['childs' => $child->children])
                        @endif
                </li>
        <a href="{{ route('category_info',$category->id) }}">{{ __('dashboard.visit') }}</a>
        @endforeach
</ul>