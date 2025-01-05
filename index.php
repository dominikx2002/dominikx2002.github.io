<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Download</title>
    <!-- Dodanie pliku CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Download Files</h1>
    <ul class="file-list">
        <?php
        // Ścieżka do katalogu z plikami
        $directory = './files';

        // Sprawdzenie, czy katalog istnieje
        if (is_dir($directory)) {
            // Pobranie listy plików w katalogu
            $files = scandir($directory);
            foreach ($files as $file) {
                // Pomijanie katalogów '.' i '..'
                if ($file !== '.' && $file !== '..') {
                    echo "<li><a href=\"$directory/$file\" download>$file</a></li>";
                }
            }
        } else {
            echo "<li>Folder 'files' nie istnieje!</li>";
        }
        ?>
    </ul>
</body>
</html>
