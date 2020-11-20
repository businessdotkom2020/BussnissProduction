<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-user-shield"></i>
                        <span>Admins & Roles</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ Request::is('admin/moderators*')? 'mm-active': '' }}">
                            <a href="{{ route('moderators.index') }}">
                                Admins
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/roles*')? 'mm-active': '' }}">
                            <a href="{{ route('roles.index') }}">
                                Roles
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ Request::is('admin/users*')? 'mm-active': '' }}">
                    <a href="{{ route('users.index') }}" class="waves-effect {{ Request::is('admin/users*')? 'active': '' }}">
                        <i class="fa fa-users"></i>
                        <span class="badge badge-pill badge-primary float-right">{{ \App\Models\User::whereNull('state_id')->count() }}</span>
                        <span>Normal Users</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-user-plus"></i>
                        <span>Suppliers & Branches</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ Request::is('admin/sellerss*')? 'mm-active': '' }}">
                            <a href="{{ route('sellerss.index') }}">
                                Suppliers
                                <span class="badge badge-pill badge-success float-right">{{ \App\Models\User::whereNotNull('state_id')->count() }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('branches.index') }}">
                                Branches of Suppliers
                                <span class="badge badge-pill badge-soft-success float-right">{{ \App\Models\Branch::count() }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('clients.index') }}">
                                Clients
                                <span class="badge badge-pill badge-soft-warning float-right">{{ \App\Models\Client::count() }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-store"></i>
                        <span>Exhibits</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ Request::is('admin/productss*')? 'mm-active': '' }}">
                            <a href="{{ route('productss.index') }}">
                                Products
                                <span class="badge badge-pill badge-danger float-right">{{ \App\Models\Product::count() }}</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/servicess*')? 'mm-active': '' }}">
                            <a href="{{ route('servicess.index') }}">
                                Services
                                <span class="badge badge-pill badge-soft-danger float-right">{{ \App\Models\Service::count() }}</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/requestss*')? 'mm-active': '' }}">
                            <a href="{{ route('requestss.index') }}">
                                Requests
                                <span class="badge badge-pill badge-pink float-right">{{ \App\Models\Request::count() }}</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/jobss*')? 'mm-active': '' }}">
                            <a href="{{ route('jobss.index') }}">
                                Jobs
                                <span class="badge badge-pill badge-soft-pink float-right">{{ \App\Models\Job::count() }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-folder-open"></i>
                        <span>Categories Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ Request::is('admin/categories*')? 'mm-active': '' }}">
                            <a href="{{ route('categories.index') }}">
                                Main Categories
                                <span class="badge badge-pill badge-info float-right">{{ \App\Models\Category::whereNull('parent_id')->orWhere('parent_id', '=', 0)->count() }}</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/subcategories*')? 'mm-active': '' }}">
                            <a href="{{ route('subcategories.index') }}">
                                Sub Categories
                                <span class="badge badge-pill badge-soft-info float-right">{{ \App\Models\Category::whereNotNull('parent_id')->orWhere('parent_id', '!=', 0)->count() }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-globe"></i>
                        <span>Location Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ Request::is('admin/countries*')? 'mm-active': '' }}">
                            <a href="{{ route('countries.index') }}">
                                Countries
                                <span class="badge badge-pill badge-dark float-right">{{ \App\Models\Country::count() }}</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/states*')? 'mm-active': '' }}">
                            <a href="{{ route('states.index') }}">
                                States
                                <span class="badge badge-pill badge-soft-light float-right">{{ \App\Models\State::count() }}</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/cities*')? 'mm-active': '' }}">
                            <a href="{{ route('cities.index') }}">
                                Cities
                                <span class="badge badge-pill badge-soft-primary float-right">{{ \App\Models\City::count() }}</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/zones*')? 'mm-active': '' }}">
                            <a href="{{ route('zones.index') }}">
                                Industrial Zones
                                <span class="badge badge-pill badge-soft-secondary float-right">{{ \App\Models\IndustrialZones::count() }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fab fa-creative-commons-by"></i>
                        <span>Attributes Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ Request::is('admin/attributes*')? 'mm-active': '' }}">
                            <a href="{{ route('attributes.index') }}">
                                Attributes
                                <span class="badge badge-pill badge-danger float-right">{{ \App\Models\Attribute::count() }}</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/attr_values*')? 'mm-active': '' }}">
                            <a href="{{ route('attr_values.index') }}">
                                Attribute Values
                                <span class="badge badge-pill badge-soft-danger float-right">{{ \App\Models\AttributeValue::count() }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('brands.index') }}" class="waves-effect">
                        <i class="fab fa-centos"></i>
                        <span class="badge badge-pill badge-warning float-right">{{ \App\Models\Brand::count() }}</span>
                        <span>Brands</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('tags.index') }}" class="waves-effect">
                        <i class="fas fa-tags"></i>
                        <span class="badge badge-pill badge-soft-warning float-right">{{ \App\Models\Tag::count() }}</span>
                        <span>Tags</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('sliders.index') }}" class="waves-effect">
                        <i class="far fa-images"></i>
                        <span class="badge badge-pill badge-secondary float-right">{{ \App\Models\Slider::count() }}</span>
                        <span>Slider</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->