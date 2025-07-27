<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>مدیریت کارها</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Vazir', sans-serif;
        }
        .completed {
            text-decoration: line-through;
            color: #9ca3af;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen p-6">

    <div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">

        <h1 class="text-2xl font-bold mb-6 text-gray-800">لیست کارهای من</h1>

        <!-- فرم افزودن کار جدید -->
        <form action="{{ route('tasks.store') }}" method="POST" class="mb-6 flex gap-2">
            @csrf
            <input
                type="text"
                name="title"
                placeholder="کار جدید را وارد کنید..."
                class="flex-grow px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                required
            />
            <button
                type="submit"
                class="bg-blue-600 text-white px-6 rounded hover:bg-blue-700 transition"
            >
                افزودن
            </button>
        </form>

        <!-- لیست کارها -->
        @if($tasks->isEmpty())
            <p class="text-center text-gray-500">هیچ کاری وجود ندارد.</p>
        @else
            <ul class="space-y-3">
                @foreach($tasks as $task)
                <li class="flex items-center justify-between bg-gray-50 p-3 rounded shadow-sm">

                    <!-- فرم تغییر وضعیت انجام شدن تسک -->
                    <form action="{{ route('tasks.store', $task) }}" method="POST" class="flex items-center gap-3">
                        @csrf
                        @method('PATCH')

                        <input
                            type="checkbox"
                            name="is_completed"
                            id="task-{{ $task->id }}"
                            onchange="this.form.submit()"
                            {{ $task->is_completed ? 'checked' : '' }}
                            class="w-5 h-5 text-blue-600 rounded border-gray-300 focus:ring-blue-500"
                        />
                        <label
                            for="task-{{ $task->id }}"
                            class="{{ $task->is_completed ? 'completed' : '' }} cursor-pointer select-none"
                        >
                            {{ $task->title }}
                        </label>
                    </form>

                 

                </li>
                @endforeach
            </ul>
        @endif

    </div>

</body>
</html>
