<?php
  
namespace App\Http\Controllers;
  
use App\Models\Room;
use Illuminate\Http\Request;
  
class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::orderBy('created_at', 'ASC')->paginate(999);
        $kosong = Room::where('status', 'Kosong')->count();
        $berpenghuni = Room::where('status', 'Berpenghuni')->count();


        return view('rooms.index',compact('rooms', 'kosong','berpenghuni'))
            ->with('i', (request()->input('page', 1) - 1) * 999);
    }
   
    public function create()
    {
        return view('rooms.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'price' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        Room::create($input);
     
        return redirect()->route('rooms.index')
                        ->with('success','Room created successfully.');
    }
     
    public function show(Room $room)
    {
        return view('rooms.show',compact('room'));
    }
     
    public function edit(room $room)
    {   
        return view('rooms.edit',compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'price' => 'required',
            'detail' => 'required'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $room->update($input);
    
        return redirect()->route('rooms.index')

                        ->with('success','Room updated successfully');
    }
  
    public function destroy(Room $room)
    {
        $room->delete();
     
        return redirect()->route('rooms.index')
                        ->with('success','Room deleted successfully');
    }
}