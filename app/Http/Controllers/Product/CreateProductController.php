<?php
declare(strict_types=1);
namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use Exception;
use GS\Shared\Domain\Bus\Command\CommandBus;
use GS\Shoop\Product\Application\Create\CreateProductCommand;
use Illuminate\Http\Client\Request;

final class CreateProductController extends Controller
{
    public function __construct(private CommandBus $commandBus)
    {
    //    dd( 'oe');
    }

    public function __invoke(CreateProductRequest $request)
    {
        try {
            $command = new CreateProductCommand(
                $request->get('id'),
                $request->get('name'),
            );
            $this->commandBus->dispatch($command);

            return response()->json([
                'success' => true,
                'payload' => []
            ]);
        } catch (Exception $e) {


            return response()->json([
                'success' => false,
                'payload' => [],
                'error' => [
                    'code' => 321,
                    'message' => $e->getMessage(),
                ]
            ]);
        }
    }
}