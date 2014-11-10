<?php
class testRuleAppliesToOneLevelNestedTernary_class
{
    public function testRuleAppliesToOneLevelNestedTernary($x, $y)
    {
        return ($x ? ($y ? 1 : 2) : 3);
    }
}
