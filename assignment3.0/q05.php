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
$columns = 3;
    //now print out each record
    $query = 'SELECT fldFirstName, fldLastName, SUM(fldNumStudents) as total FROM tblTeachers, tblSections, tblCourses WHERE tblTeachers.pmkNetId = tblSections.fnkTeacherNetId AND tblCourses.pmkCourseId = tblSections.fnkCourseId AND tblCourses.fldDepartment = "CS" GROUP BY tblTeachers.fldLastName ORDER BY total desc';
//    $results = $thisDatabaseReader->testQuery($query, "", 1, 3, 2, 0, false, false);
    $results = $thisDatabaseReader->select($query, "", 1, 3, 2, 0, false, false);
    
    print 'SELECT fldFirstName, fldLastName, SUM(fldNumStudents) as total FROM tblTeachers, tblSections, tblCourses WHERE tblTeachers.pmkNetId = tblSections.fnkTeacherNetId AND tblCourses.pmkCourseId = tblSections.fnkCourseId AND tblCourses.fldDepartment = "CS" GROUP BY tblTeachers.fldLastName ORDER BY total desc;';
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