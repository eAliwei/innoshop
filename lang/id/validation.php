<?php
/**
 * Copyright (c) Since 2024 InnoShop - All Rights Reserved
 *
 * @link       https://www.innoshop.com
 * @author     InnoShop <team@innoshop.com>
 * @license    https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

return [
    'accepted'        => ':attribute harus diterima.',
    'accepted_if'     => 'The :attribute must be accepted when :other is :value.',
    'active_url'      => ':attribute bukan URL yang valid.',
    'after'           => ':attribute harus tarikh setelah :date.',
    'after_or_equal'  => ':attribute harus tarikh setelah atau sama dengan :date.',
    'alpha'           => ':attribute hanya boleh mengandungi huruf.',
    'alpha_dash'      => ':attribute hanya boleh mengandungi huruf, nombor, dan tanda tolak.',
    'alpha_num'       => ':attribute hanya boleh mengandungi huruf dan nombor.',
    'array'           => ':attribute harus menjadi array.',
    'before'          => ':attribute harus tarikh sebelum :date.',
    'before_or_equal' => ':attribute harus tarikh sebelum atau sama dengan :date.',
    'between'         => [
        'array'   => ':attribute mesti mengandungi antara :min dan :max item.',
        'file'    => ':attribute mesti berada antara :min dan :max KB.',
        'numeric' => ':attribute mesti berada antara :min dan :max.',
        'string'  => ':attribute mesti berada antara :min dan :max karakter.',
    ],
    'boolean'          => ':attribute mesti menjadi boolean.',
    'confirmed'        => ':attribute pengesahan tidak sama.',
    'current_password' => 'Kata sandi salah.',
    'date'             => ':attribute bukan tarikh yang valid.',
    'date_equals'      => ':attribute mesti sama dengan tarikh :date.',
    'date_format'      => ':attribute tidak mengikut format :format.',
    'declined'         => 'The :attribute must be declined.',
    'declined_if'      => 'The :attribute must be declined when :other is :value.',
    'different'        => ':attribute dan :other mesti berlainan.',
    'digits'           => ':attribute mesti :digits digit.',
    'digits_between'   => ':attribute mesti berada antara :min and :max digit.',
    'dimensions'       => ':attribute mempunyai dimensi imej yang tidak sah.',
    'distinct'         => ':attribute mempunyai nilai yang berulang.',
    'email'            => ':attribute mesti alamat emel yang valid.',
    'ends_with'        => 'The :attribute must end with one of the following: :values.',
    'enum'             => 'The selected :attribute is invalid.',
    'exists'           => 'Pilihan :attribute yang dibuat tidak valid.',
    'file'             => ':attribute mesti fail.',
    'filled'           => ':attribute wajib diisi.',
    'gt'               => [
        'array'   => 'The :attribute must have more than :value items.',
        'file'    => 'The :attribute must be greater than :value KB.',
        'numeric' => 'The :attribute must be greater than :value.',
        'string'  => 'The :attribute must be greater than :value characters.',
    ],
    'gte' => [
        'array'   => 'The :attribute must have :value items or more.',
        'file'    => 'The :attribute must be greater than or equal to :value KB.',
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'string'  => 'The :attribute must be greater than or equal to :value characters.',
    ],
    'image'    => ':attribute mesti imej.',
    'in'       => 'Pilihan :attribute tidak valid.',
    'in_array' => ':attribute tidak wujud dalam :other.',
    'integer'  => ':attribute mesti integer.',
    'ip'       => ':attribute mesti alamat IP yang valid.',
    'ipv4'     => ':attribute mesti alamat IPv4 yang valid.',
    'ipv6'     => ':attribute mesti alamat IPv6 yang valid.',
    'json'     => ':attribute mesti format JSON yang valid.',
    'lt'       => [
        'array'   => 'The :attribute must have less than :value items.',
        'file'    => 'The :attribute must be less than :value KB.',
        'numeric' => 'The :attribute must be less than :value.',
        'string'  => 'The :attribute must be less than :value characters.',
    ],
    'lte' => [
        'array'   => 'The :attribute must not have more than :value items.',
        'file'    => 'The :attribute must be less than or equal to :value KB.',
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'string'  => 'The :attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute must be a valid MAC address.',
    'max'         => [
        'array'   => ':attribute mesti tidak melebihi :max item.',
        'file'    => ':attribute mesti tidak melebihi :max KB.',
        'numeric' => ':attribute mesti tidak melebihi :max.',
        'string'  => ':attribute mesti tidak melebihi :max karakter.',
    ],
    'mimes'     => ':attribute mesti fail type: :values.',
    'mimetypes' => ':attribute mesti fail type: :values.',
    'min'       => [
        'array'   => ':attribute mesti sekurang-kurangnya :min item.',
        'file'    => ':attribute mesti sekurang-kurangnya :min KB.',
        'numeric' => ':attribute mesti sekurang-kurangnya :min.',
        'string'  => ':attribute mesti sekurang-kurangnya :min karakter.',
    ],
    'multiple_of'          => 'The :attribute must be a multiple of :value.',
    'not_in'               => 'Pilihan :attribute tidak valid.',
    'not_regex'            => 'The format of :attribute is invalid.',
    'numeric'              => ':attribute mesti nombor.',
    'password'             => 'Kata sandi salah.',
    'present'              => ':attribute mesti wujud.',
    'prohibited'           => 'The :attribute field is prohibited.',
    'prohibited_if'        => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless'    => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => ':attribute format tidak sah.',
    'required'             => ':attribute diperlukan.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => ':attribute diperlukan bila :other adalah :value.',
    'required_unless'      => ':attribute diperlukan jika :other tidak dalam :values.',
    'required_with'        => ':attribute diperlukan bila :values wujud.',
    'required_with_all'    => ':attribute diperlukan bila :values wujud.',
    'required_without'     => ':attribute diperlukan bila :values tidak wujud.',
    'required_without_all' => ':attribute diperlukan bila :values semuanya tidak wujud.',
    'same'                 => ':attribute dan :other mesti sama.',
    'size'                 => [
        'array'   => ':attribute mesti :size item.',
        'file'    => ':attribute mesti :size KB.',
        'numeric' => ':attribute mesti :size.',
        'string'  => ':attribute mesti :size karakter.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string'      => ':attribute mesti string.',
    'timezone'    => ':attribute mesti zon waktu yang sah.',
    'unique'      => ':attribute telah wujud.',
    'uploaded'    => ':attribute gagal diunggah.',
    'url'         => ':attribute format tidak sah.',
    'uuid'        => ':attribute mesti UUID yang sah.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];