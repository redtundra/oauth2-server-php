<?php

namespace OAuth2\TokenType;

use OAuth2\RequestInterface;
use OAuth2\ResponseInterface;

/**
* This is not yet supported!
*/
class Mac implements TokenTypeInterface
{
    public function getTokenType()
    {
        return 'mac';
    }

    public function getAccessTokenParameter(RequestInterface $request=null, ResponseInterface $response=null)
    {
        throw new \LogicException("Not supported");
    }
}
