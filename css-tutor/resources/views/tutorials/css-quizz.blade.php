<x-app-layout>
    <x-slot name="header">
        <x-header></x-header>
    </x-slot>
    <x-slot name="slot">
        <div class="grid grid-cols-12">
            {{--            Navigation menu--}}
            <div class="text-center float-left col-span-12  md:col-span-2">
                <x-navigation></x-navigation>
            </div>
            {{--            The content of the tutorials goes here--}}
            <div class="col-span-12  md:col-span-7 m-10">
                <h2 class="text-5xl font-bold font-serif">CSS Quizz</h2>
                <button class="mb-10 mt-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"  ><a class="hover:no-underline underline" href="/tutorials/getting-started-with-css">Previous</a></button>
                <button class="my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 float-right rounded-md"><a
                        class="underline hover:no-underline" href="/tutorials/css-colors">CSS Exercises</a></button>
                <p class="my-6 text-lg">You can test your CSS skills with CSS Tutors Quiz.</p>

                <h4 class="font-serif text-4xl font-extralight mt-6">The test</h4>
                <p class="my-6 text-lg">The test contains 25 questions and there is no time limit.

                </p>
                <p class="my-6 text-lg">The test is not official, it's just a nice way to see how much you know, or don't know, about CSS.

                </p>

                <h4 class="font-serif text-4xl font-extralight mt-6">Count your score</h4>
                <p class="my-6 text-lg">You will get 1 point for each correct answer. At the end of the Quiz, your total score will be displayed. Maximum score is 25 points.

                </p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>Start the quizz</li>
                        <li class="mb-5">Good luck!</li>
                        <button class="py-4 px-4 bg-blue-500 text-white hover:bg-blue-700"><a href="/tutorials/quizz">Start the CSS quizz!</a></button>
                    </ul>
                </div>

            </div>
        </div>
        <script>
            var my_navigation = document.getElementById('my_nav');
            document.querySelector('i').addEventListener("click", function () {
                if (my_navigation.style.display == "block") {
                    my_navigation.style.display = "none";
                } else {

                    my_navigation.style.display = "block";
                }

            });
        </script>
        <style>
            i {
                display: none !important;
            }

            @media only screen and (max-width: 640px) {
                i {
                    display: block !important;
                }
            }
        </style>
    </x-slot>

</x-app-layout>
