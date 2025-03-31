<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Whatsapp</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link rel="stylesheet" href="{{asset('custom.css')}}">
</head>

<body>
    <main>
        <div class="h-screen bg-custom-white">
            <div class="flex border border-grey rounded shadow-lg h-full">
                <!-- Left -->
                <div class="w-1/3 flex flex-col">
                    <div class="search-bar flex items-center p-4">
                        <div class="w-24 pl-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </div>
                        <div class="w-full">
                            <form action="" method="POST" id="room_search_form">
                                <input type="text" name="name_search" placeholder="Search"
                                    class="appearance-none border-none bg-custom-grey rounded-full w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </form>
                        </div>
                    </div>
                    <!-- Contacts -->
                    <div class="bg-grey-lighter flex-1 overflow-auto">
                        <div class="bg-white px-3 flex items-center hover:bg-grey-lighter cursor-pointer">
                            <div>
                                <img class="h-12 w-12 rounded-full"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGpYTzuO0zLW7yadaq4jpOz2SbsX90okb24Z9GtEvK6Z9x2zS5" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-dark font-semibold">
                                        Tom Cruise
                                    </p>
                                    <p class="text-xs text-gray-500">
                                        12:45 pm
                                    </p>
                                </div>
                                <div class="flex items-bottom justify-between">
                                    <p class="text-gray-500 mt-1 text-sm">
                                        I'll be back
                                    </p>
                                    <p class="text-xs text-gray-300 mt-1">
                                        <span class="text-white bg-green-500 py-1 px-2 rounded-full">1</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white px-3 flex items-center hover:bg-grey-lighter cursor-pointer">
                            <div>
                                <img class="h-12 w-12 rounded-full"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGpYTzuO0zLW7yadaq4jpOz2SbsX90okb24Z9GtEvK6Z9x2zS5" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-dark font-semibold">
                                        Tom Cruise
                                    </p>
                                    <p class="text-xs text-gray-500">
                                        12:45 pm
                                    </p>
                                </div>
                                <div class="flex items-bottom justify-between">
                                    <p class="text-gray-500 mt-1 text-sm">
                                        I'll be back
                                    </p>
                                    <p class="text-xs text-gray-300 mt-1">
                                        <span class="text-white bg-green-500 py-1 px-2 rounded-full">1</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white px-3 flex items-center hover:bg-grey-lighter cursor-pointer">
                            <div>
                                <img class="h-12 w-12 rounded-full"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGpYTzuO0zLW7yadaq4jpOz2SbsX90okb24Z9GtEvK6Z9x2zS5" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-dark font-semibold">
                                        Tom Cruise
                                    </p>
                                    <p class="text-xs text-gray-500">
                                        12:45 pm
                                    </p>
                                </div>
                                <div class="flex items-bottom justify-between">
                                    <p class="text-gray-500 mt-1 text-sm">
                                        I'll be back
                                    </p>
                                    <p class="text-xs text-gray-300 mt-1">
                                        <span class="text-white bg-green-500 py-1 px-2 rounded-full">1</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white px-3 flex items-center hover:bg-grey-lighter cursor-pointer">
                            <div>
                                <img class="h-12 w-12 rounded-full"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGpYTzuO0zLW7yadaq4jpOz2SbsX90okb24Z9GtEvK6Z9x2zS5" />
                            </div>
                            <div class="ml-4 flex-1 border-b border-grey-lighter py-4">
                                <div class="flex items-bottom justify-between">
                                    <p class="text-dark font-semibold">
                                        Tom Cruise
                                    </p>
                                    <p class="text-xs text-gray-500">
                                        12:45 pm
                                    </p>
                                </div>
                                <div class="flex items-bottom justify-between">
                                    <p class="text-gray-500 mt-1 text-sm">
                                        I'll be back
                                    </p>
                                    <p class="text-xs text-gray-300 mt-1">
                                        <span class="text-white bg-green-500 py-1 px-2 rounded-full">1</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right -->
                <div class="w-2/3 border flex flex-col">
                    <!-- Header -->
                    <div class="py-2 px-3 bg-grey-lighter flex flex-row justify-between items-center">
                        <div class="flex items-center">
                            <div>
                                <img class="w-10 h-10 rounded-full"
                                    src="https://darrenjameseeley.files.wordpress.com/2014/09/expendables3.jpeg" />
                            </div>
                            <div class="ml-4">
                                <p class="font-semibold">
                                    Tom Cruise Movie 4
                                </p>
                                <p class="text-gray-500 text-xs mt-1">
                                    last seen 5 mins ago
                                </p>
                            </div>
                        </div>
                        <div class="flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="#263238" fill-opacity=".5"
                                        d="M15.9 14.3H15l-.3-.3c1-1.1 1.6-2.7 1.6-4.3 0-3.7-3-6.7-6.7-6.7S3 6 3 9.7s3 6.7 6.7 6.7c1.6 0 3.2-.6 4.3-1.6l.3.3v.8l5.1 5.1 1.5-1.5-5-5.2zm-6.2 0c-2.6 0-4.6-2.1-4.6-4.6s2.1-4.6 4.6-4.6 4.6 2.1 4.6 4.6-2 4.6-4.6 4.6z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="#263238" fill-opacity=".5"
                                        d="M1.816 15.556v.002c0 1.502.584 2.912 1.646 3.972s2.472 1.647 3.974 1.647a5.58 5.58 0 0 0 3.972-1.645l9.547-9.548c.769-.768 1.147-1.767 1.058-2.817-.079-.968-.548-1.927-1.319-2.698-1.594-1.592-4.068-1.711-5.517-.262l-7.916 7.915c-.881.881-.792 2.25.214 3.261.959.958 2.423 1.053 3.263.215l5.511-5.512c.28-.28.267-.722.053-.936l-.244-.244c-.191-.191-.567-.349-.957.04l-5.506 5.506c-.18.18-.635.127-.976-.214-.098-.097-.576-.613-.213-.973l7.915-7.917c.818-.817 2.267-.699 3.23.262.5.501.802 1.1.849 1.685.051.573-.156 1.111-.589 1.543l-9.547 9.549a3.97 3.97 0 0 1-2.829 1.171 3.975 3.975 0 0 1-2.83-1.173 3.973 3.973 0 0 1-1.172-2.828c0-1.071.415-2.076 1.172-2.83l7.209-7.211c.157-.157.264-.579.028-.814L11.5 4.36a.572.572 0 0 0-.834.018l-7.205 7.207a5.577 5.577 0 0 0-1.645 3.971z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path fill="#263238" fill-opacity=".6"
                                        d="M12 7a2 2 0 1 0-.001-4.001A2 2 0 0 0 12 7zm0 2a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 9zm0 6a2 2 0 1 0-.001 3.999A2 2 0 0 0 12 15z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Messages -->
                    <div class="flex-1 overflow-auto bg-custom-blue">
                        <div class="messages h-full">
                            <div class="py-2 px-24">
                                <div class="flex justify-center my-4">
                                    <div class="rounded-full py-2 px-4 bg-custom-blue-2">
                                        <p class="text-sm uppercase text-white">
                                            February 20, 2018
                                        </p>
                                    </div>
                                </div>
                                <div class="flex mb-3">
                                    <div class="rounded py-1 px-2 bg-white">
                                        <p class="text-sm text-teal font-semibold">
                                            Tom Cruise
                                        </p>
                                        <p class="text-sm mt-1">
                                            Hi everyone! Glad you could join! I am making a new movie.
                                        </p>
                                        <p class="flex justify-end mt-1">
                                            <span class="text-black text-xxs">12:45 pm</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="black"
                                                class="ml-1 bi bi-check-all" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                                <div class="flex justify-end mb-3">
                                    <div class="rounded px-2 bg-custom-green">
                                        <p class="text-right text-sm mt-1">
                                            Hi guys.
                                        </p>
                                        <p class="flex justify-end mt-1">
                                            <span class="text-white text-xxs">12:45 pm</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="white"
                                                class="ml-1 bi bi-check-all" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-custom-blue">
                        <div class="messages py-4">
                            <!-- Input -->
                            <div class="bg-white px-4 py-2 mx-24 send-message">
                                <div class="flex items-center">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                            height="24">
                                            <path opacity=".45" fill="#263238"
                                                d="M9.153 11.603c.795 0 1.439-.879 1.439-1.962s-.644-1.962-1.439-1.962-1.439.879-1.439 1.962.644 1.962 1.439 1.962zm-3.204 1.362c-.026-.307-.131 5.218 6.063 5.551 6.066-.25 6.066-5.551 6.066-5.551-6.078 1.416-12.129 0-12.129 0zm11.363 1.108s-.669 1.959-5.051 1.959c-3.505 0-5.388-1.164-5.607-1.959 0 0 5.912 1.055 10.658 0zM11.804 1.011C5.609 1.011.978 6.033.978 12.228s4.826 10.761 11.021 10.761S23.02 18.423 23.02 12.228c.001-6.195-5.021-11.217-11.216-11.217zM12 21.354c-5.273 0-9.381-3.886-9.381-9.159s3.942-9.548 9.215-9.548 9.548 4.275 9.548 9.548c-.001 5.272-4.109 9.159-9.382 9.159zm3.108-9.751c.795 0 1.439-.879 1.439-1.962s-.644-1.962-1.439-1.962-1.439.879-1.439 1.962.644 1.962 1.439 1.962z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1 mx-4">
                                        <input class="w-full border-white px-2 py-2" placeholder="Message..."
                                            type="text" />
                                    </div>
                                    <div>
                                        <img src="{{ asset('send.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function myFunction() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
              x.style.display = "none";
            } else {
              x.style.display = "block";
            }
        }
    </script>
</body>

</html>