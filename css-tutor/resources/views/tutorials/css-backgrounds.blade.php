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
                <h2 class="text-5xl font-bold font-serif">CSS Backgrounds</h2>
                <button  class="my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a class="underline hover:no-underline" href="/tutorials/css-colors">Previous</a></button>
                <button class="float-right my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a class="underline hover:no-underline" href="/tutorials/css-borders">Next</a></button>
                <p class="text-lg ml-6 my-6">The CSS background properties are used to add background effects for elements.</p>



                {{--                CSS background-color --}}
                <h5 class="text-4xl font-serif font-bold mt-10">CSS background-color</h5>
                <h6 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <p class="text-lg ml-6 my-6">The background-color property specifies the background color of an element.
                </p>
                <div style="height: 150px; background-color: lightblue; text-align: center;"><p class="text-lg ml-6 my-6 font-bold" style="line-height: 150px">This is a &ltdiv> element with a lightblue background.</p></div>
                <p class="text-lg ml-6 my-6" class="text-lg">Here set the background-color of the &ltbody> element to lightblue</p>
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
                <p class="text-lg ml-6 my-6">With CSS, a color is most often specified by:</p>
                <ul class="list-disc">
                    <li class="ml-20 text-lg my-6">a valid color name - like "red"</li>
                    <li class="ml-20 text-lg my-6">a HEX value - like "#ff0000"</li>
                    <li class="ml-20 text-lg my-6">an RGB value - like "rgb(255,0,0)"</li>
                </ul>

                {{--                CSS Background other elements--}}
                <h5 class="text-4xl font-serif font-bold mt-10">Other Elements</h5>
                <h6 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <p class="text-lg ml-6 my-6">You can set the background color for any HTML elements:</p>
                <div class="bg-green-500 p-4  font-bold">CSS background-color example!</div>
                <div class="bg-blue-200 p-4  font-bold">This is a text inside a div element. <p class="text-lg ml-6 my-6" class="bg-yellow-300 p-2 my-2 font-bold">This paragraph has its own background color.</p> We are still in the div element.</div>
                <p class="text-lg ml-6 my-6">Here, set the &lth1>, &ltp>, and &ltdiv> elements to have different background colors: green, lightblue, and yellow</p>
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
                <h5 class="text-4xl font-serif font-bold mt-10">Opacity / Transparency</h5>
                <h6 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <p class="text-lg ml-6 my-6">The opacity property specifies the opacity/transparency of an element. It can take a value from 0.0 - 1.0. The lower value, the more transparent:</p>
                <div class="grid grid-cols-4">
                    <div class="text-center bg-green-500 opacity-100 p-8" >Opacity 1</div>
                    <div class="text-center bg-green-500 opacity-50 p-8" >Opacity 0.5</div>
                    <div class="text-center bg-green-500 opacity-30 p-8" >Opacity 0.3</div>
                    <div class="text-center bg-green-500 opacity-10 p-8" >Opacity 0.1</div>
                </div>
                <p class="text-lg ml-6 my-6">For this exercise create a div element and set its background to green and opacity to 0.3</p>
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


                <h5 class="text-4xl font-serif font-bold mt-10">CSS background-image</h5>
                <h6 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <p class="text-lg ml-6 my-6">The background-image property specifies an image to use as the background of an element.</p>
                <p class="text-lg ml-6 my-6">By default, the image is repeated so it covers the entire element.
                </p>
                <div style="height: 150px; background-color: lightblue;background-image:url('https://i.picsum.photos/id/971/200/300.jpg?hmac=13ePfSXGucrfsPCzPjUZtNe5jYo83FTet0dk-Lk2Q4E');"></div>
                <p class="text-lg ml-6 my-6">In this example set a background-image to the body use an URL to the image.</p>
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
                <button class="my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a class="underline hover:no-underline" href="/tutorials/css-colors">Previous</a></button>
                <button class="float-right my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a class="underline hover:no-underline" href="/tutorials/css-borders">Next</a></button>
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
