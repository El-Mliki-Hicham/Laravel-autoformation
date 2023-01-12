<form action="{{route('login.login')}}" method="POST">
    @csrf
   email <input type="text" name="email">
   Password <input type="text" name="password" >
   <button>submit</button>
</form>
