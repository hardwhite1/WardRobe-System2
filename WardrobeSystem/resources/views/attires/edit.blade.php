<style>
    .form-container {
        width: 400px;
        margin: 0 auto;
        background: #fdfdfd;
        padding: 25px;
        border: 1px solid #eee;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        font-family: 'Segoe UI', sans-serif;
    }

    .form-container label {
        display: block;
        margin-bottom: 5px;
        font-weight: 600;
        color: #333;
    }

    .quote-box {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f0f4f8;
        border-left: 5px solid #007bff;
        padding: 15px 25px;
        margin-bottom: 30px;
        border-radius: 6px;
        color: #333;
    }

    .form-container input {
        width: 100%;
        padding: 8px 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-container button {
        background: #007bff;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .form-container button:hover {
        background: #0056b3;
    }

    .error-box {
        background: #ffe6e6;
        color: #cc0000;
        border: 1px solid #cc0000;
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    .error-box ul {
        margin: 0;
        padding-left: 20px;
    }
</style>
<div class="form-container">
    <form action="{{ route('update', $attiresModel->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

            <label for="name">Name:</label>
            <input type="text" name="name" value="{{$attiresModel->name}}">
            
            <label for="size">Size</label>
            <input type="text" name="size" value="{{ $attiresModel->size}}">

            <label for="color">Color:</label>
            <input type="text" name="color" value="{{ $attiresModel->color}}">

            <label for="price">Price:</label>
            <input type="number" name="price" value="{{ $attiresModel->price }}">

            <label for="image">Image</label>
            <input type="file" name="image" value="{{ $attiresModel->image }}">
            <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('welcome') }}'">
                 Cancel
            </button>
            <button type="submit">Submit</button>
    </form>
</div>