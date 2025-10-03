# Portuguese → Invented Language Translator (2013)

![PHP](https://img.shields.io/badge/PHP-5.3%2F5.4-blue?logo=php&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-ES5-yellow?logo=javascript&logoColor=black)
![jQuery](https://img.shields.io/badge/jQuery-1.4.2-0769ad?logo=jquery&logoColor=white)
![HTML](https://img.shields.io/badge/HTML-4.01%2FXHTML-orange?logo=html&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-2.1-blue?logo=css3&logoColor=white)
> ⚠️ Note: GitHub lists some files as "Hack" — but this is just a misclassification of old PHP code.

> 🗂️ **Archival project from 2013, when I was 15 years old**  
> One of my earliest experiments with PHP, JavaScript, and databases.  
> A playful translator that converts Portuguese into a constructed language I invented.

---

## 📖 Story

Back in 2013, when I was 15, I decided to create a "translator" that would convert Portuguese (my mother language) into a constructed language I invented.  

At the time, I was just starting to explore programming, and I wanted to see if I could turn an idea into something interactive. This project became one of my first *full* PHP application: a simple tool that took user input, swapped words for their equivalents in my constructed language, and displayed the result in the browser. The system also has a very simple admin dashboard which allowed me to add vocabulary to the database (Portuguese and "Camks" words — the name of my constructed language).

Even though it’s technically very simple, it represents an important milestone in my coding journey — the point where I realised programming could bring imagination to life.

---

## ⚙️ How it works

1. **Database of words**  
A small database mapped Portuguese words to equivalents in my invented language.
Example:  

* casa (house) → casona
* água (water) → vótér
* comer (eat) → manjar
* Eu me chamo... (I'm called...) → jim mi j'appeleave...

2. **PHP word replacement**  
- A PHP script scanned user-submitted text.  
- Using 'str_replace', it swapps each Portuguese word with its "translation".

3. **jQuery interactivity**  
- A simple jQuery interface allowed input and displayed the result without reloading the page.  

---

## 🖥️ Tech used

GitHub detected the following language breakdown for this project:

- JavaScript — 45.3%  
- HTML — 19.0%  
- CSS — 12.5%  
- PHP — 23.2%  

---

## 💡 Why I keep it here

This project is not meant to showcase professional-level skills — it’s an **archive piece**.  

I include it here because it:
- The early stages of my programming journey;  
- Demonstrates curiosity, creativity, and experimentation at an early stage;  
- Reminds me how far I’ve come in terms of coding practices and knowledge.

If you’re browsing my GitHub, check out my more recent projects for examples of my current skills.  
This one is just a nostalgic stop along the way 🚀

---

## 🕹️ Running it (for fun)

Since this was built in 2013, I had to update some aspects of the code in order for it to run with modern PHP versions (as the one ran by my localhost and my server). Setup is very simple:

1. Install PHP (any version that supports mysqli).  
2. Create a MySQL/MariaDB database with word mappings (sql file is included to be imported).  
3. Run the project locally and input some Portuguese text.  
4. Watch it get transformed into my invented language.  

---

✍️ *Project by me at age 15 (August 2013). Preserved here as part of my coding journey.*
