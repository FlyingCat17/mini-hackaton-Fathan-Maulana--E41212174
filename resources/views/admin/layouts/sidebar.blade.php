<div class="absolute top-[20px] left-[276px] z-50 -translate-x-[400px] transition-all ease-in-out duration-300 laptop:-translate-x-[400px]"
    id="toggle_close_sidebar">
    <div class="rounded-full bg-slate-900 w-12 h-12 flex items-center justify-center ">
        <i class="fa-solid fa-circle-chevron-left text-3xl text-white"></i>
    </div>
</div>
<div
    class="sidebar fixed laptop:static h-full min-w-[300px] max-w-[300px] bg-white -translate-x-full laptop:translate-x-0 transition-all duration-300 ease-in-out z-10">
    <div class="flex flex-row items-center w-full py-8 justify-center gap-3">
        <img src="{{ asset('assets/favicon/laravel_icon.png') }}" alt="Laravel" class="w-8 h-8">

        <h3 class="font-semibold">Laravel</h3>
    </div>

    <div class="w-full px-4 h-full">
        <div class="flex flex-col">
            <ul class="flex flex-col gap-1">
                <li>
                    <a href="{{ route('dashboard.index') }}"
                        class="flex flex-row items-center gap-4 p-4 rounded-lg transition-all ease-in-out duration-300 hover:bg-slate-200
                    {{ request()->segment(1) == 'dashboard' ? 'bg-slate-200' : '' }}">
                        <i class="fa fa-solid fa-house"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <div class="collapse">
                        <input type="checkbox" />
                        <div
                            class="collapse-title text-md font-medium flex flex-row items-center gap-4 p-4 rounded-lg transition-all ease-in-out duration-300 hover:bg-slate-200">
                            <i class="fa fa-solid fa-house"></i>
                            Postingan
                        </div>
                        <div class="collapse-content bg-red-300">
                            <ul class="flex flex-col gap-1 w-full">
                                <li>
                                    <a href="{{ route('dashboard.index') }}"
                                        class="flex flex-row items-center w-full gap-4 p-4 rounded-lg transition-all ease-in-out duration-300 hover:bg-slate-200 {{ request()->segment(1) == 'dashboard' ? 'bg-slate-200' : '' }}">
                                        <i class="fa fa-solid fa-house"></i>
                                        Kategori
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                {{-- <li>
                    <a href="{{ route('pendidikan.index') }}"
                        class="flex flex-row items-center gap-4 p-4 rounded-lg transition-all ease-in-out duration-300 hover:bg-slate-200
                    {{ request()->segment(1) == 'pendidikan' ? 'bg-slate-200' : '' }}">
                        <i class="fa fa-solid fa-graduation-cap"></i>
                        Pendidikan
                    </a>
                </li>
                <li>
                    <a href="{{ route('pekerjaan.index') }}"
                        class="flex flex-row items-center gap-4 p-4 rounded-lg transition-all ease-in-out duration-300 hover:bg-slate-200
                    {{ request()->segment(1) == 'pekerjaan' ? 'bg-slate-200' : '' }}">
                        <i class="fa fa-solid fa-chart-line"></i>
                        Pekerjaan
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
