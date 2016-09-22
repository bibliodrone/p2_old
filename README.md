# p2
# CSci E15, Fall 2016

    Shakespeare's Password Generator
    http://p2.geewalden.me
    Demo: http://screencast.com/t/zNq9lC6wT
    
    This generator uses a text-file of words first attributed to William Shakespeare in the O.E.D.
    It provides a good list of interesting words from which to randomly choose. The user may choose 1-9 words for their
    password. Additionally, there are checkboxes which allow for the inclusion of a random digit and symbol, if checked.
    
    I made use of data from "http://shakespeare-w.com/english/shakespeare/words.html", which I imported in its raw form to a Google Sheet, wherein I cleaned up the word-list so that it could better function as a set of discrete words for this project. The word list is loaded into memory as an array, from a text file.
    
    I forgot to show the error messages which appears if the user should hit 'Submit' without entering anything in the box, or if they enter a letter. They appear in yellow when appropriate.
    
    Also, I noticed that the fonts appeared smaller in Firefox than they did in Chrome, perhaps due to different settings, or maybe differences between the browsers themselves.
    
    
