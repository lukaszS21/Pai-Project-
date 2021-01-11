<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Project.php';
require_once __DIR__.'/../repository/ProjectRepository.php';
class ProjectC extends AppController
{
    const MAX_FILE_SIZE=1024*1024;
    const SUPORTED_TYPES=["image/png",'image/jpeg'];
    const UPLOAD_DIRECTORY='/../public/uploads/';
    private $message = [];
    private $projectRepository;


    public function __construct()
    {
        parent::__construct();
        $this->projectRepository = new ProjectRepository();
    }
    public function projects()
    {

        $projects = $this->projectRepository->getProjectsByUserId($_COOKIE["id"]);

        $this->render2('projects', ['projects' => $projects]);
    }

    public function addProject()
    {

        if($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])){
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']

            );
            $project=new Project($_POST['name'],$_POST['email'],$_FILES['file']['name'],$_POST['phone'],$_POST['description']);
            $this->projectRepository->addProject($project);
            return $this->render2('projects', ['messages' => $this->message, 'projects' => $this->projectRepository->getProjects()]);
        }

        return $this->render2('addProjects', ['messages' => $this->message]);
    }
    public function search()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->projectRepository->getProjectByName($decoded['search']));
        }
    }

    private function validate(array $file):bool
    {
        if($file['size']>self::MAX_FILE_SIZE){
            $this->message[]="File is too large";
            return false;
        }
        if(isset($file["type"]) && !in_array($file['type'],self::SUPORTED_TYPES)){
            $this->message[]="File type is nnot supported";
            return false;
        }
        return true;
    }
}