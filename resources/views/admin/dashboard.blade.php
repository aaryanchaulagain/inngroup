<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Studio | Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-[#F9FAFB] text-slate-900">

    <div class="flex h-screen overflow-hidden">
        <aside class="w-72 bg-white border-r border-slate-200 flex flex-col">
            <div class="p-8">
                <div class="flex items-center gap-3 mb-10">
                    <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white font-bold">C</div>
                    <span class="text-xl font-bold tracking-tight">ContactHub</span>
                </div>
                <nav class="space-y-1">
                    <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider mb-3 px-3">Main Menu</p>
                    <a href="{{ route('admin.dashboard') }}"
                        class="flex items-center gap-3 px-3 py-2 text-sm font-medium bg-blue-50 text-blue-700 rounded-md">
                        <span>📊</span> Dashboard
                    </a>
                </nav>
            </div>

            <div class="mt-auto p-6 border-t border-slate-100">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold">
                        {{ strtoupper(substr($adminName, 0, 1)) }}
                    </div>
                    <div>
                        <p class="text-sm font-semibold">{{ $adminName }}</p>
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="text-xs text-red-500 hover:underline">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </aside>

        <main class="flex-1 flex flex-col overflow-hidden">
            <header class="h-16 bg-white/70 backdrop-blur-md border-b border-slate-200 px-8 flex items-center justify-between z-10">
                <div class="relative w-96">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">🔍</span>
                    <input type="text" placeholder="Search contacts..."
                        class="block w-full pl-10 pr-3 py-2 border border-slate-200 rounded-lg text-sm bg-slate-50 outline-none">
                </div>
            </header>

            <section class="flex-1 overflow-y-auto p-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-10">
                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                        <p class="text-xs font-medium text-slate-500 uppercase tracking-wider">Total Appointments</p>
                        <h3 class="text-3xl font-bold mt-1">{{ $totalContacts }}</h3>
                        <p class="text-xs text-green-600 mt-2 font-medium">Synced Live</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="p-6 border-b border-slate-100">
                        <h2 class="font-bold text-slate-800">Appointment Requests</h2>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-slate-50/50 text-slate-500 text-[11px] uppercase font-bold tracking-widest">
                                <tr>
                                    <th class="px-6 py-4">Name</th>
                                    <th class="px-6 py-4">Email</th>
                                    <th class="px-6 py-4">WhatsApp</th>
                                    <th class="px-6 py-4">Department</th>
                                    <th class="px-6 py-4">Date & Time</th>
                                    <th class="px-6 py-4">Message</th>
                                    <th class="px-6 py-4 text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-slate-100">
                                @forelse($contacts as $contact)
                                    <tr class="group hover:bg-slate-50/80 transition-all">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-xs">
                                                    {{ strtoupper(substr($contact->name, 0, 2)) }}
                                                </div>
                                                <span class="text-sm font-semibold text-slate-800">{{ $contact->name }}</span>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 text-sm text-slate-600">
                                            {{ $contact->email }}
                                        </td>

                                        <td class="px-6 py-4 text-sm">
                                            @if($contact->whatsapp)
                                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact->whatsapp) }}"
                                                   target="_blank"
                                                   class="text-green-600 font-medium hover:underline flex items-center gap-1">
                                                    <span>{{ $contact->whatsapp }}</span>
                                                </a>
                                            @else
                                                <span class="text-slate-400 italic text-xs">N/A</span>
                                            @endif
                                        </td>

                                        <td class="px-6 py-4">
                                            <span class="px-2 py-1 bg-slate-100 text-slate-600 rounded text-[10px] font-bold uppercase tracking-wide">
                                                {{ $contact->department }}
                                            </span>
                                        </td>

                                        <td class="px-6 py-4 text-sm text-slate-600">
                                            @if ($contact->appointment_date)
                                                <div class="font-medium text-slate-700">
                                                    {{ \Carbon\Carbon::parse($contact->appointment_date)->format('M d, Y') }}
                                                </div>
                                                <div class="text-[10px] text-slate-400">
                                                    {{ \Carbon\Carbon::parse($contact->appointment_date)->format('g:i A') }}
                                                </div>
                                            @else
                                                <span class="text-slate-400 italic text-xs">Not set</span>
                                            @endif
                                        </td>

                                        <td class="px-6 py-4">
                                            <p class="text-xs text-slate-500 max-w-[180px] truncate" title="{{ $contact->message }}">
                                                {{ $contact->message }}
                                            </p>
                                        </td>

                                        <td class="px-6 py-4 text-center">
                                            <button class="text-slate-400 hover:text-blue-600 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="px-8 py-12 text-center text-slate-400">
                                            No appointment requests found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>
