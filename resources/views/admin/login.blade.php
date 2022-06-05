<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <form action="{{ route('admin_auth') }}" method="post">
        @csrf
        <label for="">EMAIL</label>
        <input type="text" placeholder="email">
        <label for="">PASSWORD</label>
        <input type="text" placeholeder="password">
        <button type="submit">送信</button>
    </form>
</body>

</html>
