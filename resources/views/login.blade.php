<div>
    <form action="{{ route('functionlogin') }}" method="post">

        @csrf
        @session('success')
        <script>
            alert("{{ session('success') }}");
        </script>
        @endsession
        @session('wrong')
        <script>
            alert("{{ session('wrong') }}");
        </script>
        @endsession
        <label for="name">name</label>
        <input type="text" name="name" id="name">

        <label for="password">password</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="submit">
        <a href="register">register</a>
    </form>
</div>
