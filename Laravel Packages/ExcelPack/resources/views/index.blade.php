
@foreach ($user as $user )

<h3>{{$user->name}} </h3>
@endforeach
<a href="{{route('export')}}"><button>export</button></a>
<form action="{{route('import')}}" method="post">
    @csrf
    <input type="file" name="file">
<button>import</button>
</form>
