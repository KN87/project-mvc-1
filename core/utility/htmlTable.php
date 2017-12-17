<?php

namespace utility;
//namespace MyProject\mvcName;

class htmlTable
{
    public static function genarateTableFromMultiArray($array)
    {

        $tableGen = '<table border="1"cellpadding="15" width="100%" style="word-wrap:break-word;
              table-layout: fixed;">';
        $tableGen .= '<tr>';
        //$tableGen .= '<th><input type="checkbox" id="select_all" /></th>';
        //this grabs the first element of the array so we can extract the field headings for the table
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        //this gets the page being viewed so that the table routes requests to the correct controller
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
            $tableGen .= '<th height="30px" style="text-transform: uppercase;text-align: center" >' . $heading . '</th>';
        }
        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr height="25px" style="text-align: center">';
            //$tableGen .= '<td><input type="checkbox" class="checkbox" name="select[]" value="1" /></td>';
            foreach ($record as $key => $value) {
                //$tableGen .= '<td><input type="checkbox" class="checkbox" name="select[]" value=/></td>';
                if ($key == 'id') {
                    $tableGen .= '<td style="padding: 5px 5px 5px 5px"><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a></td>';
                    /*$tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">
                                    <input type="checkbox" name="select[]" value="'. $value .'" id="select">
                                    <label for="select">View</label>
                                    </a></td>'; */
                } else {
                    $tableGen .= '<td>' . $value . '</td>';
                }
            }
            $tableGen .= '</tr>';
        }

        $tableGen .= '</table>';

        return $tableGen;
    }

    public static function generateTableFromOneRecord($innerArray)
    {
        $tableGen = '<table border="1" cellpadding="10"><tr>';

        $tableGen .= '<tr>';
        foreach ($innerArray as $innerRow => $value) {
            $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '</tr>';

        foreach ($innerArray as $value) {
            $tableGen .= '<td>' . $value . '</td>';
        }

        $tableGen .= '</tr></table><hr>';
        return $tableGen;
    }
}

?>