<h2>Create Role</h2>

<form action="{{ route('roles.store') }}" method="POST">
    @csrf
    <label for="role_name">Role Name:</label>
    <input type="text" name="role_name" id="role_name" required>
    
    <h3>Permissions</h3>
    @foreach($permissions as $permission)
        <div>
            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}">
            <label>{{ $permission->name }}</label>
        </div>
    @endforeach

    <button type="submit">Create Role</button>
</form>