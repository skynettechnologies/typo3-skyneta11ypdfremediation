<?php
namespace Skynettechnologies\Skyneta11ypdfremediation\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use TYPO3\CMS\Core\Http\Stream;
use Psr\Http\Server\RequestHandlerInterface;

class AwesomeMiddleware implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        // Handle request normally
        $response = $handler->handle($request);
        $script = "";

		$html = $response->getBody();
        $html = str_replace("</body>","$script</body>",$html);

        $body = new Stream('php://temp', 'wb+');

        $body->write($html);
        $response = $response->withBody($body);

        return $response;
    }
}