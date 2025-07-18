<?php

declare(strict_types=1);

return [
    'accepted'               => ':Attribute må aksepteres.',
    'accepted_if'            => ':Attribute må aksepteres når :other er :value.',
    'active_url'             => ':Attribute er ikke en gyldig URL.',
    'after'                  => ':Attribute må være en dato etter :date.',
    'after_or_equal'         => ':Attribute må være en dato etter eller lik :date.',
    'alpha'                  => ':Attribute må kun bestå av bokstaver.',
    'alpha_dash'             => ':Attribute må kun bestå av bokstaver, tall og bindestreker.',
    'alpha_num'              => ':Attribute må kun bestå av bokstaver og tall.',
    'any_of'                 => ':attribute -feltet er ugyldig.',
    'array'                  => ':Attribute må være en matrise.',
    'ascii'                  => ':Attribute må bare inneholde enkeltbyte alfanumeriske tegn og symboler.',
    'before'                 => ':Attribute må være en dato før :date.',
    'before_or_equal'        => ':Attribute må være en dato før eller lik :date.',
    'between'                => [
        'array'   => ':Attribute må ha mellom :min - :max elementer.',
        'file'    => ':Attribute må være mellom :min - :max kilobytes.',
        'numeric' => ':Attribute må være mellom :min - :max.',
        'string'  => ':Attribute må være mellom :min - :max tegn.',
    ],
    'boolean'                => ':Attribute må være sann eller usann',
    'can'                    => ':Attribute-feltet inneholder en uautorisert verdi.',
    'confirmed'              => ':Attribute er ikke likt bekreftelsesfeltet.',
    'contains'               => 'Feltet :attribute mangler en obligatorisk verdi.',
    'current_password'       => 'Oppgitt passord er feil.',
    'date'                   => ':Attribute er ikke en gyldig dato.',
    'date_equals'            => ':Attribute må være en dato lik :date.',
    'date_format'            => ':Attribute samsvarer ikke med formatet :format.',
    'decimal'                => 'De :attribute må ha :decimal desimaler.',
    'declined'               => ':Attribute må avvises.',
    'declined_if'            => ':Attribute må avvises når :other er :value.',
    'different'              => ':Attribute og :other må være forskellige.',
    'digits'                 => ':Attribute må ha :digits siffer.',
    'digits_between'         => ':Attribute må være mellom :min og :max siffer.',
    'dimensions'             => ':Attribute har ugyldige bildedimensjoner.',
    'distinct'               => ':Attribute har en duplisert verdi.',
    'doesnt_end_with'        => 'De :attribute slutter kanskje ikke med ett av følgende: :values.',
    'doesnt_start_with'      => 'De :attribute starter kanskje ikke med ett av følgende: :values.',
    'email'                  => ':Attribute må være en gyldig e-postadresse.',
    'ends_with'              => ':Attribute må ende med en av følgende: :values.',
    'enum'                   => 'Det valgte :attribute er ugyldig.',
    'exists'                 => 'Det valgte :attribute er ugyldig.',
    'extensions'             => ':attribute-feltet må ha en av følgende utvidelser: :values.',
    'file'                   => ':Attribute må være en fil.',
    'filled'                 => ':Attribute må fylles ut.',
    'gt'                     => [
        'array'   => ':Attribute må ha flere enn :value elementer.',
        'file'    => ':Attribute må være større enn :value kilobytes.',
        'numeric' => ':Attribute må være større enn :value.',
        'string'  => ':Attribute må være større enn :value tegn.',
    ],
    'gte'                    => [
        'array'   => ':Attribute må ha :value elementer eller flere.',
        'file'    => ':Attribute må være større enn eller lik :value kilobytes.',
        'numeric' => ':Attribute må være større enn eller lik :value.',
        'string'  => ':Attribute må være større enn eller lik :value tegn.',
    ],
    'hex_color'              => ':attribute-feltet må være en gyldig heksadesimal farge.',
    'image'                  => ':Attribute må være et bilde.',
    'in'                     => 'Det valgte :attribute er ugyldig.',
    'in_array'               => 'Det valgte :attribute eksisterer ikke i :other.',
    'in_array_keys'          => ':attribute -feltet må inneholde minst en av følgende nøkler: :values.',
    'integer'                => ':Attribute må være et heltall.',
    'ip'                     => ':Attribute må være en gyldig IP-adresse.',
    'ipv4'                   => ':Attribute må være en gyldig IPv4-adresse.',
    'ipv6'                   => ':Attribute må være en gyldig IPv6-addresse.',
    'json'                   => ':Attribute må være på JSON-format.',
    'list'                   => 'Feltet :attribute må være en liste.',
    'lowercase'              => ':Attribute må være små bokstaver.',
    'lt'                     => [
        'array'   => ':Attribute må ha færre enn :value elementer.',
        'file'    => ':Attribute må være mindre enn :value kilobytes.',
        'numeric' => ':Attribute må være mindre enn :value.',
        'string'  => ':Attribute må være kortere enn :value tegn.',
    ],
    'lte'                    => [
        'array'   => ':Attribute må ikke ha flere enn :value elementer.',
        'file'    => ':Attribute må være mindre enn eller lik :value kilobytes.',
        'numeric' => ':Attribute må være mindre enn eller lik :value.',
        'string'  => ':Attribute må være kortere enn eller lik :value tegn.',
    ],
    'mac_address'            => ':Attribute må være en gyldig MAC-adresse.',
    'max'                    => [
        'array'   => ':Attribute må ikke ha flere enn :max elementer.',
        'file'    => ':Attribute må ikke være større enn :max kilobytes.',
        'numeric' => ':Attribute må ikke være større enn :max.',
        'string'  => ':Attribute må ikke være større enn :max tegn.',
    ],
    'max_digits'             => 'De :attribute må ikke ha mer enn :max sifre.',
    'mimes'                  => ':Attribute må være en fil av typen: :values.',
    'mimetypes'              => ':Attribute må være en fil av typen: :values.',
    'min'                    => [
        'array'   => ':Attribute må ha minst :min elementer.',
        'file'    => ':Attribute må være minst :min kilobytes.',
        'numeric' => ':Attribute må være minst :min.',
        'string'  => ':Attribute må være minst :min tegn.',
    ],
    'min_digits'             => 'De :attribute må ha minst :min sifre.',
    'missing'                => ':Attribute-feltet må mangle.',
    'missing_if'             => ':Attribute-feltet må mangle når :other er :value.',
    'missing_unless'         => ':Attribute-feltet må mangle med mindre :other er :value.',
    'missing_with'           => ':Attribute-feltet må mangle når :values er tilstede.',
    'missing_with_all'       => ':Attribute-feltet må mangle når :values er tilstede.',
    'multiple_of'            => ':Attribute må være flere av :value',
    'not_in'                 => 'Den valgte :attribute er ugyldig.',
    'not_regex'              => 'Formatet på :attribute er ugyldig.',
    'numeric'                => ':Attribute må være et tall.',
    'password'               => [
        'letters'       => 'De :attribute må inneholde minst én bokstav.',
        'mixed'         => ':Attribute må inneholde minst én stor og én liten bokstav.',
        'numbers'       => 'De :attribute må inneholde minst ett tall.',
        'symbols'       => 'De :attribute må inneholde minst ett symbol.',
        'uncompromised' => 'De oppgitte :attribute har dukket opp i en datalekkasje. Velg en annen :attribute.',
    ],
    'present'                => ':Attribute må eksistere.',
    'present_if'             => ':attribute-feltet må være til stede når :other er :value.',
    'present_unless'         => ':attribute-feltet må være til stede med mindre :other er :value.',
    'present_with'           => ':attribute-feltet må være til stede når :values er til stede.',
    'present_with_all'       => ':attribute-feltet må være til stede når :values er til stede.',
    'prohibited'             => ':Attribute felt er forbudt.',
    'prohibited_if'          => ':Attribute felt er forbudt når :other er :value.',
    'prohibited_if_accepted' => ':attribute -feltet er forbudt når :other aksepteres.',
    'prohibited_if_declined' => ':attribute -feltet er forbudt når :other blir avvist.',
    'prohibited_unless'      => ':Attribute felt er forbudt med mindre :other er i :values.',
    'prohibits'              => ':Attribute forbyr :other å være til stede.',
    'regex'                  => 'Formatet på :attribute er ugyldig.',
    'required'               => ':Attribute må fylles ut.',
    'required_array_keys'    => ':Attribute feltet må inneholde oppføringer for: :values.',
    'required_if'            => ':Attribute må fylles ut når :other er :value.',
    'required_if_accepted'   => ':Attribute-feltet er obligatorisk når :other er akseptert.',
    'required_if_declined'   => ':attribute-feltet er obligatorisk når :other avvises.',
    'required_unless'        => ':Attribute er påkrevd med mindre :other finnes blant verdiene :values.',
    'required_with'          => ':Attribute må fylles ut når :values er utfylt.',
    'required_with_all'      => ':Attribute er påkrevd når :values er oppgitt.',
    'required_without'       => ':Attribute må fylles ut når :values ikke er utfylt.',
    'required_without_all'   => ':Attribute er påkrevd når ingen av :values er oppgitt.',
    'same'                   => ':Attribute og :other må være like.',
    'size'                   => [
        'array'   => ':Attribute må inneholde :size elementer.',
        'file'    => ':Attribute må være :size kilobytes.',
        'numeric' => ':Attribute må være :size.',
        'string'  => ':Attribute må være :size tegn lang.',
    ],
    'starts_with'            => ':Attribute må starte med en av følgende: :values.',
    'string'                 => ':Attribute må være en tekststreng.',
    'timezone'               => ':Attribute må være en gyldig tidssone.',
    'ulid'                   => ':Attribute må være en gyldig ULID.',
    'unique'                 => ':Attribute er allerede i bruk.',
    'uploaded'               => ':Attribute kunne ikke lastes opp.',
    'uppercase'              => ':Attribute må være store bokstaver.',
    'url'                    => 'Formatet på :attribute er ugyldig.',
    'uuid'                   => ':Attribute må være en gyldig UUID.',
];
