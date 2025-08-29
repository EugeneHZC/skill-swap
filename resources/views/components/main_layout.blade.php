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
        <div class="flex h-full">
            {{-- side navbar --}}
            <x-side_navbar></x-side_navbar>

            {{-- main content --}}
            <div class="pr-[30px] pl-[300px] py-[30px] w-full">
                {{ $slot }}
            </div>
        </div>
    </body>

    <script src="https://kit.fontawesome.com/d29bed84f6.js" crossorigin="anonymous"></script>
</html>