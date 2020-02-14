<?php
//require("abstract.databoundobject.php");
class Employee extends DataBoundObject {

       

        protected $EmployeeID;
        protected $EmpName;
        protected $DesignationID;
        protected $DepartmentID;
        protected $StaffType;

       
       
        protected function DefineTableName() {
                return("employee");
                
        }
     
          protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "employee_id" => "EmployeeID",
                        "emp_name" => "EmpName",
                        "designation_id" => "DesignationID",
                        "department_id" => "DepartmentID",
                        "staff_type" => "StaffType"));

        }
       
}

?>