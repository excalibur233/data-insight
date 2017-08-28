<?php

namespace App\Http\Requests\Data\Event;

use App\Http\Requests\Request;

class EventRequest extends Request
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
            'event_type_id' => 'required|exists:data_event_types,id',
            'attribute_id' => 'required|exists:data_attributes',
            'start_date' => 'required|date',
            'end_date' => 'required|date'
        ];
    }
}
