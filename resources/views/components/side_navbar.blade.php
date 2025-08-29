<nav class="max-w-[250px] w-full h-full fixed bg-blue-950 text-white px-[30px] py-[20px]">
    <h3 class="text-2xl font-semibold">SkillSwap</h3>
    <ul class="mt-[20px] nav-links">
        <li class="w-full">
            <a href="{{ route('skills.index') }}"
                class="{{ Route::currentRouteName() === 'skills.index' ? 'font-semibold' : '' }} nav-link">
                <i class="{{ Route::currentRouteName() === 'skills.index' ? 'fa-solid' : 'fa-regular' }} fa-house">
                </i>
                <p>Home</p>
            </a>
        </li>

        <li class="w-full">
            <a href="{{ route('profile.show', ['id' => auth()->guard()->id()]) }}"
                class="{{ Route::currentRouteName() === 'profile.show' ? 'font-semibold' : '' }} nav-link">
                <i class="{{ Route::currentRouteName() === 'profile.show' ? 'fa-solid' : 'fa-regular' }} fa-user">
                </i>
                <p>Profile</p>
            </a>
        </li>
    </ul>
</nav>