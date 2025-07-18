<?php

declare(strict_types=1);

return [
    'accepted'               => ':attribute അംഗീകരിക്കണം.',
    'accepted_if'            => ':other :value ആകുമ്പോൾ :attribute അംഗീകരിക്കണം.',
    'active_url'             => ':attribute ഒരു സാധുവായ URL അല്ല.',
    'after'                  => ':attribute എന്നത് :date-ന് ശേഷമുള്ള തീയതിയായിരിക്കണം.',
    'after_or_equal'         => ':attribute എന്നത് :date-ന് ശേഷമുള്ള തീയതിയോ അതിന് തുല്യമോ ആയിരിക്കണം.',
    'alpha'                  => ':attribute-ൽ അക്ഷരങ്ങൾ മാത്രം അടങ്ങിയിരിക്കണം.',
    'alpha_dash'             => ':attribute-ൽ അക്ഷരങ്ങൾ, അക്കങ്ങൾ, ഡാഷുകൾ, അടിവരകൾ എന്നിവ മാത്രമേ അടങ്ങിയിരിക്കാവൂ.',
    'alpha_num'              => ':attribute-ൽ അക്ഷരങ്ങളും അക്കങ്ങളും മാത്രമേ ഉണ്ടാകാവൂ.',
    'any_of'                 => ':attribute ഫീൽഡ് അസാധുവാണ്.',
    'array'                  => ':attribute ഒരു അറേ ആയിരിക്കണം.',
    'ascii'                  => ':attribute ഫീൽഡിൽ ഒറ്റ-ബൈറ്റ് ആൽഫാന്യൂമെറിക് പ്രതീകങ്ങളും ചിഹ്നങ്ങളും മാത്രമേ അടങ്ങിയിരിക്കാവൂ.',
    'before'                 => ':attribute എന്നത് :date-ന് മുമ്പുള്ള തീയതിയായിരിക്കണം.',
    'before_or_equal'        => ':attribute എന്നത് :date-ന് മുമ്പുള്ളതോ അതിന് തുല്യമായതോ ആയിരിക്കണം.',
    'between'                => [
        'array'   => ':attribute-ൽ :min-നും :max-നും ഇടയിൽ ഇനങ്ങൾ ഉണ്ടായിരിക്കണം.',
        'file'    => ':attribute :min നും :max നും ഇടയിലായിരിക്കണം.',
        'numeric' => ':attribute എണ്ണം :min നും :max നും ഇടയിലായിരിക്കണം.',
        'string'  => ':attribute അക്ഷരങ്ങൾ :min-നും :max-നും ഇടയിലായിരിക്കണം.',
    ],
    'boolean'                => ':attribute ഫീൽഡ് ശരിയോ തെറ്റോ ആയിരിക്കണം.',
    'can'                    => ':attribute ഫീൽഡിൽ ഒരു അനധികൃത മൂല്യം അടങ്ങിയിരിക്കുന്നു.',
    'confirmed'              => ':attribute സ്ഥിരീകരണം പൊരുത്തപ്പെടുന്നില്ല.',
    'contains'               => ':attribute ഫീൽഡിന് ആവശ്യമായ മൂല്യം നഷ്‌ടമായിരിക്കുന്നു.',
    'current_password'       => 'പാസ്‌വേഡ് തെറ്റാണ്.',
    'date'                   => ':attribute ഒരു സാധുവായ തീയതിയല്ല.',
    'date_equals'            => ':attribute എന്നത് :date-ന് തുല്യമായ തീയതി ആയിരിക്കണം.',
    'date_format'            => ':format ഫോർമാറ്റുമായി :attribute പൊരുത്തപ്പെടുന്നില്ല.',
    'decimal'                => ':attribute ഫീൽഡിന് :decimal ദശാംശ സ്ഥാനങ്ങൾ ഉണ്ടായിരിക്കണം.',
    'declined'               => ':attribute നിരസിക്കണം.',
    'declined_if'            => ':other :value ആകുമ്പോൾ :attribute നിരസിക്കണം.',
    'different'              => ':attribute ഉം :other ഉം വ്യത്യസ്തമായിരിക്കണം.',
    'digits'                 => ':attribute എന്നത് :digits അക്കങ്ങളായിരിക്കണം.',
    'digits_between'         => ':attribute അക്കങ്ങൾ :min നും :max നും ഇടയിലായിരിക്കണം.',
    'dimensions'             => ':attribute-ന് അസാധുവായ ഇമേജ് അളവുകൾ ഉണ്ട്.',
    'distinct'               => ':attribute ഫീൽഡിന് ഡ്യൂപ്ലിക്കേറ്റ് മൂല്യമുണ്ട്.',
    'doesnt_end_with'        => ':attribute ഫീൽഡ് ഇനിപ്പറയുന്നതിൽ ഒന്നിൽ അവസാനിക്കരുത്: :values.',
    'doesnt_start_with'      => ':attribute ഫീൽഡ് ഇനിപ്പറയുന്നതിൽ ഒന്നിൽ നിന്ന് ആരംഭിക്കരുത്: :values.',
    'email'                  => ':attribute സാധുവായ ഇമെയിൽ വിലാസമായിരിക്കണം.',
    'ends_with'              => ':attribute ഇനിപ്പറയുന്നതിൽ ഒന്നിൽ അവസാനിക്കണം: :values.',
    'enum'                   => 'തിരഞ്ഞെടുത്ത :attribute അസാധുവാണ്.',
    'exists'                 => 'തിരഞ്ഞെടുത്ത :attribute അസാധുവാണ്.',
    'extensions'             => ':attribute ഫീൽഡിന് ഇനിപ്പറയുന്ന വിപുലീകരണങ്ങളിൽ ഒന്ന് ഉണ്ടായിരിക്കണം: :values.',
    'file'                   => ':attribute ഒരു ഫയൽ ആയിരിക്കണം.',
    'filled'                 => ':attribute ഫീൽഡിന് ഒരു മൂല്യം ഉണ്ടായിരിക്കണം.',
    'gt'                     => [
        'array'   => ':attribute-ൽ :value-ലധികം ഇനങ്ങൾ ഉണ്ടായിരിക്കണം.',
        'file'    => ':attribute :value കിലോബൈറ്റിൽ കൂടുതലായിരിക്കണം.',
        'numeric' => ':attribute എന്നത് :value-ൽ കൂടുതലായിരിക്കണം.',
        'string'  => ':attribute എന്നത് :value പ്രതീകങ്ങളിൽ കൂടുതലായിരിക്കണം.',
    ],
    'gte'                    => [
        'array'   => ':attribute ന് :value അല്ലെങ്കിൽ അതിൽ കൂടുതൽ ഇനങ്ങൾ ഉണ്ടായിരിക്കണം.',
        'file'    => ':attribute എന്നത് :value കിലോബൈറ്റിനേക്കാൾ വലുതോ അതിന് തുല്യമോ ആയിരിക്കണം.',
        'numeric' => ':attribute എന്നത് :value-നേക്കാൾ വലുതോ തുല്യമോ ആയിരിക്കണം.',
        'string'  => ':attribute എന്നത് :value പ്രതീകങ്ങളേക്കാൾ വലുതോ തുല്യമോ ആയിരിക്കണം.',
    ],
    'hex_color'              => ':attribute ഫീൽഡ് സാധുവായ ഹെക്സാഡെസിമൽ വർണ്ണമായിരിക്കണം.',
    'image'                  => ':attribute ഒരു ചിത്രമായിരിക്കണം.',
    'in'                     => 'തിരഞ്ഞെടുത്ത :attribute അസാധുവാണ്.',
    'in_array'               => ':attribute ഫീൽഡ് :other-ൽ നിലവിലില്ല.',
    'in_array_keys'          => ':attribute ഫീൽഡിൽ ഇനിപ്പറയുന്ന കീകളിലൊന്നെങ്കിലും അടങ്ങിയിരിക്കണം: :values.',
    'integer'                => ':attribute ഒരു പൂർണ്ണസംഖ്യയായിരിക്കണം.',
    'ip'                     => ':attribute സാധുതയുള്ള IP വിലാസമായിരിക്കണം.',
    'ipv4'                   => ':attribute സാധുവായ IPv4 വിലാസമായിരിക്കണം.',
    'ipv6'                   => ':attribute സാധുവായ IPv6 വിലാസമായിരിക്കണം.',
    'json'                   => ':attribute സാധുതയുള്ള JSON സ്ട്രിംഗ് ആയിരിക്കണം.',
    'list'                   => ':attribute ഫീൽഡ് ഒരു ലിസ്റ്റ് ആയിരിക്കണം.',
    'lowercase'              => ':attribute ഫീൽഡ് ചെറിയക്ഷരം ആയിരിക്കണം.',
    'lt'                     => [
        'array'   => ':attribute-ൽ :value-ൽ താഴെ ഇനങ്ങൾ ഉണ്ടായിരിക്കണം.',
        'file'    => ':attribute എന്നത് :value കിലോബൈറ്റിൽ കുറവായിരിക്കണം.',
        'numeric' => ':attribute എന്നത് :value-ൽ കുറവായിരിക്കണം.',
        'string'  => ':attribute എന്നത് :value പ്രതീകങ്ങളിൽ കുറവായിരിക്കണം.',
    ],
    'lte'                    => [
        'array'   => ':attribute-ൽ :value-ൽ കൂടുതൽ ഇനങ്ങൾ ഉണ്ടാകരുത്.',
        'file'    => ':attribute എന്നത് :value കിലോബൈറ്റിനേക്കാൾ കുറവോ തുല്യമോ ആയിരിക്കണം.',
        'numeric' => ':attribute എന്നത് :value-നേക്കാൾ കുറവോ തുല്യമോ ആയിരിക്കണം.',
        'string'  => ':attribute എന്നത് :value പ്രതീകങ്ങളിൽ കുറവോ തുല്യമോ ആയിരിക്കണം.',
    ],
    'mac_address'            => ':attribute സാധുവായ MAC വിലാസമായിരിക്കണം.',
    'max'                    => [
        'array'   => ':attribute-ൽ :max-ൽ കൂടുതൽ ഇനങ്ങൾ ഉണ്ടാകരുത്.',
        'file'    => ':attribute :max കിലോബൈറ്റിൽ കൂടുതലാകരുത്.',
        'numeric' => ':attribute എണ്ണം :max-ൽ കൂടുതലാകരുത്.',
        'string'  => ':attribute എന്നത് :max പ്രതീകങ്ങളിൽ കൂടുതലാകരുത്.',
    ],
    'max_digits'             => ':attribute ഫീൽഡിന് :max അക്കങ്ങളിൽ കൂടുതൽ ഉണ്ടാകരുത്.',
    'mimes'                  => ':attribute എന്നത് തരം: :values എന്ന ഫയലായിരിക്കണം.',
    'mimetypes'              => ':attribute എന്നത് തരം: :values എന്ന ഫയലായിരിക്കണം.',
    'min'                    => [
        'array'   => 'പത്തിൽ കുറഞ്ഞത് :min ഇനങ്ങളെങ്കിലും ഉണ്ടായിരിക്കണം.',
        'file'    => ':attribute കുറഞ്ഞത് :min കിലോബൈറ്റ് ആയിരിക്കണം.',
        'numeric' => ':attribute എണ്ണം കുറഞ്ഞത് :min ആയിരിക്കണം.',
        'string'  => ':attribute ന് കുറഞ്ഞത് :min പ്രതീകങ്ങളെങ്കിലും ഉണ്ടായിരിക്കണം.',
    ],
    'min_digits'             => ':attribute ഫീൽഡിന് കുറഞ്ഞത് :min അക്കങ്ങൾ ഉണ്ടായിരിക്കണം.',
    'missing'                => ':attribute ഫീൽഡ് നഷ്ടപ്പെട്ടിരിക്കണം.',
    'missing_if'             => ':other :value ആകുമ്പോൾ :attribute ഫീൽഡ് നഷ്ടമായിരിക്കണം.',
    'missing_unless'         => ':other :value അല്ലാത്തപക്ഷം :attribute ഫീൽഡ് നഷ്ടമായിരിക്കണം.',
    'missing_with'           => ':values ഉള്ളപ്പോൾ :attribute ഫീൽഡ് വിട്ടുപോയിരിക്കണം.',
    'missing_with_all'       => ':values എണ്ണം ഉള്ളപ്പോൾ :attribute ഫീൽഡ് വിട്ടുപോയിരിക്കണം.',
    'multiple_of'            => ':attribute എന്നത് :value ന്റെ ഗുണിതമായിരിക്കണം.',
    'not_in'                 => 'തിരഞ്ഞെടുത്ത :attribute അസാധുവാണ്.',
    'not_regex'              => ':attribute ഫോർമാറ്റ് അസാധുവാണ്.',
    'numeric'                => ':attribute ഒരു സംഖ്യയായിരിക്കണം.',
    'password'               => [
        'letters'       => ':attribute ഫീൽഡിൽ കുറഞ്ഞത് ഒരു അക്ഷരമെങ്കിലും ഉണ്ടായിരിക്കണം.',
        'mixed'         => ':attribute ഫീൽഡിൽ കുറഞ്ഞത് ഒരു വലിയക്ഷരവും ഒരു ചെറിയക്ഷരവും ഉണ്ടായിരിക്കണം.',
        'numbers'       => ':attribute ഫീൽഡിൽ കുറഞ്ഞത് ഒരു അക്കമെങ്കിലും അടങ്ങിയിരിക്കണം.',
        'symbols'       => ':attribute ഫീൽഡിൽ കുറഞ്ഞത് ഒരു ചിഹ്നമെങ്കിലും അടങ്ങിയിരിക്കണം.',
        'uncompromised' => 'നൽകിയിരിക്കുന്ന :attribute ഡാറ്റ ചോർച്ചയിൽ പ്രത്യക്ഷപ്പെട്ടു. ദയവായി മറ്റൊരു :attribute തിരഞ്ഞെടുക്കുക.',
    ],
    'present'                => ':attribute ഫീൽഡ് ഉണ്ടായിരിക്കണം.',
    'present_if'             => ':other :value ആകുമ്പോൾ :attribute ഫീൽഡ് ഉണ്ടായിരിക്കണം.',
    'present_unless'         => ':other :value അല്ലാത്തപക്ഷം :attribute ഫീൽഡ് ഉണ്ടായിരിക്കണം.',
    'present_with'           => ':values ഉള്ളപ്പോൾ :attribute ഫീൽഡ് ഉണ്ടായിരിക്കണം.',
    'present_with_all'       => ':values എണ്ണം ഉള്ളപ്പോൾ :attribute ഫീൽഡ് ഉണ്ടായിരിക്കണം.',
    'prohibited'             => ':attribute ഫീൽഡ് നിരോധിച്ചിരിക്കുന്നു.',
    'prohibited_if'          => ':other എന്നത് :value ആകുമ്പോൾ :attribute ഫീൽഡ് നിരോധിച്ചിരിക്കുന്നു.',
    'prohibited_if_accepted' => ':other സ്വീകരിക്കുമ്പോൾ :attribute ഫീൽഡ് നിരോധിച്ചിരിക്കുന്നു.',
    'prohibited_if_declined' => ':other വയസ്സ് കുറയുമ്പോൾ :attribute ഫീൽഡ് നിരോധിച്ചിരിക്കുന്നു.',
    'prohibited_unless'      => ':valuesൽ :other ഇല്ലെങ്കിൽ :attribute ഫീൽഡ് നിരോധിച്ചിരിക്കുന്നു.',
    'prohibits'              => ':attribute ഫീൽഡ് :other-നെ ഹാജരാകുന്നതിൽ നിന്ന് വിലക്കുന്നു.',
    'regex'                  => ':attribute ഫോർമാറ്റ് അസാധുവാണ്.',
    'required'               => ':attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'required_array_keys'    => ':attribute ഫീൽഡിൽ ഇതിനായുള്ള എൻട്രികൾ ഉണ്ടായിരിക്കണം: :values.',
    'required_if'            => ':other :value ആകുമ്പോൾ :attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'required_if_accepted'   => ':other അംഗീകരിക്കുമ്പോൾ :attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'required_if_declined'   => ':other നിരസിക്കപ്പെടുമ്പോൾ :attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'required_unless'        => ':valuesൽ :other ഇല്ലെങ്കിൽ :attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'required_with'          => ':values ഉള്ളപ്പോൾ :attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'required_with_all'      => ':values എണ്ണം ഉള്ളപ്പോൾ :attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'required_without'       => ':values ഇല്ലെങ്കിൽ :attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'required_without_all'   => ':values-ൽ ഒന്നുമില്ലാത്തപ്പോൾ :attribute ഫീൽഡ് ആവശ്യമാണ്.',
    'same'                   => ':attribute ഉം :other ഉം പൊരുത്തപ്പെടണം.',
    'size'                   => [
        'array'   => ':attribute ൽ :size ഇനങ്ങൾ അടങ്ങിയിരിക്കണം.',
        'file'    => ':attribute എന്നത് :size കിലോബൈറ്റ് ആയിരിക്കണം.',
        'numeric' => ':attribute എന്നത് :size ആയിരിക്കണം.',
        'string'  => ':attribute എന്നത് :size പ്രതീകങ്ങളായിരിക്കണം.',
    ],
    'starts_with'            => ':attribute ഇനിപ്പറയുന്നതിൽ ഒന്നിൽ നിന്ന് ആരംഭിക്കണം: :values.',
    'string'                 => ':attribute ഒരു സ്ട്രിംഗ് ആയിരിക്കണം.',
    'timezone'               => ':attribute സാധുതയുള്ള സമയമേഖലയായിരിക്കണം.',
    'ulid'                   => ':attribute ഫീൽഡ് സാധുവായ ULID ആയിരിക്കണം.',
    'unique'                 => ':attribute ഇതിനകം എടുത്തിട്ടുണ്ട്.',
    'uploaded'               => ':attribute എണ്ണം അപ്‌ലോഡ് ചെയ്യുന്നതിൽ പരാജയപ്പെട്ടു.',
    'uppercase'              => ':attribute ഫീൽഡ് വലിയക്ഷരമായിരിക്കണം.',
    'url'                    => ':attribute സാധുതയുള്ള ഒരു URL ആയിരിക്കണം.',
    'uuid'                   => ':attribute സാധുവായ UUID ആയിരിക്കണം.',
];
