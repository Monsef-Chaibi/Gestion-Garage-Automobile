<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    public function AdminDash()
    {
        return view('AdminDash/Dash');
    }
    public function ClientDash()
    {
        $users = User::where('role', '!=', '1')->get();

        return view('AdminDash/Client',compact('users'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'userId' => 'required|exists:users,id',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        try {
            $user = User::find($request->userId);
            $user->username = $request->username;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->phoneNumber = $request->phoneNumber;
            $user->save();

            return response()->json(['success' => 'User updated successfully.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while updating the user.'], 500);
        }
    }
    public function destroy(User $user)
    {
        try {
            // Perform the deletion
            $user->delete();

            // Return a successful response
            return response()->json(['success' => 'User deleted successfully.'], 200);
        } catch (\Exception $e) {
            Log::error('Error deleting user: '.$e->getMessage());
            // Return an error response
            return response()->json(['error' => 'An error occurred while deleting the user.'], 500);
        }
    }

    public function VoitureDash()
    {
        $users = User::where('role', '!=', '1')->get();
        $vehicles = Vehicle::with('client')->get();
        return view('AdminDash/Voiture')->with(['users' => $users,  'vehicles' => $vehicles,]);
    }
    public function storeVehicle(Request $request)
    {
        $validatedData = $request->validate([
            'make' => 'required|string',
            'model' => 'required|string',
            'fuelType' => 'required|string',
            'registration' => 'required|string',
            'clientID' => 'required|integer|exists:users,id',
            'photos' => 'nullable|array',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $photosPaths = [];
        if($request->hasfile('photos')) {
            foreach($request->file('photos') as $file) {
                // Generate a unique name for the file using the current timestamp
                $newName = time() . '_' . $file->getClientOriginalName();

                // Move the file to the public/vehicles directory and rename it
                $file->move(public_path('img'), $newName);

                // Prepare the URL for the saved file to store in the database
                $photosPaths[] = 'img/' .$newName;
            }
        }

        $vehicle = new Vehicle();
        $vehicle->make = $validatedData['make'];
        $vehicle->model = $validatedData['model'];
        $vehicle->fuelType = $validatedData['fuelType'];
        $vehicle->registration = $validatedData['registration'];
        $vehicle->clientID = $validatedData['clientID'];
        // Store the JSON encoded paths of photos in the database
        $vehicle->photos = json_encode($photosPaths);
        $vehicle->save();

        return response()->json(['success' => 'Vehicle created successfully']);
    }
    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id); // Find the vehicle or fail

        // Decode the JSON photos into an array
        $photos = json_decode($vehicle->photos, true);
        $photosPaths = [];
        if ($photos) {
            foreach ($photos as $photo) {
                // Assuming $photo is the path to the image, adjust as needed
                $photosPaths[] = ['id' => uniqid(), 'url' => asset($photo)];
            }
        }

        // Prepare the data for response
        $vehicleData = [
            'id' => $vehicle->id,
            'make' => $vehicle->make,
            'model' => $vehicle->model,
            'fuelType' => $vehicle->fuelType,
            'registration' => $vehicle->registration,
            'clientId' => $vehicle->clientID, // Use the actual column name from your table
            'photos' => $photosPaths, // Use the constructed paths
        ];

        return response()->json($vehicleData);
    }

    public function DeleteImgVehicle($vehicleId, $photoIndex)
    {
        $vehicle = Vehicle::findOrFail($vehicleId);
        $photos = json_decode($vehicle->photos, true);

        if (!isset($photos[$photoIndex])) {
            return response()->json(['message' => 'Photo not found'], 404);
        }

        // Optionally delete the photo file
        Storage::delete($photos[$photoIndex]); // Adjusted to use the string directly

        // Remove the photo from the array
        unset($photos[$photoIndex]);
        // Re-index array
        $photos = array_values($photos);

        // Update the vehicle record with the new photos array
        $vehicle->photos = json_encode($photos);
        $vehicle->save();

        return response()->json(['message' => 'Photo removed successfully']);
    }

    public function updateVehicle(Request $request, $id)
    {
        // Assuming $id is passed correctly and you retrieve the Vehicle like this:
        $vehicle = Vehicle::find($id);

        // Update vehicle properties
        $vehicle->make = $request->make;
        $vehicle->model = $request->model;
        $vehicle->fuelType = $request->fuelType;
        $vehicle->registration = $request->registration;
        $vehicle->clientID = $request->clientID;
        // Add more fields as necessary

        // Handle new photos
        $photosPaths = $vehicle->photos ? json_decode($vehicle->photos, true) : [];

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $file) {
                // Generate a unique name for the file using the current timestamp
                $newName = time() . '_' . $file->getClientOriginalName();

                // Move the file to the public/img directory and rename it
                $file->move(public_path('img'), $newName);

                // Prepare the URL for the saved file to store in the database
                $photosPaths[] = 'img/' . $newName;
            }

            // Store updated photos array in the vehicle
            $vehicle->photos = json_encode($photosPaths);
        }

        $vehicle->save();

        // Return a success response
        return response()->json(['message' => 'Vehicle updated successfully'], 200);
    }
    public function DestroyVehicle(Vehicle $vehicle)
    {
        // Perform authorization checks if needed

        $vehicle->delete();

        // Return a response, such as a JSON object indicating success
        return response()->json(['message' => 'Vehicle deleted successfully']);
    }



}
