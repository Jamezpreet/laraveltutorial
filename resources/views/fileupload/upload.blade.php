<h1> File Upload Form </h1>

<form action="savefile" method="POST" enctype="multipart/form-data"> 
    @csrf
    {{-- <input type="text" name="username">
    <br><br>
    <span style="color: red"> @error('username') {{$message}} @enderror</span>
    <br><br>
    <input type="password" name="password">
    <br><br>
    <span style="color: red"> @error('password') {{$message}} @enderror</span> --}}
    <input type="file" name="file">
    <br><br>
    <button> Submit </button>
</form>