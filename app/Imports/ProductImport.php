<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name'     => $row[0],
            'code'    => $row[1],
            'price' => $row[3],
            'category_id' => 1,
            'unit_id' => 1,
            'qty' => 1,
        ]);
    }
}
