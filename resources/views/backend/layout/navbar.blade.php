<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">@lang('dashboard.menu')</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-user-shield"></i>
                        <span>@lang('dashboard.admin_roles')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ Request::is('admin/moderators*')? 'mm-active': '' }}">
                            <a href="{{ route('moderators.index') }}">
                                @lang('dashboard.admins')
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/roles*')? 'mm-active': '' }}">
                            <a href="{{ route('roles.index') }}">
                                @lang('dashboard.roles')
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ Request::is('admin/users*')? 'mm-active': '' }}">
                    <a href="{{ route('users.index') }}" class="waves-effect {{ Request::is('admin/users*')? 'active': '' }}">
                        <i class="fa fa-users"></i>
                        <span class="badge badge-pill badge-primary float-right">{{ \App\Models\User::whereNull('state_id')->count() }}</span>
                        <span>
                            @lang('dashboard.n_users')
                        </span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-user-plus"></i>
                        <span>
                            @lang('dashboard.supp_bran')
                        </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ Request::is('admin/sellerss*')? 'mm-active': '' }}">
                            <a href="{{ route('sellerss.index') }}">
                                @lang('dashboard.supps')
                                <span class="badge badge-pill badge-success float-right">{{ \App\Models\User::whereNotNull('state_id')->count() }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('branches.index') }}">
                                @lang('dashboard.brans')
                                <span class="badge badge-pill badge-soft-success float-right">{{ \App\Models\Branch::count() }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('clients.index') }}">
                                @lang('dashboard.clients')
                                <span class="badge badge-pill badge-soft-warning float-right">{{ \App\Models\Client::count() }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-store"></i>
                        <span>@lang('dashboard.exhibits')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ Request::is('admin/productss*')? 'mm-active': '' }}">
                            <a href="{{ route('productss.index') }}">
                                @lang('dashboard.products')
                                <span class="badge badge-pill badge-danger float-right">{{ \App\Models\Product::count() }}</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/servicess*')? 'mm-active': '' }}">
                            <a href="{{ route('servicess.index') }}">
                                @lang('dashboard.services')
                                <span class="badge badge-pill badge-soft-danger float-right">{{ \App\Models\Service::count() }}</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/requestss*')? 'mm-active': '' }}">
                            <a href="{{ route('requestss.index') }}">
                                @lang('dashboard.requests')
                                <span class="badge badge-pill badge-pink float-right">{{ \App\Models\Request::count() }}</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/jobss*')? 'mm-active': '' }}">
                            <a href="{{ route('jobss.index') }}">
                                @lang('dashboard.jobs')
                                <span class="badge badge-pill badge-soft-pink float-right">{{ \App\Models\Job::count() }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-folder-open"></i>
                        <span>@lang('dashboard.cat_man')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ Request::is('admin/categories*')? 'mm-active': '' }}">
                            <a href="{{ route('categories.index') }}">
                                @lang('dashboard.m_cats')
                                <span class="badge badge-pill badge-info float-right">{{ \App\Models\Category::whereNull('parent_id')->orWhere('parent_id', '=', 0)->count() }}</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/subcategories*')? 'mm-active': '' }}">
                            <a href="{{ route('subcategories.index') }}">
                                @lang('dashboard.sub_cats')
                                <span class="badge badge-pill badge-soft-info float-right">{{ \App\Models\Category::whereNotNull('parent_id')->orWhere('parent_id', '!=', 0)->count() }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-globe"></i>
                        <span>@lang('dashboard.loc_man')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ Request::is('admin/countries*')? 'mm-active': '' }}">
                            <a href="{{ route('countries.index') }}">
                                @lang('dashboard.countries')
                                <span class="badge badge-pill badge-dark float-right">{{ \App\Models\Country::count() }}</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/states*')? 'mm-active': '' }}">
                            <a href="{{ route('states.index') }}">
                                @lang('dashboard.states')
                                <span class="badge badge-pill badge-soft-light float-right">{{ \App\Models\State::count() }}</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/cities*')? 'mm-active': '' }}">
                            <a href="{{ route('cities.index') }}">
                                @lang('dashboard.cities')
                                <span class="badge badge-pill badge-soft-primary float-right">{{ \App\Models\City::count() }}</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/zones*')? 'mm-active': '' }}">
                            <a href="{{ route('zones.index') }}">
                                @lang('dashboard.zones')
                                <span class="badge badge-pill badge-soft-secondary float-right">{{ \App\Models\IndustrialZones::count() }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fab fa-creative-commons-by"></i>
                        <span>@lang('dashboard.attr_man')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ Request::is('admin/attributes*')? 'mm-active': '' }}">
                            <a href="{{ route('attributes.index') }}">
                                @lang('dashboard.attr')
                                <span class="badge badge-pill badge-danger float-right">{{ \App\Models\Attribute::count() }}</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/attr_values*')? 'mm-active': '' }}">
                            <a href="{{ route('attr_values.index') }}">
                                @lang('dashboard.attr_val')
                                <span class="badge badge-pill badge-soft-danger float-right">{{ \App\Models\AttributeValue::count() }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('brands.index') }}" class="waves-effect">
                        <i class="fab fa-centos"></i>
                        <span class="badge badge-pill badge-warning float-right">{{ \App\Models\Brand::count() }}</span>
                        <span>@lang('dashboard.brands')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('tags.index') }}" class="waves-effect">
                        <i class="fas fa-tags"></i>
                        <span class="badge badge-pill badge-soft-warning float-right">{{ \App\Models\Tag::count() }}</span>
                        <span>@lang('dashboard.tag')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('sliders.index') }}" class="waves-effect">
                        <i class="far fa-images"></i>
                        <span class="badge badge-pill badge-secondary float-right">{{ \App\Models\Slider::count() }}</span>
                        <span>@lang('dashboard.slider')</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->