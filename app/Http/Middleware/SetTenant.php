<?php

namespace App\Http\Middleware;

use App\Tenant;
use Closure;
use HipsterJazzbo\Landlord\Facades\Landlord;

class SetTenant
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
        $slug = $request->route('tenant_slug');
        if($slug) {
            $tenant = Tenant::where('slug', $slug)->firstOrFail();
            Landlord::addTenant($tenant);
        }

        return $next($request);
    }
}
