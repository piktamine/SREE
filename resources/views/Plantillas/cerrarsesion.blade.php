<div class="btn boton">
    <form action="/logout" method="post">
        @csrf
        <a href="{{route('logout')}}" 
           onclick="this.closest('form').submit()" style="display:block;text-decoration : none;">
            Logout</a>
    </form>
</div>