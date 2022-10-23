<form action="store" method="post">
    @csrf
    Nom  <input name="Nom" type="text"><br>
    <div class="divError">
    @error("Nom")
    {{$message}}
    @enderror
    </div>
    Email <input name="Email" type="text"><br>
    <div class="divError">
    @error("Email")
    {{$message}}
    @enderror
    </div>
    Phone <input name="Phone" type="text"><br>
    <div class="divError">
    @error("Phone")
    {{$message}}
    @enderror
</div>
    <button>click</button>
</form>

<style>
    .divError{
        margin: 12px 0  12px 0;
        color: red;
    }
</style>
