<x-app-layout>
    <x-slot name="header">
        <x-header></x-header>
    </x-slot>
    <x-slot name="slot">
        {{--        Div with the width of 1/12--}}
        <div class="grid grid-cols-12">
            <div class="text-center float-left col-span-12  md:col-span-2">
                <x-navigation></x-navigation>
            </div>
            {{--            The content of the tutorials goes here--}}
            <div class="col-span-12  md:col-span-7 m-10">
                <h2 class="text-5xl font-bold font-serif">Getting started with CSS</h2>
                <button  class="my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a class="underline hover:no-underline" href="/tutorials/what-is-css">Previous</a></button>
                <button class="float-right my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a class="underline hover:no-underline" href="/tutorials/how-css-is-structured">Next</a></button>

                <p class="my-6 text-lg clear-both">In this article we will take a simple HTML document and apply CSS to it, learning some practical
                    things about the language along the way.</p>
                <h3 class="text-4xl font-serif font-bold mt-6">Adding CSS to our document</h3>
                <p class="my-6 text-lg">The very first thing we need to do is to tell the HTML document that we have some CSS rules we want
                    it to use. There are three different ways to apply CSS to an HTML document that you'll commonly come
                    across, however, for now, we will look at the most usual and useful way of doing so — linking CSS
                    from the head of your document.</p>
                <p class="my-6 text-lg">Create a file in the same folder as your HTML document and save it as styles.css. The .css extension
                    shows that this is a CSS file.</p>
                <p class="my-6 text-lg">To link styles.css to index.html add the following line somewhere inside the < head > of the HTML
                    document:
                </p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>&ltlink rel="stylesheet" href="styles.css"></li>
                    </ul>
                </div>
                <p class="my-6 text-lg">This
                    < link>
                    element tells the browser that we have a stylesheet, using the rel attribute, and the location of
                    that stylesheet as the value of the href attribute. You can test that the CSS works by adding a rule
                    to styles.css. Using your code editor add the following to your CSS file:
                </p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>h1 {</li>
                        <li class="ml-4">color: red;</li>
                        <li>}</li>
                    </ul>
                </div>
                <p class="my-6 text-lg">Save your HTML and CSS files and reload the page in a web browser. The level one heading at the top
                    of the document should now be red. If that happens, congratulations — you have successfully applied
                    some CSS to an HTML document. If that doesn't happen, carefully check that you've typed everything
                    correctly.</p>
                <p class="my-6 text-lg">You can continue to work in styles.css locally, or you can use our interactive editor below to
                    continue with this tutorial. The interactive editor acts as if the CSS in the first panel is linked
                    to the HTML document, just as we have with our document above.
                </p>

                <h3 class="text-4xl font-serif font-bold mt-6">Styling HTML elements</h3>
                <p class="my-6 text-lg">By making our heading red we have already demonstrated that we can target and style an HTML element.
                    We do this by targeting an element selector — this is a selector that directly matches an HTML
                    element name. To target all paragraphs in the document you would use the selector p. To turn all
                    paragraphs green you would use:</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>p {</li>
                        <li class="ml-4">color: red;</li>
                        <li>}</li>
                    </ul>
                </div>
                <p class="my-6 text-lg">You can target multiple selectors at once, by separating the selectors with a comma. If I want all
                    paragraphs and all list items to be green my rule looks like this:</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>p, li {</li>
                        <li class="ml-4">color: red;</li>
                        <li>}</li>
                    </ul>
                </div>

                <h3 class="text-4xl font-serif font-bold mt-6">Changing the default behavior of elements</h3>
                <p class="my-6 text-lg">When we look at a well-marked up HTML document, even something as simple as our example, we can see
                    how the browser is making the HTML readable by adding some default styling. Headings are large and
                    bold and our list has bullets. This happens because browsers have internal stylesheets containing
                    default styles, which they apply to all pages by default; without them all of the text would run
                    together in a clump and we would have to style everything from scratch. All modern browsers display
                    HTML content by default in pretty much the same way.</p>
                <p class="my-6 text-lg">However, you will often want something other than the choice the browser has made. This can be done
                    by choosing the HTML element that you want to change, and using a CSS rule to change the way it
                    looks. A good example is our < ul>, an unordered list. It has list bullets, and if I decide I don't
                    want those bullets I can remove them like so:</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>ul {</li>
                        <li class="ml-4">list-style-type: none;</li>
                        <li>}</li>
                    </ul>
                </div>
                <p class="my-6 text-lg">Try adding this to your CSS now</p>
                <p class="my-6 text-lg">The list-style-type property is a good property to look at on MDN to see which values are supported.
                    Take a look at the page for list-style-type and you will find an interactive example at the top of
                    the page to try some different values in, then all allowable values are detailed further down the
                    page.</p>
                <p class="my-6 text-lg">Looking at that page you will discover that in addition to removing the list bullets you can change
                    them — try changing them to square bullets by using a value of square.</p>

                <h3 class="text-4xl font-serif font-bold mt-6">Adding a class</h3>
                <p class="my-6 text-lg">So far we have styled elements based on their HTML element names. This works as long as you want all
                    of the elements of that type in your document to look the same. Most of the time that isn't the case
                    and so you will need to find a way to select a subset of the elements without changing the others.
                    The most common way to do this is to add a class to your HTML element and target that class.</p>
                <p class="my-6 text-lg">In your HTML document, add a class attribute to the second list item. Your list will now look like
                    this:</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>&ltul></li>
                        <li class="ml-4">&ltli> Item one &lt/li></li>
                        <li class="ml-4">&ltli class="special"> Item two &lt/li></li>
                        <li class="ml-4">&ltli> Item three &lt/li></li>
                        <li>&lt/ul></li>
                    </ul>
                </div>
                <p class="my-6 text-lg">In your CSS you can target the class of special by creating a selector that starts with a full stop
                    character. Add the following to your CSS file:</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>.special {</li>
                        <li class="ml-4">color: orange;</li>
                        <li class="ml-4">font-weight: bold;</li>
                        <li>}</li>
                    </ul>
                </div>
                <p class="my-6 text-lg">Save and refresh to see what the result is.</p>
                <p class="my-6 text-lg">You can apply the class of special to any element on your page that you want to have the same look as
                    this list item. For example, you might want the < span> in the paragraph to also be orange and bold.
                    Try adding a class of special to it, then reload your page and see what happens.</p>
                <p class="my-6 text-lg">Sometimes you will see rules with a selector that lists the HTML element selector along with the
                    class:</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>li.special {</li>
                        <li class="ml-4">color: orange;</li>
                        <li class="ml-4">font-weight: bold;</li>
                        <li>}</li>
                    </ul>
                </div>
                <p class="my-6 text-lg">This syntax means "target any li element that has a class of special". If you were to do this then
                    you would no longer be able to apply the class to a < span> or another element by adding the class
                    to it; you would have to add that element to the list of selectors:
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>li.special,</li>
                        <li>span.special {</li>
                        <li class="ml-4">color: orange;</li>
                        <li class="ml-4">font-weight: bold;</li>
                        <li>}</li>
                    </ul>
                </div>
                <p class="my-6 text-lg">As you can imagine, some classes might be applied to many elements and you don't want to have to keep
                    editing your CSS every time something new needs to take on that style. Therefore it is sometimes
                    best to bypass the element and refer to the class, unless you know that you want to create some
                    special rules for one element alone, and perhaps want to make sure they are not applied to other
                    things.</p>

                <h3 class="text-4xl font-serif font-bold mt-6">Styling things based on their location in a document</h3>
                <p class="my-6 text-lg">There are times when you will want something to look different based on where it is in the document.
                    There are a number of selectors that can help you here, but for now we will look at just a couple.
                    In our document are two < em> elements — one inside a paragraph and the other inside a list item. To
                    select only an < em> that is nested inside an
                    < li> element I can use a selector called the descendant combinator, which takes the form of
                    a space between two other selectors.</p>
                <p class="my-6 text-lg">Add the following rule to your stylesheet.

                </p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>li em {</li>
                        <li class="ml-4">color: rebeccapurple;</li>
                        <li>}</li>
                    </ul>
                </div>
                <p class="my-6 text-lg">This selector will select any &ltem> element that is inside (a descendant of) an
                        &ltli>. So in your example document, you should find that the &ltem> in the third list item is now
                                purple, but the one inside the paragraph is unchanged.&lt/p>
                <p class="my-6 text-lg">Something else you might like to try is styling a paragraph when it comes directly after a heading at
                    the same hierarchy level in the HTML. To do so place a + (an adjacent sibling combinator) between
                    the selectors.

                </p>
                <p class="my-6 text-lg">Try adding this rule to your stylesheet as well:

                </p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>h1 + p {</li>
                        <li class="ml-4">font-size: 200%;</li>
                        <li>}</li>
                    </ul>
                </div>

                <h3 class="text-4xl font-serif font-bold mt-6">Styling things based on state</h3>
                <p class="my-6 text-lg">The final type of styling we shall take a look at in this tutorial is the ability to style things
                    based on their state. A straightforward example of this is when styling links. When we style a link
                    we need to target the < a> (anchor) element. This has different states depending on whether it is
                        unvisited, visited, being hovered over, focused via the keyboard, or in the process of being
                        clicked (activated). You can use CSS to target these different states — the CSS below styles
                        unvisited links pink and visited links green.</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>a:link {</li>
                        <li class="ml-4">color: pink;</li>
                        <li>}</li>
                    </ul>
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>a:visited {</li>
                        <li class="ml-4">color: green;</li>
                        <li>}</li>
                    </ul>
                </div>
                <p class="my-6 text-lg">You can change the way the link looks when the user hovers over it, for example removing the underline, which is achieved by in the next rule:</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>a:hover {</li>
                        <li class="ml-4">text-decoration: none;</li>
                        <li>}</li>
                    </ul>
                </div>

                <button  class="my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a class="underline hover:no-underline" href="/tutorials/what-is-css">Previous</a></button>
                <button class="float-right my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a class="underline hover:no-underline" href="/tutorials/how-css-is-structured">Next</a></button>
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
