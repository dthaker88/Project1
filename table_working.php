
<?php



        echo "<html><body><table>\n\n";
        $file_read = fopen("uploads/csv_sample_1.csv", "r");

        
        while (($f_text = fgetcsv($file_read)) !== false) {

            foreach ($f_text as $cell) {

                echo "<td>" . htmlspecialchars($cell) . "</td>";
            }
            echo "</tr>\n";
        }
        fclose($file_read);
        echo "\n</table></body></html>";











