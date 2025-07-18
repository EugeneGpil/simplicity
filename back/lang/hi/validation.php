<?php

declare(strict_types=1);

return [
    'accepted'               => ':Attribute को स्वीकार किया जाना चाहिए ।',
    'accepted_if'            => ':Attribute को ज़रूर स्वीकार किया जाना चाहिए जब :other :value हो ।',
    'active_url'             => ':Attribute एक मान्य URL नहीं है ।',
    'after'                  => ':Attribute, :date के बाद की एक तारीख होनी चाहिए ।',
    'after_or_equal'         => ':Attribute, :date के बाद या उसके बराबर की तारीख होनी चाहिए ।',
    'alpha'                  => ':Attribute में केवल अक्षर हो सकते हैं ।',
    'alpha_dash'             => ':Attribute में केवल अक्षर, संख्या, और डैश हो सकते हैं ।',
    'alpha_num'              => ':Attribute में केवल अक्षर और संख्याएं हो सकती हैं ।',
    'any_of'                 => ':attribute क्षेत्र अमान्य है।',
    'array'                  => ':Attribute एक सरणी होनी चाहिए ।',
    'ascii'                  => ':Attribute में केवल सिंगल-बाइट अल्फ़ान्यूमेरिक वर्ण और प्रतीक होने चाहिए।',
    'before'                 => ':Attribute, :date से पहले की एक तारीख होनी चाहिए ।',
    'before_or_equal'        => ':Attribute, :date इससे पहले या उसके बराबर की तारीख होनी चाहिए ।',
    'between'                => [
        'array'   => ':Attribute, :min और :max आइटमों के बीच होनी चाहिए ।',
        'file'    => ':Attribute, :min और :max किलोबाइट के बीच होना चाहिए ।',
        'numeric' => ':Attribute, :min और :max के बीच होना चाहिए ।',
        'string'  => ':Attribute, :min और :max वर्णों के बीच होना चाहिए ।',
    ],
    'boolean'                => ':Attribute फील्ड सही या गलत होना चाहिए ।',
    'can'                    => ':Attribute फ़ील्ड में एक अनधिकृत मान है।',
    'confirmed'              => ':Attribute पुष्टिकरण मेल नहीं खा रहा है।',
    'contains'               => ':attribute फ़ील्ड में आवश्यक मान गुम है।',
    'current_password'       => 'पासवर्ड गलत है ।',
    'date'                   => ':Attribute एक मान्य दिनांक नहीं है।',
    'date_equals'            => ':Attribute, :date के बराबर तारीख होनी चाहिए ।',
    'date_format'            => ':Attribute फॉर्मेट :format से मेल नहीं खा रहा है ।',
    'decimal'                => ':Attribute में :decimal दशमलव स्थान होने चाहिए।',
    'declined'               => ':Attribute को ज़रूर अस्वीकार किया जाना चाहिए ।',
    'declined_if'            => ':Attribute को ज़रूर अस्वीकार किया जाना चाहिए जब :other :value हो ।',
    'different'              => ':Attribute और :other अलग होना चाहिए ।',
    'digits'                 => ':Attribute, :digits अंक होना चाहिए ।',
    'digits_between'         => ':Attribute, :min और :max अंकों के बीच होना चाहिए ।',
    'dimensions'             => ':Attribute का अमान्य चित्त माप है ।',
    'distinct'               => ':Attribute फील्ड का एक डुप्लिकेट मान होता है ।',
    'doesnt_end_with'        => ':Attribute निम्नलिखित में से किसी एक के साथ समाप्त नहीं हो सकता है: :values ।',
    'doesnt_start_with'      => ':Attribute निम्नलिखित में से किसी एक के साथ शुरू नहीं हो सकता है: :values ।',
    'email'                  => ':Attribute एक मान्य ईमेल पता होना चाहिए ।',
    'ends_with'              => ':Attribute को निम्नलिखित में से एक के साथ समाप्त होना चाहिए: :values ।',
    'enum'                   => 'चयनित :attribute अमान्य है ।',
    'exists'                 => 'चुना गया :attribute अमान्य है ।',
    'extensions'             => ':attribute फ़ील्ड में निम्नलिखित एक्सटेंशन में से एक होना चाहिए: :values.',
    'file'                   => ':Attribute एक फ़ाइल होनी चाहिए ।',
    'filled'                 => ':Attribute फील्ड आवश्यक होता है ।',
    'gt'                     => [
        'array'   => ':Attribute, :value मद से अधिक होना चाहिए ।',
        'file'    => ':Attribute, :value kilobytes से अधिक होना चाहिए ।',
        'numeric' => ':Attribute, :value से अधिक होना चाहिए ।',
        'string'  => ':Attribute, :value characters से अधिक होना चाहिए ।',
    ],
    'gte'                    => [
        'array'   => ':Attribute में :value आइटम या अधिक होना चाहिए ।',
        'file'    => ':Attribute :value किलोबाइट से अधिक या उसके बराबर होना चाहिए।',
        'numeric' => ':Attribute :value से अधिक या उसके बराबर होना चाहिए।',
        'string'  => ':Attribute को :value वर्णों से अधिक या उसके बराबर होना चाहिए।',
    ],
    'hex_color'              => ':attribute फ़ील्ड वैध हेक्साडेसिमल रंग होना चाहिए।',
    'image'                  => ':Attribute एक छवि होनी चाहिए ।',
    'in'                     => 'चुना गया :attribute अमान्य है ।',
    'in_array'               => ':Attribute फील्ड, :other में मौजूद नहीं है ।',
    'in_array_keys'          => ':attribute फ़ील्ड में निम्नलिखित में से कम से कम एक कुंजियाँ होनी चाहिए: :values।',
    'integer'                => ':Attribute एक पूर्णांक होना चाहिए ।',
    'ip'                     => ':Attribute एक मान्य IP address होना चाहिए ।',
    'ipv4'                   => ':Attribute एक वैध IPv4 address होना चाहिए ।',
    'ipv6'                   => ':Attribute एक वैध IPv6 address होना चाहिए ।',
    'json'                   => ':Attribute एक मान्य JSON स्ट्रिंग होना चाहिए ।',
    'list'                   => ':attribute फ़ील्ड एक सूची होनी चाहिए.',
    'lowercase'              => ':Attribute लोअरकेस होना चाहिए।',
    'lt'                     => [
        'array'   => ':Attribute में :value आइटम से कम होना चाहिए ।',
        'file'    => ':Attribute :value किलोबाइट से कम होनी चाहिए ।',
        'numeric' => ':Attribute :value से कम होनी चाहिए ।',
        'string'  => ':Attribute :value अक्षरों से कम होना चाहिए ।',
    ],
    'lte'                    => [
        'array'   => ':Attribute :value आइटम से अधिक नहीं होना चाहिए ।',
        'file'    => ':Attribute :value किलोबाइट से कम या उसके बराबर होना चाहिए।',
        'numeric' => ':Attribute :value से कम या उसके बराबर होना चाहिए।',
        'string'  => ':Attribute को :value वर्णों से कम या उसके बराबर होना चाहिए।',
    ],
    'mac_address'            => ':Attribute एक मान्य MAC address होना चाहिए ।',
    'max'                    => [
        'array'   => ':Attribute, :max आइटमों से अधिक नहीं हो सकता है ।',
        'file'    => ':Attribute :max किलोबाइट से बड़ा नहीं हो सकता है ।',
        'numeric' => ':Attribute, :max से बड़ा नहीं हो सकता है ।',
        'string'  => ':Attribute, :max वर्णों से बड़ा नहीं हो सकता है ।',
    ],
    'max_digits'             => ':Attribute में :max से अधिक अंक नहीं होने चाहिए।',
    'mimes'                  => ':Attribute एक प्रकार की फ़ाइल: :values होना चाहिए ।',
    'mimetypes'              => ':Attribute एक प्रकार की फ़ाइल: :values होना चाहिए ।',
    'min'                    => [
        'array'   => ':Attribute कम से कम :min आइटम होना चाहिए ।',
        'file'    => ':Attribute कम से कम :min किलोबाइट होना चाहिए ।',
        'numeric' => ':Attribute कम से कम :min होना चाहिए ।',
        'string'  => ':Attribute कम से कम :min वर्ण होना चाहिए ।',
    ],
    'min_digits'             => ':Attribute में कम से कम :min अंक होने चाहिए।',
    'missing'                => ':Attribute फ़ील्ड गायब होना चाहिए।',
    'missing_if'             => ':Other :value होने पर :attribute फ़ील्ड गायब होना चाहिए।',
    'missing_unless'         => ':Other :value होने तक :attribute फ़ील्ड गायब होना चाहिए।',
    'missing_with'           => ':Values मौजूद होने पर :attribute फ़ील्ड गायब होना चाहिए।',
    'missing_with_all'       => ':Values मौजूद होने पर :attribute फ़ील्ड गायब होना चाहिए।',
    'multiple_of'            => ':Attribute :value का एक बहु होना चाहिए ।',
    'not_in'                 => 'चुना गया :attribute अमान्य है ।',
    'not_regex'              => ':Attribute प्रारूप अमान्य है ।',
    'numeric'                => ':Attribute एक संख्या होनी चाहिए ।',
    'password'               => [
        'letters'       => ':Attribute में कम से कम एक अक्षर होना चाहिए ।',
        'mixed'         => ':Attribute में कम से कम एक बड़ा और एक छोटा अक्षर होना चाहिए ।',
        'numbers'       => ':Attribute में कम से कम एक नंबर होना चाहिए ।',
        'symbols'       => ':Attribute में कम से कम एक चिन्ह अक्षर होना चाहिए ।',
        'uncompromised' => 'दिया गया :attribute डेटा लीक में दिखाई दिया हैं। कृपया अलग :attribute चुनें ।',
    ],
    'present'                => ':Attribute फील्ड मौजूद होना चाहिए ।',
    'present_if'             => 'जब :other, :value हो तो :attribute फ़ील्ड मौजूद होनी चाहिए।',
    'present_unless'         => ':attribute फ़ील्ड तब तक मौजूद रहना चाहिए जब तक कि :other :value न हो जाए।',
    'present_with'           => 'जब :values मौजूद हो तो :attribute फ़ील्ड मौजूद होनी चाहिए।',
    'present_with_all'       => 'जब :values मौजूद हों तो :attribute फ़ील्ड मौजूद होनी चाहिए।',
    'prohibited'             => ':Attribute क्षेत्र निषिद्ध है ।',
    'prohibited_if'          => ':Attribute क्षेत्र निषिद्ध है जब :other :value है ।',
    'prohibited_if_accepted' => 'जब :other स्वीकार किए जाते हैं तो :attribute फ़ील्ड निषिद्ध है।',
    'prohibited_if_declined' => 'जब :other को अस्वीकार कर दिया जाता है तो :attribute क्षेत्र निषिद्ध है।',
    'prohibited_unless'      => ':Attribute क्षेत्र तब तक निषिद्ध है जब तक कि :other :values में न हो ।',
    'prohibits'              => ':Attribute फ़ील्ड :other को उपस्थित होने से प्रतिबंधित करती है ।',
    'regex'                  => ':Attribute फॉर्मेट अमान्य है ।',
    'required'               => ':Attribute फील्ड आवश्यक होता है ।',
    'required_array_keys'    => ':Attribute फील्ड में :values के लिए एन्ट्रीज़ होना जरुरी हैं ।',
    'required_if'            => ':Attribute फ़ील्ड आवश्यक होता है जब :other :value होता है ।',
    'required_if_accepted'   => ':Other स्वीकार किए जाने पर :attribute फ़ील्ड आवश्यक है।',
    'required_if_declined'   => ':other अस्वीकृत होने पर :attribute फ़ील्ड की आवश्यकता होती है।',
    'required_unless'        => ':Attribute फील्ड आवश्यक होता है जब :other, :values में नहीं होता है ।',
    'required_with'          => ':Attribute फ़ील्ड आवश्यक होता है जब :values मौजूद होता है ।',
    'required_with_all'      => ':Attribute फ़ील्ड आवश्यक होता है जब :values मौजूद होता है ।',
    'required_without'       => ':Attribute फील्ड आवश्यक होता है जब :values मौजूद नहीं होता है ।',
    'required_without_all'   => ':Attribute फील्ड आवश्यक होता है जब एक भी :values मौजूद नहीं होता है ।',
    'same'                   => ':Attribute और :other मेल खाना चाहिए ।',
    'size'                   => [
        'array'   => ':Attribute में :size आइटम होने चाहिए ।',
        'file'    => ':Attribute, :size किलोबाइट होना चाहिए ।',
        'numeric' => ':Attribute, :size होना चाहिए ।',
        'string'  => ':Attribute, :size वर्ण होना चाहिए ।',
    ],
    'starts_with'            => ':Attribute निम्नलिखित में से किसी एक से शुरू करना चाहिए: :values',
    'string'                 => ':Attribute एक स्ट्रिंग होनी चाहिए ।',
    'timezone'               => ':Attribute एक मान्य क्षेत्र होना चाहिए ।',
    'ulid'                   => ':Attribute एक वैध ULID होना चाहिए।',
    'unique'                 => ':Attribute को पहले ही ले लिया गया है ।',
    'uploaded'               => ':Attribute अपलोड करने में विफल ।',
    'uppercase'              => ':Attribute अपरकेस होना चाहिए।',
    'url'                    => ':Attribute फॉर्मेट अमान्य है ।',
    'uuid'                   => ':Attribute एक वैध UUID होना चाहिए ।',
];
