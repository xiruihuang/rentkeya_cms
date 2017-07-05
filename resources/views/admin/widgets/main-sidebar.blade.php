      {{-- widget.main-sidebar --}}

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ _asset('back/dist/img/20150417113714.jpg') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>{{ auth()->user()->realname }}</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="搜索..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">主导航栏</li>

            <!--无子节点的一级导航节点-->
            <li><a href="{{ site_url('dashboard', 'admin') }}"><i class="fa fa-dashboard"></i> <span>控制台</span> </a></li>
            <li><a href="{{ site_url('cache', 'admin') }}"><i class="fa fa-eraser"></i> <span>重建缓存</span> </a></li>

            <!--自定义二次开发导航区域 START-->

            @foreach($menus = config('ecms.sidebar') as $menu)
              <li class="treeview">
              <a href="#">
                <i class='fa {{ $menu['icon'] }}'></i>
                <span>{{ $menu['name'] }}</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              @foreach($sub_menus = $menu['sub_menu'] as $sub)
                @if($sub['can'] !== '')
                  @can($sub['can'])
                  <li><a href="@if(str_contains($sub['route'], '//')){{ $sub['route'] }}@else{{ _route($sub['route']) }}@endif" @if(str_contains($sub['route'], '//'))target="_blank"@endif><i class="fa {{ $menu['child_icon'] }}"></i>{{ $sub['name'] }}</a></li>
                  @endcan
                @else
                  <li><a href="@if(str_contains($sub['route'], '//')){{ $sub['route'] }}@else{{ _route($sub['route']) }}@endif" @if(str_contains($sub['route'], '//')) target="_blank"@endif><i class="fa {{ $menu['child_icon'] }}"></i>{{ $sub['name'] }}</a></li>
                @endif
              @endforeach
              </ul>
            </li>
            @endforeach

            <!--自定义二次开发导航区域 END-->

            <!--用户管理 treeview-->
            <li class="treeview">
              <a href="#">
                <i class='fa fa-user-secret'></i>
                <span>用户管理</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                @can('@me')
                <li><a href="{{ site_url('me', 'admin') }}"><i class="fa fa-circle-o"></i>个人资料</a></li>
                @endcan
                @can('@user')
                <li><a href="{{ site_url('user', 'admin') }}"><i class="fa fa-circle-o"></i>管理员(用户)</a></li>
                @endcan
                @can('@role')
                <li><a href="{{ site_url('role', 'admin') }}"><i class="fa fa-circle-o"></i>角色</a></li>
                @endcan
                @can('@permission')
                <li><a href="{{ site_url('permission', 'admin') }}"><i class="fa fa-circle-o"></i>权限</a></li>
                @endcan
              </ul>
            </li>
            <!--//用户管理 treeview-->


            <!--系统管理 treeview-->
            <li class="treeview">
              <a href="#">
                <i class='fa fa-cog'></i>
                <span>系统管理</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                @can('@option')
                <li><a href="{{ site_url('option', 'admin') }}"><i class="fa fa-square-o"></i>系统配置</a></li>
                @endcan
                @can('@log')
                <li><a href="{{ site_url('log', 'admin') }}"><i class="fa fa-square-o"></i>系统日志</a></li>
                @endcan
              </ul>
            </li>
            <!--//系统管理 treeview-->

          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
