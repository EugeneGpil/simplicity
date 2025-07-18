<?php

declare(strict_types=1);

return [
    'accepted'               => 'Rhaid derbyn :attribute.',
    'accepted_if'            => 'Rhaid derbyn y :attribute pan fydd :other yn :value.',
    'active_url'             => 'Nid yw :attribute yn URL dilys.',
    'after'                  => 'Rhaid i :attribute fod yn ddyddiad sydd ar ôl :date.',
    'after_or_equal'         => 'Y :attribute rhaid iddo fod yn ddyddiad ar ôl neu yn hafal i :date.',
    'alpha'                  => 'Dim ond llythrennau\'n unig gall :attribute gynnwys.',
    'alpha_dash'             => 'Dim ond llythrennau, rhifau a dash yn unig gall :attribute gynnwys.',
    'alpha_num'              => 'Dim ond llythrennau a rhifau yn unig gall :attribute gynnwys.',
    'any_of'                 => 'Mae\'r maes :attribute yn annilys.',
    'array'                  => 'Rhaid i :attribute fod yn array.',
    'ascii'                  => 'Rhaid i\'r :attribute gynnwys nodau a symbolau alffaniwmerig un beit yn unig.',
    'before'                 => 'Rhaid i :attribute fod yn ddyddiad sydd cyn :date.',
    'before_or_equal'        => 'Y :attribute rhaid iddo fod yn ddyddiad cyn neu yn hafal i :date.',
    'between'                => [
        'array'   => 'Rhaid i :attribute fod rhwng :min a :max eitem.',
        'file'    => 'Rhaid i :attribute fod rhwng :min a :max kilobytes.',
        'numeric' => 'Rhaid i :attribute fod rhwng :min a :max.',
        'string'  => 'Rhaid i :attribute fod rhwng :min a :max nodyn.',
    ],
    'boolean'                => 'Rhaid i\'r maes :attribute fod yn wir neu gau.',
    'can'                    => 'Mae\'r maes :attribute yn cynnwys gwerth anawdurdodedig.',
    'confirmed'              => 'Nid yw\'r cadarnhad :attribute yn gyfwerth.',
    'contains'               => 'Mae gwerth gofynnol ar goll yn y maes :attribute.',
    'current_password'       => 'Mae\'r cyfrinair yn anghywir.',
    'date'                   => 'Nid yw :attribute yn ddyddiad dilys.',
    'date_equals'            => 'Y :attribute rhaid dyddiad cyfartal i :date.',
    'date_format'            => 'Nid yw :attribute yn y fformat :format.',
    'decimal'                => 'Rhaid i\'r :attribute fod â :decimal o leoedd degol.',
    'declined'               => 'Rhaid gwrthod y :attribute.',
    'declined_if'            => 'Rhaid gwrthod y :attribute pan fydd :other yn :value.',
    'different'              => 'Rhaid i :attribute a :other fod yn wahanol.',
    'digits'                 => 'Rhaid i :attribute fod yn :digits digid.',
    'digits_between'         => 'Rhaid i :attribute fod rhwng :min a :max digid.',
    'dimensions'             => 'Y :attribute wedi annilys ddelwedd dimensiynau.',
    'distinct'               => 'Y :attribute maes wedi dyblyg gwerth.',
    'doesnt_end_with'        => 'Efallai na fydd y :attribute yn gorffen gydag un o’r canlynol: :values.',
    'doesnt_start_with'      => 'Efallai na fydd y :attribute yn dechrau gydag un o’r canlynol: :values.',
    'email'                  => 'Rhaid i :attribute fod yn gyfeiriad ebost dilys.',
    'ends_with'              => 'Y :attribute rhaid i ben gydag un o\'r canlynol: :values.',
    'enum'                   => 'Mae\'r :attribute a ddewiswyd yn annilys.',
    'exists'                 => 'Nid yw :attribute yn ddilys.',
    'extensions'             => 'Rhaid i faes :attribute gynnwys un o\'r estyniadau canlynol: :values.',
    'file'                   => ':Attribute rhaid iddo fod yn y ffeil.',
    'filled'                 => 'Rhaid cynnwys :attribute.',
    'gt'                     => [
        'array'   => 'Rhaid i\'r :attribute fod â mwy na :value o eitemau.',
        'file'    => 'Rhaid i\'r :attribute fod yn fwy na :value cilobeit.',
        'numeric' => 'Rhaid i\'r :attribute fod yn fwy na :value.',
        'string'  => 'Rhaid i\'r :attribute fod yn fwy na :value nod.',
    ],
    'gte'                    => [
        'array'   => 'Rhaid i\'r :attribute fod â :value o eitemau neu fwy.',
        'file'    => 'Rhaid i\'r :attribute fod yn fwy na neu\'n hafal i :value cilobeit.',
        'numeric' => 'Rhaid i’r :attribute fod yn fwy na neu’n hafal i :value.',
        'string'  => 'Rhaid i\'r :attribute fod yn fwy na neu\'n hafal i :value nod.',
    ],
    'hex_color'              => 'Rhaid i\'r maes :attribute fod yn lliw hecsadegol dilys.',
    'image'                  => 'Rhaid i :attribute fod yn lun.',
    'in'                     => 'Nid yw :attribute yn ddilys.',
    'in_array'               => 'Y :attribute maes nad yw\'n bodoli yn :other.',
    'in_array_keys'          => 'Rhaid i\'r maes :attribute gynnwys o leiaf un o\'r allweddi canlynol: :values.',
    'integer'                => 'Rhaid i :attribute fod yn integer.',
    'ip'                     => 'Rhaid i :attribute fod yn gyfeiriad IP dilys.',
    'ipv4'                   => 'Y :attribute rhaid iddo fod yn ddilys ar IPv4 cyfeiriad.',
    'ipv6'                   => 'Y :attribute rhaid iddo fod yn ddilys cyfeiriad IPv6.',
    'json'                   => 'Y :attribute rhaid iddo fod yn ddilys JSON llinyn.',
    'list'                   => 'Rhaid i\'r maes :attribute fod yn rhestr.',
    'lowercase'              => 'Rhaid i\'r :attribute fod yn llythrennau bach.',
    'lt'                     => [
        'array'   => 'Rhaid i\'r :attribute fod â llai na :value o eitemau.',
        'file'    => 'Rhaid i\'r :attribute fod yn llai na :value cilobeit.',
        'numeric' => 'Rhaid i\'r :attribute fod yn llai na :value.',
        'string'  => 'Rhaid i\'r :attribute fod yn llai na :value nod.',
    ],
    'lte'                    => [
        'array'   => 'Ni ddylai\'r :attribute fod â mwy na :value o eitemau.',
        'file'    => 'Rhaid i\'r :attribute fod yn llai na neu\'n hafal i :value cilobeit.',
        'numeric' => 'Rhaid i’r :attribute fod yn llai na neu’n hafal i :value.',
        'string'  => 'Rhaid i\'r :attribute fod yn llai na neu\'n hafal i :value nod.',
    ],
    'mac_address'            => 'Rhaid i\'r :attribute fod yn gyfeiriad MAC dilys.',
    'max'                    => [
        'array'   => 'Ni chai :attribute fod yn fwy na :max eitem.',
        'file'    => 'Ni chai :attribute fod yn fwy na :max kilobytes.',
        'numeric' => 'Ni chai :attribute fod yn fwy na :max.',
        'string'  => 'Ni chai :attribute fod yn fwy na :max nodyn.',
    ],
    'max_digits'             => 'Ni ddylai\'r :attribute fod â mwy na :max digid.',
    'mimes'                  => 'Rhaid i :attribute fod yn ffeil o\'r math: :values.',
    'mimetypes'              => 'Rhaid i :attribute fod yn ffeil o\'r math: :values.',
    'min'                    => [
        'array'   => 'Rhaid i :attribute fod o leiaf :min eitem.',
        'file'    => 'Rhaid i :attribute fod o leiaf :min kilobytes.',
        'numeric' => 'Rhaid i :attribute fod o leiaf :min.',
        'string'  => 'Rhaid i :attribute fod o leiaf :min nodyn.',
    ],
    'min_digits'             => 'Rhaid i\'r :attribute fod ag o leiaf :min digid.',
    'missing'                => 'Rhaid bod y maes :attribute ar goll.',
    'missing_if'             => 'Rhaid i\'r maes :attribute fod ar goll pan fydd :other yn :value.',
    'missing_unless'         => 'Rhaid i\'r maes :attribute fod ar goll oni bai bod :other yn :value.',
    'missing_with'           => 'Rhaid i\'r maes :attribute fod ar goll pan fydd :values yn bresennol.',
    'missing_with_all'       => 'Rhaid i\'r maes :attribute fod ar goll pan fydd :values yn bresennol.',
    'multiple_of'            => 'Y :attribute rhaid iddo fod yn lluosrif o :value',
    'not_in'                 => 'Nid yw :attribute yn ddilys.',
    'not_regex'              => 'Y :attribute fformat annilys.',
    'numeric'                => 'Rhaid i :attribute fod yn rif.',
    'password'               => [
        'letters'       => 'Rhaid i\'r :attribute gynnwys o leiaf un llythyren.',
        'mixed'         => 'Rhaid i\'r :attribute gynnwys o leiaf un priflythrennau ac un llythyren fach.',
        'numbers'       => 'Rhaid i\'r :attribute gynnwys o leiaf un rhif.',
        'symbols'       => 'Rhaid i\'r :attribute gynnwys o leiaf un symbol.',
        'uncompromised' => 'Mae\'r :attribute a roddwyd wedi ymddangos mewn gollyngiad data. Dewiswch :attribute gwahanol.',
    ],
    'present'                => 'Y :attribute maes rhaid i fod yn bresennol.',
    'present_if'             => 'Rhaid i faes :attribute fod yn bresennol pan fydd :other yn :value.',
    'present_unless'         => 'Rhaid i faes :attribute fod yn bresennol oni bai bod :other yn :value.',
    'present_with'           => 'Rhaid i\'r maes :attribute fod yn bresennol pan fo :values yn bresennol.',
    'present_with_all'       => 'Rhaid i\'r maes :attribute fod yn bresennol pan fydd :values yn bresennol.',
    'prohibited'             => 'Y :attribute maes yn cael ei wahardd.',
    'prohibited_if'          => 'Y :attribute maes yn cael ei wahardd pan :other yn :value.',
    'prohibited_if_accepted' => 'Gwaherddir y maes :attribute pan dderbynnir :other.',
    'prohibited_if_declined' => 'Gwaherddir y cae :attribute pan fydd :other yn cael ei wrthod.',
    'prohibited_unless'      => 'Y :attribute maes yn cael ei wahardd oni bai :other yn :values.',
    'prohibits'              => 'Mae\'r maes :attribute yn gwahardd :other rhag bod yn bresennol.',
    'regex'                  => 'Nid yw fformat :attribute yn ddilys.',
    'required'               => 'Rhaid cynnwys :attribute.',
    'required_array_keys'    => 'Rhaid i’r maes :attribute gynnwys cofnodion ar gyfer: :values.',
    'required_if'            => 'Rhaid cynnwys :attribute pan mae :other yn :value.',
    'required_if_accepted'   => 'Mae angen y maes :attribute pan dderbynnir :other.',
    'required_if_declined'   => 'Mae angen y maes :attribute pan wrthodir :other.',
    'required_unless'        => 'Y :attribute maes yn ofynnol oni bai bod :other yn :values.',
    'required_with'          => 'Rhaid cynnwys :attribute pan mae :values yn bresennol.',
    'required_with_all'      => 'Rhaid cynnwys :attribute pan mae :values yn bresennol.',
    'required_without'       => 'Rhaid cynnwys :attribute pan nad oes :values yn bresennol.',
    'required_without_all'   => 'Rhaid cynnwys :attribute pan nad oes :values yn bresennol.',
    'same'                   => 'Rhaid i :attribute a :other fod yn gyfwerth.',
    'size'                   => [
        'array'   => 'Rhaid i :attribute fod yn :size eitem.',
        'file'    => 'Rhaid i :attribute fod yn :size kilobytes.',
        'numeric' => 'Rhaid i :attribute fod yn :size.',
        'string'  => 'Rhaid i :attribute fod yn :size nodyn.',
    ],
    'starts_with'            => 'Y :attribute rhaid dechrau gydag un o\'r canlynol: :values.',
    'string'                 => 'Y :attribute rhaid iddo fod yn llinyn.',
    'timezone'               => 'Rhaid i :attribute fod yn timezone dilys.',
    'ulid'                   => 'Rhaid i\'r :attribute fod yn ULID dilys.',
    'unique'                 => 'Mae :attribute eisoes yn bodoli.',
    'uploaded'               => 'Y :attribute wedi methu â llwytho i fyny.',
    'uppercase'              => 'Rhaid i\'r :attribute fod yn briflythrennau.',
    'url'                    => 'Nid yw fformat :attribute yn ddilys.',
    'uuid'                   => 'Y :attribute rhaid iddo fod yn ddilys UUID.',
];
