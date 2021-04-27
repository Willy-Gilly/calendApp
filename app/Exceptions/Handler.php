<?php

namespace App\Exceptions;

use App\Http\Controllers\API\BaseController;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param Throwable $exception
     * @return void
     *
     * @throws Exception
     * @throws Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param $request
     * @param Throwable $exception
     * @return \Illuminate\Contracts\Foundation\Application|JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector|Response
     *
     * @throws Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            if (!$request->ajax()) {
                return redirect('error404');
            }
        }
        else if($exception instanceof ServiceUnavailableHttpException) {
            if (!$request->ajax()) {
                if(!$request->wantsJson())
                {
                    return redirect('error503');
                }
                else
                {
                    return (new BaseController())->sendError(__('home.error').' 503',[],503);
                }
            }
        }
        else if($exception instanceof TooManyRequestsHttpException)
        {
            if (!$request->ajax()) {
                if(!$request->wantsJson())
                {
                    return redirect('error429');
                }
                else
                {
                    return (new BaseController())->sendError(__('home.error').' 423',[],423);
                }
            }
        }
        else if($exception instanceof UnauthorizedHttpException){
            if (!$request->ajax()) {
                if(!$request->wantsJson())
                {
                    return redirect('error403');
                }
                else
                {
                    return (new BaseController())->sendError(__('home.error').' 403',[],403);
                }
            }
        }

        return parent::render($request, $exception);
    }
}
