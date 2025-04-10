<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services.index');
    }

    public function medicalJobs()
    {
        return view('services.medical_jobs');
    }

    public function physiotherapy()
    {
        return view('services.physiotherapy');
    }

    public function laboratory()
    {
        return view('services.laboratory');
    }

    public function reagents()
    {
        return view('services.reagents');
    }

    public function labEquipment()
    {
        return view('services.lab_equipment');
    }

    public function consumables()
    {
        return view('services.consumables');
    }

    public function equipment()
    {
        return view('services.equipment');
    }

    public function beds()
    {
        return view('services.beds');
    }

    public function machines()
    {
        return view('services.machines');
    }

    public function others()
    {
        return view('services.others');
    }

    public function nonMedical()
    {
        return view('services.non_medical');
    }
}
