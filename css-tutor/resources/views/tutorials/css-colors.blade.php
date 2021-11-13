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
                <h2 class="text-5xl font-bold font-serif">CSS Colors</h2>
                <button class="mb-10  float-right bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"  ><a class="hover:no-underline underline" href="/tutorials/css-backgrounds">Next</a></button>
                {{--                CSS COLORS--}}
                <h5 class="text-4xl font-serif font-bold mt-6 clear-both">CSS Colors</h5>
                <p class="text-lg ml-6 my-6">Colors are specified using predefined color names, or RGB, HEX, HSL, RGBA, HSLA values.</p>
                <h5 class="text-4xl font-serif font-bold mt-10">CSS Color Names</h5>
                <p class="text-lg ml-6 my-6">In CSS, a color can be specified by using a predefined color name:</p>
                <div class="grid grid-cols-4">
                    <div style="background-color:Tomato;" class="px-4 py-6 text-center m-2">Tomato</div><div
                        class="px-4 py-6 text-center m-2" style="background-color:Orange;">Orange</div><div
                        class="px-4 py-6 text-center m-2" style="background-color:DodgerBlue;">DodgerBlue</div><div
                        class="px-4 py-6 text-center m-2" style="background-color:MediumSeaGreen;">MediumSeaGreen</div>
                    <div style="background-color:Gray;" class="px-4 py-6 text-center m-2">Gray</div><div
                        style="background-color:SlateBlue;" class="px-4 py-6 text-center m-2">SlateBlue</div><div
                        style="background-color:Violet;" class="px-4 py-6 text-center m-2">Violet</div><div
                        style="background-color:LightGray;" class="px-4 py-6 text-center m-2">LightGray</div>

                </div>
                <p class="text-lg ml-6 my-6">For the first challenge make 8 heading elements and style them with the previously mentioned colors
                    from tomato to light gray use the code editor below</p>
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

                {{--                CSS TEXT--}}
                <h5 class="text-4xl font-serif font-bold mt-10">CSS Text Color</h5>
                <h6 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <p class="text-lg ml-6 my-6">You can set the color of text:</p>
                <p class="text-lg ml-6 my-6" style="color:Tomato;">Hello World</p>
                <p class="text-lg ml-6 my-6" style="color:DodgerBlue;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat.</p>
                <p class="text-lg ml-6 my-6" style="color:MediumSeaGreen;">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                    suscipit lobortis nisl ut
                    aliquip ex ea commodo consequat.
                </p>
                <p class="text-lg ml-6 my-6" >For this exercise make three paragraphs and set their color to these values: Tomato, DodgerBlue, and
                    MediumSeaGreen</p>
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
                <h5 class="text-4xl font-serif font-bold mt-10">CSS Border Color</h5>
                <h6 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <p class="text-lg ml-6 my-6" class="text-lg">You can set the color of borders:</p>
                <div class="p-6 m-2" style="border:2px solid Tomato;">Hello World</div><div class="p-6 m-2" style="border:2px solid DodgerBlue;">Hello World</div><div class="p-6 m-2" style="border:2px solid Violet;">Hello World</div>
                <p class="text-lg ml-6 my-6" >For this exercise make three &lth1> elements and set their border to these values: Tomato, DodgerBlue, and Violet</p>
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
                <h5 class="text-4xl font-serif font-bold mt-10">CSS Color Values</h5>
                <h6 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <p class="text-lg ml-6 my-6">In CSS, colors can also be specified using RGB values, HEX values, HSL values, RGBA values, and HSLA values:
                </p>
                <p class="text-lg ml-6 my-6">Same as color name "Tomato":</p>
                <div style="background-color:rgb(255, 99, 71);" class="text-center p-6 m-2 text-white font-bold">rgb(255, 99, 71)</div>
                <div style="background-color:#ff6347;" class="text-center p-6 m-2 text-white font-bold">#ff6347</div>
                <div style="background-color:hsl(9, 100%, 64%);" class="text-center p-6 m-2 text-white font-bold">hsl(9, 100%, 64%)</div>

                <p class="text-lg ml-6 my-6">Same as color name "Tomato", but 50% transparent:</p>
                <div style="background-color:rgba(255, 99, 71, 0.5);" class="text-center p-6 m-2 text-white font-bold">rgba(255, 99, 71, 0.5)</div>
                <div style="background-color:hsla(9, 100%, 64%, 0.5);" class="text-center p-6 m-2 text-white font-bold">hsla(9, 100%, 64%, 0.5)</div>

                <p class="text-lg ml-6 my-6" >For this exercise make five heading tags with the values appropriate to the values mentioned above</p>
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
                <button class="my-2 ml-6 px-4 py-2 rounded bg-blue-500 hover:bg-blue-700">Run</button>
                <button class="mt-10 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md float-right"><a class="underline hover:no-underline" href="/tutorials/css-backgrounds">Next</a></button>
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
            button[1].addEventListener("click", showPreview);

            function showPreview() {
                var htmlCode = document.getElementById("htmlCode").value;
                var cssCode = "<style>" + document.getElementById("cssCode").value + "</style>";
                var frame = document.getElementById("preview-window").contentWindow.document;
                frame.open();
                frame.write(htmlCode + cssCode);
                frame.close();
            }

            button[2].addEventListener("click", showPreview2);

            function showPreview2() {
                var htmlCode2 = document.getElementById("htmlCode2").value;
                var cssCode2 = "<style>" + document.getElementById("cssCode2").value + "</style>";
                var frame2 = document.getElementById("preview-window2").contentWindow.document;
                frame2.open();
                frame2.write(htmlCode2 + cssCode2);
                frame2.close();
            }

            button[3].addEventListener("click", showPreview3);

            function showPreview3() {
                var htmlCode3 = document.getElementById("htmlCode3").value;
                var cssCode3 = "<style>" + document.getElementById("cssCode3").value + "</style>";
                var frame3 = document.getElementById("preview-window3").contentWindow.document;
                frame3.open();
                frame3.write(htmlCode3 + cssCode3);
                frame3.close();
            }

            button[4].addEventListener("click", showPreview4);

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
