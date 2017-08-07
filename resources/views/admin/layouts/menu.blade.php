<ul class="sidebar-menu">

    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{ URL::to('/admin') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
    <li class="treeview">
        <a href="#"><i class="fa fa-cogs"></i> <span>Services</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
         <ul class="treeview-menu">
            <li><a href="{{ url('admin/services') }}">View all</a></li>
            <li><a href="{{ url('admin/services/create') }}">Add</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-wrench"></i> <span>Technologies</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">

            <li><a href="{{ url('admin/technologies') }}">View all</a></li>
            <li><a href="{{ url('admin/technologies/create') }}">Add</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-commenting-o"></i> <span>Feedbacks</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ url('admin/feedbacks') }}">View all</a></li>
            <li><a href="{{ url('admin/feedbacks/create') }}">Add</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-steam-square"></i> <span>Teams</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ url('admin/teams') }}">View all</a></li>
            <li><a href="{{ url('admin/teams/create') }}">Add</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-users"></i> <span>Members</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{ url('admin/members') }}">View all</a></li>
            <li><a href="{{ url('admin/members/create') }}">Add</a></li>
        </ul>
    </li>
</ul>