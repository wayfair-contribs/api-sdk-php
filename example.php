<?php 
    include_once 'lib/SmartlingAPI.php';
        
    $fileUri = 'testing.xml';    
    $fileType = 'xml';
    $newFileUri = 'newfile.xml'; 
    $fileName = 'translated.xml';
    $translationState = 'PUBLISHED';
    $key = "";
    $projectId = "";
    $locale = 'ru-RU';
    
    //init api object
    $api = new SmartlingAPI($key, $projectId);    
        
    $params = array(        
        'approved' => true,
    );
     
    //try to upload file
    $result = $api->uploadFile('./test.xml', $fileType, $fileUri, $params);
    var_dump($result);
    echo "<br />This is a upload file<br />";    
    
     
    //try to download file
    $result = $api->downloadFile($fileUri, $locale);
    var_dump($result);
     echo "<br />This is a download file<br />";
     
    //try to retrieve file status
    $result = $api->getStatus($fileUri, $locale);
    var_dump($result);
     echo "<br />This is a get status<br />";
     
    //try get files list
    $result = $api->getList($locale);
    var_dump($result);
    echo "<br />This is a get list<br />";
    
    //try to rename file
    $result = $api->renameFile($fileUri, $newFileUri);
    var_dump($result);
    echo "<br />This is a rename file<br />";   
   
    //try to delete file
    $result = $api->deleteFile($newFileUri);
    var_dump($result);
    echo "<br />This is delete file<br />";