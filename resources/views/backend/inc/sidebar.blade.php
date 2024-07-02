<div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true" >
        <div class="sidebar-header">
            <div>
                <img src="{{ url('/backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text">Rocker</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
            </div>
         </div>
        <!--navigation-->
        
        <ul class="metismenu " id="menu">
            
            
            <li>
                <a href="javascript:;"  class="has-arrow ">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title"> Category Blog </div>
                </a>
                <ul>
                    <li> <a href="{{ route('CategoryBlog.index') }}"><i class='bx bx-radio-circle'></i> All Category Blog</a>
                    </li>
                    <li> <a href="{{ route('CategoryBlog.create') }}"><i class='bx bx-radio-circle'></i>Add Category Blog</a>
                    </li>
                </ul>
            </li>

            
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Blog</div>
                </a>
                <ul>
                    <li> <a href="{{ route('Blog.index') }}"><i class='bx bx-radio-circle'></i> All Blog</a>
                    </li>
                    <li> <a href="{{ route('Blog.create') }}"><i class='bx bx-radio-circle'></i>Add Blog</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Category Gallary</div>
                </a>
                <ul>
                    <li> <a href="{{ route('CategoryGallary.index') }}"><i class='bx bx-radio-circle'></i> All Category Gallary</a>
                    </li>
                    <li> <a href="{{ route('CategoryGallary.create') }}"><i class='bx bx-radio-circle'></i>Add Category Gallary</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title"> Gallary</div>
                </a>
                <ul>
                    <li> <a href="{{ route('Gallary.index') }}"><i class='bx bx-radio-circle'></i> All Gallary</a>
                    </li>
                    <li> <a href="{{ route('Gallary.create') }}"><i class='bx bx-radio-circle'></i>Add Gallary</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title"> Slider Position </div>
                </a>
                <ul>
                    <li> <a href="{{ route('sliderposition.index') }}"><i class='bx bx-radio-circle'></i> All Slider Category</a>
                    </li>
                    <li> <a href="{{ route('sliderposition.create') }}"><i class='bx bx-radio-circle'></i>Add Slider Category</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title"> Slider  </div>
                </a>
                <ul>
                    <li> <a href="{{ route('slider.index') }}"><i class='bx bx-radio-circle'></i> All Slider </a>
                    </li>
                    <li> <a href="{{ route('slider.create') }}"><i class='bx bx-radio-circle'></i>Add Slider </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title"> Team  </div>
                </a>
                <ul>
                    <li> <a href="{{ route('team.index') }}"><i class='bx bx-radio-circle'></i> All Teams </a>
                    </li>
                    <li> <a href="{{ route('team.create') }}"><i class='bx bx-radio-circle'></i>Add Team </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title"> About  </div>
                </a>
                <ul>
                    <li> <a href="{{ route('about.index') }}"><i class='bx bx-radio-circle'></i> All About </a>
                    </li>
                    <li> <a href="{{ route('about.create') }}"><i class='bx bx-radio-circle'></i>Add About </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title"> Approach  </div>
                </a>
                <ul>
                    <li> <a href="{{ route('approach.index') }}"><i class='bx bx-radio-circle'></i> All Approachs </a>
                    </li>
                    <li> <a href="{{ route('approach.create') }}"><i class='bx bx-radio-circle'></i>Add Approach </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title"> Clients  </div>
                </a>
                <ul>
                    <li> <a href="{{ route('client.index') }}"><i class='bx bx-radio-circle'></i>  All Clients </a>
                    </li>
                    <li> <a href="{{ route('client.create') }}"><i class='bx bx-radio-circle'></i>  Add Client </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title"> Contacts  </div>
                </a>
                <ul>
                    <li> <a href="{{ route('contact.index') }}"><i class='bx bx-radio-circle'></i>  All Contacts </a>
                    </li>
                    <li> <a href="{{ route('contact.create') }}"><i class='bx bx-radio-circle'></i>  Add Contact </a>
                    </li>
                </ul>
            </li>

        </ul>
        <!--end navigation-->
    </div>  
</div>