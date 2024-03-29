<?php

require_once "databaseManager.php";

class User extends  DatabaseManager {

    protected $tableName = "userTable";

    // function to add users
    public function add($data) {
        if (!empty($data)) {
            $fields = $placeholders = [];
            foreach ($data as $field => $value) {
                $fields[] = $field;
                $placeholders[] = ":{$field}";
            }
        }

        $sql = "INSERT INTO {$this->tableName} (" . implode(',', $fields) . ") 
                VALUES (" . implode(',', $placeholders) . ")";
        $stmt = $this->conn->prepare($sql);

        try {
            $this->conn->beginTransaction();
            $stmt->execute($data);
            $lastInsertId = $this->conn->lastInsertId();
            $this->conn->commit();
            return $lastInsertId;

        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
            $this->conn->rollBack();
        }
    }



    //function to get rows
      public function  getRows($start=0, $limit=4){
            $sql = "SELECT * FROM {$this->tableName} ORDER BY DESC LIMIT {$start}, {$limit}";
            $stmt= $this->conn->prepare($sql);
            $stmt->execute();
            if($stmt->rowCount()>0) {
                $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
            }else{
                $results=[];
            }
            return $results;
    }

    //function to get single row
        public function  getRow($field, $value)
        {
            $sql = "SELECT * FROM {$this->tableName} WHERE {$field}=:{$field}";
            $stmt= $this->conn->prepare($sql);
            $stmt->bindParam(":{$field}", $value); // Bind the parameter
            $stmt->execute();
            if($stmt->rowCount()>0) {
                $result=$stmt->fetch(PDO::FETCH_ASSOC);
            }else{
                $result=[];
            }
            return $result;
        }


    //function to count number of rows
    public function getCount()
        {
            $sql = "SELECT count(*) as pcount FROM {$this->tableName}";
            $stmt= $this->conn->prepare($sql);
            $stmt->execute();
            $result=$stmt->fetch(PDO::FETCH_ASSOC);

            return $result['pcount'];
        }

    //function to update photo
    public function uploadPhoto($file)
    {
        if (!empty($file)) {
            $fileTempPath = $file['tmp_name'];
            $fileName = $file['name'];
            $fileType = $file['type'];
            $fileNameCmps = explode('.', $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $allowedExtensions = ["png", "jpg", "jpeg"];

            if (in_array($fileExtension, $allowedExtensions)) {
                $uploadFileDir = getcwd() . '/uploads/';
                $destFilePath = $uploadFileDir . $newFileName;
                if (move_uploaded_file($fileTempPath, $destFilePath)) {
                    return $newFileName;
                } else {
                    echo "Error: Failed to move uploaded file.";
                }
            } else {
                echo "Error: Invalid file extension.";
            }
        } else {
            echo "Error: No file uploaded.";
        }

        // Return null if any error occurred
        return null;
    }



    //function to update




    //function to delete


    //Function for search


}