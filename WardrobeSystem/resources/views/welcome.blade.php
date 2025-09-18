<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wardrobe System</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #222;
            padding: 20px 40px;
            color: white;
            text-align: center;
        }

        main {
            padding: 40px 20px;
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .btn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 30px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #45a049;
        }

        footer {
            margin-top: 50px;
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to Your Wardrobe</h1>
    <p>Organize. Plan. Simplify.</p>
</header>

<main>
    <h2>Get Started</h2>
    <p>Manage your clothes, plan your outfits, and stay stylish every day.</p>

    <div class="button-group">
        <a href="{{ route('attires') }}" class="btn">View Wardrobe</a>
        <a href="{{ route('create') }}" class="btn">Add New Item</a>
        {{-- <a href="{{ route('outfits.index') }}" class="btn">Outfit Planner</a> --}}
    </div>
</main>

<footer>
    &copy; {{ date('Y') }} Wardrobe System. All rights reserved.
</footer>

</body>
</html>
