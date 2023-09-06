<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'schedule.title'=>'required|string|max:500',
            
            'schedule.goal'=>'required|string|max:500',
            
            'schedule.content'=>'required|string|max:1000',
            
            'schedule.person'=>'required|string|max:100',
            
            'schedule.date'=>'required|string|max:100',
        ];
    }
}
