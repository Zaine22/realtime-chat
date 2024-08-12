<div
    x-data="{ type: 'all', query: @entangle("query") }"
    class="flex flex-col transition-all h-full overflow-hidden"
>
    <header class="px-3 z-10 bg-white sticky top-0 w-full py-2">

        <div class="border-b justify-between flex items-center pb-2">

            <div class="flex items-center gap-2">
                <h5 class="font-extrabold text-2xl">Chats</h5>
            </div>

            <button>

                <svg
                    class="w-7 h-7"
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    viewBox="0 0 16 16"
                >
                    <path
                        d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"
                    />
                </svg>

            </button>

        </div>

        {{-- Filters --}}

        <div class="flex gap-3 items-center overflow-x-scroll p-2 bg-white">

            <button
                @click="type='all'"
                :class="{ 'bg-blue-100 border-0 text-black': type == 'all' }"
                class="inline-flex justify-center items-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-1  lg:py-2.5 border "
            >
                All
            </button>
            <button
                @click="type='deleted'"
                :class="{ 'bg-blue-100 border-0 text-black': type == 'deleted' }"
                class="inline-flex justify-center items-center rounded-full gap-x-1 text-xs font-medium px-3 lg:px-5 py-1  lg:py-2.5 border "
            >
                Deleted
            </button>

        </div>

    </header>

    <main
        class="overflow-y-scroll overflow-hidden grow h-full relative"
        style="contain:content"
    >
        {{-- chat-lists --}}

        <ul class="p-2 grid w-full space-y-2">
            <li
                class="py-3 hover:bg-gray rounded-2xl dark:hover:bg-gray-500/70 transition-colors duration-150 flex gap-4 relative w-full cursor-pointer px-2 ">
                <x-avatar />
                <a
                    href="#"
                    class="shrink-0"
                ></a>

                <aside class="grid grid-col-12 w-full">
                    <a
                        href="#"
                        class="col-span-11 border-b pb-2 border-gray-200 relative overflow-hidden trancate leading-5 w-full flex-nowrap p-1"
                    >
                        {{-- name&date --}}
                        <div class="flex justify-between w-full items-center">
                            <h6 class="trancate font-medium tracking-wider text-gray-500">hello </h6>
                            <small class="text-gray-700">5d</small>
                        </div>

                        {{-- messagebody --}}
                        <div class="flex gap-x-2 itemscenter">

                            {{-- double tick --}}
                            <span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    fill="currentColor"
                                    class="bi bi-check2-all"
                                    viewBox="0 0 16 16"
                                >
                                    <path
                                        d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"
                                    />
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z" />
                                </svg>
                            </span>
                            {{-- single tick --}}
                            {{-- <span>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16"
                                    height="16"
                                    fill="currentColor"
                                    class="bi bi-check2"
                                    viewBox="0 0 16 16"
                                >
                                    <path
                                        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"
                                    />
                                </svg>
                            </span> --}}

                            <p class="grow truncate text-sm font-[100]">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur quae deserunt
                                expedita, aliquid, nesciunt vitae ullam blanditiis nam impedit nemo laboriosam soluta?
                                Quod magni impedit inventore deleniti natus, incidunt sequi est culpa vero,
                                necessitatibus consequuntur eligendi minima distinctio accusantium?
                            </p>

                            {{-- unread count --}}
                            <span class="font-bold p-px px-2 text-xs shrink-0 bg-blue-500 text-white  rounded-full">5
                            </span>
                        </div>

                    </a>

                    {{-- drop-down --}}

                </aside>
            </li>

        </ul>
    </main>

</div>
