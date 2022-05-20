<h1>Add Member</h1>
@if(session('username'))
<h2 style="color: blue;">{{session('username')}} user has been added</h2>
@endif
<form action="getdata" method="post">
    @csrf
    <input type="text" name="username" placeholder="enter your username"> <br> <br>
    <input type="password" name="password" placeholder="enter your password"> <br> <br>
    <input type="email" name="email" placeholder="enter your email"> <br> <br>
    <button type="submit">ADD MEMBER</button>
</form>


