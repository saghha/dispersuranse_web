<div class="header-w3l">
    <div class="header-main">
        <div class="header-top-agileits">
        <div class="container">
            <div class="header-left">
                <h3><i class="fa fa-phone" aria-hidden="true"></i> (077) 806 5658</h3>
            </div>
            <ul class="agile_forms"  data-aos="fade-left">
                <li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a> </li>
                <li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Register</a> </li>
            </ul>
            <div class="clearfix"> </div>
            </div>
        </div>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 data-aos="fade-down"><a  href="/">Dispersurance</a></h1>
                </div>
                <!-- navbar-header -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right" data-aos="fade-up">
                        {!!  menu('Public', 'menus.menu') !!}
                        <li class="dropdown menu__item">
                            <a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-flag"></i> {{ Lang::get('voyager.etc.lang') }}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                        </a>
							        </li>
							    @endforeach
                            </ul>
                        </li>
                        <!-- <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li class="dropdown menu__item">
                            <a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Pages<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="codes.html">Short Codes</a></li>
                                <li><a href="icons.html">Web Icons</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery.html" >Projects</a></li>
                        <li><a href="contact.html">Contact</a></li> -->
                    </ul>
                </div>
                <div class="clearfix"> </div>	
            </nav>
        </div>
    </div>
    <div class="clearfix"> </div>
    <!-- //Nav -->
</div>