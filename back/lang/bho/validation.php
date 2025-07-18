<?php

declare(strict_types=1);

return [
    'accepted'               => ':attribute के स्वीकार करे के होई।',
    'accepted_if'            => ':attribute के तब स्वीकार करे के पड़ी जब :other :value होखे।',
    'active_url'             => ':attribute कवनो वैध यूआरएल ना ह।',
    'after'                  => ':attribute के तारीख :date के बाद के होखे के चाही।',
    'after_or_equal'         => ':attribute के तारीख :date के बाद के होखे के चाहीं भा ओकरा बराबर होखे के चाहीं.',
    'alpha'                  => ':attribute में खाली अक्षर होखे के चाहीं।',
    'alpha_dash'             => ':attribute में खाली अक्षर, संख्या, डैश आ अंडरस्कोर होखे के चाहीं।',
    'alpha_num'              => ':attribute में खाली अक्षर आ संख्या होखे के चाहीं.',
    'any_of'                 => ':attribute फील्ड अमान्य बा।',
    'array'                  => ':attribute के एगो सरणी होखे के चाहीं।',
    'ascii'                  => ':attribute फील्ड में खाली सिंगल-बाइट अल्फान्यूमेरिक वर्ण आ चिन्ह होखे के चाहीं।',
    'before'                 => ':attribute के तारीख :date से पहिले के होखे के चाही।',
    'before_or_equal'        => ':attribute के तारीख :date से पहिले भा ओकरा बराबर होखे के चाहीं.',
    'between'                => [
        'array'   => ':attribute में :min से :max के बीच आइटम होखे के चाही।',
        'file'    => ':attribute के :min से :max किलोबाइट के बीच होखे के चाही।',
        'numeric' => ':attribute के उमिर :min से :max के बीच होखे के चाहीं.',
        'string'  => ':attribute में :min से :max अक्षर के बीच होखे के चाहीं.',
    ],
    'boolean'                => ':attribute के फील्ड सही होखे के चाहीं भा गलत.',
    'can'                    => ':attribute फील्ड में एगो अनधिकृत मान होला।',
    'confirmed'              => ':attribute के पुष्टि मेल ना खाला।',
    'contains'               => ':attribute फील्ड में एगो जरूरी मान गायब बा।',
    'current_password'       => 'पासवर्ड गलत बा।',
    'date'                   => ':attribute के कवनो वैध तारीख नइखे.',
    'date_equals'            => ':attribute के तारीख :date के बराबर होखे के चाहीं।',
    'date_format'            => ':attribute के फॉर्मेट :format से मेल ना खाला।',
    'decimal'                => ':attribute फील्ड में :decimal दशमलव स्थान होखे के चाहीं।',
    'declined'               => ':attribute के अस्वीकार करे के पड़ी।',
    'declined_if'            => ':attribute के अस्वीकार करे के पड़ी जब :other :value होखे।',
    'different'              => ':attribute आ :other के अलग अलग होखे के चाहीं.',
    'digits'                 => ':attribute के :digits अंक के होखे के चाहीं।',
    'digits_between'         => ':attribute के :min से :max अंक के बीच होखे के चाही।',
    'dimensions'             => ':attribute में अमान्य छवि आयाम बा।',
    'distinct'               => ':attribute फील्ड के डुप्लिकेट मान होला।',
    'doesnt_end_with'        => ':attribute फील्ड के अंत निम्नलिखित में से कवनो एक से ना होखे के चाहीं: :values.',
    'doesnt_start_with'      => ':attribute फील्ड के शुरुआत निम्नलिखित में से कवनो एक से ना होखे के चाहीं: :values.',
    'email'                  => ':attribute गो के वैध ईमेल पता होखे के चाहीं.',
    'ends_with'              => ':attribute के अंत निम्नलिखित में से कवनो एक से होखे के चाहीं: :values.',
    'enum'                   => 'चुनल गइल :attribute गो अमान्य बा.',
    'exists'                 => 'चुनल गइल :attribute गो अमान्य बा.',
    'extensions'             => ':attribute फील्ड में निम्नलिखित में से कवनो एक एक्सटेंशन होखे के चाहीं: :values.',
    'file'                   => ':attribute गो फाइल होखे के चाहीं.',
    'filled'                 => ':attribute फील्ड के एगो मान होखे के चाहीं।',
    'gt'                     => [
        'array'   => ':attribute में :value से जादा आइटम होखे के चाही।',
        'file'    => ':attribute के :value किलोबाइट से अधिका होखे के चाहीं.',
        'numeric' => ':attribute के :value से अधिका होखे के चाहीं.',
        'string'  => ':attribute के :value अक्षर से अधिका होखे के चाहीं.',
    ],
    'gte'                    => [
        'array'   => ':attribute में :value गो आइटम भा ओकरा से अधिका होखे के चाहीं.',
        'file'    => ':attribute के :value किलोबाइट से अधिका भा बराबर होखे के चाहीं.',
        'numeric' => ':attribute के :value से अधिका भा बराबर होखे के चाहीं.',
        'string'  => ':attribute के :value अक्षर से अधिका भा बराबर होखे के चाहीं.',
    ],
    'hex_color'              => ':attribute फील्ड के वैध हेक्साडेसिमल रंग होखे के चाहीं।',
    'image'                  => ':attribute गो के छवि होखे के चाहीं.',
    'in'                     => 'चुनल गइल :attribute गो अमान्य बा.',
    'in_array'               => ':attribute के फील्ड :other में मौजूद नइखे।',
    'in_array_keys'          => ':attribute फील्ड में निम्नलिखित में से कम से कम एगो कुंजी होखे के चाहीं: :values.',
    'integer'                => ':attribute के एगो पूर्णांक होखे के चाहीं।',
    'ip'                     => ':attribute के वैध आईपी पता होखे के चाहीं।',
    'ipv4'                   => ':attribute के वैध आईपीवी 4 पता होखे के चाहीं।',
    'ipv6'                   => ':attribute के वैध आईपीवी 6 पता होखे के चाहीं।',
    'json'                   => ':attribute के एगो वैध JSON स्ट्रिंग होखे के चाहीं।',
    'list'                   => ':attribute के फील्ड एगो लिस्ट होखे के चाहीं.',
    'lowercase'              => ':attribute के फील्ड छोट अक्षर के होखे के चाहीं।',
    'lt'                     => [
        'array'   => ':attribute में :value से कम आइटम होखे के चाही।',
        'file'    => ':attribute के :value किलोबाइट से कम होखे के चाहीं।',
        'numeric' => ':attribute के :value से कम होखे के चाहीं।',
        'string'  => ':attribute के :value अक्षर से कम होखे के चाहीं.',
    ],
    'lte'                    => [
        'array'   => ':attribute में :value से जादा आइटम ना होखे के चाही।',
        'file'    => ':attribute के :value किलोबाइट से कम भा बराबर होखे के चाहीं.',
        'numeric' => ':attribute के :value से कम भा बराबर होखे के चाहीं.',
        'string'  => ':attribute के :value अक्षर से कम भा बराबर होखे के चाहीं.',
    ],
    'mac_address'            => ':attribute के वैध मैक पता होखे के चाहीं।',
    'max'                    => [
        'array'   => ':attribute में :max से जादा आइटम ना होखे के चाही।',
        'file'    => ':attribute के :max किलोबाइट से अधिका ना होखे के चाहीं.',
        'numeric' => ':attribute के :max से अधिका ना होखे के चाहीं.',
        'string'  => ':attribute के :max अक्षर से अधिका ना होखे के चाहीं.',
    ],
    'max_digits'             => ':attribute फील्ड में :max अंक से अधिका ना होखे के चाहीं.',
    'mimes'                  => ':attribute के एगो फाइल होखे के चाहीं जवना के प्रकार: :values.',
    'mimetypes'              => ':attribute के एगो फाइल होखे के चाहीं जवना के प्रकार: :values.',
    'min'                    => [
        'array'   => ':attribute में कम से कम :min गो आइटम होखे के चाहीं।',
        'file'    => ':attribute के कम से कम :min किलोबाइट होखे के चाही।',
        'numeric' => ':attribute के कम से कम :min के होखे के चाही।',
        'string'  => ':attribute में कम से कम :min अक्षर के होखे के चाहीं.',
    ],
    'min_digits'             => ':attribute गो फील्ड में कम से कम :min अंक होखे के चाहीं.',
    'missing'                => ':attribute के खेत गायब होखे के चाहीं।',
    'missing_if'             => ':attribute के फील्ड गायब होखे के चाहीं जब :other :value होखे.',
    'missing_unless'         => 'जबले :other :value ना होखे तबले :attribute के फील्ड गायब होखे के चाहीं.',
    'missing_with'           => ':attribute के फील्ड गायब होखे के चाहीं जब :values मौजूद होखे।',
    'missing_with_all'       => ':attribute के फील्ड गायब होखे के चाहीं जब :values मौजूद होखे।',
    'multiple_of'            => ':attribute के :value के गुणनफल होखे के चाहीं।',
    'not_in'                 => 'चुनल गइल :attribute गो अमान्य बा.',
    'not_regex'              => ':attribute के प्रारूप अमान्य बा।',
    'numeric'                => ':attribute के एगो नंबर होखे के चाहीं.',
    'password'               => [
        'letters'       => ':attribute के फील्ड में कम से कम एगो अक्षर होखे के चाहीं.',
        'mixed'         => ':attribute के फील्ड में कम से कम एगो बड़का आ एगो छोट अक्षर होखे के चाहीं.',
        'numbers'       => ':attribute के फील्ड में कम से कम एगो नंबर होखे के चाहीं.',
        'symbols'       => ':attribute फील्ड में कम से कम एगो चिन्ह होखे के चाहीं.',
        'uncompromised' => 'दिहल :attribute डेटा लीक में लउकल बा। कृपया एगो अलग :attribute चुनीं।',
    ],
    'present'                => ':attribute के खेत मौजूद होखे के चाहीं।',
    'present_if'             => ':attribute के फील्ड तब मौजूद होखे के चाहीं जब :other :value होखे.',
    'present_unless'         => ':attribute के फील्ड तब तक मौजूद होखे के चाहीं जबले कि :other :value ना होखे.',
    'present_with'           => ':attribute के फील्ड तब मौजूद होखे के चाहीं जब :values मौजूद होखे।',
    'present_with_all'       => ':attribute के फील्ड तब मौजूद होखे के चाहीं जब :values मौजूद होखे।',
    'prohibited'             => ':attribute खेत के मनाही बा।',
    'prohibited_if'          => ':attribute के खेत पर रोक बा जब :other :value होखे।',
    'prohibited_if_accepted' => ':attribute फील्ड पर रोक लगावल गइल बा जब :other गो स्वीकार कइल जाला.',
    'prohibited_if_declined' => ':attribute के फील्ड पर रोक लगावल गइल बा जब :other गो के गिरावट आई.',
    'prohibited_unless'      => 'जबले :values में :other ना होखे तबले :attribute के खेत पर रोक बा.',
    'prohibits'              => ':attribute के मैदान में :other लोग के मौजूद रहे प रोक बा।',
    'regex'                  => ':attribute के प्रारूप अमान्य बा।',
    'required'               => ':attribute के खेत के जरूरत बा।',
    'required_array_keys'    => ':attribute फील्ड में निम्नलिखित खातिर प्रविष्टि होखे के चाहीं: :values.',
    'required_if'            => ':attribute के फील्ड के जरूरत तब होला जब :other :value होखे।',
    'required_if_accepted'   => ':attribute के फील्ड तब जरूरी होला जब :other के स्वीकार कइल जाला।',
    'required_if_declined'   => ':attribute के फील्ड के जरूरत तब होला जब :other के अस्वीकार कइल जाला।',
    'required_unless'        => ':attribute के फील्ड तब तक जरूरी बा जब तक कि :other :values में ना होखे।',
    'required_with'          => ':attribute फील्ड के जरूरत तब होला जब :values मौजूद होखे।',
    'required_with_all'      => ':attribute फील्ड के जरूरत तब होला जब :values मौजूद होखे।',
    'required_without'       => ':attribute फील्ड के जरूरत तब होला जब :values मौजूद ना होखे।',
    'required_without_all'   => ':attribute फील्ड के जरूरत तब होला जब :values में से कवनो भी मौजूद ना होखे।',
    'same'                   => ':attribute आ :other के मिलान होखे के चाहीं.',
    'size'                   => [
        'array'   => ':attribute में :size गो आइटम होखे के चाहीं.',
        'file'    => ':attribute के :size किलोबाइट होखे के चाहीं।',
        'numeric' => ':attribute के :size होखे के चाहीं।',
        'string'  => ':attribute में :size अक्षर के होखे के चाहीं.',
    ],
    'starts_with'            => ':attribute के शुरुआत निम्नलिखित में से कवनो एक से होखे के चाहीं: :values.',
    'string'                 => ':attribute के एगो तार होखे के चाहीं.',
    'timezone'               => ':attribute के वैध समय क्षेत्र होखे के चाहीं।',
    'ulid'                   => ':attribute फील्ड के वैध यूएलआईडी होखे के चाहीं।',
    'unique'                 => ':attribute के पहिलही ले लिहल गईल बा।',
    'uploaded'               => ':attribute गो अपलोड ना हो पावल।',
    'uppercase'              => ':attribute के फील्ड बड़का अक्षर के होखे के चाहीं.',
    'url'                    => ':attribute के वैध यूआरएल होखे के चाहीं।',
    'uuid'                   => ':attribute के वैध यूयूआईडी होखे के चाहीं।',
];
