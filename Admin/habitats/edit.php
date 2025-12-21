<?php
    include './../../config.php';

    $id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
    if ($id <= 0) {
        header('Location: habitats.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
        $typeclimat = isset($_POST['typeclimat']) ? $_POST['typeclimat'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $zonezoo = isset($_POST['zonezoo']) ? $_POST['zonezoo'] : '';

        $stmt = $conn->prepare("UPDATE habitat SET nom = ?, typeclimat = ?, `description` = ?, zonezoo = ? WHERE id_habitat = ?");
        $stmt->bind_param('ssssi', $nom, $typeclimat, $description, $zonezoo, $id);
        $stmt->execute();
        $stmt->close();

        header('Location: habitats.php');
        exit;
    }

    $stmt = $conn->prepare("SELECT * FROM habitat WHERE id_habitat = ? LIMIT 1");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $res = $stmt->get_result();
    $hab = $res->fetch_assoc();
    $stmt->close();

    if (!$hab) {
        header('Location: habitats.php');
        exit;
    }

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Edit Habitat - <?php echo htmlspecialchars($hab['nom']); ?></title>
        <link rel="stylesheet" href="/ASSAD/assets/css/styles.css">
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    </head>
    <body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white h-screen font-display">
        <main class="max-w-3xl mx-auto p-6">
            <a href="habitats.php" class="text-sm text-primary">&larr; Back</a>
            <h1 class="text-2xl font-bold text-white mt-4 mb-4">Edit Habitat</h1>
            <form method="post" action="edit.php?id=<?php echo $id; ?>" class="space-y-4">
                <div>
                    <label class="text-sm text-[#9db9a6] block mb-1">Habitat Name</label>
                    <input name="nom" required class="w-full bg-surface-dark border-none rounded-lg text-white py-2.5" value="<?php echo htmlspecialchars($hab['nom']); ?>">
                </div>
                <div>
                    <label class="text-sm text-[#9db9a6] block mb-1">Biome Type</label>
                    <input name="typeclimat" required class="w-full bg-surface-dark border-none rounded-lg text-white py-2.5" value="<?php echo htmlspecialchars($hab['typeclimat']); ?>">
                </div>
                <div>
                    <label class="text-sm text-[#9db9a6] block mb-1">Description</label>
                    <textarea name="description" rows="4" class="w-full bg-surface-dark border-none rounded-lg text-white py-2.5"><?php echo htmlspecialchars($hab['description']); ?></textarea>
                </div>
                <div>
                    <label class="text-sm text-[#9db9a6] block mb-1">Area / Zone</label>
                    <input name="zonezoo" class="w-full bg-surface-dark border-none rounded-lg text-white py-2.5" value="<?php echo htmlspecialchars($hab['zonezoo']); ?>">
                </div>
                <div class="flex gap-3">
                    <button type="button" onclick="location.href='habitats.php'" class="py-2.5 px-4 rounded-lg border border-white/10 text-white">Cancel</button>
                    <button type="submit" class="py-2.5 px-4 rounded-lg bg-primary text-black">Save Changes</button>
                </div>
            </form>
        </main>
    </body>
    </html>
