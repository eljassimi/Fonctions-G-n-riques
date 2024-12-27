<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Packages</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Liste des Packages</h1>
            <a href="?action=Create" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Ajouter un package</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
             <?php foreach($packages as $package):?>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="flex justify-between">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2"><?= $package['title'] ?></h2>
                    <a href="?action=delete&id=<?= $package['id'] ?>">
                    <i class='bx bxs-trash text-3xl text-red-600'></i>
                    </a>
                    </div>
                    
                    <p class="text-gray-600 mb-4">Description : <?=$package['description']?></p>
                    <div class="flex justify-between items-center text-sm text-gray-500">
                        <span><?=$package["created_at"]?></span>
                        <span>Par: John Doe</span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>