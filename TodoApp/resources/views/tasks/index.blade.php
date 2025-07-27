<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>لیست کارها</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="max-w-xl mx-auto mt-10">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">لیست کارهای من</h1>

        {{-- فرم افزودن کار جدید --}}
        <form method="POST" action="{{ route('tasks.store') }}" class="flex mb-6">
            @csrf
            <input type="text" name="title" placeholder="عنوان کار جدید..." class="flex-1 p-2 border rounded-l-md" required>
            <button type="submit" class="bg-blue-500 text-white px-4 rounded-r-md hover:bg-blue-600">افزودن</button>
        </form>

        {{-- لیست کارها --}}
        <ul class="bg-white shadow-md rounded-md divide-y divide-gray-200">
            @forelse($tasks as $task)
                <li class="flex items-center justify-between p-3">
                    <div class="flex items-center">
                        {{-- تیک نمایشی --}}
                        <input type="checkbox" class="mr-3" {{ $task->is_complete ? 'checked' : '' }}>
                        <span class="{{ $task->is_complete ? 'line-through text-gray-500' : '' }}">
                            {{ $task->title }}
                        </span>
                    </div>
                </li>
            @empty
                <li class="p-3 text-center text-gray-500">هنوز کاری اضافه نشده است.</li>
            @endforelse
        </ul>
    </div>

</body>
</html>
