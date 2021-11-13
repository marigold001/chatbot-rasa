<x-app-layout>
    <x-slot name="header">
        <x-header></x-header>
    </x-slot>
    <x-slot name="slot">
        <div class="chat-container" style="position: fixed; bottom: 0px; right: 0px; max-width: 20%;"></div>
        {{--        Div with the width of 1/12--}}
        <div class="grid grid-cols-12">
            <div class="text-center float-left col-span-12  md:col-span-2">
                <x-navigation></x-navigation>
            </div>
            {{--            The content of the tutorials goes here--}}
            <div class="col-span-12  md:col-span-7 m-10">
                <h2 class="text-5xl font-bold font-serif">What is CSS?</h2>
                <button class="mb-10  float-right bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md"  ><a class="hover:no-underline underline" href="/tutorials/getting-started-with-css">Next</a></button>
                <p class="my-6 text-lg clear-both">CSS (Cascading Style Sheets) allows you to create great-looking web pages, but how
                    does it work under the hood? This article explains what CSS is, with a simple syntax example, and
                    also covers some key terms about the language.</p>
                <p class="my-6 text-lg">HTML is a markup language that tells web browsers how to structure the web pages you visit. These
                    documents will be readable in a web browser. Headings will look larger than regular text, paragraphs
                    break onto a new line and have space between them. Links are colored and underlined to distinguish
                    them from the rest of the text. What you are seeing is the browser's default styles — very basic
                    styles that the browser applies to HTML to make sure it will be basically readable even if no
                    explicit styling is specified by the author of the page.</p>
                <img src="{{asset('/images/html-example.png')}}" alt="HTML Styling example">
                <p class="my-6 text-lg">However, the web would be a boring place if all websites looked like that. Using CSS you can control
                    exactly how HTML elements look in the browser, presenting your markup using whatever design you
                    like.</p>
                {{--                What is CSS for?--}}
                <h3 class="text-4xl font-serif font-bold mt-6">What is CSS for?</h3>
                <p class="my-6 text-lg">As we have mentioned before, CSS is a language for specifying how documents are presented to users —
                    how they are styled, laid out, etc.</p>
                <p class="my-6 text-lg">A document is usually a text file structured using a markup language — HTML is the most common markup
                    language, but you may also come across other markup languages such as SVG or XML.</p>
                <p class="my-6 text-lg">Presenting a document to a user means converting it into a form usable by your audience. Browsers,
                    like Firefox, Chrome, or Edge , are designed to present documents visually, for example, on a
                    computer screen, projector or printer.</p>
                <p class="my-6 text-lg">CSS can be used for very basic document text styling — for example changing the color and size of
                    headings and links. It can be used to create layout — for example turning a single column of text
                    into a layout with a main content area and a sidebar for related information. It can even be used
                    for effects such as animation.</p>
                {{--            CSS Syntax    --}}
                <h3 class="text-4xl font-serif font-bold mt-6">CSS syntax</h3>
                <p class="my-6 text-lg">CSS is a rule-based language — you define rules specifying groups of styles that should be applied to
                    particular elements or groups of elements on your web page. For example "I want the main heading on
                    my page to be shown as large red text."</p>
                <p class="my-6 text-lg">The following code shows a very simple CSS rule that would achieve the styling described above:</p>
                <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                    <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                        <li>h1 {</li>
                        <li class="ml-4">color: red;</li>
                        <li class="ml-4">font-size: 5em;</li>
                        <li>}</li>
                    </ul>
                </div>
                <p class="my-6 text-lg">The rule opens with a selector . This selects the HTML element that we are going to style. In this
                    case we are styling level one headings (&lth1>).</p>
                    <p class="my-6 text-lg">We then have a set of curly braces { }. Inside those will be one or more declarations, which take
                        the form of property and value pairs. Each pair specifies a property of the element(s) we are
                        selecting, then a value that we'd like to give the property.</p>
                    <p class="my-6 text-lg">Before the colon, we have the property, and after the colon, the value. CSS properties have
                        different allowable values, depending on which property is being specified. In our example, we
                        have the color property, which can take various color values. We also have the font-size
                        property. This property can take various size units as a value.</p>
                    <p class="my-6 text-lg">A CSS stylesheet will contain many such rules, written one after the other.</p>
                    <div class="bg-gray-100 w-full border-l-8 border-blue-700 p-3">
                        <ul class="list-none m-5" style="font-family: 'Roboto Mono', monospace;">
                            <li>h1 {</li>
                            <li class="ml-4">color: red;</li>
                            <li class="ml-4">font-size: 5em;</li>
                            <li>}</li>
                            <li>p {</li>
                            <li class="ml-4">color: black;</li>
                            <li>}</li>
                        </ul>
                    </div>
                    <p class="my-6 text-lg">You will find that you quickly learn some values, whereas others you will need to look up. The
                        individual property pages on MDN give you a quick way to look up properties and their values
                        when you forget, or want to know what else you can use as a value.</p>
                    <h3 class="text-4xl font-serif font-bold">CSS Modules</h3>
                    <p class="my-6 text-lg">As there are so many things that you could style using CSS, the language is broken down into
                        modules. You'll see reference to these modules as you explore MDN and many of the documentation
                        pages are organized around a particular module. For example, you could take a look at the MDN
                        reference to the Backgrounds and Borders module to find out what its purpose is, and what
                        different properties and other features it contains. You will also find links to the CSS
                        Specification that defines the technology (see below).</p>
                    <p class="my-6 text-lg">At this stage you don't need to worry too much about how CSS is structured, however it can make
                        it easier to find information if, for example, you are aware that a certain property is likely
                        to be found among other similar things and are therefore probably in the same
                        specification. </p>
                    <p class="my-6 text-lg">For a specific example, let's go back to the Backgrounds and Borders module — you might think
                        that it makes logical sense for the background-color and border-color properties to be defined
                        in this module. And you'd be right.</p>
                    <h4 class="font-serif text-4xl font-extralight mt-6">CSS Specifications</h4>
                    <p class="my-6 text-lg">All web standards technologies (HTML, CSS, JavaScript, etc.) are defined in giant documents
                        called specifications (or "specs"), which are published by standards organizations (such as the
                        W3C, WHATWG, ECMA, or Khronos) and define precisely how those technologies are supposed to
                        behave.</p>
                    <p class="my-6 text-lg">CSS is no different — it is developed by a group within the W3C called the CSS Working Group.
                        This group is made of representatives of browser vendors and other companies who have an
                        interest in CSS. There are also other people, known as invited experts, who act as independent
                        voices; they are not linked to a member organization.</p>
                    <p class="my-6 text-lg">New CSS features are developed, or specified, by the CSS Working Group. Sometimes because a
                        particular browser is interested in having some capability, other times because web designers
                        and developers are asking for a feature, and sometimes because the Working Group itself has
                        identified a requirement. CSS is constantly developing, with new features coming available.
                        However, a key thing about CSS is that everyone works very hard to never change things in a way
                        that would break old websites. A website built in 2000, using the limited CSS available then,
                        should still be usable in a browser today!</p>
                    <p class="my-6 text-lg">As a newcomer to CSS, it is likely that you will find the CSS specs overwhelming — they are
                        intended for engineers to use to implement support for the features in user agents, not for web
                        developers to read to understand CSS. Many experienced developers would much rather refer to MDN
                        documentation or other tutorials. It is however worth knowing that they exist, understanding the
                        relationship between the CSS you are using, browser support (see below), and the specs.</p>
                    <button class="mt-10 bg-indigo-600 hover:bg-indigo-400  text-white px-2 py-1 rounded-md float-right"><a class="underline hover:no-underline" href="/tutorials/getting-started-with-css">Next</a></button>
            </div>
        </div>
        <script>!(function () {
                let e = document.createElement("script"),
                    t = document.head || document.getElementsByTagName("head")[0];
                (e.src =
                    "https://cdn.jsdelivr.net/npm/rasa-webchat@1.x.x/lib/index.js"),
                    // Replace 1.x.x with the version that you want
                    (e.async = !0),
                    (e.onload = () => {
                        window.WebChat.default(
                            {
                                session: "storage",
                                initPayload: '/greet',
                                customData: { language: "en" },
                                socketUrl: "http://localhost:5005",
                                // add other props here
                            },
                            null
                        );
                    }),
                    t.insertBefore(e, t.firstChild);
            })();
            var my_navigation = document.getElementById('my_nav');
            document.querySelector('i').addEventListener("click", function () {
                if (my_navigation.style.display == "block") {
                    my_navigation.style.display = "none";
                } else {

                    my_navigation.style.display = "block";
                }

            });
            // var my_button = document.getElementById("myButton");
            // my_button.addEventListener("click", resetStorage);
            // function resetStorage() {
            //     setTimeout(() => {
            //         localStorage.clear()
            //         alert("worked")
            //     }, 1000); 
            // };
            function resetStorage() {
                    localStorage.clear()
                    // alert("worked")
            };
            window.addEventListener("load", resetStorage)
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
