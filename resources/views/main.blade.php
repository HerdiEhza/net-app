<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Only the scroll bar */
        ::-webkit-scrollbar {
            width: .5rem;
            height: .5rem;
        }
        ::-webkit-scrollbar-thumb {
            background: rgba(0,0,0,.15);
        }
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(0,0,0,.3);
        }
    </style>
</head>
<body class="relative max-h-screen overflow-hidden bg-gray-50">
    <aside class="fixed inset-y-0 left-0 hidden h-full max-h-screen bg-gray-100 md:block w-60">
        <div class="flex flex-col h-full">
            <div class="h-16 px-4 py-6 text-center">
                <h1 class="text-xl font-bold leading-none">
                    <span class="text-yellow-700">RT / RW Net</span> App
                </h1>
            </div>
            <div class="p-4 h-[calc(100vh-8rem)] overflow-y-auto">
                <ul class="h-full space-y-2">
                    <li>
                        <a href="javascript:void(0)"
                            class="flex items-center px-4 py-3 text-sm font-bold text-yellow-900 bg-yellow-200 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                class="mr-4 text-lg" viewBox="0 0 16 16">
                                <path
                                    d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                            </svg>
                            <span>Plan</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="flex px-4 py-3 text-sm font-bold text-gray-900 bg-white rounded-lg hover:bg-yellow-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                class="mr-4 text-lg" viewBox="0 0 16 16">
                                <path
                                    d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z" />
                            </svg>
                            <span>Task list</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="flex px-4 py-3 text-sm font-bold text-gray-900 bg-white rounded-lg hover:bg-yellow-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                class="mr-4 text-lg" viewBox="0 0 16 16">
                                <path
                                    d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z" />
                            </svg>
                            <span>Projects</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="flex px-4 py-3 text-sm font-bold text-gray-900 bg-white rounded-lg hover:bg-yellow-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="mr-4 text-lg" viewBox="0 0 16 16">
                                <path
                                    d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1H2zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                            </svg>
                            <span>Tags</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="fixed bottom-0 h-16 px-4 w-60">
                <a 
                    href="javascript:void(0)"
                    class="flex items-center px-2 py-2 text-gray-600 bg-white rounded-md"
                >
                    <img class="w-10 h-10 p-[0.1rem] mr-3 rounded-full ring-2 ring-green-400 dark:ring-green-600" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Bordered avatar">
                    <div>
                        <h3 class="text-sm font-bold ">Herdi Ehza Saputra</h3>
                        <p class="text-xs">Administrator</p>
                    </div>
                </a>
            </div>
        </div>
    </aside>

    <div class="flex flex-col">
        <header class="fixed top-0 left-0 right-0 h-16 px-4 py-3 md:left-60">
            <div class="max-w-4xl mx-auto">
                <div class="flex items-center justify-between">
                    <div>
                        <button type="button"
                            class="flex items-center p-2 font-semibold text-gray-600 transition border border-transparent rounded-lg focus:outline-none hover:text-yellow-600 focus:text-yellow-600 hover:border-yellow-300 focus:border-yellow-300">
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 mr-2 text-xs text-gray-600 transition bg-white rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                </svg>
                            </span>
                            <span class="text-sm">Archive</span>
                        </button>
                    </div>
                    <div class="text-lg font-bold">Today's Plan</div>
                    <div>
                        <button type="button"
                            class="flex items-center p-2 font-semibold text-gray-600 transition border border-transparent rounded-lg focus:outline-none hover:text-yellow-600 focus:text-yellow-600 hover:border-yellow-300 focus:border-yellow-300">
                            <span class="text-sm">This week</span>
                            <span
                                class="inline-flex items-center justify-center w-6 h-6 ml-2 text-xs text-gray-600 transition bg-white rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <main class="h-[calc(100vh-4rem)] mt-16 overflow-auto ml-0 md:ml-60">
            <div class="px-6 py-8">
                <div class="max-w-4xl mx-auto">
                    <div class="p-8 mb-5 bg-white rounded-3xl">
                        <h1 class="mb-10 text-3xl font-bold">Messaging ID framework development for the marketing branch
                        </h1>
                        <div class="flex items-center justify-between">
                            <div class="flex items-stretch">
                                <div class="text-xs text-gray-400">Members<br>connected</div>
                                <div class="mx-4 border-l h-100"></div>
                                <div class="flex -space-x-3 flex-nowrap">
                                    <div class="h-9 w-9">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://ui-avatars.com/api/?background=random">
                                    </div>
                                    <div class="h-9 w-9">
                                        <img class="object-cover w-full h-full rounded-full"
                                            src="https://ui-avatars.com/api/?background=random">
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <button type="button"
                                    class="inline-flex items-center justify-center px-3 text-gray-800 transition border h-9 rounded-xl hover:border-gray-400 hover:text-gray-900">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                        class="bi bi-chat-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z" />
                                    </svg>
                                </button>
                                <button type="button"
                                    class="inline-flex items-center justify-center px-5 text-sm font-semibold text-gray-300 transition bg-gray-900 h-9 rounded-xl hover:text-white">
                                    Open
                                </button>
                            </div>
                        </div>
    
                        <hr class="my-10">
    
                        <div class="grid grid-cols-2 gap-x-20">
                            <div>
                                <h2 class="mb-4 text-2xl font-bold">Stats</h2>
    
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="col-span-2">
                                        <div class="p-4 bg-green-100 rounded-xl">
                                            <div class="text-xl font-bold leading-none text-gray-800">Good day, <br>Kristin
                                            </div>
                                            <div class="mt-5">
                                                <button type="button"
                                                    class="inline-flex items-center justify-center px-3 py-2 text-sm font-semibold text-gray-800 transition bg-white rounded-xl hover:text-green-500">
                                                    Start tracking
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-4 text-gray-800 bg-yellow-100 rounded-xl">
                                        <div class="text-2xl font-bold leading-none">20</div>
                                        <div class="mt-2">Tasks finished</div>
                                    </div>
                                    <div class="p-4 text-gray-800 bg-yellow-100 rounded-xl">
                                        <div class="text-2xl font-bold leading-none">5,5</div>
                                        <div class="mt-2">Tracked hours</div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="p-4 text-gray-800 bg-purple-100 rounded-xl">
                                            <div class="text-xl font-bold leading-none">Your daily plan</div>
                                            <div class="mt-2">5 of 8 completed</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h2 class="mb-4 text-2xl font-bold">Your tasks today</h2>
    
                                <div class="space-y-4">
                                    <div class="p-4 space-y-2 text-gray-800 bg-white border rounded-xl">
                                        <div class="flex justify-between">
                                            <div class="text-xs text-gray-400">Number 10</div>
                                            <div class="text-xs text-gray-400">4h</div>
                                        </div>
                                        <a href="javascript:void(0)"
                                            class="font-bold hover:text-yellow-800 hover:underline">Blog and social
                                            posts</a>
                                        <div class="text-sm text-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                fill="currentColor" class="inline mr-1 text-gray-800 align-middle"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                            </svg>Deadline is today
                                        </div>
                                    </div>
                                    <div class="p-4 space-y-2 text-gray-800 bg-white border rounded-xl">
                                        <div class="flex justify-between">
                                            <div class="text-xs text-gray-400">Grace Aroma</div>
                                            <div class="text-xs text-gray-400">7d</div>
                                        </div>
                                        <a href="javascript:void(0)"
                                            class="font-bold hover:text-yellow-800 hover:underline">New campaign review</a>
                                        <div class="text-sm text-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                fill="currentColor" class="inline mr-1 text-gray-800 align-middle"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                            </svg>New feedback
                                        </div>
                                    </div>
                                    <div class="p-4 space-y-2 text-gray-800 bg-white border rounded-xl">
                                        <div class="flex justify-between">
                                            <div class="text-xs text-gray-400">Petz App</div>
                                            <div class="text-xs text-gray-400">2h</div>
                                        </div>
                                        <a href="javascript:void(0)"
                                            class="font-bold hover:text-yellow-800 hover:underline">Cross-platform and
                                            browser QA</a>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>