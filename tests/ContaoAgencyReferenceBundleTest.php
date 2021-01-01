<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace marchaeser\ContaoAgencyReferenceBundle\Tests;

use marchaeser\ContaoAgencyReferenceBundle\ContaoAgencyReferenceBundle;
use PHPUnit\Framework\TestCase;

class ContaoAgencyReferenceBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoAgencyReferenceBundle();

        $this->assertInstanceOf('marchaeser\ContaoAgencyReferenceBundle\ContaoAgencyReferenceBundle', $bundle);
    }
}
