<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="mt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{route('post.index')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        post
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        kategory
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('tag.index')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                        tegi
                    </p>
                </a>
            </li>

        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
