<!-- header logo: style can be found in header.less -->
<header class="header">
    @include('layouts.partials.header.logo')
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                {{--@include('layouts.partials.header.messages')--}}
                {{--@include('layouts.partials.header.notifications')--}}
                {{--@include('layouts.partials.header.tasks')--}}
                @include('layouts.partials.header.account')
            </ul>
        </div>
    </nav>
</header>