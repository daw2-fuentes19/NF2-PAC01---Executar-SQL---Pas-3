<?php
//require("abstract.databoundobject.php");
class Department extends DataBoundObject {


        protected $DeptName;
        protected $DeptDescription;
      
        protected function DefineTableName() {
                return("department");
                
        }
     
        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "dept_name" => "DeptName",
                        "dept_description" => "DeptDescription"));
                
        }
}

?>