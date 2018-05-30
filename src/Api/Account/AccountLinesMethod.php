<?php

namespace XRPHP\Api\Account;

use XRPHP\Api\Method;

/**
 * The account_lines method returns information about an account's trust lines, including balances in all
 * non-XRP currencies and assets. All information retrieved is relative to a particular version of the ledger.
 *
 * @link https://developers.ripple.com/account_lines.html#request-format Documentation of account_lines.
 * @package XRPHP\Api\Account
 */
class AccountLinesMethod extends Method
{
    public function getValidParameters(): array
    {
        return [
            'account',
            'ledger_hash',
            'ledger_index',
            'peer',
            'limit',
            'marker'
        ];
    }

    /**
     * Validates parameters.
     *
     * @param array|null $params
     * @throws \BadMethodCallException
     */
    public function validateParameters(array $params = null): void
    {
        if (!isset($params['account'])) {
            throw new \BadMethodCallException('Missing parameter: account');
        }
    }
}
