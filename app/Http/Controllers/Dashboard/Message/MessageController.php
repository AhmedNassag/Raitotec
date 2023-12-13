<?php

namespace App\Http\Controllers\Dashboard\Message;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\Message\MessageInterface;


class MessageController extends Controller
{
    protected $message;

    public function __construct(MessageInterface $message)
    {
        $this->message = $message;
    }



    public function index(Request $request)
    {
        return $this->message->index($request);
    }



    public function destroy(Request $request)
    {
        return $this->message->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->message->deleteSelected($request);
    }
}
