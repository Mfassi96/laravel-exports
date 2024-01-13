<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExportController extends Controller
{

    //

    public function index(){
        $users = User::all(); // Obtén tus datos
        return view('export',compact('users'));
    }

    public function export(){
        $spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Nombre');
$sheet->setCellValue('B1', 'Email');
$sheet->setCellValue('C1', 'Creado');

$users = User::all(); // Obtén tus datos
$row = 2; // Comienza en la segunda fila
foreach ($users as $user) {
    $sheet->setCellValue('A' . $row, $user->name);
    $sheet->setCellValue('B' . $row, $user->email);
    $sheet->setCellValue('C' . $row, $user->created_at);
    $row++;
}

$writer = new Xlsx($spreadsheet);
$writer->save(public_path('users.xlsx'));

return response()->download(public_path('users.xlsx'));

    }

}
?>
