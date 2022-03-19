<?php

namespace galib\ArrayService;

use ArrayObject;

// ArrayService class inherits ArrayObject
class ArrayService extends ArrayObject {

    public $key;
    public $data;
    public $tableData;

    public function __construct(
        $key,
        $data
    ) {
        $this->key = $key;
        $this->data = $data;
        $this->tableData = "";
    }

    public function keyMapping($key, $param, $value = null)
    {
        $rowItems = "";
        foreach ($key as $item) {

            if ($param == "th") {
                $item = ucfirst($item);
            } else {
                $item = $value[$item] ;
            }
            $rowItems .= '<'. $param . '>' . $item . '</'. $param . '>';
        }

        return $rowItems;
    }

    public function displayAsTable() {
        $bigTable = "";

        $tableHead = "<thead>";
        $tableHead .= "<tr>";
        $tableHead .= $this->keyMapping($this->key, "th");
        $tableHead .= "</tr>";
        $tableHead .= "</thead>";
        $bigTable .= $tableHead;

        $tableBody = "<tbody>";

        foreach ($this->data as $datum) {
            $tableItems = '<tr>';
            $tableItems .= $this->keyMapping($this->key, "td", $datum);
            $tableItems .= '</tr>';
            $this->tableData .= $tableItems;
        }
        $tableBody = $tableBody . $this->tableData . "</tbody>";
        $bigTable .= $tableBody;

        return $bigTable;
    }


}


?>