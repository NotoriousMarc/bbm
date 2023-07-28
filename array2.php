<?php

$accounts = [
    [
        "account_name" => "EZ Acess",
        "account_number" => "000001234",
        "account_type" => "Savings",
        "account_currency" => "JMD",
        "account_balance" => 500000

    ],
    [
        "account_name" => "Bonus Saver",
        "account_number" => "000005678",
        "account_type" => "Chequing",
        "account_currency" => "USD",
        "account_balance" => 70000
    ],
    [
        "account_name" => "Sure Investor",
        "account_number" => "000009876",
        "account_type" => "Chequing",
        "account_currency" => "GBR",
        "account_balance" => 400
    ]
];

$currencyList = [];
$currencyList["JMD"] = "$";
$currencyList["USD"] = "USD$";
$currencyList["GBR"] = "£";

printAccounts($accounts, $currencyList);

function printAccounts(array $accounts, array $currencyList) : void
{
    foreach ($accounts as $account) {
        echo "The account name is " . $account["account_name"] . "<br>";
        echo "The account number is " . $account["account_number"] . "<br>";
        echo "The account type is " . $account["account_type"] . "<br>";
        echo "The account currency is " . $account["account_currency"] . "<br>";
        echo "The account balance is " . getCurrencySymbol($account["account_currency"]) . $account["account_balance"] . "<br> <br>";
    }
}

function getCurrencySymbol(string $currency) : string
{
    $currencyList = [];
    $currencyList["JMD"] = "$";
    $currencyList["USD"] = "USD$";
    $currencyList["GBR"] = "£";

    return $currencyList[$currency];
}