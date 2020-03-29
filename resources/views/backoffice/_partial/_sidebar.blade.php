<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{ asset('assets/backoffice/') }}/images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                <div class="email">john.doe@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="{{ request()->is('backoffice') ? 'active' : '' }}">
                    <a href="{{ URL::to('/backoffice') }}">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="{{ request()->is('backoffice/typography') ? 'active' : '' }}">
                    <a href="{{ URL::to('/backoffice/typography') }}">
                        <i class="material-icons">text_fields</i>
                        <span>Typography</span>
                    </a>
                </li>
                <li class="{{ request()->is('backoffice/helper-classes') ? 'active' : '' }}">
                    <a href="{{ URL::to('/backoffice/helper-classes') }}">
                        <i class="material-icons">layers</i>
                        <span>Helper Classes</span>
                    </a>
                </li>
                <li class="{{ 
                    (request()->is('backoffice/basic')||  
                    request()->is('backoffice/colored')|| 
                    request()->is('backoffice/no-header')||
                    request()->is('backoffice/infobox-1')||
                    request()->is('backoffice/infobox-2')||
                    request()->is('backoffice/infobox-3')||
                    request()->is('backoffice/infobox-4')||
                    request()->is('backoffice/infobox-5'))
                    ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">widgets</i>
                        <span>Widgets</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ 
                        (request()->is('backoffice/basic')||  
                        request()->is('backoffice/colored')|| 
                        request()->is('backoffice/no-header'))
                        ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Cards</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="{{ request()->is('backoffice/basic') ? 'active' : '' }}">
                                    <a href="{{ URL::to('/backoffice/basic') }}">Basic</a>
                                </li>
                                <li class="{{ request()->is('backoffice/colored') ? 'active' : '' }}">
                                    <a href="{{ URL::to('/backoffice/colored') }}">Colored</a>
                                </li>
                                <li class="{{ request()->is('backoffice/no-header') ? 'active' : '' }}">
                                    <a href="{{ URL::to('/backoffice/no-header') }}">No Header</a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ 
                            (request()->is('backoffice/infobox-1')||
                            request()->is('backoffice/infobox-2')||
                            request()->is('backoffice/infobox-3')||
                            request()->is('backoffice/infobox-4')||
                            request()->is('backoffice/infobox-5'))
                            ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Infobox</span>
                            </a>
                            <ul class="ml-menu">
                                <li class="{{ request()->is('backoffice/infobox-1') ? 'active' : '' }}">
                                    <a href="{{ URL::to('/backoffice/infobox-1') }}">Infobox-1</a>
                                </li>
                                <li class="{{ request()->is('backoffice/infobox-2') ? 'active' : '' }}">
                                    <a href="{{ URL::to('/backoffice/infobox-2') }}">Infobox-2</a>
                                </li>
                                <li class="{{ request()->is('backoffice/infobox-3') ? 'active' : '' }}">
                                    <a href="{{ URL::to('/backoffice/infobox-3') }}">Infobox-3</a>
                                </li>
                                <li class="{{ request()->is('backoffice/infobox-4') ? 'active' : '' }}">
                                    <a href="{{ URL::to('/backoffice/infobox-4') }}">Infobox-4</a>
                                </li>
                                <li class="{{ request()->is('backoffice/infobox-5') ? 'active' : '' }}">
                                    <a href="{{ URL::to('/backoffice/infobox-5') }}">Infobox-5</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="{{ 
                    (request()->is('backoffice/alerts')||
                    request()->is('backoffice/animations')||
                    request()->is('backoffice/badges')||
                    request()->is('backoffice/breadcrumbs')||
                    request()->is('backoffice/buttons')||
                    request()->is('backoffice/collapse')||
                    request()->is('backoffice/colors')||
                    request()->is('backoffice/dialogs')||
                    request()->is('backoffice/icons')||
                    request()->is('backoffice/labels')||
                    request()->is('backoffice/list-group')||
                    request()->is('backoffice/media-object')||
                    request()->is('backoffice/modals')||
                    request()->is('backoffice/notifications')||
                    request()->is('backoffice/pagination')||
                    request()->is('backoffice/preloaders')||
                    request()->is('backoffice/progressbars')||
                    request()->is('backoffice/range-sliders')||
                    request()->is('backoffice/sortable-nestable')||
                    request()->is('backoffice/tabs')||
                    request()->is('backoffice/thumbnails')||
                    request()->is('backoffice/tooltips-popovers')||
                    request()->is('backoffice/waves'))
                    ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">swap_calls</i>
                        <span>User Interface (UI)</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ request()->is('backoffice/alerts') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/alerts') }}">Alerts</a>
                        </li>
                        <li class="{{ request()->is('backoffice/animations') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/animations') }}">Animations</a>
                        </li>
                        <li class="{{ request()->is('backoffice/badges') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/badges') }}">Badges</a>
                        </li>

                        <li class="{{ request()->is('backoffice/breadcrumbs') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/breadcrumbs') }}">Breadcrumbs</a>
                        </li>
                        <li class="{{ request()->is('backoffice/buttons') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/buttons') }}">Buttons</a>
                        </li>
                        <li class="{{ request()->is('backoffice/collapse') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/collapse') }}">Collapse</a>
                        </li>
                        <li class="{{ request()->is('backoffice/colors') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/colors') }}">Colors</a>
                        </li>
                        <li class="{{ request()->is('backoffice/dialogs') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/dialogs') }}">Dialogs</a>
                        </li>
                        <li class="{{ request()->is('backoffice/icons') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/icons') }}">Icons</a>
                        </li>
                        <li class="{{ request()->is('backoffice/labels') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/labels') }}">Labels</a>
                        </li>
                        <li class="{{ request()->is('backoffice/list-group') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/list-group') }}">List Group</a>
                        </li>
                        <li class="{{ request()->is('backoffice/media-object') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/media-object') }}">Media Object</a>
                        </li>
                        <li class="{{ request()->is('backoffice/modals') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/modals') }}">Modals</a>
                        </li>
                        <li class="{{ request()->is('backoffice/notifications') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/notifications') }}">Notifications</a>
                        </li>
                        <li class="{{ request()->is('backoffice/pagination') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/pagination') }}">Pagination</a>
                        </li>
                        <li class="{{ request()->is('backoffice/preloaders') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/preloaders') }}">Preloaders</a>
                        </li>
                        <li class="{{ request()->is('backoffice/progressbars') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/progressbars') }}">Progress Bars</a>
                        </li>
                        <li class="{{ request()->is('backoffice/range-sliders') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/range-sliders') }}">Range Sliders</a>
                        </li>
                        <li class="{{ request()->is('backoffice/sortable-nestable') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/sortable-nestable') }}">Sortable & Nestable</a>
                        </li>
                        <li class="{{ request()->is('backoffice/tabs') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/tabs') }}">Tabs</a>
                        </li>
                        <li class="{{ request()->is('backoffice/thumbnails') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/thumbnails') }}">Thumbnails</a>
                        </li>
                        <li class="{{ request()->is('backoffice/tooltips-popovers') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/tooltips-popovers') }}">Tooltips & Popovers</a>
                        </li>
                        <li class="{{ request()->is('backoffice/waves') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/waves') }}">Waves</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ 
                    (request()->is('backoffice/basic-form-elements')|| 
                    request()->is('backoffice/advanced-form-elements')|| 
                    request()->is('backoffice/form-examples')|| 
                    request()->is('backoffice/form-validation')|| 
                    request()->is('backoffice/form-wizard')|| 
                    request()->is('backoffice/editors'))
                    ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">assignment</i>
                        <span>Forms</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ request()->is('backoffice/basic-form-elements') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/basic-form-elements') }}">Basic Form Elements</a>
                        </li>
                        <li class="{{ request()->is('backoffice/advanced-form-elements') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/advanced-form-elements') }}">Advanced Form Elements</a>
                        </li>
                        <li class="{{ request()->is('backoffice/form-examples') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/form-examples') }}">Form Examples</a>
                        </li>
                        <li class="{{ request()->is('backoffice/form-validation') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/form-validation') }}">Form Validation</a>
                        </li>
                        <li class="{{ request()->is('backoffice/form-wizard') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/form-wizard') }}">Form Wizard</a>
                        </li>
                        <li class="{{ request()->is('backoffice/editors') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/editors') }}">Editors</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ 
                    (request()->is('backoffice/normal-tables')||
                    request()->is('backoffice/jquery-datatable')||
                    request()->is('backoffice/editable-table'))
                    ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">view_list</i>
                        <span>Tables</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ request()->is('backoffice/normal-tables') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/normal-tables') }}">Normal Tables</a>
                        </li>
                        <li class="{{ request()->is('backoffice/jquery-datatable') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/jquery-datatable') }}">Jquery Datatables</a>
                        </li>
                        <li class="{{ request()->is('backoffice/editable-table') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/editable-table') }}">Editable Tables</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ (request()->is('backoffice/image-gallery')||request()->is('backoffice/carousel')) ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">perm_media</i>
                        <span>Medias</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ request()->is('backoffice/image-gallery') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/image-gallery') }}">Image Gallery</a>
                        </li>
                        <li class="{{ request()->is('backoffice/carousel') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/carousel') }}">Carousel</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ 
                    (request()->is('backoffice/morris')||
                    request()->is('backoffice/flot')||
                    request()->is('backoffice/chartjs')||
                    request()->is('backoffice/sparkline')||
                    request()->is('backoffice/jquery-knob'))
                    ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">pie_chart</i>
                        <span>Charts</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ request()->is('backoffice/morris') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/morris') }}">Morris</a>
                        </li>
                        <li class="{{ request()->is('backoffice/flot') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/flot') }}">Flot</a>
                        </li>
                        <li class="{{ request()->is('backoffice/chartjs') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/chartjs') }}">ChartJS</a>
                        </li>
                        <li class="{{ request()->is('backoffice/sparkline') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/sparkline') }}">Sparkline</a>
                        </li>
                        <li class="{{ request()->is('backoffice/jquery-knob') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/jquery-knob') }}">Jquery Knob</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ 
                    (request()->is('backoffice/profile')||
                    request()->is('backoffice/sign-in')||
                    request()->is('backoffice/sign-up')||
                    request()->is('backoffice/forgot-password')||
                    request()->is('backoffice/blank')||
                    request()->is('backoffice/404')||
                    request()->is('backoffice/500'))                        
                    ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">content_copy</i>
                        <span>Example Pages</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ request()->is('backoffice/profile') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/profile') }}">Profile</a>
                        </li>
                        <li class="{{ request()->is('backoffice/sign-in') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/sign-in') }}">Sign In</a>
                        </li>
                        <li class="{{ request()->is('backoffice/sign-up') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/sign-up') }}">Sign Up</a>
                        </li>
                        <li class="{{ request()->is('backoffice/forgot-password') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/forgot-password') }}">Forgot Password</a>
                        </li>
                        <li class="{{ request()->is('backoffice/blank') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/blank') }}">Blank Page</a>
                        </li>
                        <li class="{{ request()->is('backoffice/404') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/404') }}">404 - Not Found</a>
                        </li>
                        <li class="{{ request()->is('backoffice/500') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/500') }}">500 - Server Error</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ 
                    (request()->is('backoffice/google')||
                    request()->is('backoffice/yandex')||
                    request()->is('backoffice/jvectormap'))
                    ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">map</i>
                        <span>Maps</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ request()->is('backoffice/google') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/google') }}">Google Map</a>
                        </li>
                        <li class="{{ request()->is('backoffice/yandex') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/yandex') }}">YandexMap</a>
                        </li>
                        <li class="{{ request()->is('backoffice/jvectormap') ? 'active' : '' }}">
                            <a href="{{ URL::to('/backoffice/jvectormap') }}">jVectorMap</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">trending_down</i>
                        <span>Multi Level Menu</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span>Menu Item - 2</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Level - 2</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span>Menu Item</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="menu-toggle">
                                        <span>Level - 3</span>
                                    </a>
                                    <ul class="ml-menu">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <span>Level - 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ URL::to('/backoffice/changelogs') }}">
                        <i class="material-icons">update</i>
                        <span>Changelogs</span>
                    </a>
                </li>
                <li class="header">LABELS</li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-red">donut_large</i>
                        <span>Important</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-amber">donut_large</i>
                        <span>Warning</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-light-blue">donut_large</i>
                        <span>Information</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                <ul class="demo-choose-skin">
                    <li data-theme="red" class="active">
                        <div class="red"></div>
                        <span>Red</span>
                    </li>
                    <li data-theme="pink">
                        <div class="pink"></div>
                        <span>Pink</span>
                    </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span>
                    </li>
                    <li data-theme="indigo">
                        <div class="indigo"></div>
                        <span>Indigo</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="light-blue">
                        <div class="light-blue"></div>
                        <span>Light Blue</span>
                    </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="teal">
                        <div class="teal"></div>
                        <span>Teal</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="light-green">
                        <div class="light-green"></div>
                        <span>Light Green</span>
                    </li>
                    <li data-theme="lime">
                        <div class="lime"></div>
                        <span>Lime</span>
                    </li>
                    <li data-theme="yellow">
                        <div class="yellow"></div>
                        <span>Yellow</span>
                    </li>
                    <li data-theme="amber">
                        <div class="amber"></div>
                        <span>Amber</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="deep-orange">
                        <div class="deep-orange"></div>
                        <span>Deep Orange</span>
                    </li>
                    <li data-theme="brown">
                        <div class="brown"></div>
                        <span>Brown</span>
                    </li>
                    <li data-theme="grey">
                        <div class="grey"></div>
                        <span>Grey</span>
                    </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span>
                    </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span>
                    </li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>