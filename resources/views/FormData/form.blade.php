<h1> Login Form </h1>

<form action="formdata" method="POST"> 
    @csrf
    <input type="text" name="username">
    <br><br>
    <input type="password" name="password">
    <br><br>
    <button> Submit </button>
</form>