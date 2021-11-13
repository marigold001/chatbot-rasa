# chatbot_project

## Introduction
This project is coded using Laravel 8 and Rasa NLU. The website is a CSS style sheets language learning website with an integrated chatbot called Nina Q&A that gives an introduction to each section of the website when asked to. Just try asking a question  about a section of the website for example try asking "What can we find on the what is CSS page?" and you will get a short overview of that webpage.

## Requirements
For this project you need to have Composer, Laragon, Node.js, and Python installed.

## Instructions
To use this project clone the repository in the root directory of your Laragon it is usually the www folder. Restart the Laragon service and load it in the browser. Inside the terminal navigate to the css-tutor folder and run "composer install" and "npm install" commands. Once that has installed open Anaconda prompt and navigate into Rasa - Nina Q&A folder and run "rasa run -m models --enable-api --cors "*" ". That will enable the chatbot to be hosted on the website so you can talk to it. Don't forget to copy the .envexample and create a .env file paste the information and generate a key and you should be set. Good luck and have fun!
