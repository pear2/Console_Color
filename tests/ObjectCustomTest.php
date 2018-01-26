<?php

namespace PEAR2\Console\Color\Test;

use Exception;
use PEAR2\Console\Color\DomainException;
use PHPUnit\Framework\TestCase;

class ObjectCustomTest extends TestCase
{
    public function testSetFlagsResolverInvalid()
    {
        try {
            new Derivatives\InvalidFlags();
            $this->fail('Setting an arbitrary class should fail.');
        } catch (DomainException $e) {
            $this->assertSame(DomainException::CODE_FLAGS, $e->getCode());
        } catch (Exception $e) {
            $this->fail('Wrong exception type thrown.');
        }
    }

    public function testSetStylesResolverInvalid()
    {
        try {
            new Derivatives\InvalidStyles();
            $this->fail('Setting an arbitrary class should fail.');
        } catch (DomainException $e) {
            $this->assertSame(DomainException::CODE_STYLES, $e->getCode());
        } catch (Exception $e) {
            $this->fail('Wrong exception type thrown.');
        }
    }
    
    public function testSetFlagsResolverValid()
    {
        $custom = new Derivatives\CustomFlags();
        $custom->setFlags(Derivatives\CustomFlagsResolver::HACK);
        $this->assertSame("\033[99m", (string)$custom);
    }
    public function testSetStyleResolverValid()
    {
        $custom = new Derivatives\CustomStyles();
        $custom->setStyles(Derivatives\CustomStylesResolver::HACK, false);
        $this->assertSame("\033[77m", (string)$custom);
        $custom->setStyles(Derivatives\CustomStylesResolver::HACK, true);
        $this->assertSame("\033[88m", (string)$custom);
        $custom->setStyles(Derivatives\CustomStylesResolver::HACK, null);
        $this->assertSame("\033[m", (string)$custom);
    }
}
