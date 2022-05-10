<h1>LOGIN PAGE</h1>
<form action="something" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter your username" /><br/> 
    <span style="color: red;">@error('username'){{$message}}@enderror</span>
    <br/>
    <input type="password" name="password" placeholder="Enter your password" /> <br/>
    <span style="color: red;">@error('password'){{$message}}@enderror</span>
    <br/>
    <input type="email" name="email" placeholder="Enter your email" /> <br/> 
    <span style="color: red;">@error('email'){{$message}}@enderror</span>
    <br/> 
    <button type="submit">login here</button>
</form>