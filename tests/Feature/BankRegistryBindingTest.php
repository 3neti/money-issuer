<?php

use LBHurtado\EmiCore\Contracts\BankRegistryContract;
use LBHurtado\MoneyIssuer\Support\BankRegistry;

it('binds the emi-core bank registry contract to the money-issuer implementation', function () {
    $resolved = app(BankRegistryContract::class);

    expect($resolved)->toBeInstanceOf(BankRegistry::class)
        ->and($resolved)->toBeInstanceOf(BankRegistryContract::class);
});