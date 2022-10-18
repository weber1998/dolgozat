<form action="/api/tasks/{{$task->id}}" method="post">
    {{csrf_field}}
    {{method_field ('PUT')}}
<!-- a name fontos, hogy a mezo neve legyen! -->
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="description" placeholder="Oescription">
    <select name="user_id" placeholder="User rd">
        @foreach ($users as $user)
            <option value="{{$user->id}}"
            {{$user->id == $task->user_id ? 'selected ' : "" }}
            >{{$user ->name})</option>
        @endforeach
    </select>
    <input type="date" name="end_date" placeholder="End_date">
    <select name="status" placeholder="status">"
        <option value=l
        <?php echo $task->status == 1 ? 'selected' : '' ?>
        >Open</option>
        <option value=0
        <?php echo $task->status == 0 ? 'selected' : '' ?>
        >Closed</option>
    </select>
    <input type="submit" value="ok">
</form>
