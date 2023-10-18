 <?php
 function segundOGrado($a, $b, $c)
    {
        $discriminant = $b * $b - 4 * $a * $c;
        if ($discriminant > 0) {
            $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
            $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
            return [$x1, $x2];
        } elseif ($discriminant == 0) {
            $x = -$b / (2 * $a);
            return [$x];
        } else {

            return false;
        }
    }
    