<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'task' => 'required|string|unique:tasks|min:10|max:200',
            'begindate' => 'required|date',
            'enddate' => 'date',
            'user_id' => 'integer',
            'project_id' => 'required|integer',
            'activity_id' => 'required|integer'
        ];
    }
}
