<form action="{{ url('update-contact/'.$edt->id) }}" method="post">
    @csrf
    <input type="text" name="name" value="{{$edt->name}}">
    <input type="text" name="email" value="{{$edt->email}}">
    <input type="text" name="phone" value="{{$edt->phone}}">
    <input type="text" name="description" value="{{$edt->description}}">
    <input type="submit" name="submit" value="submit">
</form>