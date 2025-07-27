<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App | خوش آمدید</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vazir-font/30.1.0/font-face.css">
    <style>
        body {
            font-family: 'Vazir', sans-serif;
            background-color: #f7f9fc;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- نوار ناوبری -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <svg class="h-8 w-8 text-indigo-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"></path>
                        </svg>
                        <span class="mr-2 text-xl font-bold text-gray-800">تودو اپ</span>
                    </div>
                </div>
                <div class="flex items-center">
                    <a href="/login" class="ml-4 px-4 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-100 focus:outline-none">ورود</a>
                    <a href="/register" class="px-4 py-2 rounded-md text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none">ثبت نام</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- بخش قهرمان -->
    <div class="gradient-bg">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl">مدیریت کارهای روزانه</h1>
            <p class="mt-6 max-w-lg mx-auto text-xl text-indigo-100">با تودو اپ، کارهای روزانه خود را به راحتی مدیریت کنید و هرگز چیزی را فراموش نکنید.</p>
            <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                    <a href="/register" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-50 sm:px-8">شروع کنید</a>
                    <a href="#features" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-500 bg-opacity-60 hover:bg-opacity-70 sm:px-8">بیشتر بدانید</a>
                </div>
            </div>
        </div>
    </div>

    <!-- بخش ویژگی‌ها -->
    <div id="features" class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">ویژگی‌ها</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">راهی بهتر برای مدیریت کارها</p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">با استفاده از تودو اپ، کارهای خود را سازماندهی کنید و بهره‌وری خود را افزایش دهید.</p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="feature-card pt-6 transition duration-300">
                        <div class="flow-root bg-white rounded-lg px-6 pb-8 shadow-md">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">لیست کارها</h3>
                                <p class="mt-5 text-base text-gray-500">کارهای خود را در لیست‌های مختلف دسته‌بندی کنید و به راحتی آن‌ها را مدیریت کنید.</p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-card pt-6 transition duration-300">
                        <div class="flow-root bg-white rounded-lg px-6 pb-8 shadow-md">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">یادآوری</h3>
                                <p class="mt-5 text-base text-gray-500">برای کارهای مهم یادآوری تنظیم کنید تا هرگز آن‌ها را فراموش نکنید.</p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-card pt-6 transition duration-300">
                        <div class="flow-root bg-white rounded-lg px-6 pb-8 shadow-md">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">اشتراک‌گذاری</h3>
                                <p class="mt-5 text-base text-gray-500">کارها را با دوستان و همکاران خود به اشتراک بگذارید و به صورت گروهی روی آن‌ها کار کنید.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- بخش آمار -->
    <div class="bg-indigo-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">مورد اعتماد هزاران کاربر</h2>
                <p class="mt-3 text-xl text-gray-500 sm:mt-4">تودو اپ به شما کمک می‌کند تا کارهای خود را بهتر مدیریت کنید.</p>
            </div>
            <div class="mt-10 text-center">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-3">
                    <div class="bg-white rounded-lg shadow px-5 py-6">
                        <p class="text-5xl font-extrabold text-indigo-600">۱۰۰۰+</p>
                        <p class="mt-2 text-lg font-medium text-gray-500">کاربر فعال</p>
                    </div>
                    <div class="bg-white rounded-lg shadow px-5 py-6">
                        <p class="text-5xl font-extrabold text-indigo-600">۵۰۰۰+</p>
                        <p class="mt-2 text-lg font-medium text-gray-500">کار انجام شده</p>
                    </div>
                    <div class="bg-white rounded-lg shadow px-5 py-6">
                        <p class="text-5xl font-extrabold text-indigo-600">۹۹٪</p>
                        <p class="mt-2 text-lg font-medium text-gray-500">رضایت کاربران</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- بخش دعوت به عمل -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block">آماده شروع هستید؟</span>
                <span class="block text-indigo-600">امروز حساب کاربری خود را بسازید.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="/register" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">ثبت نام</a>
                </div>
                <div class="mr-4 inline-flex rounded-md shadow">
                    <a href="/login" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">ورود</a>
                </div>
            </div>
        </div>
    </div>

    <!-- فوتر -->
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex justify-center md:justify-start">
                    <svg class="h-8 w-8 text-indigo-400" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3.9 12c0-1.71 1.39-3.1 3.1-3.1h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4v-1.9H7c-1.71 0-3.1-1.39-3.1-3.1zM8 13h8v-2H8v2zm9-6h-4v1.9h4c1.71 0 3.1 1.39 3.1 3.1s-1.39 3.1-3.1 3.1h-4V17h4c2.76 0 5-2.24 5-5s-2.24-5-5-5z"></path>
                    </svg>
                    <span class="mr-2 text-xl font-bold text-white">تودو اپ</span>
                </div>
                <div class="mt-8 md:mt-0">
                    <p class="text-center text-base text-gray-400">&copy; 1404 تودو اپ. تمامی حقوق محفوظ است.</p>
                </div>
            </div>
        </div>
    </footer>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'96559005d7810a6c',t:'MTc1MzU1MDM3Mi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
