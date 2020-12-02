<?php
namespace App\Table;
use App\Model\File;
use App\Model\Post;
use App\PaginatedQuery;


final class FileTable extends Table {

    protected $table = "files";
    protected $class = File::class;

    public function updateFile (File $file): void
    {
        $this->update([
            'name' => $file->getName(),
            'slug' => $file->getSlug(),
            'url' => $file->getUrl(),
            'created_at' => $file->getCreatedAt()->format('Y-m-d H:i:s')
        ], $file->getID());

    }


    public function createFile (File $file): void
    {
        $id = $this->create([
            'name' => $file->getName(),
            'slug' => $file->getSlug(),
            'url' => $file->getUrl(),
            'created_at' => $file->getCreatedAt()->format('Y-m-d H:i:s')
        ]);
        $file->setID($id);

    }

    public function findPaginated ()
    {
        $paginatedQuery = new PaginatedQuery(
            "SELECT * FROM {$this->table} ORDER BY created_at DESC",
            "SELECT COUNT(id) FROM {$this->table}",
            $this->pdo);
        $posts = $paginatedQuery->getItems(File::class);

        return [$posts, $paginatedQuery];
    }



}