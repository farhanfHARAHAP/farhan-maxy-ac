<?php
require '../vendor/autoload.php';
include 'connectDB.php';

// Create a new Spreadsheet object
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

// Set the active worksheet
$sheet = $spreadsheet->getActiveSheet();

// Set column headers
$sheet->setCellValue('B1', 'Name');
$sheet->setCellValue('C1', 'Age');
$sheet->setCellValue('D1', 'Address');
$sheet->setCellValue('E1', 'Job');

// SQL query to fetch data from the table
$sql = "SELECT * FROM day28_citizens";
$result = mysqli_query($conn, $sql);

// Write data to the spreadsheet
$rowCount = 2;
while ($row = mysqli_fetch_assoc($result)) {
  $sheet->setCellValue('B' . $rowCount, $row['name']);
  $sheet->setCellValue('C' . $rowCount, $row['age']);
  $sheet->setCellValue('D' . $rowCount, $row['address']);
  $sheet->setCellValue('E' . $rowCount, $row['job']);
  $rowCount++;
}

// Create a CSV writer
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet);

// Configure headers (optional)
$writer->setDelimiter(',');
$writer->setEnclosure('');

// Set headers to force download
header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename=day28_citizens.csv');
header('Cache-Control: max-age=0');

// Write the CSV file to the browser
$writer->save('php://output');

$conn->close();