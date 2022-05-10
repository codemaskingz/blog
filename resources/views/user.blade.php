<h1>user Login </h1>
<form action="htreq" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter username here"><br /> <br />
    <input type="text" name="password" placeholder="enter password"><br /> <br />
    <button type="submit">LOGIN HERE</button>
</form>