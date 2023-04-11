<?php
/*
A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.

A regular expression can be a single character, or a more complicated pattern.

Regular expressions can be used to perform all types of text search and text replace operations.

Function			Description
preg_match()		Returns 1 if the pattern was found in the string and 0 if not
preg_match_all()	Returns the number of times the pattern was found in the string, which may also be 0
preg_replace()		Returns a new string where matched patterns have been replaced with another string

 */

//preg_match() tell you whether a string contains matches of a pattern.

$str     = "Hello Word";
$pattern = "/Word/i";
echo preg_match($pattern, $str)."\n";

//preg_match_all() tell you how many matches were found for a pattern in a string.

$str     = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str)."\n";

//preg_replace()
$str     = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "Texas", $str)."\n";

//Regular Expression Modifiers

/**
 *Modifier	Description
 *i			Performs a case-insensitive search
 *m			Performs a multiline search (patterns that search for the beginning or end of a string will 			   match the beginning or end of each line)
 *u			Enables correct matching of UTF-8 encoded patterns
 */

//Regular Expression Patterns

/**
 *Expression	Description
 *[abc]			Find one character from the options between the brackets
 *[^abc]		Find any character NOT between the brackets
 *[0-9]			Find one character from the range 0 to 9
 * */

//Metacharacters

/*
Metacharacter	Description
|				Find a match for any one of the patterns separated by | as in: cat|dog|fish
.				Find just one instance of any character
^				Finds a match as the beginning of a string as in: ^Hello
$				Finds a match at the end of the string as in: World$
\d				Find a digit
\s				Find a whitespace character
\b				Find a match at the beginning of a word like this: \bWORD, or at the end of a word like 					this: WORD\b
\uxxxx			Find the Unicode character specified by the hexadecimal number xxxx
 */

//Quantifiers

/*
Quantifier	Description
n+			Matches any string that contains at least one n
n*			Matches any string that contains zero or more occurrences of n
n?			Matches any string that contains zero or one occurrences of n
n{x}		Matches any string that contains a sequence of X n's
n{x,y}		Matches any string that contains a sequence of X to Y n's
n{x,}		Matches any string that contains a sequence of at least X n's
 */

?>