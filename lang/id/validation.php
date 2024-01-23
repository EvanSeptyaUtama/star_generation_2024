<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Datas :attribute harus benar.',
    'accepted_if' => 'Data :attribute harus diteria ketika :other adalah :value.',
    'active_url' => 'Data :attribute tidak benar.',
    'after' => 'Data :attribute harus ada tanggal setelah :date.',
    'after_or_equal' => 'Data :attribute harus ada tanggal seterlah atau sama untuk :date.',
    'alpha' => 'Data :attribute harus berisi huruf.',
    'alpha_dash' => 'Data :attribute harus berisi huruf, nomor, tanda hubung dan garis bawah.',
    'alpha_num' => 'Data :attribute harus berupa huruf dan nomor.',
    'array' => 'Data :attribute harus berupa array.',
    'before' => 'Data :attribute harus tanggal sebelum :date.',
    'before_or_equal' => 'Data :attribute harus berupa tanggal sebelum atau sama untuk :date.',
    'between' => [
        'numeric' => 'Data :attribute harus diantara :min dan :max.',
        'file' => 'Data :attribute harus diantara :min dan :max kilobytes.',
        'string' => 'Data :attribute harus diantara :min dan :max karakter.',
        'array' => 'Data :attribute harus diantara :min dan :max item.',
    ],
    'boolean' => 'Data :attribute harus benar atau salah.',
    'confirmed' => 'Data :attribute tidak dapat dikonfirmasi.',
    'current_password' => 'Data kata sandi salah.',
    'date' => 'Data :attribute tidak sesuai tanggal.',
    'date_equals' => 'Data :attribute berupa tanggal yang sama dengan :date.',
    'date_format' => 'Data :attribute tidak sesuai format :format.',
    'declined' => 'Data :attribute ditolak.',
    'declined_if' => 'Data :attribute ditolak ketika :other adalah :value.',
    'different' => 'Data :attribute dan :other harus berbeda.',
    'digits' => 'Data :attribute harus sesuai :digits digit.',
    'digits_between' => 'Data :attribute harus sesuai antara :min dan :max digit.',
    'dimensions' => 'Data :attribute memiliki dimensi gambar yang tidak sesuai.',
    'distinct' => 'Data :attribute memiliki data yang duplicate.',
    'email' => 'Data :attribute harus berupa email yang sesuai.',
    'ends_with' => 'Data :attribute must end with one of the following: :values.',
    'enum' => 'Data selected :attribute adalah tidak sesuai.',
    'exists' => 'Data selected :attribute adalah tidak sesuai.',
    'file' => 'Data :attribute harus berupa file.',
    'filled' => 'The :attribute memiliki sebuah nilai.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max' => [
        'numeric' => 'Data :attribute tidak boleh lebih dari :max.',
        'file' => 'Data :attribute tidak boleh lebih dari :max kilobytes.',
        'string' => 'Data :attribute tidak boleh lebih dari :max karakter.',
        'array' => 'Data :attribute tidak boleh lebih dari :max item.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'Data :attribute harus minimal :min.',
        'file' => 'Data :attribute harus minimal :min kilobytes.',
        'string' => 'Data :attribute harus minimal :min karakter.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'Data :attribute harus berupa angka.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'Data :attribute tidak boleh kosong .',
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'Data :attribute minimal :size karakter.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute must be a valid URL.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
