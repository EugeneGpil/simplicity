<?php

declare(strict_types=1);

return [
    'accepted'               => ':attribute ஏற்றுக்கொள்ளப்பட வேண்டும்.',
    'accepted_if'            => ':other :value ஆக இருக்கும்போது :attribute ஏற்றுக்கொள்ளப்பட வேண்டும்.',
    'active_url'             => ':attribute சரியான URL அல்ல.',
    'after'                  => ':attribute என்பது :dateக்குப் பின் வரும் தேதியாக இருக்க வேண்டும்.',
    'after_or_equal'         => ':attribute என்பது :dateக்குப் பின் அல்லது அதற்கு சமமான தேதியாக இருக்க வேண்டும்.',
    'alpha'                  => ':attributeல் எழுத்துக்கள் மட்டுமே இருக்க வேண்டும்.',
    'alpha_dash'             => ':attribute இல் எழுத்துக்கள், எண்கள், கோடுகள் மற்றும் அடிக்கோடுகள் மட்டுமே இருக்க வேண்டும்.',
    'alpha_num'              => ':attribute இல் எழுத்துக்கள் மற்றும் எண்கள் மட்டுமே இருக்க வேண்டும்.',
    'any_of'                 => ':attribute புலம் தவறானது.',
    'array'                  => ':attribute ஒரு வரிசையாக இருக்க வேண்டும்.',
    'ascii'                  => ':attribute புலத்தில் ஒற்றை-பைட் எண்ணெழுத்து எழுத்துக்கள் மற்றும் குறியீடுகள் மட்டுமே இருக்க வேண்டும்.',
    'before'                 => ':attribute என்பது :dateக்கு முந்தைய தேதியாக இருக்க வேண்டும்.',
    'before_or_equal'        => ':attribute என்பது :dateக்கு முந்தைய அல்லது அதற்கு சமமான தேதியாக இருக்க வேண்டும்.',
    'between'                => [
        'array'   => ':attributeல் :min முதல் :max உருப்படிகள் இருக்க வேண்டும்.',
        'file'    => ':attribute :min முதல் :max கிலோபைட்டுகளுக்கு இடையில் இருக்க வேண்டும்.',
        'numeric' => ':attribute :min முதல் :max வரை இருக்க வேண்டும்.',
        'string'  => ':attribute :min மற்றும் :max எழுத்துகளுக்கு இடையில் இருக்க வேண்டும்.',
    ],
    'boolean'                => ':attribute புலம் உண்மையாகவோ அல்லது பொய்யாகவோ இருக்க வேண்டும்.',
    'can'                    => ':attribute புலத்தில் அங்கீகரிக்கப்படாத மதிப்பு உள்ளது.',
    'confirmed'              => ':attribute உறுதிப்படுத்தல் பொருந்தவில்லை.',
    'contains'               => ':attribute புலத்தில் தேவையான மதிப்பு இல்லை.',
    'current_password'       => 'கடவுச்சொல் தவறானது.',
    'date'                   => ':attribute சரியான தேதி அல்ல.',
    'date_equals'            => ':attribute என்பது :dateக்கு சமமான தேதியாக இருக்க வேண்டும்.',
    'date_format'            => ':attribute வடிவம் :format உடன் பொருந்தவில்லை.',
    'decimal'                => ':attribute புலத்தில் :decimal தசம இடங்கள் இருக்க வேண்டும்.',
    'declined'               => ':attribute நிராகரிக்கப்பட வேண்டும்.',
    'declined_if'            => ':other :value ஆக இருக்கும்போது :attribute நிராகரிக்கப்பட வேண்டும்.',
    'different'              => ':attribute மற்றும் :other வித்தியாசமாக இருக்க வேண்டும்.',
    'digits'                 => ':attribute என்பது :digits இலக்கங்களாக இருக்க வேண்டும்.',
    'digits_between'         => ':attribute :min மற்றும் :max இலக்கங்களுக்கு இடையில் இருக்க வேண்டும்.',
    'dimensions'             => ':attribute தவறான பட பரிமாணங்களைக் கொண்டுள்ளது.',
    'distinct'               => ':attribute புலத்தில் நகல் மதிப்பு உள்ளது.',
    'doesnt_end_with'        => ':attribute புலம் பின்வருவனவற்றில் ஒன்றில் முடிவடையக்கூடாது: :values.',
    'doesnt_start_with'      => ':attribute புலம் பின்வருவனவற்றில் ஒன்றில் தொடங்கக்கூடாது: :values.',
    'email'                  => ':attribute சரியான மின்னஞ்சல் முகவரியாக இருக்க வேண்டும்.',
    'ends_with'              => ':attribute பின்வருவனவற்றில் ஒன்றோடு முடிவடைய வேண்டும்: :values.',
    'enum'                   => 'தேர்ந்தெடுக்கப்பட்ட :attribute தவறானது.',
    'exists'                 => 'தேர்ந்தெடுக்கப்பட்ட :attribute தவறானது.',
    'extensions'             => ':attribute புலம் பின்வரும் நீட்டிப்புகளில் ஒன்றைக் கொண்டிருக்க வேண்டும்: :values.',
    'file'                   => ':attribute ஒரு கோப்பாக இருக்க வேண்டும்.',
    'filled'                 => ':attribute புலத்திற்கு மதிப்பு இருக்க வேண்டும்.',
    'gt'                     => [
        'array'   => ':attributeல் :valueக்கும் மேற்பட்ட பொருட்கள் இருக்க வேண்டும்.',
        'file'    => ':attribute என்பது :value கிலோபைட்டுகளை விட அதிகமாக இருக்க வேண்டும்.',
        'numeric' => ':attribute என்பது :valueஐ விட அதிகமாக இருக்க வேண்டும்.',
        'string'  => ':attribute என்பது :value எழுத்துகளுக்கு மேல் இருக்க வேண்டும்.',
    ],
    'gte'                    => [
        'array'   => ':attribute இல் :value அல்லது அதற்கு மேற்பட்ட பொருட்கள் இருக்க வேண்டும்.',
        'file'    => ':attribute :value கிலோபைட்டுகளை விட அதிகமாகவோ அல்லது அதற்கு சமமாகவோ இருக்க வேண்டும்.',
        'numeric' => ':attribute :value ஐ விட அதிகமாகவோ அல்லது சமமாகவோ இருக்க வேண்டும்.',
        'string'  => ':attribute என்பது :value எழுத்துகளை விட அதிகமாகவோ அல்லது சமமாகவோ இருக்க வேண்டும்.',
    ],
    'hex_color'              => ':attribute புலமானது செல்லுபடியாகும் ஹெக்ஸாடெசிமல் நிறமாக இருக்க வேண்டும்.',
    'image'                  => ':attribute ஒரு படமாக இருக்க வேண்டும்.',
    'in'                     => 'தேர்ந்தெடுக்கப்பட்ட :attribute தவறானது.',
    'in_array'               => ':attribute புலம் :other இல் இல்லை.',
    'in_array_keys'          => ':attribute புலத்தில் பின்வரும் விசைகளில் ஒன்று இருக்க வேண்டும்: :values.',
    'integer'                => ':attribute ஒரு முழு எண்ணாக இருக்க வேண்டும்.',
    'ip'                     => ':attribute சரியான ஐபி முகவரியாக இருக்க வேண்டும்.',
    'ipv4'                   => ':attribute சரியான IPv4 முகவரியாக இருக்க வேண்டும்.',
    'ipv6'                   => ':attribute சரியான IPv6 முகவரியாக இருக்க வேண்டும்.',
    'json'                   => ':attribute சரியான JSON சரமாக இருக்க வேண்டும்.',
    'list'                   => ':attribute புலம் ஒரு பட்டியலாக இருக்க வேண்டும்.',
    'lowercase'              => ':attribute புலம் சிறிய எழுத்தாக இருக்க வேண்டும்.',
    'lt'                     => [
        'array'   => ':attributeல் :valueக்கும் குறைவான பொருட்கள் இருக்க வேண்டும்.',
        'file'    => ':attribute என்பது :value கிலோபைட்டுகளுக்கு குறைவாக இருக்க வேண்டும்.',
        'numeric' => ':attribute என்பது :valueக்கு குறைவாக இருக்க வேண்டும்.',
        'string'  => ':attribute என்பது :value எழுத்துகளுக்குக் குறைவாக இருக்க வேண்டும்.',
    ],
    'lte'                    => [
        'array'   => ':attribute இல் :value க்கும் மேற்பட்ட பொருட்கள் இருக்கக்கூடாது.',
        'file'    => ':attribute என்பது :value கிலோபைட்டுகளுக்கு குறைவாகவோ அல்லது சமமாகவோ இருக்க வேண்டும்.',
        'numeric' => ':attribute என்பது :valueஐ விட குறைவாகவோ அல்லது சமமாகவோ இருக்க வேண்டும்.',
        'string'  => ':attribute என்பது :value எழுத்துகளை விட குறைவாகவோ அல்லது சமமாகவோ இருக்க வேண்டும்.',
    ],
    'mac_address'            => ':attribute சரியான MAC முகவரியாக இருக்க வேண்டும்.',
    'max'                    => [
        'array'   => ':attribute இல் :max க்கும் மேற்பட்ட பொருட்கள் இருக்கக்கூடாது.',
        'file'    => ':attribute என்பது :max கிலோபைட்டுகளுக்கு மேல் இருக்கக்கூடாது.',
        'numeric' => ':attribute :max ஐ விட அதிகமாக இருக்கக்கூடாது.',
        'string'  => ':attribute என்பது :max எழுத்துகளுக்கு மேல் இருக்கக்கூடாது.',
    ],
    'max_digits'             => ':attribute புலத்தில் :max இலக்கங்களுக்கு மேல் இருக்கக்கூடாது.',
    'mimes'                  => ':attribute வகை கோப்பாக இருக்க வேண்டும்: :values.',
    'mimetypes'              => ':attribute வகை கோப்பாக இருக்க வேண்டும்: :values.',
    'min'                    => [
        'array'   => ':attribute இல் குறைந்தது :min உருப்படிகள் இருக்க வேண்டும்.',
        'file'    => ':attribute குறைந்தபட்சம் :min கிலோபைட்டுகளாக இருக்க வேண்டும்.',
        'numeric' => ':attribute குறைந்தது :min ஆக இருக்க வேண்டும்.',
        'string'  => ':attribute குறைந்தது :min எழுத்துகள் இருக்க வேண்டும்.',
    ],
    'min_digits'             => ':attribute புலத்தில் குறைந்தது :min இலக்கங்கள் இருக்க வேண்டும்.',
    'missing'                => ':attribute புலம் தவறியிருக்க வேண்டும்.',
    'missing_if'             => ':other :value ஆக இருக்கும் போது :attribute புலம் தவறியிருக்க வேண்டும்.',
    'missing_unless'         => ':other :value ஆக இல்லாவிட்டால் :attribute புலம் தவறியிருக்க வேண்டும்.',
    'missing_with'           => ':values இருக்கும் போது :attribute புலம் விடுபட்டிருக்க வேண்டும்.',
    'missing_with_all'       => ':values இருக்கும் போது :attribute புலம் தவறியிருக்க வேண்டும்.',
    'multiple_of'            => ':attribute என்பது :value இன் பெருக்கமாக இருக்க வேண்டும்.',
    'not_in'                 => 'தேர்ந்தெடுக்கப்பட்ட :attribute தவறானது.',
    'not_regex'              => ':attribute வடிவம் தவறானது.',
    'numeric'                => ':attribute ஒரு எண்ணாக இருக்க வேண்டும்.',
    'password'               => [
        'letters'       => ':attribute புலத்தில் குறைந்தது ஒரு எழுத்தாவது இருக்க வேண்டும்.',
        'mixed'         => ':attribute புலத்தில் குறைந்தது ஒரு பெரிய எழுத்தும் ஒரு சிறிய எழுத்தும் இருக்க வேண்டும்.',
        'numbers'       => ':attribute புலத்தில் குறைந்தது ஒரு எண்ணாவது இருக்க வேண்டும்.',
        'symbols'       => ':attribute புலத்தில் குறைந்தது ஒரு சின்னம் இருக்க வேண்டும்.',
        'uncompromised' => 'கொடுக்கப்பட்ட :attribute தரவு கசிவில் தோன்றியுள்ளது. வேறு :attributeஐத் தேர்ந்தெடுக்கவும்.',
    ],
    'present'                => ':attribute புலம் இருக்க வேண்டும்.',
    'present_if'             => ':other :value ஆக இருக்கும் போது :attribute புலம் இருக்க வேண்டும்.',
    'present_unless'         => ':other என்பது :value ஆக இல்லாவிட்டால் :attribute புலம் இருக்க வேண்டும்.',
    'present_with'           => ':values இருக்கும் போது :attribute புலம் இருக்க வேண்டும்.',
    'present_with_all'       => ':values இருக்கும் போது :attribute புலம் இருக்க வேண்டும்.',
    'prohibited'             => ':attribute புலம் தடைசெய்யப்பட்டுள்ளது.',
    'prohibited_if'          => ':other :value ஆக இருக்கும்போது :attribute புலம் தடைசெய்யப்பட்டுள்ளது.',
    'prohibited_if_accepted' => ':other ஏற்றுக்கொள்ளப்படும்போது :attribute புலம் தடைசெய்யப்பட்டுள்ளது.',
    'prohibited_if_declined' => ':other மறுக்கப்படும்போது :attribute புலம் தடைசெய்யப்பட்டுள்ளது.',
    'prohibited_unless'      => ':values இல் :other இருந்தால் தவிர :attribute புலம் தடைசெய்யப்பட்டுள்ளது.',
    'prohibits'              => ':attribute புலம் :other இருப்பதை தடை செய்கிறது.',
    'regex'                  => ':attribute வடிவம் தவறானது.',
    'required'               => ':attribute புலம் தேவை.',
    'required_array_keys'    => ':attribute புலத்தில் உள்ளீடுகள் இருக்க வேண்டும்: :values.',
    'required_if'            => ':other :value ஆக இருக்கும்போது :attribute புலம் தேவைப்படுகிறது.',
    'required_if_accepted'   => ':other ஏற்கப்படும்போது :attribute புலம் தேவைப்படுகிறது.',
    'required_if_declined'   => ':other நிராகரிக்கப்படும் போது :attribute புலம் தேவைப்படுகிறது.',
    'required_unless'        => ':values இல் :other இருந்தால் தவிர :attribute புலம் தேவை.',
    'required_with'          => ':values இருக்கும் போது :attribute புலம் தேவைப்படுகிறது.',
    'required_with_all'      => ':values இருக்கும் போது :attribute புலம் தேவைப்படுகிறது.',
    'required_without'       => ':values இல்லாத போது :attribute புலம் தேவைப்படுகிறது.',
    'required_without_all'   => ':values இல் எதுவும் இல்லாதபோது :attribute புலம் தேவைப்படுகிறது.',
    'same'                   => ':attribute மற்றும் :other பொருந்த வேண்டும்.',
    'size'                   => [
        'array'   => ':attribute இல் :size உருப்படிகள் இருக்க வேண்டும்.',
        'file'    => ':attribute என்பது :size கிலோபைட்டுகளாக இருக்க வேண்டும்.',
        'numeric' => ':attribute என்பது :size ஆக இருக்க வேண்டும்.',
        'string'  => ':attribute என்பது :size எழுத்துகளாக இருக்க வேண்டும்.',
    ],
    'starts_with'            => ':attribute பின்வருவனவற்றில் ஒன்றில் தொடங்க வேண்டும்: :values.',
    'string'                 => ':attribute ஒரு சரமாக இருக்க வேண்டும்.',
    'timezone'               => ':attribute சரியான நேர மண்டலமாக இருக்க வேண்டும்.',
    'ulid'                   => ':attribute புலம் சரியான ULID ஆக இருக்க வேண்டும்.',
    'unique'                 => ':attribute ஏற்கனவே எடுக்கப்பட்டது.',
    'uploaded'               => ':attribute பதிவேற்றம் செய்ய முடியவில்லை.',
    'uppercase'              => ':attribute புலம் பெரிய எழுத்தாக இருக்க வேண்டும்.',
    'url'                    => ':attribute சரியான URL ஆக இருக்க வேண்டும்.',
    'uuid'                   => ':attribute சரியான UUID ஆக இருக்க வேண்டும்.',
];
