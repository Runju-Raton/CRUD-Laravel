<form action="{{ url('/create') }}" method="post">
    @csrf 
    <input type="text" placeholder="name"><br> <br>
    <button>save</button>
</form>