<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

class SpreadsheetController extends Controller
{
    public function downloadCSV(){
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $data = CitizenController::showCitizen();

        $y = 0;
        foreach($data as $row){
            $sheet->setCellValue('A'.$y, $row['name']);
            $sheet->setCellValue('B'.$y, $row['age']);
            $sheet->setCellValue('C'.$y, $row['address']);
            $sheet->setCellValue('D'.$y, $row['job']);
            $y += 1;
        }

        $writer = new Csv($spreadsheet);
        $writer->setDelimiter(',');
        $writer->setEnclosure('');

        header('Content-Type: application/csv');
        header('Content-Disposition: attachment;filename=data_penduduk.csv');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');

        exit;
    }

    public function downloadXLSX() {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Assuming CitizenController::showCitizen() returns an array of citizen data
        $data = CitizenController::showCitizen();

        // Write headers to the spreadsheet
        $sheet->setCellValue('A1', 'Name');
        $sheet->setCellValue('B1', 'Age');
        $sheet->setCellValue('C1', 'Address');
        $sheet->setCellValue('D1', 'Job');

        $row = 2;
        foreach ($data as $citizen) {
          $sheet->setCellValue('A' . $row, $citizen['name']);
          $sheet->setCellValue('B' . $row, $citizen['age']);
          $sheet->setCellValue('C' . $row, $citizen['address']);
          $sheet->setCellValue('D' . $row, $citizen['job']);
          $row++;
        }

        $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename=data_penduduk.xlsx');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');

        exit;
      }
}
