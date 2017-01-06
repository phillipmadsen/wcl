@if(Request::is('/'))
    <span class="navbar-brand">
       {{--  <div class="css-logo"></div> --}} WeCodeLaravel<span class="logoDomain">.com</span>
    </span>
@else
    <a href="{{ route('home') }}" class="navbar-brand">
        <div class="css-logo"></div> WeCodeLaravel<span class="logoDomain">.com</span>
    </a>
@endif
