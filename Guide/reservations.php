<?php
// 1. Database Connection
$host = 'localhost';
$dbname = 'assad';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// 2. Handle Cancellation (Delete)
if (isset($_POST['delete_id'])) {
    $stmt = $pdo->prepare("DELETE FROM reservation WHERE id_reservation = ?");
    $stmt->execute([$_POST['delete_id']]);
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit;
}

// 3. Fetch Reservations
// Note: 'visitesguidees' has no image column. 'utilisateur' has no prenom column.
$sql = "
    SELECT 
        r.id_reservation,
        r.nbpersonnes,
        r.datereservations,
        u.nom,
        u.email,
        v.titre AS tour_name,
        v.dateheure AS tour_date,
        v.duree,
        v.prix
    FROM reservation r
    JOIN utilisateur u ON r.id_user = u.id_user
    JOIN visitesguidees v ON r.id_visite = v.id_visite
    ORDER BY r.datereservations DESC
";

$stmt = $pdo->query($sql);
$reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tour Reservations List - Virtual Zoo CAN 2025</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#11d452",
                        "background-light": "#f6f8f6",
                        "background-dark": "#102216",
                        "surface-dark": "#1c2e22",
                        "surface-light": "#ffffff",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-gray-900 dark:text-gray-100 min-h-screen flex flex-col overflow-x-hidden">
    <header
        class="sticky top-0 z-50 w-full border-b border-gray-200 dark:border-[#28392e] bg-surface-light dark:bg-[#111813]">
        <div class="px-6 lg:px-10 py-3 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div
                    class="bg-center bg-no-repeat bg-cover rounded-full h-10 w-10 shrink-0 shadow-lg shadow-primary/20">
                    <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" fill="#000000"
                        transform="matrix(-1, 0, 0, 1, 0, 0)">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <title>lion</title>
                            <g id="lion">
                                <circle cx="36.5" cy="25.5" r="21.5" style="fill:#e5efef"></circle>
                                <circle cx="13" cy="7" r="2"
                                    style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </circle>
                                <circle cx="56.044" cy="22.014" r="1.069" style="fill:#4c241d"></circle>
                                <line x1="53" y1="5" x2="56" y2="8"
                                    style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </line>
                                <line x1="56" y1="5" x2="53" y2="8"
                                    style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </line>
                                <polygon points="9 17 21 17 21 19 15 28 5 27 3 22 7 20 9 17"
                                    style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </polygon>
                                <path d="M16,34V55h-.862A2.138,2.138,0,0,0,13,57.138V59h7l2.5-15.5"
                                    style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </path>
                                <path
                                    d="M40.007,42s0,6,7,8l-3,5h-.862a2.138,2.138,0,0,0-2.138,2.138V59h6l4-10s7-20-7-21"
                                    style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </path>
                                <path
                                    d="M20,41V55h-.862A2.138,2.138,0,0,0,17,57.138V59h7l2.5-15.5A14.594,14.594,0,0,0,34,45c5.27-.6,11.532-3.578,15-3a7.966,7.966,0,0,0,6.5,7.5l-1,5.5h-.862A2.138,2.138,0,0,0,51.5,57.138V59h6l2-10.5-1-4s8-16-6-17-17-1-17-1"
                                    style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </path>
                                <path
                                    d="M38,15l1.138.853A10.729,10.729,0,0,0,45.578,18H58a5,5,0,0,1,5,5v1a5,5,0,0,1-5,5h-.283"
                                    style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </path>
                                <ellipse cx="35.5" cy="12" rx="2.5" ry="3.703"
                                    transform="translate(0.223 24.639) rotate(-38.389)"
                                    style="fill:#bf7e68;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </ellipse>
                                <circle cx="11.044" cy="20.014" r="1.069" style="fill:#4c241d"></circle>
                                <line x1="49" y1="42" x2="49" y2="38"
                                    style="fill:#ffce56;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </line>
                                <line x1="5" y1="59" x2="35" y2="59"
                                    style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </line>
                                <line x1="39" y1="59" x2="62" y2="59"
                                    style="fill:none;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </line>
                                <path
                                    d="M41,26l-6.74-2.384L29.7,16.324a8.578,8.578,0,0,0-8.089-4c-1.563.147-3.444.361-5.613.671-7,1-7,4-7,4h8.5a1.5,1.5,0,0,1,0,3H16v2l-5,5H5l1,3h4L20,41,31,31l8.4-1.778C40,29,41.888,27.331,41,26Z"
                                    style="fill:#bf7e68;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </path>
                                <polyline points="27 24 27 27 31 31"
                                    style="fill:#bf7e68;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </polyline>
                                <polyline points="20 25 20 30 25.678 35.838"
                                    style="fill:#bf7e68;stroke:#4c241d;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px">
                                </polyline>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="flex flex-col overflow-hidden">
                    <h1
                        class="text-gray-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em] hidden sm:block">
                        ASSAD Guide</h1>
                </div>
            </div>
            <div class="flex items-center gap-4 sm:gap-8">
                <nav class="hidden md:flex items-center gap-6">
                    <a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary text-sm font-medium transition-colors"
                        href="/ASSAD/Guide/dashboard.php">dashboard</a>
                    <a class="text-primary text-sm font-medium" href="/ASSAD/Guide/Tours/tours.php">My Tours</a>
                </nav>
                <button
                    class="hidden sm:flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-9 px-4 bg-primary text-[#111813] text-sm font-bold shadow-lg hover:bg-opacity-90 transition-all">
                    <span>Create Tour</span>
                </button>
                <a href="/ASSAD/logout.php" title="Logout"
                    class="hidden md:inline-flex items-center justify-center size-9 rounded-lg text-gray-600 dark:text-gray-300 hover:text-red-500 transition-colors">
                    <span class="material-symbols-outlined">logout</span>
                </a>
                <a href="/ASSAD/Guide/profile.php" title="Profile">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-transparent hover:border-primary transition-colors cursor-pointer"
                        data-alt="User profile avatar showing a smiling guide in uniform"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCoCV4spzIBmv7a6A9BMjRgr_a0agYRa3LNyDSYHzzGnguO62dec_My0oka-Oxvi_uaolPsu0PM5LiuCTdcutulEdx2zQ49D4wy4z5h0fQ9mhp3Z8iKFoS0m47NIlOsAnEN2C8cDVCtr7YHZcgQcqlAFbBghwbmb5o6ckkCC8blFRwJKx71mavngHe1PiHJ8S3ZKp_dlOEIGgzYWrcUjAjgo9tk0yo2aBJ9z6x1CtkdEUG-yDr_hnHiDheFPxMH4gXm_yyiO8GCR7ZW");'>
                    </div>
                </a>
            </div>
        </div>
    </header>
    <main class="flex-grow flex justify-center py-6 sm:py-10 px-4 sm:px-6 md:px-10 lg:px-40">
        <div class="flex flex-col w-full max-w-6xl gap-6">
            
            <div
                class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-2 border-b border-gray-200 dark:border-[#28392e]">
                <div class="flex flex-col gap-2">
                    <h1 class="text-3xl md:text-4xl font-black tracking-tight text-gray-900 dark:text-white">Tours
                        Reservations</h1>
                    <p class="text-gray-500 dark:text-[#9db9a6] text-base max-w-2xl">
                        Track incoming bookings, manage visitor lists, and handle cancellations for your upcoming guided
                        tours.
                    </p>
                </div>
                
            </div>
            <div class="flex flex-col gap-4">

                <?php if (count($reservations) > 0): ?>
                    <?php foreach ($reservations as $row): ?>
                        <?php
                            // Calculate total price: nbpersonnes * prix
                            // The database has 'prix' in visitesguidees
                            $total_price = $row['nbpersonnes'] * $row['prix'];
                        ?>
                        <div class="bg-surface-light dark:bg-surface-dark border border-gray-200 dark:border-[#28392e] rounded-xl p-5 shadow-sm hover:border-primary/50 dark:hover:border-primary/50 transition-all group flex flex-col gap-4 relative overflow-hidden">
                            
                            <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary/20 group-hover:bg-primary transition-colors"></div>

                            <div class="flex flex-col md:flex-row justify-between gap-6 pl-3">
                                <div class="flex-1 flex flex-col gap-2">
                                    <div class="flex items-center gap-2">
                                        <div class="h-8 w-8 rounded-full bg-gray-100 dark:bg-[#28392e] flex items-center justify-center text-xs font-bold text-gray-500">
                                            <?php echo strtoupper(substr($row['nom'], 0, 1)); ?>
                                        </div>
                                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">
                                            <?php echo htmlspecialchars($row['nom']); ?>
                                        </h3>
                                    </div>
                                    
                                    <h4 class="text-primary font-bold text-base mt-1">
                                        <?php echo htmlspecialchars($row['tour_name']); ?>
                                    </h4>

                                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-2 text-sm text-gray-500 dark:text-[#9db9a6]">
                                        
                                        <div class="flex flex-col">
                                            <span class="text-xs uppercase tracking-wider text-gray-400">Booked On</span>
                                            <span class="font-medium text-gray-700 dark:text-gray-200">
                                                <?php echo date('M d, Y', strtotime($row['datereservations'])); ?>
                                            </span>
                                        </div>

                                        <div class="flex flex-col">
                                            <span class="text-xs uppercase tracking-wider text-gray-400">Tour Date</span>
                                            <span class="font-medium text-gray-700 dark:text-gray-200">
                                                <?php echo date('M d, Y - H:i', strtotime($row['tour_date'])); ?>
                                            </span>
                                        </div>

                                        <div class="flex flex-col">
                                            <span class="text-xs uppercase tracking-wider text-gray-400">Details</span>
                                            <span class="font-medium text-gray-700 dark:text-gray-200">
                                                <?php echo htmlspecialchars($row['nbpersonnes']); ?> Person(s) &bull; <?php echo htmlspecialchars($row['duree']); ?>m
                                            </span>
                                        </div>

                                        <div class="flex flex-col">
                                            <span class="text-xs uppercase tracking-wider text-gray-400">Total Est.</span>
                                            <span class="font-bold text-gray-900 dark:text-white">
                                                $<?php echo number_format($total_price, 2); ?>
                                            </span>
                                        </div>

                                    </div>
                                </div>

                                <div class="flex items-center gap-2 md:self-start pt-2">
                                    <a href="mailto:<?php echo htmlspecialchars($row['email']); ?>" 
                                       class="h-9 px-3 rounded-lg flex items-center justify-center gap-2 bg-gray-100 dark:bg-[#28392e] text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-[#344a3c] transition-colors text-xs font-bold uppercase tracking-wide">
                                        <span class="material-symbols-outlined text-base">mail</span>
                                        <span class="hidden lg:inline">Message</span>
                                    </a>
                                    <form method="POST" onsubmit="return confirm('Are you sure you want to remove this reservation?');">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id_reservation']; ?>">
                                        <button type="submit" class="size-9 rounded-lg flex items-center justify-center text-gray-500 dark:text-[#9db9a6] hover:bg-red-500/10 hover:text-red-500 transition-colors" title="Cancel Booking">
                                            <span class="material-symbols-outlined">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="pl-3 mt-2 pt-3 border-t border-gray-100 dark:border-[#28392e] flex justify-between items-center">
                                <span class="text-xs text-gray-400 font-mono">ID: #RES-<?php echo htmlspecialchars($row['id_reservation']); ?></span>
                                <span class="text-xs text-gray-500"><?php echo htmlspecialchars($row['email']); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="p-12 text-center bg-surface-light dark:bg-surface-dark border-2 border-dashed border-gray-200 dark:border-[#28392e] rounded-xl">
                        <span class="material-symbols-outlined text-4xl text-gray-400 mb-2">event_busy</span>
                        <p class="text-gray-500 dark:text-[#9db9a6]">No reservations found.</p>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </main>

</body>

</html>