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
                <h2 class="text-5xl font-bold font-serif">How CSS works</h2>
                <button class="my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a
                        class="underline hover:no-underline" href="/tutorials/how-css-is-structured">Previous</a>
                </button>
                <button class="my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 float-right rounded-md"><a
                        class="underline hover:no-underline" href="/tutorials/css-quizz">CSS Quizz</a></button>
                <h3 class="text-4xl font-serif font-bold">How does CSS actually work?</h3>
                <p class="my-6 text-lg">When a browser displays a document, it must combine the document's content with
                    its style
                    information. It processes the document in a number of stages, which we've listed below. Bear in mind
                    that this is a very simplified version of what happens when a browser loads a webpage, and that
                    different browsers will handle the process in different ways. But this is roughly what happens.</p>
                <ol class="list-decimal m-8 text-lg">
                    <li>The browser loads the HTML (e.g. receives it from the network).
                    </li>
                    <li>It converts the HTML into a DOM (Document Object Model). The DOM represents the document in the
                        computer's memory. The DOM is explained in a bit more detail in the next section.
                    </li>
                    <li>The browser then fetches most of the resources that are linked to by the HTML document, such as
                        embedded images and videos ... and linked CSS! JavaScript is handled a bit later on in the
                        process, and we won't talk about it here to keep things simpler.
                    </li>
                    <li>The browser parses the fetched CSS, and sorts the different rules by their selector types into
                        different "buckets", e.g. element, class, ID, and so on. Based on the selectors it finds, it
                        works out which rules should be applied to which nodes in the DOM, and attaches style to them as
                        required (this intermediate step is called a render tree).
                    </li>
                    <li>The render tree is laid out in the structure it should appear in after the rules have been
                        applied to it.
                    </li>
                    <li>The visual display of the page is shown on the screen (this stage is called painting).
                    </li>
                </ol>
                <p class="my-6 text-lg">The following diagram also offers a simple view of the process.

                </p>
                <img src="{{asset('/images/diagram-css.svg')}}" alt="Diagram CSS">

                <h3 class="text-4xl font-serif font-bold mt-6">About the DOM</h3>
                <p class="my-6 text-lg">A DOM has a tree-like structure. Each element, attribute, and piece of text in
                    the markup language
                    becomes a DOM node in the tree structure. The nodes are defined by their relationship to other DOM
                    nodes. Some elements are parents of child nodes, and child nodes have siblings.</p>
                <p class="my-6 text-lg">Understanding the DOM helps you design, debug and maintain your CSS because the
                    DOM is where your CSS
                    and the document's content meet up. When you start working with browser DevTools you will be
                    navigating the DOM as you select items in order to see which rules apply.</p>

                <h3 class="text-4xl font-serif font-bold mt-6">A real DOM representation</h3>
                <p class="my-6 text-lg">Rather than a long, boring explanation, let's look at an example to see how a
                    real HTML snippet is
                    converted into a DOM.</p>
                <p class="my-6 text-lg">Take the following HTML code:</p>

                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>&ltp></li>
                        <li class="ml-4">Let's use:</li>
                        <li class="ml-4">&ltspan>Cascading&lt/span></li>
                        <li class="ml-4">&ltspan>Style&lt/span></li>
                        <li class="ml-4">&ltspan>Sheets&lt/span></li>
                        <li>&lt/p></li>
                    </ul>
                </div>
                <p class="my-6 text-lg">In the DOM, the node corresponding to our
                <p class="my-6 text-lg"> element is a parent. Its children are a text node and the three nodes
                    corresponding to our < span>
                    elements. The SPAN nodes are also parents, with text nodes as their children:</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>P</li>
                        <li class="ml-4">├─ "Let's use:"
                        </li>
                        <li class="ml-4">├─ SPAN</li>
                        <li class="ml-4">| └─ "Cascading"</li>
                        <li class="ml-4">| └─ "Style"</li>
                        <li class="ml-4">└─ SPAN</li>
                        <li class="ml-4">└─ "Sheets"</li>
                    </ul>
                </div>
                <p class="my-6 text-lg">This is how a browser interprets the previous HTML snippet —it renders the above
                    DOM tree and then
                    outputs it in the browser like so:</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>Let's use: Cascading Style Sheets</li>
                    </ul>
                </div>

                <h3 class="text-4xl font-serif font-bold mt-6">Applying CSS to the DOM</h3>
                <p class="my-6 text-lg">Let's say we added some CSS to our document, to style it. Again, the HTML is as
                    follows:
                </p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>&ltp></li>
                        <li class="ml-4">Let's use:</li>
                        <li class="ml-4">&ltspan>Cascading&lt/span></li>
                        <li class="ml-4">&ltspan>Style&lt/span></li>
                        <li class="ml-4">&ltspan>Sheets&lt/span></li>
                        <li>&lt/p></li>
                    </ul>
                </div>
                <p class="my-6 text-lg">Let's suppose we apply the following CSS to it:</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>span {</li>
                        <li class="ml-4">border: 1px solid black;</li>
                        <li class="ml-4">background-color: lime;</li>
                        <li>}</li>
                    </ul>
                </div>
                <p class="my-6 text-lg">The browser will parse the HTML and create a DOM from it, then parse the CSS.
                    Since the only rule
                    available in the CSS has a span selector, the browser will be able to sort the CSS very quickly! It
                    will apply that rule to each one of the three &ltspan>s, then paint the final visual representation
                    to the screen.</p>
                <p class="my-6 text-lg">The updated output is as follows:</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>Let's use: <span class="bg-green-500 border-2 m-1 border-black p-1">Cascading </span><span
                                class="bg-green-500 border-2 m-1 border-black p-1">Style </span><span
                                class="bg-green-500 border-2 m-1 border-black p-1">Sheets</span></li>
                    </ul>
                </div>

                <h3 class="text-4xl font-serif font-bold mt-6">What happens if a browser encounters CSS it doesn't
                    understand?</h3>
                <p class="my-6 text-lg">In an earlier lesson I mentioned that browsers do not all implement new CSS at
                    the same time. In
                    addition, many people are not using the latest version of a browser. Given that CSS is being
                    developed all the time, and is therefore ahead of what browsers can recognize, you might wonder what
                    happens if a browser encounters a CSS selector or declaration it doesn't recognize.</p>
                <p class="my-6 text-lg">The answer is that it does nothing, and just moves on to the next bit of CSS!

                </p>
                <p class="my-6 text-lg">If a browser is parsing your rules, and encounters a property or value that it
                    doesn't understand, it
                    ignores it and moves on to the next declaration. It will do this if you have made an error and
                    misspelled a property or value, or if the property or value is just too new and the browser doesn't
                    yet support it.

                </p>
                <p class="my-6 text-lg">Similarly, if a browser encounters a selector that it doesn't understand, it
                    will just ignore the
                    whole rule and move on to the next one.

                </p>
                <p class="my-6 text-lg">In the example below I have used the British English spelling for color, which
                    makes that property
                    invalid as it is not recognized. So my paragraph has not been colored blue. All of the other CSS
                    have been applied however; only the invalid line is ignored.

                </p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>&ltp> I want this text to be large, bold and blue.&lt/p></li>
                    </ul>
                </div>

                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>p {</li>
                        <li class="m-4">font-weight: bold;</li>
                        <li class="m-4">color: blue;</li>
                        <li class="m-4">font-size: 200%;</li>
                        <li>}</li>
                    </ul>
                </div>

                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3 my-10">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li><span
                                class="text-xl font-bold text-blue-500">I want this text to be large, bold and blue.</span>
                        </li>
                    </ul>
                </div>

                <p class="my-6 text-lg">This behavior is very useful. It means that you can use new CSS as an
                    enhancement, knowing that no
                    error will occur if it is not understood — the browser will either get the new feature or not.
                    Coupled with the way that the cascade works, and the fact that browsers will use the last CSS they
                    come across in a stylesheet when you have two rules with the same specificity you can also offer
                    alternatives for browsers that don't support new CSS.</p>
                <p class="my-6 text-lg">This works particularly well when you want to use a value that is quite new and
                    not supported
                    everywhere. For example, some older browsers do not support calc() as a value. I might give a
                    fallback width for a box in pixels, then go on to give a width with a calc() value of 100% - 50px.
                    Old browsers will use the pixel version, ignoring the line about calc() as they don't understand it.
                    New browsers will interpret the line using pixels, but then override it with the line using calc()
                    as that line appears later in the cascade.</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>.box {
                        </li>
                        <li class="ml-4">width: 500px;
                        </li>
                        <li class="ml-4">width: calc(100% - 50px);
                        </li>
                        <li>}</li>
                    </ul>
                </div>
                <p class="my-6 text-lg">That's it for this part of the course, we hope you enjoyed learning this far.
                    Take the course quiz to test out your knowledge.</p>
                <button class="my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a
                        class="underline hover:no-underline" href="/tutorials/how-css-is-structured">Previous</a>
                </button>
                <button class="my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 float-right rounded-md"><a
                        class="underline hover:no-underline" href="/tutorials/css-quizz">CSS Quizz</a></button>
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
