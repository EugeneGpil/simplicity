<?php

declare(strict_types=1);

return [
    'accepted'               => ':Attribute ni qabul qilishingiz kerak.',
    'accepted_if'            => 'The :attribute must be accepted when :other is :value.',
    'active_url'             => ':Attribute ga noto‘g‘ri URL kiritildi.',
    'after'                  => ':Attribute da sana :date dan keyin bo‘lishi kerak.',
    'after_or_equal'         => ':Attribute da sana :date ga teng yoki undan keyin bo‘lishi kerak.',
    'alpha'                  => ':Attribute faqat harflarni qabul qilishi mumkin.',
    'alpha_dash'             => ':Attribute faqat harflar, sonlar va chiziqchalarni qabul qilishi mumkin.',
    'alpha_num'              => ':Attribute faqat harflar va sonlarni qabul qilishi mumkin.',
    'any_of'                 => 'The :attribute field is invalid.',
    'array'                  => ':Attribute qatordan iborat bo‘lishi kerak.',
    'ascii'                  => 'The :attribute must only contain single-byte alphanumeric characters and symbols.',
    'before'                 => ':Attribute da sana :date gacha bo‘lishi kerak.',
    'before_or_equal'        => ':Attribute da sana :date ga teng yoki undan oldin bo‘lishi kerak.',
    'between'                => [
        'array'   => ':Attribute dagi elementlar soni :min va :max orasida bo‘lishi kerak.',
        'file'    => ':Attribute dagi faylning hajmi :min va :max kilobayt orasida bo‘lishi kerak.',
        'numeric' => ':Attribute ning qiymati :min va :max orasida bo‘lishi kerak.',
        'string'  => ':Attribute dagi belgilar soni :min va :max orasida bo‘lishi kerak.',
    ],
    'boolean'                => ':Attribute maydoni faqat mantiqiy qiymatni qabul qiladi.',
    'can'                    => 'The :attribute field contains an unauthorized value.',
    'confirmed'              => ':Attribute tasdiqlangani bilan mos kelmadi.',
    'contains'               => 'The :attribute field is missing a required value.',
    'current_password'       => 'The password is incorrect.',
    'date'                   => ':Attribute sana emas.',
    'date_equals'            => ':Attribute sana :date ga teng bo‘lishi kerak.',
    'date_format'            => ':Attribute maydoni :format formatga mos kelmadi.',
    'decimal'                => 'The :attribute must have :decimal decimal places.',
    'declined'               => 'The :attribute must be declined.',
    'declined_if'            => 'The :attribute must be declined when :other is :value.',
    'different'              => ':Attribute va :other maydonlari farqli bo‘lishi kerak.',
    'digits'                 => ':Attribute :digits raqamdan iborat bo‘lishi kerak.',
    'digits_between'         => ':Attribute uzunligi :min va :max orasida bo‘lishi kerak.',
    'dimensions'             => ':Attribute noto‘g‘ri tasvir o‘lchamlarga ega.',
    'distinct'               => ':Attribute maydoni takrorlanuvchi qiymatlardan iborat.',
    'doesnt_end_with'        => 'The :attribute may not end with one of the following: :values.',
    'doesnt_start_with'      => 'The :attribute may not start with one of the following: :values.',
    'email'                  => ':Attribute haqiqiy elektron pochta manzili bo‘lishi kerak.',
    'ends_with'              => ':Attribute quyidagi qiymatlarning biri bilan tugashi kerak: :values.',
    'enum'                   => 'The :attribute field value is not in the list of allowed values.',
    'exists'                 => ':Attribute uchun tanlangan qiymat noto‘g‘ri.',
    'extensions'             => 'The :attribute field must have one of the following extensions: :values.',
    'file'                   => ':Attribute fayl bo‘lishi kerak.',
    'filled'                 => ':Attribute maydoni to‘ldirilishi shart.',
    'gt'                     => [
        'array'   => ':Attribute dagi elementlar soni :value dan katta bo‘lishi kerak.',
        'file'    => ':Attribute fayl hajmi :value kilobaytdan katta bo‘lishi kerak.',
        'numeric' => ':Attribute maydoni :value dan katta bo‘lishi kerak.',
        'string'  => ':Attribute dagi belgilar soni :value dan katta bo‘lishi kerak.',
    ],
    'gte'                    => [
        'array'   => ':Attribute dagi elementlar soni :value dan katta yoki teng bo‘lishi kerak.',
        'file'    => ':Attribute fayl hajmi :value kilobaytdan katta yoki teng bo‘lishi kerak.',
        'numeric' => ':Attribute maydoni :value dan katta yoki teng bo‘lishi kerak.',
        'string'  => ':Attribute dagi belgilar soni :value dan katta yoki teng bo‘lishi kerak.',
    ],
    'hex_color'              => 'The :attribute field must be a valid hexadecimal color.',
    'image'                  => ':Attribute tasvir (rasm) bo‘lishi kerak.',
    'in'                     => ':Attribute uchun tanlangan qiymat xato.',
    'in_array'               => ':Attribute maydonining qiymati :other da mavjud emas.',
    'in_array_keys'          => 'The :attribute field must contain at least one of the following keys: :values.',
    'integer'                => ':Attribute butun son bo‘lishi kerak.',
    'ip'                     => ':Attribute haqiqiy IP manzil bo‘lishi kerak.',
    'ipv4'                   => ':Attribute haqiqiy IPv4 manzil bo‘lishi kerak.',
    'ipv6'                   => ':Attribute haqiqiy IPv6 manzil bo‘lishi kerak.',
    'json'                   => ':Attribute JSON qatori bo‘lishi kerak.',
    'list'                   => 'The :attribute field must be a list.',
    'lowercase'              => 'The :attribute must be lowercase.',
    'lt'                     => [
        'array'   => ':Attribute dagi elementlar soni :value dan kichik bo‘lishi kerak.',
        'file'    => ':Attribute dagi fayl hajmi :value kilobaytdan kichik bo‘lishi kerak.',
        'numeric' => ':Attribute maydoni :value dan kichik bo‘lishi kerak.',
        'string'  => ':Attribute dagi belgilar soni :value dan kichik bo‘lishi kerak.',
    ],
    'lte'                    => [
        'array'   => ':Attribute dagi elementlar soni :value dan kichik yoki teng bo‘lishi kerak.',
        'file'    => ':Attribute fayl hajmi :value kilobaytdan kichik yoki teng bo‘lishi kerak.',
        'numeric' => ':Attribute maydoni :value dan kichik yoki teng bo‘lishi kerak.',
        'string'  => ':Attribute dagi belgilar soni :value dan kichik yoki teng bo‘lishi kerak.',
    ],
    'mac_address'            => 'The :attribute must be a valid MAC address.',
    'max'                    => [
        'array'   => ':Attribute ning elementlar soni :max tadan oshmasligi kerak.',
        'file'    => ':Attribute dagi faylning hajmi :max kilobaytdan oshmasligi kerak.',
        'numeric' => ':Attribute ning qiymati :max dan oshmasligi kerak.',
        'string'  => ':Attribute ning belgilar soni :max tadan oshmasligi kerak.',
    ],
    'max_digits'             => 'The :attribute must not have more than :max digits.',
    'mimes'                  => ':Attribute dagi fayl quyidagi turlardan biri bo‘lishi kerak: :values.',
    'mimetypes'              => ':Attribute dagi fayl quyidagi turlardan biri bo‘lishi kerak: :values.',
    'min'                    => [
        'array'   => ':Attribute dagi elementlar soni :min tadan kam bo‘lmasligi kerak.',
        'file'    => ':Attribute dagi faylning hajmi :min kilobaytdan kam bo‘lmasligi kerak.',
        'numeric' => ':Attribute ning qiymati :min dan kam bo‘lmasligi kerak.',
        'string'  => ':Attribute dagi belgilar soni :min tadan kam bo‘lmasligi kerak.',
    ],
    'min_digits'             => 'The :attribute must have at least :min digits.',
    'missing'                => 'The :attribute field must be missing.',
    'missing_if'             => 'The :attribute field must be missing when :other is :value.',
    'missing_unless'         => 'The :attribute field must be missing unless :other is :value.',
    'missing_with'           => 'The :attribute field must be missing when :values is present.',
    'missing_with_all'       => 'The :attribute field must be missing when :values are present.',
    'multiple_of'            => ':Attribute bir nechta :value bo\'lishi kerak',
    'not_in'                 => ':Attribute uchun tanlangan qiymat xato.',
    'not_regex'              => ':Attribute uchun tanlangan format xato.',
    'numeric'                => ':Attribute son bo‘lishi kerak.',
    'password'               => [
        'letters'       => 'The :attribute must contain at least one letter.',
        'mixed'         => 'The :attribute must contain at least one uppercase and one lowercase letter.',
        'numbers'       => 'The :attribute must contain at least one number.',
        'symbols'       => 'The :attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present'                => ':Attribute maydoni ko‘rsatilishi kerak.',
    'present_if'             => 'The :attribute field must be present when :other is :value.',
    'present_unless'         => 'The :attribute field must be present unless :other is :value.',
    'present_with'           => 'The :attribute field must be present when :values is present.',
    'present_with_all'       => 'The :attribute field must be present when :values are present.',
    'prohibited'             => ':Attribute maydon taqiqlanadi.',
    'prohibited_if'          => ':Attribute maydon :other :value bo\'lganda taqiqlanadi.',
    'prohibited_if_accepted' => 'The :attribute field is prohibited when :other is accepted.',
    'prohibited_if_declined' => 'The :attribute field is prohibited when :other is declined.',
    'prohibited_unless'      => ':Attribute sohasida ekan taqiqlanadi :other yilda :values.',
    'prohibits'              => 'The :attribute field prohibits :other from being present.',
    'regex'                  => ':Attribute maydoni xato formatda.',
    'required'               => ':Attribute maydoni to‘ldirilishi shart.',
    'required_array_keys'    => 'The :attribute field must contain entries for: :values.',
    'required_if'            => ':Other maydoni :value ga teng bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_if_accepted'   => 'The :attribute field is required when :other is accepted.',
    'required_if_declined'   => 'The :attribute field is required when :other is declined.',
    'required_unless'        => ':Other maydoni :values ga teng bo‘lmasa, :attribute maydoni to‘ldirilishi shart.',
    'required_with'          => ':Values ko‘rsatilgan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_with_all'      => ':Values ko‘rsatilgan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_without'       => ':Values ko‘rsatilmagan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'required_without_all'   => ':Values lardan hech biri ko‘rsatilmagan bo‘lsa, :attribute maydoni to‘ldirilishi shart.',
    'same'                   => ':Attribute ning qiymati :other bilan bir xil bo‘lishi kerak.',
    'size'                   => [
        'array'   => ':Attribute dagi elementlar soni :size ga teng bo‘lishi kerak.',
        'file'    => ':Attribute dagi faylning hajmi :size kilobaytga teng bo‘lishi kerak.',
        'numeric' => ':Attribute qiymati :size ga teng bo‘lishi kerak.',
        'string'  => ':Attribute dagi belgilar soni :size ga teng bo‘lishi kerak.',
    ],
    'starts_with'            => ':Attribute quyidagi qiymatlardan biri bilan boshlanishi kerak: :values.',
    'string'                 => ':Attribute qator bo‘lishi kerak.',
    'timezone'               => ':Attribute ning qiymati mavjud vaqt mintaqasi bo‘lishi kerak.',
    'ulid'                   => 'The :attribute must be a valid ULID.',
    'unique'                 => ':Attribute maydonining bunday qiymati mavjud. Iltimos boshqa qiymat kiriting.',
    'uploaded'               => ':Attribute ni yuklash muvaffaqiyatli amalga oshmadi.',
    'uppercase'              => 'The :attribute must be uppercase.',
    'url'                    => ':Attribute noto‘g‘ri formatga ega.',
    'uuid'                   => ':Attribute to‘g‘ri UUID qiymatga ega bo‘lishi kerak.',
];
