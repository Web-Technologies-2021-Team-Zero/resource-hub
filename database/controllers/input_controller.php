<?php

    include_once (dirname(__FILE__)).'../../classes/input_class.php';

    function upload($filename, $uploaded_by, $course, $temp_file) {
        
        $request = new ResourceHub;
        $runQuery = $request->upload($filename, $uploaded_by, $course, $temp_file);
        
        if($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function getByCourse($course) {
        $request = new ResourceHub; 
        $runQuery = $request->getByCourse($course); 
        if ($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function updateFile($id, $filename, $file) {
        $request = new ResourceHub; 
        $runQuery = $request->updateFile($id, $filename, $file);
        if($runQuery) {
            return $runQuery;
        } else {
            return false;
        }
    }

    function deleteFile($id) {
        $request = new ResourceHub;
        $runQuery = $request->deleteFile($id, $filename, $file); 
        if ($runQuery) {
            return $runQuery; 
        } else {
            return false; 
        }
    }

    function getUser($email) {
        $request = new ResourceHub;
        $runQuery = $request->getUser($email); 
        if ($runQuery) {
            return $runQuery; 
        } else {
            return false; 
        }
    }

    function getMyFiles($username) {
        $request = new ResourceHub; 
        $runQuery = $request->getMyFiles($username); 
        if($runQuery) {
            return $runQuery; 
        } else {
            return false; 
        }
    }

    function getLocation($id) {
        $request = new ResourceHub; 
        $runQuery = $request->getLocation($id); 
        if($runQuery) {
            return $runQuery; 
        } else {
            return false; 
        }
    }

    function getName($id) {
        $request = new ResourceHub; 
        $runQuery = $request->getName($id); 
        if($runQuery) {
            return $runQuery; 
        } else {
            return false; 
        }
    }
?>