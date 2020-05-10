<?php

declare(strict_types=1);

/**
 * File: PolishDeclensionTest.php
 *
 * @author Bartosz Kubicki b.w.kubicki@gmail.com>
 * Github: https://github.com/bartoszkubicki
 */

namespace BKubicki\PolishNounNumeralDeclension\Test\Unit;

use PHPUnit\Framework\TestCase;

/**
 * Class DeclensionTest
 * @package BKubicki\PolishNounNumeralDeclension\Unit
 */
class DeclensionTest extends TestCase
{
    /**
     * @return void
     */
    public function testDecleCorrectlyFormatsWordWithNumber(): void
    {
        $this->assertSame('komentarz', decle(1, 'komentarz', 'komenatrze', 'komentarzy'));
        $this->assertSame('komentarze', decle(2, 'komentarz', 'komentarze', 'komentarzy'));
        $this->assertSame('komentarzy', decle(6, 'komentarz', 'komentarze', 'komentarzy'));
        $this->assertSame('komentarzy', decle(-6, 'komentarz', 'komentarze', 'komentarzy'));
        $this->assertSame('komentarze', decle(152, 'komentarz', 'komentarze', 'komentarzy'));
        $this->assertSame('komentarzy', decle(1000, 'komentarz', 'komentarze', 'komentarzy'));
        $this->assertSame('komentarzy', decle(12657, 'komentarz', 'komentarze', 'komentarzy'));
    }
}
