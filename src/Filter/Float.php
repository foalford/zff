<?php

namespace ZFF\Filter;

class Float extends AbstractFilter
{
    /**
     * Defined by Zend\Filter\FilterInterface
     *
     * Returns (float) $value
     *
     * If the value provided is not float, the value will remain unfiltered
     *
     * @param  string $value
     * @return float|mixed
     */
    public function filter($value)
    {
        if (!is_float($value)) {
            return $value;
        }
        $value = (string) $value;

        return (float) $value;
    }
}
