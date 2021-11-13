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
                <h2 class="text-5xl font-bold font-serif">How CSS is structured</h2>
                <button class="my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a class="underline hover:no-underline" href="/tutorials/getting-started-with-css">Previous</a></button>
                <button class="float-right my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a class="underline hover:no-underline" href="/tutorials/how-css-works">Next</a></button>
                <p class="my-6 text-lg clear-both">Now that you are beginning to understand the purpose and use of CSS, let's examine the structure of
                    CSS.
                </p>

                <h3 class="text-4xl font-serif font-bold mt-6">Applying CSS to HTML</h3>
                <p class="my-6 text-lg">First, let's examine three methods of applying CSS to a document: with an external stylesheet, with
                    an internal stylesheet, and with inline styles.</p>

                <h4 class="text-4xl font-serif font-extralight mt-6">External stylesheet</h4>
                <p class="my-6 text-lg">An external stylesheet contains CSS in a separate file with a .css extension. This is the most common
                    and useful method of bringing CSS to a document. You can link a single CSS file to multiple web
                    pages, styling all of them with the same CSS stylesheet. In the Getting started with CSS, we linked
                    an external stylesheet to our web page.</p>
                <p class="my-6 text-lg">You reference an external CSS stylesheet from an HTML &ltlink> element:
                </p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>&lt!DOCTYPE html></li>
                        <li>&lthtml></li>
                        <li class="ml-4">&lthead></li>
                        <li class="ml-6">&ltmeta charset="utf-8"></li>
                        <li class="ml-6">&lttitle>My CSS experiment&lt/
                            title>
                        </li>
                        <li class="ml-6">&ltlink rel="stylesheet" href="styles.css"></li>
                        <li class="ml-4">&lt/head></li>
                        <li class="ml-4">&ltbody></li>
                        <li class="ml-6">&lth1>Hello World!&lt/
                            h1>
                        </li>
                        <li class="ml-6">&ltp>This is my first CSS example&lt/p></li>
                        <li class="ml-4">&lt/body></li>
                        <li>&lt/html></li>
                    </ul>
                </div>
                <p class="my-6 text-lg">The CSS stylesheet file might look like this:</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>h1 {</li>
                        <li class="ml-4">color: blue;</li>
                        <li class="ml-4">background-color: yellow;</li>
                        <li class="ml-4">border: 1px solid black;</li>
                        <li>}</li>
                    </ul>
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>p {</li>
                        <li class="ml-4">color: red;</li>
                        <li>}</li>
                    </ul>
                </div>
                <p class="my-6 text-lg">The href attribute of the &ltlink> element needs to reference a file on your file system. In the
                    example above, the CSS file is in the same folder as the HTML document, but you could place it
                    somewhere else and adjust the path. Here are three examples:</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li><!-- Inside a subdirectory called styles inside the current directory --></li>
                        <li>&ltlink rel="stylesheet" href="styles/style.css"></li>
                        <br>
                        <li>
                            <!-- Inside a subdirectory called general, which is in a subdirectory called styles, inside the current directory --></li>
                        <li>&ltlink rel="stylesheet" href="styles/general/style.css">
                        </li>
                        <br>
                        <li><!-- Go up one directory level, then inside a subdirectory called styles -->
                        </li>
                        <li>&ltlink rel="stylesheet" href="../styles/style.css">
                        </li>
                    </ul>
                </div>
                <h4 class="text-4xl font-serif font-extralight mt-6">Internal stylesheet</h4>
                <p class="my-6 text-lg">An internal stylesheet resides within an HTML document. To create an internal stylesheet, you place
                    CSS inside a &ltstyle> element contained inside the HTML &lthead>.</p>
                <p class="my-6 text-lg">The HTML for an internal stylesheet might look like this:
                </p>

                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>&lt!DOCTYPE html></li>
                        <li>&lthtml></li>
                        <li class="ml-4">&lthead></li>
                        <li class="ml-6">&ltmeta charset="utf-8"></li>
                        <li class="ml-6">&lttitle>My CSS experiment&lt/title>
                        </li>
                        <li class="ml-6">&ltstyle></li>
                        <li class="ml-8">h1 {</li>
                        <li class="ml-10">color: blue;</li>
                        <li class="ml-10">background-color: yellow;</li>
                        <li class="ml-10">border: 1px solid black;</li>
                        <li class="ml-8">}</li>
                        <br>
                        <li class="ml-8">p {</li>
                        <li class="ml-10"> color: red;</li>
                        <li class="ml-8">}</li>
                        <li class="ml-6">&lt/style></li>
                        <li class="ml-4">&lt/head></li>
                        <li class="ml-4">&ltbody></li>
                        <li class="ml-6">&lth1>Hello World!&lt/h1></li>
                        <li class="ml-6">&ltp>This is my first CSS example&lt/p></li>
                        <li class="ml-4">&lt/body></li>
                        <li>&lt/html></li>
                    </ul>
                </div>
                <p class="my-6 text-lg">In some circumstances, internal stylesheets can be useful. For example, perhaps you're working with a
                    content management system where you are blocked from modifying external CSS files.</p>
                <p class="my-6 text-lg">But for sites with more than one page, an internal stylesheet becomes a less efficient way of
                    working. To apply uniform CSS styling to multiple pages using internal stylesheets, you must have an
                    internal stylesheet in every web page that will use the styling. The efficiency penalty carries over
                    to site maintenance too. With CSS in internal stylesheets, there is the risk that even one simple
                    styling change may require edits to multiple web pages.</p>

                <h4 class="text-4xl font-serif font-extralight mt-6">Inline styles</h4>
                <p class="my-6 text-lg">Inline styles are CSS declarations that affect a single HTML element, contained within a style
                    attribute. The implementation of an inline style in an HTML document might look like this:</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>&lt!DOCTYPE html></li>
                        <li>&lthtml></li>
                        <li class="ml-4">&lthead></li>
                        <li class="ml-6">&ltmeta charset="utf-8"></li>
                        <li class="ml-6">&lttitle>My CSS experiment&lt/title>
                        </li>
                        <li class="ml-4">&lt/head></li>
                        <li class="ml-4">&ltbody></li>
                        <li class="ml-6">&lth1 style="color: blue;background-color: yellow;border: 1px solid
                            black;">Hello World!&lt/h1>
                        </li>
                        <li class="ml-6">&ltp style="color:red;">This is my first CSS example&lt/p></li>
                        <li class="ml-4">&lt/body></li>
                        <li>&lt/html></li>
                    </ul>
                </div>
                <p class="my-6 text-lg">Avoid using CSS in this way, when possible. It is the opposite of a best practice. First, it is the
                    least efficient implementation of CSS for maintenance. One styling change might require multiple
                    edits within a single web page. Second, inline CSS also mixes (CSS) presentational code with HTML
                    and content, making everything more difficult to read and understand. Separating code and content
                    makes maintenance easier for all who work on the website.</p>
                <p class="my-6 text-lg">There are a few circumstances where inline styles are more common. You might have to resort to using
                    inline styles if your working environment is very restrictive. For example, perhaps your CMS only
                    allows you to edit the HTML body. You may also see a lot of inline styles in HTML email to achieve
                    compatibility with as many email clients as possible.</p>
                <h3 class="text-4xl font-serif font-bold mt-6">Selectors</h3>
                <p class="my-6 text-lg">A selector targets HTML to apply styles to content. We have already discovered a variety of selectors
                    in
                    the Getting started with CSS tutorial. If CSS is not applying to content as expected, your selector
                    may
                    not match the way you think it should match.</p>
                <p class="my-6 text-lg">Each CSS rule starts with a selector — or a list of selectors — in order to tell the browser which
                    element or elements the rules should apply to. All the examples below are valid selectors or lists
                    of
                    selectors.</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>h1</li>
                        <li>a:link</li>
                        <li>.manythings</li>
                        <li>#onething</li>
                        <li>*
                        </li>
                        <li>.box p</li>
                        <li>.box p:first-child</li>
                        <li>h1, h2, .intro</li>
                    </ul>
                </div>
                <p class="my-6 text-lg">Try creating some CSS rules that use the selectors above. Add HTML to be styled by the selectors. If
                    any
                    of the syntax above is not familiar, try searching MDN.</p>

                <h4 class="text-4xl font-serif font-extralight mt-6">Specificity</h4>
                <p class="my-6 text-lg">You may encounter scenarios where two selectors select the same HTML element. Consider the stylesheet
                    below, with a p selector that sets paragraph text to blue. However, there is also a class that sets
                    the
                    text of selected elements to red.</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>.special {</li>
                        <li class="ml-4">color: red;</li>
                        <li>}</li>
                        <br>
                        <li>p {</li>
                        <li class="ml-4">color: blue;</li>
                        <li>}</li>
                    </ul>
                </div>
                <p class="my-6 text-lg">Suppose that in our HTML document, we have a paragraph with a class of special. Both rules apply.
                    Which
                    selector prevails? Do you expect to see blue or red paragraph text?</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>&ltp class="special">What color am I?&lt/p></li>
                    </ul>
                </div>
                <p class="my-6 text-lg">The CSS language has rules to control which selector is stronger in the event of a conflict. These
                    rules
                    are called cascade and specificity. In the code block below, we define two rules for the p selector,
                    but
                    the paragraph text will be blue. This is because the declaration that sets the paragraph text to
                    blue
                    appears later in the stylesheet. Later styles replace conflicting styles that appear earlier in the
                    stylesheet. This is the cascade rule.</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>p {</li>
                        <li class="ml-4">color: red;</li>
                        <li>}</li>
                        <br>
                        <li>p {</li>
                        <li class="ml-4">color: blue;</li>
                        <li>}</li>
                    </ul>
                </div>
                <p class="my-6 text-lg">However, in the case of our earlier example with the conflict between the class selector and the
                    element
                    selector, the class prevails, rendering the paragraph text red. How can this happen even though a
                    conflicting style appears later in the stylesheet? A class is rated as being more specific, as in
                    having
                    more specificity than the element selector, so it cancels the other conflicting style
                    declaration.</p>
                <p class="my-6 text-lg">Try this experiment for yourself! Add HTML, then add the two p { ... } rules to your stylesheet.
                    Next,
                    change the first p selector to .special to see how it changes the styling.</p>
                <p class="my-6 text-lg">The rules of specificity and the cascade can seem complicated at first. These rules are easier to
                    understand as you become more familiar with CSS. The Cascade and inheritance section in the next
                    module
                    explains this in detail, including how to calculate specificity.</p>
                <p class="my-6 text-lg">For now, remember that specificity exists. Sometimes, CSS might not apply as you expected because
                    something else in the stylesheet has more specificity. Recognizing that more than one rule could
                    apply
                    to an element, is the first step in fixing these kinds of issues.</p>

                <h3 class="text-4xl font-serif font-bold mt-6">Properties and values</h3>
                <p class="my-6 text-lg">At its most basic level, CSS consists of two components:</p>
                <ul>
                    <li><strong>Properties:</strong> These are human-readable identifiers that indicate which stylistic
                        features you want to
                        modify. For example, font-size, width, background-color.
                    </li>
                    <li><strong>Values:</strong> Each property is assigned a value. This value indicates how to style
                        the property.
                    </li>
                </ul>
                <p class="my-6 text-lg">The example below highlights a single property and value. The property name is color and the value is blue.</p>
                <img src="{{asset('/images/css-structure-image-1.png')}}" alt="CSS Structure">

                <p class="my-6 text-lg">When a property is paired with a value, this pairing is called a CSS declaration. CSS declarations are found within CSS Declaration Blocks. In the example below, highlighting identifies the CSS declaration block.</p>
                <img src="{{asset('/images/css-structure-image-2.png')}}" alt="CSS Structure">

                <p class="my-6 text-lg">Finally, CSS declaration blocks are paired with selectors to produce CSS rulesets (or CSS rules). The example below contains two rules: one for the h1 selector and one for the p selector. The colored highlighting identifies the h1 rule.</p>
                <img src="{{asset('/images/css-structure-image-3.png')}}" alt="CSS Structure">
                <p class="my-6 text-lg">Setting CSS properties to specific values is the primary way of defining layout and styling for a document. The CSS engine calculates which declarations apply to every single element of a page.</p>
                <button class="my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a class="underline hover:no-underline" href="/tutorials/getting-started-with-css">Previous</a></button>
                <button class="float-right my-5 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"><a class="underline hover:no-underline" href="/tutorials/how-css-works">Next</a></button>
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
