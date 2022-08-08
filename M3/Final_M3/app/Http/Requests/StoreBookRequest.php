<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            'name' => 'required|',
            'isbn' => 'required|',
            'number_of_pages' => 'required|numeric',
            'publishing_year' => 'required|numeric',
        ];
    }
    function attributes() {
        return [
            'name' => 'Book Name',
            'isbn' => 'ISBN',
            'number_of_pages' => 'number_of_pages',
            'publishing_year' => 'publishing_year',
        ];
    }

    function messages() {
        return [
            'name.required' => ':attribute required',
            'isbn.required' => ':attribute required',
            'number_of_pages.required' => ':attribute required',
            'number_of_pages.numeric' => ':attribute only numeric',
            'publishing_year.required' => ':attribute required',
            'publishing_year.required' => ':attribute only numeric',
        ];
    }
}
