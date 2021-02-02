<?php
namespace Semenov;

Class SolutionLine {
    public function lin ($a,$b){

        if($a === 0){
            throw new SemenovException("Уравнение не существует");
        }
        \Semenov\MyLog::log("Решается линейное уравнение");
        return $this->x=-($a/$b);
    }
    protected $x;
}