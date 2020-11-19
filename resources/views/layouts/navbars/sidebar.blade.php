<div class="sidebar" data-color="green" data-image="{{ asset('helpo-theme') }}/img/promo_3.jpg">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
               OincBank
            </a>
        </div>
        <ul class="nav">

            @foreach ($modules as $module)

                @if ($module->type == 1)
                    <li class="nav-item @if($activePage == $module->slug) active @endif">
                        <a class="nav-link" href="{{route($module->route)}}">
                            <i class="{{$module->icon}}"></i>
                            <p class="ml-2">{{$module->name}}</p>
                        </a>
                    </li>
                @elseif ($module->type == 2)
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#master{{$module->id}}" @if($activeButton == $module->slug) aria-expanded="true" @endif>
                            <i class="{{$module->icon}}"></i>
                            <p class="ml-2"> {{$module->name}} <b class="caret"></b> </p>
                        </a>
                        <div class="collapse @if($activeButton == $module->slug) show @endif" id="master{{$module->id}}">
                            <ul class="nav">
                                @foreach ($modules as $s_module)
                                    @if ($s_module->type == 3 && $s_module->menu_master == $module->id)
                                        <li class="nav-item @if($activePage == $s_module->slug) active @endif">
                                            <a class="nav-link" href="{{route($s_module->route)}}">
                                                <i class="{{$s_module->icon}}"></i>
                                                <p>{{$s_module->name}}</p>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endif
            @endforeach

        </ul>
    </div>
</div>
