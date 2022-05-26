<h1>Edit Memeber</h1>
<form action="/uptodate" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$objectholder['id']}}">
    <input type="text" name="lastname" value="{{$objectholder['lastname']}}"><br><br>
    <input type="text" name="firstname" value="{{$objectholder['firstname']}}"><br><br>
    <input type="text" name="firstname" value="{{$objectholder['username']}}"><br><br>
    <button type="submit">submit to upadte members</button>
</form>