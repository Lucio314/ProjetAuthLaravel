<h1>Admin</h1>
  <!-- Authentication -->
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();"> LogOut
    </a>
</form>
