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
                <div class="quiz-container">
                    <div id="quiz"></div>
                </div>
                <button class="bg-blue-500 px-4 py-4 rounded hover:bg-blue-300 mt-4 mx-2" id="previous">Previous Question</button>
                <button class="bg-blue-500 px-4 py-4 rounded hover:bg-blue-300 mt-4 mx-2" id="next">Next Question</button>
                <button class="bg-blue-500 px-4 py-4 rounded hover:bg-blue-300 mt-4 mx-2" id="submit">Submit Quiz</button>
                <div id="results" class="text-lg font-sans mx-2"></div>
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

            //    Quiz code



            //    functions for the quiz
            function buildQuiz() {
                //Variable to store the HTML output
                const output = [];

                //    for each question...
                myQuestions.forEach(
                    (currentQuestion, questionNumber) => {
                        // variable to store the list of possible answers
                        const answers = [];

                        //    and for each available answer...
                        for(letter in currentQuestion.answers) {
                            //    ... add an HTML radio button
                            answers.push(
                                `<label class="text-lg inline-block w-full m-2 p-2 bg-gray-200 hover:bg-gray-100">
                                    <input type="radio" name="question${questionNumber}" value="${letter}">
                                        ${letter} :
                                        ${currentQuestion.answers[letter]}
                                 </label><br>
                                `
                            );
                        }

                        //    add this question and its answers to the output
                        output.push(
                            `<div class="slide">
                                <div class="question text-2xl "> ${currentQuestion.question} </div>
                                <div class="answers"> ${answers.join('')} </div>
                             </div>`
                        );

                    }
                );
                //    Combine our output list into one string of HTML and put it on the page
                quizContainer.innerHTML = output.join('');
            }
            function showResults(){

                // gather answer containers from our quiz
                const answerContainers = quizContainer.querySelectorAll('.answers');

                // keep track of user's answers
                let numCorrect = 0;

                // for each question...
                myQuestions.forEach( (currentQuestion, questionNumber) => {

                    // find selected answer
                    const answerContainer = answerContainers[questionNumber];
                    const selector = `input[name=question${questionNumber}]:checked`;
                    const userAnswer = (answerContainer.querySelector(selector) || {}).value;

                    // if answer is correct
                    if(userAnswer === currentQuestion.correctAnswer){
                        // add to the number of correct answers
                        numCorrect++;

                        // color the answers green
                        answerContainers[questionNumber].style.color = '#34D399';
                    }
                    // if answer is wrong or blank
                    else{
                        // color the answers red
                        answerContainers[questionNumber].style.color = 'red';
                    }
                });

                // show number of correct answers out of total
                resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;
            }

            const quizContainer = document.getElementById('quiz');
            const resultsContainer = document.getElementById('results');
            const submitButton = document.getElementById('submit');
            const myQuestions = [
                {
                    question: "What does CSS stand for??",
                    answers: {
                        a: "Creative Style Sheets",
                        b: "Cascading Style Sheets",
                        c: "Computer Style Sheets"
                    },
                    correctAnswer: "b"
                },
                {
                    question: "What is the correct HTML for referring to an external style sheet?",
                    answers: {
                        a: "&ltstylesheet>mystyle.css&lt/stylesheet>",
                        b: "&ltstyle src=\"mystyle.css\"",
                        c: "&ltlink rel=\"stylesheet\" type=\"text/css\" href=\"mystyle.css\""
                    },
                    correctAnswer: "c"
                },
                {
                    question: "How do you add shadow to elements in CSS3?",
                    answers: {
                        a: "box-shadow: 10px 10px 5px grey;",
                        b: "shadow-right: 10px shadow-bottom: 10px;",
                        c: "shadow-color: grey;"
                    },
                    correctAnswer: "a"
                },{
                    question: "How to you modify a border image using CSS3?",
                    answers: {
                        a: "border: url(image.png);",
                        b: "border-variable: image url(image.png);",
                        c: "border-image: url(border.png) 30 30 round;"
                    },
                    correctAnswer: "c"
                },{
                    question: "How to resize a background image using CSS3?",
                    answers: {
                        a: "background-size: 80px 60px;",
                        b: "bg-dimensions: 80px 60px;",
                        c: "background-proportion: 80px 60px;"
                    },
                    correctAnswer: "a"
                },{
                    question: "How to add text shadow using CSS3?",
                    answers: {
                        a: "font: shadowed 5px 5px 5px grey;",
                        b: "font-shadow: 5px 5px 5px grey;",
                        c: "text-shadow: 5px 5px 5px grey;"
                    },
                    correctAnswer: "c"
                },{
                    question: "How to force a word wrap using CSS3?",
                    answers: {
                        a: "word-wrap: break-word;",
                        b: "text-wrap: break-word;",
                        c: "text-wrap: force;"
                    },
                    correctAnswer: "b"
                },{
                    question: "Which of these are valid CSS3 transformation statements.",
                    answers: {
                        a: "matrix()",
                        b: "modify()",
                        c: "skip()"
                    },
                    correctAnswer: "a"
                },{
                    question: "Which HTML tag is used to define an internal style sheet?",
                    answers: {
                        a: "&ltscript>",
                        b: "&ltstyle>",
                        c: "&ltcss>"
                    },
                    correctAnswer: "b"
                },{
                    question: "How to re-size/scale objects using CSS3?",
                    answers: {
                        a: "transform: scale(2,4);",
                        b: "scale-object: 2,4;",
                        c: "scale: (2,4);"
                    },
                    correctAnswer: "c"
                },{
                    question: "How to rotate objects using CSS3?",
                    answers: {
                        a: "object-rotation: 30deg;",
                        b: "transform: rotate(30deg);",
                        c: "rotate-object: 30deg;"
                    },
                    correctAnswer: "c"
                },{
                    question: "How to create transition effects using CSS3?",
                    answers: {
                        a: "transition: width 2s;",
                        b: "transition-duration: 2s; transition-effect: width;",
                        c: "alpha-effect: transition (width,2s);"
                    },
                    correctAnswer: "a"
                },{
                    question: "Which is the correct CSS syntax?",
                    answers: {
                        a: "body {color:black;}",
                        b: "body:color{black};",
                        c: "body:color=black"
                    },
                    correctAnswer: "a"
                },{
                    question: "What does RGBa mean?",
                    answers: {
                        a: "Review Get assistance Back-up your information acquire proof",
                        b: "Red Green Blue alpha",
                        c: "Red Gray Brown alpha"
                    },
                    correctAnswer: "b"
                },{
                    question: "How do you insert a comment in a CSS file?",
                    answers: {
                        a: "/* this is a comment */",
                        b: "// this is a comment //",
                        c: "' this is a comment"
                    },
                    correctAnswer: "a"
                },{
                    question: "Box-Shadow is a property that allows developers to apply a....",
                    answers: {
                        a: "Border",
                        b: "Drop Shadow",
                        c: "Rounded Corner"
                    },
                    correctAnswer: "b"
                },{
                    question: "If you put a value of 0 for a Border-Radius what will happen?.",
                    answers: {
                        a: "The Corner will curve horizontal.",
                        b: "The Corner will be square.",
                        c: "The world will end."
                    },
                    correctAnswer: "b"
                },{
                    question: "Which property is used to change the background color?",
                    answers: {
                        a: "color",
                        b: "background-color",
                        c: "bgcolor"
                    },
                    correctAnswer: "b"
                },{
                    question: "What does the a stand for in RGBa?",
                    answers: {
                        a: "alpha",
                        b: "aqua",
                        c: "Apple"
                    },
                    correctAnswer: "a"
                },{
                    question: "How do you add a background color for all &lth1> elements?",
                    answers: {
                        a: "h1.all{background-color:#fff}",
                        b: "h1{background-color:#fff}",
                        c: "all.hi{background-color:#fff}"
                    },
                    correctAnswer: "b"
                },{
                    question: "What are the first three values of text-shadow in order?",
                    answers: {
                        a: "vertical, blur, horizontal",
                        b: "blur, vertical, horizontal",
                        c: "horizontal, vertical, blur"
                    },
                    correctAnswer: "c"
                },{
                    question: "How do four values work on border-radius",
                    answers: {
                        a: "top, bottom, left, right",
                        b: "top-left, top-right, bottom-right, bottom-left",
                        c: "bottom-left, bottom-right, top-right, top-left"
                    },
                    correctAnswer: "b"
                },{
                    question: "How can you created rounded corners using CSS3?",
                    answers: {
                        a: "border[round]: 30px;",
                        b: "border-radius: 30px;",
                        c: "corner-effect: round;"
                    },
                    correctAnswer: "b"
                },{
                    question: "Which HTML attribute is used to define inline styles?",
                    answers: {
                        a: "font",
                        b: "style",
                        c: "class"
                    },
                    correctAnswer: "b"
                },{
                    question: "Which CSS property is used to change the text color of an element?",
                    answers: {
                        a: "fgcolor",
                        b: "color",
                        c: "text-color"
                    },
                    correctAnswer: "b"
                },
            ];
            buildQuiz();



            // Pagination
            const previousButton = document.getElementById("previous");
            const nextButton = document.getElementById("next");
            const slides = document.querySelectorAll(".slide");
            let currentSlide = 0;
            showSlide(currentSlide);
            //Show the first slide
            function showSlide(n) {
                slides[currentSlide].classList.remove('active-slide');
                slides[n].classList.add('active-slide');
                currentSlide = n;

                if(currentSlide === 0) {
                    previousButton.style.display = "none";
                }
                else {
                    previousButton.style.display = 'inline-block';
                }

                if(currentSlide === slides.length-1) {
                    nextButton.style.display = 'none';
                    submitButton.style.display = 'inline-block';
                }
                else {
                    nextButton.style.display = 'inline-block';
                    submitButton.style.display = 'none';
                }
            }
            function showNextSlide() {
                showSlide(currentSlide + 1);
            }
            function showPreviousSlide() {
                showSlide(currentSlide - 1);
            }
            submitButton.addEventListener('click', showResults);

            //    Quiz questions and answers
            previousButton.addEventListener('click', showPreviousSlide);
            nextButton.addEventListener('click', showNextSlide);


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

            .slide {
                position:absolute;
                left: 0px;
                top: 0px;
                width: 100%;
                z-index: 1;
                opacity: 0;
                transition: opacity 0.5s;
            }

            .active-slide {
                opacity: 1;
                z-index: 2;
            }
            .quiz-container {
                position: relative;
                height: 200px;
                margin-top: 40px;
            }
        </style>
    </x-slot>

</x-app-layout>
