<?php

namespace Tests\Unit\Services;

use App\Services\GroupByOwnersService;
use PHPUnit\Framework\TestCase;

class GroupByOwnersServiceTest extends TestCase
{
    public function testSortDocs()
    {
        $service = new GroupByOwnersService();

        $files = [
            "insurance.txt" => "Company A",
            "letter.docx" => "Company A",
            "Contract.docx" => "Company B"
        ];

        $expectedResult = [
            "Company A" => ["insurance.txt", "letter.docx"],
            "Company B" => ["Contract.docx"]
        ];

        $result = $service->sortDocs($files);

        $this->assertEquals($expectedResult, $result);
    }
}
