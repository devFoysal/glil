<div class="language">
                            <a class="nav-link @if(Request::segment(1) == 'en'){{'active'}}@endif d-inline-block text-capitalize"
                                href="{{route(Route::currentRouteName(), array_merge(request()->route()->parameters, ['language' => 'en']))}}">
                                EN
                            </a>
                            <span class="d-inline-block">|</span>
                            <a class="nav-link @if(Request::segment(1) == 'bn'){{'active'}}@endif d-inline-block text-capitalize"
                                href="{{route(Route::currentRouteName(), array_merge(request()->route()->parameters, ['language' => 'bn']))}}">
                                বাংলা
                            </a>
                        </div>