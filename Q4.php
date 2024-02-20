4.grading system
<?php
function determinegrade($score)
{
    if ($score<69)
    {
        return 'F';
    }
    elseif($score>=60 && $score<=70)
    {
        return 'D';
    }
    elseif($score>70 && $score<=80)
    {
        return 'C';
    }
    elseif($score>80 && $score<=90)
    {
        return 'B';
    }
    else
    {
        return 'A';
    }
}
//EX=

$score=85;
$grade=deteminegrade($score);
echo "grade is ".$grade;
?>