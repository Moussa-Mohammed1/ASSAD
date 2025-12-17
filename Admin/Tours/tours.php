<!DOCTYPE html>
<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>ASSAD Admin - Guided Tours</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#11d452",
                        "background-light": "#f6f8f6",
                        "background-dark": "#102216",
                        "surface-dark": "#28392e",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <link rel="stylesheet" href="/ASSAD/assets/css/styles.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #102216;
        }

        ::-webkit-scrollbar-thumb {
            background: #28392e;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #11d452;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white h-screen flex overflow-hidden font-display selection:bg-primary selection:text-black">
    <div id="loader">
        <div class="spinner" aria-hidden="true"></div>
        <div class="text-sm text-white mt-2">Loading...</div>
    </div>
    <aside
        class="w-64 bg-background-dark border-r border-[#28392e] flex flex-col flex-shrink-0 transition-all duration-300 hidden md:flex">
        <div class="p-6 flex items-center gap-3">
            <div class="bg-center bg-no-repeat bg-cover rounded-full h-10 w-10 shrink-0 shadow-lg shadow-primary/20">
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
                            <path d="M40.007,42s0,6,7,8l-3,5h-.862a2.138,2.138,0,0,0-2.138,2.138V59h6l4-10s7-20-7-21"
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
                <h1 class="text-white text-base font-bold leading-tight truncate">ASSAD Admin</h1>
                <p class="text-[#9db9a6] text-xs font-normal truncate">Virtual Zoo Portal</p>
            </div>
        </div>
        <nav class="flex-1 overflow-y-auto px-4 py-4 flex flex-col gap-2">
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-dark/50 transition-colors group text-[#9db9a6] hover:text-white"
                href="/ASSAD/Admin/dashboard.php">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">dashboard</span>
                <p class="text-sm font-medium leading-normal">Dashboard</p>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-dark/50 transition-colors group text-[#9db9a6] hover:text-white"
                href="/ASSAD/Admin/users/users.php">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">group</span>
                <p class="text-sm font-medium leading-normal">User Management</p>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-dark/50 transition-colors group text-[#9db9a6] hover:text-white"
                href="/ASSAD/Admin/animals/animals.php">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">pets</span>
                <p class="text-sm font-medium leading-normal">Animal Management</p>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-surface-dark/50 transition-colors group text-[#9db9a6] hover:text-white"
                href="/ASSAD/Admin/habitats/habitats.php">
                <span class="material-symbols-outlined group-hover:scale-110 transition-transform">landscape</span>
                <p class="text-sm font-medium leading-normal">Habitats</p>
            </a>
            <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-surface-dark border-l-4 border-primary shadow-sm group"
                href="/ASSAD/Admin/Tours/tours.php">
                <span
                    class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">map</span>
                <p class="text-white text-sm font-medium leading-normal">Guided Tours</p>
            </a>
        </nav>
        <div class="p-4 border-t border-[#28392e]">
            <div
                class="flex items-center gap-3 p-2 rounded-lg bg-surface-dark/50 hover:bg-surface-dark cursor-pointer transition-colors">
                <div class="bg-center bg-no-repeat bg-cover rounded-full h-8 w-8"
                    data-alt="Profile picture of the admin user"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBKhw_hzdz9yoEDpYxdcLkdxEJGsxOm2FEwVJBj3LZ3rAHeY5Na3uNzpt1VCN2GyQBN348ClzgctgUQ-LE70ebh8ZQjAs_HoEo4FEtphuLmCmkcA7JesvqP3r1jVV8GeyA6okkfHYepeQfbA3Qe6m1IugrAfH6-vtFQ5mzPs2dXMklDDx-_iH6M7itv4BWiqejYaxS0OoH6qe4wrtIZbPEFPc_0t1T2Fv4JSw6cTlz5IFbJFjUnOp6NnfYaWOHEe-Gw5oGwkgUV-RUO");'>
                    <script src="/ASSAD/assets/js/preloader.js" defer></script>
                </div>
                <div class="flex flex-col">
                    <p class="text-white text-xs font-bold">Admin User</p>
                    <p class="text-[#9db9a6] text-[10px]">admin@assad.zoo</p>
                </div>
            </div>
        </div>
    </aside>
    <main class="flex-1 flex flex-col h-full overflow-hidden relative">
        <header
            class="flex items-center justify-between px-6 py-4 bg-background-dark/95 border-b border-[#28392e] backdrop-blur-sm z-10">
            <div class="flex items-center gap-4 text-white md:hidden">
                <button class="p-1 rounded-md hover:bg-surface-dark text-white">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <h2 class="text-lg font-bold">Guided Tours</h2>
            </div>
            <div class="hidden md:flex items-center gap-4 text-white">
                <h2 class="text-xl font-bold tracking-tight">Guided Tours Management</h2>
            </div>
            <div class="flex flex-1 justify-end gap-4 items-center">
                <div class="hidden sm:flex relative w-full max-w-md">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-[#9db9a6]">
                        <span class="material-symbols-outlined">search</span>
                    </div>
                    <input
                        class="block w-full pl-10 pr-3 py-2 border-none rounded-lg leading-5 bg-surface-dark text-white placeholder-[#9db9a6] focus:outline-none focus:ring-1 focus:ring-primary sm:text-sm transition-all"
                        placeholder="Search tours, guides, animals..." type="text" />
                </div>
                <div class="flex gap-2">
                    <button
                        class="flex items-center justify-center h-10 w-10 rounded-lg bg-surface-dark text-white hover:bg-primary hover:text-black transition-colors relative">
                        <span class="material-symbols-outlined text-[20px]">notifications</span>
                        <span
                            class="absolute top-2 right-2 h-2 w-2 rounded-full bg-red-500 border border-surface-dark"></span>
                    </button>
                </div>
            </div>
        </header>
        <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
            <div class="max-w-7xl mx-auto flex flex-col gap-8">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div
                        class="flex flex-col p-5 bg-surface-dark rounded-xl border border-white/5 hover:border-primary/30 transition-colors shadow-sm group">
                        <div class="flex justify-between items-start mb-4">
                            <div
                                class="p-2 bg-primary/10 rounded-lg text-primary group-hover:bg-primary group-hover:text-black transition-colors">
                                <span class="material-symbols-outlined">tour</span>
                            </div>
                            <span
                                class="text-[#0bda43] text-xs font-bold bg-[#0bda43]/10 px-2 py-1 rounded-full">+3</span>
                        </div>
                        <p class="text-[#9db9a6] text-sm font-medium">Active Tours</p>
                        <p class="text-white text-3xl font-bold mt-1">12</p>
                    </div>
                    <div
                        class="flex flex-col p-5 bg-surface-dark rounded-xl border border-white/5 hover:border-primary/30 transition-colors shadow-sm group">
                        <div class="flex justify-between items-start mb-4">
                            <div
                                class="p-2 bg-blue-500/10 rounded-lg text-blue-500 group-hover:bg-blue-500 group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined">confirmation_number</span>
                            </div>
                            <span
                                class="text-[#0bda43] text-xs font-bold bg-[#0bda43]/10 px-2 py-1 rounded-full">+24%</span>
                        </div>
                        <p class="text-[#9db9a6] text-sm font-medium">Bookings Today</p>
                        <p class="text-white text-3xl font-bold mt-1">145</p>
                    </div>
                    <div
                        class="flex flex-col p-5 bg-surface-dark rounded-xl border border-white/5 hover:border-primary/30 transition-colors shadow-sm group">
                        <div class="flex justify-between items-start mb-4">
                            <div
                                class="p-2 bg-purple-500/10 rounded-lg text-purple-500 group-hover:bg-purple-500 group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined">person_apron</span>
                            </div>
                            <span
                                class="text-[#9db9a6] text-xs font-bold bg-white/5 px-2 py-1 rounded-full">Available</span>
                        </div>
                        <p class="text-[#9db9a6] text-sm font-medium">Guides Online</p>
                        <p class="text-white text-3xl font-bold mt-1">8</p>
                    </div>
                    <div
                        class="flex flex-col p-5 bg-surface-dark rounded-xl border border-white/5 hover:border-primary/30 transition-colors shadow-sm group">
                        <div class="flex justify-between items-start mb-4">
                            <div
                                class="p-2 bg-orange-500/10 rounded-lg text-orange-500 group-hover:bg-orange-500 group-hover:text-white transition-colors">
                                <span class="material-symbols-outlined">star</span>
                            </div>
                            <span class="text-[#9db9a6] text-xs font-bold bg-white/5 px-2 py-1 rounded-full">Avg</span>
                        </div>
                        <p class="text-[#9db9a6] text-sm font-medium">Tour Rating</p>
                        <p class="text-white text-3xl font-bold mt-1">4.8</p>
                    </div>
                </div>
                <div class="grid grid-cols-1  gap-6">
                    <div class="w-full flex flex-col gap-6">
                        <div
                            class="bg-surface-dark rounded-xl border border-white/5 overflow-hidden flex flex-col h-full">
                            <div
                                class="p-6 border-b border-white/5 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                                <div>
                                    <h3 class="text-white text-lg font-bold">Upcoming &amp; Active Tours</h3>
                                    <p class="text-[#9db9a6] text-sm">Manage schedules, guides, and capacity.</p>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="px-3 py-1.5 rounded-lg bg-primary text-black text-sm font-medium hover:bg-white transition-colors shadow-lg shadow-primary/20">All
                                        Tours</button>
                                    <button
                                        class="px-3 py-1.5 rounded-lg bg-white/5 text-[#9db9a6] text-sm font-medium hover:text-white hover:bg-white/10 transition-colors">Today</button>
                                    <button
                                        class="px-3 py-1.5 rounded-lg bg-white/5 text-[#9db9a6] text-sm font-medium hover:text-white hover:bg-white/10 transition-colors">Pending</button>
                                </div>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-left border-collapse">
                                    <thead class="bg-black/20 text-[#9db9a6] text-xs uppercase font-medium">
                                        <tr>
                                            <th class="px-6 py-4">Tour Name</th>
                                            <th class="px-6 py-4">Guide</th>
                                            <th class="px-6 py-4">Schedule</th>
                                            <th class="px-6 py-4">Capacity</th>
                                            <th class="px-6 py-4">Status</th>
                                            <th class="px-6 py-4 text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-white/5">
                                        <tr class="group hover:bg-white/5 transition-colors">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="h-10 w-10 rounded-lg bg-cover bg-center shrink-0 shadow-sm"
                                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCBN31E-LnMXibKOxw-5VyATd4Ac25sT9zyd1hccmY6RDxSfeiMrYUDVmgQZEsT6CemdFlOXAsjSRxifHqf_wH-90cIEhpR-n847Fz6JeQ8Za1bVEaCWTPbgZTMW2O7lY-29MBE0w73DMOoggjmS3LU61NenV4On70bkN0f3JYaJpcvnBPUm25l3CrwoZBeUc9ietV-1YNGbuFMXQJSvN-b8T09hw6BWKXY_DzWQAzziEs2sJu_mtTwH_0VgxoEsrjpldMjzkc3nCcl");'>
                                                    </div>
                                                    <div>
                                                        <p class="text-white text-sm font-bold">Pride Lands Safari</p>
                                                        <p class="text-[#9db9a6] text-xs">Featured: Lions</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-2">
                                                    <div
                                                        class="h-6 w-6 rounded-full bg-blue-500 flex items-center justify-center text-[10px] text-white font-bold">
                                                        MK</div>
                                                    <span class="text-white text-sm">Malik K.</span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="text-white text-sm">Today</p>
                                                <p class="text-[#9db9a6] text-xs">10:00 AM - 11:30 AM</p>
                                            </td>
                                            <td class="px-6 py-4 min-w-[140px]">
                                                <div class="flex justify-between mb-1">
                                                    <span class="text-xs text-white">28/30</span>
                                                    <span class="text-xs text-[#0bda43]">93%</span>
                                                </div>
                                                <div class="h-1.5 w-full bg-white/5 rounded-full overflow-hidden">
                                                    <div class="h-full bg-[#0bda43] w-[93%] rounded-full"></div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-[#0bda43]/10 text-[#0bda43] border border-[#0bda43]/20">
                                                    <span
                                                        class="w-1.5 h-1.5 rounded-full bg-[#0bda43] animate-pulse"></span>
                                                    Live
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <button class="text-[#9db9a6] hover:text-white transition-colors p-1">
                                                    <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="group hover:bg-white/5 transition-colors">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="h-10 w-10 rounded-lg bg-cover bg-center shrink-0 shadow-sm"
                                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBpKMFxyrxGaawgQIKy0d09AWsusaT1tuJt6UGTSxEGbrx6wdj5VxA9PkzGfFWau4dMq3P0oDS5ga3L-OCProEcam58LoR-9UBjzVKxjqaIplYSLNdoi7rM14JXs3kYKbNQaGhpq-Y0wZLqPVpJuUC5UEYXUpoEj3KHntC51SHuRx7oZv4d7DqqA31XjENRyVeQC21ORqwmYDj7b96KE3uPwgFf_A-zYTJafR6ZGghGlpdeOd4YN1hf7niAn8Clz9cTgrEDNC_NwTy8");'>
                                                    </div>
                                                    <div>
                                                        <p class="text-white text-sm font-bold">Elephant Wisdom</p>
                                                        <p class="text-[#9db9a6] text-xs">Featured: Elephants</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-2">
                                                    <div
                                                        class="h-6 w-6 rounded-full bg-purple-500 flex items-center justify-center text-[10px] text-white font-bold">
                                                        AJ</div>
                                                    <span class="text-white text-sm">Aisha J.</span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="text-white text-sm">Today</p>
                                                <p class="text-[#9db9a6] text-xs">02:00 PM - 03:00 PM</p>
                                            </td>
                                            <td class="px-6 py-4 min-w-[140px]">
                                                <div class="flex justify-between mb-1">
                                                    <span class="text-xs text-white">12/25</span>
                                                    <span class="text-xs text-[#9db9a6]">48%</span>
                                                </div>
                                                <div class="h-1.5 w-full bg-white/5 rounded-full overflow-hidden">
                                                    <div class="h-full bg-primary w-[48%] rounded-full"></div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                                    Scheduled
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <button class="text-[#9db9a6] hover:text-white transition-colors p-1">
                                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr class="group hover:bg-white/5 transition-colors">
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="h-10 w-10 rounded-lg bg-cover bg-center shrink-0 shadow-sm"
                                                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBXYr6bkHu7Nqeo36wN2p1Is7uri7_WfHmgeaU1TDHpIDyBqRafqLqPvCTE75RDKjO7ZZaO3XBrUT9QSAco1sBdjqMeVDrsLAxqlKn9Dc6NmkI4SajI00Lui76emH3L2oyTPW1HEjEGSpzn8BVkX2QdxquIA_Pn6DZdiayVg01rq_3WobpJPGZvHqh0f0m2GJ6HHr4v_l3wIVLMrAvll9O2wOkuxizrrqWzTttQdMemDrNLp4q3TvqE43Xjd2EP0iCDvrZCfhQR7mSV");'>
                                                    </div>
                                                    <div>
                                                        <p class="text-white text-sm font-bold">Tall Tales</p>
                                                        <p class="text-[#9db9a6] text-xs">Featured: Giraffes</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-center gap-2">
                                                    <div
                                                        class="h-6 w-6 rounded-full bg-orange-500 flex items-center justify-center text-[10px] text-white font-bold">
                                                        KO</div>
                                                    <span class="text-white text-sm">Kofi O.</span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <p class="text-white text-sm">Tomorrow</p>
                                                <p class="text-[#9db9a6] text-xs">09:00 AM - 10:30 AM</p>
                                            </td>
                                            <td class="px-6 py-4 min-w-[140px]">
                                                <div class="flex justify-between mb-1">
                                                    <span class="text-xs text-white">40/40</span>
                                                    <span class="text-xs text-red-400">Full</span>
                                                </div>
                                                <div class="h-1.5 w-full bg-white/5 rounded-full overflow-hidden">
                                                    <div class="h-full bg-red-500 w-[100%] rounded-full"></div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                                    Scheduled
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <button class="text-[#9db9a6] hover:text-white transition-colors p-1">
                                                    <span class="material-symbols-outlined text-[20px]">edit</span>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="p-4 border-t border-white/5 flex justify-center">
                                <button
                                    class="text-primary text-sm font-medium hover:text-white transition-colors flex items-center gap-2">
                                    View Full Schedule <span
                                        class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>