<?php

namespace Semenov;

use core\EquationInterface;


Class SolutionQuatro extends SolutionLine implements EquationInterface
{
    protected function discrim($q, $w, $e)
    {

        $DIS = $w ** 2 - 4 * $q * $e;
        return $DIS;
    }

    public function solve(float $a, float $b, float $c): array
    {

        $disc = $this->discrim($a, $b, $c);

        if (0 == $a) {
            return [$this->line($b, $c)];
        }
        \Semenov\MyLog::log("Это квадратное уравнение");
        if ($disc > 0) {
            return $this->x = array(
                ((-$b) + $disc) / 2 * $a,
                ((-$b) - $disc) / 2 * $a
            );
        }

        if ($disc === 0) {
            return [$this->x =(-$b) / 2 * $a];
        }

        throw new SemenovException("Нет корней");
    }

}

?>
