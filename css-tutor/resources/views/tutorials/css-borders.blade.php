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
                <h2 class="text-5xl font-bold font-serif">CSS Borders</h2>
                <button class="my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a
                        class="underline hover:no-underline" href="/tutorials/css-backgrounds">Previous</a></button>
                <button class="float-right my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a
                        class="underline hover:no-underline" href="/tutorials/css-margins-and-padding">Next</a></button>
                <h5 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <p class="text-lg ml-6 my-6">The CSS border properties allow you to specify the style, width, and color of an element's border.

                </p>


                {{--                CSS background-color --}}
                <div class="border-2 border-black p-6 my-2">I have borders on all sides.</div>
                <div class="border-b-2 border-red-500 p-6 my-2">I have a red bottom border.</div>
                <div class="border-2 border-gray-300 rounded-xl p-6 my-2">I have rounded borders.</div>
                <div class="bg-blue-200 p-6 my-2 border-l-8 border-blue-700">I have a blue left border.</div>
                <div class="text-lg">Here replicate the set of borders create four &ltp> elements with borders on all sides, red bottom border, rounded borders, blue left border.</div>
                <div class="grid grid-cols-4 my-2 ml-6">
                    <div class="code-area col-span-2">
                        <textarea class="w-full m-0 p-2 h-1/2" id="htmlCode" placeholder="HTML Code"
                        ></textarea>
                        <textarea class="w-full m-0 p-2 h-1/2" id="cssCode" placeholder="CSS Code"
                        ></textarea>
                    </div>
                    <div
                        class="preview-area border-2 col-span-2 ml-2 bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                        <iframe id="preview-window"></iframe>
                    </div>
                </div>
                <button class="my-2 ml-6 px-4 py-2 rounded bg-blue-500 hover:bg-blue-700">Run</button>
                <h5 class="text-4xl font-serif font-bold mt-10" class="text-2xl">CSS Border Style</h5>
                <p class="text-lg ml-6 my-6">The border-style property specifies what kind of border to display.</p>
                <p class="text-lg ml-6 my-6">The following values are allowed:</p>
                <ul class="list-disc">
                    <li class="ml-20 text-lg">dotted - Defines a dotted border</li>
                    <li class="ml-20 text-lg">dashed - Defines a dashed border</li>
                    <li class="ml-20 text-lg">solid - Defines a solid border</li>
                    <li class="ml-20 text-lg">double - Defines a double border</li>
                    <li class="ml-20 text-lg">none - Defines no border</li>
                    <li class="ml-20 text-lg">hidden - Defines a hidden border</li>
                </ul>
                <p class="text-lg ml-6 my-6">The border-style property can have from one to four values (for the top border, right border, bottom
                    border, and the left border).
                </p>
                <h5 class="font-serif text-4xl font-extralight mt-6" class="text-4xl">Example</h6>
                <div class="border-2 border-black m-4 p-2 border-dotted">A dotted border.</div>
                <div class="border-2 border-black m-4 p-2 border-dashed">A dashed border.</div>
                <div class="border-2 border-black m-4 p-2 border-solid">A solid border.</div>
                <div class="border-2 border-black m-4 p-2 border-double">A double border.</div>
                {{--                CSS Background other elements--}}
                <p class="text-lg ml-6 my-6">Here create four &ltp> elements and set their borders to dotted, dashed, solid, and double.</p>
                <div class="grid grid-cols-4 my-2 ml-6">
                    <div class="code-area col-span-2">
                        <textarea class="w-full m-0 p-2 h-1/2" id="htmlCode2" placeholder="HTML Code"
                        ></textarea>
                        <textarea class="w-full m-0 p-2 h-1/2" id="cssCode2" placeholder="CSS Code"
                        ></textarea>
                    </div>
                    <div
                        class="preview-area border-2 col-span-2 ml-2 bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                        <iframe id="preview-window2"></iframe>
                    </div>
                </div>
                <button class="my-2 ml-6 px-4 py-2 rounded bg-blue-500 hover:bg-blue-700">Run</button>

                {{--                CSS Border--}}
                <h5 class="text-4xl font-serif font-bold mt-10" class="text-2xl">CSS Border Width</h5>
                <p class="text-lg ml-6 my-6">The border-width property specifies the width of the four borders.</p>
                <p class="text-lg ml-6 my-6">The width can be set as a specific size (in px, pt, cm, em, etc) or by using one of the three
                    pre-defined values: thin, medium, or thick:
                </p>
                <h5 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <div class="border-black border-4 my-4 p-2">5px border-width</div>
                <div class="border-black border-2 my-4 p-2">medium border-width</div>
                <div class="border-dotted border-black border-2 my-4 p-2">2px border-width</div>
                <div class="border-black border-4 border-dotted my-4 p-2">thick border-width</div>
                <p class="text-lg ml-6 my-6">Create four different &ltp> elements with border widths of 5px, medium, 2px, and thick.</p>
                <div class="grid grid-cols-4 my-2 ml-6">
                    <div class="code-area col-span-2">
                        <textarea class="w-full m-0 p-2 h-1/2" id="htmlCode3" placeholder="HTML Code"
                        ></textarea>
                        <textarea class="w-full m-0 p-2 h-1/2" id="cssCode3" placeholder="CSS Code"
                        ></textarea>
                    </div>
                    <div
                        class="preview-area border-2 col-span-2 ml-2 bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                        <iframe id="preview-window3"></iframe>
                    </div>
                </div>
                <button class="my-2 ml-6 px-4 py-2 rounded bg-blue-500 hover:bg-blue-700">Run</button>

                {{--CSS COLOR VALUES--}}
                <h5 class="text-4xl font-serif font-bold mt-10">CSS Border Color</h5>
                <p class="text-lg ml-6 my-6">The border-color property is used to set the color of the four borders.</p>
                <p class="text-lg ml-6 my-6">The color can be set by:</p>
                <ul class="list-disc">
                    <li class="ml-20 text-lg">name - specify a color name, like "red"</li>
                    <li class="ml-20 text-lg">HEX - specify a HEX value, like "#ff0000"</li>
                    <li class="ml-20 text-lg">RGB - specify a RGB value, like "rgb(255,0,0)"</li>
                    <li class="ml-20 text-lg">HSL - specify a HSL value, like "hsl(0, 100%, 50%)"</li>
                    <li class="ml-20 text-lg">transparent</li>
                </ul>
                <p class="text-lg ml-6 my-6">Note: If border-color is not set, it inherits the color of the element.</p>
                <h5 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <div class="border-red-500 border-2 p-4 my-4">Red border</div>
                <div class="border-green-500 border-2 p-4 my-4">Green border</div>
                <div class="border-blue-500 border-2 p-4 my-4">Blue border</div>
                <p class="text-lg ml-6 my-6">Create three &ltp> elements with a red border, green border, and blue border.</p>
                <div class="grid grid-cols-4 my-2 ml-6">
                    <div class="code-area col-span-2">
                        <textarea class="w-full m-0 p-2 h-1/2" id="htmlCode4" placeholder="HTML Code"
                        ></textarea>
                        <textarea class="w-full m-0 p-2 h-1/2" id="cssCode4" placeholder="CSS Code"
                        ></textarea>
                    </div>
                    <div
                        class="preview-area border-2 col-span-2 ml-2 bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                        <iframe id="preview-window4"></iframe>
                    </div>
                </div>
                <button class="my-2 ml-6 px-4 py-2 rounded bg-blue-500 hover:bg-blue-700 block">Run</button>
                <button class="my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a
                        class="underline hover:no-underline" href="/tutorials/css-backgrounds">Previous</a></button>
                <button class="float-right my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a
                        class="underline hover:no-underline" href="/tutorials/css-margins-and-padding">Next</a></button>
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
            var button = document.querySelectorAll('button');
            button[2].addEventListener("click", showPreview);

            function showPreview() {
                var htmlCode = document.getElementById("htmlCode").value;
                var cssCode = "<style>" + document.getElementById("cssCode").value + "</style>";
                var frame = document.getElementById("preview-window").contentWindow.document;
                frame.open();
                frame.write(htmlCode + cssCode);
                frame.close();
            }

            button[3].addEventListener("click", showPreview2);

            function showPreview2() {
                var htmlCode2 = document.getElementById("htmlCode2").value;
                var cssCode2 = "<style>" + document.getElementById("cssCode2").value + "</style>";
                var frame2 = document.getElementById("preview-window2").contentWindow.document;
                frame2.open();
                frame2.write(htmlCode2 + cssCode2);
                frame2.close();
            }

            button[4].addEventListener("click", showPreview3);

            function showPreview3() {
                var htmlCode3 = document.getElementById("htmlCode3").value;
                var cssCode3 = "<style>" + document.getElementById("cssCode3").value + "</style>";
                var frame3 = document.getElementById("preview-window3").contentWindow.document;
                frame3.open();
                frame3.write(htmlCode3 + cssCode3);
                frame3.close();
            }

            button[5].addEventListener("click", showPreview4);

            function showPreview4() {
                var htmlCode4 = document.getElementById("htmlCode4").value;
                var cssCode4 = "<style>" + document.getElementById("cssCode4").value + "</style>";
                var frame4 = document.getElementById("preview-window4").contentWindow.document;
                frame4.open();
                frame4.write(htmlCode4 + cssCode4);
                frame4.close();
            }
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
