<?php

namespace App\Sql;

class Where
{

    private array $conditions = [];

    public function show_where(): string
    {
        return ' WHERE ' . $this->get_condition();
    }

    public function or_where(array $condition): void
    {

        $this->conditions[] = ['OR', $condition];

    }

    public function and_where(array $condition): void
    {

        $this->conditions[] = ['AND', $condition];

    }

    private function get_condition(): string
    {
        $result = '';
        if(!empty($this->conditions))
        {
            foreach($this->conditions as $condition)
            {
                if(!empty($result)) {
                    $result .= ' ' . $condition[0] . ' ';
                }
                $result .= '(' . implode(' ', $condition[1]) . ')';
            }

        } else {
            $result = ' TRUE ';
        }
        return $result;
    }

}