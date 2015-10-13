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
    $query = 'SELECT fldCRN, fldFirstName, fldLastName, fldCourseName FROM tblStudents JOIN tblEnrolls ON tblEnrolls.fnkStudentId = tblStudents.pmkStudentId JOIN tblSections ON tblSections.fnkCourseId = tblEnrolls.fnkCourseId JOIN tblCourses ON tblCourses.pmkCourseId = tblSections.fnkCourseId WHERE tblCourses.fldCourseName = "Database Design for the Web" AND tblCourses.fldCourseNumber = "148" AND tblCourses.fldDepartment = "CS" GROUP BY fldFirstName, fldLastName ORDER BY fldCRN, fldLastName, fldFirstName';
//    $results = $thisDatabaseReader->testQuery($query, "", 1, 3, 6, 0, false, false);
    $results = $thisDatabaseReader->select($query, "", 1, 3, 6, 0, false, false);
    
    print 'SELECT fldCRN, fldFirstName, fldLastName, fldCourseName FROM tblStudents JOIN tblEnrolls ON tblEnrolls.fnkStudentId = tblStudents.pmkStudentId JOIN tblSections ON tblSections.fnkCourseId = tblEnrolls.fnkCourseId JOIN tblCourses ON tblCourses.pmkCourseId = tblSections.fnkCourseId WHERE tblCourses.fldCourseName = "Database Design for the Web" AND tblCourses.fldCourseNumber = "148" AND tblCourses.fldDepartment = "CS" GROUP BY fldFirstName, fldLastName ORDER BY fldCRN, fldLastName, fldFirstName;';
    
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