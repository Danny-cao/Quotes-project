<header>
    <div class="img-banner">
        
    </div>
    <nav>
        <ul>
        
            <li><a href="/">Home</a></li>
            <li><a href="/agenda">Agenda</a></li>
            <li><a href="/reservering">Ticket reserveren</a></li>
            <li><a href="/aanmelding">Aanmelden</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/organisator">organisator</a></li>
            <li><a href="{{ route('admin.login') }}">Admin</a></li>
            
            @if (Auth::check())
                <li><a href="{{ route('admin.logout') }}">Logout</a></li>
            @endif
        </ul>
        

    </nav>
    
</header>