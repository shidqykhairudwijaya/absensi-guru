<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Guru</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-5xl mx-auto px-6 py-10">

        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">
                Jadwal Mengajar Guru
            </h1>

            <p class="text-gray-500 mt-2">
                SMPN 8 Karawang Barat
            </p>
        </div>

        <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($schedules as $schedule)

                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-5">

                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-semibold text-gray-800">
                            {{ $schedule->teacher_name }}
                        </h2>

                        <span class="px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-700">
                            Terjadwal
                        </span>
                    </div>

                    <div class="space-y-2 text-sm text-gray-600">

                        <p>
                            <span class="font-medium text-gray-800">
                                Mata Pelajaran:
                            </span>
                            {{ $schedule->subject }}
                        </p>

                        <p>
                            <span class="font-medium text-gray-800">
                                Kelas:
                            </span>
                            {{ $schedule->class_name }}
                        </p>

                        <p>
                            <span class="font-medium text-gray-800">
                                Waktu:
                            </span>
                            {{ $schedule->start_time }}
                            -
                            {{ $schedule->end_time }}
                        </p>

                    </div>

                    <button
                        class="mt-5 w-full bg-blue-600 hover:bg-blue-700 text-white py-2.5 rounded-lg font-medium transition">
                        Mulai Mengajar
                    </button>

                </div>

            @endforeach

        </div>

    </div>

</body>
</html>