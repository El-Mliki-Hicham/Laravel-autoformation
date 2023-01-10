<h1>Encrypted password</h1>

<form action="{{route('login.store')}}" method="POST">
    @csrf
   name <input type="text" name="name"><br>
   email <input type="text" name="email"><br>
   Password <input type="password" name="password" ><br>
   <button>submit</button>
</form>
