<?php
class testRuleNotAppliesToSingleTernary_class
{
    public function testRuleNotAppliesToSingleTernary($x)
    {
        return $x ? 1 : 2;
    }
}
