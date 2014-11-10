<?php
class testRuleAppliesToTwoLevelNestedTernary_class
{
    public function testRuleAppliesToTwoLevelNestedTernary($x, $y)
    {
        return ($x ? ($y ? 1 : 2) : ($x > 23 ? 42 : 17));
    }
}
