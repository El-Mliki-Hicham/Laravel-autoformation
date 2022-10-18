<form action="/user" method="get">
    {{-- include a CSRF token field for protected and validate request  --}}
    @csrf
    <input type="text" name="name">
    <button>click</button>
</form>