<?php
//##############################################################################
//
// This page lists your tables and fields within your database. if you click on
// a database name it will show you all the records for that table. 
// 
// 
// This file is only for class purposes and should never be publicly live
//##############################################################################
include "top.php";
//now print out each record
{
    $columns = 1;
    $query = 'select distinct fldCourseName from tblCourses join tblEnrolls on pmkCourseId = fnkCourseId where fldGrade = 100 order by fldCourseName' ;
    $info2 = $thisDatabaseReader->select($query, "", 1, 1, 0, 0, false, false);
    $highlight = 0; // used to highlight alternate rows
    print $query;
    print "<table>";
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }
    print "</table>";
    // all done
    print '</table>';
    print '</aside>';
}
print '</article>';
include "footer.php";
?>