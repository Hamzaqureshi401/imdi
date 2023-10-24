<?php

// app/Imports/ProductImport.php

namespace App\Imports;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ProductImport implements ToModel, WithHeadingRow, WithValidation
{
    public function model(array $row)
    {
        return new Product([
            'name' => $row['name'],
            'upc' => $row['upc'],
            'description' => $row['description'],
            'keywords' => $row['keywords'],
            'start_date' => $row['start_date'],
            'end_date' => $row['end_date'],
            'user'=>Auth::user()->id,
        ]);
    }

    public function rules(): array
    {
        return [
            'name'=>'required',
            'upc' => 'required|digits:12|unique:products', // Validate UPC
            'start_date' => 'date_format:Y-m', // Validate start_date
            'end_date' => 'date_format:Y-m', // Validate end_date
        ];
    }

    public function customValidationMessages()
    {
        return [
            'name.required' => 'name field is required.',
            'upc.required' => 'upc field is required.',
            'upc.digits' => 'UPC must be 12 digits.',
            'start_date.date_format' => 'Invalid start date format.',
            'end_date.date_format' => 'Invalid end date format.',
        ];
    }
}



