<?php

declare(strict_types=1);

return [
    'accepted'               => 'Abayi-:attribute kumele bamukelwe.',
    'accepted_if'            => 'Abayi-:attribute kufanele bamukelwe lapho ama-:other esengama-:value.',
    'active_url'             => 'I-:attribute akuyona i-URL evumelekile.',
    'after'                  => 'I-:attribute kufanele ibe idethi engemuva kwama-:date.',
    'after_or_equal'         => 'I-:attribute kufanele ibe idethi engemuva noma elingana no-:date.',
    'alpha'                  => 'Eziyi-:attribute kufanele zibe nezinhlamvu kuphela.',
    'alpha_dash'             => 'I-:attribute kufanele ibe nezinhlamvu, izinombolo, amadeshi nama-underscore kuphela.',
    'alpha_num'              => 'I-:attribute kufanele ibe nezinhlamvu nezinombolo kuphela.',
    'any_of'                 => 'Insimu eyi-:attribute ayivumelekile.',
    'array'                  => 'I-:attribute kufanele ibe yilungu elifanayo.',
    'ascii'                  => 'Inkambu engu-:attribute kufanele ibe nezinhlamvu ze-alphanumeric zebhayithi eyodwa kuphela namasimbuli.',
    'before'                 => 'I-:attribute kufanele ibe idethi engaphambi kuka-:date.',
    'before_or_equal'        => 'I-:attribute kufanele ibe idethi engaphambi noma elingana no-:date.',
    'between'                => [
        'array'   => 'Abayi-:attribute kumele babe nezinto eziphakathi kuka-:min no-:max.',
        'file'    => 'I-:attribute kufanele ibe phakathi kwamakhilobhayithi angama-:min no-:max.',
        'numeric' => 'Abayi-:attribute kumele babe phakathi kuka-:min no-:max.',
        'string'  => 'I-:attribute kufanele ibe phakathi kwezinhlamvu ezingu-:min nezingu-:max.',
    ],
    'boolean'                => 'Inkambu ye-:attribute kufanele ibe yiqiniso noma amanga.',
    'can'                    => 'Inkambu engu-:attribute iqukethe inani elingagunyaziwe.',
    'confirmed'              => 'Ukuqinisekiswa kwe-:attribute akufani.',
    'contains'               => 'Inkambu engu-:attribute ishoda ngenani elidingekayo.',
    'current_password'       => 'Iphasiwedi ayilungile.',
    'date'                   => 'I-:attribute akulona idethi evumelekile.',
    'date_equals'            => 'I-:attribute kufanele kube idethi elingana no-:date.',
    'date_format'            => 'I-:attribute ayifani nefomethi engu-:format.',
    'decimal'                => 'Inkambu ye-:attribute kufanele ibe nezindawo zamadesimali ezingama-:decimal.',
    'declined'               => 'Abayi-:attribute kumele banqatshwe.',
    'declined_if'            => 'Abayi-:attribute kumele banqatshwe uma ama-:other esengama-:value.',
    'different'              => 'I-:attribute kanye ne-:other kufanele ihluke.',
    'digits'                 => 'I-:attribute kufanele ibe amadijithi angama-:digits.',
    'digits_between'         => 'I-:attribute kufanele ibe phakathi kwamadijithi angama-:min kuya kwangu-:max.',
    'dimensions'             => 'I-:attribute inobukhulu besithombe obungavumelekile.',
    'distinct'               => 'Inkambu engu-:attribute inenani eliyimpinda.',
    'doesnt_end_with'        => 'Inkundla ye-:attribute akumele igcine ngokukodwa kwalokhu okulandelayo: :values.',
    'doesnt_start_with'      => 'Inkundla ye-:attribute akumele iqale ngokukodwa kwalokhu okulandelayo: :values.',
    'email'                  => 'I-:attribute kufanele ibe ikheli le-imeyili elivumelekile.',
    'ends_with'              => 'Abayi-:attribute kumele bagcine ngokukodwa kwalokhu okulandelayo: :values.',
    'enum'                   => 'Okukhethiwe okungu-:attribute akuvumelekile.',
    'exists'                 => 'Okukhethiwe okungu-:attribute akuvumelekile.',
    'extensions'             => 'Inkambu ye-:attribute kufanele ibe nesandiso esisodwa kwezilandelayo: :values.',
    'file'                   => 'I-:attribute kufanele ibe ifayela.',
    'filled'                 => 'Inkambu ye-:attribute kufanele ibe nenani.',
    'gt'                     => [
        'array'   => 'Abayi-:attribute kumele babe nezinto ezingaphezu kwama-:value.',
        'file'    => 'I-:attribute kufanele ibe ngaphezu kwamakhilobhayithi angama-:value.',
        'numeric' => 'Okuyi-:attribute kufanele kube kukhulu kunama-:value.',
        'string'  => 'I-:attribute kufanele ibe nezinhlamvu ezingaphezu kwezingu-:value.',
    ],
    'gte'                    => [
        'array'   => 'Abayi-:attribute kumele babe nezinto ezingama-:value noma ngaphezulu.',
        'file'    => 'I-:attribute kufanele ibe nkulu noma ilingane namakhilobhayithi angama-:value.',
        'numeric' => 'U-:attribute kufanele abe mkhulu noma alingane no-:value.',
        'string'  => 'U-:attribute kumelwe abe mkhulu noma alingane nezinhlamvu ezingu-:value.',
    ],
    'hex_color'              => 'Inkambu ye-:attribute kufanele ibe umbala ovumelekile we-hexadecimal.',
    'image'                  => 'I-:attribute kufanele ibe isithombe.',
    'in'                     => 'Okukhethiwe okungu-:attribute akuvumelekile.',
    'in_array'               => 'Inkambu ye-:attribute ayikho ku-:other.',
    'in_array_keys'          => 'Inkambu eyi-:attribute kufanele ibe okungenani nenye yezinkinobho ezilandelayo: :values.',
    'integer'                => 'U-:attribute kufanele ube inombolo ephelele.',
    'ip'                     => 'I-:attribute kufanele ibe ikheli le-IP elivumelekile.',
    'ipv4'                   => 'I-:attribute kufanele kube ikheli le-IPv4 elivumelekile.',
    'ipv6'                   => 'I-:attribute kufanele kube ikheli le-IPv6 elivumelekile.',
    'json'                   => 'Okungu-:attribute kufanele kube uchungechunge oluvumelekile lwe-JSON.',
    'list'                   => 'Inkambu ye-:attribute kufanele ibe uhlu.',
    'lowercase'              => 'Inkambu engu-:attribute kufanele ibe ngofeleba abancane.',
    'lt'                     => [
        'array'   => 'Abayi-:attribute kumele babe nezinto ezingaphansi kwama-:value.',
        'file'    => 'I-:attribute kumele ibe ngaphansi kwamakhilobhayithi angama-:value.',
        'numeric' => 'Abayi-:attribute kumele babe ngaphansi kwama-:value.',
        'string'  => 'I-:attribute kufanele ibe nezinhlamvu ezingaphansi kwezingu-:value.',
    ],
    'lte'                    => [
        'array'   => 'Abayi-:attribute akumele babe nezinto ezingaphezu kwama-:value.',
        'file'    => 'I-:attribute kufanele ibe ngaphansi noma ilingane namakhilobhayithi angama-:value.',
        'numeric' => 'I-:attribute kumele ibe ngaphansi noma ilingane no-:value.',
        'string'  => 'I-:attribute kufanele ibe ngaphansi noma ilingane nezinhlamvu ezingu-:value.',
    ],
    'mac_address'            => 'I-:attribute kufanele ibe yikheli le-MAC elivumelekile.',
    'max'                    => [
        'array'   => 'Abayi-:attribute akumele babe nezinto ezingaphezu kwama-:max.',
        'file'    => 'I-:attribute akumele ibe ngaphezu kwamakhilobhayithi angama-:max.',
        'numeric' => 'I-:attribute akufanele ibe ngaphezu kwama-:max.',
        'string'  => 'I-:attribute akufanele ibe ngaphezu kwezinhlamvu ezingu-:max.',
    ],
    'max_digits'             => 'Inkambu ye-:attribute akufanele ibe namadijithi angaphezu kuka-:max.',
    'mimes'                  => 'I-:attribute kufanele ibe yifayela lohlobo: :values.',
    'mimetypes'              => 'I-:attribute kufanele ibe yifayela lohlobo: :values.',
    'min'                    => [
        'array'   => 'Abayi-:attribute kumele okungenani babe nezinto ezingama-:min.',
        'file'    => 'I-:attribute kumele okungenani ibe ngamakhilobhayithi angama-:min.',
        'numeric' => 'Abayi-:attribute kumele okungenani babe ngama-:min.',
        'string'  => 'I-:attribute kufanele okungenani ibe izinhlamvu ezingu-:min.',
    ],
    'min_digits'             => 'Inkambu ye-:attribute kufanele okungenani ibe namadijithi angama-:min.',
    'missing'                => 'Inkambu ye-:attribute kufanele ingekho.',
    'missing_if'             => 'Inkundla ye-:attribute kufanele ingekho lapho u-:other engu-:value.',
    'missing_unless'         => 'Inkambu ye-:attribute kufanele ingekho ngaphandle uma u-:other engu-:value.',
    'missing_with'           => 'Inkambu ye-:attribute kufanele ingekho lapho u-:values ekhona.',
    'missing_with_all'       => 'Inkambu ye-:attribute kufanele ingekho uma bekhona abangu-:values.',
    'multiple_of'            => 'I-:attribute kufanele ibe yi-multiple of :value.',
    'not_in'                 => 'Okukhethiwe okungu-:attribute akuvumelekile.',
    'not_regex'              => 'Ifomethi ye-:attribute ayivumelekile.',
    'numeric'                => 'U-:attribute kufanele kube inombolo.',
    'password'               => [
        'letters'       => 'Inkambu ye-:attribute kufanele iqukathe okungenani uhlamvu olulodwa.',
        'mixed'         => 'Inkambu ye-:attribute kufanele okungenani ibe nofeleba oyedwa oyedwa kanye nosonhlamvukazi oyedwa.',
        'numbers'       => 'Inkambu ye-:attribute kufanele iqukathe okungenani inombolo eyodwa.',
        'symbols'       => 'Inkambu ye-:attribute kufanele iqukathe okungenani uphawu olulodwa.',
        'uncompromised' => 'I-:attribute enikeziwe ivele ekuputshuzweni kwedatha. Sicela ukhethe okuhlukile okungu-:attribute.',
    ],
    'present'                => 'Inkambu ye-:attribute kufanele ibe khona.',
    'present_if'             => 'Inkambu ye-:attribute kufanele ibe khona lapho u-:other engu-:value.',
    'present_unless'         => 'Inkundla ye-:attribute kufanele ibe khona ngaphandle uma ama-:other engama-:value.',
    'present_with'           => 'Inkambu ye-:attribute kufanele ibe khona uma i-:values ikhona.',
    'present_with_all'       => 'Inkambu ye-:attribute kufanele ibe khona uma bekhona abangu-:values.',
    'prohibited'             => 'Inkambu ye-:attribute ayivunyelwe.',
    'prohibited_if'          => 'Inkambu ye-:attribute ayivunyelwe uma u-:other engama-:value.',
    'prohibited_if_accepted' => 'Inkambu eyi-:attribute yenqatshelwe lapho kumukelwa :other.',
    'prohibited_if_declined' => 'Inkambu eyi-:attribute yenqatshelwe lapho kunqabile :other.',
    'prohibited_unless'      => 'Inkambu ye-:attribute ayivunyelwe ngaphandle kokuthi u-:other e-:values.',
    'prohibits'              => 'Inkundla ye-:attribute ivimbela abangu-:other ukuba babe khona.',
    'regex'                  => 'Ifomethi ye-:attribute ayivumelekile.',
    'required'               => 'Kudingeka inkambu engu-:attribute.',
    'required_array_keys'    => 'Inkambu ye-:attribute kufanele iqukathe okufakiwe kwalokhu: :values.',
    'required_if'            => 'Inkambu ye-:attribute iyadingeka uma u-:other engu-:value.',
    'required_if_accepted'   => 'Inkambu engu-:attribute iyadingeka uma ezingu-:other zamukelwe.',
    'required_if_declined'   => 'Inkambu engu-:attribute iyadingeka uma okungu-:other kwenqatshwa.',
    'required_unless'        => 'Inkambu engu-:attribute iyadingeka ngaphandle uma u-:other eku-:values.',
    'required_with'          => 'Inkambu ye-:attribute iyadingeka uma u-:values ekhona.',
    'required_with_all'      => 'Inkambu engu-:attribute iyadingeka uma bekhona abangu-:values.',
    'required_without'       => 'Inkambu ye-:attribute iyadingeka uma u-:values engekho.',
    'required_without_all'   => 'Inkambu engu-:attribute iyadingeka uma kungekho kwabangu-:values abakhona.',
    'same'                   => 'U-:attribute no-:other kufanele afane.',
    'size'                   => [
        'array'   => 'Eziyi-:attribute kufanele zibe nezinto ezingama-:size.',
        'file'    => 'I-:attribute kufanele ibe ngamakhilobhayithi angama-:size.',
        'numeric' => 'Abayi-:attribute kumele babe ngama-:size.',
        'string'  => 'I-:attribute kumele ibe yizinhlamvu ezingu-:size.',
    ],
    'starts_with'            => 'Abayi-:attribute kumele baqale ngokukodwa kwalokhu okulandelayo: :values.',
    'string'                 => 'I-:attribute kufanele ibe iyunithi yezinhlamvu.',
    'timezone'               => 'I-:attribute kufanele ibe izoni yesikhathi evumelekile.',
    'ulid'                   => 'Inkambu ye-:attribute kufanele ibe yi-ULID evumelekile.',
    'unique'                 => 'Eziyi-:attribute sezithathiwe.',
    'uploaded'               => 'Eziyi-:attribute zehlulekile ukulayisha.',
    'uppercase'              => 'Inkambu ye-:attribute kumele ibe ngosonhlamvukazi.',
    'url'                    => 'I-:attribute kufanele ibe i-URL evumelekile.',
    'uuid'                   => 'I-:attribute kufanele ibe i-UUID evumelekile.',
];
