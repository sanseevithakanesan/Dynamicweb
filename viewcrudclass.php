<?php
class dbcon{
    private $host = "localhost";
    private $username ="root";
    private $password ="";
    private $dbName ="learn";

    protected function dbconnect() {
        $dsn = 'mysql:host=' . $this -> host . ';dbname=' . $this -> dbName;
        $pdo = new PDO($dsn, $this -> username, $this -> password);
        $pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

}

class Dbaction extends dbcon{
    public function getAlldata(){

        $sql = "SELECT * FROM teacher";

        $result = $this -> dbconnect() -> query($sql);
        
        echo " <div class='col-md-9'>
                <table class='table table-striped table-hover table-responsive'>
                

                <tr> 
                    <th>No</th>
                    <th>Teacher Name</th>
                    <th>Subject Name</th>
                    <th>Hours</th>
                    <th>Delete</th>
                    <th>Update</th>
                    
                </tr>

        ";

        while($row = $result ->fetch()){
            $id=$row['id'];

            echo "
            <tr>
                <td>" . $row['id'] . " </td>
                <td>" . $row['teachername'] . " </td>
                <td>" . $row['subjectname'] . " </td>
                <td>" . $row['hourss'] . " </td>
                <td><a class='btn btn-danger' href='viewteachersdetails.php?id=".$id."' role='button'><i class=' fa fa-trash-alt'></i></a> </td>
                <td><a class='btn btn-default' href='teachers.php?id=".$id."' role='button'><i class=' fa fa-edit'></i></a> </td>
                  
               
            </tr>


        ";
    }
echo "</div></table>";



}

public function deleteData($id){

    $sql="DELETE  FROM teacher WHERE id = ?";

    $stmt = $this -> dbconnect() -> prepare($sql);

    $stmt -> execute([$id]);

}

public function searchUser($Name) {

    $sql = "SELECT * FROM teacher WHERE teachername = ? ";

    $stmt = $this -> dbconnect() -> prepare($sql);

    $stmt -> execute([$Name]);

    $getusers = $stmt -> fetchAll();

    echo " <div class='col-md-9'>
    <table class='table table-striped table-hover table-responsive'>
    

    <tr> 
        <th>No</th>
        <th>Teacher Name</th>
        <th>Subject Name</th>
        <th>Hours</th>
        <th>Delete</th>
        <th>Update</th>
        
    </tr>

";

    foreach ($getusers as $row) {
        $id=$row['id'];
        
        echo "
        <td>" . $row['id'] . " </td>
        <td>" . $row['teachername'] . " </td>
        <td>" . $row['subjectname'] . " </td>
        <td>" . $row['hourss'] . " </td>
        <td><a class='btn btn-danger' href='viewteachersdetails.php?id=".$id."' role='button'><i class=' fa fa-trash-alt'></i></a> </td>
        <td><a class='btn btn-default' href='teachers.php?id=".$id."' role='button'><i class=' fa fa-edit'></i></a> </td>
          
       
        ";

    }


    echo "</table>";

}

//----------------------------------------------------------------------------------students

public function viewstudent(){

    $sql = "SELECT * FROM students";

    $result = $this -> dbconnect() -> query($sql);
    
    echo " <div class='col-md-9'>
            <table class='table table-striped table-hover table-responsive'>
            

            <tr> 
                <th>No</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Subjectname</th>
                <th>Delete</th>
                <th>Update</th>
                
            </tr>

    ";

    while($row = $result ->fetch()){
        $id=$row['id'];

        echo "
        <tr>
            <td>" . $row['id'] . " </td>
            <td>" . $row['firstname'] . " </td>
            <td>" . $row['lastname'] . " </td>
            <td>" . $row['subjectname'] . " </td>
            <td><a class='btn btn-danger' href='viewstudentdetails.php?id=".$id."' role='button'><i class=' fa fa-trash-alt'></i></a> </td>
            <td><a class='btn btn-default' href='addstudent.php?id=".$id."' role='button'><i class=' fa fa-edit'></i></a> </td>
              
           
        </tr>


    ";
}
echo "</div></table>";




}



public function deletestudents($id){

    $sql = "DELETE FROM students WHERE id =?";

    $stmt = $this ->dbconnect()->prepare($sql);

    $stmt -> execute([$id]);
}



public function searchstudent($pro) {

    $sql = "SELECT * FROM students WHERE firstname = ? ";

    $stmt = $this -> dbconnect() -> prepare($sql);

    $stmt -> execute([$pro]);

    $getusers = $stmt -> fetchAll();

    echo "<div class='col-md-9'>
            <table class='table table-striped table-hover table-responsive'>
            <tr> 
            <th>No</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Subjectname</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>

";        

    foreach ($getusers as $row) {
        $id=$row['id'];
        
        echo "
            <tr>
            <td>" . $row['id'] . " </td>
            <td>" . $row['firstname'] . " </td>
            <td>" . $row['lastname'] . " </td>
            <td>" . $row['subjectname'] . " </td>
            <td><a class='btn btn-danger' href='viewstudentdetails.php?id=".$id."' role='button'><i class=' fa fa-trash-alt'></i></a> </td>
            <td><a class='btn btn-default' href='addstudent.php?id=".$id."' role='button'><i class=' fa fa-edit'></i></a> </td>
            </tr>
        ";

    }


    echo "</table>";

}
//--------------------------------------------------------------------------------books
public function booksdata(){

    $sql = "SELECT * FROM books";

    $result = $this -> dbconnect() -> query($sql);
    
    echo " <div class='col-md-9'>
            <table class='table table-striped table-hover table-responsive'>
            

            <tr> 
                <th>No</th>
                <th>Bookid</th>
                <th>BookName</th>
                <th>BookAuthor</th>
                <th>Delete</th>
                <th>Update</th>
     
                
            </tr>

    ";

    while($row = $result ->fetch()){
        $id=$row['id'];

        echo "
        <tr>
            <td>" . $row['id'] ." </td>
            <td>" . $row['bookid'] ." </td>
            <td>" . $row['bookname'] ." </td>
            <td>" . $row['bookauthor'] ." </td>
  
            <td><a class='btn btn-danger' href='viewbookdetails.php?id=".$id."' role='button'><i class=' fa fa-trash-alt'></i></a> </td>
            <td><a class='btn btn-default' href='Books.php?id=".$id."' role='button'><i class=' fa fa-edit'></i></a> </td>
              
           
        </tr>


    ";
}
echo "</div></table>";



}
public function bookdeleteData($id){

    $sql="DELETE  FROM books WHERE id = ?";

    $stmt = $this -> dbconnect() -> prepare($sql);

    $stmt -> execute([$id]);

}

public function searchbookdata($pro) {

    $sql = "SELECT * FROM  books WHERE bookid = ? ";

    $stmt = $this -> dbconnect() -> prepare($sql);

    $stmt -> execute([$pro]);

    $getusers = $stmt -> fetchAll();

    echo "<div class='col-md-9'>
            <table class='table table-striped table-hover table-responsive'>
            <tr> 
              
            <th>No</th>
            <th>Bookid</th>
            <th>BookName</th>
            <th>BookAuthor</th>
            <th>Delete</th>
            <th>Update</th>
 
            
        </tr>

";        

    foreach ($getusers as $row) {
        $id=$row['id'];
        
        echo "
            <tr>
            <td>" . $row['id'] ." </td>
            <td>" . $row['bookid'] ." </td>
            <td>" . $row['bookname'] ." </td>
            <td>" . $row['bookauthor'] ." </td>
  
            <td><a class='btn btn-success' href='viewbookdetails.php?id=".$id."' role='button'><i class=' fa fa-trash-alt'></i></a> </td>
            <td><a class='btn btn-success' href='Books.php?id=".$id."' role='button'><i class=' fa fa-edit'></i></a> </td>
            </tr>
        ";

    }


    echo "</table>";

}

      
}

?>