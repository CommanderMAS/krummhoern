<?php


namespace App\Http\Controllers;


use App\Models\User_Changes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class ExportController
{

    public function view() {
        return view('admin.export');
    }

    public function export() {
        if (Auth::user()->get_right()->name==='Admin'){
            $userChanges = User_Changes::all();
            $exportFields = explode(";", 'Mitglied-Nr;Name2;Name1;Strasse;PLZ;Ort;Email;Einzug;Bankname;BLZ;Konto;IBAN;BIC;Kontoinhaber;Eingabe_Datum;Verband;Sonstiges');
            $exportData = [];
            foreach ($userChanges as $userChange) {
                $exportData[$userChange->hebenummer] = $userChange->toarray();
            }

            $headers = array(
                'Content-Type' => 'text/csv',
                'Content-Disposition' => 'attachment; filename="test.csv"',
            );

            // our response, this will be equivalent to your download() but
            // without using a local file
            $callback = function () use ($exportData, $exportFields) {
                $file = fopen('php://output', 'w');
                fputcsv($file, $exportFields, ';');

                foreach ($exportData as $task) {
                    $row['Mitglied-nr'] = $task['hebenummer'];
                    $row['Name2'] = Crypt::decrypt($task['nachname']);
                    $row['Name1'] = Crypt::decrypt($task['vorname']);
                    $row['Strasse'] = utf8_decode(Crypt::decrypt($task['strasse']));
                    $row['PLZ'] = Crypt::decrypt($task['plz']);
                    $row['Ort'] = Crypt::decrypt($task['ort']);
                    $row['Email'] = Crypt::decrypt($task['email']);
                    $row['Einzug'] = Crypt::decrypt($task['einzug']);
                    $row['Bankname'] = '';
                    $row['BLZ'] = '';
                    $row['Konto'] = '';
                    $row['Iban'] = Crypt::decrypt($task['iban']);
                    $row['BIC'] = '';
                    $row['Kontoinhaber'] = Crypt::decrypt($task['kontoinhaber']);
                    $row['Eingabe_Datum'] = date_create($task['created_at'])->format('d.m.Y');
                    $row['Verband'] = '';
                    $row['Sonstiges'] = Crypt::decrypt($task['sonstiges']);

                    fputcsv($file, $row, ';');
                }

                fclose($file);
            };

            return response()->stream($callback, 200, $headers);

        }

        return view('admin.export');
    }
}
