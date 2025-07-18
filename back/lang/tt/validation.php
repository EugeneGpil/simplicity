<?php

declare(strict_types=1);

return [
    'accepted'               => ':attribute кабул ителергә тиеш.',
    'accepted_if'            => ':otherсе :value булганда кабул ителергә тиеш.',
    'active_url'             => ':attribute дөрес URL түгел.',
    'after'                  => ':attribute :date дән соң дата булырга тиеш.',
    'after_or_equal'         => ':attribute датадан соң яки ​​:dateгә тигез булырга тиеш.',
    'alpha'                  => ':attributeда хәрефләр генә булырга тиеш.',
    'alpha_dash'             => ':attributeда хәрефләр, саннар, сызыклар һәм аскы сызыклар гына булырга тиеш.',
    'alpha_num'              => ':attributeда хәрефләр һәм саннар гына булырга тиеш.',
    'any_of'                 => ':attribute кыр дөрес түгел.',
    'array'                  => ':attribute массив булырга тиеш.',
    'ascii'                  => ':attribute кырда бер байтак хәреф саннары һәм символлары булырга тиеш.',
    'before'                 => ':attribute датага кадәр :date көн булырга тиеш.',
    'before_or_equal'        => ':attribute датага кадәр яки :dateгә тигез булырга тиеш.',
    'between'                => [
        'array'   => ':attributeда :min-:max әйбер булырга тиеш.',
        'file'    => ':attribute :min-:max килобайт арасында булырга тиеш.',
        'numeric' => ':attribute :min белән :max арасында булырга тиеш.',
        'string'  => ':attribute :min-:max символ арасында булырга тиеш.',
    ],
    'boolean'                => ':attribute кыр дөрес яки ялган булырга тиеш.',
    'can'                    => ':attribute кырда рөхсәтсез кыйммәт бар.',
    'confirmed'              => ':attribute раслау туры килми.',
    'contains'               => ':attribute кырда кирәкле кыйммәт юк.',
    'current_password'       => 'Серсүз дөрес түгел.',
    'date'                   => ':attribute - дөрес дата түгел.',
    'date_equals'            => ':attribute датага :date булырга тиеш.',
    'date_format'            => ':attribute :format форматына туры килми.',
    'decimal'                => ':attribute кырда :decimal дистә урын булырга тиеш.',
    'declined'               => ':attribute баш тартырга тиеш.',
    'declined_if'            => ':other яшь :value булганда кире кагылырга тиеш.',
    'different'              => ':attribute һәм :other төрле булырга тиеш.',
    'digits'                 => ':attribute цифр булырга тиеш.',
    'digits_between'         => ':attribute :min-:max сан арасында булырга тиеш.',
    'dimensions'             => ':attributeның рәсем үлчәмнәре дөрес түгел.',
    'distinct'               => ':attribute кырның икеләтә кыйммәте бар.',
    'doesnt_end_with'        => ':attribute кыр түбәндәгеләрнең берсе белән тәмамланырга тиеш түгел: :values.',
    'doesnt_start_with'      => ':attribute кыр түбәндәгеләрнең берсе белән башланырга тиеш түгел: :values.',
    'email'                  => ':attribute дөрес электрон почта адресы булырга тиеш.',
    'ends_with'              => ':attribute түбәндәгеләрнең берсе белән тәмамланырга тиеш: :values.',
    'enum'                   => 'Сайланган :attribute дөрес түгел.',
    'exists'                 => 'Сайланган :attribute дөрес түгел.',
    'extensions'             => ':attribute кырда түбәндәге киңәйтүләрнең берсе булырга тиеш: :values.',
    'file'                   => ':attribute файл булырга тиеш.',
    'filled'                 => ':attribute кырның кыйммәте булырга тиеш.',
    'gt'                     => [
        'array'   => ':attributeда :value дән артык әйбер булырга тиеш.',
        'file'    => ':attributeсы :value килобайттан зуррак булырга тиеш.',
        'numeric' => ':attribute :value дән зуррак булырга тиеш.',
        'string'  => ':attribute символдан зуррак булырга тиеш.',
    ],
    'gte'                    => [
        'array'   => ':attributeда :value әйбер яки күбрәк булырга тиеш.',
        'file'    => ':attribute :value килобайттан зуррак яки тигез булырга тиеш.',
        'numeric' => ':attribute дан :value дән зуррак яки тигез булырга тиеш.',
        'string'  => ':attribute символдан зуррак яки тигез булырга тиеш.',
    ],
    'hex_color'              => ':attribute кыр дөрес алты почмаклы төс булырга тиеш.',
    'image'                  => ':attribute образ булырга тиеш.',
    'in'                     => 'Сайланган :attribute дөрес түгел.',
    'in_array'               => ':attribute кыр :otherдә юк.',
    'in_array_keys'          => ':attribute кырда түбәндәгеләрнең ким дигәндә берсе булырга тиеш: :values.',
    'integer'                => ':attribute бөтен сан булырга тиеш.',
    'ip'                     => ':attribute дөрес IP адрес булырга тиеш.',
    'ipv4'                   => ':attribute дөрес IPv4 адресы булырга тиеш.',
    'ipv6'                   => ':attribute дөрес IPv6 адресы булырга тиеш.',
    'json'                   => ':attribute дөрес JSON сызыгы булырга тиеш.',
    'list'                   => ':attribute кыр исемлек булырга тиеш.',
    'lowercase'              => ':attribute кыр кечкенә хәреф булырга тиеш.',
    'lt'                     => [
        'array'   => ':attributeда :value әйбердән ким булырга тиеш.',
        'file'    => ':attributeсы :value килобайттан ким булырга тиеш.',
        'numeric' => ':attribute :value дән ким булырга тиеш.',
        'string'  => ':attribute символ :value символдан ким булырга тиеш.',
    ],
    'lte'                    => [
        'array'   => ':attributeда :value дән артык әйбер булырга тиеш түгел.',
        'file'    => ':attribute :value килобайттан ким яки тигез булырга тиеш.',
        'numeric' => ':attribute :value дән ким яки тигез булырга тиеш.',
        'string'  => ':attribute символдан ким яки тигез булырга тиеш.',
    ],
    'mac_address'            => ':attribute дөрес MAC адресы булырга тиеш.',
    'max'                    => [
        'array'   => ':attributeда :max дән артык әйбер булырга тиеш түгел.',
        'file'    => ':attribute :max килобайттан зур булырга тиеш түгел.',
        'numeric' => ':attribute дан :max дән артмаска тиеш.',
        'string'  => ':attribute символдан артмаска тиеш.',
    ],
    'max_digits'             => ':attribute кырда :max саннан артык булырга тиеш түгел.',
    'mimes'                  => ':attribute тип файл булырга тиеш: :values.',
    'mimetypes'              => ':attribute тип файл булырга тиеш: :values.',
    'min'                    => [
        'array'   => ':attributeда ким дигәндә :min әйбер булырга тиеш.',
        'file'    => ':attribute ким дигәндә :min килобайт булырга тиеш.',
        'numeric' => ':attribute ким дигәндә :min булырга тиеш.',
        'string'  => ':attribute ким дигәндә :min символ булырга тиеш.',
    ],
    'min_digits'             => ':attribute кырда ким дигәндә :min сан булырга тиеш.',
    'missing'                => ':attribute кыр юкка чыгарга тиеш.',
    'missing_if'             => ':other кыр :value булганда :attribute кыр юкка чыгарга тиеш.',
    'missing_unless'         => ':other кыр :value булмаса, :attribute кыр юкка чыгарга тиеш.',
    'missing_with'           => ':values булганда :attribute кыр юкка чыгарга тиеш.',
    'missing_with_all'       => ':values булганда :attribute кыр юкка чыгарга тиеш.',
    'multiple_of'            => ':attribute - :valueдән берничә булырга тиеш.',
    'not_in'                 => 'Сайланган :attribute дөрес түгел.',
    'not_regex'              => ':attribute формат дөрес түгел.',
    'numeric'                => ':attribute сан булырга тиеш.',
    'password'               => [
        'letters'       => ':attribute кырда ким дигәндә бер хәреф булырга тиеш.',
        'mixed'         => ':attribute кырда ким дигәндә бер баш хәреф һәм бер кечкенә хәреф булырга тиеш.',
        'numbers'       => ':attribute кырда ким дигәндә бер сан булырга тиеш.',
        'symbols'       => ':attribute кырда ким дигәндә бер символ булырга тиеш.',
        'uncompromised' => 'Бирелгән :attribute мәгълүмат агып чыккан. Зинһар, бүтән :attributeны сайлагыз.',
    ],
    'present'                => ':attribute кыр булырга тиеш.',
    'present_if'             => ':other кыр :value булганда :attribute кыр булырга тиеш.',
    'present_unless'         => ':other кыр :value булмаса, :attribute кыр булырга тиеш.',
    'present_with'           => ':values булганда :values кыр булырга тиеш.',
    'present_with_all'       => ':values булганда :values кыр булырга тиеш.',
    'prohibited'             => ':attribute кыр тыелган.',
    'prohibited_if'          => ':other кыр :value булганда :attribute кыр тыела.',
    'prohibited_if_accepted' => ':other кабул ителгәч, :attribute кыр тыелган.',
    'prohibited_if_declined' => ':otherгә кимегәндә :attribute кыр тыела.',
    'prohibited_unless'      => ':other кыр :valuesда булмаса, :attribute кыр тыела.',
    'prohibits'              => ':attribute кыр :other кешенең булуын тыя.',
    'regex'                  => ':attribute формат дөрес түгел.',
    'required'               => ':attribute кыр кирәк.',
    'required_array_keys'    => ':attribute кырда язмалар булырга тиеш: :values.',
    'required_if'            => ':other кыр :value булганда :attribute кыр кирәк.',
    'required_if_accepted'   => ':other кабул ителгәндә :attribute кыр кирәк.',
    'required_if_declined'   => ':other баш тартканда :attribute кыр кирәк.',
    'required_unless'        => ':other кыр :valuesда булмаса, :attribute кыр кирәк.',
    'required_with'          => ':values булганда :attribute кыр кирәк.',
    'required_with_all'      => ':values булганда :attribute кыр кирәк.',
    'required_without'       => ':values булмаганда :attribute кыр кирәк.',
    'required_without_all'   => ':values кырның берсе булмаганда :attribute кыр кирәк.',
    'same'                   => ':attribute һәм :other туры килергә тиеш.',
    'size'                   => [
        'array'   => ':attributeда :size әйбер булырга тиеш.',
        'file'    => ':attribute килобайт булырга тиеш.',
        'numeric' => ':attribute :size булырга тиеш.',
        'string'  => ':attribute символ булырга тиеш.',
    ],
    'starts_with'            => ':attribute түбәндәгеләрнең берсе белән башланырга тиеш: :values.',
    'string'                 => ':attribute юл булырга тиеш.',
    'timezone'               => ':attribute дөрес вакыт зонасы булырга тиеш.',
    'ulid'                   => ':attribute кыр дөрес ULID булырга тиеш.',
    'unique'                 => ':attributeсы алынды инде.',
    'uploaded'               => ':attribute йөкли алмады.',
    'uppercase'              => ':attribute кыр зур хәреф булырга тиеш.',
    'url'                    => ':attribute дөрес URL булырга тиеш.',
    'uuid'                   => ':attribute дөрес UUID булырга тиеш.',
];
