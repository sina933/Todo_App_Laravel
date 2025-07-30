<!DOCTYPE html>
<html lang="fa">
<head>
<x-app-layout>
    <meta charset="UTF-8">
    <title>لیست کارها</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

<div class="max-w-xl mx-auto mt-10">
    <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">لیست کارهای من</h1>

    {{-- نمایش پیام موفقیت --}}
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    {{-- نمایش ارورها --}}
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- فرم افزودن کار جدید --}}
    <form method="POST" action="{{ route('tasks.store') }}" class="flex mb-6">
        @csrf
        <input type="text" name="title" placeholder="عنوان کار جدید..." class="flex-1 p-2 border rounded-l-md" required>
        <button type="submit" class="bg-blue-500 text-white px-4 rounded-r-md hover:bg-blue-600">افزودن</button>
    </form>

    {{-- لیست کارها --}}
    <ul class="bg-white shadow-md rounded-md divide-y divide-gray-200">
        @forelse($tasks as $task)
            <li class="p-3">
                <div class="flex items-center justify-between">
                    {{-- فرم تغییر وضعیت انجام شدن --}}
                    <form method="POST" action="{{ route('tasks.update', $task->id) }}" class="flex items-center">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="is_complete" value="{{ $task->is_complete ? 0 : 1 }}">
                        <input type="checkbox" onchange="this.form.submit()" {{ $task->is_complete ? 'checked' : '' }} class="mr-3">

                        <span class="{{ $task->is_complete ? 'line-through text-gray-500' : '' }}">
                            {{ $task->title }}
                        </span>
                    </form>

                    {{-- فرم حذف --}}
                    <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('آیا از حذف این کار مطمئن هستید؟')" class="text-red-500 hover:text-red-700 text-sm">
                            حذف
                        </button>
                    </form>
                </div>
            </li>
        @empty
            <li class="p-3 text-center text-gray-500">هنوز کاری اضافه نشده است.</li>
        @endforelse
    </ul>
</div>

        
</x-app-layout>


</body>
</html>
