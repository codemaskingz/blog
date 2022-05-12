<h1>Upload File</h1>
<form action="uploadfile" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="filename" ><br><br><br><br>
    <button type="submit">upload file</button>
</form>