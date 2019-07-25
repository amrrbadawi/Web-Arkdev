<?php

require_once(__DIR__ . '/../Lib/DBConnection.php');
require_once(__DIR__ . '/../Models/Instructor.php');
class InstructorRepository
{

    public function createInstructor($data): bool
    {
        $success = false;
        try {
            $db = DBConnection::connect();
            $stmt = $db->prepare("INSERT INTO instructor (name, email, bio ,image_path) VALUES (:Insname,:email,:bio,:image_path)");
            $stmt->bindValue(':Insname',$data['name']);
            $stmt->bindValue(':email',$data['email']);
            $stmt->bindValue(':bio',$data['bio']);
            $stmt->bindValue(':image_path',"linknotinserted");
            $success = $stmt->execute();
        }
        catch (PDOException $e){
            echo $e->getMessage();
            exit();
        }
        return $success;
    }

    public function updateInstructor( $data ): bool
    {
        $success = false;
        try {
            $db = DBConnection::connect();
            $stmt = $db->prepare("UPDATE  instructor set name=:name, email=:email, image_path=:image_path, bio=:bio where id = :id");
            $stmt->bindValue(':name', $data->getName());
            $stmt->bindValue(':email', $data->getEmail());
            $stmt->bindValue(':image_path', $data->getImagePath());
            $stmt->bindValue(':id', $data-> getInstructorId());
            $stmt->bindValue(':bio', $data->getBio());
            $success = $stmt->fetch();
        }
        catch (PDOException $e){
            echo $e->getMessage();
            exit();
        }
        return $success;
    }

    public function deleteById($id): bool
    {
        $success = false;
        try{
            $db = DBConnection::connect();
            $stmt = $db->prepare("DELETE FROM this->table WHERE id = :id");
            $success = $stmt->execute();
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
        return $success;
    }








}