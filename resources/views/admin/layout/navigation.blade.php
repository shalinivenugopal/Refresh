<div class="o-page__sidebar js-page-sidebar">
    <aside class="c-sidebar">
        <div class="c-sidebar__brand">
            <a href="{{ url('admin/home') }}"><img src="{{ url('img/logo.png') }}" alt="Neat"></a>
        </div>


        <div class="c-sidebar__body">
            <ul class="c-sidebar__list">
                <li>
                    <a class="c-sidebar__link @yield('dashboard')" href="{{ url('admin/home') }}">
                        <i class="c-sidebar__icon feather icon-bar-chart"></i>Dashboard
                    </a>
                </li>
            </ul>


            <!-- <span class="c-sidebar__title">Masters</span>
            <ul class="c-sidebar__list">
                <li>
                    <a class="c-sidebar__link @yield('projecthead')" href="{{ url('cultivation/projecthead') }}">
                        <i class="c-sidebar__icon feather icon-user-plus"></i>Project Head
                    </a>
                </li>

                <li>
                    <a class="c-sidebar__link @yield('zone')" href="{{ url('cultivation/zone') }}">
                        <i class="c-sidebar__icon feather icon-wifi"></i>Zone
                    </a>
                </li>

                <li>
                    <a class="c-sidebar__link @yield('district')" href="{{ url('cultivation/district') }}">
                        <i class="c-sidebar__icon feather icon-hash"></i>District
                    </a>
                </li>

                <li>
                    <a class="c-sidebar__link @yield('area')" href="{{ url('cultivation/area') }}">
                        <i class="c-sidebar__icon feather icon-paperclip"></i>Procurement Centre
                    </a>
                </li>

                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link @yield('projectcoordinator')" data-toggle="collapse" href="#sidebar-submenu3" aria-expanded="false" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-user "></i>Project Co-Ordinator
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse" id="sidebar-submenu3">
                            <li><a class="c-sidebar__link @yield('addprojectcoordinator')" href="{{ url('cultivation/projectcoordinator') }}">Add Project Co-Ordinator</a></li>
                            <li><a class="c-sidebar__link @yield('viewprojectcoordinator')" href="{{ url('cultivation/viewprojectcoordinator') }}">View Project Co-Ordinator</a></li>
                        </ul>
                    </div>

                </li>
                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link @yield('agent')" data-toggle="collapse" href="#sidebar-submenu4" aria-expanded="false" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-users"></i>Agent
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse" id="sidebar-submenu4">
                            <li><a class="c-sidebar__link @yield('addagent')" href="{{ url('cultivation/addagent') }}">Add Agent</a></li>
                            <li><a class="c-sidebar__link @yield('viewagent')" href="{{ url('cultivation/viewagent') }}">View Agent</a></li>
                        </ul>
                    </div>
                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link @yield('animator')" data-toggle="collapse" href="#sidebar-submenu5" aria-expanded="false" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-file-text"></i>Superwisor
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse" id="sidebar-submenu5">
                            <li><a class="c-sidebar__link @yield('addanimator')" href="{{ url('cultivation/addanimator') }}">Add Superwisor</a></li>
                            <li><a class="c-sidebar__link @yield('viewanimator')" href="{{ url('cultivation/viewanimator') }}">View Superwisor</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a class="c-sidebar__link @yield('defaultschedule')" href="{{ url('cultivation/defaultschedule') }}">
                        <i class="c-sidebar__icon feather icon-zap"></i>Default Calendar of Operations
                    </a>
                </li>

            </ul>

            <span class="c-sidebar__title">Farmers</span>
            <ul class="c-sidebar__list">

                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link @yield('farmer')" data-toggle="collapse" href="#sidebar-submenu7" aria-expanded="false" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-user-plus"></i>Farmer
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse" id="sidebar-submenu7">
                            <li><a class="c-sidebar__link @yield('addfarmer')" href="{{ url('cultivation/addfarmer') }}">Add Farmer</a></li>
                            <li><a class="c-sidebar__link @yield('viewfarmer')" href="{{ url('cultivation/viewfarmer/agent') }}">View Farmers</a></li>
                        </ul>
                    </div>

                </li>
            </ul>

            <span class="c-sidebar__title">Cultivation Schedule</span>
            <ul class="c-sidebar__list">
              <li class="c-sidebar__item has-submenu">
                     <a class="c-sidebar__link @yield('agreement')" data-toggle="collapse" href="#sidebar-submenu8" aria-expanded="false" aria-controls="sidebar-submenu">
                         <i class="c-sidebar__icon feather icon-book"></i>Agreement
                     </a>
                <div>
                    <ul class="c-sidebar__list collapse" id="sidebar-submenu8">
                        <li><a class="c-sidebar__link @yield('agreement')" href="{{ url('cultivation/agreement') }}">Add Agreement</a></li>
                        <li><a class="c-sidebar__link @yield('viewagreement')" href="{{ url('cultivation/viewagreement') }}">View Agreement</a></li>
                        <li><a class="c-sidebar__link @yield('cashadvance')" href="{{ url('cultivation/cashadvance') }}">Cash Advance</a></li>
                    </ul>
                </div>
              </li>
            </ul>
            <ul class="c-sidebar__list">

                <li class="c-sidebar__item has-submenu">
                    <a class="c-sidebar__link @yield('WetRoot')" data-toggle="collapse" href="#sidebar-WetRoot" aria-expanded="false" aria-controls="sidebar-submenu">
                        <i class="c-sidebar__icon feather icon-user-plus"></i>Wet Root
                    </a>

                    <div>
                        <ul class="c-sidebar__list collapse" id="sidebar-WetRoot">
                            <li><a class="c-sidebar__link @yield('WetRootAdd')" href="{{ url('cultivation/WetRoot/add') }}">Add Wet Root</a></li>
                            <li><a class="c-sidebar__link @yield('WetRootView')" href="{{ url('cultivation/WetRoot') }}">View Wet Root</a></li>
                        </ul>
                    </div>

                </li>
            </ul>

                   <li >
                        <a class="c-sidebar__link @yield('reports')" href="{{ url('cultivation/reports') }}">
                            <i class="c-sidebar__icon feather icon-wind"></i>Reports
                        </a>
                    </li>
 -->





        </div>

        <a class="c-sidebar__footer" href="{{ url('/admin/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout <i class="c-sidebar__footer-icon feather icon-power"></i>
        </a>
        <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </aside>
</div>