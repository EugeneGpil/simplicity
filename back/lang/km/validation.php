<?php

declare(strict_types=1);

return [
    'accepted'               => ':Attribute ត្រូវតែត្រូវបានទទួលយក។',
    'accepted_if'            => ':Attribute ត្រូវតែទទួលយកនៅពេលដែល :other គឺ :value ។',
    'active_url'             => ':Attribute មិនមែនជា URL ត្រឹមត្រូវឡើយ។',
    'after'                  => ':Attribute ត្រូវតែមានកាលបរិច្ឆេទបន្ទាប់ពី :date។',
    'after_or_equal'         => ':Attribute ត្រូវតែជាកាលបរិច្ឆេទ ក្រោយឬស្មើ :date។',
    'alpha'                  => ':Attribute អាចមានអក្សរតែប៉ុណ្ណោះ។',
    'alpha_dash'             => ':Attribute អាចមានតែអក្សរ លេខ និងសហសញ្ញា(-)។',
    'alpha_num'              => ':Attribute អាចមានតែអក្សរ និងលេខ។',
    'any_of'                 => 'វាលទាំង :attribute មិនមានសុពលភាពទេ។',
    'array'                  => ':Attribute ត្រូវតែជា សំណុំ។',
    'ascii'                  => ':Attribute ត្រូវតែមានតួអក្សរ និងនិមិត្តសញ្ញាលេខមួយបៃប៉ុណ្ណោះ។',
    'before'                 => ':Attribute ត្រូវតែមានកាលបរិច្ឆេទមុន :date។',
    'before_or_equal'        => ':Attribute ត្រូវតែជាកាលបរិច្ឆេទ មុនឬស្មើ :date។',
    'between'                => [
        'array'   => ':Attribute ត្រូវតែមានចំនួនរវាង :min និង :max។',
        'file'    => ':Attribute ត្រូវតែមានរវាង :min និង :max គីឡូបៃ។',
        'numeric' => ':Attribute ត្រូវតែមានរវាង :min និង :max។',
        'string'  => ':Attribute ត្រូវតែមានរវាង :min និង :max តួអក្សរ។',
    ],
    'boolean'                => ':Attribute ត្រូវតែជា ពិត ឬ មិនពិត',
    'can'                    => 'វាល :attribute មាន​តម្លៃ​ដែល​គ្មាន​ការ​អនុញ្ញាត។',
    'confirmed'              => ':Attribute ការបញ្ជាក់មិនផ្គូរផ្គង។',
    'contains'               => 'វាល :attribute បាត់តម្លៃដែលត្រូវការ។',
    'current_password'       => 'ពាក្យ​សម្ងាត់​មិន​ត្រឹមត្រូវ។',
    'date'                   => ':Attribute គឺមិនមែនជាកាលបរិច្ឆេទត្រឹមត្រូវ។',
    'date_equals'            => ':Attribute ត្រូវតែជាកាលបរិច្ឆេទស្មើនឹង :date។',
    'date_format'            => ':Attribute មិនត្រឹមត្រូវនឹងទម្រង់ :format នេះ។',
    'decimal'                => 'លេខ :attribute ត្រូវតែមាន :decimal ខ្ទង់ទសភាគ។',
    'declined'               => ':Attribute ត្រូវតែត្រូវបានបដិសេធ។',
    'declined_if'            => ':Attribute ត្រូវតែត្រូវបានបដិសេធនៅពេលដែល :other គឺ :value ។',
    'different'              => ':Attribute និង :other ត្រូវតែបញ្ជាក់។',
    'digits'                 => ':Attribute ត្រូវជាខ្ទង់ :digits។',
    'digits_between'         => ':Attribute ត្រូវចាប់ពីខ្ទង់ :min ទៅ :max។',
    'dimensions'             => 'ទំហំរូបភាព​ :attribute មិនត្រឹមត្រូវ។',
    'distinct'               => ':Attribute មានតម្លៃស្ទួន។',
    'doesnt_end_with'        => ':Attribute ប្រហែលជាមិនបញ្ចប់ដោយមួយក្នុងចំណោមដូចខាងក្រោម: :values ។',
    'doesnt_start_with'      => ':Attribute ប្រហែលជាមិនចាប់ផ្តើមជាមួយមួយក្នុងចំណោមដូចខាងក្រោម: :values ។',
    'email'                  => ':Attribute ទម្រង់នេះមិនត្រឹមត្រូវ។',
    'ends_with'              => ':Attribute ត្រូវបញ្ចប់ដោយពាក្យមួយក្នុងចំណោម :values។',
    'enum'                   => ':Attribute ដែលបានជ្រើសរើសមិនត្រឹមត្រូវទេ។',
    'exists'                 => 'ការជ្រើសរើស :attribute ត្រឹមត្រូវ។',
    'extensions'             => 'វាលទាំង :attribute ត្រូវតែមានផ្នែកបន្ថែមមួយក្នុងចំណោមផ្នែកបន្ថែមខាងក្រោម: :values ។',
    'file'                   => ':Attribute ត្រូវតែជាប្រភេទឯកសារ។',
    'filled'                 => 'ទម្រង់ :attribute នេះគឺទាមទារឲ្យមាន។',
    'gt'                     => [
        'array'   => ':Attribute ត្រូវមានច្រើនជាង :value។',
        'file'    => ':Attribute ត្រូវតែធំជាង :value គីឡូបៃ។',
        'numeric' => ':Attribute ត្រូវតែធំជាង :value។',
        'string'  => ':Attribute ត្រូវតែធំជាង :value តួអក្សរ។',
    ],
    'gte'                    => [
        'array'   => ':Attribute ត្រូវមានចំនួន :value ឬច្រើនជាង។',
        'file'    => ':Attribute ត្រូវតែធំជាងឬស្មើ :value គីឡូបៃ។',
        'numeric' => ':Attribute ត្រូវតែធំជាងឬស្មើ :value។',
        'string'  => ':Attribute ត្រូវតែធំជាងឬស្មើ :value តួអក្សរ។',
    ],
    'hex_color'              => 'វាល :attribute ត្រូវតែជាពណ៌គោលដប់ប្រាំមួយត្រឹមត្រូវ។',
    'image'                  => ':Attribute ត្រូវតៃជារូបភាព។',
    'in'                     => 'ការជ្រើសរើស :attribute មិនត្រឹមត្រូវ។',
    'in_array'               => ':Attribute ត្រូវតែជាមួយក្នុងចំណោម :other។',
    'in_array_keys'          => 'វាលទាំង :attribute ត្រូវតែមានយ៉ាងហោចណាស់គ្រាប់ចុចមួយដូចខាងក្រោមៈ :values ។',
    'integer'                => ':Attribute ត្រូវតែជាចំនួនគត់។',
    'ip'                     => ':Attribute ត្រូវតែជា IP address ត្រឹមត្រូវ។',
    'ipv4'                   => ':Attribute ត្រូវតែជា IPv4 address ត្រឹមត្រូវ។',
    'ipv6'                   => ':Attribute ត្រូវតែជា IPv6 address ត្រឹមត្រូវ។',
    'json'                   => ':Attribute ត្រូវតែជា JSON string ត្រឹមត្រូវ។',
    'list'                   => 'វាលទាំង :attribute ត្រូវតែជាបញ្ជី។',
    'lowercase'              => 'លេខ :attribute ត្រូវតែជាអក្សរតូច។',
    'lt'                     => [
        'array'   => ':Attribute ត្រូវតែមានចំនួនតិចជាង :value។',
        'file'    => ':Attribute ត្រូវតែតិចជាង :value គីឡូបៃ។',
        'numeric' => ':Attribute ត្រូវតែតិចជាង :value។',
        'string'  => ':Attribute ត្រូវតែតិចជាង :value តួអក្សរ។',
    ],
    'lte'                    => [
        'array'   => ':Attribute ត្រូវមានចំនួនតិចជាង :value។',
        'file'    => ':Attribute ត្រូវតែតិចជាងឬស្មើ :value គីឡូបៃ។',
        'numeric' => ':Attribute ត្រូវតែតិចជាងឬស្មើ :value។',
        'string'  => ':Attribute ត្រូវតែតិចជាងឬស្មើ :value តួអក្សរ។',
    ],
    'mac_address'            => ':Attribute ត្រូវតែជាអាសយដ្ឋាន MAC ត្រឹមត្រូវ។',
    'max'                    => [
        'array'   => ':Attribute មិនត្រូវច្រើនជាងធាតុនេះ :max។',
        'file'    => ':Attribute មិនត្រូវធំជាង :max គីឡូបៃ។',
        'numeric' => ':Attribute មិនត្រូវធំជាង :max។',
        'string'  => ':Attribute មិនត្រូវធំជាង :max តួអក្សរ។',
    ],
    'max_digits'             => 'លេខ :attribute មិនត្រូវមានច្រើនជាង :max ខ្ទង់ទេ។',
    'mimes'                  => ':Attribute ត្រូវតែជាប្រភេទឯកសារប្រភេទ: :values នេះ។',
    'mimetypes'              => ':Attribute ត្រូវតែជាប្រភេទឯកសារប្រភេទ: :values នេះ។',
    'min'                    => [
        'array'   => ':Attribute ត្រូវតែតិចជាងធាតុនេះ :min។',
        'file'    => ':Attribute ត្រូវតៃតួចជាង :min គីឡូបៃ។',
        'numeric' => ':Attribute ត្រូវតែតូចជាង :min។',
        'string'  => ':Attribute ត្រូវតែតូចជាង :min តួអក្សរ។',
    ],
    'min_digits'             => 'លេខ :attribute ត្រូវតែមានយ៉ាងហោចណាស់ :min ខ្ទង់។',
    'missing'                => 'វាល :attribute ត្រូវតែបាត់។',
    'missing_if'             => 'វាល :attribute ត្រូវតែបាត់នៅពេលដែល :other គឺ :value ។',
    'missing_unless'         => 'វាល :attribute ត្រូវតែបាត់ លុះត្រាតែ :other គឺ :value។',
    'missing_with'           => 'វាល :attribute ត្រូវតែបាត់នៅពេលដែល :values មានវត្តមាន។',
    'missing_with_all'       => 'វាល :attribute ត្រូវតែបាត់នៅពេលដែល :values មានវត្តមាន។',
    'multiple_of'            => ':Attribute ត្រូវតែជាចំនួនចែកដាច់នឹង :value។',
    'not_in'                 => 'ការជ្រើសរើស :attribute គឺមិនត្រឹមត្រូវ។',
    'not_regex'              => ':Attribute ទម្រង់ គឺមិនត្រឹមត្រូវ។',
    'numeric'                => ':Attribute ត្រូវតែជាលេខ។',
    'password'               => [
        'letters'       => ':Attribute ត្រូវតែមានយ៉ាងហោចណាស់មួយអក្សរ។',
        'mixed'         => 'លេខ :attribute ត្រូវតែមានយ៉ាងហោចណាស់អក្សរធំមួយ និងអក្សរតូចមួយ។',
        'numbers'       => 'លេខ :attribute ត្រូវតែមានយ៉ាងហោចណាស់មួយលេខ។',
        'symbols'       => 'លេខ :attribute ត្រូវតែមានយ៉ាងហោចណាស់និមិត្តសញ្ញាមួយ។',
        'uncompromised' => ':Attribute ដែលបានផ្តល់ឱ្យបានបង្ហាញខ្លួននៅក្នុងការលេចធ្លាយទិន្នន័យ។ សូមជ្រើសរើស :attribute ផ្សេង។',
    ],
    'present'                => ':Attribute ត្រូវតែមាន។',
    'present_if'             => 'វាល :attribute ត្រូវតែមានវត្តមាននៅពេលដែល :other គឺ :value ។',
    'present_unless'         => 'វាល :attribute ត្រូវតែមានវត្តមាន លុះត្រាតែ :other គឺ :value ។',
    'present_with'           => 'វាល :attribute ត្រូវតែមានវត្តមាននៅពេលដែល :values មានវត្តមាន។',
    'present_with_all'       => 'វាល :attribute ត្រូវតែមានវត្តមាននៅពេលដែល :values មានវត្តមាន។',
    'prohibited'             => ':Attribute នេះត្រូវហាមឃាត់។',
    'prohibited_if'          => ':Attribute នេះត្រូវហាមឃាត់នៅពេលដែល :other គឺ :value។',
    'prohibited_if_accepted' => 'វាលទាំង :attribute ត្រូវបានហាមឃាត់នៅពេលដែល :other ត្រូវបានទទួលយក។',
    'prohibited_if_declined' => 'វាលទាំង :attribute ត្រូវបានហាមឃាត់នៅពេល :other ត្រូវបានបដិសេធ។',
    'prohibited_unless'      => ':Attribute នេះត្រូវហាមឃាត់លុះត្រា :other គឺនៅក្នុង :values។',
    'prohibits'              => 'វាល :attribute ហាមឃាត់ :other មិនឱ្យមានវត្តមាន។',
    'regex'                  => ':Attribute ទម្រង់មិនត្រឹមត្រូវ។',
    'required'               => ':Attribute នេះគឺទាមទារឲ្យមាន។',
    'required_array_keys'    => 'វាល :attribute ត្រូវតែមានធាតុសម្រាប់: :values ។',
    'required_if'            => ':Attribute នេះគឺទាមទារនៅពេល :other គឺ :value។',
    'required_if_accepted'   => 'វាល :attribute ត្រូវបានទាមទារនៅពេលដែល :other ត្រូវបានទទួលយក។',
    'required_if_declined'   => 'វាល :attribute ត្រូវបានទាមទារនៅពេលដែល :other ត្រូវបានបដិសេធ។',
    'required_unless'        => ':Attribute នេះគឺទាមទារនៅពេល :other មិនមែន :values។',
    'required_with'          => ':Attribute នេះគឺទាមទារនៅពេល :values មាន។',
    'required_with_all'      => ':Attribute នេះគឺទាមទារនៅពេល :values មាន។',
    'required_without'       => ':Attribute នេះគឺទាមទារនៅពេល :values មិនមាន។',
    'required_without_all'   => ':Attribute នេះគឺត្រូវបានទាមទារពេល :values មិនមាន។',
    'same'                   => ':Attribute និង :other ត្រូវតែដូចគ្នា។',
    'size'                   => [
        'array'   => ':Attribute ត្រូវតែមានទំហំ :size។',
        'file'    => ':Attribute ត្រូវតែ :size គីឡូបៃ។',
        'numeric' => ':Attribute ត្រូវតែ :size។',
        'string'  => ':Attribute ត្រូវតែ :size តួអក្សរ។',
    ],
    'starts_with'            => ':Attribute ត្រូវចាប់ផ្តើមដោយ :values ណាមួយ។',
    'string'                 => ':Attribute ត្រូវតែជាប្រភេទតួអក្សរ។',
    'timezone'               => ':Attribute ត្រូវតែជាតំបន់ដែលត្រឹមត្រូវ។',
    'ulid'                   => ':Attribute ត្រូវតែជា ULID ត្រឹមត្រូវ។',
    'unique'                 => ':Attribute ត្រូវបានប្រើរួចហើយ។',
    'uploaded'               => ':Attribute បរាជ័យក្នុងការបញ្ចូល។',
    'uppercase'              => 'លេខ :attribute ត្រូវតែជាអក្សរធំ។',
    'url'                    => ':Attribute ទម្រង់ត្រឹមត្រូវ។',
    'uuid'                   => ':Attribute ត្រូវតែជាទម្រង់ UUID។',
];
