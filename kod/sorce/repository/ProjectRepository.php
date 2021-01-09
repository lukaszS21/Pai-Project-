<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Project.php';

class ProjectRepository extends Repository
{

    public function getProject(int $id): ?Project
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.projects WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $project = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($project == false) {
            return null;
        }

        return new Project(
            $project['name'],
            $project['email'],
            $project['image'],
            $project['phone'],
            $project['description']

        );
    }

    public function addProject(Project $project): void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO projects (name,email,created_at, id_assigned_by, image,phone,description)
            VALUES (?, ?, ?, ?, ?,?,?)
        ');

        $assignedById = $_COOKIE["id"];

        $stmt->execute([
            $project->getName(),
            $project->getEmail(),
            $date->format('Y-m-d'),
            $assignedById,
            $project->getImage(),
            $project->getPhone(),
            $project->getDescription()
        ]);
    }
    public function getProjects(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM projects WHERE id_assigned_by=?;
        ');
        $stmt->execute([$_COOKIE["id"]]);
        $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($projects as $project) {
            $result[] = new Project(
                $project['name'],
                $project['email'],
                $project['image'],
                $project['phone'],
                $project['description']
            );
        }

        return $result;
    }


    public function getProjectsByUserId(int $id): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM projects WHERE id_assigned_by=?;
        ');
        echo "Tutaj".$id;
        $stmt->execute([$id]);
        $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($projects as $project) {
            $result[] = new Project(
                $project['name'],
                $project['email'],
                $project['image'],
                $project['phone'],
                $project['description']
            );
        }

        return $result;
    }
    public function getProjectByName(string $searchString)
    {
        $searchString = '%' . strtolower($searchString) . '%';

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM projects WHERE LOWER(name) LIKE :search OR LOWER(email) LIKE :search OR LOWER(phone) LIKE :search 
        ');
        $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}