<div>
    <form action="{{ route('registerfunction') }}" method="post">
        @csrf

        <label for="name">name</label>
        <input type="text" name="name" id="name">
        @error('name')
        {{ $message }}
        @enderror
        <label for="password">password</label>
        <input type="password" name="password" id="password">
        @error('password')
        {{ $message }}
        @enderror
        <label for="confirmpassword">confirm password</label>
        <input type="password" name="password_confirmation" id="confirmpassword">
        <input type="submit" name="submit">
        @error('message')
        <script>
            alert({{ $message }});
        </script>
        @enderror
    </form>
</div>
