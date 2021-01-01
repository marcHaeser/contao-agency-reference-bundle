<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace CASC8\ContaoAgencyReferenceBundle\Tests;

use CASC8\ContaoAgencyReferenceBundle\ContaoAgencyReferenceBundle;
use PHPUnit\Framework\TestCase;

class ContaoAgencyReferenceBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoAgencyReferenceBundle();

        $this->assertInstanceOf('CASC8\ContaoAgencyReferenceBundle\ContaoAgencyReferenceBundle', $bundle);
    }
}
