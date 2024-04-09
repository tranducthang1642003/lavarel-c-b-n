<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Danh mục</title>
</head>
<body>
    
<form action="{{ route('danhmuc.update', $danhmuc->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $danhmuc->name }}">
    <textarea name="mota">{{ $danhmuc->mota }}</textarea>
    <!-- Add other fields here -->
    <button type="submit">Cập nhật danh mục</button>
</form>

</body>
</html>
