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
$columns = 2;
    //now print out each record
    $query = 'SELECT DISTINCT fldDays, fldStart FROM tblSections JOIN tblTeachers ON tblTeachers.pmkNetId = tblSections.fnkTeacherNetId JOIN tblCourses ON tblCourses.pmkCourseId = tblSections.fnkCourseId WHERE tblTeachers.fldLastName = "Snapp" ORDER BY fldStart';
    
//    $results = $thisDatabaseReader->testQuery($query, "", 1, 1, 2, 0, false, false);
    $results = $thisDatabaseReader->select($query, "", 1, 1, 2, 0, false, false);
    
    print 'SELECT DISTINCT fldDays, fldStart FROM tblSections JOIN tblTeachers ON tblTeachers.pmkNetId = tblSections.fnkTeacherNetId JOIN tblCourses ON tblCourses.pmkCourseId = tblSections.fnkCourseId WHERE tblTeachers.fldLastName = "Snapp" ORDER BY fldStart;';
    print '<table>';
    foreach ($results as $rec) {
        
        print '<tr>';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }
    // all done
    print '</table>';
    print '</aside>';
print '</article>';
include "footer.php";
?>