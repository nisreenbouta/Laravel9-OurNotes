<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{asset('adminassets')}}/img/find_user.png" class="user-image img-responsive"/>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                    <a href="/logoutuser" class="btn btn-danger square-btn-adjust">Logout</a>
                </div>
            </li>


            <li>
            <li class="nav-item">
                <a  href="/admin"style="padding-left:25px"><lord-icon
                        src="https://cdn.lordicon.com/etqbfrgp.json"
                        trigger="loop"
                        style=" width:40px;height:40px">
                    </lord-icon> Dashboard</a>
            </li>
            <li>
                <a href="#"><script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/hbwqfgcf.json"
                        trigger="loop"
                        colors="outline:#ffffff,primary:#e83a30,secondary:#ffc738,tertiary:#4bb3fd"
                        style="width:40px;height:40px">
                    </lord-icon> Activites<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">New Notes</a>
                    </li>
                    <li>
                        <a href="#">Accepted Notes</a>
                    </li>

                        </ul>

                    </li>
                </ul>
            </li>
        <br>
        <li class="nav-item">
        <a  href="/admin/category"style="padding-left:25px"><lord-icon
                src="https://cdn.lordicon.com/dimghest.json"
                trigger="loop"
                colors="outline:#ffffff,primary:#e83a30,secondary:#ebe6ef"
                style="width:40px;height:40px">
            </lord-icon> Categories</a>
        </li><br>
        <li class="nav-item">
        <a  href="/admin/content"style="padding-left:25px"><lord-icon
                src="https://cdn.lordicon.com/gowvgfsi.json"
                trigger="loop"
                colors="outline:#ffffff,primary:#4bb3fd,secondary:#ffc738,tertiary:#ebe6ef"
                style="width:40px;height:40px">
            </lord-icon> Content</a>
        </li><br>
        <li class="nav-item">
        <a  href="/admin/comment"style="padding-left:25px"><lord-icon
                src="https://cdn.lordicon.com/kjkiqtxg.json"
                trigger="loop"
                colors="outline:#ffffff,primary:#e4e4e4,secondary:#4bb3fd,tertiary:#fad3d1"
                style="width:40px;height:40px">
            </lord-icon>
            Comments</a>
        </li><br>
        <li class="nav-item">
        <a  href="{{route('admin.faq.index')}}"style="padding-left:25px"><lord-icon
                src="https://cdn.lordicon.com/ccwgfhfg.json"
                trigger="loop"
                colors="outline:#ffffff,primary:#92140c,secondary:#4bb3fd,tertiary:#ffffff"
                style="width:40px;height:40px">
            </lord-icon>FAQ</a>
        </li><br>
        <li class="nav-item">
        <a  href="{{route('admin.message.index')}}"style="padding-left:25px"><lord-icon
                src="https://cdn.lordicon.com/gzmgulpl.json"
                trigger="loop"
                colors="outline:#ffffff,primary:#ee6d66,secondary:#ebe6ef"
                style="width:40px;height:40px">
            </lord-icon> Messages</a>
        </li><br>
        <li class="nav-item">
        <a  href="/admin/social"style="padding-left:25px"><lord-icon
                src="https://cdn.lordicon.com/zeabctil.json"
                trigger="loop"
                colors="outline:#ffffff,primary:#4bb3fd,secondary:#ebe6ef"
                style="width:40px;height:40px">
            </lord-icon> Social</a>
        </li><br>
        <li class="nav-item">
        <a  href="/admin/user"style="padding-left:25px"><lord-icon
                src="https://cdn.lordicon.com/vtovymqf.json"
                trigger="loop"
                colors="outline:#ffffff,primary:#b26836,secondary:#4bb3fd,tertiary:#f9c9c0"
                style="width:40px;height:40px">
            </lord-icon> Users</a>
        </li><br>
<br>

        <li class="nav-item">
            <a href="/admin/setting" style="padding-left:25px"class="nav-link"><lord-icon
                    src="https://cdn.lordicon.com/oncyjozz.json"
                    trigger="loop"
                    colors="outline:#ffffff,primary:#e4e4e4"
                    style="width:40px;height:40px">
                </lord-icon> Settings</a>

        </li>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->

