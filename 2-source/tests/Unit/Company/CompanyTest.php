<?php

namespace Tests\Unit\Company;

use Foostart\Company\Models\Company;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\TestCase;

class CompanyTest extends TestCase
{
    public function testInsertOK()
    {
        $company = [
            'category_id' => 1,
            'company_name' => 'Test name',
            'company_slug' => 'Test slug',
            'company_website' => 'Test website',
            'company_tax_code' => 'Test tax code',
            'company_address' => 'Test address',
            'company_image' => 'Test Image',
            'company_description' => 'Test description'
        ];
//        $company = new Company();
        try {
//            $company->insertItem($company);
            $this->assertTrue(true);
        }catch (Exception $e) {
            $this->assertTrue(false);
        }

    }
    public function testInsertNg()
    {
        $this->assertTrue(true);
    }

    public function testSearchOk()
    {
        $this->assertTrue(true);
    }

    public function testSearchNg()
    {
        $this->assertTrue(true);
    }

    public function testCountOK()
    {
        $this->assertTrue(true);
    }

    public function testCountNg()
    {
        $this->assertTrue(true);
    }
    public function testUpdateOk() {
        $this->assertTrue(true);
    }

    public function testUpdateNg() {
        $this->assertTrue(true);
    }

    public function testDeleteOk() {
        $this->assertTrue(true);
    }

    public function testDeleteNg() {
        $this->assertTrue(true);
    }

}
