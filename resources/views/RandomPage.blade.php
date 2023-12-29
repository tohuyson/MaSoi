<html>
<head>
    <title>Tên View</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<form method="post" action="{{ route('postArrays') }}">
    @csrf
    <label for="mang1">Nhập mảng 1:</label>
    <textarea class="styled-input" type="text" name="mang1" id="mang1" rows="6" cols="100" required >  </textarea>
    <div>
        <br>
    </div>
    <label for="mang2">Nhập mảng 2:</label>
    <textarea class="styled-input" type="text" name="mang2" id="mang2" rows="6" cols="100" required ></textarea>

    <button type="submit">Gửi</button>
</form>
</body>
</html>
