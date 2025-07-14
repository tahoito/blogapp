use App\Http\Controllers\Api\PostController;

Route::post('/posts', [PostController::class, 'store']);
