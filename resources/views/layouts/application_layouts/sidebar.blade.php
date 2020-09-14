<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Sellerzz {{ Auth::user()->user_type === 'buyer' ? '(Buyer)' : ''}}</h3>
    </div>
    <hr>
    <ul class="list-unstyled components" >
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Messages</a>
        </li>
        <li>
            <a href="#">Support</a>
        </li>
         <li>
            <a href="#">Knowledgebase</a>
        </li>
         <li>
            <a  href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
        </li>
    </ul>
</nav>