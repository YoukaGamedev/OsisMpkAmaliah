<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">

    <div class="container mx-auto px-4 py-10">
        <h1 class="text-4xl font-bold text-center mb-10">Galeri Foto</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @for ($i = 1; $i <= 9; $i++)
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                <img src="https://source.unsplash.com/random/800x600?sig={{ $i }}" alt="Foto {{ $i }}" class="w-full h-60 object-cover hover:scale-105 transition-transform duration-300">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">Foto {{ $i }}</h2>
                    <p class="text-gray-400 text-sm">Deskripsi singkat untuk foto ke-{{ $i }}.</p>
                </div>
            </div>
            @endfor
        </div>
    </div>

</body>
</html>
