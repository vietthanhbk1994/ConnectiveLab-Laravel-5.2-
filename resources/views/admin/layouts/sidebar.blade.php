<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                @if (Auth::user()->avatar=="")
                    <img src="{{ URL::to('/uploads') }}/no-image.jpg" class="user-image" alt="User Image"/>
                @else
                    <img src="{{ URL::to('/uploads') }}/{{ Auth::user()->avatar }}" class="user-image" alt="User Image"/>       
                @endif
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                <p>InfyOm</p>
                @else
                    <p>{{ Auth::user()->username}}</p>
                @endif
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- Sidebar Menu -->

        <ul class="sidebar-menu">
            @include('admin.layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>