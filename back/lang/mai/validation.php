<?php

declare(strict_types=1);

return [
    'accepted'               => ':attribute के स्वीकार करय पड़त।',
    'accepted_if'            => ':attribute के स्वीकार करय पड़त जखन :other :value अछि.',
    'active_url'             => ':attribute कोनो वैध यूआरएल नहि अछि।',
    'after'                  => ':attribute के :date के बाद के तारीख होबाक चाही.',
    'after_or_equal'         => ':attribute के बाद के तारीख या :date के बराबर होबाक चाही।',
    'alpha'                  => ':attribute मे मात्र अक्षर हेबाक चाही।',
    'alpha_dash'             => ':attribute मे केवल अक्षर, संख्या, डैश आ अंडरस्कोर हेबाक चाही।',
    'alpha_num'              => ':attribute मे मात्र अक्षर आ संख्या हेबाक चाही।',
    'any_of'                 => ':attribute क्षेत्र अमान्य अछि।',
    'array'                  => ':attribute एकटा सरणी हेबाक चाही।',
    'ascii'                  => ':attribute फील्ड मे केवल एकल-बाइट अल्फान्यूमेरिक वर्ण आ प्रतीक होबाक चाही.',
    'before'                 => ':attribute :date स पहिने क तारीख हेबाक चाही।',
    'before_or_equal'        => ':attribute :date स पहिने या बराबर क तारीख हेबाक चाही।',
    'between'                => [
        'array'   => ':attribute मे :min स :max क बीच आइटम हेबाक चाही।',
        'file'    => ':attribute के :min सं :max किलोबाइट के बीच होबाक चाही.',
        'numeric' => ':attribute :min स :max क बीच हेबाक चाही।',
        'string'  => ':attribute मे :min स :max अक्षर क बीच हेबाक चाही।',
    ],
    'boolean'                => ':attribute क्षेत्र सत्य वा गलत हेबाक चाही।',
    'can'                    => ':attribute फील्ड मे एकटा अनधिकृत मान अछि.',
    'confirmed'              => ':attribute कन्फर्मेशन मेल नहि खाइत अछि।',
    'contains'               => ':attribute फील्ड मे एकटा आवश्यक मान गायब अछि.',
    'current_password'       => 'पासवर्ड गलत अछि।',
    'date'                   => ':attribute कोनो वैध तिथि नहि अछि।',
    'date_equals'            => ':attribute के :date के बराबर तिथि होबाक चाही।',
    'date_format'            => ':attribute प्रारूप :format स मेल नहि खाइत अछि।',
    'decimal'                => ':attribute फील्ड मे :decimal दशमलव स्थान हेबाक चाही।',
    'declined'               => ':attribute के अस्वीकार करय पड़त।',
    'declined_if'            => ':attribute के अस्वीकार करय पड़त जखन :other :value अछि.',
    'different'              => ':attribute आ :other अलग-अलग हेबाक चाही।',
    'digits'                 => ':attribute :digits अंकक हेबाक चाही।',
    'digits_between'         => ':attribute अंक :min स :max अंक क बीच हेबाक चाही।',
    'dimensions'             => ':attribute मे अमान्य छवि आयाम अछि।',
    'distinct'               => ':attribute फील्ड के डुप्लिकेट मान अछि.',
    'doesnt_end_with'        => ':attribute क्षेत्र निम्नलिखित मे सँ कोनो एकटा सँ समाप्त नहि होबाक चाही: :values.',
    'doesnt_start_with'      => ':attribute फील्ड निम्नलिखित मे सँ कोनो एकटा सँ शुरू नहि होबाक चाही: :values.',
    'email'                  => ':attribute कें वैध ईमेल पता होबाक चाही.',
    'ends_with'              => ':attribute कें अंत निम्नलिखित मे सं एकटा सं होबाक चाही: :values.',
    'enum'                   => 'चयनित :attribute अमान्य अछि।',
    'exists'                 => 'चयनित :attribute अमान्य अछि।',
    'extensions'             => ':attribute फील्ड मे निम्नलिखित मे सं एकटा एक्सटेंशन होबाक चाही: :values.',
    'file'                   => ':attribute फाइल हेबाक चाही।',
    'filled'                 => ':attribute फील्ड के मान होबाक चाही।',
    'gt'                     => [
        'array'   => ':attribute मे :value स बेसी आइटम हेबाक चाही।',
        'file'    => ':attribute :value किलोबाइट स बेसी हेबाक चाही।',
        'numeric' => ':attribute :value स बेसी हेबाक चाही।',
        'string'  => ':attribute :value अक्षर स बेसी हेबाक चाही।',
    ],
    'gte'                    => [
        'array'   => ':attribute मे :value या ओहि स बेसी आइटम हेबाक चाही।',
        'file'    => ':attribute कें :value किलोबाइट सं बेसि या बराबर होबाक चाही.',
        'numeric' => ':attribute :value स बेसी या बराबर हेबाक चाही।',
        'string'  => ':attribute :value वर्णसँ बेसी वा बराबर हेबाक चाही।',
    ],
    'hex_color'              => ':attribute फील्ड एकटा वैध हेक्साडेसिमल रंग होबाक चाही.',
    'image'                  => ':attribute एकटा छवि हेबाक चाही।',
    'in'                     => 'चयनित :attribute अमान्य अछि।',
    'in_array'               => ':attribute क्षेत्र :other मे मौजूद नहि अछि।',
    'in_array_keys'          => ':attribute फील्ड मे निम्नलिखित मे सं कम सं कम एकटा चाभी होबाक चाही: :values.',
    'integer'                => ':attribute पूर्णांक हेबाक चाही।',
    'ip'                     => ':attribute कें वैध आईपी पता होबाक चाही.',
    'ipv4'                   => ':attribute कें वैध IPv4 पता होबाक चाही.',
    'ipv6'                   => ':attribute एकटा वैध IPv6 पता होबाक चाही.',
    'json'                   => ':attribute एकटा वैध JSON स्ट्रिंग होबाक चाही.',
    'list'                   => ':attribute फील्ड एकटा सूची हेबाक चाही।',
    'lowercase'              => ':attribute फील्ड छोट-छोट हेबाक चाही।',
    'lt'                     => [
        'array'   => ':attribute मे :value स कम आइटम हेबाक चाही।',
        'file'    => ':attribute के :value किलोबाइट सं कम होबाक चाही.',
        'numeric' => ':attribute :value स कम हेबाक चाही।',
        'string'  => ':attribute मे :value अक्षर स कम हेबाक चाही।',
    ],
    'lte'                    => [
        'array'   => ':attribute मे :value स बेसी आइटम नहि हेबाक चाही।',
        'file'    => ':attribute :value किलोबाइट सं कम या बराबर होबाक चाही.',
        'numeric' => ':attribute :value स कम या बराबर हेबाक चाही।',
        'string'  => ':attribute :value अक्षर स कम या बराबर हेबाक चाही।',
    ],
    'mac_address'            => ':attribute कें वैध मैक पता होबाक चाही.',
    'max'                    => [
        'array'   => ':attribute मे :max स बेसी आइटम नहि हेबाक चाही।',
        'file'    => ':attribute कें :max किलोबाइट सं बेसि नहि होबाक चाही.',
        'numeric' => ':attribute :max स बेसी नहि हेबाक चाही।',
        'string'  => ':attribute :max अक्षर स बेसी नहि हेबाक चाही।',
    ],
    'max_digits'             => ':attribute फील्ड मे :max अंक स बेसी नहि हेबाक चाही।',
    'mimes'                  => ':attribute के प्रकार के फाइल होबाक चाही: :values.',
    'mimetypes'              => ':attribute के प्रकार के फाइल होबाक चाही: :values.',
    'min'                    => [
        'array'   => ':attribute मे कम स कम :minटा आइटम हेबाक चाही।',
        'file'    => ':attribute कम स कम :min किलोबाइट हेबाक चाही।',
        'numeric' => ':attribute के कम स कम :min के होबाक चाही।',
        'string'  => ':attribute मे कम स कम :min अक्षर हेबाक चाही।',
    ],
    'min_digits'             => ':attribute फील्ड मे कम स कम :min अंक हेबाक चाही।',
    'missing'                => ':attribute फील्ड गायब हेबे करत।',
    'missing_if'             => ':attribute फील्ड गायब हेबाक चाही जखन :other :value अछि।',
    'missing_unless'         => ':attribute फील्ड गायब हेबाक चाही जाबत :other :value नहि होएत।',
    'missing_with'           => ':attribute फील्ड गायब हेबाक चाही जखन :values मौजूद रहत।',
    'missing_with_all'       => ':attribute फील्ड गायब हेबाक चाही जखन :values मौजूद रहत।',
    'multiple_of'            => ':attribute :value के गुणनफल होबाक चाही।',
    'not_in'                 => 'चयनित :attribute अमान्य अछि।',
    'not_regex'              => ':attribute प्रारूप अमान्य अछि।',
    'numeric'                => ':attribute एकटा नंबर हेबाक चाही।',
    'password'               => [
        'letters'       => ':attribute फील्ड मे कम स कम एकटा अक्षर हेबाक चाही।',
        'mixed'         => ':attribute फील्ड मे कम स कम एकटा पैघ आ एकटा छोट अक्षर हेबाक चाही।',
        'numbers'       => ':attribute फील्ड मे कम स कम एकटा नंबर होबाक चाही।',
        'symbols'       => ':attribute फील्ड मे कम स कम एकटा चिन्ह होबाक चाही।',
        'uncompromised' => 'देल गेल :attribute एकटा डाटा लीक मे आबि गेल अछि। कृपया एकटा अलग :attribute चुनू।',
    ],
    'present'                => ':attribute क्षेत्र उपस्थित हेबाक चाही।',
    'present_if'             => ':attribute फील्ड तखन उपस्थित हेबाक चाही जखन :other :value अछि।',
    'present_unless'         => ':attribute फील्ड ता धरि उपस्थित रहबाक चाही जाबत :other :value नहि अछि।',
    'present_with'           => ':attribute फील्ड तखन उपस्थित हेबाक चाही जखन :values उपस्थित होएत।',
    'present_with_all'       => ':attribute फील्ड तखन उपस्थित हेबाक चाही जखन :values उपस्थित होएत।',
    'prohibited'             => ':attribute खेत निषिद्ध अछि।',
    'prohibited_if'          => ':attribute फील्ड पर रोक अछि जखन :other :value अछि।',
    'prohibited_if_accepted' => ':attribute क्षेत्र जखन :other स्वीकार भ जाएत अछि तखन निषिद्ध अछि।',
    'prohibited_if_declined' => ':attribute क्षेत्र जखन :otherटा अस्वीकार भ जाएत अछि त वर्जित अछि।',
    'prohibited_unless'      => ':attribute फील्ड ता धरि मना अछि जाबत :other :values मे नहि अछि।',
    'prohibits'              => ':attribute फील्ड मे :other गोटे कए उपस्थित हेबा स रोक अछि।',
    'regex'                  => ':attribute प्रारूप अमान्य अछि।',
    'required'               => ':attribute फील्ड आवश्यक अछि।',
    'required_array_keys'    => ':attribute फील्ड मे एहि लेल प्रविष्टि होबाक चाही: :values.',
    'required_if'            => ':attribute फील्ड तखन आवश्यक होइत अछि जखन :other :value अछि।',
    'required_if_accepted'   => ':attribute फील्ड तखन आवश्यक अछि जखन :other स्वीकार कएल जाइत अछि।',
    'required_if_declined'   => ':other के अस्वीकार भेला पर :attribute फील्ड के आवश्यकता होइत अछि।',
    'required_unless'        => ':attribute फील्ड ताबत धरि आवश्यक अछि जाबत :other :values मे नहि अछि।',
    'required_with'          => ':attribute फील्ड तखन आवश्यक होइत अछि जखन :values मौजूद रहैत अछि।',
    'required_with_all'      => ':attribute फील्ड तखन आवश्यक होइत अछि जखन :values उपस्थित रहैत अछि।',
    'required_without'       => ':attribute फील्ड तखन आवश्यक होइत अछि जखन :values नहि रहैत अछि।',
    'required_without_all'   => ':attribute फील्ड तखन आवश्यक होइत अछि जखन :values मे स कोनो नहि होएत।',
    'same'                   => ':attribute आ :other के मिलान अवश्य होयत।',
    'size'                   => [
        'array'   => ':attribute मे :sizeटा वस्तु अवश्य रहत।',
        'file'    => ':attribute :size किलोबाइट हेबाक चाही।',
        'numeric' => ':attribute के :size होबाक चाही।',
        'string'  => ':attribute मे :size अक्षर हेबाक चाही।',
    ],
    'starts_with'            => ':attribute के शुरुआत निम्नलिखित मे स कोनो एकटा स होबाक चाही: :values.',
    'string'                 => ':attribute एकटा तार हेबाक चाही।',
    'timezone'               => ':attribute वैध समय क्षेत्र होबाक चाही।',
    'ulid'                   => ':attribute फील्ड वैध यूएलआईडी होबाक चाही.',
    'unique'                 => ':attribute टा ल लेल गेल अछि।',
    'uploaded'               => ':attribute अपलोड करबा मे असफल रहल।',
    'uppercase'              => ':attribute क्षेत्र पैघ अक्षर हेबाक चाही।',
    'url'                    => ':attribute एकटा वैध यूआरएल हेबाक चाही।',
    'uuid'                   => ':attribute कें वैध यूयूआईडी होबाक चाही.',
];
