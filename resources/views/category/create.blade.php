<h1>This is category form</h1>
<form action="/category" method="post">
    @csrf
    {{-- Cross Site Request Forgery --}}
    Name: <input type="text" name="name"><br>
    Description: <textarea name="description"></textarea><br>
    <button>Save</button>
</form>