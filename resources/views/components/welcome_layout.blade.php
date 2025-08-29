<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SkillSwap</title>

        @vite(["resources/css/app.css"])
    </head>

    <body>
        <div class="relative w-full h-[100vh]">
            <img src="{{ asset('/images/auth-page-bg.svg') }}" alt="Auth Page BG Image"
                class="w-full object-cover h-full fixed">

            <div class="flex flex-col absolute top-0 left-0 right-0 h-full mx-[10px] overflow-scroll hide-scrollbar">
                <header class="mx-[100px] my-[30px]">
                    <h1 class="text-white font-semibold">SkillSwap</h1>
                </header>

                <div class="grid grid-cols-2 absolute top-0 left-0 right-0 w-full h-full mx-auto">
                    <div class="flex items-center justify-center flex-col mx-5">
                        <img src="{{ asset('/images/skills-logo.svg') }}" alt="Skills Logo"
                            class="max-w-[500px] w-full h-auto object-cover">
                        <p class="text-white text-xl max-w-[500px]">
                            Connect, learn, and grow by exchanging skills with like-minded professionals.
                        </p>
                    </div>
                    <div class="flex flex-col justify-center mr-5">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>