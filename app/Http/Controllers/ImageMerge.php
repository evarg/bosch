<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instalation;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class ImageMerge extends Controller
{
    public function index()
    {

            // Ścieżka do katalogu z plikami PNG
    $directory = storage_path('png'); // Katalog na dysku

    // Pobierz listę plików PNG w katalogu
    $files = glob($directory . '/*.png'); // Wyszukaj pliki z rozszerzeniem .png

    if (empty($files)) {
        return response()->json(['error' => 'Nie znaleziono plików PNG'], 404);
    }

    $manager = new ImageManager(new Driver());

    // Iteruj po plikach i załaduj je
    $images = [];
    foreach ($files as $file) {
        // Wczytaj obraz do obiektu Intervention Image
        $image = Image::make($file);
        $images[] = [
            'path' => $file,
            'width' => $image->width(),
            'height' => $image->height(),
        ];
    }

    return response()->json(['images' => $images]);

        $files = $request->file('images'); // Wysyłane pliki PNG

if (!$files || count($files) < 2) {
    return response()->json(['error' => 'Prześlij co najmniej dwa obrazy'], 400);
}

// Tablica dla obrazów i ich wymiarów
$images = [];
$totalWidth = 0;
$maxHeight = 0;

// Przetwórz obrazy i zbierz ich wymiary
foreach ($files as $file) {
    $img = Image::make($file);
    $images[] = $img;
    $totalWidth += $img->width();
    $maxHeight = max($maxHeight, $img->height());
}

// Utwórz pusty obraz o odpowiednich wymiarach
$canvas = Image::canvas($totalWidth, $maxHeight, [255, 255, 255, 0]); // Przezroczyste tło

// Połącz obrazy poziomo (obok siebie)
$currentX = 0;
foreach ($images as $img) {
    $canvas->insert($img, 'top-left', $currentX, 0); // Wstaw obraz
    $currentX += $img->width(); // Przesuń pozycję X
}

// Zapisz wynikowy obraz lub zwróć go jako odpowiedź
$outputPath = storage_path('app/public/merged_image.png');
$canvas->save($outputPath);

return response()->json(['message' => 'Obrazy zostały połączone!', 'path' => $outputPath]);
        return view('instalation.index', compact('instalations'));
    }

}
