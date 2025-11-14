namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index() {
        return response()->json(Classroom::with('courses')->get());
    }

    public function show($id) {
        return response()->json(Classroom::with('courses')->findOrFail($id));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'schedule'=>'nullable|date'
        ]);
        return response()->json(Classroom::create($validated), 201);
    }

    public function update(Request $request, $id){
        $classroom = Classroom::findOrFail($id);
        $classroom->update($request->only('name','schedule'));
        return response()->json($classroom);
    }

    public function destroy($id){
        $classroom = Classroom::findOrFail($id);
        $classroom->delete();
        return response()->json(null, 204);
    }
}
