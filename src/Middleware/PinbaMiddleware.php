<?php
/**
 * Created by PhpStorm.
 * User: z0dd
 */
namespace z0dd\Pinba\Middleware;

use z0dd\Pinba\Pinba;

/**
 * Class PinbaMiddleware
 *
 * @package z0dd\Pinba\Middleware
 */
class PinbaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /**
         * Pinba extesion integration
         */
        if (Pinba::checkPinbaEnable()) {

            $path = $request->getPathInfo();
            if (empty($path)) {
                $path = Pinba::getUnknown();
            }

            pinba_script_name_set($path);

            $middleware = implode('.',$request->route()->middleware());
            if (empty($middleware)) {
                $middleware = Pinba::getUnknown();
            }

            pinba_tag_set('middleware',$middleware);
        }

        return $next($request);
    }
}