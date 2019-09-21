<?php
/**
 * Created by PhpStorm.
 * User: z0dd
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
        if (\z0dd\Pinba\Pinba::checkPinbaEnable()) {
            $unknown = config('pinba.unknown');

            $path = $request->getPathInfo();
            if (empty($path)) {
                $path = $unknown;
            }

            pinba_script_name_set($path);

            $middleware = implode('.',$request->route()->middleware());
            if (empty($middleware)) {
                $middleware = $unknown;
            }

            pinba_tag_set('middleware',$middleware);
        }

        return $next($request);
    }
}