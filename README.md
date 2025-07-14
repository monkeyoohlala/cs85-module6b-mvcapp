Harold Hong
https://github.com/monkeyoohlala/cs85-module6b-mvcapp



Hi, this is my reflection part of the assignment. I chose to do a journal project because my old social worker told me to write in a journal everyday. I want to make a php project where I can automate the template and make it easy to record my life onto the digital canvas.

My app is basically an online journal keeper. It acceps journal entries and displays the entries back into the web browser.

The hardest part of this assignment was figuring out how to start the project. I was confused where to load the project and how to send data from one part of the MVC to the other. This part was hard for me because the book did not give much details on communicating between the MVC.

What I have learnded about MVC.
I learned that professional web developers use MVC to create and organize code for the present and the future development of their projects. The M stands for model and takes care of the logic and data portion of the project. The V stands for view which is for the visual aspect of the project. And C stands for controller serves as the intermediary between the Models and Views.





AI and Critique:
I asked copilot to do this "Im making a journal app using php and mvc, can you create me a method that creates a word counter for the journal entry?"

The AI showed this method:

public function countWords($entry)
{
    // Trim whitespace and remove any HTML tags
    $cleanText = strip_tags(trim($entry));

    // Use str_word_count to get the total word count
    $wordCount = str_word_count($cleanText);

    return $wordCount;
}


I added this to the Journals.php file in the Models folder. I had to add the return $wordCount myself. I added one line to the views.php file and it was quite easy to integrate this function.