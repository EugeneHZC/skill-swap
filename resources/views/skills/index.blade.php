<x-main_layout>
    <div>
        <h2 class="font-semibold">Skills</h2>

        <div class="py-5 grid grid-cols-[repeat(auto-fill,minmax(250px,1fr))] gap-5">
            @foreach ($skills as $skill)
                <x-skill_display_card :skill="$skill"></x-skill_display_card>
            @endforeach
        </div>

        <form action="{{ route('auth.logout') }}">
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</x-main_layout>