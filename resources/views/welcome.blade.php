<x-welcome_layout>
    <h1 class="text-white font-semibold">SkillSwap</h1>
    <p class="text-white max-w-[500px] mt-[15px] text-[18px]">
        SkillSwap is a platform for people around the
        world to use their skills to exchange for other professionals' skills. By giving tutorials
        and teaching your skills, you will earn credits that can then be used to buy and learn other
        professionals' skills.
    </p>
    <div class="mt-[10px] flex gap-5">
        <form action="{{ route('auth.sign_up_page') }}">
            <button class="btn bg-[#001D48] hover:bg-[#00337f] text-lg border border-white min-w-[150px]">
                Sign Up
            </button>
        </form>
        <form action="{{ route('auth.login_page') }}">
            <button class="btn btn-light text-lg min-w-[150px]">Login</button>
        </form>
    </div>
</x-welcome_layout>