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
                <h2 class="text-5xl font-bold font-serif">CSS Margins & Padding</h2>
                <button class="my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a
                        class="underline hover:no-underline" href="/tutorials/css-borders">Previous</a></button>
                {{--                margins--}}
                <h3 class="text-4xl font-bold font-serif">Margins</h3>
                <h6 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <p class="text-lg ml-6 my-6">Margins are used to create space around elements, outside of any defined borders.</p>
                <p class="text-lg ml-6 my-6" class="border-black border-2 p-2" style="margin: 70px;">This element has a margin of 70px.</p>


                <h5 class="text-4xl font-serif font-bold mt-6 clear-both" class="text-4xl">CSS Margins</h5>
                <p class="text-lg ml-6 my-6">The CSS margin properties are used to create space around elements, outside of any defined borders.
                </p>
                <p class="text-lg ml-6 my-6">With CSS, you have full control over the margins. There are properties for setting the margin for
                    each side of an element (top, right, bottom, and left).</p>
                <h5 class="text-4xl font-serif font-bold mt-6 clear-both">Margin - Individual Sides</h5>
                <p class="text-lg ml-6 my-6">CSS has properties for specifying the margin for each side of an element:
                </p>
                <ul class="list-disc">
                    <li class="text-lg ml-20 text-red-600">margin-top</li>
                    <li class="text-lg ml-20 text-red-600">margin-right</li>
                    <li class="text-lg ml-20 text-red-600">margin-bottom</li>
                    <li class="text-lg ml-20 text-red-600">margin-left</li>
                </ul>
                <p class="text-lg ml-6 my-6">All the margin properties can have the following values:
                </p>
                <ul class="list-disc">
                    <li class="text-lg ml-20">auto - the browser calculates the margin
                    </li>
                    <li class="text-lg ml-20">length - specifies a margin in px, pt, cm, etc.
                    </li>
                    <li class="text-lg ml-20">% - specifies a margin in % of the width of the containing element
                    </li>
                    <li class="text-lg ml-20">inherit - specifies that the margin should be inherited from the parent element
                    </li>
                </ul>
                <h6 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <div class="mt-24 mb-24 mr-40 ml-44">Different margins for all sides of the &ltp> element.</div>
                <p class="text-lg ml-6 my-6">Create a &ltp> element and set its top margin to 100px, bottom to 100px, right to 150px, and left to
                    80px</p>
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


                {{--                Margin shorthand--}}
                <h5 class="text-4xl font-serif font-bold mt-6 clear-both" class="text-2xl">Margin - Shorthand Property</h5>
                <p class="text-lg ml-6 my-6">To shorten the code, it is possible to specify all the margin properties in one property.</p>
                <p class="text-lg ml-6 my-6">The <span class="text-red-600">margin</span> property is a shorthand property for the following
                    individual margin properties:
                </p>
                <ul class="list-disc">
                    <li class="text-lg ml-20 text-red-600">margin-top</li>
                    <li class="text-lg ml-20 text-red-600">margin-right</li>
                    <li class="text-lg ml-20 text-red-600">margin-bottom</li>
                    <li class="text-lg ml-20 text-red-600">margin-left</li>
                </ul>
                <p class="text-lg ml-6 my-6">So, here is how it works:</p>
                <p class="text-lg ml-6 my-6">If the margin property has four values:</p>
                <ul class="list-disc">
                    <li class="text-lg ml-8 font-bold">margin: 25px 50px 75px 100px;</li>
                    <li class="text-lg ml-12">top margin is 25px</li>
                    <li class="text-lg ml-12">right margin is 50px</li>
                    <li class="text-lg ml-12">bottom margin is 75px</li>
                    <li class="text-lg ml-12">left margin is 100px</li>
                </ul>
                <h6 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <div style="margin: 25px 50px 75px 100px">&ltp> element with different margin values</div>

                {{--                CSS Background other elements--}}
                <p class="text-lg ml-6 my-6">Here, set the &ltp> elements margin values to 25px, 50px, 75px, and 100px.</p>
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
                <h5 class="text-4xl font-serif font-bold mt-6 clear-both">The auto Value
                </h5>
                <p class="text-lg ml-6 my-6">You can set the margin property to auto to horizontally center the element within its container.

                </p>
                <p class="text-lg ml-6 my-6">The element will then take up the specified width, and the remaining space will be split equally
                    between the left and right margins.

                </p>
                <h6 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <div class="p-4" style="width: 300px; margin: auto; border:1px solid red">This is a horizontally centered &ltdiv>
                    element using margin auto.
                </div>
                <p class="text-lg ml-6 my-6">In this example center a &ltdiv> element horizontally using margin auto.</p>
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
                {{--padding--}}
                <h3 class="mt-8 text-4xl font-bold font-serif">Padding</h3>
                <h6 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <p class="text-lg ml-6 my-6">Padding is used to create space around an element's content, inside of any defined borders.

                </p>
                <div style="padding: 70px; border: 1px solid black;">This element has a padding of 70px</div>
                <p class="text-lg ml-6 my-6">In this example create a &ltdiv> element and set its padding to 70px.</p>
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


                {{--                Padding individual sides--}}
                <h5 class="text-4xl font-serif font-bold mt-6 clear-both">Padding - Individual Sides</h5>
                <p class="text-lg ml-6 my-6">CSS has properties for specifying the padding for each side of an element:

                </p>
                <ul class="list-disc">
                    <li class="text-lg ml-20 text-red-600">padding-top
                    </li>
                    <li class="text-lg ml-20 text-red-600">padding-right
                    </li>
                    <li class="text-lg ml-20 text-red-600">padding-bottom
                    </li>
                    <li class="text-lg ml-20 text-red-600">padding-left
                    </li>
                </ul>
                <p class="text-lg ml-6 my-6">All the padding properties can have the following values:

                </p>
                <ul class="list-disc">
                    <li class="text-lg ml-20">length - specifies a padding in px, pt, cm, etc.
                    </li>
                    <li class="text-lg ml-20">% - specifies a padding in % of the width of the containing element
                    </li>
                    <li class="text-lg ml-20">inherit - specifies that the padding should be inherited from the parent element
                    </li>
                </ul>
                <h6 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <div class="mt-6"
                    style="padding-top: 50px; padding-right: 30px; padding-bottom: 50px; padding-left: 80px; background-color: lightblue; border: 1px solid black;">
                    This div has different padding for each side.
                </div>
                <p class="text-lg ml-6 my-6">Set different padding for all four sides of a &ltdiv> element:
                </p>
                <div class="grid grid-cols-4 my-2 ml-6">
                    <div class="code-area col-span-2">
                        <textarea class="w-full m-0 p-2 h-1/2" id="htmlCode5" placeholder="HTML Code"
                        ></textarea>
                        <textarea class="w-full m-0 p-2 h-1/2" id="cssCode5" placeholder="CSS Code"
                        ></textarea>
                    </div>
                    <div
                        class="preview-area border-2 col-span-2 ml-2 bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                        <iframe id="preview-window5"></iframe>
                    </div>
                </div>
                <button class="my-2 ml-6 px-4 py-2 rounded bg-blue-500 hover:bg-blue-700 block">Run</button>

                {{--                Padding shorthand--}}
                <h5 class="text-4xl font-serif font-bold mt-6 clear-both">Padding - Shorthand Property</h5>
                <p class="text-lg ml-6 my-6">To shorten the code, it is possible to specify all the padding properties in one property.

                </p>
                <p class="text-lg ml-6 my-6">The <span class="text-red-600">padding</span> property is a shorthand property for the following individual padding properties:

                </p>
                <ul class="list-disc">
                    <li class="text-lg ml-20 text-red-600">padding-top
                    </li>
                    <li class="text-lg ml-20 text-red-600">padding-right
                    </li>
                    <li class="text-lg ml-20 text-red-600">padding-bottom</li>
                    <li class="text-lg ml-20 text-red-600">padding-left</li>
                </ul>
                <p class="text-lg ml-6 my-6">So, here is how it works:

                </p>
                <p class="text-lg ml-6 my-6">If the <strong>padding</strong> property has four values:

                </p>
                <ul class="list-disc">
                    <li class="text-lg ml-8"><strong>padding: 25px 50px 75px;
                        </strong></li>
                    <li class="text-lg ml-20">top padding is 25px
                    </li>
                    <li class="text-lg ml-20">right and left paddings are 50px
                    </li>
                    <li class="text-lg ml-20">bottom padding is 75px
                    </li>
                </ul>
                <h6 class="font-serif text-4xl font-extralight mt-6">Example</h6>
                <div class="mt-6" style="background-color: lightblue; border: 1px solid black; padding: 25px 50px 75px;">This is a &ltdiv> element with 3 padding values.</div>
                <p class="text-lg ml-6 my-6">Create a &ltdiv> element with three different shorthand property values.</p>
                <div class="grid grid-cols-4 my-2 ml-6">
                    <div class="code-area col-span-2">
                        <textarea class="w-full m-0 p-2 h-1/2" id="htmlCode6" placeholder="HTML Code"
                        ></textarea>
                        <textarea class="w-full m-0 p-2 h-1/2" id="cssCode6" placeholder="CSS Code"
                        ></textarea>
                    </div>
                    <div
                        class="preview-area border-2 col-span-2 ml-2 bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                        <iframe id="preview-window6"></iframe>
                    </div>
                </div>
                <button class="my-2 ml-6 px-4 py-2 rounded bg-blue-500 hover:bg-blue-700 block">Run</button>
                <button class="my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a
                        class="underline hover:no-underline" href="/tutorials/css-borders">Previous</a></button>

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

            button[5].addEventListener("click", showPreview5);

            function showPreview5() {
                var htmlCode5 = document.getElementById("htmlCode5").value;
                var cssCode5 = "<style>" + document.getElementById("cssCode5").value + "</style>";
                var frame5 = document.getElementById("preview-window5").contentWindow.document;
                frame5.open();
                frame5.write(htmlCode5 + cssCode5);
                frame5.close();
            }

            button[6].addEventListener("click", showPreview6);

            function showPreview6() {
                var htmlCode6 = document.getElementById("htmlCode6").value;
                var cssCode6 = "<style>" + document.getElementById("cssCode6").value + "</style>";
                var frame6 = document.getElementById("preview-window6").contentWindow.document;
                frame6.open();
                frame6.write(htmlCode6 + cssCode6);
                frame6.close();
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
