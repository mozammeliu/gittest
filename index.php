<?php

echo "Hello Git World";
echo "<br/><br/>";
echo "Welcome to Git";
echo "<br/>How are you?";






?>
<h1>Hi Mozammel</h1>
<p></p>
<br/><br/>
<?php

class Readability
{
    function ease_score($writing_sample)
    {
        # Calculate score
        $words= str_word_count($writing_sample);
        $sentence= preg_match_all('([^\.\!\?]+[\.\?\!]*)',$writing_sample,$match);
        $ASL= $words/$sentence;


        $vowel_a= substr_count($writing_sample,"a")+substr_count($writing_sample,"A");
        $vowel_e= substr_count($writing_sample,"e")+substr_count($writing_sample,"E");
        $vowel_i= substr_count($writing_sample,"i")+substr_count($writing_sample,"I");
        $vowel_o= substr_count($writing_sample,"o")+substr_count($writing_sample,"O");
        $vowel_u= substr_count($writing_sample,"u")+substr_count($writing_sample,"U");
        $total_vowel=$vowel_a+$vowel_e+$vowel_i+$vowel_o+$vowel_u;
        $ASW=$total_vowel/$words;

        $score=(206.835-(1.015 * $ASL)-(84.6 * $ASW));

        # Return of 0.0 to 100.0
        //return 9999;
        return $score;
    }
}

$readability = new Readability();

//echo $readability->ease_score("Hello world");
$string="Heavy metals are generally defined as metals with relatively high densities, atomic weights, or atomic numbers. The criteria used, and whether metalloids are included, vary depending on the author and context. In metallurgy, for example, a heavy metal may be defined on the basis of density, whereas in physics the distinguishing criterion might be atomic number, while a chemist would likely be more concerned with chemical behavior. More specific definitions have been published, but none of these have been widely accepted. The definitions surveyed in this article encompass up to 96 out of the 118 chemical elements; only mercury, lead and bismuth meet all of them.";
echo $readability->ease_score($string);


$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str))
?>

<h1>Secondary</h1>





