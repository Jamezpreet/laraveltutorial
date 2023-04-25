<h1> Login Form </h1>

<form action="formdata" method="POST"> 
    @csrf
    <input type="text" name="username">
    <br><br>
    <span style="color: red"> @error('username') {{$message}} @enderror</span>
    <br><br>
    <input type="password" name="password">
    <br><br>
    <span style="color: red"> @error('password') {{$message}} @enderror</span>
    <br><br>
    <button> Submit </button>
</form>