@props(["skill" => null])

<div class="card max-w-[300px]" onclick="window.location.href=''">
    <h3 class="truncate overflow-hidden whitespace-nowrap">{{ $skill->name }}</h3>
    <p>{{ $skill->credits }} credits per lesson</p>
    <p class="truncate overflow-hidden whitespace-nowrap">{{ $skill->desc }}</p>
    <p class="flex items-center gap-2"><i class="fa-solid fa-user text-lg"></i> by {{ $skill->username }}</p>

    <div class="flex justify-end">
        <p class="text-[#686868] text-sm">Click to View</p>
    </div>
</div>