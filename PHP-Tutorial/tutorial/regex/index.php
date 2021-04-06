<html lang="tr">
<head>
    <meta charset="utf-8" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="stil.css">
</head>
<body>

<div class="container">
    <div class="row">

        <div class="col-sm-12 kartım">

            <?php
            define ("BR","<br>",true);
            //preg_match
            //The preg_match() function will tell you whether a string contains matches of a pattern.
            $line = "Hi this is a php tutorial of w3school";
            $pattern = "/this/i";
            $thereis = preg_match($pattern,$line).br;
            if ($thereis == 1){
                echo "There is/are matching pattern(s)".br;
            }
            elseif($thereis == 0){
                echo "There isn't any matching pattern".br;
            }
            else{
                echo "There is an error".br;
            }

            //preg_match_all
            //The preg_match_all() function will tell you how many matches were found for a pattern in a string.
            $line = "hi 2060 ti till I collapse tiring tidy timmy";
            $pattern = "/ti/i";
            echo "There are ".preg_match_all($pattern,$line)." ti".br;

            //preg_replace
            //The preg_replace() function will replace all of the matches of the pattern in a string with another string.
            $line = "My name is Kelly";
            $pattern = "/kelly/i";
            echo preg_replace($pattern,"Marshall",$line).br;

            //regex modifiers
            /*
             * Modifiers can change how a search is performed.
             i 	Performs a case-insensitive search
             m 	Performs a multiline search (patterns that search for the beginning
                or end of a string will match the beginning or end of each line)
             u 	Enables correct matching of UTF-8 encoded patterns

             */

            //regex patterns
            /*
             * Brackets are used to find a range of characters:
               Expression 	Description
             [abc] 	Find one character from the options between the brackets
             [^abc] Find any character NOT between the brackets
             [0-9] 	Find one character from the range 0 to 9
             */

            //metacharacters
            /*
             * Metacharacters are characters with a special meaning:
             | 	Find a match for any one of the patterns separated by | as in: cat|dog|fish
             . 	Find just one instance of any character
             ^ 	Finds a match as the beginning of a string as in: ^Hello
             $ 	Finds a match at the end of the string as in: World$
             \d 	Find a digit
             \s 	Find a whitespace character
             \b 	Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b
             \uxxxx 	Find the Unicode character specified by the hexadecimal number xxxx
             */

            //quantifiers
            /*
             * Quantifiers define quantities:
             n+ 	Matches any string that contains at least one n
             n* 	Matches any string that contains zero or more occurrences of n
             n? 	Matches any string that contains zero or one occurrences of n
             n{x} 	Matches any string that contains a sequence of X n's
             n{x,y} Matches any string that contains a sequence of X to Y n's
             n{x,} 	Matches any string that contains a sequence of at least X n's
             */

            //grouping
            //You can use parentheses ( ) to apply quantifiers to entire patterns.
            // They also can be used to select parts of the pattern to be used as a match.
            $line = "Apples and bananas.";
            $pattern = "/ba(na){2}/i";
            $thereis = preg_match($pattern, $line);
            if ($thereis == 1){
                echo "There is/are banana(s)";
            }
            elseif($thereis == 0){
                echo "There isn't any banana";
            }
            else{
                echo "There is an error";
            }
ı 


            ?>


        </div>

    </div>
</div>

</body>
</html>