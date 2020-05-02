<div class="container-fluid-full">
    <div class="row-fluid">
            
        <!-- start: Main Menu -->
        <div id="sidebar-left" class="span2">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    @if (Request::is('admin/*'))

                <li class="{{Request::is('admin/dashboard') ? 'active' : ''}}">
                <a href="{{route('admin.dashboard')}}">
                            <i class="icon-bar-chart"></i>
                            <span class="hidden-tablet"> Dashboard</span>
                        </a>
                    </li>

                    <li class="{{Request::is('admin/article/*') ? 'active' : ''}}">
                <a href="{{route('admin.article.index')}}">
                            <i class="icon-bar-chart"></i>
                            <span class="hidden-tablet"> Article</span>
                        </a>
                    </li>

                    <li class="{{Request::is('admin/category/*') ? 'active' : ''}}">
                        <a href="{{route('admin.category.index')}}">
                                    <i class="icon-bar-chart"></i>
                                    <span class="hidden-tablet"> Category</span>
                                </a>
                            </li>

                            <li class="{{Request::is('admin/tag/*') ? 'active' : ''}}">
                                <a href="{{route('admin.tag.index')}}">
                                            <i class="icon-bar-chart"></i>
                                            <span class="hidden-tablet"> Tag</span>
                                        </a>
                                    </li>


                    @endif
                    
                </ul>
            </div>
        </div>
        <!-- end: Main Menu -->
        
        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>
        
        <!-- start: Content -->
        <div id="content" class="span10">
        
        
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.html">Home</a> 
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="#">Dashboard</a></li>
        </ul>