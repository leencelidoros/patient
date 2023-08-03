<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\PatientRegistrationMail;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Import the base controller class

class PatientController extends Controller
{
    public function showRegistrationForm()
    {
        return view('patient.register');
    }

    public function register(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'telephone' => ['required', 'string'],
            'name' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date'],
            'id_number' => ['required', 'string', 'max:20'],
            'address' => ['required', 'string', 'max:255'],
            'county' => ['required', 'string', 'max:255'],
            'sub_county' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'gender' => ['required', 'in:male,female,other'],
            'marital_status' => ['required', 'in:single,married,divorced,widowed'],
            'next_of_kin_name' => ['required', 'string', 'max:255'],
            'next_of_kin_date_of_birth' => ['required', 'date'],
            'next_of_kin_id_number' => ['required', 'string', 'max:20'],
            'next_of_kin_gender' => ['required', 'in:male,female,other'],
            'next_of_kin_relationship' => ['required', 'string', 'max:255'],
            'next_of_kin_telephone' => ['required', 'string'],
        ]);
    
        // Save patient details to the database
        $patient = Patient::create($validatedData);
    
        // Send email to the patient with reference number
        Mail::to($validatedData['email'])->send(new PatientRegistrationMail($patient->id));
    
        // You can redirect back to the form or a success page
        return redirect()->back()->with('success', 'Patient registered successfully!');
    }
    
    
    
    
    
    
}

