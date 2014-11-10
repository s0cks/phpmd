<?php

namespace PHPMD\Rule\CleanCode;

use PHPMD\AbstractTest;

class NestedTernaryTest extends AbstractTest
{
    public function testRuleNotAppliesToSingleTernary()
    {
        $rule = new NestedTernary();
        $rule->setReport($this->getReportMock(0));
        $rule->apply($this->getMethod());
    }

    public function testRuleAppliesToOneLevelNestedTernary()
    {
        $rule = new StaticAccess();
        $rule->setReport($this->getReportMock(1));
        $rule->apply($this->getMethod());
    }

    public function testRuleAppliesToTwoLevelNestedTernary()
    {
        $rule = new StaticAccess();
        $rule->setReport($this->getReportMock(2));
        $rule->apply($this->getMethod());
    }
}
